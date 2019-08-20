<?php
header("Content-type: text/xml");
require '../vendor/autoload.php';

use NotaFiscalSP\Constants\Requests\SimpleFieldsConstants;
use NotaFiscalSP\NotaFiscal;
use NotaFiscalSP\Constants\Params;

/* *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *
 *  Para esse Exemplo funcionar é necessário um certificado válido (*.pfx ou *.pem)                *
 *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  * */
$nf = new NotaFiscal([
    Params::CNPJ => '00000000000000',
    Params::IM => 'xxxx',
    Params::CERTIFICATE_PATH => 'certificate.pfx',
    Params::CERTIFICATE_PASS => '000000'
]);

echo  $nf->cancelNf([
    [SimpleFieldsConstants::NFE_NUMBER => 235 ],
    [SimpleFieldsConstants::NFE_NUMBER => 238 ],
])->getXmlOutput();
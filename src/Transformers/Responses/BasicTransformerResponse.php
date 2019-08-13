<?php
namespace NotaFiscalSP\Transformers\Responses;

use NotaFiscalSP\Helpers\General;
use NotaFiscalSP\Helpers\Xml;
use NotaFiscalSP\Responses\BasicResponse;

class BasicTransformerResponse extends AbstractResponse {

    public function __construct()
    {
        $this->response = new BasicResponse();
    }

    public function transform($input, $output){
        $this->response->setXmlInput($input);
        $this->response->setXmlOutput($output);

        $arrayResponse = Xml::toArray($output);
        $this->response->setResponse($arrayResponse);
        $this->response->setSuccess($this->checkSuccess($arrayResponse));
        return($this->response);
    }

}

<?php
namespace Aliyun\Log\Models\Response;

class UpdateShipperResponse extends \Aliyun\Log\Models\Response\Response {

    /**
     * Aliyun_Log_Models_UpdateShipperResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
}

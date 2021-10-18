<?php
namespace Aliyun\Log\Models\Response;

/**
 * The response of the CreateSqlInstance API from log service.
 *
 * @author log service dev
 */
class CreateSqlInstanceResponse extends \Aliyun\Log\Models\Response\Response {
    
    /**
     * Aliyun_Log_Models_CreateSqlInstanceResponse constructor
     *
     * @param array $resp
     *            CreateSqlInstance HTTP response body
     * @param array $header
     *            CreateSqlInstance HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
    
}

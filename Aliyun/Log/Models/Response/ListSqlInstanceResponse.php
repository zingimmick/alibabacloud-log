<?php
namespace Aliyun\Log\Models\Response;

/**
 * The response of the ListSqlInstance API from log service.
 *
 * @author log service dev
 */
class ListSqlInstanceResponse extends \Aliyun\Log\Models\Response\Response {

    private $sqlInstances;
    /**
     * Aliyun_Log_Models_ListSqlInstanceResponse constructor
     *
     * @param array $resp
     *            ListSqlInstance HTTP response body
     * @param array $header
     *            ListSqlInstance HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
        $arr = $resp;
        if($arr != null)
        {
            foreach($arr as $data)
            {
                $name = $data["name"];
                $cu = $data["cu"];
                $createTime = $data["createTime"];
                $updateTime = $data["updateTime"];
                $this -> sqlInstances [] = new \Aliyun\Log\Models\SqlInstance($name,$cu,$createTime,$updateTime);
            }
        }
    }

}

<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(RenameClassRector::class)
        ->call('configure', [[
            RenameClassRector::OLD_TO_NEW_CLASSES => [
                'Exception' => 'Exception',
                'OutOfBoundsException' => 'OutOfBoundsException',
                'Aliyun_Log_Exception' => 'Aliyun_Log_Exception',
                'Aliyun_Log_Models_LogLevel_LogLevel' => 'Aliyun_Log_Models_LogLevel_LogLevel',
                'RequestCore' => 'Aliyun_Log_RequestCore',
                'ResponseCore' => 'Aliyun_Log_ResponseCore',
                'Log_Content' => 'Aliyun_Log_LogContent',
                'Log' => 'Aliyun_Log_Log',
                'LogGroup' => 'Aliyun_Log_LogGroup',
                'LogPackage' => 'Aliyun_Log_LogPackage',
                'LogPackageList' => 'Aliyun_Log_LogPackageList',
                'Aliyun_Log_Models_OssShipperJsonStorage' => 'Aliyun_Log_Models_OssShipperJsonStorage',
                'Aliyun_Log_Models_CompressedLogGroup' => 'Aliyun_Log_Models_CompressedLogGroup',
                'Aliyun_Log_Models_Machine_Info' => 'Aliyun_Log_Models_MachineInfo',
                'Aliyun_Log_Models_Machine_Status' => 'Aliyun_Log_Models_MachineStatus',
                'Aliyun_Log_Models_Machine' => 'Aliyun_Log_Models_Machine',
                'Aliyun_Log_Models_OssShipperCsvStorage' => 'Aliyun_Log_Models_OssShipperCsvStorage',
                'Aliyun_Log_Models_GetMachineGroupResponse' => 'Aliyun_Log_Models_Response_GetMachineGroupResponse',
                'Aliyun_Log_Models_GetConfigResponse' => 'Aliyun_Log_Models_Response_GetConfigResponse',
                'Aliyun_Log_Models_DeleteMachineGroupResponse' => 'Aliyun_Log_Models_Response_DeleteMachineGroupResponse',
                'Aliyun_Log_Models_BatchGetLogsResponse' => 'Aliyun_Log_Models_Response_BatchGetLogsResponse',
                'Aliyun_Log_Models_ListMachineGroupsResponse' => 'Aliyun_Log_Models_Response_ListMachineGroupsResponse',
                'Aliyun_Log_Models_ListLogstoresResponse' => 'Aliyun_Log_Models_Response_ListLogstoresResponse',
                'Aliyun_Log_Models_QueriedLog' => 'Aliyun_Log_Models_Response_QueriedLog',
                'Aliyun_Log_Models_Response' => 'Aliyun_Log_Models_Response_Response',
                'Aliyun_Log_Models_UpdateACLResponse' => 'Aliyun_Log_Models_Response_UpdateACLResponse',
                'Aliyun_Log_Models_ListConfigsResponse' => 'Aliyun_Log_Models_Response_ListConfigsResponse',
                'Aliyun_Log_Models_GetLogsResponse' => 'Aliyun_Log_Models_Response_GetLogsResponse',
                'Aliyun_Log_Models_DeleteConfigResponse' => 'Aliyun_Log_Models_Response_DeleteConfigResponse',
                'Aliyun_Log_Models_ListShardsResponse' => 'Aliyun_Log_Models_Response_ListShardsResponse',
                'Aliyun_Log_Models_UpdateShipperResponse' => 'Aliyun_Log_Models_Response_UpdateShipperResponse',
                'Aliyun_Log_Models_ListShipperResponse' => 'Aliyun_Log_Models_Response_ListShipperResponse',
                'Aliyun_Log_Models_DeleteShardResponse' => 'Aliyun_Log_Models_Response_DeleteShardResponse',
                'Aliyun_Log_Models_RetryShipperTasksResponse' => 'Aliyun_Log_Models_Response_RetryShipperTasksResponse',
                'Aliyun_Log_Models_ListTopicsResponse' => 'Aliyun_Log_Models_Response_ListTopicsResponse',
                'Aliyun_Log_Models_RemoveConfigFromMachineGroupResponse' => 'Aliyun_Log_Models_Response_RemoveConfigFromMachineGroupResponse',
                'Aliyun_Log_Models_DeleteACLResponse' => 'Aliyun_Log_Models_Response_DeleteACLResponse',
                'Aliyun_Log_Models_UpdateConfigResponse' => 'Aliyun_Log_Models_Response_UpdateConfigResponse',
                'Aliyun_Log_Models_CreateACLResponse' => 'Aliyun_Log_Models_Response_CreateACLResponse',
                'Aliyun_Log_Models_GetShipperTasksResponse' => 'Aliyun_Log_Models_Response_GetShipperTasksResponse',
                'Aliyun_Log_Models_PutLogsResponse' => 'Aliyun_Log_Models_Response_PutLogsResponse',
                'Aliyun_Log_Models_ListACLsResponse' => 'Aliyun_Log_Models_Response_ListACLsResponse',
                'Aliyun_Log_Models_GetHistogramsResponse' => 'Aliyun_Log_Models_Response_GetHistogramsResponse',
                'Aliyun_Log_Models_GetCursorResponse' => 'Aliyun_Log_Models_Response_GetCursorResponse',
                'Aliyun_Log_Models_Shard' => 'Aliyun_Log_Models_Response_Shard',
                'Aliyun_Log_Models_GetMachineResponse' => 'Aliyun_Log_Models_Response_GetMachineResponse',
                'Aliyun_Log_Models_UpdateLogstoreResponse' => 'Aliyun_Log_Models_Response_UpdateLogstoreResponse',
                'Aliyun_Log_Models_UpdateMachineGroupResponse' => 'Aliyun_Log_Models_Response_UpdateMachineGroupResponse',
                'Aliyun_Log_Models_DeleteShipperResponse' => 'Aliyun_Log_Models_Response_DeleteShipperResponse',
                'Aliyun_Log_Models_CreateShipperResponse' => 'Aliyun_Log_Models_Response_CreateShipperResponse',
                'Aliyun_Log_Models_CreateMachineGroupResponse' => 'Aliyun_Log_Models_Response_CreateMachineGroupResponse',
                'Aliyun_Log_Models_ApplyConfigToMachineGroupResponse' => 'Aliyun_Log_Models_Response_ApplyConfigToMachineGroupResponse',
                'Aliyun_Log_Models_DeleteLogstoreResponse' => 'Aliyun_Log_Models_Response_DeleteLogstoreResponse',
                'Aliyun_Log_Models_GetACLResponse' => 'Aliyun_Log_Models_Response_GetACLResponse',
                'Aliyun_Log_Models_GetShipperConfigResponse' => 'Aliyun_Log_Models_Response_GetShipperConfigResponse',
                'Aliyun_Log_Models_CreateConfigResponse' => 'Aliyun_Log_Models_Response_CreateConfigResponse',
                'Aliyun_Log_Models_CreateLogstoreResponse' => 'Aliyun_Log_Models_Response_CreateLogstoreResponse',
                'Aliyun_Log_Models_MachineGroup_GroupAttribute' => 'Aliyun_Log_Models_MachineGroupGroupAttribute',
                'Aliyun_Log_Models_MachineGroup' => 'Aliyun_Log_Models_MachineGroup',
                'Aliyun_Log_Models_LogItem' => 'Aliyun_Log_Models_LogItem',
                'Aliyun_Log_Models_OssShipperParquetStorage' => 'Aliyun_Log_Models_OssShipperParquetStorage',
                'Aliyun_Log_Models_OssShipperConfig' => 'Aliyun_Log_Models_OssShipperConfig',
                'Aliyun_Log_Models_Config_InputDetail' => 'Aliyun_Log_Models_ConfigInputDetail',
                'Aliyun_Log_Models_Config_OutputDetail' => 'Aliyun_Log_Models_ConfigOutputDetail',
                'Aliyun_Log_Models_Config' => 'Aliyun_Log_Models_Config',
                'Aliyun_Log_Models_Histogram' => 'Aliyun_Log_Models_Histogram',
                'Aliyun_Log_Models_OssShipperStorage' => 'Aliyun_Log_Models_OssShipperStorage',
                'Aliyun_Log_Models_ACL' => 'Aliyun_Log_Models_ACL',
                'Aliyun_Log_Models_GetLogsRequest' => 'Aliyun_Log_Models_Request_GetLogsRequest',
                'Aliyun_Log_Models_UpdateShipperRequest' => 'Aliyun_Log_Models_Request_UpdateShipperRequest',
                'Aliyun_Log_Models_ListConfigsRequest' => 'Aliyun_Log_Models_Request_ListConfigsRequest',
                'Aliyun_Log_Models_ApplyConfigToMachineGroupRequest' => 'Aliyun_Log_Models_Request_ApplyConfigToMachineGroupRequest',
                'Aliyun_Log_Models_GetMachineGroupRequest' => 'Aliyun_Log_Models_Request_GetMachineGroupRequest',
                'Aliyun_Log_Models_GetCursorRequest' => 'Aliyun_Log_Models_Request_GetCursorRequest',
                'Aliyun_Log_Models_ListACLsRequest' => 'Aliyun_Log_Models_Request_ListACLsRequest',
                'Aliyun_Log_Models_PutLogsRequest' => 'Aliyun_Log_Models_Request_PutLogsRequest',
                'Aliyun_Log_Models_DeleteShipperRequest' => 'Aliyun_Log_Models_Request_DeleteShipperRequest',
                'Aliyun_Log_Models_BatchGetLogsRequest' => 'Aliyun_Log_Models_Request_BatchGetLogsRequest',
                'Aliyun_Log_Models_DeleteACLRequest' => 'Aliyun_Log_Models_Request_DeleteACLRequest',
                'Aliyun_Log_Models_GetMachineRequest' => 'Aliyun_Log_Models_Request_GetMachineRequest',
                'Aliyun_Log_Models_UpdateConfigRequest' => 'Aliyun_Log_Models_Request_UpdateConfigRequest',
                'Aliyun_Log_Models_CreateACLRequest' => 'Aliyun_Log_Models_Request_CreateACLRequest',
                'Aliyun_Log_Models_MergeShardsRequest' => 'Aliyun_Log_Models_Request_MergeShardsRequest',
                'Aliyun_Log_Models_RetryShipperTasksRequest' => 'Aliyun_Log_Models_Request_RetryShipperTasksRequest',
                'Aliyun_Log_Models_ListShipperRequest' => 'Aliyun_Log_Models_Request_ListShipperRequest',
                'Aliyun_Log_Models_GetHistogramsRequest' => 'Aliyun_Log_Models_Request_GetHistogramsRequest',
                'Aliyun_Log_Models_SplitShardRequest' => 'Aliyun_Log_Models_Request_SplitShardRequest',
                'Aliyun_Log_Models_DeleteLogstoreRequest' => 'Aliyun_Log_Models_Request_DeleteLogstoreRequest',
                'Aliyun_Log_Models_GetConfigRequest' => 'Aliyun_Log_Models_Request_GetConfigRequest',
                'Aliyun_Log_Models_CreateConfigRequest' => 'Aliyun_Log_Models_Request_CreateConfigRequest',
                'Aliyun_Log_Models_CreateLogstoreRequest' => 'Aliyun_Log_Models_Request_CreateLogstoreRequest',
                'Aliyun_Log_Models_CreateShipperRequest' => 'Aliyun_Log_Models_Request_CreateShipperRequest',
                'Aliyun_Log_Models_Request' => 'Aliyun_Log_Models_Request_Request',
                'Aliyun_Log_Models_DeleteMachineGroupRequest' => 'Aliyun_Log_Models_Request_DeleteMachineGroupRequest',
                'Aliyun_Log_Models_ListLogstoresRequest' => 'Aliyun_Log_Models_Request_ListLogstoresRequest',
                'Aliyun_Log_Models_GetACLRequest' => 'Aliyun_Log_Models_Request_GetACLRequest',
                'Aliyun_Log_Models_RemoveConfigFromMachineGroupRequest' => 'Aliyun_Log_Models_Request_RemoveConfigFromMachineGroupRequest',
                'Aliyun_Log_Models_UpdateACLRequest' => 'Aliyun_Log_Models_Request_UpdateACLRequest',
                'Aliyun_Log_Models_GetShipperTasksRequest' => 'Aliyun_Log_Models_Request_GetShipperTasksRequest',
                'Aliyun_Log_Models_DeleteConfigRequest' => 'Aliyun_Log_Models_Request_DeleteConfigRequest',
                'Aliyun_Log_Models_UpdateMachineGroupRequest' => 'Aliyun_Log_Models_Request_UpdateMachineGroupRequest',
                'Aliyun_Log_Models_ListTopicsRequest' => 'Aliyun_Log_Models_Request_ListTopicsRequest',
                'Aliyun_Log_Models_CreateMachineGroupRequest' => 'Aliyun_Log_Models_Request_CreateMachineGroupRequest',
                'Aliyun_Log_Models_ListShardsRequest' => 'Aliyun_Log_Models_Request_ListShardsRequest',
                'Aliyun_Log_Models_ListMachineGroupsRequest' => 'Aliyun_Log_Models_Request_ListMachineGroupsRequest',
                'Aliyun_Log_Models_GetShipperConfigRequest' => 'Aliyun_Log_Models_Request_GetShipperConfigRequest',
                'Aliyun_Log_Models_UpdateLogstoreRequest' => 'Aliyun_Log_Models_Request_UpdateLogstoreRequest',
                'Aliyun_Log_Models_GetProjectLogsRequest' => 'Aliyun_Log_Models_Request_GetProjectLogsRequest',
                'Aliyun_Log_Models_DeleteShardRequest' => 'Aliyun_Log_Models_Request_DeleteShardRequest',
                'RequestCore_Exception' => 'Aliyun_Log_RequestCoreException',
                'ProtobufEnum' => 'Aliyun_Log_ProtobufEnum',
                'ProtobufMessage' => 'Aliyun_Log_ProtobufMessage',
                'Protobuf' => 'Aliyun_Log_Protobuf',
                'ProtoBuf' => 'Aliyun_Log_Protobuf',
                'LogGroupList' => 'Aliyun_Log_LogGroupList',
                'Aliyun_Log_Client' => 'Aliyun_Log_Client',
            ]]]);


    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/../Aliyun',
        __DIR__ . '/../sample',
    ]);
};

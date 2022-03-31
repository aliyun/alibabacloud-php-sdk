<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLogicTableRouteConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLogicTableRouteConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecLevelRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecLevelResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeLhDagOwnerRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeLhDagOwnerResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateLakeHouseSpaceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateLakeHouseSpaceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateLogicDatabaseShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyAccessRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyAccessResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLakeHouseSpaceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLakeHouseSpaceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLhMembersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLhMembersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLhMembersShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLogicTableRouteConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteLogicTableRouteConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteProxyAccessRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteProxyAccessResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteProxyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteProxyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EditLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EditLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EditLogicDatabaseShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EnableUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EnableUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteStructSyncRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteStructSyncResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTaskSQLJobLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTaskSQLJobLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\InspectProxyAccessSecretRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\InspectProxyAccessSecretResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxiesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxiesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDataCorrectExecSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDataCorrectExecSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PauseDataCorrectSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PauseDataCorrectSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReDeployLhDagVersionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReDeployLhDagVersionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RestartDataCorrectSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RestartDataCorrectSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RetryDataCorrectPreCheckRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RetryDataCorrectPreCheckResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dmsenterprise extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms-enterprise', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddLhMembersRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return AddLhMembersResponse
     */
    public function addLhMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddLhMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $query['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLhMembers',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLhMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLhMembersRequest $request
     *
     * @return AddLhMembersResponse
     */
    public function addLhMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLhMembersWithOptions($request, $runtime);
    }

    /**
     * @param AddLogicTableRouteConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddLogicTableRouteConfigResponse
     */
    public function addLogicTableRouteConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->routeExpr)) {
            $query['RouteExpr'] = $request->routeExpr;
        }
        if (!Utils::isUnset($request->routeKey)) {
            $query['RouteKey'] = $request->routeKey;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLogicTableRouteConfig',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLogicTableRouteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLogicTableRouteConfigRequest $request
     *
     * @return AddLogicTableRouteConfigResponse
     */
    public function addLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @param ApproveOrderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApproveOrderResponse
     */
    public function approveOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->workflowInstanceId)) {
            $query['WorkflowInstanceId'] = $request->workflowInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveOrderRequest $request
     *
     * @return ApproveOrderResponse
     */
    public function approveOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOrderWithOptions($request, $runtime);
    }

    /**
     * @param ChangeColumnSecLevelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ChangeColumnSecLevelResponse
     */
    public function changeColumnSecLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->isLogic)) {
            $query['IsLogic'] = $request->isLogic;
        }
        if (!Utils::isUnset($request->newLevel)) {
            $query['NewLevel'] = $request->newLevel;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeColumnSecLevel',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeColumnSecLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeColumnSecLevelRequest $request
     *
     * @return ChangeColumnSecLevelResponse
     */
    public function changeColumnSecLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeColumnSecLevelWithOptions($request, $runtime);
    }

    /**
     * @param ChangeLhDagOwnerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChangeLhDagOwnerResponse
     */
    public function changeLhDagOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeLhDagOwner',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeLhDagOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeLhDagOwnerRequest $request
     *
     * @return ChangeLhDagOwnerResponse
     */
    public function changeLhDagOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeLhDagOwnerWithOptions($request, $runtime);
    }

    /**
     * @param CloseOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseOrderResponse
     */
    public function closeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->closeReason)) {
            $query['CloseReason'] = $request->closeReason;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseOrderRequest $request
     *
     * @return CloseOrderResponse
     */
    public function closeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataCorrectOrderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataCorrectOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataCorrectOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataCorrectOrderRequest $request
     *
     * @return CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataCronClearOrderRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCronClearOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataCronClearOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataCronClearOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataCronClearOrderRequest $request
     *
     * @return CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCronClearOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataImportOrderRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataImportOrderResponse
     */
    public function createDataImportOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataImportOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataImportOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataImportOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataImportOrderRequest $request
     *
     * @return CreateDataImportOrderResponse
     */
    public function createDataImportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataImportOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateFreeLockCorrectOrderRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFreeLockCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFreeLockCorrectOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFreeLockCorrectOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFreeLockCorrectOrderRequest $request
     *
     * @return CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFreeLockCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateLakeHouseSpaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateLakeHouseSpaceResponse
     */
    public function createLakeHouseSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->devDbId)) {
            $query['DevDbId'] = $request->devDbId;
        }
        if (!Utils::isUnset($request->dwDbType)) {
            $query['DwDbType'] = $request->dwDbType;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->prodDbId)) {
            $query['ProdDbId'] = $request->prodDbId;
        }
        if (!Utils::isUnset($request->spaceConfig)) {
            $query['SpaceConfig'] = $request->spaceConfig;
        }
        if (!Utils::isUnset($request->spaceName)) {
            $query['SpaceName'] = $request->spaceName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLakeHouseSpace',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLakeHouseSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLakeHouseSpaceRequest $request
     *
     * @return CreateLakeHouseSpaceResponse
     */
    public function createLakeHouseSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLakeHouseSpaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogicDatabaseRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLogicDatabaseResponse
     */
    public function createLogicDatabaseWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLogicDatabaseShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->databaseIds)) {
            $request->databaseIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->databaseIds, 'DatabaseIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alias)) {
            $query['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->databaseIdsShrink)) {
            $query['DatabaseIds'] = $request->databaseIdsShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLogicDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLogicDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLogicDatabaseRequest $request
     *
     * @return CreateLogicDatabaseResponse
     */
    public function createLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pluginParam)) {
            $request->pluginParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pluginParam, 'PluginParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
        }
        if (!Utils::isUnset($request->relatedUserList)) {
            $query['RelatedUserList'] = $request->relatedUserList;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $body = [];
        if (!Utils::isUnset($request->pluginParamShrink)) {
            $body['PluginParam'] = $request->pluginParamShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateProxyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateProxyResponse
     */
    public function createProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProxy',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProxyRequest $request
     *
     * @return CreateProxyResponse
     */
    public function createProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProxyWithOptions($request, $runtime);
    }

    /**
     * @param CreateProxyAccessRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateProxyAccessResponse
     */
    public function createProxyAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indepAccount)) {
            $query['IndepAccount'] = $request->indepAccount;
        }
        if (!Utils::isUnset($request->indepPassword)) {
            $query['IndepPassword'] = $request->indepPassword;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProxyAccess',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProxyAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProxyAccessRequest $request
     *
     * @return CreateProxyAccessResponse
     */
    public function createProxyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProxyAccessWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublishGroupTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePublishGroupTaskResponse
     */
    public function createPublishGroupTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->planTime)) {
            $query['PlanTime'] = $request->planTime;
        }
        if (!Utils::isUnset($request->publishStrategy)) {
            $query['PublishStrategy'] = $request->publishStrategy;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublishGroupTask',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublishGroupTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublishGroupTaskRequest $request
     *
     * @return CreatePublishGroupTaskResponse
     */
    public function createPublishGroupTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishGroupTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateSQLReviewOrderRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSQLReviewOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSQLReviewOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSQLReviewOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSQLReviewOrderRequest $request
     *
     * @return CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSQLReviewOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateStandardGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateStandardGroupResponse
     */
    public function createStandardGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStandardGroup',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStandardGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStandardGroupRequest $request
     *
     * @return CreateStandardGroupResponse
     */
    public function createStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateStructSyncOrderRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateStructSyncOrderResponse
     */
    public function createStructSyncOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStructSyncOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachmentKey)) {
            $query['AttachmentKey'] = $request->attachmentKey;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->paramShrink)) {
            $query['Param'] = $request->paramShrink;
        }
        if (!Utils::isUnset($request->relatedUserListShrink)) {
            $query['RelatedUserList'] = $request->relatedUserListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStructSyncOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStructSyncOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStructSyncOrderRequest $request
     *
     * @return CreateStructSyncOrderResponse
     */
    public function createStructSyncOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStructSyncOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadFileJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateUploadFileJobResponse
     */
    public function createUploadFileJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSource)) {
            $query['FileSource'] = $request->fileSource;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uploadURL)) {
            $query['UploadURL'] = $request->uploadURL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadFileJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadFileJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUploadFileJobRequest $request
     *
     * @return CreateUploadFileJobResponse
     */
    public function createUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadOSSFileJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateUploadOSSFileJobResponse
     */
    public function createUploadOSSFileJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUploadOSSFileJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->uploadTarget)) {
            $request->uploadTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->uploadTarget), 'UploadTarget', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSource)) {
            $query['FileSource'] = $request->fileSource;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uploadTargetShrink)) {
            $query['UploadTarget'] = $request->uploadTargetShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadOSSFileJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadOSSFileJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUploadOSSFileJobRequest $request
     *
     * @return CreateUploadOSSFileJobResponse
     */
    public function createUploadOSSFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadOSSFileJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLakeHouseSpaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteLakeHouseSpaceResponse
     */
    public function deleteLakeHouseSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceId)) {
            $query['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLakeHouseSpace',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLakeHouseSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLakeHouseSpaceRequest $request
     *
     * @return DeleteLakeHouseSpaceResponse
     */
    public function deleteLakeHouseSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLakeHouseSpaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLhMembersRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLhMembersResponse
     */
    public function deleteLhMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteLhMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->memberIds)) {
            $request->memberIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->memberIds, 'MemberIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->memberIdsShrink)) {
            $query['MemberIds'] = $request->memberIdsShrink;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLhMembers',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLhMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLhMembersRequest $request
     *
     * @return DeleteLhMembersResponse
     */
    public function deleteLhMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLhMembersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLogicDatabaseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLogicDatabaseResponse
     */
    public function deleteLogicDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicDbId)) {
            $query['LogicDbId'] = $request->logicDbId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogicDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogicDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLogicDatabaseRequest $request
     *
     * @return DeleteLogicDatabaseResponse
     */
    public function deleteLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLogicTableRouteConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLogicTableRouteConfigResponse
     */
    public function deleteLogicTableRouteConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->routeKey)) {
            $query['RouteKey'] = $request->routeKey;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogicTableRouteConfig',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogicTableRouteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLogicTableRouteConfigRequest $request
     *
     * @return DeleteLogicTableRouteConfigResponse
     */
    public function deleteLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProxyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteProxyResponse
     */
    public function deleteProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProxy',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProxyRequest $request
     *
     * @return DeleteProxyResponse
     */
    public function deleteProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProxyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProxyAccessRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteProxyAccessResponse
     */
    public function deleteProxyAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->proxyAccessId)) {
            $query['ProxyAccessId'] = $request->proxyAccessId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProxyAccess',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProxyAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProxyAccessRequest $request
     *
     * @return DeleteProxyAccessResponse
     */
    public function deleteProxyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProxyAccessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTaskFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTaskFlowResponse
     */
    public function deleteTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTaskFlowRequest $request
     *
     * @return DeleteTaskFlowResponse
     */
    public function deleteTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DisableUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableUserResponse
     */
    public function disableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableUserRequest $request
     *
     * @return DisableUserResponse
     */
    public function disableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserWithOptions($request, $runtime);
    }

    /**
     * @param EditLogicDatabaseRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return EditLogicDatabaseResponse
     */
    public function editLogicDatabaseWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditLogicDatabaseShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->databaseIds)) {
            $request->databaseIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->databaseIds, 'DatabaseIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alias)) {
            $query['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->databaseIdsShrink)) {
            $query['DatabaseIds'] = $request->databaseIdsShrink;
        }
        if (!Utils::isUnset($request->logicDbId)) {
            $query['LogicDbId'] = $request->logicDbId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditLogicDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditLogicDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditLogicDatabaseRequest $request
     *
     * @return EditLogicDatabaseResponse
     */
    public function editLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param EnableUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableUserResponse
     */
    public function enableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableUserRequest $request
     *
     * @return EnableUserResponse
     */
    public function enableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableUserWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteDataCorrectRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ExecuteDataCorrectResponse
     */
    public function executeDataCorrectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteDataCorrectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionDetailShrink)) {
            $query['ActionDetail'] = $request->actionDetailShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteDataCorrect',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteDataCorrectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteDataCorrectRequest $request
     *
     * @return ExecuteDataCorrectResponse
     */
    public function executeDataCorrect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataCorrectWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteDataExportRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteDataExportResponse
     */
    public function executeDataExportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteDataExportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionDetailShrink)) {
            $query['ActionDetail'] = $request->actionDetailShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteDataExport',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteDataExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteDataExportRequest $request
     *
     * @return ExecuteDataExportResponse
     */
    public function executeDataExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataExportWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ExecuteScriptResponse
     */
    public function executeScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->script)) {
            $query['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteScript',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteScriptRequest $request
     *
     * @return ExecuteScriptResponse
     */
    public function executeScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeScriptWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteStructSyncRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteStructSyncResponse
     */
    public function executeStructSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteStructSync',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteStructSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteStructSyncRequest $request
     *
     * @return ExecuteStructSyncResponse
     */
    public function executeStructSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeStructSyncWithOptions($request, $runtime);
    }

    /**
     * @param GetApprovalDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApprovalDetailResponse
     */
    public function getApprovalDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->workflowInstanceId)) {
            $query['WorkflowInstanceId'] = $request->workflowInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApprovalDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApprovalDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApprovalDetailRequest $request
     *
     * @return GetApprovalDetailResponse
     */
    public function getApprovalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDBTaskSQLJobLogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDBTaskSQLJobLogResponse
     */
    public function getDBTaskSQLJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDBTaskSQLJobLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDBTaskSQLJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDBTaskSQLJobLogRequest $request
     *
     * @return GetDBTaskSQLJobLogResponse
     */
    public function getDBTaskSQLJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBTaskSQLJobLogWithOptions($request, $runtime);
    }

    /**
     * @param GetDBTopologyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDBTopologyResponse
     */
    public function getDBTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logicDbId)) {
            $query['LogicDbId'] = $request->logicDbId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDBTopology',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDBTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDBTopologyRequest $request
     *
     * @return GetDBTopologyResponse
     */
    public function getDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBTopologyWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectBackupFilesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataCorrectBackupFilesResponse
     */
    public function getDataCorrectBackupFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDataCorrectBackupFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionDetailShrink)) {
            $query['ActionDetail'] = $request->actionDetailShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataCorrectBackupFiles',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCorrectBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCorrectBackupFilesRequest $request
     *
     * @return GetDataCorrectBackupFilesResponse
     */
    public function getDataCorrectBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectOrderDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataCorrectOrderDetailResponse
     */
    public function getDataCorrectOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataCorrectOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCorrectOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCorrectOrderDetailRequest $request
     *
     * @return GetDataCorrectOrderDetailResponse
     */
    public function getDataCorrectOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectSQLFileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDataCorrectSQLFileResponse
     */
    public function getDataCorrectSQLFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataCorrectSQLFile',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCorrectSQLFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCorrectSQLFileRequest $request
     *
     * @return GetDataCorrectSQLFileResponse
     */
    public function getDataCorrectSQLFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectSQLFileWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectTaskDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataCorrectTaskDetailResponse
     */
    public function getDataCorrectTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataCorrectTaskDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCorrectTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCorrectTaskDetailRequest $request
     *
     * @return GetDataCorrectTaskDetailResponse
     */
    public function getDataCorrectTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCronClearTaskDetailListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDataCronClearTaskDetailListResponse
     */
    public function getDataCronClearTaskDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataCronClearTaskDetailList',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCronClearTaskDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCronClearTaskDetailListRequest $request
     *
     * @return GetDataCronClearTaskDetailListResponse
     */
    public function getDataCronClearTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCronClearTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetDataExportDownloadURLRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataExportDownloadURLResponse
     */
    public function getDataExportDownloadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataExportDownloadURL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataExportDownloadURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataExportDownloadURLRequest $request
     *
     * @return GetDataExportDownloadURLResponse
     */
    public function getDataExportDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @param GetDataExportOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataExportOrderDetailResponse
     */
    public function getDataExportOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $body = [];
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataExportOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataExportOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataExportOrderDetailRequest $request
     *
     * @return GetDataExportOrderDetailResponse
     */
    public function getDataExportOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDatabaseRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDatabaseResponse
     */
    public function getDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDatabaseRequest $request
     *
     * @return GetDatabaseResponse
     */
    public function getDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetLhSpaceByNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLhSpaceByNameResponse
     */
    public function getLhSpaceByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceName)) {
            $query['SpaceName'] = $request->spaceName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLhSpaceByName',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLhSpaceByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLhSpaceByNameRequest $request
     *
     * @return GetLhSpaceByNameResponse
     */
    public function getLhSpaceByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLhSpaceByNameWithOptions($request, $runtime);
    }

    /**
     * @param GetLogicDatabaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLogicDatabaseResponse
     */
    public function getLogicDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogicDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogicDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLogicDatabaseRequest $request
     *
     * @return GetLogicDatabaseResponse
     */
    public function getLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableColumn',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableColumnRequest $request
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumnWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableDetailInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMetaTableDetailInfoResponse
     */
    public function getMetaTableDetailInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableDetailInfo',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableDetailInfoRequest $request
     *
     * @return GetMetaTableDetailInfoResponse
     */
    public function getMetaTableDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableDetailInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOpLogRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetOpLogResponse
     */
    public function getOpLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->module)) {
            $query['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOpLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOpLogRequest $request
     *
     * @return GetOpLogResponse
     */
    public function getOpLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpLogWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderBaseInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOrderBaseInfoResponse
     */
    public function getOrderBaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderBaseInfo',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderBaseInfoRequest $request
     *
     * @return GetOrderBaseInfoResponse
     */
    public function getOrderBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderBaseInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOwnerApplyOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOwnerApplyOrderDetailResponse
     */
    public function getOwnerApplyOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOwnerApplyOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOwnerApplyOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOwnerApplyOrderDetailRequest $request
     *
     * @return GetOwnerApplyOrderDetailResponse
     */
    public function getOwnerApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOwnerApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetPermApplyOrderDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPermApplyOrderDetailResponse
     */
    public function getPermApplyOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPermApplyOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPermApplyOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPermApplyOrderDetailRequest $request
     *
     * @return GetPermApplyOrderDetailResponse
     */
    public function getPermApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetPhysicalDatabaseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPhysicalDatabaseResponse
     */
    public function getPhysicalDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhysicalDatabaseRequest $request
     *
     * @return GetPhysicalDatabaseResponse
     */
    public function getPhysicalDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetProxyRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetProxyResponse
     */
    public function getProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProxy',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProxyRequest $request
     *
     * @return GetProxyResponse
     */
    public function getProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyWithOptions($request, $runtime);
    }

    /**
     * @param GetSQLReviewCheckResultStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetSQLReviewCheckResultStatusResponse
     */
    public function getSQLReviewCheckResultStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSQLReviewCheckResultStatus',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSQLReviewCheckResultStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSQLReviewCheckResultStatusRequest $request
     *
     * @return GetSQLReviewCheckResultStatusResponse
     */
    public function getSQLReviewCheckResultStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewCheckResultStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSQLReviewOptimizeDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSQLReviewOptimizeDetailResponse
     */
    public function getSQLReviewOptimizeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SQLReviewQueryKey)) {
            $query['SQLReviewQueryKey'] = $request->SQLReviewQueryKey;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSQLReviewOptimizeDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSQLReviewOptimizeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSQLReviewOptimizeDetailRequest $request
     *
     * @return GetSQLReviewOptimizeDetailResponse
     */
    public function getSQLReviewOptimizeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewOptimizeDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncExecSqlDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetStructSyncExecSqlDetailResponse
     */
    public function getStructSyncExecSqlDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStructSyncExecSqlDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStructSyncExecSqlDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStructSyncExecSqlDetailRequest $request
     *
     * @return GetStructSyncExecSqlDetailResponse
     */
    public function getStructSyncExecSqlDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncExecSqlDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncJobAnalyzeResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetStructSyncJobAnalyzeResultResponse
     */
    public function getStructSyncJobAnalyzeResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compareType)) {
            $query['CompareType'] = $request->compareType;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStructSyncJobAnalyzeResult',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStructSyncJobAnalyzeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStructSyncJobAnalyzeResultRequest $request
     *
     * @return GetStructSyncJobAnalyzeResultResponse
     */
    public function getStructSyncJobAnalyzeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobAnalyzeResultWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncJobDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStructSyncJobDetailResponse
     */
    public function getStructSyncJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStructSyncJobDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStructSyncJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStructSyncJobDetailRequest $request
     *
     * @return GetStructSyncJobDetailResponse
     */
    public function getStructSyncJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetStructSyncOrderDetailResponse
     */
    public function getStructSyncOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStructSyncOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStructSyncOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStructSyncOrderDetailRequest $request
     *
     * @return GetStructSyncOrderDetailResponse
     */
    public function getStructSyncOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetTableDBTopologyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTableDBTopologyResponse
     */
    public function getTableDBTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableDBTopology',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableDBTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTableDBTopologyRequest $request
     *
     * @return GetTableDBTopologyResponse
     */
    public function getTableDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDBTopologyWithOptions($request, $runtime);
    }

    /**
     * @param GetTableTopologyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTableTopologyResponse
     */
    public function getTableTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableTopology',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTableTopologyRequest $request
     *
     * @return GetTableTopologyResponse
     */
    public function getTableTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableTopologyWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskInstanceRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTaskInstanceRelationResponse
     */
    public function getTaskInstanceRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagInstanceId)) {
            $query['DagInstanceId'] = $request->dagInstanceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskInstanceRelation',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskInstanceRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskInstanceRelationRequest $request
     *
     * @return GetTaskInstanceRelationResponse
     */
    public function getTaskInstanceRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceRelationWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param GetUserActiveTenantRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserActiveTenantResponse
     */
    public function getUserActiveTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserActiveTenant',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserActiveTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserActiveTenantRequest $request
     *
     * @return GetUserActiveTenantResponse
     */
    public function getUserActiveTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserActiveTenantWithOptions($request, $runtime);
    }

    /**
     * @param GetUserUploadFileJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetUserUploadFileJobResponse
     */
    public function getUserUploadFileJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserUploadFileJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserUploadFileJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserUploadFileJobRequest $request
     *
     * @return GetUserUploadFileJobResponse
     */
    public function getUserUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @param GrantUserPermissionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GrantUserPermissionResponse
     */
    public function grantUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->dsType)) {
            $query['DsType'] = $request->dsType;
        }
        if (!Utils::isUnset($request->expireDate)) {
            $query['ExpireDate'] = $request->expireDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->permTypes)) {
            $query['PermTypes'] = $request->permTypes;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantUserPermission',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantUserPermissionRequest $request
     *
     * @return GrantUserPermissionResponse
     */
    public function grantUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @param InspectProxyAccessSecretRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InspectProxyAccessSecretResponse
     */
    public function inspectProxyAccessSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->proxyAccessId)) {
            $query['ProxyAccessId'] = $request->proxyAccessId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InspectProxyAccessSecret',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InspectProxyAccessSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InspectProxyAccessSecretRequest $request
     *
     * @return InspectProxyAccessSecretResponse
     */
    public function inspectProxyAccessSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inspectProxyAccessSecretWithOptions($request, $runtime);
    }

    /**
     * @param ListColumnsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListColumnsResponse
     */
    public function listColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListColumns',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListColumnsRequest $request
     *
     * @return ListColumnsResponse
     */
    public function listColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listColumnsWithOptions($request, $runtime);
    }

    /**
     * @param ListDBTaskSQLJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDBTaskSQLJobResponse
     */
    public function listDBTaskSQLJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBTaskGroupId)) {
            $query['DBTaskGroupId'] = $request->DBTaskGroupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDBTaskSQLJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDBTaskSQLJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDBTaskSQLJobRequest $request
     *
     * @return ListDBTaskSQLJobResponse
     */
    public function listDBTaskSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobWithOptions($request, $runtime);
    }

    /**
     * @param ListDBTaskSQLJobDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDBTaskSQLJobDetailResponse
     */
    public function listDBTaskSQLJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDBTaskSQLJobDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDBTaskSQLJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDBTaskSQLJobDetailRequest $request
     *
     * @return ListDBTaskSQLJobDetailResponse
     */
    public function listDBTaskSQLJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListDDLPublishRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDDLPublishRecordsResponse
     */
    public function listDDLPublishRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDDLPublishRecords',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDDLPublishRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDDLPublishRecordsRequest $request
     *
     * @return ListDDLPublishRecordsResponse
     */
    public function listDDLPublishRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDDLPublishRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ListDataCorrectPreCheckDBRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataCorrectPreCheckDBResponse
     */
    public function listDataCorrectPreCheckDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataCorrectPreCheckDB',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataCorrectPreCheckDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataCorrectPreCheckDBRequest $request
     *
     * @return ListDataCorrectPreCheckDBResponse
     */
    public function listDataCorrectPreCheckDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckDBWithOptions($request, $runtime);
    }

    /**
     * @param ListDataCorrectPreCheckSQLRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDataCorrectPreCheckSQLResponse
     */
    public function listDataCorrectPreCheckSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataCorrectPreCheckSQL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataCorrectPreCheckSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataCorrectPreCheckSQLRequest $request
     *
     * @return ListDataCorrectPreCheckSQLResponse
     */
    public function listDataCorrectPreCheckSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckSQLWithOptions($request, $runtime);
    }

    /**
     * @param ListDatabaseUserPermssionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDatabaseUserPermssionsResponse
     */
    public function listDatabaseUserPermssionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->permType)) {
            $query['PermType'] = $request->permType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabaseUserPermssions',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabaseUserPermssionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDatabaseUserPermssionsRequest $request
     *
     * @return ListDatabaseUserPermssionsResponse
     */
    public function listDatabaseUserPermssions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseUserPermssionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDatabasesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabases',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDatabasesRequest $request
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param ListIndexesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndexesResponse
     */
    public function listIndexesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIndexes',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIndexesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIndexesRequest $request
     *
     * @return ListIndexesResponse
     */
    public function listIndexes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIndexesWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceLoginAuditLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListInstanceLoginAuditLogResponse
     */
    public function listInstanceLoginAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->opUserName)) {
            $query['OpUserName'] = $request->opUserName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceLoginAuditLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceLoginAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceLoginAuditLogRequest $request
     *
     * @return ListInstanceLoginAuditLogResponse
     */
    public function listInstanceLoginAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceLoginAuditLogWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceUserPermissionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListInstanceUserPermissionsResponse
     */
    public function listInstanceUserPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceUserPermissions',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceUserPermissionsRequest $request
     *
     * @return ListInstanceUserPermissionsResponse
     */
    public function listInstanceUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->instanceSource)) {
            $query['InstanceSource'] = $request->instanceSource;
        }
        if (!Utils::isUnset($request->instanceState)) {
            $query['InstanceState'] = $request->instanceState;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListLhTaskFlowAndScenarioRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLhTaskFlowAndScenarioResponse
     */
    public function listLhTaskFlowAndScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceId)) {
            $query['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLhTaskFlowAndScenario',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLhTaskFlowAndScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLhTaskFlowAndScenarioRequest $request
     *
     * @return ListLhTaskFlowAndScenarioResponse
     */
    public function listLhTaskFlowAndScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLhTaskFlowAndScenarioWithOptions($request, $runtime);
    }

    /**
     * @param ListLogicDatabasesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListLogicDatabasesResponse
     */
    public function listLogicDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogicDatabases',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogicDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogicDatabasesRequest $request
     *
     * @return ListLogicDatabasesResponse
     */
    public function listLogicDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param ListLogicTableRouteConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLogicTableRouteConfigResponse
     */
    public function listLogicTableRouteConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogicTableRouteConfig',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogicTableRouteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogicTableRouteConfigRequest $request
     *
     * @return ListLogicTableRouteConfigResponse
     */
    public function listLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListLogicTablesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogicTablesResponse
     */
    public function listLogicTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->returnGuid)) {
            $query['ReturnGuid'] = $request->returnGuid;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogicTables',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogicTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogicTablesRequest $request
     *
     * @return ListLogicTablesResponse
     */
    public function listLogicTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicTablesWithOptions($request, $runtime);
    }

    /**
     * @param ListOrdersRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListOrdersResponse
     */
    public function listOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderResultType)) {
            $query['OrderResultType'] = $request->orderResultType;
        }
        if (!Utils::isUnset($request->orderStatus)) {
            $query['OrderStatus'] = $request->orderStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
        }
        if (!Utils::isUnset($request->searchContent)) {
            $query['SearchContent'] = $request->searchContent;
        }
        if (!Utils::isUnset($request->searchDateType)) {
            $query['SearchDateType'] = $request->searchDateType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrders',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOrdersRequest $request
     *
     * @return ListOrdersResponse
     */
    public function listOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListProxiesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProxiesResponse
     */
    public function listProxiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProxies',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProxiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProxiesRequest $request
     *
     * @return ListProxiesResponse
     */
    public function listProxies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxiesWithOptions($request, $runtime);
    }

    /**
     * @param ListProxyAccessesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProxyAccessesResponse
     */
    public function listProxyAccessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProxyAccesses',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProxyAccessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProxyAccessesRequest $request
     *
     * @return ListProxyAccessesResponse
     */
    public function listProxyAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxyAccessesWithOptions($request, $runtime);
    }

    /**
     * @param ListProxySQLExecAuditLogRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProxySQLExecAuditLogResponse
     */
    public function listProxySQLExecAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->execState)) {
            $query['ExecState'] = $request->execState;
        }
        if (!Utils::isUnset($request->opUserName)) {
            $query['OpUserName'] = $request->opUserName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLType)) {
            $query['SQLType'] = $request->SQLType;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProxySQLExecAuditLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProxySQLExecAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProxySQLExecAuditLogRequest $request
     *
     * @return ListProxySQLExecAuditLogResponse
     */
    public function listProxySQLExecAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxySQLExecAuditLogWithOptions($request, $runtime);
    }

    /**
     * @param ListSQLExecAuditLogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSQLExecAuditLogResponse
     */
    public function listSQLExecAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->execState)) {
            $query['ExecState'] = $request->execState;
        }
        if (!Utils::isUnset($request->opUserName)) {
            $query['OpUserName'] = $request->opUserName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSQLExecAuditLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSQLExecAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSQLExecAuditLogRequest $request
     *
     * @return ListSQLExecAuditLogResponse
     */
    public function listSQLExecAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSQLExecAuditLogWithOptions($request, $runtime);
    }

    /**
     * @param ListSQLReviewOriginSQLRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQLWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSQLReviewOriginSQLShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderActionDetail)) {
            $request->orderActionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->orderActionDetail), 'OrderActionDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->orderActionDetailShrink)) {
            $query['OrderActionDetail'] = $request->orderActionDetailShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSQLReviewOriginSQL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSQLReviewOriginSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSQLReviewOriginSQLRequest $request
     *
     * @return ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSQLReviewOriginSQLWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitiveColumnsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSensitiveColumnsResponse
     */
    public function listSensitiveColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->securityLevel)) {
            $query['SecurityLevel'] = $request->securityLevel;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSensitiveColumns',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitiveColumnsRequest $request
     *
     * @return ListSensitiveColumnsResponse
     */
    public function listSensitiveColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitiveColumnsDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSensitiveColumnsDetailResponse
     */
    public function listSensitiveColumnsDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSensitiveColumnsDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveColumnsDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitiveColumnsDetailRequest $request
     *
     * @return ListSensitiveColumnsDetailResponse
     */
    public function listSensitiveColumnsDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListStandardGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStandardGroupsResponse
     */
    public function listStandardGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStandardGroups',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStandardGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStandardGroupsRequest $request
     *
     * @return ListStandardGroupsResponse
     */
    public function listStandardGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStandardGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListTablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->returnGuid)) {
            $query['ReturnGuid'] = $request->returnGuid;
        }
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTables',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTaskFlowResponse
     */
    public function listTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagInstanceId)) {
            $query['DagInstanceId'] = $request->dagInstanceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowRequest $request
     *
     * @return ListTaskFlowResponse
     */
    public function listTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskFlowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTaskFlowInstanceResponse
     */
    public function listTaskFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTimeBegin)) {
            $query['StartTimeBegin'] = $request->startTimeBegin;
        }
        if (!Utils::isUnset($request->startTimeEnd)) {
            $query['StartTimeEnd'] = $request->startTimeEnd;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $query['TriggerType'] = $request->triggerType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskFlowInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowInstanceRequest $request
     *
     * @return ListTaskFlowInstanceResponse
     */
    public function listTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListUserPermissionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserPermissionsResponse
     */
    public function listUserPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->permType)) {
            $query['PermType'] = $request->permType;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserPermissions',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserPermissionsRequest $request
     *
     * @return ListUserPermissionsResponse
     */
    public function listUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserTenantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserTenantsResponse
     */
    public function listUserTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserTenants',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserTenantsRequest $request
     *
     * @return ListUserTenantsResponse
     */
    public function listUserTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTenantsWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userState)) {
            $query['UserState'] = $request->userState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkFlowNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListWorkFlowNodesResponse
     */
    public function listWorkFlowNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkFlowNodes',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkFlowNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkFlowNodesRequest $request
     *
     * @return ListWorkFlowNodesResponse
     */
    public function listWorkFlowNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowNodesWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkFlowTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkFlowTemplatesResponse
     */
    public function listWorkFlowTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchName)) {
            $query['SearchName'] = $request->searchName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkFlowTemplates',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkFlowTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkFlowTemplatesRequest $request
     *
     * @return ListWorkFlowTemplatesResponse
     */
    public function listWorkFlowTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDataCorrectExecSQLRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDataCorrectExecSQLResponse
     */
    public function modifyDataCorrectExecSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->execSQL)) {
            $query['ExecSQL'] = $request->execSQL;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataCorrectExecSQL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataCorrectExecSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDataCorrectExecSQLRequest $request
     *
     * @return ModifyDataCorrectExecSQLResponse
     */
    public function modifyDataCorrectExecSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataCorrectExecSQLWithOptions($request, $runtime);
    }

    /**
     * @param PauseDataCorrectSQLJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PauseDataCorrectSQLJobResponse
     */
    public function pauseDataCorrectSQLJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseDataCorrectSQLJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseDataCorrectSQLJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseDataCorrectSQLJobRequest $request
     *
     * @return PauseDataCorrectSQLJobResponse
     */
    public function pauseDataCorrectSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseDataCorrectSQLJobWithOptions($request, $runtime);
    }

    /**
     * @param ReDeployLhDagVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReDeployLhDagVersionResponse
     */
    public function reDeployLhDagVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagVersion)) {
            $query['DagVersion'] = $request->dagVersion;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReDeployLhDagVersion',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReDeployLhDagVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReDeployLhDagVersionRequest $request
     *
     * @return ReDeployLhDagVersionResponse
     */
    public function reDeployLhDagVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reDeployLhDagVersionWithOptions($request, $runtime);
    }

    /**
     * @param RegisterInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RegisterInstanceResponse
     */
    public function registerInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataLinkName)) {
            $query['DataLinkName'] = $request->dataLinkName;
        }
        if (!Utils::isUnset($request->databasePassword)) {
            $query['DatabasePassword'] = $request->databasePassword;
        }
        if (!Utils::isUnset($request->databaseUser)) {
            $query['DatabaseUser'] = $request->databaseUser;
        }
        if (!Utils::isUnset($request->dbaUid)) {
            $query['DbaUid'] = $request->dbaUid;
        }
        if (!Utils::isUnset($request->ddlOnline)) {
            $query['DdlOnline'] = $request->ddlOnline;
        }
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->ecsRegion)) {
            $query['EcsRegion'] = $request->ecsRegion;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->exportTimeout)) {
            $query['ExportTimeout'] = $request->exportTimeout;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
        }
        if (!Utils::isUnset($request->instanceSource)) {
            $query['InstanceSource'] = $request->instanceSource;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->queryTimeout)) {
            $query['QueryTimeout'] = $request->queryTimeout;
        }
        if (!Utils::isUnset($request->safeRule)) {
            $query['SafeRule'] = $request->safeRule;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->skipTest)) {
            $query['SkipTest'] = $request->skipTest;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->useDsql)) {
            $query['UseDsql'] = $request->useDsql;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterInstanceRequest $request
     *
     * @return RegisterInstanceResponse
     */
    public function registerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterUserResponse
     */
    public function registerUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->roleNames)) {
            $query['RoleNames'] = $request->roleNames;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterUserRequest $request
     *
     * @return RegisterUserResponse
     */
    public function registerUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerUserWithOptions($request, $runtime);
    }

    /**
     * @param RestartDataCorrectSQLJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RestartDataCorrectSQLJobResponse
     */
    public function restartDataCorrectSQLJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDataCorrectSQLJob',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDataCorrectSQLJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDataCorrectSQLJobRequest $request
     *
     * @return RestartDataCorrectSQLJobResponse
     */
    public function restartDataCorrectSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDataCorrectSQLJobWithOptions($request, $runtime);
    }

    /**
     * @param RetryDataCorrectPreCheckRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RetryDataCorrectPreCheckResponse
     */
    public function retryDataCorrectPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryDataCorrectPreCheck',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryDataCorrectPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryDataCorrectPreCheckRequest $request
     *
     * @return RetryDataCorrectPreCheckResponse
     */
    public function retryDataCorrectPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDataCorrectPreCheckWithOptions($request, $runtime);
    }

    /**
     * @param RevokeUserPermissionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RevokeUserPermissionResponse
     */
    public function revokeUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->dsType)) {
            $query['DsType'] = $request->dsType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->permTypes)) {
            $query['PermTypes'] = $request->permTypes;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userAccessId)) {
            $query['UserAccessId'] = $request->userAccessId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeUserPermission',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeUserPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeUserPermissionRequest $request
     *
     * @return RevokeUserPermissionResponse
     */
    public function revokeUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @param SearchDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchDatabaseResponse
     */
    public function searchDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->searchRange)) {
            $query['SearchRange'] = $request->searchRange;
        }
        if (!Utils::isUnset($request->searchTarget)) {
            $query['SearchTarget'] = $request->searchTarget;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchDatabase',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchDatabaseRequest $request
     *
     * @return SearchDatabaseResponse
     */
    public function searchDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param SearchTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchTableResponse
     */
    public function searchTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->returnGuid)) {
            $query['ReturnGuid'] = $request->returnGuid;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->searchRange)) {
            $query['SearchRange'] = $request->searchRange;
        }
        if (!Utils::isUnset($request->searchTarget)) {
            $query['SearchTarget'] = $request->searchTarget;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTable',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTableRequest $request
     *
     * @return SearchTableResponse
     */
    public function searchTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTableWithOptions($request, $runtime);
    }

    /**
     * @param SetOwnersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetOwnersResponse
     */
    public function setOwnersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerIds)) {
            $query['OwnerIds'] = $request->ownerIds;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $query['OwnerType'] = $request->ownerType;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetOwners',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetOwnersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetOwnersRequest $request
     *
     * @return SetOwnersResponse
     */
    public function setOwners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOwnersWithOptions($request, $runtime);
    }

    /**
     * @param SubmitOrderApprovalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitOrderApprovalResponse
     */
    public function submitOrderApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitOrderApproval',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitOrderApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitOrderApprovalRequest $request
     *
     * @return SubmitOrderApprovalResponse
     */
    public function submitOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @param SubmitStructSyncOrderApprovalRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitStructSyncOrderApprovalResponse
     */
    public function submitStructSyncOrderApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitStructSyncOrderApproval',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitStructSyncOrderApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitStructSyncOrderApprovalRequest $request
     *
     * @return SubmitStructSyncOrderApprovalResponse
     */
    public function submitStructSyncOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStructSyncOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @param SyncDatabaseMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncDatabaseMetaResponse
     */
    public function syncDatabaseMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->logic)) {
            $query['Logic'] = $request->logic;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncDatabaseMeta',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncDatabaseMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncDatabaseMetaRequest $request
     *
     * @return SyncDatabaseMetaResponse
     */
    public function syncDatabaseMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDatabaseMetaWithOptions($request, $runtime);
    }

    /**
     * @param SyncInstanceMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncInstanceMetaResponse
     */
    public function syncInstanceMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ignoreTable)) {
            $query['IgnoreTable'] = $request->ignoreTable;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncInstanceMeta',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncInstanceMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncInstanceMetaRequest $request
     *
     * @return SyncInstanceMetaResponse
     */
    public function syncInstanceMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncInstanceMetaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataLinkName)) {
            $query['DataLinkName'] = $request->dataLinkName;
        }
        if (!Utils::isUnset($request->databasePassword)) {
            $query['DatabasePassword'] = $request->databasePassword;
        }
        if (!Utils::isUnset($request->databaseUser)) {
            $query['DatabaseUser'] = $request->databaseUser;
        }
        if (!Utils::isUnset($request->dbaId)) {
            $query['DbaId'] = $request->dbaId;
        }
        if (!Utils::isUnset($request->ddlOnline)) {
            $query['DdlOnline'] = $request->ddlOnline;
        }
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->ecsRegion)) {
            $query['EcsRegion'] = $request->ecsRegion;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->exportTimeout)) {
            $query['ExportTimeout'] = $request->exportTimeout;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceSource)) {
            $query['InstanceSource'] = $request->instanceSource;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->queryTimeout)) {
            $query['QueryTimeout'] = $request->queryTimeout;
        }
        if (!Utils::isUnset($request->safeRuleId)) {
            $query['SafeRuleId'] = $request->safeRuleId;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->skipTest)) {
            $query['SkipTest'] = $request->skipTest;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->useDsql)) {
            $query['UseDsql'] = $request->useDsql;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxExecuteCount)) {
            $query['MaxExecuteCount'] = $request->maxExecuteCount;
        }
        if (!Utils::isUnset($request->maxResultCount)) {
            $query['MaxResultCount'] = $request->maxResultCount;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->roleNames)) {
            $query['RoleNames'] = $request->roleNames;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}

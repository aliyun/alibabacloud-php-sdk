<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddDesensitizationRuleRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddDesensitizationRuleResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLogicTableRouteConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLogicTableRouteConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\BackFillRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\BackFillResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\BackFillShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\BuyPayAsYouGoOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\BuyPayAsYouGoOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecLevelRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecLevelResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecurityLevelRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeColumnSecurityLevelResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeLhDagOwnerRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChangeLhDagOwnerResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateAuthorityTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateAuthorityTemplateResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderShrinkRequest;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyAccessRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyAccessResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProxyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateScenarioRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateScenarioResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteAuthorityTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteAuthorityTemplateResponse;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteStandardGroupRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteStandardGroupResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowEdgesByConditionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowEdgesByConditionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DownloadDataTrackResultRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DownloadDataTrackResultResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DownloadDataTrackResultShrinkRequest;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetClassificationTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetClassificationTemplateResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveCountRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveCountResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectRollbackFileRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectRollbackFileResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataImportSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataImportSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobDegreeRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobDegreeResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobTableMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobTableMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDbExportDownloadURLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDbExportDownloadURLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTaskSQLJobLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTaskSQLJobLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetIntervalLimitOfSLARequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetIntervalLimitOfSLAResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOnlineDDLProgressRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOnlineDDLProgressResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderAttachmentFileRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderAttachmentFileResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetRuleNumLimitOfSLARequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetRuleNumLimitOfSLAResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStandardGroupRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStandardGroupResponse;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowNotificationRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowNotificationResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantTemplateAuthorityRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantTemplateAuthorityResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\InspectProxyAccessSecretRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\InspectProxyAccessSecretResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListClassificationTemplatesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListClassificationTemplatesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLTypeRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLTypeResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDefaultSLARulesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDefaultSLARulesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponse;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListScenariosRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListScenariosResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitivityLevelRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitivityLevelResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowEdgesByConditionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowEdgesByConditionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTasksInTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTasksInTaskFlowResponse;
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
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MakeTaskFlowInstanceSuccessRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MakeTaskFlowInstanceSuccessResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDataCorrectExecSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDataCorrectExecSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDesensitizationStrategyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyDesensitizationStrategyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MoveTaskFlowToScenarioRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MoveTaskFlowToScenarioResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\OfflineTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\OfflineTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PauseDataCorrectSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PauseDataCorrectSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PublishAndDeployTaskFlowRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PublishAndDeployTaskFlowResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\QueryDataTrackResultDownloadStatusRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\QueryDataTrackResultDownloadStatusResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReDeployLhDagVersionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReDeployLhDagVersionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RefundPayAsYouGoOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RefundPayAsYouGoOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReRunTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ReRunTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RestartDataCorrectSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RestartDataCorrectSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ResumeTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ResumeTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RetryDataCorrectPreCheckRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RetryDataCorrectPreCheckResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeTemplateAuthorityRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeTemplateAuthorityResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SkipDataCorrectRowCheckRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SkipDataCorrectRowCheckResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\StopTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\StopTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SuspendTaskFlowInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SuspendTaskFlowInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateAuthorityTemplateRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateAuthorityTemplateResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateScenarioRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateScenarioResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateStandardGroupRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateStandardGroupResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskConfigRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskConfigResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskContentRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskContentResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowConstantsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowConstantsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowConstantsShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowCooperatorsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowCooperatorsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowCooperatorsShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowEdgesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowEdgesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowEdgesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowNameAndDescRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowNameAndDescResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowNotificationRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowNotificationResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowOwnerRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowOwnerResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowRelationsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowRelationsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowRelationsShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowScheduleRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowScheduleResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowTimeVariablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowTimeVariablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskNameRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskNameResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskOutputRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskOutputResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskTimeVariablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskTimeVariablesResponse;
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
     * @param AddDesensitizationRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddDesensitizationRuleResponse
     */
    public function addDesensitizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionType)) {
            $query['FunctionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->ruleDescription)) {
            $query['RuleDescription'] = $request->ruleDescription;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->functionParams)) {
            $bodyFlat['FunctionParams'] = $request->functionParams;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDesensitizationRule',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDesensitizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDesensitizationRuleRequest $request
     *
     * @return AddDesensitizationRuleResponse
     */
    public function addDesensitizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDesensitizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddInstanceResponse
     */
    public function addInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->enableSellCommon)) {
            $query['EnableSellCommon'] = $request->enableSellCommon;
        }
        if (!Utils::isUnset($request->enableSellSitd)) {
            $query['EnableSellSitd'] = $request->enableSellSitd;
        }
        if (!Utils::isUnset($request->enableSellStable)) {
            $query['EnableSellStable'] = $request->enableSellStable;
        }
        if (!Utils::isUnset($request->enableSellTrust)) {
            $query['EnableSellTrust'] = $request->enableSellTrust;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->useDsql)) {
            $query['UseDsql'] = $request->useDsql;
        }
        if (!Utils::isUnset($request->useSsl)) {
            $query['UseSsl'] = $request->useSsl;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddInstanceRequest $request
     *
     * @return AddInstanceResponse
     */
    public function addInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceWithOptions($request, $runtime);
    }

    /**
     * You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     *   * Usage notes:
     *   * *   Before you call this operation to add a user as a task flow developer, make sure that you have added the user as a workspace member.
     *   * *   You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](~~424761~~) operation.
     *   * *   For more information about workspace roles and permissions, see [Manage permissions on a workspace](~~410893~~).
     *   *
     * @param AddLhMembersRequest $tmpReq  AddLhMembersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddLhMembersResponse AddLhMembersResponse
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
     * You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     *   * Usage notes:
     *   * *   Before you call this operation to add a user as a task flow developer, make sure that you have added the user as a workspace member.
     *   * *   You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](~~424761~~) operation.
     *   * *   For more information about workspace roles and permissions, see [Manage permissions on a workspace](~~410893~~).
     *   *
     * @param AddLhMembersRequest $request AddLhMembersRequest
     *
     * @return AddLhMembersResponse AddLhMembersResponse
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
     * When you add directed edges for a task node, take note of the following limits:
     *   * 1. The endpoints of the specified edge exist in the Directed Acyclic Graph (DAG) of the task flow specified by DagId.
     *   * 2. After a backward edge is added, the DAG does not contain loops.
     *   *
     * @param AddTaskFlowEdgesRequest $tmpReq  AddTaskFlowEdgesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTaskFlowEdgesResponse AddTaskFlowEdgesResponse
     */
    public function addTaskFlowEdgesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddTaskFlowEdgesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->edges)) {
            $request->edgesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->edges, 'Edges', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->edgesShrink)) {
            $query['Edges'] = $request->edgesShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTaskFlowEdges',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTaskFlowEdgesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you add directed edges for a task node, take note of the following limits:
     *   * 1. The endpoints of the specified edge exist in the Directed Acyclic Graph (DAG) of the task flow specified by DagId.
     *   * 2. After a backward edge is added, the DAG does not contain loops.
     *   *
     * @param AddTaskFlowEdgesRequest $request AddTaskFlowEdgesRequest
     *
     * @return AddTaskFlowEdgesResponse AddTaskFlowEdgesResponse
     */
    public function addTaskFlowEdges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTaskFlowEdgesWithOptions($request, $runtime);
    }

    /**
     * The following conditions must be met before you call this API operation.
     *   * *   The database instance is of one of the following types: ApsaraDB RDS for MySQL, PolarDB for MySQL, AnalyticDB for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for PostgreSQL, AnalyticDB for PostgreSQL, Oracle, and openGauss.
     *   * *   A database instance is managed in Security Collaboration mode. For more information about control modes, see [Control modes](~~151629~~).
     *   *
     * @param AnalyzeSQLLineageRequest $request AnalyzeSQLLineageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AnalyzeSQLLineageResponse AnalyzeSQLLineageResponse
     */
    public function analyzeSQLLineageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->sqlContent)) {
            $query['SqlContent'] = $request->sqlContent;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeSQLLineage',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AnalyzeSQLLineageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The following conditions must be met before you call this API operation.
     *   * *   The database instance is of one of the following types: ApsaraDB RDS for MySQL, PolarDB for MySQL, AnalyticDB for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for PostgreSQL, AnalyticDB for PostgreSQL, Oracle, and openGauss.
     *   * *   A database instance is managed in Security Collaboration mode. For more information about control modes, see [Control modes](~~151629~~).
     *   *
     * @param AnalyzeSQLLineageRequest $request AnalyzeSQLLineageRequest
     *
     * @return AnalyzeSQLLineageResponse AnalyzeSQLLineageResponse
     */
    public function analyzeSQLLineage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeSQLLineageWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->approvalNodeId)) {
            $query['ApprovalNodeId'] = $request->approvalNodeId;
        }
        if (!Utils::isUnset($request->approvalNodePos)) {
            $query['ApprovalNodePos'] = $request->approvalNodePos;
        }
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->newApprover)) {
            $query['NewApprover'] = $request->newApprover;
        }
        if (!Utils::isUnset($request->newApproverList)) {
            $query['NewApproverList'] = $request->newApproverList;
        }
        if (!Utils::isUnset($request->oldApprover)) {
            $query['OldApprover'] = $request->oldApprover;
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
     * During a data backfill, task flows are run in sequence based on their dates. You can specify whether task flows are run in chronological or reverse chronological order. After the data backfill is complete, you can specify a date or date range, and a node range to run task flows.
     *   *
     * @param BackFillRequest $tmpReq  BackFillRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return BackFillResponse BackFillResponse
     */
    public function backFillWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BackFillShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterNodeIds)) {
            $request->filterNodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterNodeIds, 'FilterNodeIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->startNodeIds)) {
            $request->startNodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startNodeIds, 'StartNodeIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->backFillDate)) {
            $query['BackFillDate'] = $request->backFillDate;
        }
        if (!Utils::isUnset($request->backFillDateBegin)) {
            $query['BackFillDateBegin'] = $request->backFillDateBegin;
        }
        if (!Utils::isUnset($request->backFillDateEnd)) {
            $query['BackFillDateEnd'] = $request->backFillDateEnd;
        }
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->filterNodeIdsShrink)) {
            $query['FilterNodeIds'] = $request->filterNodeIdsShrink;
        }
        if (!Utils::isUnset($request->historyDagId)) {
            $query['HistoryDagId'] = $request->historyDagId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->isTriggerSubTree)) {
            $query['IsTriggerSubTree'] = $request->isTriggerSubTree;
        }
        if (!Utils::isUnset($request->startNodeIdsShrink)) {
            $query['StartNodeIds'] = $request->startNodeIdsShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BackFill',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BackFillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * During a data backfill, task flows are run in sequence based on their dates. You can specify whether task flows are run in chronological or reverse chronological order. After the data backfill is complete, you can specify a date or date range, and a node range to run task flows.
     *   *
     * @param BackFillRequest $request BackFillRequest
     *
     * @return BackFillResponse BackFillResponse
     */
    public function backFill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backFillWithOptions($request, $runtime);
    }

    /**
     * @param BuyPayAsYouGoOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BuyPayAsYouGoOrderResponse
     */
    public function buyPayAsYouGoOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityType)) {
            $query['CommodityType'] = $request->commodityType;
        }
        if (!Utils::isUnset($request->insNum)) {
            $query['InsNum'] = $request->insNum;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->versionType)) {
            $query['VersionType'] = $request->versionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BuyPayAsYouGoOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BuyPayAsYouGoOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BuyPayAsYouGoOrderRequest $request
     *
     * @return BuyPayAsYouGoOrderResponse
     */
    public function buyPayAsYouGoOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buyPayAsYouGoOrderWithOptions($request, $runtime);
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
     * @param ChangeColumnSecurityLevelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ChangeColumnSecurityLevelResponse
     */
    public function changeColumnSecurityLevelWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->newSensitivityLevel)) {
            $query['NewSensitivityLevel'] = $request->newSensitivityLevel;
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
            'action'      => 'ChangeColumnSecurityLevel',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeColumnSecurityLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeColumnSecurityLevelRequest $request
     *
     * @return ChangeColumnSecurityLevelResponse
     */
    public function changeColumnSecurityLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeColumnSecurityLevelWithOptions($request, $runtime);
    }

    /**
     * Usage notes:
     *   * *   If you call this operation to transfer the ownership of a published task flow, the ownership transfer does not take effect.
     *   * *   You can call the [ReDeployLhDagVersion](~~424712~~) operation to redeploy a published version of a task flow.
     *   *
     * @param ChangeLhDagOwnerRequest $request ChangeLhDagOwnerRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeLhDagOwnerResponse ChangeLhDagOwnerResponse
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
     * Usage notes:
     *   * *   If you call this operation to transfer the ownership of a published task flow, the ownership transfer does not take effect.
     *   * *   You can call the [ReDeployLhDagVersion](~~424712~~) operation to redeploy a published version of a task flow.
     *   *
     * @param ChangeLhDagOwnerRequest $request ChangeLhDagOwnerRequest
     *
     * @return ChangeLhDagOwnerResponse ChangeLhDagOwnerResponse
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
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param CreateAuthorityTemplateRequest $request CreateAuthorityTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuthorityTemplateResponse CreateAuthorityTemplateResponse
     */
    public function createAuthorityTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorityTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorityTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param CreateAuthorityTemplateRequest $request CreateAuthorityTemplateRequest
     *
     * @return CreateAuthorityTemplateResponse CreateAuthorityTemplateResponse
     */
    public function createAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataArchiveOrderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataArchiveOrderResponse
     */
    public function createDataArchiveOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataArchiveOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
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
            'action'      => 'CreateDataArchiveOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataArchiveOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataArchiveOrderRequest $request
     *
     * @return CreateDataArchiveOrderResponse
     */
    public function createDataArchiveOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataArchiveOrderWithOptions($request, $runtime);
    }

    /**
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param CreateDataCorrectOrderRequest $tmpReq  CreateDataCorrectOrderRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataCorrectOrderResponse CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param CreateDataCorrectOrderRequest $request CreateDataCorrectOrderRequest
     *
     * @return CreateDataCorrectOrderResponse CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * For more information about the historical data cleaning, see [Clear historical data](~~162507~~).
     *   * This operation can be used only for MySQL databases.
     *   *
     * @param CreateDataCronClearOrderRequest $tmpReq  CreateDataCronClearOrderRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataCronClearOrderResponse CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCronClearOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * For more information about the historical data cleaning, see [Clear historical data](~~162507~~).
     *   * This operation can be used only for MySQL databases.
     *   *
     * @param CreateDataCronClearOrderRequest $request CreateDataCronClearOrderRequest
     *
     * @return CreateDataCronClearOrderResponse CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCronClearOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataExportOrderRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataExportOrderResponse
     */
    public function createDataExportOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataExportOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pluginParam)) {
            $request->pluginParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pluginParam, 'PluginParam', 'json');
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
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->pluginParamShrink)) {
            $query['PluginParam'] = $request->pluginParamShrink;
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
            'action'      => 'CreateDataExportOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataExportOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataExportOrderRequest $request
     *
     * @return CreateDataExportOrderResponse
     */
    public function createDataExportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataExportOrderWithOptions($request, $runtime);
    }

    /**
     * For more information about the Large Data Import feature, see [Import data](~~161439~~).
     *   *
     * @param CreateDataImportOrderRequest $tmpReq  CreateDataImportOrderRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataImportOrderResponse CreateDataImportOrderResponse
     */
    public function createDataImportOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataImportOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * For more information about the Large Data Import feature, see [Import data](~~161439~~).
     *   *
     * @param CreateDataImportOrderRequest $request CreateDataImportOrderRequest
     *
     * @return CreateDataImportOrderResponse CreateDataImportOrderResponse
     */
    public function createDataImportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataImportOrderWithOptions($request, $runtime);
    }

    /**
     * This operation is available only for instances that are managed in Security Collaboration mode.
     *   *
     * @param CreateDataTrackOrderRequest $tmpReq  CreateDataTrackOrderRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataTrackOrderResponse CreateDataTrackOrderResponse
     */
    public function createDataTrackOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataTrackOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
            'action'      => 'CreateDataTrackOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataTrackOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is available only for instances that are managed in Security Collaboration mode.
     *   *
     * @param CreateDataTrackOrderRequest $request CreateDataTrackOrderRequest
     *
     * @return CreateDataTrackOrderResponse CreateDataTrackOrderResponse
     */
    public function createDataTrackOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataTrackOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatabaseExportOrderRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDatabaseExportOrderResponse
     */
    public function createDatabaseExportOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDatabaseExportOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pluginParam)) {
            $request->pluginParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pluginParam, 'PluginParam', 'json');
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
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->pluginParamShrink)) {
            $query['PluginParam'] = $request->pluginParamShrink;
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
            'action'      => 'CreateDatabaseExportOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseExportOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatabaseExportOrderRequest $request
     *
     * @return CreateDatabaseExportOrderResponse
     */
    public function createDatabaseExportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseExportOrderWithOptions($request, $runtime);
    }

    /**
     * For more information about the lock-free change feature, see [Overview](~~207847~~).
     *   * This operation can be used only for instances that are managed in Stable Change or Security Collaboration mode. For more information, see [Change data without the need to lock tables](~~96145~~) and [Change schemas without locking tables](~~98373~~).
     *   *
     * @param CreateFreeLockCorrectOrderRequest $tmpReq  CreateFreeLockCorrectOrderRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFreeLockCorrectOrderResponse CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFreeLockCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * For more information about the lock-free change feature, see [Overview](~~207847~~).
     *   * This operation can be used only for instances that are managed in Stable Change or Security Collaboration mode. For more information, see [Change data without the need to lock tables](~~96145~~) and [Change schemas without locking tables](~~98373~~).
     *   *
     * @param CreateFreeLockCorrectOrderRequest $request CreateFreeLockCorrectOrderRequest
     *
     * @return CreateFreeLockCorrectOrderResponse CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFreeLockCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * *   The workspace name must be unique within a tenant. If a workspace with the same name already exists within the tenant, the call may fail.
     *   * *   You can call the [GetLhSpaceByName](~~424379~~) operation to query whether a workspace with a specific name already exists as a DMS administrator or database administrator (DBA).
     *   *
     * @param CreateLakeHouseSpaceRequest $request CreateLakeHouseSpaceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLakeHouseSpaceResponse CreateLakeHouseSpaceResponse
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
     * *   The workspace name must be unique within a tenant. If a workspace with the same name already exists within the tenant, the call may fail.
     *   * *   You can call the [GetLhSpaceByName](~~424379~~) operation to query whether a workspace with a specific name already exists as a DMS administrator or database administrator (DBA).
     *   *
     * @param CreateLakeHouseSpaceRequest $request CreateLakeHouseSpaceRequest
     *
     * @return CreateLakeHouseSpaceResponse CreateLakeHouseSpaceResponse
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
     * To facilitate ticket creation, you can call the following dedicated operations to create some types of tickets:
     *   * *   [CreateDataCorrectOrder](~~208388~~): creates a regular data change ticket.
     *   * *   [CreateDataCronClearOrder](~~208385~~): creates a ticket to clear historical data.
     *   * *   [CreateDataImportOrder](~~208387~~): creates a data import ticket.
     *   * *   [CreateFreeLockCorrectOrder](~~208386~~): creates a lock-free change ticket.
     *   *
     * @param CreateOrderRequest $tmpReq  CreateOrderRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderResponse CreateOrderResponse
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
     * To facilitate ticket creation, you can call the following dedicated operations to create some types of tickets:
     *   * *   [CreateDataCorrectOrder](~~208388~~): creates a regular data change ticket.
     *   * *   [CreateDataCronClearOrder](~~208385~~): creates a ticket to clear historical data.
     *   * *   [CreateDataImportOrder](~~208387~~): creates a data import ticket.
     *   * *   [CreateFreeLockCorrectOrder](~~208386~~): creates a lock-free change ticket.
     *   *
     * @param CreateOrderRequest $request CreateOrderRequest
     *
     * @return CreateOrderResponse CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateProcCorrectOrderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateProcCorrectOrderResponse
     */
    public function createProcCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProcCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
            'action'      => 'CreateProcCorrectOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProcCorrectOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProcCorrectOrderRequest $request
     *
     * @return CreateProcCorrectOrderResponse
     */
    public function createProcCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProcCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * - The database instance runs the MySQL or MariaDB database engine. For example, the database instance can be an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, a Distributed Relational Database Service (DRDS) cluster, or an AnalyticDB for MySQL cluster. The database instance can also be a self-managed MySQL or MariaDB database, or a MySQL or MariaDB database in a third-party cloud.
     *   * - The database instance resides in the China (Hangzhou) or China (Beijing) region.
     *   * - You are a Data Management (DMS) administrator, a database administrator (DBA), or the owner of the database instance.
     *   *
     * @param CreateProxyRequest $request CreateProxyRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProxyResponse CreateProxyResponse
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
     * - The database instance runs the MySQL or MariaDB database engine. For example, the database instance can be an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, a Distributed Relational Database Service (DRDS) cluster, or an AnalyticDB for MySQL cluster. The database instance can also be a self-managed MySQL or MariaDB database, or a MySQL or MariaDB database in a third-party cloud.
     *   * - The database instance resides in the China (Hangzhou) or China (Beijing) region.
     *   * - You are a Data Management (DMS) administrator, a database administrator (DBA), or the owner of the database instance.
     *   *
     * @param CreateProxyRequest $request CreateProxyRequest
     *
     * @return CreateProxyResponse CreateProxyResponse
     */
    public function createProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProxyWithOptions($request, $runtime);
    }

    /**
     * - The data security protection feature is enabled for the instance.
     *   * - Your user role is the administrator role, DBA role, or the owner of data security protection for the current instance.
     *   *
     * @param CreateProxyAccessRequest $request CreateProxyAccessRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProxyAccessResponse CreateProxyAccessResponse
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
     * - The data security protection feature is enabled for the instance.
     *   * - Your user role is the administrator role, DBA role, or the owner of data security protection for the current instance.
     *   *
     * @param CreateProxyAccessRequest $request CreateProxyAccessRequest
     *
     * @return CreateProxyAccessResponse CreateProxyAccessResponse
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
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param CreateSQLReviewOrderRequest $tmpReq  CreateSQLReviewOrderRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSQLReviewOrderResponse CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSQLReviewOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param CreateSQLReviewOrderRequest $request CreateSQLReviewOrderRequest
     *
     * @return CreateSQLReviewOrderResponse CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSQLReviewOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScenarioResponse
     */
    public function createScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->scenarioName)) {
            $query['ScenarioName'] = $request->scenarioName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScenario',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScenarioRequest $request
     *
     * @return CreateScenarioResponse
     */
    public function createScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScenarioWithOptions($request, $runtime);
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
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
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
     * @param CreateTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->graphParam)) {
            $query['GraphParam'] = $request->graphParam;
        }
        if (!Utils::isUnset($request->nodeContent)) {
            $query['NodeContent'] = $request->nodeContent;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->nodeOutput)) {
            $query['NodeOutput'] = $request->nodeOutput;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->timeVariables)) {
            $query['TimeVariables'] = $request->timeVariables;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTaskFlowResponse
     */
    public function createTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagName)) {
            $query['DagName'] = $request->dagName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskFlowRequest $request
     *
     * @return CreateTaskFlowResponse
     */
    public function createTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskFlowWithOptions($request, $runtime);
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
            $request->uploadTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->uploadTarget, 'UploadTarget', 'json');
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
     * @param DeleteAuthorityTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAuthorityTemplateResponse
     */
    public function deleteAuthorityTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorityTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthorityTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAuthorityTemplateRequest $request
     *
     * @return DeleteAuthorityTemplateResponse
     */
    public function deleteAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * Note: You can call this operation only to remove a database instance from the instance list of DMS. The instance is not deleted or shut down.
     *   *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
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
     * Note: You can call this operation only to remove a database instance from the instance list of DMS. The instance is not deleted or shut down.
     *   *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
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
     * You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     *   * You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](~~424761~~) operation.
     *   *
     * @param DeleteLhMembersRequest $tmpReq  DeleteLhMembersRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLhMembersResponse DeleteLhMembersResponse
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
     * You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     *   * You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](~~424761~~) operation.
     *   *
     * @param DeleteLhMembersRequest $request DeleteLhMembersRequest
     *
     * @return DeleteLhMembersResponse DeleteLhMembersResponse
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
     * After you disable this feature, your DB instance loses the JDBC protocol. All authorization information is recycled.
     *   *
     * @param DeleteProxyRequest $request DeleteProxyRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProxyResponse DeleteProxyResponse
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
     * After you disable this feature, your DB instance loses the JDBC protocol. All authorization information is recycled.
     *   *
     * @param DeleteProxyRequest $request DeleteProxyRequest
     *
     * @return DeleteProxyResponse DeleteProxyResponse
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
     * When you call this operation, make sure that no task flow is specified in the business scenario.
     *   *
     * @param DeleteScenarioRequest $request DeleteScenarioRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScenarioResponse DeleteScenarioResponse
     */
    public function deleteScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScenario',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, make sure that no task flow is specified in the business scenario.
     *   *
     * @param DeleteScenarioRequest $request DeleteScenarioRequest
     *
     * @return DeleteScenarioResponse DeleteScenarioResponse
     */
    public function deleteScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScenarioWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStandardGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteStandardGroupResponse
     */
    public function deleteStandardGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStandardGroup',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStandardGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStandardGroupRequest $request
     *
     * @return DeleteStandardGroupResponse
     */
    public function deleteStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTask',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTaskRequest $request
     *
     * @return DeleteTaskResponse
     */
    public function deleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskWithOptions($request, $runtime);
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
     * This operation is used for multi-condition query. You can call it to delete the edges of a specified task flow that meet all specified conditions.
     *   *
     * @param DeleteTaskFlowEdgesByConditionRequest $request DeleteTaskFlowEdgesByConditionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskFlowEdgesByConditionResponse DeleteTaskFlowEdgesByConditionResponse
     */
    public function deleteTaskFlowEdgesByConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->nodeEnd)) {
            $query['NodeEnd'] = $request->nodeEnd;
        }
        if (!Utils::isUnset($request->nodeFrom)) {
            $query['NodeFrom'] = $request->nodeFrom;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTaskFlowEdgesByCondition',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskFlowEdgesByConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used for multi-condition query. You can call it to delete the edges of a specified task flow that meet all specified conditions.
     *   *
     * @param DeleteTaskFlowEdgesByConditionRequest $request DeleteTaskFlowEdgesByConditionRequest
     *
     * @return DeleteTaskFlowEdgesByConditionResponse DeleteTaskFlowEdgesByConditionResponse
     */
    public function deleteTaskFlowEdgesByCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskFlowEdgesByConditionWithOptions($request, $runtime);
    }

    /**
     * The effect of deleting a user by calling this operation is the same as that of deleting a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to delete a user that is no longer used from DMS Enterprise. After the user is deleted, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     *   * >  This operation only removes the association of the Alibaba Cloud account or RAM user with DMS Enterprise of the enterprise, rather than actually deleting the Alibaba Cloud account or RAM user. After the user is deleted, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is added to DMS Enterprise again.
     *   *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
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
     * The effect of deleting a user by calling this operation is the same as that of deleting a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to delete a user that is no longer used from DMS Enterprise. After the user is deleted, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     *   * >  This operation only removes the association of the Alibaba Cloud account or RAM user with DMS Enterprise of the enterprise, rather than actually deleting the Alibaba Cloud account or RAM user. After the user is deleted, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is added to DMS Enterprise again.
     *   *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * The effect of disabling a user by calling this operation is the same as that of disabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to disable a user that is temporarily not used in DMS Enterprise. After the user is disabled, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     *   * >  This operation only stops the Alibaba Cloud account or RAM user from logging on to DMS Enterprise of the enterprise, rather than actually disabling the Alibaba Cloud account or RAM user. After the user is disabled, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is enabled again. The disabled user, however, still exists in DMS Enterprise.
     *   *
     * @param DisableUserRequest $request DisableUserRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableUserResponse DisableUserResponse
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
     * The effect of disabling a user by calling this operation is the same as that of disabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to disable a user that is temporarily not used in DMS Enterprise. After the user is disabled, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     *   * >  This operation only stops the Alibaba Cloud account or RAM user from logging on to DMS Enterprise of the enterprise, rather than actually disabling the Alibaba Cloud account or RAM user. After the user is disabled, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is enabled again. The disabled user, however, still exists in DMS Enterprise.
     *   *
     * @param DisableUserRequest $request DisableUserRequest
     *
     * @return DisableUserResponse DisableUserResponse
     */
    public function disableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserWithOptions($request, $runtime);
    }

    /**
     * @param DownloadDataTrackResultRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DownloadDataTrackResultResponse
     */
    public function downloadDataTrackResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DownloadDataTrackResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnFilter)) {
            $request->columnFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnFilter, 'ColumnFilter', 'json');
        }
        if (!Utils::isUnset($tmpReq->eventIdList)) {
            $request->eventIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventIdList, 'EventIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTableList)) {
            $request->filterTableListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTableList, 'FilterTableList', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTypeList)) {
            $request->filterTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTypeList, 'FilterTypeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->columnFilterShrink)) {
            $query['ColumnFilter'] = $request->columnFilterShrink;
        }
        if (!Utils::isUnset($request->eventIdListShrink)) {
            $query['EventIdList'] = $request->eventIdListShrink;
        }
        if (!Utils::isUnset($request->filterEndTime)) {
            $query['FilterEndTime'] = $request->filterEndTime;
        }
        if (!Utils::isUnset($request->filterStartTime)) {
            $query['FilterStartTime'] = $request->filterStartTime;
        }
        if (!Utils::isUnset($request->filterTableListShrink)) {
            $query['FilterTableList'] = $request->filterTableListShrink;
        }
        if (!Utils::isUnset($request->filterTypeListShrink)) {
            $query['FilterTypeList'] = $request->filterTypeListShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->rollbackSQLType)) {
            $query['RollbackSQLType'] = $request->rollbackSQLType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadDataTrackResult',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadDataTrackResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadDataTrackResultRequest $request
     *
     * @return DownloadDataTrackResultResponse
     */
    public function downloadDataTrackResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDataTrackResultWithOptions($request, $runtime);
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
     * The effect of enabling a user by calling this operation is the same as that of enabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to enable a user that has been disabled in DMS Enterprise. After the user is enabled, the corresponding Alibaba Cloud account or Resource Access Management (RAM) user can continue to log on to DMS Enterprise and perform relevant operations.
     *   * >  This operation only enables the Alibaba Cloud account or RAM user to log on to DMS Enterprise of the enterprise and perform relevant operations, rather than granting other permissions to the Alibaba Cloud account or RAM user.
     *   *
     * @param EnableUserRequest $request EnableUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableUserResponse EnableUserResponse
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
     * The effect of enabling a user by calling this operation is the same as that of enabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to enable a user that has been disabled in DMS Enterprise. After the user is enabled, the corresponding Alibaba Cloud account or Resource Access Management (RAM) user can continue to log on to DMS Enterprise and perform relevant operations.
     *   * >  This operation only enables the Alibaba Cloud account or RAM user to log on to DMS Enterprise of the enterprise and perform relevant operations, rather than granting other permissions to the Alibaba Cloud account or RAM user.
     *   *
     * @param EnableUserRequest $request EnableUserRequest
     *
     * @return EnableUserResponse EnableUserResponse
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
     * You can call this operation only for instances that are managed in Security Collaboration mode.
     *   *
     * @param ExecuteScriptRequest $request ExecuteScriptRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteScriptResponse ExecuteScriptResponse
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
     * You can call this operation only for instances that are managed in Security Collaboration mode.
     *   *
     * @param ExecuteScriptRequest $request ExecuteScriptRequest
     *
     * @return ExecuteScriptResponse ExecuteScriptResponse
     */
    public function executeScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeScriptWithOptions($request, $runtime);
    }

    /**
     * If the security rules of an instance indicate that a ticket must be approved before you perform schema synchronization, you can call the [SubmitStructSyncOrderApproval](~~206166~~) operation to submit the ticket for approval.
     *   * >  You can call the [GetStructSyncJobDetail](~~206160~~) operation to query whether you need to submit a ticket for approval.
     *   *
     * @param ExecuteStructSyncRequest $request ExecuteStructSyncRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteStructSyncResponse ExecuteStructSyncResponse
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
     * If the security rules of an instance indicate that a ticket must be approved before you perform schema synchronization, you can call the [SubmitStructSyncOrderApproval](~~206166~~) operation to submit the ticket for approval.
     *   * >  You can call the [GetStructSyncJobDetail](~~206160~~) operation to query whether you need to submit a ticket for approval.
     *   *
     * @param ExecuteStructSyncRequest $request ExecuteStructSyncRequest
     *
     * @return ExecuteStructSyncResponse ExecuteStructSyncResponse
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
     * You must be a Data Management (DMS) administrator or a database administrator (DBA). For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GetAuthorityTemplateRequest $request GetAuthorityTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthorityTemplateResponse GetAuthorityTemplateResponse
     */
    public function getAuthorityTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorityTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthorityTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must be a Data Management (DMS) administrator or a database administrator (DBA). For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GetAuthorityTemplateRequest $request GetAuthorityTemplateRequest
     *
     * @return GetAuthorityTemplateResponse GetAuthorityTemplateResponse
     */
    public function getAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GetAuthorityTemplateItemRequest $request GetAuthorityTemplateItemRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthorityTemplateItemResponse GetAuthorityTemplateItemResponse
     */
    public function getAuthorityTemplateItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorityTemplateItem',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthorityTemplateItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GetAuthorityTemplateItemRequest $request GetAuthorityTemplateItemRequest
     *
     * @return GetAuthorityTemplateItemResponse GetAuthorityTemplateItemResponse
     */
    public function getAuthorityTemplateItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorityTemplateItemWithOptions($request, $runtime);
    }

    /**
     * @param GetClassificationTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetClassificationTemplateResponse
     */
    public function getClassificationTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'GetClassificationTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClassificationTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClassificationTemplateRequest $request
     *
     * @return GetClassificationTemplateResponse
     */
    public function getClassificationTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClassificationTemplateWithOptions($request, $runtime);
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
     * @param GetDataArchiveCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataArchiveCountResponse
     */
    public function getDataArchiveCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderResultType)) {
            $query['OrderResultType'] = $request->orderResultType;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
        }
        if (!Utils::isUnset($request->searchDateType)) {
            $query['SearchDateType'] = $request->searchDateType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataArchiveCount',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataArchiveCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataArchiveCountRequest $request
     *
     * @return GetDataArchiveCountResponse
     */
    public function getDataArchiveCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataArchiveCountWithOptions($request, $runtime);
    }

    /**
     * @param GetDataArchiveOrderDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataArchiveOrderDetailResponse
     */
    public function getDataArchiveOrderDetailWithOptions($request, $runtime)
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
            'action'      => 'GetDataArchiveOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataArchiveOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataArchiveOrderDetailRequest $request
     *
     * @return GetDataArchiveOrderDetailResponse
     */
    public function getDataArchiveOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataArchiveOrderDetailWithOptions($request, $runtime);
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
     * @param GetDataCorrectRollbackFileRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataCorrectRollbackFileResponse
     */
    public function getDataCorrectRollbackFileWithOptions($request, $runtime)
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
            'action'      => 'GetDataCorrectRollbackFile',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCorrectRollbackFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCorrectRollbackFileRequest $request
     *
     * @return GetDataCorrectRollbackFileResponse
     */
    public function getDataCorrectRollbackFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectRollbackFileWithOptions($request, $runtime);
    }

    /**
     * This operation applies to [regular data change](~~58419~~) and [batch data import](~~144643~~).
     *   *
     * @param GetDataCorrectSQLFileRequest $request GetDataCorrectSQLFileRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCorrectSQLFileResponse GetDataCorrectSQLFileResponse
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
     * This operation applies to [regular data change](~~58419~~) and [batch data import](~~144643~~).
     *   *
     * @param GetDataCorrectSQLFileRequest $request GetDataCorrectSQLFileRequest
     *
     * @return GetDataCorrectSQLFileResponse GetDataCorrectSQLFileResponse
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
     * @param GetDataCronClearConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDataCronClearConfigResponse
     */
    public function getDataCronClearConfigWithOptions($request, $runtime)
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
            'action'      => 'GetDataCronClearConfig',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataCronClearConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataCronClearConfigRequest $request
     *
     * @return GetDataCronClearConfigResponse
     */
    public function getDataCronClearConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCronClearConfigWithOptions($request, $runtime);
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
     * @param GetDataExportPreCheckDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDataExportPreCheckDetailResponse
     */
    public function getDataExportPreCheckDetailWithOptions($request, $runtime)
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
            'action'      => 'GetDataExportPreCheckDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataExportPreCheckDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataExportPreCheckDetailRequest $request
     *
     * @return GetDataExportPreCheckDetailResponse
     */
    public function getDataExportPreCheckDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportPreCheckDetailWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param GetDataImportSQLRequest $request GetDataImportSQLRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataImportSQLResponse GetDataImportSQLResponse
     */
    public function getDataImportSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $query['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataImportSQL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataImportSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param GetDataImportSQLRequest $request GetDataImportSQLRequest
     *
     * @return GetDataImportSQLResponse GetDataImportSQLResponse
     */
    public function getDataImportSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataImportSQLWithOptions($request, $runtime);
    }

    /**
     * @param GetDataTrackJobDegreeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDataTrackJobDegreeResponse
     */
    public function getDataTrackJobDegreeWithOptions($request, $runtime)
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
            'action'      => 'GetDataTrackJobDegree',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataTrackJobDegreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataTrackJobDegreeRequest $request
     *
     * @return GetDataTrackJobDegreeResponse
     */
    public function getDataTrackJobDegree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackJobDegreeWithOptions($request, $runtime);
    }

    /**
     * @param GetDataTrackJobTableMetaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataTrackJobTableMetaResponse
     */
    public function getDataTrackJobTableMetaWithOptions($request, $runtime)
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
            'action'      => 'GetDataTrackJobTableMeta',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataTrackJobTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataTrackJobTableMetaRequest $request
     *
     * @return GetDataTrackJobTableMetaResponse
     */
    public function getDataTrackJobTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackJobTableMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetDataTrackOrderDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDataTrackOrderDetailResponse
     */
    public function getDataTrackOrderDetailWithOptions($request, $runtime)
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
            'action'      => 'GetDataTrackOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataTrackOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataTrackOrderDetailRequest $request
     *
     * @return GetDataTrackOrderDetailResponse
     */
    public function getDataTrackOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackOrderDetailWithOptions($request, $runtime);
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
     * @param GetDatabaseExportOrderDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDatabaseExportOrderDetailResponse
     */
    public function getDatabaseExportOrderDetailWithOptions($request, $runtime)
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
            'action'      => 'GetDatabaseExportOrderDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseExportOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDatabaseExportOrderDetailRequest $request
     *
     * @return GetDatabaseExportOrderDetailResponse
     */
    public function getDatabaseExportOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseExportOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDbExportDownloadURLRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDbExportDownloadURLResponse
     */
    public function getDbExportDownloadURLWithOptions($request, $runtime)
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
            'action'      => 'GetDbExportDownloadURL',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDbExportDownloadURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDbExportDownloadURLRequest $request
     *
     * @return GetDbExportDownloadURLResponse
     */
    public function getDbExportDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbExportDownloadURLWithOptions($request, $runtime);
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
     * The scheduling cycle of a task flow must be greater than the minimum scheduling cycle configured in the SLA rule for the task flow.
     *   *
     * @param GetIntervalLimitOfSLARequest $request GetIntervalLimitOfSLARequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIntervalLimitOfSLAResponse GetIntervalLimitOfSLAResponse
     */
    public function getIntervalLimitOfSLAWithOptions($request, $runtime)
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
            'action'      => 'GetIntervalLimitOfSLA',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntervalLimitOfSLAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The scheduling cycle of a task flow must be greater than the minimum scheduling cycle configured in the SLA rule for the task flow.
     *   *
     * @param GetIntervalLimitOfSLARequest $request GetIntervalLimitOfSLARequest
     *
     * @return GetIntervalLimitOfSLAResponse GetIntervalLimitOfSLAResponse
     */
    public function getIntervalLimitOfSLA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntervalLimitOfSLAWithOptions($request, $runtime);
    }

    /**
     * You are a DMS administrator or a database administrator (DBA).
     *   *
     * @param GetLhSpaceByNameRequest $request GetLhSpaceByNameRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLhSpaceByNameResponse GetLhSpaceByNameResponse
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
     * You are a DMS administrator or a database administrator (DBA).
     *   *
     * @param GetLhSpaceByNameRequest $request GetLhSpaceByNameRequest
     *
     * @return GetLhSpaceByNameResponse GetLhSpaceByNameResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param GetMetaTableColumnRequest $request GetMetaTableColumnRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMetaTableColumnResponse GetMetaTableColumnResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param GetMetaTableColumnRequest $request GetMetaTableColumnRequest
     *
     * @return GetMetaTableColumnResponse GetMetaTableColumnResponse
     */
    public function getMetaTableColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumnWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param GetMetaTableDetailInfoRequest $request GetMetaTableDetailInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMetaTableDetailInfoResponse GetMetaTableDetailInfoResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param GetMetaTableDetailInfoRequest $request GetMetaTableDetailInfoRequest
     *
     * @return GetMetaTableDetailInfoResponse GetMetaTableDetailInfoResponse
     */
    public function getMetaTableDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableDetailInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOnlineDDLProgressRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetOnlineDDLProgressResponse
     */
    public function getOnlineDDLProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobDetailId)) {
            $query['JobDetailId'] = $request->jobDetailId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOnlineDDLProgress',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOnlineDDLProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOnlineDDLProgressRequest $request
     *
     * @return GetOnlineDDLProgressResponse
     */
    public function getOnlineDDLProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineDDLProgressWithOptions($request, $runtime);
    }

    /**
     * Prerequisites: You are an administrator of Data Management (DMS) or a security administrator. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to obtain your user role from the RoleIdList parameter that is returned.
     *   *
     * @param GetOpLogRequest $request GetOpLogRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOpLogResponse GetOpLogResponse
     */
    public function getOpLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
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
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
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
     * Prerequisites: You are an administrator of Data Management (DMS) or a security administrator. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to obtain your user role from the RoleIdList parameter that is returned.
     *   *
     * @param GetOpLogRequest $request GetOpLogRequest
     *
     * @return GetOpLogResponse GetOpLogResponse
     */
    public function getOpLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpLogWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderAttachmentFileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOrderAttachmentFileResponse
     */
    public function getOrderAttachmentFileWithOptions($request, $runtime)
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
            'action'      => 'GetOrderAttachmentFile',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderAttachmentFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderAttachmentFileRequest $request
     *
     * @return GetOrderAttachmentFileResponse
     */
    public function getOrderAttachmentFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderAttachmentFileWithOptions($request, $runtime);
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
     * @param GetPagedInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPagedInstanceResponse
     */
    public function getPagedInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPagedInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPagedInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPagedInstanceRequest $request
     *
     * @return GetPagedInstanceResponse
     */
    public function getPagedInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPagedInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the information about tickets that apply for permissions on databases, tables, and sensitive columns.
     *   *
     * @param GetPermApplyOrderDetailRequest $request GetPermApplyOrderDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPermApplyOrderDetailResponse GetPermApplyOrderDetailResponse
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
     * You can call this operation to query the information about tickets that apply for permissions on databases, tables, and sensitive columns.
     *   *
     * @param GetPermApplyOrderDetailRequest $request GetPermApplyOrderDetailRequest
     *
     * @return GetPermApplyOrderDetailResponse GetPermApplyOrderDetailResponse
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
     * @param GetProxyAccessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProxyAccessResponse
     */
    public function getProxyAccessWithOptions($request, $runtime)
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
            'action'      => 'GetProxyAccess',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProxyAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProxyAccessRequest $request
     *
     * @return GetProxyAccessResponse
     */
    public function getProxyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyAccessWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleNumLimitOfSLARequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetRuleNumLimitOfSLAResponse
     */
    public function getRuleNumLimitOfSLAWithOptions($request, $runtime)
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
            'action'      => 'GetRuleNumLimitOfSLA',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleNumLimitOfSLAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRuleNumLimitOfSLARequest $request
     *
     * @return GetRuleNumLimitOfSLAResponse
     */
    public function getRuleNumLimitOfSLA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleNumLimitOfSLAWithOptions($request, $runtime);
    }

    /**
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param GetSQLReviewCheckResultStatusRequest $request GetSQLReviewCheckResultStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSQLReviewCheckResultStatusResponse GetSQLReviewCheckResultStatusResponse
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
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param GetSQLReviewCheckResultStatusRequest $request GetSQLReviewCheckResultStatusRequest
     *
     * @return GetSQLReviewCheckResultStatusResponse GetSQLReviewCheckResultStatusResponse
     */
    public function getSQLReviewCheckResultStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewCheckResultStatusWithOptions($request, $runtime);
    }

    /**
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param GetSQLReviewOptimizeDetailRequest $request GetSQLReviewOptimizeDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSQLReviewOptimizeDetailResponse GetSQLReviewOptimizeDetailResponse
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
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param GetSQLReviewOptimizeDetailRequest $request GetSQLReviewOptimizeDetailRequest
     *
     * @return GetSQLReviewOptimizeDetailResponse GetSQLReviewOptimizeDetailResponse
     */
    public function getSQLReviewOptimizeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewOptimizeDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetStandardGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStandardGroupResponse
     */
    public function getStandardGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStandardGroup',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStandardGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStandardGroupRequest $request
     *
     * @return GetStandardGroupResponse
     */
    public function getStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandardGroupWithOptions($request, $runtime);
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
     * @param GetTableDesignProjectFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTableDesignProjectFlowResponse
     */
    public function getTableDesignProjectFlowWithOptions($request, $runtime)
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
            'action'      => 'GetTableDesignProjectFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableDesignProjectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTableDesignProjectFlowRequest $request
     *
     * @return GetTableDesignProjectFlowResponse
     */
    public function getTableDesignProjectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDesignProjectFlowWithOptions($request, $runtime);
    }

    /**
     * @param GetTableDesignProjectInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTableDesignProjectInfoResponse
     */
    public function getTableDesignProjectInfoWithOptions($request, $runtime)
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
            'action'      => 'GetTableDesignProjectInfo',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableDesignProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTableDesignProjectInfoRequest $request
     *
     * @return GetTableDesignProjectInfoResponse
     */
    public function getTableDesignProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDesignProjectInfoWithOptions($request, $runtime);
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
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskFlowGraphRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTaskFlowGraphResponse
     */
    public function getTaskFlowGraphWithOptions($request, $runtime)
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
            'action'      => 'GetTaskFlowGraph',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskFlowGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskFlowGraphRequest $request
     *
     * @return GetTaskFlowGraphResponse
     */
    public function getTaskFlowGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskFlowGraphWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskFlowNotificationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTaskFlowNotificationResponse
     */
    public function getTaskFlowNotificationWithOptions($request, $runtime)
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
            'action'      => 'GetTaskFlowNotification',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskFlowNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskFlowNotificationRequest $request
     *
     * @return GetTaskFlowNotificationResponse
     */
    public function getTaskFlowNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskFlowNotificationWithOptions($request, $runtime);
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
     * You must be a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GrantTemplateAuthorityRequest $request GrantTemplateAuthorityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantTemplateAuthorityResponse GrantTemplateAuthorityResponse
     */
    public function grantTemplateAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->expireDate)) {
            $query['ExpireDate'] = $request->expireDate;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantTemplateAuthority',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantTemplateAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must be a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param GrantTemplateAuthorityRequest $request GrantTemplateAuthorityRequest
     *
     * @return GrantTemplateAuthorityResponse GrantTemplateAuthorityResponse
     */
    public function grantTemplateAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantTemplateAuthorityWithOptions($request, $runtime);
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
     * @param ListAuthorityTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAuthorityTemplateResponse
     */
    public function listAuthorityTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListAuthorityTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthorityTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthorityTemplateRequest $request
     *
     * @return ListAuthorityTemplateResponse
     */
    public function listAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListClassificationTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClassificationTemplatesResponse
     */
    public function listClassificationTemplatesWithOptions($request, $runtime)
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
            'action'      => 'ListClassificationTemplates',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClassificationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClassificationTemplatesRequest $request
     *
     * @return ListClassificationTemplatesResponse
     */
    public function listClassificationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassificationTemplatesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param ListColumnsRequest $request ListColumnsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListColumnsResponse ListColumnsResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param ListColumnsRequest $request ListColumnsRequest
     *
     * @return ListColumnsResponse ListColumnsResponse
     */
    public function listColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listColumnsWithOptions($request, $runtime);
    }

    /**
     * @param ListDAGVersionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDAGVersionsResponse
     */
    public function listDAGVersionsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDAGVersions',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDAGVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDAGVersionsRequest $request
     *
     * @return ListDAGVersionsResponse
     */
    public function listDAGVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDAGVersionsWithOptions($request, $runtime);
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
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param ListDataCorrectPreCheckDBRequest $request ListDataCorrectPreCheckDBRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataCorrectPreCheckDBResponse ListDataCorrectPreCheckDBResponse
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
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param ListDataCorrectPreCheckDBRequest $request ListDataCorrectPreCheckDBRequest
     *
     * @return ListDataCorrectPreCheckDBResponse ListDataCorrectPreCheckDBResponse
     */
    public function listDataCorrectPreCheckDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckDBWithOptions($request, $runtime);
    }

    /**
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param ListDataCorrectPreCheckSQLRequest $request ListDataCorrectPreCheckSQLRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataCorrectPreCheckSQLResponse ListDataCorrectPreCheckSQLResponse
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
     * For more information about the Normal Data Modify feature, see [Change regular data](~~58419~~).
     *   *
     * @param ListDataCorrectPreCheckSQLRequest $request ListDataCorrectPreCheckSQLRequest
     *
     * @return ListDataCorrectPreCheckSQLResponse ListDataCorrectPreCheckSQLResponse
     */
    public function listDataCorrectPreCheckSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckSQLWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param ListDataImportSQLPreCheckDetailRequest $request ListDataImportSQLPreCheckDetailRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataImportSQLPreCheckDetailResponse ListDataImportSQLPreCheckDetailResponse
     */
    public function listDataImportSQLPreCheckDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumer)) {
            $query['PageNumer'] = $request->pageNumer;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataImportSQLPreCheckDetail',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataImportSQLPreCheckDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param ListDataImportSQLPreCheckDetailRequest $request ListDataImportSQLPreCheckDetailRequest
     *
     * @return ListDataImportSQLPreCheckDetailResponse ListDataImportSQLPreCheckDetailResponse
     */
    public function listDataImportSQLPreCheckDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataImportSQLPreCheckDetailWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param ListDataImportSQLTypeRequest $request ListDataImportSQLTypeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataImportSQLTypeResponse ListDataImportSQLTypeResponse
     */
    public function listDataImportSQLTypeWithOptions($request, $runtime)
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
            'action'      => 'ListDataImportSQLType',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataImportSQLTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation only if the data is imported in security mode in your data import ticket.
     *   *
     * @param ListDataImportSQLTypeRequest $request ListDataImportSQLTypeRequest
     *
     * @return ListDataImportSQLTypeResponse ListDataImportSQLTypeResponse
     */
    public function listDataImportSQLType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataImportSQLTypeWithOptions($request, $runtime);
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
     * @param ListDefaultSLARulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDefaultSLARulesResponse
     */
    public function listDefaultSLARulesWithOptions($request, $runtime)
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
            'action'      => 'ListDefaultSLARules',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDefaultSLARulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDefaultSLARulesRequest $request
     *
     * @return ListDefaultSLARulesResponse
     */
    public function listDefaultSLARules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDefaultSLARulesWithOptions($request, $runtime);
    }

    /**
     * @param ListDesensitizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDesensitizationRuleResponse
     */
    public function listDesensitizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->funcType)) {
            $query['FuncType'] = $request->funcType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDesensitizationRule',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDesensitizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDesensitizationRuleRequest $request
     *
     * @return ListDesensitizationRuleResponse
     */
    public function listDesensitizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDesensitizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListEffectiveOrdersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEffectiveOrdersResponse
     */
    public function listEffectiveOrdersWithOptions($request, $runtime)
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
            'action'      => 'ListEffectiveOrders',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEffectiveOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEffectiveOrdersRequest $request
     *
     * @return ListEffectiveOrdersResponse
     */
    public function listEffectiveOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEffectiveOrdersWithOptions($request, $runtime);
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
     * *   Before you call this operation, make sure that you have the access permissions on the workspace. If you do not have the access permissions on the workspace, you can contact a DMS administrator, database administrator (DBA), or workspace administrator to add you as a member of the workspace. The [AddLhMembers](~~424759~~) operation can be called to add a workspace member.
     *   * *   If you are a DMS administrator or a workspace administrator, you can query the business scenarios and task flows related to a user in a workspace based on the user ID.
     *   *
     * @param ListLhTaskFlowAndScenarioRequest $request ListLhTaskFlowAndScenarioRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLhTaskFlowAndScenarioResponse ListLhTaskFlowAndScenarioResponse
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
     * *   Before you call this operation, make sure that you have the access permissions on the workspace. If you do not have the access permissions on the workspace, you can contact a DMS administrator, database administrator (DBA), or workspace administrator to add you as a member of the workspace. The [AddLhMembers](~~424759~~) operation can be called to add a workspace member.
     *   * *   If you are a DMS administrator or a workspace administrator, you can query the business scenarios and task flows related to a user in a workspace based on the user ID.
     *   *
     * @param ListLhTaskFlowAndScenarioRequest $request ListLhTaskFlowAndScenarioRequest
     *
     * @return ListLhTaskFlowAndScenarioResponse ListLhTaskFlowAndScenarioResponse
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
     * @param ListSLARulesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSLARulesResponse
     */
    public function listSLARulesWithOptions($request, $runtime)
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
            'action'      => 'ListSLARules',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSLARulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSLARulesRequest $request
     *
     * @return ListSLARulesResponse
     */
    public function listSLARules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSLARulesWithOptions($request, $runtime);
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
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param ListSQLReviewOriginSQLRequest $tmpReq  ListSQLReviewOriginSQLRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSQLReviewOriginSQLResponse ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQLWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSQLReviewOriginSQLShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderActionDetail)) {
            $request->orderActionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderActionDetail, 'OrderActionDetail', 'json');
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
     * For more information about the SQL review feature, see [SQL review](~~60374~~).
     *   *
     * @param ListSQLReviewOriginSQLRequest $request ListSQLReviewOriginSQLRequest
     *
     * @return ListSQLReviewOriginSQLResponse ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSQLReviewOriginSQLWithOptions($request, $runtime);
    }

    /**
     * @param ListScenariosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListScenariosResponse
     */
    public function listScenariosWithOptions($request, $runtime)
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
            'action'      => 'ListScenarios',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScenariosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScenariosRequest $request
     *
     * @return ListScenariosResponse
     */
    public function listScenarios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenariosWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitiveColumnInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSensitiveColumnInfoResponse
     */
    public function listSensitiveColumnInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListSensitiveColumnInfo',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveColumnInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitiveColumnInfoRequest $request
     *
     * @return ListSensitiveColumnInfoResponse
     */
    public function listSensitiveColumnInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnInfoWithOptions($request, $runtime);
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
     * @param ListSensitiveDataAuditLogRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSensitiveDataAuditLogResponse
     */
    public function listSensitiveDataAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
            'action'      => 'ListSensitiveDataAuditLog',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveDataAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitiveDataAuditLogRequest $request
     *
     * @return ListSensitiveDataAuditLogResponse
     */
    public function listSensitiveDataAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveDataAuditLogWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitivityLevelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSensitivityLevelResponse
     */
    public function listSensitivityLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSensitivityLevel',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitivityLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitivityLevelRequest $request
     *
     * @return ListSensitivityLevelResponse
     */
    public function listSensitivityLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitivityLevelWithOptions($request, $runtime);
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param ListTablesRequest $request ListTablesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTablesResponse ListTablesResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param ListTablesRequest $request ListTablesRequest
     *
     * @return ListTablesResponse ListTablesResponse
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
     * @param ListTaskFlowConstantsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTaskFlowConstantsResponse
     */
    public function listTaskFlowConstantsWithOptions($request, $runtime)
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
            'action'      => 'ListTaskFlowConstants',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowConstantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowConstantsRequest $request
     *
     * @return ListTaskFlowConstantsResponse
     */
    public function listTaskFlowConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowConstantsWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskFlowCooperatorsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTaskFlowCooperatorsResponse
     */
    public function listTaskFlowCooperatorsWithOptions($request, $runtime)
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
            'action'      => 'ListTaskFlowCooperators',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowCooperatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowCooperatorsRequest $request
     *
     * @return ListTaskFlowCooperatorsResponse
     */
    public function listTaskFlowCooperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowCooperatorsWithOptions($request, $runtime);
    }

    /**
     * This operation is used for multi-condition query. You can call this operation to query the edges of a specified task flow that meet all specified conditions.
     *   *
     * @param ListTaskFlowEdgesByConditionRequest $request ListTaskFlowEdgesByConditionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowEdgesByConditionResponse ListTaskFlowEdgesByConditionResponse
     */
    public function listTaskFlowEdgesByConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->nodeEnd)) {
            $query['NodeEnd'] = $request->nodeEnd;
        }
        if (!Utils::isUnset($request->nodeFrom)) {
            $query['NodeFrom'] = $request->nodeFrom;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskFlowEdgesByCondition',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowEdgesByConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used for multi-condition query. You can call this operation to query the edges of a specified task flow that meet all specified conditions.
     *   *
     * @param ListTaskFlowEdgesByConditionRequest $request ListTaskFlowEdgesByConditionRequest
     *
     * @return ListTaskFlowEdgesByConditionResponse ListTaskFlowEdgesByConditionResponse
     */
    public function listTaskFlowEdgesByCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowEdgesByConditionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $query['TriggerType'] = $request->triggerType;
        }
        if (!Utils::isUnset($request->useBizDate)) {
            $query['UseBizDate'] = $request->useBizDate;
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
     * @param ListTaskFlowTimeVariablesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListTaskFlowTimeVariablesResponse
     */
    public function listTaskFlowTimeVariablesWithOptions($request, $runtime)
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
            'action'      => 'ListTaskFlowTimeVariables',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowTimeVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowTimeVariablesRequest $request
     *
     * @return ListTaskFlowTimeVariablesResponse
     */
    public function listTaskFlowTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowTimeVariablesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskFlowsByPageRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListTaskFlowsByPageResponse
     */
    public function listTaskFlowsByPageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTaskFlowsByPageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dagIdList)) {
            $request->dagIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dagIdList, 'DagIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagIdListShrink)) {
            $query['DagIdList'] = $request->dagIdListShrink;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
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
            'action'      => 'ListTaskFlowsByPage',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskFlowsByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskFlowsByPageRequest $request
     *
     * @return ListTaskFlowsByPageResponse
     */
    public function listTaskFlowsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowsByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksInTaskFlowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTasksInTaskFlowResponse
     */
    public function listTasksInTaskFlowWithOptions($request, $runtime)
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
            'action'      => 'ListTasksInTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksInTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksInTaskFlowRequest $request
     *
     * @return ListTasksInTaskFlowResponse
     */
    public function listTasksInTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksInTaskFlowWithOptions($request, $runtime);
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
     * @param MakeTaskFlowInstanceSuccessRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return MakeTaskFlowInstanceSuccessResponse
     */
    public function makeTaskFlowInstanceSuccessWithOptions($request, $runtime)
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
            'action'      => 'MakeTaskFlowInstanceSuccess',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MakeTaskFlowInstanceSuccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MakeTaskFlowInstanceSuccessRequest $request
     *
     * @return MakeTaskFlowInstanceSuccessResponse
     */
    public function makeTaskFlowInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeTaskFlowInstanceSuccessWithOptions($request, $runtime);
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
     * @param ModifyDesensitizationStrategyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDesensitizationStrategyResponse
     */
    public function modifyDesensitizationStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dbId)) {
            $query['DbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->isLogic)) {
            $query['IsLogic'] = $request->isLogic;
        }
        if (!Utils::isUnset($request->isReset)) {
            $query['IsReset'] = $request->isReset;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
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
            'action'      => 'ModifyDesensitizationStrategy',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesensitizationStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDesensitizationStrategyRequest $request
     *
     * @return ModifyDesensitizationStrategyResponse
     */
    public function modifyDesensitizationStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesensitizationStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->enableSellCommon)) {
            $query['EnableSellCommon'] = $request->enableSellCommon;
        }
        if (!Utils::isUnset($request->enableSellSitd)) {
            $query['EnableSellSitd'] = $request->enableSellSitd;
        }
        if (!Utils::isUnset($request->enableSellStable)) {
            $query['EnableSellStable'] = $request->enableSellStable;
        }
        if (!Utils::isUnset($request->enableSellTrust)) {
            $query['EnableSellTrust'] = $request->enableSellTrust;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->useDsql)) {
            $query['UseDsql'] = $request->useDsql;
        }
        if (!Utils::isUnset($request->useSsl)) {
            $query['UseSsl'] = $request->useSsl;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param MoveTaskFlowToScenarioRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return MoveTaskFlowToScenarioResponse
     */
    public function moveTaskFlowToScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveTaskFlowToScenario',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveTaskFlowToScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveTaskFlowToScenarioRequest $request
     *
     * @return MoveTaskFlowToScenarioResponse
     */
    public function moveTaskFlowToScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveTaskFlowToScenarioWithOptions($request, $runtime);
    }

    /**
     * @param OfflineTaskFlowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OfflineTaskFlowResponse
     */
    public function offlineTaskFlowWithOptions($request, $runtime)
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
            'action'      => 'OfflineTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OfflineTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OfflineTaskFlowRequest $request
     *
     * @return OfflineTaskFlowResponse
     */
    public function offlineTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineTaskFlowWithOptions($request, $runtime);
    }

    /**
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   *
     * @param PauseDataCorrectSQLJobRequest $request PauseDataCorrectSQLJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseDataCorrectSQLJobResponse PauseDataCorrectSQLJobResponse
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
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   *
     * @param PauseDataCorrectSQLJobRequest $request PauseDataCorrectSQLJobRequest
     *
     * @return PauseDataCorrectSQLJobResponse PauseDataCorrectSQLJobResponse
     */
    public function pauseDataCorrectSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseDataCorrectSQLJobWithOptions($request, $runtime);
    }

    /**
     * @param PreviewWorkflowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PreviewWorkflowResponse
     */
    public function previewWorkflowWithOptions($request, $runtime)
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
            'action'      => 'PreviewWorkflow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreviewWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreviewWorkflowRequest $request
     *
     * @return PreviewWorkflowResponse
     */
    public function previewWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param PublishAndDeployTaskFlowRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PublishAndDeployTaskFlowResponse
     */
    public function publishAndDeployTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->versionComments)) {
            $query['VersionComments'] = $request->versionComments;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishAndDeployTaskFlow',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishAndDeployTaskFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishAndDeployTaskFlowRequest $request
     *
     * @return PublishAndDeployTaskFlowResponse
     */
    public function publishAndDeployTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishAndDeployTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @param QueryDataTrackResultDownloadStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryDataTrackResultDownloadStatusResponse
     */
    public function queryDataTrackResultDownloadStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->downloadKeyId)) {
            $query['DownloadKeyId'] = $request->downloadKeyId;
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
            'action'      => 'QueryDataTrackResultDownloadStatus',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDataTrackResultDownloadStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDataTrackResultDownloadStatusRequest $request
     *
     * @return QueryDataTrackResultDownloadStatusResponse
     */
    public function queryDataTrackResultDownloadStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataTrackResultDownloadStatusWithOptions($request, $runtime);
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
     * @param ReRunTaskFlowInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReRunTaskFlowInstanceResponse
     */
    public function reRunTaskFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagInstanceId)) {
            $query['DagInstanceId'] = $request->dagInstanceId;
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
            'action'      => 'ReRunTaskFlowInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReRunTaskFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReRunTaskFlowInstanceRequest $request
     *
     * @return ReRunTaskFlowInstanceResponse
     */
    public function reRunTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reRunTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RefundPayAsYouGoOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RefundPayAsYouGoOrderResponse
     */
    public function refundPayAsYouGoOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'RefundPayAsYouGoOrder',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundPayAsYouGoOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundPayAsYouGoOrderRequest $request
     *
     * @return RefundPayAsYouGoOrderResponse
     */
    public function refundPayAsYouGoOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundPayAsYouGoOrderWithOptions($request, $runtime);
    }

    /**
     * Prerequisites: You are a DMS administrator or a database administrator (DBA). You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to query your user role from the RoleIdList parameter that is returned.
     *   *
     * @param RegisterInstanceRequest $request RegisterInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterInstanceResponse RegisterInstanceResponse
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
        if (!Utils::isUnset($request->dbaUidByString)) {
            $query['DbaUidByString'] = $request->dbaUidByString;
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
        if (!Utils::isUnset($request->enableSellSitd)) {
            $query['EnableSellSitd'] = $request->enableSellSitd;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
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
     * Prerequisites: You are a DMS administrator or a database administrator (DBA). You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to query your user role from the RoleIdList parameter that is returned.
     *   *
     * @param RegisterInstanceRequest $request RegisterInstanceRequest
     *
     * @return RegisterInstanceResponse RegisterInstanceResponse
     */
    public function registerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerInstanceWithOptions($request, $runtime);
    }

    /**
     * If you are an **administrator** in Data Management (DMS), you can call this operation to register a user for your enterprise. To view users that are assigned the administrator role, perform the following steps: Log on to the DMS console. In the top navigation bar, click O&M. In the left-side navigation pane, click User.
     *   *
     * @param RegisterUserRequest $request RegisterUserRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterUserResponse RegisterUserResponse
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
     * If you are an **administrator** in Data Management (DMS), you can call this operation to register a user for your enterprise. To view users that are assigned the administrator role, perform the following steps: Log on to the DMS console. In the top navigation bar, click O&M. In the left-side navigation pane, click User.
     *   *
     * @param RegisterUserRequest $request RegisterUserRequest
     *
     * @return RegisterUserResponse RegisterUserResponse
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
     * You can call this operation only for task flows that are suspended.
     *   *
     * @param ResumeTaskFlowInstanceRequest $request ResumeTaskFlowInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeTaskFlowInstanceResponse ResumeTaskFlowInstanceResponse
     */
    public function resumeTaskFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagInstanceId)) {
            $query['DagInstanceId'] = $request->dagInstanceId;
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
            'action'      => 'ResumeTaskFlowInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeTaskFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation only for task flows that are suspended.
     *   *
     * @param ResumeTaskFlowInstanceRequest $request ResumeTaskFlowInstanceRequest
     *
     * @return ResumeTaskFlowInstanceResponse ResumeTaskFlowInstanceResponse
     */
    public function resumeTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeTaskFlowInstanceWithOptions($request, $runtime);
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
     * You must be a database administrator (DBA) or a DMS administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param RevokeTemplateAuthorityRequest $request RevokeTemplateAuthorityRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeTemplateAuthorityResponse RevokeTemplateAuthorityResponse
     */
    public function revokeTemplateAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeTemplateAuthority',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeTemplateAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must be a database administrator (DBA) or a DMS administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param RevokeTemplateAuthorityRequest $request RevokeTemplateAuthorityRequest
     *
     * @return RevokeTemplateAuthorityResponse RevokeTemplateAuthorityResponse
     */
    public function revokeTemplateAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeTemplateAuthorityWithOptions($request, $runtime);
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
     * @param SearchDataTrackResultRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SearchDataTrackResultResponse
     */
    public function searchDataTrackResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchDataTrackResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columnFilter)) {
            $request->columnFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columnFilter, 'ColumnFilter', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTableList)) {
            $request->filterTableListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTableList, 'FilterTableList', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTypeList)) {
            $request->filterTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTypeList, 'FilterTypeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->columnFilterShrink)) {
            $query['ColumnFilter'] = $request->columnFilterShrink;
        }
        if (!Utils::isUnset($request->filterEndTime)) {
            $query['FilterEndTime'] = $request->filterEndTime;
        }
        if (!Utils::isUnset($request->filterStartTime)) {
            $query['FilterStartTime'] = $request->filterStartTime;
        }
        if (!Utils::isUnset($request->filterTableListShrink)) {
            $query['FilterTableList'] = $request->filterTableListShrink;
        }
        if (!Utils::isUnset($request->filterTypeListShrink)) {
            $query['FilterTypeList'] = $request->filterTypeListShrink;
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
            'action'      => 'SearchDataTrackResult',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchDataTrackResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchDataTrackResultRequest $request
     *
     * @return SearchDataTrackResultResponse
     */
    public function searchDataTrackResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDataTrackResultWithOptions($request, $runtime);
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
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   *
     * @param SearchTableRequest $request SearchTableRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTableResponse SearchTableResponse
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
     * You can call this operation only for database instances that are managed in Security Collaboration mode.
     *   *
     * @param SearchTableRequest $request SearchTableRequest
     *
     * @return SearchTableResponse SearchTableResponse
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
     * @param SkipDataCorrectRowCheckRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SkipDataCorrectRowCheckResponse
     */
    public function skipDataCorrectRowCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SkipDataCorrectRowCheck',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SkipDataCorrectRowCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SkipDataCorrectRowCheckRequest $request
     *
     * @return SkipDataCorrectRowCheckResponse
     */
    public function skipDataCorrectRowCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipDataCorrectRowCheckWithOptions($request, $runtime);
    }

    /**
     * @param StopTaskFlowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopTaskFlowInstanceResponse
     */
    public function stopTaskFlowInstanceWithOptions($request, $runtime)
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
            'action'      => 'StopTaskFlowInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTaskFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopTaskFlowInstanceRequest $request
     *
     * @return StopTaskFlowInstanceResponse
     */
    public function stopTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskFlowInstanceWithOptions($request, $runtime);
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
     * @param SuspendTaskFlowInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SuspendTaskFlowInstanceResponse
     */
    public function suspendTaskFlowInstanceWithOptions($request, $runtime)
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
            'action'      => 'SuspendTaskFlowInstance',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendTaskFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendTaskFlowInstanceRequest $request
     *
     * @return SuspendTaskFlowInstanceResponse
     */
    public function suspendTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTaskFlowInstanceWithOptions($request, $runtime);
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param SyncInstanceMetaRequest $request SyncInstanceMetaRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncInstanceMetaResponse SyncInstanceMetaResponse
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
     * You can call this operation only for database instances whose control mode is Security Collaboration.
     *   *
     * @param SyncInstanceMetaRequest $request SyncInstanceMetaRequest
     *
     * @return SyncInstanceMetaResponse SyncInstanceMetaResponse
     */
    public function syncInstanceMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncInstanceMetaWithOptions($request, $runtime);
    }

    /**
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param UpdateAuthorityTemplateRequest $request UpdateAuthorityTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuthorityTemplateResponse UpdateAuthorityTemplateResponse
     */
    public function updateAuthorityTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorityTemplate',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorityTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](~~324212~~).
     *   *
     * @param UpdateAuthorityTemplateRequest $request UpdateAuthorityTemplateRequest
     *
     * @return UpdateAuthorityTemplateResponse UpdateAuthorityTemplateResponse
     */
    public function updateAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * Before you call the UpdateInstance operation, call the [GetInstance](~~141567~~) or [ListInstances](~~141936~~) operation to obtain the complete information about the instance.
     *   *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
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
        if (!Utils::isUnset($request->enableSellSitd)) {
            $query['EnableSellSitd'] = $request->enableSellSitd;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
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
     * Before you call the UpdateInstance operation, call the [GetInstance](~~141567~~) or [ListInstances](~~141936~~) operation to obtain the complete information about the instance.
     *   *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * SLA rules take effect after task flows are deployed and published.
     *   *
     * @param UpdateSLARulesRequest $tmpReq  UpdateSLARulesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSLARulesResponse UpdateSLARulesResponse
     */
    public function updateSLARulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSLARulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->slaRuleList)) {
            $request->slaRuleListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->slaRuleList, 'SlaRuleList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->slaRuleListShrink)) {
            $query['SlaRuleList'] = $request->slaRuleListShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSLARules',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSLARulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SLA rules take effect after task flows are deployed and published.
     *   *
     * @param UpdateSLARulesRequest $request UpdateSLARulesRequest
     *
     * @return UpdateSLARulesResponse UpdateSLARulesResponse
     */
    public function updateSLARules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSLARulesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateScenarioResponse
     */
    public function updateScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scenarioName)) {
            $query['ScenarioName'] = $request->scenarioName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScenario',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScenarioRequest $request
     *
     * @return UpdateScenarioResponse
     */
    public function updateScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScenarioWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStandardGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateStandardGroupResponse
     */
    public function updateStandardGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
            'action'      => 'UpdateStandardGroup',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStandardGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStandardGroupRequest $request
     *
     * @return UpdateStandardGroupResponse
     */
    public function updateStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStandardGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to configure a failed task or rerun a task.
     *   *
     * @param UpdateTaskConfigRequest $request UpdateTaskConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskConfigResponse UpdateTaskConfigResponse
     */
    public function updateTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeConfig)) {
            $query['NodeConfig'] = $request->nodeConfig;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskConfig',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to configure a failed task or rerun a task.
     *   *
     * @param UpdateTaskConfigRequest $request UpdateTaskConfigRequest
     *
     * @return UpdateTaskConfigResponse UpdateTaskConfigResponse
     */
    public function updateTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskConfigWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify node configurations.
     *   *
     * @param UpdateTaskContentRequest $request UpdateTaskContentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskContentResponse UpdateTaskContentResponse
     */
    public function updateTaskContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeContent)) {
            $query['NodeContent'] = $request->nodeContent;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskContent',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify node configurations.
     *   *
     * @param UpdateTaskContentRequest $request UpdateTaskContentRequest
     *
     * @return UpdateTaskContentResponse UpdateTaskContentResponse
     */
    public function updateTaskContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskContentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskFlowConstantsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTaskFlowConstantsResponse
     */
    public function updateTaskFlowConstantsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskFlowConstantsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dagConstants)) {
            $request->dagConstantsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dagConstants, 'DagConstants', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagConstantsShrink)) {
            $query['DagConstants'] = $request->dagConstantsShrink;
        }
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
            'action'      => 'UpdateTaskFlowConstants',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowConstantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskFlowConstantsRequest $request
     *
     * @return UpdateTaskFlowConstantsResponse
     */
    public function updateTaskFlowConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowConstantsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskFlowCooperatorsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateTaskFlowCooperatorsResponse
     */
    public function updateTaskFlowCooperatorsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskFlowCooperatorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cooperatorIds)) {
            $request->cooperatorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cooperatorIds, 'CooperatorIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cooperatorIdsShrink)) {
            $query['CooperatorIds'] = $request->cooperatorIdsShrink;
        }
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
            'action'      => 'UpdateTaskFlowCooperators',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowCooperatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskFlowCooperatorsRequest $request
     *
     * @return UpdateTaskFlowCooperatorsResponse
     */
    public function updateTaskFlowCooperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowCooperatorsWithOptions($request, $runtime);
    }

    /**
     * ###
     *   * The edges can be updated only when the following conditions are met:
     *   * 1.  The specified edge exists in the directed acyclic graph (DAG) of the task flow specified by DagId.
     *   * 2.  The specified edge nodes exist in the DAG of the task flow specified by DagId.
     *   * 3.  After the update, rings do not exist in the DAG.
     *   *
     * @param UpdateTaskFlowEdgesRequest $tmpReq  UpdateTaskFlowEdgesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowEdgesResponse UpdateTaskFlowEdgesResponse
     */
    public function updateTaskFlowEdgesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskFlowEdgesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->edges)) {
            $request->edgesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->edges, 'Edges', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->edgesShrink)) {
            $query['Edges'] = $request->edgesShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowEdges',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowEdgesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ###
     *   * The edges can be updated only when the following conditions are met:
     *   * 1.  The specified edge exists in the directed acyclic graph (DAG) of the task flow specified by DagId.
     *   * 2.  The specified edge nodes exist in the DAG of the task flow specified by DagId.
     *   * 3.  After the update, rings do not exist in the DAG.
     *   *
     * @param UpdateTaskFlowEdgesRequest $request UpdateTaskFlowEdgesRequest
     *
     * @return UpdateTaskFlowEdgesResponse UpdateTaskFlowEdgesResponse
     */
    public function updateTaskFlowEdges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowEdgesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskFlowNameAndDescRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateTaskFlowNameAndDescResponse
     */
    public function updateTaskFlowNameAndDescWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagName)) {
            $query['DagName'] = $request->dagName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowNameAndDesc',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowNameAndDescResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskFlowNameAndDescRequest $request
     *
     * @return UpdateTaskFlowNameAndDescResponse
     */
    public function updateTaskFlowNameAndDesc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowNameAndDescWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskFlowNotificationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateTaskFlowNotificationResponse
     */
    public function updateTaskFlowNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->dagNotificationFail)) {
            $query['DagNotificationFail'] = $request->dagNotificationFail;
        }
        if (!Utils::isUnset($request->dagNotificationSla)) {
            $query['DagNotificationSla'] = $request->dagNotificationSla;
        }
        if (!Utils::isUnset($request->dagNotificationSuccess)) {
            $query['DagNotificationSuccess'] = $request->dagNotificationSuccess;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowNotification',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskFlowNotificationRequest $request
     *
     * @return UpdateTaskFlowNotificationResponse
     */
    public function updateTaskFlowNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowNotificationWithOptions($request, $runtime);
    }

    /**
     * Note: The new owner of the task flow must belong to the same tenant as the previous owner.
     *   *
     * @param UpdateTaskFlowOwnerRequest $request UpdateTaskFlowOwnerRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowOwnerResponse UpdateTaskFlowOwnerResponse
     */
    public function updateTaskFlowOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->newOwnerId)) {
            $query['NewOwnerId'] = $request->newOwnerId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowOwner',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Note: The new owner of the task flow must belong to the same tenant as the previous owner.
     *   *
     * @param UpdateTaskFlowOwnerRequest $request UpdateTaskFlowOwnerRequest
     *
     * @return UpdateTaskFlowOwnerResponse UpdateTaskFlowOwnerResponse
     */
    public function updateTaskFlowOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowOwnerWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to perform a full update. For incremental updates, see AddTaskFlowEdges, UpdateTaskFlowEdges, and DeleteTaskFlowEdgesByMultiCondition.
     *   *
     * @param UpdateTaskFlowRelationsRequest $tmpReq  UpdateTaskFlowRelationsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowRelationsResponse UpdateTaskFlowRelationsResponse
     */
    public function updateTaskFlowRelationsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskFlowRelationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->edges)) {
            $request->edgesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->edges, 'Edges', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->edgesShrink)) {
            $query['Edges'] = $request->edgesShrink;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowRelations',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to perform a full update. For incremental updates, see AddTaskFlowEdges, UpdateTaskFlowEdges, and DeleteTaskFlowEdgesByMultiCondition.
     *   *
     * @param UpdateTaskFlowRelationsRequest $request UpdateTaskFlowRelationsRequest
     *
     * @return UpdateTaskFlowRelationsResponse UpdateTaskFlowRelationsResponse
     */
    public function updateTaskFlowRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowRelationsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to update the scheduling properties for a task flow in the editing state. You can configure a **timed scheduling** task flow or an **event scheduling** task flow. When you configure a **timed scheduling** task flow, you can choose from one-time scheduling or periodic scheduling. When you configure an **event scheduling** task flow, you can subscribe to task flows or task flow nodes.****\\
     *   * After you update the scheduling properties, you need to publish and deploy the task flow again. The new task flow instance will run based on the updated scheduling properties.
     *   *
     * @param UpdateTaskFlowScheduleRequest $request UpdateTaskFlowScheduleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowScheduleResponse UpdateTaskFlowScheduleResponse
     */
    public function updateTaskFlowScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cronBeginDate)) {
            $query['CronBeginDate'] = $request->cronBeginDate;
        }
        if (!Utils::isUnset($request->cronEndDate)) {
            $query['CronEndDate'] = $request->cronEndDate;
        }
        if (!Utils::isUnset($request->cronStr)) {
            $query['CronStr'] = $request->cronStr;
        }
        if (!Utils::isUnset($request->cronType)) {
            $query['CronType'] = $request->cronType;
        }
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->scheduleParam)) {
            $query['ScheduleParam'] = $request->scheduleParam;
        }
        if (!Utils::isUnset($request->scheduleSwitch)) {
            $query['ScheduleSwitch'] = $request->scheduleSwitch;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->timeZoneId)) {
            $query['TimeZoneId'] = $request->timeZoneId;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $query['TriggerType'] = $request->triggerType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowSchedule',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to update the scheduling properties for a task flow in the editing state. You can configure a **timed scheduling** task flow or an **event scheduling** task flow. When you configure a **timed scheduling** task flow, you can choose from one-time scheduling or periodic scheduling. When you configure an **event scheduling** task flow, you can subscribe to task flows or task flow nodes.****\\
     *   * After you update the scheduling properties, you need to publish and deploy the task flow again. The new task flow instance will run based on the updated scheduling properties.
     *   *
     * @param UpdateTaskFlowScheduleRequest $request UpdateTaskFlowScheduleRequest
     *
     * @return UpdateTaskFlowScheduleResponse UpdateTaskFlowScheduleResponse
     */
    public function updateTaskFlowSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowScheduleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskFlowTimeVariablesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateTaskFlowTimeVariablesResponse
     */
    public function updateTaskFlowTimeVariablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->timeVariables)) {
            $query['TimeVariables'] = $request->timeVariables;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskFlowTimeVariables',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskFlowTimeVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskFlowTimeVariablesRequest $request
     *
     * @return UpdateTaskFlowTimeVariablesResponse
     */
    public function updateTaskFlowTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowTimeVariablesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskNameRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTaskNameResponse
     */
    public function updateTaskNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskName',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskNameRequest $request
     *
     * @return UpdateTaskNameResponse
     */
    public function updateTaskName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskNameWithOptions($request, $runtime);
    }

    /**
     * Only nodes of single-instance SQL assignment, script code, and ECS remote command have output variables.
     *   *
     * @param UpdateTaskOutputRequest $request UpdateTaskOutputRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskOutputResponse UpdateTaskOutputResponse
     */
    public function updateTaskOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeOutput)) {
            $query['NodeOutput'] = $request->nodeOutput;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskOutput',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Only nodes of single-instance SQL assignment, script code, and ECS remote command have output variables.
     *   *
     * @param UpdateTaskOutputRequest $request UpdateTaskOutputRequest
     *
     * @return UpdateTaskOutputResponse UpdateTaskOutputResponse
     */
    public function updateTaskOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskOutputWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskTimeVariablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTaskTimeVariablesResponse
     */
    public function updateTaskTimeVariablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tid)) {
            $query['Tid'] = $request->tid;
        }
        if (!Utils::isUnset($request->timeVariables)) {
            $query['TimeVariables'] = $request->timeVariables;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskTimeVariables',
            'version'     => '2018-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskTimeVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskTimeVariablesRequest $request
     *
     * @return UpdateTaskTimeVariablesResponse
     */
    public function updateTaskTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskTimeVariablesWithOptions($request, $runtime);
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

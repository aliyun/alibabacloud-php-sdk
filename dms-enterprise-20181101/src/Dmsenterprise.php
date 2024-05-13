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
     * @summary Adds a masking rule.
     *  *
     * @param AddDesensitizationRuleRequest $request AddDesensitizationRuleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDesensitizationRuleResponse AddDesensitizationRuleResponse
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
     * @summary Adds a masking rule.
     *  *
     * @param AddDesensitizationRuleRequest $request AddDesensitizationRuleRequest
     *
     * @return AddDesensitizationRuleResponse AddDesensitizationRuleResponse
     */
    public function addDesensitizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDesensitizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 添加实例
     *  *
     * @param AddInstanceRequest $request AddInstanceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddInstanceResponse AddInstanceResponse
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
     * @summary 添加实例
     *  *
     * @param AddInstanceRequest $request AddInstanceRequest
     *
     * @return AddInstanceResponse AddInstanceResponse
     */
    public function addInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a workspace administrator, a workspace member, or a task flow developer in Data Management (DMS).
     *  *
     * @description You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     * Usage notes:
     * *   Before you call this operation to add a user as a task flow developer, make sure that you have added the user as a workspace member.
     * *   You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](https://help.aliyun.com/document_detail/424761.html) operation.
     * *   For more information about workspace roles and permissions, see [Manage permissions on a workspace](https://help.aliyun.com/document_detail/410893.html).
     *  *
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
     * @summary Adds a workspace administrator, a workspace member, or a task flow developer in Data Management (DMS).
     *  *
     * @description You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     * Usage notes:
     * *   Before you call this operation to add a user as a task flow developer, make sure that you have added the user as a workspace member.
     * *   You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](https://help.aliyun.com/document_detail/424761.html) operation.
     * *   For more information about workspace roles and permissions, see [Manage permissions on a workspace](https://help.aliyun.com/document_detail/410893.html).
     *  *
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
     * @summary Adds a routing algorithm to a logical table.
     *  *
     * @param AddLogicTableRouteConfigRequest $request AddLogicTableRouteConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddLogicTableRouteConfigResponse AddLogicTableRouteConfigResponse
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
     * @summary Adds a routing algorithm to a logical table.
     *  *
     * @param AddLogicTableRouteConfigRequest $request AddLogicTableRouteConfigRequest
     *
     * @return AddLogicTableRouteConfigResponse AddLogicTableRouteConfigResponse
     */
    public function addLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Adds directed edges for an existing task node.
     *  *
     * @description When you add directed edges for a task node, take note of the following limits:
     * 1. The endpoints of the specified edge exist in the Directed Acyclic Graph (DAG) of the task flow specified by DagId.
     * 2. After a backward edge is added, the DAG does not contain loops.
     *  *
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
     * @summary Adds directed edges for an existing task node.
     *  *
     * @description When you add directed edges for a task node, take note of the following limits:
     * 1. The endpoints of the specified edge exist in the Directed Acyclic Graph (DAG) of the task flow specified by DagId.
     * 2. After a backward edge is added, the DAG does not contain loops.
     *  *
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
     * @summary Analyzes the lineage (dependencies and influence) between tables and between fields in SQL statements.
     *  *
     * @description The following conditions must be met before you call this API operation.
     * *   The database instance is of one of the following types: ApsaraDB RDS for MySQL, PolarDB for MySQL, AnalyticDB for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for PostgreSQL, AnalyticDB for PostgreSQL, Oracle, and openGauss.
     * *   A database instance is managed in Security Collaboration mode. For more information about control modes, see [Control modes](https://help.aliyun.com/document_detail/151629.html).
     *  *
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
     * @summary Analyzes the lineage (dependencies and influence) between tables and between fields in SQL statements.
     *  *
     * @description The following conditions must be met before you call this API operation.
     * *   The database instance is of one of the following types: ApsaraDB RDS for MySQL, PolarDB for MySQL, AnalyticDB for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for PostgreSQL, AnalyticDB for PostgreSQL, Oracle, and openGauss.
     * *   A database instance is managed in Security Collaboration mode. For more information about control modes, see [Control modes](https://help.aliyun.com/document_detail/151629.html).
     *  *
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
     * @summary Reviews a ticket.
     *  *
     * @param ApproveOrderRequest $request ApproveOrderRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveOrderResponse ApproveOrderResponse
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
     * @summary Reviews a ticket.
     *  *
     * @param ApproveOrderRequest $request ApproveOrderRequest
     *
     * @return ApproveOrderResponse ApproveOrderResponse
     */
    public function approveOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Backfills data for task orchestration.
     *  *
     * @description During a data backfill, task flows are run in sequence based on their dates. You can specify whether task flows are run in chronological or reverse chronological order. After the data backfill is complete, you can specify a date or date range, and a node range to run task flows.
     *  *
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
     * @summary Backfills data for task orchestration.
     *  *
     * @description During a data backfill, task flows are run in sequence based on their dates. You can specify whether task flows are run in chronological or reverse chronological order. After the data backfill is complete, you can specify a date or date range, and a node range to run task flows.
     *  *
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
     * @summary Purchases a pay-as-you-go Data Management (DMS) resource.
     *  *
     * @param BuyPayAsYouGoOrderRequest $request BuyPayAsYouGoOrderRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BuyPayAsYouGoOrderResponse BuyPayAsYouGoOrderResponse
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
     * @summary Purchases a pay-as-you-go Data Management (DMS) resource.
     *  *
     * @param BuyPayAsYouGoOrderRequest $request BuyPayAsYouGoOrderRequest
     *
     * @return BuyPayAsYouGoOrderResponse BuyPayAsYouGoOrderResponse
     */
    public function buyPayAsYouGoOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buyPayAsYouGoOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Adjusts the sensitivity level of one or more fields.
     *  *
     * @param ChangeColumnSecLevelRequest $request ChangeColumnSecLevelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeColumnSecLevelResponse ChangeColumnSecLevelResponse
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
     * @summary Adjusts the sensitivity level of one or more fields.
     *  *
     * @param ChangeColumnSecLevelRequest $request ChangeColumnSecLevelRequest
     *
     * @return ChangeColumnSecLevelResponse ChangeColumnSecLevelResponse
     */
    public function changeColumnSecLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeColumnSecLevelWithOptions($request, $runtime);
    }

    /**
     * @summary 修改字段敏感序列
     *  *
     * @param ChangeColumnSecurityLevelRequest $request ChangeColumnSecurityLevelRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeColumnSecurityLevelResponse ChangeColumnSecurityLevelResponse
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
     * @summary 修改字段敏感序列
     *  *
     * @param ChangeColumnSecurityLevelRequest $request ChangeColumnSecurityLevelRequest
     *
     * @return ChangeColumnSecurityLevelResponse ChangeColumnSecurityLevelResponse
     */
    public function changeColumnSecurityLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeColumnSecurityLevelWithOptions($request, $runtime);
    }

    /**
     * @summary 移交数仓开发任务流
     *  *
     * @description Usage notes:
     * *   If you call this operation to transfer the ownership of a published task flow, the ownership transfer does not take effect.
     * *   You can call the [ReDeployLhDagVersion](https://help.aliyun.com/document_detail/424712.html) operation to redeploy a published version of a task flow.
     *  *
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
     * @summary 移交数仓开发任务流
     *  *
     * @description Usage notes:
     * *   If you call this operation to transfer the ownership of a published task flow, the ownership transfer does not take effect.
     * *   You can call the [ReDeployLhDagVersion](https://help.aliyun.com/document_detail/424712.html) operation to redeploy a published version of a task flow.
     *  *
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
     * @summary Closes a ticket.
     *  *
     * @param CloseOrderRequest $request CloseOrderRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseOrderResponse CloseOrderResponse
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
     * @summary Closes a ticket.
     *  *
     * @param CloseOrderRequest $request CloseOrderRequest
     *
     * @return CloseOrderResponse CloseOrderResponse
     */
    public function closeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a permission template
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Creates a permission template
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Creates data archiving tickets.
     *  *
     * @param CreateDataArchiveOrderRequest $tmpReq  CreateDataArchiveOrderRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataArchiveOrderResponse CreateDataArchiveOrderResponse
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
     * @summary Creates data archiving tickets.
     *  *
     * @param CreateDataArchiveOrderRequest $request CreateDataArchiveOrderRequest
     *
     * @return CreateDataArchiveOrderResponse CreateDataArchiveOrderResponse
     */
    public function createDataArchiveOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataArchiveOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a ticket for changing data in Data Management (DMS).
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Creates a ticket for changing data in Data Management (DMS).
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Creates a ticket for clearing historical data.
     *  *
     * @description For more information about the historical data cleaning, see [Clear historical data](https://help.aliyun.com/document_detail/162507.html).
     * This operation can be used only for MySQL databases.
     *  *
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
     * @summary Creates a ticket for clearing historical data.
     *  *
     * @description For more information about the historical data cleaning, see [Clear historical data](https://help.aliyun.com/document_detail/162507.html).
     * This operation can be used only for MySQL databases.
     *  *
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
     * @summary Creates a ticket to export an SQL result set.
     *  *
     * @param CreateDataExportOrderRequest $tmpReq  CreateDataExportOrderRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataExportOrderResponse CreateDataExportOrderResponse
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
     * @summary Creates a ticket to export an SQL result set.
     *  *
     * @param CreateDataExportOrderRequest $request CreateDataExportOrderRequest
     *
     * @return CreateDataExportOrderResponse CreateDataExportOrderResponse
     */
    public function createDataExportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataExportOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a ticket for importing data to Data Management (DMS).
     *  *
     * @description For more information about the Large Data Import feature, see [Import data](https://help.aliyun.com/document_detail/161439.html).
     *  *
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
     * @summary Creates a ticket for importing data to Data Management (DMS).
     *  *
     * @description For more information about the Large Data Import feature, see [Import data](https://help.aliyun.com/document_detail/161439.html).
     *  *
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
     * @summary Creates a data tracking ticket.
     *  *
     * @description This operation is available only for instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Creates a data tracking ticket.
     *  *
     * @description This operation is available only for instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Creates a database export ticket.
     *  *
     * @param CreateDatabaseExportOrderRequest $tmpReq  CreateDatabaseExportOrderRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseExportOrderResponse CreateDatabaseExportOrderResponse
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
     * @summary Creates a database export ticket.
     *  *
     * @param CreateDatabaseExportOrderRequest $request CreateDatabaseExportOrderRequest
     *
     * @return CreateDatabaseExportOrderResponse CreateDatabaseExportOrderResponse
     */
    public function createDatabaseExportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseExportOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 创建无锁变更工单
     *  *
     * @description For more information about the lock-free change feature, see [Overview](https://help.aliyun.com/document_detail/207847.html).
     * This operation can be used only for instances that are managed in Stable Change or Security Collaboration mode. For more information, see [Change data without the need to lock tables](https://help.aliyun.com/document_detail/96145.html) and [Change schemas without locking tables](https://help.aliyun.com/document_detail/98373.html).
     *  *
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
     * @summary 创建无锁变更工单
     *  *
     * @description For more information about the lock-free change feature, see [Overview](https://help.aliyun.com/document_detail/207847.html).
     * This operation can be used only for instances that are managed in Stable Change or Security Collaboration mode. For more information, see [Change data without the need to lock tables](https://help.aliyun.com/document_detail/96145.html) and [Change schemas without locking tables](https://help.aliyun.com/document_detail/98373.html).
     *  *
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
     * @summary Creates a workspace for data warehouse development in Data Management (DMS).
     *  *
     * @description *   The workspace name must be unique within a tenant. If a workspace with the same name already exists within the tenant, the call may fail.
     * *   You can call the [GetLhSpaceByName](https://help.aliyun.com/document_detail/424379.html) operation to query whether a workspace with a specific name already exists as a DMS administrator or database administrator (DBA).
     *  *
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
     * @summary Creates a workspace for data warehouse development in Data Management (DMS).
     *  *
     * @description *   The workspace name must be unique within a tenant. If a workspace with the same name already exists within the tenant, the call may fail.
     * *   You can call the [GetLhSpaceByName](https://help.aliyun.com/document_detail/424379.html) operation to query whether a workspace with a specific name already exists as a DMS administrator or database administrator (DBA).
     *  *
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
     * @summary Creates a logical database in Database Management (DMS).
     *  *
     * @param CreateLogicDatabaseRequest $tmpReq  CreateLogicDatabaseRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogicDatabaseResponse CreateLogicDatabaseResponse
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
     * @summary Creates a logical database in Database Management (DMS).
     *  *
     * @param CreateLogicDatabaseRequest $request CreateLogicDatabaseRequest
     *
     * @return CreateLogicDatabaseResponse CreateLogicDatabaseResponse
     */
    public function createLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a ticket in Data Management (DMS).
     *  *
     * @description To facilitate ticket creation, you can call the following dedicated operations to create some types of tickets:
     * *   [CreateDataCorrectOrder](https://help.aliyun.com/document_detail/208388.html): creates a regular data change ticket.
     * *   [CreateDataCronClearOrder](https://help.aliyun.com/document_detail/208385.html): creates a ticket to clear historical data.
     * *   [CreateDataImportOrder](https://help.aliyun.com/document_detail/208387.html): creates a data import ticket.
     * *   [CreateFreeLockCorrectOrder](https://help.aliyun.com/document_detail/208386.html): creates a lock-free change ticket.
     *  *
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
     * @summary Creates a ticket in Data Management (DMS).
     *  *
     * @description To facilitate ticket creation, you can call the following dedicated operations to create some types of tickets:
     * *   [CreateDataCorrectOrder](https://help.aliyun.com/document_detail/208388.html): creates a regular data change ticket.
     * *   [CreateDataCronClearOrder](https://help.aliyun.com/document_detail/208385.html): creates a ticket to clear historical data.
     * *   [CreateDataImportOrder](https://help.aliyun.com/document_detail/208387.html): creates a data import ticket.
     * *   [CreateFreeLockCorrectOrder](https://help.aliyun.com/document_detail/208386.html): creates a lock-free change ticket.
     *  *
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
     * @summary 创建可编程对象变更工单
     *  *
     * @param CreateProcCorrectOrderRequest $tmpReq  CreateProcCorrectOrderRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProcCorrectOrderResponse CreateProcCorrectOrderResponse
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
     * @summary 创建可编程对象变更工单
     *  *
     * @param CreateProcCorrectOrderRequest $request CreateProcCorrectOrderRequest
     *
     * @return CreateProcCorrectOrderResponse CreateProcCorrectOrderResponse
     */
    public function createProcCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProcCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the secure access proxy feature for a database instance.
     *  *
     * @description - The database instance runs the MySQL or MariaDB database engine. For example, the database instance can be an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, a Distributed Relational Database Service (DRDS) cluster, or an AnalyticDB for MySQL cluster. The database instance can also be a self-managed MySQL or MariaDB database, or a MySQL or MariaDB database in a third-party cloud.
     * - The database instance resides in the China (Hangzhou) or China (Beijing) region.
     * - You are a Data Management (DMS) administrator, a database administrator (DBA), or the owner of the database instance.
     *  *
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
     * @summary Enables the secure access proxy feature for a database instance.
     *  *
     * @description - The database instance runs the MySQL or MariaDB database engine. For example, the database instance can be an ApsaraDB RDS for MySQL instance, a PolarDB for MySQL cluster, a Distributed Relational Database Service (DRDS) cluster, or an AnalyticDB for MySQL cluster. The database instance can also be a self-managed MySQL or MariaDB database, or a MySQL or MariaDB database in a third-party cloud.
     * - The database instance resides in the China (Hangzhou) or China (Beijing) region.
     * - You are a Data Management (DMS) administrator, a database administrator (DBA), or the owner of the database instance.
     *  *
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
     * @summary You can call the CreateProxyAccess to authorize users to access the DB instance through the Data Security Protection agent.
     *  *
     * @description - The data security protection feature is enabled for the instance.
     * - Your user role is the administrator role, DBA role, or the owner of data security protection for the current instance.
     *  *
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
     * @summary You can call the CreateProxyAccess to authorize users to access the DB instance through the Data Security Protection agent.
     *  *
     * @description - The data security protection feature is enabled for the instance.
     * - Your user role is the administrator role, DBA role, or the owner of data security protection for the current instance.
     *  *
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
     * @summary Executes a schema design ticket.
     *  *
     * @param CreatePublishGroupTaskRequest $request CreatePublishGroupTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePublishGroupTaskResponse CreatePublishGroupTaskResponse
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
     * @summary Executes a schema design ticket.
     *  *
     * @param CreatePublishGroupTaskRequest $request CreatePublishGroupTaskRequest
     *
     * @return CreatePublishGroupTaskResponse CreatePublishGroupTaskResponse
     */
    public function createPublishGroupTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishGroupTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a SQL review ticket.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     * For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Creates a SQL review ticket.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     * For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Creates a business scenario to group task flows by business scenario.
     *  *
     * @param CreateScenarioRequest $request CreateScenarioRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScenarioResponse CreateScenarioResponse
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
     * @summary Creates a business scenario to group task flows by business scenario.
     *  *
     * @param CreateScenarioRequest $request CreateScenarioRequest
     *
     * @return CreateScenarioResponse CreateScenarioResponse
     */
    public function createScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a security rule set.
     *  *
     * @param CreateStandardGroupRequest $request CreateStandardGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStandardGroupResponse CreateStandardGroupResponse
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
     * @summary Creates a security rule set.
     *  *
     * @param CreateStandardGroupRequest $request CreateStandardGroupRequest
     *
     * @return CreateStandardGroupResponse CreateStandardGroupResponse
     */
    public function createStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a schema synchronization ticket.
     *  *
     * @param CreateStructSyncOrderRequest $tmpReq  CreateStructSyncOrderRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStructSyncOrderResponse CreateStructSyncOrderResponse
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
     * @summary Creates a schema synchronization ticket.
     *  *
     * @param CreateStructSyncOrderRequest $request CreateStructSyncOrderRequest
     *
     * @return CreateStructSyncOrderResponse CreateStructSyncOrderResponse
     */
    public function createStructSyncOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStructSyncOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task node for a task flow.
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
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
     * @summary Creates a task node for a task flow.
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task flow.
     *  *
     * @param CreateTaskFlowRequest $request CreateTaskFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskFlowResponse CreateTaskFlowResponse
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
     * @summary Creates a task flow.
     *  *
     * @param CreateTaskFlowRequest $request CreateTaskFlowRequest
     *
     * @return CreateTaskFlowResponse CreateTaskFlowResponse
     */
    public function createTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 创建上传附件任务
     *  *
     * @param CreateUploadFileJobRequest $request CreateUploadFileJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadFileJobResponse CreateUploadFileJobResponse
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
     * @summary 创建上传附件任务
     *  *
     * @param CreateUploadFileJobRequest $request CreateUploadFileJobRequest
     *
     * @return CreateUploadFileJobResponse CreateUploadFileJobResponse
     */
    public function createUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task to upload an Object Storage Service (OSS) file and obtain the key of the task.
     *  *
     * @param CreateUploadOSSFileJobRequest $tmpReq  CreateUploadOSSFileJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadOSSFileJobResponse CreateUploadOSSFileJobResponse
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
     * @summary Creates a task to upload an Object Storage Service (OSS) file and obtain the key of the task.
     *  *
     * @param CreateUploadOSSFileJobRequest $request CreateUploadOSSFileJobRequest
     *
     * @return CreateUploadOSSFileJobResponse CreateUploadOSSFileJobResponse
     */
    public function createUploadOSSFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadOSSFileJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除权限模版
     *  *
     * @param DeleteAuthorityTemplateRequest $request DeleteAuthorityTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAuthorityTemplateResponse DeleteAuthorityTemplateResponse
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
     * @summary 删除权限模版
     *  *
     * @param DeleteAuthorityTemplateRequest $request DeleteAuthorityTemplateRequest
     *
     * @return DeleteAuthorityTemplateResponse DeleteAuthorityTemplateResponse
     */
    public function deleteAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a database instance from Data Management (DMS).
     *  *
     * @description Note: You can call this operation only to remove a database instance from the instance list of DMS. The instance is not deleted or shut down.
     *  *
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
     * @summary Removes a database instance from Data Management (DMS).
     *  *
     * @description Note: You can call this operation only to remove a database instance from the instance list of DMS. The instance is not deleted or shut down.
     *  *
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
     * @summary Deletes a workspace.
     *  *
     * @param DeleteLakeHouseSpaceRequest $request DeleteLakeHouseSpaceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLakeHouseSpaceResponse DeleteLakeHouseSpaceResponse
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
     * @summary Deletes a workspace.
     *  *
     * @param DeleteLakeHouseSpaceRequest $request DeleteLakeHouseSpaceRequest
     *
     * @return DeleteLakeHouseSpaceResponse DeleteLakeHouseSpaceResponse
     */
    public function deleteLakeHouseSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLakeHouseSpaceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数仓空间成员
     *  *
     * @description You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     * You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](https://help.aliyun.com/document_detail/424761.html) operation.
     *  *
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
     * @summary 删除数仓空间成员
     *  *
     * @description You must call this operation as a DMS administrator, a database administrator (DBA), or a workspace administrator.
     * You cannot call this operation to transfer the ownership of a task flow. To transfer the ownership of a task flow, call the [ChangLhDagOwner](https://help.aliyun.com/document_detail/424761.html) operation.
     *  *
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
     * @summary Deletes a logical database in Database Management (DMS). This operation only deletes the specified logical database but does not delete physical databases.
     *  *
     * @param DeleteLogicDatabaseRequest $request DeleteLogicDatabaseRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLogicDatabaseResponse DeleteLogicDatabaseResponse
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
     * @summary Deletes a logical database in Database Management (DMS). This operation only deletes the specified logical database but does not delete physical databases.
     *  *
     * @param DeleteLogicDatabaseRequest $request DeleteLogicDatabaseRequest
     *
     * @return DeleteLogicDatabaseResponse DeleteLogicDatabaseResponse
     */
    public function deleteLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the routing algorithm of a logical table.
     *  *
     * @param DeleteLogicTableRouteConfigRequest $request DeleteLogicTableRouteConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLogicTableRouteConfigResponse DeleteLogicTableRouteConfigResponse
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
     * @summary Deletes the routing algorithm of a logical table.
     *  *
     * @param DeleteLogicTableRouteConfigRequest $request DeleteLogicTableRouteConfigRequest
     *
     * @return DeleteLogicTableRouteConfigResponse DeleteLogicTableRouteConfigResponse
     */
    public function deleteLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to disable the data security protection proxy of a DB instance.
     *  *
     * @description After you disable this feature, your DB instance loses the JDBC protocol. All authorization information is recycled.
     *  *
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
     * @summary You can call this operation to disable the data security protection proxy of a DB instance.
     *  *
     * @description After you disable this feature, your DB instance loses the JDBC protocol. All authorization information is recycled.
     *  *
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
     * @summary You can call this operation to DeleteProxyAccess reclaim the data security protection authorization of the target user.
     *  *
     * @param DeleteProxyAccessRequest $request DeleteProxyAccessRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProxyAccessResponse DeleteProxyAccessResponse
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
     * @summary You can call this operation to DeleteProxyAccess reclaim the data security protection authorization of the target user.
     *  *
     * @param DeleteProxyAccessRequest $request DeleteProxyAccessRequest
     *
     * @return DeleteProxyAccessResponse DeleteProxyAccessResponse
     */
    public function deleteProxyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProxyAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a business scenario.
     *  *
     * @description When you call this operation, make sure that no task flow is specified in the business scenario.
     *  *
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
     * @summary Deletes a business scenario.
     *  *
     * @description When you call this operation, make sure that no task flow is specified in the business scenario.
     *  *
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
     * @summary 删除安全规则
     *  *
     * @param DeleteStandardGroupRequest $request DeleteStandardGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStandardGroupResponse DeleteStandardGroupResponse
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
     * @summary 删除安全规则
     *  *
     * @param DeleteStandardGroupRequest $request DeleteStandardGroupRequest
     *
     * @return DeleteStandardGroupResponse DeleteStandardGroupResponse
     */
    public function deleteStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a task in a specified task flow.
     *  *
     * @param DeleteTaskRequest $request DeleteTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskResponse DeleteTaskResponse
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
     * @summary Deletes a task in a specified task flow.
     *  *
     * @param DeleteTaskRequest $request DeleteTaskRequest
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a task flow.
     *  *
     * @param DeleteTaskFlowRequest $request DeleteTaskFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskFlowResponse DeleteTaskFlowResponse
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
     * @summary Deletes a task flow.
     *  *
     * @param DeleteTaskFlowRequest $request DeleteTaskFlowRequest
     *
     * @return DeleteTaskFlowResponse DeleteTaskFlowResponse
     */
    public function deleteTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes task flow edges based on multiple conditions.
     *  *
     * @description This operation is used for multi-condition query. You can call it to delete the edges of a specified task flow that meet all specified conditions.
     *  *
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
     * @summary Deletes task flow edges based on multiple conditions.
     *  *
     * @description This operation is used for multi-condition query. You can call it to delete the edges of a specified task flow that meet all specified conditions.
     *  *
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
     * @summary Deletes an Alibaba Cloud account that is no longer used.
     *  *
     * @description The effect of deleting a user by calling this operation is the same as that of deleting a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to delete a user that is no longer used from DMS Enterprise. After the user is deleted, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     * >  This operation only removes the association of the Alibaba Cloud account or RAM user with DMS Enterprise of the enterprise, rather than actually deleting the Alibaba Cloud account or RAM user. After the user is deleted, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is added to DMS Enterprise again.
     *  *
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
     * @summary Deletes an Alibaba Cloud account that is no longer used.
     *  *
     * @description The effect of deleting a user by calling this operation is the same as that of deleting a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to delete a user that is no longer used from DMS Enterprise. After the user is deleted, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     * >  This operation only removes the association of the Alibaba Cloud account or RAM user with DMS Enterprise of the enterprise, rather than actually deleting the Alibaba Cloud account or RAM user. After the user is deleted, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is added to DMS Enterprise again.
     *  *
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
     * @summary You can call this operation to disable a user that is temporarily not used in Data Management (DMS) Enterprise.
     *  *
     * @description The effect of disabling a user by calling this operation is the same as that of disabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to disable a user that is temporarily not used in DMS Enterprise. After the user is disabled, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     * >  This operation only stops the Alibaba Cloud account or RAM user from logging on to DMS Enterprise of the enterprise, rather than actually disabling the Alibaba Cloud account or RAM user. After the user is disabled, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is enabled again. The disabled user, however, still exists in DMS Enterprise.
     *  *
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
     * @summary You can call this operation to disable a user that is temporarily not used in Data Management (DMS) Enterprise.
     *  *
     * @description The effect of disabling a user by calling this operation is the same as that of disabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to disable a user that is temporarily not used in DMS Enterprise. After the user is disabled, the data source permission, data owner configuration, and database administrator (DBA) configuration of the corresponding Alibaba Cloud account or Resource Access Management (RAM) user are revoked and become invalid.
     * >  This operation only stops the Alibaba Cloud account or RAM user from logging on to DMS Enterprise of the enterprise, rather than actually disabling the Alibaba Cloud account or RAM user. After the user is disabled, the Alibaba Cloud account or RAM user cannot log on to DMS Enterprise, unless the user is enabled again. The disabled user, however, still exists in DMS Enterprise.
     *  *
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
     * @summary Downloads the parsing result of a data tracking task.
     *  *
     * @param DownloadDataTrackResultRequest $tmpReq  DownloadDataTrackResultRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadDataTrackResultResponse DownloadDataTrackResultResponse
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
     * @summary Downloads the parsing result of a data tracking task.
     *  *
     * @param DownloadDataTrackResultRequest $request DownloadDataTrackResultRequest
     *
     * @return DownloadDataTrackResultResponse DownloadDataTrackResultResponse
     */
    public function downloadDataTrackResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDataTrackResultWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a logical database.
     *  *
     * @param EditLogicDatabaseRequest $tmpReq  EditLogicDatabaseRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return EditLogicDatabaseResponse EditLogicDatabaseResponse
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
     * @summary Modifies the information about a logical database.
     *  *
     * @param EditLogicDatabaseRequest $request EditLogicDatabaseRequest
     *
     * @return EditLogicDatabaseResponse EditLogicDatabaseResponse
     */
    public function editLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to enable a user that has been disabled in Data Management (DMS) Enterprise.
     *  *
     * @description The effect of enabling a user by calling this operation is the same as that of enabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to enable a user that has been disabled in DMS Enterprise. After the user is enabled, the corresponding Alibaba Cloud account or Resource Access Management (RAM) user can continue to log on to DMS Enterprise and perform relevant operations.
     * >  This operation only enables the Alibaba Cloud account or RAM user to log on to DMS Enterprise of the enterprise and perform relevant operations, rather than granting other permissions to the Alibaba Cloud account or RAM user.
     *  *
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
     * @summary You can call this operation to enable a user that has been disabled in Data Management (DMS) Enterprise.
     *  *
     * @description The effect of enabling a user by calling this operation is the same as that of enabling a user by choosing System Management > User Management in the DMS Enterprise console. The administrator of DMS Enterprise can call this operation to enable a user that has been disabled in DMS Enterprise. After the user is enabled, the corresponding Alibaba Cloud account or Resource Access Management (RAM) user can continue to log on to DMS Enterprise and perform relevant operations.
     * >  This operation only enables the Alibaba Cloud account or RAM user to log on to DMS Enterprise of the enterprise and perform relevant operations, rather than granting other permissions to the Alibaba Cloud account or RAM user.
     *  *
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
     * @summary Submits a ticket for data change.
     *  *
     * @param ExecuteDataCorrectRequest $tmpReq  ExecuteDataCorrectRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteDataCorrectResponse ExecuteDataCorrectResponse
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
     * @summary Submits a ticket for data change.
     *  *
     * @param ExecuteDataCorrectRequest $request ExecuteDataCorrectRequest
     *
     * @return ExecuteDataCorrectResponse ExecuteDataCorrectResponse
     */
    public function executeDataCorrect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataCorrectWithOptions($request, $runtime);
    }

    /**
     * @summary Executes a data export ticket.
     *  *
     * @param ExecuteDataExportRequest $tmpReq  ExecuteDataExportRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteDataExportResponse ExecuteDataExportResponse
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
     * @summary Executes a data export ticket.
     *  *
     * @param ExecuteDataExportRequest $request ExecuteDataExportRequest
     *
     * @return ExecuteDataExportResponse ExecuteDataExportResponse
     */
    public function executeDataExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataExportWithOptions($request, $runtime);
    }

    /**
     * @summary Executes SQL statements.
     *  *
     * @description You can call this operation only for instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Executes SQL statements.
     *  *
     * @description You can call this operation only for instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Executes a schema synchronization task.
     *  *
     * @description If the security rules of an instance indicate that a ticket must be approved before you perform schema synchronization, you can call the [SubmitStructSyncOrderApproval](https://help.aliyun.com/document_detail/206166.html) operation to submit the ticket for approval.
     * >  You can call the [GetStructSyncJobDetail](https://help.aliyun.com/document_detail/206160.html) operation to query whether you need to submit a ticket for approval.
     *  *
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
     * @summary Executes a schema synchronization task.
     *  *
     * @description If the security rules of an instance indicate that a ticket must be approved before you perform schema synchronization, you can call the [SubmitStructSyncOrderApproval](https://help.aliyun.com/document_detail/206166.html) operation to submit the ticket for approval.
     * >  You can call the [GetStructSyncJobDetail](https://help.aliyun.com/document_detail/206160.html) operation to query whether you need to submit a ticket for approval.
     *  *
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
     * @summary Queries the approval details of a ticket.
     *  *
     * @param GetApprovalDetailRequest $request GetApprovalDetailRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApprovalDetailResponse GetApprovalDetailResponse
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
     * @summary Queries the approval details of a ticket.
     *  *
     * @param GetApprovalDetailRequest $request GetApprovalDetailRequest
     *
     * @return GetApprovalDetailResponse GetApprovalDetailResponse
     */
    public function getApprovalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a permission template.
     *  *
     * @description You must be a Data Management (DMS) administrator or a database administrator (DBA). For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Queries the information about a permission template.
     *  *
     * @description You must be a Data Management (DMS) administrator or a database administrator (DBA). For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Queries the resources in a permission template.
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Queries the resources in a permission template.
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary 获取实例绑定的分类分级模板
     *  *
     * @param GetClassificationTemplateRequest $request GetClassificationTemplateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClassificationTemplateResponse GetClassificationTemplateResponse
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
     * @summary 获取实例绑定的分类分级模板
     *  *
     * @param GetClassificationTemplateRequest $request GetClassificationTemplateRequest
     *
     * @return GetClassificationTemplateResponse GetClassificationTemplateResponse
     */
    public function getClassificationTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClassificationTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the log that records the scheduling details of an SQL task.
     *  *
     * @param GetDBTaskSQLJobLogRequest $request GetDBTaskSQLJobLogRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDBTaskSQLJobLogResponse GetDBTaskSQLJobLogResponse
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
     * @summary Queries the log that records the scheduling details of an SQL task.
     *  *
     * @param GetDBTaskSQLJobLogRequest $request GetDBTaskSQLJobLogRequest
     *
     * @return GetDBTaskSQLJobLogResponse GetDBTaskSQLJobLogResponse
     */
    public function getDBTaskSQLJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBTaskSQLJobLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the topologies of a logical database and its physical database shards.
     *  *
     * @param GetDBTopologyRequest $request GetDBTopologyRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDBTopologyResponse GetDBTopologyResponse
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
     * @summary Queries the topologies of a logical database and its physical database shards.
     *  *
     * @param GetDBTopologyRequest $request GetDBTopologyRequest
     *
     * @return GetDBTopologyResponse GetDBTopologyResponse
     */
    public function getDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of data archiving orders, including the number of successful archiving tickets, the number of failed archiving tickets, the number of in-progress archiving tickets, and the total number of archiving tickets.
     *  *
     * @param GetDataArchiveCountRequest $request GetDataArchiveCountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataArchiveCountResponse GetDataArchiveCountResponse
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
     * @summary Queries the statistics of data archiving orders, including the number of successful archiving tickets, the number of failed archiving tickets, the number of in-progress archiving tickets, and the total number of archiving tickets.
     *  *
     * @param GetDataArchiveCountRequest $request GetDataArchiveCountRequest
     *
     * @return GetDataArchiveCountResponse GetDataArchiveCountResponse
     */
    public function getDataArchiveCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataArchiveCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data archiving ticket.
     *  *
     * @param GetDataArchiveOrderDetailRequest $request GetDataArchiveOrderDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataArchiveOrderDetailResponse GetDataArchiveOrderDetailResponse
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
     * @summary Queries the details of a data archiving ticket.
     *  *
     * @param GetDataArchiveOrderDetailRequest $request GetDataArchiveOrderDetailRequest
     *
     * @return GetDataArchiveOrderDetailResponse GetDataArchiveOrderDetailResponse
     */
    public function getDataArchiveOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataArchiveOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URL of the backup file for a data change ticket in Data Management (DMS).
     *  *
     * @param GetDataCorrectBackupFilesRequest $tmpReq  GetDataCorrectBackupFilesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCorrectBackupFilesResponse GetDataCorrectBackupFilesResponse
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
     * @summary Queries the download URL of the backup file for a data change ticket in Data Management (DMS).
     *  *
     * @param GetDataCorrectBackupFilesRequest $request GetDataCorrectBackupFilesRequest
     *
     * @return GetDataCorrectBackupFilesResponse GetDataCorrectBackupFilesResponse
     */
    public function getDataCorrectBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a data change ticket in Data Management (DMS).
     *  *
     * @param GetDataCorrectOrderDetailRequest $request GetDataCorrectOrderDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCorrectOrderDetailResponse GetDataCorrectOrderDetailResponse
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
     * @summary Queries the information about a data change ticket in Data Management (DMS).
     *  *
     * @param GetDataCorrectOrderDetailRequest $request GetDataCorrectOrderDetailRequest
     *
     * @return GetDataCorrectOrderDetailResponse GetDataCorrectOrderDetailResponse
     */
    public function getDataCorrectOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URL of the rollback attachment submitted along with a data change ticket.
     *  *
     * @param GetDataCorrectRollbackFileRequest $request GetDataCorrectRollbackFileRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCorrectRollbackFileResponse GetDataCorrectRollbackFileResponse
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
     * @summary Queries the download URL of the rollback attachment submitted along with a data change ticket.
     *  *
     * @param GetDataCorrectRollbackFileRequest $request GetDataCorrectRollbackFileRequest
     *
     * @return GetDataCorrectRollbackFileResponse GetDataCorrectRollbackFileResponse
     */
    public function getDataCorrectRollbackFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectRollbackFileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URL of the SQL script for a data change task.
     *  *
     * @description This operation applies to [regular data change](https://help.aliyun.com/document_detail/58419.html) and [batch data import](https://help.aliyun.com/document_detail/144643.html).
     *  *
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
     * @summary Queries the download URL of the SQL script for a data change task.
     *  *
     * @description This operation applies to [regular data change](https://help.aliyun.com/document_detail/58419.html) and [batch data import](https://help.aliyun.com/document_detail/144643.html).
     *  *
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
     * @summary Queries the information about a data change, lock-free data change, or data import task.
     *  *
     * @param GetDataCorrectTaskDetailRequest $request GetDataCorrectTaskDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCorrectTaskDetailResponse GetDataCorrectTaskDetailResponse
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
     * @summary Queries the information about a data change, lock-free data change, or data import task.
     *  *
     * @param GetDataCorrectTaskDetailRequest $request GetDataCorrectTaskDetailRequest
     *
     * @return GetDataCorrectTaskDetailResponse GetDataCorrectTaskDetailResponse
     */
    public function getDataCorrectTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scheduling configuration of a ticket for cleaning up historical data.
     *  *
     * @param GetDataCronClearConfigRequest $request GetDataCronClearConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCronClearConfigResponse GetDataCronClearConfigResponse
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
     * @summary Queries the scheduling configuration of a ticket for cleaning up historical data.
     *  *
     * @param GetDataCronClearConfigRequest $request GetDataCronClearConfigRequest
     *
     * @return GetDataCronClearConfigResponse GetDataCronClearConfigResponse
     */
    public function getDataCronClearConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCronClearConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a historical data cleansing ticket.
     *  *
     * @param GetDataCronClearTaskDetailListRequest $request GetDataCronClearTaskDetailListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataCronClearTaskDetailListResponse GetDataCronClearTaskDetailListResponse
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
     * @summary Queries the details of a historical data cleansing ticket.
     *  *
     * @param GetDataCronClearTaskDetailListRequest $request GetDataCronClearTaskDetailListRequest
     *
     * @return GetDataCronClearTaskDetailListResponse GetDataCronClearTaskDetailListResponse
     */
    public function getDataCronClearTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCronClearTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URL of the file that records the export results for a data export ticket in Data Management (DMS).
     *  *
     * @param GetDataExportDownloadURLRequest $request GetDataExportDownloadURLRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataExportDownloadURLResponse GetDataExportDownloadURLResponse
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
     * @summary Queries the download URL of the file that records the export results for a data export ticket in Data Management (DMS).
     *  *
     * @param GetDataExportDownloadURLRequest $request GetDataExportDownloadURLRequest
     *
     * @return GetDataExportDownloadURLResponse GetDataExportDownloadURLResponse
     */
    public function getDataExportDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a data export ticket.
     *  *
     * @param GetDataExportOrderDetailRequest $request GetDataExportOrderDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataExportOrderDetailResponse GetDataExportOrderDetailResponse
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
     * @summary Queries the information about a data export ticket.
     *  *
     * @param GetDataExportOrderDetailRequest $request GetDataExportOrderDetailRequest
     *
     * @return GetDataExportOrderDetailResponse GetDataExportOrderDetailResponse
     */
    public function getDataExportOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the precheck details of an SQL result set export ticket.
     *  *
     * @param GetDataExportPreCheckDetailRequest $request GetDataExportPreCheckDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataExportPreCheckDetailResponse GetDataExportPreCheckDetailResponse
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
     * @summary Queries the precheck details of an SQL result set export ticket.
     *  *
     * @param GetDataExportPreCheckDetailRequest $request GetDataExportPreCheckDetailRequest
     *
     * @return GetDataExportPreCheckDetailResponse GetDataExportPreCheckDetailResponse
     */
    public function getDataExportPreCheckDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportPreCheckDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the progress of a data tracking task.
     *  *
     * @param GetDataTrackJobDegreeRequest $request GetDataTrackJobDegreeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataTrackJobDegreeResponse GetDataTrackJobDegreeResponse
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
     * @summary Queries the progress of a data tracking task.
     *  *
     * @param GetDataTrackJobDegreeRequest $request GetDataTrackJobDegreeRequest
     *
     * @return GetDataTrackJobDegreeResponse GetDataTrackJobDegreeResponse
     */
    public function getDataTrackJobDegree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackJobDegreeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metadata of tables involved in a data tracking task.
     *  *
     * @param GetDataTrackJobTableMetaRequest $request GetDataTrackJobTableMetaRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataTrackJobTableMetaResponse GetDataTrackJobTableMetaResponse
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
     * @summary Queries the metadata of tables involved in a data tracking task.
     *  *
     * @param GetDataTrackJobTableMetaRequest $request GetDataTrackJobTableMetaRequest
     *
     * @return GetDataTrackJobTableMetaResponse GetDataTrackJobTableMetaResponse
     */
    public function getDataTrackJobTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackJobTableMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data tracking ticket.
     *  *
     * @param GetDataTrackOrderDetailRequest $request GetDataTrackOrderDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataTrackOrderDetailResponse GetDataTrackOrderDetailResponse
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
     * @summary Queries the details of a data tracking ticket.
     *  *
     * @param GetDataTrackOrderDetailRequest $request GetDataTrackOrderDetailRequest
     *
     * @return GetDataTrackOrderDetailResponse GetDataTrackOrderDetailResponse
     */
    public function getDataTrackOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataTrackOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details of a specific database.
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseResponse GetDatabaseResponse
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
     * @summary Queries details of a specific database.
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a database export ticket.
     *  *
     * @param GetDatabaseExportOrderDetailRequest $request GetDatabaseExportOrderDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseExportOrderDetailResponse GetDatabaseExportOrderDetailResponse
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
     * @summary Queries the details of a database export ticket.
     *  *
     * @param GetDatabaseExportOrderDetailRequest $request GetDatabaseExportOrderDetailRequest
     *
     * @return GetDatabaseExportOrderDetailResponse GetDatabaseExportOrderDetailResponse
     */
    public function getDatabaseExportOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseExportOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据库导出下载地址
     *  *
     * @param GetDbExportDownloadURLRequest $request GetDbExportDownloadURLRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDbExportDownloadURLResponse GetDbExportDownloadURLResponse
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
     * @summary 获取数据库导出下载地址
     *  *
     * @param GetDbExportDownloadURLRequest $request GetDbExportDownloadURLRequest
     *
     * @return GetDbExportDownloadURLResponse GetDbExportDownloadURLResponse
     */
    public function getDbExportDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbExportDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a database instance.
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
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
     * @summary Queries the details of a database instance.
     *  *
     * @param GetInstanceRequest $request GetInstanceRequest
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the minimum scheduling cycle of a task flow when a service level agreement (SLA) timeout rule is configured for the task flow.
     *  *
     * @description The scheduling cycle of a task flow must be greater than the minimum scheduling cycle configured in the SLA rule for the task flow.
     *  *
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
     * @summary Queries the minimum scheduling cycle of a task flow when a service level agreement (SLA) timeout rule is configured for the task flow.
     *  *
     * @description The scheduling cycle of a task flow must be greater than the minimum scheduling cycle configured in the SLA rule for the task flow.
     *  *
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
     * @summary Queries the information about a workspace based on the workspace name in Data Management (DMS).
     *  *
     * @description You are a DMS administrator or a database administrator (DBA).
     *  *
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
     * @summary Queries the information about a workspace based on the workspace name in Data Management (DMS).
     *  *
     * @description You are a DMS administrator or a database administrator (DBA).
     *  *
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
     * @summary Queries the details of a logical database.
     *  *
     * @param GetLogicDatabaseRequest $request GetLogicDatabaseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLogicDatabaseResponse GetLogicDatabaseResponse
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
     * @summary Queries the details of a logical database.
     *  *
     * @param GetLogicDatabaseRequest $request GetLogicDatabaseRequest
     *
     * @return GetLogicDatabaseResponse GetLogicDatabaseResponse
     */
    public function getLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of columns in a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the details of columns in a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the details of columns and indexes in a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the details of columns and indexes in a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the details and progress of an OnlineDDL task.
     *  *
     * @param GetOnlineDDLProgressRequest $request GetOnlineDDLProgressRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOnlineDDLProgressResponse GetOnlineDDLProgressResponse
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
     * @summary Queries the details and progress of an OnlineDDL task.
     *  *
     * @param GetOnlineDDLProgressRequest $request GetOnlineDDLProgressRequest
     *
     * @return GetOnlineDDLProgressResponse GetOnlineDDLProgressResponse
     */
    public function getOnlineDDLProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineDDLProgressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of operation logs that are generated in a specified period of time.
     *  *
     * @description Prerequisites: You are an administrator of Data Management (DMS) or a security administrator. You can call the [ListUsers](https://help.aliyun.com/document_detail/141938.html) or [GetUser](https://help.aliyun.com/document_detail/147098.html) operation to obtain your user role from the RoleIdList parameter that is returned.
     *  *
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
     * @summary Queries the details of operation logs that are generated in a specified period of time.
     *  *
     * @description Prerequisites: You are an administrator of Data Management (DMS) or a security administrator. You can call the [ListUsers](https://help.aliyun.com/document_detail/141938.html) or [GetUser](https://help.aliyun.com/document_detail/147098.html) operation to obtain your user role from the RoleIdList parameter that is returned.
     *  *
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
     * @summary Queries the download URL of the attachment of a ticket.
     *  *
     * @param GetOrderAttachmentFileRequest $request GetOrderAttachmentFileRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderAttachmentFileResponse GetOrderAttachmentFileResponse
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
     * @summary Queries the download URL of the attachment of a ticket.
     *  *
     * @param GetOrderAttachmentFileRequest $request GetOrderAttachmentFileRequest
     *
     * @return GetOrderAttachmentFileResponse GetOrderAttachmentFileResponse
     */
    public function getOrderAttachmentFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderAttachmentFileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information about a ticket.
     *  *
     * @param GetOrderBaseInfoRequest $request GetOrderBaseInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderBaseInfoResponse GetOrderBaseInfoResponse
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
     * @summary Queries the basic information about a ticket.
     *  *
     * @param GetOrderBaseInfoRequest $request GetOrderBaseInfoRequest
     *
     * @return GetOrderBaseInfoResponse GetOrderBaseInfoResponse
     */
    public function getOrderBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderBaseInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the Database-OWNER, Table-OWNER, and Instance-OWNER tickets.
     *  *
     * @param GetOwnerApplyOrderDetailRequest $request GetOwnerApplyOrderDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOwnerApplyOrderDetailResponse GetOwnerApplyOrderDetailResponse
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
     * @summary Queries the details of the Database-OWNER, Table-OWNER, and Instance-OWNER tickets.
     *  *
     * @param GetOwnerApplyOrderDetailRequest $request GetOwnerApplyOrderDetailRequest
     *
     * @return GetOwnerApplyOrderDetailResponse GetOwnerApplyOrderDetailResponse
     */
    public function getOwnerApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOwnerApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据归档工单任务实例
     *  *
     * @param GetPagedInstanceRequest $request GetPagedInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPagedInstanceResponse GetPagedInstanceResponse
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
     * @summary 获取数据归档工单任务实例
     *  *
     * @param GetPagedInstanceRequest $request GetPagedInstanceRequest
     *
     * @return GetPagedInstanceResponse GetPagedInstanceResponse
     */
    public function getPagedInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPagedInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a ticket that applies for permissions.
     *  *
     * @description You can call this operation to query the information about tickets that apply for permissions on databases, tables, and sensitive columns.
     *  *
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
     * @summary Queries the details of a ticket that applies for permissions.
     *  *
     * @description You can call this operation to query the information about tickets that apply for permissions on databases, tables, and sensitive columns.
     *  *
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
     * @summary Queries the details of a physical database.
     *  *
     * @param GetPhysicalDatabaseRequest $request GetPhysicalDatabaseRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalDatabaseResponse GetPhysicalDatabaseResponse
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
     * @summary Queries the details of a physical database.
     *  *
     * @param GetPhysicalDatabaseRequest $request GetPhysicalDatabaseRequest
     *
     * @return GetPhysicalDatabaseResponse GetPhysicalDatabaseResponse
     */
    public function getPhysicalDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a secure access proxy.
     *  *
     * @param GetProxyRequest $request GetProxyRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProxyResponse GetProxyResponse
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
     * @summary Queries the details of a secure access proxy.
     *  *
     * @param GetProxyRequest $request GetProxyRequest
     *
     * @return GetProxyResponse GetProxyResponse
     */
    public function getProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the authorization information about the secure access proxy feature.
     *  *
     * @param GetProxyAccessRequest $request GetProxyAccessRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProxyAccessResponse GetProxyAccessResponse
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
     * @summary Queries the authorization information about the secure access proxy feature.
     *  *
     * @param GetProxyAccessRequest $request GetProxyAccessRequest
     *
     * @return GetProxyAccessResponse GetProxyAccessResponse
     */
    public function getProxyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the maximum number of custom service-level agreement (SLA) rules for task orchestration.
     *  *
     * @param GetRuleNumLimitOfSLARequest $request GetRuleNumLimitOfSLARequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleNumLimitOfSLAResponse GetRuleNumLimitOfSLAResponse
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
     * @summary Queries the maximum number of custom service-level agreement (SLA) rules for task orchestration.
     *  *
     * @param GetRuleNumLimitOfSLARequest $request GetRuleNumLimitOfSLARequest
     *
     * @return GetRuleNumLimitOfSLAResponse GetRuleNumLimitOfSLAResponse
     */
    public function getRuleNumLimitOfSLA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleNumLimitOfSLAWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result of an SQL review.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Queries the result of an SQL review.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Queries the details of optimization suggestions. The operation applies only to the tickets for the data changes and SQL review.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Queries the details of optimization suggestions. The operation applies only to the tickets for the data changes and SQL review.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary 获取安全规则
     *  *
     * @param GetStandardGroupRequest $request GetStandardGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStandardGroupResponse GetStandardGroupResponse
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
     * @summary 获取安全规则
     *  *
     * @param GetStandardGroupRequest $request GetStandardGroupRequest
     *
     * @return GetStandardGroupResponse GetStandardGroupResponse
     */
    public function getStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL statements that are involved in a schema synchronization ticket.
     *  *
     * @param GetStructSyncExecSqlDetailRequest $request GetStructSyncExecSqlDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStructSyncExecSqlDetailResponse GetStructSyncExecSqlDetailResponse
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
     * @summary Queries the SQL statements that are involved in a schema synchronization ticket.
     *  *
     * @param GetStructSyncExecSqlDetailRequest $request GetStructSyncExecSqlDetailRequest
     *
     * @return GetStructSyncExecSqlDetailResponse GetStructSyncExecSqlDetailResponse
     */
    public function getStructSyncExecSqlDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncExecSqlDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the analysis result of a schema synchronization task.
     *  *
     * @param GetStructSyncJobAnalyzeResultRequest $request GetStructSyncJobAnalyzeResultRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStructSyncJobAnalyzeResultResponse GetStructSyncJobAnalyzeResultResponse
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
     * @summary Queries the analysis result of a schema synchronization task.
     *  *
     * @param GetStructSyncJobAnalyzeResultRequest $request GetStructSyncJobAnalyzeResultRequest
     *
     * @return GetStructSyncJobAnalyzeResultResponse GetStructSyncJobAnalyzeResultResponse
     */
    public function getStructSyncJobAnalyzeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobAnalyzeResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a schema synchronization task.
     *  *
     * @param GetStructSyncJobDetailRequest $request GetStructSyncJobDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStructSyncJobDetailResponse GetStructSyncJobDetailResponse
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
     * @summary Queries the information of a schema synchronization task.
     *  *
     * @param GetStructSyncJobDetailRequest $request GetStructSyncJobDetailRequest
     *
     * @return GetStructSyncJobDetailResponse GetStructSyncJobDetailResponse
     */
    public function getStructSyncJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a schema synchronization ticket.
     *  *
     * @param GetStructSyncOrderDetailRequest $request GetStructSyncOrderDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStructSyncOrderDetailResponse GetStructSyncOrderDetailResponse
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
     * @summary Queries the details of a schema synchronization ticket.
     *  *
     * @param GetStructSyncOrderDetailRequest $request GetStructSyncOrderDetailRequest
     *
     * @return GetStructSyncOrderDetailResponse GetStructSyncOrderDetailResponse
     */
    public function getStructSyncOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the topology of a data table.
     *  *
     * @param GetTableDBTopologyRequest $request GetTableDBTopologyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableDBTopologyResponse GetTableDBTopologyResponse
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
     * @summary Queries the topology of a data table.
     *  *
     * @param GetTableDBTopologyRequest $request GetTableDBTopologyRequest
     *
     * @return GetTableDBTopologyResponse GetTableDBTopologyResponse
     */
    public function getTableDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDBTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取结构设计项目的流程信息
     *  *
     * @param GetTableDesignProjectFlowRequest $request GetTableDesignProjectFlowRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableDesignProjectFlowResponse GetTableDesignProjectFlowResponse
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
     * @summary 获取结构设计项目的流程信息
     *  *
     * @param GetTableDesignProjectFlowRequest $request GetTableDesignProjectFlowRequest
     *
     * @return GetTableDesignProjectFlowResponse GetTableDesignProjectFlowResponse
     */
    public function getTableDesignProjectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDesignProjectFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 获取结构设计项目的详细信息
     *  *
     * @param GetTableDesignProjectInfoRequest $request GetTableDesignProjectInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableDesignProjectInfoResponse GetTableDesignProjectInfoResponse
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
     * @summary 获取结构设计项目的详细信息
     *  *
     * @param GetTableDesignProjectInfoRequest $request GetTableDesignProjectInfoRequest
     *
     * @return GetTableDesignProjectInfoResponse GetTableDesignProjectInfoResponse
     */
    public function getTableDesignProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDesignProjectInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the topology of a table.
     *  *
     * @param GetTableTopologyRequest $request GetTableTopologyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableTopologyResponse GetTableTopologyResponse
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
     * @summary Queries the topology of a table.
     *  *
     * @param GetTableTopologyRequest $request GetTableTopologyRequest
     *
     * @return GetTableTopologyResponse GetTableTopologyResponse
     */
    public function getTableTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations, including time variables, of a specified task node based on the task node ID.
     *  *
     * @param GetTaskRequest $request GetTaskRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
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
     * @summary Queries the configurations, including time variables, of a specified task node based on the task node ID.
     *  *
     * @param GetTaskRequest $request GetTaskRequest
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Directed Acyclic Graph (DAG) of a task flow.
     *  *
     * @param GetTaskFlowGraphRequest $request GetTaskFlowGraphRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskFlowGraphResponse GetTaskFlowGraphResponse
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
     * @summary Queries the Directed Acyclic Graph (DAG) of a task flow.
     *  *
     * @param GetTaskFlowGraphRequest $request GetTaskFlowGraphRequest
     *
     * @return GetTaskFlowGraphResponse GetTaskFlowGraphResponse
     */
    public function getTaskFlowGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskFlowGraphWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the notification settings for task flows.
     *  *
     * @param GetTaskFlowNotificationRequest $request GetTaskFlowNotificationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskFlowNotificationResponse GetTaskFlowNotificationResponse
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
     * @summary Queries the notification settings for task flows.
     *  *
     * @param GetTaskFlowNotificationRequest $request GetTaskFlowNotificationRequest
     *
     * @return GetTaskFlowNotificationResponse GetTaskFlowNotificationResponse
     */
    public function getTaskFlowNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskFlowNotificationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the nodes in an execution record of a task flow.
     *  *
     * @param GetTaskInstanceRelationRequest $request GetTaskInstanceRelationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskInstanceRelationResponse GetTaskInstanceRelationResponse
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
     * @summary Queries the information about the nodes in an execution record of a task flow.
     *  *
     * @param GetTaskInstanceRelationRequest $request GetTaskInstanceRelationRequest
     *
     * @return GetTaskInstanceRelationResponse GetTaskInstanceRelationResponse
     */
    public function getTaskInstanceRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a user.
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
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
     * @summary Queries the information about a user.
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details of the active tenant.
     *  *
     * @param GetUserActiveTenantRequest $request GetUserActiveTenantRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserActiveTenantResponse GetUserActiveTenantResponse
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
     * @summary Queries details of the active tenant.
     *  *
     * @param GetUserActiveTenantRequest $request GetUserActiveTenantRequest
     *
     * @return GetUserActiveTenantResponse GetUserActiveTenantResponse
     */
    public function getUserActiveTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserActiveTenantWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the information of a file upload task.
     *  *
     * @param GetUserUploadFileJobRequest $request GetUserUploadFileJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserUploadFileJobResponse GetUserUploadFileJobResponse
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
     * @summary Obtains the information of a file upload task.
     *  *
     * @param GetUserUploadFileJobRequest $request GetUserUploadFileJobRequest
     *
     * @return GetUserUploadFileJobResponse GetUserUploadFileJobResponse
     */
    public function getUserUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @summary Grants permissions on resources to users by using a permission template.
     *  *
     * @description You must be a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Grants permissions on resources to users by using a permission template.
     *  *
     * @description You must be a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Grants permissions on an instance, a database, or a table to a user.
     *  *
     * @param GrantUserPermissionRequest $request GrantUserPermissionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantUserPermissionResponse GrantUserPermissionResponse
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
     * @summary Grants permissions on an instance, a database, or a table to a user.
     *  *
     * @param GrantUserPermissionRequest $request GrantUserPermissionRequest
     *
     * @return GrantUserPermissionResponse GrantUserPermissionResponse
     */
    public function grantUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to obtain the authorization password of the security protection agent InspectProxyAccessSecret.
     *  *
     * @param InspectProxyAccessSecretRequest $request InspectProxyAccessSecretRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InspectProxyAccessSecretResponse InspectProxyAccessSecretResponse
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
     * @summary You can call this operation to obtain the authorization password of the security protection agent InspectProxyAccessSecret.
     *  *
     * @param InspectProxyAccessSecretRequest $request InspectProxyAccessSecretRequest
     *
     * @return InspectProxyAccessSecretResponse InspectProxyAccessSecretResponse
     */
    public function inspectProxyAccessSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inspectProxyAccessSecretWithOptions($request, $runtime);
    }

    /**
     * @summary 获取权限模版列表
     *  *
     * @param ListAuthorityTemplateRequest $request ListAuthorityTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthorityTemplateResponse ListAuthorityTemplateResponse
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
     * @summary 获取权限模版列表
     *  *
     * @param ListAuthorityTemplateRequest $request ListAuthorityTemplateRequest
     *
     * @return ListAuthorityTemplateResponse ListAuthorityTemplateResponse
     */
    public function listAuthorityTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorityTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the classification templates.
     *  *
     * @param ListClassificationTemplatesRequest $request ListClassificationTemplatesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClassificationTemplatesResponse ListClassificationTemplatesResponse
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
     * @summary Queries the classification templates.
     *  *
     * @param ListClassificationTemplatesRequest $request ListClassificationTemplatesRequest
     *
     * @return ListClassificationTemplatesResponse ListClassificationTemplatesResponse
     */
    public function listClassificationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassificationTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Returns the column information of a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Returns the column information of a table.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the published versions of a task flow.
     *  *
     * @param ListDAGVersionsRequest $request ListDAGVersionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDAGVersionsResponse ListDAGVersionsResponse
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
     * @summary Queries the published versions of a task flow.
     *  *
     * @param ListDAGVersionsRequest $request ListDAGVersionsRequest
     *
     * @return ListDAGVersionsResponse ListDAGVersionsResponse
     */
    public function listDAGVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDAGVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of SQL tasks.
     *  *
     * @param ListDBTaskSQLJobRequest $request ListDBTaskSQLJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDBTaskSQLJobResponse ListDBTaskSQLJobResponse
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
     * @summary Queries a list of SQL tasks.
     *  *
     * @param ListDBTaskSQLJobRequest $request ListDBTaskSQLJobRequest
     *
     * @return ListDBTaskSQLJobResponse ListDBTaskSQLJobResponse
     */
    public function listDBTaskSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an SQL task.
     *  *
     * @param ListDBTaskSQLJobDetailRequest $request ListDBTaskSQLJobDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDBTaskSQLJobDetailResponse ListDBTaskSQLJobDetailResponse
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
     * @summary Queries the details of an SQL task.
     *  *
     * @param ListDBTaskSQLJobDetailRequest $request ListDBTaskSQLJobDetailRequest
     *
     * @return ListDBTaskSQLJobDetailResponse ListDBTaskSQLJobDetailResponse
     */
    public function listDBTaskSQLJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the publishing details of a schema design ticket.
     *  *
     * @param ListDDLPublishRecordsRequest $request ListDDLPublishRecordsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDDLPublishRecordsResponse ListDDLPublishRecordsResponse
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
     * @summary Queries the publishing details of a schema design ticket.
     *  *
     * @param ListDDLPublishRecordsRequest $request ListDDLPublishRecordsRequest
     *
     * @return ListDDLPublishRecordsResponse ListDDLPublishRecordsResponse
     */
    public function listDDLPublishRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDDLPublishRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases that are involved in the precheck of a data change ticket.
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Queries the databases that are involved in the precheck of a data change ticket.
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Queries the precheck information about an SQL statement that is specified in a data change ticket.
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Queries the precheck information about an SQL statement that is specified in a data change ticket.
     *  *
     * @description For more information about the Normal Data Modify feature, see [Change regular data](https://help.aliyun.com/document_detail/58419.html).
     *  *
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
     * @summary Queries the precheck information of SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the precheck information of SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the types of SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the types of SQL statements used for data import in a ticket.
     *  *
     * @description You can call this operation only if the data is imported in security mode in your data import ticket.
     *  *
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
     * @summary Queries the permissions of users on a database.
     *  *
     * @param ListDatabaseUserPermssionsRequest $request ListDatabaseUserPermssionsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseUserPermssionsResponse ListDatabaseUserPermssionsResponse
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
     * @summary Queries the permissions of users on a database.
     *  *
     * @param ListDatabaseUserPermssionsRequest $request ListDatabaseUserPermssionsRequest
     *
     * @return ListDatabaseUserPermssionsResponse ListDatabaseUserPermssionsResponse
     */
    public function listDatabaseUserPermssions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseUserPermssionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases in a database instance.
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesResponse ListDatabasesResponse
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
     * @summary Queries the databases in a database instance.
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the default service level agreement (SLA) timeout rules.
     *  *
     * @param ListDefaultSLARulesRequest $request ListDefaultSLARulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDefaultSLARulesResponse ListDefaultSLARulesResponse
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
     * @summary Queries the default service level agreement (SLA) timeout rules.
     *  *
     * @param ListDefaultSLARulesRequest $request ListDefaultSLARulesRequest
     *
     * @return ListDefaultSLARulesResponse ListDefaultSLARulesResponse
     */
    public function listDefaultSLARules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDefaultSLARulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries masking rules.
     *  *
     * @param ListDesensitizationRuleRequest $request ListDesensitizationRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDesensitizationRuleResponse ListDesensitizationRuleResponse
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
     * @summary Queries masking rules.
     *  *
     * @param ListDesensitizationRuleRequest $request ListDesensitizationRuleRequest
     *
     * @return ListDesensitizationRuleResponse ListDesensitizationRuleResponse
     */
    public function listDesensitizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDesensitizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries valid orders.
     *  *
     * @param ListEffectiveOrdersRequest $request ListEffectiveOrdersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEffectiveOrdersResponse ListEffectiveOrdersResponse
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
     * @summary Queries valid orders.
     *  *
     * @param ListEffectiveOrdersRequest $request ListEffectiveOrdersRequest
     *
     * @return ListEffectiveOrdersResponse ListEffectiveOrdersResponse
     */
    public function listEffectiveOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEffectiveOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the indexes of a table.
     *  *
     * @param ListIndexesRequest $request ListIndexesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIndexesResponse ListIndexesResponse
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
     * @summary Queries the indexes of a table.
     *  *
     * @param ListIndexesRequest $request ListIndexesRequest
     *
     * @return ListIndexesResponse ListIndexesResponse
     */
    public function listIndexes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIndexesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logon records of an instance.
     *  *
     * @param ListInstanceLoginAuditLogRequest $request ListInstanceLoginAuditLogRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceLoginAuditLogResponse ListInstanceLoginAuditLogResponse
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
     * @summary Queries the logon records of an instance.
     *  *
     * @param ListInstanceLoginAuditLogRequest $request ListInstanceLoginAuditLogRequest
     *
     * @return ListInstanceLoginAuditLogResponse ListInstanceLoginAuditLogResponse
     */
    public function listInstanceLoginAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceLoginAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permissions of a user on a specific instance.
     *  *
     * @param ListInstanceUserPermissionsRequest $request ListInstanceUserPermissionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceUserPermissionsResponse ListInstanceUserPermissionsResponse
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
     * @summary Queries the permissions of a user on a specific instance.
     *  *
     * @param ListInstanceUserPermissionsRequest $request ListInstanceUserPermissionsRequest
     *
     * @return ListInstanceUserPermissionsResponse ListInstanceUserPermissionsResponse
     */
    public function listInstanceUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about database instances.
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
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
     * @summary Queries the information about database instances.
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the task flows corresponding to a specific business scenario in a workspace in Data Management (DMS).
     *  *
     * @description *   Before you call this operation, make sure that you have the access permissions on the workspace. If you do not have the access permissions on the workspace, you can contact a DMS administrator, database administrator (DBA), or workspace administrator to add you as a member of the workspace. The [AddLhMembers](https://help.aliyun.com/document_detail/424759.html) operation can be called to add a workspace member.
     * *   If you are a DMS administrator or a workspace administrator, you can query the business scenarios and task flows related to a user in a workspace based on the user ID.
     *  *
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
     * @summary Queries the task flows corresponding to a specific business scenario in a workspace in Data Management (DMS).
     *  *
     * @description *   Before you call this operation, make sure that you have the access permissions on the workspace. If you do not have the access permissions on the workspace, you can contact a DMS administrator, database administrator (DBA), or workspace administrator to add you as a member of the workspace. The [AddLhMembers](https://help.aliyun.com/document_detail/424759.html) operation can be called to add a workspace member.
     * *   If you are a DMS administrator or a workspace administrator, you can query the business scenarios and task flows related to a user in a workspace based on the user ID.
     *  *
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
     * @summary Queries the details of logical databases.
     *  *
     * @param ListLogicDatabasesRequest $request ListLogicDatabasesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogicDatabasesResponse ListLogicDatabasesResponse
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
     * @summary Queries the details of logical databases.
     *  *
     * @param ListLogicDatabasesRequest $request ListLogicDatabasesRequest
     *
     * @return ListLogicDatabasesResponse ListLogicDatabasesResponse
     */
    public function listLogicDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the routing algorithms of a logical table.
     *  *
     * @param ListLogicTableRouteConfigRequest $request ListLogicTableRouteConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogicTableRouteConfigResponse ListLogicTableRouteConfigResponse
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
     * @summary Queries the routing algorithms of a logical table.
     *  *
     * @param ListLogicTableRouteConfigRequest $request ListLogicTableRouteConfigRequest
     *
     * @return ListLogicTableRouteConfigResponse ListLogicTableRouteConfigResponse
     */
    public function listLogicTableRouteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicTableRouteConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the logical tables in a logical database.
     *  *
     * @param ListLogicTablesRequest $request ListLogicTablesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogicTablesResponse ListLogicTablesResponse
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
     * @summary Queries the details of the logical tables in a logical database.
     *  *
     * @param ListLogicTablesRequest $request ListLogicTablesRequest
     *
     * @return ListLogicTablesResponse ListLogicTablesResponse
     */
    public function listLogicTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicTablesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tickets in Data Management (DMS).
     *  *
     * @param ListOrdersRequest $request ListOrdersRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrdersResponse ListOrdersResponse
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
     * @summary Queries tickets in Data Management (DMS).
     *  *
     * @param ListOrdersRequest $request ListOrdersRequest
     *
     * @return ListOrdersResponse ListOrdersResponse
     */
    public function listOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the proxies that are generated by the secure access proxy feature.
     *  *
     * @param ListProxiesRequest $request ListProxiesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProxiesResponse ListProxiesResponse
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
     * @summary Queries the proxies that are generated by the secure access proxy feature.
     *  *
     * @param ListProxiesRequest $request ListProxiesRequest
     *
     * @return ListProxiesResponse ListProxiesResponse
     */
    public function listProxies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxiesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about users that are authorized to access a database instance by using the secure access proxy feature.
     *  *
     * @param ListProxyAccessesRequest $request ListProxyAccessesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProxyAccessesResponse ListProxyAccessesResponse
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
     * @summary Queries information about users that are authorized to access a database instance by using the secure access proxy feature.
     *  *
     * @param ListProxyAccessesRequest $request ListProxyAccessesRequest
     *
     * @return ListProxyAccessesResponse ListProxyAccessesResponse
     */
    public function listProxyAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxyAccessesWithOptions($request, $runtime);
    }

    /**
     * @summary 操作审计-数据安全代理SQL执行列表
     *  *
     * @param ListProxySQLExecAuditLogRequest $request ListProxySQLExecAuditLogRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProxySQLExecAuditLogResponse ListProxySQLExecAuditLogResponse
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
     * @summary 操作审计-数据安全代理SQL执行列表
     *  *
     * @param ListProxySQLExecAuditLogRequest $request ListProxySQLExecAuditLogRequest
     *
     * @return ListProxySQLExecAuditLogResponse ListProxySQLExecAuditLogResponse
     */
    public function listProxySQLExecAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProxySQLExecAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the custom service level agreement (SLA) rules.
     *  *
     * @param ListSLARulesRequest $request ListSLARulesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSLARulesResponse ListSLARulesResponse
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
     * @summary Queries the custom service level agreement (SLA) rules.
     *  *
     * @param ListSLARulesRequest $request ListSLARulesRequest
     *
     * @return ListSLARulesResponse ListSLARulesResponse
     */
    public function listSLARules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSLARulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries SQL statements that were written on the SQLConsole tab.
     *  *
     * @param ListSQLExecAuditLogRequest $request ListSQLExecAuditLogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSQLExecAuditLogResponse ListSQLExecAuditLogResponse
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
     * @summary Queries SQL statements that were written on the SQLConsole tab.
     *  *
     * @param ListSQLExecAuditLogRequest $request ListSQLExecAuditLogRequest
     *
     * @return ListSQLExecAuditLogResponse ListSQLExecAuditLogResponse
     */
    public function listSQLExecAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSQLExecAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the SQL statements that are involved in an SQL review ticket.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Queries the details of the SQL statements that are involved in an SQL review ticket.
     *  *
     * @description For more information about the SQL review feature, see [SQL review](https://help.aliyun.com/document_detail/60374.html).
     *  *
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
     * @summary Queries business scenarios.
     *  *
     * @param ListScenariosRequest $request ListScenariosRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScenariosResponse ListScenariosResponse
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
     * @summary Queries business scenarios.
     *  *
     * @param ListScenariosRequest $request ListScenariosRequest
     *
     * @return ListScenariosResponse ListScenariosResponse
     */
    public function listScenarios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenariosWithOptions($request, $runtime);
    }

    /**
     * @summary 获取敏感字段信息
     *  *
     * @param ListSensitiveColumnInfoRequest $request ListSensitiveColumnInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitiveColumnInfoResponse ListSensitiveColumnInfoResponse
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
     * @summary 获取敏感字段信息
     *  *
     * @param ListSensitiveColumnInfoRequest $request ListSensitiveColumnInfoRequest
     *
     * @return ListSensitiveColumnInfoResponse ListSensitiveColumnInfoResponse
     */
    public function listSensitiveColumnInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sensitive fields in a table of a database.
     *  *
     * @param ListSensitiveColumnsRequest $request ListSensitiveColumnsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitiveColumnsResponse ListSensitiveColumnsResponse
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
     * @summary Queries sensitive fields in a table of a database.
     *  *
     * @param ListSensitiveColumnsRequest $request ListSensitiveColumnsRequest
     *
     * @return ListSensitiveColumnsResponse ListSensitiveColumnsResponse
     */
    public function listSensitiveColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a sensitive field.
     *  *
     * @param ListSensitiveColumnsDetailRequest $request ListSensitiveColumnsDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitiveColumnsDetailResponse ListSensitiveColumnsDetailResponse
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
     * @summary Queries the details of a sensitive field.
     *  *
     * @param ListSensitiveColumnsDetailRequest $request ListSensitiveColumnsDetailRequest
     *
     * @return ListSensitiveColumnsDetailResponse ListSensitiveColumnsDetailResponse
     */
    public function listSensitiveColumnsDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the audit logs for sensitive information.
     *  *
     * @param ListSensitiveDataAuditLogRequest $request ListSensitiveDataAuditLogRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitiveDataAuditLogResponse ListSensitiveDataAuditLogResponse
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
     * @summary Queries the audit logs for sensitive information.
     *  *
     * @param ListSensitiveDataAuditLogRequest $request ListSensitiveDataAuditLogRequest
     *
     * @return ListSensitiveDataAuditLogResponse ListSensitiveDataAuditLogResponse
     */
    public function listSensitiveDataAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveDataAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the sensitivity levels of a classification template.
     *  *
     * @param ListSensitivityLevelRequest $request ListSensitivityLevelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitivityLevelResponse ListSensitivityLevelResponse
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
     * @summary Queries the sensitivity levels of a classification template.
     *  *
     * @param ListSensitivityLevelRequest $request ListSensitivityLevelRequest
     *
     * @return ListSensitivityLevelResponse ListSensitivityLevelResponse
     */
    public function listSensitivityLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitivityLevelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries security rule sets.
     *  *
     * @param ListStandardGroupsRequest $request ListStandardGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStandardGroupsResponse ListStandardGroupsResponse
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
     * @summary Queries security rule sets.
     *  *
     * @param ListStandardGroupsRequest $request ListStandardGroupsRequest
     *
     * @return ListStandardGroupsResponse ListStandardGroupsResponse
     */
    public function listStandardGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStandardGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tables in a database.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Queries the tables in a database.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary 任务编排获取任务流列表
     *  *
     * @param ListTaskFlowRequest $request ListTaskFlowRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowResponse ListTaskFlowResponse
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
     * @summary 任务编排获取任务流列表
     *  *
     * @param ListTaskFlowRequest $request ListTaskFlowRequest
     *
     * @return ListTaskFlowResponse ListTaskFlowResponse
     */
    public function listTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the constants for a task flow.
     *  *
     * @param ListTaskFlowConstantsRequest $request ListTaskFlowConstantsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowConstantsResponse ListTaskFlowConstantsResponse
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
     * @summary Queries the constants for a task flow.
     *  *
     * @param ListTaskFlowConstantsRequest $request ListTaskFlowConstantsRequest
     *
     * @return ListTaskFlowConstantsResponse ListTaskFlowConstantsResponse
     */
    public function listTaskFlowConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowConstantsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the users that are involved in a specified task flow.
     *  *
     * @param ListTaskFlowCooperatorsRequest $request ListTaskFlowCooperatorsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowCooperatorsResponse ListTaskFlowCooperatorsResponse
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
     * @summary Queries the users that are involved in a specified task flow.
     *  *
     * @param ListTaskFlowCooperatorsRequest $request ListTaskFlowCooperatorsRequest
     *
     * @return ListTaskFlowCooperatorsResponse ListTaskFlowCooperatorsResponse
     */
    public function listTaskFlowCooperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowCooperatorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the edges of the directed acyclic graph (DAG) for a specified task flow based on multiple conditions.
     *  *
     * @description This operation is used for multi-condition query. You can call this operation to query the edges of a specified task flow that meet all specified conditions.
     *  *
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
     * @summary Queries the edges of the directed acyclic graph (DAG) for a specified task flow based on multiple conditions.
     *  *
     * @description This operation is used for multi-condition query. You can call this operation to query the edges of a specified task flow that meet all specified conditions.
     *  *
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
     * @summary Queries the execution records of a task flow.
     *  *
     * @param ListTaskFlowInstanceRequest $request ListTaskFlowInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowInstanceResponse ListTaskFlowInstanceResponse
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
     * @summary Queries the execution records of a task flow.
     *  *
     * @param ListTaskFlowInstanceRequest $request ListTaskFlowInstanceRequest
     *
     * @return ListTaskFlowInstanceResponse ListTaskFlowInstanceResponse
     */
    public function listTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the time variables for a task flow.
     *  *
     * @param ListTaskFlowTimeVariablesRequest $request ListTaskFlowTimeVariablesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowTimeVariablesResponse ListTaskFlowTimeVariablesResponse
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
     * @summary Queries the time variables for a task flow.
     *  *
     * @param ListTaskFlowTimeVariablesRequest $request ListTaskFlowTimeVariablesRequest
     *
     * @return ListTaskFlowTimeVariablesResponse ListTaskFlowTimeVariablesResponse
     */
    public function listTaskFlowTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowTimeVariablesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries task flows by page.
     *  *
     * @param ListTaskFlowsByPageRequest $tmpReq  ListTaskFlowsByPageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskFlowsByPageResponse ListTaskFlowsByPageResponse
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
     * @summary Queries task flows by page.
     *  *
     * @param ListTaskFlowsByPageRequest $request ListTaskFlowsByPageRequest
     *
     * @return ListTaskFlowsByPageResponse ListTaskFlowsByPageResponse
     */
    public function listTaskFlowsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskFlowsByPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tasks in a specified task flow.
     *  *
     * @param ListTasksInTaskFlowRequest $request ListTasksInTaskFlowRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksInTaskFlowResponse ListTasksInTaskFlowResponse
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
     * @summary Queries the tasks in a specified task flow.
     *  *
     * @param ListTasksInTaskFlowRequest $request ListTasksInTaskFlowRequest
     *
     * @return ListTasksInTaskFlowResponse ListTasksInTaskFlowResponse
     */
    public function listTasksInTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksInTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permissions of a specific user on a database or a table.
     *  *
     * @param ListUserPermissionsRequest $request ListUserPermissionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserPermissionsResponse ListUserPermissionsResponse
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
     * @summary Queries the permissions of a specific user on a database or a table.
     *  *
     * @param ListUserPermissionsRequest $request ListUserPermissionsRequest
     *
     * @return ListUserPermissionsResponse ListUserPermissionsResponse
     */
    public function listUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户租户列表
     *  *
     * @param ListUserTenantsRequest $request ListUserTenantsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserTenantsResponse ListUserTenantsResponse
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
     * @summary 获取用户租户列表
     *  *
     * @param ListUserTenantsRequest $request ListUserTenantsRequest
     *
     * @return ListUserTenantsResponse ListUserTenantsResponse
     */
    public function listUserTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTenantsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of users.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
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
     * @summary Queries the details of users.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries approval nodes.
     *  *
     * @param ListWorkFlowNodesRequest $request ListWorkFlowNodesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkFlowNodesResponse ListWorkFlowNodesResponse
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
     * @summary Queries approval nodes.
     *  *
     * @param ListWorkFlowNodesRequest $request ListWorkFlowNodesRequest
     *
     * @return ListWorkFlowNodesResponse ListWorkFlowNodesResponse
     */
    public function listWorkFlowNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries approval templates.
     *  *
     * @param ListWorkFlowTemplatesRequest $request ListWorkFlowTemplatesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkFlowTemplatesResponse ListWorkFlowTemplatesResponse
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
     * @summary Queries approval templates.
     *  *
     * @param ListWorkFlowTemplatesRequest $request ListWorkFlowTemplatesRequest
     *
     * @return ListWorkFlowTemplatesResponse ListWorkFlowTemplatesResponse
     */
    public function listWorkFlowTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the status of a task flow to "Successful".
     *  *
     * @param MakeTaskFlowInstanceSuccessRequest $request MakeTaskFlowInstanceSuccessRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return MakeTaskFlowInstanceSuccessResponse MakeTaskFlowInstanceSuccessResponse
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
     * @summary Sets the status of a task flow to "Successful".
     *  *
     * @param MakeTaskFlowInstanceSuccessRequest $request MakeTaskFlowInstanceSuccessRequest
     *
     * @return MakeTaskFlowInstanceSuccessResponse MakeTaskFlowInstanceSuccessResponse
     */
    public function makeTaskFlowInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeTaskFlowInstanceSuccessWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the SQL script that is submitted by using a data change ticket.
     *  *
     * @param ModifyDataCorrectExecSQLRequest $request ModifyDataCorrectExecSQLRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataCorrectExecSQLResponse ModifyDataCorrectExecSQLResponse
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
     * @summary Modifies the SQL script that is submitted by using a data change ticket.
     *  *
     * @param ModifyDataCorrectExecSQLRequest $request ModifyDataCorrectExecSQLRequest
     *
     * @return ModifyDataCorrectExecSQLResponse ModifyDataCorrectExecSQLResponse
     */
    public function modifyDataCorrectExecSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataCorrectExecSQLWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the masking rule bound to a specified field.
     *  *
     * @param ModifyDesensitizationStrategyRequest $request ModifyDesensitizationStrategyRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesensitizationStrategyResponse ModifyDesensitizationStrategyResponse
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
     * @summary Modifies the masking rule bound to a specified field.
     *  *
     * @param ModifyDesensitizationStrategyRequest $request ModifyDesensitizationStrategyRequest
     *
     * @return ModifyDesensitizationStrategyResponse ModifyDesensitizationStrategyResponse
     */
    public function modifyDesensitizationStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesensitizationStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例信息，同时检查该实例连通性
     *  *
     * @param ModifyInstanceRequest $request ModifyInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
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
     * @summary 修改实例信息，同时检查该实例连通性
     *  *
     * @param ModifyInstanceRequest $request ModifyInstanceRequest
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Migrates a task flow to a specified business scenario.
     *  *
     * @param MoveTaskFlowToScenarioRequest $request MoveTaskFlowToScenarioRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveTaskFlowToScenarioResponse MoveTaskFlowToScenarioResponse
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
     * @summary Migrates a task flow to a specified business scenario.
     *  *
     * @param MoveTaskFlowToScenarioRequest $request MoveTaskFlowToScenarioRequest
     *
     * @return MoveTaskFlowToScenarioResponse MoveTaskFlowToScenarioResponse
     */
    public function moveTaskFlowToScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveTaskFlowToScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary Unpublishes a published task flow.
     *  *
     * @param OfflineTaskFlowRequest $request OfflineTaskFlowRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OfflineTaskFlowResponse OfflineTaskFlowResponse
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
     * @summary Unpublishes a published task flow.
     *  *
     * @param OfflineTaskFlowRequest $request OfflineTaskFlowRequest
     *
     * @return OfflineTaskFlowResponse OfflineTaskFlowResponse
     */
    public function offlineTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses a SQL task for data change.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Pauses a SQL task for data change.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary 创建工单审批流
     *  *
     * @param PreviewWorkflowRequest $request PreviewWorkflowRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PreviewWorkflowResponse PreviewWorkflowResponse
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
     * @summary 创建工单审批流
     *  *
     * @param PreviewWorkflowRequest $request PreviewWorkflowRequest
     *
     * @return PreviewWorkflowResponse PreviewWorkflowResponse
     */
    public function previewWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes and deploys a task flow.
     *  *
     * @param PublishAndDeployTaskFlowRequest $request PublishAndDeployTaskFlowRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishAndDeployTaskFlowResponse PublishAndDeployTaskFlowResponse
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
     * @summary Publishes and deploys a task flow.
     *  *
     * @param PublishAndDeployTaskFlowRequest $request PublishAndDeployTaskFlowRequest
     *
     * @return PublishAndDeployTaskFlowResponse PublishAndDeployTaskFlowResponse
     */
    public function publishAndDeployTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishAndDeployTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download and parsing progress of data tracking logs.
     *  *
     * @param QueryDataTrackResultDownloadStatusRequest $request QueryDataTrackResultDownloadStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDataTrackResultDownloadStatusResponse QueryDataTrackResultDownloadStatusResponse
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
     * @summary Queries the download and parsing progress of data tracking logs.
     *  *
     * @param QueryDataTrackResultDownloadStatusRequest $request QueryDataTrackResultDownloadStatusRequest
     *
     * @return QueryDataTrackResultDownloadStatusResponse QueryDataTrackResultDownloadStatusResponse
     */
    public function queryDataTrackResultDownloadStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataTrackResultDownloadStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 部署任务流的历史版本
     *  *
     * @param ReDeployLhDagVersionRequest $request ReDeployLhDagVersionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ReDeployLhDagVersionResponse ReDeployLhDagVersionResponse
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
     * @summary 部署任务流的历史版本
     *  *
     * @param ReDeployLhDagVersionRequest $request ReDeployLhDagVersionRequest
     *
     * @return ReDeployLhDagVersionResponse ReDeployLhDagVersionResponse
     */
    public function reDeployLhDagVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reDeployLhDagVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Reruns a task flow instance.
     *  *
     * @param ReRunTaskFlowInstanceRequest $request ReRunTaskFlowInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ReRunTaskFlowInstanceResponse ReRunTaskFlowInstanceResponse
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
     * @summary Reruns a task flow instance.
     *  *
     * @param ReRunTaskFlowInstanceRequest $request ReRunTaskFlowInstanceRequest
     *
     * @return ReRunTaskFlowInstanceResponse ReRunTaskFlowInstanceResponse
     */
    public function reRunTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reRunTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Unsubscribes from a pay-as-you-go Data Management (DMS) resource.
     *  *
     * @param RefundPayAsYouGoOrderRequest $request RefundPayAsYouGoOrderRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundPayAsYouGoOrderResponse RefundPayAsYouGoOrderResponse
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
     * @summary Unsubscribes from a pay-as-you-go Data Management (DMS) resource.
     *  *
     * @param RefundPayAsYouGoOrderRequest $request RefundPayAsYouGoOrderRequest
     *
     * @return RefundPayAsYouGoOrderResponse RefundPayAsYouGoOrderResponse
     */
    public function refundPayAsYouGoOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundPayAsYouGoOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Registers a database instance in Data Management (DMS).
     *  *
     * @description Prerequisites: You are a DMS administrator or a database administrator (DBA). You can call the [ListUsers](https://help.aliyun.com/document_detail/141938.html) or [GetUser](https://help.aliyun.com/document_detail/147098.html) operation to query your user role from the RoleIdList parameter that is returned.
     *  *
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
     * @summary Registers a database instance in Data Management (DMS).
     *  *
     * @description Prerequisites: You are a DMS administrator or a database administrator (DBA). You can call the [ListUsers](https://help.aliyun.com/document_detail/141938.html) or [GetUser](https://help.aliyun.com/document_detail/147098.html) operation to query your user role from the RoleIdList parameter that is returned.
     *  *
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
     * @summary Registers a user for your enterprise.
     *  *
     * @description If you are an **administrator** in Data Management (DMS), you can call this operation to register a user for your enterprise. To view users that are assigned the administrator role, perform the following steps: Log on to the DMS console. In the top navigation bar, click O&M. In the left-side navigation pane, click User.
     *  *
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
     * @summary Registers a user for your enterprise.
     *  *
     * @description If you are an **administrator** in Data Management (DMS), you can call this operation to register a user for your enterprise. To view users that are assigned the administrator role, perform the following steps: Log on to the DMS console. In the top navigation bar, click O&M. In the left-side navigation pane, click User.
     *  *
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
     * @summary Reruns a failed SQL task for data change.
     *  *
     * @param RestartDataCorrectSQLJobRequest $request RestartDataCorrectSQLJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDataCorrectSQLJobResponse RestartDataCorrectSQLJobResponse
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
     * @summary Reruns a failed SQL task for data change.
     *  *
     * @param RestartDataCorrectSQLJobRequest $request RestartDataCorrectSQLJobRequest
     *
     * @return RestartDataCorrectSQLJobResponse RestartDataCorrectSQLJobResponse
     */
    public function restartDataCorrectSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDataCorrectSQLJobWithOptions($request, $runtime);
    }

    /**
     * @summary Resumes a suspended task flow.
     *  *
     * @description You can call this operation only for task flows that are suspended.
     *  *
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
     * @summary Resumes a suspended task flow.
     *  *
     * @description You can call this operation only for task flows that are suspended.
     *  *
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
     * @summary Reruns the precheck for a data change ticket.
     *  *
     * @param RetryDataCorrectPreCheckRequest $request RetryDataCorrectPreCheckRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryDataCorrectPreCheckResponse RetryDataCorrectPreCheckResponse
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
     * @summary Reruns the precheck for a data change ticket.
     *  *
     * @param RetryDataCorrectPreCheckRequest $request RetryDataCorrectPreCheckRequest
     *
     * @return RetryDataCorrectPreCheckResponse RetryDataCorrectPreCheckResponse
     */
    public function retryDataCorrectPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDataCorrectPreCheckWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on resources from Data Management (DMS) users by using a permission template.
     *  *
     * @description You must be a database administrator (DBA) or a DMS administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Revokes permissions on resources from Data Management (DMS) users by using a permission template.
     *  *
     * @description You must be a database administrator (DBA) or a DMS administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Revokes a permission on a resource from a user.
     *  *
     * @param RevokeUserPermissionRequest $request RevokeUserPermissionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeUserPermissionResponse RevokeUserPermissionResponse
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
     * @summary Revokes a permission on a resource from a user.
     *  *
     * @param RevokeUserPermissionRequest $request RevokeUserPermissionRequest
     *
     * @return RevokeUserPermissionResponse RevokeUserPermissionResponse
     */
    public function revokeUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Searches for the parsing result of a data tracking task.
     *  *
     * @param SearchDataTrackResultRequest $tmpReq  SearchDataTrackResultRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDataTrackResultResponse SearchDataTrackResultResponse
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
     * @summary Searches for the parsing result of a data tracking task.
     *  *
     * @param SearchDataTrackResultRequest $request SearchDataTrackResultRequest
     *
     * @return SearchDataTrackResultResponse SearchDataTrackResultResponse
     */
    public function searchDataTrackResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDataTrackResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the databases.
     *  *
     * @param SearchDatabaseRequest $request SearchDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDatabaseResponse SearchDatabaseResponse
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
     * @summary Queries the details of the databases.
     *  *
     * @param SearchDatabaseRequest $request SearchDatabaseRequest
     *
     * @return SearchDatabaseResponse SearchDatabaseResponse
     */
    public function searchDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about tables.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Queries detailed information about tables.
     *  *
     * @description You can call this operation only for database instances that are managed in Security Collaboration mode.
     *  *
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
     * @summary Configures the owner of an instance, a database, or a table.
     *  *
     * @param SetOwnersRequest $request SetOwnersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetOwnersResponse SetOwnersResponse
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
     * @summary Configures the owner of an instance, a database, or a table.
     *  *
     * @param SetOwnersRequest $request SetOwnersRequest
     *
     * @return SetOwnersResponse SetOwnersResponse
     */
    public function setOwners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOwnersWithOptions($request, $runtime);
    }

    /**
     * @summary Skips the verification on the number of rows in the precheck for data change.
     *  *
     * @param SkipDataCorrectRowCheckRequest $request SkipDataCorrectRowCheckRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SkipDataCorrectRowCheckResponse SkipDataCorrectRowCheckResponse
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
     * @summary Skips the verification on the number of rows in the precheck for data change.
     *  *
     * @param SkipDataCorrectRowCheckRequest $request SkipDataCorrectRowCheckRequest
     *
     * @return SkipDataCorrectRowCheckResponse SkipDataCorrectRowCheckResponse
     */
    public function skipDataCorrectRowCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipDataCorrectRowCheckWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a task flow instance.
     *  *
     * @param StopTaskFlowInstanceRequest $request StopTaskFlowInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTaskFlowInstanceResponse StopTaskFlowInstanceResponse
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
     * @summary Stops a task flow instance.
     *  *
     * @param StopTaskFlowInstanceRequest $request StopTaskFlowInstanceRequest
     *
     * @return StopTaskFlowInstanceResponse StopTaskFlowInstanceResponse
     */
    public function stopTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a ticket for approval.
     *  *
     * @param SubmitOrderApprovalRequest $request SubmitOrderApprovalRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitOrderApprovalResponse SubmitOrderApprovalResponse
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
     * @summary Submits a ticket for approval.
     *  *
     * @param SubmitOrderApprovalRequest $request SubmitOrderApprovalRequest
     *
     * @return SubmitOrderApprovalResponse SubmitOrderApprovalResponse
     */
    public function submitOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a schema synchronization ticket for approval.
     *  *
     * @param SubmitStructSyncOrderApprovalRequest $request SubmitStructSyncOrderApprovalRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitStructSyncOrderApprovalResponse SubmitStructSyncOrderApprovalResponse
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
     * @summary Submits a schema synchronization ticket for approval.
     *  *
     * @param SubmitStructSyncOrderApprovalRequest $request SubmitStructSyncOrderApprovalRequest
     *
     * @return SubmitStructSyncOrderApprovalResponse SubmitStructSyncOrderApprovalResponse
     */
    public function submitStructSyncOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStructSyncOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @summary Suspends a task flow instance.
     *  *
     * @param SuspendTaskFlowInstanceRequest $request SuspendTaskFlowInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendTaskFlowInstanceResponse SuspendTaskFlowInstanceResponse
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
     * @summary Suspends a task flow instance.
     *  *
     * @param SuspendTaskFlowInstanceRequest $request SuspendTaskFlowInstanceRequest
     *
     * @return SuspendTaskFlowInstanceResponse SuspendTaskFlowInstanceResponse
     */
    public function suspendTaskFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTaskFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes the metadata of a database.
     *  *
     * @param SyncDatabaseMetaRequest $request SyncDatabaseMetaRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncDatabaseMetaResponse SyncDatabaseMetaResponse
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
     * @summary Synchronizes the metadata of a database.
     *  *
     * @param SyncDatabaseMetaRequest $request SyncDatabaseMetaRequest
     *
     * @return SyncDatabaseMetaResponse SyncDatabaseMetaResponse
     */
    public function syncDatabaseMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDatabaseMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes the metadata of all databases in a database instance.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Synchronizes the metadata of all databases in a database instance.
     *  *
     * @description You can call this operation only for database instances whose control mode is Security Collaboration.
     *  *
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
     * @summary Modifies a permission template.
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Modifies a permission template.
     *  *
     * @description You are a database administrator (DBA) or a Data Management (DMS) administrator. For more information about how to view system roles, see [View system roles](https://help.aliyun.com/document_detail/324212.html).
     *  *
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
     * @summary Updates the information about a database instance and checks the connectivity of the database instance.
     *  *
     * @description Before you call the UpdateInstance operation, call the [GetInstance](https://help.aliyun.com/document_detail/141567.html) or [ListInstances](https://help.aliyun.com/document_detail/141936.html) operation to obtain the complete information about the instance.
     *  *
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
     * @summary Updates the information about a database instance and checks the connectivity of the database instance.
     *  *
     * @description Before you call the UpdateInstance operation, call the [GetInstance](https://help.aliyun.com/document_detail/141567.html) or [ListInstances](https://help.aliyun.com/document_detail/141936.html) operation to obtain the complete information about the instance.
     *  *
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
     * @summary Updates the service level agreement (SLA) timeout reminder for a task flow.
     *  *
     * @description SLA rules take effect after task flows are deployed and published.
     *  *
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
     * @summary Updates the service level agreement (SLA) timeout reminder for a task flow.
     *  *
     * @description SLA rules take effect after task flows are deployed and published.
     *  *
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
     * @summary Updates the name and description of the business scenario for a specified task flow.
     *  *
     * @param UpdateScenarioRequest $request UpdateScenarioRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScenarioResponse UpdateScenarioResponse
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
     * @summary Updates the name and description of the business scenario for a specified task flow.
     *  *
     * @param UpdateScenarioRequest $request UpdateScenarioRequest
     *
     * @return UpdateScenarioResponse UpdateScenarioResponse
     */
    public function updateScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name and description of a specific security rule set.
     *  *
     * @param UpdateStandardGroupRequest $request UpdateStandardGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStandardGroupResponse UpdateStandardGroupResponse
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
     * @summary Modifies the name and description of a specific security rule set.
     *  *
     * @param UpdateStandardGroupRequest $request UpdateStandardGroupRequest
     *
     * @return UpdateStandardGroupResponse UpdateStandardGroupResponse
     */
    public function updateStandardGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStandardGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the advanced configuration of a task node.
     *  *
     * @description You can call this operation to configure a failed task or rerun a task.
     *  *
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
     * @summary Updates the advanced configuration of a task node.
     *  *
     * @description You can call this operation to configure a failed task or rerun a task.
     *  *
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
     * @summary Updates tasks in a task flow.
     *  *
     * @description You can call this operation to modify node configurations.
     *  *
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
     * @summary Updates tasks in a task flow.
     *  *
     * @description You can call this operation to modify node configurations.
     *  *
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
     * @summary Updates the constants for a specified task flow.
     *  *
     * @param UpdateTaskFlowConstantsRequest $tmpReq  UpdateTaskFlowConstantsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowConstantsResponse UpdateTaskFlowConstantsResponse
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
     * @summary Updates the constants for a specified task flow.
     *  *
     * @param UpdateTaskFlowConstantsRequest $request UpdateTaskFlowConstantsRequest
     *
     * @return UpdateTaskFlowConstantsResponse UpdateTaskFlowConstantsResponse
     */
    public function updateTaskFlowConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowConstantsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the IDs of the users who are involved in the task flow.
     *  *
     * @param UpdateTaskFlowCooperatorsRequest $tmpReq  UpdateTaskFlowCooperatorsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowCooperatorsResponse UpdateTaskFlowCooperatorsResponse
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
     * @summary Updates the IDs of the users who are involved in the task flow.
     *  *
     * @param UpdateTaskFlowCooperatorsRequest $request UpdateTaskFlowCooperatorsRequest
     *
     * @return UpdateTaskFlowCooperatorsResponse UpdateTaskFlowCooperatorsResponse
     */
    public function updateTaskFlowCooperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowCooperatorsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the start node and end node of multiple edges at a time for a task flow.
     *  *
     * @description ###
     * The edges can be updated only when the following conditions are met:
     * 1.  The specified edge exists in the directed acyclic graph (DAG) of the task flow specified by DagId.
     * 2.  The specified edge nodes exist in the DAG of the task flow specified by DagId.
     * 3.  After the update, rings do not exist in the DAG.
     *  *
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
     * @summary Updates the start node and end node of multiple edges at a time for a task flow.
     *  *
     * @description ###
     * The edges can be updated only when the following conditions are met:
     * 1.  The specified edge exists in the directed acyclic graph (DAG) of the task flow specified by DagId.
     * 2.  The specified edge nodes exist in the DAG of the task flow specified by DagId.
     * 3.  After the update, rings do not exist in the DAG.
     *  *
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
     * @summary Updates the name and description of a task flow.
     *  *
     * @param UpdateTaskFlowNameAndDescRequest $request UpdateTaskFlowNameAndDescRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowNameAndDescResponse UpdateTaskFlowNameAndDescResponse
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
     * @summary Updates the name and description of a task flow.
     *  *
     * @param UpdateTaskFlowNameAndDescRequest $request UpdateTaskFlowNameAndDescRequest
     *
     * @return UpdateTaskFlowNameAndDescResponse UpdateTaskFlowNameAndDescResponse
     */
    public function updateTaskFlowNameAndDesc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowNameAndDescWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the notification settings for task flows.
     *  *
     * @param UpdateTaskFlowNotificationRequest $request UpdateTaskFlowNotificationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowNotificationResponse UpdateTaskFlowNotificationResponse
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
     * @summary Updates the notification settings for task flows.
     *  *
     * @param UpdateTaskFlowNotificationRequest $request UpdateTaskFlowNotificationRequest
     *
     * @return UpdateTaskFlowNotificationResponse UpdateTaskFlowNotificationResponse
     */
    public function updateTaskFlowNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowNotificationWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the owner of a task flow.
     *  *
     * @description Note: The new owner of the task flow must belong to the same tenant as the previous owner.
     *  *
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
     * @summary Changes the owner of a task flow.
     *  *
     * @description Note: The new owner of the task flow must belong to the same tenant as the previous owner.
     *  *
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
     * @summary Fully updates the edges of a task flow.
     *  *
     * @description You can call this operation to perform a full update. For incremental updates, see AddTaskFlowEdges, UpdateTaskFlowEdges, and DeleteTaskFlowEdgesByMultiCondition.
     *  *
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
     * @summary Fully updates the edges of a task flow.
     *  *
     * @description You can call this operation to perform a full update. For incremental updates, see AddTaskFlowEdges, UpdateTaskFlowEdges, and DeleteTaskFlowEdgesByMultiCondition.
     *  *
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
     * @summary Updates the scheduling properties for a task flow.
     *  *
     * @description You can call this operation to update the scheduling properties for a task flow in the editing state. You can configure a **timed scheduling** task flow or an **event scheduling** task flow. When you configure a **timed scheduling** task flow, you can choose from one-time scheduling or periodic scheduling. When you configure an **event scheduling** task flow, you can subscribe to task flows or task flow nodes.****\\
     * After you update the scheduling properties, you need to publish and deploy the task flow again. The new task flow instance will run based on the updated scheduling properties.
     *  *
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
     * @summary Updates the scheduling properties for a task flow.
     *  *
     * @description You can call this operation to update the scheduling properties for a task flow in the editing state. You can configure a **timed scheduling** task flow or an **event scheduling** task flow. When you configure a **timed scheduling** task flow, you can choose from one-time scheduling or periodic scheduling. When you configure an **event scheduling** task flow, you can subscribe to task flows or task flow nodes.****\\
     * After you update the scheduling properties, you need to publish and deploy the task flow again. The new task flow instance will run based on the updated scheduling properties.
     *  *
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
     * @summary Updates the time variables for a task flow.
     *  *
     * @param UpdateTaskFlowTimeVariablesRequest $request UpdateTaskFlowTimeVariablesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskFlowTimeVariablesResponse UpdateTaskFlowTimeVariablesResponse
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
     * @summary Updates the time variables for a task flow.
     *  *
     * @param UpdateTaskFlowTimeVariablesRequest $request UpdateTaskFlowTimeVariablesRequest
     *
     * @return UpdateTaskFlowTimeVariablesResponse UpdateTaskFlowTimeVariablesResponse
     */
    public function updateTaskFlowTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskFlowTimeVariablesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the name of a specified task.
     *  *
     * @param UpdateTaskNameRequest $request UpdateTaskNameRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskNameResponse UpdateTaskNameResponse
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
     * @summary Updates the name of a specified task.
     *  *
     * @param UpdateTaskNameRequest $request UpdateTaskNameRequest
     *
     * @return UpdateTaskNameResponse UpdateTaskNameResponse
     */
    public function updateTaskName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskNameWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the output variables for a specified task node.
     *  *
     * @description Only nodes of single-instance SQL assignment, script code, and ECS remote command have output variables.
     *  *
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
     * @summary Updates the output variables for a specified task node.
     *  *
     * @description Only nodes of single-instance SQL assignment, script code, and ECS remote command have output variables.
     *  *
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
     * @summary Updates time variables for a task.
     *  *
     * @param UpdateTaskTimeVariablesRequest $request UpdateTaskTimeVariablesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskTimeVariablesResponse UpdateTaskTimeVariablesResponse
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
     * @summary Updates time variables for a task.
     *  *
     * @param UpdateTaskTimeVariablesRequest $request UpdateTaskTimeVariablesRequest
     *
     * @return UpdateTaskTimeVariablesResponse UpdateTaskTimeVariablesResponse
     */
    public function updateTaskTimeVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskTimeVariablesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates user information.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
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
     * @summary Updates user information.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}

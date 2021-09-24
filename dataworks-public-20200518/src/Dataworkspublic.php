<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddProjectMemberToRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddProjectMemberToRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ApprovePermissionApplyOrderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ApprovePermissionApplyOrderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckEngineMetaPartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckEngineMetaPartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckEngineMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckEngineMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckFileDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckFileDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagComplementRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagComplementResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagTestRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagTestResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiAuthorityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiAuthorityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationAdvanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateViewRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateViewResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteViewRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteViewResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DesensitizeDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DesensitizeDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportConnectionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportConnectionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDISyncTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDISyncTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForCreatingRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForCreatingResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForUpdatingRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForUpdatingResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetConnectionMetaRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetConnectionMetaResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationProcessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationProcessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeChildrenRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeChildrenResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpRiskDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpRiskDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportConnectionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportConnectionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDISyncTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDISyncTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIProjectConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIProjectConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDISyncTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDISyncTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListManualDagInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListManualDagInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIORequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIOResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectIdsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectIdsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryPublicModelEngineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryPublicModelEngineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeColumnPermissionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeColumnPermissionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeTablePermissionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeTablePermissionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunCycleDagNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunCycleDagNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunManualDagNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunManualDagNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunSmokeTestRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunSmokeTestResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ScanSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ScanSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetConnectionShareRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetConnectionShareResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetDataSourceShareRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetDataSourceShareResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartMigrationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartMigrationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TerminateDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TerminateDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIProjectConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIProjectConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableIntroWikiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableIntroWikiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeOwnerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeOwnerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeRunModeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeRunModeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableModelInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableModelInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dataworkspublic extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'dataworks.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'dataworks.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'dataworks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dataworks.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dataworks.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dataworks.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'dataworks.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'dataworks.cn-chengdu.aliyuncs.com',
            'cn-hangzhou'           => 'dataworks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dataworks.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'dataworks.aliyuncs.com',
            'cn-qingdao'            => 'dataworks.aliyuncs.com',
            'cn-shanghai'           => 'dataworks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'dataworks.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou'        => 'dataworks.aliyuncs.com',
            'eu-central-1'          => 'dataworks.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'dataworks.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dataworks.me-east-1.aliyuncs.com',
            'us-east-1'             => 'dataworks.us-east-1.aliyuncs.com',
            'us-west-1'             => 'dataworks.us-west-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dataworks.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dataworks.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dataworks.aliyuncs.com',
            'cn-north-2-gov-1'      => 'dataworks.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataworks-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GenerateDISyncTaskConfigForCreatingRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateDISyncTaskConfigForCreatingResponse
     */
    public function generateDISyncTaskConfigForCreating($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateDISyncTaskConfigForCreatingResponse::fromMap($this->doRequest('GenerateDISyncTaskConfigForCreating', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateDISyncTaskConfigForCreatingRequest $request
     *
     * @return GenerateDISyncTaskConfigForCreatingResponse
     */
    public function generateDISyncTaskConfigForCreatingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDISyncTaskConfigForCreating($request, $runtime);
    }

    /**
     * @param GenerateDISyncTaskConfigForUpdatingRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateDISyncTaskConfigForUpdatingResponse
     */
    public function generateDISyncTaskConfigForUpdating($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateDISyncTaskConfigForUpdatingResponse::fromMap($this->doRequest('GenerateDISyncTaskConfigForUpdating', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateDISyncTaskConfigForUpdatingRequest $request
     *
     * @return GenerateDISyncTaskConfigForUpdatingResponse
     */
    public function generateDISyncTaskConfigForUpdatingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDISyncTaskConfigForUpdating($request, $runtime);
    }

    /**
     * @param QueryDISyncTaskConfigProcessResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryDISyncTaskConfigProcessResultResponse
     */
    public function queryDISyncTaskConfigProcessResult($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDISyncTaskConfigProcessResultResponse::fromMap($this->doRequest('QueryDISyncTaskConfigProcessResult', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDISyncTaskConfigProcessResultRequest $request
     *
     * @return QueryDISyncTaskConfigProcessResultResponse
     */
    public function queryDISyncTaskConfigProcessResultSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDISyncTaskConfigProcessResult($request, $runtime);
    }

    /**
     * @param ListProjectIdsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListProjectIdsResponse
     */
    public function listProjectIds($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectIdsResponse::fromMap($this->doRequest('ListProjectIds', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectIdsRequest $request
     *
     * @return ListProjectIdsResponse
     */
    public function listProjectIdsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectIds($request, $runtime);
    }

    /**
     * @param TerminateDISyncInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TerminateDISyncInstanceResponse
     */
    public function terminateDISyncInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return TerminateDISyncInstanceResponse::fromMap($this->doRequest('TerminateDISyncInstance', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TerminateDISyncInstanceRequest $request
     *
     * @return TerminateDISyncInstanceResponse
     */
    public function terminateDISyncInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateDISyncInstance($request, $runtime);
    }

    /**
     * @param DeleteDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDISyncTaskResponse
     */
    public function deleteDISyncTask($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDISyncTaskResponse::fromMap($this->doRequest('DeleteDISyncTask', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDISyncTaskRequest $request
     *
     * @return DeleteDISyncTaskResponse
     */
    public function deleteDISyncTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDISyncTask($request, $runtime);
    }

    /**
     * @param DeployDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeployDISyncTaskResponse
     */
    public function deployDISyncTask($request, $runtime)
    {
        Utils::validateModel($request);

        return DeployDISyncTaskResponse::fromMap($this->doRequest('DeployDISyncTask', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeployDISyncTaskRequest $request
     *
     * @return DeployDISyncTaskResponse
     */
    public function deployDISyncTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployDISyncTask($request, $runtime);
    }

    /**
     * @param StartDISyncInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartDISyncInstanceResponse
     */
    public function startDISyncInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return StartDISyncInstanceResponse::fromMap($this->doRequest('StartDISyncInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartDISyncInstanceRequest $request
     *
     * @return StartDISyncInstanceResponse
     */
    public function startDISyncInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDISyncInstance($request, $runtime);
    }

    /**
     * @param GetDISyncInstanceInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDISyncInstanceInfoResponse
     */
    public function getDISyncInstanceInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDISyncInstanceInfoResponse::fromMap($this->doRequest('GetDISyncInstanceInfo', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDISyncInstanceInfoRequest $request
     *
     * @return GetDISyncInstanceInfoResponse
     */
    public function getDISyncInstanceInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDISyncInstanceInfo($request, $runtime);
    }

    /**
     * @param StopDISyncInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopDISyncInstanceResponse
     */
    public function stopDISyncInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return StopDISyncInstanceResponse::fromMap($this->doRequest('StopDISyncInstance', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopDISyncInstanceRequest $request
     *
     * @return StopDISyncInstanceResponse
     */
    public function stopDISyncInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDISyncInstance($request, $runtime);
    }

    /**
     * @param GetDISyncTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDISyncTaskResponse
     */
    public function getDISyncTask($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDISyncTaskResponse::fromMap($this->doRequest('GetDISyncTask', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDISyncTaskRequest $request
     *
     * @return GetDISyncTaskResponse
     */
    public function getDISyncTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDISyncTask($request, $runtime);
    }

    /**
     * @param CheckMetaTableTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckMetaTableTaskResponse
     */
    public function checkMetaTableTask($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaTableTaskResponse::fromMap($this->doRequest('CheckMetaTableTask', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckMetaTableTaskRequest $request
     *
     * @return CheckMetaTableTaskResponse
     */
    public function checkMetaTableTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaTableTask($request, $runtime);
    }

    /**
     * @param CheckEngineMetaPartitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckEngineMetaPartitionResponse
     */
    public function checkEngineMetaPartition($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckEngineMetaPartitionResponse::fromMap($this->doRequest('CheckEngineMetaPartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckEngineMetaPartitionRequest $request
     *
     * @return CheckEngineMetaPartitionResponse
     */
    public function checkEngineMetaPartitionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkEngineMetaPartition($request, $runtime);
    }

    /**
     * @param CheckEngineMetaTableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckEngineMetaTableResponse
     */
    public function checkEngineMetaTable($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckEngineMetaTableResponse::fromMap($this->doRequest('CheckEngineMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckEngineMetaTableRequest $request
     *
     * @return CheckEngineMetaTableResponse
     */
    public function checkEngineMetaTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkEngineMetaTable($request, $runtime);
    }

    /**
     * @param ImportDataSourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportDataSourcesResponse
     */
    public function importDataSources($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportDataSourcesResponse::fromMap($this->doRequest('ImportDataSources', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportDataSourcesRequest $request
     *
     * @return ImportDataSourcesResponse
     */
    public function importDataSourcesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDataSources($request, $runtime);
    }

    /**
     * @param ExportDataSourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportDataSourcesResponse
     */
    public function exportDataSources($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportDataSourcesResponse::fromMap($this->doRequest('ExportDataSources', 'HTTPS', 'GET', '2020-05-18', 'AK,APP,PrivateKey', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ExportDataSourcesRequest $request
     *
     * @return ExportDataSourcesResponse
     */
    public function exportDataSourcesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDataSources($request, $runtime);
    }

    /**
     * @param GetDataSourceMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataSourceMetaResponse
     */
    public function getDataSourceMeta($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataSourceMetaResponse::fromMap($this->doRequest('GetDataSourceMeta', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataSourceMetaRequest $request
     *
     * @return GetDataSourceMetaResponse
     */
    public function getDataSourceMetaSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceMeta($request, $runtime);
    }

    /**
     * @param SetDataSourceShareRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDataSourceShareResponse
     */
    public function setDataSourceShare($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDataSourceShareResponse::fromMap($this->doRequest('SetDataSourceShare', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDataSourceShareRequest $request
     *
     * @return SetDataSourceShareResponse
     */
    public function setDataSourceShareSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataSourceShare($request, $runtime);
    }

    /**
     * @param ListDIProjectConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDIProjectConfigResponse
     */
    public function listDIProjectConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDIProjectConfigResponse::fromMap($this->doRequest('ListDIProjectConfig', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDIProjectConfigRequest $request
     *
     * @return ListDIProjectConfigResponse
     */
    public function listDIProjectConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIProjectConfig($request, $runtime);
    }

    /**
     * @param ExportConnectionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportConnectionsResponse
     */
    public function exportConnections($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportConnectionsResponse::fromMap($this->doRequest('ExportConnections', 'HTTPS', 'GET', '2020-05-18', 'AK,APP,PrivateKey', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ExportConnectionsRequest $request
     *
     * @return ExportConnectionsResponse
     */
    public function exportConnectionsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportConnections($request, $runtime);
    }

    /**
     * @param ListRefDISyncTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRefDISyncTasksResponse
     */
    public function listRefDISyncTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRefDISyncTasksResponse::fromMap($this->doRequest('ListRefDISyncTasks', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRefDISyncTasksRequest $request
     *
     * @return ListRefDISyncTasksResponse
     */
    public function listRefDISyncTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRefDISyncTasks($request, $runtime);
    }

    /**
     * @param SetConnectionShareRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetConnectionShareResponse
     */
    public function setConnectionShare($request, $runtime)
    {
        Utils::validateModel($request);

        return SetConnectionShareResponse::fromMap($this->doRequest('SetConnectionShare', 'HTTPS', 'POST', '2020-05-18', 'AK,PrivateKey,APP', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetConnectionShareRequest $request
     *
     * @return SetConnectionShareResponse
     */
    public function setConnectionShareSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setConnectionShare($request, $runtime);
    }

    /**
     * @param ImportConnectionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportConnectionsResponse
     */
    public function importConnections($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportConnectionsResponse::fromMap($this->doRequest('ImportConnections', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportConnectionsRequest $request
     *
     * @return ImportConnectionsResponse
     */
    public function importConnectionsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importConnections($request, $runtime);
    }

    /**
     * @param GetConnectionMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetConnectionMetaResponse
     */
    public function getConnectionMeta($request, $runtime)
    {
        Utils::validateModel($request);

        return GetConnectionMetaResponse::fromMap($this->doRequest('GetConnectionMeta', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetConnectionMetaRequest $request
     *
     * @return GetConnectionMetaResponse
     */
    public function getConnectionMetaSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionMeta($request, $runtime);
    }

    /**
     * @param UpdateDIProjectConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDIProjectConfigResponse
     */
    public function updateDIProjectConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDIProjectConfigResponse::fromMap($this->doRequest('UpdateDIProjectConfig', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDIProjectConfigRequest $request
     *
     * @return UpdateDIProjectConfigResponse
     */
    public function updateDIProjectConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIProjectConfig($request, $runtime);
    }

    /**
     * @param CreateDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDISyncTaskResponse
     */
    public function createDISyncTask($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDISyncTaskResponse::fromMap($this->doRequest('CreateDISyncTask', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDISyncTaskRequest $request
     *
     * @return CreateDISyncTaskResponse
     */
    public function createDISyncTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDISyncTask($request, $runtime);
    }

    /**
     * @param UpdateDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDISyncTaskResponse
     */
    public function updateDISyncTask($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDISyncTaskResponse::fromMap($this->doRequest('UpdateDISyncTask', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDISyncTaskRequest $request
     *
     * @return UpdateDISyncTaskResponse
     */
    public function updateDISyncTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDISyncTask($request, $runtime);
    }

    /**
     * @param TestNetworkConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TestNetworkConnectionResponse
     */
    public function testNetworkConnection($request, $runtime)
    {
        Utils::validateModel($request);

        return TestNetworkConnectionResponse::fromMap($this->doRequest('TestNetworkConnection', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TestNetworkConnectionRequest $request
     *
     * @return TestNetworkConnectionResponse
     */
    public function testNetworkConnectionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testNetworkConnection($request, $runtime);
    }

    /**
     * @param UpdateNodeRunModeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNodeRunModeResponse
     */
    public function updateNodeRunMode($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateNodeRunModeResponse::fromMap($this->doRequest('UpdateNodeRunMode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateNodeRunModeRequest $request
     *
     * @return UpdateNodeRunModeResponse
     */
    public function updateNodeRunModeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeRunMode($request, $runtime);
    }

    /**
     * @param UpdateNodeOwnerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNodeOwnerResponse
     */
    public function updateNodeOwner($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateNodeOwnerResponse::fromMap($this->doRequest('UpdateNodeOwner', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateNodeOwnerRequest $request
     *
     * @return UpdateNodeOwnerResponse
     */
    public function updateNodeOwnerSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeOwner($request, $runtime);
    }

    /**
     * @param QueryPublicModelEngineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPublicModelEngineResponse
     */
    public function queryPublicModelEngine($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryPublicModelEngineResponse::fromMap($this->doRequest('QueryPublicModelEngine', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryPublicModelEngineRequest $request
     *
     * @return QueryPublicModelEngineResponse
     */
    public function queryPublicModelEngineSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPublicModelEngine($request, $runtime);
    }

    /**
     * @param DeleteViewRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteViewResponse
     */
    public function deleteView($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteViewResponse::fromMap($this->doRequest('DeleteView', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteViewRequest $request
     *
     * @return DeleteViewResponse
     */
    public function deleteViewSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteView($request, $runtime);
    }

    /**
     * @param CreateViewRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateViewResponse
     */
    public function createView($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateViewResponse::fromMap($this->doRequest('CreateView', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateViewRequest $request
     *
     * @return CreateViewResponse
     */
    public function createViewSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createView($request, $runtime);
    }

    /**
     * @param CheckFileDeploymentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckFileDeploymentResponse
     */
    public function checkFileDeployment($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckFileDeploymentResponse::fromMap($this->doRequest('CheckFileDeployment', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckFileDeploymentRequest $request
     *
     * @return CheckFileDeploymentResponse
     */
    public function checkFileDeploymentSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFileDeployment($request, $runtime);
    }

    /**
     * @param ImportDISyncTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportDISyncTasksResponse
     */
    public function importDISyncTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportDISyncTasksResponse::fromMap($this->doRequest('ImportDISyncTasks', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportDISyncTasksRequest $request
     *
     * @return ImportDISyncTasksResponse
     */
    public function importDISyncTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDISyncTasks($request, $runtime);
    }

    /**
     * @param ExportDISyncTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportDISyncTasksResponse
     */
    public function exportDISyncTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportDISyncTasksResponse::fromMap($this->doRequest('ExportDISyncTasks', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExportDISyncTasksRequest $request
     *
     * @return ExportDISyncTasksResponse
     */
    public function exportDISyncTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDISyncTasks($request, $runtime);
    }

    /**
     * @param ListDISyncTasksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDISyncTasksResponse
     */
    public function listDISyncTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDISyncTasksResponse::fromMap($this->doRequest('ListDISyncTasks', 'HTTPS', 'POST', '2020-05-18', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDISyncTasksRequest $request
     *
     * @return ListDISyncTasksResponse
     */
    public function listDISyncTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDISyncTasks($request, $runtime);
    }

    /**
     * @param RevokeColumnPermissionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeColumnPermissionResponse
     */
    public function revokeColumnPermission($request, $runtime)
    {
        Utils::validateModel($request);

        return RevokeColumnPermissionResponse::fromMap($this->doRequest('RevokeColumnPermission', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RevokeColumnPermissionRequest $request
     *
     * @return RevokeColumnPermissionResponse
     */
    public function revokeColumnPermissionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeColumnPermission($request, $runtime);
    }

    /**
     * @param RevokeTablePermissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermission($request, $runtime)
    {
        Utils::validateModel($request);

        return RevokeTablePermissionResponse::fromMap($this->doRequest('RevokeTablePermission', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RevokeTablePermissionRequest $request
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermissionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeTablePermission($request, $runtime);
    }

    /**
     * @param GetMetaTableThemeLevelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMetaTableThemeLevelResponse
     */
    public function getMetaTableThemeLevel($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableThemeLevelResponse::fromMap($this->doRequest('GetMetaTableThemeLevel', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableThemeLevelRequest $request
     *
     * @return GetMetaTableThemeLevelResponse
     */
    public function getMetaTableThemeLevelSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableThemeLevel($request, $runtime);
    }

    /**
     * @param GetPermissionApplyOrderDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetPermissionApplyOrderDetailResponse
     */
    public function getPermissionApplyOrderDetail($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPermissionApplyOrderDetailResponse::fromMap($this->doRequest('GetPermissionApplyOrderDetail', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPermissionApplyOrderDetailRequest $request
     *
     * @return GetPermissionApplyOrderDetailResponse
     */
    public function getPermissionApplyOrderDetailSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionApplyOrderDetail($request, $runtime);
    }

    /**
     * @param ListPermissionApplyOrdersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPermissionApplyOrdersResponse
     */
    public function listPermissionApplyOrders($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPermissionApplyOrdersResponse::fromMap($this->doRequest('ListPermissionApplyOrders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListPermissionApplyOrdersRequest $request
     *
     * @return ListPermissionApplyOrdersResponse
     */
    public function listPermissionApplyOrdersSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionApplyOrders($request, $runtime);
    }

    /**
     * @param CreatePermissionApplyOrderRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePermissionApplyOrderResponse
     */
    public function createPermissionApplyOrder($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePermissionApplyOrderResponse::fromMap($this->doRequest('CreatePermissionApplyOrder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreatePermissionApplyOrderRequest $request
     *
     * @return CreatePermissionApplyOrderResponse
     */
    public function createPermissionApplyOrderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPermissionApplyOrder($request, $runtime);
    }

    /**
     * @param ApprovePermissionApplyOrderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ApprovePermissionApplyOrderResponse
     */
    public function approvePermissionApplyOrder($request, $runtime)
    {
        Utils::validateModel($request);

        return ApprovePermissionApplyOrderResponse::fromMap($this->doRequest('ApprovePermissionApplyOrder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ApprovePermissionApplyOrderRequest $request
     *
     * @return ApprovePermissionApplyOrderResponse
     */
    public function approvePermissionApplyOrderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approvePermissionApplyOrder($request, $runtime);
    }

    /**
     * @param ListSuccessInstanceAmountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSuccessInstanceAmountResponse
     */
    public function listSuccessInstanceAmount($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSuccessInstanceAmountResponse::fromMap($this->doRequest('ListSuccessInstanceAmount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSuccessInstanceAmountRequest $request
     *
     * @return ListSuccessInstanceAmountResponse
     */
    public function listSuccessInstanceAmountSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSuccessInstanceAmount($request, $runtime);
    }

    /**
     * @param ListFileTypeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFileTypeResponse
     */
    public function listFileType($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFileTypeResponse::fromMap($this->doRequest('ListFileType', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFileTypeRequest $request
     *
     * @return ListFileTypeResponse
     */
    public function listFileTypeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileType($request, $runtime);
    }

    /**
     * @param ListInstanceAmountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceAmountResponse
     */
    public function listInstanceAmount($request, $runtime)
    {
        Utils::validateModel($request);

        return ListInstanceAmountResponse::fromMap($this->doRequest('ListInstanceAmount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListInstanceAmountRequest $request
     *
     * @return ListInstanceAmountResponse
     */
    public function listInstanceAmountSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceAmount($request, $runtime);
    }

    /**
     * @param ListDataSourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataSourcesResponse::fromMap($this->doRequest('ListDataSources', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSources($request, $runtime);
    }

    /**
     * @param ListNodesByBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListNodesByBaselineResponse
     */
    public function listNodesByBaseline($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodesByBaselineResponse::fromMap($this->doRequest('ListNodesByBaseline', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodesByBaselineRequest $request
     *
     * @return ListNodesByBaselineResponse
     */
    public function listNodesByBaselineSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesByBaseline($request, $runtime);
    }

    /**
     * @param ListManualDagInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListManualDagInstancesResponse
     */
    public function listManualDagInstances($request, $runtime)
    {
        Utils::validateModel($request);

        return ListManualDagInstancesResponse::fromMap($this->doRequest('ListManualDagInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListManualDagInstancesRequest $request
     *
     * @return ListManualDagInstancesResponse
     */
    public function listManualDagInstancesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManualDagInstances($request, $runtime);
    }

    /**
     * @param GetInstanceStatusStatisticRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInstanceStatusStatisticResponse
     */
    public function getInstanceStatusStatistic($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceStatusStatisticResponse::fromMap($this->doRequest('GetInstanceStatusStatistic', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceStatusStatisticRequest $request
     *
     * @return GetInstanceStatusStatisticResponse
     */
    public function getInstanceStatusStatisticSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStatusStatistic($request, $runtime);
    }

    /**
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataSourceResponse::fromMap($this->doRequest('DeleteDataSource', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSource($request, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataSourceResponse::fromMap($this->doRequest('CreateDataSource', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSource($request, $runtime);
    }

    /**
     * @param TopTenErrorTimesInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TopTenErrorTimesInstanceResponse
     */
    public function topTenErrorTimesInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return TopTenErrorTimesInstanceResponse::fromMap($this->doRequest('TopTenErrorTimesInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TopTenErrorTimesInstanceRequest $request
     *
     * @return TopTenErrorTimesInstanceResponse
     */
    public function topTenErrorTimesInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->topTenErrorTimesInstance($request, $runtime);
    }

    /**
     * @param TopTenElapsedTimeInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TopTenElapsedTimeInstanceResponse
     */
    public function topTenElapsedTimeInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return TopTenElapsedTimeInstanceResponse::fromMap($this->doRequest('TopTenElapsedTimeInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TopTenElapsedTimeInstanceRequest $request
     *
     * @return TopTenElapsedTimeInstanceResponse
     */
    public function topTenElapsedTimeInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->topTenElapsedTimeInstance($request, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProject($request, $runtime)
    {
        Utils::validateModel($request);

        return GetProjectResponse::fromMap($this->doRequest('GetProject', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProjectSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProject($request, $runtime);
    }

    /**
     * @param ListNodesByOutputRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListNodesByOutputResponse
     */
    public function listNodesByOutput($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodesByOutputResponse::fromMap($this->doRequest('ListNodesByOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodesByOutputRequest $request
     *
     * @return ListNodesByOutputResponse
     */
    public function listNodesByOutputSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesByOutput($request, $runtime);
    }

    /**
     * @param GetFileTypeStatisticRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetFileTypeStatisticResponse
     */
    public function getFileTypeStatistic($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFileTypeStatisticResponse::fromMap($this->doRequest('GetFileTypeStatistic', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFileTypeStatisticRequest $request
     *
     * @return GetFileTypeStatisticResponse
     */
    public function getFileTypeStatisticSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileTypeStatistic($request, $runtime);
    }

    /**
     * @param RunSmokeTestRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunSmokeTestResponse
     */
    public function runSmokeTest($request, $runtime)
    {
        Utils::validateModel($request);

        return RunSmokeTestResponse::fromMap($this->doRequest('RunSmokeTest', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunSmokeTestRequest $request
     *
     * @return RunSmokeTestResponse
     */
    public function runSmokeTestSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSmokeTest($request, $runtime);
    }

    /**
     * @param ListNodeInputOrOutputRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListNodeInputOrOutputResponse
     */
    public function listNodeInputOrOutput($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodeInputOrOutputResponse::fromMap($this->doRequest('ListNodeInputOrOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodeInputOrOutputRequest $request
     *
     * @return ListNodeInputOrOutputResponse
     */
    public function listNodeInputOrOutputSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInputOrOutput($request, $runtime);
    }

    /**
     * @param RunCycleDagNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunCycleDagNodesResponse
     */
    public function runCycleDagNodes($request, $runtime)
    {
        Utils::validateModel($request);

        return RunCycleDagNodesResponse::fromMap($this->doRequest('RunCycleDagNodes', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunCycleDagNodesRequest $request
     *
     * @return RunCycleDagNodesResponse
     */
    public function runCycleDagNodesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCycleDagNodes($request, $runtime);
    }

    /**
     * @param RunManualDagNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunManualDagNodesResponse
     */
    public function runManualDagNodes($request, $runtime)
    {
        Utils::validateModel($request);

        return RunManualDagNodesResponse::fromMap($this->doRequest('RunManualDagNodes', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunManualDagNodesRequest $request
     *
     * @return RunManualDagNodesResponse
     */
    public function runManualDagNodesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runManualDagNodes($request, $runtime);
    }

    /**
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDataSourceResponse::fromMap($this->doRequest('UpdateDataSource', 'HTTPS', 'PUT', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSource($request, $runtime);
    }

    /**
     * @param UpdateTableAddColumnRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTableAddColumnResponse
     */
    public function updateTableAddColumn($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableAddColumnResponse::fromMap($this->doRequest('UpdateTableAddColumn', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableAddColumnRequest $request
     *
     * @return UpdateTableAddColumnResponse
     */
    public function updateTableAddColumnSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableAddColumn($request, $runtime);
    }

    /**
     * @param GetMigrationProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMigrationProcessResponse
     */
    public function getMigrationProcess($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMigrationProcessResponse::fromMap($this->doRequest('GetMigrationProcess', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMigrationProcessRequest $request
     *
     * @return GetMigrationProcessResponse
     */
    public function getMigrationProcessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMigrationProcess($request, $runtime);
    }

    /**
     * @param CreateImportMigrationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigration($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateImportMigrationResponse::fromMap($this->doRequest('CreateImportMigration', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateImportMigrationRequest $request
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigrationSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImportMigration($request, $runtime);
    }

    /**
     * @param CreateImportMigrationAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigrationAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'dataworks-public',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $createImportMigrationReq = new CreateImportMigrationRequest([]);
        RpcUtils::convert($request, $createImportMigrationReq);
        if (!Utils::isUnset($request->packageFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->packageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->accessKeyId,
                'policy'              => $authResponse->encodedPolicy,
                'signature'           => $authResponse->signature,
                'key'                 => $authResponse->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $createImportMigrationReq->packageFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->createImportMigration($createImportMigrationReq, $runtime);
    }

    /**
     * @param StartMigrationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartMigrationResponse
     */
    public function startMigration($request, $runtime)
    {
        Utils::validateModel($request);

        return StartMigrationResponse::fromMap($this->doRequest('StartMigration', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartMigrationRequest $request
     *
     * @return StartMigrationResponse
     */
    public function startMigrationSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMigration($request, $runtime);
    }

    /**
     * @param GetNodeParentsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNodeParentsResponse
     */
    public function getNodeParents($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeParentsResponse::fromMap($this->doRequest('GetNodeParents', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeParentsRequest $request
     *
     * @return GetNodeParentsResponse
     */
    public function getNodeParentsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeParents($request, $runtime);
    }

    /**
     * @param GetNodeChildrenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetNodeChildrenResponse
     */
    public function getNodeChildren($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeChildrenResponse::fromMap($this->doRequest('GetNodeChildren', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeChildrenRequest $request
     *
     * @return GetNodeChildrenResponse
     */
    public function getNodeChildrenSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeChildren($request, $runtime);
    }

    /**
     * @param GetSensitiveDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSensitiveDataResponse
     */
    public function getSensitiveData($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSensitiveDataResponse::fromMap($this->doRequest('GetSensitiveData', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetSensitiveDataRequest $request
     *
     * @return GetSensitiveDataResponse
     */
    public function getSensitiveDataSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSensitiveData($request, $runtime);
    }

    /**
     * @param DesensitizeDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DesensitizeDataResponse
     */
    public function desensitizeData($request, $runtime)
    {
        Utils::validateModel($request);

        return DesensitizeDataResponse::fromMap($this->doRequest('DesensitizeData', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param DesensitizeDataRequest $request
     *
     * @return DesensitizeDataResponse
     */
    public function desensitizeDataSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->desensitizeData($request, $runtime);
    }

    /**
     * @param GetOpRiskDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOpRiskDataResponse
     */
    public function getOpRiskData($request, $runtime)
    {
        Utils::validateModel($request);

        return GetOpRiskDataResponse::fromMap($this->doRequest('GetOpRiskData', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetOpRiskDataRequest $request
     *
     * @return GetOpRiskDataResponse
     */
    public function getOpRiskDataSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpRiskData($request, $runtime);
    }

    /**
     * @param ScanSensitiveDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ScanSensitiveDataResponse
     */
    public function scanSensitiveData($request, $runtime)
    {
        Utils::validateModel($request);

        return ScanSensitiveDataResponse::fromMap($this->doRequest('ScanSensitiveData', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ScanSensitiveDataRequest $request
     *
     * @return ScanSensitiveDataResponse
     */
    public function scanSensitiveDataSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanSensitiveData($request, $runtime);
    }

    /**
     * @param GetOpSensitiveDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOpSensitiveDataResponse
     */
    public function getOpSensitiveData($request, $runtime)
    {
        Utils::validateModel($request);

        return GetOpSensitiveDataResponse::fromMap($this->doRequest('GetOpSensitiveData', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetOpSensitiveDataRequest $request
     *
     * @return GetOpSensitiveDataResponse
     */
    public function getOpSensitiveDataSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpSensitiveData($request, $runtime);
    }

    /**
     * @param CreateBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBusinessResponse
     */
    public function createBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBusinessResponse::fromMap($this->doRequest('CreateBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBusinessRequest $request
     *
     * @return CreateBusinessResponse
     */
    public function createBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBusiness($request, $runtime);
    }

    /**
     * @param RunTriggerNodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNode($request, $runtime)
    {
        Utils::validateModel($request);

        return RunTriggerNodeResponse::fromMap($this->doRequest('RunTriggerNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunTriggerNodeRequest $request
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNodeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTriggerNode($request, $runtime);
    }

    /**
     * @param GetDagRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDagResponse
     */
    public function getDag($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDagResponse::fromMap($this->doRequest('GetDag', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDagRequest $request
     *
     * @return GetDagResponse
     */
    public function getDagSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDag($request, $runtime);
    }

    /**
     * @param SearchNodesByOutputRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutput($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchNodesByOutputResponse::fromMap($this->doRequest('SearchNodesByOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SearchNodesByOutputRequest $request
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutputSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNodesByOutput($request, $runtime);
    }

    /**
     * @param GetManualDagInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstances($request, $runtime)
    {
        Utils::validateModel($request);

        return GetManualDagInstancesResponse::fromMap($this->doRequest('GetManualDagInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetManualDagInstancesRequest $request
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstancesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManualDagInstances($request, $runtime);
    }

    /**
     * @param CreateManualDagRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateManualDagResponse
     */
    public function createManualDag($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateManualDagResponse::fromMap($this->doRequest('CreateManualDag', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateManualDagRequest $request
     *
     * @return CreateManualDagResponse
     */
    public function createManualDagSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createManualDag($request, $runtime);
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityResultsByEntityResponse::fromMap($this->doRequest('ListQualityResultsByEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByEntity($request, $runtime);
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeTypeListInfoResponse::fromMap($this->doRequest('GetNodeTypeListInfo', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeTypeListInfo($request, $runtime);
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCount($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceStatusCountResponse::fromMap($this->doRequest('GetInstanceStatusCount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCountSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStatusCount($request, $runtime);
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFolders($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceFoldersResponse::fromMap($this->doRequest('ListDataServiceFolders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFoldersSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceFolders($request, $runtime);
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRule($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityResultsByRuleResponse::fromMap($this->doRequest('ListQualityResultsByRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRuleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByRule($request, $runtime);
    }

    /**
     * @param ListMetaDBRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDB($request, $runtime)
    {
        Utils::validateModel($request);

        return ListMetaDBResponse::fromMap($this->doRequest('ListMetaDB', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListMetaDBRequest $request
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDBSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetaDB($request, $runtime);
    }

    /**
     * @param CreateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTable($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableResponse::fromMap($this->doRequest('CreateTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTable($request, $runtime);
    }

    /**
     * @param CreateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableThemeResponse
     */
    public function createTableTheme($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableThemeResponse::fromMap($this->doRequest('CreateTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableThemeRequest $request
     *
     * @return CreateTableThemeResponse
     */
    public function createTableThemeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableTheme($request, $runtime);
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRank($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceErrorRankResponse::fromMap($this->doRequest('GetInstanceErrorRank', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRankSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceErrorRank($request, $runtime);
    }

    /**
     * @param GetDDLJobStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDDLJobStatusResponse::fromMap($this->doRequest('GetDDLJobStatus', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetDDLJobStatusRequest $request
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatusSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDDLJobStatus($request, $runtime);
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRank($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceConsumeTimeRankResponse::fromMap($this->doRequest('GetInstanceConsumeTimeRank', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRankSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceConsumeTimeRank($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthority($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceApiAuthorityResponse::fromMap($this->doRequest('CreateDataServiceApiAuthority', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthoritySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiAuthority($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthority($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataServiceApiAuthorityResponse::fromMap($this->doRequest('DeleteDataServiceApiAuthority', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthoritySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiAuthority($request, $runtime);
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroup($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceGroupResponse::fromMap($this->doRequest('CreateDataServiceGroup', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroupSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceGroup($request, $runtime);
    }

    /**
     * @param UpdateMetaTableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTable($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaTableResponse::fromMap($this->doRequest('UpdateMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaTableRequest $request
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTable($request, $runtime);
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrend($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceCountTrendResponse::fromMap($this->doRequest('GetInstanceCountTrend', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrendSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountTrend($request, $runtime);
    }

    /**
     * @param DeleteTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTableResponse
     */
    public function deleteTable($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableResponse::fromMap($this->doRequest('DeleteTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableRequest $request
     *
     * @return DeleteTableResponse
     */
    public function deleteTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTable($request, $runtime);
    }

    /**
     * @param ListTableThemeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableThemeResponse
     */
    public function listTableTheme($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTableThemeResponse::fromMap($this->doRequest('ListTableTheme', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListTableThemeRequest $request
     *
     * @return ListTableThemeResponse
     */
    public function listTableThemeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableTheme($request, $runtime);
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrend($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSuccessInstanceTrendResponse::fromMap($this->doRequest('GetSuccessInstanceTrend', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrendSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuccessInstanceTrend($request, $runtime);
    }

    /**
     * @param UpdateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTableResponse
     */
    public function updateTable($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableResponse::fromMap($this->doRequest('UpdateTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableRequest $request
     *
     * @return UpdateTableResponse
     */
    public function updateTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTable($request, $runtime);
    }

    /**
     * @param GetDataServiceFolderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceFolderResponse::fromMap($this->doRequest('GetDataServiceFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceFolderRequest $request
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceFolder($request, $runtime);
    }

    /**
     * @param ListTableLevelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevel($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTableLevelResponse::fromMap($this->doRequest('ListTableLevel', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListTableLevelRequest $request
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevelSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableLevel($request, $runtime);
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroups($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceGroupsResponse::fromMap($this->doRequest('ListDataServiceGroups', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroupsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceGroups($request, $runtime);
    }

    /**
     * @param UpdateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableTheme($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableThemeResponse::fromMap($this->doRequest('UpdateTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableThemeRequest $request
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableThemeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableTheme($request, $runtime);
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceFolderResponse::fromMap($this->doRequest('CreateDataServiceFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceFolder($request, $runtime);
    }

    /**
     * @param GetDataServiceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroup($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceGroupResponse::fromMap($this->doRequest('GetDataServiceGroup', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceGroupRequest $request
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroupSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceGroup($request, $runtime);
    }

    /**
     * @param CreateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevel($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableLevelResponse::fromMap($this->doRequest('CreateTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableLevelRequest $request
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevelSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableLevel($request, $runtime);
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWiki($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaTableIntroWikiResponse::fromMap($this->doRequest('UpdateMetaTableIntroWiki', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWikiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTableIntroWiki($request, $runtime);
    }

    /**
     * @param DeleteTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevel($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableLevelResponse::fromMap($this->doRequest('DeleteTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableLevelRequest $request
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevelSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableLevel($request, $runtime);
    }

    /**
     * @param UpdateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevel($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableLevelResponse::fromMap($this->doRequest('UpdateTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableLevelRequest $request
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevelSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableLevel($request, $runtime);
    }

    /**
     * @param DeleteTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableTheme($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableThemeResponse::fromMap($this->doRequest('DeleteTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableThemeRequest $request
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableThemeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableTheme($request, $runtime);
    }

    /**
     * @param ListProgramTypeCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCount($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProgramTypeCountResponse::fromMap($this->doRequest('ListProgramTypeCount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProgramTypeCountRequest $request
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCountSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProgramTypeCount($request, $runtime);
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableModelInfoResponse::fromMap($this->doRequest('UpdateTableModelInfo', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableModelInfo($request, $runtime);
    }

    /**
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectsResponse::fromMap($this->doRequest('ListProjects', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjectsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjects($request, $runtime);
    }

    /**
     * @param ListProjectMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectMembersResponse::fromMap($this->doRequest('ListProjectMembers', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectMembers($request, $runtime);
    }

    /**
     * @param CreateProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMember($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProjectMemberResponse::fromMap($this->doRequest('CreateProjectMember', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProjectMemberRequest $request
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMemberSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectMember($request, $runtime);
    }

    /**
     * @param ListProjectRolesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRoles($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectRolesResponse::fromMap($this->doRequest('ListProjectRoles', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectRolesRequest $request
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRolesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectRoles($request, $runtime);
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRole($request, $runtime)
    {
        Utils::validateModel($request);

        return AddProjectMemberToRoleResponse::fromMap($this->doRequest('AddProjectMemberToRole', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRoleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectMemberToRole($request, $runtime);
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRole($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveProjectMemberFromRoleResponse::fromMap($this->doRequest('RemoveProjectMemberFromRole', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRoleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeProjectMemberFromRole($request, $runtime);
    }

    /**
     * @param DeleteProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMember($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProjectMemberResponse::fromMap($this->doRequest('DeleteProjectMember', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProjectMemberRequest $request
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMemberSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectMember($request, $runtime);
    }

    /**
     * @param CreateDagComplementRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplement($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDagComplementResponse::fromMap($this->doRequest('CreateDagComplement', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDagComplementRequest $request
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplementSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagComplement($request, $runtime);
    }

    /**
     * @param CreateDagTestRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDagTestResponse
     */
    public function createDagTest($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDagTestResponse::fromMap($this->doRequest('CreateDagTest', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDagTestRequest $request
     *
     * @return CreateDagTestResponse
     */
    public function createDagTestSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagTest($request, $runtime);
    }

    /**
     * @param ListCalcEnginesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEngines($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCalcEnginesResponse::fromMap($this->doRequest('ListCalcEngines', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListCalcEnginesRequest $request
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEnginesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalcEngines($request, $runtime);
    }

    /**
     * @param ListConnectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConnectionsResponse
     */
    public function listConnections($request, $runtime)
    {
        Utils::validateModel($request);

        return ListConnectionsResponse::fromMap($this->doRequest('ListConnections', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListConnectionsRequest $request
     *
     * @return ListConnectionsResponse
     */
    public function listConnectionsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnections($request, $runtime);
    }

    /**
     * @param UpdateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateConnectionResponse::fromMap($this->doRequest('UpdateConnection', 'HTTPS', 'PUT', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateConnectionRequest $request
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnection($request, $runtime);
    }

    /**
     * @param DeleteConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnection($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteConnectionResponse::fromMap($this->doRequest('DeleteConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteConnectionRequest $request
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnectionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnection($request, $runtime);
    }

    /**
     * @param GetProjectDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetail($request, $runtime)
    {
        Utils::validateModel($request);

        return GetProjectDetailResponse::fromMap($this->doRequest('GetProjectDetail', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetProjectDetailRequest $request
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetailSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectDetail($request, $runtime);
    }

    /**
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceGroupsResponse::fromMap($this->doRequest('ListResourceGroups', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroups($request, $runtime);
    }

    /**
     * @param CreateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConnectionResponse
     */
    public function createConnection($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateConnectionResponse::fromMap($this->doRequest('CreateConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateConnectionRequest $request
     *
     * @return CreateConnectionResponse
     */
    public function createConnectionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnection($request, $runtime);
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplication($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApplicationResponse::fromMap($this->doRequest('GetDataServiceApplication', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplicationSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApplication($request, $runtime);
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplications($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApplicationsResponse::fromMap($this->doRequest('ListDataServiceApplications', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplicationsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApplications($request, $runtime);
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaseline($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeOnBaselineResponse::fromMap($this->doRequest('GetNodeOnBaseline', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaselineSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeOnBaseline($request, $runtime);
    }

    /**
     * @param ListBaselineConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigs($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineConfigsResponse::fromMap($this->doRequest('ListBaselineConfigs', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBaselineConfigsRequest $request
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineConfigs($request, $runtime);
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLog($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableChangeLogResponse::fromMap($this->doRequest('GetMetaTableChangeLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLogSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableChangeLog($request, $runtime);
    }

    /**
     * @param GetMetaTableOutputRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutput($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableOutputResponse::fromMap($this->doRequest('GetMetaTableOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableOutputRequest $request
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutputSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableOutput($request, $runtime);
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartition($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTablePartitionResponse::fromMap($this->doRequest('GetMetaTablePartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartitionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTablePartition($request, $runtime);
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableFullInfoResponse::fromMap($this->doRequest('GetMetaTableFullInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableFullInfo($request, $runtime);
    }

    /**
     * @param GetFileVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersion($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFileVersionResponse::fromMap($this->doRequest('GetFileVersion', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFileVersionRequest $request
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileVersion($request, $runtime);
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableBasicInfoResponse::fromMap($this->doRequest('GetMetaTableBasicInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableBasicInfo($request, $runtime);
    }

    /**
     * @param GetMetaTableColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumn($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableColumnResponse::fromMap($this->doRequest('GetMetaTableColumn', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableColumnRequest $request
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumnSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumn($request, $runtime);
    }

    /**
     * @param GetMetaDBInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBInfoResponse::fromMap($this->doRequest('GetMetaDBInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaDBInfoRequest $request
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBInfo($request, $runtime);
    }

    /**
     * @param GetMetaCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaCategoryResponse::fromMap($this->doRequest('GetMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaCategoryRequest $request
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaCategory($request, $runtime);
    }

    /**
     * @param ListAlertMessagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessages($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAlertMessagesResponse::fromMap($this->doRequest('ListAlertMessages', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAlertMessagesRequest $request
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessagesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertMessages($request, $runtime);
    }

    /**
     * @param GetBaselineConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineConfigResponse::fromMap($this->doRequest('GetBaselineConfig', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineConfigRequest $request
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineConfig($request, $runtime);
    }

    /**
     * @param SearchMetaTablesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTables($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchMetaTablesResponse::fromMap($this->doRequest('SearchMetaTables', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SearchMetaTablesRequest $request
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTablesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMetaTables($request, $runtime);
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableListByCategoryResponse::fromMap($this->doRequest('GetMetaTableListByCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableListByCategory($request, $runtime);
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetaCategoryResponse::fromMap($this->doRequest('DeleteMetaCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetaCategory($request, $runtime);
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaCategoryResponse::fromMap($this->doRequest('UpdateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaCategory($request, $runtime);
    }

    /**
     * @param ListTopicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopics($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTopicsResponse::fromMap($this->doRequest('ListTopics', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTopicsRequest $request
     *
     * @return ListTopicsResponse
     */
    public function listTopicsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopics($request, $runtime);
    }

    /**
     * @param ListFileVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFileVersionsResponse::fromMap($this->doRequest('ListFileVersions', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFileVersionsRequest $request
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersionsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileVersions($request, $runtime);
    }

    /**
     * @param CreateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateMetaCategoryResponse::fromMap($this->doRequest('CreateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateMetaCategoryRequest $request
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetaCategory($request, $runtime);
    }

    /**
     * @param ListNodeIORequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIO($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodeIOResponse::fromMap($this->doRequest('ListNodeIO', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodeIORequest $request
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIOSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeIO($request, $runtime);
    }

    /**
     * @param GetTopicInfluenceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluence($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTopicInfluenceResponse::fromMap($this->doRequest('GetTopicInfluence', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTopicInfluenceRequest $request
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluenceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicInfluence($request, $runtime);
    }

    /**
     * @param GetTopicRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopic($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTopicResponse::fromMap($this->doRequest('GetTopic', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTopicRequest $request
     *
     * @return GetTopicResponse
     */
    public function getTopicSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopic($request, $runtime);
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFromMetaCategoryResponse::fromMap($this->doRequest('DeleteFromMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFromMetaCategory($request, $runtime);
    }

    /**
     * @param GetNodeRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNode($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeResponse::fromMap($this->doRequest('GetNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeRequest $request
     *
     * @return GetNodeResponse
     */
    public function getNodeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNode($request, $runtime);
    }

    /**
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodes($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodesResponse::fromMap($this->doRequest('ListNodes', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodes($request, $runtime);
    }

    /**
     * @param GetNodeCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCode($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeCodeResponse::fromMap($this->doRequest('GetNodeCode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeCodeRequest $request
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCodeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeCode($request, $runtime);
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return EstablishRelationTableToBusinessResponse::fromMap($this->doRequest('EstablishRelationTableToBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->establishRelationTableToBusiness($request, $runtime);
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDataServiceApiResponse::fromMap($this->doRequest('UpdateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataServiceApi($request, $runtime);
    }

    /**
     * @param UpdateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFile($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUdfFileResponse::fromMap($this->doRequest('UpdateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateUdfFileRequest $request
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUdfFile($request, $runtime);
    }

    /**
     * @param CreateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFile($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateUdfFileResponse::fromMap($this->doRequest('CreateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateUdfFileRequest $request
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUdfFile($request, $runtime);
    }

    /**
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFiles($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFilesResponse::fromMap($this->doRequest('ListFiles', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFilesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFiles($request, $runtime);
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApis($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceAuthorizedApisResponse::fromMap($this->doRequest('ListDataServiceAuthorizedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApisSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceAuthorizedApis($request, $runtime);
    }

    /**
     * @param UpdateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFile($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFileResponse::fromMap($this->doRequest('UpdateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFile($request, $runtime);
    }

    /**
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFolderResponse::fromMap($this->doRequest('DeleteFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFolderRequest $request
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolder($request, $runtime);
    }

    /**
     * @param ListFoldersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFoldersResponse
     */
    public function listFolders($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFoldersResponse::fromMap($this->doRequest('ListFolders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFoldersRequest $request
     *
     * @return ListFoldersResponse
     */
    public function listFoldersSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFolders($request, $runtime);
    }

    /**
     * @param CheckMetaPartitionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartition($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaPartitionResponse::fromMap($this->doRequest('CheckMetaPartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckMetaPartitionRequest $request
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartitionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaPartition($request, $runtime);
    }

    /**
     * @param UpdateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFolderResponse::fromMap($this->doRequest('UpdateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolder($request, $runtime);
    }

    /**
     * @param DeleteRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemind($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRemindResponse::fromMap($this->doRequest('DeleteRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteRemindRequest $request
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemindSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemind($request, $runtime);
    }

    /**
     * @param AddToMetaCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategory($request, $runtime)
    {
        Utils::validateModel($request);

        return AddToMetaCategoryResponse::fromMap($this->doRequest('AddToMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddToMetaCategoryRequest $request
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addToMetaCategory($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request, $runtime)
    {
        Utils::validateModel($request);

        return ListInstancesResponse::fromMap($this->doRequest('ListInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstancesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstances($request, $runtime);
    }

    /**
     * @param SetSuccessInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return SetSuccessInstanceResponse::fromMap($this->doRequest('SetSuccessInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetSuccessInstanceRequest $request
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessInstance($request, $runtime);
    }

    /**
     * @param CreateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFile($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFileResponse::fromMap($this->doRequest('CreateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFile($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return StopInstanceResponse::fromMap($this->doRequest('StopInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstance($request, $runtime);
    }

    /**
     * @param ResumeInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return ResumeInstanceResponse::fromMap($this->doRequest('ResumeInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstance($request, $runtime);
    }

    /**
     * @param SuspendInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return SuspendInstanceResponse::fromMap($this->doRequest('SuspendInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SuspendInstanceRequest $request
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendInstance($request, $runtime);
    }

    /**
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return RestartInstanceResponse::fromMap($this->doRequest('RestartInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstance($request, $runtime);
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthorities($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApiAuthoritiesResponse::fromMap($this->doRequest('ListDataServiceApiAuthorities', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthoritiesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApiAuthorities($request, $runtime);
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApis($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServicePublishedApisResponse::fromMap($this->doRequest('ListDataServicePublishedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApisSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServicePublishedApis($request, $runtime);
    }

    /**
     * @param GetInstanceLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLog($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceLogResponse::fromMap($this->doRequest('GetInstanceLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceLogRequest $request
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLogSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLog($request, $runtime);
    }

    /**
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFolderResponse::fromMap($this->doRequest('CreateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolder($request, $runtime);
    }

    /**
     * @param GetBusinessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetBusinessResponse
     */
    public function getBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBusinessResponse::fromMap($this->doRequest('GetBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBusinessRequest $request
     *
     * @return GetBusinessResponse
     */
    public function getBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusiness($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceResponse::fromMap($this->doRequest('GetInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstance($request, $runtime);
    }

    /**
     * @param GetFileRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFile($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFileResponse::fromMap($this->doRequest('GetFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFile($request, $runtime);
    }

    /**
     * @param ListBusinessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBusinessResponse
     */
    public function listBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBusinessResponse::fromMap($this->doRequest('ListBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBusinessRequest $request
     *
     * @return ListBusinessResponse
     */
    public function listBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusiness($request, $runtime);
    }

    /**
     * @param GetMetaDBTableListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableList($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBTableListResponse::fromMap($this->doRequest('GetMetaDBTableList', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaDBTableListRequest $request
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableListSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBTableList($request, $runtime);
    }

    /**
     * @param CheckMetaTableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTable($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaTableResponse::fromMap($this->doRequest('CheckMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckMetaTableRequest $request
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTableSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaTable($request, $runtime);
    }

    /**
     * @param GetFolderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolder($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFolderResponse::fromMap($this->doRequest('GetFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFolderRequest $request
     *
     * @return GetFolderResponse
     */
    public function getFolderSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolder($request, $runtime);
    }

    /**
     * @param DeployFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeployFileResponse
     */
    public function deployFile($request, $runtime)
    {
        Utils::validateModel($request);

        return DeployFileResponse::fromMap($this->doRequest('DeployFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeployFileRequest $request
     *
     * @return DeployFileResponse
     */
    public function deployFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFile($request, $runtime);
    }

    /**
     * @param DeleteBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBusinessResponse::fromMap($this->doRequest('DeleteBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteBusinessRequest $request
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusiness($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileResponse::fromMap($this->doRequest('DeleteFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFile($request, $runtime);
    }

    /**
     * @param ListQualityRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRules($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityRulesResponse::fromMap($this->doRequest('ListQualityRules', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityRulesRequest $request
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRulesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityRules($request, $runtime);
    }

    /**
     * @param CreateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateRemindResponse
     */
    public function createRemind($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRemindResponse::fromMap($this->doRequest('CreateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRemindRequest $request
     *
     * @return CreateRemindResponse
     */
    public function createRemindSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemind($request, $runtime);
    }

    /**
     * @param GetQualityRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRule($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityRuleResponse::fromMap($this->doRequest('GetQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityRuleRequest $request
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRuleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRule($request, $runtime);
    }

    /**
     * @param GetDeploymentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentResponse::fromMap($this->doRequest('GetDeployment', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeploymentRequest $request
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeployment($request, $runtime);
    }

    /**
     * @param UpdateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRemindResponse
     */
    public function updateRemind($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateRemindResponse::fromMap($this->doRequest('UpdateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateRemindRequest $request
     *
     * @return UpdateRemindResponse
     */
    public function updateRemindSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemind($request, $runtime);
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineage($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaColumnLineageResponse::fromMap($this->doRequest('GetMetaColumnLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaColumnLineage($request, $runtime);
    }

    /**
     * @param UpdateBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusiness($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateBusinessResponse::fromMap($this->doRequest('UpdateBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateBusinessRequest $request
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusinessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusiness($request, $runtime);
    }

    /**
     * @param UpdateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRule($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityRuleResponse::fromMap($this->doRequest('UpdateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateQualityRuleRequest $request
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRuleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityRule($request, $runtime);
    }

    /**
     * @param DeleteQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRule($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRuleResponse::fromMap($this->doRequest('DeleteQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityRuleRequest $request
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRule($request, $runtime);
    }

    /**
     * @param SubmitFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFileResponse
     */
    public function submitFile($request, $runtime)
    {
        Utils::validateModel($request);

        return SubmitFileResponse::fromMap($this->doRequest('SubmitFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SubmitFileRequest $request
     *
     * @return SubmitFileResponse
     */
    public function submitFileSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFile($request, $runtime);
    }

    /**
     * @param GetDataServiceApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApiResponse::fromMap($this->doRequest('GetDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceApiRequest $request
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApi($request, $runtime);
    }

    /**
     * @param ListDataServiceApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApis($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApisResponse::fromMap($this->doRequest('ListDataServiceApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApisRequest $request
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApisSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApis($request, $runtime);
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApi($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServicePublishedApiResponse::fromMap($this->doRequest('GetDataServicePublishedApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServicePublishedApi($request, $runtime);
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPath($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineKeyPathResponse::fromMap($this->doRequest('GetBaselineKeyPath', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPathSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineKeyPath($request, $runtime);
    }

    /**
     * @param GetRemindRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRemindResponse
     */
    public function getRemind($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRemindResponse::fromMap($this->doRequest('GetRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetRemindRequest $request
     *
     * @return GetRemindResponse
     */
    public function getRemindSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemind($request, $runtime);
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWiki($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableIntroWikiResponse::fromMap($this->doRequest('GetMetaTableIntroWiki', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWikiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableIntroWiki($request, $runtime);
    }

    /**
     * @param GetBaselineStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineStatusResponse::fromMap($this->doRequest('GetBaselineStatus', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineStatusRequest $request
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatusSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineStatus($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataServiceApiResponse::fromMap($this->doRequest('DeleteDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApi($request, $runtime);
    }

    /**
     * @param PublishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishDataServiceApiResponse::fromMap($this->doRequest('PublishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PublishDataServiceApiRequest $request
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDataServiceApi($request, $runtime);
    }

    /**
     * @param GetMetaTableLineageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineage($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableLineageResponse::fromMap($this->doRequest('GetMetaTableLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableLineageRequest $request
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableLineage($request, $runtime);
    }

    /**
     * @param ListBaselineStatusesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatuses($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineStatusesResponse::fromMap($this->doRequest('ListBaselineStatuses', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBaselineStatusesRequest $request
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatusesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineStatuses($request, $runtime);
    }

    /**
     * @param ListRemindsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRemindsResponse
     */
    public function listReminds($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRemindsResponse::fromMap($this->doRequest('ListReminds', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRemindsRequest $request
     *
     * @return ListRemindsResponse
     */
    public function listRemindsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReminds($request, $runtime);
    }

    /**
     * @param DeleteQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityEntityResponse::fromMap($this->doRequest('DeleteQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityEntityRequest $request
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityEntity($request, $runtime);
    }

    /**
     * @param CreateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollower($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityFollowerResponse::fromMap($this->doRequest('CreateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityFollowerRequest $request
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollowerSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityFollower($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceApiResponse::fromMap($this->doRequest('CreateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceApiRequest $request
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApi($request, $runtime);
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApi($request, $runtime)
    {
        Utils::validateModel($request);

        return AbolishDataServiceApiResponse::fromMap($this->doRequest('AbolishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApiSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDataServiceApi($request, $runtime);
    }

    /**
     * @param GetQualityEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityEntityResponse::fromMap($this->doRequest('GetQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityEntityRequest $request
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityEntity($request, $runtime);
    }

    /**
     * @param GetQualityFollowerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollower($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityFollowerResponse::fromMap($this->doRequest('GetQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityFollowerRequest $request
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollowerSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityFollower($request, $runtime);
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollower($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityFollowerResponse::fromMap($this->doRequest('DeleteQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollowerSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityFollower($request, $runtime);
    }

    /**
     * @param CreateQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityEntityResponse::fromMap($this->doRequest('CreateQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityEntityRequest $request
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityEntity($request, $runtime);
    }

    /**
     * @param CreateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRule($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRuleResponse::fromMap($this->doRequest('CreateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityRuleRequest $request
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRule($request, $runtime);
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollower($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityFollowerResponse::fromMap($this->doRequest('UpdateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollowerSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityFollower($request, $runtime);
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNode($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRelativeNodeResponse::fromMap($this->doRequest('CreateQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNodeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRelativeNode($request, $runtime);
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNode($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRelativeNodeResponse::fromMap($this->doRequest('DeleteQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNodeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRelativeNode($request, $runtime);
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
}

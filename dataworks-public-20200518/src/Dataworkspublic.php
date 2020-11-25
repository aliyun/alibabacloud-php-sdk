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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIORequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIOResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindResponse;
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
use AlibabaCloud\Tea\Rpc\Rpc;
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
     * @param RunTriggerNodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RunTriggerNodeResponse::fromMap($this->doRequest('RunTriggerNode', 'HTTPS', 'PUT', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunTriggerNodeRequest $request
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTriggerNodeWithOptions($request, $runtime);
    }

    /**
     * @param GetDagRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDagResponse
     */
    public function getDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDagResponse::fromMap($this->doRequest('GetDag', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDagRequest $request
     *
     * @return GetDagResponse
     */
    public function getDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDagWithOptions($request, $runtime);
    }

    /**
     * @param SearchNodesByOutputRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchNodesByOutputResponse::fromMap($this->doRequest('SearchNodesByOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SearchNodesByOutputRequest $request
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNodesByOutputWithOptions($request, $runtime);
    }

    /**
     * @param GetManualDagInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetManualDagInstancesResponse::fromMap($this->doRequest('GetManualDagInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetManualDagInstancesRequest $request
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManualDagInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CreateManualDagRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateManualDagResponse
     */
    public function createManualDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateManualDagResponse::fromMap($this->doRequest('CreateManualDag', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateManualDagRequest $request
     *
     * @return CreateManualDagResponse
     */
    public function createManualDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createManualDagWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityResultsByEntityResponse::fromMap($this->doRequest('ListQualityResultsByEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeTypeListInfoResponse::fromMap($this->doRequest('GetNodeTypeListInfo', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeTypeListInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceStatusCountResponse::fromMap($this->doRequest('GetInstanceStatusCount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStatusCountWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFoldersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceFoldersResponse::fromMap($this->doRequest('ListDataServiceFolders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceFoldersWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityResultsByRuleResponse::fromMap($this->doRequest('ListQualityResultsByRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListMetaDBRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListMetaDBResponse::fromMap($this->doRequest('ListMetaDB', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListMetaDBRequest $request
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetaDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableResponse::fromMap($this->doRequest('CreateTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableThemeResponse
     */
    public function createTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableThemeResponse::fromMap($this->doRequest('CreateTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableThemeRequest $request
     *
     * @return CreateTableThemeResponse
     */
    public function createTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRankWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceErrorRankResponse::fromMap($this->doRequest('GetInstanceErrorRank', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceErrorRankWithOptions($request, $runtime);
    }

    /**
     * @param GetDDLJobStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDDLJobStatusResponse::fromMap($this->doRequest('GetDDLJobStatus', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetDDLJobStatusRequest $request
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDDLJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRankWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceConsumeTimeRankResponse::fromMap($this->doRequest('GetInstanceConsumeTimeRank', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceConsumeTimeRankWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceApiAuthorityResponse::fromMap($this->doRequest('CreateDataServiceApiAuthority', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataServiceApiAuthorityResponse::fromMap($this->doRequest('DeleteDataServiceApiAuthority', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceGroupResponse::fromMap($this->doRequest('CreateDataServiceGroup', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaTableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaTableResponse::fromMap($this->doRequest('UpdateMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaTableRequest $request
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTableWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceCountTrendResponse::fromMap($this->doRequest('GetInstanceCountTrend', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountTrendWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTableResponse
     */
    public function deleteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableResponse::fromMap($this->doRequest('DeleteTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableRequest $request
     *
     * @return DeleteTableResponse
     */
    public function deleteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableWithOptions($request, $runtime);
    }

    /**
     * @param ListTableThemeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableThemeResponse
     */
    public function listTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTableThemeResponse::fromMap($this->doRequest('ListTableTheme', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListTableThemeRequest $request
     *
     * @return ListTableThemeResponse
     */
    public function listTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSuccessInstanceTrendResponse::fromMap($this->doRequest('GetSuccessInstanceTrend', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuccessInstanceTrendWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTableResponse
     */
    public function updateTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableResponse::fromMap($this->doRequest('UpdateTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableRequest $request
     *
     * @return UpdateTableResponse
     */
    public function updateTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceFolderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceFolderResponse::fromMap($this->doRequest('GetDataServiceFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceFolderRequest $request
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceFolderWithOptions($request, $runtime);
    }

    /**
     * @param ListTableLevelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTableLevelResponse::fromMap($this->doRequest('ListTableLevel', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListTableLevelRequest $request
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceGroupsResponse::fromMap($this->doRequest('ListDataServiceGroups', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableThemeResponse::fromMap($this->doRequest('UpdateTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableThemeRequest $request
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceFolderResponse::fromMap($this->doRequest('CreateDataServiceFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceFolderWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceGroupResponse::fromMap($this->doRequest('GetDataServiceGroup', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceGroupRequest $request
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTableLevelResponse::fromMap($this->doRequest('CreateTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTableLevelRequest $request
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWikiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaTableIntroWikiResponse::fromMap($this->doRequest('UpdateMetaTableIntroWiki', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWiki($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTableIntroWikiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableLevelResponse::fromMap($this->doRequest('DeleteTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableLevelRequest $request
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableLevelResponse::fromMap($this->doRequest('UpdateTableLevel', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableLevelRequest $request
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTableThemeResponse::fromMap($this->doRequest('DeleteTableTheme', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTableThemeRequest $request
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param ListProgramTypeCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProgramTypeCountResponse::fromMap($this->doRequest('ListProgramTypeCount', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProgramTypeCountRequest $request
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProgramTypeCountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTableModelInfoResponse::fromMap($this->doRequest('UpdateTableModelInfo', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableModelInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectsResponse::fromMap($this->doRequest('ListProjects', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectMembersResponse::fromMap($this->doRequest('ListProjectMembers', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProjectMemberResponse::fromMap($this->doRequest('CreateProjectMember', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProjectMemberRequest $request
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectRolesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProjectRolesResponse::fromMap($this->doRequest('ListProjectRoles', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProjectRolesRequest $request
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectRolesWithOptions($request, $runtime);
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddProjectMemberToRoleResponse::fromMap($this->doRequest('AddProjectMemberToRole', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectMemberToRoleWithOptions($request, $runtime);
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveProjectMemberFromRoleResponse::fromMap($this->doRequest('RemoveProjectMemberFromRole', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeProjectMemberFromRoleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProjectMemberResponse::fromMap($this->doRequest('DeleteProjectMember', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProjectMemberRequest $request
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateDagComplementRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDagComplementResponse::fromMap($this->doRequest('CreateDagComplement', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDagComplementRequest $request
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagComplementWithOptions($request, $runtime);
    }

    /**
     * @param CreateDagTestRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDagTestResponse
     */
    public function createDagTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDagTestResponse::fromMap($this->doRequest('CreateDagTest', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDagTestRequest $request
     *
     * @return CreateDagTestResponse
     */
    public function createDagTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagTestWithOptions($request, $runtime);
    }

    /**
     * @param ListCalcEnginesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEnginesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCalcEnginesResponse::fromMap($this->doRequest('ListCalcEngines', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListCalcEnginesRequest $request
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEngines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalcEnginesWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConnectionsResponse
     */
    public function listConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListConnectionsResponse::fromMap($this->doRequest('ListConnections', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListConnectionsRequest $request
     *
     * @return ListConnectionsResponse
     */
    public function listConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateConnectionResponse::fromMap($this->doRequest('UpdateConnection', 'HTTPS', 'PUT', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateConnectionRequest $request
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteConnectionResponse::fromMap($this->doRequest('DeleteConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteConnectionRequest $request
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetProjectDetailResponse::fromMap($this->doRequest('GetProjectDetail', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetProjectDetailRequest $request
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceGroupsResponse::fromMap($this->doRequest('ListResourceGroups', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param CreateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConnectionResponse
     */
    public function createConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateConnectionResponse::fromMap($this->doRequest('CreateConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateConnectionRequest $request
     *
     * @return CreateConnectionResponse
     */
    public function createConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApplicationResponse::fromMap($this->doRequest('GetDataServiceApplication', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApplicationsResponse::fromMap($this->doRequest('ListDataServiceApplications', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeOnBaselineResponse::fromMap($this->doRequest('GetNodeOnBaseline', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeOnBaselineWithOptions($request, $runtime);
    }

    /**
     * @param ListBaselineConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineConfigsResponse::fromMap($this->doRequest('ListBaselineConfigs', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBaselineConfigsRequest $request
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineConfigsWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableChangeLogResponse::fromMap($this->doRequest('GetMetaTableChangeLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableChangeLogWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableOutputRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableOutputResponse::fromMap($this->doRequest('GetMetaTableOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableOutputRequest $request
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableOutputWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTablePartitionResponse::fromMap($this->doRequest('GetMetaTablePartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTablePartitionWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableFullInfoResponse::fromMap($this->doRequest('GetMetaTableFullInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableFullInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetFileVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFileVersionResponse::fromMap($this->doRequest('GetFileVersion', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFileVersionRequest $request
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableBasicInfoResponse::fromMap($this->doRequest('GetMetaTableBasicInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableBasicInfoWithOptions($request, $runtime);
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

        return GetMetaTableColumnResponse::fromMap($this->doRequest('GetMetaTableColumn', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
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
     * @param GetMetaDBInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBInfoResponse::fromMap($this->doRequest('GetMetaDBInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaDBInfoRequest $request
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaCategoryResponse::fromMap($this->doRequest('GetMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaCategoryRequest $request
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListAlertMessagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAlertMessagesResponse::fromMap($this->doRequest('ListAlertMessages', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAlertMessagesRequest $request
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertMessagesWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineConfigResponse::fromMap($this->doRequest('GetBaselineConfig', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineConfigRequest $request
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineConfigWithOptions($request, $runtime);
    }

    /**
     * @param SearchMetaTablesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchMetaTablesResponse::fromMap($this->doRequest('SearchMetaTables', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SearchMetaTablesRequest $request
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMetaTablesWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableListByCategoryResponse::fromMap($this->doRequest('GetMetaTableListByCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableListByCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetaCategoryResponse::fromMap($this->doRequest('DeleteMetaCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaCategoryResponse::fromMap($this->doRequest('UpdateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListTopicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTopicsResponse::fromMap($this->doRequest('ListTopics', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTopicsRequest $request
     *
     * @return ListTopicsResponse
     */
    public function listTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicsWithOptions($request, $runtime);
    }

    /**
     * @param ListFileVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFileVersionsResponse::fromMap($this->doRequest('ListFileVersions', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFileVersionsRequest $request
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileVersionsWithOptions($request, $runtime);
    }

    /**
     * @param CreateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateMetaCategoryResponse::fromMap($this->doRequest('CreateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateMetaCategoryRequest $request
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeIORequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIOWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodeIOResponse::fromMap($this->doRequest('ListNodeIO', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodeIORequest $request
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIO($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeIOWithOptions($request, $runtime);
    }

    /**
     * @param GetTopicInfluenceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTopicInfluenceResponse::fromMap($this->doRequest('GetTopicInfluence', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTopicInfluenceRequest $request
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicInfluenceWithOptions($request, $runtime);
    }

    /**
     * @param GetTopicRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTopicResponse::fromMap($this->doRequest('GetTopic', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTopicRequest $request
     *
     * @return GetTopicResponse
     */
    public function getTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFromMetaCategoryResponse::fromMap($this->doRequest('DeleteFromMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFromMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeResponse::fromMap($this->doRequest('GetNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeRequest $request
     *
     * @return GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNodesResponse::fromMap($this->doRequest('ListNodes', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetNodeCodeResponse::fromMap($this->doRequest('GetNodeCode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetNodeCodeRequest $request
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeCodeWithOptions($request, $runtime);
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EstablishRelationTableToBusinessResponse::fromMap($this->doRequest('EstablishRelationTableToBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->establishRelationTableToBusinessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDataServiceApiResponse::fromMap($this->doRequest('UpdateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUdfFileResponse::fromMap($this->doRequest('UpdateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateUdfFileRequest $request
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUdfFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateUdfFileResponse::fromMap($this->doRequest('CreateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateUdfFileRequest $request
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUdfFileWithOptions($request, $runtime);
    }

    /**
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFilesResponse::fromMap($this->doRequest('ListFiles', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceAuthorizedApisResponse::fromMap($this->doRequest('ListDataServiceAuthorizedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFileResponse::fromMap($this->doRequest('UpdateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFolderResponse::fromMap($this->doRequest('DeleteFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFolderRequest $request
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolderWithOptions($request, $runtime);
    }

    /**
     * @param ListFoldersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFoldersResponse
     */
    public function listFoldersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFoldersResponse::fromMap($this->doRequest('ListFolders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFoldersRequest $request
     *
     * @return ListFoldersResponse
     */
    public function listFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoldersWithOptions($request, $runtime);
    }

    /**
     * @param CheckMetaPartitionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaPartitionResponse::fromMap($this->doRequest('CheckMetaPartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckMetaPartitionRequest $request
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaPartitionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFolderResponse::fromMap($this->doRequest('UpdateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRemindResponse::fromMap($this->doRequest('DeleteRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteRemindRequest $request
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemindWithOptions($request, $runtime);
    }

    /**
     * @param AddToMetaCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddToMetaCategoryResponse::fromMap($this->doRequest('AddToMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddToMetaCategoryRequest $request
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addToMetaCategoryWithOptions($request, $runtime);
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

        return ListInstancesResponse::fromMap($this->doRequest('ListInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetSuccessInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetSuccessInstanceResponse::fromMap($this->doRequest('SetSuccessInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetSuccessInstanceRequest $request
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFileResponse::fromMap($this->doRequest('CreateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopInstanceResponse::fromMap($this->doRequest('StopInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResumeInstanceResponse::fromMap($this->doRequest('ResumeInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SuspendInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SuspendInstanceResponse::fromMap($this->doRequest('SuspendInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SuspendInstanceRequest $request
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RestartInstanceResponse::fromMap($this->doRequest('RestartInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApiAuthoritiesResponse::fromMap($this->doRequest('ListDataServiceApiAuthorities', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApiAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServicePublishedApisResponse::fromMap($this->doRequest('ListDataServicePublishedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServicePublishedApisWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceLogResponse::fromMap($this->doRequest('GetInstanceLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceLogRequest $request
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFolderResponse::fromMap($this->doRequest('CreateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolderWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetBusinessResponse
     */
    public function getBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBusinessResponse::fromMap($this->doRequest('GetBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBusinessRequest $request
     *
     * @return GetBusinessResponse
     */
    public function getBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessWithOptions($request, $runtime);
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

        return GetInstanceResponse::fromMap($this->doRequest('GetInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetFileRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFileResponse::fromMap($this->doRequest('GetFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileWithOptions($request, $runtime);
    }

    /**
     * @param ListBusinessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBusinessResponse
     */
    public function listBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBusinessResponse::fromMap($this->doRequest('ListBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBusinessRequest $request
     *
     * @return ListBusinessResponse
     */
    public function listBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusinessWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaDBTableListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBTableListResponse::fromMap($this->doRequest('GetMetaDBTableList', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaDBTableListRequest $request
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBTableListWithOptions($request, $runtime);
    }

    /**
     * @param CheckMetaTableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaTableResponse::fromMap($this->doRequest('CheckMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckMetaTableRequest $request
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaTableWithOptions($request, $runtime);
    }

    /**
     * @param GetFolderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFolderResponse::fromMap($this->doRequest('GetFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFolderRequest $request
     *
     * @return GetFolderResponse
     */
    public function getFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolderWithOptions($request, $runtime);
    }

    /**
     * @param DeployFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeployFileResponse
     */
    public function deployFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeployFileResponse::fromMap($this->doRequest('DeployFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeployFileRequest $request
     *
     * @return DeployFileResponse
     */
    public function deployFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBusinessResponse::fromMap($this->doRequest('DeleteBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteBusinessRequest $request
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileResponse::fromMap($this->doRequest('DeleteFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListQualityRulesResponse::fromMap($this->doRequest('ListQualityRules', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListQualityRulesRequest $request
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateRemindResponse
     */
    public function createRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRemindResponse::fromMap($this->doRequest('CreateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRemindRequest $request
     *
     * @return CreateRemindResponse
     */
    public function createRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemindWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityRuleResponse::fromMap($this->doRequest('GetQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityRuleRequest $request
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetDeploymentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentResponse::fromMap($this->doRequest('GetDeployment', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeploymentRequest $request
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRemindResponse
     */
    public function updateRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateRemindResponse::fromMap($this->doRequest('UpdateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateRemindRequest $request
     *
     * @return UpdateRemindResponse
     */
    public function updateRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemindWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaColumnLineageResponse::fromMap($this->doRequest('GetMetaColumnLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaColumnLineageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateBusinessResponse::fromMap($this->doRequest('UpdateBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateBusinessRequest $request
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityRuleResponse::fromMap($this->doRequest('UpdateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateQualityRuleRequest $request
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRuleResponse::fromMap($this->doRequest('DeleteQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityRuleRequest $request
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFileResponse
     */
    public function submitFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SubmitFileResponse::fromMap($this->doRequest('SubmitFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SubmitFileRequest $request
     *
     * @return SubmitFileResponse
     */
    public function submitFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFileWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApiResponse::fromMap($this->doRequest('GetDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServiceApiRequest $request
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApisResponse::fromMap($this->doRequest('ListDataServiceApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataServiceApisRequest $request
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApisWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataServicePublishedApiResponse::fromMap($this->doRequest('GetDataServicePublishedApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServicePublishedApiWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineKeyPathResponse::fromMap($this->doRequest('GetBaselineKeyPath', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineKeyPathWithOptions($request, $runtime);
    }

    /**
     * @param GetRemindRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRemindResponse
     */
    public function getRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRemindResponse::fromMap($this->doRequest('GetRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetRemindRequest $request
     *
     * @return GetRemindResponse
     */
    public function getRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemindWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWikiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableIntroWikiResponse::fromMap($this->doRequest('GetMetaTableIntroWiki', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWiki($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableIntroWikiWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineStatusResponse::fromMap($this->doRequest('GetBaselineStatus', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBaselineStatusRequest $request
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineStatusWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataServiceApiResponse::fromMap($this->doRequest('DeleteDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param PublishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishDataServiceApiResponse::fromMap($this->doRequest('PublishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PublishDataServiceApiRequest $request
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableLineageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableLineageResponse::fromMap($this->doRequest('GetMetaTableLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetMetaTableLineageRequest $request
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableLineageWithOptions($request, $runtime);
    }

    /**
     * @param ListBaselineStatusesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineStatusesResponse::fromMap($this->doRequest('ListBaselineStatuses', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBaselineStatusesRequest $request
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineStatusesWithOptions($request, $runtime);
    }

    /**
     * @param ListRemindsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRemindsResponse
     */
    public function listRemindsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRemindsResponse::fromMap($this->doRequest('ListReminds', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRemindsRequest $request
     *
     * @return ListRemindsResponse
     */
    public function listReminds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemindsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityEntityResponse::fromMap($this->doRequest('DeleteQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityEntityRequest $request
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityFollowerResponse::fromMap($this->doRequest('CreateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityFollowerRequest $request
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceApiResponse::fromMap($this->doRequest('CreateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataServiceApiRequest $request
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AbolishDataServiceApiResponse::fromMap($this->doRequest('AbolishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityEntityResponse::fromMap($this->doRequest('GetQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityEntityRequest $request
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityFollowerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetQualityFollowerResponse::fromMap($this->doRequest('GetQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetQualityFollowerRequest $request
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityFollowerResponse::fromMap($this->doRequest('DeleteQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityEntityResponse::fromMap($this->doRequest('CreateQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityEntityRequest $request
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRuleResponse::fromMap($this->doRequest('CreateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityRuleRequest $request
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityFollowerResponse::fromMap($this->doRequest('UpdateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRelativeNodeResponse::fromMap($this->doRequest('CreateQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRelativeNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRelativeNodeResponse::fromMap($this->doRequest('DeleteQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRelativeNodeWithOptions($request, $runtime);
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

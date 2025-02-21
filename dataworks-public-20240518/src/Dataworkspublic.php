<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AssociateProjectToResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AssociateProjectToResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AttachDataQualityRulesToEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AttachDataQualityRulesToEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AttachDataQualityRulesToEvaluationTaskShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CloneDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CloneDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataAssetTagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataAssetTagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataAssetTagShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleTemplateRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleTemplateResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleTemplateShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataSourceSharedRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataSourceSharedRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNetworkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNetworkResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectMemberShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateRouteRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateRouteResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataAssetTagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataAssetTagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataAssetTagShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityRuleTemplateRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataQualityRuleTemplateResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataSourceSharedRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDataSourceSharedRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDIAlarmRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDIAlarmRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNetworkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNetworkResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteRouteRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteRouteResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DetachDataQualityRulesFromEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DetachDataQualityRulesFromEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DetachDataQualityRulesFromEvaluationTaskShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DissociateProjectFromResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DissociateProjectFromResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCreateWorkflowInstancesResultRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCreateWorkflowInstancesResultResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNetworkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNetworkResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRouteRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRouteResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNetworksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNetworksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectMembersShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListRoutesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListRoutesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstanceOperationLogsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstanceOperationLogsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RemoveTaskInstanceDependenciesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RemoveTaskInstanceDependenciesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RemoveTaskInstanceDependenciesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ResumeTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ResumeTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ResumeTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RevokeMemberProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RevokeMemberProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RevokeMemberProjectRolesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SetSuccessTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SetSuccessTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SetSuccessTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartWorkflowInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartWorkflowInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartWorkflowInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopWorkflowInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopWorkflowInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopWorkflowInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TagDataAssetsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TagDataAssetsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TagDataAssetsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TriggerSchedulerTaskInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TriggerSchedulerTaskInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UnTagDataAssetsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UnTagDataAssetsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UnTagDataAssetsShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataAssetTagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataAssetTagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataAssetTagShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleTemplateRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleTemplateResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleTemplateShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateRouteRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateRouteResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dataworkspublic extends OpenApiClient
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Terminates the process for deploying or undeploying an entity. The process is not deleted and can still be queried by calling query operations.
     *
     * @param request - AbolishDeploymentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AbolishDeploymentResponse
     *
     * @param AbolishDeploymentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AbolishDeploymentResponse
     */
    public function abolishDeploymentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AbolishDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AbolishDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AbolishDeploymentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Terminates the process for deploying or undeploying an entity. The process is not deleted and can still be queried by calling query operations.
     *
     * @param request - AbolishDeploymentRequest
     * @returns AbolishDeploymentResponse
     *
     * @param AbolishDeploymentRequest $request
     *
     * @return AbolishDeploymentResponse
     */
    public function abolishDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDeploymentWithOptions($request, $runtime);
    }

    /**
     * Associates a resource group with a workspace.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  Your account must be assigned one of the following roles of the desired workspace:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - AssociateProjectToResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AssociateProjectToResourceGroupResponse
     *
     * @param AssociateProjectToResourceGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AssociateProjectToResourceGroupResponse
     */
    public function associateProjectToResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateProjectToResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssociateProjectToResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssociateProjectToResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates a resource group with a workspace.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  Your account must be assigned one of the following roles of the desired workspace:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - AssociateProjectToResourceGroupRequest
     * @returns AssociateProjectToResourceGroupResponse
     *
     * @param AssociateProjectToResourceGroupRequest $request
     *
     * @return AssociateProjectToResourceGroupResponse
     */
    public function associateProjectToResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateProjectToResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Associates monitoring rules with a monitor.
     *
     * @param tmpReq - AttachDataQualityRulesToEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AttachDataQualityRulesToEvaluationTaskResponse
     *
     * @param AttachDataQualityRulesToEvaluationTaskRequest $tmpReq
     * @param RuntimeOptions                                $runtime
     *
     * @return AttachDataQualityRulesToEvaluationTaskResponse
     */
    public function attachDataQualityRulesToEvaluationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachDataQualityRulesToEvaluationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataQualityRuleIds) {
            $request->dataQualityRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataQualityRuleIds, 'DataQualityRuleIds', 'json');
        }

        $body = [];
        if (null !== $request->dataQualityEvaluationTaskId) {
            @$body['DataQualityEvaluationTaskId'] = $request->dataQualityEvaluationTaskId;
        }

        if (null !== $request->dataQualityRuleIdsShrink) {
            @$body['DataQualityRuleIds'] = $request->dataQualityRuleIdsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachDataQualityRulesToEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachDataQualityRulesToEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachDataQualityRulesToEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates monitoring rules with a monitor.
     *
     * @param request - AttachDataQualityRulesToEvaluationTaskRequest
     * @returns AttachDataQualityRulesToEvaluationTaskResponse
     *
     * @param AttachDataQualityRulesToEvaluationTaskRequest $request
     *
     * @return AttachDataQualityRulesToEvaluationTaskResponse
     */
    public function attachDataQualityRulesToEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDataQualityRulesToEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Performs incremental updates on multiple tasks at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - BatchUpdateTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BatchUpdateTasksResponse
     *
     * @param BatchUpdateTasksRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BatchUpdateTasksResponse
     */
    public function batchUpdateTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tasks) {
            $request->tasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->tasksShrink) {
            @$body['Tasks'] = $request->tasksShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateTasks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchUpdateTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchUpdateTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Performs incremental updates on multiple tasks at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - BatchUpdateTasksRequest
     * @returns BatchUpdateTasksResponse
     *
     * @param BatchUpdateTasksRequest $request
     *
     * @return BatchUpdateTasksResponse
     */
    public function batchUpdateTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateTasksWithOptions($request, $runtime);
    }

    /**
     * Clones an existing data source.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - CloneDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CloneDataSourceResponse
     *
     * @param CloneDataSourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloneDataSourceResponse
     */
    public function cloneDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloneDataSourceName) {
            @$query['CloneDataSourceName'] = $request->cloneDataSourceName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneDataSource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloneDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloneDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Clones an existing data source.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - CloneDataSourceRequest
     * @returns CloneDataSourceResponse
     *
     * @param CloneDataSourceRequest $request
     *
     * @return CloneDataSourceResponse
     */
    public function cloneDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneDataSourceWithOptions($request, $runtime);
    }

    /**
     * Creates a custom monitoring alert rule.
     *
     * @param tmpReq - CreateAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAlertRuleResponse
     *
     * @param CreateAlertRuleRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAlertRuleResponse
     */
    public function createAlertRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAlertRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->triggerCondition) {
            $request->triggerConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerCondition, 'TriggerCondition', 'json');
        }

        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->triggerConditionShrink) {
            @$query['TriggerCondition'] = $request->triggerConditionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom monitoring alert rule.
     *
     * @param request - CreateAlertRuleRequest
     * @returns CreateAlertRuleResponse
     *
     * @param CreateAlertRuleRequest $request
     *
     * @return CreateAlertRuleResponse
     */
    public function createAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an alert rule for a synchronization task.
     *
     * @param tmpReq - CreateDIAlarmRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDIAlarmRuleResponse
     *
     * @param CreateDIAlarmRuleRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDIAlarmRuleResponse
     */
    public function createDIAlarmRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDIAlarmRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notificationSettings) {
            $request->notificationSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notificationSettings, 'NotificationSettings', 'json');
        }

        if (null !== $tmpReq->triggerConditions) {
            $request->triggerConditionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerConditions, 'TriggerConditions', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDIAlarmRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDIAlarmRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert rule for a synchronization task.
     *
     * @param request - CreateDIAlarmRuleRequest
     * @returns CreateDIAlarmRuleResponse
     *
     * @param CreateDIAlarmRuleRequest $request
     *
     * @return CreateDIAlarmRuleResponse
     */
    public function createDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a new-version synchronization task.
     *
     * @remarks
     *   This API operation is available for all DataWorks editions.
     * *   You can call this API operation to create a synchronization task. When you call this API operation, you must configure parameters such as SourceDataSourceSettings, DestinationDataSourceSettings, MigrationType, TransformationRules, TableMappings, and JobSettings. The SourceDataSourceSettings parameter defines the settings related to the source. The DestinationDataSourceSettings parameter defines the settings related to the destination. The MigrationType parameter defines the synchronization task type. The TransformationRules parameter defines the transformation rules for objects involved in the synchronization task. The TableMappings parameter defines the mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. The JobSettings parameter defines the settings for the dimension of the synchronization task, including policies for data type mappings between source fields and destination fields and settings for periodic scheduling.
     *
     * @param tmpReq - CreateDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDIJobResponse
     *
     * @param CreateDIJobRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDIJobResponse
     */
    public function createDIJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDIJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationDataSourceSettings) {
            $request->destinationDataSourceSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationDataSourceSettings, 'DestinationDataSourceSettings', 'json');
        }

        if (null !== $tmpReq->jobSettings) {
            $request->jobSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobSettings, 'JobSettings', 'json');
        }

        if (null !== $tmpReq->resourceSettings) {
            $request->resourceSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSettings, 'ResourceSettings', 'json');
        }

        if (null !== $tmpReq->sourceDataSourceSettings) {
            $request->sourceDataSourceSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceDataSourceSettings, 'SourceDataSourceSettings', 'json');
        }

        if (null !== $tmpReq->tableMappings) {
            $request->tableMappingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableMappings, 'TableMappings', 'json');
        }

        if (null !== $tmpReq->transformationRules) {
            $request->transformationRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transformationRules, 'TransformationRules', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a new-version synchronization task.
     *
     * @remarks
     *   This API operation is available for all DataWorks editions.
     * *   You can call this API operation to create a synchronization task. When you call this API operation, you must configure parameters such as SourceDataSourceSettings, DestinationDataSourceSettings, MigrationType, TransformationRules, TableMappings, and JobSettings. The SourceDataSourceSettings parameter defines the settings related to the source. The DestinationDataSourceSettings parameter defines the settings related to the destination. The MigrationType parameter defines the synchronization task type. The TransformationRules parameter defines the transformation rules for objects involved in the synchronization task. The TableMappings parameter defines the mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. The JobSettings parameter defines the settings for the dimension of the synchronization task, including policies for data type mappings between source fields and destination fields and settings for periodic scheduling.
     *
     * @param request - CreateDIJobRequest
     * @returns CreateDIJobResponse
     *
     * @param CreateDIJobRequest $request
     *
     * @return CreateDIJobResponse
     */
    public function createDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDIJobWithOptions($request, $runtime);
    }

    /**
     * Creates a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - CreateDataAssetTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataAssetTagResponse
     *
     * @param CreateDataAssetTagRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDataAssetTagResponse
     */
    public function createDataAssetTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataAssetTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->managers) {
            $request->managersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }

        if (null !== $tmpReq->values) {
            $request->valuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->managersShrink) {
            @$query['Managers'] = $request->managersShrink;
        }

        if (null !== $request->valueType) {
            @$query['ValueType'] = $request->valueType;
        }

        if (null !== $request->valuesShrink) {
            @$query['Values'] = $request->valuesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataAssetTag',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataAssetTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataAssetTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - CreateDataAssetTagRequest
     * @returns CreateDataAssetTagResponse
     *
     * @param CreateDataAssetTagRequest $request
     *
     * @return CreateDataAssetTagResponse
     */
    public function createDataAssetTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataAssetTagWithOptions($request, $runtime);
    }

    /**
     * Creates a monitor in DataWorks Data Quality.
     *
     * @remarks
     * This API operation is supported in all DataWorks editions.
     *
     * @param tmpReq - CreateDataQualityEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataQualityEvaluationTaskResponse
     *
     * @param CreateDataQualityEvaluationTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateDataQualityEvaluationTaskResponse
     */
    public function createDataQualityEvaluationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataQualityEvaluationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataQualityRules) {
            $request->dataQualityRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataQualityRules, 'DataQualityRules', 'json');
        }

        if (null !== $tmpReq->hooks) {
            $request->hooksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hooks, 'Hooks', 'json');
        }

        if (null !== $tmpReq->notifications) {
            $request->notificationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifications, 'Notifications', 'json');
        }

        if (null !== $tmpReq->target) {
            $request->targetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->target, 'Target', 'json');
        }

        if (null !== $tmpReq->trigger) {
            $request->triggerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trigger, 'Trigger', 'json');
        }

        $body = [];
        if (null !== $request->dataQualityRulesShrink) {
            @$body['DataQualityRules'] = $request->dataQualityRulesShrink;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->hooksShrink) {
            @$body['Hooks'] = $request->hooksShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->notificationsShrink) {
            @$body['Notifications'] = $request->notificationsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->runtimeConf) {
            @$body['RuntimeConf'] = $request->runtimeConf;
        }

        if (null !== $request->targetShrink) {
            @$body['Target'] = $request->targetShrink;
        }

        if (null !== $request->triggerShrink) {
            @$body['Trigger'] = $request->triggerShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataQualityEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataQualityEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataQualityEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a monitor in DataWorks Data Quality.
     *
     * @remarks
     * This API operation is supported in all DataWorks editions.
     *
     * @param request - CreateDataQualityEvaluationTaskRequest
     * @returns CreateDataQualityEvaluationTaskResponse
     *
     * @param CreateDataQualityEvaluationTaskRequest $request
     *
     * @return CreateDataQualityEvaluationTaskResponse
     */
    public function createDataQualityEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataQualityEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a monitor instance.
     *
     * @param tmpReq - CreateDataQualityEvaluationTaskInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataQualityEvaluationTaskInstanceResponse
     *
     * @param CreateDataQualityEvaluationTaskInstanceRequest $tmpReq
     * @param RuntimeOptions                                 $runtime
     *
     * @return CreateDataQualityEvaluationTaskInstanceResponse
     */
    public function createDataQualityEvaluationTaskInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataQualityEvaluationTaskInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->runtimeResource) {
            $request->runtimeResourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runtimeResource, 'RuntimeResource', 'json');
        }

        $body = [];
        if (null !== $request->dataQualityEvaluationTaskId) {
            @$body['DataQualityEvaluationTaskId'] = $request->dataQualityEvaluationTaskId;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->runtimeResourceShrink) {
            @$body['RuntimeResource'] = $request->runtimeResourceShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataQualityEvaluationTaskInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataQualityEvaluationTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataQualityEvaluationTaskInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a monitor instance.
     *
     * @param request - CreateDataQualityEvaluationTaskInstanceRequest
     * @returns CreateDataQualityEvaluationTaskInstanceResponse
     *
     * @param CreateDataQualityEvaluationTaskInstanceRequest $request
     *
     * @return CreateDataQualityEvaluationTaskInstanceResponse
     */
    public function createDataQualityEvaluationTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataQualityEvaluationTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a data quality monitoring rule.
     *
     * @param tmpReq - CreateDataQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataQualityRuleResponse
     *
     * @param CreateDataQualityRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataQualityRuleResponse
     */
    public function createDataQualityRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataQualityRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->checkingConfig) {
            $request->checkingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkingConfig, 'CheckingConfig', 'json');
        }

        if (null !== $tmpReq->errorHandlers) {
            $request->errorHandlersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->errorHandlers, 'ErrorHandlers', 'json');
        }

        if (null !== $tmpReq->samplingConfig) {
            $request->samplingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->samplingConfig, 'SamplingConfig', 'json');
        }

        if (null !== $tmpReq->target) {
            $request->targetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->target, 'Target', 'json');
        }

        $body = [];
        if (null !== $request->checkingConfigShrink) {
            @$body['CheckingConfig'] = $request->checkingConfigShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->errorHandlersShrink) {
            @$body['ErrorHandlers'] = $request->errorHandlersShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->samplingConfigShrink) {
            @$body['SamplingConfig'] = $request->samplingConfigShrink;
        }

        if (null !== $request->severity) {
            @$body['Severity'] = $request->severity;
        }

        if (null !== $request->targetShrink) {
            @$body['Target'] = $request->targetShrink;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataQualityRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataQualityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a data quality monitoring rule.
     *
     * @param request - CreateDataQualityRuleRequest
     * @returns CreateDataQualityRuleResponse
     *
     * @param CreateDataQualityRuleRequest $request
     *
     * @return CreateDataQualityRuleResponse
     */
    public function createDataQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataQualityRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a data quality monitoring rule template.
     *
     * @param tmpReq - CreateDataQualityRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataQualityRuleTemplateResponse
     *
     * @param CreateDataQualityRuleTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDataQualityRuleTemplateResponse
     */
    public function createDataQualityRuleTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataQualityRuleTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->checkingConfig) {
            $request->checkingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkingConfig, 'CheckingConfig', 'json');
        }

        if (null !== $tmpReq->samplingConfig) {
            $request->samplingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->samplingConfig, 'SamplingConfig', 'json');
        }

        $body = [];
        if (null !== $request->checkingConfigShrink) {
            @$body['CheckingConfig'] = $request->checkingConfigShrink;
        }

        if (null !== $request->directoryPath) {
            @$body['DirectoryPath'] = $request->directoryPath;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->samplingConfigShrink) {
            @$body['SamplingConfig'] = $request->samplingConfigShrink;
        }

        if (null !== $request->visibleScope) {
            @$body['VisibleScope'] = $request->visibleScope;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataQualityRuleTemplate',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataQualityRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataQualityRuleTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a data quality monitoring rule template.
     *
     * @param request - CreateDataQualityRuleTemplateRequest
     * @returns CreateDataQualityRuleTemplateResponse
     *
     * @param CreateDataQualityRuleTemplateRequest $request
     *
     * @return CreateDataQualityRuleTemplateResponse
     */
    public function createDataQualityRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataQualityRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * Adds a data source to the development environment or production environment of a workspace.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - CreateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataSourceResponse
     *
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionProperties) {
            @$query['ConnectionProperties'] = $request->connectionProperties;
        }

        if (null !== $request->connectionPropertiesMode) {
            @$query['ConnectionPropertiesMode'] = $request->connectionPropertiesMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a data source to the development environment or production environment of a workspace.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - CreateDataSourceRequest
     * @returns CreateDataSourceResponse
     *
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * Creates a rule for sharing a data source to other workspaces or RAM users.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to share a data source from Workspace A to Workspace B, you must have the permissions to share the data source in both workspaces. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - CreateDataSourceSharedRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDataSourceSharedRuleResponse
     *
     * @param CreateDataSourceSharedRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDataSourceSharedRuleResponse
     */
    public function createDataSourceSharedRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->envType) {
            @$query['EnvType'] = $request->envType;
        }

        if (null !== $request->sharedUser) {
            @$query['SharedUser'] = $request->sharedUser;
        }

        if (null !== $request->targetProjectId) {
            @$query['TargetProjectId'] = $request->targetProjectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSourceSharedRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDataSourceSharedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataSourceSharedRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a rule for sharing a data source to other workspaces or RAM users.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to share a data source from Workspace A to Workspace B, you must have the permissions to share the data source in both workspaces. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - CreateDataSourceSharedRuleRequest
     * @returns CreateDataSourceSharedRuleResponse
     *
     * @param CreateDataSourceSharedRuleRequest $request
     *
     * @return CreateDataSourceSharedRuleResponse
     */
    public function createDataSourceSharedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceSharedRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a process for deploying or undeploying an entity in DataStudio.
     *
     * @remarks
     * >  You cannot use this API operation to create a process for multiple entities at a time. If you specify multiple entities in a request, the system creates a process only for the first entity.
     *
     * @param tmpReq - CreateDeploymentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDeploymentResponse
     *
     * @param CreateDeploymentRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDeploymentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectIds) {
            $request->objectIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'ObjectIds', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->objectIdsShrink) {
            @$body['ObjectIds'] = $request->objectIdsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDeploymentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a process for deploying or undeploying an entity in DataStudio.
     *
     * @remarks
     * >  You cannot use this API operation to create a process for multiple entities at a time. If you specify multiple entities in a request, the system creates a process only for the first entity.
     *
     * @param request - CreateDeploymentRequest
     * @returns CreateDeploymentResponse
     *
     * @param CreateDeploymentRequest $request
     *
     * @return CreateDeploymentResponse
     */
    public function createDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentWithOptions($request, $runtime);
    }

    /**
     * Creates a user-defined function (UDF) in DataStudio. The information about the UDF is described by using FlowSpec.
     *
     * @remarks
     * >  You cannot use this API operation to create multiple UDFs at a time. If you specify multiple UDFs by using FlowSpec, the system creates only the first specified UDF.
     *
     * @param request - CreateFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFunctionResponse
     *
     * @param CreateFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a user-defined function (UDF) in DataStudio. The information about the UDF is described by using FlowSpec.
     *
     * @remarks
     * >  You cannot use this API operation to create multiple UDFs at a time. If you specify multiple UDFs by using FlowSpec, the system creates only the first specified UDF.
     *
     * @param request - CreateFunctionRequest
     * @returns CreateFunctionResponse
     *
     * @param CreateFunctionRequest $request
     *
     * @return CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionWithOptions($request, $runtime);
    }

    /**
     * Creates a network and associates the network with a general resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - CreateNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateNetworkResponse
     *
     * @param CreateNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateNetworkResponse
     */
    public function createNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$body['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNetwork',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNetworkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a network and associates the network with a general resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - CreateNetworkRequest
     * @returns CreateNetworkResponse
     *
     * @param CreateNetworkRequest $request
     *
     * @return CreateNetworkResponse
     */
    public function createNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkWithOptions($request, $runtime);
    }

    /**
     * Creates a node in DataStudio. The information about the node is described by using FlowSpec.
     *
     * @remarks
     * >  You cannot use this API operation to create multiple nodes at a time. If you specify multiple nodes by using FlowSpec, the system creates only the first specified node.
     *
     * @param request - CreateNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateNodeResponse
     *
     * @param CreateNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->containerId) {
            @$body['ContainerId'] = $request->containerId;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a node in DataStudio. The information about the node is described by using FlowSpec.
     *
     * @remarks
     * >  You cannot use this API operation to create multiple nodes at a time. If you specify multiple nodes by using FlowSpec, the system creates only the first specified node.
     *
     * @param request - CreateNodeRequest
     * @returns CreateNodeResponse
     *
     * @param CreateNodeRequest $request
     *
     * @return CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * Creates a workspace.
     *
     * @param tmpReq - CreateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aliyunResourceTags) {
            $request->aliyunResourceTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }

        $body = [];
        if (null !== $request->aliyunResourceGroupId) {
            @$body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }

        if (null !== $request->aliyunResourceTagsShrink) {
            @$body['AliyunResourceTags'] = $request->aliyunResourceTagsShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->devEnvironmentEnabled) {
            @$body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }

        if (null !== $request->devRoleDisabled) {
            @$body['DevRoleDisabled'] = $request->devRoleDisabled;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->paiTaskEnabled) {
            @$body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workspace.
     *
     * @param request - CreateProjectRequest
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * Adds a workspace member and assigns a workspace-level role to the member.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - CreateProjectMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateProjectMemberResponse
     *
     * @param CreateProjectMemberRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMemberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectMemberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }

        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['RoleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProjectMember',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a workspace member and assigns a workspace-level role to the member.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - CreateProjectMemberRequest
     * @returns CreateProjectMemberResponse
     *
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
     * >  You cannot use this API operation to create multiple file resources at a time. If you specify multiple file resources by using FlowSpec, the system creates only the first specified resource.
     *
     * @remarks
     * Private
     *
     * @param request - CreateResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * >  You cannot use this API operation to create multiple file resources at a time. If you specify multiple file resources by using FlowSpec, the system creates only the first specified resource.
     *
     * @remarks
     * Private
     *
     * @param request - CreateResourceRequest
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * Creates a serverless resource group.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  **Before you call this API operation, you must make sure that you have a good command of the billing details and [pricing](https://help.aliyun.com/document_detail/2680173.html) of serverless resource groups.
     *
     * @param tmpReq - CreateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aliyunResourceTags) {
            $request->aliyunResourceTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }

        $body = [];
        if (null !== $request->aliyunResourceGroupId) {
            @$body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }

        if (null !== $request->aliyunResourceTagsShrink) {
            @$body['AliyunResourceTags'] = $request->aliyunResourceTagsShrink;
        }

        if (null !== $request->autoRenewEnabled) {
            @$body['AutoRenewEnabled'] = $request->autoRenewEnabled;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->paymentDuration) {
            @$body['PaymentDuration'] = $request->paymentDuration;
        }

        if (null !== $request->paymentDurationUnit) {
            @$body['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$body['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$body['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a serverless resource group.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  **Before you call this API operation, you must make sure that you have a good command of the billing details and [pricing](https://help.aliyun.com/document_detail/2680173.html) of serverless resource groups.
     *
     * @param request - CreateResourceGroupRequest
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a route for a network.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - CreateRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRouteResponse
     *
     * @param CreateRouteRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRouteResponse
     */
    public function createRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidr) {
            @$body['DestinationCidr'] = $request->destinationCidr;
        }

        if (null !== $request->networkId) {
            @$body['NetworkId'] = $request->networkId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRoute',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a route for a network.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - CreateRouteRequest
     * @returns CreateRouteResponse
     *
     * @param CreateRouteRequest $request
     *
     * @return CreateRouteResponse
     */
    public function createRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteWithOptions($request, $runtime);
    }

    /**
     * Creates a workflow in a directory of DataStudio.
     *
     * @remarks
     * > You cannot use this API operation to create multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system creates only the first specified workflow. Other specified workflows and the nodes in the workflows are ignored. You can call the CreateNode operation to create a node.
     *
     * @param request - CreateWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWorkflowDefinitionResponse
     *
     * @param CreateWorkflowDefinitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workflow in a directory of DataStudio.
     *
     * @remarks
     * > You cannot use this API operation to create multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system creates only the first specified workflow. Other specified workflows and the nodes in the workflows are ignored. You can call the CreateNode operation to create a node.
     *
     * @param request - CreateWorkflowDefinitionRequest
     * @returns CreateWorkflowDefinitionResponse
     *
     * @param CreateWorkflowDefinitionRequest $request
     *
     * @return CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateWorkflowInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWorkflowInstancesResponse
     *
     * @param CreateWorkflowInstancesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateWorkflowInstancesResponse
     */
    public function createWorkflowInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkflowInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->defaultRunProperties) {
            $request->defaultRunPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->defaultRunProperties, 'DefaultRunProperties', 'json');
        }

        if (null !== $tmpReq->periods) {
            $request->periodsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->periods, 'Periods', 'json');
        }

        $body = [];
        if (null !== $request->autoStartEnabled) {
            @$body['AutoStartEnabled'] = $request->autoStartEnabled;
        }

        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->defaultRunPropertiesShrink) {
            @$body['DefaultRunProperties'] = $request->defaultRunPropertiesShrink;
        }

        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->periodsShrink) {
            @$body['Periods'] = $request->periodsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->taskParameters) {
            @$body['TaskParameters'] = $request->taskParameters;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        if (null !== $request->workflowParameters) {
            @$body['WorkflowParameters'] = $request->workflowParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkflowInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkflowInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateWorkflowInstancesRequest
     * @returns CreateWorkflowInstancesResponse
     *
     * @param CreateWorkflowInstancesRequest $request
     *
     * @return CreateWorkflowInstancesResponse
     */
    public function createWorkflowInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowInstancesWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom alert monitoring rule.
     *
     * @param request - DeleteAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAlertRuleResponse
     *
     * @param DeleteAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlertRuleResponse
     */
    public function deleteAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom alert monitoring rule.
     *
     * @param request - DeleteAlertRuleRequest
     * @returns DeleteAlertRuleResponse
     *
     * @param DeleteAlertRuleRequest $request
     *
     * @return DeleteAlertRuleResponse
     */
    public function deleteAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes an alert rule configured for a synchronization task.
     *
     * @param request - DeleteDIAlarmRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDIAlarmRuleResponse
     *
     * @param DeleteDIAlarmRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDIAlarmRuleResponse
     */
    public function deleteDIAlarmRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDIAlarmRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDIAlarmRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert rule configured for a synchronization task.
     *
     * @param request - DeleteDIAlarmRuleRequest
     * @returns DeleteDIAlarmRuleResponse
     *
     * @param DeleteDIAlarmRuleRequest $request
     *
     * @return DeleteDIAlarmRuleResponse
     */
    public function deleteDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a new-version synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDIJobResponse
     *
     * @param DeleteDIJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteDIJobResponse
     */
    public function deleteDIJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a new-version synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteDIJobRequest
     * @returns DeleteDIJobResponse
     *
     * @param DeleteDIJobRequest $request
     *
     * @return DeleteDIJobResponse
     */
    public function deleteDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDIJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - DeleteDataAssetTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataAssetTagResponse
     *
     * @param DeleteDataAssetTagRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDataAssetTagResponse
     */
    public function deleteDataAssetTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDataAssetTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->values) {
            $request->valuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }

        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->valuesShrink) {
            @$query['Values'] = $request->valuesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataAssetTag',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataAssetTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataAssetTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - DeleteDataAssetTagRequest
     * @returns DeleteDataAssetTagResponse
     *
     * @param DeleteDataAssetTagRequest $request
     *
     * @return DeleteDataAssetTagResponse
     */
    public function deleteDataAssetTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataAssetTagWithOptions($request, $runtime);
    }

    /**
     * Deletes a data quality monitoring task.
     *
     * @param request - DeleteDataQualityEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataQualityEvaluationTaskResponse
     *
     * @param DeleteDataQualityEvaluationTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteDataQualityEvaluationTaskResponse
     */
    public function deleteDataQualityEvaluationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataQualityEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataQualityEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataQualityEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a data quality monitoring task.
     *
     * @param request - DeleteDataQualityEvaluationTaskRequest
     * @returns DeleteDataQualityEvaluationTaskResponse
     *
     * @param DeleteDataQualityEvaluationTaskRequest $request
     *
     * @return DeleteDataQualityEvaluationTaskResponse
     */
    public function deleteDataQualityEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataQualityEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a data quality monitoring rule.
     *
     * @param request - DeleteDataQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataQualityRuleResponse
     *
     * @param DeleteDataQualityRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDataQualityRuleResponse
     */
    public function deleteDataQualityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataQualityRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataQualityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a data quality monitoring rule.
     *
     * @param request - DeleteDataQualityRuleRequest
     * @returns DeleteDataQualityRuleResponse
     *
     * @param DeleteDataQualityRuleRequest $request
     *
     * @return DeleteDataQualityRuleResponse
     */
    public function deleteDataQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataQualityRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a data quality monitoring rule template.
     *
     * @param request - DeleteDataQualityRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataQualityRuleTemplateResponse
     *
     * @param DeleteDataQualityRuleTemplateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteDataQualityRuleTemplateResponse
     */
    public function deleteDataQualityRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataQualityRuleTemplate',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataQualityRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataQualityRuleTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a data quality monitoring rule template.
     *
     * @param request - DeleteDataQualityRuleTemplateRequest
     * @returns DeleteDataQualityRuleTemplateResponse
     *
     * @param DeleteDataQualityRuleTemplateRequest $request
     *
     * @return DeleteDataQualityRuleTemplateResponse
     */
    public function deleteDataQualityRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataQualityRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * Removes a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all Dataworks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - DeleteDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all Dataworks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - DeleteDataSourceRequest
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a sharing rule of a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to delete a sharing rule of a data source from Workspace A to Workspace B, you must have the permissions to share the data source in Workspace A or Workspace B. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - DeleteDataSourceSharedRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataSourceSharedRuleResponse
     *
     * @param DeleteDataSourceSharedRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDataSourceSharedRuleResponse
     */
    public function deleteDataSourceSharedRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSourceSharedRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataSourceSharedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataSourceSharedRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a sharing rule of a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to delete a sharing rule of a data source from Workspace A to Workspace B, you must have the permissions to share the data source in Workspace A or Workspace B. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - DeleteDataSourceSharedRuleRequest
     * @returns DeleteDataSourceSharedRuleResponse
     *
     * @param DeleteDataSourceSharedRuleRequest $request
     *
     * @return DeleteDataSourceSharedRuleResponse
     */
    public function deleteDataSourceSharedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceSharedRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a user-defined function (UDF) in DataStudio.
     *
     * @remarks
     * >  A UDF that is deployed cannot be deleted. If you want to delete such a UDF, you must first undeploy the UDF.
     *
     * @param request - DeleteFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFunctionResponse
     *
     * @param DeleteFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a user-defined function (UDF) in DataStudio.
     *
     * @remarks
     * >  A UDF that is deployed cannot be deleted. If you want to delete such a UDF, you must first undeploy the UDF.
     *
     * @param request - DeleteFunctionRequest
     * @returns DeleteFunctionResponse
     *
     * @param DeleteFunctionRequest $request
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFunctionWithOptions($request, $runtime);
    }

    /**
     * Disassociates and deletes a network from a general resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteNetworkResponse
     *
     * @param DeleteNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetwork',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNetworkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates and deletes a network from a general resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteNetworkRequest
     * @returns DeleteNetworkResponse
     *
     * @param DeleteNetworkRequest $request
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkWithOptions($request, $runtime);
    }

    /**
     * Deletes a node from DataStudio.
     *
     * @remarks
     * >  A node that is deployed cannot be deleted. If you want to delete such a node, you must first undeploy the node.
     *
     * @param request - DeleteNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a node from DataStudio.
     *
     * @remarks
     * >  A node that is deployed cannot be deleted. If you want to delete such a node, you must first undeploy the node.
     *
     * @param request - DeleteNodeRequest
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     *
     * @return DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * Deletes a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteProjectRequest
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * Removes a workspace member and the workspace-level roles that are assigned to the member.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteProjectMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteProjectMemberResponse
     *
     * @param DeleteProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectMember',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProjectMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes a workspace member and the workspace-level roles that are assigned to the member.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteProjectMemberRequest
     * @returns DeleteProjectMemberResponse
     *
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
     * Deletes a file resource from DataStudio.
     *
     * @remarks
     * >  A file resource that is deployed cannot be deleted. If you want to delete such a file resource, you must first undeploy the file resource.
     *
     * @param request - DeleteResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteResourceResponse
     *
     * @param DeleteResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a file resource from DataStudio.
     *
     * @remarks
     * >  A file resource that is deployed cannot be deleted. If you want to delete such a file resource, you must first undeploy the file resource.
     *
     * @param request - DeleteResourceRequest
     * @returns DeleteResourceResponse
     *
     * @param DeleteResourceRequest $request
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a serverless resource group.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  **Before you call this API operation, you must make sure that you have a good command of the billing details and [pricing](https://help.aliyun.com/document_detail/2680173.html) of serverless resource groups.
     *
     * @param request - DeleteResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteResourceGroupResponse
     *
     * @param DeleteResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a serverless resource group.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  **Before you call this API operation, you must make sure that you have a good command of the billing details and [pricing](https://help.aliyun.com/document_detail/2680173.html) of serverless resource groups.
     *
     * @param request - DeleteResourceGroupRequest
     * @returns DeleteResourceGroupResponse
     *
     * @param DeleteResourceGroupRequest $request
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a route from a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRouteResponse
     *
     * @param DeleteRouteRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRouteResponse
     */
    public function deleteRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoute',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a route from a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteRouteRequest
     * @returns DeleteRouteResponse
     *
     * @param DeleteRouteRequest $request
     *
     * @return DeleteRouteResponse
     */
    public function deleteRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteWithOptions($request, $runtime);
    }

    /**
     * Deletes a task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTaskResponse
     *
     * @param DeleteTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectEnv) {
            @$query['ProjectEnv'] = $request->projectEnv;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteTaskRequest
     * @returns DeleteTaskResponse
     *
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
     * Deletes a workflow.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWorkflowResponse
     *
     * @param DeleteWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $body = [];
        if (null !== $request->clientUniqueCode) {
            @$body['ClientUniqueCode'] = $request->clientUniqueCode;
        }

        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkflow',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkflowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a workflow.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - DeleteWorkflowRequest
     * @returns DeleteWorkflowResponse
     *
     * @param DeleteWorkflowRequest $request
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowWithOptions($request, $runtime);
    }

    /**
     * Deletes a workflow from DataStudio.
     *
     * @remarks
     * >  A workflow that is deployed cannot be deleted. If you want to delete such a workflow, you must first undeploy the workflow.
     *
     * @param request - DeleteWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWorkflowDefinitionResponse
     *
     * @param DeleteWorkflowDefinitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a workflow from DataStudio.
     *
     * @remarks
     * >  A workflow that is deployed cannot be deleted. If you want to delete such a workflow, you must first undeploy the workflow.
     *
     * @param request - DeleteWorkflowDefinitionRequest
     * @returns DeleteWorkflowDefinitionResponse
     *
     * @param DeleteWorkflowDefinitionRequest $request
     *
     * @return DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * Disassociates monitoring rules from a monitor.
     *
     * @param tmpReq - DetachDataQualityRulesFromEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DetachDataQualityRulesFromEvaluationTaskResponse
     *
     * @param DetachDataQualityRulesFromEvaluationTaskRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return DetachDataQualityRulesFromEvaluationTaskResponse
     */
    public function detachDataQualityRulesFromEvaluationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachDataQualityRulesFromEvaluationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataQualityRuleIds) {
            $request->dataQualityRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataQualityRuleIds, 'DataQualityRuleIds', 'json');
        }

        $body = [];
        if (null !== $request->dataQualityEvaluationTaskId) {
            @$body['DataQualityEvaluationTaskId'] = $request->dataQualityEvaluationTaskId;
        }

        if (null !== $request->dataQualityRuleIdsShrink) {
            @$body['DataQualityRuleIds'] = $request->dataQualityRuleIdsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachDataQualityRulesFromEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachDataQualityRulesFromEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachDataQualityRulesFromEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates monitoring rules from a monitor.
     *
     * @param request - DetachDataQualityRulesFromEvaluationTaskRequest
     * @returns DetachDataQualityRulesFromEvaluationTaskResponse
     *
     * @param DetachDataQualityRulesFromEvaluationTaskRequest $request
     *
     * @return DetachDataQualityRulesFromEvaluationTaskResponse
     */
    public function detachDataQualityRulesFromEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDataQualityRulesFromEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Disassociates a resource group from a workspace.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  Your account must be assigned one of the following roles of the desired workspace:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - DissociateProjectFromResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DissociateProjectFromResourceGroupResponse
     *
     * @param DissociateProjectFromResourceGroupRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DissociateProjectFromResourceGroupResponse
     */
    public function dissociateProjectFromResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DissociateProjectFromResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DissociateProjectFromResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DissociateProjectFromResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates a resource group from a workspace.
     *
     * @remarks
     * 1.  You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     * 2.  Your account must be assigned one of the following roles of the desired workspace:
     * *   Tenant Owner, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - DissociateProjectFromResourceGroupRequest
     * @returns DissociateProjectFromResourceGroupResponse
     *
     * @param DissociateProjectFromResourceGroupRequest $request
     *
     * @return DissociateProjectFromResourceGroupResponse
     */
    public function dissociateProjectFromResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateProjectFromResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Executes a stage in a process.
     *
     * @remarks
     * >  The stages in a process are sequential. For more information, see the GetDeployment operation. Skipping or repeating a stage is not allowed.
     * >  The execution of a stage is asynchronous. The response of this operation indicates only whether a stage is triggered but does not indicate whether the execution of the stage is successful. You can call the GetDeployment operation to check whether the execution is successful.
     *
     * @param request - ExecDeploymentStageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ExecDeploymentStageResponse
     *
     * @param ExecDeploymentStageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ExecDeploymentStageResponse
     */
    public function execDeploymentStageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecDeploymentStage',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecDeploymentStageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecDeploymentStageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Executes a stage in a process.
     *
     * @remarks
     * >  The stages in a process are sequential. For more information, see the GetDeployment operation. Skipping or repeating a stage is not allowed.
     * >  The execution of a stage is asynchronous. The response of this operation indicates only whether a stage is triggered but does not indicate whether the execution of the stage is successful. You can call the GetDeployment operation to check whether the execution is successful.
     *
     * @param request - ExecDeploymentStageRequest
     * @returns ExecDeploymentStageResponse
     *
     * @param ExecDeploymentStageRequest $request
     *
     * @return ExecDeploymentStageResponse
     */
    public function execDeploymentStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execDeploymentStageWithOptions($request, $runtime);
    }

    /**
     * Create a temporary workflow instance based on configurations.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ExecuteAdhocWorkflowInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ExecuteAdhocWorkflowInstanceResponse
     *
     * @param ExecuteAdhocWorkflowInstanceRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteAdhocWorkflowInstanceResponse
     */
    public function executeAdhocWorkflowInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExecuteAdhocWorkflowInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tasks) {
            $request->tasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }

        $body = [];
        if (null !== $request->bizDate) {
            @$body['BizDate'] = $request->bizDate;
        }

        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->tasksShrink) {
            @$body['Tasks'] = $request->tasksShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAdhocWorkflowInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAdhocWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAdhocWorkflowInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a temporary workflow instance based on configurations.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ExecuteAdhocWorkflowInstanceRequest
     * @returns ExecuteAdhocWorkflowInstanceResponse
     *
     * @param ExecuteAdhocWorkflowInstanceRequest $request
     *
     * @return ExecuteAdhocWorkflowInstanceResponse
     */
    public function executeAdhocWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeAdhocWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries a list of custom alert monitoring rules.
     *
     * @param request - GetAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAlertRuleResponse
     *
     * @param GetAlertRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlertRuleResponse
     */
    public function getAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlertRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of custom alert monitoring rules.
     *
     * @param request - GetAlertRuleRequest
     * @returns GetAlertRuleResponse
     *
     * @param GetAlertRuleRequest $request
     *
     * @return GetAlertRuleResponse
     */
    public function getAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the result of asynchronously creating a workflow instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetCreateWorkflowInstancesResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCreateWorkflowInstancesResultResponse
     *
     * @param GetCreateWorkflowInstancesResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetCreateWorkflowInstancesResultResponse
     */
    public function getCreateWorkflowInstancesResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreateWorkflowInstancesResult',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCreateWorkflowInstancesResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCreateWorkflowInstancesResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the result of asynchronously creating a workflow instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetCreateWorkflowInstancesResultRequest
     * @returns GetCreateWorkflowInstancesResultResponse
     *
     * @param GetCreateWorkflowInstancesResultRequest $request
     *
     * @return GetCreateWorkflowInstancesResultResponse
     */
    public function getCreateWorkflowInstancesResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateWorkflowInstancesResultWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDIJobResponse
     *
     * @param GetDIJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetDIJobResponse
     */
    public function getDIJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDIJobRequest
     * @returns GetDIJobResponse
     *
     * @param GetDIJobRequest $request
     *
     * @return GetDIJobResponse
     */
    public function getDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDIJobWithOptions($request, $runtime);
    }

    /**
     * Obtains logs generated for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDIJobLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDIJobLogResponse
     *
     * @param GetDIJobLogRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDIJobLogResponse
     */
    public function getDIJobLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDIJobLog',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDIJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDIJobLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains logs generated for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDIJobLogRequest
     * @returns GetDIJobLogResponse
     *
     * @param GetDIJobLogRequest $request
     *
     * @return GetDIJobLogResponse
     */
    public function getDIJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDIJobLogWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a monitor.
     *
     * @param request - GetDataQualityEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDataQualityEvaluationTaskResponse
     *
     * @param GetDataQualityEvaluationTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDataQualityEvaluationTaskResponse
     */
    public function getDataQualityEvaluationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataQualityEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDataQualityEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataQualityEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a monitor.
     *
     * @param request - GetDataQualityEvaluationTaskRequest
     * @returns GetDataQualityEvaluationTaskResponse
     *
     * @param GetDataQualityEvaluationTaskRequest $request
     *
     * @return GetDataQualityEvaluationTaskResponse
     */
    public function getDataQualityEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataQualityEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a monitor instance.
     *
     * @param request - GetDataQualityEvaluationTaskInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDataQualityEvaluationTaskInstanceResponse
     *
     * @param GetDataQualityEvaluationTaskInstanceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetDataQualityEvaluationTaskInstanceResponse
     */
    public function getDataQualityEvaluationTaskInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataQualityEvaluationTaskInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDataQualityEvaluationTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataQualityEvaluationTaskInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a monitor instance.
     *
     * @param request - GetDataQualityEvaluationTaskInstanceRequest
     * @returns GetDataQualityEvaluationTaskInstanceResponse
     *
     * @param GetDataQualityEvaluationTaskInstanceRequest $request
     *
     * @return GetDataQualityEvaluationTaskInstanceResponse
     */
    public function getDataQualityEvaluationTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataQualityEvaluationTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a data quality monitoring rule.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDataQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDataQualityRuleResponse
     *
     * @param GetDataQualityRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDataQualityRuleResponse
     */
    public function getDataQualityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataQualityRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDataQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataQualityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a data quality monitoring rule.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDataQualityRuleRequest
     * @returns GetDataQualityRuleResponse
     *
     * @param GetDataQualityRuleRequest $request
     *
     * @return GetDataQualityRuleResponse
     */
    public function getDataQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataQualityRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a data quality monitoring rule template.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDataQualityRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDataQualityRuleTemplateResponse
     *
     * @param GetDataQualityRuleTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataQualityRuleTemplateResponse
     */
    public function getDataQualityRuleTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataQualityRuleTemplate',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDataQualityRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataQualityRuleTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a data quality monitoring rule template.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetDataQualityRuleTemplateRequest
     * @returns GetDataQualityRuleTemplateResponse
     *
     * @param GetDataQualityRuleTemplateRequest $request
     *
     * @return GetDataQualityRuleTemplateResponse
     */
    public function getDataQualityRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataQualityRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deployment, Development, Project Owner, and O\\&M
     *
     * @param request - GetDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDataSourceResponse
     *
     * @param GetDataSourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDataSourceResponse
     */
    public function getDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deployment, Development, Project Owner, and O\\&M
     *
     * @param request - GetDataSourceRequest
     * @returns GetDataSourceResponse
     *
     * @param GetDataSourceRequest $request
     *
     * @return GetDataSourceResponse
     */
    public function getDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a process for deploying or undeploying an entity.
     *
     * @param request - GetDeploymentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDeploymentResponse
     *
     * @param GetDeploymentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDeploymentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a process for deploying or undeploying an entity.
     *
     * @param request - GetDeploymentRequest
     * @returns GetDeploymentResponse
     *
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
     * Queries the information about a user-defined function (UDF) in DataStudio.
     *
     * @param request - GetFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetFunctionResponse
     *
     * @param GetFunctionRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetFunctionResponse
     */
    public function getFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a user-defined function (UDF) in DataStudio.
     *
     * @param request - GetFunctionRequest
     * @returns GetFunctionResponse
     *
     * @param GetFunctionRequest $request
     *
     * @return GetFunctionResponse
     */
    public function getFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFunctionWithOptions($request, $runtime);
    }

    /**
     * Queries the status information of an asynchronous task. After you call an asynchronous operation, an asynchronous task is generated. You can call the GetJobStatus operation to query the status of the asynchronous task.
     *
     * @param request - GetJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetJobStatusResponse
     *
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobStatus',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetJobStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status information of an asynchronous task. After you call an asynchronous operation, an asynchronous task is generated. You can call the GetJobStatus operation to query the status of the asynchronous task.
     *
     * @param request - GetJobStatusRequest
     * @returns GetJobStatusResponse
     *
     * @param GetJobStatusRequest $request
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNetworkResponse
     *
     * @param GetNetworkRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetNetworkResponse
     */
    public function getNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetwork',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNetworkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetNetworkRequest
     * @returns GetNetworkResponse
     *
     * @param GetNetworkRequest $request
     *
     * @return GetNetworkResponse
     */
    public function getNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a node in DataStudio.
     *
     * @param request - GetNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNodeResponse
     *
     * @param GetNodeRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a node in DataStudio.
     *
     * @param request - GetNodeRequest
     * @returns GetNodeResponse
     *
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
     * Queries the information about a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectRequest
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a member in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProjectMemberResponse
     *
     * @param GetProjectMemberRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProjectMember',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details about a member in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectMemberRequest
     * @returns GetProjectMemberResponse
     *
     * @param GetProjectMemberRequest $request
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectMemberWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a role in a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProjectRoleResponse
     *
     * @param GetProjectRoleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectRoleResponse
     */
    public function getProjectRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectRole',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProjectRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a role in a DataWorks workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetProjectRoleRequest
     * @returns GetProjectRoleResponse
     *
     * @param GetProjectRoleRequest $request
     *
     * @return GetProjectRoleResponse
     */
    public function getProjectRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectRoleWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a file resource.
     *
     * @param request - GetResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceResponse
     *
     * @param GetResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a file resource.
     *
     * @param request - GetResourceRequest
     * @returns GetResourceResponse
     *
     * @param GetResourceRequest $request
     *
     * @return GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a resource group based on its ID.
     *
     * @remarks
     * You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     *
     * @param request - GetResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceGroupResponse
     *
     * @param GetResourceGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a resource group based on its ID.
     *
     * @remarks
     * You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     *
     * @param request - GetResourceGroupRequest
     * @returns GetResourceGroupResponse
     *
     * @param GetResourceGroupRequest $request
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a route based on its ID.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRouteResponse
     *
     * @param GetRouteRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetRouteResponse
     */
    public function getRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRoute',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a route based on its ID.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetRouteRequest
     * @returns GetRouteResponse
     *
     * @param GetRouteRequest $request
     *
     * @return GetRouteResponse
     */
    public function getRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRouteWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a task.
     *
     * @param request - GetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a task.
     *
     * @param request - GetTaskRequest
     * @returns GetTaskResponse
     *
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
     * Queries the information about an instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetTaskInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTaskInstanceResponse
     *
     * @param GetTaskInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTaskInstanceResponse
     */
    public function getTaskInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetTaskInstanceRequest
     * @returns GetTaskInstanceResponse
     *
     * @param GetTaskInstanceRequest $request
     *
     * @return GetTaskInstanceResponse
     */
    public function getTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the run log generated during a specific run of an instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetTaskInstanceLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTaskInstanceLogResponse
     *
     * @param GetTaskInstanceLogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTaskInstanceLogResponse
     */
    public function getTaskInstanceLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskInstanceLog',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskInstanceLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the run log generated during a specific run of an instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetTaskInstanceLogRequest
     * @returns GetTaskInstanceLogResponse
     *
     * @param GetTaskInstanceLogRequest $request
     *
     * @return GetTaskInstanceLogResponse
     */
    public function getTaskInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceLogWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a workflow.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWorkflowResponse
     *
     * @param GetWorkflowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWorkflowResponse
     */
    public function getWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflow',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkflowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a workflow.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetWorkflowRequest
     * @returns GetWorkflowResponse
     *
     * @param GetWorkflowRequest $request
     *
     * @return GetWorkflowResponse
     */
    public function getWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a workflow.
     *
     * @param request - GetWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWorkflowDefinitionResponse
     *
     * @param GetWorkflowDefinitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a workflow.
     *
     * @param request - GetWorkflowDefinitionRequest
     * @returns GetWorkflowDefinitionResponse
     *
     * @param GetWorkflowDefinitionRequest $request
     *
     * @return GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a workflow instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetWorkflowInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWorkflowInstanceResponse
     *
     * @param GetWorkflowInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkflowInstanceResponse
     */
    public function getWorkflowInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkflowInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a workflow instance.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GetWorkflowInstanceRequest
     * @returns GetWorkflowInstanceResponse
     *
     * @param GetWorkflowInstanceRequest $request
     *
     * @return GetWorkflowInstanceResponse
     */
    public function getWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * Assigns roles to members in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - GrantMemberProjectRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GrantMemberProjectRolesResponse
     *
     * @param GrantMemberProjectRolesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GrantMemberProjectRolesResponse
     */
    public function grantMemberProjectRolesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GrantMemberProjectRolesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }

        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['RoleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantMemberProjectRoles',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GrantMemberProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GrantMemberProjectRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Assigns roles to members in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - GrantMemberProjectRolesRequest
     * @returns GrantMemberProjectRolesResponse
     *
     * @param GrantMemberProjectRolesRequest $request
     *
     * @return GrantMemberProjectRolesResponse
     */
    public function grantMemberProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantMemberProjectRolesWithOptions($request, $runtime);
    }

    /**
     * Imports a workflow and its child nodes that are specified by the FlowSpec field to DataStudio.
     *
     * @remarks
     * >
     * *   You cannot use this API operation to import multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system imports only the first specified workflow.
     * *   ImportWorkflowDefinition is an asynchronous operation. After you send a request, an asynchronous task is generated, and the system returns the ID of the asynchronous task. You can call the GetJobStatus operation to query the status of the asynchronous task.
     *
     * @param request - ImportWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ImportWorkflowDefinitionResponse
     *
     * @param ImportWorkflowDefinitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportWorkflowDefinitionResponse
     */
    public function importWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports a workflow and its child nodes that are specified by the FlowSpec field to DataStudio.
     *
     * @remarks
     * >
     * *   You cannot use this API operation to import multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system imports only the first specified workflow.
     * *   ImportWorkflowDefinition is an asynchronous operation. After you send a request, an asynchronous task is generated, and the system returns the ID of the asynchronous task. You can call the GetJobStatus operation to query the status of the asynchronous task.
     *
     * @param request - ImportWorkflowDefinitionRequest
     * @returns ImportWorkflowDefinitionResponse
     *
     * @param ImportWorkflowDefinitionRequest $request
     *
     * @return ImportWorkflowDefinitionResponse
     */
    public function importWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of custom monitoring alert rule by page.
     *
     * @param tmpReq - ListAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAlertRulesResponse
     *
     * @param ListAlertRulesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlertRulesResponse
     */
    public function listAlertRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->receiver) {
            @$query['Receiver'] = $request->receiver;
        }

        if (null !== $request->taskIdsShrink) {
            @$query['TaskIds'] = $request->taskIdsShrink;
        }

        if (null !== $request->typesShrink) {
            @$query['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlertRules',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of custom monitoring alert rule by page.
     *
     * @param request - ListAlertRulesRequest
     * @returns ListAlertRulesResponse
     *
     * @param ListAlertRulesRequest $request
     *
     * @return ListAlertRulesResponse
     */
    public function listAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertRulesWithOptions($request, $runtime);
    }

    /**
     * Views alert rules configured for a synchronization task.
     *
     * @param request - ListDIAlarmRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDIAlarmRulesResponse
     *
     * @param ListDIAlarmRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDIAlarmRulesResponse
     */
    public function listDIAlarmRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIAlarmRules',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDIAlarmRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDIAlarmRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Views alert rules configured for a synchronization task.
     *
     * @param request - ListDIAlarmRulesRequest
     * @returns ListDIAlarmRulesResponse
     *
     * @param ListDIAlarmRulesRequest $request
     *
     * @return ListDIAlarmRulesResponse
     */
    public function listDIAlarmRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIAlarmRulesWithOptions($request, $runtime);
    }

    /**
     * Queries events for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDIJobEventsResponse
     *
     * @param ListDIJobEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDIJobEventsResponse
     */
    public function listDIJobEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIJobEvents',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDIJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDIJobEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries events for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobEventsRequest
     * @returns ListDIJobEventsResponse
     *
     * @param ListDIJobEventsRequest $request
     *
     * @return ListDIJobEventsResponse
     */
    public function listDIJobEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobEventsWithOptions($request, $runtime);
    }

    /**
     * Queries metrics for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListDIJobMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDIJobMetricsResponse
     *
     * @param ListDIJobMetricsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListDIJobMetricsResponse
     */
    public function listDIJobMetricsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDIJobMetricsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metricName) {
            $request->metricNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metricName, 'MetricName', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIJobMetrics',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDIJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDIJobMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries metrics for a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobMetricsRequest
     * @returns ListDIJobMetricsResponse
     *
     * @param ListDIJobMetricsRequest $request
     *
     * @return ListDIJobMetricsResponse
     */
    public function listDIJobMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobMetricsWithOptions($request, $runtime);
    }

    /**
     * Queries the running information about a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobRunDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDIJobRunDetailsResponse
     *
     * @param ListDIJobRunDetailsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDIJobRunDetailsResponse
     */
    public function listDIJobRunDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIJobRunDetails',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDIJobRunDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDIJobRunDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the running information about a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobRunDetailsRequest
     * @returns ListDIJobRunDetailsResponse
     *
     * @param ListDIJobRunDetailsRequest $request
     *
     * @return ListDIJobRunDetailsResponse
     */
    public function listDIJobRunDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobRunDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of synchronization tasks.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDIJobsResponse
     *
     * @param ListDIJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDIJobsResponse
     */
    public function listDIJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIJobs',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDIJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDIJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of synchronization tasks.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDIJobsRequest
     * @returns ListDIJobsResponse
     *
     * @param ListDIJobsRequest $request
     *
     * @return ListDIJobsResponse
     */
    public function listDIJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - ListDataAssetTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataAssetTagsResponse
     *
     * @param ListDataAssetTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDataAssetTagsResponse
     */
    public function listDataAssetTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataAssetTags',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataAssetTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataAssetTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of tags.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - ListDataAssetTagsRequest
     * @returns ListDataAssetTagsResponse
     *
     * @param ListDataAssetTagsRequest $request
     *
     * @return ListDataAssetTagsResponse
     */
    public function listDataAssetTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataAssetTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about DataWorks data assets to which tags are added by page.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - ListDataAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataAssetsResponse
     *
     * @param ListDataAssetsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataAssetsResponse
     */
    public function listDataAssetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataAssetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataAssetIds) {
            $request->dataAssetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataAssetIds, 'DataAssetIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataAssets',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about DataWorks data assets to which tags are added by page.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - ListDataAssetsRequest
     * @returns ListDataAssetsResponse
     *
     * @param ListDataAssetsRequest $request
     *
     * @return ListDataAssetsResponse
     */
    public function listDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataAssetsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances generated by a data quality monitoring task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityEvaluationTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataQualityEvaluationTaskInstancesResponse
     *
     * @param ListDataQualityEvaluationTaskInstancesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListDataQualityEvaluationTaskInstancesResponse
     */
    public function listDataQualityEvaluationTaskInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataQualityEvaluationTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataQualityEvaluationTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataQualityEvaluationTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of instances generated by a data quality monitoring task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityEvaluationTaskInstancesRequest
     * @returns ListDataQualityEvaluationTaskInstancesResponse
     *
     * @param ListDataQualityEvaluationTaskInstancesRequest $request
     *
     * @return ListDataQualityEvaluationTaskInstancesResponse
     */
    public function listDataQualityEvaluationTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityEvaluationTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data quality monitoring tasks by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityEvaluationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataQualityEvaluationTasksResponse
     *
     * @param ListDataQualityEvaluationTasksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListDataQualityEvaluationTasksResponse
     */
    public function listDataQualityEvaluationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataQualityEvaluationTasks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataQualityEvaluationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataQualityEvaluationTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of data quality monitoring tasks by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityEvaluationTasksRequest
     * @returns ListDataQualityEvaluationTasksResponse
     *
     * @param ListDataQualityEvaluationTasksRequest $request
     *
     * @return ListDataQualityEvaluationTasksResponse
     */
    public function listDataQualityEvaluationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityEvaluationTasksWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataQualityResultsResponse
     *
     * @param ListDataQualityResultsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataQualityResultsResponse
     */
    public function listDataQualityResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataQualityResults',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataQualityResultsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataQualityResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityResultsRequest
     * @returns ListDataQualityResultsResponse
     *
     * @param ListDataQualityResultsRequest $request
     *
     * @return ListDataQualityResultsResponse
     */
    public function listDataQualityResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityResultsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data quality monitoring rule templates.
     *
     * @param request - ListDataQualityRuleTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataQualityRuleTemplatesResponse
     *
     * @param ListDataQualityRuleTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDataQualityRuleTemplatesResponse
     */
    public function listDataQualityRuleTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataQualityRuleTemplates',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataQualityRuleTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataQualityRuleTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of data quality monitoring rule templates.
     *
     * @param request - ListDataQualityRuleTemplatesRequest
     * @returns ListDataQualityRuleTemplatesResponse
     *
     * @param ListDataQualityRuleTemplatesRequest $request
     *
     * @return ListDataQualityRuleTemplatesResponse
     */
    public function listDataQualityRuleTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityRuleTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data quality monitoring rules by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataQualityRulesResponse
     *
     * @param ListDataQualityRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDataQualityRulesResponse
     */
    public function listDataQualityRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataQualityRules',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataQualityRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataQualityRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of data quality monitoring rules by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDataQualityRulesRequest
     * @returns ListDataQualityRulesResponse
     *
     * @param ListDataQualityRulesRequest $request
     *
     * @return ListDataQualityRulesResponse
     */
    public function listDataQualityRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of sharing rules of a data source.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to query the sharing rules of a data source that is associated with Workspace A, you must have the permissions to share the data source in Workspace A. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - ListDataSourceSharedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataSourceSharedRulesResponse
     *
     * @param ListDataSourceSharedRulesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataSourceSharedRulesResponse
     */
    public function listDataSourceSharedRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceSharedRules',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataSourceSharedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataSourceSharedRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of sharing rules of a data source.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  If you want to query the sharing rules of a data source that is associated with Workspace A, you must have the permissions to share the data source in Workspace A. You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, and Workspace Owner
     *
     * @param request - ListDataSourceSharedRulesRequest
     * @returns ListDataSourceSharedRulesResponse
     *
     * @param ListDataSourceSharedRulesRequest $request
     *
     * @return ListDataSourceSharedRulesResponse
     */
    public function listDataSourceSharedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceSharedRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data sources based on the business information of data sources.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deploy, Develop, Visitor, Workspace Owner, O\\&M, Model Designer, Security Administrator, Data Analyst, OpenPlatform Administrator, and Data Governance Administrator
     *
     * @param tmpReq - ListDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSources',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of data sources based on the business information of data sources.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deploy, Develop, Visitor, Workspace Owner, O\\&M, Model Designer, Security Administrator, Data Analyst, OpenPlatform Administrator, and Data Governance Administrator
     *
     * @param request - ListDataSourcesRequest
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of processes that are used to deploy or undeploy entities in DataStudio. You can also specify filter conditions to query specific processes.
     *
     * @param request - ListDeploymentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployments',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDeploymentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of processes that are used to deploy or undeploy entities in DataStudio. You can also specify filter conditions to query specific processes.
     *
     * @param request - ListDeploymentsRequest
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of descendant instances of an instance by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDownstreamTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDownstreamTaskInstancesResponse
     *
     * @param ListDownstreamTaskInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDownstreamTaskInstancesResponse
     */
    public function listDownstreamTaskInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDownstreamTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDownstreamTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDownstreamTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of descendant instances of an instance by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListDownstreamTaskInstancesRequest
     * @returns ListDownstreamTaskInstancesResponse
     *
     * @param ListDownstreamTaskInstancesRequest $request
     *
     * @return ListDownstreamTaskInstancesResponse
     */
    public function listDownstreamTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownstreamTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of descendant tasks of a task by page.
     *
     * @param request - ListDownstreamTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDownstreamTasksResponse
     *
     * @param ListDownstreamTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDownstreamTasksResponse
     */
    public function listDownstreamTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDownstreamTasks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDownstreamTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDownstreamTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of descendant tasks of a task by page.
     *
     * @param request - ListDownstreamTasksRequest
     * @returns ListDownstreamTasksResponse
     *
     * @param ListDownstreamTasksRequest $request
     *
     * @return ListDownstreamTasksResponse
     */
    public function listDownstreamTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownstreamTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of user-defined functions (UDFs) in DataStudio. You can also specify filter conditions to query specific UDFs.
     *
     * @param request - ListFunctionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListFunctionsResponse
     *
     * @param ListFunctionsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
     */
    public function listFunctionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFunctionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of user-defined functions (UDFs) in DataStudio. You can also specify filter conditions to query specific UDFs.
     *
     * @param request - ListFunctionsRequest
     * @returns ListFunctionsResponse
     *
     * @param ListFunctionsRequest $request
     *
     * @return ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of network resources of a serverless resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListNetworksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNetworksResponse
     *
     * @param ListNetworksRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListNetworksResponse
     */
    public function listNetworksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of network resources of a serverless resource group.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListNetworksRequest
     * @returns ListNetworksResponse
     *
     * @param ListNetworksRequest $request
     *
     * @return ListNetworksResponse
     */
    public function listNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of descendant nodes of a node in DataStudio.
     *
     * @param request - ListNodeDependenciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNodeDependenciesResponse
     *
     * @param ListNodeDependenciesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListNodeDependenciesResponse
     */
    public function listNodeDependenciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeDependencies',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodeDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodeDependenciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of descendant nodes of a node in DataStudio.
     *
     * @param request - ListNodeDependenciesRequest
     * @returns ListNodeDependenciesResponse
     *
     * @param ListNodeDependenciesRequest $request
     *
     * @return ListNodeDependenciesResponse
     */
    public function listNodeDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeDependenciesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of nodes in DataStudio. You can also specify filter conditions to query specific nodes.
     *
     * @param request - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of nodes in DataStudio. You can also specify filter conditions to query specific nodes.
     *
     * @param request - ListNodesRequest
     * @returns ListNodesResponse
     *
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
     * Queries details about members in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListProjectMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProjectMembersResponse
     *
     * @param ListProjectMembersRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }

        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['RoleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->userIdsShrink) {
            @$body['UserIds'] = $request->userIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjectMembers',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries details about members in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListProjectMembersRequest
     * @returns ListProjectMembersResponse
     *
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
     * Queries the information about roles in a DataWorks workspace by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListProjectRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProjectRolesResponse
     *
     * @param ListProjectRolesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRolesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectRolesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->codes) {
            $request->codesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->codes, 'Codes', 'json');
        }

        if (null !== $tmpReq->names) {
            $request->namesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->names, 'Names', 'json');
        }

        $body = [];
        if (null !== $request->codesShrink) {
            @$body['Codes'] = $request->codesShrink;
        }

        if (null !== $request->namesShrink) {
            @$body['Names'] = $request->namesShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjectRoles',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about roles in a DataWorks workspace by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListProjectRolesRequest
     * @returns ListProjectRolesResponse
     *
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
     * Queries a list of DataWorks workspaces of the tenant to which your account belongs.
     *
     * @param tmpReq - ListProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aliyunResourceTags) {
            $request->aliyunResourceTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }

        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        if (null !== $tmpReq->names) {
            $request->namesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->names, 'Names', 'json');
        }

        $body = [];
        if (null !== $request->aliyunResourceGroupId) {
            @$body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }

        if (null !== $request->aliyunResourceTagsShrink) {
            @$body['AliyunResourceTags'] = $request->aliyunResourceTagsShrink;
        }

        if (null !== $request->devEnvironmentEnabled) {
            @$body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }

        if (null !== $request->devRoleDisabled) {
            @$body['DevRoleDisabled'] = $request->devRoleDisabled;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->namesShrink) {
            @$body['Names'] = $request->namesShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paiTaskEnabled) {
            @$body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of DataWorks workspaces of the tenant to which your account belongs.
     *
     * @param request - ListProjectsRequest
     * @returns ListProjectsResponse
     *
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
     * Queries a list of resource groups.
     *
     * @param tmpReq - ListResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResourceGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aliyunResourceTags) {
            $request->aliyunResourceTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }

        if (null !== $tmpReq->resourceGroupTypes) {
            $request->resourceGroupTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupTypes, 'ResourceGroupTypes', 'json');
        }

        if (null !== $tmpReq->statuses) {
            $request->statusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroups',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of resource groups.
     *
     * @param request - ListResourceGroupsRequest
     * @returns ListResourceGroupsResponse
     *
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
     * Queries a list of file resources in DataStudio. You can also specify filter conditions to query specific file resources.
     *
     * @param request - ListResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of file resources in DataStudio. You can also specify filter conditions to query specific file resources.
     *
     * @param request - ListResourcesRequest
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of routes of a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRoutesResponse
     *
     * @param ListRoutesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListRoutesResponse
     */
    public function listRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoutes',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRoutesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of routes of a network resource.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListRoutesRequest
     * @returns ListRoutesResponse
     *
     * @param ListRoutesRequest $request
     *
     * @return ListRoutesResponse
     */
    public function listRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of operation logs of an instance by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     * You can call this operation to query only the operation logs generated within the previous 31 days.
     *
     * @param request - ListTaskInstanceOperationLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTaskInstanceOperationLogsResponse
     *
     * @param ListTaskInstanceOperationLogsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTaskInstanceOperationLogsResponse
     */
    public function listTaskInstanceOperationLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskInstanceOperationLogs',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTaskInstanceOperationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTaskInstanceOperationLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of operation logs of an instance by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     * You can call this operation to query only the operation logs generated within the previous 31 days.
     *
     * @param request - ListTaskInstanceOperationLogsRequest
     * @returns ListTaskInstanceOperationLogsResponse
     *
     * @param ListTaskInstanceOperationLogsRequest $request
     *
     * @return ListTaskInstanceOperationLogsResponse
     */
    public function listTaskInstanceOperationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskInstanceOperationLogsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances. You can also specify filter conditions to query specific instances.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTaskInstancesResponse
     *
     * @param ListTaskInstancesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $body = [];
        if (null !== $request->bizdate) {
            @$body['Bizdate'] = $request->bizdate;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectEnv) {
            @$body['ProjectEnv'] = $request->projectEnv;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->runtimeResource) {
            @$body['RuntimeResource'] = $request->runtimeResource;
        }

        if (null !== $request->sortBy) {
            @$body['SortBy'] = $request->sortBy;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskIdsShrink) {
            @$body['TaskIds'] = $request->taskIdsShrink;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->triggerRecurrence) {
            @$body['TriggerRecurrence'] = $request->triggerRecurrence;
        }

        if (null !== $request->triggerType) {
            @$body['TriggerType'] = $request->triggerType;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        if (null !== $request->workflowInstanceId) {
            @$body['WorkflowInstanceId'] = $request->workflowInstanceId;
        }

        if (null !== $request->workflowInstanceType) {
            @$body['WorkflowInstanceType'] = $request->workflowInstanceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of instances. You can also specify filter conditions to query specific instances.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListTaskInstancesRequest
     * @returns ListTaskInstancesResponse
     *
     * @param ListTaskInstancesRequest $request
     *
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of operation logs of a task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     * You can call this operation to query only the operation logs generated within the previous 31 days.
     *
     * @param request - ListTaskOperationLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTaskOperationLogsResponse
     *
     * @param ListTaskOperationLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTaskOperationLogsResponse
     */
    public function listTaskOperationLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskOperationLogs',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTaskOperationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTaskOperationLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of operation logs of a task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     * You can call this operation to query only the operation logs generated within the previous 31 days.
     *
     * @param request - ListTaskOperationLogsRequest
     * @returns ListTaskOperationLogsResponse
     *
     * @param ListTaskOperationLogsRequest $request
     *
     * @return ListTaskOperationLogsResponse
     */
    public function listTaskOperationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskOperationLogsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tasks by page. You can also specify filter conditions to query tasks.
     *
     * @param tmpReq - ListTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectEnv) {
            @$body['ProjectEnv'] = $request->projectEnv;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->runtimeResource) {
            @$body['RuntimeResource'] = $request->runtimeResource;
        }

        if (null !== $request->sortBy) {
            @$body['SortBy'] = $request->sortBy;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->triggerRecurrence) {
            @$body['TriggerRecurrence'] = $request->triggerRecurrence;
        }

        if (null !== $request->triggerType) {
            @$body['TriggerType'] = $request->triggerType;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of tasks by page. You can also specify filter conditions to query tasks.
     *
     * @param request - ListTasksRequest
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ancestor instances of an instance by page.
     *
     * @param request - ListUpstreamTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUpstreamTaskInstancesResponse
     *
     * @param ListUpstreamTaskInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListUpstreamTaskInstancesResponse
     */
    public function listUpstreamTaskInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUpstreamTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUpstreamTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUpstreamTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of ancestor instances of an instance by page.
     *
     * @param request - ListUpstreamTaskInstancesRequest
     * @returns ListUpstreamTaskInstancesResponse
     *
     * @param ListUpstreamTaskInstancesRequest $request
     *
     * @return ListUpstreamTaskInstancesResponse
     */
    public function listUpstreamTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ancestor tasks of a task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListUpstreamTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUpstreamTasksResponse
     *
     * @param ListUpstreamTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUpstreamTasksResponse
     */
    public function listUpstreamTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUpstreamTasks',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUpstreamTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUpstreamTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of ancestor tasks of a task by page.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListUpstreamTasksRequest
     * @returns ListUpstreamTasksResponse
     *
     * @param ListUpstreamTasksRequest $request
     *
     * @return ListUpstreamTasksResponse
     */
    public function listUpstreamTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of workflows in DataStudio. You can also specify filter conditions to query specific workflows.
     *
     * @param request - ListWorkflowDefinitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWorkflowDefinitionsResponse
     *
     * @param ListWorkflowDefinitionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowDefinitions',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkflowDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkflowDefinitionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of workflows in DataStudio. You can also specify filter conditions to query specific workflows.
     *
     * @param request - ListWorkflowDefinitionsRequest
     * @returns ListWorkflowDefinitionsResponse
     *
     * @param ListWorkflowDefinitionsRequest $request
     *
     * @return ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowDefinitionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of workflow instances by page. You can also specify filter conditions to query workflow instances.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListWorkflowInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWorkflowInstancesResponse
     *
     * @param ListWorkflowInstancesRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkflowInstancesResponse
     */
    public function listWorkflowInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkflowInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->bizDate) {
            @$body['BizDate'] = $request->bizDate;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$body['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkflowInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of workflow instances by page. You can also specify filter conditions to query workflow instances.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListWorkflowInstancesRequest
     * @returns ListWorkflowInstancesResponse
     *
     * @param ListWorkflowInstancesRequest $request
     *
     * @return ListWorkflowInstancesResponse
     */
    public function listWorkflowInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of workflows by page. You can also specify filter conditions to query workflows.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ListWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWorkflowsResponse
     *
     * @param ListWorkflowsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflowsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkflowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$body['SortBy'] = $request->sortBy;
        }

        if (null !== $request->triggerType) {
            @$body['TriggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflows',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkflowsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of workflows by page. You can also specify filter conditions to query workflows.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ListWorkflowsRequest
     * @returns ListWorkflowsResponse
     *
     * @param ListWorkflowsRequest $request
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowsWithOptions($request, $runtime);
    }

    /**
     * Moves a user-defined function (UDF) to a path in DataStudio.
     *
     * @param request - MoveFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns MoveFunctionResponse
     *
     * @param MoveFunctionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MoveFunctionResponse
     */
    public function moveFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MoveFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MoveFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a user-defined function (UDF) to a path in DataStudio.
     *
     * @param request - MoveFunctionRequest
     * @returns MoveFunctionResponse
     *
     * @param MoveFunctionRequest $request
     *
     * @return MoveFunctionResponse
     */
    public function moveFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveFunctionWithOptions($request, $runtime);
    }

    /**
     * Moves a node to a path in DataStudio.
     *
     * @param request - MoveNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns MoveNodeResponse
     *
     * @param MoveNodeRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MoveNodeResponse
     */
    public function moveNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MoveNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MoveNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a node to a path in DataStudio.
     *
     * @param request - MoveNodeRequest
     * @returns MoveNodeResponse
     *
     * @param MoveNodeRequest $request
     *
     * @return MoveNodeResponse
     */
    public function moveNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveNodeWithOptions($request, $runtime);
    }

    /**
     * Moves a file resource to a path in DataStudio.
     *
     * @param request - MoveResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns MoveResourceResponse
     *
     * @param MoveResourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MoveResourceResponse
     */
    public function moveResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MoveResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MoveResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a file resource to a path in DataStudio.
     *
     * @param request - MoveResourceRequest
     * @returns MoveResourceResponse
     *
     * @param MoveResourceRequest $request
     *
     * @return MoveResourceResponse
     */
    public function moveResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceWithOptions($request, $runtime);
    }

    /**
     * Moves a workflow to a path in DataStudio.
     *
     * @param request - MoveWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns MoveWorkflowDefinitionResponse
     *
     * @param MoveWorkflowDefinitionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MoveWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MoveWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a workflow to a path in DataStudio.
     *
     * @param request - MoveWorkflowDefinitionRequest
     * @returns MoveWorkflowDefinitionResponse
     *
     * @param MoveWorkflowDefinitionRequest $request
     *
     * @return MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * Removes multiple upstream dependencies of an instance at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - RemoveTaskInstanceDependenciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveTaskInstanceDependenciesResponse
     *
     * @param RemoveTaskInstanceDependenciesRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveTaskInstanceDependenciesResponse
     */
    public function removeTaskInstanceDependenciesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveTaskInstanceDependenciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->upstreamTaskInstanceIds) {
            $request->upstreamTaskInstanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->upstreamTaskInstanceIds, 'UpstreamTaskInstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->upstreamTaskInstanceIdsShrink) {
            @$body['UpstreamTaskInstanceIds'] = $request->upstreamTaskInstanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveTaskInstanceDependencies',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveTaskInstanceDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveTaskInstanceDependenciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes multiple upstream dependencies of an instance at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - RemoveTaskInstanceDependenciesRequest
     * @returns RemoveTaskInstanceDependenciesResponse
     *
     * @param RemoveTaskInstanceDependenciesRequest $request
     *
     * @return RemoveTaskInstanceDependenciesResponse
     */
    public function removeTaskInstanceDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTaskInstanceDependenciesWithOptions($request, $runtime);
    }

    /**
     * Renames a user-defined function (UDF) in DataStudio.
     *
     * @param request - RenameFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenameFunctionResponse
     *
     * @param RenameFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RenameFunctionResponse
     */
    public function renameFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenameFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenameFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renames a user-defined function (UDF) in DataStudio.
     *
     * @param request - RenameFunctionRequest
     * @returns RenameFunctionResponse
     *
     * @param RenameFunctionRequest $request
     *
     * @return RenameFunctionResponse
     */
    public function renameFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameFunctionWithOptions($request, $runtime);
    }

    /**
     * Renames a node in DataStudio.
     *
     * @param request - RenameNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenameNodeResponse
     *
     * @param RenameNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RenameNodeResponse
     */
    public function renameNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenameNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenameNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renames a node in DataStudio.
     *
     * @param request - RenameNodeRequest
     * @returns RenameNodeResponse
     *
     * @param RenameNodeRequest $request
     *
     * @return RenameNodeResponse
     */
    public function renameNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameNodeWithOptions($request, $runtime);
    }

    /**
     * Renames a file resource in DataStudio.
     *
     * @param request - RenameResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenameResourceResponse
     *
     * @param RenameResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RenameResourceResponse
     */
    public function renameResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenameResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenameResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renames a file resource in DataStudio.
     *
     * @param request - RenameResourceRequest
     * @returns RenameResourceResponse
     *
     * @param RenameResourceRequest $request
     *
     * @return RenameResourceResponse
     */
    public function renameResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameResourceWithOptions($request, $runtime);
    }

    /**
     * Renames a workflow in DataStudio.
     *
     * @param request - RenameWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenameWorkflowDefinitionResponse
     *
     * @param RenameWorkflowDefinitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenameWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenameWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenameWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renames a workflow in DataStudio.
     *
     * @param request - RenameWorkflowDefinitionRequest
     * @returns RenameWorkflowDefinitionResponse
     *
     * @param RenameWorkflowDefinitionRequest $request
     *
     * @return RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * Reruns multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - RerunTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RerunTaskInstancesResponse
     *
     * @param RerunTaskInstancesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return RerunTaskInstancesResponse
     */
    public function rerunTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RerunTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RerunTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RerunTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RerunTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Reruns multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - RerunTaskInstancesRequest
     * @returns RerunTaskInstancesResponse
     *
     * @param RerunTaskInstancesRequest $request
     *
     * @return RerunTaskInstancesResponse
     */
    public function rerunTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Resumes multiple suspended instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - ResumeTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResumeTaskInstancesResponse
     *
     * @param ResumeTaskInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ResumeTaskInstancesResponse
     */
    public function resumeTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ResumeTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resumes multiple suspended instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - ResumeTaskInstancesRequest
     * @returns ResumeTaskInstancesResponse
     *
     * @param ResumeTaskInstancesRequest $request
     *
     * @return ResumeTaskInstancesResponse
     */
    public function resumeTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Revokes roles that are assigned to a member in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - RevokeMemberProjectRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevokeMemberProjectRolesResponse
     *
     * @param RevokeMemberProjectRolesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeMemberProjectRolesResponse
     */
    public function revokeMemberProjectRolesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RevokeMemberProjectRolesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleCodes) {
            $request->roleCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }

        $body = [];
        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->roleCodesShrink) {
            @$body['RoleCodes'] = $request->roleCodesShrink;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeMemberProjectRoles',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeMemberProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeMemberProjectRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Revokes roles that are assigned to a member in a workspace.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - RevokeMemberProjectRolesRequest
     * @returns RevokeMemberProjectRolesResponse
     *
     * @param RevokeMemberProjectRolesRequest $request
     *
     * @return RevokeMemberProjectRolesResponse
     */
    public function revokeMemberProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeMemberProjectRolesWithOptions($request, $runtime);
    }

    /**
     * Sets the statuses of multiple instances to successful at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - SetSuccessTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetSuccessTaskInstancesResponse
     *
     * @param SetSuccessTaskInstancesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetSuccessTaskInstancesResponse
     */
    public function setSuccessTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetSuccessTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetSuccessTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetSuccessTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetSuccessTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the statuses of multiple instances to successful at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - SetSuccessTaskInstancesRequest
     * @returns SetSuccessTaskInstancesResponse
     *
     * @param SetSuccessTaskInstancesRequest $request
     *
     * @return SetSuccessTaskInstancesResponse
     */
    public function setSuccessTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Starts a new-version synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - StartDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartDIJobResponse
     *
     * @param StartDIJobRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return StartDIJobResponse
     */
    public function startDIJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartDIJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->realtimeStartSettings) {
            $request->realtimeStartSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->realtimeStartSettings, 'RealtimeStartSettings', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a new-version synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StartDIJobRequest
     * @returns StartDIJobResponse
     *
     * @param StartDIJobRequest $request
     *
     * @return StartDIJobResponse
     */
    public function startDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDIJobWithOptions($request, $runtime);
    }

    /**
     * Starts multiple workflow instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - StartWorkflowInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartWorkflowInstancesResponse
     *
     * @param StartWorkflowInstancesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return StartWorkflowInstancesResponse
     */
    public function startWorkflowInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartWorkflowInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartWorkflowInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartWorkflowInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts multiple workflow instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StartWorkflowInstancesRequest
     * @returns StartWorkflowInstancesResponse
     *
     * @param StartWorkflowInstancesRequest $request
     *
     * @return StartWorkflowInstancesResponse
     */
    public function startWorkflowInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowInstancesWithOptions($request, $runtime);
    }

    /**
     * Stops a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StopDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopDIJobResponse
     *
     * @param StopDIJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopDIJobResponse
     */
    public function stopDIJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StopDIJobRequest
     * @returns StopDIJobResponse
     *
     * @param StopDIJobRequest $request
     *
     * @return StopDIJobResponse
     */
    public function stopDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDIJobWithOptions($request, $runtime);
    }

    /**
     * Stops multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - StopTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopTaskInstancesResponse
     *
     * @param StopTaskInstancesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return StopTaskInstancesResponse
     */
    public function stopTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StopTaskInstancesRequest
     * @returns StopTaskInstancesResponse
     *
     * @param StopTaskInstancesRequest $request
     *
     * @return StopTaskInstancesResponse
     */
    public function stopTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Stops multiple workflow instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - StopWorkflowInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopWorkflowInstancesResponse
     *
     * @param StopWorkflowInstancesRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return StopWorkflowInstancesResponse
     */
    public function stopWorkflowInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopWorkflowInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopWorkflowInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopWorkflowInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops multiple workflow instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - StopWorkflowInstancesRequest
     * @returns StopWorkflowInstancesResponse
     *
     * @param StopWorkflowInstancesRequest $request
     *
     * @return StopWorkflowInstancesResponse
     */
    public function stopWorkflowInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopWorkflowInstancesWithOptions($request, $runtime);
    }

    /**
     * Suspends multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - SuspendTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SuspendTaskInstancesResponse
     *
     * @param SuspendTaskInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SuspendTaskInstancesResponse
     */
    public function suspendTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SuspendTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SuspendTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SuspendTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Suspends multiple instances at a time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - SuspendTaskInstancesRequest
     * @returns SuspendTaskInstancesResponse
     *
     * @param SuspendTaskInstancesRequest $request
     *
     * @return SuspendTaskInstancesResponse
     */
    public function suspendTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * Adds tags to data assets.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - TagDataAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TagDataAssetsResponse
     *
     * @param TagDataAssetsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return TagDataAssetsResponse
     */
    public function tagDataAssetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TagDataAssetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataAssetIds) {
            $request->dataAssetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataAssetIds, 'DataAssetIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->autoTraceEnabled) {
            @$query['AutoTraceEnabled'] = $request->autoTraceEnabled;
        }

        if (null !== $request->dataAssetIdsShrink) {
            @$query['DataAssetIds'] = $request->dataAssetIdsShrink;
        }

        if (null !== $request->dataAssetType) {
            @$query['DataAssetType'] = $request->dataAssetType;
        }

        if (null !== $request->envType) {
            @$query['EnvType'] = $request->envType;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagDataAssets',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagDataAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds tags to data assets.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - TagDataAssetsRequest
     * @returns TagDataAssetsResponse
     *
     * @param TagDataAssetsRequest $request
     *
     * @return TagDataAssetsResponse
     */
    public function tagDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagDataAssetsWithOptions($request, $runtime);
    }

    /**
     * Triggers a task to run by using an HTTP Trigger node at a specified time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - TriggerSchedulerTaskInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TriggerSchedulerTaskInstanceResponse
     *
     * @param TriggerSchedulerTaskInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return TriggerSchedulerTaskInstanceResponse
     */
    public function triggerSchedulerTaskInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->envType) {
            @$query['EnvType'] = $request->envType;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->triggerTime) {
            @$body['TriggerTime'] = $request->triggerTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TriggerSchedulerTaskInstance',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TriggerSchedulerTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TriggerSchedulerTaskInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Triggers a task to run by using an HTTP Trigger node at a specified time.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - TriggerSchedulerTaskInstanceRequest
     * @returns TriggerSchedulerTaskInstanceResponse
     *
     * @param TriggerSchedulerTaskInstanceRequest $request
     *
     * @return TriggerSchedulerTaskInstanceResponse
     */
    public function triggerSchedulerTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerSchedulerTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * Removes tags from data assets.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - UnTagDataAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UnTagDataAssetsResponse
     *
     * @param UnTagDataAssetsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UnTagDataAssetsResponse
     */
    public function unTagDataAssetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnTagDataAssetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataAssetIds) {
            $request->dataAssetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataAssetIds, 'DataAssetIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->dataAssetIdsShrink) {
            @$query['DataAssetIds'] = $request->dataAssetIdsShrink;
        }

        if (null !== $request->dataAssetType) {
            @$query['DataAssetType'] = $request->dataAssetType;
        }

        if (null !== $request->envType) {
            @$query['EnvType'] = $request->envType;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnTagDataAssets',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnTagDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnTagDataAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from data assets.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - UnTagDataAssetsRequest
     * @returns UnTagDataAssetsResponse
     *
     * @param UnTagDataAssetsRequest $request
     *
     * @return UnTagDataAssetsResponse
     */
    public function unTagDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagDataAssetsWithOptions($request, $runtime);
    }

    /**
     * Updates a custom alert monitoring rule.
     *
     * @param tmpReq - UpdateAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAlertRuleResponse
     *
     * @param UpdateAlertRuleRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAlertRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->triggerCondition) {
            $request->triggerConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerCondition, 'TriggerCondition', 'json');
        }

        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->triggerConditionShrink) {
            @$query['TriggerCondition'] = $request->triggerConditionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a custom alert monitoring rule.
     *
     * @param request - UpdateAlertRuleRequest
     * @returns UpdateAlertRuleResponse
     *
     * @param UpdateAlertRuleRequest $request
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * Updates an alert rule configured for a synchronization task.
     *
     * @param tmpReq - UpdateDIAlarmRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDIAlarmRuleResponse
     *
     * @param UpdateDIAlarmRuleRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDIAlarmRuleResponse
     */
    public function updateDIAlarmRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDIAlarmRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notificationSettings) {
            $request->notificationSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notificationSettings, 'NotificationSettings', 'json');
        }

        if (null !== $tmpReq->triggerConditions) {
            $request->triggerConditionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->triggerConditions, 'TriggerConditions', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDIAlarmRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDIAlarmRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an alert rule configured for a synchronization task.
     *
     * @param request - UpdateDIAlarmRuleRequest
     * @returns UpdateDIAlarmRuleResponse
     *
     * @param UpdateDIAlarmRuleRequest $request
     *
     * @return UpdateDIAlarmRuleResponse
     */
    public function updateDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * Updates a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - UpdateDIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDIJobResponse
     *
     * @param UpdateDIJobRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateDIJobResponse
     */
    public function updateDIJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDIJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobSettings) {
            $request->jobSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobSettings, 'JobSettings', 'json');
        }

        if (null !== $tmpReq->resourceSettings) {
            $request->resourceSettingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSettings, 'ResourceSettings', 'json');
        }

        if (null !== $tmpReq->tableMappings) {
            $request->tableMappingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableMappings, 'TableMappings', 'json');
        }

        if (null !== $tmpReq->transformationRules) {
            $request->transformationRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transformationRules, 'TransformationRules', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDIJob',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDIJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a synchronization task.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - UpdateDIJobRequest
     * @returns UpdateDIJobResponse
     *
     * @param UpdateDIJobRequest $request
     *
     * @return UpdateDIJobResponse
     */
    public function updateDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIJobWithOptions($request, $runtime);
    }

    /**
     * Updates a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param tmpReq - UpdateDataAssetTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDataAssetTagResponse
     *
     * @param UpdateDataAssetTagRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDataAssetTagResponse
     */
    public function updateDataAssetTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataAssetTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->managers) {
            $request->managersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }

        if (null !== $tmpReq->values) {
            $request->valuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->managersShrink) {
            @$query['Managers'] = $request->managersShrink;
        }

        if (null !== $request->valuesShrink) {
            @$query['Values'] = $request->valuesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataAssetTag',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDataAssetTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDataAssetTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a tag.
     *
     * @remarks
     * This API operation is available only for DataWorks Enterprise Edition or a more advanced edition.
     *
     * @param request - UpdateDataAssetTagRequest
     * @returns UpdateDataAssetTagResponse
     *
     * @param UpdateDataAssetTagRequest $request
     *
     * @return UpdateDataAssetTagResponse
     */
    public function updateDataAssetTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataAssetTagWithOptions($request, $runtime);
    }

    /**
     * Updates a monitor.
     *
     * @remarks
     * This API operation is supported in all DataWorks editions.
     *
     * @param tmpReq - UpdateDataQualityEvaluationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDataQualityEvaluationTaskResponse
     *
     * @param UpdateDataQualityEvaluationTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateDataQualityEvaluationTaskResponse
     */
    public function updateDataQualityEvaluationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataQualityEvaluationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataQualityRules) {
            $request->dataQualityRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataQualityRules, 'DataQualityRules', 'json');
        }

        if (null !== $tmpReq->hooks) {
            $request->hooksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hooks, 'Hooks', 'json');
        }

        if (null !== $tmpReq->notifications) {
            $request->notificationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifications, 'Notifications', 'json');
        }

        if (null !== $tmpReq->target) {
            $request->targetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->target, 'Target', 'json');
        }

        if (null !== $tmpReq->trigger) {
            $request->triggerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trigger, 'Trigger', 'json');
        }

        $body = [];
        if (null !== $request->dataQualityRulesShrink) {
            @$body['DataQualityRules'] = $request->dataQualityRulesShrink;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->hooksShrink) {
            @$body['Hooks'] = $request->hooksShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->notificationsShrink) {
            @$body['Notifications'] = $request->notificationsShrink;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->runtimeConf) {
            @$body['RuntimeConf'] = $request->runtimeConf;
        }

        if (null !== $request->targetShrink) {
            @$body['Target'] = $request->targetShrink;
        }

        if (null !== $request->triggerShrink) {
            @$body['Trigger'] = $request->triggerShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataQualityEvaluationTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDataQualityEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDataQualityEvaluationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a monitor.
     *
     * @remarks
     * This API operation is supported in all DataWorks editions.
     *
     * @param request - UpdateDataQualityEvaluationTaskRequest
     * @returns UpdateDataQualityEvaluationTaskResponse
     *
     * @param UpdateDataQualityEvaluationTaskRequest $request
     *
     * @return UpdateDataQualityEvaluationTaskResponse
     */
    public function updateDataQualityEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataQualityEvaluationTaskWithOptions($request, $runtime);
    }

    /**
     * Updates a data quality monitoring rule.
     *
     * @param tmpReq - UpdateDataQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDataQualityRuleResponse
     *
     * @param UpdateDataQualityRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDataQualityRuleResponse
     */
    public function updateDataQualityRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataQualityRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->checkingConfig) {
            $request->checkingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkingConfig, 'CheckingConfig', 'json');
        }

        if (null !== $tmpReq->errorHandlers) {
            $request->errorHandlersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->errorHandlers, 'ErrorHandlers', 'json');
        }

        if (null !== $tmpReq->samplingConfig) {
            $request->samplingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->samplingConfig, 'SamplingConfig', 'json');
        }

        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->checkingConfigShrink) {
            @$body['CheckingConfig'] = $request->checkingConfigShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->errorHandlersShrink) {
            @$body['ErrorHandlers'] = $request->errorHandlersShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->samplingConfigShrink) {
            @$body['SamplingConfig'] = $request->samplingConfigShrink;
        }

        if (null !== $request->severity) {
            @$body['Severity'] = $request->severity;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataQualityRule',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDataQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDataQualityRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a data quality monitoring rule.
     *
     * @param request - UpdateDataQualityRuleRequest
     * @returns UpdateDataQualityRuleResponse
     *
     * @param UpdateDataQualityRuleRequest $request
     *
     * @return UpdateDataQualityRuleResponse
     */
    public function updateDataQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataQualityRuleWithOptions($request, $runtime);
    }

    /**
     * Updates a data quality monitoring rule template.
     *
     * @param tmpReq - UpdateDataQualityRuleTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDataQualityRuleTemplateResponse
     *
     * @param UpdateDataQualityRuleTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateDataQualityRuleTemplateResponse
     */
    public function updateDataQualityRuleTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataQualityRuleTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->checkingConfig) {
            $request->checkingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkingConfig, 'CheckingConfig', 'json');
        }

        if (null !== $tmpReq->samplingConfig) {
            $request->samplingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->samplingConfig, 'SamplingConfig', 'json');
        }

        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->checkingConfigShrink) {
            @$body['CheckingConfig'] = $request->checkingConfigShrink;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->directoryPath) {
            @$body['DirectoryPath'] = $request->directoryPath;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->samplingConfigShrink) {
            @$body['SamplingConfig'] = $request->samplingConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataQualityRuleTemplate',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDataQualityRuleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDataQualityRuleTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a data quality monitoring rule template.
     *
     * @param request - UpdateDataQualityRuleTemplateRequest
     * @returns UpdateDataQualityRuleTemplateResponse
     *
     * @param UpdateDataQualityRuleTemplateRequest $request
     *
     * @return UpdateDataQualityRuleTemplateResponse
     */
    public function updateDataQualityRuleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataQualityRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * Modifies a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - UpdateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionProperties) {
            @$query['ConnectionProperties'] = $request->connectionProperties;
        }

        if (null !== $request->connectionPropertiesMode) {
            @$query['ConnectionPropertiesMode'] = $request->connectionPropertiesMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a data source by ID.
     *
     * @remarks
     * 1.  This API operation is available for all DataWorks editions.
     * 2.  You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Tenant Administrator, Workspace Administrator, Workspace Owner, and O\\&M
     *
     * @param request - UpdateDataSourceRequest
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about a user-defined function (UDF) in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateFunctionResponse
     *
     * @param UpdateFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a user-defined function (UDF) in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateFunctionRequest
     * @returns UpdateFunctionResponse
     *
     * @param UpdateFunctionRequest $request
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFunctionWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about a node in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateNodeResponse
     *
     * @param UpdateNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateNodeResponse
     */
    public function updateNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a node in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateNodeRequest
     * @returns UpdateNodeResponse
     *
     * @param UpdateNodeRequest $request
     *
     * @return UpdateNodeResponse
     */
    public function updateNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeWithOptions($request, $runtime);
    }

    /**
     * Updates a DataWorks workspace.
     *
     * @param request - UpdateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->devEnvironmentEnabled) {
            @$body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }

        if (null !== $request->devRoleDisabled) {
            @$body['DevRoleDisabled'] = $request->devRoleDisabled;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->paiTaskEnabled) {
            @$body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a DataWorks workspace.
     *
     * @param request - UpdateProjectRequest
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about a file resource in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateResourceResponse
     *
     * @param UpdateResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a file resource in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateResourceRequest
     * @returns UpdateResourceResponse
     *
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceWithOptions($request, $runtime);
    }

    /**
     * Updates basic information about a resource group.
     *
     * @remarks
     * You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     *
     * @param request - UpdateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateResourceGroupResponse
     *
     * @param UpdateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunResourceGroupId) {
            @$body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceGroup',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates basic information about a resource group.
     *
     * @remarks
     * You can use this API operation only in DataWorks Basic Edition or an advanced edition.
     *
     * @param request - UpdateResourceGroupRequest
     * @returns UpdateResourceGroupResponse
     *
     * @param UpdateResourceGroupRequest $request
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a route.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - UpdateRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRouteResponse
     *
     * @param UpdateRouteRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateRouteResponse
     */
    public function updateRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCidr) {
            @$body['DestinationCidr'] = $request->destinationCidr;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRoute',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a route.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - UpdateRouteRequest
     * @returns UpdateRouteResponse
     *
     * @param UpdateRouteRequest $request
     *
     * @return UpdateRouteResponse
     */
    public function updateRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRouteWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTaskResponse
     *
     * @param UpdateTaskRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTaskResponse
     */
    public function updateTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSource) {
            $request->dataSourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSource, 'DataSource', 'json');
        }

        if (null !== $tmpReq->dependencies) {
            $request->dependenciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dependencies, 'Dependencies', 'json');
        }

        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        if (null !== $tmpReq->outputs) {
            $request->outputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outputs, 'Outputs', 'json');
        }

        if (null !== $tmpReq->runtimeResource) {
            $request->runtimeResourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runtimeResource, 'RuntimeResource', 'json');
        }

        if (null !== $tmpReq->script) {
            $request->scriptShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->script, 'Script', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->trigger) {
            $request->triggerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trigger, 'Trigger', 'json');
        }

        $body = [];
        if (null !== $request->clientUniqueCode) {
            @$body['ClientUniqueCode'] = $request->clientUniqueCode;
        }

        if (null !== $request->dataSourceShrink) {
            @$body['DataSource'] = $request->dataSourceShrink;
        }

        if (null !== $request->dependenciesShrink) {
            @$body['Dependencies'] = $request->dependenciesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->inputsShrink) {
            @$body['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->instanceMode) {
            @$body['InstanceMode'] = $request->instanceMode;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->outputsShrink) {
            @$body['Outputs'] = $request->outputsShrink;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->rerunInterval) {
            @$body['RerunInterval'] = $request->rerunInterval;
        }

        if (null !== $request->rerunMode) {
            @$body['RerunMode'] = $request->rerunMode;
        }

        if (null !== $request->rerunTimes) {
            @$body['RerunTimes'] = $request->rerunTimes;
        }

        if (null !== $request->runtimeResourceShrink) {
            @$body['RuntimeResource'] = $request->runtimeResourceShrink;
        }

        if (null !== $request->scriptShrink) {
            @$body['Script'] = $request->scriptShrink;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        if (null !== $request->triggerShrink) {
            @$body['Trigger'] = $request->triggerShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTask',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateTaskRequest
     * @returns UpdateTaskResponse
     *
     * @param UpdateTaskRequest $request
     *
     * @return UpdateTaskResponse
     */
    public function updateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies properties configured for multiple instances at a time. The properties include the priority, resource group for scheduling, and data source.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param tmpReq - UpdateTaskInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTaskInstancesResponse
     *
     * @param UpdateTaskInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTaskInstancesResponse
     */
    public function updateTaskInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTaskInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskInstances) {
            $request->taskInstancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskInstances, 'TaskInstances', 'json');
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->taskInstancesShrink) {
            @$body['TaskInstances'] = $request->taskInstancesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskInstances',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTaskInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies properties configured for multiple instances at a time. The properties include the priority, resource group for scheduling, and data source.
     *
     * @remarks
     * This API operation is available for all DataWorks editions.
     *
     * @param request - UpdateTaskInstancesRequest
     * @returns UpdateTaskInstancesResponse
     *
     * @param UpdateTaskInstancesRequest $request
     *
     * @return UpdateTaskInstancesResponse
     */
    public function updateTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWorkflowResponse
     *
     * @param UpdateWorkflowRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkflowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dependencies) {
            $request->dependenciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dependencies, 'Dependencies', 'json');
        }

        if (null !== $tmpReq->outputs) {
            $request->outputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outputs, 'Outputs', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->tasks) {
            $request->tasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }

        if (null !== $tmpReq->trigger) {
            $request->triggerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trigger, 'Trigger', 'json');
        }

        $body = [];
        if (null !== $request->clientUniqueCode) {
            @$body['ClientUniqueCode'] = $request->clientUniqueCode;
        }

        if (null !== $request->dependenciesShrink) {
            @$body['Dependencies'] = $request->dependenciesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->envType) {
            @$body['EnvType'] = $request->envType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->outputsShrink) {
            @$body['Outputs'] = $request->outputsShrink;
        }

        if (null !== $request->owner) {
            @$body['Owner'] = $request->owner;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->tasksShrink) {
            @$body['Tasks'] = $request->tasksShrink;
        }

        if (null !== $request->triggerShrink) {
            @$body['Trigger'] = $request->triggerShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflow',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkflowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateWorkflowRequest
     * @returns UpdateWorkflowResponse
     *
     * @param UpdateWorkflowRequest $request
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about a workflow in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateWorkflowDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWorkflowDefinitionResponse
     *
     * @param UpdateWorkflowDefinitionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkflowDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a workflow in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *
     * @param request - UpdateWorkflowDefinitionRequest
     * @returns UpdateWorkflowDefinitionResponse
     *
     * @param UpdateWorkflowDefinitionRequest $request
     *
     * @return UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDefinitionWithOptions($request, $runtime);
    }
}

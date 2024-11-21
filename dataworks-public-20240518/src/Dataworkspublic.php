<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AssociateProjectToResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AssociateProjectToResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CloneDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CloneDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleShrinkRequest;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateRouteRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateRouteResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteAlertRuleResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DissociateProjectFromResourceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DissociateProjectFromResourceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GrantMemberProjectRolesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponse;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopDIJobRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopDIJobResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\SuspendTaskInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TriggerSchedulerTaskInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\TriggerSchedulerTaskInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleShrinkRequest;
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
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Terminates the process for deploying or undeploying an entity. The process is not deleted and can still be queried by calling query operations.
     *  *
     * @param AbolishDeploymentRequest $request AbolishDeploymentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AbolishDeploymentResponse AbolishDeploymentResponse
     */
    public function abolishDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return AbolishDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates the process for deploying or undeploying an entity. The process is not deleted and can still be queried by calling query operations.
     *  *
     * @param AbolishDeploymentRequest $request AbolishDeploymentRequest
     *
     * @return AbolishDeploymentResponse AbolishDeploymentResponse
     */
    public function abolishDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a resource group with a workspace.
     *  *
     * @param AssociateProjectToResourceGroupRequest $request AssociateProjectToResourceGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateProjectToResourceGroupResponse AssociateProjectToResourceGroupResponse
     */
    public function associateProjectToResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return AssociateProjectToResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a resource group with a workspace.
     *  *
     * @param AssociateProjectToResourceGroupRequest $request AssociateProjectToResourceGroupRequest
     *
     * @return AssociateProjectToResourceGroupResponse AssociateProjectToResourceGroupResponse
     */
    public function associateProjectToResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateProjectToResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param CloneDataSourceRequest $request CloneDataSourceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneDataSourceResponse CloneDataSourceResponse
     */
    public function cloneDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cloneDataSourceName)) {
            $query['CloneDataSourceName'] = $request->cloneDataSourceName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CloneDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param CloneDataSourceRequest $request CloneDataSourceRequest
     *
     * @return CloneDataSourceResponse CloneDataSourceResponse
     */
    public function cloneDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义监控报警规则
     *  *
     * @param CreateAlertRuleRequest $tmpReq  CreateAlertRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlertRuleResponse CreateAlertRuleResponse
     */
    public function createAlertRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAlertRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->triggerCondition)) {
            $request->triggerConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->triggerCondition, 'TriggerCondition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->triggerConditionShrink)) {
            $query['TriggerCondition'] = $request->triggerConditionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义监控报警规则
     *  *
     * @param CreateAlertRuleRequest $request CreateAlertRuleRequest
     *
     * @return CreateAlertRuleResponse CreateAlertRuleResponse
     */
    public function createAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建数据集成报警规则
     *  *
     * @param CreateDIAlarmRuleRequest $tmpReq  CreateDIAlarmRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDIAlarmRuleResponse CreateDIAlarmRuleResponse
     */
    public function createDIAlarmRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDIAlarmRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notificationSettings)) {
            $request->notificationSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notificationSettings, 'NotificationSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->triggerConditions)) {
            $request->triggerConditionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->triggerConditions, 'TriggerConditions', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据集成报警规则
     *  *
     * @param CreateDIAlarmRuleRequest $request CreateDIAlarmRuleRequest
     *
     * @return CreateDIAlarmRuleResponse CreateDIAlarmRuleResponse
     */
    public function createDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建数据集成任务
     *  *
     * @param CreateDIJobRequest $tmpReq  CreateDIJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDIJobResponse CreateDIJobResponse
     */
    public function createDIJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDIJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destinationDataSourceSettings)) {
            $request->destinationDataSourceSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destinationDataSourceSettings, 'DestinationDataSourceSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->jobSettings)) {
            $request->jobSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobSettings, 'JobSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSettings)) {
            $request->resourceSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSettings, 'ResourceSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceDataSourceSettings)) {
            $request->sourceDataSourceSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceDataSourceSettings, 'SourceDataSourceSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->tableMappings)) {
            $request->tableMappingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tableMappings, 'TableMappings', 'json');
        }
        if (!Utils::isUnset($tmpReq->transformationRules)) {
            $request->transformationRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transformationRules, 'TransformationRules', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据集成任务
     *  *
     * @param CreateDIJobRequest $request CreateDIJobRequest
     *
     * @return CreateDIJobResponse CreateDIJobResponse
     */
    public function createDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDIJobWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param CreateDataSourceRequest $request CreateDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionProperties)) {
            $query['ConnectionProperties'] = $request->connectionProperties;
        }
        if (!Utils::isUnset($request->connectionPropertiesMode)) {
            $query['ConnectionPropertiesMode'] = $request->connectionPropertiesMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param CreateDataSourceRequest $request CreateDataSourceRequest
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param CreateDataSourceSharedRuleRequest $request CreateDataSourceSharedRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataSourceSharedRuleResponse CreateDataSourceSharedRuleResponse
     */
    public function createDataSourceSharedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->sharedUser)) {
            $query['SharedUser'] = $request->sharedUser;
        }
        if (!Utils::isUnset($request->targetProjectId)) {
            $query['TargetProjectId'] = $request->targetProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateDataSourceSharedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param CreateDataSourceSharedRuleRequest $request CreateDataSourceSharedRuleRequest
     *
     * @return CreateDataSourceSharedRuleResponse CreateDataSourceSharedRuleResponse
     */
    public function createDataSourceSharedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceSharedRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a process for deploying or undeploying an entity in DataStudio.
     *  *
     * @description >  You cannot use this API operation to create a process for multiple entities at a time. If you specify multiple entities in a request, the system creates a process only for the first entity.
     *  *
     * @param CreateDeploymentRequest $tmpReq  CreateDeploymentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeploymentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->objectIds)) {
            $request->objectIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'ObjectIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->objectIdsShrink)) {
            $body['ObjectIds'] = $request->objectIdsShrink;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a process for deploying or undeploying an entity in DataStudio.
     *  *
     * @description >  You cannot use this API operation to create a process for multiple entities at a time. If you specify multiple entities in a request, the system creates a process only for the first entity.
     *  *
     * @param CreateDeploymentRequest $request CreateDeploymentRequest
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
     */
    public function createDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a user-defined function (UDF) in DataStudio. The information about the UDF is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple UDFs at a time. If you specify multiple UDFs by using FlowSpec, the system creates only the first specified UDF.
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a user-defined function (UDF) in DataStudio. The information about the UDF is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple UDFs at a time. If you specify multiple UDFs by using FlowSpec, the system creates only the first specified UDF.
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建并绑定通用资源组网络资源。
     *  *
     * @param CreateNetworkRequest $request CreateNetworkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkResponse CreateNetworkResponse
     */
    public function createNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $body['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建并绑定通用资源组网络资源。
     *  *
     * @param CreateNetworkRequest $request CreateNetworkRequest
     *
     * @return CreateNetworkResponse CreateNetworkResponse
     */
    public function createNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a node in DataStudio. The information about the node is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple nodes at a time. If you specify multiple nodes by using FlowSpec, the system creates only the first specified node.
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->containerId)) {
            $body['ContainerId'] = $request->containerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a node in DataStudio. The information about the node is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple nodes at a time. If you specify multiple nodes by using FlowSpec, the system creates only the first specified node.
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateProjectRequest $tmpReq  CreateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aliyunResourceTags)) {
            $request->aliyunResourceTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aliyunResourceGroupId)) {
            $body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }
        if (!Utils::isUnset($request->aliyunResourceTagsShrink)) {
            $body['AliyunResourceTags'] = $request->aliyunResourceTagsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->devEnvironmentEnabled)) {
            $body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }
        if (!Utils::isUnset($request->devRoleDisabled)) {
            $body['DevRoleDisabled'] = $request->devRoleDisabled;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->paiTaskEnabled)) {
            $body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 添加工作空间成员
     *  *
     * @param CreateProjectMemberRequest $tmpReq  CreateProjectMemberRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectMemberResponse CreateProjectMemberResponse
     */
    public function createProjectMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleCodes)) {
            $request->roleCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCodesShrink)) {
            $body['RoleCodes'] = $request->roleCodesShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加工作空间成员
     *  *
     * @param CreateProjectMemberRequest $request CreateProjectMemberRequest
     *
     * @return CreateProjectMemberResponse CreateProjectMemberResponse
     */
    public function createProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a file resource in DataStudio. The information about the file resource is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple file resources at a time. If you specify multiple file resources by using FlowSpec, the system creates only the first specified resource.
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a file resource in DataStudio. The information about the file resource is described by using FlowSpec.
     *  *
     * @description >  You cannot use this API operation to create multiple file resources at a time. If you specify multiple file resources by using FlowSpec, the system creates only the first specified resource.
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建通用资源组。
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->paymentDuration)) {
            $body['PaymentDuration'] = $request->paymentDuration;
        }
        if (!Utils::isUnset($request->paymentDurationUnit)) {
            $body['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $body['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建通用资源组。
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建网络资源的路由。
     *  *
     * @param CreateRouteRequest $request CreateRouteRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRouteResponse CreateRouteResponse
     */
    public function createRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidr)) {
            $body['DestinationCidr'] = $request->destinationCidr;
        }
        if (!Utils::isUnset($request->networkId)) {
            $body['NetworkId'] = $request->networkId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网络资源的路由。
     *  *
     * @param CreateRouteRequest $request CreateRouteRequest
     *
     * @return CreateRouteResponse CreateRouteResponse
     */
    public function createRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a workflow in a directory of DataStudio.
     *  *
     * @description > You cannot use this API operation to create multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system creates only the first specified workflow. Other specified workflows and the nodes in the workflows are ignored. You can call the CreateNode operation to create a node.
     *  *
     * @param CreateWorkflowDefinitionRequest $request CreateWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkflowDefinitionResponse CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a workflow in a directory of DataStudio.
     *  *
     * @description > You cannot use this API operation to create multiple workflows at a time. If you specify multiple workflows by using FlowSpec, the system creates only the first specified workflow. Other specified workflows and the nodes in the workflows are ignored. You can call the CreateNode operation to create a node.
     *  *
     * @param CreateWorkflowDefinitionRequest $request CreateWorkflowDefinitionRequest
     *
     * @return CreateWorkflowDefinitionResponse CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义监控报警规则
     *  *
     * @param DeleteAlertRuleRequest $request DeleteAlertRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertRuleResponse DeleteAlertRuleResponse
     */
    public function deleteAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义监控报警规则
     *  *
     * @param DeleteAlertRuleRequest $request DeleteAlertRuleRequest
     *
     * @return DeleteAlertRuleResponse DeleteAlertRuleResponse
     */
    public function deleteAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert rule configured for a synchronization task.
     *  *
     * @param DeleteDIAlarmRuleRequest $request DeleteDIAlarmRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDIAlarmRuleResponse DeleteDIAlarmRuleResponse
     */
    public function deleteDIAlarmRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an alert rule configured for a synchronization task.
     *  *
     * @param DeleteDIAlarmRuleRequest $request DeleteDIAlarmRuleRequest
     *
     * @return DeleteDIAlarmRuleResponse DeleteDIAlarmRuleResponse
     */
    public function deleteDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据集成任务
     *  *
     * @param DeleteDIJobRequest $request DeleteDIJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDIJobResponse DeleteDIJobResponse
     */
    public function deleteDIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据集成任务
     *  *
     * @param DeleteDIJobRequest $request DeleteDIJobRequest
     *
     * @return DeleteDIJobResponse DeleteDIJobResponse
     */
    public function deleteDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDIJobWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param DeleteDataSourceSharedRuleRequest $request DeleteDataSourceSharedRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceSharedRuleResponse DeleteDataSourceSharedRuleResponse
     */
    public function deleteDataSourceSharedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDataSourceSharedRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param DeleteDataSourceSharedRuleRequest $request DeleteDataSourceSharedRuleRequest
     *
     * @return DeleteDataSourceSharedRuleResponse DeleteDataSourceSharedRuleResponse
     */
    public function deleteDataSourceSharedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceSharedRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a user-defined function (UDF) in DataStudio.
     *  *
     * @description >  A UDF that is deployed cannot be deleted. If you want to delete such a UDF, you must first undeploy the UDF.
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a user-defined function (UDF) in DataStudio.
     *  *
     * @description >  A UDF that is deployed cannot be deleted. If you want to delete such a UDF, you must first undeploy the UDF.
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑并删除通用资源组网络资源。
     *  *
     * @param DeleteNetworkRequest $request DeleteNetworkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkResponse DeleteNetworkResponse
     */
    public function deleteNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑并删除通用资源组网络资源。
     *  *
     * @param DeleteNetworkRequest $request DeleteNetworkRequest
     *
     * @return DeleteNetworkResponse DeleteNetworkResponse
     */
    public function deleteNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a node from DataStudio.
     *  *
     * @description >  A node that is deployed cannot be deleted. If you want to delete such a node, you must first undeploy the node.
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a node from DataStudio.
     *  *
     * @description >  A node that is deployed cannot be deleted. If you want to delete such a node, you must first undeploy the node.
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 销毁工作空间
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 销毁工作空间
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a member from a workspace.
     *  *
     * @param DeleteProjectMemberRequest $request DeleteProjectMemberRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectMemberResponse DeleteProjectMemberResponse
     */
    public function deleteProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a member from a workspace.
     *  *
     * @param DeleteProjectMemberRequest $request DeleteProjectMemberRequest
     *
     * @return DeleteProjectMemberResponse DeleteProjectMemberResponse
     */
    public function deleteProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a file resource from DataStudio.
     *  *
     * @description >  A file resource that is deployed cannot be deleted. If you want to delete such a file resource, you must first undeploy the file resource.
     *  *
     * @param DeleteResourceRequest $request DeleteResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceResponse DeleteResourceResponse
     */
    public function deleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a file resource from DataStudio.
     *  *
     * @description >  A file resource that is deployed cannot be deleted. If you want to delete such a file resource, you must first undeploy the file resource.
     *  *
     * @param DeleteResourceRequest $request DeleteResourceRequest
     *
     * @return DeleteResourceResponse DeleteResourceResponse
     */
    public function deleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a serverless resource group.
     *  *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a serverless resource group.
     *  *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除网络资源的路由。
     *  *
     * @param DeleteRouteRequest $request DeleteRouteRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRouteResponse DeleteRouteResponse
     */
    public function deleteRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除网络资源的路由。
     *  *
     * @param DeleteRouteRequest $request DeleteRouteRequest
     *
     * @return DeleteRouteResponse DeleteRouteResponse
     */
    public function deleteRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTaskRequest $request DeleteTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $query['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary Deletes a workflow from DataStudio.
     *  *
     * @description >  A workflow that is deployed cannot be deleted. If you want to delete such a workflow, you must first undeploy the workflow.
     *  *
     * @param DeleteWorkflowDefinitionRequest $request DeleteWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkflowDefinitionResponse DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a workflow from DataStudio.
     *  *
     * @description >  A workflow that is deployed cannot be deleted. If you want to delete such a workflow, you must first undeploy the workflow.
     *  *
     * @param DeleteWorkflowDefinitionRequest $request DeleteWorkflowDefinitionRequest
     *
     * @return DeleteWorkflowDefinitionResponse DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a resource group from a workspace.
     *  *
     * @param DissociateProjectFromResourceGroupRequest $request DissociateProjectFromResourceGroupRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateProjectFromResourceGroupResponse DissociateProjectFromResourceGroupResponse
     */
    public function dissociateProjectFromResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DissociateProjectFromResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a resource group from a workspace.
     *  *
     * @param DissociateProjectFromResourceGroupRequest $request DissociateProjectFromResourceGroupRequest
     *
     * @return DissociateProjectFromResourceGroupResponse DissociateProjectFromResourceGroupResponse
     */
    public function dissociateProjectFromResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateProjectFromResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Executes a stage in a process.
     *  *
     * @description >  The stages in a process are sequential. For more information, see the GetDeployment operation. Skipping or repeating a stage is not allowed.
     * >  The execution of a stage is asynchronous. The response of this operation indicates only whether a stage is triggered but does not indicate whether the execution of the stage is successful. You can call the GetDeployment operation to check whether the execution is successful.
     *  *
     * @param ExecDeploymentStageRequest $request ExecDeploymentStageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecDeploymentStageResponse ExecDeploymentStageResponse
     */
    public function execDeploymentStageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return ExecDeploymentStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Executes a stage in a process.
     *  *
     * @description >  The stages in a process are sequential. For more information, see the GetDeployment operation. Skipping or repeating a stage is not allowed.
     * >  The execution of a stage is asynchronous. The response of this operation indicates only whether a stage is triggered but does not indicate whether the execution of the stage is successful. You can call the GetDeployment operation to check whether the execution is successful.
     *  *
     * @param ExecDeploymentStageRequest $request ExecDeploymentStageRequest
     *
     * @return ExecDeploymentStageResponse ExecDeploymentStageResponse
     */
    public function execDeploymentStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execDeploymentStageWithOptions($request, $runtime);
    }

    /**
     * @summary 获取自定义监控报警规则
     *  *
     * @param GetAlertRuleRequest $request GetAlertRuleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlertRuleResponse GetAlertRuleResponse
     */
    public function getAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义监控报警规则
     *  *
     * @param GetAlertRuleRequest $request GetAlertRuleRequest
     *
     * @return GetAlertRuleResponse GetAlertRuleResponse
     */
    public function getAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查看数据集成任务
     *  *
     * @param GetDIJobRequest $request GetDIJobRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDIJobResponse GetDIJobResponse
     */
    public function getDIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据集成任务
     *  *
     * @param GetDIJobRequest $request GetDIJobRequest
     *
     * @return GetDIJobResponse GetDIJobResponse
     */
    public function getDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDIJobWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains logs generated for a synchronization task.
     *  *
     * @param GetDIJobLogRequest $request GetDIJobLogRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDIJobLogResponse GetDIJobLogResponse
     */
    public function getDIJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDIJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains logs generated for a synchronization task.
     *  *
     * @param GetDIJobLogRequest $request GetDIJobLogRequest
     *
     * @return GetDIJobLogResponse GetDIJobLogResponse
     */
    public function getDIJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDIJobLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a data source by ID.
     *  *
     * @description You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deployment, Development, Project Owner, and O\\&M
     *  *
     * @param GetDataSourceRequest $request GetDataSourceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceResponse GetDataSourceResponse
     */
    public function getDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a data source by ID.
     *  *
     * @description You can call this operation only if you are assigned one of the following roles in DataWorks:
     * *   Tenant Owner, Workspace Administrator, Deployment, Development, Project Owner, and O\\&M
     *  *
     * @param GetDataSourceRequest $request GetDataSourceRequest
     *
     * @return GetDataSourceResponse GetDataSourceResponse
     */
    public function getDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a process for deploying or undeploying an entity.
     *  *
     * @param GetDeploymentRequest $request GetDeploymentRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeploymentResponse GetDeploymentResponse
     */
    public function getDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a process for deploying or undeploying an entity.
     *  *
     * @param GetDeploymentRequest $request GetDeploymentRequest
     *
     * @return GetDeploymentResponse GetDeploymentResponse
     */
    public function getDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a user-defined function (UDF) in DataStudio.
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a user-defined function (UDF) in DataStudio.
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 返回异步任务的状态信息
     *  *
     * @param GetJobStatusRequest $request GetJobStatusRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobStatusResponse GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 返回异步任务的状态信息
     *  *
     * @param GetJobStatusRequest $request GetJobStatusRequest
     *
     * @return GetJobStatusResponse GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取某个网络资源详细信息。
     *  *
     * @param GetNetworkRequest $request GetNetworkRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkResponse GetNetworkResponse
     */
    public function getNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个网络资源详细信息。
     *  *
     * @param GetNetworkRequest $request GetNetworkRequest
     *
     * @return GetNetworkResponse GetNetworkResponse
     */
    public function getNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a node in DataStudio.
     *  *
     * @param GetNodeRequest $request GetNodeRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a node in DataStudio.
     *  *
     * @param GetNodeRequest $request GetNodeRequest
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a DataWorks workspace.
     *  *
     * @param GetProjectRequest $request GetProjectRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a DataWorks workspace.
     *  *
     * @param GetProjectRequest $request GetProjectRequest
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a member in a workspace.
     *  *
     * @param GetProjectMemberRequest $request GetProjectMemberRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectMemberResponse GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return GetProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a member in a workspace.
     *  *
     * @param GetProjectMemberRequest $request GetProjectMemberRequest
     *
     * @return GetProjectMemberResponse GetProjectMemberResponse
     */
    public function getProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 查询工作空间角色详情
     *  *
     * @param GetProjectRoleRequest $request GetProjectRoleRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectRoleResponse GetProjectRoleResponse
     */
    public function getProjectRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetProjectRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作空间角色详情
     *  *
     * @param GetProjectRoleRequest $request GetProjectRoleRequest
     *
     * @return GetProjectRoleResponse GetProjectRoleResponse
     */
    public function getProjectRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a file resource.
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a file resource.
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 根据id获取指定资源组。
     *  *
     * @param GetResourceGroupRequest $request GetResourceGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据id获取指定资源组。
     *  *
     * @param GetResourceGroupRequest $request GetResourceGroupRequest
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 根据id获取指定路由。
     *  *
     * @param GetRouteRequest $request GetRouteRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRouteResponse GetRouteResponse
     */
    public function getRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据id获取指定路由。
     *  *
     * @param GetRouteRequest $request GetRouteRequest
     *
     * @return GetRouteResponse GetRouteResponse
     */
    public function getRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRouteWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRequest $request GetTaskRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary Queries the information about an instance.
     *  *
     * @param GetTaskInstanceRequest $request GetTaskInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskInstanceResponse GetTaskInstanceResponse
     */
    public function getTaskInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an instance.
     *  *
     * @param GetTaskInstanceRequest $request GetTaskInstanceRequest
     *
     * @return GetTaskInstanceResponse GetTaskInstanceResponse
     */
    public function getTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskInstanceLogRequest $request GetTaskInstanceLogRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskInstanceLogResponse GetTaskInstanceLogResponse
     */
    public function getTaskInstanceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetTaskInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskInstanceLogRequest $request GetTaskInstanceLogRequest
     *
     * @return GetTaskInstanceLogResponse GetTaskInstanceLogResponse
     */
    public function getTaskInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the infomation about a workflow.
     *  *
     * @param GetWorkflowDefinitionRequest $request GetWorkflowDefinitionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkflowDefinitionResponse GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the infomation about a workflow.
     *  *
     * @param GetWorkflowDefinitionRequest $request GetWorkflowDefinitionRequest
     *
     * @return GetWorkflowDefinitionResponse GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary Assigns roles to members in a workspace.
     *  *
     * @param GrantMemberProjectRolesRequest $tmpReq  GrantMemberProjectRolesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantMemberProjectRolesResponse GrantMemberProjectRolesResponse
     */
    public function grantMemberProjectRolesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantMemberProjectRolesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleCodes)) {
            $request->roleCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCodesShrink)) {
            $body['RoleCodes'] = $request->roleCodesShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return GrantMemberProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Assigns roles to members in a workspace.
     *  *
     * @param GrantMemberProjectRolesRequest $request GrantMemberProjectRolesRequest
     *
     * @return GrantMemberProjectRolesResponse GrantMemberProjectRolesResponse
     */
    public function grantMemberProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantMemberProjectRolesWithOptions($request, $runtime);
    }

    /**
     * @summary 调用此接口，可以将通过FlowSpec定义的工作流节点和其内部的子节点都导入到数据开发中
     *  *
     * @param ImportWorkflowDefinitionRequest $request ImportWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportWorkflowDefinitionResponse ImportWorkflowDefinitionResponse
     */
    public function importWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ImportWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调用此接口，可以将通过FlowSpec定义的工作流节点和其内部的子节点都导入到数据开发中
     *  *
     * @param ImportWorkflowDefinitionRequest $request ImportWorkflowDefinitionRequest
     *
     * @return ImportWorkflowDefinitionResponse ImportWorkflowDefinitionResponse
     */
    public function importWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取自定义监控报警规则
     *  *
     * @param ListAlertRulesRequest $tmpReq  ListAlertRulesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertRulesResponse ListAlertRulesResponse
     */
    public function listAlertRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAlertRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->receiver)) {
            $query['Receiver'] = $request->receiver;
        }
        if (!Utils::isUnset($request->taskIdsShrink)) {
            $query['TaskIds'] = $request->taskIdsShrink;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $query['Types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页获取自定义监控报警规则
     *  *
     * @param ListAlertRulesRequest $request ListAlertRulesRequest
     *
     * @return ListAlertRulesResponse ListAlertRulesResponse
     */
    public function listAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 查看数据集成报警规则
     *  *
     * @param ListDIAlarmRulesRequest $request ListDIAlarmRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDIAlarmRulesResponse ListDIAlarmRulesResponse
     */
    public function listDIAlarmRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDIAlarmRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看数据集成报警规则
     *  *
     * @param ListDIAlarmRulesRequest $request ListDIAlarmRulesRequest
     *
     * @return ListDIAlarmRulesResponse ListDIAlarmRulesResponse
     */
    public function listDIAlarmRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIAlarmRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据集成任务事件
     *  *
     * @param ListDIJobEventsRequest $request ListDIJobEventsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDIJobEventsResponse ListDIJobEventsResponse
     */
    public function listDIJobEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDIJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集成任务事件
     *  *
     * @param ListDIJobEventsRequest $request ListDIJobEventsRequest
     *
     * @return ListDIJobEventsResponse ListDIJobEventsResponse
     */
    public function listDIJobEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobEventsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据集成任务指标
     *  *
     * @param ListDIJobMetricsRequest $tmpReq  ListDIJobMetricsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDIJobMetricsResponse ListDIJobMetricsResponse
     */
    public function listDIJobMetricsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDIJobMetricsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->metricName)) {
            $request->metricNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->metricName, 'MetricName', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDIJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集成任务指标
     *  *
     * @param ListDIJobMetricsRequest $request ListDIJobMetricsRequest
     *
     * @return ListDIJobMetricsResponse ListDIJobMetricsResponse
     */
    public function listDIJobMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据集成运行信息
     *  *
     * @param ListDIJobRunDetailsRequest $request ListDIJobRunDetailsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDIJobRunDetailsResponse ListDIJobRunDetailsResponse
     */
    public function listDIJobRunDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDIJobRunDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集成运行信息
     *  *
     * @param ListDIJobRunDetailsRequest $request ListDIJobRunDetailsRequest
     *
     * @return ListDIJobRunDetailsResponse ListDIJobRunDetailsResponse
     */
    public function listDIJobRunDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobRunDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of synchronization tasks.
     *  *
     * @param ListDIJobsRequest $request ListDIJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDIJobsResponse ListDIJobsResponse
     */
    public function listDIJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDIJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of synchronization tasks.
     *  *
     * @param ListDIJobsRequest $request ListDIJobsRequest
     *
     * @return ListDIJobsResponse ListDIJobsResponse
     */
    public function listDIJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of instances generated by a data quality monitoring task by page.
     *  *
     * @param ListDataQualityEvaluationTaskInstancesRequest $request ListDataQualityEvaluationTaskInstancesRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataQualityEvaluationTaskInstancesResponse ListDataQualityEvaluationTaskInstancesResponse
     */
    public function listDataQualityEvaluationTaskInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataQualityEvaluationTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of instances generated by a data quality monitoring task by page.
     *  *
     * @param ListDataQualityEvaluationTaskInstancesRequest $request ListDataQualityEvaluationTaskInstancesRequest
     *
     * @return ListDataQualityEvaluationTaskInstancesResponse ListDataQualityEvaluationTaskInstancesResponse
     */
    public function listDataQualityEvaluationTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityEvaluationTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of data quality monitoring tasks by page.
     *  *
     * @param ListDataQualityEvaluationTasksRequest $request ListDataQualityEvaluationTasksRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataQualityEvaluationTasksResponse ListDataQualityEvaluationTasksResponse
     */
    public function listDataQualityEvaluationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataQualityEvaluationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of data quality monitoring tasks by page.
     *  *
     * @param ListDataQualityEvaluationTasksRequest $request ListDataQualityEvaluationTasksRequest
     *
     * @return ListDataQualityEvaluationTasksResponse ListDataQualityEvaluationTasksResponse
     */
    public function listDataQualityEvaluationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityEvaluationTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListDataQualityResultsRequest $request ListDataQualityResultsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataQualityResultsResponse ListDataQualityResultsResponse
     */
    public function listDataQualityResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataQualityResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataQualityResultsRequest $request ListDataQualityResultsRequest
     *
     * @return ListDataQualityResultsResponse ListDataQualityResultsResponse
     */
    public function listDataQualityResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of data quality monitoring rules by page.
     *  *
     * @param ListDataQualityRulesRequest $request ListDataQualityRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataQualityRulesResponse ListDataQualityRulesResponse
     */
    public function listDataQualityRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataQualityRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of data quality monitoring rules by page.
     *  *
     * @param ListDataQualityRulesRequest $request ListDataQualityRulesRequest
     *
     * @return ListDataQualityRulesResponse ListDataQualityRulesResponse
     */
    public function listDataQualityRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataQualityRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param ListDataSourceSharedRulesRequest $request ListDataSourceSharedRulesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceSharedRulesResponse ListDataSourceSharedRulesResponse
     */
    public function listDataSourceSharedRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataSourceSharedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param ListDataSourceSharedRulesRequest $request ListDataSourceSharedRulesRequest
     *
     * @return ListDataSourceSharedRulesResponse ListDataSourceSharedRulesResponse
     */
    public function listDataSourceSharedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceSharedRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param ListDataSourcesRequest $tmpReq  ListDataSourcesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourcesResponse ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDataSourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param ListDataSourcesRequest $request ListDataSourcesRequest
     *
     * @return ListDataSourcesResponse ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of processes that are used to deploy or undeploy entities in DataStudio. You can also specify filter conditions to query specific processes.
     *  *
     * @param ListDeploymentsRequest $request ListDeploymentsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of processes that are used to deploy or undeploy entities in DataStudio. You can also specify filter conditions to query specific processes.
     *  *
     * @param ListDeploymentsRequest $request ListDeploymentsRequest
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentsWithOptions($request, $runtime);
    }

    /**
     * @param ListDownstreamTaskInstancesRequest $request ListDownstreamTaskInstancesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDownstreamTaskInstancesResponse ListDownstreamTaskInstancesResponse
     */
    public function listDownstreamTaskInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDownstreamTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDownstreamTaskInstancesRequest $request ListDownstreamTaskInstancesRequest
     *
     * @return ListDownstreamTaskInstancesResponse ListDownstreamTaskInstancesResponse
     */
    public function listDownstreamTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownstreamTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListDownstreamTasksRequest $request ListDownstreamTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDownstreamTasksResponse ListDownstreamTasksResponse
     */
    public function listDownstreamTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDownstreamTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDownstreamTasksRequest $request ListDownstreamTasksRequest
     *
     * @return ListDownstreamTasksResponse ListDownstreamTasksResponse
     */
    public function listDownstreamTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownstreamTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of user-defined functions (UDFs) in DataStudio. You can also specify filter conditions to query specific UDFs.
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of user-defined functions (UDFs) in DataStudio. You can also specify filter conditions to query specific UDFs.
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取通用资源组网络资源列表。
     *  *
     * @param ListNetworksRequest $request ListNetworksRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworksResponse ListNetworksResponse
     */
    public function listNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取通用资源组网络资源列表。
     *  *
     * @param ListNetworksRequest $request ListNetworksRequest
     *
     * @return ListNetworksResponse ListNetworksResponse
     */
    public function listNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of descendant nodes of a node in DataStudio.
     *  *
     * @param ListNodeDependenciesRequest $request ListNodeDependenciesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeDependenciesResponse ListNodeDependenciesResponse
     */
    public function listNodeDependenciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNodeDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of descendant nodes of a node in DataStudio.
     *  *
     * @param ListNodeDependenciesRequest $request ListNodeDependenciesRequest
     *
     * @return ListNodeDependenciesResponse ListNodeDependenciesResponse
     */
    public function listNodeDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeDependenciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of nodes in DataStudio. You can also specify filter conditions to query specific nodes.
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of nodes in DataStudio. You can also specify filter conditions to query specific nodes.
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details about members in a workspace.
     *  *
     * @param ListProjectMembersRequest $tmpReq  ListProjectMembersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectMembersResponse ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleCodes)) {
            $request->roleCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIds)) {
            $request->userIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCodesShrink)) {
            $body['RoleCodes'] = $request->roleCodesShrink;
        }
        if (!Utils::isUnset($request->userIdsShrink)) {
            $body['UserIds'] = $request->userIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries details about members in a workspace.
     *  *
     * @param ListProjectMembersRequest $request ListProjectMembersRequest
     *
     * @return ListProjectMembersResponse ListProjectMembersResponse
     */
    public function listProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询工作空间角色详情
     *  *
     * @param ListProjectRolesRequest $tmpReq  ListProjectRolesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectRolesResponse ListProjectRolesResponse
     */
    public function listProjectRolesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectRolesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->codes)) {
            $request->codesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->codes, 'Codes', 'json');
        }
        if (!Utils::isUnset($tmpReq->names)) {
            $request->namesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->names, 'Names', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->codesShrink)) {
            $body['Codes'] = $request->codesShrink;
        }
        if (!Utils::isUnset($request->namesShrink)) {
            $body['Names'] = $request->namesShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询工作空间角色详情
     *  *
     * @param ListProjectRolesRequest $request ListProjectRolesRequest
     *
     * @return ListProjectRolesResponse ListProjectRolesResponse
     */
    public function listProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectRolesWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询工作空间详情
     *  *
     * @param ListProjectsRequest $tmpReq  ListProjectsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aliyunResourceTags)) {
            $request->aliyunResourceTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aliyunResourceTags, 'AliyunResourceTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->names)) {
            $request->namesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->names, 'Names', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aliyunResourceGroupId)) {
            $body['AliyunResourceGroupId'] = $request->aliyunResourceGroupId;
        }
        if (!Utils::isUnset($request->aliyunResourceTagsShrink)) {
            $body['AliyunResourceTags'] = $request->aliyunResourceTagsShrink;
        }
        if (!Utils::isUnset($request->devEnvironmentEnabled)) {
            $body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }
        if (!Utils::isUnset($request->devRoleDisabled)) {
            $body['DevRoleDisabled'] = $request->devRoleDisabled;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->namesShrink)) {
            $body['Names'] = $request->namesShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paiTaskEnabled)) {
            $body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询工作空间详情
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取资源组列表。
     *  *
     * @param ListResourceGroupsRequest $tmpReq  ListResourceGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListResourceGroupsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceGroupTypes)) {
            $request->resourceGroupTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupTypes, 'ResourceGroupTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->statuses)) {
            $request->statusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源组列表。
     *  *
     * @param ListResourceGroupsRequest $request ListResourceGroupsRequest
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of file resources in DataStudio. You can also specify filter conditions to query specific file resources.
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of file resources in DataStudio. You can also specify filter conditions to query specific file resources.
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取网络资源的路由列表。
     *  *
     * @param ListRoutesRequest $request ListRoutesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoutesResponse ListRoutesResponse
     */
    public function listRoutesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取网络资源的路由列表。
     *  *
     * @param ListRoutesRequest $request ListRoutesRequest
     *
     * @return ListRoutesResponse ListRoutesResponse
     */
    public function listRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskInstanceOperationLogsRequest $request ListTaskInstanceOperationLogsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskInstanceOperationLogsResponse ListTaskInstanceOperationLogsResponse
     */
    public function listTaskInstanceOperationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTaskInstanceOperationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskInstanceOperationLogsRequest $request ListTaskInstanceOperationLogsRequest
     *
     * @return ListTaskInstanceOperationLogsResponse ListTaskInstanceOperationLogsResponse
     */
    public function listTaskInstanceOperationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskInstanceOperationLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskInstancesRequest $tmpReq  ListTaskInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskInstancesResponse ListTaskInstancesResponse
     */
    public function listTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->runtimeResource)) {
            $body['RuntimeResource'] = $request->runtimeResource;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $body['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskIdsShrink)) {
            $body['TaskIds'] = $request->taskIdsShrink;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->triggerRecurrence)) {
            $body['TriggerRecurrence'] = $request->triggerRecurrence;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $body['TriggerType'] = $request->triggerType;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $body['WorkflowId'] = $request->workflowId;
        }
        if (!Utils::isUnset($request->workflowInstanceId)) {
            $body['WorkflowInstanceId'] = $request->workflowInstanceId;
        }
        if (!Utils::isUnset($request->workflowInstanceType)) {
            $body['WorkflowInstanceType'] = $request->workflowInstanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskInstancesRequest $request ListTaskInstancesRequest
     *
     * @return ListTaskInstancesResponse ListTaskInstancesResponse
     */
    public function listTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskOperationLogsRequest $request ListTaskOperationLogsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskOperationLogsResponse ListTaskOperationLogsResponse
     */
    public function listTaskOperationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTaskOperationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskOperationLogsRequest $request ListTaskOperationLogsRequest
     *
     * @return ListTaskOperationLogsResponse ListTaskOperationLogsResponse
     */
    public function listTaskOperationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskOperationLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksRequest $request ListTasksRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->runtimeResource)) {
            $body['RuntimeResource'] = $request->runtimeResource;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $body['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->triggerRecurrence)) {
            $body['TriggerRecurrence'] = $request->triggerRecurrence;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $body['TriggerType'] = $request->triggerType;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $body['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUpstreamTaskInstancesRequest $request ListUpstreamTaskInstancesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUpstreamTaskInstancesResponse ListUpstreamTaskInstancesResponse
     */
    public function listUpstreamTaskInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUpstreamTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUpstreamTaskInstancesRequest $request ListUpstreamTaskInstancesRequest
     *
     * @return ListUpstreamTaskInstancesResponse ListUpstreamTaskInstancesResponse
     */
    public function listUpstreamTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListUpstreamTasksRequest $request ListUpstreamTasksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUpstreamTasksResponse ListUpstreamTasksResponse
     */
    public function listUpstreamTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUpstreamTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUpstreamTasksRequest $request ListUpstreamTasksRequest
     *
     * @return ListUpstreamTasksResponse ListUpstreamTasksResponse
     */
    public function listUpstreamTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of workflows in DataStudio. You can also specify filter conditions to query specific workflows.
     *  *
     * @param ListWorkflowDefinitionsRequest $request ListWorkflowDefinitionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkflowDefinitionsResponse ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListWorkflowDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of workflows in DataStudio. You can also specify filter conditions to query specific workflows.
     *  *
     * @param ListWorkflowDefinitionsRequest $request ListWorkflowDefinitionsRequest
     *
     * @return ListWorkflowDefinitionsResponse ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a user-defined function (UDF) to a path in DataStudio.
     *  *
     * @param MoveFunctionRequest $request MoveFunctionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveFunctionResponse MoveFunctionResponse
     */
    public function moveFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return MoveFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a user-defined function (UDF) to a path in DataStudio.
     *  *
     * @param MoveFunctionRequest $request MoveFunctionRequest
     *
     * @return MoveFunctionResponse MoveFunctionResponse
     */
    public function moveFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a node to a path in DataStudio.
     *  *
     * @param MoveNodeRequest $request MoveNodeRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveNodeResponse MoveNodeResponse
     */
    public function moveNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return MoveNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a node to a path in DataStudio.
     *  *
     * @param MoveNodeRequest $request MoveNodeRequest
     *
     * @return MoveNodeResponse MoveNodeResponse
     */
    public function moveNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a file resource to a path in DataStudio.
     *  *
     * @param MoveResourceRequest $request MoveResourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceResponse MoveResourceResponse
     */
    public function moveResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return MoveResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a file resource to a path in DataStudio.
     *  *
     * @param MoveResourceRequest $request MoveResourceRequest
     *
     * @return MoveResourceResponse MoveResourceResponse
     */
    public function moveResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a workflow to a path in DataStudio.
     *  *
     * @param MoveWorkflowDefinitionRequest $request MoveWorkflowDefinitionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveWorkflowDefinitionResponse MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return MoveWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a workflow to a path in DataStudio.
     *  *
     * @param MoveWorkflowDefinitionRequest $request MoveWorkflowDefinitionRequest
     *
     * @return MoveWorkflowDefinitionResponse MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTaskInstanceDependenciesRequest $tmpReq  RemoveTaskInstanceDependenciesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTaskInstanceDependenciesResponse RemoveTaskInstanceDependenciesResponse
     */
    public function removeTaskInstanceDependenciesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveTaskInstanceDependenciesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->upstreamTaskInstanceIds)) {
            $request->upstreamTaskInstanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->upstreamTaskInstanceIds, 'UpstreamTaskInstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->upstreamTaskInstanceIdsShrink)) {
            $body['UpstreamTaskInstanceIds'] = $request->upstreamTaskInstanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return RemoveTaskInstanceDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveTaskInstanceDependenciesRequest $request RemoveTaskInstanceDependenciesRequest
     *
     * @return RemoveTaskInstanceDependenciesResponse RemoveTaskInstanceDependenciesResponse
     */
    public function removeTaskInstanceDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTaskInstanceDependenciesWithOptions($request, $runtime);
    }

    /**
     * @summary Renames a user-defined function (UDF) in DataStudio.
     *  *
     * @param RenameFunctionRequest $request RenameFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameFunctionResponse RenameFunctionResponse
     */
    public function renameFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RenameFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renames a user-defined function (UDF) in DataStudio.
     *  *
     * @param RenameFunctionRequest $request RenameFunctionRequest
     *
     * @return RenameFunctionResponse RenameFunctionResponse
     */
    public function renameFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary Renames a node in DataStudio.
     *  *
     * @param RenameNodeRequest $request RenameNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameNodeResponse RenameNodeResponse
     */
    public function renameNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RenameNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renames a node in DataStudio.
     *  *
     * @param RenameNodeRequest $request RenameNodeRequest
     *
     * @return RenameNodeResponse RenameNodeResponse
     */
    public function renameNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Renames a file resource in DataStudio.
     *  *
     * @param RenameResourceRequest $request RenameResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameResourceResponse RenameResourceResponse
     */
    public function renameResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RenameResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renames a file resource in DataStudio.
     *  *
     * @param RenameResourceRequest $request RenameResourceRequest
     *
     * @return RenameResourceResponse RenameResourceResponse
     */
    public function renameResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Renames a workflow in DataStudio.
     *  *
     * @param RenameWorkflowDefinitionRequest $request RenameWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameWorkflowDefinitionResponse RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RenameWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renames a workflow in DataStudio.
     *  *
     * @param RenameWorkflowDefinitionRequest $request RenameWorkflowDefinitionRequest
     *
     * @return RenameWorkflowDefinitionResponse RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param RerunTaskInstancesRequest $tmpReq  RerunTaskInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RerunTaskInstancesResponse RerunTaskInstancesResponse
     */
    public function rerunTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RerunTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RerunTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RerunTaskInstancesRequest $request RerunTaskInstancesRequest
     *
     * @return RerunTaskInstancesResponse RerunTaskInstancesResponse
     */
    public function rerunTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ResumeTaskInstancesRequest $tmpReq  ResumeTaskInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeTaskInstancesResponse ResumeTaskInstancesResponse
     */
    public function resumeTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResumeTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ResumeTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeTaskInstancesRequest $request ResumeTaskInstancesRequest
     *
     * @return ResumeTaskInstancesResponse ResumeTaskInstancesResponse
     */
    public function resumeTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes roles that are assigned to a member in a workspace.
     *  *
     * @param RevokeMemberProjectRolesRequest $tmpReq  RevokeMemberProjectRolesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeMemberProjectRolesResponse RevokeMemberProjectRolesResponse
     */
    public function revokeMemberProjectRolesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevokeMemberProjectRolesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleCodes)) {
            $request->roleCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleCodes, 'RoleCodes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCodesShrink)) {
            $body['RoleCodes'] = $request->roleCodesShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RevokeMemberProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes roles that are assigned to a member in a workspace.
     *  *
     * @param RevokeMemberProjectRolesRequest $request RevokeMemberProjectRolesRequest
     *
     * @return RevokeMemberProjectRolesResponse RevokeMemberProjectRolesResponse
     */
    public function revokeMemberProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeMemberProjectRolesWithOptions($request, $runtime);
    }

    /**
     * @param SetSuccessTaskInstancesRequest $tmpReq  SetSuccessTaskInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSuccessTaskInstancesResponse SetSuccessTaskInstancesResponse
     */
    public function setSuccessTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetSuccessTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return SetSuccessTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSuccessTaskInstancesRequest $request SetSuccessTaskInstancesRequest
     *
     * @return SetSuccessTaskInstancesResponse SetSuccessTaskInstancesResponse
     */
    public function setSuccessTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 启动数据集成任务
     *  *
     * @param StartDIJobRequest $tmpReq  StartDIJobRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDIJobResponse StartDIJobResponse
     */
    public function startDIJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartDIJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->realtimeStartSettings)) {
            $request->realtimeStartSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->realtimeStartSettings, 'RealtimeStartSettings', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StartDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动数据集成任务
     *  *
     * @param StartDIJobRequest $request StartDIJobRequest
     *
     * @return StartDIJobResponse StartDIJobResponse
     */
    public function startDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDIJobWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a synchronization task.
     *  *
     * @param StopDIJobRequest $request StopDIJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDIJobResponse StopDIJobResponse
     */
    public function stopDIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StopDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a synchronization task.
     *  *
     * @param StopDIJobRequest $request StopDIJobRequest
     *
     * @return StopDIJobResponse StopDIJobResponse
     */
    public function stopDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDIJobWithOptions($request, $runtime);
    }

    /**
     * @param StopTaskInstancesRequest $tmpReq  StopTaskInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTaskInstancesResponse StopTaskInstancesResponse
     */
    public function stopTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return StopTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopTaskInstancesRequest $request StopTaskInstancesRequest
     *
     * @return StopTaskInstancesResponse StopTaskInstancesResponse
     */
    public function stopTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param SuspendTaskInstancesRequest $tmpReq  SuspendTaskInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendTaskInstancesResponse SuspendTaskInstancesResponse
     */
    public function suspendTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SuspendTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $body['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return SuspendTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendTaskInstancesRequest $request SuspendTaskInstancesRequest
     *
     * @return SuspendTaskInstancesResponse SuspendTaskInstancesResponse
     */
    public function suspendTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @param TriggerSchedulerTaskInstanceRequest $request TriggerSchedulerTaskInstanceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return TriggerSchedulerTaskInstanceResponse TriggerSchedulerTaskInstanceResponse
     */
    public function triggerSchedulerTaskInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->triggerTime)) {
            $body['TriggerTime'] = $request->triggerTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return TriggerSchedulerTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TriggerSchedulerTaskInstanceRequest $request TriggerSchedulerTaskInstanceRequest
     *
     * @return TriggerSchedulerTaskInstanceResponse TriggerSchedulerTaskInstanceResponse
     */
    public function triggerSchedulerTaskInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerSchedulerTaskInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义监控报警规则
     *  *
     * @param UpdateAlertRuleRequest $tmpReq  UpdateAlertRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAlertRuleResponse UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAlertRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->triggerCondition)) {
            $request->triggerConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->triggerCondition, 'TriggerCondition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->triggerConditionShrink)) {
            $query['TriggerCondition'] = $request->triggerConditionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义监控报警规则
     *  *
     * @param UpdateAlertRuleRequest $request UpdateAlertRuleRequest
     *
     * @return UpdateAlertRuleResponse UpdateAlertRuleResponse
     */
    public function updateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新数据集成报警规则
     *  *
     * @param UpdateDIAlarmRuleRequest $tmpReq  UpdateDIAlarmRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDIAlarmRuleResponse UpdateDIAlarmRuleResponse
     */
    public function updateDIAlarmRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDIAlarmRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notificationSettings)) {
            $request->notificationSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notificationSettings, 'NotificationSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->triggerConditions)) {
            $request->triggerConditionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->triggerConditions, 'TriggerConditions', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateDIAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据集成报警规则
     *  *
     * @param UpdateDIAlarmRuleRequest $request UpdateDIAlarmRuleRequest
     *
     * @return UpdateDIAlarmRuleResponse UpdateDIAlarmRuleResponse
     */
    public function updateDIAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新数据集成任务
     *  *
     * @param UpdateDIJobRequest $tmpReq  UpdateDIJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDIJobResponse UpdateDIJobResponse
     */
    public function updateDIJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDIJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobSettings)) {
            $request->jobSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobSettings, 'JobSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSettings)) {
            $request->resourceSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSettings, 'ResourceSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->tableMappings)) {
            $request->tableMappingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tableMappings, 'TableMappings', 'json');
        }
        if (!Utils::isUnset($tmpReq->transformationRules)) {
            $request->transformationRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transformationRules, 'TransformationRules', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateDIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据集成任务
     *  *
     * @param UpdateDIJobRequest $request UpdateDIJobRequest
     *
     * @return UpdateDIJobResponse UpdateDIJobResponse
     */
    public function updateDIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIJobWithOptions($request, $runtime);
    }

    /**
     * @summary 验证用
     *  *
     * @param UpdateDataSourceRequest $request UpdateDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDataSourceResponse UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionProperties)) {
            $query['ConnectionProperties'] = $request->connectionProperties;
        }
        if (!Utils::isUnset($request->connectionPropertiesMode)) {
            $query['ConnectionPropertiesMode'] = $request->connectionPropertiesMode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证用
     *  *
     * @param UpdateDataSourceRequest $request UpdateDataSourceRequest
     *
     * @return UpdateDataSourceResponse UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about a user-defined function (UDF) in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about a user-defined function (UDF) in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about a node in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateNodeRequest $request UpdateNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNodeResponse UpdateNodeResponse
     */
    public function updateNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about a node in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateNodeRequest $request UpdateNodeRequest
     *
     * @return UpdateNodeResponse UpdateNodeResponse
     */
    public function updateNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新工作空间
     *  *
     * @param UpdateProjectRequest $request UpdateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->devEnvironmentEnabled)) {
            $body['DevEnvironmentEnabled'] = $request->devEnvironmentEnabled;
        }
        if (!Utils::isUnset($request->devRoleDisabled)) {
            $body['DevRoleDisabled'] = $request->devRoleDisabled;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->paiTaskEnabled)) {
            $body['PaiTaskEnabled'] = $request->paiTaskEnabled;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作空间
     *  *
     * @param UpdateProjectRequest $request UpdateProjectRequest
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about a file resource in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateResourceRequest $request UpdateResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceResponse UpdateResourceResponse
     */
    public function updateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about a file resource in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateResourceRequest $request UpdateResourceRequest
     *
     * @return UpdateResourceResponse UpdateResourceResponse
     */
    public function updateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates basic information about a resource group.
     *  *
     * @param UpdateResourceGroupRequest $request UpdateResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates basic information about a resource group.
     *  *
     * @param UpdateResourceGroupRequest $request UpdateResourceGroupRequest
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 更新网络资源的路由。
     *  *
     * @param UpdateRouteRequest $request UpdateRouteRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRouteResponse UpdateRouteResponse
     */
    public function updateRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCidr)) {
            $body['DestinationCidr'] = $request->destinationCidr;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新网络资源的路由。
     *  *
     * @param UpdateRouteRequest $request UpdateRouteRequest
     *
     * @return UpdateRouteResponse UpdateRouteResponse
     */
    public function updateRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRouteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskInstancesRequest $tmpReq  UpdateTaskInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskInstancesResponse UpdateTaskInstancesResponse
     */
    public function updateTaskInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskInstances)) {
            $request->taskInstancesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskInstances, 'TaskInstances', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->taskInstancesShrink)) {
            $body['TaskInstances'] = $request->taskInstancesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskInstancesRequest $request UpdateTaskInstancesRequest
     *
     * @return UpdateTaskInstancesResponse UpdateTaskInstancesResponse
     */
    public function updateTaskInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about a workflow in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateWorkflowDefinitionRequest $request UpdateWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkflowDefinitionResponse UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about a workflow in DataStudio. This API operation performs an incremental update. The update information is described by using FlowSpec.
     *  *
     * @param UpdateWorkflowDefinitionRequest $request UpdateWorkflowDefinitionRequest
     *
     * @return UpdateWorkflowDefinitionResponse UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDefinitionWithOptions($request, $runtime);
    }
}

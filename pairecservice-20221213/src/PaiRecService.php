<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ApplyEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ApplyEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckInstanceResourcesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckInstanceResourcesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckTrafficControlTaskExpressionRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckTrafficControlTaskExpressionResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneFeatureConsistencyCheckJobConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneFeatureConsistencyCheckJobConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CloneTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CompareSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CompareSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCalculationJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCalculationJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateFeatureConsistencyCheckJobConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateFeatureConsistencyCheckJobConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateFeatureConsistencyCheckJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateFeatureConsistencyCheckJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateInstanceResourceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateParamRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateParamResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateResourceRuleItemRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateResourceRuleItemResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTableMetaResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DebugResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DebugResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DebugResourceRuleShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteABMetricRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteABMetricResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteParamRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteParamResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteResourceRuleItemRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteResourceRuleItemResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTableMetaResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateAlgorithmCustomizationScriptRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateAlgorithmCustomizationScriptResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateTrafficControlTaskCodeRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateTrafficControlTaskCodeResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateTrafficControlTaskConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GenerateTrafficControlTaskConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetABMetricRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetABMetricResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetCalculationJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetCalculationJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetFeatureConsistencyCheckJobConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetFeatureConsistencyCheckJobConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetFeatureConsistencyCheckJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetFeatureConsistencyCheckJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceTableResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTableMetaResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricGroupsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricGroupsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdUsersRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdUsersResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListEngineConfigsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListEngineConfigsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentGroupsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentGroupsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobConfigsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobConfigsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobFeatureReportsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobFeatureReportsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourcesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourcesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLayersRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLayersResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListParamsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListParamsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSampleConsistencyJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSampleConsistencyJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTargetTrafficHistoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTargetTrafficHistoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushAllExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushAllExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SyncFeatureConsistencyCheckJobReplayLogRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SyncFeatureConsistencyCheckJobReplayLogResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\TerminateFeatureConsistencyCheckJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\TerminateFeatureConsistencyCheckJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateABMetricRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateABMetricResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateFeatureConsistencyCheckJobConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateFeatureConsistencyCheckJobConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateInstanceResourceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateParamRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateParamResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateResourceRuleItemRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateResourceRuleItemResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTableMetaResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskTrafficRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskTrafficResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UploadRecommendationDataRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UploadRecommendationDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PaiRecService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pairecservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 应用/发布指定的推荐引擎配置.
     *
     * @param request - ApplyEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyEngineConfigResponse
     *
     * @param string                   $EngineConfigId
     * @param ApplyEngineConfigRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ApplyEngineConfigResponse
     */
    public function applyEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs/' . Url::percentEncode($EngineConfigId) . '/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用/发布指定的推荐引擎配置.
     *
     * @param request - ApplyEngineConfigRequest
     *
     * @returns ApplyEngineConfigResponse
     *
     * @param string                   $EngineConfigId
     * @param ApplyEngineConfigRequest $request
     *
     * @return ApplyEngineConfigResponse
     */
    public function applyEngineConfig($EngineConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime);
    }

    /**
     * 特征一致性检查数据回流。
     *
     * @param request - BackflowFeatureConsistencyCheckJobDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackflowFeatureConsistencyCheckJobDataResponse
     *
     * @param BackflowFeatureConsistencyCheckJobDataRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return BackflowFeatureConsistencyCheckJobDataResponse
     */
    public function backflowFeatureConsistencyCheckJobDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->featureConsistencyCheckJobConfigId) {
            @$body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemFeatures) {
            @$body['ItemFeatures'] = $request->itemFeatures;
        }

        if (null !== $request->logItemId) {
            @$body['LogItemId'] = $request->logItemId;
        }

        if (null !== $request->logRequestId) {
            @$body['LogRequestId'] = $request->logRequestId;
        }

        if (null !== $request->logRequestTime) {
            @$body['LogRequestTime'] = $request->logRequestTime;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->sceneName) {
            @$body['SceneName'] = $request->sceneName;
        }

        if (null !== $request->scores) {
            @$body['Scores'] = $request->scores;
        }

        if (null !== $request->serviceName) {
            @$body['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->userFeatures) {
            @$body['UserFeatures'] = $request->userFeatures;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BackflowFeatureConsistencyCheckJobData',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/action/backflowdata',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BackflowFeatureConsistencyCheckJobDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 特征一致性检查数据回流。
     *
     * @param request - BackflowFeatureConsistencyCheckJobDataRequest
     *
     * @returns BackflowFeatureConsistencyCheckJobDataResponse
     *
     * @param BackflowFeatureConsistencyCheckJobDataRequest $request
     *
     * @return BackflowFeatureConsistencyCheckJobDataResponse
     */
    public function backflowFeatureConsistencyCheckJobData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->backflowFeatureConsistencyCheckJobDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 检测实例下配置的资源的连接状态。
     *
     * @param request - CheckInstanceResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceResourcesResponse
     *
     * @param string                        $InstanceId
     * @param CheckInstanceResourcesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CheckInstanceResourcesResponse
     */
    public function checkInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceResources',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/action/checkresources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检测实例下配置的资源的连接状态。
     *
     * @param request - CheckInstanceResourcesRequest
     *
     * @returns CheckInstanceResourcesResponse
     *
     * @param string                        $InstanceId
     * @param CheckInstanceResourcesRequest $request
     *
     * @return CheckInstanceResourcesResponse
     */
    public function checkInstanceResources($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * 校验流量调控任务中的表达式.
     *
     * @param request - CheckTrafficControlTaskExpressionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckTrafficControlTaskExpressionResponse
     *
     * @param CheckTrafficControlTaskExpressionRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckTrafficControlTaskExpressionResponse
     */
    public function checkTrafficControlTaskExpressionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tableMetaId) {
            @$query['TableMetaId'] = $request->tableMetaId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckTrafficControlTaskExpression',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/action/checkexpression',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckTrafficControlTaskExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验流量调控任务中的表达式.
     *
     * @param request - CheckTrafficControlTaskExpressionRequest
     *
     * @returns CheckTrafficControlTaskExpressionResponse
     *
     * @param CheckTrafficControlTaskExpressionRequest $request
     *
     * @return CheckTrafficControlTaskExpressionResponse
     */
    public function checkTrafficControlTaskExpression($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkTrafficControlTaskExpressionWithOptions($request, $headers, $runtime);
    }

    /**
     * 克隆指定的推荐引擎配置.
     *
     * @param request - CloneEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneEngineConfigResponse
     *
     * @param string                   $EngineConfigId
     * @param CloneEngineConfigRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CloneEngineConfigResponse
     */
    public function cloneEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configValue) {
            @$body['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs/' . Url::percentEncode($EngineConfigId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆指定的推荐引擎配置.
     *
     * @param request - CloneEngineConfigRequest
     *
     * @returns CloneEngineConfigResponse
     *
     * @param string                   $EngineConfigId
     * @param CloneEngineConfigRequest $request
     *
     * @return CloneEngineConfigResponse
     */
    public function cloneEngineConfig($EngineConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime);
    }

    /**
     * 克隆实验。
     *
     * @param request - CloneExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneExperimentResponse
     *
     * @param string                 $ExperimentId
     * @param CloneExperimentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CloneExperimentResponse
     */
    public function cloneExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆实验。
     *
     * @param request - CloneExperimentRequest
     *
     * @returns CloneExperimentResponse
     *
     * @param string                 $ExperimentId
     * @param CloneExperimentRequest $request
     *
     * @return CloneExperimentResponse
     */
    public function cloneExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 克隆实验组，并克隆实验组下的所有实验至新的实验组中。
     *
     * @param request - CloneExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneExperimentGroupResponse
     *
     * @param string                      $ExperimentGroupId
     * @param CloneExperimentGroupRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CloneExperimentGroupResponse
     */
    public function cloneExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->layerId) {
            @$body['LayerId'] = $request->layerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆实验组，并克隆实验组下的所有实验至新的实验组中。
     *
     * @param request - CloneExperimentGroupRequest
     *
     * @returns CloneExperimentGroupResponse
     *
     * @param string                      $ExperimentGroupId
     * @param CloneExperimentGroupRequest $request
     *
     * @return CloneExperimentGroupResponse
     */
    public function cloneExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 克隆特征一致性检查配置。
     *
     * @param request - CloneFeatureConsistencyCheckJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                       $SourceFeatureConsistencyCheckJobConfigId
     * @param CloneFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponse
     */
    public function cloneFeatureConsistencyCheckJobConfigWithOptions($SourceFeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneFeatureConsistencyCheckJobConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobconfigs/' . Url::percentEncode($SourceFeatureConsistencyCheckJobConfigId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆特征一致性检查配置。
     *
     * @param request - CloneFeatureConsistencyCheckJobConfigRequest
     *
     * @returns CloneFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                       $SourceFeatureConsistencyCheckJobConfigId
     * @param CloneFeatureConsistencyCheckJobConfigRequest $request
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponse
     */
    public function cloneFeatureConsistencyCheckJobConfig($SourceFeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneFeatureConsistencyCheckJobConfigWithOptions($SourceFeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 克隆实验室。
     *
     * @param request - CloneLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneLaboratoryResponse
     *
     * @param string                 $LaboratoryId
     * @param CloneLaboratoryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CloneLaboratoryResponse
     */
    public function cloneLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloneExperimentGroup) {
            @$body['CloneExperimentGroup'] = $request->cloneExperimentGroup;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆实验室。
     *
     * @param request - CloneLaboratoryRequest
     *
     * @returns CloneLaboratoryResponse
     *
     * @param string                 $LaboratoryId
     * @param CloneLaboratoryRequest $request
     *
     * @return CloneLaboratoryResponse
     */
    public function cloneLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 克隆流量调控任务
     *
     * @param request - CloneTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneTrafficControlTaskResponse
     *
     * @param string                         $TrafficControlTaskId
     * @param CloneTrafficControlTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CloneTrafficControlTaskResponse
     */
    public function cloneTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆流量调控任务
     *
     * @param request - CloneTrafficControlTaskRequest
     *
     * @returns CloneTrafficControlTaskResponse
     *
     * @param string                         $TrafficControlTaskId
     * @param CloneTrafficControlTaskRequest $request
     *
     * @return CloneTrafficControlTaskResponse
     */
    public function cloneTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 对比样本一致性任务
     *
     * @param request - CompareSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareSampleConsistencyJobResponse
     *
     * @param string                             $SampleConsistencyJobId
     * @param CompareSampleConsistencyJobRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CompareSampleConsistencyJobResponse
     */
    public function compareSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '/action/compare',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompareSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对比样本一致性任务
     *
     * @param request - CompareSampleConsistencyJobRequest
     *
     * @returns CompareSampleConsistencyJobResponse
     *
     * @param string                             $SampleConsistencyJobId
     * @param CompareSampleConsistencyJobRequest $request
     *
     * @return CompareSampleConsistencyJobResponse
     */
    public function compareSampleConsistencyJob($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->compareSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 创建AB test实验指标.
     *
     * @param request - CreateABMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateABMetricResponse
     *
     * @param CreateABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateABMetricResponse
     */
    public function createABMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->leftMetricId) {
            @$body['LeftMetricId'] = $request->leftMetricId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->operator) {
            @$body['Operator'] = $request->operator;
        }

        if (null !== $request->realtime) {
            @$body['Realtime'] = $request->realtime;
        }

        if (null !== $request->resultResourceId) {
            @$body['ResultResourceId'] = $request->resultResourceId;
        }

        if (null !== $request->rightMetricId) {
            @$body['RightMetricId'] = $request->rightMetricId;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->statisticsCycle) {
            @$body['StatisticsCycle'] = $request->statisticsCycle;
        }

        if (null !== $request->tableMetaId) {
            @$body['TableMetaId'] = $request->tableMetaId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateABMetric',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetrics',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建AB test实验指标.
     *
     * @param request - CreateABMetricRequest
     *
     * @returns CreateABMetricResponse
     *
     * @param CreateABMetricRequest $request
     *
     * @return CreateABMetricResponse
     */
    public function createABMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建指标组.
     *
     * @param request - CreateABMetricGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateABMetricGroupResponse
     *
     * @param CreateABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateABMetricGroupResponse
     */
    public function createABMetricGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ABMetricIds) {
            @$body['ABMetricIds'] = $request->ABMetricIds;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->realtime) {
            @$body['Realtime'] = $request->realtime;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateABMetricGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建指标组.
     *
     * @param request - CreateABMetricGroupRequest
     *
     * @returns CreateABMetricGroupResponse
     *
     * @param CreateABMetricGroupRequest $request
     *
     * @return CreateABMetricGroupResponse
     */
    public function createABMetricGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABMetricGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建AB指标的计算任务。
     *
     * @param request - CreateCalculationJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCalculationJobsResponse
     *
     * @param CreateCalculationJobsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCalculationJobsResponse
     */
    public function createCalculationJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ABMetricIds) {
            @$body['ABMetricIds'] = $request->ABMetricIds;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCalculationJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/batch/calculationjobs/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCalculationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建AB指标的计算任务。
     *
     * @param request - CreateCalculationJobsRequest
     *
     * @returns CreateCalculationJobsResponse
     *
     * @param CreateCalculationJobsRequest $request
     *
     * @return CreateCalculationJobsResponse
     */
    public function createCalculationJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCalculationJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建人群。
     *
     * @param request - CreateCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCrowdResponse
     *
     * @param CreateCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateCrowdResponse
     */
    public function createCrowdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建人群。
     *
     * @param request - CreateCrowdRequest
     *
     * @returns CreateCrowdResponse
     *
     * @param CreateCrowdRequest $request
     *
     * @return CreateCrowdResponse
     */
    public function createCrowd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCrowdWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建引擎配置.
     *
     * @param request - CreateEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEngineConfigResponse
     *
     * @param CreateEngineConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateEngineConfigResponse
     */
    public function createEngineConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configValue) {
            @$body['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建引擎配置.
     *
     * @param request - CreateEngineConfigRequest
     *
     * @returns CreateEngineConfigResponse
     *
     * @param CreateEngineConfigRequest $request
     *
     * @return CreateEngineConfigResponse
     */
    public function createEngineConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEngineConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建实验。
     *
     * @param request - CreateExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->experimentGroupId) {
            @$body['ExperimentGroupId'] = $request->experimentGroupId;
        }

        if (null !== $request->flowPercent) {
            @$body['FlowPercent'] = $request->flowPercent;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验。
     *
     * @param request - CreateExperimentRequest
     *
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     *
     * @return CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建实验组。
     *
     * @param request - CreateExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperimentGroupResponse
     *
     * @param CreateExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateExperimentGroupResponse
     */
    public function createExperimentGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->crowdId) {
            @$body['CrowdId'] = $request->crowdId;
        }

        if (null !== $request->crowdTargetType) {
            @$body['CrowdTargetType'] = $request->crowdTargetType;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->distributionTimeDuration) {
            @$body['DistributionTimeDuration'] = $request->distributionTimeDuration;
        }

        if (null !== $request->distributionType) {
            @$body['DistributionType'] = $request->distributionType;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->layerId) {
            @$body['LayerId'] = $request->layerId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->needAA) {
            @$body['NeedAA'] = $request->needAA;
        }

        if (null !== $request->randomFlow) {
            @$body['RandomFlow'] = $request->randomFlow;
        }

        if (null !== $request->reservedBuckets) {
            @$body['ReservedBuckets'] = $request->reservedBuckets;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验组。
     *
     * @param request - CreateExperimentGroupRequest
     *
     * @returns CreateExperimentGroupResponse
     *
     * @param CreateExperimentGroupRequest $request
     *
     * @return CreateExperimentGroupResponse
     */
    public function createExperimentGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建特征一致性检查任务。
     *
     * @param request - CreateFeatureConsistencyCheckJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFeatureConsistencyCheckJobResponse
     *
     * @param CreateFeatureConsistencyCheckJobRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateFeatureConsistencyCheckJobResponse
     */
    public function createFeatureConsistencyCheckJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->featureConsistencyCheckJobConfigId) {
            @$body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->samplingDuration) {
            @$body['SamplingDuration'] = $request->samplingDuration;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFeatureConsistencyCheckJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建特征一致性检查任务。
     *
     * @param request - CreateFeatureConsistencyCheckJobRequest
     *
     * @returns CreateFeatureConsistencyCheckJobResponse
     *
     * @param CreateFeatureConsistencyCheckJobRequest $request
     *
     * @return CreateFeatureConsistencyCheckJobResponse
     */
    public function createFeatureConsistencyCheckJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureConsistencyCheckJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建特征一致性检查配置。
     *
     * @param request - CreateFeatureConsistencyCheckJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFeatureConsistencyCheckJobConfigResponse
     *
     * @param CreateFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponse
     */
    public function createFeatureConsistencyCheckJobConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->compareFeature) {
            @$body['CompareFeature'] = $request->compareFeature;
        }

        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetMountPath) {
            @$body['DatasetMountPath'] = $request->datasetMountPath;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->datasetType) {
            @$body['DatasetType'] = $request->datasetType;
        }

        if (null !== $request->datasetUri) {
            @$body['DatasetUri'] = $request->datasetUri;
        }

        if (null !== $request->defaultRoute) {
            @$body['DefaultRoute'] = $request->defaultRoute;
        }

        if (null !== $request->easServiceName) {
            @$body['EasServiceName'] = $request->easServiceName;
        }

        if (null !== $request->easyRecPackagePath) {
            @$body['EasyRecPackagePath'] = $request->easyRecPackagePath;
        }

        if (null !== $request->easyRecVersion) {
            @$body['EasyRecVersion'] = $request->easyRecVersion;
        }

        if (null !== $request->featureDisplayExclude) {
            @$body['FeatureDisplayExclude'] = $request->featureDisplayExclude;
        }

        if (null !== $request->featureLandingResourceId) {
            @$body['FeatureLandingResourceId'] = $request->featureLandingResourceId;
        }

        if (null !== $request->featurePriority) {
            @$body['FeaturePriority'] = $request->featurePriority;
        }

        if (null !== $request->featureStoreItemId) {
            @$body['FeatureStoreItemId'] = $request->featureStoreItemId;
        }

        if (null !== $request->featureStoreModelId) {
            @$body['FeatureStoreModelId'] = $request->featureStoreModelId;
        }

        if (null !== $request->featureStoreProjectId) {
            @$body['FeatureStoreProjectId'] = $request->featureStoreProjectId;
        }

        if (null !== $request->featureStoreProjectName) {
            @$body['FeatureStoreProjectName'] = $request->featureStoreProjectName;
        }

        if (null !== $request->featureStoreSeqFeatureView) {
            @$body['FeatureStoreSeqFeatureView'] = $request->featureStoreSeqFeatureView;
        }

        if (null !== $request->featureStoreUserId) {
            @$body['FeatureStoreUserId'] = $request->featureStoreUserId;
        }

        if (null !== $request->fgJarVersion) {
            @$body['FgJarVersion'] = $request->fgJarVersion;
        }

        if (null !== $request->fgJsonFileName) {
            @$body['FgJsonFileName'] = $request->fgJsonFileName;
        }

        if (null !== $request->generateZip) {
            @$body['GenerateZip'] = $request->generateZip;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemIdField) {
            @$body['ItemIdField'] = $request->itemIdField;
        }

        if (null !== $request->itemTable) {
            @$body['ItemTable'] = $request->itemTable;
        }

        if (null !== $request->itemTablePartitionField) {
            @$body['ItemTablePartitionField'] = $request->itemTablePartitionField;
        }

        if (null !== $request->itemTablePartitionFieldFormat) {
            @$body['ItemTablePartitionFieldFormat'] = $request->itemTablePartitionFieldFormat;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ossResourceId) {
            @$body['OssResourceId'] = $request->ossResourceId;
        }

        if (null !== $request->predictWorkerCount) {
            @$body['PredictWorkerCount'] = $request->predictWorkerCount;
        }

        if (null !== $request->predictWorkerCpu) {
            @$body['PredictWorkerCpu'] = $request->predictWorkerCpu;
        }

        if (null !== $request->predictWorkerMemory) {
            @$body['PredictWorkerMemory'] = $request->predictWorkerMemory;
        }

        if (null !== $request->resourceConfig) {
            @$body['ResourceConfig'] = $request->resourceConfig;
        }

        if (null !== $request->sampleRate) {
            @$body['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->securityGroupId) {
            @$body['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->switchId) {
            @$body['SwitchId'] = $request->switchId;
        }

        if (null !== $request->useFeatureStore) {
            @$body['UseFeatureStore'] = $request->useFeatureStore;
        }

        if (null !== $request->userIdField) {
            @$body['UserIdField'] = $request->userIdField;
        }

        if (null !== $request->userTable) {
            @$body['UserTable'] = $request->userTable;
        }

        if (null !== $request->userTablePartitionField) {
            @$body['UserTablePartitionField'] = $request->userTablePartitionField;
        }

        if (null !== $request->userTablePartitionFieldFormat) {
            @$body['UserTablePartitionFieldFormat'] = $request->userTablePartitionFieldFormat;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->workflowName) {
            @$body['WorkflowName'] = $request->workflowName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFeatureConsistencyCheckJobConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建特征一致性检查配置。
     *
     * @param request - CreateFeatureConsistencyCheckJobConfigRequest
     *
     * @returns CreateFeatureConsistencyCheckJobConfigResponse
     *
     * @param CreateFeatureConsistencyCheckJobConfigRequest $request
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponse
     */
    public function createFeatureConsistencyCheckJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureConsistencyCheckJobConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 为指定实例配置创建新的配置资源.
     *
     * @param request - CreateInstanceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param CreateInstanceResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInstanceResourceResponse
     */
    public function createInstanceResourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->group) {
            @$body['Group'] = $request->group;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceResource',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为指定实例配置创建新的配置资源.
     *
     * @param request - CreateInstanceResourceRequest
     *
     * @returns CreateInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param CreateInstanceResourceRequest $request
     *
     * @return CreateInstanceResourceResponse
     */
    public function createInstanceResource($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceResourceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * 创建实验室.
     *
     * @param request - CreateLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLaboratoryResponse
     *
     * @param CreateLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLaboratoryResponse
     */
    public function createLaboratoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bucketCount) {
            @$body['BucketCount'] = $request->bucketCount;
        }

        if (null !== $request->bucketType) {
            @$body['BucketType'] = $request->bucketType;
        }

        if (null !== $request->buckets) {
            @$body['Buckets'] = $request->buckets;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验室.
     *
     * @param request - CreateLaboratoryRequest
     *
     * @returns CreateLaboratoryResponse
     *
     * @param CreateLaboratoryRequest $request
     *
     * @return CreateLaboratoryResponse
     */
    public function createLaboratory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLaboratoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建层。
     *
     * @param request - CreateLayerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLayerResponse
     *
     * @param CreateLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateLayerResponse
     */
    public function createLayerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->laboratoryId) {
            @$body['LaboratoryId'] = $request->laboratoryId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLayer',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/layers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建层。
     *
     * @param request - CreateLayerRequest
     *
     * @returns CreateLayerResponse
     *
     * @param CreateLayerRequest $request
     *
     * @return CreateLayerResponse
     */
    public function createLayer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建参数。
     *
     * @param request - CreateParamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParamResponse
     *
     * @param CreateParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateParamResponse
     */
    public function createParamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateParam',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/params',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建参数。
     *
     * @param request - CreateParamRequest
     *
     * @returns CreateParamResponse
     *
     * @param CreateParamRequest $request
     *
     * @return CreateParamResponse
     */
    public function createParam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createParamWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建资源规则.
     *
     * @param request - CreateResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceRuleResponse
     *
     * @param CreateResourceRuleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateResourceRuleResponse
     */
    public function createResourceRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metricOperationType) {
            @$body['MetricOperationType'] = $request->metricOperationType;
        }

        if (null !== $request->metricPullInfo) {
            @$body['MetricPullInfo'] = $request->metricPullInfo;
        }

        if (null !== $request->metricPullPeriod) {
            @$body['MetricPullPeriod'] = $request->metricPullPeriod;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ruleComputingDefinition) {
            @$body['RuleComputingDefinition'] = $request->ruleComputingDefinition;
        }

        if (null !== $request->ruleItems) {
            @$body['RuleItems'] = $request->ruleItems;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源规则.
     *
     * @param request - CreateResourceRuleRequest
     *
     * @returns CreateResourceRuleResponse
     *
     * @param CreateResourceRuleRequest $request
     *
     * @return CreateResourceRuleResponse
     */
    public function createResourceRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建资源规则条目.
     *
     * @param request - CreateResourceRuleItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param CreateResourceRuleItemRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateResourceRuleItemResponse
     */
    public function createResourceRuleItemWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxValue) {
            @$body['MaxValue'] = $request->maxValue;
        }

        if (null !== $request->minValue) {
            @$body['MinValue'] = $request->minValue;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceRuleItem',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '/items',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源规则条目.
     *
     * @param request - CreateResourceRuleItemRequest
     *
     * @returns CreateResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param CreateResourceRuleItemRequest $request
     *
     * @return CreateResourceRuleItemResponse
     */
    public function createResourceRuleItem($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceRuleItemWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 创建样本一致性任务
     *
     * @param request - CreateSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleConsistencyJobResponse
     *
     * @param CreateSampleConsistencyJobRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSampleConsistencyJobResponse
     */
    public function createSampleConsistencyJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->easModelServiceName) {
            @$body['EasModelServiceName'] = $request->easModelServiceName;
        }

        if (null !== $request->featureSaveResourceId) {
            @$body['FeatureSaveResourceId'] = $request->featureSaveResourceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemIdField) {
            @$body['ItemIdField'] = $request->itemIdField;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->partitionField) {
            @$body['PartitionField'] = $request->partitionField;
        }

        if (null !== $request->partitionFieldFormat) {
            @$body['PartitionFieldFormat'] = $request->partitionFieldFormat;
        }

        if (null !== $request->requestIdField) {
            @$body['RequestIdField'] = $request->requestIdField;
        }

        if (null !== $request->sampleRate) {
            @$body['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sampleTableName) {
            @$body['SampleTableName'] = $request->sampleTableName;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->userIdField) {
            @$body['UserIdField'] = $request->userIdField;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建样本一致性任务
     *
     * @param request - CreateSampleConsistencyJobRequest
     *
     * @returns CreateSampleConsistencyJobResponse
     *
     * @param CreateSampleConsistencyJobRequest $request
     *
     * @return CreateSampleConsistencyJobResponse
     */
    public function createSampleConsistencyJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSampleConsistencyJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建场景.
     *
     * @param request - CreateSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSceneResponse
     *
     * @param CreateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flows) {
            @$body['Flows'] = $request->flows;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScene',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/scenes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建场景.
     *
     * @param request - CreateSceneRequest
     *
     * @returns CreateSceneResponse
     *
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定人群下创建子人群。
     *
     * @param request - CreateSubCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubCrowdResponse
     *
     * @param string                $CrowdId
     * @param CreateSubCrowdRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSubCrowdResponse
     */
    public function createSubCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSubCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '/subcrowds',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在指定人群下创建子人群。
     *
     * @param request - CreateSubCrowdRequest
     *
     * @returns CreateSubCrowdResponse
     *
     * @param string                $CrowdId
     * @param CreateSubCrowdRequest $request
     *
     * @return CreateSubCrowdResponse
     */
    public function createSubCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSubCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * 创建数据表。
     *
     * @param request - CreateTableMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTableMetaResponse
     *
     * @param CreateTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTableMetaResponse
     */
    public function createTableMetaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->module) {
            @$body['Module'] = $request->module;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTableMeta',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tablemetas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据表。
     *
     * @param request - CreateTableMetaRequest
     *
     * @returns CreateTableMetaResponse
     *
     * @param CreateTableMetaRequest $request
     *
     * @return CreateTableMetaResponse
     */
    public function createTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建流量调控目标.
     *
     * @param request - CreateTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrafficControlTargetResponse
     *
     * @param CreateTrafficControlTargetRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateTrafficControlTargetResponse
     */
    public function createTrafficControlTargetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->event) {
            @$body['Event'] = $request->event;
        }

        if (null !== $request->itemConditionArray) {
            @$body['ItemConditionArray'] = $request->itemConditionArray;
        }

        if (null !== $request->itemConditionExpress) {
            @$body['ItemConditionExpress'] = $request->itemConditionExpress;
        }

        if (null !== $request->itemConditionType) {
            @$body['ItemConditionType'] = $request->itemConditionType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->newProductRegulation) {
            @$body['NewProductRegulation'] = $request->newProductRegulation;
        }

        if (null !== $request->recallName) {
            @$body['RecallName'] = $request->recallName;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisPeriod) {
            @$body['StatisPeriod'] = $request->statisPeriod;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->toleranceValue) {
            @$body['ToleranceValue'] = $request->toleranceValue;
        }

        if (null !== $request->trafficControlTaskId) {
            @$body['TrafficControlTaskId'] = $request->trafficControlTaskId;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建流量调控目标.
     *
     * @param request - CreateTrafficControlTargetRequest
     *
     * @returns CreateTrafficControlTargetResponse
     *
     * @param CreateTrafficControlTargetRequest $request
     *
     * @return CreateTrafficControlTargetResponse
     */
    public function createTrafficControlTarget($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrafficControlTargetWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建流量调控任务
     *
     * @param request - CreateTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrafficControlTaskResponse
     *
     * @param CreateTrafficControlTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateTrafficControlTaskResponse
     */
    public function createTrafficControlTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->behaviorTableMetaId) {
            @$body['BehaviorTableMetaId'] = $request->behaviorTableMetaId;
        }

        if (null !== $request->controlGranularity) {
            @$body['ControlGranularity'] = $request->controlGranularity;
        }

        if (null !== $request->controlLogic) {
            @$body['ControlLogic'] = $request->controlLogic;
        }

        if (null !== $request->controlType) {
            @$body['ControlType'] = $request->controlType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->effectiveSceneIds) {
            @$body['EffectiveSceneIds'] = $request->effectiveSceneIds;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->executionTime) {
            @$body['ExecutionTime'] = $request->executionTime;
        }

        if (null !== $request->flinkResourceId) {
            @$body['FlinkResourceId'] = $request->flinkResourceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemConditionArray) {
            @$body['ItemConditionArray'] = $request->itemConditionArray;
        }

        if (null !== $request->itemConditionExpress) {
            @$body['ItemConditionExpress'] = $request->itemConditionExpress;
        }

        if (null !== $request->itemConditionType) {
            @$body['ItemConditionType'] = $request->itemConditionType;
        }

        if (null !== $request->itemTableMetaId) {
            @$body['ItemTableMetaId'] = $request->itemTableMetaId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->preExperimentIds) {
            @$body['PreExperimentIds'] = $request->preExperimentIds;
        }

        if (null !== $request->prodExperimentIds) {
            @$body['ProdExperimentIds'] = $request->prodExperimentIds;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceIds) {
            @$body['ServiceIds'] = $request->serviceIds;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisBehaviorConditionArray) {
            @$body['StatisBehaviorConditionArray'] = $request->statisBehaviorConditionArray;
        }

        if (null !== $request->statisBehaviorConditionExpress) {
            @$body['StatisBehaviorConditionExpress'] = $request->statisBehaviorConditionExpress;
        }

        if (null !== $request->statisBehaviorConditionType) {
            @$body['StatisBehaviorConditionType'] = $request->statisBehaviorConditionType;
        }

        if (null !== $request->trafficControlTargets) {
            @$body['TrafficControlTargets'] = $request->trafficControlTargets;
        }

        if (null !== $request->userConditionArray) {
            @$body['UserConditionArray'] = $request->userConditionArray;
        }

        if (null !== $request->userConditionExpress) {
            @$body['UserConditionExpress'] = $request->userConditionExpress;
        }

        if (null !== $request->userConditionType) {
            @$body['UserConditionType'] = $request->userConditionType;
        }

        if (null !== $request->userTableMetaId) {
            @$body['UserTableMetaId'] = $request->userTableMetaId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建流量调控任务
     *
     * @param request - CreateTrafficControlTaskRequest
     *
     * @returns CreateTrafficControlTaskResponse
     *
     * @param CreateTrafficControlTaskRequest $request
     *
     * @return CreateTrafficControlTaskResponse
     */
    public function createTrafficControlTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrafficControlTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 对指定资源规则中的计算公式进行调试.
     *
     * @param tmpReq - DebugResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugResourceRuleResponse
     *
     * @param string                   $ResourceRuleId
     * @param DebugResourceRuleRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DebugResourceRuleResponse
     */
    public function debugResourceRuleWithOptions($ResourceRuleId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DebugResourceRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metricInfo) {
            $request->metricInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metricInfo, 'MetricInfo', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metricInfoShrink) {
            @$query['MetricInfo'] = $request->metricInfoShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DebugResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '/action/debug',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DebugResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对指定资源规则中的计算公式进行调试.
     *
     * @param request - DebugResourceRuleRequest
     *
     * @returns DebugResourceRuleResponse
     *
     * @param string                   $ResourceRuleId
     * @param DebugResourceRuleRequest $request
     *
     * @return DebugResourceRuleResponse
     */
    public function debugResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->debugResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 删除指定AB实验指标。
     *
     * @param request - DeleteABMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteABMetricResponse
     *
     * @param string                $ABMetricId
     * @param DeleteABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteABMetricResponse
     */
    public function deleteABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteABMetric',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetrics/' . Url::percentEncode($ABMetricId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定AB实验指标。
     *
     * @param request - DeleteABMetricRequest
     *
     * @returns DeleteABMetricResponse
     *
     * @param string                $ABMetricId
     * @param DeleteABMetricRequest $request
     *
     * @return DeleteABMetricResponse
     */
    public function deleteABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * 删除AB实验指标组。
     *
     * @param request - DeleteABMetricGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param DeleteABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteABMetricGroupResponse
     */
    public function deleteABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteABMetricGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups/' . Url::percentEncode($ABMetricGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除AB实验指标组。
     *
     * @param request - DeleteABMetricGroupRequest
     *
     * @returns DeleteABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param DeleteABMetricGroupRequest $request
     *
     * @return DeleteABMetricGroupResponse
     */
    public function deleteABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * 删除指定人群。
     *
     * @param request - DeleteCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCrowdResponse
     *
     * @param string             $CrowdId
     * @param DeleteCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteCrowdResponse
     */
    public function deleteCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定人群。
     *
     * @param request - DeleteCrowdRequest
     *
     * @returns DeleteCrowdResponse
     *
     * @param string             $CrowdId
     * @param DeleteCrowdRequest $request
     *
     * @return DeleteCrowdResponse
     */
    public function deleteCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * 删除指定推荐引擎配置。
     *
     * @param request - DeleteEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEngineConfigResponse
     *
     * @param string                    $EngineConfigId
     * @param DeleteEngineConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteEngineConfigResponse
     */
    public function deleteEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs/' . Url::percentEncode($EngineConfigId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定推荐引擎配置。
     *
     * @param request - DeleteEngineConfigRequest
     *
     * @returns DeleteEngineConfigResponse
     *
     * @param string                    $EngineConfigId
     * @param DeleteEngineConfigRequest $request
     *
     * @return DeleteEngineConfigResponse
     */
    public function deleteEngineConfig($EngineConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime);
    }

    /**
     * 删除实验。
     *
     * @param request - DeleteExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param DeleteExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实验。
     *
     * @param request - DeleteExperimentRequest
     *
     * @returns DeleteExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param DeleteExperimentRequest $request
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 删除指定实验组。
     *
     * @param request - DeleteExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param DeleteExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteExperimentGroupResponse
     */
    public function deleteExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定实验组。
     *
     * @param request - DeleteExperimentGroupRequest
     *
     * @returns DeleteExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param DeleteExperimentGroupRequest $request
     *
     * @return DeleteExperimentGroupResponse
     */
    public function deleteExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 删除指定实例下的指定配置资源。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResourceResponse
     *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceResourceResponse
     */
    public function deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceResource',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定实例下的指定配置资源。
     *
     * @returns DeleteInstanceResourceResponse
     *
     * @param string $InstanceId
     * @param string $ResourceId
     *
     * @return DeleteInstanceResourceResponse
     */
    public function deleteInstanceResource($InstanceId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime);
    }

    /**
     * 删除实验室。
     *
     * @param request - DeleteLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param DeleteLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLaboratoryResponse
     */
    public function deleteLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实验室。
     *
     * @param request - DeleteLaboratoryRequest
     *
     * @returns DeleteLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param DeleteLaboratoryRequest $request
     *
     * @return DeleteLaboratoryResponse
     */
    public function deleteLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 删除层。
     *
     * @param request - DeleteLayerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLayerResponse
     *
     * @param string             $LayerId
     * @param DeleteLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteLayerResponse
     */
    public function deleteLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLayer',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/layers/' . Url::percentEncode($LayerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除层。
     *
     * @param request - DeleteLayerRequest
     *
     * @returns DeleteLayerResponse
     *
     * @param string             $LayerId
     * @param DeleteLayerRequest $request
     *
     * @return DeleteLayerResponse
     */
    public function deleteLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * 删除指定参数。
     *
     * @param request - DeleteParamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParamResponse
     *
     * @param string             $ParamId
     * @param DeleteParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteParamResponse
     */
    public function deleteParamWithOptions($ParamId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteParam',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/params/' . Url::percentEncode($ParamId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定参数。
     *
     * @param request - DeleteParamRequest
     *
     * @returns DeleteParamResponse
     *
     * @param string             $ParamId
     * @param DeleteParamRequest $request
     *
     * @return DeleteParamResponse
     */
    public function deleteParam($ParamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteParamWithOptions($ParamId, $request, $headers, $runtime);
    }

    /**
     * 删除资源规则.
     *
     * @param request - DeleteResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceRuleResponse
     *
     * @param string                    $ResourceRuleId
     * @param DeleteResourceRuleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResourceRuleResponse
     */
    public function deleteResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源规则.
     *
     * @param request - DeleteResourceRuleRequest
     *
     * @returns DeleteResourceRuleResponse
     *
     * @param string                    $ResourceRuleId
     * @param DeleteResourceRuleRequest $request
     *
     * @return DeleteResourceRuleResponse
     */
    public function deleteResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 删除资源规则条目.
     *
     * @param request - DeleteResourceRuleItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param DeleteResourceRuleItemRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteResourceRuleItemResponse
     */
    public function deleteResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceRuleItem',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '/items/' . Url::percentEncode($ResourceRuleItemId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源规则条目.
     *
     * @param request - DeleteResourceRuleItemRequest
     *
     * @returns DeleteResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param DeleteResourceRuleItemRequest $request
     *
     * @return DeleteResourceRuleItemResponse
     */
    public function deleteResourceRuleItem($ResourceRuleId, $ResourceRuleItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime);
    }

    /**
     * 删除指定的样本一致性任务
     *
     * @param request - DeleteSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSampleConsistencyJobResponse
     *
     * @param string                            $SampleConsistencyJobId
     * @param DeleteSampleConsistencyJobRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSampleConsistencyJobResponse
     */
    public function deleteSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定的样本一致性任务
     *
     * @param request - DeleteSampleConsistencyJobRequest
     *
     * @returns DeleteSampleConsistencyJobResponse
     *
     * @param string                            $SampleConsistencyJobId
     * @param DeleteSampleConsistencyJobRequest $request
     *
     * @return DeleteSampleConsistencyJobResponse
     */
    public function deleteSampleConsistencyJob($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 删除场景.
     *
     * @param request - DeleteSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSceneResponse
     *
     * @param string             $SceneId
     * @param DeleteSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSceneResponse
     */
    public function deleteSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScene',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/scenes/' . Url::percentEncode($SceneId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除场景.
     *
     * @param request - DeleteSceneRequest
     *
     * @returns DeleteSceneResponse
     *
     * @param string             $SceneId
     * @param DeleteSceneRequest $request
     *
     * @return DeleteSceneResponse
     */
    public function deleteScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * 删除指定人群下的指定子人群。
     *
     * @param request - DeleteSubCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSubCrowdResponse
     *
     * @param string                $CrowdId
     * @param string                $SubCrowdId
     * @param DeleteSubCrowdRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSubCrowdResponse
     */
    public function deleteSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSubCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '/subcrowds/' . Url::percentEncode($SubCrowdId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定人群下的指定子人群。
     *
     * @param request - DeleteSubCrowdRequest
     *
     * @returns DeleteSubCrowdResponse
     *
     * @param string                $CrowdId
     * @param string                $SubCrowdId
     * @param DeleteSubCrowdRequest $request
     *
     * @return DeleteSubCrowdResponse
     */
    public function deleteSubCrowd($CrowdId, $SubCrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime);
    }

    /**
     * 删除数据表。
     *
     * @param request - DeleteTableMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTableMetaResponse
     *
     * @param string                 $TableMetaId
     * @param DeleteTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTableMetaResponse
     */
    public function deleteTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTableMeta',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tablemetas/' . Url::percentEncode($TableMetaId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据表。
     *
     * @param request - DeleteTableMetaRequest
     *
     * @returns DeleteTableMetaResponse
     *
     * @param string                 $TableMetaId
     * @param DeleteTableMetaRequest $request
     *
     * @return DeleteTableMetaResponse
     */
    public function deleteTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * 更新流量调控目标.
     *
     * @param request - DeleteTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrafficControlTargetResponse
     *
     * @param string                            $TrafficControlTargetId
     * @param DeleteTrafficControlTargetRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteTrafficControlTargetResponse
     */
    public function deleteTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流量调控目标.
     *
     * @param request - DeleteTrafficControlTargetRequest
     *
     * @returns DeleteTrafficControlTargetResponse
     *
     * @param string                            $TrafficControlTargetId
     * @param DeleteTrafficControlTargetRequest $request
     *
     * @return DeleteTrafficControlTargetResponse
     */
    public function deleteTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 删除指定的流量调控任务
     *
     * @param request - DeleteTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrafficControlTaskResponse
     *
     * @param string                          $TrafficControlTaskId
     * @param DeleteTrafficControlTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteTrafficControlTaskResponse
     */
    public function deleteTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定的流量调控任务
     *
     * @param request - DeleteTrafficControlTaskRequest
     *
     * @returns DeleteTrafficControlTaskResponse
     *
     * @param string                          $TrafficControlTaskId
     * @param DeleteTrafficControlTaskRequest $request
     *
     * @return DeleteTrafficControlTaskResponse
     */
    public function deleteTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 生成算法定制脚本.
     *
     * @param request - GenerateAlgorithmCustomizationScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAlgorithmCustomizationScriptResponse
     *
     * @param string                                      $AlgorithmCustomizationId
     * @param GenerateAlgorithmCustomizationScriptRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return GenerateAlgorithmCustomizationScriptResponse
     */
    public function generateAlgorithmCustomizationScriptWithOptions($AlgorithmCustomizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deployMode) {
            @$body['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleFieldTypes) {
            @$body['ModuleFieldTypes'] = $request->moduleFieldTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateAlgorithmCustomizationScript',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithmcustomizations/' . Url::percentEncode($AlgorithmCustomizationId) . '/action/generatescript',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateAlgorithmCustomizationScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成算法定制脚本.
     *
     * @param request - GenerateAlgorithmCustomizationScriptRequest
     *
     * @returns GenerateAlgorithmCustomizationScriptResponse
     *
     * @param string                                      $AlgorithmCustomizationId
     * @param GenerateAlgorithmCustomizationScriptRequest $request
     *
     * @return GenerateAlgorithmCustomizationScriptResponse
     */
    public function generateAlgorithmCustomizationScript($AlgorithmCustomizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateAlgorithmCustomizationScriptWithOptions($AlgorithmCustomizationId, $request, $headers, $runtime);
    }

    /**
     * 产生流量调控的相关代码
     *
     * @param request - GenerateTrafficControlTaskCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTrafficControlTaskCodeResponse
     *
     * @param string                                $TrafficControlTaskId
     * @param GenerateTrafficControlTaskCodeRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GenerateTrafficControlTaskCodeResponse
     */
    public function generateTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateTrafficControlTaskCode',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/generatecode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateTrafficControlTaskCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 产生流量调控的相关代码
     *
     * @param request - GenerateTrafficControlTaskCodeRequest
     *
     * @returns GenerateTrafficControlTaskCodeResponse
     *
     * @param string                                $TrafficControlTaskId
     * @param GenerateTrafficControlTaskCodeRequest $request
     *
     * @return GenerateTrafficControlTaskCodeResponse
     */
    public function generateTrafficControlTaskCode($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 产生流量调控的相关召回配置.
     *
     * @param request - GenerateTrafficControlTaskConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTrafficControlTaskConfigResponse
     *
     * @param string                                  $TrafficControlTaskId
     * @param GenerateTrafficControlTaskConfigRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GenerateTrafficControlTaskConfigResponse
     */
    public function generateTrafficControlTaskConfigWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateTrafficControlTaskConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/generateconfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateTrafficControlTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 产生流量调控的相关召回配置.
     *
     * @param request - GenerateTrafficControlTaskConfigRequest
     *
     * @returns GenerateTrafficControlTaskConfigResponse
     *
     * @param string                                  $TrafficControlTaskId
     * @param GenerateTrafficControlTaskConfigRequest $request
     *
     * @return GenerateTrafficControlTaskConfigResponse
     */
    public function generateTrafficControlTaskConfig($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTrafficControlTaskConfigWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 获取AB Test实验指标详细信息。
     *
     * @param request - GetABMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetABMetricResponse
     *
     * @param string             $ABMetricId
     * @param GetABMetricRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetABMetricResponse
     */
    public function getABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetABMetric',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetrics/' . Url::percentEncode($ABMetricId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取AB Test实验指标详细信息。
     *
     * @param request - GetABMetricRequest
     *
     * @returns GetABMetricResponse
     *
     * @param string             $ABMetricId
     * @param GetABMetricRequest $request
     *
     * @return GetABMetricResponse
     */
    public function getABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * 获取AB实验指标组详细信息。
     *
     * @param request - GetABMetricGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetABMetricGroupResponse
     *
     * @param string                  $ABMetricGroupId
     * @param GetABMetricGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetABMetricGroupResponse
     */
    public function getABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetABMetricGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups/' . Url::percentEncode($ABMetricGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取AB实验指标组详细信息。
     *
     * @param request - GetABMetricGroupRequest
     *
     * @returns GetABMetricGroupResponse
     *
     * @param string                  $ABMetricGroupId
     * @param GetABMetricGroupRequest $request
     *
     * @return GetABMetricGroupResponse
     */
    public function getABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * 获取指定计算任务详细信息。
     *
     * @param request - GetCalculationJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCalculationJobResponse
     *
     * @param string                   $CalculationJobId
     * @param GetCalculationJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetCalculationJobResponse
     */
    public function getCalculationJobWithOptions($CalculationJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCalculationJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/calculationjobs/' . Url::percentEncode($CalculationJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCalculationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定计算任务详细信息。
     *
     * @param request - GetCalculationJobRequest
     *
     * @returns GetCalculationJobResponse
     *
     * @param string                   $CalculationJobId
     * @param GetCalculationJobRequest $request
     *
     * @return GetCalculationJobResponse
     */
    public function getCalculationJob($CalculationJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCalculationJobWithOptions($CalculationJobId, $request, $headers, $runtime);
    }

    /**
     * 获取引擎配置详细信息。
     *
     * @param request - GetEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEngineConfigResponse
     *
     * @param string                 $EngineConfigId
     * @param GetEngineConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetEngineConfigResponse
     */
    public function getEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs/' . Url::percentEncode($EngineConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取引擎配置详细信息。
     *
     * @param request - GetEngineConfigRequest
     *
     * @returns GetEngineConfigResponse
     *
     * @param string                 $EngineConfigId
     * @param GetEngineConfigRequest $request
     *
     * @return GetEngineConfigResponse
     */
    public function getEngineConfig($EngineConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime);
    }

    /**
     * 获取实验详细信息。
     *
     * @param request - GetExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentResponse
     *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验详细信息。
     *
     * @param request - GetExperimentRequest
     *
     * @returns GetExperimentResponse
     *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request
     *
     * @return GetExperimentResponse
     */
    public function getExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 获取指定实验组详细信息。
     *
     * @param request - GetExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperimentGroupResponse
     *
     * @param string                    $ExperimentGroupId
     * @param GetExperimentGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetExperimentGroupResponse
     */
    public function getExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定实验组详细信息。
     *
     * @param request - GetExperimentGroupRequest
     *
     * @returns GetExperimentGroupResponse
     *
     * @param string                    $ExperimentGroupId
     * @param GetExperimentGroupRequest $request
     *
     * @return GetExperimentGroupResponse
     */
    public function getExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检查任务详细信息。
     *
     * @param request - GetFeatureConsistencyCheckJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureConsistencyCheckJobResponse
     *
     * @param string                               $FeatureConsistencyCheckJobId
     * @param GetFeatureConsistencyCheckJobRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetFeatureConsistencyCheckJobResponse
     */
    public function getFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFeatureConsistencyCheckJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/' . Url::percentEncode($FeatureConsistencyCheckJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检查任务详细信息。
     *
     * @param request - GetFeatureConsistencyCheckJobRequest
     *
     * @returns GetFeatureConsistencyCheckJobResponse
     *
     * @param string                               $FeatureConsistencyCheckJobId
     * @param GetFeatureConsistencyCheckJobRequest $request
     *
     * @return GetFeatureConsistencyCheckJobResponse
     */
    public function getFeatureConsistencyCheckJob($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检测配置详情。
     *
     * @param request - GetFeatureConsistencyCheckJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                     $FeatureConsistencyCheckJobConfigId
     * @param GetFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return GetFeatureConsistencyCheckJobConfigResponse
     */
    public function getFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFeatureConsistencyCheckJobConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobconfigs/' . Url::percentEncode($FeatureConsistencyCheckJobConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检测配置详情。
     *
     * @param request - GetFeatureConsistencyCheckJobConfigRequest
     *
     * @returns GetFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                     $FeatureConsistencyCheckJobConfigId
     * @param GetFeatureConsistencyCheckJobConfigRequest $request
     *
     * @return GetFeatureConsistencyCheckJobConfigResponse
     */
    public function getFeatureConsistencyCheckJobConfig($FeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 获取指定推荐全链路深度定制开发平台实例信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定推荐全链路深度定制开发平台实例信息。
     *
     * @returns GetInstanceResponse
     *
     * @param string $InstanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * 获取指定实例下指定资源的详细信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResourceResponse
     *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResourceResponse
     */
    public function getInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstanceResource',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定实例下指定资源的详细信息。
     *
     * @returns GetInstanceResourceResponse
     *
     * @param string $InstanceId
     * @param string $ResourceId
     *
     * @return GetInstanceResourceResponse
     */
    public function getInstanceResource($InstanceId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime);
    }

    /**
     * 获取数据源下指定表的详细信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResourceTableResponse
     *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string         $TableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstanceResourceTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '/tables/' . Url::percentEncode($TableName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResourceTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据源下指定表的详细信息。
     *
     * @returns GetInstanceResourceTableResponse
     *
     * @param string $InstanceId
     * @param string $ResourceId
     * @param string $TableName
     *
     * @return GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTable($InstanceId, $ResourceId, $TableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $headers, $runtime);
    }

    /**
     * 获取实验室详细信息。
     *
     * @param request - GetLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLaboratoryResponse
     *
     * @param string               $LaboratoryId
     * @param GetLaboratoryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetLaboratoryResponse
     */
    public function getLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验室详细信息。
     *
     * @param request - GetLaboratoryRequest
     *
     * @returns GetLaboratoryResponse
     *
     * @param string               $LaboratoryId
     * @param GetLaboratoryRequest $request
     *
     * @return GetLaboratoryResponse
     */
    public function getLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 获取层详细信息。
     *
     * @param request - GetLayerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLayerResponse
     *
     * @param string          $LayerId
     * @param GetLayerRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetLayerResponse
     */
    public function getLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLayer',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/layers/' . Url::percentEncode($LayerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取层详细信息。
     *
     * @param request - GetLayerRequest
     *
     * @returns GetLayerResponse
     *
     * @param string          $LayerId
     * @param GetLayerRequest $request
     *
     * @return GetLayerResponse
     */
    public function getLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * 获取资源规则详细信息.
     *
     * @param request - GetResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceRuleResponse
     *
     * @param string                 $ResourceRuleId
     * @param GetResourceRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceRuleResponse
     */
    public function getResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源规则详细信息.
     *
     * @param request - GetResourceRuleRequest
     *
     * @returns GetResourceRuleResponse
     *
     * @param string                 $ResourceRuleId
     * @param GetResourceRuleRequest $request
     *
     * @return GetResourceRuleResponse
     */
    public function getResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 获取样本一致性任务详细信息.
     *
     * @param request - GetSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSampleConsistencyJobResponse
     *
     * @param string                         $SampleConsistencyJobId
     * @param GetSampleConsistencyJobRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSampleConsistencyJobResponse
     */
    public function getSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取样本一致性任务详细信息.
     *
     * @param request - GetSampleConsistencyJobRequest
     *
     * @returns GetSampleConsistencyJobResponse
     *
     * @param string                         $SampleConsistencyJobId
     * @param GetSampleConsistencyJobRequest $request
     *
     * @return GetSampleConsistencyJobResponse
     */
    public function getSampleConsistencyJob($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 获取场景详细信息.
     *
     * @param request - GetSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSceneResponse
     *
     * @param string          $SceneId
     * @param GetSceneRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetSceneResponse
     */
    public function getSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScene',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/scenes/' . Url::percentEncode($SceneId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取场景详细信息.
     *
     * @param request - GetSceneRequest
     *
     * @returns GetSceneResponse
     *
     * @param string          $SceneId
     * @param GetSceneRequest $request
     *
     * @return GetSceneResponse
     */
    public function getScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * 获取指定人群下的指定子人群的详细信息。
     *
     * @param request - GetSubCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubCrowdResponse
     *
     * @param string             $CrowdId
     * @param string             $SubCrowdId
     * @param GetSubCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetSubCrowdResponse
     */
    public function getSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '/subcrowds/' . Url::percentEncode($SubCrowdId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定人群下的指定子人群的详细信息。
     *
     * @param request - GetSubCrowdRequest
     *
     * @returns GetSubCrowdResponse
     *
     * @param string             $CrowdId
     * @param string             $SubCrowdId
     * @param GetSubCrowdRequest $request
     *
     * @return GetSubCrowdResponse
     */
    public function getSubCrowd($CrowdId, $SubCrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime);
    }

    /**
     * 获取数据表详细信息。
     *
     * @param request - GetTableMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableMetaResponse
     *
     * @param string              $TableMetaId
     * @param GetTableMetaRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetTableMetaResponse
     */
    public function getTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableMeta',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tablemetas/' . Url::percentEncode($TableMetaId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据表详细信息。
     *
     * @param request - GetTableMetaRequest
     *
     * @returns GetTableMetaResponse
     *
     * @param string              $TableMetaId
     * @param GetTableMetaRequest $request
     *
     * @return GetTableMetaResponse
     */
    public function getTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * 获取流量调控目标详情.
     *
     * @param request - GetTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrafficControlTargetResponse
     *
     * @param string                         $TrafficControlTargetId
     * @param GetTrafficControlTargetRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTrafficControlTargetResponse
     */
    public function getTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流量调控目标详情.
     *
     * @param request - GetTrafficControlTargetRequest
     *
     * @returns GetTrafficControlTargetResponse
     *
     * @param string                         $TrafficControlTargetId
     * @param GetTrafficControlTargetRequest $request
     *
     * @return GetTrafficControlTargetResponse
     */
    public function getTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 获取流量调控任务详情.
     *
     * @param request - GetTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrafficControlTaskResponse
     *
     * @param string                       $TrafficControlTaskId
     * @param GetTrafficControlTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetTrafficControlTaskResponse
     */
    public function getTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->controlTargetFilter) {
            @$query['ControlTargetFilter'] = $request->controlTargetFilter;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流量调控任务详情.
     *
     * @param request - GetTrafficControlTaskRequest
     *
     * @returns GetTrafficControlTaskResponse
     *
     * @param string                       $TrafficControlTaskId
     * @param GetTrafficControlTaskRequest $request
     *
     * @return GetTrafficControlTaskResponse
     */
    public function getTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 获取流量调控任务的流量详情.
     *
     * @param request - GetTrafficControlTaskTrafficRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrafficControlTaskTrafficResponse
     *
     * @param string                              $TrafficControlTaskId
     * @param GetTrafficControlTaskTrafficRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTrafficControlTaskTrafficResponse
     */
    public function getTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrafficControlTaskTraffic',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/trafficinfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrafficControlTaskTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流量调控任务的流量详情.
     *
     * @param request - GetTrafficControlTaskTrafficRequest
     *
     * @returns GetTrafficControlTaskTrafficResponse
     *
     * @param string                              $TrafficControlTaskId
     * @param GetTrafficControlTaskTrafficRequest $request
     *
     * @return GetTrafficControlTaskTrafficResponse
     */
    public function getTrafficControlTaskTraffic($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 获取AB Test实验指标组列表。
     *
     * @param request - ListABMetricGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABMetricGroupsResponse
     *
     * @param ListABMetricGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListABMetricGroupsResponse
     */
    public function listABMetricGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->realtime) {
            @$query['Realtime'] = $request->realtime;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListABMetricGroups',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABMetricGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取AB Test实验指标组列表。
     *
     * @param request - ListABMetricGroupsRequest
     *
     * @returns ListABMetricGroupsResponse
     *
     * @param ListABMetricGroupsRequest $request
     *
     * @return ListABMetricGroupsResponse
     */
    public function listABMetricGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABMetricGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取AB Test实验指标列表。
     *
     * @param request - ListABMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABMetricsResponse
     *
     * @param ListABMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListABMetricsResponse
     */
    public function listABMetricsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->realtime) {
            @$query['Realtime'] = $request->realtime;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->tableMetaId) {
            @$query['TableMetaId'] = $request->tableMetaId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListABMetrics',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取AB Test实验指标列表。
     *
     * @param request - ListABMetricsRequest
     *
     * @returns ListABMetricsResponse
     *
     * @param ListABMetricsRequest $request
     *
     * @return ListABMetricsResponse
     */
    public function listABMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取计算任务列表。
     *
     * @param request - ListCalculationJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCalculationJobsResponse
     *
     * @param ListCalculationJobsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListCalculationJobsResponse
     */
    public function listCalculationJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCalculationJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/calculationjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCalculationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取计算任务列表。
     *
     * @param request - ListCalculationJobsRequest
     *
     * @returns ListCalculationJobsResponse
     *
     * @param ListCalculationJobsRequest $request
     *
     * @return ListCalculationJobsResponse
     */
    public function listCalculationJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCalculationJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取人群下的所有用户。
     *
     * @param request - ListCrowdUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCrowdUsersResponse
     *
     * @param string                $CrowdId
     * @param ListCrowdUsersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCrowdUsersResponse
     */
    public function listCrowdUsersWithOptions($CrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCrowdUsers',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCrowdUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群下的所有用户。
     *
     * @param request - ListCrowdUsersRequest
     *
     * @returns ListCrowdUsersResponse
     *
     * @param string                $CrowdId
     * @param ListCrowdUsersRequest $request
     *
     * @return ListCrowdUsersResponse
     */
    public function listCrowdUsers($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCrowdUsersWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * 获取人群列表。
     *
     * @param request - ListCrowdsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCrowdsResponse
     *
     * @param ListCrowdsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListCrowdsResponse
     */
    public function listCrowdsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCrowds',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCrowdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群列表。
     *
     * @param request - ListCrowdsRequest
     *
     * @returns ListCrowdsResponse
     *
     * @param ListCrowdsRequest $request
     *
     * @return ListCrowdsResponse
     */
    public function listCrowds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCrowdsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取引擎配置列表。
     *
     * @param request - ListEngineConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEngineConfigsResponse
     *
     * @param ListEngineConfigsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListEngineConfigsResponse
     */
    public function listEngineConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEngineConfigs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEngineConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取引擎配置列表。
     *
     * @param request - ListEngineConfigsRequest
     *
     * @returns ListEngineConfigsResponse
     *
     * @param ListEngineConfigsRequest $request
     *
     * @return ListEngineConfigsResponse
     */
    public function listEngineConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEngineConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验组列表。
     *
     * @param request - ListExperimentGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentGroupsResponse
     *
     * @param ListExperimentGroupsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListExperimentGroupsResponse
     */
    public function listExperimentGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->layerId) {
            @$query['LayerId'] = $request->layerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->timeRangeEnd) {
            @$query['TimeRangeEnd'] = $request->timeRangeEnd;
        }

        if (null !== $request->timeRangeStart) {
            @$query['TimeRangeStart'] = $request->timeRangeStart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperimentGroups',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExperimentGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验组列表。
     *
     * @param request - ListExperimentGroupsRequest
     *
     * @returns ListExperimentGroupsResponse
     *
     * @param ListExperimentGroupsRequest $request
     *
     * @return ListExperimentGroupsResponse
     */
    public function listExperimentGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验列表。
     *
     * @param request - ListExperimentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentGroupId) {
            @$query['ExperimentGroupId'] = $request->experimentGroupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperiments',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验列表。
     *
     * @param request - ListExperimentsRequest
     *
     * @returns ListExperimentsResponse
     *
     * @param ListExperimentsRequest $request
     *
     * @return ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检查配置列表。
     *
     * @param request - ListFeatureConsistencyCheckJobConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureConsistencyCheckJobConfigsResponse
     *
     * @param ListFeatureConsistencyCheckJobConfigsRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ListFeatureConsistencyCheckJobConfigsResponse
     */
    public function listFeatureConsistencyCheckJobConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureConsistencyCheckJobConfigs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureConsistencyCheckJobConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检查配置列表。
     *
     * @param request - ListFeatureConsistencyCheckJobConfigsRequest
     *
     * @returns ListFeatureConsistencyCheckJobConfigsResponse
     *
     * @param ListFeatureConsistencyCheckJobConfigsRequest $request
     *
     * @return ListFeatureConsistencyCheckJobConfigsResponse
     */
    public function listFeatureConsistencyCheckJobConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检查任务的特征报表/比对结果。
     *
     * @param request - ListFeatureConsistencyCheckJobFeatureReportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureConsistencyCheckJobFeatureReportsResponse
     *
     * @param string                                              $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobFeatureReportsRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponse
     */
    public function listFeatureConsistencyCheckJobFeatureReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logItemId) {
            @$query['LogItemId'] = $request->logItemId;
        }

        if (null !== $request->logRequestId) {
            @$query['LogRequestId'] = $request->logRequestId;
        }

        if (null !== $request->logUserId) {
            @$query['LogUserId'] = $request->logUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureConsistencyCheckJobFeatureReports',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/' . Url::percentEncode($FeatureConsistencyCheckJobId) . '/featurereports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureConsistencyCheckJobFeatureReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检查任务的特征报表/比对结果。
     *
     * @param request - ListFeatureConsistencyCheckJobFeatureReportsRequest
     *
     * @returns ListFeatureConsistencyCheckJobFeatureReportsResponse
     *
     * @param string                                              $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobFeatureReportsRequest $request
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponse
     */
    public function listFeatureConsistencyCheckJobFeatureReports($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobFeatureReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检查任务分数报表/比对结果。
     *
     * @param tmpReq - ListFeatureConsistencyCheckJobScoreReportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureConsistencyCheckJobScoreReportsResponse
     *
     * @param string                                            $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobScoreReportsRequest $tmpReq
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponse
     */
    public function listFeatureConsistencyCheckJobScoreReportsWithOptions($FeatureConsistencyCheckJobId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFeatureConsistencyCheckJobScoreReportsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeRequestIds) {
            $request->excludeRequestIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeRequestIds, 'ExcludeRequestIds', 'json');
        }

        $query = [];
        if (null !== $request->excludeRequestIdsShrink) {
            @$query['ExcludeRequestIds'] = $request->excludeRequestIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureConsistencyCheckJobScoreReports',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/' . Url::percentEncode($FeatureConsistencyCheckJobId) . '/scorereports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureConsistencyCheckJobScoreReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检查任务分数报表/比对结果。
     *
     * @param request - ListFeatureConsistencyCheckJobScoreReportsRequest
     *
     * @returns ListFeatureConsistencyCheckJobScoreReportsResponse
     *
     * @param string                                            $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobScoreReportsRequest $request
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponse
     */
    public function listFeatureConsistencyCheckJobScoreReports($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobScoreReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * 获取特征一致性检查任务列表。
     *
     * @param request - ListFeatureConsistencyCheckJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureConsistencyCheckJobsResponse
     *
     * @param ListFeatureConsistencyCheckJobsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListFeatureConsistencyCheckJobsResponse
     */
    public function listFeatureConsistencyCheckJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureConsistencyCheckJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureConsistencyCheckJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特征一致性检查任务列表。
     *
     * @param request - ListFeatureConsistencyCheckJobsRequest
     *
     * @returns ListFeatureConsistencyCheckJobsResponse
     *
     * @param ListFeatureConsistencyCheckJobsRequest $request
     *
     * @return ListFeatureConsistencyCheckJobsResponse
     */
    public function listFeatureConsistencyCheckJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例下配置的资源列表。
     *
     * @param request - ListInstanceResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResourcesResponse
     *
     * @param string                       $InstanceId
     * @param ListInstanceResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstanceResourcesResponse
     */
    public function listInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceResources',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例下配置的资源列表。
     *
     * @param request - ListInstanceResourcesRequest
     *
     * @returns ListInstanceResourcesResponse
     *
     * @param string                       $InstanceId
     * @param ListInstanceResourcesRequest $request
     *
     * @return ListInstanceResourcesResponse
     */
    public function listInstanceResources($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * 获取推荐全链路深度定制开发平台实例信息列表。
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取推荐全链路深度定制开发平台实例信息列表。
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验室列表。
     *
     * @param request - ListLaboratoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLaboratoriesResponse
     *
     * @param ListLaboratoriesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListLaboratoriesResponse
     */
    public function listLaboratoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLaboratories',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLaboratoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验室列表。
     *
     * @param request - ListLaboratoriesRequest
     *
     * @returns ListLaboratoriesResponse
     *
     * @param ListLaboratoriesRequest $request
     *
     * @return ListLaboratoriesResponse
     */
    public function listLaboratories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLaboratoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取层列表。
     *
     * @param request - ListLayersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLayersResponse
     *
     * @param ListLayersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->laboratoryId) {
            @$query['LaboratoryId'] = $request->laboratoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLayers',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/layers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取层列表。
     *
     * @param request - ListLayersRequest
     *
     * @returns ListLayersResponse
     *
     * @param ListLayersRequest $request
     *
     * @return ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取参数列表。
     *
     * @param request - ListParamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParamsResponse
     *
     * @param ListParamsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListParamsResponse
     */
    public function listParamsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encrypted) {
            @$query['Encrypted'] = $request->encrypted;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParams',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/params',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取参数列表。
     *
     * @param request - ListParamsRequest
     *
     * @returns ListParamsResponse
     *
     * @param ListParamsRequest $request
     *
     * @return ListParamsResponse
     */
    public function listParams($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParamsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取资源规则列表.
     *
     * @param request - ListResourceRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceRulesResponse
     *
     * @param ListResourceRulesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceRulesResponse
     */
    public function listResourceRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceRuleId) {
            @$query['ResourceRuleId'] = $request->resourceRuleId;
        }

        if (null !== $request->resourceRuleName) {
            @$query['ResourceRuleName'] = $request->resourceRuleName;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceRules',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源规则列表.
     *
     * @param request - ListResourceRulesRequest
     *
     * @returns ListResourceRulesResponse
     *
     * @param ListResourceRulesRequest $request
     *
     * @return ListResourceRulesResponse
     */
    public function listResourceRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取样本一致性任务列表.
     *
     * @param request - ListSampleConsistencyJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSampleConsistencyJobsResponse
     *
     * @param ListSampleConsistencyJobsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSampleConsistencyJobsResponse
     */
    public function listSampleConsistencyJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSampleConsistencyJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSampleConsistencyJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取样本一致性任务列表.
     *
     * @param request - ListSampleConsistencyJobsRequest
     *
     * @returns ListSampleConsistencyJobsResponse
     *
     * @param ListSampleConsistencyJobsRequest $request
     *
     * @return ListSampleConsistencyJobsResponse
     */
    public function listSampleConsistencyJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSampleConsistencyJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取场景列表.
     *
     * @param request - ListScenesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScenesResponse
     *
     * @param ListScenesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScenes',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/scenes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取场景列表.
     *
     * @param request - ListScenesRequest
     *
     * @returns ListScenesResponse
     *
     * @param ListScenesRequest $request
     *
     * @return ListScenesResponse
     */
    public function listScenes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScenesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取人群下的所有子人群。
     *
     * @param request - ListSubCrowdsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubCrowdsResponse
     *
     * @param string               $CrowdId
     * @param ListSubCrowdsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSubCrowdsResponse
     */
    public function listSubCrowdsWithOptions($CrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubCrowds',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '/subcrowds',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubCrowdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群下的所有子人群。
     *
     * @param request - ListSubCrowdsRequest
     *
     * @returns ListSubCrowdsResponse
     *
     * @param string               $CrowdId
     * @param ListSubCrowdsRequest $request
     *
     * @return ListSubCrowdsResponse
     */
    public function listSubCrowds($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubCrowdsWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * 获取数据表列表。
     *
     * @param request - ListTableMetasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTableMetasResponse
     *
     * @param ListTableMetasRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableMetasResponse
     */
    public function listTableMetasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->module) {
            @$query['Module'] = $request->module;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTableMetas',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tablemetas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTableMetasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据表列表。
     *
     * @param request - ListTableMetasRequest
     *
     * @returns ListTableMetasResponse
     *
     * @param ListTableMetasRequest $request
     *
     * @return ListTableMetasResponse
     */
    public function listTableMetas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableMetasWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取流量调控任务流量变更的历史列表.
     *
     * @param request - ListTrafficControlTargetTrafficHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrafficControlTargetTrafficHistoryResponse
     *
     * @param string                                        $TrafficControlTargetId
     * @param ListTrafficControlTargetTrafficHistoryRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ListTrafficControlTargetTrafficHistoryResponse
     */
    public function listTrafficControlTargetTrafficHistoryWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->experimentGroupId) {
            @$query['ExperimentGroupId'] = $request->experimentGroupId;
        }

        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemId) {
            @$query['ItemId'] = $request->itemId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrafficControlTargetTrafficHistory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '/traffichistories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrafficControlTargetTrafficHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流量调控任务流量变更的历史列表.
     *
     * @param request - ListTrafficControlTargetTrafficHistoryRequest
     *
     * @returns ListTrafficControlTargetTrafficHistoryResponse
     *
     * @param string                                        $TrafficControlTargetId
     * @param ListTrafficControlTargetTrafficHistoryRequest $request
     *
     * @return ListTrafficControlTargetTrafficHistoryResponse
     */
    public function listTrafficControlTargetTrafficHistory($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrafficControlTargetTrafficHistoryWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 获取流量调控列表.
     *
     * @param request - ListTrafficControlTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrafficControlTasksResponse
     *
     * @param ListTrafficControlTasksRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTrafficControlTasksResponse
     */
    public function listTrafficControlTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->controlTargetFilter) {
            @$query['ControlTargetFilter'] = $request->controlTargetFilter;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->trafficControlTaskId) {
            @$query['TrafficControlTaskId'] = $request->trafficControlTaskId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrafficControlTasks',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrafficControlTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流量调控列表.
     *
     * @param request - ListTrafficControlTasksRequest
     *
     * @returns ListTrafficControlTasksResponse
     *
     * @param ListTrafficControlTasksRequest $request
     *
     * @return ListTrafficControlTasksResponse
     */
    public function listTrafficControlTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrafficControlTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 上线实验。
     *
     * @param request - OfflineExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param OfflineExperimentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return OfflineExperimentResponse
     */
    public function offlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OfflineExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/action/offline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OfflineExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线实验。
     *
     * @param request - OfflineExperimentRequest
     *
     * @returns OfflineExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param OfflineExperimentRequest $request
     *
     * @return OfflineExperimentResponse
     */
    public function offlineExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 下线实验组。
     *
     * @param request - OfflineExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineExperimentGroupResponse
     *
     * @param string                        $ExperimentGroupId
     * @param OfflineExperimentGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return OfflineExperimentGroupResponse
     */
    public function offlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OfflineExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '/action/offline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OfflineExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下线实验组。
     *
     * @param request - OfflineExperimentGroupRequest
     *
     * @returns OfflineExperimentGroupResponse
     *
     * @param string                        $ExperimentGroupId
     * @param OfflineExperimentGroupRequest $request
     *
     * @return OfflineExperimentGroupResponse
     */
    public function offlineExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 下线实验室。
     *
     * @param request - OfflineLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineLaboratoryResponse
     *
     * @param string                   $LaboratoryId
     * @param OfflineLaboratoryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return OfflineLaboratoryResponse
     */
    public function offlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OfflineLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '/action/offline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OfflineLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下线实验室。
     *
     * @param request - OfflineLaboratoryRequest
     *
     * @returns OfflineLaboratoryResponse
     *
     * @param string                   $LaboratoryId
     * @param OfflineLaboratoryRequest $request
     *
     * @return OfflineLaboratoryResponse
     */
    public function offlineLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 上线实验.
     *
     * @param request - OnlineExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param OnlineExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return OnlineExperimentResponse
     */
    public function onlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OnlineExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/action/online',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OnlineExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线实验.
     *
     * @param request - OnlineExperimentRequest
     *
     * @returns OnlineExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param OnlineExperimentRequest $request
     *
     * @return OnlineExperimentResponse
     */
    public function onlineExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 上线实验组。
     *
     * @param request - OnlineExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param OnlineExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return OnlineExperimentGroupResponse
     */
    public function onlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OnlineExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '/action/online',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OnlineExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线实验组。
     *
     * @param request - OnlineExperimentGroupRequest
     *
     * @returns OnlineExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param OnlineExperimentGroupRequest $request
     *
     * @return OnlineExperimentGroupResponse
     */
    public function onlineExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 上线实验室。
     *
     * @param request - OnlineLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param OnlineLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return OnlineLaboratoryResponse
     */
    public function onlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OnlineLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '/action/online',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OnlineLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线实验室。
     *
     * @param request - OnlineLaboratoryRequest
     *
     * @returns OnlineLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param OnlineLaboratoryRequest $request
     *
     * @return OnlineLaboratoryResponse
     */
    public function onlineLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 推全。
     *
     * @param request - PushAllExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushAllExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param PushAllExperimentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PushAllExperimentResponse
     */
    public function pushAllExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushAllExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/action/pushall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushAllExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推全。
     *
     * @param request - PushAllExperimentRequest
     *
     * @returns PushAllExperimentResponse
     *
     * @param string                   $ExperimentId
     * @param PushAllExperimentRequest $request
     *
     * @return PushAllExperimentResponse
     */
    public function pushAllExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushAllExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 推送指标到指定资源规则.
     *
     * @param tmpReq - PushResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushResourceRuleResponse
     *
     * @param string                  $ResourceRuleId
     * @param PushResourceRuleRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PushResourceRuleResponse
     */
    public function pushResourceRuleWithOptions($ResourceRuleId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PushResourceRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metricInfo) {
            $request->metricInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metricInfo, 'MetricInfo', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metricInfoShrink) {
            @$query['MetricInfo'] = $request->metricInfoShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '/action/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送指标到指定资源规则.
     *
     * @param request - PushResourceRuleRequest
     *
     * @returns PushResourceRuleResponse
     *
     * @param string                  $ResourceRuleId
     * @param PushResourceRuleRequest $request
     *
     * @return PushResourceRuleResponse
     */
    public function pushResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 查看样本一致性任务差异的详情.
     *
     * @param request - QuerySampleConsistencyJobDifferenceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySampleConsistencyJobDifferenceResponse
     *
     * @param string                                     $SampleConsistencyJobId
     * @param QuerySampleConsistencyJobDifferenceRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QuerySampleConsistencyJobDifferenceResponse
     */
    public function querySampleConsistencyJobDifferenceWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySampleConsistencyJobDifference',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '/action/querydifference',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QuerySampleConsistencyJobDifferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看样本一致性任务差异的详情.
     *
     * @param request - QuerySampleConsistencyJobDifferenceRequest
     *
     * @returns QuerySampleConsistencyJobDifferenceResponse
     *
     * @param string                                     $SampleConsistencyJobId
     * @param QuerySampleConsistencyJobDifferenceRequest $request
     *
     * @return QuerySampleConsistencyJobDifferenceResponse
     */
    public function querySampleConsistencyJobDifference($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySampleConsistencyJobDifferenceWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 查询流量调控目标的单品调控报表详情。
     *
     * @param request - QueryTrafficControlTargetItemReportDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTrafficControlTargetItemReportDetailResponse
     *
     * @param string                                           $TrafficControlTargetId
     * @param QueryTrafficControlTargetItemReportDetailRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return QueryTrafficControlTargetItemReportDetailResponse
     */
    public function queryTrafficControlTargetItemReportDetailWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTrafficControlTargetItemReportDetail',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '/itemcontrolreportdetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTrafficControlTargetItemReportDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流量调控目标的单品调控报表详情。
     *
     * @param request - QueryTrafficControlTargetItemReportDetailRequest
     *
     * @returns QueryTrafficControlTargetItemReportDetailResponse
     *
     * @param string                                           $TrafficControlTargetId
     * @param QueryTrafficControlTargetItemReportDetailRequest $request
     *
     * @return QueryTrafficControlTargetItemReportDetailResponse
     */
    public function queryTrafficControlTargetItemReportDetail($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTrafficControlTargetItemReportDetailWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 发布流量调控任务
     *
     * @param request - ReleaseTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseTrafficControlTaskResponse
     *
     * @param string                           $TrafficControlTaskId
     * @param ReleaseTrafficControlTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ReleaseTrafficControlTaskResponse
     */
    public function releaseTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/release',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布流量调控任务
     *
     * @param request - ReleaseTrafficControlTaskRequest
     *
     * @returns ReleaseTrafficControlTaskResponse
     *
     * @param string                           $TrafficControlTaskId
     * @param ReleaseTrafficControlTaskRequest $request
     *
     * @return ReleaseTrafficControlTaskResponse
     */
    public function releaseTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 对指标组进行报表。
     *
     * @param request - ReportABMetricGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param ReportABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ReportABMetricGroupResponse
     */
    public function reportABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseExperimentId) {
            @$body['BaseExperimentId'] = $request->baseExperimentId;
        }

        if (null !== $request->dimensionFields) {
            @$body['DimensionFields'] = $request->dimensionFields;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->experimentGroupId) {
            @$body['ExperimentGroupId'] = $request->experimentGroupId;
        }

        if (null !== $request->experimentIds) {
            @$body['ExperimentIds'] = $request->experimentIds;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->reportType) {
            @$body['ReportType'] = $request->reportType;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->timeStatisticsMethod) {
            @$body['TimeStatisticsMethod'] = $request->timeStatisticsMethod;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportABMetricGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups/' . Url::percentEncode($ABMetricGroupId) . '/action/report',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReportABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对指标组进行报表。
     *
     * @param request - ReportABMetricGroupRequest
     *
     * @returns ReportABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param ReportABMetricGroupRequest $request
     *
     * @return ReportABMetricGroupResponse
     */
    public function reportABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * 样本一致性任务报表.
     *
     * @param request - ReportSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportSampleConsistencyJobResponse
     *
     * @param string                            $SampleConsistencyJobId
     * @param ReportSampleConsistencyJobRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ReportSampleConsistencyJobResponse
     */
    public function reportSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReportSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '/action/report',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReportSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 样本一致性任务报表.
     *
     * @param request - ReportSampleConsistencyJobRequest
     *
     * @returns ReportSampleConsistencyJobResponse
     *
     * @param string                            $SampleConsistencyJobId
     * @param ReportSampleConsistencyJobRequest $request
     *
     * @return ReportSampleConsistencyJobResponse
     */
    public function reportSampleConsistencyJob($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 拆分流量调控目标.
     *
     * @param request - SplitTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SplitTrafficControlTargetResponse
     *
     * @param string                           $TrafficControlTargetId
     * @param SplitTrafficControlTargetRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return SplitTrafficControlTargetResponse
     */
    public function splitTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->setPoints) {
            @$body['SetPoints'] = $request->setPoints;
        }

        if (null !== $request->setValues) {
            @$body['SetValues'] = $request->setValues;
        }

        if (null !== $request->timePoints) {
            @$body['TimePoints'] = $request->timePoints;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SplitTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '/action/split',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SplitTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拆分流量调控目标.
     *
     * @param request - SplitTrafficControlTargetRequest
     *
     * @returns SplitTrafficControlTargetResponse
     *
     * @param string                           $TrafficControlTargetId
     * @param SplitTrafficControlTargetRequest $request
     *
     * @return SplitTrafficControlTargetResponse
     */
    public function splitTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 开启流量调控目标.
     *
     * @param request - StartTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTrafficControlTargetResponse
     *
     * @param string                           $TrafficControlTargetId
     * @param StartTrafficControlTargetRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return StartTrafficControlTargetResponse
     */
    public function startTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '/action/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启流量调控目标.
     *
     * @param request - StartTrafficControlTargetRequest
     *
     * @returns StartTrafficControlTargetResponse
     *
     * @param string                           $TrafficControlTargetId
     * @param StartTrafficControlTargetRequest $request
     *
     * @return StartTrafficControlTargetResponse
     */
    public function startTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 开启流量调控任务
     *
     * @param request - StartTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTrafficControlTaskResponse
     *
     * @param string                         $TrafficControlTaskId
     * @param StartTrafficControlTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return StartTrafficControlTaskResponse
     */
    public function startTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启流量调控任务
     *
     * @param request - StartTrafficControlTaskRequest
     *
     * @returns StartTrafficControlTaskResponse
     *
     * @param string                         $TrafficControlTaskId
     * @param StartTrafficControlTaskRequest $request
     *
     * @return StartTrafficControlTaskResponse
     */
    public function startTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 停止样本一致性任务
     *
     * @param request - StopSampleConsistencyJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSampleConsistencyJobResponse
     *
     * @param string                          $SampleConsistencyJobId
     * @param StopSampleConsistencyJobRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return StopSampleConsistencyJobResponse
     */
    public function stopSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopSampleConsistencyJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sampleconsistencyjobs/' . Url::percentEncode($SampleConsistencyJobId) . '/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopSampleConsistencyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止样本一致性任务
     *
     * @param request - StopSampleConsistencyJobRequest
     *
     * @returns StopSampleConsistencyJobResponse
     *
     * @param string                          $SampleConsistencyJobId
     * @param StopSampleConsistencyJobRequest $request
     *
     * @return StopSampleConsistencyJobResponse
     */
    public function stopSampleConsistencyJob($SampleConsistencyJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSampleConsistencyJobWithOptions($SampleConsistencyJobId, $request, $headers, $runtime);
    }

    /**
     * 停止流量调控目标.
     *
     * @param request - StopTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTrafficControlTargetResponse
     *
     * @param string                          $TrafficControlTargetId
     * @param StopTrafficControlTargetRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return StopTrafficControlTargetResponse
     */
    public function stopTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止流量调控目标.
     *
     * @param request - StopTrafficControlTargetRequest
     *
     * @returns StopTrafficControlTargetResponse
     *
     * @param string                          $TrafficControlTargetId
     * @param StopTrafficControlTargetRequest $request
     *
     * @return StopTrafficControlTargetResponse
     */
    public function stopTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 停止流量调控任务
     *
     * @param request - StopTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTrafficControlTaskResponse
     *
     * @param string                        $TrafficControlTaskId
     * @param StopTrafficControlTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return StopTrafficControlTaskResponse
     */
    public function stopTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止流量调控任务
     *
     * @param request - StopTrafficControlTaskRequest
     *
     * @returns StopTrafficControlTaskResponse
     *
     * @param string                        $TrafficControlTaskId
     * @param StopTrafficControlTaskRequest $request
     *
     * @return StopTrafficControlTaskResponse
     */
    public function stopTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 同步特征一致性检测任务重放日志。
     *
     * @param request - SyncFeatureConsistencyCheckJobReplayLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncFeatureConsistencyCheckJobReplayLogResponse
     *
     * @param SyncFeatureConsistencyCheckJobReplayLogRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogResponse
     */
    public function syncFeatureConsistencyCheckJobReplayLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contextFeatures) {
            @$body['ContextFeatures'] = $request->contextFeatures;
        }

        if (null !== $request->featureConsistencyCheckJobConfigId) {
            @$body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }

        if (null !== $request->generatedFeatures) {
            @$body['GeneratedFeatures'] = $request->generatedFeatures;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logItemId) {
            @$body['LogItemId'] = $request->logItemId;
        }

        if (null !== $request->logRequestId) {
            @$body['LogRequestId'] = $request->logRequestId;
        }

        if (null !== $request->logRequestTime) {
            @$body['LogRequestTime'] = $request->logRequestTime;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->rawFeatures) {
            @$body['RawFeatures'] = $request->rawFeatures;
        }

        if (null !== $request->sceneName) {
            @$body['SceneName'] = $request->sceneName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncFeatureConsistencyCheckJobReplayLog',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/action/syncreplaylog',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncFeatureConsistencyCheckJobReplayLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步特征一致性检测任务重放日志。
     *
     * @param request - SyncFeatureConsistencyCheckJobReplayLogRequest
     *
     * @returns SyncFeatureConsistencyCheckJobReplayLogResponse
     *
     * @param SyncFeatureConsistencyCheckJobReplayLogRequest $request
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogResponse
     */
    public function syncFeatureConsistencyCheckJobReplayLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncFeatureConsistencyCheckJobReplayLogWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消指定特征一致性检查正在运行中的任务。
     *
     * @param request - TerminateFeatureConsistencyCheckJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateFeatureConsistencyCheckJobResponse
     *
     * @param string                                     $FeatureConsistencyCheckJobId
     * @param TerminateFeatureConsistencyCheckJobRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return TerminateFeatureConsistencyCheckJobResponse
     */
    public function terminateFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TerminateFeatureConsistencyCheckJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobs/' . Url::percentEncode($FeatureConsistencyCheckJobId) . '/action/terminate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TerminateFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消指定特征一致性检查正在运行中的任务。
     *
     * @param request - TerminateFeatureConsistencyCheckJobRequest
     *
     * @returns TerminateFeatureConsistencyCheckJobResponse
     *
     * @param string                                     $FeatureConsistencyCheckJobId
     * @param TerminateFeatureConsistencyCheckJobRequest $request
     *
     * @return TerminateFeatureConsistencyCheckJobResponse
     */
    public function terminateFeatureConsistencyCheckJob($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * 更新AB Test实验指标。
     *
     * @param request - UpdateABMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABMetricResponse
     *
     * @param string                $ABMetricId
     * @param UpdateABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateABMetricResponse
     */
    public function updateABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->leftMetricId) {
            @$body['LeftMetricId'] = $request->leftMetricId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->operator) {
            @$body['Operator'] = $request->operator;
        }

        if (null !== $request->realtime) {
            @$body['Realtime'] = $request->realtime;
        }

        if (null !== $request->resultResourceId) {
            @$body['ResultResourceId'] = $request->resultResourceId;
        }

        if (null !== $request->rightMetricId) {
            @$body['RightMetricId'] = $request->rightMetricId;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->statisticsCycle) {
            @$body['StatisticsCycle'] = $request->statisticsCycle;
        }

        if (null !== $request->tableMetaId) {
            @$body['TableMetaId'] = $request->tableMetaId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateABMetric',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetrics/' . Url::percentEncode($ABMetricId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AB Test实验指标。
     *
     * @param request - UpdateABMetricRequest
     *
     * @returns UpdateABMetricResponse
     *
     * @param string                $ABMetricId
     * @param UpdateABMetricRequest $request
     *
     * @return UpdateABMetricResponse
     */
    public function updateABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * 更新AB test实验指标组。
     *
     * @param request - UpdateABMetricGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param UpdateABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateABMetricGroupResponse
     */
    public function updateABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ABMetricIds) {
            @$body['ABMetricIds'] = $request->ABMetricIds;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->realtime) {
            @$body['Realtime'] = $request->realtime;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateABMetricGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/abmetricgroups/' . Url::percentEncode($ABMetricGroupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AB test实验指标组。
     *
     * @param request - UpdateABMetricGroupRequest
     *
     * @returns UpdateABMetricGroupResponse
     *
     * @param string                     $ABMetricGroupId
     * @param UpdateABMetricGroupRequest $request
     *
     * @return UpdateABMetricGroupResponse
     */
    public function updateABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * 更新指定人群。
     *
     * @param request - UpdateCrowdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCrowdResponse
     *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateCrowdResponse
     */
    public function updateCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCrowd',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crowds/' . Url::percentEncode($CrowdId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定人群。
     *
     * @param request - UpdateCrowdRequest
     *
     * @returns UpdateCrowdResponse
     *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request
     *
     * @return UpdateCrowdResponse
     */
    public function updateCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * 更新引擎配置。
     *
     * @param request - UpdateEngineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEngineConfigResponse
     *
     * @param string                    $EngineConfigId
     * @param UpdateEngineConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateEngineConfigResponse
     */
    public function updateEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configValue) {
            @$body['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEngineConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/engineconfigs/' . Url::percentEncode($EngineConfigId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新引擎配置。
     *
     * @param request - UpdateEngineConfigRequest
     *
     * @returns UpdateEngineConfigResponse
     *
     * @param string                    $EngineConfigId
     * @param UpdateEngineConfigRequest $request
     *
     * @return UpdateEngineConfigResponse
     */
    public function updateEngineConfig($EngineConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEngineConfigWithOptions($EngineConfigId, $request, $headers, $runtime);
    }

    /**
     * 更新实验。
     *
     * @param request - UpdateExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flowPercent) {
            @$body['FlowPercent'] = $request->flowPercent;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperiment',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实验。
     *
     * @param request - UpdateExperimentRequest
     *
     * @returns UpdateExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 更新指定实验组。
     *
     * @param request - UpdateExperimentGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param UpdateExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateExperimentGroupResponse
     */
    public function updateExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->crowdId) {
            @$body['CrowdId'] = $request->crowdId;
        }

        if (null !== $request->crowdTargetType) {
            @$body['CrowdTargetType'] = $request->crowdTargetType;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->distributionTimeDuration) {
            @$body['DistributionTimeDuration'] = $request->distributionTimeDuration;
        }

        if (null !== $request->distributionType) {
            @$body['DistributionType'] = $request->distributionType;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->layerId) {
            @$body['LayerId'] = $request->layerId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->needAA) {
            @$body['NeedAA'] = $request->needAA;
        }

        if (null !== $request->randomFlow) {
            @$body['RandomFlow'] = $request->randomFlow;
        }

        if (null !== $request->reservcedBuckets) {
            @$body['ReservcedBuckets'] = $request->reservcedBuckets;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExperimentGroup',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/experimentgroups/' . Url::percentEncode($ExperimentGroupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定实验组。
     *
     * @param request - UpdateExperimentGroupRequest
     *
     * @returns UpdateExperimentGroupResponse
     *
     * @param string                       $ExperimentGroupId
     * @param UpdateExperimentGroupRequest $request
     *
     * @return UpdateExperimentGroupResponse
     */
    public function updateExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * 更新特征一致性检查配置信息。
     *
     * @param request - UpdateFeatureConsistencyCheckJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                        $FeatureConsistencyCheckJobConfigId
     * @param UpdateFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateFeatureConsistencyCheckJobConfigResponse
     */
    public function updateFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->compareFeature) {
            @$body['CompareFeature'] = $request->compareFeature;
        }

        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetMountPath) {
            @$body['DatasetMountPath'] = $request->datasetMountPath;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->datasetType) {
            @$body['DatasetType'] = $request->datasetType;
        }

        if (null !== $request->datasetUri) {
            @$body['DatasetUri'] = $request->datasetUri;
        }

        if (null !== $request->defaultRoute) {
            @$body['DefaultRoute'] = $request->defaultRoute;
        }

        if (null !== $request->easServiceName) {
            @$body['EasServiceName'] = $request->easServiceName;
        }

        if (null !== $request->easyRecPackagePath) {
            @$body['EasyRecPackagePath'] = $request->easyRecPackagePath;
        }

        if (null !== $request->easyRecVersion) {
            @$body['EasyRecVersion'] = $request->easyRecVersion;
        }

        if (null !== $request->featureDisplayExclude) {
            @$body['FeatureDisplayExclude'] = $request->featureDisplayExclude;
        }

        if (null !== $request->featureLandingResourceId) {
            @$body['FeatureLandingResourceId'] = $request->featureLandingResourceId;
        }

        if (null !== $request->featurePriority) {
            @$body['FeaturePriority'] = $request->featurePriority;
        }

        if (null !== $request->featureStoreItemId) {
            @$body['FeatureStoreItemId'] = $request->featureStoreItemId;
        }

        if (null !== $request->featureStoreModelId) {
            @$body['FeatureStoreModelId'] = $request->featureStoreModelId;
        }

        if (null !== $request->featureStoreProjectId) {
            @$body['FeatureStoreProjectId'] = $request->featureStoreProjectId;
        }

        if (null !== $request->featureStoreProjectName) {
            @$body['FeatureStoreProjectName'] = $request->featureStoreProjectName;
        }

        if (null !== $request->featureStoreSeqFeatureView) {
            @$body['FeatureStoreSeqFeatureView'] = $request->featureStoreSeqFeatureView;
        }

        if (null !== $request->featureStoreUserId) {
            @$body['FeatureStoreUserId'] = $request->featureStoreUserId;
        }

        if (null !== $request->fgJarVersion) {
            @$body['FgJarVersion'] = $request->fgJarVersion;
        }

        if (null !== $request->fgJsonFileName) {
            @$body['FgJsonFileName'] = $request->fgJsonFileName;
        }

        if (null !== $request->generateZip) {
            @$body['GenerateZip'] = $request->generateZip;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isUseFeatureStore) {
            @$body['IsUseFeatureStore'] = $request->isUseFeatureStore;
        }

        if (null !== $request->itemIdField) {
            @$body['ItemIdField'] = $request->itemIdField;
        }

        if (null !== $request->itemTable) {
            @$body['ItemTable'] = $request->itemTable;
        }

        if (null !== $request->itemTablePartitionField) {
            @$body['ItemTablePartitionField'] = $request->itemTablePartitionField;
        }

        if (null !== $request->itemTablePartitionFieldFormat) {
            @$body['ItemTablePartitionFieldFormat'] = $request->itemTablePartitionFieldFormat;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ossResourceId) {
            @$body['OssResourceId'] = $request->ossResourceId;
        }

        if (null !== $request->predictWorkerCount) {
            @$body['PredictWorkerCount'] = $request->predictWorkerCount;
        }

        if (null !== $request->predictWorkerCpu) {
            @$body['PredictWorkerCpu'] = $request->predictWorkerCpu;
        }

        if (null !== $request->predictWorkerMemory) {
            @$body['PredictWorkerMemory'] = $request->predictWorkerMemory;
        }

        if (null !== $request->resourceConfig) {
            @$body['ResourceConfig'] = $request->resourceConfig;
        }

        if (null !== $request->sampleRate) {
            @$body['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->securityGroupId) {
            @$body['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->switchId) {
            @$body['SwitchId'] = $request->switchId;
        }

        if (null !== $request->userIdField) {
            @$body['UserIdField'] = $request->userIdField;
        }

        if (null !== $request->userTable) {
            @$body['UserTable'] = $request->userTable;
        }

        if (null !== $request->userTablePartitionField) {
            @$body['UserTablePartitionField'] = $request->userTablePartitionField;
        }

        if (null !== $request->userTablePartitionFieldFormat) {
            @$body['UserTablePartitionFieldFormat'] = $request->userTablePartitionFieldFormat;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->workflowName) {
            @$body['WorkflowName'] = $request->workflowName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFeatureConsistencyCheckJobConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/featureconsistencycheck/jobconfigs/' . Url::percentEncode($FeatureConsistencyCheckJobConfigId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新特征一致性检查配置信息。
     *
     * @param request - UpdateFeatureConsistencyCheckJobConfigRequest
     *
     * @returns UpdateFeatureConsistencyCheckJobConfigResponse
     *
     * @param string                                        $FeatureConsistencyCheckJobConfigId
     * @param UpdateFeatureConsistencyCheckJobConfigRequest $request
     *
     * @return UpdateFeatureConsistencyCheckJobConfigResponse
     */
    public function updateFeatureConsistencyCheckJobConfig($FeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 更新指定实例下指定资源的信息。
     *
     * @param request - UpdateInstanceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param UpdateInstanceResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateInstanceResourceResponse
     */
    public function updateInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceResource',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定实例下指定资源的信息。
     *
     * @param request - UpdateInstanceResourceRequest
     *
     * @returns UpdateInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param UpdateInstanceResourceRequest $request
     *
     * @return UpdateInstanceResourceResponse
     */
    public function updateInstanceResource($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * 更新实验室。
     *
     * @param request - UpdateLaboratoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param UpdateLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLaboratoryResponse
     */
    public function updateLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bucketCount) {
            @$body['BucketCount'] = $request->bucketCount;
        }

        if (null !== $request->bucketType) {
            @$body['BucketType'] = $request->bucketType;
        }

        if (null !== $request->buckets) {
            @$body['Buckets'] = $request->buckets;
        }

        if (null !== $request->debugCrowdId) {
            @$body['DebugCrowdId'] = $request->debugCrowdId;
        }

        if (null !== $request->debugUsers) {
            @$body['DebugUsers'] = $request->debugUsers;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLaboratory',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/laboratories/' . Url::percentEncode($LaboratoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实验室。
     *
     * @param request - UpdateLaboratoryRequest
     *
     * @returns UpdateLaboratoryResponse
     *
     * @param string                  $LaboratoryId
     * @param UpdateLaboratoryRequest $request
     *
     * @return UpdateLaboratoryResponse
     */
    public function updateLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * 更新层。
     *
     * @param request - UpdateLayerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLayerResponse
     *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateLayerResponse
     */
    public function updateLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLayer',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/layers/' . Url::percentEncode($LayerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新层。
     *
     * @param request - UpdateLayerRequest
     *
     * @returns UpdateLayerResponse
     *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request
     *
     * @return UpdateLayerResponse
     */
    public function updateLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * 更新参数。
     *
     * @param request - UpdateParamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateParamResponse
     *
     * @param string             $ParamId
     * @param UpdateParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateParamResponse
     */
    public function updateParamWithOptions($ParamId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateParam',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/params/' . Url::percentEncode($ParamId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新参数。
     *
     * @param request - UpdateParamRequest
     *
     * @returns UpdateParamResponse
     *
     * @param string             $ParamId
     * @param UpdateParamRequest $request
     *
     * @return UpdateParamResponse
     */
    public function updateParam($ParamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateParamWithOptions($ParamId, $request, $headers, $runtime);
    }

    /**
     * 获取资源规则列表.
     *
     * @param request - UpdateResourceRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceRuleResponse
     *
     * @param string                    $ResourceRuleId
     * @param UpdateResourceRuleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateResourceRuleResponse
     */
    public function updateResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metricOperationType) {
            @$body['MetricOperationType'] = $request->metricOperationType;
        }

        if (null !== $request->metricPullInfo) {
            @$body['MetricPullInfo'] = $request->metricPullInfo;
        }

        if (null !== $request->metricPullPeriod) {
            @$body['MetricPullPeriod'] = $request->metricPullPeriod;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ruleComputingDefinition) {
            @$body['RuleComputingDefinition'] = $request->ruleComputingDefinition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceRule',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源规则列表.
     *
     * @param request - UpdateResourceRuleRequest
     *
     * @returns UpdateResourceRuleResponse
     *
     * @param string                    $ResourceRuleId
     * @param UpdateResourceRuleRequest $request
     *
     * @return UpdateResourceRuleResponse
     */
    public function updateResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * 更新资源规则条目.
     *
     * @param request - UpdateResourceRuleItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param UpdateResourceRuleItemRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResourceRuleItemResponse
     */
    public function updateResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxValue) {
            @$body['MaxValue'] = $request->maxValue;
        }

        if (null !== $request->minValue) {
            @$body['MinValue'] = $request->minValue;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceRuleItem',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resourcerules/' . Url::percentEncode($ResourceRuleId) . '/items/' . Url::percentEncode($ResourceRuleItemId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新资源规则条目.
     *
     * @param request - UpdateResourceRuleItemRequest
     *
     * @returns UpdateResourceRuleItemResponse
     *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param UpdateResourceRuleItemRequest $request
     *
     * @return UpdateResourceRuleItemResponse
     */
    public function updateResourceRuleItem($ResourceRuleId, $ResourceRuleItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime);
    }

    /**
     * 更新场景.
     *
     * @param request - UpdateSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSceneResponse
     *
     * @param string             $SceneId
     * @param UpdateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flows) {
            @$body['Flows'] = $request->flows;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScene',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/scenes/' . Url::percentEncode($SceneId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新场景.
     *
     * @param request - UpdateSceneRequest
     *
     * @returns UpdateSceneResponse
     *
     * @param string             $SceneId
     * @param UpdateSceneRequest $request
     *
     * @return UpdateSceneResponse
     */
    public function updateScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * 获取数据表详细信息。
     *
     * @param request - UpdateTableMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTableMetaResponse
     *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTableMetaResponse
     */
    public function updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->module) {
            @$body['Module'] = $request->module;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTableMeta',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tablemetas/' . Url::percentEncode($TableMetaId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据表详细信息。
     *
     * @param request - UpdateTableMetaRequest
     *
     * @returns UpdateTableMetaResponse
     *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request
     *
     * @return UpdateTableMetaResponse
     */
    public function updateTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * 更新流量调控目标.
     *
     * @param request - UpdateTrafficControlTargetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrafficControlTargetResponse
     *
     * @param string                            $TrafficControlTargetId
     * @param UpdateTrafficControlTargetRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateTrafficControlTargetResponse
     */
    public function updateTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newParam3) {
            @$query['new-param-3'] = $request->newParam3;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->event) {
            @$body['Event'] = $request->event;
        }

        if (null !== $request->itemConditionArray) {
            @$body['ItemConditionArray'] = $request->itemConditionArray;
        }

        if (null !== $request->itemConditionExpress) {
            @$body['ItemConditionExpress'] = $request->itemConditionExpress;
        }

        if (null !== $request->itemConditionType) {
            @$body['ItemConditionType'] = $request->itemConditionType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->newProductRegulation) {
            @$body['NewProductRegulation'] = $request->newProductRegulation;
        }

        if (null !== $request->recallName) {
            @$body['RecallName'] = $request->recallName;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisPeriod) {
            @$body['StatisPeriod'] = $request->statisPeriod;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->toleranceValue) {
            @$body['ToleranceValue'] = $request->toleranceValue;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrafficControlTarget',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltargets/' . Url::percentEncode($TrafficControlTargetId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流量调控目标.
     *
     * @param request - UpdateTrafficControlTargetRequest
     *
     * @returns UpdateTrafficControlTargetResponse
     *
     * @param string                            $TrafficControlTargetId
     * @param UpdateTrafficControlTargetRequest $request
     *
     * @return UpdateTrafficControlTargetResponse
     */
    public function updateTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * 更新流量调控任务
     *
     * @param request - UpdateTrafficControlTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrafficControlTaskResponse
     *
     * @param string                          $TrafficControlTaskId
     * @param UpdateTrafficControlTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateTrafficControlTaskResponse
     */
    public function updateTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->behaviorTableMetaId) {
            @$body['BehaviorTableMetaId'] = $request->behaviorTableMetaId;
        }

        if (null !== $request->controlGranularity) {
            @$body['ControlGranularity'] = $request->controlGranularity;
        }

        if (null !== $request->controlLogic) {
            @$body['ControlLogic'] = $request->controlLogic;
        }

        if (null !== $request->controlType) {
            @$body['ControlType'] = $request->controlType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->effectiveSceneIds) {
            @$body['EffectiveSceneIds'] = $request->effectiveSceneIds;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->executionTime) {
            @$body['ExecutionTime'] = $request->executionTime;
        }

        if (null !== $request->flinkResourceId) {
            @$body['FlinkResourceId'] = $request->flinkResourceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemConditionArray) {
            @$body['ItemConditionArray'] = $request->itemConditionArray;
        }

        if (null !== $request->itemConditionExpress) {
            @$body['ItemConditionExpress'] = $request->itemConditionExpress;
        }

        if (null !== $request->itemConditionType) {
            @$body['ItemConditionType'] = $request->itemConditionType;
        }

        if (null !== $request->itemTableMetaId) {
            @$body['ItemTableMetaId'] = $request->itemTableMetaId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->preExperimentIds) {
            @$body['PreExperimentIds'] = $request->preExperimentIds;
        }

        if (null !== $request->prodExperimentIds) {
            @$body['ProdExperimentIds'] = $request->prodExperimentIds;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceIds) {
            @$body['ServiceIds'] = $request->serviceIds;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisBaeaviorConditionArray) {
            @$body['StatisBaeaviorConditionArray'] = $request->statisBaeaviorConditionArray;
        }

        if (null !== $request->statisBehaviorConditionExpress) {
            @$body['StatisBehaviorConditionExpress'] = $request->statisBehaviorConditionExpress;
        }

        if (null !== $request->statisBehaviorConditionType) {
            @$body['StatisBehaviorConditionType'] = $request->statisBehaviorConditionType;
        }

        if (null !== $request->trafficControlTargets) {
            @$body['TrafficControlTargets'] = $request->trafficControlTargets;
        }

        if (null !== $request->userConditionArray) {
            @$body['UserConditionArray'] = $request->userConditionArray;
        }

        if (null !== $request->userConditionExpress) {
            @$body['UserConditionExpress'] = $request->userConditionExpress;
        }

        if (null !== $request->userConditionType) {
            @$body['UserConditionType'] = $request->userConditionType;
        }

        if (null !== $request->userTableMetaId) {
            @$body['UserTableMetaId'] = $request->userTableMetaId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrafficControlTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流量调控任务
     *
     * @param request - UpdateTrafficControlTaskRequest
     *
     * @returns UpdateTrafficControlTaskResponse
     *
     * @param string                          $TrafficControlTaskId
     * @param UpdateTrafficControlTaskRequest $request
     *
     * @return UpdateTrafficControlTaskResponse
     */
    public function updateTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 更新流量调控任务的流量参数.
     *
     * @param request - UpdateTrafficControlTaskTrafficRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrafficControlTaskTrafficResponse
     *
     * @param string                                 $TrafficControlTaskId
     * @param UpdateTrafficControlTaskTrafficRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateTrafficControlTaskTrafficResponse
     */
    public function updateTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newParam3) {
            @$query['new-param-3'] = $request->newParam3;
        }

        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->traffics) {
            @$body['Traffics'] = $request->traffics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrafficControlTaskTraffic',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/traffic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTrafficControlTaskTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流量调控任务的流量参数.
     *
     * @param request - UpdateTrafficControlTaskTrafficRequest
     *
     * @returns UpdateTrafficControlTaskTrafficResponse
     *
     * @param string                                 $TrafficControlTaskId
     * @param UpdateTrafficControlTaskTrafficRequest $request
     *
     * @return UpdateTrafficControlTaskTrafficResponse
     */
    public function updateTrafficControlTaskTraffic($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * 上传数据.
     *
     * @param request - UploadRecommendationDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadRecommendationDataResponse
     *
     * @param UploadRecommendationDataRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UploadRecommendationDataResponse
     */
    public function uploadRecommendationDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->dataType) {
            @$body['DataType'] = $request->dataType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadRecommendationData',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recommendationdata/action/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UploadRecommendationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传数据.
     *
     * @param request - UploadRecommendationDataRequest
     *
     * @returns UploadRecommendationDataResponse
     *
     * @param UploadRecommendationDataRequest $request
     *
     * @return UploadRecommendationDataResponse
     */
    public function uploadRecommendationData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadRecommendationDataWithOptions($request, $headers, $runtime);
    }
}

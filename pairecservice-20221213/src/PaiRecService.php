<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ApplyEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ApplyEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ChangeRecallManagementServiceVersionRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ChangeRecallManagementServiceVersionResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ChatConversationRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ChatConversationResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateDataDiagnosisJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateDataDiagnosisJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateDataDiagnosisRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateDataDiagnosisResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementTableResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteDataDiagnosisRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteDataDiagnosisResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteEngineConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteEngineConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteInstanceResourceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteParamRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteParamResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceVersionConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceVersionConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceVersionRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementServiceVersionResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteRecallManagementTableResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeployTrafficControlTaskCodeRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeployTrafficControlTaskCodeResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ExportRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ExportRecallManagementTableResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetDataDiagnosisRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetDataDiagnosisResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceTableResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLayerRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetLayerResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementTableResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetServiceResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosesShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisJobsShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourceSchemasRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourceSchemasResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourcesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourcesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourceTablesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourceTablesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLayersRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLayersResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListParamsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListParamsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServicesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServicesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServiceVersionsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServiceVersionsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTablesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTablesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTableVersionsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTableVersionsResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OfflineRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineLaboratoryRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineLaboratoryResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\OnlineRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PublishRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PublishRecallManagementTableResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushAllExperimentRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushAllExperimentResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\PushResourceRuleShrinkRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryDataDiagnosisStatisticsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryDataDiagnosisStatisticsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryRecallManagementTableRecordsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryRecallManagementTableRecordsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskDeployResultRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskDeployResultResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskItemReportRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskItemReportResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopSampleConsistencyJobRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopSampleConsistencyJobResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlFlinkTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StopTrafficControlFlinkTaskResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateDataDiagnosisRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateDataDiagnosisResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementTableRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementTableResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'pairecservice.us-west-1.aliyuncs.com',
            'us-east-1' => 'pairecservice.us-east-1.aliyuncs.com',
            'eu-central-1' => 'pairecservice.eu-central-1.aliyuncs.com',
            'cn-shenzhen' => 'pairecservice.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'pairecservice.cn-shanghai.aliyuncs.com',
            'cn-hongkong' => 'pairecservice.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'pairecservice.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'pairecservice.cn-beijing.aliyuncs.com',
            'ap-southeast-5' => 'pairecservice.ap-southeast-5.aliyuncs.com',
            'ap-southeast-1' => 'pairecservice.ap-southeast-1.aliyuncs.com',
        ];
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
     * Applies an engine configuration.
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
     * Applies an engine configuration.
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
     * Performs data backflow for the latest job of a specified feature consistency check job configuration.
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
     * Performs data backflow for the latest job of a specified feature consistency check job configuration.
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
     * This API changes the version of a recall management service.
     *
     * @remarks
     * ## Request
     * Use this API to change the version of a recall management service. Ensure that the provided `RecallManagementServiceId`, `InstanceId`, and target `RecallManagementServiceVersionId` are valid, and that you have the required permissions for these resources.
     * - **RecallManagementServiceId**: The unique identifier of the recall management service.
     * - **InstanceId**: The instance ID associated with the recall management service.
     * - **RecallManagementServiceVersionId**: The target version ID to switch to.
     * Note: Before changing the version, confirm that the new version is fully tested and ready for production.
     *
     * @param request - ChangeRecallManagementServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param ChangeRecallManagementServiceVersionRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ChangeRecallManagementServiceVersionResponse
     */
    public function changeRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->recallManagementServiceVersionId) {
            @$body['RecallManagementServiceVersionId'] = $request->recallManagementServiceVersionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeRecallManagementServiceVersion',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/action/changeversion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeRecallManagementServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API changes the version of a recall management service.
     *
     * @remarks
     * ## Request
     * Use this API to change the version of a recall management service. Ensure that the provided `RecallManagementServiceId`, `InstanceId`, and target `RecallManagementServiceVersionId` are valid, and that you have the required permissions for these resources.
     * - **RecallManagementServiceId**: The unique identifier of the recall management service.
     * - **InstanceId**: The instance ID associated with the recall management service.
     * - **RecallManagementServiceVersionId**: The target version ID to switch to.
     * Note: Before changing the version, confirm that the new version is fully tested and ready for production.
     *
     * @param request - ChangeRecallManagementServiceVersionRequest
     *
     * @returns ChangeRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param ChangeRecallManagementServiceVersionRequest $request
     *
     * @return ChangeRecallManagementServiceVersionResponse
     */
    public function changeRecallManagementServiceVersion($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Sends a conversation message to an agent. Supports Server-Sent Events (SSE). Creates a new session or continues a conversation in an existing session.
     *
     * @remarks
     * ## Operation description
     * - Call this API operation to send a conversation message to an agent. Server-Sent Events (SSE) is supported.
     * - If the `ConversationId` parameter is specified, the conversation continues in the context of the specified existing session. If this parameter is not specified, automatic creation of a new session is performed.
     * - The `Config` field allows you to pass additional information input. The value must be in JSON format.
     * - If the request succeeds, the response includes the message ID, reply content, and other information for this conversation. If a fault occurs, the corresponding error code and error message are returned.
     *
     * @param request - ChatConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatConversationResponse
     *
     * @param ChatConversationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ChatConversationResponse
     */
    public function chatConversationWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatConversation',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ChatConversationResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Sends a conversation message to an agent. Supports Server-Sent Events (SSE). Creates a new session or continues a conversation in an existing session.
     *
     * @remarks
     * ## Operation description
     * - Call this API operation to send a conversation message to an agent. Server-Sent Events (SSE) is supported.
     * - If the `ConversationId` parameter is specified, the conversation continues in the context of the specified existing session. If this parameter is not specified, automatic creation of a new session is performed.
     * - The `Config` field allows you to pass additional information input. The value must be in JSON format.
     * - If the request succeeds, the response includes the message ID, reply content, and other information for this conversation. If a fault occurs, the corresponding error code and error message are returned.
     *
     * @param request - ChatConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatConversationResponse
     *
     * @param ChatConversationRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ChatConversationResponse
     */
    public function chatConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatConversation',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChatConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a conversation message to an agent. Supports Server-Sent Events (SSE). Creates a new session or continues a conversation in an existing session.
     *
     * @remarks
     * ## Operation description
     * - Call this API operation to send a conversation message to an agent. Server-Sent Events (SSE) is supported.
     * - If the `ConversationId` parameter is specified, the conversation continues in the context of the specified existing session. If this parameter is not specified, automatic creation of a new session is performed.
     * - The `Config` field allows you to pass additional information input. The value must be in JSON format.
     * - If the request succeeds, the response includes the message ID, reply content, and other information for this conversation. If a fault occurs, the corresponding error code and error message are returned.
     *
     * @param request - ChatConversationRequest
     *
     * @returns ChatConversationResponse
     *
     * @param ChatConversationRequest $request
     *
     * @return ChatConversationResponse
     */
    public function chatConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->chatConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * Verifies access to resources configured for an instance.
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
     * Verifies access to resources configured for an instance.
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
     * Validates a traffic control task expression.
     *
     * @remarks
     * ## Description
     * This operation validates a traffic control task expression for a specific instance and table. Provide the correct `InstanceId`, `TableMetaId`, and `Expression` parameters.
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
     * Validates a traffic control task expression.
     *
     * @remarks
     * ## Description
     * This operation validates a traffic control task expression for a specific instance and table. Provide the correct `InstanceId`, `TableMetaId`, and `Expression` parameters.
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
     * Clones an engine configuration.
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
     * Clones an engine configuration.
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
     * Clones a specified experiment.
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
     * Clones a specified experiment.
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
     * Clones an experiment group to a specified environment.
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
     * Clones an experiment group to a specified environment.
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
     * Clones a feature consistency check job configuration.
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
     * Clones a feature consistency check job configuration.
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
     * Clones a specified laboratory to a designated environment. You can specify whether to clone the experiment groups within the laboratory.
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
     * Clones a specified laboratory to a designated environment. You can specify whether to clone the experiment groups within the laboratory.
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
     * Clones a specified traffic control task to a new instance.
     *
     * @remarks
     * ## Request description
     * This API clones an existing traffic control task to another specified instance. Ensure that the `InstanceId` you provide is valid and that you have the required permissions for the target instance.
     * Note: The cloning process does not affect the status or configuration of the original task.
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
     * Clones a specified traffic control task to a new instance.
     *
     * @remarks
     * ## Request description
     * This API clones an existing traffic control task to another specified instance. Ensure that the `InstanceId` you provide is valid and that you have the required permissions for the target instance.
     * Note: The cloning process does not affect the status or configuration of the original task.
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
     * Creates an AB metric.
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
        if (null !== $request->aggregationByUser) {
            @$body['AggregationByUser'] = $request->aggregationByUser;
        }

        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->denominator) {
            @$body['Denominator'] = $request->denominator;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isBinomialDistribution) {
            @$body['IsBinomialDistribution'] = $request->isBinomialDistribution;
        }

        if (null !== $request->leftMetricId) {
            @$body['LeftMetricId'] = $request->leftMetricId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->needSignificance) {
            @$body['NeedSignificance'] = $request->needSignificance;
        }

        if (null !== $request->numerator) {
            @$body['Numerator'] = $request->numerator;
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
     * Creates an AB metric.
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
     * Creates an A/B metric group.
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
     * Creates an A/B metric group.
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
     * Creates multiple calculation jobs.
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
     * Creates multiple calculation jobs.
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
     * Creates a crowd that represents a group of users.
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
     * Creates a crowd that represents a group of users.
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
     * Creates a data diagnosis task. This API supports various analysis types.
     *
     * @remarks
     * ## Description
     * - This API creates a data diagnosis task. It supports various analysis types, including item or user change rate analysis, user preference statistics cycle analysis, two-table join analysis, basic statistical analysis, and abnormal behavior analysis.
     * - The content of the `Config` parameter depends on the value of the `Type` parameter. For more information, see the example configurations in this topic.
     * - To run the task on a schedule, specify the `CycleTime` parameter. If this parameter is omitted, the task runs only once.
     * - The optional `TopNQuantity` parameter specifies the number of top results to return.
     *
     * @param request - CreateDataDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataDiagnosisResponse
     *
     * @param CreateDataDiagnosisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDataDiagnosisResponse
     */
    public function createDataDiagnosisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->cycleTime) {
            @$body['CycleTime'] = $request->cycleTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->leftTableMetaId) {
            @$body['LeftTableMetaId'] = $request->leftTableMetaId;
        }

        if (null !== $request->leftTablePartitionField) {
            @$body['LeftTablePartitionField'] = $request->leftTablePartitionField;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->partitionField) {
            @$body['PartitionField'] = $request->partitionField;
        }

        if (null !== $request->rightTableMetaId) {
            @$body['RightTableMetaId'] = $request->rightTableMetaId;
        }

        if (null !== $request->rightTablePartitionField) {
            @$body['RightTablePartitionField'] = $request->rightTablePartitionField;
        }

        if (null !== $request->tableMetaId) {
            @$body['TableMetaId'] = $request->tableMetaId;
        }

        if (null !== $request->topNQuantity) {
            @$body['TopNQuantity'] = $request->topNQuantity;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataDiagnosis',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data diagnosis task. This API supports various analysis types.
     *
     * @remarks
     * ## Description
     * - This API creates a data diagnosis task. It supports various analysis types, including item or user change rate analysis, user preference statistics cycle analysis, two-table join analysis, basic statistical analysis, and abnormal behavior analysis.
     * - The content of the `Config` parameter depends on the value of the `Type` parameter. For more information, see the example configurations in this topic.
     * - To run the task on a schedule, specify the `CycleTime` parameter. If this parameter is omitted, the task runs only once.
     * - The optional `TopNQuantity` parameter specifies the number of top results to return.
     *
     * @param request - CreateDataDiagnosisRequest
     *
     * @returns CreateDataDiagnosisResponse
     *
     * @param CreateDataDiagnosisRequest $request
     *
     * @return CreateDataDiagnosisResponse
     */
    public function createDataDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a data diagnosis (rerun) job for a specified time period.
     *
     * @remarks
     * ## Description
     * This operation creates a data diagnosis (rerun) job for a specific instance within a specified time frame. To ensure the job runs correctly, provide accurate values for the `DataDiagnosisId`, `InstanceId`, `StartDate`, and `EndDate` parameters.
     *
     * @param request - CreateDataDiagnosisJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataDiagnosisJobsResponse
     *
     * @param CreateDataDiagnosisJobsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDataDiagnosisJobsResponse
     */
    public function createDataDiagnosisJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataDiagnosisId) {
            @$body['DataDiagnosisId'] = $request->dataDiagnosisId;
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
            'action' => 'CreateDataDiagnosisJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/batch/datadiagnosisjobs/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataDiagnosisJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data diagnosis (rerun) job for a specified time period.
     *
     * @remarks
     * ## Description
     * This operation creates a data diagnosis (rerun) job for a specific instance within a specified time frame. To ensure the job runs correctly, provide accurate values for the `DataDiagnosisId`, `InstanceId`, `StartDate`, and `EndDate` parameters.
     *
     * @param request - CreateDataDiagnosisJobsRequest
     *
     * @returns CreateDataDiagnosisJobsResponse
     *
     * @param CreateDataDiagnosisJobsRequest $request
     *
     * @return CreateDataDiagnosisJobsResponse
     */
    public function createDataDiagnosisJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataDiagnosisJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an engine config.
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
     * Creates an engine config.
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
     * Creates an experiment in a specified experiment group.
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
     * Creates an experiment in a specified experiment group.
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
     * Creates an experiment group in a specified layer. You can use experiment groups to categorize experiments and observe their overall performance.
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
     * Creates an experiment group in a specified layer. You can use experiment groups to categorize experiments and observe their overall performance.
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
     * Creates a feature consistency check job.
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
     * Creates a feature consistency check job.
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
     * Configure a feature consistency check task.
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

        if (null !== $request->maxcomputeSchema) {
            @$body['MaxcomputeSchema'] = $request->maxcomputeSchema;
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
     * Configure a feature consistency check task.
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
     * Creates a configuration resource for a specified instance.
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
     * Creates a configuration resource for a specified instance.
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
     * Creates a laboratory. A laboratory isolates a segment of traffic for running experiments.
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
     * Creates a laboratory. A laboratory isolates a segment of traffic for running experiments.
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
     * Creates a layer in a specified laboratory for layered experiments. Layers are orthogonal to each other, allowing experiments to run independently and preventing traffic starvation.
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
     * Creates a layer in a specified laboratory for layered experiments. Layers are orthogonal to each other, allowing experiments to run independently and preventing traffic starvation.
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
     * Creates an ABTest parameter for a specific scene in a specified environment.
     *
     * @remarks
     * ## Operation description.
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
     * Creates an ABTest parameter for a specific scene in a specified environment.
     *
     * @remarks
     * ## Operation description.
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
     * Initializes a Recall Management configuration, including the instance ID, user information, and network configurations.
     *
     * @remarks
     * ## Request
     *
     * @param request - CreateRecallManagementConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecallManagementConfigResponse
     *
     * @param CreateRecallManagementConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateRecallManagementConfigResponse
     */
    public function createRecallManagementConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkConfigs) {
            @$body['NetworkConfigs'] = $request->networkConfigs;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRecallManagementConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRecallManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes a Recall Management configuration, including the instance ID, user information, and network configurations.
     *
     * @remarks
     * ## Request
     *
     * @param request - CreateRecallManagementConfigRequest
     *
     * @returns CreateRecallManagementConfigResponse
     *
     * @param CreateRecallManagementConfigRequest $request
     *
     * @return CreateRecallManagementConfigResponse
     */
    public function createRecallManagementConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRecallManagementConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a new recall management service.
     *
     * @remarks
     * ## Description
     * To create a recall management service, call this API with a specified instance ID, service name, and service description. Ensure that the `InstanceId` parameter is valid.
     *
     * @param request - CreateRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecallManagementServiceResponse
     *
     * @param CreateRecallManagementServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateRecallManagementServiceResponse
     */
    public function createRecallManagementServiceWithOptions($request, $headers, $runtime)
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
            'action' => 'CreateRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new recall management service.
     *
     * @remarks
     * ## Description
     * To create a recall management service, call this API with a specified instance ID, service name, and service description. Ensure that the `InstanceId` parameter is valid.
     *
     * @param request - CreateRecallManagementServiceRequest
     *
     * @returns CreateRecallManagementServiceResponse
     *
     * @param CreateRecallManagementServiceRequest $request
     *
     * @return CreateRecallManagementServiceResponse
     */
    public function createRecallManagementService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRecallManagementServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a new recall management service version that supports configuring multiple recall strategies.
     *
     * @remarks
     * ## Request
     * - Use this API to create a new version of a recall management service.
     * - To create a new version from an existing one, specify the source recall management service version ID.
     * - You can configure detailed recall rules, such as the recall name, description, priority, and recall type.
     * - Configure operators such as filter, trigger, feature extraction, and join.
     * - The merge configuration specifies how to merge multiple recall results and supports two merge methods: weight-based and alternating.
     * - All configuration items are optional.
     *
     * @param request - CreateRecallManagementServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param CreateRecallManagementServiceVersionRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateRecallManagementServiceVersionResponse
     */
    public function createRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configs) {
            @$body['Configs'] = $request->configs;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceRecallManagementServiceVersionId) {
            @$body['SourceRecallManagementServiceVersionId'] = $request->sourceRecallManagementServiceVersionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRecallManagementServiceVersion',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRecallManagementServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new recall management service version that supports configuring multiple recall strategies.
     *
     * @remarks
     * ## Request
     * - Use this API to create a new version of a recall management service.
     * - To create a new version from an existing one, specify the source recall management service version ID.
     * - You can configure detailed recall rules, such as the recall name, description, priority, and recall type.
     * - Configure operators such as filter, trigger, feature extraction, and join.
     * - The merge configuration specifies how to merge multiple recall results and supports two merge methods: weight-based and alternating.
     * - All configuration items are optional.
     *
     * @param request - CreateRecallManagementServiceVersionRequest
     *
     * @returns CreateRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param CreateRecallManagementServiceVersionRequest $request
     *
     * @return CreateRecallManagementServiceVersionResponse
     */
    public function createRecallManagementServiceVersion($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Creates a configuration for a specified version of the Recall Manager service, including its recall and merge settings.
     *
     * @remarks
     * ## Request
     * - This API creates a configuration for a specific version of the Recall Management Service.
     * - The `ConfigType` parameter specifies the configuration type, which can be either recall or merge.
     * - Use the `RecallConfig` and `MergeConfig` parameters to provide the recall and merge configurations, respectively.
     * - Required parameters must be provided in the specified data formats.
     * - Optional parameter values must be consistent with your business logic.
     *
     * @param request - CreateRecallManagementServiceVersionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param CreateRecallManagementServiceVersionConfigRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return CreateRecallManagementServiceVersionConfigResponse
     */
    public function createRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configType) {
            @$body['ConfigType'] = $request->configType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergeConfig) {
            @$body['MergeConfig'] = $request->mergeConfig;
        }

        if (null !== $request->recallConfig) {
            @$body['RecallConfig'] = $request->recallConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRecallManagementServiceVersionConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '/configs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRecallManagementServiceVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a configuration for a specified version of the Recall Manager service, including its recall and merge settings.
     *
     * @remarks
     * ## Request
     * - This API creates a configuration for a specific version of the Recall Management Service.
     * - The `ConfigType` parameter specifies the configuration type, which can be either recall or merge.
     * - Use the `RecallConfig` and `MergeConfig` parameters to provide the recall and merge configurations, respectively.
     * - Required parameters must be provided in the specified data formats.
     * - Optional parameter values must be consistent with your business logic.
     *
     * @param request - CreateRecallManagementServiceVersionConfigRequest
     *
     * @returns CreateRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param CreateRecallManagementServiceVersionConfigRequest $request
     *
     * @return CreateRecallManagementServiceVersionConfigResponse
     */
    public function createRecallManagementServiceVersionConfig($RecallManagementServiceId, $RecallManagementServiceVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime);
    }

    /**
     * Creates a recall management table that supports multiple data sources and configuration options.
     *
     * @remarks
     * ## Request
     * - The **InstanceId**, **Name**, **Description**, **Type**, and **DataSource** parameters are required.
     * - The **RecallType** parameter is optional. If provided, it must be a valid enum value.
     * - For each field in the **Fields** parameter, you must define its name, type, and attributes. You must mark at least one field as Primary.
     * - If you use MaxCompute as the data source, you must specify the **MaxcomputeProjectName** and **MaxcomputeTableName** parameters. The **MaxcomputeSchema** parameter is optional.
     * - For vector fields, the values of the **VectorDimension** and **VectorMetricType** parameters must match the actual data.
     * - Use the **Config** field to provide additional configuration as a JSON string.
     * - Use fluctuation threshold parameters, such as **EnableRowCountFluctuationThreshold**, to monitor changes in row count or table size. Enable these parameters and set appropriate thresholds as needed.
     *
     * @param request - CreateRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecallManagementTableResponse
     *
     * @param CreateRecallManagementTableRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateRecallManagementTableResponse
     */
    public function createRecallManagementTableWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->dataSource) {
            @$body['DataSource'] = $request->dataSource;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableDataSizeFluctuationThreshold) {
            @$body['EnableDataSizeFluctuationThreshold'] = $request->enableDataSizeFluctuationThreshold;
        }

        if (null !== $request->enableRowCountFluctuationThreshold) {
            @$body['EnableRowCountFluctuationThreshold'] = $request->enableRowCountFluctuationThreshold;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxDataSizeFluctuationThreshold) {
            @$body['MaxDataSizeFluctuationThreshold'] = $request->maxDataSizeFluctuationThreshold;
        }

        if (null !== $request->maxRowCountFluctuationThreshold) {
            @$body['MaxRowCountFluctuationThreshold'] = $request->maxRowCountFluctuationThreshold;
        }

        if (null !== $request->maxcomputeProjectName) {
            @$body['MaxcomputeProjectName'] = $request->maxcomputeProjectName;
        }

        if (null !== $request->maxcomputeSchema) {
            @$body['MaxcomputeSchema'] = $request->maxcomputeSchema;
        }

        if (null !== $request->maxcomputeTableName) {
            @$body['MaxcomputeTableName'] = $request->maxcomputeTableName;
        }

        if (null !== $request->minDataSizeFluctuationThreshold) {
            @$body['MinDataSizeFluctuationThreshold'] = $request->minDataSizeFluctuationThreshold;
        }

        if (null !== $request->minRowCountFluctuationThreshold) {
            @$body['MinRowCountFluctuationThreshold'] = $request->minRowCountFluctuationThreshold;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->recallType) {
            @$body['RecallType'] = $request->recallType;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a recall management table that supports multiple data sources and configuration options.
     *
     * @remarks
     * ## Request
     * - The **InstanceId**, **Name**, **Description**, **Type**, and **DataSource** parameters are required.
     * - The **RecallType** parameter is optional. If provided, it must be a valid enum value.
     * - For each field in the **Fields** parameter, you must define its name, type, and attributes. You must mark at least one field as Primary.
     * - If you use MaxCompute as the data source, you must specify the **MaxcomputeProjectName** and **MaxcomputeTableName** parameters. The **MaxcomputeSchema** parameter is optional.
     * - For vector fields, the values of the **VectorDimension** and **VectorMetricType** parameters must match the actual data.
     * - Use the **Config** field to provide additional configuration as a JSON string.
     * - Use fluctuation threshold parameters, such as **EnableRowCountFluctuationThreshold**, to monitor changes in row count or table size. Enable these parameters and set appropriate thresholds as needed.
     *
     * @param request - CreateRecallManagementTableRequest
     *
     * @returns CreateRecallManagementTableResponse
     *
     * @param CreateRecallManagementTableRequest $request
     *
     * @return CreateRecallManagementTableResponse
     */
    public function createRecallManagementTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRecallManagementTableWithOptions($request, $headers, $runtime);
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
     * Creates a scene for metric and experiment analysis.
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
     * Creates a scene for metric and experiment analysis.
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
     * Creates a sub-crowd for a specified crowd.
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
     * Creates a sub-crowd for a specified crowd.
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
     * Creates a data table.
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
     * Creates a data table.
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
     * Creates a new traffic control target and sets its parameters, such as the item condition, event, and value.
     *
     * @remarks
     * ## Usage notes
     * - The `ItemConditionType` parameter supports two formats: array format (Array) and expression format (Expression). Based on the format you select, you must provide either `ItemConditionArray` or `ItemConditionExpress`.
     * - The `StatisPeriod` parameter defaults to daily. For hourly statistics, you must set this parameter explicitly.
     * - The `ToleranceValue` and `NewProductRegulation` parameters are optional.
     * - The `Status` parameter controls whether a new traffic control target takes effect immediately. By default, new targets are inactive.
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
     * Creates a new traffic control target and sets its parameters, such as the item condition, event, and value.
     *
     * @remarks
     * ## Usage notes
     * - The `ItemConditionType` parameter supports two formats: array format (Array) and expression format (Expression). Based on the format you select, you must provide either `ItemConditionArray` or `ItemConditionExpress`.
     * - The `StatisPeriod` parameter defaults to daily. For hourly statistics, you must set this parameter explicitly.
     * - The `ToleranceValue` and `NewProductRegulation` parameters are optional.
     * - The `Status` parameter controls whether a new traffic control target takes effect immediately. By default, new targets are inactive.
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
     * Creates a new traffic control task with multiple conditions and target configurations.
     *
     * @remarks
     * ## Request
     * - Use this API to create a new traffic control task. You can define a traffic control policy for different scenarios, time ranges, and conditions for users or items.
     * - The `ExecutionTime` parameter specifies the execution time mode for the task. If you select the `TimeRange` mode, you must provide both the `StartTime` and `EndTime` parameters.
     * - The `TrafficControlTargets` parameter is required. For each traffic control target, you must specify its name, time range, event type, and expected value.
     * - You can use the `UserConditionType` and `ItemConditionType` parameters to define conditions for the target user group and items.
     * - Set the `ControlLogic` parameter to `Guaranteed` for guaranteed control or to `Approach` for approach control.
     * - To configure new product regulation, use the `NewProductRegulation` field.
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
     * Creates a new traffic control task with multiple conditions and target configurations.
     *
     * @remarks
     * ## Request
     * - Use this API to create a new traffic control task. You can define a traffic control policy for different scenarios, time ranges, and conditions for users or items.
     * - The `ExecutionTime` parameter specifies the execution time mode for the task. If you select the `TimeRange` mode, you must provide both the `StartTime` and `EndTime` parameters.
     * - The `TrafficControlTargets` parameter is required. For each traffic control target, you must specify its name, time range, event type, and expected value.
     * - You can use the `UserConditionType` and `ItemConditionType` parameters to define conditions for the target user group and items.
     * - Set the `ControlLogic` parameter to `Guaranteed` for guaranteed control or to `Approach` for approach control.
     * - To configure new product regulation, use the `NewProductRegulation` field.
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
     * Deletes the specified A/B test metric.
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
     * Deletes the specified A/B test metric.
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
     * Deletes an A/B test metric group.
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
     * Deletes an A/B test metric group.
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
     * Delete the specified audience.
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
     * Delete the specified audience.
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
     * Deletes a data diagnosis configuration using the specified DataDiagnosisId and InstanceId.
     *
     * @remarks
     * ## Description
     * Ensure you provide the correct `DataDiagnosisId` and `InstanceId` to avoid accidental deletion.
     *
     * @param request - DeleteDataDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataDiagnosisResponse
     *
     * @param string                     $DataDiagnosisId
     * @param DeleteDataDiagnosisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDataDiagnosisResponse
     */
    public function deleteDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime)
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
            'action' => 'DeleteDataDiagnosis',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses/' . Url::percentEncode($DataDiagnosisId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDataDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data diagnosis configuration using the specified DataDiagnosisId and InstanceId.
     *
     * @remarks
     * ## Description
     * Ensure you provide the correct `DataDiagnosisId` and `InstanceId` to avoid accidental deletion.
     *
     * @param request - DeleteDataDiagnosisRequest
     *
     * @returns DeleteDataDiagnosisResponse
     *
     * @param string                     $DataDiagnosisId
     * @param DeleteDataDiagnosisRequest $request
     *
     * @return DeleteDataDiagnosisResponse
     */
    public function deleteDataDiagnosis($DataDiagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified engine configuration.
     *
     * @remarks
     * Deletes a specified engine configuration.
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
        if (null !== $request->deleteAll) {
            @$query['DeleteAll'] = $request->deleteAll;
        }

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
     * Deletes a specified engine configuration.
     *
     * @remarks
     * Deletes a specified engine configuration.
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
     * Delete the specified experiment.
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
     * Delete the specified experiment.
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
     * Delete the specified experiment group.
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
     * Delete the specified experiment group.
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
     * Deletes a configuration resource from an instance.
     *
     * @param request - DeleteInstanceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param DeleteInstanceResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteInstanceResourceResponse
     */
    public function deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * Deletes a configuration resource from an instance.
     *
     * @param request - DeleteInstanceResourceRequest
     *
     * @returns DeleteInstanceResourceResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param DeleteInstanceResourceRequest $request
     *
     * @return DeleteInstanceResourceResponse
     */
    public function deleteInstanceResource($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Delete the specified Lab.
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
     * Delete the specified Lab.
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
     * Delete the specified layer.
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
     * Delete the specified layer.
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
     * Delete the specified parameter.
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
     * Delete the specified parameter.
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
     * Deletes a recall management service.
     *
     * @remarks
     * ## Request description
     * This operation deletes a recall management service based on the RecallManagementServiceId and InstanceId. Before you call this API, ensure you have the correct information for the service to be deleted.
     *
     * @param request - DeleteRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param DeleteRecallManagementServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteRecallManagementServiceResponse
     */
    public function deleteRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
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
            'action' => 'DeleteRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a recall management service.
     *
     * @remarks
     * ## Request description
     * This operation deletes a recall management service based on the RecallManagementServiceId and InstanceId. Before you call this API, ensure you have the correct information for the service to be deleted.
     *
     * @param request - DeleteRecallManagementServiceRequest
     *
     * @returns DeleteRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param DeleteRecallManagementServiceRequest $request
     *
     * @return DeleteRecallManagementServiceResponse
     */
    public function deleteRecallManagementService($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified version of a recall management service.
     *
     * @remarks
     * ## Request
     * This operation deletes a specific version of a recall management service. You must provide the recall management service ID, the recall management service version ID, and the instance ID. This operation is irreversible, so back up all critical data before proceeding.
     *
     * @param request - DeleteRecallManagementServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param string                                      $RecallManagementServiceVersionId
     * @param DeleteRecallManagementServiceVersionRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteRecallManagementServiceVersionResponse
     */
    public function deleteRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime)
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
            'action' => 'DeleteRecallManagementServiceVersion',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRecallManagementServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified version of a recall management service.
     *
     * @remarks
     * ## Request
     * This operation deletes a specific version of a recall management service. You must provide the recall management service ID, the recall management service version ID, and the instance ID. This operation is irreversible, so back up all critical data before proceeding.
     *
     * @param request - DeleteRecallManagementServiceVersionRequest
     *
     * @returns DeleteRecallManagementServiceVersionResponse
     *
     * @param string                                      $RecallManagementServiceId
     * @param string                                      $RecallManagementServiceVersionId
     * @param DeleteRecallManagementServiceVersionRequest $request
     *
     * @return DeleteRecallManagementServiceVersionResponse
     */
    public function deleteRecallManagementServiceVersion($RecallManagementServiceId, $RecallManagementServiceVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime);
    }

    /**
     * Deletes the specified recall management service version configuration.
     *
     * @remarks
     * ## Usage notes
     * - Specify the recall management service ID, recall management version ID, and recall management configuration ID.
     * - `InstanceId` is a required query parameter.
     * - The request fails if any of the specified IDs are invalid.
     *
     * @param request - DeleteRecallManagementServiceVersionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param string                                            $RecallManagementServiceVersionConfigId
     * @param DeleteRecallManagementServiceVersionConfigRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return DeleteRecallManagementServiceVersionConfigResponse
     */
    public function deleteRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime)
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
            'action' => 'DeleteRecallManagementServiceVersionConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '/configs/' . Url::percentEncode($RecallManagementServiceVersionConfigId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRecallManagementServiceVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the specified recall management service version configuration.
     *
     * @remarks
     * ## Usage notes
     * - Specify the recall management service ID, recall management version ID, and recall management configuration ID.
     * - `InstanceId` is a required query parameter.
     * - The request fails if any of the specified IDs are invalid.
     *
     * @param request - DeleteRecallManagementServiceVersionConfigRequest
     *
     * @returns DeleteRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param string                                            $RecallManagementServiceVersionConfigId
     * @param DeleteRecallManagementServiceVersionConfigRequest $request
     *
     * @return DeleteRecallManagementServiceVersionConfigResponse
     */
    public function deleteRecallManagementServiceVersionConfig($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime);
    }

    /**
     * This API deletes a recall management table using the specified recall management table ID and instance ID.
     *
     * @remarks
     * ## Request
     * - The required **path parameter** `RecallManagementTableId` specifies the ID of the recall management table to delete.
     * - The required **query parameter** `InstanceId` specifies the ID of the instance.
     * - A successful operation returns a `RequestId` in the response body for request tracking.
     *
     * @param request - DeleteRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param DeleteRecallManagementTableRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteRecallManagementTableResponse
     */
    public function deleteRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime)
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
            'action' => 'DeleteRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API deletes a recall management table using the specified recall management table ID and instance ID.
     *
     * @remarks
     * ## Request
     * - The required **path parameter** `RecallManagementTableId` specifies the ID of the recall management table to delete.
     * - The required **query parameter** `InstanceId` specifies the ID of the instance.
     * - A successful operation returns a `RequestId` in the response body for request tracking.
     *
     * @param request - DeleteRecallManagementTableRequest
     *
     * @returns DeleteRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param DeleteRecallManagementTableRequest $request
     *
     * @return DeleteRecallManagementTableResponse
     */
    public function deleteRecallManagementTable($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime);
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
     * Delete the specified scenario.
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
     * Delete the specified scenario.
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
     * Deletes the specified subcrowd.
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
     * Deletes the specified subcrowd.
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
     * Deletes a data table.
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
     * Deletes a data table.
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
     * Deletes the specified traffic control target.
     *
     * @remarks
     * ## Request
     * - **TrafficControlTargetId** is a required path parameter that specifies the traffic control target to delete.
     * - **InstanceId** is a required query parameter that specifies the instance ID for this operation.
     * - A successful response includes a `RequestId` field to track the request.
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
     * Deletes the specified traffic control target.
     *
     * @remarks
     * ## Request
     * - **TrafficControlTargetId** is a required path parameter that specifies the traffic control target to delete.
     * - **InstanceId** is a required query parameter that specifies the instance ID for this operation.
     * - A successful response includes a `RequestId` field to track the request.
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
     * Deletes a specified traffic control task.
     *
     * @remarks
     * ## Description
     * - This API uses `TrafficControlTaskId` and `InstanceId` to delete a traffic control task.
     * - Ensure the `TrafficControlTaskId` and `InstanceId` are correct, or the operation may fail.
     * - This operation is irreversible. Proceed with caution.
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
     * Deletes a specified traffic control task.
     *
     * @remarks
     * ## Description
     * - This API uses `TrafficControlTaskId` and `InstanceId` to delete a traffic control task.
     * - Ensure the `TrafficControlTaskId` and `InstanceId` are correct, or the operation may fail.
     * - This operation is irreversible. Proceed with caution.
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
     * Deploys Flink code for a traffic control task in a specified environment.
     *
     * @remarks
     * ## Overview
     * - This API deploys Flink code for a specific traffic control task.
     * - `TrafficControlTaskId` is a path parameter and requires a valid task ID.
     * - `InstanceId` and `Environment` are required request body parameters that specify the instance ID and the target deployment environment.
     * - The optional `RetryDeploy` parameter specifies whether to automatically retry the deployment on failure. The default value is `false`.
     * - The value for `Environment` must be one of the following: Daily, Pre, or Prod.
     *
     * @param request - DeployTrafficControlTaskCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployTrafficControlTaskCodeResponse
     *
     * @param string                              $TrafficControlTaskId
     * @param DeployTrafficControlTaskCodeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DeployTrafficControlTaskCodeResponse
     */
    public function deployTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->retryDeploy) {
            @$body['RetryDeploy'] = $request->retryDeploy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployTrafficControlTaskCode',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/deploycode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployTrafficControlTaskCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys Flink code for a traffic control task in a specified environment.
     *
     * @remarks
     * ## Overview
     * - This API deploys Flink code for a specific traffic control task.
     * - `TrafficControlTaskId` is a path parameter and requires a valid task ID.
     * - `InstanceId` and `Environment` are required request body parameters that specify the instance ID and the target deployment environment.
     * - The optional `RetryDeploy` parameter specifies whether to automatically retry the deployment on failure. The default value is `false`.
     * - The value for `Environment` must be one of the following: Daily, Pre, or Prod.
     *
     * @param request - DeployTrafficControlTaskCodeRequest
     *
     * @returns DeployTrafficControlTaskCodeResponse
     *
     * @param string                              $TrafficControlTaskId
     * @param DeployTrafficControlTaskCodeRequest $request
     *
     * @return DeployTrafficControlTaskCodeResponse
     */
    public function deployTrafficControlTaskCode($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * Exports a specified table from the recall engine to a MaxCompute project.
     *
     * @remarks
     * ## Description
     * Use this API to export a specific table from the recall engine to Alibaba Cloud MaxCompute for further data processing or analysis. Ensure the provided MaxCompute project name, schema, and table name are valid and that you have the required permissions.
     * ### Usage notes
     * - The `Partitions` field must be a JSON object that specifies the table partitions to export.
     * - The request may fail if any required parameters are missing or incorrect.
     * - The export process is asynchronous and may take some time. You can use the returned job ID to track the status of the job.
     *
     * @param request - ExportRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param ExportRecallManagementTableRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ExportRecallManagementTableResponse
     */
    public function exportRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxcomputeProjectName) {
            @$body['MaxcomputeProjectName'] = $request->maxcomputeProjectName;
        }

        if (null !== $request->maxcomputeSchema) {
            @$body['MaxcomputeSchema'] = $request->maxcomputeSchema;
        }

        if (null !== $request->maxcomputeTableName) {
            @$body['MaxcomputeTableName'] = $request->maxcomputeTableName;
        }

        if (null !== $request->partitions) {
            @$body['Partitions'] = $request->partitions;
        }

        if (null !== $request->recallManagementTableVersionId) {
            @$body['RecallManagementTableVersionId'] = $request->recallManagementTableVersionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '/action/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a specified table from the recall engine to a MaxCompute project.
     *
     * @remarks
     * ## Description
     * Use this API to export a specific table from the recall engine to Alibaba Cloud MaxCompute for further data processing or analysis. Ensure the provided MaxCompute project name, schema, and table name are valid and that you have the required permissions.
     * ### Usage notes
     * - The `Partitions` field must be a JSON object that specifies the table partitions to export.
     * - The request may fail if any required parameters are missing or incorrect.
     * - The export process is asynchronous and may take some time. You can use the returned job ID to track the status of the job.
     *
     * @param request - ExportRecallManagementTableRequest
     *
     * @returns ExportRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param ExportRecallManagementTableRequest $request
     *
     * @return ExportRecallManagementTableResponse
     */
    public function exportRecallManagementTable($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime);
    }

    /**
     * Generates an algorithm customization script.
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
     * Generates an algorithm customization script.
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
     * Generates Flink code for a specified traffic control task ID and instance information.
     *
     * @remarks
     * ## Description
     * - This API generates Flink code for a specified traffic control task ID, instance ID, and environment type.
     * - The `Environment` parameter accepts three values: `Daily` for the daily environment, `Pre` for the pre-release environment, and `Prod` for the production environment.
     * - Check the `PreNeedConfig` field in the response. A `true` value indicates that necessary configuration information might be missing in the pre-release environment. If this occurs, add or adjust the required settings.
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
     * Generates Flink code for a specified traffic control task ID and instance information.
     *
     * @remarks
     * ## Description
     * - This API generates Flink code for a specified traffic control task ID, instance ID, and environment type.
     * - The `Environment` parameter accepts three values: `Daily` for the daily environment, `Pre` for the pre-release environment, and `Prod` for the production environment.
     * - Check the `PreNeedConfig` field in the response. A `true` value indicates that necessary configuration information might be missing in the pre-release environment. If this occurs, add or adjust the required settings.
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
     * Gets the details of an A/B metric.
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
     * Gets the details of an A/B metric.
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
     * Retrieves the details of an A/B testing metric group.
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
     * Retrieves the details of an A/B testing metric group.
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
     * Gets the details of a specified calculation job.
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
     * Gets the details of a specified calculation job.
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
     * Retrieves details of a data diagnosis task using its data diagnosis task ID and instance ID.
     *
     * @remarks
     * ## Request
     * - This API retrieves the details of a specific data diagnosis task using the provided `DataDiagnosisId` (data diagnosis task configuration ID) and `InstanceId` (instance ID).
     * - The `CycleTime` field specifies the time for periodic execution. If this field is empty, the task does not execute periodically.
     * - The value of `Type` determines the content of the `Config` field. For details about the required configuration for each type, see the relevant documentation.
     * - `GmtCreateTime` and `GmtModifiedTime` are timestamps for the record\\"s creation and modification times, respectively.
     *
     * @param request - GetDataDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataDiagnosisResponse
     *
     * @param string                  $DataDiagnosisId
     * @param GetDataDiagnosisRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetDataDiagnosisResponse
     */
    public function getDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime)
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
            'action' => 'GetDataDiagnosis',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses/' . Url::percentEncode($DataDiagnosisId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDataDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details of a data diagnosis task using its data diagnosis task ID and instance ID.
     *
     * @remarks
     * ## Request
     * - This API retrieves the details of a specific data diagnosis task using the provided `DataDiagnosisId` (data diagnosis task configuration ID) and `InstanceId` (instance ID).
     * - The `CycleTime` field specifies the time for periodic execution. If this field is empty, the task does not execute periodically.
     * - The value of `Type` determines the content of the `Config` field. For details about the required configuration for each type, see the relevant documentation.
     * - `GmtCreateTime` and `GmtModifiedTime` are timestamps for the record\\"s creation and modification times, respectively.
     *
     * @param request - GetDataDiagnosisRequest
     *
     * @returns GetDataDiagnosisResponse
     *
     * @param string                  $DataDiagnosisId
     * @param GetDataDiagnosisRequest $request
     *
     * @return GetDataDiagnosisResponse
     */
    public function getDataDiagnosis($DataDiagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime);
    }

    /**
     * Gets the details of an engine configuration.
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
     * Gets the details of an engine configuration.
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
     * Retrieves the details of a specified experiment.
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
     * Retrieves the details of a specified experiment.
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
     * Retrieves details for a specified experiment group.
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
     * Retrieves details for a specified experiment group.
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
     * Gets the details of a feature consistency check job.
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
     * Gets the details of a feature consistency check job.
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
     * Retrieves the configuration details of a feature consistency check task.
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
     * Retrieves the configuration details of a feature consistency check task.
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
     * Gets the details of a specified PAI-REC instance.
     *
     * @param request - GetInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * Gets the details of a specified PAI-REC instance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specific resource in a specified instance.
     *
     * @param request - GetInstanceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResourceResponse
     *
     * @param string                     $InstanceId
     * @param string                     $ResourceId
     * @param GetInstanceResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetInstanceResourceResponse
     */
    public function getInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * Retrieves the details of a specific resource in a specified instance.
     *
     * @param request - GetInstanceResourceRequest
     *
     * @returns GetInstanceResourceResponse
     *
     * @param string                     $InstanceId
     * @param string                     $ResourceId
     * @param GetInstanceResourceRequest $request
     *
     * @return GetInstanceResourceResponse
     */
    public function getInstanceResource($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the schema of a specified data table within a resource.
     *
     * @param request - GetInstanceResourceTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResourceTableResponse
     *
     * @param string                          $InstanceId
     * @param string                          $ResourceId
     * @param string                          $TableName
     * @param GetInstanceResourceTableRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * Retrieves the schema of a specified data table within a resource.
     *
     * @param request - GetInstanceResourceTableRequest
     *
     * @returns GetInstanceResourceTableResponse
     *
     * @param string                          $InstanceId
     * @param string                          $ResourceId
     * @param string                          $TableName
     * @param GetInstanceResourceTableRequest $request
     *
     * @return GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTable($InstanceId, $ResourceId, $TableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified laboratory.
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
     * Retrieves the details of a specified laboratory.
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
     * Retrieves the details of a specified layer.
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
     * Retrieves the details of a specified layer.
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
     * Retrieves the recall management configuration.
     *
     * @param request - GetRecallManagementConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementConfigResponse
     *
     * @param GetRecallManagementConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRecallManagementConfigResponse
     */
    public function getRecallManagementConfigWithOptions($request, $headers, $runtime)
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
            'action' => 'GetRecallManagementConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the recall management configuration.
     *
     * @param request - GetRecallManagementConfigRequest
     *
     * @returns GetRecallManagementConfigResponse
     *
     * @param GetRecallManagementConfigRequest $request
     *
     * @return GetRecallManagementConfigResponse
     */
    public function getRecallManagementConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specific recall management job, including its status and log.
     *
     * @remarks
     * ## Description
     * Retrieves the details of a specific recall management job using its `RecallManagementJobId` and `InstanceId`. The response includes the job\\"s status (such as Init, Running, Success, or Failed), start and end times, related table information, and operation log. To make a request, specify the `RecallManagementJobId` as a path parameter and the `InstanceId` as a query parameter.
     *
     * @param request - GetRecallManagementJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementJobResponse
     *
     * @param string                        $RecallManagementJobId
     * @param GetRecallManagementJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetRecallManagementJobResponse
     */
    public function getRecallManagementJobWithOptions($RecallManagementJobId, $request, $headers, $runtime)
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
            'action' => 'GetRecallManagementJob',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementjobs/' . Url::percentEncode($RecallManagementJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specific recall management job, including its status and log.
     *
     * @remarks
     * ## Description
     * Retrieves the details of a specific recall management job using its `RecallManagementJobId` and `InstanceId`. The response includes the job\\"s status (such as Init, Running, Success, or Failed), start and end times, related table information, and operation log. To make a request, specify the `RecallManagementJobId` as a path parameter and the `InstanceId` as a query parameter.
     *
     * @param request - GetRecallManagementJobRequest
     *
     * @returns GetRecallManagementJobResponse
     *
     * @param string                        $RecallManagementJobId
     * @param GetRecallManagementJobRequest $request
     *
     * @return GetRecallManagementJobResponse
     */
    public function getRecallManagementJob($RecallManagementJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementJobWithOptions($RecallManagementJobId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified recall management service, including its status and version.
     *
     * @remarks
     * ## Request
     *
     * @param request - GetRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementServiceResponse
     *
     * @param string                            $RecallManagementServiceId
     * @param GetRecallManagementServiceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetRecallManagementServiceResponse
     */
    public function getRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
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
            'action' => 'GetRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified recall management service, including its status and version.
     *
     * @remarks
     * ## Request
     *
     * @param request - GetRecallManagementServiceRequest
     *
     * @returns GetRecallManagementServiceResponse
     *
     * @param string                            $RecallManagementServiceId
     * @param GetRecallManagementServiceRequest $request
     *
     * @return GetRecallManagementServiceResponse
     */
    public function getRecallManagementService($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the version details of the recall management service.
     *
     * @param request - GetRecallManagementServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementServiceVersionResponse
     *
     * @param string                                   $RecallManagementServiceId
     * @param string                                   $RecallManagementServiceVersionId
     * @param GetRecallManagementServiceVersionRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return GetRecallManagementServiceVersionResponse
     */
    public function getRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime)
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
            'action' => 'GetRecallManagementServiceVersion',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the version details of the recall management service.
     *
     * @param request - GetRecallManagementServiceVersionRequest
     *
     * @returns GetRecallManagementServiceVersionResponse
     *
     * @param string                                   $RecallManagementServiceId
     * @param string                                   $RecallManagementServiceVersionId
     * @param GetRecallManagementServiceVersionRequest $request
     *
     * @return GetRecallManagementServiceVersionResponse
     */
    public function getRecallManagementServiceVersion($RecallManagementServiceId, $RecallManagementServiceVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementServiceVersionWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $request, $headers, $runtime);
    }

    /**
     * This API retrieves the configuration details of a specific recall management service version.
     *
     * @remarks
     * ## Request
     * Retrieves the configuration details for a specific version of a Recall Management Service by specifying its service, version, and configuration IDs. Ensure the parameter values are correct. The `InstanceId` is crucial for locating the correct instance.
     * - **Note**: All path parameters (`RecallManagementServiceId`, `RecallManagementServiceVersionId`, and `RecallManagementServiceVersionConfigId`) are required and must reference an existing resource.
     * - **Extended configuration**: The response includes the `ExtendedConfig` field, which is used for future extensions and custom settings. Parse this field as needed.
     *
     * @param request - GetRecallManagementServiceVersionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementServiceVersionConfigResponse
     *
     * @param string                                         $RecallManagementServiceId
     * @param string                                         $RecallManagementServiceVersionId
     * @param string                                         $RecallManagementServiceVersionConfigId
     * @param GetRecallManagementServiceVersionConfigRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetRecallManagementServiceVersionConfigResponse
     */
    public function getRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime)
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
            'action' => 'GetRecallManagementServiceVersionConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '/configs/' . Url::percentEncode($RecallManagementServiceVersionConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementServiceVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API retrieves the configuration details of a specific recall management service version.
     *
     * @remarks
     * ## Request
     * Retrieves the configuration details for a specific version of a Recall Management Service by specifying its service, version, and configuration IDs. Ensure the parameter values are correct. The `InstanceId` is crucial for locating the correct instance.
     * - **Note**: All path parameters (`RecallManagementServiceId`, `RecallManagementServiceVersionId`, and `RecallManagementServiceVersionConfigId`) are required and must reference an existing resource.
     * - **Extended configuration**: The response includes the `ExtendedConfig` field, which is used for future extensions and custom settings. Parse this field as needed.
     *
     * @param request - GetRecallManagementServiceVersionConfigRequest
     *
     * @returns GetRecallManagementServiceVersionConfigResponse
     *
     * @param string                                         $RecallManagementServiceId
     * @param string                                         $RecallManagementServiceVersionId
     * @param string                                         $RecallManagementServiceVersionConfigId
     * @param GetRecallManagementServiceVersionConfigRequest $request
     *
     * @return GetRecallManagementServiceVersionConfigResponse
     */
    public function getRecallManagementServiceVersionConfig($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified recall management table, including its table structure and configuration.
     *
     * @remarks
     * ## Request
     * This API retrieves details of a specific recall management table using the provided `RecallManagementTableId` and `InstanceId`. Ensure you provide the correct values for these parameters.
     * - **Note**: The `CanDelete` field indicates whether the data table supports delete operations. Use this value to control delete functionality in your application.
     * - The `Fields` list contains the definitions for each field in the data table, including their name, type, and properties.
     * - To monitor data changes, you can configure or query the fluctuation thresholds for row count and size using the corresponding fields.
     *
     * @param request - GetRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecallManagementTableResponse
     *
     * @param string                          $RecallManagementTableId
     * @param GetRecallManagementTableRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRecallManagementTableResponse
     */
    public function getRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime)
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
            'action' => 'GetRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified recall management table, including its table structure and configuration.
     *
     * @remarks
     * ## Request
     * This API retrieves details of a specific recall management table using the provided `RecallManagementTableId` and `InstanceId`. Ensure you provide the correct values for these parameters.
     * - **Note**: The `CanDelete` field indicates whether the data table supports delete operations. Use this value to control delete functionality in your application.
     * - The `Fields` list contains the definitions for each field in the data table, including their name, type, and properties.
     * - To monitor data changes, you can configure or query the fluctuation thresholds for row count and size using the corresponding fields.
     *
     * @param request - GetRecallManagementTableRequest
     *
     * @returns GetRecallManagementTableResponse
     *
     * @param string                          $RecallManagementTableId
     * @param GetRecallManagementTableRequest $request
     *
     * @return GetRecallManagementTableResponse
     */
    public function getRecallManagementTable($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime);
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
     * Retrieves the details of a specified scene.
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
     * Retrieves the details of a specified scene.
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
     * Retrieves the details of a service.
     *
     * @param request - GetServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string            $ServiceId
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($ServiceId, $request, $headers, $runtime)
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
            'action' => 'GetService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/services/' . Url::percentEncode($ServiceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a service.
     *
     * @param request - GetServiceRequest
     *
     * @returns GetServiceResponse
     *
     * @param string            $ServiceId
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($ServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($ServiceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a sub-crowd.
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
     * Retrieves the details of a sub-crowd.
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
     * Returns the details of a table.
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
     * Returns the details of a table.
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
     * Gets the details of a traffic throttling objective by its ID.
     *
     * @remarks
     * ## Request
     * Retrieves the detailed configuration of a traffic control target. The configuration includes the target name, time range, and condition settings. This operation requires the `TrafficControlTargetId` and `InstanceId` parameters.
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
     * Gets the details of a traffic throttling objective by its ID.
     *
     * @remarks
     * ## Request
     * Retrieves the detailed configuration of a traffic control target. The configuration includes the target name, time range, and condition settings. This operation requires the `TrafficControlTargetId` and `InstanceId` parameters.
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
     * Queries the details of a traffic control task with a specified ID.
     *
     * @remarks
     * ## Description
     * - This operation retrieves the details of a specific traffic control task, including but not limited to the task name, description, and status.
     * - TrafficControlTaskId and InstanceId are required parameters that specify the task ID and instance ID to query.
     * - Optional parameters such as Environment, Version, and ControlTargetFilter help refine the request to retrieve more specific task data or version information.
     * - Check the returned data structure, especially the TrafficControlTargets section, which contains multiple control targets and their related properties.
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
     * Queries the details of a traffic control task with a specified ID.
     *
     * @remarks
     * ## Description
     * - This operation retrieves the details of a specific traffic control task, including but not limited to the task name, description, and status.
     * - TrafficControlTaskId and InstanceId are required parameters that specify the task ID and instance ID to query.
     * - Optional parameters such as Environment, Version, and ControlTargetFilter help refine the request to retrieve more specific task data or version information.
     * - Check the returned data structure, especially the TrafficControlTargets section, which contains multiple control targets and their related properties.
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
     * Retrieves traffic allocation details for a specific traffic control task.
     *
     * @remarks
     * ## Description
     * This API retrieves the traffic details for a specific traffic control task. The request must include the `TrafficControlTaskId`, `InstanceId`, and `Environment`.
     * - `TrafficControlTaskId`: The unique identifier for the traffic control task.
     * - `InstanceId`: The instance ID.
     * - `Environment`: The environment type, such as the production environment (Prod).
     * The response includes the traffic allocation for each experiment and traffic control target. This data allows you to analyze and manage your traffic control strategies.
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
     * Retrieves traffic allocation details for a specific traffic control task.
     *
     * @remarks
     * ## Description
     * This API retrieves the traffic details for a specific traffic control task. The request must include the `TrafficControlTaskId`, `InstanceId`, and `Environment`.
     * - `TrafficControlTaskId`: The unique identifier for the traffic control task.
     * - `InstanceId`: The instance ID.
     * - `Environment`: The environment type, such as the production environment (Prod).
     * The response includes the traffic allocation for each experiment and traffic control target. This data allows you to analyze and manage your traffic control strategies.
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
     * Retrieves a list of A/B metric groups.
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
     * Retrieves a list of A/B metric groups.
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
     * Lists A/B testing metrics.
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
     * Lists A/B testing metrics.
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
     * Lists calculation jobs.
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
     * Lists calculation jobs.
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
     * Retrieves all users within a specified crowd, including those in its sub-crowds.
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
     * Retrieves all users within a specified crowd, including those in its sub-crowds.
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
     * Lists the Crowds in a specified instance.
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
     * Lists the Crowds in a specified instance.
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
     * Lists the data diagnostic tasks for the specified instance.
     *
     * @remarks
     * ## Request
     * This API retrieves a list of data diagnosis tasks. It requires the `InstanceId` parameter and accepts optional parameters—such as data diagnosis type, page number, and page size—for filtering and pagination.
     * - The **Types** parameter accepts multiple data diagnosis types, allowing you to view reports for all selected types at once.
     * - To paginate results, use the `PageNumber` and `PageSize` parameters.
     *
     * @param tmpReq - ListDataDiagnosesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataDiagnosesResponse
     *
     * @param ListDataDiagnosesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListDataDiagnosesResponse
     */
    public function listDataDiagnosesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataDiagnosesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }

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

        if (null !== $request->typesShrink) {
            @$query['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataDiagnoses',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataDiagnosesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the data diagnostic tasks for the specified instance.
     *
     * @remarks
     * ## Request
     * This API retrieves a list of data diagnosis tasks. It requires the `InstanceId` parameter and accepts optional parameters—such as data diagnosis type, page number, and page size—for filtering and pagination.
     * - The **Types** parameter accepts multiple data diagnosis types, allowing you to view reports for all selected types at once.
     * - To paginate results, use the `PageNumber` and `PageSize` parameters.
     *
     * @param request - ListDataDiagnosesRequest
     *
     * @returns ListDataDiagnosesResponse
     *
     * @param ListDataDiagnosesRequest $request
     *
     * @return ListDataDiagnosesResponse
     */
    public function listDataDiagnoses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnosesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries data diagnosis jobs for a specified instance.
     *
     * @remarks
     * ## Description
     * This API retrieves data diagnosis jobs for a specific instance. You can filter the jobs by parameters such as `InstanceId` and `Status`, and use the `PageNumber` and `PageSize` parameters to control pagination.
     * - The **InstanceId** parameter is required and specifies the instance to query.
     * - Optional parameters include **Status**, **Types**, **PageNumber**, and **PageSize**.
     * - Note: If you omit filter conditions, the operation returns all matching data diagnosis jobs.
     *
     * @param tmpReq - ListDataDiagnosisJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataDiagnosisJobsResponse
     *
     * @param ListDataDiagnosisJobsRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataDiagnosisJobsResponse
     */
    public function listDataDiagnosisJobsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataDiagnosisJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }

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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->typesShrink) {
            @$query['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataDiagnosisJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnosisjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataDiagnosisJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data diagnosis jobs for a specified instance.
     *
     * @remarks
     * ## Description
     * This API retrieves data diagnosis jobs for a specific instance. You can filter the jobs by parameters such as `InstanceId` and `Status`, and use the `PageNumber` and `PageSize` parameters to control pagination.
     * - The **InstanceId** parameter is required and specifies the instance to query.
     * - Optional parameters include **Status**, **Types**, **PageNumber**, and **PageSize**.
     * - Note: If you omit filter conditions, the operation returns all matching data diagnosis jobs.
     *
     * @param request - ListDataDiagnosisJobsRequest
     *
     * @returns ListDataDiagnosisJobsResponse
     *
     * @param ListDataDiagnosisJobsRequest $request
     *
     * @return ListDataDiagnosisJobsResponse
     */
    public function listDataDiagnosisJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnosisJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Specify parameters to retrieve data diagnosis reports for a specific time range.
     *
     * @remarks
     * ## Request
     * - This API retrieves data diagnosis reports based on parameters such as the data diagnosis ID, instance ID, and a date range.
     * - The `FeatureName` parameter filters reports by a specific feature, and the `TopN` parameter limits the number of results.
     * - The `RemainRateType` parameter specifies the type of retention rate report, such as a periodic report.
     * - Report content includes item and user change rate analysis, periodic user preference analysis, correlation analysis, basic statistical analysis, and anomaly detection.
     * - Important: All date values must use the `YYYY-MM-DD` format.
     *
     * @param request - ListDataDiagnosisReportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataDiagnosisReportsResponse
     *
     * @param string                          $DataDiagnosisId
     * @param ListDataDiagnosisReportsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDataDiagnosisReportsResponse
     */
    public function listDataDiagnosisReportsWithOptions($DataDiagnosisId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remainRateType) {
            @$query['RemainRateType'] = $request->remainRateType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataDiagnosisReports',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses/' . Url::percentEncode($DataDiagnosisId) . '/reports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataDiagnosisReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specify parameters to retrieve data diagnosis reports for a specific time range.
     *
     * @remarks
     * ## Request
     * - This API retrieves data diagnosis reports based on parameters such as the data diagnosis ID, instance ID, and a date range.
     * - The `FeatureName` parameter filters reports by a specific feature, and the `TopN` parameter limits the number of results.
     * - The `RemainRateType` parameter specifies the type of retention rate report, such as a periodic report.
     * - Report content includes item and user change rate analysis, periodic user preference analysis, correlation analysis, basic statistical analysis, and anomaly detection.
     * - Important: All date values must use the `YYYY-MM-DD` format.
     *
     * @param request - ListDataDiagnosisReportsRequest
     *
     * @returns ListDataDiagnosisReportsResponse
     *
     * @param string                          $DataDiagnosisId
     * @param ListDataDiagnosisReportsRequest $request
     *
     * @return ListDataDiagnosisReportsResponse
     */
    public function listDataDiagnosisReports($DataDiagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnosisReportsWithOptions($DataDiagnosisId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of engine configurations.
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
     * Retrieves a list of engine configurations.
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
     * Returns a list of experiment groups.
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
     * Returns a list of experiment groups.
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
     * Lists the experiments in the specified experiment group.
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
     * Lists the experiments in the specified experiment group.
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
     * Retrieves a list of feature consistency check task configurations.
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
     * Retrieves a list of feature consistency check task configurations.
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
     * Lists feature reports for a feature consistency check job.
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
     * Lists feature reports for a feature consistency check job.
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
     * Retrieves the score difference reports for a feature consistency check job.
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
     * Retrieves the score difference reports for a feature consistency check job.
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
     * Retrieves a list of feature consistency check jobs.
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
     * Retrieves a list of feature consistency check jobs.
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
     * Lists all schemas for a specified resource in an instance.
     *
     * @remarks
     * ## Description
     * To retrieve a list of all schemas for a specified resource, provide the instance ID (InstanceId) and resource ID (ResourceId). Use the optional SchemaName parameter to filter the schemas by a name prefix.
     *
     * @param request - ListInstanceResourceSchemasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResourceSchemasResponse
     *
     * @param string                             $InstanceId
     * @param string                             $ResourceId
     * @param ListInstanceResourceSchemasRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListInstanceResourceSchemasResponse
     */
    public function listInstanceResourceSchemasWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceResourceSchemas',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '/schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceResourceSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all schemas for a specified resource in an instance.
     *
     * @remarks
     * ## Description
     * To retrieve a list of all schemas for a specified resource, provide the instance ID (InstanceId) and resource ID (ResourceId). Use the optional SchemaName parameter to filter the schemas by a name prefix.
     *
     * @param request - ListInstanceResourceSchemasRequest
     *
     * @returns ListInstanceResourceSchemasResponse
     *
     * @param string                             $InstanceId
     * @param string                             $ResourceId
     * @param ListInstanceResourceSchemasRequest $request
     *
     * @return ListInstanceResourceSchemasResponse
     */
    public function listInstanceResourceSchemas($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceResourceSchemasWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of data tables for a specified instance and data source.
     *
     * @remarks
     * ## Description
     * Provide the instance ID (InstanceId) and data source ID (ResourceId) to retrieve a list of data tables from the specified data source. Use the optional `MaxcomputeSchema` parameter to filter the results by a MaxCompute schema.
     *
     * @param request - ListInstanceResourceTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResourceTablesResponse
     *
     * @param string                            $InstanceId
     * @param string                            $ResourceId
     * @param ListInstanceResourceTablesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListInstanceResourceTablesResponse
     */
    public function listInstanceResourceTablesWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxcomputeSchema) {
            @$query['MaxcomputeSchema'] = $request->maxcomputeSchema;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceResourceTables',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/resources/' . Url::percentEncode($ResourceId) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceResourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of data tables for a specified instance and data source.
     *
     * @remarks
     * ## Description
     * Provide the instance ID (InstanceId) and data source ID (ResourceId) to retrieve a list of data tables from the specified data source. Use the optional `MaxcomputeSchema` parameter to filter the results by a MaxCompute schema.
     *
     * @param request - ListInstanceResourceTablesRequest
     *
     * @returns ListInstanceResourceTablesResponse
     *
     * @param string                            $InstanceId
     * @param string                            $ResourceId
     * @param ListInstanceResourceTablesRequest $request
     *
     * @return ListInstanceResourceTablesResponse
     */
    public function listInstanceResourceTables($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceResourceTablesWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Lists the resources configured for an instance.
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
     * Lists the resources configured for an instance.
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
     * Gets a list of PAIRec instances.
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
     * Gets a list of PAIRec instances.
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
     * Retrieves the laboratories in a specified scene.
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
     * Retrieves the laboratories in a specified scene.
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
     * Retrieves a list of layers in a specified laboratory.
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
     * Retrieves a list of layers in a specified laboratory.
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
     * Lists parameters.
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
     * Lists parameters.
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
     * Retrieves a list of recall management tasks that match specified conditions.
     *
     * @remarks
     * ## Request
     * - Use this API operation to retrieve a list of recall management tasks.
     * - The `InstanceId` and `Type` parameters are required. All other parameters are optional.
     * - Use the `Condition` parameter to set filter conditions on specific table types, such as filtering by `RecallManagementTableId`.
     * - Use the `SortBy` and `Order` parameters to control the sort order of the results. The default sort order is ascending by creation time.
     * - Use the `PageNumber` and `PageSize` parameters for pagination. The `PageNumber` parameter defaults to 1, and the `PageSize` parameter defaults to 10.
     * - The response includes details about each recall management task, such as its basic information and status.
     *
     * @param request - ListRecallManagementJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecallManagementJobsResponse
     *
     * @param ListRecallManagementJobsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRecallManagementJobsResponse
     */
    public function listRecallManagementJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->condition) {
            @$query['Condition'] = $request->condition;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'action' => 'ListRecallManagementJobs',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecallManagementJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of recall management tasks that match specified conditions.
     *
     * @remarks
     * ## Request
     * - Use this API operation to retrieve a list of recall management tasks.
     * - The `InstanceId` and `Type` parameters are required. All other parameters are optional.
     * - Use the `Condition` parameter to set filter conditions on specific table types, such as filtering by `RecallManagementTableId`.
     * - Use the `SortBy` and `Order` parameters to control the sort order of the results. The default sort order is ascending by creation time.
     * - Use the `PageNumber` and `PageSize` parameters for pagination. The `PageNumber` parameter defaults to 1, and the `PageSize` parameter defaults to 10.
     * - The response includes details about each recall management task, such as its basic information and status.
     *
     * @param request - ListRecallManagementJobsRequest
     *
     * @returns ListRecallManagementJobsResponse
     *
     * @param ListRecallManagementJobsRequest $request
     *
     * @return ListRecallManagementJobsResponse
     */
    public function listRecallManagementJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecallManagementJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of all versions for a specified Recall Management Service.
     *
     * @remarks
     * ## Description
     * This operation queries the details of all versions for a specific Recall Management Service, including the version ID, name, effective status, creation time, and modification time. For accurate results, provide the correct `RecallManagementServiceId` and `InstanceId`.
     * - Use the `PageNumber` and `PageSize` parameters for pagination. By default, the query starts from the first page and returns 50 entries per page.
     * - Use the `SortBy` parameter to sort the results by creation time or modification time. By default, the results are sorted by creation time in ascending order.
     * - The `Order` parameter specifies the sort order. Valid values are `ASC` for ascending order and `DESC` for descending order.
     *
     * @param request - ListRecallManagementServiceVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecallManagementServiceVersionsResponse
     *
     * @param string                                     $RecallManagementServiceId
     * @param ListRecallManagementServiceVersionsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListRecallManagementServiceVersionsResponse
     */
    public function listRecallManagementServiceVersionsWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
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
            'action' => 'ListRecallManagementServiceVersions',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecallManagementServiceVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of all versions for a specified Recall Management Service.
     *
     * @remarks
     * ## Description
     * This operation queries the details of all versions for a specific Recall Management Service, including the version ID, name, effective status, creation time, and modification time. For accurate results, provide the correct `RecallManagementServiceId` and `InstanceId`.
     * - Use the `PageNumber` and `PageSize` parameters for pagination. By default, the query starts from the first page and returns 50 entries per page.
     * - Use the `SortBy` parameter to sort the results by creation time or modification time. By default, the results are sorted by creation time in ascending order.
     * - The `Order` parameter specifies the sort order. Valid values are `ASC` for ascending order and `DESC` for descending order.
     *
     * @param request - ListRecallManagementServiceVersionsRequest
     *
     * @returns ListRecallManagementServiceVersionsResponse
     *
     * @param string                                     $RecallManagementServiceId
     * @param ListRecallManagementServiceVersionsRequest $request
     *
     * @return ListRecallManagementServiceVersionsResponse
     */
    public function listRecallManagementServiceVersions($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecallManagementServiceVersionsWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * This API returns a list of recall management services for a specified instance.
     *
     * @remarks
     * ## Description
     * Call `ListRecallManagementServices` to retrieve a list of recall management services for a specified instance based on parameters such as `InstanceId`, `PageNumber`, and `PageSize`. You can sort the results by creation time or modification time in ascending or descending order.
     * - **InstanceId** is required. It specifies the target instance.
     * - The pagination parameters **PageNumber** and **PageSize** control the number of returned items and the page from which to start. This operation returns the first page of results by default.
     * - Use the **SortBy** and **Order** parameters to customize the sort order of the list.
     *
     * @param request - ListRecallManagementServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecallManagementServicesResponse
     *
     * @param ListRecallManagementServicesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRecallManagementServicesResponse
     */
    public function listRecallManagementServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'action' => 'ListRecallManagementServices',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecallManagementServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API returns a list of recall management services for a specified instance.
     *
     * @remarks
     * ## Description
     * Call `ListRecallManagementServices` to retrieve a list of recall management services for a specified instance based on parameters such as `InstanceId`, `PageNumber`, and `PageSize`. You can sort the results by creation time or modification time in ascending or descending order.
     * - **InstanceId** is required. It specifies the target instance.
     * - The pagination parameters **PageNumber** and **PageSize** control the number of returned items and the page from which to start. This operation returns the first page of results by default.
     * - Use the **SortBy** and **Order** parameters to customize the sort order of the list.
     *
     * @param request - ListRecallManagementServicesRequest
     *
     * @returns ListRecallManagementServicesResponse
     *
     * @param ListRecallManagementServicesRequest $request
     *
     * @return ListRecallManagementServicesResponse
     */
    public function listRecallManagementServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecallManagementServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists all versions of a specified RecallManagementTable.
     *
     * @remarks
     * ## Usage
     * - To retrieve the version history of a specific RecallManagementTable, provide the `RecallManagementTableId` and `InstanceId`.
     * - Use the `SortBy` parameter to sort the results by creation time or update time. By default, the results are sorted by creation time in ascending order.
     * - The `PageNumber` and `PageSize` parameters enable pagination, which allows you to control the number of items to return and the page to display.
     * - If the `Order` parameter is not specified, the results are sorted in ascending order by default.
     *
     * @param request - ListRecallManagementTableVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecallManagementTableVersionsResponse
     *
     * @param string                                   $RecallManagementTableId
     * @param ListRecallManagementTableVersionsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListRecallManagementTableVersionsResponse
     */
    public function listRecallManagementTableVersionsWithOptions($RecallManagementTableId, $request, $headers, $runtime)
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
            'action' => 'ListRecallManagementTableVersions',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecallManagementTableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all versions of a specified RecallManagementTable.
     *
     * @remarks
     * ## Usage
     * - To retrieve the version history of a specific RecallManagementTable, provide the `RecallManagementTableId` and `InstanceId`.
     * - Use the `SortBy` parameter to sort the results by creation time or update time. By default, the results are sorted by creation time in ascending order.
     * - The `PageNumber` and `PageSize` parameters enable pagination, which allows you to control the number of items to return and the page to display.
     * - If the `Order` parameter is not specified, the results are sorted in ascending order by default.
     *
     * @param request - ListRecallManagementTableVersionsRequest
     *
     * @returns ListRecallManagementTableVersionsResponse
     *
     * @param string                                   $RecallManagementTableId
     * @param ListRecallManagementTableVersionsRequest $request
     *
     * @return ListRecallManagementTableVersionsResponse
     */
    public function listRecallManagementTableVersions($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecallManagementTableVersionsWithOptions($RecallManagementTableId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the recall management tables for a specified instance. Pagination and sorting are supported.
     *
     * @remarks
     * ## Request
     * - **InstanceId** is a required parameter specifying the instance to query.
     * - The **Name** and **Type** parameters filter recall management tables by name or type.
     * - The **PageNumber** and **PageSize** parameters control pagination. By default, the query returns the first 50 records.
     * - You can sort results by creation time (GmtCreateTime) or modification time (GmtModifiedTime) in ascending (ASC) or descending (DESC) order.
     *
     * @param request - ListRecallManagementTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecallManagementTablesResponse
     *
     * @param ListRecallManagementTablesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListRecallManagementTablesResponse
     */
    public function listRecallManagementTablesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'action' => 'ListRecallManagementTables',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecallManagementTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the recall management tables for a specified instance. Pagination and sorting are supported.
     *
     * @remarks
     * ## Request
     * - **InstanceId** is a required parameter specifying the instance to query.
     * - The **Name** and **Type** parameters filter recall management tables by name or type.
     * - The **PageNumber** and **PageSize** parameters control pagination. By default, the query returns the first 50 records.
     * - You can sort results by creation time (GmtCreateTime) or modification time (GmtModifiedTime) in ascending (ASC) or descending (DESC) order.
     *
     * @param request - ListRecallManagementTablesRequest
     *
     * @returns ListRecallManagementTablesResponse
     *
     * @param ListRecallManagementTablesRequest $request
     *
     * @return ListRecallManagementTablesResponse
     */
    public function listRecallManagementTables($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecallManagementTablesWithOptions($request, $headers, $runtime);
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
     * Retrieves a list of scenes.
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
     * Retrieves a list of scenes.
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
     * Lists the subcrowds for a specified crowd.
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
     * Lists the subcrowds for a specified crowd.
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
     * Retrieves a list of data tables.
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
     * Retrieves a list of data tables.
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
     * Retrieves the historical traffic records for a specific traffic control target.
     *
     * @remarks
     * ## Usage notes
     * - The `TrafficControlTargetId`, `InstanceId`, and `Environment` parameters are required.
     * - You can use `StartTime` and `EndTime` to specify the time range.
     * - The `Threshold` parameter is optional.
     * - Use `ExperimentId` and `ExperimentGroupId` to filter data for a specific experiment or experiment group.
     * - Use `ItemId` to filter traffic data for a specific item.
     * - The supported environments are the Daily environment, pre-production environment (Pre), and production environment (Prod).
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
     * Retrieves the historical traffic records for a specific traffic control target.
     *
     * @remarks
     * ## Usage notes
     * - The `TrafficControlTargetId`, `InstanceId`, and `Environment` parameters are required.
     * - You can use `StartTime` and `EndTime` to specify the time range.
     * - The `Threshold` parameter is optional.
     * - Use `ExperimentId` and `ExperimentGroupId` to filter data for a specific experiment or experiment group.
     * - Use `ItemId` to filter traffic data for a specific item.
     * - The supported environments are the Daily environment, pre-production environment (Pre), and production environment (Prod).
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
     * Lists traffic control tasks that meet specified conditions.
     *
     * @remarks
     * ## Request
     * - This API retrieves a list of traffic control tasks.
     * - Use query parameters to filter and sort the results.
     * - This operation supports pagination. You can also retrieve all results in a single response.
     * - Note: The `InstanceId` is a required parameter. All other parameters are optional.
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
     * Lists traffic control tasks that meet specified conditions.
     *
     * @remarks
     * ## Request
     * - This API retrieves a list of traffic control tasks.
     * - Use query parameters to filter and sort the results.
     * - This operation supports pagination. You can also retrieve all results in a single response.
     * - Note: The `InstanceId` is a required parameter. All other parameters are optional.
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
     * Takes an experiment offline.
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
     * Takes an experiment offline.
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
     * Takes a specified experiment group offline.
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
     * Takes a specified experiment group offline.
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
     * Takes the specified laboratory offline.
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
     * Takes the specified laboratory offline.
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
     * Takes a specified recall management service offline.
     *
     * @remarks
     * ## Description
     * Use this API to take a specific recall management service offline. Ensure that the provided `RecallManagementServiceId` and `InstanceId` are accurate to prevent unintended operations.
     * - **Important**: Once a recall management service is taken offline, it stops processing new requests until you reactivate it.
     * - Back up any required data or configurations before you perform this operation in case you need to restore the current state.
     *
     * @param request - OfflineRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineRecallManagementServiceResponse
     *
     * @param string                                $RecallManagementServiceId
     * @param OfflineRecallManagementServiceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return OfflineRecallManagementServiceResponse
     */
    public function offlineRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
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
            'action' => 'OfflineRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/action/offline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OfflineRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Takes a specified recall management service offline.
     *
     * @remarks
     * ## Description
     * Use this API to take a specific recall management service offline. Ensure that the provided `RecallManagementServiceId` and `InstanceId` are accurate to prevent unintended operations.
     * - **Important**: Once a recall management service is taken offline, it stops processing new requests until you reactivate it.
     * - Back up any required data or configurations before you perform this operation in case you need to restore the current state.
     *
     * @param request - OfflineRecallManagementServiceRequest
     *
     * @returns OfflineRecallManagementServiceResponse
     *
     * @param string                                $RecallManagementServiceId
     * @param OfflineRecallManagementServiceRequest $request
     *
     * @return OfflineRecallManagementServiceResponse
     */
    public function offlineRecallManagementService($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Brings a specified experiment online.
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
     * Brings a specified experiment online.
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
     * Brings a specified experiment group online.
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
     * Brings a specified experiment group online.
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
     * Publishes a specified laboratory for experimental analysis.
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
     * Publishes a specified laboratory for experimental analysis.
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
     * This operation brings a specified Recall Management Service online.
     *
     * @remarks
     * ## Request
     * You can use this operation to bring a Recall Management Service online by specifying the Recall Management Service ID and the instance ID. Ensure that the `RecallManagementServiceId` and `InstanceId` are correct and that you have the required permissions.
     *
     * @param request - OnlineRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param OnlineRecallManagementServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return OnlineRecallManagementServiceResponse
     */
    public function onlineRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
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
            'action' => 'OnlineRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/action/online',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OnlineRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation brings a specified Recall Management Service online.
     *
     * @remarks
     * ## Request
     * You can use this operation to bring a Recall Management Service online by specifying the Recall Management Service ID and the instance ID. Ensure that the `RecallManagementServiceId` and `InstanceId` are correct and that you have the required permissions.
     *
     * @param request - OnlineRecallManagementServiceRequest
     *
     * @returns OnlineRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param OnlineRecallManagementServiceRequest $request
     *
     * @return OnlineRecallManagementServiceResponse
     */
    public function onlineRecallManagementService($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Synchronizes a MaxCompute table with the recall engine. This operation allows you to publish specific partitions and select a synchronization mode.
     *
     * @remarks
     * ## Request details
     * This API synchronizes a specified MaxCompute table with the recall engine. You must provide the correct `RecallManagementTableId` in the path parameter and the instance ID in the request body. You can also specify the table partitions to publish, whether to skip the threshold check, and the synchronization mode. To publish specific partitions, provide them as key-value pairs in the `Partitions` field.
     *
     * @param request - PublishRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRecallManagementTableResponse
     *
     * @param string                              $RecallManagementTableId
     * @param PublishRecallManagementTableRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return PublishRecallManagementTableResponse
     */
    public function publishRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->partition) {
            @$body['Partition'] = $request->partition;
        }

        if (null !== $request->partitions) {
            @$body['Partitions'] = $request->partitions;
        }

        if (null !== $request->skipThresholdCheck) {
            @$body['SkipThresholdCheck'] = $request->skipThresholdCheck;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '/action/publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes a MaxCompute table with the recall engine. This operation allows you to publish specific partitions and select a synchronization mode.
     *
     * @remarks
     * ## Request details
     * This API synchronizes a specified MaxCompute table with the recall engine. You must provide the correct `RecallManagementTableId` in the path parameter and the instance ID in the request body. You can also specify the table partitions to publish, whether to skip the threshold check, and the synchronization mode. To publish specific partitions, provide them as key-value pairs in the `Partitions` field.
     *
     * @param request - PublishRecallManagementTableRequest
     *
     * @returns PublishRecallManagementTableResponse
     *
     * @param string                              $RecallManagementTableId
     * @param PublishRecallManagementTableRequest $request
     *
     * @return PublishRecallManagementTableResponse
     */
    public function publishRecallManagementTable($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime);
    }

    /**
     * If an experiment is stable and performs well, you can push all traffic to it. This action retires the original experiment group and creates a new one that contains only this experiment. The new group receives 100% of the traffic.
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
     * If an experiment is stable and performs well, you can push all traffic to it. This action retires the original experiment group and creates a new one that contains only this experiment. The new group receives 100% of the traffic.
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
     * Retrieves statistics for a specified data diagnosis task within a time range.
     *
     * @remarks
     * ## Request description
     * - The `DataDiagnosisId` parameter is required and specifies the data diagnosis task.
     * - The `InstanceId` parameter is also required and specifies the instance.
     * - The `StartDate` and `EndDate` parameters specify the start and end dates of the time range. The format is YYYY-MM-DD.
     * - The `RemainRateType` parameter is optional. It specifies the retention rate report type. The default value is \\"Period\\", which indicates a periodic report.
     * - The response includes the request ID (`RequestId`) and a `Statistics` object. This object contains the dates of task failures (`FailedDates`) and dates with missing task data (`NoDataDates`).
     *
     * @param request - QueryDataDiagnosisStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDataDiagnosisStatisticsResponse
     *
     * @param string                              $DataDiagnosisId
     * @param QueryDataDiagnosisStatisticsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDataDiagnosisStatisticsResponse
     */
    public function queryDataDiagnosisStatisticsWithOptions($DataDiagnosisId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remainRateType) {
            @$query['RemainRateType'] = $request->remainRateType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDataDiagnosisStatistics',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses/' . Url::percentEncode($DataDiagnosisId) . '/statistics/action/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryDataDiagnosisStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics for a specified data diagnosis task within a time range.
     *
     * @remarks
     * ## Request description
     * - The `DataDiagnosisId` parameter is required and specifies the data diagnosis task.
     * - The `InstanceId` parameter is also required and specifies the instance.
     * - The `StartDate` and `EndDate` parameters specify the start and end dates of the time range. The format is YYYY-MM-DD.
     * - The `RemainRateType` parameter is optional. It specifies the retention rate report type. The default value is \\"Period\\", which indicates a periodic report.
     * - The response includes the request ID (`RequestId`) and a `Statistics` object. This object contains the dates of task failures (`FailedDates`) and dates with missing task data (`NoDataDates`).
     *
     * @param request - QueryDataDiagnosisStatisticsRequest
     *
     * @returns QueryDataDiagnosisStatisticsResponse
     *
     * @param string                              $DataDiagnosisId
     * @param QueryDataDiagnosisStatisticsRequest $request
     *
     * @return QueryDataDiagnosisStatisticsResponse
     */
    public function queryDataDiagnosisStatistics($DataDiagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataDiagnosisStatisticsWithOptions($DataDiagnosisId, $request, $headers, $runtime);
    }

    /**
     * Retrieves records from a specified recall management table.
     *
     * @remarks
     * ## Request
     * This API retrieves records from a specific recall management table using the provided primary keys. You must provide a valid `InstanceId` and `RecallManagementTableId`, and a non-empty `PrimaryKeys` list. If you specify `RecallManagementTableVersionId`, the API returns records from that version; otherwise, it uses the currently published version.
     *
     * @param request - QueryRecallManagementTableRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRecallManagementTableRecordsResponse
     *
     * @param string                                   $RecallManagementTableId
     * @param QueryRecallManagementTableRecordsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryRecallManagementTableRecordsResponse
     */
    public function queryRecallManagementTableRecordsWithOptions($RecallManagementTableId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->primaryKeys) {
            @$query['PrimaryKeys'] = $request->primaryKeys;
        }

        if (null !== $request->recallManagementTableVersionId) {
            @$query['RecallManagementTableVersionId'] = $request->recallManagementTableVersionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRecallManagementTableRecords',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '/queryrecords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryRecallManagementTableRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves records from a specified recall management table.
     *
     * @remarks
     * ## Request
     * This API retrieves records from a specific recall management table using the provided primary keys. You must provide a valid `InstanceId` and `RecallManagementTableId`, and a non-empty `PrimaryKeys` list. If you specify `RecallManagementTableVersionId`, the API returns records from that version; otherwise, it uses the currently published version.
     *
     * @param request - QueryRecallManagementTableRecordsRequest
     *
     * @returns QueryRecallManagementTableRecordsResponse
     *
     * @param string                                   $RecallManagementTableId
     * @param QueryRecallManagementTableRecordsRequest $request
     *
     * @return QueryRecallManagementTableRecordsResponse
     */
    public function queryRecallManagementTableRecords($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRecallManagementTableRecordsWithOptions($RecallManagementTableId, $request, $headers, $runtime);
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
     * Retrieves the traffic control details of a target item for a given environment and date range.
     *
     * @remarks
     * ## Request
     * Use this API to query the details of single-item control for a given traffic control target on a specified date and for a specific instance ID and environment. The details include traffic data and feature information for the top 100 items before and after the control is applied. Ensure that the `TrafficControlTargetId`, `InstanceId`, and `Environment` parameters are accurate, and that the `Date` is in YYYY-MM-DD format. Although the `Date` parameter is optional, we recommend specifying a date for meaningful results.
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
     * Retrieves the traffic control details of a target item for a given environment and date range.
     *
     * @remarks
     * ## Request
     * Use this API to query the details of single-item control for a given traffic control target on a specified date and for a specific instance ID and environment. The details include traffic data and feature information for the top 100 items before and after the control is applied. Ensure that the `TrafficControlTargetId`, `InstanceId`, and `Environment` parameters are accurate, and that the `Date` is in YYYY-MM-DD format. Although the `Date` parameter is optional, we recommend specifying a date for meaningful results.
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
     * Retrieves the deployment status and related information of a specified traffic control task in a specific environment.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the deployment result of a traffic control task specified by TrafficControlTaskId for a given instance ID and environment. Make sure that the specified InstanceId is associated with your account and that the Environment parameter value is valid (Daily for daily environment, Pre for staging environment, Prod for production environment). All request parameters are required.
     *
     * @param request - QueryTrafficControlTaskDeployResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTrafficControlTaskDeployResultResponse
     *
     * @param string                                     $TrafficControlTaskId
     * @param QueryTrafficControlTaskDeployResultRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryTrafficControlTaskDeployResultResponse
     */
    public function queryTrafficControlTaskDeployResultWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
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
            'action' => 'QueryTrafficControlTaskDeployResult',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/queryresult',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTrafficControlTaskDeployResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the deployment status and related information of a specified traffic control task in a specific environment.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the deployment result of a traffic control task specified by TrafficControlTaskId for a given instance ID and environment. Make sure that the specified InstanceId is associated with your account and that the Environment parameter value is valid (Daily for daily environment, Pre for staging environment, Prod for production environment). All request parameters are required.
     *
     * @param request - QueryTrafficControlTaskDeployResultRequest
     *
     * @returns QueryTrafficControlTaskDeployResultResponse
     *
     * @param string                                     $TrafficControlTaskId
     * @param QueryTrafficControlTaskDeployResultRequest $request
     *
     * @return QueryTrafficControlTaskDeployResultResponse
     */
    public function queryTrafficControlTaskDeployResult($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTrafficControlTaskDeployResultWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a detailed report on item control for a specified traffic control task.
     *
     * @remarks
     * ## Description
     * - This API retrieves the item control results for a specific traffic control task within a given time range.
     * - `TrafficControlTaskId` is the unique identifier for a traffic control task.
     * - `InstanceId` specifies the instance that runs the task.
     * - The `Environment` parameter specifies the task\\"s execution environment. Valid values are Daily (development environment), Pre (staging environment), and Prod (production environment).
     * - `StartTime` and `EndTime` specify the start and end of the time range for the report, respectively. The format is "YYYY-MM-DD HH:MM:SS".
     * - The specified start and end times must be valid and span no more than two consecutive calendar days.
     *
     * @param request - QueryTrafficControlTaskItemReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTrafficControlTaskItemReportResponse
     *
     * @param string                                   $TrafficControlTaskId
     * @param QueryTrafficControlTaskItemReportRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryTrafficControlTaskItemReportResponse
     */
    public function queryTrafficControlTaskItemReportWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTrafficControlTaskItemReport',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/queryitemreport',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTrafficControlTaskItemReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a detailed report on item control for a specified traffic control task.
     *
     * @remarks
     * ## Description
     * - This API retrieves the item control results for a specific traffic control task within a given time range.
     * - `TrafficControlTaskId` is the unique identifier for a traffic control task.
     * - `InstanceId` specifies the instance that runs the task.
     * - The `Environment` parameter specifies the task\\"s execution environment. Valid values are Daily (development environment), Pre (staging environment), and Prod (production environment).
     * - `StartTime` and `EndTime` specify the start and end of the time range for the report, respectively. The format is "YYYY-MM-DD HH:MM:SS".
     * - The specified start and end times must be valid and span no more than two consecutive calendar days.
     *
     * @param request - QueryTrafficControlTaskItemReportRequest
     *
     * @returns QueryTrafficControlTaskItemReportResponse
     *
     * @param string                                   $TrafficControlTaskId
     * @param QueryTrafficControlTaskItemReportRequest $request
     *
     * @return QueryTrafficControlTaskItemReportResponse
     */
    public function queryTrafficControlTaskItemReport($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTrafficControlTaskItemReportWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * Releases a traffic control task for the specified instance and environment.
     *
     * @remarks
     * ## Request
     * Use this API to release a traffic control task for a specific instance and environment (Daily, Pre, or Prod). Your request must include the `TrafficControlTaskId`, `InstanceId`, and `Environment` parameters.
     * - `TrafficControlTaskId`: The unique ID of the traffic control task.
     * - `InstanceId`: The ID of the target instance.
     * - `Environment`: The execution environment for the traffic control task. Valid values: `Daily`, `Pre`, and `Prod`.
     * The request succeeds only if all required parameters are provided correctly. A successful response includes a `RequestId`.
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
     * Releases a traffic control task for the specified instance and environment.
     *
     * @remarks
     * ## Request
     * Use this API to release a traffic control task for a specific instance and environment (Daily, Pre, or Prod). Your request must include the `TrafficControlTaskId`, `InstanceId`, and `Environment` parameters.
     * - `TrafficControlTaskId`: The unique ID of the traffic control task.
     * - `InstanceId`: The ID of the target instance.
     * - `Environment`: The execution environment for the traffic control task. Valid values: `Daily`, `Pre`, and `Prod`.
     * The request succeeds only if all required parameters are provided correctly. A successful response includes a `RequestId`.
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
     * Retrieve a metric group\\"s report.
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
     * Retrieve a metric group\\"s report.
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
     * Conducts conversations with users through an AI shopping guide to provide product recommendation services.
     *
     * @remarks
     * ## Operation description
     * - This API is used to send conversation messages to the AI shopping guide and supports Server-Sent Events (SSE).
     * - `InstanceId`, `SessionId`, `SceneId`, `ServiceId`, `Environment`, `Uid`, and `Language` are required parameters. Ensure the accuracy of these values to obtain optimal responses.
     * - The `InputMessage` must contain at least one text-type message that describes the user\\"s request or question.
     * - Based on the provided input, the system returns corresponding recommendation results or other relevant information.
     * - Check the returned `StopReason` field to understand whether the session has ended and the reason.
     *
     * @param request - ShoppingAssistantRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShoppingAssistantResponse
     *
     * @param ShoppingAssistantRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ShoppingAssistantResponse
     */
    public function shoppingAssistantWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->contents) {
            @$body['Contents'] = $request->contents;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->inputMessage) {
            @$body['InputMessage'] = $request->inputMessage;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ShoppingAssistant',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/shopping_assistant/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ShoppingAssistantResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Conducts conversations with users through an AI shopping guide to provide product recommendation services.
     *
     * @remarks
     * ## Operation description
     * - This API is used to send conversation messages to the AI shopping guide and supports Server-Sent Events (SSE).
     * - `InstanceId`, `SessionId`, `SceneId`, `ServiceId`, `Environment`, `Uid`, and `Language` are required parameters. Ensure the accuracy of these values to obtain optimal responses.
     * - The `InputMessage` must contain at least one text-type message that describes the user\\"s request or question.
     * - Based on the provided input, the system returns corresponding recommendation results or other relevant information.
     * - Check the returned `StopReason` field to understand whether the session has ended and the reason.
     *
     * @param request - ShoppingAssistantRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShoppingAssistantResponse
     *
     * @param ShoppingAssistantRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ShoppingAssistantResponse
     */
    public function shoppingAssistantWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->contents) {
            @$body['Contents'] = $request->contents;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->environment) {
            @$body['Environment'] = $request->environment;
        }

        if (null !== $request->inputMessage) {
            @$body['InputMessage'] = $request->inputMessage;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceId) {
            @$body['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ShoppingAssistant',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/shopping_assistant/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ShoppingAssistantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Conducts conversations with users through an AI shopping guide to provide product recommendation services.
     *
     * @remarks
     * ## Operation description
     * - This API is used to send conversation messages to the AI shopping guide and supports Server-Sent Events (SSE).
     * - `InstanceId`, `SessionId`, `SceneId`, `ServiceId`, `Environment`, `Uid`, and `Language` are required parameters. Ensure the accuracy of these values to obtain optimal responses.
     * - The `InputMessage` must contain at least one text-type message that describes the user\\"s request or question.
     * - Based on the provided input, the system returns corresponding recommendation results or other relevant information.
     * - Check the returned `StopReason` field to understand whether the session has ended and the reason.
     *
     * @param request - ShoppingAssistantRequest
     *
     * @returns ShoppingAssistantResponse
     *
     * @param ShoppingAssistantRequest $request
     *
     * @return ShoppingAssistantResponse
     */
    public function shoppingAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->shoppingAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * Splits the target values for a traffic control target into time intervals.
     *
     * @remarks
     * Splits the target values for a traffic control target into time intervals.
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
     * Splits the target values for a traffic control target into time intervals.
     *
     * @remarks
     * Splits the target values for a traffic control target into time intervals.
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
     * Starts a traffic control task for a specific traffic control target.
     *
     * @remarks
     * ## Request
     * Call this operation to start a traffic control task by providing the `TrafficControlTargetId` and `InstanceId`.
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
     * Starts a traffic control task for a specific traffic control target.
     *
     * @remarks
     * ## Request
     * Call this operation to start a traffic control task by providing the `TrafficControlTargetId` and `InstanceId`.
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
     * Starts a traffic control task with a specified ID for instances in different environments.
     *
     * @remarks
     * ## Request details
     * - This operation starts the traffic control task identified by `TrafficControlTaskId`.
     * - `InstanceId` specifies the target instance.
     * - `Environment` specifies the target environment. Valid values: Daily, Pre, and Prod.
     * - Ensure that all required parameters are set correctly before you call this operation. The specified `TrafficControlTaskId` must exist in the system.
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
     * Starts a traffic control task with a specified ID for instances in different environments.
     *
     * @remarks
     * ## Request details
     * - This operation starts the traffic control task identified by `TrafficControlTaskId`.
     * - `InstanceId` specifies the target instance.
     * - `Environment` specifies the target environment. Valid values: Daily, Pre, and Prod.
     * - Ensure that all required parameters are set correctly before you call this operation. The specified `TrafficControlTaskId` must exist in the system.
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
     * Stops a traffic control Flink task with the specified ID.
     *
     * @remarks
     * ## Request description
     * You can call this operation to stop a specific traffic control Flink task based on the specified TrafficControlTaskId. Make sure that you have prepared the correct InstanceId and the environment to which the instance belongs (Daily for daily environment, Pre for staging environment, Prod for production environment). Include this information in the request body to ensure that the operation is correctly performed.
     *
     * @param request - StopTrafficControlFlinkTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTrafficControlFlinkTaskResponse
     *
     * @param string                             $TrafficControlTaskId
     * @param StopTrafficControlFlinkTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return StopTrafficControlFlinkTaskResponse
     */
    public function stopTrafficControlFlinkTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
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
            'action' => 'StopTrafficControlFlinkTask',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trafficcontroltasks/' . Url::percentEncode($TrafficControlTaskId) . '/action/stopflink',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTrafficControlFlinkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a traffic control Flink task with the specified ID.
     *
     * @remarks
     * ## Request description
     * You can call this operation to stop a specific traffic control Flink task based on the specified TrafficControlTaskId. Make sure that you have prepared the correct InstanceId and the environment to which the instance belongs (Daily for daily environment, Pre for staging environment, Prod for production environment). Include this information in the request body to ensure that the operation is correctly performed.
     *
     * @param request - StopTrafficControlFlinkTaskRequest
     *
     * @returns StopTrafficControlFlinkTaskResponse
     *
     * @param string                             $TrafficControlTaskId
     * @param StopTrafficControlFlinkTaskRequest $request
     *
     * @return StopTrafficControlFlinkTaskResponse
     */
    public function stopTrafficControlFlinkTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrafficControlFlinkTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * Stops a specific traffic control target.
     *
     * @remarks
     * ## Request
     * This operation stops a traffic control task using the provided `TrafficControlTargetId` and `InstanceId`. Ensure that the parameter values are accurate to avoid stopping the wrong target or instance.
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
     * Stops a specific traffic control target.
     *
     * @remarks
     * ## Request
     * This operation stops a traffic control task using the provided `TrafficControlTargetId` and `InstanceId`. Ensure that the parameter values are accurate to avoid stopping the wrong target or instance.
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
     * Stops a traffic control task for a specific instance and environment.
     *
     * @remarks
     * ## Usage notes
     * - This API stops a traffic control task identified by a specific `TrafficControlTaskId`.
     * - The `InstanceId` and `Environment` parameters are required to identify the target instance and its environment.
     * - Ensure that you provide the correct `TrafficControlTaskId` to prevent the request from failing.
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
     * Stops a traffic control task for a specific instance and environment.
     *
     * @remarks
     * ## Usage notes
     * - This API stops a traffic control task identified by a specific `TrafficControlTaskId`.
     * - The `InstanceId` and `Environment` parameters are required to identify the target instance and its environment.
     * - Ensure that you provide the correct `TrafficControlTaskId` to prevent the request from failing.
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
     * Syncs the replay log for a feature consistency check job.
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
     * Syncs the replay log for a feature consistency check job.
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
     * Terminates a feature consistency check job.
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
     * Terminates a feature consistency check job.
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
     * Modifies the metric configuration of an existing ABTest experiment.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to update the attributes of a specified ABTest metric, including whether to calculate significance and the aggregation method. Make sure that you have obtained the correct `ABMetricId` before calling this operation.
     * - `NeedSignificance`: Specifies whether to perform significance analysis on the current metric. Default value: `false`.
     * - `AggregationByUser`: When significance calculation is enabled, specifies whether to aggregate data by user or by sample. Default value: `false` (by sample).
     * - `Numerator` and `Denominator`: The specific definitions of the numerator and denominator used in significance calculation.
     * - `IsBinomialDistribution`: Valid only for derived metrics. Specifies whether the metric follows a binomial distribution, which affects subsequent data processing logic.
     * Note: You do not need to provide all fields at the same time. Include only the parameters whose values you want to change in the request body.
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
        if (null !== $request->aggregationByUser) {
            @$body['AggregationByUser'] = $request->aggregationByUser;
        }

        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->denominator) {
            @$body['Denominator'] = $request->denominator;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isBinomialDistribution) {
            @$body['IsBinomialDistribution'] = $request->isBinomialDistribution;
        }

        if (null !== $request->leftMetricId) {
            @$body['LeftMetricId'] = $request->leftMetricId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->needSignificance) {
            @$body['NeedSignificance'] = $request->needSignificance;
        }

        if (null !== $request->numerator) {
            @$body['Numerator'] = $request->numerator;
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
     * Modifies the metric configuration of an existing ABTest experiment.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to update the attributes of a specified ABTest metric, including whether to calculate significance and the aggregation method. Make sure that you have obtained the correct `ABMetricId` before calling this operation.
     * - `NeedSignificance`: Specifies whether to perform significance analysis on the current metric. Default value: `false`.
     * - `AggregationByUser`: When significance calculation is enabled, specifies whether to aggregate data by user or by sample. Default value: `false` (by sample).
     * - `Numerator` and `Denominator`: The specific definitions of the numerator and denominator used in significance calculation.
     * - `IsBinomialDistribution`: Valid only for derived metrics. Specifies whether the metric follows a binomial distribution, which affects subsequent data processing logic.
     * Note: You do not need to provide all fields at the same time. Include only the parameters whose values you want to change in the request body.
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
     * Updates an A/B test metric group.
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
     * Updates an A/B test metric group.
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
     * Updates a crowd\\"s information, such as its name and description.
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
     * Updates a crowd\\"s information, such as its name and description.
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
     * Updates the configuration of a specified data diagnosis task.
     *
     * @remarks
     * ## Request
     * This API updates the configuration of an existing data diagnosis task, including the instance ID, task name, task type, and specific configuration content. Provide the `DataDiagnosisId` in the request path to identify the task to update. You must also specify the `Config` parameter based on the task `Type`. For periodic runs, set the execution time in the `CycleTime` field. If a periodic run is not required, omit this field.
     * ## Usage notes
     * - `DataDiagnosisId` is a required path parameter that uniquely identifies a data diagnosis task.
     * - The structure of the `Config` field varies depending on the value of `Type`. Refer to the examples in this document for configuration details.
     * - To disable periodic runs, omit the `CycleTime` field.
     * - When updating a task for two-table join analysis (`JoinTables`), provide the information for the left and right tables, including `LeftTableMetaId` and `RightTableMetaId`.
     * - The `InstanceId`, `Name`, and `Type` parameters are required for all types of data diagnosis tasks.
     *
     * @param request - UpdateDataDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataDiagnosisResponse
     *
     * @param string                     $DataDiagnosisId
     * @param UpdateDataDiagnosisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDataDiagnosisResponse
     */
    public function updateDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->cycleTime) {
            @$body['CycleTime'] = $request->cycleTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->leftTableMetaId) {
            @$body['LeftTableMetaId'] = $request->leftTableMetaId;
        }

        if (null !== $request->leftTablePartitionField) {
            @$body['LeftTablePartitionField'] = $request->leftTablePartitionField;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->partitionField) {
            @$body['PartitionField'] = $request->partitionField;
        }

        if (null !== $request->rightTableMetaId) {
            @$body['RightTableMetaId'] = $request->rightTableMetaId;
        }

        if (null !== $request->rightTablePartitionField) {
            @$body['RightTablePartitionField'] = $request->rightTablePartitionField;
        }

        if (null !== $request->tableMetaId) {
            @$body['TableMetaId'] = $request->tableMetaId;
        }

        if (null !== $request->topNQuantity) {
            @$body['TopNQuantity'] = $request->topNQuantity;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataDiagnosis',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/datadiagnoses/' . Url::percentEncode($DataDiagnosisId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDataDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specified data diagnosis task.
     *
     * @remarks
     * ## Request
     * This API updates the configuration of an existing data diagnosis task, including the instance ID, task name, task type, and specific configuration content. Provide the `DataDiagnosisId` in the request path to identify the task to update. You must also specify the `Config` parameter based on the task `Type`. For periodic runs, set the execution time in the `CycleTime` field. If a periodic run is not required, omit this field.
     * ## Usage notes
     * - `DataDiagnosisId` is a required path parameter that uniquely identifies a data diagnosis task.
     * - The structure of the `Config` field varies depending on the value of `Type`. Refer to the examples in this document for configuration details.
     * - To disable periodic runs, omit the `CycleTime` field.
     * - When updating a task for two-table join analysis (`JoinTables`), provide the information for the left and right tables, including `LeftTableMetaId` and `RightTableMetaId`.
     * - The `InstanceId`, `Name`, and `Type` parameters are required for all types of data diagnosis tasks.
     *
     * @param request - UpdateDataDiagnosisRequest
     *
     * @returns UpdateDataDiagnosisResponse
     *
     * @param string                     $DataDiagnosisId
     * @param UpdateDataDiagnosisRequest $request
     *
     * @return UpdateDataDiagnosisResponse
     */
    public function updateDataDiagnosis($DataDiagnosisId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDataDiagnosisWithOptions($DataDiagnosisId, $request, $headers, $runtime);
    }

    /**
     * Updates an engine configuration.
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
     * Updates an engine configuration.
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
     * Updates the properties of a specified experiment, such as its name.
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
     * Updates the properties of a specified experiment, such as its name.
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
     * Updates information for a specified experiment group, such as its name and description.
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
     * Updates information for a specified experiment group, such as its name and description.
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
     * Updates the configuration details of a feature consistency check task, such as the name.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to update the configuration of an existing feature consistency check task. By providing new configuration parameters, you can modify multiple properties including the instance ID, name, and scene ID. Ensure that all required parameters are included in the request, and provide optional parameters as needed.
     * - **FeatureConsistencyCheckJobConfigId** is a path parameter that specifies the feature consistency check task to update.
     * - All other parameters are in the request body. Some are required (such as InstanceId and Name), and the rest are optional.
     * - The SampleRate value must be a floating-point number between 0 and 1, which indicates the sampling ratio.
     * - If you use FeatureStore-related features, make sure that you correctly set the IsUseFeatureStore flag and the related FeatureStore* fields.
     * - For network configuration parameters (such as VpcId and SwitchId), make sure that the values match your Alibaba Cloud environment.
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

        if (null !== $request->maxcomputeSchema) {
            @$body['MaxcomputeSchema'] = $request->maxcomputeSchema;
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
     * Updates the configuration details of a feature consistency check task, such as the name.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to update the configuration of an existing feature consistency check task. By providing new configuration parameters, you can modify multiple properties including the instance ID, name, and scene ID. Ensure that all required parameters are included in the request, and provide optional parameters as needed.
     * - **FeatureConsistencyCheckJobConfigId** is a path parameter that specifies the feature consistency check task to update.
     * - All other parameters are in the request body. Some are required (such as InstanceId and Name), and the rest are optional.
     * - The SampleRate value must be a floating-point number between 0 and 1, which indicates the sampling ratio.
     * - If you use FeatureStore-related features, make sure that you correctly set the IsUseFeatureStore flag and the related FeatureStore* fields.
     * - For network configuration parameters (such as VpcId and SwitchId), make sure that the values match your Alibaba Cloud environment.
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
     * Updates a specified resource for a specified instance.
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
     * Updates a specified resource for a specified instance.
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
     * Updates a laboratory\\"s information, such as its name.
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
     * Updates a laboratory\\"s information, such as its name.
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
     * Updates the name and description of a specified layer.
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
     * Updates the name and description of a specified layer.
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
     * Updates information for a specified parameter, such as its value.
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
     * Updates information for a specified parameter, such as its value.
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
     * Updates the recall management configuration, including the instance ID, password, and network configuration.
     *
     * @remarks
     * ## Request
     * - `InstanceId` is required. It specifies the instance to update.
     * - `Password` and `NetworkConfigs` are optional.
     * - Use `NetworkConfigs` to define the network by specifying the Virtual Private Cloud (VPC) ID (`VpcId`) and mapping availability zones to VSwitch IDs (`VswitchIds`).
     * - Note: Ensure that sensitive information, such as the password, is transmitted securely.
     *
     * @param request - UpdateRecallManagementConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecallManagementConfigResponse
     *
     * @param UpdateRecallManagementConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateRecallManagementConfigResponse
     */
    public function updateRecallManagementConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkConfigs) {
            @$body['NetworkConfigs'] = $request->networkConfigs;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRecallManagementConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementconfigs',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRecallManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the recall management configuration, including the instance ID, password, and network configuration.
     *
     * @remarks
     * ## Request
     * - `InstanceId` is required. It specifies the instance to update.
     * - `Password` and `NetworkConfigs` are optional.
     * - Use `NetworkConfigs` to define the network by specifying the Virtual Private Cloud (VPC) ID (`VpcId`) and mapping availability zones to VSwitch IDs (`VswitchIds`).
     * - Note: Ensure that sensitive information, such as the password, is transmitted securely.
     *
     * @param request - UpdateRecallManagementConfigRequest
     *
     * @returns UpdateRecallManagementConfigResponse
     *
     * @param UpdateRecallManagementConfigRequest $request
     *
     * @return UpdateRecallManagementConfigResponse
     */
    public function updateRecallManagementConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRecallManagementConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the instance ID and description of a specified recall management service.
     *
     * @remarks
     * ## Request description
     * This operation updates the instance ID and description of a specific recall management service. Make sure to specify the `InstanceId` and `Description` fields in the request body.
     * - **RecallManagementServiceId**: The unique identifier of the recall management service.
     * - **InstanceId**: The instance ID to associate with this recall management service.
     * - **Description**: A new description for the recall management service.
     * Note: You must provide all required parameters, or the update may fail.
     *
     * @param request - UpdateRecallManagementServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param UpdateRecallManagementServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateRecallManagementServiceResponse
     */
    public function updateRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRecallManagementService',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRecallManagementServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the instance ID and description of a specified recall management service.
     *
     * @remarks
     * ## Request description
     * This operation updates the instance ID and description of a specific recall management service. Make sure to specify the `InstanceId` and `Description` fields in the request body.
     * - **RecallManagementServiceId**: The unique identifier of the recall management service.
     * - **InstanceId**: The instance ID to associate with this recall management service.
     * - **Description**: A new description for the recall management service.
     * Note: You must provide all required parameters, or the update may fail.
     *
     * @param request - UpdateRecallManagementServiceRequest
     *
     * @returns UpdateRecallManagementServiceResponse
     *
     * @param string                               $RecallManagementServiceId
     * @param UpdateRecallManagementServiceRequest $request
     *
     * @return UpdateRecallManagementServiceResponse
     */
    public function updateRecallManagementService($RecallManagementServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRecallManagementServiceWithOptions($RecallManagementServiceId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a specific Recall Management Service version.
     *
     * @remarks
     * ## Request
     * This API updates the recall and merge configurations for a specific recall management service version. Your request must include the correct `InstanceId` and the configurations to update. Refer to the parameter descriptions for details on required parameters.
     *
     * @param request - UpdateRecallManagementServiceVersionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param string                                            $RecallManagementServiceVersionConfigId
     * @param UpdateRecallManagementServiceVersionConfigRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return UpdateRecallManagementServiceVersionConfigResponse
     */
    public function updateRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configType) {
            @$body['ConfigType'] = $request->configType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergeConfig) {
            @$body['MergeConfig'] = $request->mergeConfig;
        }

        if (null !== $request->recallConfig) {
            @$body['RecallConfig'] = $request->recallConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRecallManagementServiceVersionConfig',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementservices/' . Url::percentEncode($RecallManagementServiceId) . '/versions/' . Url::percentEncode($RecallManagementServiceVersionId) . '/configs/' . Url::percentEncode($RecallManagementServiceVersionConfigId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRecallManagementServiceVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specific Recall Management Service version.
     *
     * @remarks
     * ## Request
     * This API updates the recall and merge configurations for a specific recall management service version. Your request must include the correct `InstanceId` and the configurations to update. Refer to the parameter descriptions for details on required parameters.
     *
     * @param request - UpdateRecallManagementServiceVersionConfigRequest
     *
     * @returns UpdateRecallManagementServiceVersionConfigResponse
     *
     * @param string                                            $RecallManagementServiceId
     * @param string                                            $RecallManagementServiceVersionId
     * @param string                                            $RecallManagementServiceVersionConfigId
     * @param UpdateRecallManagementServiceVersionConfigRequest $request
     *
     * @return UpdateRecallManagementServiceVersionConfigResponse
     */
    public function updateRecallManagementServiceVersionConfig($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRecallManagementServiceVersionConfigWithOptions($RecallManagementServiceId, $RecallManagementServiceVersionId, $RecallManagementServiceVersionConfigId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a recall management table specified by its ID.
     *
     * @remarks
     * ## Request details
     * - Updates the recall management table specified by `RecallManagementTableId`.
     * - You can enable fluctuation thresholds for the row count or data size and define the specific ranges for these thresholds.
     * - You can add or modify fields in the table, including their names, types, and attributes.
     * - The `InstanceId` parameter is required and identifies the specific instance.
     * - For vector-related fields, you can also specify the vector dimension and metric type.
     * - Note: Optional parameters in the request body selectively update the target table.
     *
     * @param request - UpdateRecallManagementTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param UpdateRecallManagementTableRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateRecallManagementTableResponse
     */
    public function updateRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enableDataSizeFluctuationThreshold) {
            @$body['EnableDataSizeFluctuationThreshold'] = $request->enableDataSizeFluctuationThreshold;
        }

        if (null !== $request->enableRowCountFluctuationThreshold) {
            @$body['EnableRowCountFluctuationThreshold'] = $request->enableRowCountFluctuationThreshold;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->indexVersionId) {
            @$body['IndexVersionId'] = $request->indexVersionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxDataSizeFluctuationThreshold) {
            @$body['MaxDataSizeFluctuationThreshold'] = $request->maxDataSizeFluctuationThreshold;
        }

        if (null !== $request->maxRowCountFluctuationThreshold) {
            @$body['MaxRowCountFluctuationThreshold'] = $request->maxRowCountFluctuationThreshold;
        }

        if (null !== $request->minDataSizeFluctuationThreshold) {
            @$body['MinDataSizeFluctuationThreshold'] = $request->minDataSizeFluctuationThreshold;
        }

        if (null !== $request->minRowCountFluctuationThreshold) {
            @$body['MinRowCountFluctuationThreshold'] = $request->minRowCountFluctuationThreshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRecallManagementTable',
            'version' => '2022-12-13',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/recallmanagementtables/' . Url::percentEncode($RecallManagementTableId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRecallManagementTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a recall management table specified by its ID.
     *
     * @remarks
     * ## Request details
     * - Updates the recall management table specified by `RecallManagementTableId`.
     * - You can enable fluctuation thresholds for the row count or data size and define the specific ranges for these thresholds.
     * - You can add or modify fields in the table, including their names, types, and attributes.
     * - The `InstanceId` parameter is required and identifies the specific instance.
     * - For vector-related fields, you can also specify the vector dimension and metric type.
     * - Note: Optional parameters in the request body selectively update the target table.
     *
     * @param request - UpdateRecallManagementTableRequest
     *
     * @returns UpdateRecallManagementTableResponse
     *
     * @param string                             $RecallManagementTableId
     * @param UpdateRecallManagementTableRequest $request
     *
     * @return UpdateRecallManagementTableResponse
     */
    public function updateRecallManagementTable($RecallManagementTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRecallManagementTableWithOptions($RecallManagementTableId, $request, $headers, $runtime);
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
     * Updates information for a scene, such as its name and description.
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
     * Updates information for a scene, such as its name and description.
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
     * Updates a data table.
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
     * Updates a data table.
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
     * Updates the configuration of a traffic control target, including its control period, conditions, and value.
     *
     * @remarks
     * ## Description
     * - Updates a traffic control target specified by its ID.
     * - `TrafficControlTargetId` is a path parameter that specifies the ID of the traffic control target to update.
     * - The `ItemConditionType` parameter specifies the format of the item condition, which can be either `Array` or `Expression`. Based on your selection, you must provide a value for either the `ItemConditionArray` or `ItemConditionExpress` parameter.
     * - If `NewProductRegulation` is set to `true`, the control rule applies to a new product.
     * - The `StatisPeriod` parameter specifies the statistics period. Valid values are `Daily` and `hourly`.
     * - Ensure that the time interval between `StartTime` and `EndTime` is reasonable and meets your business requirements.
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
     * Updates the configuration of a traffic control target, including its control period, conditions, and value.
     *
     * @remarks
     * ## Description
     * - Updates a traffic control target specified by its ID.
     * - `TrafficControlTargetId` is a path parameter that specifies the ID of the traffic control target to update.
     * - The `ItemConditionType` parameter specifies the format of the item condition, which can be either `Array` or `Expression`. Based on your selection, you must provide a value for either the `ItemConditionArray` or `ItemConditionExpress` parameter.
     * - If `NewProductRegulation` is set to `true`, the control rule applies to a new product.
     * - The `StatisPeriod` parameter specifies the statistics period. Valid values are `Daily` and `hourly`.
     * - Ensure that the time interval between `StartTime` and `EndTime` is reasonable and meets your business requirements.
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
     * Updates the configuration and target of a specified traffic control task.
     *
     * @remarks
     * ## Usage notes
     * - Use this API to update an existing traffic control task.
     * - When `ExecutionTime` is set to `TimeRange`, you must also provide `StartTime` and `EndTime`.
     * - Each element in the `TrafficControlTargets` array is a traffic control target. Ensure each target\\"s time range, condition type, and other information are complete and valid.
     * - If you set `UserConditionType` or `ItemConditionType` to `Expression`, you must specify the corresponding expression field (for example, `UserConditionExpress`).
     * - `ServiceIds` and `EffectiveSceneIds` are optional parameters. If you include them, ensure the ID lists are correctly formatted.
     * - Ensure you complete all required fields to avoid a failed request.
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
     * Updates the configuration and target of a specified traffic control task.
     *
     * @remarks
     * ## Usage notes
     * - Use this API to update an existing traffic control task.
     * - When `ExecutionTime` is set to `TimeRange`, you must also provide `StartTime` and `EndTime`.
     * - Each element in the `TrafficControlTargets` array is a traffic control target. Ensure each target\\"s time range, condition type, and other information are complete and valid.
     * - If you set `UserConditionType` or `ItemConditionType` to `Expression`, you must specify the corresponding expression field (for example, `UserConditionExpress`).
     * - `ServiceIds` and `EffectiveSceneIds` are optional parameters. If you include them, ensure the ID lists are correctly formatted.
     * - Ensure you complete all required fields to avoid a failed request.
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
     * Updates the traffic parameters for a specified traffic control task, including target traffic and actual traffic.
     *
     * @remarks
     * ## Request
     * This API updates the traffic configuration for a specific traffic control task. The configuration includes the traffic control target ID, record time, target traffic, and overall traffic. Ensure that the provided`TrafficControlTaskId` is valid and within your permission scope. Additionally, each object in the`Traffics` array must contain the required fields.
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
     * Updates the traffic parameters for a specified traffic control task, including target traffic and actual traffic.
     *
     * @remarks
     * ## Request
     * This API updates the traffic configuration for a specific traffic control task. The configuration includes the traffic control target ID, record time, target traffic, and overall traffic. Ensure that the provided`TrafficControlTaskId` is valid and within your permission scope. Additionally, each object in the`Traffics` array must contain the required fields.
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
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->dataType) {
            @$body['DataType'] = $request->dataType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
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

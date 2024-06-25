<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\BackflowFeatureConsistencyCheckJobDataResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckInstanceResourcesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckInstanceResourcesResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateABMetricResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCalculationJobsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCalculationJobsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateCrowdResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReleaseTrafficControlTaskResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\SplitTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTargetResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\StartTrafficControlTaskResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 特征一致性检查数据回流。
     *  *
     * @param BackflowFeatureConsistencyCheckJobDataRequest $request BackflowFeatureConsistencyCheckJobDataRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return BackflowFeatureConsistencyCheckJobDataResponse BackflowFeatureConsistencyCheckJobDataResponse
     */
    public function backflowFeatureConsistencyCheckJobDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->featureConsistencyCheckJobConfigId)) {
            $body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemFeatures)) {
            $body['ItemFeatures'] = $request->itemFeatures;
        }
        if (!Utils::isUnset($request->logItemId)) {
            $body['LogItemId'] = $request->logItemId;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $body['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->logRequestTime)) {
            $body['LogRequestTime'] = $request->logRequestTime;
        }
        if (!Utils::isUnset($request->logUserId)) {
            $body['LogUserId'] = $request->logUserId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->scores)) {
            $body['Scores'] = $request->scores;
        }
        if (!Utils::isUnset($request->userFeatures)) {
            $body['UserFeatures'] = $request->userFeatures;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BackflowFeatureConsistencyCheckJobData',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/action/backflowdata',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BackflowFeatureConsistencyCheckJobDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 特征一致性检查数据回流。
     *  *
     * @param BackflowFeatureConsistencyCheckJobDataRequest $request BackflowFeatureConsistencyCheckJobDataRequest
     *
     * @return BackflowFeatureConsistencyCheckJobDataResponse BackflowFeatureConsistencyCheckJobDataResponse
     */
    public function backflowFeatureConsistencyCheckJobData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->backflowFeatureConsistencyCheckJobDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 检测实例下配置的资源的连接状态。
     *  *
     * @param string                        $InstanceId
     * @param CheckInstanceResourcesRequest $request    CheckInstanceResourcesRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return CheckInstanceResourcesResponse CheckInstanceResourcesResponse
     */
    public function checkInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckInstanceResources',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/action/checkresources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检测实例下配置的资源的连接状态。
     *  *
     * @param string                        $InstanceId
     * @param CheckInstanceResourcesRequest $request    CheckInstanceResourcesRequest
     *
     * @return CheckInstanceResourcesResponse CheckInstanceResourcesResponse
     */
    public function checkInstanceResources($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 克隆实验。
     *  *
     * @param string                 $ExperimentId
     * @param CloneExperimentRequest $request      CloneExperimentRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return CloneExperimentResponse CloneExperimentResponse
     */
    public function cloneExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 克隆实验。
     *  *
     * @param string                 $ExperimentId
     * @param CloneExperimentRequest $request      CloneExperimentRequest
     *
     * @return CloneExperimentResponse CloneExperimentResponse
     */
    public function cloneExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 克隆实验组，并克隆实验组下的所有实验至新的实验组中。
     *  *
     * @param string                      $ExperimentGroupId
     * @param CloneExperimentGroupRequest $request           CloneExperimentGroupRequest
     * @param string[]                    $headers           map
     * @param RuntimeOptions              $runtime           runtime options for this request RuntimeOptions
     *
     * @return CloneExperimentGroupResponse CloneExperimentGroupResponse
     */
    public function cloneExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->layerId)) {
            $body['LayerId'] = $request->layerId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '/action/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 克隆实验组，并克隆实验组下的所有实验至新的实验组中。
     *  *
     * @param string                      $ExperimentGroupId
     * @param CloneExperimentGroupRequest $request           CloneExperimentGroupRequest
     *
     * @return CloneExperimentGroupResponse CloneExperimentGroupResponse
     */
    public function cloneExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 克隆特征一致性检查配置。
     *  *
     * @param string                                       $SourceFeatureConsistencyCheckJobConfigId
     * @param CloneFeatureConsistencyCheckJobConfigRequest $request                                  CloneFeatureConsistencyCheckJobConfigRequest
     * @param string[]                                     $headers                                  map
     * @param RuntimeOptions                               $runtime                                  runtime options for this request RuntimeOptions
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponse CloneFeatureConsistencyCheckJobConfigResponse
     */
    public function cloneFeatureConsistencyCheckJobConfigWithOptions($SourceFeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneFeatureConsistencyCheckJobConfig',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobconfigs/' . OpenApiUtilClient::getEncodeParam($SourceFeatureConsistencyCheckJobConfigId) . '/action/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 克隆特征一致性检查配置。
     *  *
     * @param string                                       $SourceFeatureConsistencyCheckJobConfigId
     * @param CloneFeatureConsistencyCheckJobConfigRequest $request                                  CloneFeatureConsistencyCheckJobConfigRequest
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponse CloneFeatureConsistencyCheckJobConfigResponse
     */
    public function cloneFeatureConsistencyCheckJobConfig($SourceFeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneFeatureConsistencyCheckJobConfigWithOptions($SourceFeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * @summary 克隆实验室。
     *  *
     * @param string                 $LaboratoryId
     * @param CloneLaboratoryRequest $request      CloneLaboratoryRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return CloneLaboratoryResponse CloneLaboratoryResponse
     */
    public function cloneLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloneExperimentGroup)) {
            $body['CloneExperimentGroup'] = $request->cloneExperimentGroup;
        }
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '/action/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 克隆实验室。
     *  *
     * @param string                 $LaboratoryId
     * @param CloneLaboratoryRequest $request      CloneLaboratoryRequest
     *
     * @return CloneLaboratoryResponse CloneLaboratoryResponse
     */
    public function cloneLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 克隆流量调控任务
     *  *
     * @param string                         $TrafficControlTaskId
     * @param CloneTrafficControlTaskRequest $request              CloneTrafficControlTaskRequest
     * @param string[]                       $headers              map
     * @param RuntimeOptions                 $runtime              runtime options for this request RuntimeOptions
     *
     * @return CloneTrafficControlTaskResponse CloneTrafficControlTaskResponse
     */
    public function cloneTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 克隆流量调控任务
     *  *
     * @param string                         $TrafficControlTaskId
     * @param CloneTrafficControlTaskRequest $request              CloneTrafficControlTaskRequest
     *
     * @return CloneTrafficControlTaskResponse CloneTrafficControlTaskResponse
     */
    public function cloneTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建AB test实验指标
     *  *
     * @param CreateABMetricRequest $request CreateABMetricRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateABMetricResponse CreateABMetricResponse
     */
    public function createABMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->leftMetricId)) {
            $body['LeftMetricId'] = $request->leftMetricId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->realtime)) {
            $body['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->resultResourceId)) {
            $body['ResultResourceId'] = $request->resultResourceId;
        }
        if (!Utils::isUnset($request->rightMetricId)) {
            $body['RightMetricId'] = $request->rightMetricId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->statisticsCycle)) {
            $body['StatisticsCycle'] = $request->statisticsCycle;
        }
        if (!Utils::isUnset($request->tableMetaId)) {
            $body['TableMetaId'] = $request->tableMetaId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateABMetric',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetrics',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建AB test实验指标
     *  *
     * @param CreateABMetricRequest $request CreateABMetricRequest
     *
     * @return CreateABMetricResponse CreateABMetricResponse
     */
    public function createABMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建指标组
     *  *
     * @param CreateABMetricGroupRequest $request CreateABMetricGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateABMetricGroupResponse CreateABMetricGroupResponse
     */
    public function createABMetricGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ABMetricIds)) {
            $body['ABMetricIds'] = $request->ABMetricIds;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->realtime)) {
            $body['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateABMetricGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建指标组
     *  *
     * @param CreateABMetricGroupRequest $request CreateABMetricGroupRequest
     *
     * @return CreateABMetricGroupResponse CreateABMetricGroupResponse
     */
    public function createABMetricGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABMetricGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建AB指标的计算任务。
     *  *
     * @param CreateCalculationJobsRequest $request CreateCalculationJobsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCalculationJobsResponse CreateCalculationJobsResponse
     */
    public function createCalculationJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ABMetricIds)) {
            $body['ABMetricIds'] = $request->ABMetricIds;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCalculationJobs',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/batch/calculationjobs/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCalculationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建AB指标的计算任务。
     *  *
     * @param CreateCalculationJobsRequest $request CreateCalculationJobsRequest
     *
     * @return CreateCalculationJobsResponse CreateCalculationJobsResponse
     */
    public function createCalculationJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCalculationJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建人群。
     *  *
     * @param CreateCrowdRequest $request CreateCrowdRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCrowdResponse CreateCrowdResponse
     */
    public function createCrowdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建人群。
     *  *
     * @param CreateCrowdRequest $request CreateCrowdRequest
     *
     * @return CreateCrowdResponse CreateCrowdResponse
     */
    public function createCrowd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCrowdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验。
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->experimentGroupId)) {
            $body['ExperimentGroupId'] = $request->experimentGroupId;
        }
        if (!Utils::isUnset($request->flowPercent)) {
            $body['FlowPercent'] = $request->flowPercent;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验。
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验组。
     *  *
     * @param CreateExperimentGroupRequest $request CreateExperimentGroupRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentGroupResponse CreateExperimentGroupResponse
     */
    public function createExperimentGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->crowdId)) {
            $body['CrowdId'] = $request->crowdId;
        }
        if (!Utils::isUnset($request->crowdTargetType)) {
            $body['CrowdTargetType'] = $request->crowdTargetType;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->distributionTimeDuration)) {
            $body['DistributionTimeDuration'] = $request->distributionTimeDuration;
        }
        if (!Utils::isUnset($request->distributionType)) {
            $body['DistributionType'] = $request->distributionType;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->layerId)) {
            $body['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->needAA)) {
            $body['NeedAA'] = $request->needAA;
        }
        if (!Utils::isUnset($request->randomFlow)) {
            $body['RandomFlow'] = $request->randomFlow;
        }
        if (!Utils::isUnset($request->reservedBuckets)) {
            $body['ReservedBuckets'] = $request->reservedBuckets;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验组。
     *  *
     * @param CreateExperimentGroupRequest $request CreateExperimentGroupRequest
     *
     * @return CreateExperimentGroupResponse CreateExperimentGroupResponse
     */
    public function createExperimentGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建特征一致性检查任务。
     *  *
     * @param CreateFeatureConsistencyCheckJobRequest $request CreateFeatureConsistencyCheckJobRequest
     * @param string[]                                $headers map
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFeatureConsistencyCheckJobResponse CreateFeatureConsistencyCheckJobResponse
     */
    public function createFeatureConsistencyCheckJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->featureConsistencyCheckJobConfigId)) {
            $body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->samplingDuration)) {
            $body['SamplingDuration'] = $request->samplingDuration;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFeatureConsistencyCheckJob',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建特征一致性检查任务。
     *  *
     * @param CreateFeatureConsistencyCheckJobRequest $request CreateFeatureConsistencyCheckJobRequest
     *
     * @return CreateFeatureConsistencyCheckJobResponse CreateFeatureConsistencyCheckJobResponse
     */
    public function createFeatureConsistencyCheckJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureConsistencyCheckJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建特征一致性检查配置。
     *  *
     * @param CreateFeatureConsistencyCheckJobConfigRequest $request CreateFeatureConsistencyCheckJobConfigRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponse CreateFeatureConsistencyCheckJobConfigResponse
     */
    public function createFeatureConsistencyCheckJobConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->compareFeature)) {
            $body['CompareFeature'] = $request->compareFeature;
        }
        if (!Utils::isUnset($request->easServiceName)) {
            $body['EasServiceName'] = $request->easServiceName;
        }
        if (!Utils::isUnset($request->easyRecPackagePath)) {
            $body['EasyRecPackagePath'] = $request->easyRecPackagePath;
        }
        if (!Utils::isUnset($request->easyRecVersion)) {
            $body['EasyRecVersion'] = $request->easyRecVersion;
        }
        if (!Utils::isUnset($request->featureDisplayExclude)) {
            $body['FeatureDisplayExclude'] = $request->featureDisplayExclude;
        }
        if (!Utils::isUnset($request->featureLandingResourceId)) {
            $body['FeatureLandingResourceId'] = $request->featureLandingResourceId;
        }
        if (!Utils::isUnset($request->featurePriority)) {
            $body['FeaturePriority'] = $request->featurePriority;
        }
        if (!Utils::isUnset($request->featureStoreItemId)) {
            $body['FeatureStoreItemId'] = $request->featureStoreItemId;
        }
        if (!Utils::isUnset($request->featureStoreModelId)) {
            $body['FeatureStoreModelId'] = $request->featureStoreModelId;
        }
        if (!Utils::isUnset($request->featureStoreProjectId)) {
            $body['FeatureStoreProjectId'] = $request->featureStoreProjectId;
        }
        if (!Utils::isUnset($request->featureStoreProjectName)) {
            $body['FeatureStoreProjectName'] = $request->featureStoreProjectName;
        }
        if (!Utils::isUnset($request->featureStoreSeqFeatureView)) {
            $body['FeatureStoreSeqFeatureView'] = $request->featureStoreSeqFeatureView;
        }
        if (!Utils::isUnset($request->featureStoreUserId)) {
            $body['FeatureStoreUserId'] = $request->featureStoreUserId;
        }
        if (!Utils::isUnset($request->fgJarVersion)) {
            $body['FgJarVersion'] = $request->fgJarVersion;
        }
        if (!Utils::isUnset($request->fgJsonFileName)) {
            $body['FgJsonFileName'] = $request->fgJsonFileName;
        }
        if (!Utils::isUnset($request->generateZip)) {
            $body['GenerateZip'] = $request->generateZip;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemIdField)) {
            $body['ItemIdField'] = $request->itemIdField;
        }
        if (!Utils::isUnset($request->itemTable)) {
            $body['ItemTable'] = $request->itemTable;
        }
        if (!Utils::isUnset($request->itemTablePartitionField)) {
            $body['ItemTablePartitionField'] = $request->itemTablePartitionField;
        }
        if (!Utils::isUnset($request->itemTablePartitionFieldFormat)) {
            $body['ItemTablePartitionFieldFormat'] = $request->itemTablePartitionFieldFormat;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossResourceId)) {
            $body['OssResourceId'] = $request->ossResourceId;
        }
        if (!Utils::isUnset($request->sampleRate)) {
            $body['SampleRate'] = $request->sampleRate;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->useFeatureStore)) {
            $body['UseFeatureStore'] = $request->useFeatureStore;
        }
        if (!Utils::isUnset($request->userIdField)) {
            $body['UserIdField'] = $request->userIdField;
        }
        if (!Utils::isUnset($request->userTable)) {
            $body['UserTable'] = $request->userTable;
        }
        if (!Utils::isUnset($request->userTablePartitionField)) {
            $body['UserTablePartitionField'] = $request->userTablePartitionField;
        }
        if (!Utils::isUnset($request->userTablePartitionFieldFormat)) {
            $body['UserTablePartitionFieldFormat'] = $request->userTablePartitionFieldFormat;
        }
        if (!Utils::isUnset($request->workflowName)) {
            $body['WorkflowName'] = $request->workflowName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFeatureConsistencyCheckJobConfig',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobconfigs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建特征一致性检查配置。
     *  *
     * @param CreateFeatureConsistencyCheckJobConfigRequest $request CreateFeatureConsistencyCheckJobConfigRequest
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponse CreateFeatureConsistencyCheckJobConfigResponse
     */
    public function createFeatureConsistencyCheckJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureConsistencyCheckJobConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 为指定实例配置创建新的配置资源
     *  *
     * @param string                        $InstanceId
     * @param CreateInstanceResourceRequest $request    CreateInstanceResourceRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResourceResponse CreateInstanceResourceResponse
     */
    public function createInstanceResourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->group)) {
            $body['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceResource',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为指定实例配置创建新的配置资源
     *  *
     * @param string                        $InstanceId
     * @param CreateInstanceResourceRequest $request    CreateInstanceResourceRequest
     *
     * @return CreateInstanceResourceResponse CreateInstanceResourceResponse
     */
    public function createInstanceResource($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceResourceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建实验室
     *  *
     * @param CreateLaboratoryRequest $request CreateLaboratoryRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLaboratoryResponse CreateLaboratoryResponse
     */
    public function createLaboratoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketCount)) {
            $body['BucketCount'] = $request->bucketCount;
        }
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->buckets)) {
            $body['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验室
     *  *
     * @param CreateLaboratoryRequest $request CreateLaboratoryRequest
     *
     * @return CreateLaboratoryResponse CreateLaboratoryResponse
     */
    public function createLaboratory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLaboratoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建层。
     *  *
     * @param CreateLayerRequest $request CreateLayerRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLayerResponse CreateLayerResponse
     */
    public function createLayerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->laboratoryId)) {
            $body['LaboratoryId'] = $request->laboratoryId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLayer',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建层。
     *  *
     * @param CreateLayerRequest $request CreateLayerRequest
     *
     * @return CreateLayerResponse CreateLayerResponse
     */
    public function createLayer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建参数。
     *  *
     * @param CreateParamRequest $request CreateParamRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParamResponse CreateParamResponse
     */
    public function createParamWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateParam',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/params',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建参数。
     *  *
     * @param CreateParamRequest $request CreateParamRequest
     *
     * @return CreateParamResponse CreateParamResponse
     */
    public function createParam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createParamWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建资源规则
     *  *
     * @param CreateResourceRuleRequest $request CreateResourceRuleRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceRuleResponse CreateResourceRuleResponse
     */
    public function createResourceRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricOperationType)) {
            $body['MetricOperationType'] = $request->metricOperationType;
        }
        if (!Utils::isUnset($request->metricPullInfo)) {
            $body['MetricPullInfo'] = $request->metricPullInfo;
        }
        if (!Utils::isUnset($request->metricPullPeriod)) {
            $body['MetricPullPeriod'] = $request->metricPullPeriod;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ruleComputingDefinition)) {
            $body['RuleComputingDefinition'] = $request->ruleComputingDefinition;
        }
        if (!Utils::isUnset($request->ruleItems)) {
            $body['RuleItems'] = $request->ruleItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源规则
     *  *
     * @param CreateResourceRuleRequest $request CreateResourceRuleRequest
     *
     * @return CreateResourceRuleResponse CreateResourceRuleResponse
     */
    public function createResourceRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param CreateResourceRuleItemRequest $request        CreateResourceRuleItemRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateResourceRuleItemResponse CreateResourceRuleItemResponse
     */
    public function createResourceRuleItemWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxValue)) {
            $body['MaxValue'] = $request->maxValue;
        }
        if (!Utils::isUnset($request->minValue)) {
            $body['MinValue'] = $request->minValue;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceRuleItem',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '/items',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param CreateResourceRuleItemRequest $request        CreateResourceRuleItemRequest
     *
     * @return CreateResourceRuleItemResponse CreateResourceRuleItemResponse
     */
    public function createResourceRuleItem($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceRuleItemWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建场景
     *  *
     * @param CreateSceneRequest $request CreateSceneRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSceneResponse CreateSceneResponse
     */
    public function createSceneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flows)) {
            $body['Flows'] = $request->flows;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScene',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/scenes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建场景
     *  *
     * @param CreateSceneRequest $request CreateSceneRequest
     *
     * @return CreateSceneResponse CreateSceneResponse
     */
    public function createScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定人群下创建子人群。
     *  *
     * @param string                $CrowdId
     * @param CreateSubCrowdRequest $request CreateSubCrowdRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubCrowdResponse CreateSubCrowdResponse
     */
    public function createSubCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '/subcrowds',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定人群下创建子人群。
     *  *
     * @param string                $CrowdId
     * @param CreateSubCrowdRequest $request CreateSubCrowdRequest
     *
     * @return CreateSubCrowdResponse CreateSubCrowdResponse
     */
    public function createSubCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSubCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建数据表。
     *  *
     * @param CreateTableMetaRequest $request CreateTableMetaRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTableMetaResponse CreateTableMetaResponse
     */
    public function createTableMetaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->module)) {
            $body['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTableMeta',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据表。
     *  *
     * @param CreateTableMetaRequest $request CreateTableMetaRequest
     *
     * @return CreateTableMetaResponse CreateTableMetaResponse
     */
    public function createTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流量调控目标
     *  *
     * @param CreateTrafficControlTargetRequest $request CreateTrafficControlTargetRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrafficControlTargetResponse CreateTrafficControlTargetResponse
     */
    public function createTrafficControlTargetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->event)) {
            $body['Event'] = $request->event;
        }
        if (!Utils::isUnset($request->itemConditionArray)) {
            $body['ItemConditionArray'] = $request->itemConditionArray;
        }
        if (!Utils::isUnset($request->itemConditionExpress)) {
            $body['ItemConditionExpress'] = $request->itemConditionExpress;
        }
        if (!Utils::isUnset($request->itemConditionType)) {
            $body['ItemConditionType'] = $request->itemConditionType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newProductRegulation)) {
            $body['NewProductRegulation'] = $request->newProductRegulation;
        }
        if (!Utils::isUnset($request->recallName)) {
            $body['RecallName'] = $request->recallName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statisPeriod)) {
            $body['StatisPeriod'] = $request->statisPeriod;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->toleranceValue)) {
            $body['ToleranceValue'] = $request->toleranceValue;
        }
        if (!Utils::isUnset($request->trafficControlTaskId)) {
            $body['TrafficControlTaskId'] = $request->trafficControlTaskId;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流量调控目标
     *  *
     * @param CreateTrafficControlTargetRequest $request CreateTrafficControlTargetRequest
     *
     * @return CreateTrafficControlTargetResponse CreateTrafficControlTargetResponse
     */
    public function createTrafficControlTarget($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrafficControlTargetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流量调控任务
     *  *
     * @param CreateTrafficControlTaskRequest $request CreateTrafficControlTaskRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrafficControlTaskResponse CreateTrafficControlTaskResponse
     */
    public function createTrafficControlTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->behaviorTableMetaId)) {
            $body['BehaviorTableMetaId'] = $request->behaviorTableMetaId;
        }
        if (!Utils::isUnset($request->controlGranularity)) {
            $body['ControlGranularity'] = $request->controlGranularity;
        }
        if (!Utils::isUnset($request->controlLogic)) {
            $body['ControlLogic'] = $request->controlLogic;
        }
        if (!Utils::isUnset($request->controlType)) {
            $body['ControlType'] = $request->controlType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executionTime)) {
            $body['ExecutionTime'] = $request->executionTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemConditionArray)) {
            $body['ItemConditionArray'] = $request->itemConditionArray;
        }
        if (!Utils::isUnset($request->itemConditionExpress)) {
            $body['ItemConditionExpress'] = $request->itemConditionExpress;
        }
        if (!Utils::isUnset($request->itemConditionType)) {
            $body['ItemConditionType'] = $request->itemConditionType;
        }
        if (!Utils::isUnset($request->itemTableMetaId)) {
            $body['ItemTableMetaId'] = $request->itemTableMetaId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statisBehaviorConditionArray)) {
            $body['StatisBehaviorConditionArray'] = $request->statisBehaviorConditionArray;
        }
        if (!Utils::isUnset($request->statisBehaviorConditionExpress)) {
            $body['StatisBehaviorConditionExpress'] = $request->statisBehaviorConditionExpress;
        }
        if (!Utils::isUnset($request->statisBehaviorConditionType)) {
            $body['StatisBehaviorConditionType'] = $request->statisBehaviorConditionType;
        }
        if (!Utils::isUnset($request->trafficControlTargets)) {
            $body['TrafficControlTargets'] = $request->trafficControlTargets;
        }
        if (!Utils::isUnset($request->userConditionArray)) {
            $body['UserConditionArray'] = $request->userConditionArray;
        }
        if (!Utils::isUnset($request->userConditionExpress)) {
            $body['UserConditionExpress'] = $request->userConditionExpress;
        }
        if (!Utils::isUnset($request->userConditionType)) {
            $body['UserConditionType'] = $request->userConditionType;
        }
        if (!Utils::isUnset($request->userTableMetaId)) {
            $body['UserTableMetaId'] = $request->userTableMetaId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流量调控任务
     *  *
     * @param CreateTrafficControlTaskRequest $request CreateTrafficControlTaskRequest
     *
     * @return CreateTrafficControlTaskResponse CreateTrafficControlTaskResponse
     */
    public function createTrafficControlTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrafficControlTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 对指定资源规则中的计算公式进行调试
     *  *
     * @param string                   $ResourceRuleId
     * @param DebugResourceRuleRequest $tmpReq         DebugResourceRuleRequest
     * @param string[]                 $headers        map
     * @param RuntimeOptions           $runtime        runtime options for this request RuntimeOptions
     *
     * @return DebugResourceRuleResponse DebugResourceRuleResponse
     */
    public function debugResourceRuleWithOptions($ResourceRuleId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DebugResourceRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->metricInfo)) {
            $request->metricInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->metricInfo, 'MetricInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricInfoShrink)) {
            $query['MetricInfo'] = $request->metricInfoShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DebugResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '/action/debug',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DebugResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对指定资源规则中的计算公式进行调试
     *  *
     * @param string                   $ResourceRuleId
     * @param DebugResourceRuleRequest $request        DebugResourceRuleRequest
     *
     * @return DebugResourceRuleResponse DebugResourceRuleResponse
     */
    public function debugResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->debugResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定AB实验指标。
     *  *
     * @param string                $ABMetricId
     * @param DeleteABMetricRequest $request    DeleteABMetricRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteABMetricResponse DeleteABMetricResponse
     */
    public function deleteABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteABMetric',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetrics/' . OpenApiUtilClient::getEncodeParam($ABMetricId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定AB实验指标。
     *  *
     * @param string                $ABMetricId
     * @param DeleteABMetricRequest $request    DeleteABMetricRequest
     *
     * @return DeleteABMetricResponse DeleteABMetricResponse
     */
    public function deleteABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除AB实验指标组。
     *  *
     * @param string                     $ABMetricGroupId
     * @param DeleteABMetricGroupRequest $request         DeleteABMetricGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteABMetricGroupResponse DeleteABMetricGroupResponse
     */
    public function deleteABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteABMetricGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups/' . OpenApiUtilClient::getEncodeParam($ABMetricGroupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除AB实验指标组。
     *  *
     * @param string                     $ABMetricGroupId
     * @param DeleteABMetricGroupRequest $request         DeleteABMetricGroupRequest
     *
     * @return DeleteABMetricGroupResponse DeleteABMetricGroupResponse
     */
    public function deleteABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定人群。
     *  *
     * @param string             $CrowdId
     * @param DeleteCrowdRequest $request DeleteCrowdRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCrowdResponse DeleteCrowdResponse
     */
    public function deleteCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定人群。
     *  *
     * @param string             $CrowdId
     * @param DeleteCrowdRequest $request DeleteCrowdRequest
     *
     * @return DeleteCrowdResponse DeleteCrowdResponse
     */
    public function deleteCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除实验。
     *  *
     * @param string                  $ExperimentId
     * @param DeleteExperimentRequest $request      DeleteExperimentRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实验。
     *  *
     * @param string                  $ExperimentId
     * @param DeleteExperimentRequest $request      DeleteExperimentRequest
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param DeleteExperimentGroupRequest $request           DeleteExperimentGroupRequest
     * @param string[]                     $headers           map
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentGroupResponse DeleteExperimentGroupResponse
     */
    public function deleteExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param DeleteExperimentGroupRequest $request           DeleteExperimentGroupRequest
     *
     * @return DeleteExperimentGroupResponse DeleteExperimentGroupResponse
     */
    public function deleteExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定实例下的指定配置资源。
     *  *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResourceResponse DeleteInstanceResourceResponse
     */
    public function deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceResource',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定实例下的指定配置资源。
     *  *
     * @param string $InstanceId
     * @param string $ResourceId
     *
     * @return DeleteInstanceResourceResponse DeleteInstanceResourceResponse
     */
    public function deleteInstanceResource($InstanceId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary 删除实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param DeleteLaboratoryRequest $request      DeleteLaboratoryRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteLaboratoryResponse DeleteLaboratoryResponse
     */
    public function deleteLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param DeleteLaboratoryRequest $request      DeleteLaboratoryRequest
     *
     * @return DeleteLaboratoryResponse DeleteLaboratoryResponse
     */
    public function deleteLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除层。
     *  *
     * @param string             $LayerId
     * @param DeleteLayerRequest $request DeleteLayerRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLayerResponse DeleteLayerResponse
     */
    public function deleteLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLayer',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除层。
     *  *
     * @param string             $LayerId
     * @param DeleteLayerRequest $request DeleteLayerRequest
     *
     * @return DeleteLayerResponse DeleteLayerResponse
     */
    public function deleteLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定参数。
     *  *
     * @param string             $ParamId
     * @param DeleteParamRequest $request DeleteParamRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParamResponse DeleteParamResponse
     */
    public function deleteParamWithOptions($ParamId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteParam',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/params/' . OpenApiUtilClient::getEncodeParam($ParamId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定参数。
     *  *
     * @param string             $ParamId
     * @param DeleteParamRequest $request DeleteParamRequest
     *
     * @return DeleteParamResponse DeleteParamResponse
     */
    public function deleteParam($ParamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteParamWithOptions($ParamId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除资源规则
     *  *
     * @param string                    $ResourceRuleId
     * @param DeleteResourceRuleRequest $request        DeleteResourceRuleRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceRuleResponse DeleteResourceRuleResponse
     */
    public function deleteResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源规则
     *  *
     * @param string                    $ResourceRuleId
     * @param DeleteResourceRuleRequest $request        DeleteResourceRuleRequest
     *
     * @return DeleteResourceRuleResponse DeleteResourceRuleResponse
     */
    public function deleteResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param DeleteResourceRuleItemRequest $request            DeleteResourceRuleItemRequest
     * @param string[]                      $headers            map
     * @param RuntimeOptions                $runtime            runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceRuleItemResponse DeleteResourceRuleItemResponse
     */
    public function deleteResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceRuleItem',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '/items/' . OpenApiUtilClient::getEncodeParam($ResourceRuleItemId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param DeleteResourceRuleItemRequest $request            DeleteResourceRuleItemRequest
     *
     * @return DeleteResourceRuleItemResponse DeleteResourceRuleItemResponse
     */
    public function deleteResourceRuleItem($ResourceRuleId, $ResourceRuleItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除场景
     *  *
     * @param string             $SceneId
     * @param DeleteSceneRequest $request DeleteSceneRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSceneResponse DeleteSceneResponse
     */
    public function deleteSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScene',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/scenes/' . OpenApiUtilClient::getEncodeParam($SceneId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除场景
     *  *
     * @param string             $SceneId
     * @param DeleteSceneRequest $request DeleteSceneRequest
     *
     * @return DeleteSceneResponse DeleteSceneResponse
     */
    public function deleteScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定人群下的指定子人群。
     *  *
     * @param string                $CrowdId
     * @param string                $SubCrowdId
     * @param DeleteSubCrowdRequest $request    DeleteSubCrowdRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteSubCrowdResponse DeleteSubCrowdResponse
     */
    public function deleteSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '/subcrowds/' . OpenApiUtilClient::getEncodeParam($SubCrowdId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定人群下的指定子人群。
     *  *
     * @param string                $CrowdId
     * @param string                $SubCrowdId
     * @param DeleteSubCrowdRequest $request    DeleteSubCrowdRequest
     *
     * @return DeleteSubCrowdResponse DeleteSubCrowdResponse
     */
    public function deleteSubCrowd($CrowdId, $SubCrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除数据表。
     *  *
     * @param string                 $TableMetaId
     * @param DeleteTableMetaRequest $request     DeleteTableMetaRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteTableMetaResponse DeleteTableMetaResponse
     */
    public function deleteTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTableMeta',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据表。
     *  *
     * @param string                 $TableMetaId
     * @param DeleteTableMetaRequest $request     DeleteTableMetaRequest
     *
     * @return DeleteTableMetaResponse DeleteTableMetaResponse
     */
    public function deleteTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流量调控目标
     *  *
     * @param string                            $TrafficControlTargetId
     * @param DeleteTrafficControlTargetRequest $request                DeleteTrafficControlTargetRequest
     * @param string[]                          $headers                map
     * @param RuntimeOptions                    $runtime                runtime options for this request RuntimeOptions
     *
     * @return DeleteTrafficControlTargetResponse DeleteTrafficControlTargetResponse
     */
    public function deleteTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流量调控目标
     *  *
     * @param string                            $TrafficControlTargetId
     * @param DeleteTrafficControlTargetRequest $request                DeleteTrafficControlTargetRequest
     *
     * @return DeleteTrafficControlTargetResponse DeleteTrafficControlTargetResponse
     */
    public function deleteTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除指定的流量调控任务
     *  *
     * @param string                          $TrafficControlTaskId
     * @param DeleteTrafficControlTaskRequest $request              DeleteTrafficControlTaskRequest
     * @param string[]                        $headers              map
     * @param RuntimeOptions                  $runtime              runtime options for this request RuntimeOptions
     *
     * @return DeleteTrafficControlTaskResponse DeleteTrafficControlTaskResponse
     */
    public function deleteTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的流量调控任务
     *  *
     * @param string                          $TrafficControlTaskId
     * @param DeleteTrafficControlTaskRequest $request              DeleteTrafficControlTaskRequest
     *
     * @return DeleteTrafficControlTaskResponse DeleteTrafficControlTaskResponse
     */
    public function deleteTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 产生流量调控的相关代码
     *  *
     * @param string                                $TrafficControlTaskId
     * @param GenerateTrafficControlTaskCodeRequest $request              GenerateTrafficControlTaskCodeRequest
     * @param string[]                              $headers              map
     * @param RuntimeOptions                        $runtime              runtime options for this request RuntimeOptions
     *
     * @return GenerateTrafficControlTaskCodeResponse GenerateTrafficControlTaskCodeResponse
     */
    public function generateTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateTrafficControlTaskCode',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/generatecode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateTrafficControlTaskCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 产生流量调控的相关代码
     *  *
     * @param string                                $TrafficControlTaskId
     * @param GenerateTrafficControlTaskCodeRequest $request              GenerateTrafficControlTaskCodeRequest
     *
     * @return GenerateTrafficControlTaskCodeResponse GenerateTrafficControlTaskCodeResponse
     */
    public function generateTrafficControlTaskCode($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTrafficControlTaskCodeWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 产生流量调控的相关召回配置
     *  *
     * @param string                                  $TrafficControlTaskId
     * @param GenerateTrafficControlTaskConfigRequest $request              GenerateTrafficControlTaskConfigRequest
     * @param string[]                                $headers              map
     * @param RuntimeOptions                          $runtime              runtime options for this request RuntimeOptions
     *
     * @return GenerateTrafficControlTaskConfigResponse GenerateTrafficControlTaskConfigResponse
     */
    public function generateTrafficControlTaskConfigWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateTrafficControlTaskConfig',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/generateconfig',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateTrafficControlTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 产生流量调控的相关召回配置
     *  *
     * @param string                                  $TrafficControlTaskId
     * @param GenerateTrafficControlTaskConfigRequest $request              GenerateTrafficControlTaskConfigRequest
     *
     * @return GenerateTrafficControlTaskConfigResponse GenerateTrafficControlTaskConfigResponse
     */
    public function generateTrafficControlTaskConfig($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTrafficControlTaskConfigWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取AB Test实验指标详细信息。
     *  *
     * @param string             $ABMetricId
     * @param GetABMetricRequest $request    GetABMetricRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetABMetricResponse GetABMetricResponse
     */
    public function getABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetABMetric',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetrics/' . OpenApiUtilClient::getEncodeParam($ABMetricId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取AB Test实验指标详细信息。
     *  *
     * @param string             $ABMetricId
     * @param GetABMetricRequest $request    GetABMetricRequest
     *
     * @return GetABMetricResponse GetABMetricResponse
     */
    public function getABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取AB实验指标组详细信息。
     *  *
     * @param string                  $ABMetricGroupId
     * @param GetABMetricGroupRequest $request         GetABMetricGroupRequest
     * @param string[]                $headers         map
     * @param RuntimeOptions          $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetABMetricGroupResponse GetABMetricGroupResponse
     */
    public function getABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetABMetricGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups/' . OpenApiUtilClient::getEncodeParam($ABMetricGroupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取AB实验指标组详细信息。
     *  *
     * @param string                  $ABMetricGroupId
     * @param GetABMetricGroupRequest $request         GetABMetricGroupRequest
     *
     * @return GetABMetricGroupResponse GetABMetricGroupResponse
     */
    public function getABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定计算任务详细信息。
     *  *
     * @param string                   $CalculationJobId
     * @param GetCalculationJobRequest $request          GetCalculationJobRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetCalculationJobResponse GetCalculationJobResponse
     */
    public function getCalculationJobWithOptions($CalculationJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCalculationJob',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/calculationjobs/' . OpenApiUtilClient::getEncodeParam($CalculationJobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCalculationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定计算任务详细信息。
     *  *
     * @param string                   $CalculationJobId
     * @param GetCalculationJobRequest $request          GetCalculationJobRequest
     *
     * @return GetCalculationJobResponse GetCalculationJobResponse
     */
    public function getCalculationJob($CalculationJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCalculationJobWithOptions($CalculationJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取实验详细信息。
     *  *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request      GetExperimentRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验详细信息。
     *  *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request      GetExperimentRequest
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定实验组详细信息。
     *  *
     * @param string                    $ExperimentGroupId
     * @param GetExperimentGroupRequest $request           GetExperimentGroupRequest
     * @param string[]                  $headers           map
     * @param RuntimeOptions            $runtime           runtime options for this request RuntimeOptions
     *
     * @return GetExperimentGroupResponse GetExperimentGroupResponse
     */
    public function getExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定实验组详细信息。
     *  *
     * @param string                    $ExperimentGroupId
     * @param GetExperimentGroupRequest $request           GetExperimentGroupRequest
     *
     * @return GetExperimentGroupResponse GetExperimentGroupResponse
     */
    public function getExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检查任务详细信息。
     *  *
     * @param string                               $FeatureConsistencyCheckJobId
     * @param GetFeatureConsistencyCheckJobRequest $request                      GetFeatureConsistencyCheckJobRequest
     * @param string[]                             $headers                      map
     * @param RuntimeOptions                       $runtime                      runtime options for this request RuntimeOptions
     *
     * @return GetFeatureConsistencyCheckJobResponse GetFeatureConsistencyCheckJobResponse
     */
    public function getFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFeatureConsistencyCheckJob',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检查任务详细信息。
     *  *
     * @param string                               $FeatureConsistencyCheckJobId
     * @param GetFeatureConsistencyCheckJobRequest $request                      GetFeatureConsistencyCheckJobRequest
     *
     * @return GetFeatureConsistencyCheckJobResponse GetFeatureConsistencyCheckJobResponse
     */
    public function getFeatureConsistencyCheckJob($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检测配置详情。
     *  *
     * @param string                                     $FeatureConsistencyCheckJobConfigId
     * @param GetFeatureConsistencyCheckJobConfigRequest $request                            GetFeatureConsistencyCheckJobConfigRequest
     * @param string[]                                   $headers                            map
     * @param RuntimeOptions                             $runtime                            runtime options for this request RuntimeOptions
     *
     * @return GetFeatureConsistencyCheckJobConfigResponse GetFeatureConsistencyCheckJobConfigResponse
     */
    public function getFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFeatureConsistencyCheckJobConfig',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobconfigs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobConfigId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检测配置详情。
     *  *
     * @param string                                     $FeatureConsistencyCheckJobConfigId
     * @param GetFeatureConsistencyCheckJobConfigRequest $request                            GetFeatureConsistencyCheckJobConfigRequest
     *
     * @return GetFeatureConsistencyCheckJobConfigResponse GetFeatureConsistencyCheckJobConfigResponse
     */
    public function getFeatureConsistencyCheckJobConfig($FeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定推荐全链路深度定制开发平台实例信息。
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定推荐全链路深度定制开发平台实例信息。
     *  *
     * @param string $InstanceId
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取指定实例下指定资源的详细信息。
     *  *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResourceResponse GetInstanceResourceResponse
     */
    public function getInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceResource',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定实例下指定资源的详细信息。
     *  *
     * @param string $InstanceId
     * @param string $ResourceId
     *
     * @return GetInstanceResourceResponse GetInstanceResourceResponse
     */
    public function getInstanceResource($InstanceId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceWithOptions($InstanceId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary 获取数据源下指定表的详细信息。
     *  *
     * @param string         $InstanceId
     * @param string         $ResourceId
     * @param string         $TableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResourceTableResponse GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceResourceTable',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($TableName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResourceTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据源下指定表的详细信息。
     *  *
     * @param string $InstanceId
     * @param string $ResourceId
     * @param string $TableName
     *
     * @return GetInstanceResourceTableResponse GetInstanceResourceTableResponse
     */
    public function getInstanceResourceTable($InstanceId, $ResourceId, $TableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceResourceTableWithOptions($InstanceId, $ResourceId, $TableName, $headers, $runtime);
    }

    /**
     * @summary 获取实验室详细信息。
     *  *
     * @param string               $LaboratoryId
     * @param GetLaboratoryRequest $request      GetLaboratoryRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetLaboratoryResponse GetLaboratoryResponse
     */
    public function getLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验室详细信息。
     *  *
     * @param string               $LaboratoryId
     * @param GetLaboratoryRequest $request      GetLaboratoryRequest
     *
     * @return GetLaboratoryResponse GetLaboratoryResponse
     */
    public function getLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取层详细信息。
     *  *
     * @param string          $LayerId
     * @param GetLayerRequest $request GetLayerRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLayerResponse GetLayerResponse
     */
    public function getLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLayer',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取层详细信息。
     *  *
     * @param string          $LayerId
     * @param GetLayerRequest $request GetLayerRequest
     *
     * @return GetLayerResponse GetLayerResponse
     */
    public function getLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取资源规则详细信息
     *  *
     * @param string                 $ResourceRuleId
     * @param GetResourceRuleRequest $request        GetResourceRuleRequest
     * @param string[]               $headers        map
     * @param RuntimeOptions         $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetResourceRuleResponse GetResourceRuleResponse
     */
    public function getResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源规则详细信息
     *  *
     * @param string                 $ResourceRuleId
     * @param GetResourceRuleRequest $request        GetResourceRuleRequest
     *
     * @return GetResourceRuleResponse GetResourceRuleResponse
     */
    public function getResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取场景详细信息
     *  *
     * @param string          $SceneId
     * @param GetSceneRequest $request GetSceneRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSceneResponse GetSceneResponse
     */
    public function getSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScene',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/scenes/' . OpenApiUtilClient::getEncodeParam($SceneId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取场景详细信息
     *  *
     * @param string          $SceneId
     * @param GetSceneRequest $request GetSceneRequest
     *
     * @return GetSceneResponse GetSceneResponse
     */
    public function getScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定人群下的指定子人群的详细信息。
     *  *
     * @param string             $CrowdId
     * @param string             $SubCrowdId
     * @param GetSubCrowdRequest $request    GetSubCrowdRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetSubCrowdResponse GetSubCrowdResponse
     */
    public function getSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '/subcrowds/' . OpenApiUtilClient::getEncodeParam($SubCrowdId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定人群下的指定子人群的详细信息。
     *  *
     * @param string             $CrowdId
     * @param string             $SubCrowdId
     * @param GetSubCrowdRequest $request    GetSubCrowdRequest
     *
     * @return GetSubCrowdResponse GetSubCrowdResponse
     */
    public function getSubCrowd($CrowdId, $SubCrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubCrowdWithOptions($CrowdId, $SubCrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据表详细信息。
     *  *
     * @param string              $TableMetaId
     * @param GetTableMetaRequest $request     GetTableMetaRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetTableMetaResponse GetTableMetaResponse
     */
    public function getTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableMeta',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据表详细信息。
     *  *
     * @param string              $TableMetaId
     * @param GetTableMetaRequest $request     GetTableMetaRequest
     *
     * @return GetTableMetaResponse GetTableMetaResponse
     */
    public function getTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流量调控目标详情
     *  *
     * @param string                         $TrafficControlTargetId
     * @param GetTrafficControlTargetRequest $request                GetTrafficControlTargetRequest
     * @param string[]                       $headers                map
     * @param RuntimeOptions                 $runtime                runtime options for this request RuntimeOptions
     *
     * @return GetTrafficControlTargetResponse GetTrafficControlTargetResponse
     */
    public function getTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流量调控目标详情
     *  *
     * @param string                         $TrafficControlTargetId
     * @param GetTrafficControlTargetRequest $request                GetTrafficControlTargetRequest
     *
     * @return GetTrafficControlTargetResponse GetTrafficControlTargetResponse
     */
    public function getTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流量调控任务详情
     *  *
     * @param string                       $TrafficControlTaskId
     * @param GetTrafficControlTaskRequest $request              GetTrafficControlTaskRequest
     * @param string[]                     $headers              map
     * @param RuntimeOptions               $runtime              runtime options for this request RuntimeOptions
     *
     * @return GetTrafficControlTaskResponse GetTrafficControlTaskResponse
     */
    public function getTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->controlTargetFilter)) {
            $query['ControlTargetFilter'] = $request->controlTargetFilter;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流量调控任务详情
     *  *
     * @param string                       $TrafficControlTaskId
     * @param GetTrafficControlTaskRequest $request              GetTrafficControlTaskRequest
     *
     * @return GetTrafficControlTaskResponse GetTrafficControlTaskResponse
     */
    public function getTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流量调控任务的流量详情
     *  *
     * @param string                              $TrafficControlTaskId
     * @param GetTrafficControlTaskTrafficRequest $request              GetTrafficControlTaskTrafficRequest
     * @param string[]                            $headers              map
     * @param RuntimeOptions                      $runtime              runtime options for this request RuntimeOptions
     *
     * @return GetTrafficControlTaskTrafficResponse GetTrafficControlTaskTrafficResponse
     */
    public function getTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrafficControlTaskTraffic',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/trafficinfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrafficControlTaskTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流量调控任务的流量详情
     *  *
     * @param string                              $TrafficControlTaskId
     * @param GetTrafficControlTaskTrafficRequest $request              GetTrafficControlTaskTrafficRequest
     *
     * @return GetTrafficControlTaskTrafficResponse GetTrafficControlTaskTrafficResponse
     */
    public function getTrafficControlTaskTraffic($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取AB Test实验指标组列表。
     *  *
     * @param ListABMetricGroupsRequest $request ListABMetricGroupsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListABMetricGroupsResponse ListABMetricGroupsResponse
     */
    public function listABMetricGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->realtime)) {
            $query['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListABMetricGroups',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABMetricGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取AB Test实验指标组列表。
     *  *
     * @param ListABMetricGroupsRequest $request ListABMetricGroupsRequest
     *
     * @return ListABMetricGroupsResponse ListABMetricGroupsResponse
     */
    public function listABMetricGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABMetricGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取AB Test实验指标列表。
     *  *
     * @param ListABMetricsRequest $request ListABMetricsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListABMetricsResponse ListABMetricsResponse
     */
    public function listABMetricsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->realtime)) {
            $query['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->tableMetaId)) {
            $query['TableMetaId'] = $request->tableMetaId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListABMetrics',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取AB Test实验指标列表。
     *  *
     * @param ListABMetricsRequest $request ListABMetricsRequest
     *
     * @return ListABMetricsResponse ListABMetricsResponse
     */
    public function listABMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取计算任务列表。
     *  *
     * @param ListCalculationJobsRequest $request ListCalculationJobsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCalculationJobsResponse ListCalculationJobsResponse
     */
    public function listCalculationJobsWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCalculationJobs',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/calculationjobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCalculationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取计算任务列表。
     *  *
     * @param ListCalculationJobsRequest $request ListCalculationJobsRequest
     *
     * @return ListCalculationJobsResponse ListCalculationJobsResponse
     */
    public function listCalculationJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCalculationJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取人群下的所有用户。
     *  *
     * @param string                $CrowdId
     * @param ListCrowdUsersRequest $request ListCrowdUsersRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCrowdUsersResponse ListCrowdUsersResponse
     */
    public function listCrowdUsersWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCrowdUsers',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCrowdUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取人群下的所有用户。
     *  *
     * @param string                $CrowdId
     * @param ListCrowdUsersRequest $request ListCrowdUsersRequest
     *
     * @return ListCrowdUsersResponse ListCrowdUsersResponse
     */
    public function listCrowdUsers($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCrowdUsersWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取人群列表。
     *  *
     * @param ListCrowdsRequest $request ListCrowdsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCrowdsResponse ListCrowdsResponse
     */
    public function listCrowdsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCrowds',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCrowdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取人群列表。
     *  *
     * @param ListCrowdsRequest $request ListCrowdsRequest
     *
     * @return ListCrowdsResponse ListCrowdsResponse
     */
    public function listCrowds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCrowdsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验组列表。
     *  *
     * @param ListExperimentGroupsRequest $request ListExperimentGroupsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentGroupsResponse ListExperimentGroupsResponse
     */
    public function listExperimentGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->layerId)) {
            $query['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->timeRangeEnd)) {
            $query['TimeRangeEnd'] = $request->timeRangeEnd;
        }
        if (!Utils::isUnset($request->timeRangeStart)) {
            $query['TimeRangeStart'] = $request->timeRangeStart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperimentGroups',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验组列表。
     *  *
     * @param ListExperimentGroupsRequest $request ListExperimentGroupsRequest
     *
     * @return ListExperimentGroupsResponse ListExperimentGroupsResponse
     */
    public function listExperimentGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验列表。
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->experimentGroupId)) {
            $query['ExperimentGroupId'] = $request->experimentGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperiments',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验列表。
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检查配置列表。
     *  *
     * @param ListFeatureConsistencyCheckJobConfigsRequest $request ListFeatureConsistencyCheckJobConfigsRequest
     * @param string[]                                     $headers map
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFeatureConsistencyCheckJobConfigsResponse ListFeatureConsistencyCheckJobConfigsResponse
     */
    public function listFeatureConsistencyCheckJobConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureConsistencyCheckJobConfigs',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobconfigs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureConsistencyCheckJobConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检查配置列表。
     *  *
     * @param ListFeatureConsistencyCheckJobConfigsRequest $request ListFeatureConsistencyCheckJobConfigsRequest
     *
     * @return ListFeatureConsistencyCheckJobConfigsResponse ListFeatureConsistencyCheckJobConfigsResponse
     */
    public function listFeatureConsistencyCheckJobConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检查任务的特征报表/比对结果。
     *  *
     * @param string                                              $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobFeatureReportsRequest $request                      ListFeatureConsistencyCheckJobFeatureReportsRequest
     * @param string[]                                            $headers                      map
     * @param RuntimeOptions                                      $runtime                      runtime options for this request RuntimeOptions
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponse ListFeatureConsistencyCheckJobFeatureReportsResponse
     */
    public function listFeatureConsistencyCheckJobFeatureReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logItemId)) {
            $query['LogItemId'] = $request->logItemId;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $query['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->logUserId)) {
            $query['LogUserId'] = $request->logUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureConsistencyCheckJobFeatureReports',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobId) . '/featurereports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureConsistencyCheckJobFeatureReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检查任务的特征报表/比对结果。
     *  *
     * @param string                                              $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobFeatureReportsRequest $request                      ListFeatureConsistencyCheckJobFeatureReportsRequest
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponse ListFeatureConsistencyCheckJobFeatureReportsResponse
     */
    public function listFeatureConsistencyCheckJobFeatureReports($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobFeatureReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检查任务分数报表/比对结果。
     *  *
     * @param string                                            $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobScoreReportsRequest $tmpReq                       ListFeatureConsistencyCheckJobScoreReportsRequest
     * @param string[]                                          $headers                      map
     * @param RuntimeOptions                                    $runtime                      runtime options for this request RuntimeOptions
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponse ListFeatureConsistencyCheckJobScoreReportsResponse
     */
    public function listFeatureConsistencyCheckJobScoreReportsWithOptions($FeatureConsistencyCheckJobId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFeatureConsistencyCheckJobScoreReportsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->excludeRequestIds)) {
            $request->excludeRequestIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->excludeRequestIds, 'ExcludeRequestIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->excludeRequestIdsShrink)) {
            $query['ExcludeRequestIds'] = $request->excludeRequestIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureConsistencyCheckJobScoreReports',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobId) . '/scorereports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureConsistencyCheckJobScoreReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检查任务分数报表/比对结果。
     *  *
     * @param string                                            $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobScoreReportsRequest $request                      ListFeatureConsistencyCheckJobScoreReportsRequest
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponse ListFeatureConsistencyCheckJobScoreReportsResponse
     */
    public function listFeatureConsistencyCheckJobScoreReports($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobScoreReportsWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取特征一致性检查任务列表。
     *  *
     * @param ListFeatureConsistencyCheckJobsRequest $request ListFeatureConsistencyCheckJobsRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFeatureConsistencyCheckJobsResponse ListFeatureConsistencyCheckJobsResponse
     */
    public function listFeatureConsistencyCheckJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureConsistencyCheckJobs',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureConsistencyCheckJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征一致性检查任务列表。
     *  *
     * @param ListFeatureConsistencyCheckJobsRequest $request ListFeatureConsistencyCheckJobsRequest
     *
     * @return ListFeatureConsistencyCheckJobsResponse ListFeatureConsistencyCheckJobsResponse
     */
    public function listFeatureConsistencyCheckJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureConsistencyCheckJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例下配置的资源列表。
     *  *
     * @param string                       $InstanceId
     * @param ListInstanceResourcesRequest $request    ListInstanceResourcesRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResourcesResponse ListInstanceResourcesResponse
     */
    public function listInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceResources',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例下配置的资源列表。
     *  *
     * @param string                       $InstanceId
     * @param ListInstanceResourcesRequest $request    ListInstanceResourcesRequest
     *
     * @return ListInstanceResourcesResponse ListInstanceResourcesResponse
     */
    public function listInstanceResources($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceResourcesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取推荐全链路深度定制开发平台实例信息列表。
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取推荐全链路深度定制开发平台实例信息列表。
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验室列表。
     *  *
     * @param ListLaboratoriesRequest $request ListLaboratoriesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLaboratoriesResponse ListLaboratoriesResponse
     */
    public function listLaboratoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLaboratories',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLaboratoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验室列表。
     *  *
     * @param ListLaboratoriesRequest $request ListLaboratoriesRequest
     *
     * @return ListLaboratoriesResponse ListLaboratoriesResponse
     */
    public function listLaboratories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLaboratoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取层列表。
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->laboratoryId)) {
            $query['LaboratoryId'] = $request->laboratoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayers',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取层列表。
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取参数列表。
     *  *
     * @param ListParamsRequest $request ListParamsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListParamsResponse ListParamsResponse
     */
    public function listParamsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListParams',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/params',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取参数列表。
     *  *
     * @param ListParamsRequest $request ListParamsRequest
     *
     * @return ListParamsResponse ListParamsResponse
     */
    public function listParams($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParamsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取资源规则列表
     *  *
     * @param ListResourceRulesRequest $request ListResourceRulesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceRulesResponse ListResourceRulesResponse
     */
    public function listResourceRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceRuleId)) {
            $query['ResourceRuleId'] = $request->resourceRuleId;
        }
        if (!Utils::isUnset($request->resourceRuleName)) {
            $query['ResourceRuleName'] = $request->resourceRuleName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceRules',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源规则列表
     *  *
     * @param ListResourceRulesRequest $request ListResourceRulesRequest
     *
     * @return ListResourceRulesResponse ListResourceRulesResponse
     */
    public function listResourceRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取场景列表
     *  *
     * @param ListScenesRequest $request ListScenesRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScenesResponse ListScenesResponse
     */
    public function listScenesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScenes',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/scenes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取场景列表
     *  *
     * @param ListScenesRequest $request ListScenesRequest
     *
     * @return ListScenesResponse ListScenesResponse
     */
    public function listScenes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScenesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取人群下的所有子人群。
     *  *
     * @param string               $CrowdId
     * @param ListSubCrowdsRequest $request ListSubCrowdsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSubCrowdsResponse ListSubCrowdsResponse
     */
    public function listSubCrowdsWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubCrowds',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '/subcrowds',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubCrowdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取人群下的所有子人群。
     *  *
     * @param string               $CrowdId
     * @param ListSubCrowdsRequest $request ListSubCrowdsRequest
     *
     * @return ListSubCrowdsResponse ListSubCrowdsResponse
     */
    public function listSubCrowds($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubCrowdsWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据表列表。
     *  *
     * @param ListTableMetasRequest $request ListTableMetasRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTableMetasResponse ListTableMetasResponse
     */
    public function listTableMetasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->module)) {
            $query['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableMetas',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTableMetasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据表列表。
     *  *
     * @param ListTableMetasRequest $request ListTableMetasRequest
     *
     * @return ListTableMetasResponse ListTableMetasResponse
     */
    public function listTableMetas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableMetasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流量调控任务流量变更的历史列表
     *  *
     * @param string                                        $TrafficControlTargetId
     * @param ListTrafficControlTargetTrafficHistoryRequest $request                ListTrafficControlTargetTrafficHistoryRequest
     * @param string[]                                      $headers                map
     * @param RuntimeOptions                                $runtime                runtime options for this request RuntimeOptions
     *
     * @return ListTrafficControlTargetTrafficHistoryResponse ListTrafficControlTargetTrafficHistoryResponse
     */
    public function listTrafficControlTargetTrafficHistoryWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->experimentGroupId)) {
            $query['ExperimentGroupId'] = $request->experimentGroupId;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrafficControlTargetTrafficHistory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '/traffichistories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrafficControlTargetTrafficHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流量调控任务流量变更的历史列表
     *  *
     * @param string                                        $TrafficControlTargetId
     * @param ListTrafficControlTargetTrafficHistoryRequest $request                ListTrafficControlTargetTrafficHistoryRequest
     *
     * @return ListTrafficControlTargetTrafficHistoryResponse ListTrafficControlTargetTrafficHistoryResponse
     */
    public function listTrafficControlTargetTrafficHistory($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrafficControlTargetTrafficHistoryWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流量调控列表
     *  *
     * @param ListTrafficControlTasksRequest $request ListTrafficControlTasksRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTrafficControlTasksResponse ListTrafficControlTasksResponse
     */
    public function listTrafficControlTasksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->controlTargetFilter)) {
            $query['ControlTargetFilter'] = $request->controlTargetFilter;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->trafficControlTaskId)) {
            $query['TrafficControlTaskId'] = $request->trafficControlTaskId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrafficControlTasks',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrafficControlTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流量调控列表
     *  *
     * @param ListTrafficControlTasksRequest $request ListTrafficControlTasksRequest
     *
     * @return ListTrafficControlTasksResponse ListTrafficControlTasksResponse
     */
    public function listTrafficControlTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrafficControlTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 上线实验。
     *  *
     * @param string                   $ExperimentId
     * @param OfflineExperimentRequest $request      OfflineExperimentRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return OfflineExperimentResponse OfflineExperimentResponse
     */
    public function offlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OfflineExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上线实验。
     *  *
     * @param string                   $ExperimentId
     * @param OfflineExperimentRequest $request      OfflineExperimentRequest
     *
     * @return OfflineExperimentResponse OfflineExperimentResponse
     */
    public function offlineExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 下线实验组。
     *  *
     * @param string                        $ExperimentGroupId
     * @param OfflineExperimentGroupRequest $request           OfflineExperimentGroupRequest
     * @param string[]                      $headers           map
     * @param RuntimeOptions                $runtime           runtime options for this request RuntimeOptions
     *
     * @return OfflineExperimentGroupResponse OfflineExperimentGroupResponse
     */
    public function offlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OfflineExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '/action/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下线实验组。
     *  *
     * @param string                        $ExperimentGroupId
     * @param OfflineExperimentGroupRequest $request           OfflineExperimentGroupRequest
     *
     * @return OfflineExperimentGroupResponse OfflineExperimentGroupResponse
     */
    public function offlineExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 下线实验室。
     *  *
     * @param string                   $LaboratoryId
     * @param OfflineLaboratoryRequest $request      OfflineLaboratoryRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return OfflineLaboratoryResponse OfflineLaboratoryResponse
     */
    public function offlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OfflineLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '/action/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下线实验室。
     *  *
     * @param string                   $LaboratoryId
     * @param OfflineLaboratoryRequest $request      OfflineLaboratoryRequest
     *
     * @return OfflineLaboratoryResponse OfflineLaboratoryResponse
     */
    public function offlineLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 上线实验
     *  *
     * @param string                  $ExperimentId
     * @param OnlineExperimentRequest $request      OnlineExperimentRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return OnlineExperimentResponse OnlineExperimentResponse
     */
    public function onlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OnlineExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/online',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OnlineExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上线实验
     *  *
     * @param string                  $ExperimentId
     * @param OnlineExperimentRequest $request      OnlineExperimentRequest
     *
     * @return OnlineExperimentResponse OnlineExperimentResponse
     */
    public function onlineExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 上线实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param OnlineExperimentGroupRequest $request           OnlineExperimentGroupRequest
     * @param string[]                     $headers           map
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return OnlineExperimentGroupResponse OnlineExperimentGroupResponse
     */
    public function onlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OnlineExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '/action/online',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OnlineExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上线实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param OnlineExperimentGroupRequest $request           OnlineExperimentGroupRequest
     *
     * @return OnlineExperimentGroupResponse OnlineExperimentGroupResponse
     */
    public function onlineExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 上线实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param OnlineLaboratoryRequest $request      OnlineLaboratoryRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return OnlineLaboratoryResponse OnlineLaboratoryResponse
     */
    public function onlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OnlineLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '/action/online',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OnlineLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上线实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param OnlineLaboratoryRequest $request      OnlineLaboratoryRequest
     *
     * @return OnlineLaboratoryResponse OnlineLaboratoryResponse
     */
    public function onlineLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 推全。
     *  *
     * @param string                   $ExperimentId
     * @param PushAllExperimentRequest $request      PushAllExperimentRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return PushAllExperimentResponse PushAllExperimentResponse
     */
    public function pushAllExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushAllExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/pushall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushAllExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推全。
     *  *
     * @param string                   $ExperimentId
     * @param PushAllExperimentRequest $request      PushAllExperimentRequest
     *
     * @return PushAllExperimentResponse PushAllExperimentResponse
     */
    public function pushAllExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushAllExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 推送指标到指定资源规则
     *  *
     * @param string                  $ResourceRuleId
     * @param PushResourceRuleRequest $tmpReq         PushResourceRuleRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return PushResourceRuleResponse PushResourceRuleResponse
     */
    public function pushResourceRuleWithOptions($ResourceRuleId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushResourceRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->metricInfo)) {
            $request->metricInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->metricInfo, 'MetricInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricInfoShrink)) {
            $query['MetricInfo'] = $request->metricInfoShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '/action/push',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推送指标到指定资源规则
     *  *
     * @param string                  $ResourceRuleId
     * @param PushResourceRuleRequest $request        PushResourceRuleRequest
     *
     * @return PushResourceRuleResponse PushResourceRuleResponse
     */
    public function pushResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 发布流量调控任务
     *  *
     * @param string                           $TrafficControlTaskId
     * @param ReleaseTrafficControlTaskRequest $request              ReleaseTrafficControlTaskRequest
     * @param string[]                         $headers              map
     * @param RuntimeOptions                   $runtime              runtime options for this request RuntimeOptions
     *
     * @return ReleaseTrafficControlTaskResponse ReleaseTrafficControlTaskResponse
     */
    public function releaseTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/release',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布流量调控任务
     *  *
     * @param string                           $TrafficControlTaskId
     * @param ReleaseTrafficControlTaskRequest $request              ReleaseTrafficControlTaskRequest
     *
     * @return ReleaseTrafficControlTaskResponse ReleaseTrafficControlTaskResponse
     */
    public function releaseTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 对指标组进行报表。
     *  *
     * @param string                     $ABMetricGroupId
     * @param ReportABMetricGroupRequest $request         ReportABMetricGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return ReportABMetricGroupResponse ReportABMetricGroupResponse
     */
    public function reportABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baseExperimentId)) {
            $body['BaseExperimentId'] = $request->baseExperimentId;
        }
        if (!Utils::isUnset($request->dimensionFields)) {
            $body['DimensionFields'] = $request->dimensionFields;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->experimentGroupId)) {
            $body['ExperimentGroupId'] = $request->experimentGroupId;
        }
        if (!Utils::isUnset($request->experimentIds)) {
            $body['ExperimentIds'] = $request->experimentIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->reportType)) {
            $body['ReportType'] = $request->reportType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->timeStatisticsMethod)) {
            $body['TimeStatisticsMethod'] = $request->timeStatisticsMethod;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportABMetricGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups/' . OpenApiUtilClient::getEncodeParam($ABMetricGroupId) . '/action/report',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReportABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对指标组进行报表。
     *  *
     * @param string                     $ABMetricGroupId
     * @param ReportABMetricGroupRequest $request         ReportABMetricGroupRequest
     *
     * @return ReportABMetricGroupResponse ReportABMetricGroupResponse
     */
    public function reportABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 拆分流量调控目标
     *  *
     * @param string                           $TrafficControlTargetId
     * @param SplitTrafficControlTargetRequest $request                SplitTrafficControlTargetRequest
     * @param string[]                         $headers                map
     * @param RuntimeOptions                   $runtime                runtime options for this request RuntimeOptions
     *
     * @return SplitTrafficControlTargetResponse SplitTrafficControlTargetResponse
     */
    public function splitTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->setValues)) {
            $body['SetValues'] = $request->setValues;
        }
        if (!Utils::isUnset($request->timePoints)) {
            $body['TimePoints'] = $request->timePoints;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SplitTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '/action/split',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SplitTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拆分流量调控目标
     *  *
     * @param string                           $TrafficControlTargetId
     * @param SplitTrafficControlTargetRequest $request                SplitTrafficControlTargetRequest
     *
     * @return SplitTrafficControlTargetResponse SplitTrafficControlTargetResponse
     */
    public function splitTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 开启流量调控目标
     *  *
     * @param string                           $TrafficControlTargetId
     * @param StartTrafficControlTargetRequest $request                StartTrafficControlTargetRequest
     * @param string[]                         $headers                map
     * @param RuntimeOptions                   $runtime                runtime options for this request RuntimeOptions
     *
     * @return StartTrafficControlTargetResponse StartTrafficControlTargetResponse
     */
    public function startTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '/action/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启流量调控目标
     *  *
     * @param string                           $TrafficControlTargetId
     * @param StartTrafficControlTargetRequest $request                StartTrafficControlTargetRequest
     *
     * @return StartTrafficControlTargetResponse StartTrafficControlTargetResponse
     */
    public function startTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 开启流量调控任务
     *  *
     * @param string                         $TrafficControlTaskId
     * @param StartTrafficControlTaskRequest $request              StartTrafficControlTaskRequest
     * @param string[]                       $headers              map
     * @param RuntimeOptions                 $runtime              runtime options for this request RuntimeOptions
     *
     * @return StartTrafficControlTaskResponse StartTrafficControlTaskResponse
     */
    public function startTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启流量调控任务
     *  *
     * @param string                         $TrafficControlTaskId
     * @param StartTrafficControlTaskRequest $request              StartTrafficControlTaskRequest
     *
     * @return StartTrafficControlTaskResponse StartTrafficControlTaskResponse
     */
    public function startTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 停止流量调控目标
     *  *
     * @param string                          $TrafficControlTargetId
     * @param StopTrafficControlTargetRequest $request                StopTrafficControlTargetRequest
     * @param string[]                        $headers                map
     * @param RuntimeOptions                  $runtime                runtime options for this request RuntimeOptions
     *
     * @return StopTrafficControlTargetResponse StopTrafficControlTargetResponse
     */
    public function stopTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止流量调控目标
     *  *
     * @param string                          $TrafficControlTargetId
     * @param StopTrafficControlTargetRequest $request                StopTrafficControlTargetRequest
     *
     * @return StopTrafficControlTargetResponse StopTrafficControlTargetResponse
     */
    public function stopTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 停止流量调控任务
     *  *
     * @param string                        $TrafficControlTaskId
     * @param StopTrafficControlTaskRequest $request              StopTrafficControlTaskRequest
     * @param string[]                      $headers              map
     * @param RuntimeOptions                $runtime              runtime options for this request RuntimeOptions
     *
     * @return StopTrafficControlTaskResponse StopTrafficControlTaskResponse
     */
    public function stopTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止流量调控任务
     *  *
     * @param string                        $TrafficControlTaskId
     * @param StopTrafficControlTaskRequest $request              StopTrafficControlTaskRequest
     *
     * @return StopTrafficControlTaskResponse StopTrafficControlTaskResponse
     */
    public function stopTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 同步特征一致性检测任务重放日志。
     *  *
     * @param SyncFeatureConsistencyCheckJobReplayLogRequest $request SyncFeatureConsistencyCheckJobReplayLogRequest
     * @param string[]                                       $headers map
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogResponse SyncFeatureConsistencyCheckJobReplayLogResponse
     */
    public function syncFeatureConsistencyCheckJobReplayLogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contextFeatures)) {
            $body['ContextFeatures'] = $request->contextFeatures;
        }
        if (!Utils::isUnset($request->featureConsistencyCheckJobConfigId)) {
            $body['FeatureConsistencyCheckJobConfigId'] = $request->featureConsistencyCheckJobConfigId;
        }
        if (!Utils::isUnset($request->generatedFeatures)) {
            $body['GeneratedFeatures'] = $request->generatedFeatures;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logItemId)) {
            $body['LogItemId'] = $request->logItemId;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $body['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->logRequestTime)) {
            $body['LogRequestTime'] = $request->logRequestTime;
        }
        if (!Utils::isUnset($request->logUserId)) {
            $body['LogUserId'] = $request->logUserId;
        }
        if (!Utils::isUnset($request->rawFeatures)) {
            $body['RawFeatures'] = $request->rawFeatures;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['SceneName'] = $request->sceneName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncFeatureConsistencyCheckJobReplayLog',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/action/syncreplaylog',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SyncFeatureConsistencyCheckJobReplayLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步特征一致性检测任务重放日志。
     *  *
     * @param SyncFeatureConsistencyCheckJobReplayLogRequest $request SyncFeatureConsistencyCheckJobReplayLogRequest
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogResponse SyncFeatureConsistencyCheckJobReplayLogResponse
     */
    public function syncFeatureConsistencyCheckJobReplayLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncFeatureConsistencyCheckJobReplayLogWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消指定特征一致性检查正在运行中的任务。
     *  *
     * @param string                                     $FeatureConsistencyCheckJobId
     * @param TerminateFeatureConsistencyCheckJobRequest $request                      TerminateFeatureConsistencyCheckJobRequest
     * @param string[]                                   $headers                      map
     * @param RuntimeOptions                             $runtime                      runtime options for this request RuntimeOptions
     *
     * @return TerminateFeatureConsistencyCheckJobResponse TerminateFeatureConsistencyCheckJobResponse
     */
    public function terminateFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TerminateFeatureConsistencyCheckJob',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobId) . '/action/terminate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TerminateFeatureConsistencyCheckJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消指定特征一致性检查正在运行中的任务。
     *  *
     * @param string                                     $FeatureConsistencyCheckJobId
     * @param TerminateFeatureConsistencyCheckJobRequest $request                      TerminateFeatureConsistencyCheckJobRequest
     *
     * @return TerminateFeatureConsistencyCheckJobResponse TerminateFeatureConsistencyCheckJobResponse
     */
    public function terminateFeatureConsistencyCheckJob($FeatureConsistencyCheckJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateFeatureConsistencyCheckJobWithOptions($FeatureConsistencyCheckJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新AB Test实验指标。
     *  *
     * @param string                $ABMetricId
     * @param UpdateABMetricRequest $request    UpdateABMetricRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateABMetricResponse UpdateABMetricResponse
     */
    public function updateABMetricWithOptions($ABMetricId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->leftMetricId)) {
            $body['LeftMetricId'] = $request->leftMetricId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->realtime)) {
            $body['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->resultResourceId)) {
            $body['ResultResourceId'] = $request->resultResourceId;
        }
        if (!Utils::isUnset($request->rightMetricId)) {
            $body['RightMetricId'] = $request->rightMetricId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->statisticsCycle)) {
            $body['StatisticsCycle'] = $request->statisticsCycle;
        }
        if (!Utils::isUnset($request->tableMetaId)) {
            $body['TableMetaId'] = $request->tableMetaId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateABMetric',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetrics/' . OpenApiUtilClient::getEncodeParam($ABMetricId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新AB Test实验指标。
     *  *
     * @param string                $ABMetricId
     * @param UpdateABMetricRequest $request    UpdateABMetricRequest
     *
     * @return UpdateABMetricResponse UpdateABMetricResponse
     */
    public function updateABMetric($ABMetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABMetricWithOptions($ABMetricId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新AB test实验指标组。
     *  *
     * @param string                     $ABMetricGroupId
     * @param UpdateABMetricGroupRequest $request         UpdateABMetricGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateABMetricGroupResponse UpdateABMetricGroupResponse
     */
    public function updateABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ABMetricIds)) {
            $body['ABMetricIds'] = $request->ABMetricIds;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->realtime)) {
            $body['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateABMetricGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/abmetricgroups/' . OpenApiUtilClient::getEncodeParam($ABMetricGroupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新AB test实验指标组。
     *  *
     * @param string                     $ABMetricGroupId
     * @param UpdateABMetricGroupRequest $request         UpdateABMetricGroupRequest
     *
     * @return UpdateABMetricGroupResponse UpdateABMetricGroupResponse
     */
    public function updateABMetricGroup($ABMetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABMetricGroupWithOptions($ABMetricGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定人群。
     *  *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request UpdateCrowdRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCrowdResponse UpdateCrowdResponse
     */
    public function updateCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCrowd',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定人群。
     *  *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request UpdateCrowdRequest
     *
     * @return UpdateCrowdResponse UpdateCrowdResponse
     */
    public function updateCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新实验。
     *  *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request      UpdateExperimentRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentResponse UpdateExperimentResponse
     */
    public function updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flowPercent)) {
            $body['FlowPercent'] = $request->flowPercent;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperiment',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新实验。
     *  *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request      UpdateExperimentRequest
     *
     * @return UpdateExperimentResponse UpdateExperimentResponse
     */
    public function updateExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param UpdateExperimentGroupRequest $request           UpdateExperimentGroupRequest
     * @param string[]                     $headers           map
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentGroupResponse UpdateExperimentGroupResponse
     */
    public function updateExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->crowdId)) {
            $body['CrowdId'] = $request->crowdId;
        }
        if (!Utils::isUnset($request->crowdTargetType)) {
            $body['CrowdTargetType'] = $request->crowdTargetType;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->distributionTimeDuration)) {
            $body['DistributionTimeDuration'] = $request->distributionTimeDuration;
        }
        if (!Utils::isUnset($request->distributionType)) {
            $body['DistributionType'] = $request->distributionType;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->layerId)) {
            $body['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->needAA)) {
            $body['NeedAA'] = $request->needAA;
        }
        if (!Utils::isUnset($request->randomFlow)) {
            $body['RandomFlow'] = $request->randomFlow;
        }
        if (!Utils::isUnset($request->reservcedBuckets)) {
            $body['ReservcedBuckets'] = $request->reservcedBuckets;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentGroup',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentgroups/' . OpenApiUtilClient::getEncodeParam($ExperimentGroupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定实验组。
     *  *
     * @param string                       $ExperimentGroupId
     * @param UpdateExperimentGroupRequest $request           UpdateExperimentGroupRequest
     *
     * @return UpdateExperimentGroupResponse UpdateExperimentGroupResponse
     */
    public function updateExperimentGroup($ExperimentGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentGroupWithOptions($ExperimentGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新特征一致性检查配置信息。
     *  *
     * @param string                                        $FeatureConsistencyCheckJobConfigId
     * @param UpdateFeatureConsistencyCheckJobConfigRequest $request                            UpdateFeatureConsistencyCheckJobConfigRequest
     * @param string[]                                      $headers                            map
     * @param RuntimeOptions                                $runtime                            runtime options for this request RuntimeOptions
     *
     * @return UpdateFeatureConsistencyCheckJobConfigResponse UpdateFeatureConsistencyCheckJobConfigResponse
     */
    public function updateFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->compareFeature)) {
            $body['CompareFeature'] = $request->compareFeature;
        }
        if (!Utils::isUnset($request->easServiceName)) {
            $body['EasServiceName'] = $request->easServiceName;
        }
        if (!Utils::isUnset($request->easyRecPackagePath)) {
            $body['EasyRecPackagePath'] = $request->easyRecPackagePath;
        }
        if (!Utils::isUnset($request->easyRecVersion)) {
            $body['EasyRecVersion'] = $request->easyRecVersion;
        }
        if (!Utils::isUnset($request->featureDisplayExclude)) {
            $body['FeatureDisplayExclude'] = $request->featureDisplayExclude;
        }
        if (!Utils::isUnset($request->featureLandingResourceId)) {
            $body['FeatureLandingResourceId'] = $request->featureLandingResourceId;
        }
        if (!Utils::isUnset($request->featurePriority)) {
            $body['FeaturePriority'] = $request->featurePriority;
        }
        if (!Utils::isUnset($request->featureStoreItemId)) {
            $body['FeatureStoreItemId'] = $request->featureStoreItemId;
        }
        if (!Utils::isUnset($request->featureStoreModelId)) {
            $body['FeatureStoreModelId'] = $request->featureStoreModelId;
        }
        if (!Utils::isUnset($request->featureStoreProjectId)) {
            $body['FeatureStoreProjectId'] = $request->featureStoreProjectId;
        }
        if (!Utils::isUnset($request->featureStoreProjectName)) {
            $body['FeatureStoreProjectName'] = $request->featureStoreProjectName;
        }
        if (!Utils::isUnset($request->featureStoreSeqFeatureView)) {
            $body['FeatureStoreSeqFeatureView'] = $request->featureStoreSeqFeatureView;
        }
        if (!Utils::isUnset($request->featureStoreUserId)) {
            $body['FeatureStoreUserId'] = $request->featureStoreUserId;
        }
        if (!Utils::isUnset($request->fgJarVersion)) {
            $body['FgJarVersion'] = $request->fgJarVersion;
        }
        if (!Utils::isUnset($request->fgJsonFileName)) {
            $body['FgJsonFileName'] = $request->fgJsonFileName;
        }
        if (!Utils::isUnset($request->generateZip)) {
            $body['GenerateZip'] = $request->generateZip;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isUseFeatureStore)) {
            $body['IsUseFeatureStore'] = $request->isUseFeatureStore;
        }
        if (!Utils::isUnset($request->itemIdField)) {
            $body['ItemIdField'] = $request->itemIdField;
        }
        if (!Utils::isUnset($request->itemTable)) {
            $body['ItemTable'] = $request->itemTable;
        }
        if (!Utils::isUnset($request->itemTablePartitionField)) {
            $body['ItemTablePartitionField'] = $request->itemTablePartitionField;
        }
        if (!Utils::isUnset($request->itemTablePartitionFieldFormat)) {
            $body['ItemTablePartitionFieldFormat'] = $request->itemTablePartitionFieldFormat;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossResourceId)) {
            $body['OssResourceId'] = $request->ossResourceId;
        }
        if (!Utils::isUnset($request->sampleRate)) {
            $body['SampleRate'] = $request->sampleRate;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userIdField)) {
            $body['UserIdField'] = $request->userIdField;
        }
        if (!Utils::isUnset($request->userTable)) {
            $body['UserTable'] = $request->userTable;
        }
        if (!Utils::isUnset($request->userTablePartitionField)) {
            $body['UserTablePartitionField'] = $request->userTablePartitionField;
        }
        if (!Utils::isUnset($request->userTablePartitionFieldFormat)) {
            $body['UserTablePartitionFieldFormat'] = $request->userTablePartitionFieldFormat;
        }
        if (!Utils::isUnset($request->workflowName)) {
            $body['WorkflowName'] = $request->workflowName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFeatureConsistencyCheckJobConfig',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/featureconsistencycheck/jobconfigs/' . OpenApiUtilClient::getEncodeParam($FeatureConsistencyCheckJobConfigId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFeatureConsistencyCheckJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新特征一致性检查配置信息。
     *  *
     * @param string                                        $FeatureConsistencyCheckJobConfigId
     * @param UpdateFeatureConsistencyCheckJobConfigRequest $request                            UpdateFeatureConsistencyCheckJobConfigRequest
     *
     * @return UpdateFeatureConsistencyCheckJobConfigResponse UpdateFeatureConsistencyCheckJobConfigResponse
     */
    public function updateFeatureConsistencyCheckJobConfig($FeatureConsistencyCheckJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFeatureConsistencyCheckJobConfigWithOptions($FeatureConsistencyCheckJobConfigId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定实例下指定资源的信息。
     *  *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param UpdateInstanceResourceRequest $request    UpdateInstanceResourceRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResourceResponse UpdateInstanceResourceResponse
     */
    public function updateInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceResource',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resources/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定实例下指定资源的信息。
     *  *
     * @param string                        $InstanceId
     * @param string                        $ResourceId
     * @param UpdateInstanceResourceRequest $request    UpdateInstanceResourceRequest
     *
     * @return UpdateInstanceResourceResponse UpdateInstanceResourceResponse
     */
    public function updateInstanceResource($InstanceId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceResourceWithOptions($InstanceId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param UpdateLaboratoryRequest $request      UpdateLaboratoryRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateLaboratoryResponse UpdateLaboratoryResponse
     */
    public function updateLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketCount)) {
            $body['BucketCount'] = $request->bucketCount;
        }
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->buckets)) {
            $body['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->debugCrowdId)) {
            $body['DebugCrowdId'] = $request->debugCrowdId;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLaboratory',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/laboratories/' . OpenApiUtilClient::getEncodeParam($LaboratoryId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLaboratoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新实验室。
     *  *
     * @param string                  $LaboratoryId
     * @param UpdateLaboratoryRequest $request      UpdateLaboratoryRequest
     *
     * @return UpdateLaboratoryResponse UpdateLaboratoryResponse
     */
    public function updateLaboratory($LaboratoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLaboratoryWithOptions($LaboratoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新层。
     *  *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request UpdateLayerRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLayerResponse UpdateLayerResponse
     */
    public function updateLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLayer',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新层。
     *  *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request UpdateLayerRequest
     *
     * @return UpdateLayerResponse UpdateLayerResponse
     */
    public function updateLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新参数。
     *  *
     * @param string             $ParamId
     * @param UpdateParamRequest $request UpdateParamRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateParamResponse UpdateParamResponse
     */
    public function updateParamWithOptions($ParamId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateParam',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/params/' . OpenApiUtilClient::getEncodeParam($ParamId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新参数。
     *  *
     * @param string             $ParamId
     * @param UpdateParamRequest $request UpdateParamRequest
     *
     * @return UpdateParamResponse UpdateParamResponse
     */
    public function updateParam($ParamId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateParamWithOptions($ParamId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取资源规则列表
     *  *
     * @param string                    $ResourceRuleId
     * @param UpdateResourceRuleRequest $request        UpdateResourceRuleRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceRuleResponse UpdateResourceRuleResponse
     */
    public function updateResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricOperationType)) {
            $body['MetricOperationType'] = $request->metricOperationType;
        }
        if (!Utils::isUnset($request->metricPullInfo)) {
            $body['MetricPullInfo'] = $request->metricPullInfo;
        }
        if (!Utils::isUnset($request->metricPullPeriod)) {
            $body['MetricPullPeriod'] = $request->metricPullPeriod;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ruleComputingDefinition)) {
            $body['RuleComputingDefinition'] = $request->ruleComputingDefinition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceRule',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源规则列表
     *  *
     * @param string                    $ResourceRuleId
     * @param UpdateResourceRuleRequest $request        UpdateResourceRuleRequest
     *
     * @return UpdateResourceRuleResponse UpdateResourceRuleResponse
     */
    public function updateResourceRule($ResourceRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceRuleWithOptions($ResourceRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param UpdateResourceRuleItemRequest $request            UpdateResourceRuleItemRequest
     * @param string[]                      $headers            map
     * @param RuntimeOptions                $runtime            runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceRuleItemResponse UpdateResourceRuleItemResponse
     */
    public function updateResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxValue)) {
            $body['MaxValue'] = $request->maxValue;
        }
        if (!Utils::isUnset($request->minValue)) {
            $body['MinValue'] = $request->minValue;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceRuleItem',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resourcerules/' . OpenApiUtilClient::getEncodeParam($ResourceRuleId) . '/items/' . OpenApiUtilClient::getEncodeParam($ResourceRuleItemId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceRuleItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新资源规则条目
     *  *
     * @param string                        $ResourceRuleId
     * @param string                        $ResourceRuleItemId
     * @param UpdateResourceRuleItemRequest $request            UpdateResourceRuleItemRequest
     *
     * @return UpdateResourceRuleItemResponse UpdateResourceRuleItemResponse
     */
    public function updateResourceRuleItem($ResourceRuleId, $ResourceRuleItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceRuleItemWithOptions($ResourceRuleId, $ResourceRuleItemId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新场景
     *  *
     * @param string             $SceneId
     * @param UpdateSceneRequest $request UpdateSceneRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSceneResponse UpdateSceneResponse
     */
    public function updateSceneWithOptions($SceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flows)) {
            $body['Flows'] = $request->flows;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScene',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/scenes/' . OpenApiUtilClient::getEncodeParam($SceneId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新场景
     *  *
     * @param string             $SceneId
     * @param UpdateSceneRequest $request UpdateSceneRequest
     *
     * @return UpdateSceneResponse UpdateSceneResponse
     */
    public function updateScene($SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSceneWithOptions($SceneId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据表详细信息。
     *  *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request     UpdateTableMetaRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateTableMetaResponse UpdateTableMetaResponse
     */
    public function updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->module)) {
            $body['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableMeta',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据表详细信息。
     *  *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request     UpdateTableMetaRequest
     *
     * @return UpdateTableMetaResponse UpdateTableMetaResponse
     */
    public function updateTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流量调控目标
     *  *
     * @param string                            $TrafficControlTargetId
     * @param UpdateTrafficControlTargetRequest $request                UpdateTrafficControlTargetRequest
     * @param string[]                          $headers                map
     * @param RuntimeOptions                    $runtime                runtime options for this request RuntimeOptions
     *
     * @return UpdateTrafficControlTargetResponse UpdateTrafficControlTargetResponse
     */
    public function updateTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newParam3)) {
            $query['new-param-3'] = $request->newParam3;
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->event)) {
            $body['Event'] = $request->event;
        }
        if (!Utils::isUnset($request->itemConditionArray)) {
            $body['ItemConditionArray'] = $request->itemConditionArray;
        }
        if (!Utils::isUnset($request->itemConditionExpress)) {
            $body['ItemConditionExpress'] = $request->itemConditionExpress;
        }
        if (!Utils::isUnset($request->itemConditionType)) {
            $body['ItemConditionType'] = $request->itemConditionType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newProductRegulation)) {
            $body['NewProductRegulation'] = $request->newProductRegulation;
        }
        if (!Utils::isUnset($request->recallName)) {
            $body['RecallName'] = $request->recallName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statisPeriod)) {
            $body['StatisPeriod'] = $request->statisPeriod;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->toleranceValue)) {
            $body['ToleranceValue'] = $request->toleranceValue;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficControlTarget',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltargets/' . OpenApiUtilClient::getEncodeParam($TrafficControlTargetId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficControlTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流量调控目标
     *  *
     * @param string                            $TrafficControlTargetId
     * @param UpdateTrafficControlTargetRequest $request                UpdateTrafficControlTargetRequest
     *
     * @return UpdateTrafficControlTargetResponse UpdateTrafficControlTargetResponse
     */
    public function updateTrafficControlTarget($TrafficControlTargetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTargetWithOptions($TrafficControlTargetId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流量调控任务
     *  *
     * @param string                          $TrafficControlTaskId
     * @param UpdateTrafficControlTaskRequest $request              UpdateTrafficControlTaskRequest
     * @param string[]                        $headers              map
     * @param RuntimeOptions                  $runtime              runtime options for this request RuntimeOptions
     *
     * @return UpdateTrafficControlTaskResponse UpdateTrafficControlTaskResponse
     */
    public function updateTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->behaviorTableMetaId)) {
            $body['BehaviorTableMetaId'] = $request->behaviorTableMetaId;
        }
        if (!Utils::isUnset($request->controlGranularity)) {
            $body['ControlGranularity'] = $request->controlGranularity;
        }
        if (!Utils::isUnset($request->controlLogic)) {
            $body['ControlLogic'] = $request->controlLogic;
        }
        if (!Utils::isUnset($request->controlType)) {
            $body['ControlType'] = $request->controlType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executionTime)) {
            $body['ExecutionTime'] = $request->executionTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemConditionArray)) {
            $body['ItemConditionArray'] = $request->itemConditionArray;
        }
        if (!Utils::isUnset($request->itemConditionExpress)) {
            $body['ItemConditionExpress'] = $request->itemConditionExpress;
        }
        if (!Utils::isUnset($request->itemConditionType)) {
            $body['ItemConditionType'] = $request->itemConditionType;
        }
        if (!Utils::isUnset($request->itemTableMetaId)) {
            $body['ItemTableMetaId'] = $request->itemTableMetaId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statisBaeaviorConditionArray)) {
            $body['StatisBaeaviorConditionArray'] = $request->statisBaeaviorConditionArray;
        }
        if (!Utils::isUnset($request->statisBehaviorConditionExpress)) {
            $body['StatisBehaviorConditionExpress'] = $request->statisBehaviorConditionExpress;
        }
        if (!Utils::isUnset($request->statisBehaviorConditionType)) {
            $body['StatisBehaviorConditionType'] = $request->statisBehaviorConditionType;
        }
        if (!Utils::isUnset($request->trafficControlTargets)) {
            $body['TrafficControlTargets'] = $request->trafficControlTargets;
        }
        if (!Utils::isUnset($request->userConditionArray)) {
            $body['UserConditionArray'] = $request->userConditionArray;
        }
        if (!Utils::isUnset($request->userConditionExpress)) {
            $body['UserConditionExpress'] = $request->userConditionExpress;
        }
        if (!Utils::isUnset($request->userConditionType)) {
            $body['UserConditionType'] = $request->userConditionType;
        }
        if (!Utils::isUnset($request->userTableMetaId)) {
            $body['UserTableMetaId'] = $request->userTableMetaId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficControlTask',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流量调控任务
     *  *
     * @param string                          $TrafficControlTaskId
     * @param UpdateTrafficControlTaskRequest $request              UpdateTrafficControlTaskRequest
     *
     * @return UpdateTrafficControlTaskResponse UpdateTrafficControlTaskResponse
     */
    public function updateTrafficControlTask($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTaskWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流量调控任务的流量参数
     *  *
     * @param string                                 $TrafficControlTaskId
     * @param UpdateTrafficControlTaskTrafficRequest $request              UpdateTrafficControlTaskTrafficRequest
     * @param string[]                               $headers              map
     * @param RuntimeOptions                         $runtime              runtime options for this request RuntimeOptions
     *
     * @return UpdateTrafficControlTaskTrafficResponse UpdateTrafficControlTaskTrafficResponse
     */
    public function updateTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newParam3)) {
            $query['new-param-3'] = $request->newParam3;
        }
        $body = [];
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->traffics)) {
            $body['Traffics'] = $request->traffics;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrafficControlTaskTraffic',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trafficcontroltasks/' . OpenApiUtilClient::getEncodeParam($TrafficControlTaskId) . '/action/traffic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTrafficControlTaskTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流量调控任务的流量参数
     *  *
     * @param string                                 $TrafficControlTaskId
     * @param UpdateTrafficControlTaskTrafficRequest $request              UpdateTrafficControlTaskTrafficRequest
     *
     * @return UpdateTrafficControlTaskTrafficResponse UpdateTrafficControlTaskTrafficResponse
     */
    public function updateTrafficControlTaskTraffic($TrafficControlTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrafficControlTaskTrafficWithOptions($TrafficControlTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 上传数据
     *  *
     * @param UploadRecommendationDataRequest $request UploadRecommendationDataRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadRecommendationDataResponse UploadRecommendationDataResponse
     */
    public function uploadRecommendationDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataType)) {
            $body['DataType'] = $request->dataType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadRecommendationData',
            'version'     => '2022-12-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/recommendationdata/action/upload',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadRecommendationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传数据
     *  *
     * @param UploadRecommendationDataRequest $request UploadRecommendationDataRequest
     *
     * @return UploadRecommendationDataResponse UploadRecommendationDataResponse
     */
    public function uploadRecommendationData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadRecommendationDataWithOptions($request, $headers, $runtime);
    }
}

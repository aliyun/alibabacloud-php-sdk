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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTableMetaResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\DeleteTableMetaResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSubCrowdRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSubCrowdResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTableMetaResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportABMetricGroupResponse;
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
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateSceneRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateSceneResponse;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTableMetaRequest;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTableMetaResponse;
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
     * @param BackflowFeatureConsistencyCheckJobDataRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return BackflowFeatureConsistencyCheckJobDataResponse
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
     * @param string                        $InstanceId
     * @param CheckInstanceResourcesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CheckInstanceResourcesResponse
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
     * @param string                 $ExperimentId
     * @param CloneExperimentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CloneExperimentResponse
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
     * @param string                      $ExperimentGroupId
     * @param CloneExperimentGroupRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CloneExperimentGroupResponse
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
     * @param string                                       $SourceFeatureConsistencyCheckJobConfigId
     * @param CloneFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponse
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
     * @param string                 $LaboratoryId
     * @param CloneLaboratoryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CloneLaboratoryResponse
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
     * @param CreateABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateABMetricResponse
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
     * @param CreateABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateABMetricGroupResponse
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
     * @param CreateCalculationJobsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCalculationJobsResponse
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
     * @param CreateCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateCrowdResponse
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
     * @param CreateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExperimentResponse
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
     * @param CreateExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateExperimentGroupResponse
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
     * @param CreateFeatureConsistencyCheckJobRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateFeatureConsistencyCheckJobResponse
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
     * @param CreateFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponse
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
     * @param string                        $InstanceId
     * @param CreateInstanceResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInstanceResourceResponse
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
     * @param CreateLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLaboratoryResponse
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
     * @param CreateLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateLayerResponse
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
     * @param CreateParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateParamResponse
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
     * @param CreateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
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
     * @param string                $CrowdId
     * @param CreateSubCrowdRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSubCrowdResponse
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
     * @param CreateTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTableMetaResponse
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
     * @param string                $ABMetricId
     * @param DeleteABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteABMetricResponse
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
     * @param string                     $ABMetricGroupId
     * @param DeleteABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteABMetricGroupResponse
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
     * @param string             $CrowdId
     * @param DeleteCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteCrowdResponse
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
     * @param string                  $ExperimentId
     * @param DeleteExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExperimentResponse
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
     * @param string                       $ExperimentGroupId
     * @param DeleteExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteExperimentGroupResponse
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
     * @param string                  $LaboratoryId
     * @param DeleteLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLaboratoryResponse
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
     * @param string             $LayerId
     * @param DeleteLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteLayerResponse
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
     * @param string             $ParamId
     * @param DeleteParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteParamResponse
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
     * @param string             $SceneId
     * @param DeleteSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSceneResponse
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
     * @param string                 $TableMetaId
     * @param DeleteTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTableMetaResponse
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
     * @param string             $ABMetricId
     * @param GetABMetricRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetABMetricResponse
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
     * @param string                  $ABMetricGroupId
     * @param GetABMetricGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetABMetricGroupResponse
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
     * @param string                   $CalculationJobId
     * @param GetCalculationJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetCalculationJobResponse
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
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetExperimentResponse
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
     * @param string                    $ExperimentGroupId
     * @param GetExperimentGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetExperimentGroupResponse
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
     * @param string                               $FeatureConsistencyCheckJobId
     * @param GetFeatureConsistencyCheckJobRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetFeatureConsistencyCheckJobResponse
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
     * @param string                                     $FeatureConsistencyCheckJobConfigId
     * @param GetFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return GetFeatureConsistencyCheckJobConfigResponse
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
     * @param string               $LaboratoryId
     * @param GetLaboratoryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetLaboratoryResponse
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
     * @param string          $LayerId
     * @param GetLayerRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetLayerResponse
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
     * @param string          $SceneId
     * @param GetSceneRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetSceneResponse
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
     * @param string              $TableMetaId
     * @param GetTableMetaRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetTableMetaResponse
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
     * @param ListABMetricGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListABMetricGroupsResponse
     */
    public function listABMetricGroupsWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->realtime)) {
            $query['Realtime'] = $request->realtime;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
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
     * @param ListABMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListABMetricsResponse
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
     * @param ListCalculationJobsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListCalculationJobsResponse
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
     * @param string                $CrowdId
     * @param ListCrowdUsersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCrowdUsersResponse
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
     * @param ListCrowdsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListCrowdsResponse
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
     * @param ListExperimentGroupsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListExperimentGroupsResponse
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
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
     * @param ListExperimentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListExperimentsResponse
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
     * @param ListFeatureConsistencyCheckJobConfigsRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ListFeatureConsistencyCheckJobConfigsResponse
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
     * @param string                                              $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobFeatureReportsRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponse
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
     * @param string                                            $FeatureConsistencyCheckJobId
     * @param ListFeatureConsistencyCheckJobScoreReportsRequest $tmpReq
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponse
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
     * @param ListFeatureConsistencyCheckJobsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListFeatureConsistencyCheckJobsResponse
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
     * @param string                       $InstanceId
     * @param ListInstanceResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstanceResourcesResponse
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
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
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
     * @param ListLaboratoriesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListLaboratoriesResponse
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
     * @param ListLayersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListLayersResponse
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
     * @param ListParamsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListParamsResponse
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
     * @param ListScenesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
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
     * @param string               $CrowdId
     * @param ListSubCrowdsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSubCrowdsResponse
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
     * @param ListTableMetasRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableMetasResponse
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
     * @param string                   $ExperimentId
     * @param OfflineExperimentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return OfflineExperimentResponse
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
     * @param string                        $ExperimentGroupId
     * @param OfflineExperimentGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return OfflineExperimentGroupResponse
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
     * @param string                   $LaboratoryId
     * @param OfflineLaboratoryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return OfflineLaboratoryResponse
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
     * @param string                  $ExperimentId
     * @param OnlineExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return OnlineExperimentResponse
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
     * @param string                       $ExperimentGroupId
     * @param OnlineExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return OnlineExperimentGroupResponse
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
     * @param string                  $LaboratoryId
     * @param OnlineLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return OnlineLaboratoryResponse
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
     * @param string                   $ExperimentId
     * @param PushAllExperimentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PushAllExperimentResponse
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
     * @param string                     $ABMetricGroupId
     * @param ReportABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ReportABMetricGroupResponse
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
     * @param SyncFeatureConsistencyCheckJobReplayLogRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogResponse
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
     * @param string                                     $FeatureConsistencyCheckJobId
     * @param TerminateFeatureConsistencyCheckJobRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return TerminateFeatureConsistencyCheckJobResponse
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
     * @param string                $ABMetricId
     * @param UpdateABMetricRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateABMetricResponse
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
     * @param string                     $ABMetricGroupId
     * @param UpdateABMetricGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateABMetricGroupResponse
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
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateCrowdResponse
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
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateExperimentResponse
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
     * @param string                       $ExperimentGroupId
     * @param UpdateExperimentGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateExperimentGroupResponse
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
     * @param string                                        $FeatureConsistencyCheckJobConfigId
     * @param UpdateFeatureConsistencyCheckJobConfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateFeatureConsistencyCheckJobConfigResponse
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
     * @param string                  $LaboratoryId
     * @param UpdateLaboratoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLaboratoryResponse
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
     * @param string             $LayerId
     * @param UpdateLayerRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateLayerResponse
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
     * @param string             $ParamId
     * @param UpdateParamRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateParamResponse
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
     * @param string             $SceneId
     * @param UpdateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
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
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTableMetaResponse
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
}

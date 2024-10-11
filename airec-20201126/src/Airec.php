<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Airec\V20201126\Models\AttachDatasetResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\AttachIndexVersionResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CheckRankingModelReachableResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CloneExperimentRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CloneExperimentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CloneSampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ColdStartRankRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ColdStartRankResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateCustomAnalysisTaskRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateCustomAnalysisTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateCustomSampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateDataDiagnoseTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateExtraDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFlowControlTaskRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRankingModelRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRankingModelResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRankingModelTemplateResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateSampleFormatConfigRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateSampleFormatConfigResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateSceneRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateSceneResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateUmengTokenRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\CreateUmengTokenResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DecribeRankingModelResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteDataSetResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteExtraDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteRankingModelResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteRankingModelTemplateResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteRankingModelVersionResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteSampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeployRankingSystemRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeployRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeBaseExperimentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeCustomAnalysisTaskRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeCustomAnalysisTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeDataSetMessageResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeDefaultAlgorithmsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeExperimentEnvProgressResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeExperimentEnvResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeExperimentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeFilteringAlgorithmResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeLatestTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeQuotaResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRuleRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRuleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSceneBucketResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSceneResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSceneThroughputResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportDetailRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportDetailResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportOutliersRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportOutliersResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeUserMetricsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeUserMetricsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\DowngradeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\EnableExperimentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GenerateSampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetExtraDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetLatestDataDiagnoseTaskStatusResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetRankingModelTemplateResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetRankingModelVersionResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetRankingSystemHistoryResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetSampleRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetSampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\InitComputingResourceRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\InitComputingResourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsFlowsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsFlowsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsFlowsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsFlowsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataDiagnoseReportsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataDiagnoseReportsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataDiagnoseSampleDetailsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataDiagnoseSampleDetailsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataSetResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListExtraDataSourcesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListExtraDataSourcesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFeatureTablesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFeatureTablesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFilteringAlgorithmsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFilteringAlgorithmsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskInvalidItemsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskInvalidItemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemReportsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemReportsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReferenceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListIndexVersionsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListLogsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListLogsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListMixCategoriesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListOfflineStoragesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelTemplatesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelTemplatesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelVersionsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingModelVersionsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingSystemHistoriesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingSystemHistoriesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingSystemsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRankingSystemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRuleConditionsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRulesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRulesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRuleTasksRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListRuleTasksResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSampleFormatConfigsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSamplesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSamplesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSceneItemsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSceneItemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListSceneParametersResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListScenesRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListScenesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListUmengAppkeysResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListUserClustersResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFeatureTableResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFilteringAlgorithmMetaResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFlowControlTaskRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyItemsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyOfflineStoragesResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingModelResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingModelTemplateRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingModelTemplateResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingSystemRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifySampleRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifySampleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifySceneResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\OfflineFilteringAlgorithmResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\PublishFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\PublishRuleRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\PublishRuleResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\PushColdStartDocumentRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\PushColdStartDocumentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\PushDocumentResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\PushInterventionResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryDataMessageRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryDataMessageResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryDataMessageStatisticsRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryDataMessageStatisticsResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryExceptionHistoryRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryExceptionHistoryResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryRawDataRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QueryRawDataResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QuerySingleAggregationReportResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QuerySingleReportRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QuerySingleReportResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\QuerySyncReportAggregationRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\QuerySyncReportAggregationResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RebuildIndexResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RecommendRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\RecommendResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RefreshFeatureTableResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RollbackRankingSystemRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\RollbackRankingSystemResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RunInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RunRankingModelTemplateResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\RunSampleFormatConfigRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\RunSampleFormatConfigResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\StopDataSetResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\StopFlowControlTaskResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\UnLockIndexVersionResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentBasicInfoResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentConfigResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentStatusResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\UpgradeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\ValidateInstanceResponse;
use AlibabaCloud\SDK\Airec\V20201126\Models\VerifyRankingSystemRequest;
use AlibabaCloud\SDK\Airec\V20201126\Models\VerifyRankingSystemResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Airec extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('airec', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Uses a dataset of a specified version of a specified instance to provide online services.
     *  *
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return AttachDatasetResponse AttachDatasetResponse
     */
    public function attachDatasetWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AttachDataset',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSets/' . OpenApiUtilClient::getEncodeParam($versionId) . '/actions/current',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uses a dataset of a specified version of a specified instance to provide online services.
     *  *
     * @param string $instanceId
     * @param string $versionId
     *
     * @return AttachDatasetResponse AttachDatasetResponse
     */
    public function attachDataset($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachDatasetWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string         $versionId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return AttachIndexVersionResponse AttachIndexVersionResponse
     */
    public function attachIndexVersionWithOptions($instanceId, $algorithmId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AttachIndexVersion',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/index-versions/' . OpenApiUtilClient::getEncodeParam($versionId) . '/actions/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $algorithmId
     * @param string $versionId
     *
     * @return AttachIndexVersionResponse AttachIndexVersionResponse
     */
    public function attachIndexVersion($instanceId, $algorithmId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachIndexVersionWithOptions($instanceId, $algorithmId, $versionId, $headers, $runtime);
    }

    /**
     * @summary Checks the network connectivity of a ranking model.
     *  *
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return CheckRankingModelReachableResponse CheckRankingModelReachableResponse
     */
    public function checkRankingModelReachableWithOptions($instanceId, $rankingModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CheckRankingModelReachable',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models/' . OpenApiUtilClient::getEncodeParam($rankingModelId) . '/actions/check-connectivity',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckRankingModelReachableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks the network connectivity of a ranking model.
     *  *
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return CheckRankingModelReachableResponse CheckRankingModelReachableResponse
     */
    public function checkRankingModelReachable($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkRankingModelReachableWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @summary Clones an experiment.
     *  *
     * @param string                 $instanceId
     * @param string                 $sceneId
     * @param string                 $experimentId
     * @param CloneExperimentRequest $request      CloneExperimentRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return CloneExperimentResponse CloneExperimentResponse
     */
    public function cloneExperimentWithOptions($instanceId, $sceneId, $experimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneExperiment',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/actions/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clones an experiment.
     *  *
     * @param string                 $instanceId
     * @param string                 $sceneId
     * @param string                 $experimentId
     * @param CloneExperimentRequest $request      CloneExperimentRequest
     *
     * @return CloneExperimentResponse CloneExperimentResponse
     */
    public function cloneExperiment($instanceId, $sceneId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentWithOptions($instanceId, $sceneId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * @summary Clones a sample.
     *  *
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CloneSampleResponse CloneSampleResponse
     */
    public function cloneSampleWithOptions($instanceId, $sampleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CloneSample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '/actions/clone',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clones a sample.
     *  *
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return CloneSampleResponse CloneSampleResponse
     */
    public function cloneSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @summary 该接口用于获取指定冷启动实例的排序结果。
     *  *
     * @param string               $instanceId
     * @param ColdStartRankRequest $request    ColdStartRankRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ColdStartRankResponse ColdStartRankResponse
     */
    public function coldStartRankWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->features)) {
            $query['features'] = $request->features;
        }
        if (!Utils::isUnset($request->imei)) {
            $query['imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->items)) {
            $query['items'] = $request->items;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ColdStartRank',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/cold-start/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/rank',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ColdStartRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 该接口用于获取指定冷启动实例的排序结果。
     *  *
     * @param string               $instanceId
     * @param ColdStartRankRequest $request    ColdStartRankRequest
     *
     * @return ColdStartRankResponse ColdStartRankResponse
     */
    public function coldStartRank($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->coldStartRankWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建自定义分析任务
     *  *
     * @param string                          $instanceId
     * @param CreateCustomAnalysisTaskRequest $request    CreateCustomAnalysisTaskRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateCustomAnalysisTaskResponse CreateCustomAnalysisTaskResponse
     */
    public function createCustomAnalysisTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomAnalysisTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/custom-analysis-tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCustomAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义分析任务
     *  *
     * @param string                          $instanceId
     * @param CreateCustomAnalysisTaskRequest $request    CreateCustomAnalysisTaskRequest
     *
     * @return CreateCustomAnalysisTaskResponse CreateCustomAnalysisTaskResponse
     */
    public function createCustomAnalysisTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomAnalysisTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建自定义样本
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateCustomSampleResponse CreateCustomSampleResponse
     */
    public function createCustomSampleWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateCustomSample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCustomSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义样本
     *  *
     * @param string $instanceId
     *
     * @return CreateCustomSampleResponse CreateCustomSampleResponse
     */
    public function createCustomSample($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomSampleWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 创建数据诊断任务
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateDataDiagnoseTaskResponse CreateDataDiagnoseTaskResponse
     */
    public function createDataDiagnoseTaskWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateDataDiagnoseTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-diagnose-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataDiagnoseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据诊断任务
     *  *
     * @param string $instanceId
     *
     * @return CreateDataDiagnoseTaskResponse CreateDataDiagnoseTaskResponse
     */
    public function createDataDiagnoseTask($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataDiagnoseTaskWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Creates a data source.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateExtraDataSourceResponse CreateExtraDataSourceResponse
     */
    public function createExtraDataSourceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateExtraDataSource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/extra-data-sources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExtraDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a data source.
     *  *
     * @param string $instanceId
     *
     * @return CreateExtraDataSourceResponse CreateExtraDataSourceResponse
     */
    public function createExtraDataSource($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExtraDataSourceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary The time when the filtering table was created.
     *  *
     * @param string                          $instanceId
     * @param CreateFilteringAlgorithmRequest $request    CreateFilteringAlgorithmRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateFilteringAlgorithmResponse CreateFilteringAlgorithmResponse
     */
    public function createFilteringAlgorithmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFilteringAlgorithm',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFilteringAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The time when the filtering table was created.
     *  *
     * @param string                          $instanceId
     * @param CreateFilteringAlgorithmRequest $request    CreateFilteringAlgorithmRequest
     *
     * @return CreateFilteringAlgorithmResponse CreateFilteringAlgorithmResponse
     */
    public function createFilteringAlgorithm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFilteringAlgorithmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a throttling task.
     *  *
     * @param string                       $instanceId
     * @param CreateFlowControlTaskRequest $request    CreateFlowControlTaskRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateFlowControlTaskResponse CreateFlowControlTaskResponse
     */
    public function createFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a throttling task.
     *  *
     * @param string                       $instanceId
     * @param CreateFlowControlTaskRequest $request    CreateFlowControlTaskRequest
     *
     * @return CreateFlowControlTaskResponse CreateFlowControlTaskResponse
     */
    public function createFlowControlTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an Artificial Intelligence Recommendation (AIRec) instance.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an Artificial Intelligence Recommendation (AIRec) instance.
     *  *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($headers, $runtime);
    }

    /**
     * @param string                    $instanceId
     * @param CreateRankingModelRequest $request    CreateRankingModelRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateRankingModelResponse CreateRankingModelResponse
     */
    public function createRankingModelWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRankingModel',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRankingModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $instanceId
     * @param CreateRankingModelRequest $request    CreateRankingModelRequest
     *
     * @return CreateRankingModelResponse CreateRankingModelResponse
     */
    public function createRankingModel($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingModelWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建排序模型模板配置
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateRankingModelTemplateResponse CreateRankingModelTemplateResponse
     */
    public function createRankingModelTemplateWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRankingModelTemplate',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRankingModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建排序模型模板配置
     *  *
     * @param string $instanceId
     *
     * @return CreateRankingModelTemplateResponse CreateRankingModelTemplateResponse
     */
    public function createRankingModelTemplate($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingModelTemplateWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 创建排序服务
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateRankingSystemResponse CreateRankingSystemResponse
     */
    public function createRankingSystemWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建排序服务
     *  *
     * @param string $instanceId
     *
     * @return CreateRankingSystemResponse CreateRankingSystemResponse
     */
    public function createRankingSystem($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingSystemWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Creates a rule.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRuleWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a rule.
     *  *
     * @param string $instanceId
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRuleWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 创建样本格式化配置
     *  *
     * @param string                          $instanceId
     * @param string                          $sampleId
     * @param CreateSampleFormatConfigRequest $request    CreateSampleFormatConfigRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateSampleFormatConfigResponse CreateSampleFormatConfigResponse
     */
    public function createSampleFormatConfigWithOptions($instanceId, $sampleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSampleFormatConfig',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '/format-configs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSampleFormatConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建样本格式化配置
     *  *
     * @param string                          $instanceId
     * @param string                          $sampleId
     * @param CreateSampleFormatConfigRequest $request    CreateSampleFormatConfigRequest
     *
     * @return CreateSampleFormatConfigResponse CreateSampleFormatConfigResponse
     */
    public function createSampleFormatConfig($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSampleFormatConfigWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @summary Verifies the information that you specified for creating a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string             $instanceId
     * @param CreateSceneRequest $request    CreateSceneRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateSceneResponse CreateSceneResponse
     */
    public function createSceneWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScene',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies the information that you specified for creating a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string             $instanceId
     * @param CreateSceneRequest $request    CreateSceneRequest
     *
     * @return CreateSceneResponse CreateSceneResponse
     */
    public function createScene($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSceneWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建友盟授权token
     *  *
     * @param CreateUmengTokenRequest $request CreateUmengTokenRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUmengTokenResponse CreateUmengTokenResponse
     */
    public function createUmengTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['code'] = $request->code;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUmengToken',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/umeng/token',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUmengTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建友盟授权token
     *  *
     * @param CreateUmengTokenRequest $request CreateUmengTokenRequest
     *
     * @return CreateUmengTokenResponse CreateUmengTokenResponse
     */
    public function createUmengToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmengTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of a ranking model.
     *  *
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DecribeRankingModelResponse DecribeRankingModelResponse
     */
    public function decribeRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DecribeRankingModel',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models/' . OpenApiUtilClient::getEncodeParam($rankingModelId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DecribeRankingModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a ranking model.
     *  *
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return DecribeRankingModelResponse DecribeRankingModelResponse
     */
    public function decribeRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->decribeRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @summary Deletes a dataset of a specified version for an instance.
     *  *
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSetResponse DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSet',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSets/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a dataset of a specified version for an instance.
     *  *
     * @param string $instanceId
     * @param string $versionId
     *
     * @return DeleteDataSetResponse DeleteDataSetResponse
     */
    public function deleteDataSet($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSetWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @summary The ID of the test.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the test.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperiment($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @summary 删除特征、样本等表扩展数据源
     *  *
     * @param string         $instanceId
     * @param string         $type
     * @param string         $dataSourceId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteExtraDataSourceResponse DeleteExtraDataSourceResponse
     */
    public function deleteExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExtraDataSource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/extra-data-sources/' . OpenApiUtilClient::getEncodeParam($type) . '/' . OpenApiUtilClient::getEncodeParam($dataSourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExtraDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除特征、样本等表扩展数据源
     *  *
     * @param string $instanceId
     * @param string $type
     * @param string $dataSourceId
     *
     * @return DeleteExtraDataSourceResponse DeleteExtraDataSourceResponse
     */
    public function deleteExtraDataSource($instanceId, $type, $dataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime);
    }

    /**
     * @summary Deletes the configurations of a specified filtering table and the information about the related index table.
     *  *
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteFilteringAlgorithmResponse DeleteFilteringAlgorithmResponse
     */
    public function deleteFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFilteringAlgorithm',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFilteringAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the configurations of a specified filtering table and the information about the related index table.
     *  *
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return DeleteFilteringAlgorithmResponse DeleteFilteringAlgorithmResponse
     */
    public function deleteFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Deletes a throttling task.
     *  *
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowControlTaskResponse DeleteFlowControlTaskResponse
     */
    public function deleteFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a throttling task.
     *  *
     * @param string $instanceId
     * @param string $taskId
     *
     * @return DeleteFlowControlTaskResponse DeleteFlowControlTaskResponse
     */
    public function deleteFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteRankingModelResponse DeleteRankingModelResponse
     */
    public function deleteRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRankingModel',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models/' . OpenApiUtilClient::getEncodeParam($rankingModelId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRankingModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return DeleteRankingModelResponse DeleteRankingModelResponse
     */
    public function deleteRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @summary 删除排序模型模板
     *  *
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteRankingModelTemplateResponse DeleteRankingModelTemplateResponse
     */
    public function deleteRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRankingModelTemplate',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates/' . OpenApiUtilClient::getEncodeParam($templateId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRankingModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除排序模型模板
     *  *
     * @param string $instanceId
     * @param string $templateId
     *
     * @return DeleteRankingModelTemplateResponse DeleteRankingModelTemplateResponse
     */
    public function deleteRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @summary 删除排序模型版本
     *  *
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteRankingModelVersionResponse DeleteRankingModelVersionResponse
     */
    public function deleteRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRankingModelVersion',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-versions/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRankingModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除排序模型版本
     *  *
     * @param string $instanceId
     * @param string $versionId
     *
     * @return DeleteRankingModelVersionResponse DeleteRankingModelVersionResponse
     */
    public function deleteRankingModelVersion($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @summary 删除某个排序服务
     *  *
     * @param string         $instanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteRankingSystemResponse DeleteRankingSystemResponse
     */
    public function deleteRankingSystemWithOptions($instanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除某个排序服务
     *  *
     * @param string $instanceId
     * @param string $name
     *
     * @return DeleteRankingSystemResponse DeleteRankingSystemResponse
     */
    public function deleteRankingSystem($instanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingSystemWithOptions($instanceId, $name, $headers, $runtime);
    }

    /**
     * @summary 删除样本
     *  *
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteSampleResponse DeleteSampleResponse
     */
    public function deleteSampleWithOptions($instanceId, $sampleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除样本
     *  *
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return DeleteSampleResponse DeleteSampleResponse
     */
    public function deleteSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @summary Deletes a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteSceneResponse DeleteSceneResponse
     */
    public function deleteSceneWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteScene',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DeleteSceneResponse DeleteSceneResponse
     */
    public function deleteScene($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param DeployRankingSystemRequest $request    DeployRankingSystemRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeployRankingSystemResponse DeployRankingSystemResponse
     */
    public function deployRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '/actions/deploy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeployRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param DeployRankingSystemRequest $request    DeployRankingSystemRequest
     *
     * @return DeployRankingSystemResponse DeployRankingSystemResponse
     */
    public function deployRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeBaseExperimentResponse DescribeBaseExperimentResponse
     */
    public function describeBaseExperimentWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeBaseExperiment',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/base-experiment',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBaseExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeBaseExperimentResponse DescribeBaseExperimentResponse
     */
    public function describeBaseExperiment($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBaseExperimentWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary 查询自定义分析任务
     *  *
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param DescribeCustomAnalysisTaskRequest $request    DescribeCustomAnalysisTaskRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomAnalysisTaskResponse DescribeCustomAnalysisTaskResponse
     */
    public function describeCustomAnalysisTaskWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomAnalysisTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/custom-analysis-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义分析任务
     *  *
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param DescribeCustomAnalysisTaskRequest $request    DescribeCustomAnalysisTaskRequest
     *
     * @return DescribeCustomAnalysisTaskResponse DescribeCustomAnalysisTaskResponse
     */
    public function describeCustomAnalysisTask($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCustomAnalysisTaskWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSetMessageResponse DescribeDataSetMessageResponse
     */
    public function describeDataSetMessageWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSetMessage',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSets/' . OpenApiUtilClient::getEncodeParam($versionId) . '/messages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSetMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $versionId
     *
     * @return DescribeDataSetMessageResponse DescribeDataSetMessageResponse
     */
    public function describeDataSetMessage($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataSetMessageWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @summary Queries the information of default algorithms.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDefaultAlgorithmsResponse DescribeDefaultAlgorithmsResponse
     */
    public function describeDefaultAlgorithmsWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDefaultAlgorithms',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/default-algorithms',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDefaultAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of default algorithms.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeDefaultAlgorithmsResponse DescribeDefaultAlgorithmsResponse
     */
    public function describeDefaultAlgorithms($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDefaultAlgorithmsWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary Queries the details about an experiment.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DescribeExperimentResponse DescribeExperimentResponse
     */
    public function describeExperimentWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeExperiment',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about an experiment.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return DescribeExperimentResponse DescribeExperimentResponse
     */
    public function describeExperiment($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExperimentWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeExperimentEnvResponse DescribeExperimentEnvResponse
     */
    public function describeExperimentEnvWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeExperimentEnv',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiment-env',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExperimentEnvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeExperimentEnvResponse DescribeExperimentEnvResponse
     */
    public function describeExperimentEnv($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExperimentEnvWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeExperimentEnvProgressResponse DescribeExperimentEnvProgressResponse
     */
    public function describeExperimentEnvProgressWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeExperimentEnvProgress',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiment-progress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExperimentEnvProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeExperimentEnvProgressResponse DescribeExperimentEnvProgressResponse
     */
    public function describeExperimentEnvProgress($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExperimentEnvProgressWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary The fluctuation threshold for the data entries in the source table.
     *  *
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeFilteringAlgorithmResponse DescribeFilteringAlgorithmResponse
     */
    public function describeFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeFilteringAlgorithm',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFilteringAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The fluctuation threshold for the data entries in the source table.
     *  *
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return DescribeFilteringAlgorithmResponse DescribeFilteringAlgorithmResponse
     */
    public function describeFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Queries the details about an instance based on the instance ID.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about an instance based on the instance ID.
     *  *
     * @param string $instanceId
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeLatestTaskResponse DescribeLatestTaskResponse
     */
    public function describeLatestTaskWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeLatestTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/tasks/latest',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeLatestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return DescribeLatestTaskResponse DescribeLatestTaskResponse
     */
    public function describeLatestTask($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeLatestTaskWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Queries the quotas of an instance based on a specified instance ID.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeQuotaResponse DescribeQuotaResponse
     */
    public function describeQuotaWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeQuota',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/quota',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quotas of an instance based on a specified instance ID.
     *  *
     * @param string $instanceId
     *
     * @return DescribeQuotaResponse DescribeQuotaResponse
     */
    public function describeQuota($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQuotaWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries available Alibaba Cloud regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['acceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/configurations/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available Alibaba Cloud regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string              $instanceId
     * @param string              $ruleId
     * @param DescribeRuleRequest $request    DescribeRuleRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleResponse DescribeRuleResponse
     */
    public function describeRuleWithOptions($instanceId, $ruleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleType)) {
            $query['ruleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRule',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rules/' . OpenApiUtilClient::getEncodeParam($ruleId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string              $instanceId
     * @param string              $ruleId
     * @param DescribeRuleRequest $request    DescribeRuleRequest
     *
     * @return DescribeRuleResponse DescribeRuleResponse
     */
    public function describeRule($instanceId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRuleWithOptions($instanceId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details about a specified scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneResponse DescribeSceneResponse
     */
    public function describeSceneWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeScene',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a specified scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeSceneResponse DescribeSceneResponse
     */
    public function describeScene($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneBucketResponse DescribeSceneBucketResponse
     */
    public function describeSceneBucketWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneBucket',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiment-bucket',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeSceneBucketResponse DescribeSceneBucketResponse
     */
    public function describeSceneBucket($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneBucketWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary The error message.
     *  *
     * @description __null__
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSceneThroughputResponse DescribeSceneThroughputResponse
     */
    public function describeSceneThroughputWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneThroughput',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/throughput',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneThroughputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The error message.
     *  *
     * @description __null__
     *  *
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeSceneThroughputResponse DescribeSceneThroughputResponse
     */
    public function describeSceneThroughput($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneThroughputWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param DescribeSyncReportDetailRequest $request    DescribeSyncReportDetailRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncReportDetailResponse DescribeSyncReportDetailResponse
     */
    public function describeSyncReportDetailWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->levelType)) {
            $query['levelType'] = $request->levelType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSyncReportDetail',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncReportDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $instanceId
     * @param DescribeSyncReportDetailRequest $request    DescribeSyncReportDetailRequest
     *
     * @return DescribeSyncReportDetailResponse DescribeSyncReportDetailResponse
     */
    public function describeSyncReportDetail($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportDetailWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param DescribeSyncReportOutliersRequest $request    DescribeSyncReportOutliersRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncReportOutliersResponse DescribeSyncReportOutliersResponse
     */
    public function describeSyncReportOutliersWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->levelType)) {
            $query['levelType'] = $request->levelType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSyncReportOutliers',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/outliers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncReportOutliersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $instanceId
     * @param DescribeSyncReportOutliersRequest $request    DescribeSyncReportOutliersRequest
     *
     * @return DescribeSyncReportOutliersResponse DescribeSyncReportOutliersResponse
     */
    public function describeSyncReportOutliers($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportOutliersWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries user metrics related to the conversion rate.
     *  *
     * @param string                     $instanceId
     * @param DescribeUserMetricsRequest $request    DescribeUserMetricsRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeUserMetricsResponse DescribeUserMetricsResponse
     */
    public function describeUserMetricsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserMetrics',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUserMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries user metrics related to the conversion rate.
     *  *
     * @param string                     $instanceId
     * @param DescribeUserMetricsRequest $request    DescribeUserMetricsRequest
     *
     * @return DescribeUserMetricsResponse DescribeUserMetricsResponse
     */
    public function describeUserMetrics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserMetricsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @description The returned results.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DowngradeInstanceResponse DowngradeInstanceResponse
     */
    public function downgradeInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DowngradeInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/downgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DowngradeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @description The returned results.
     *  *
     * @param string $instanceId
     *
     * @return DowngradeInstanceResponse DowngradeInstanceResponse
     */
    public function downgradeInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downgradeInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return EnableExperimentResponse EnableExperimentResponse
     */
    public function enableExperimentWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableExperiment',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/actions/enable-experiment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return EnableExperimentResponse EnableExperimentResponse
     */
    public function enableExperiment($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableExperimentWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary 生成样本，只针对复制创建的样本
     *  *
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GenerateSampleResponse GenerateSampleResponse
     */
    public function generateSampleWithOptions($instanceId, $sampleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GenerateSample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '/actions/generate',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成样本，只针对复制创建的样本
     *  *
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return GenerateSampleResponse GenerateSampleResponse
     */
    public function generateSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @summary Queries the details of other data sources.
     *  *
     * @param string         $instanceId
     * @param string         $type
     * @param string         $dataSourceId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExtraDataSourceResponse GetExtraDataSourceResponse
     */
    public function getExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExtraDataSource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/extra-data-sources/' . OpenApiUtilClient::getEncodeParam($type) . '/' . OpenApiUtilClient::getEncodeParam($dataSourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExtraDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of other data sources.
     *  *
     * @param string $instanceId
     * @param string $type
     * @param string $dataSourceId
     *
     * @return GetExtraDataSourceResponse GetExtraDataSourceResponse
     */
    public function getExtraDataSource($instanceId, $type, $dataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime);
    }

    /**
     * @summary Obtains the details of a throttling task.
     *  *
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetFlowControlTaskResponse GetFlowControlTaskResponse
     */
    public function getFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of a throttling task.
     *  *
     * @param string $instanceId
     * @param string $taskId
     *
     * @return GetFlowControlTaskResponse GetFlowControlTaskResponse
     */
    public function getFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @summary 获取最新诊断任务状态
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetLatestDataDiagnoseTaskStatusResponse GetLatestDataDiagnoseTaskStatusResponse
     */
    public function getLatestDataDiagnoseTaskStatusWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLatestDataDiagnoseTaskStatus',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-diagnose-task/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLatestDataDiagnoseTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取最新诊断任务状态
     *  *
     * @param string $instanceId
     *
     * @return GetLatestDataDiagnoseTaskStatusResponse GetLatestDataDiagnoseTaskStatusResponse
     */
    public function getLatestDataDiagnoseTaskStatus($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLatestDataDiagnoseTaskStatusWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 查看排序模型模板配置详情
     *  *
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetRankingModelTemplateResponse GetRankingModelTemplateResponse
     */
    public function getRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRankingModelTemplate',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates/' . OpenApiUtilClient::getEncodeParam($templateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRankingModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看排序模型模板配置详情
     *  *
     * @param string $instanceId
     * @param string $templateId
     *
     * @return GetRankingModelTemplateResponse GetRankingModelTemplateResponse
     */
    public function getRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @summary 查看排序模型版本详情，包括评估结果和训练结果
     *  *
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetRankingModelVersionResponse GetRankingModelVersionResponse
     */
    public function getRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRankingModelVersion',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-versions/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRankingModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看排序模型版本详情，包括评估结果和训练结果
     *  *
     * @param string $instanceId
     * @param string $versionId
     *
     * @return GetRankingModelVersionResponse GetRankingModelVersionResponse
     */
    public function getRankingModelVersion($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @summary 获取某个排序服务详情
     *  *
     * @param string         $instanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetRankingSystemResponse GetRankingSystemResponse
     */
    public function getRankingSystemWithOptions($instanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个排序服务详情
     *  *
     * @param string $instanceId
     * @param string $name
     *
     * @return GetRankingSystemResponse GetRankingSystemResponse
     */
    public function getRankingSystem($instanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingSystemWithOptions($instanceId, $name, $headers, $runtime);
    }

    /**
     * @summary 查询某个服务操作记录
     *  *
     * @param string         $instanceId
     * @param string         $name
     * @param string         $operateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetRankingSystemHistoryResponse GetRankingSystemHistoryResponse
     */
    public function getRankingSystemHistoryWithOptions($instanceId, $name, $operateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRankingSystemHistory',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '/histories/' . OpenApiUtilClient::getEncodeParam($operateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRankingSystemHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询某个服务操作记录
     *  *
     * @param string $instanceId
     * @param string $name
     * @param string $operateId
     *
     * @return GetRankingSystemHistoryResponse GetRankingSystemHistoryResponse
     */
    public function getRankingSystemHistory($instanceId, $name, $operateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingSystemHistoryWithOptions($instanceId, $name, $operateId, $headers, $runtime);
    }

    /**
     * @summary 获取样本详情
     *  *
     * @param string           $instanceId
     * @param string           $sampleId
     * @param GetSampleRequest $request    GetSampleRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetSampleResponse GetSampleResponse
     */
    public function getSampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withExtendParmas)) {
            $query['withExtendParmas'] = $request->withExtendParmas;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取样本详情
     *  *
     * @param string           $instanceId
     * @param string           $sampleId
     * @param GetSampleRequest $request    GetSampleRequest
     *
     * @return GetSampleResponse GetSampleResponse
     */
    public function getSample($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @summary 初始化计算资源
     *  *
     * @param string                       $instanceId
     * @param InitComputingResourceRequest $request    InitComputingResourceRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return InitComputingResourceResponse InitComputingResourceResponse
     */
    public function initComputingResourceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitComputingResource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/computing-resources/actions/init',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InitComputingResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 初始化计算资源
     *  *
     * @param string                       $instanceId
     * @param InitComputingResourceRequest $request    InitComputingResourceRequest
     *
     * @return InitComputingResourceResponse InitComputingResourceResponse
     */
    public function initComputingResource($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initComputingResourceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param ListDashboardDetailsRequest $request    ListDashboardDetailsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDashboardDetailsResponse ListDashboardDetailsResponse
     */
    public function listDashboardDetailsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->experimentIds)) {
            $query['experimentIds'] = $request->experimentIds;
        }
        if (!Utils::isUnset($request->matchTypes)) {
            $query['matchTypes'] = $request->matchTypes;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->sceneIds)) {
            $query['sceneIds'] = $request->sceneIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceIds)) {
            $query['traceIds'] = $request->traceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboardDetails',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/details',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDashboardDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $instanceId
     * @param ListDashboardDetailsRequest $request    ListDashboardDetailsRequest
     *
     * @return ListDashboardDetailsResponse ListDashboardDetailsResponse
     */
    public function listDashboardDetails($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $instanceId
     * @param ListDashboardDetailsFlowsRequest $request    ListDashboardDetailsFlowsRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDashboardDetailsFlowsResponse ListDashboardDetailsFlowsResponse
     */
    public function listDashboardDetailsFlowsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->experimentIds)) {
            $query['experimentIds'] = $request->experimentIds;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->sceneIds)) {
            $query['sceneIds'] = $request->sceneIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceIds)) {
            $query['traceIds'] = $request->traceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboardDetailsFlows',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/details/flows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDashboardDetailsFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $instanceId
     * @param ListDashboardDetailsFlowsRequest $request    ListDashboardDetailsFlowsRequest
     *
     * @return ListDashboardDetailsFlowsResponse ListDashboardDetailsFlowsResponse
     */
    public function listDashboardDetailsFlows($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsFlowsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The end time. The value is a timestamp in seconds.
     *  *
     * @param string                      $instanceId
     * @param ListDashboardMetricsRequest $request    ListDashboardMetricsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDashboardMetricsResponse ListDashboardMetricsResponse
     */
    public function listDashboardMetricsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricQuery)) {
            $query['metricQuery'] = $request->metricQuery;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->metricView)) {
            $query['metricView'] = $request->metricView;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboardMetrics',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDashboardMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The end time. The value is a timestamp in seconds.
     *  *
     * @param string                      $instanceId
     * @param ListDashboardMetricsRequest $request    ListDashboardMetricsRequest
     *
     * @return ListDashboardMetricsResponse ListDashboardMetricsResponse
     */
    public function listDashboardMetrics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The end time. The value is a timestamp in seconds.
     *  *
     * @param string                           $instanceId
     * @param ListDashboardMetricsFlowsRequest $request    ListDashboardMetricsFlowsRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDashboardMetricsFlowsResponse ListDashboardMetricsFlowsResponse
     */
    public function listDashboardMetricsFlowsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboardMetricsFlows',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/metrics/flows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDashboardMetricsFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The end time. The value is a timestamp in seconds.
     *  *
     * @param string                           $instanceId
     * @param ListDashboardMetricsFlowsRequest $request    ListDashboardMetricsFlowsRequest
     *
     * @return ListDashboardMetricsFlowsResponse ListDashboardMetricsFlowsResponse
     */
    public function listDashboardMetricsFlows($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsFlowsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据诊断报告 (包括用户手动触发的诊断、每天产出的周期报告、数据启动时诊断的报告)
     *  *
     * @param string                         $instanceId
     * @param ListDataDiagnoseReportsRequest $request    ListDataDiagnoseReportsRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataDiagnoseReportsResponse ListDataDiagnoseReportsResponse
     */
    public function listDataDiagnoseReportsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskCreateTime)) {
            $query['taskCreateTime'] = $request->taskCreateTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataDiagnoseReports',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-diagnose-reports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataDiagnoseReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据诊断报告 (包括用户手动触发的诊断、每天产出的周期报告、数据启动时诊断的报告)
     *  *
     * @param string                         $instanceId
     * @param ListDataDiagnoseReportsRequest $request    ListDataDiagnoseReportsRequest
     *
     * @return ListDataDiagnoseReportsResponse ListDataDiagnoseReportsResponse
     */
    public function listDataDiagnoseReports($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnoseReportsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取数据诊断项抽样明细
     *  *
     * @param string                               $instanceId
     * @param ListDataDiagnoseSampleDetailsRequest $request    ListDataDiagnoseSampleDetailsRequest
     * @param string[]                             $headers    map
     * @param RuntimeOptions                       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataDiagnoseSampleDetailsResponse ListDataDiagnoseSampleDetailsResponse
     */
    public function listDataDiagnoseSampleDetailsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskCreateTime)) {
            $query['taskCreateTime'] = $request->taskCreateTime;
        }
        if (!Utils::isUnset($request->taskSource)) {
            $query['taskSource'] = $request->taskSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataDiagnoseSampleDetails',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-diagnose-reports/sample-details',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataDiagnoseSampleDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据诊断项抽样明细
     *  *
     * @param string                               $instanceId
     * @param ListDataDiagnoseSampleDetailsRequest $request    ListDataDiagnoseSampleDetailsRequest
     *
     * @return ListDataDiagnoseSampleDetailsResponse ListDataDiagnoseSampleDetailsResponse
     */
    public function listDataDiagnoseSampleDetails($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnoseSampleDetailsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries datasets of a specified instance.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataSetResponse ListDataSetResponse
     */
    public function listDataSetWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataSet',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries datasets of a specified instance.
     *  *
     * @param string $instanceId
     *
     * @return ListDataSetResponse ListDataSetResponse
     */
    public function listDataSet($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSetWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSourceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataSource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSource($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperimentsWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListExperiments',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperiments($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @summary 获取特征、样本等表扩展数据源列表
     *  *
     * @param string                      $instanceId
     * @param ListExtraDataSourcesRequest $request    ListExtraDataSourcesRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListExtraDataSourcesResponse ListExtraDataSourcesResponse
     */
    public function listExtraDataSourcesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExtraDataSources',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/extra-data-sources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExtraDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征、样本等表扩展数据源列表
     *  *
     * @param string                      $instanceId
     * @param ListExtraDataSourcesRequest $request    ListExtraDataSourcesRequest
     *
     * @return ListExtraDataSourcesResponse ListExtraDataSourcesResponse
     */
    public function listExtraDataSources($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExtraDataSourcesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取特征表列表
     *  *
     * @param string                   $instanceId
     * @param ListFeatureTablesRequest $request    ListFeatureTablesRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFeatureTablesResponse ListFeatureTablesResponse
     */
    public function listFeatureTablesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->updateFrequency)) {
            $query['updateFrequency'] = $request->updateFrequency;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureTables',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/feature-tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取特征表列表
     *  *
     * @param string                   $instanceId
     * @param ListFeatureTablesRequest $request    ListFeatureTablesRequest
     *
     * @return ListFeatureTablesResponse ListFeatureTablesResponse
     */
    public function listFeatureTables($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureTablesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param ListFilteringAlgorithmsRequest $request    ListFilteringAlgorithmsRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFilteringAlgorithmsResponse ListFilteringAlgorithmsResponse
     */
    public function listFilteringAlgorithmsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmId)) {
            $query['algorithmId'] = $request->algorithmId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFilteringAlgorithms',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFilteringAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $instanceId
     * @param ListFilteringAlgorithmsRequest $request    ListFilteringAlgorithmsRequest
     *
     * @return ListFilteringAlgorithmsResponse ListFilteringAlgorithmsResponse
     */
    public function listFilteringAlgorithms($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFilteringAlgorithmsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询流控任务列表
     *  *
     * @param string                     $instanceId
     * @param ListFlowControlTaskRequest $request    ListFlowControlTaskRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskResponse ListFlowControlTaskResponse
     */
    public function listFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流控任务列表
     *  *
     * @param string                     $instanceId
     * @param ListFlowControlTaskRequest $request    ListFlowControlTaskRequest
     *
     * @return ListFlowControlTaskResponse ListFlowControlTaskResponse
     */
    public function listFlowControlTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询失效物品 id_type
     *  *
     * @param string                                 $instanceId
     * @param string                                 $taskId
     * @param ListFlowControlTaskInvalidItemsRequest $request    ListFlowControlTaskInvalidItemsRequest
     * @param string[]                               $headers    map
     * @param RuntimeOptions                         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskInvalidItemsResponse ListFlowControlTaskInvalidItemsResponse
     */
    public function listFlowControlTaskInvalidItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTaskInvalidItems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/invalidItems',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskInvalidItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询失效物品 id_type
     *  *
     * @param string                                 $instanceId
     * @param string                                 $taskId
     * @param ListFlowControlTaskInvalidItemsRequest $request    ListFlowControlTaskInvalidItemsRequest
     *
     * @return ListFlowControlTaskInvalidItemsResponse ListFlowControlTaskInvalidItemsResponse
     */
    public function listFlowControlTaskInvalidItems($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskInvalidItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary 流量调控曝光排名物品/失效物品查询
     *  *
     * @param string                                $instanceId
     * @param string                                $taskId
     * @param ListFlowControlTaskItemReportsRequest $request    ListFlowControlTaskItemReportsRequest
     * @param string[]                              $headers    map
     * @param RuntimeOptions                        $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskItemReportsResponse ListFlowControlTaskItemReportsResponse
     */
    public function listFlowControlTaskItemReportsWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->selectTimeType)) {
            $query['selectTimeType'] = $request->selectTimeType;
        }
        if (!Utils::isUnset($request->selectType)) {
            $query['selectType'] = $request->selectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTaskItemReports',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/itemReports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskItemReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 流量调控曝光排名物品/失效物品查询
     *  *
     * @param string                                $instanceId
     * @param string                                $taskId
     * @param ListFlowControlTaskItemReportsRequest $request    ListFlowControlTaskItemReportsRequest
     *
     * @return ListFlowControlTaskItemReportsResponse ListFlowControlTaskItemReportsResponse
     */
    public function listFlowControlTaskItemReports($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskItemReportsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary 流量调控预览
     *  *
     * @param string                          $instanceId
     * @param string                          $taskId
     * @param ListFlowControlTaskItemsRequest $request    ListFlowControlTaskItemsRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskItemsResponse ListFlowControlTaskItemsResponse
     */
    public function listFlowControlTaskItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTaskItems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/actions/items',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 流量调控预览
     *  *
     * @param string                          $instanceId
     * @param string                          $taskId
     * @param ListFlowControlTaskItemsRequest $request    ListFlowControlTaskItemsRequest
     *
     * @return ListFlowControlTaskItemsResponse ListFlowControlTaskItemsResponse
     */
    public function listFlowControlTaskItems($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries reference data for throttling.
     *  *
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskReferenceResponse ListFlowControlTaskReferenceResponse
     */
    public function listFlowControlTaskReferenceWithOptions($instanceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTaskReference',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/reference',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries reference data for throttling.
     *  *
     * @param string $instanceId
     * @param string $taskId
     *
     * @return ListFlowControlTaskReferenceResponse ListFlowControlTaskReferenceResponse
     */
    public function listFlowControlTaskReference($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskReferenceWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @summary 流量调控任务曝光分析
     *  *
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param ListFlowControlTaskReportsRequest $request    ListFlowControlTaskReportsRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListFlowControlTaskReportsResponse ListFlowControlTaskReportsResponse
     */
    public function listFlowControlTaskReportsWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowControlTaskReports',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/flowTaskReports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowControlTaskReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 流量调控任务曝光分析
     *  *
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param ListFlowControlTaskReportsRequest $request    ListFlowControlTaskReportsRequest
     *
     * @return ListFlowControlTaskReportsResponse ListFlowControlTaskReportsResponse
     */
    public function listFlowControlTaskReports($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskReportsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListIndexVersionsResponse ListIndexVersionsResponse
     */
    public function listIndexVersionsWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListIndexVersions',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/index-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return ListIndexVersionsResponse ListIndexVersionsResponse
     */
    public function listIndexVersions($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexVersionsWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Queries the information of instances.
     *  *
     * @description You can call this API operation to query the list of instances. The returned instances are ranked in descending order based on the values of GmtCreate. You can specify multiple request parameters. These request parameters can be used to filter query results. The request parameters that you specify have logical AND relations. Only the specified parameters can be used to filter query results.
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expiredTime)) {
            $query['expiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of instances.
     *  *
     * @description You can call this API operation to query the list of instances. The returned instances are ranked in descending order based on the values of GmtCreate. You can specify multiple request parameters. These request parameters can be used to filter query results. The request parameters that you specify have logical AND relations. Only the specified parameters can be used to filter query results.
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries all asynchronous tasks of a specified instance by using the instance ID.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceTaskResponse ListInstanceTaskResponse
     */
    public function listInstanceTaskWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListInstanceTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all asynchronous tasks of a specified instance by using the instance ID.
     *  *
     * @param string $instanceId
     *
     * @return ListInstanceTaskResponse ListInstanceTaskResponse
     */
    public function listInstanceTask($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceTaskWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param ListItemsRequest $request    ListItemsRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListItemsResponse ListItemsResponse
     */
    public function listItemsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->strategyUsed)) {
            $query['strategyUsed'] = $request->strategyUsed;
        }
        if (!Utils::isUnset($request->withInvalidDetail)) {
            $query['withInvalidDetail'] = $request->withInvalidDetail;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListItems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/items/actions/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $instanceId
     * @param ListItemsRequest $request    ListItemsRequest
     *
     * @return ListItemsResponse ListItemsResponse
     */
    public function listItems($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listItemsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string          $instanceId
     * @param ListLogsRequest $request    ListLogsRequest
     * @param string[]        $headers    map
     * @param RuntimeOptions  $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListLogsResponse ListLogsResponse
     */
    public function listLogsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->queryParams)) {
            $query['queryParams'] = $request->queryParams;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogs',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $instanceId
     * @param ListLogsRequest $request    ListLogsRequest
     *
     * @return ListLogsResponse ListLogsResponse
     */
    public function listLogs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the content types supported in the diversity rule configurations of an instance.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMixCategoriesResponse ListMixCategoriesResponse
     */
    public function listMixCategoriesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListMixCategories',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/configurations/mixCategories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMixCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the content types supported in the diversity rule configurations of an instance.
     *  *
     * @return ListMixCategoriesResponse ListMixCategoriesResponse
     */
    public function listMixCategories()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMixCategoriesWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取离线存储列表
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListOfflineStoragesResponse ListOfflineStoragesResponse
     */
    public function listOfflineStoragesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListOfflineStorages',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/%5BinstanceId%5D/offlineStorages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOfflineStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取离线存储列表
     *  *
     * @param string $instanceId
     *
     * @return ListOfflineStoragesResponse ListOfflineStoragesResponse
     */
    public function listOfflineStorages($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOfflineStoragesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the templates of a ranking model. The returned templates are sorted in reverse chronological order based on the time when the templates were created.
     *  *
     * @param string                           $instanceId
     * @param ListRankingModelTemplatesRequest $request    ListRankingModelTemplatesRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRankingModelTemplatesResponse ListRankingModelTemplatesResponse
     */
    public function listRankingModelTemplatesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRankingModelTemplates',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRankingModelTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the templates of a ranking model. The returned templates are sorted in reverse chronological order based on the time when the templates were created.
     *  *
     * @param string                           $instanceId
     * @param ListRankingModelTemplatesRequest $request    ListRankingModelTemplatesRequest
     *
     * @return ListRankingModelTemplatesResponse ListRankingModelTemplatesResponse
     */
    public function listRankingModelTemplates($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelTemplatesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of versions for a ranking model.
     *  *
     * @param string                          $instanceId
     * @param ListRankingModelVersionsRequest $request    ListRankingModelVersionsRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRankingModelVersionsResponse ListRankingModelVersionsResponse
     */
    public function listRankingModelVersionsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['templateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRankingModelVersions',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRankingModelVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of versions for a ranking model.
     *  *
     * @param string                          $instanceId
     * @param ListRankingModelVersionsRequest $request    ListRankingModelVersionsRequest
     *
     * @return ListRankingModelVersionsResponse ListRankingModelVersionsResponse
     */
    public function listRankingModelVersions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelVersionsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param ListRankingModelsRequest $request    ListRankingModelsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRankingModelsResponse ListRankingModelsResponse
     */
    public function listRankingModelsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->rankingModelId)) {
            $query['rankingModelId'] = $request->rankingModelId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRankingModels',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRankingModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param ListRankingModelsRequest $request    ListRankingModelsRequest
     *
     * @return ListRankingModelsResponse ListRankingModelsResponse
     */
    public function listRankingModels($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string                            $instanceId
     * @param string                            $name
     * @param ListRankingSystemHistoriesRequest $request    ListRankingSystemHistoriesRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRankingSystemHistoriesResponse ListRankingSystemHistoriesResponse
     */
    public function listRankingSystemHistoriesWithOptions($instanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operateType)) {
            $query['operateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRankingSystemHistories',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '/histories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRankingSystemHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the instance.
     *  *
     * @param string                            $instanceId
     * @param string                            $name
     * @param ListRankingSystemHistoriesRequest $request    ListRankingSystemHistoriesRequest
     *
     * @return ListRankingSystemHistoriesResponse ListRankingSystemHistoriesResponse
     */
    public function listRankingSystemHistories($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingSystemHistoriesWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 获取排序服务列表
     *  *
     * @param string                    $instanceId
     * @param ListRankingSystemsRequest $request    ListRankingSystemsRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRankingSystemsResponse ListRankingSystemsResponse
     */
    public function listRankingSystemsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployStatus)) {
            $query['deployStatus'] = $request->deployStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRankingSystems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRankingSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取排序服务列表
     *  *
     * @param string                    $instanceId
     * @param ListRankingSystemsRequest $request    ListRankingSystemsRequest
     *
     * @return ListRankingSystemsResponse ListRankingSystemsResponse
     */
    public function listRankingSystems($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingSystemsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries item selection rules of an instance.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRuleConditionsResponse ListRuleConditionsResponse
     */
    public function listRuleConditionsWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRuleConditions',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rule-conditions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRuleConditionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries item selection rules of an instance.
     *  *
     * @param string $instanceId
     *
     * @return ListRuleConditionsResponse ListRuleConditionsResponse
     */
    public function listRuleConditions($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleConditionsWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary The returned results.
     *  *
     * @param string               $instanceId
     * @param ListRuleTasksRequest $request    ListRuleTasksRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRuleTasksResponse ListRuleTasksResponse
     */
    public function listRuleTasksWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRuleTasks',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rule-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRuleTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The returned results.
     *  *
     * @param string               $instanceId
     * @param ListRuleTasksRequest $request    ListRuleTasksRequest
     *
     * @return ListRuleTasksResponse ListRuleTasksResponse
     */
    public function listRuleTasks($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleTasksWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param ListRulesRequest $request    ListRulesRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRulesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['ruleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $instanceId
     * @param ListRulesRequest $request    ListRulesRequest
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRules($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRulesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取样本格式化配置列表
     *  *
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSampleFormatConfigsResponse ListSampleFormatConfigsResponse
     */
    public function listSampleFormatConfigsWithOptions($instanceId, $sampleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSampleFormatConfigs',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '/format-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSampleFormatConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取样本格式化配置列表
     *  *
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return ListSampleFormatConfigsResponse ListSampleFormatConfigsResponse
     */
    public function listSampleFormatConfigs($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSampleFormatConfigsWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @summary 获取样本列表
     *  *
     * @param string             $instanceId
     * @param ListSamplesRequest $request    ListSamplesRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSamplesResponse ListSamplesResponse
     */
    public function listSamplesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->sampleId)) {
            $query['sampleId'] = $request->sampleId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSamples',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSamplesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取样本列表
     *  *
     * @param string             $instanceId
     * @param ListSamplesRequest $request    ListSamplesRequest
     *
     * @return ListSamplesResponse ListSamplesResponse
     */
    public function listSamples($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSamplesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries preview results.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string                $instanceId
     * @param string                $sceneId
     * @param ListSceneItemsRequest $request    ListSceneItemsRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSceneItemsResponse ListSceneItemsResponse
     */
    public function listSceneItemsWithOptions($instanceId, $sceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationRuleId)) {
            $query['operationRuleId'] = $request->operationRuleId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->previewType)) {
            $query['previewType'] = $request->previewType;
        }
        if (!Utils::isUnset($request->queryCount)) {
            $query['queryCount'] = $request->queryCount;
        }
        if (!Utils::isUnset($request->selectionRuleId)) {
            $query['selectionRuleId'] = $request->selectionRuleId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSceneItems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/items',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSceneItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries preview results.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string                $instanceId
     * @param string                $sceneId
     * @param ListSceneItemsRequest $request    ListSceneItemsRequest
     *
     * @return ListSceneItemsResponse ListSceneItemsResponse
     */
    public function listSceneItems($instanceId, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSceneItemsWithOptions($instanceId, $sceneId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSceneParametersResponse ListSceneParametersResponse
     */
    public function listSceneParametersWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSceneParameters',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dashboard/scene-parameters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSceneParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ListSceneParametersResponse ListSceneParametersResponse
     */
    public function listSceneParameters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSceneParametersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries scenes of a specified instance.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. Go to the Scenario Building page in the AIRec console to manage scenes.
     *  *
     * @param string            $instanceId
     * @param ListScenesRequest $request    ListScenesRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListScenesResponse ListScenesResponse
     */
    public function listScenesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScenes',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries scenes of a specified instance.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. Go to the Scenario Building page in the AIRec console to manage scenes.
     *  *
     * @param string            $instanceId
     * @param ListScenesRequest $request    ListScenesRequest
     *
     * @return ListScenesResponse ListScenesResponse
     */
    public function listScenes($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScenesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUmengAppkeysResponse ListUmengAppkeysResponse
     */
    public function listUmengAppkeysWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListUmengAppkeys',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/umeng/appkeys',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUmengAppkeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListUmengAppkeysResponse ListUmengAppkeysResponse
     */
    public function listUmengAppkeys()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUmengAppkeysWithOptions($headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListUserClustersResponse ListUserClustersResponse
     */
    public function listUserClustersWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListUserClusters',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/user-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ListUserClustersResponse ListUserClustersResponse
     */
    public function listUserClusters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserClustersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Modifies the information of a single data source in a table of a specified instance.
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyDataSource',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSources/' . OpenApiUtilClient::getEncodeParam($tableName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information of a single data source in a table of a specified instance.
     *  *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSource($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @summary 修改特征表，只支表级别持特征列表的全量修改
     *  *
     * @param string         $instanceId
     * @param string         $type
     * @param string         $featureTableId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ModifyFeatureTableResponse ModifyFeatureTableResponse
     */
    public function modifyFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyFeatureTable',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/feature-tables/' . OpenApiUtilClient::getEncodeParam($type) . '/' . OpenApiUtilClient::getEncodeParam($featureTableId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFeatureTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改特征表，只支表级别持特征列表的全量修改
     *  *
     * @param string $instanceId
     * @param string $type
     * @param string $featureTableId
     *
     * @return ModifyFeatureTableResponse ModifyFeatureTableResponse
     */
    public function modifyFeatureTable($instanceId, $type, $featureTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime);
    }

    /**
     * @summary The name of the project.
     *  *
     * @description The name of the filtering algorithm.
     *  *
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ModifyFilteringAlgorithmMetaResponse ModifyFilteringAlgorithmMetaResponse
     */
    public function modifyFilteringAlgorithmMetaWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyFilteringAlgorithmMeta',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/meta',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFilteringAlgorithmMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the project.
     *  *
     * @description The name of the filtering algorithm.
     *  *
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return ModifyFilteringAlgorithmMetaResponse ModifyFilteringAlgorithmMetaResponse
     */
    public function modifyFilteringAlgorithmMeta($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFilteringAlgorithmMetaWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Modifies a throttling task.
     *  *
     * @param string                       $instanceId
     * @param string                       $taskId
     * @param ModifyFlowControlTaskRequest $request    ModifyFlowControlTaskRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyFlowControlTaskResponse ModifyFlowControlTaskResponse
     */
    public function modifyFlowControlTaskWithOptions($instanceId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metaType)) {
            $body['metaType'] = $request->metaType;
        }
        if (!Utils::isUnset($request->sceneIds)) {
            $body['sceneIds'] = $request->sceneIds;
        }
        if (!Utils::isUnset($request->selectionParams)) {
            $body['selectionParams'] = $request->selectionParams;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->target)) {
            $body['target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a throttling task.
     *  *
     * @param string                       $instanceId
     * @param string                       $taskId
     * @param ModifyFlowControlTaskRequest $request    ModifyFlowControlTaskRequest
     *
     * @return ModifyFlowControlTaskResponse ModifyFlowControlTaskResponse
     */
    public function modifyFlowControlTask($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFlowControlTaskWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configurations of a specified instance.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a specified instance.
     *  *
     * @param string $instanceId
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
     */
    public function modifyInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyItemsResponse ModifyItemsResponse
     */
    public function modifyItemsWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyItems',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/items',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ModifyItemsResponse ModifyItemsResponse
     */
    public function modifyItems($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyItemsWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Modifies the offline storage configurations of an instance. You need to modify three tables at the same time.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyOfflineStoragesResponse ModifyOfflineStoragesResponse
     */
    public function modifyOfflineStoragesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyOfflineStorages',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/%5BinstanceId%5D/offlineStorages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyOfflineStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the offline storage configurations of an instance. You need to modify three tables at the same time.
     *  *
     * @param string $instanceId
     *
     * @return ModifyOfflineStoragesResponse ModifyOfflineStoragesResponse
     */
    public function modifyOfflineStorages($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOfflineStoragesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary The ID of the ranking model.
     *  *
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ModifyRankingModelResponse ModifyRankingModelResponse
     */
    public function modifyRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyRankingModel',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-models/' . OpenApiUtilClient::getEncodeParam($rankingModelId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRankingModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the ranking model.
     *  *
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return ModifyRankingModelResponse ModifyRankingModelResponse
     */
    public function modifyRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @summary Modifies a ranking model.
     *  *
     * @param string                            $instanceId
     * @param string                            $templateId
     * @param ModifyRankingModelTemplateRequest $request    ModifyRankingModelTemplateRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyRankingModelTemplateResponse ModifyRankingModelTemplateResponse
     */
    public function modifyRankingModelTemplateWithOptions($instanceId, $templateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyRankingModelTemplate',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates/' . OpenApiUtilClient::getEncodeParam($templateId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRankingModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a ranking model.
     *  *
     * @param string                            $instanceId
     * @param string                            $templateId
     * @param ModifyRankingModelTemplateRequest $request    ModifyRankingModelTemplateRequest
     *
     * @return ModifyRankingModelTemplateResponse ModifyRankingModelTemplateResponse
     */
    public function modifyRankingModelTemplate($instanceId, $templateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingModelTemplateWithOptions($instanceId, $templateId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a ranking service.
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param ModifyRankingSystemRequest $request    ModifyRankingSystemRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyRankingSystemResponse ModifyRankingSystemResponse
     */
    public function modifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a ranking service.
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param ModifyRankingSystemRequest $request    ModifyRankingSystemRequest
     *
     * @return ModifyRankingSystemResponse ModifyRankingSystemResponse
     */
    public function modifyRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a rule.
     *  *
     * @param string         $instanceId
     * @param string         $ruleId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyRuleResponse ModifyRuleResponse
     */
    public function modifyRuleWithOptions($instanceId, $ruleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyRule',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rules/' . OpenApiUtilClient::getEncodeParam($ruleId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a rule.
     *  *
     * @param string $instanceId
     * @param string $ruleId
     *
     * @return ModifyRuleResponse ModifyRuleResponse
     */
    public function modifyRule($instanceId, $ruleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRuleWithOptions($instanceId, $ruleId, $headers, $runtime);
    }

    /**
     * @summary 修改样本配置
     *  *
     * @param string              $instanceId
     * @param string              $sampleId
     * @param ModifySampleRequest $request    ModifySampleRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifySampleResponse ModifySampleResponse
     */
    public function modifySampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySample',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改样本配置
     *  *
     * @param string              $instanceId
     * @param string              $sampleId
     * @param ModifySampleRequest $request    ModifySampleRequest
     *
     * @return ModifySampleResponse ModifySampleResponse
     */
    public function modifySample($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the information about a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifySceneResponse ModifySceneResponse
     */
    public function modifySceneWithOptions($instanceId, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyScene',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a scene.
     *  *
     * @description We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the Artificial Intelligence Recommendation (AIRec) console to manage scenes.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return ModifySceneResponse ModifySceneResponse
     */
    public function modifyScene($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySceneWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return OfflineFilteringAlgorithmResponse OfflineFilteringAlgorithmResponse
     */
    public function offlineFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OfflineFilteringAlgorithm',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/actions/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineFilteringAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return OfflineFilteringAlgorithmResponse OfflineFilteringAlgorithmResponse
     */
    public function offlineFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary 发布流调任务接口
     *  *
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return PublishFlowControlTaskResponse PublishFlowControlTaskResponse
     */
    public function publishFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/actions/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布流调任务接口
     *  *
     * @param string $instanceId
     * @param string $taskId
     *
     * @return PublishFlowControlTaskResponse PublishFlowControlTaskResponse
     */
    public function publishFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @summary Publishes a rule.
     *  *
     * @param string             $ruleId
     * @param string             $instanceId
     * @param PublishRuleRequest $request    PublishRuleRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return PublishRuleResponse PublishRuleResponse
     */
    public function publishRuleWithOptions($ruleId, $instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleType)) {
            $query['ruleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishRule',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rules/' . OpenApiUtilClient::getEncodeParam($ruleId) . '/actions/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a rule.
     *  *
     * @param string             $ruleId
     * @param string             $instanceId
     * @param PublishRuleRequest $request    PublishRuleRequest
     *
     * @return PublishRuleResponse PublishRuleResponse
     */
    public function publishRule($ruleId, $instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRuleWithOptions($ruleId, $instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 该接口用于向指定冷启动实例指定表推送文档
     *  *
     * @param string                       $instanceId
     * @param string                       $tableName
     * @param PushColdStartDocumentRequest $request    PushColdStartDocumentRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return PushColdStartDocumentResponse PushColdStartDocumentResponse
     */
    public function pushColdStartDocumentWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'PushColdStartDocument',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/cold-start/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushColdStartDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 该接口用于向指定冷启动实例指定表推送文档
     *  *
     * @param string                       $instanceId
     * @param string                       $tableName
     * @param PushColdStartDocumentRequest $request    PushColdStartDocumentRequest
     *
     * @return PushColdStartDocumentResponse PushColdStartDocumentResponse
     */
    public function pushColdStartDocument($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushColdStartDocumentWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return PushDocumentResponse PushDocumentResponse
     */
    public function pushDocumentWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PushDocument',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $tableName
     *
     * @return PushDocumentResponse PushDocumentResponse
     */
    public function pushDocument($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDocumentWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return PushInterventionResponse PushInterventionResponse
     */
    public function pushInterventionWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PushIntervention',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/intervene',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushInterventionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return PushInterventionResponse PushInterventionResponse
     */
    public function pushIntervention($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $table
     * @param QueryDataMessageRequest $request    QueryDataMessageRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return QueryDataMessageResponse QueryDataMessageResponse
     */
    public function queryDataMessageWithOptions($instanceId, $table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bhvType)) {
            $query['bhvType'] = $request->bhvType;
        }
        if (!Utils::isUnset($request->cmdType)) {
            $query['cmdType'] = $request->cmdType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->imei)) {
            $query['imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['itemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            $query['itemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->messageSource)) {
            $query['messageSource'] = $request->messageSource;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['traceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['userType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDataMessage',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/data-message',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryDataMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $table
     * @param QueryDataMessageRequest $request    QueryDataMessageRequest
     *
     * @return QueryDataMessageResponse QueryDataMessageResponse
     */
    public function queryDataMessage($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @summary Queries statistics on update messages in a data table of an instance.
     *  *
     * @description You can call this API operation to query statistics on update messages in a specified data table of a specified instance.
     *  *
     * @param string                            $instanceId
     * @param string                            $table
     * @param QueryDataMessageStatisticsRequest $request    QueryDataMessageStatisticsRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return QueryDataMessageStatisticsResponse QueryDataMessageStatisticsResponse
     */
    public function queryDataMessageStatisticsWithOptions($instanceId, $table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bhvType)) {
            $query['bhvType'] = $request->bhvType;
        }
        if (!Utils::isUnset($request->cmdType)) {
            $query['cmdType'] = $request->cmdType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->imei)) {
            $query['imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['itemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            $query['itemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->messageSource)) {
            $query['messageSource'] = $request->messageSource;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['traceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['userType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDataMessageStatistics',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/data-message-statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryDataMessageStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries statistics on update messages in a data table of an instance.
     *  *
     * @description You can call this API operation to query statistics on update messages in a specified data table of a specified instance.
     *  *
     * @param string                            $instanceId
     * @param string                            $table
     * @param QueryDataMessageStatisticsRequest $request    QueryDataMessageStatisticsRequest
     *
     * @return QueryDataMessageStatisticsResponse QueryDataMessageStatisticsResponse
     */
    public function queryDataMessageStatistics($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageStatisticsWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param QueryExceptionHistoryRequest $request    QueryExceptionHistoryRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return QueryExceptionHistoryResponse QueryExceptionHistoryResponse
     */
    public function queryExceptionHistoryWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryExceptionHistory',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/exception-history',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryExceptionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $instanceId
     * @param QueryExceptionHistoryRequest $request    QueryExceptionHistoryRequest
     *
     * @return QueryExceptionHistoryResponse QueryExceptionHistoryResponse
     */
    public function queryExceptionHistory($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryExceptionHistoryWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries raw data in a specific data table of an instance by using the primary key.
     *  *
     * @description You can call this operation to query raw data in a specific data table of an instance by using the primary key. The returned results need to be confirmed by customers.
     *  *
     * @param string              $instanceId
     * @param string              $table
     * @param QueryRawDataRequest $request    QueryRawDataRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return QueryRawDataResponse QueryRawDataResponse
     */
    public function queryRawDataWithOptions($instanceId, $table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imei)) {
            $query['imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['itemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            $query['itemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['userType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRawData',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/raw-data',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRawDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries raw data in a specific data table of an instance by using the primary key.
     *  *
     * @description You can call this operation to query raw data in a specific data table of an instance by using the primary key. The returned results need to be confirmed by customers.
     *  *
     * @param string              $instanceId
     * @param string              $table
     * @param QueryRawDataRequest $request    QueryRawDataRequest
     *
     * @return QueryRawDataResponse QueryRawDataResponse
     */
    public function queryRawData($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRawDataWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return QuerySingleAggregationReportResponse QuerySingleAggregationReportResponse
     */
    public function querySingleAggregationReportWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'QuerySingleAggregationReport',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/single-aggregation-report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySingleAggregationReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return QuerySingleAggregationReportResponse QuerySingleAggregationReportResponse
     */
    public function querySingleAggregationReport($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleAggregationReportWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries a single table report. More report types may be supported.
     *  *
     * @param string                   $instanceId
     * @param QuerySingleReportRequest $request    QuerySingleReportRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return QuerySingleReportResponse QuerySingleReportResponse
     */
    public function querySingleReportWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportType)) {
            $query['reportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySingleReport',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/single-report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySingleReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a single table report. More report types may be supported.
     *  *
     * @param string                   $instanceId
     * @param QuerySingleReportRequest $request    QuerySingleReportRequest
     *
     * @return QuerySingleReportResponse QuerySingleReportResponse
     */
    public function querySingleReport($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleReportWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the data overview.
     *  *
     * @param string                            $instanceId
     * @param QuerySyncReportAggregationRequest $request    QuerySyncReportAggregationRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return QuerySyncReportAggregationResponse QuerySyncReportAggregationResponse
     */
    public function querySyncReportAggregationWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySyncReportAggregation',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sync-reports/aggregation',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySyncReportAggregationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the data overview.
     *  *
     * @param string                            $instanceId
     * @param QuerySyncReportAggregationRequest $request    QuerySyncReportAggregationRequest
     *
     * @return QuerySyncReportAggregationResponse QuerySyncReportAggregationResponse
     */
    public function querySyncReportAggregation($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySyncReportAggregationWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Rebuilds an index.
     *  *
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return RebuildIndexResponse RebuildIndexResponse
     */
    public function rebuildIndexWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RebuildIndex',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/actions/rebuild',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RebuildIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Rebuilds an index.
     *  *
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return RebuildIndexResponse RebuildIndexResponse
     */
    public function rebuildIndex($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildIndexWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary The type of the recommendation service.
     *  *
     * @param string           $instanceId
     * @param RecommendRequest $request    RecommendRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return RecommendResponse RecommendResponse
     */
    public function recommendWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->imei)) {
            $query['imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->items)) {
            $query['items'] = $request->items;
        }
        if (!Utils::isUnset($request->rankOpen)) {
            $query['rankOpen'] = $request->rankOpen;
        }
        if (!Utils::isUnset($request->recType)) {
            $query['recType'] = $request->recType;
        }
        if (!Utils::isUnset($request->returnCount)) {
            $query['returnCount'] = $request->returnCount;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['sceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->strategy)) {
            $query['strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userInfo)) {
            $query['userInfo'] = $request->userInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Recommend',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/recommend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecommendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The type of the recommendation service.
     *  *
     * @param string           $instanceId
     * @param RecommendRequest $request    RecommendRequest
     *
     * @return RecommendResponse RecommendResponse
     */
    public function recommend($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recommendWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Refreshes a feature table based on the source table in MaxCompute. The refresh policy is subject to data in the source table.
     *  *
     * @param string         $instanceId
     * @param string         $type
     * @param string         $featureTableId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return RefreshFeatureTableResponse RefreshFeatureTableResponse
     */
    public function refreshFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RefreshFeatureTable',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/feature-tables/' . OpenApiUtilClient::getEncodeParam($type) . '/' . OpenApiUtilClient::getEncodeParam($featureTableId) . '/actions/refresh',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshFeatureTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Refreshes a feature table based on the source table in MaxCompute. The refresh policy is subject to data in the source table.
     *  *
     * @param string $instanceId
     * @param string $type
     * @param string $featureTableId
     *
     * @return RefreshFeatureTableResponse RefreshFeatureTableResponse
     */
    public function refreshFeatureTable($instanceId, $type, $featureTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime);
    }

    /**
     * @summary 回滚某个排序服务
     *  *
     * @param string                       $instanceId
     * @param string                       $name
     * @param RollbackRankingSystemRequest $request    RollbackRankingSystemRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return RollbackRankingSystemResponse RollbackRankingSystemResponse
     */
    public function rollbackRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RollbackRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '/actions/rollback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 回滚某个排序服务
     *  *
     * @param string                       $instanceId
     * @param string                       $name
     * @param RollbackRankingSystemRequest $request    RollbackRankingSystemRequest
     *
     * @return RollbackRankingSystemResponse RollbackRankingSystemResponse
     */
    public function rollbackRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Runs an instance to start a full data import task.
     *  *
     * @description You can call this API operation to run an instance to start a full data import task. After you call this API operation, the system creates a dataset. Then, the system imports all data from your data sources into the dataset for data training.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return RunInstanceResponse RunInstanceResponse
     */
    public function runInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RunInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/import',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Runs an instance to start a full data import task.
     *  *
     * @description You can call this API operation to run an instance to start a full data import task. After you call this API operation, the system creates a dataset. Then, the system imports all data from your data sources into the dataset for data training.
     *  *
     * @param string $instanceId
     *
     * @return RunInstanceResponse RunInstanceResponse
     */
    public function runInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 启动模型训练
     *  *
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return RunRankingModelTemplateResponse RunRankingModelTemplateResponse
     */
    public function runRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RunRankingModelTemplate',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-model-templates/' . OpenApiUtilClient::getEncodeParam($templateId) . '/actions/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunRankingModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动模型训练
     *  *
     * @param string $instanceId
     * @param string $templateId
     *
     * @return RunRankingModelTemplateResponse RunRankingModelTemplateResponse
     */
    public function runRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @summary Triggers sample formatting configurations.
     *  *
     * @param string                       $instanceId
     * @param string                       $sampleId
     * @param RunSampleFormatConfigRequest $request    RunSampleFormatConfigRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return RunSampleFormatConfigResponse RunSampleFormatConfigResponse
     */
    public function runSampleFormatConfigWithOptions($instanceId, $sampleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mode)) {
            $query['mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunSampleFormatConfig',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/samples/' . OpenApiUtilClient::getEncodeParam($sampleId) . '/format-configs/actions/run',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunSampleFormatConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Triggers sample formatting configurations.
     *  *
     * @param string                       $instanceId
     * @param string                       $sampleId
     * @param RunSampleFormatConfigRequest $request    RunSampleFormatConfigRequest
     *
     * @return RunSampleFormatConfigResponse RunSampleFormatConfigResponse
     */
    public function runSampleFormatConfig($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runSampleFormatConfigWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopDataSetResponse StopDataSetResponse
     */
    public function stopDataSetWithOptions($instanceId, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopDataSet',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/dataSets/' . OpenApiUtilClient::getEncodeParam($versionId) . '/actions/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $versionId
     *
     * @return StopDataSetResponse StopDataSetResponse
     */
    public function stopDataSet($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDataSetWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @summary 停止流调任务接口
     *  *
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopFlowControlTaskResponse StopFlowControlTaskResponse
     */
    public function stopFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopFlowControlTask',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/flowControlTasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/actions/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopFlowControlTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止流调任务接口
     *  *
     * @param string $instanceId
     * @param string $taskId
     *
     * @return StopFlowControlTaskResponse StopFlowControlTaskResponse
     */
    public function stopFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return UnLockIndexVersionResponse UnLockIndexVersionResponse
     */
    public function unLockIndexVersionWithOptions($instanceId, $algorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UnLockIndexVersion',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/filtering-algorithms/' . OpenApiUtilClient::getEncodeParam($algorithmId) . '/actions/unlock',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnLockIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return UnLockIndexVersionResponse UnLockIndexVersionResponse
     */
    public function unLockIndexVersion($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLockIndexVersionWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @summary Updates the basic information about an experiment.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentBasicInfoResponse UpdateExperimentBasicInfoResponse
     */
    public function updateExperimentBasicInfoWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentBasicInfo',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/basic',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about an experiment.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return UpdateExperimentBasicInfoResponse UpdateExperimentBasicInfoResponse
     */
    public function updateExperimentBasicInfo($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentBasicInfoWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentConfigResponse UpdateExperimentConfigResponse
     */
    public function updateExperimentConfigWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentConfig',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return UpdateExperimentConfigResponse UpdateExperimentConfigResponse
     */
    public function updateExperimentConfig($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentConfigWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @summary Updates the state of an experiment.
     *  *
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentStatusResponse UpdateExperimentStatusResponse
     */
    public function updateExperimentStatusWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentStatus',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/status',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the state of an experiment.
     *  *
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return UpdateExperimentStatusResponse UpdateExperimentStatusResponse
     */
    public function updateExperimentStatus($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentStatusWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @summary Modifies the quotas of a specified instance.
     *  *
     * @description You can call this operation to modify the quotas of a specified instance.
     * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) for recommendation requests: 10 to 500.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpgradeInstanceResponse UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpgradeInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the quotas of a specified instance.
     *  *
     * @description You can call this operation to modify the quotas of a specified instance.
     * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) for recommendation requests: 10 to 500.
     *  *
     * @param string $instanceId
     *
     * @return UpgradeInstanceResponse UpgradeInstanceResponse
     */
    public function upgradeInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ValidateInstanceResponse ValidateInstanceResponse
     */
    public function validateInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ValidateInstance',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/validate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ValidateInstanceResponse ValidateInstanceResponse
     */
    public function validateInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 调试排序服务
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param VerifyRankingSystemRequest $request    VerifyRankingSystemRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return VerifyRankingSystemResponse VerifyRankingSystemResponse
     */
    public function verifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyRankingSystem',
            'version'     => '2020-11-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/openapi/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ranking-systems/' . OpenApiUtilClient::getEncodeParam($name) . '/actions/verify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VerifyRankingSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调试排序服务
     *  *
     * @param string                     $instanceId
     * @param string                     $name
     * @param VerifyRankingSystemRequest $request    VerifyRankingSystemRequest
     *
     * @return VerifyRankingSystemResponse VerifyRankingSystemResponse
     */
    public function verifyRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }
}

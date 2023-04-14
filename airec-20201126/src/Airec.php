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
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AttachDatasetResponse
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
     * @param string $instanceId
     * @param string $versionId
     *
     * @return AttachDatasetResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AttachIndexVersionResponse
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
     * @return AttachIndexVersionResponse
     */
    public function attachIndexVersion($instanceId, $algorithmId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachIndexVersionWithOptions($instanceId, $algorithmId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CheckRankingModelReachableResponse
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
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return CheckRankingModelReachableResponse
     */
    public function checkRankingModelReachable($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkRankingModelReachableWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @param string                 $instanceId
     * @param string                 $sceneId
     * @param string                 $experimentId
     * @param CloneExperimentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CloneExperimentResponse
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
     * @param string                 $instanceId
     * @param string                 $sceneId
     * @param string                 $experimentId
     * @param CloneExperimentRequest $request
     *
     * @return CloneExperimentResponse
     */
    public function cloneExperiment($instanceId, $sceneId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneExperimentWithOptions($instanceId, $sceneId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CloneSampleResponse
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
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return CloneSampleResponse
     */
    public function cloneSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @param string               $instanceId
     * @param ColdStartRankRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ColdStartRankResponse
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
     * @param string               $instanceId
     * @param ColdStartRankRequest $request
     *
     * @return ColdStartRankResponse
     */
    public function coldStartRank($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->coldStartRankWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param CreateCustomAnalysisTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCustomAnalysisTaskResponse
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
     * @param string                          $instanceId
     * @param CreateCustomAnalysisTaskRequest $request
     *
     * @return CreateCustomAnalysisTaskResponse
     */
    public function createCustomAnalysisTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomAnalysisTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateCustomSampleResponse
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
     * @param string $instanceId
     *
     * @return CreateCustomSampleResponse
     */
    public function createCustomSample($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomSampleWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDataDiagnoseTaskResponse
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
     * @param string $instanceId
     *
     * @return CreateDataDiagnoseTaskResponse
     */
    public function createDataDiagnoseTask($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataDiagnoseTaskWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateExtraDataSourceResponse
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
     * @param string $instanceId
     *
     * @return CreateExtraDataSourceResponse
     */
    public function createExtraDataSource($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExtraDataSourceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param CreateFilteringAlgorithmRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFilteringAlgorithmResponse
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
     * @param string                          $instanceId
     * @param CreateFilteringAlgorithmRequest $request
     *
     * @return CreateFilteringAlgorithmResponse
     */
    public function createFilteringAlgorithm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFilteringAlgorithmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param CreateFlowControlTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFlowControlTaskResponse
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
     * @param string                       $instanceId
     * @param CreateFlowControlTaskRequest $request
     *
     * @return CreateFlowControlTaskResponse
     */
    public function createFlowControlTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateInstanceResponse
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
     * @return CreateInstanceResponse
     */
    public function createInstance()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($headers, $runtime);
    }

    /**
     * @param string                    $instanceId
     * @param CreateRankingModelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRankingModelResponse
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
     * @param CreateRankingModelRequest $request
     *
     * @return CreateRankingModelResponse
     */
    public function createRankingModel($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingModelWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRankingModelTemplateResponse
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
     * @param string $instanceId
     *
     * @return CreateRankingModelTemplateResponse
     */
    public function createRankingModelTemplate($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingModelTemplateWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRankingSystemResponse
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
     * @param string $instanceId
     *
     * @return CreateRankingSystemResponse
     */
    public function createRankingSystem($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRankingSystemWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRuleResponse
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
     * @param string $instanceId
     *
     * @return CreateRuleResponse
     */
    public function createRule($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRuleWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param string                          $sampleId
     * @param CreateSampleFormatConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSampleFormatConfigResponse
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
     * @param string                          $instanceId
     * @param string                          $sampleId
     * @param CreateSampleFormatConfigRequest $request
     *
     * @return CreateSampleFormatConfigResponse
     */
    public function createSampleFormatConfig($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSampleFormatConfigWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param CreateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
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
     * @param string             $instanceId
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSceneWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param CreateUmengTokenRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateUmengTokenResponse
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
     * @param CreateUmengTokenRequest $request
     *
     * @return CreateUmengTokenResponse
     */
    public function createUmengToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmengTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DecribeRankingModelResponse
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
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return DecribeRankingModelResponse
     */
    public function decribeRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->decribeRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataSetResponse
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
     * @param string $instanceId
     * @param string $versionId
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSet($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSetWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExperimentResponse
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
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $type
     * @param string         $dataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExtraDataSourceResponse
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
     * @param string $instanceId
     * @param string $type
     * @param string $dataSourceId
     *
     * @return DeleteExtraDataSourceResponse
     */
    public function deleteExtraDataSource($instanceId, $type, $dataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFilteringAlgorithmResponse
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
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return DeleteFilteringAlgorithmResponse
     */
    public function deleteFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowControlTaskResponse
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
     * @param string $instanceId
     * @param string $taskId
     *
     * @return DeleteFlowControlTaskResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRankingModelResponse
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
     * @return DeleteRankingModelResponse
     */
    public function deleteRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRankingModelTemplateResponse
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
     * @param string $instanceId
     * @param string $templateId
     *
     * @return DeleteRankingModelTemplateResponse
     */
    public function deleteRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRankingModelVersionResponse
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
     * @param string $instanceId
     * @param string $versionId
     *
     * @return DeleteRankingModelVersionResponse
     */
    public function deleteRankingModelVersion($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRankingSystemResponse
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
     * @param string $instanceId
     * @param string $name
     *
     * @return DeleteRankingSystemResponse
     */
    public function deleteRankingSystem($instanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRankingSystemWithOptions($instanceId, $name, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSampleResponse
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
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return DeleteSampleResponse
     */
    public function deleteSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSceneResponse
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
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DeleteSceneResponse
     */
    public function deleteScene($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param string                     $name
     * @param DeployRankingSystemRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeployRankingSystemResponse
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
     * @param string                     $instanceId
     * @param string                     $name
     * @param DeployRankingSystemRequest $request
     *
     * @return DeployRankingSystemResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBaseExperimentResponse
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
     * @return DescribeBaseExperimentResponse
     */
    public function describeBaseExperiment($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBaseExperimentWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * ****
     *   *
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
     * ****
     *   *
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDataSetMessageResponse
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
     * @return DescribeDataSetMessageResponse
     */
    public function describeDataSetMessage($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataSetMessageWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDefaultAlgorithmsResponse
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
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeDefaultAlgorithmsResponse
     */
    public function describeDefaultAlgorithms($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDefaultAlgorithmsWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeExperimentResponse
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
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return DescribeExperimentResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeExperimentEnvResponse
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
     * @return DescribeExperimentEnvResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeExperimentEnvProgressResponse
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
     * @return DescribeExperimentEnvProgressResponse
     */
    public function describeExperimentEnvProgress($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExperimentEnvProgressWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFilteringAlgorithmResponse
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
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return DescribeFilteringAlgorithmResponse
     */
    public function describeFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceResponse
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
     * @param string $instanceId
     *
     * @return DescribeInstanceResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLatestTaskResponse
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
     * @return DescribeLatestTaskResponse
     */
    public function describeLatestTask($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeLatestTaskWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeQuotaResponse
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
     * @param string $instanceId
     *
     * @return DescribeQuotaResponse
     */
    public function describeQuota($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQuotaWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string              $instanceId
     * @param string              $ruleId
     * @param DescribeRuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeRuleResponse
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
     * @param string              $instanceId
     * @param string              $ruleId
     * @param DescribeRuleRequest $request
     *
     * @return DescribeRuleResponse
     */
    public function describeRule($instanceId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRuleWithOptions($instanceId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSceneResponse
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
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return DescribeSceneResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSceneBucketResponse
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
     * @return DescribeSceneBucketResponse
     */
    public function describeSceneBucket($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneBucketWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the AIRec console to manage scenes. For more information, see [Create a recommendation scene by configuring product selection rules](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M).
     *   *
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
     * We recommend that you do not call an API operation to manage scenes. We recommend that you go to the Scenario Building page in the AIRec console to manage scenes. For more information, see [Create a recommendation scene by configuring product selection rules](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M).
     *   *
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
     * @param DescribeSyncReportDetailRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSyncReportDetailResponse
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
     * @param DescribeSyncReportDetailRequest $request
     *
     * @return DescribeSyncReportDetailResponse
     */
    public function describeSyncReportDetail($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportDetailWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param DescribeSyncReportOutliersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSyncReportOutliersResponse
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
     * @param DescribeSyncReportOutliersRequest $request
     *
     * @return DescribeSyncReportOutliersResponse
     */
    public function describeSyncReportOutliers($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportOutliersWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param DescribeUserMetricsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserMetricsResponse
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
     * @param string                     $instanceId
     * @param DescribeUserMetricsRequest $request
     *
     * @return DescribeUserMetricsResponse
     */
    public function describeUserMetrics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserMetricsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * The new quota must be less than the selected quota.
     *   * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) of recommendation requests: 10 to 500.
     *   *
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
     * The new quota must be less than the selected quota.
     *   * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) of recommendation requests: 10 to 500.
     *   *
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableExperimentResponse
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
     * @return EnableExperimentResponse
     */
    public function enableExperiment($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableExperimentWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GenerateSampleResponse
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
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return GenerateSampleResponse
     */
    public function generateSample($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateSampleWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $type
     * @param string         $dataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExtraDataSourceResponse
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
     * @param string $instanceId
     * @param string $type
     * @param string $dataSourceId
     *
     * @return GetExtraDataSourceResponse
     */
    public function getExtraDataSource($instanceId, $type, $dataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExtraDataSourceWithOptions($instanceId, $type, $dataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowControlTaskResponse
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
     * @param string $instanceId
     * @param string $taskId
     *
     * @return GetFlowControlTaskResponse
     */
    public function getFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLatestDataDiagnoseTaskStatusResponse
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
     * @param string $instanceId
     *
     * @return GetLatestDataDiagnoseTaskStatusResponse
     */
    public function getLatestDataDiagnoseTaskStatus($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLatestDataDiagnoseTaskStatusWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRankingModelTemplateResponse
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
     * @param string $instanceId
     * @param string $templateId
     *
     * @return GetRankingModelTemplateResponse
     */
    public function getRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRankingModelVersionResponse
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
     * @param string $instanceId
     * @param string $versionId
     *
     * @return GetRankingModelVersionResponse
     */
    public function getRankingModelVersion($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingModelVersionWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * ****
     *   *
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
     * ****
     *   *
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
     * @param string         $instanceId
     * @param string         $name
     * @param string         $operateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRankingSystemHistoryResponse
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
     * @param string $instanceId
     * @param string $name
     * @param string $operateId
     *
     * @return GetRankingSystemHistoryResponse
     */
    public function getRankingSystemHistory($instanceId, $name, $operateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRankingSystemHistoryWithOptions($instanceId, $name, $operateId, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param string           $sampleId
     * @param GetSampleRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetSampleResponse
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
     * @param string           $instanceId
     * @param string           $sampleId
     * @param GetSampleRequest $request
     *
     * @return GetSampleResponse
     */
    public function getSample($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param InitComputingResourceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return InitComputingResourceResponse
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
     * @param string                       $instanceId
     * @param InitComputingResourceRequest $request
     *
     * @return InitComputingResourceResponse
     */
    public function initComputingResource($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initComputingResourceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param ListDashboardDetailsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardDetailsResponse
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
     * @param ListDashboardDetailsRequest $request
     *
     * @return ListDashboardDetailsResponse
     */
    public function listDashboardDetails($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $instanceId
     * @param ListDashboardDetailsFlowsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDashboardDetailsFlowsResponse
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
     * @param ListDashboardDetailsFlowsRequest $request
     *
     * @return ListDashboardDetailsFlowsResponse
     */
    public function listDashboardDetailsFlows($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsFlowsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param ListDashboardMetricsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardMetricsResponse
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
     * @param string                      $instanceId
     * @param ListDashboardMetricsRequest $request
     *
     * @return ListDashboardMetricsResponse
     */
    public function listDashboardMetrics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $instanceId
     * @param ListDashboardMetricsFlowsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDashboardMetricsFlowsResponse
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
     * @param string                           $instanceId
     * @param ListDashboardMetricsFlowsRequest $request
     *
     * @return ListDashboardMetricsFlowsResponse
     */
    public function listDashboardMetricsFlows($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsFlowsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param ListDataDiagnoseReportsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDataDiagnoseReportsResponse
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
     * @param string                         $instanceId
     * @param ListDataDiagnoseReportsRequest $request
     *
     * @return ListDataDiagnoseReportsResponse
     */
    public function listDataDiagnoseReports($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnoseReportsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $instanceId
     * @param ListDataDiagnoseSampleDetailsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataDiagnoseSampleDetailsResponse
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
     * @param string                               $instanceId
     * @param ListDataDiagnoseSampleDetailsRequest $request
     *
     * @return ListDataDiagnoseSampleDetailsResponse
     */
    public function listDataDiagnoseSampleDetails($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataDiagnoseSampleDetailsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSetResponse
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
     * @param string $instanceId
     *
     * @return ListDataSetResponse
     */
    public function listDataSet($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSetWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSourceResponse
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
     * @return ListDataSourceResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListExperimentsResponse
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
     * @return ListExperimentsResponse
     */
    public function listExperiments($instanceId, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($instanceId, $sceneId, $headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param ListExtraDataSourcesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListExtraDataSourcesResponse
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
     * @param string                      $instanceId
     * @param ListExtraDataSourcesRequest $request
     *
     * @return ListExtraDataSourcesResponse
     */
    public function listExtraDataSources($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExtraDataSourcesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param ListFeatureTablesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListFeatureTablesResponse
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
     * @param string                   $instanceId
     * @param ListFeatureTablesRequest $request
     *
     * @return ListFeatureTablesResponse
     */
    public function listFeatureTables($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureTablesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param ListFilteringAlgorithmsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFilteringAlgorithmsResponse
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
     * @param ListFilteringAlgorithmsRequest $request
     *
     * @return ListFilteringAlgorithmsResponse
     */
    public function listFilteringAlgorithms($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFilteringAlgorithmsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param ListFlowControlTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowControlTaskResponse
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
     * @param string                     $instanceId
     * @param ListFlowControlTaskRequest $request
     *
     * @return ListFlowControlTaskResponse
     */
    public function listFlowControlTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $instanceId
     * @param string                                 $taskId
     * @param ListFlowControlTaskInvalidItemsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListFlowControlTaskInvalidItemsResponse
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
     * @param string                                 $instanceId
     * @param string                                 $taskId
     * @param ListFlowControlTaskInvalidItemsRequest $request
     *
     * @return ListFlowControlTaskInvalidItemsResponse
     */
    public function listFlowControlTaskInvalidItems($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskInvalidItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string                                $instanceId
     * @param string                                $taskId
     * @param ListFlowControlTaskItemReportsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListFlowControlTaskItemReportsResponse
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
     * @param string                                $instanceId
     * @param string                                $taskId
     * @param ListFlowControlTaskItemReportsRequest $request
     *
     * @return ListFlowControlTaskItemReportsResponse
     */
    public function listFlowControlTaskItemReports($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskItemReportsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param string                          $taskId
     * @param ListFlowControlTaskItemsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFlowControlTaskItemsResponse
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
     * @param string                          $instanceId
     * @param string                          $taskId
     * @param ListFlowControlTaskItemsRequest $request
     *
     * @return ListFlowControlTaskItemsResponse
     */
    public function listFlowControlTaskItems($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskItemsWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFlowControlTaskReferenceResponse
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
     * @param string $instanceId
     * @param string $taskId
     *
     * @return ListFlowControlTaskReferenceResponse
     */
    public function listFlowControlTaskReference($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowControlTaskReferenceWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param ListFlowControlTaskReportsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListFlowControlTaskReportsResponse
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
     * @param string                            $instanceId
     * @param string                            $taskId
     * @param ListFlowControlTaskReportsRequest $request
     *
     * @return ListFlowControlTaskReportsResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListIndexVersionsResponse
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
     * @return ListIndexVersionsResponse
     */
    public function listIndexVersions($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexVersionsWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
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
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInstanceTaskResponse
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
     * @param string $instanceId
     *
     * @return ListInstanceTaskResponse
     */
    public function listInstanceTask($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceTaskWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param ListItemsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListItemsResponse
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
     * @param ListItemsRequest $request
     *
     * @return ListItemsResponse
     */
    public function listItems($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listItemsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string          $instanceId
     * @param ListLogsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListLogsResponse
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
     * @param ListLogsRequest $request
     *
     * @return ListLogsResponse
     */
    public function listLogs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListMixCategoriesResponse
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
     * @return ListMixCategoriesResponse
     */
    public function listMixCategories()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMixCategoriesWithOptions($headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListOfflineStoragesResponse
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
     * @param string $instanceId
     *
     * @return ListOfflineStoragesResponse
     */
    public function listOfflineStorages($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOfflineStoragesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                           $instanceId
     * @param ListRankingModelTemplatesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRankingModelTemplatesResponse
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
     * @param string                           $instanceId
     * @param ListRankingModelTemplatesRequest $request
     *
     * @return ListRankingModelTemplatesResponse
     */
    public function listRankingModelTemplates($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelTemplatesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param ListRankingModelVersionsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRankingModelVersionsResponse
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
     * @param string                          $instanceId
     * @param ListRankingModelVersionsRequest $request
     *
     * @return ListRankingModelVersionsResponse
     */
    public function listRankingModelVersions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelVersionsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param ListRankingModelsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListRankingModelsResponse
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
     * @param ListRankingModelsRequest $request
     *
     * @return ListRankingModelsResponse
     */
    public function listRankingModels($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingModelsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param string                            $name
     * @param ListRankingSystemHistoriesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListRankingSystemHistoriesResponse
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
     * @param string                            $instanceId
     * @param string                            $name
     * @param ListRankingSystemHistoriesRequest $request
     *
     * @return ListRankingSystemHistoriesResponse
     */
    public function listRankingSystemHistories($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingSystemHistoriesWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                    $instanceId
     * @param ListRankingSystemsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRankingSystemsResponse
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
     * @param string                    $instanceId
     * @param ListRankingSystemsRequest $request
     *
     * @return ListRankingSystemsResponse
     */
    public function listRankingSystems($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRankingSystemsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRuleConditionsResponse
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
     * @param string $instanceId
     *
     * @return ListRuleConditionsResponse
     */
    public function listRuleConditions($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleConditionsWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string               $instanceId
     * @param ListRuleTasksRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListRuleTasksResponse
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
     * @param string               $instanceId
     * @param ListRuleTasksRequest $request
     *
     * @return ListRuleTasksResponse
     */
    public function listRuleTasks($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleTasksWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param ListRulesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
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
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRulesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sampleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSampleFormatConfigsResponse
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
     * @param string $instanceId
     * @param string $sampleId
     *
     * @return ListSampleFormatConfigsResponse
     */
    public function listSampleFormatConfigs($instanceId, $sampleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSampleFormatConfigsWithOptions($instanceId, $sampleId, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param ListSamplesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSamplesResponse
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
     * @param string             $instanceId
     * @param ListSamplesRequest $request
     *
     * @return ListSamplesResponse
     */
    public function listSamples($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSamplesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $instanceId
     * @param string                $sceneId
     * @param ListSceneItemsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSceneItemsResponse
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
     * @param string                $instanceId
     * @param string                $sceneId
     * @param ListSceneItemsRequest $request
     *
     * @return ListSceneItemsResponse
     */
    public function listSceneItems($instanceId, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSceneItemsWithOptions($instanceId, $sceneId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSceneParametersResponse
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
     * @return ListSceneParametersResponse
     */
    public function listSceneParameters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSceneParametersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string            $instanceId
     * @param ListScenesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
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
     * @param string            $instanceId
     * @param ListScenesRequest $request
     *
     * @return ListScenesResponse
     */
    public function listScenes($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScenesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUmengAppkeysResponse
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
     * @return ListUmengAppkeysResponse
     */
    public function listUmengAppkeys()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUmengAppkeysWithOptions($headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUserClustersResponse
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
     * @return ListUserClustersResponse
     */
    public function listUserClusters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserClustersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyDataSourceResponse
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
     * @param string $instanceId
     * @param string $tableName
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSource($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $type
     * @param string         $featureTableId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyFeatureTableResponse
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
     * @param string $instanceId
     * @param string $type
     * @param string $featureTableId
     *
     * @return ModifyFeatureTableResponse
     */
    public function modifyFeatureTable($instanceId, $type, $featureTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyFilteringAlgorithmMetaResponse
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
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return ModifyFilteringAlgorithmMetaResponse
     */
    public function modifyFilteringAlgorithmMeta($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFilteringAlgorithmMetaWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $taskId
     * @param ModifyFlowControlTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyFlowControlTaskResponse
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
     * @param string                       $instanceId
     * @param string                       $taskId
     * @param ModifyFlowControlTaskRequest $request
     *
     * @return ModifyFlowControlTaskResponse
     */
    public function modifyFlowControlTask($instanceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFlowControlTaskWithOptions($instanceId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyInstanceResponse
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
     * @param string $instanceId
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyItemsResponse
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
     * @return ModifyItemsResponse
     */
    public function modifyItems($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyItemsWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyOfflineStoragesResponse
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
     * @param string $instanceId
     *
     * @return ModifyOfflineStoragesResponse
     */
    public function modifyOfflineStorages($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOfflineStoragesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $rankingModelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyRankingModelResponse
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
     * @param string $instanceId
     * @param string $rankingModelId
     *
     * @return ModifyRankingModelResponse
     */
    public function modifyRankingModel($instanceId, $rankingModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingModelWithOptions($instanceId, $rankingModelId, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param string                            $templateId
     * @param ModifyRankingModelTemplateRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyRankingModelTemplateResponse
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
     * @param string                            $instanceId
     * @param string                            $templateId
     * @param ModifyRankingModelTemplateRequest $request
     *
     * @return ModifyRankingModelTemplateResponse
     */
    public function modifyRankingModelTemplate($instanceId, $templateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingModelTemplateWithOptions($instanceId, $templateId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param string                     $name
     * @param ModifyRankingSystemRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRankingSystemResponse
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
     * @param string                     $instanceId
     * @param string                     $name
     * @param ModifyRankingSystemRequest $request
     *
     * @return ModifyRankingSystemResponse
     */
    public function modifyRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $ruleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyRuleResponse
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
     * @param string $instanceId
     * @param string $ruleId
     *
     * @return ModifyRuleResponse
     */
    public function modifyRule($instanceId, $ruleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRuleWithOptions($instanceId, $ruleId, $headers, $runtime);
    }

    /**
     * @param string              $instanceId
     * @param string              $sampleId
     * @param ModifySampleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySampleResponse
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
     * @param string              $instanceId
     * @param string              $sampleId
     * @param ModifySampleRequest $request
     *
     * @return ModifySampleResponse
     */
    public function modifySample($instanceId, $sampleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySampleWithOptions($instanceId, $sampleId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifySceneResponse
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
     * @param string $instanceId
     * @param string $sceneId
     *
     * @return ModifySceneResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return OfflineFilteringAlgorithmResponse
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
     * @return OfflineFilteringAlgorithmResponse
     */
    public function offlineFilteringAlgorithm($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineFilteringAlgorithmWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PublishFlowControlTaskResponse
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
     * @param string $instanceId
     * @param string $taskId
     *
     * @return PublishFlowControlTaskResponse
     */
    public function publishFlowControlTask($instanceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFlowControlTaskWithOptions($instanceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string             $ruleId
     * @param string             $instanceId
     * @param PublishRuleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PublishRuleResponse
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
     * @param string             $ruleId
     * @param string             $instanceId
     * @param PublishRuleRequest $request
     *
     * @return PublishRuleResponse
     */
    public function publishRule($ruleId, $instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRuleWithOptions($ruleId, $instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $tableName
     * @param PushColdStartDocumentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return PushColdStartDocumentResponse
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
     * @param string                       $instanceId
     * @param string                       $tableName
     * @param PushColdStartDocumentRequest $request
     *
     * @return PushColdStartDocumentResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushDocumentResponse
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
     * @return PushDocumentResponse
     */
    public function pushDocument($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDocumentWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushInterventionResponse
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
     * @return PushInterventionResponse
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
     * @param QueryDataMessageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDataMessageResponse
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
     * @param QueryDataMessageRequest $request
     *
     * @return QueryDataMessageResponse
     */
    public function queryDataMessage($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param string                            $table
     * @param QueryDataMessageStatisticsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDataMessageStatisticsResponse
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
     * @param string                            $instanceId
     * @param string                            $table
     * @param QueryDataMessageStatisticsRequest $request
     *
     * @return QueryDataMessageStatisticsResponse
     */
    public function queryDataMessageStatistics($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageStatisticsWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param QueryExceptionHistoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryExceptionHistoryResponse
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
     * @param QueryExceptionHistoryRequest $request
     *
     * @return QueryExceptionHistoryResponse
     */
    public function queryExceptionHistory($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryExceptionHistoryWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string              $instanceId
     * @param string              $table
     * @param QueryRawDataRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryRawDataResponse
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
     * @param string              $instanceId
     * @param string              $table
     * @param QueryRawDataRequest $request
     *
     * @return QueryRawDataResponse
     */
    public function queryRawData($instanceId, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRawDataWithOptions($instanceId, $table, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QuerySingleAggregationReportResponse
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
     * @return QuerySingleAggregationReportResponse
     */
    public function querySingleAggregationReport($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleAggregationReportWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param QuerySingleReportRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySingleReportResponse
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
     * @param string                   $instanceId
     * @param QuerySingleReportRequest $request
     *
     * @return QuerySingleReportResponse
     */
    public function querySingleReport($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleReportWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $instanceId
     * @param QuerySyncReportAggregationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySyncReportAggregationResponse
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
     * @param string                            $instanceId
     * @param QuerySyncReportAggregationRequest $request
     *
     * @return QuerySyncReportAggregationResponse
     */
    public function querySyncReportAggregation($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySyncReportAggregationWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $algorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RebuildIndexResponse
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
     * @param string $instanceId
     * @param string $algorithmId
     *
     * @return RebuildIndexResponse
     */
    public function rebuildIndex($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildIndexWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param RecommendRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return RecommendResponse
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
     * @param string           $instanceId
     * @param RecommendRequest $request
     *
     * @return RecommendResponse
     */
    public function recommend($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recommendWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $type
     * @param string         $featureTableId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefreshFeatureTableResponse
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
     * @param string $instanceId
     * @param string $type
     * @param string $featureTableId
     *
     * @return RefreshFeatureTableResponse
     */
    public function refreshFeatureTable($instanceId, $type, $featureTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshFeatureTableWithOptions($instanceId, $type, $featureTableId, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $name
     * @param RollbackRankingSystemRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RollbackRankingSystemResponse
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
     * @param string                       $instanceId
     * @param string                       $name
     * @param RollbackRankingSystemRequest $request
     *
     * @return RollbackRankingSystemResponse
     */
    public function rollbackRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RunInstanceResponse
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
     * @param string $instanceId
     *
     * @return RunInstanceResponse
     */
    public function runInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $templateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RunRankingModelTemplateResponse
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
     * @param string $instanceId
     * @param string $templateId
     *
     * @return RunRankingModelTemplateResponse
     */
    public function runRankingModelTemplate($instanceId, $templateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runRankingModelTemplateWithOptions($instanceId, $templateId, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $sampleId
     * @param RunSampleFormatConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RunSampleFormatConfigResponse
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
     * @param string                       $instanceId
     * @param string                       $sampleId
     * @param RunSampleFormatConfigRequest $request
     *
     * @return RunSampleFormatConfigResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopDataSetResponse
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
     * @return StopDataSetResponse
     */
    public function stopDataSet($instanceId, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDataSetWithOptions($instanceId, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopFlowControlTaskResponse
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
     * @param string $instanceId
     * @param string $taskId
     *
     * @return StopFlowControlTaskResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnLockIndexVersionResponse
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
     * @return UnLockIndexVersionResponse
     */
    public function unLockIndexVersion($instanceId, $algorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLockIndexVersionWithOptions($instanceId, $algorithmId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateExperimentBasicInfoResponse
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
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return UpdateExperimentBasicInfoResponse
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateExperimentConfigResponse
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
     * @return UpdateExperimentConfigResponse
     */
    public function updateExperimentConfig($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentConfigWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $sceneId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateExperimentStatusResponse
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
     * @param string $instanceId
     * @param string $sceneId
     * @param string $experimentId
     *
     * @return UpdateExperimentStatusResponse
     */
    public function updateExperimentStatus($instanceId, $sceneId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentStatusWithOptions($instanceId, $sceneId, $experimentId, $headers, $runtime);
    }

    /**
     * You can call this operation to modify the quotas of a specified instance.
     *   * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) for recommendation requests: 10 to 500.
     *   *
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
     * You can call this operation to modify the quotas of a specified instance.
     *   * The limits on the number of users: 1,000,000 to 10,000,000. The limits on the number of items: 1,000,000 to 10,000,000. The limits on the queries per second (QPS) for recommendation requests: 10 to 500.
     *   *
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ValidateInstanceResponse
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
     * @return ValidateInstanceResponse
     */
    public function validateInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param string                     $name
     * @param VerifyRankingSystemRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return VerifyRankingSystemResponse
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
     * @param string                     $instanceId
     * @param string                     $name
     * @param VerifyRankingSystemRequest $request
     *
     * @return VerifyRankingSystemResponse
     */
    public function verifyRankingSystem($instanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyRankingSystemWithOptions($instanceId, $name, $request, $headers, $runtime);
    }
}

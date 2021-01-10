<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CompileSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateDataCollectionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppStatisticsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeDataCollctionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSlowQueryStatusResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DisableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\EnableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetModelProgressResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetModelReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetScriptFileNamesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationErrorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationErrorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestExperimentsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestMetricsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestScenesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupErrorsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupErrorsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupMetricsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupMetricsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryRelatedEntitiesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListModelsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListModelsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSecondRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortExpressionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortScriptsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PreviewModelRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PreviewModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RankPreviewQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReleaseSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveDataCollectionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RenewAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReplaceAppGroupCommodityCodeResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SaveSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\StartSlowQueryAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\TrainModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class OpenSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('opensearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return CompileSortScriptResponse
     */
    public function compileSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CompileSortScriptResponse
     */
    public function compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CompileSortScriptResponse::fromMap($this->doROARequest('CompileSortScript', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/actions/compiling', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperiment($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateABTestExperimentResponse::fromMap($this->doROARequest('CreateABTestExperiment', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroup($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestGroupWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroupWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateABTestGroupResponse::fromMap($this->doROARequest('CreateABTestGroup', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestScene($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestSceneWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestSceneWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateABTestSceneResponse::fromMap($this->doROARequest('CreateABTestScene', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes', 'json', $req, $runtime));
    }

    /**
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateAppResponse::fromMap($this->doROARequest('CreateApp', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps', 'json', $req, $runtime));
    }

    /**
     * @return CreateAppGroupResponse
     */
    public function createAppGroup()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateAppGroupResponse::fromMap($this->doROARequest('CreateAppGroup', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateDataCollectionResponse
     */
    public function createDataCollection($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataCollectionWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDataCollectionResponse
     */
    public function createDataCollectionWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateDataCollectionResponse::fromMap($this->doROARequest('CreateDataCollection', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections', 'json', $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request
     *
     * @return CreateFirstRankResponse
     */
    public function createFirstRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFirstRankResponse
     */
    public function createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateFirstRankResponse::fromMap($this->doROARequest('CreateFirstRank', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/first-ranks', 'json', $req, $runtime));
    }

    /**
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionary()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInterventionDictionaryWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionaryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateInterventionDictionaryResponse::fromMap($this->doROARequest('CreateInterventionDictionary', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/intervention-dictionaries', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateModelResponse
     */
    public function createModel($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateModelResponse::fromMap($this->doROARequest('CreateModel', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models', 'json', $req, $runtime));
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request
     *
     * @return CreateQueryProcessorResponse
     */
    public function createQueryProcessor($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateQueryProcessorResponse
     */
    public function createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateQueryProcessorResponse::fromMap($this->doROARequest('CreateQueryProcessor', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/query-processors', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledTaskWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateScheduledTaskResponse::fromMap($this->doROARequest('CreateScheduledTask', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks', 'json', $req, $runtime));
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request
     *
     * @return CreateSecondRankResponse
     */
    public function createSecondRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSecondRankResponse
     */
    public function createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateSecondRankResponse::fromMap($this->doROARequest('CreateSecondRank', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/second-ranks', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScript($appGroupIdentity, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSortScriptWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScriptWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateSortScriptResponse::fromMap($this->doROARequest('CreateSortScript', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts', 'json', $req, $runtime));
    }

    /**
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzer()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserAnalyzerWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzerWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateUserAnalyzerResponse::fromMap($this->doROARequest('CreateUserAnalyzer', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/user-analyzers', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DeleteABTestExperimentResponse
     */
    public function deleteABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestExperimentResponse
     */
    public function deleteABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteABTestExperimentResponse::fromMap($this->doROARequest('DeleteABTestExperiment', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DeleteABTestGroupResponse
     */
    public function deleteABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestGroupResponse
     */
    public function deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteABTestGroupResponse::fromMap($this->doROARequest('DeleteABTestGroup', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DeleteABTestSceneResponse
     */
    public function deleteABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestSceneResponse
     */
    public function deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteABTestSceneResponse::fromMap($this->doROARequest('DeleteABTestScene', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteModelResponse::fromMap($this->doROARequest('DeleteModel', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return DeleteSortScriptResponse
     */
    public function deleteSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSortScriptResponse
     */
    public function deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteSortScriptResponse::fromMap($this->doROARequest('DeleteSortScript', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     * @param string $fileName
     *
     * @return DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFile($appGroupIdentity, $appVersionId, $scriptName, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteSortScriptFileResponse::fromMap($this->doROARequest('DeleteSortScriptFile', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DescribeABTestExperimentResponse
     */
    public function describeABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestExperimentResponse
     */
    public function describeABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeABTestExperimentResponse::fromMap($this->doROARequest('DescribeABTestExperiment', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DescribeABTestGroupResponse
     */
    public function describeABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestGroupResponse
     */
    public function describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeABTestGroupResponse::fromMap($this->doROARequest('DescribeABTestGroup', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DescribeABTestSceneResponse
     */
    public function describeABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestSceneResponse
     */
    public function describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeABTestSceneResponse::fromMap($this->doROARequest('DescribeABTestScene', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppResponse
     */
    public function describeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppResponse::fromMap($this->doROARequest('DescribeApp', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppGroupResponse
     */
    public function describeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppGroupResponse
     */
    public function describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppGroupResponse::fromMap($this->doROARequest('DescribeAppGroup', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '', 'json', $req, $runtime));
    }

    /**
     * @param string                            $appGroupIdentity
     * @param DescribeAppGroupDataReportRequest $request
     *
     * @return DescribeAppGroupDataReportResponse
     */
    public function describeAppGroupDataReport($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupDataReportWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                            $appGroupIdentity
     * @param DescribeAppGroupDataReportRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAppGroupDataReportResponse
     */
    public function describeAppGroupDataReportWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppGroupDataReportResponse::fromMap($this->doROARequest('DescribeAppGroupDataReport', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-report', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppsWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppsResponse::fromMap($this->doROARequest('DescribeApps', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppStatisticsResponse
     */
    public function describeAppStatistics($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppStatisticsResponse
     */
    public function describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppStatisticsResponse::fromMap($this->doROARequest('DescribeAppStatistics', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/statistics', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return DescribeDataCollctionResponse
     */
    public function describeDataCollction($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDataCollctionResponse
     */
    public function describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeDataCollctionResponse::fromMap($this->doROARequest('DescribeDataCollction', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections/{dataCollectionIdentity}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeFirstRankResponse
     */
    public function describeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFirstRankResponse
     */
    public function describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeFirstRankResponse::fromMap($this->doROARequest('DescribeFirstRank', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/first-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeInterventionDictionaryResponse::fromMap($this->doROARequest('DescribeInterventionDictionary', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return DescribeModelResponse
     */
    public function describeModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeModelResponse
     */
    public function describeModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeModelResponse::fromMap($this->doROARequest('DescribeModel', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeQueryProcessorResponse
     */
    public function describeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeQueryProcessorResponse
     */
    public function describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeQueryProcessorResponse::fromMap($this->doROARequest('DescribeQueryProcessor', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/query-processors/{name}', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionResponse
     */
    public function describeRegion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionResponse
     */
    public function describeRegionWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeRegionResponse::fromMap($this->doROARequest('DescribeRegion', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/region', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeRegionsResponse::fromMap($this->doROARequest('DescribeRegions', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/regions', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return DescribeScheduledTaskResponse
     */
    public function describeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScheduledTaskResponse
     */
    public function describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeScheduledTaskResponse::fromMap($this->doROARequest('DescribeScheduledTask', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/{taskId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeSecondRankResponse
     */
    public function describeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSecondRankResponse
     */
    public function describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeSecondRankResponse::fromMap($this->doROARequest('DescribeSecondRank', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/second-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatus($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeSlowQueryStatusResponse::fromMap($this->doROARequest('DescribeSlowQueryStatus', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query', 'json', $req, $runtime));
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request
     *
     * @return DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzer($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserAnalyzerWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzerWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->with)) {
            @$query['with'] = $request->with;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUserAnalyzerResponse::fromMap($this->doROARequest('DescribeUserAnalyzer', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/user-analyzers/' . $name . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DisableSlowQueryResponse
     */
    public function disableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableSlowQueryResponse
     */
    public function disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DisableSlowQueryResponse::fromMap($this->doROARequest('DisableSlowQuery', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/disable', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return EnableSlowQueryResponse
     */
    public function enableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableSlowQueryResponse
     */
    public function enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return EnableSlowQueryResponse::fromMap($this->doROARequest('EnableSlowQuery', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/enable', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return GetModelProgressResponse
     */
    public function getModelProgress($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelProgressWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelProgressResponse
     */
    public function getModelProgressWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetModelProgressResponse::fromMap($this->doROARequest('GetModelProgress', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}/progress', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return GetModelReportResponse
     */
    public function getModelReport($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelReportWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelReportResponse
     */
    public function getModelReportWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetModelReportResponse::fromMap($this->doROARequest('GetModelReport', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}/report', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     *
     * @return GetScriptFileNamesResponse
     */
    public function getScriptFileNames($appGroupIdentity, $appVersionId, $scriptName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetScriptFileNamesResponse
     */
    public function getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetScriptFileNamesResponse::fromMap($this->doROARequest('GetScriptFileNames', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/file-names', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return GetSortScriptResponse
     */
    public function getSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSortScriptResponse
     */
    public function getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetSortScriptResponse::fromMap($this->doROARequest('GetSortScript', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     * @param string $fileName
     *
     * @return GetSortScriptFileResponse
     */
    public function getSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSortScriptFileResponse
     */
    public function getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetSortScriptFileResponse::fromMap($this->doROARequest('GetSortScriptFile', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}', 'json', $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param GetValidationErrorRequest $request
     *
     * @return GetValidationErrorResponse
     */
    public function getValidationError($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getValidationErrorWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param GetValidationErrorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetValidationErrorResponse
     */
    public function getValidationErrorWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->errorCode)) {
            @$query['errorCode'] = $request->errorCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetValidationErrorResponse::fromMap($this->doROARequest('GetValidationError', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/data/validation-error', 'json', $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param GetValidationReportRequest $request
     *
     * @return GetValidationReportResponse
     */
    public function getValidationReport($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getValidationReportWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param GetValidationReportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetValidationReportResponse
     */
    public function getValidationReportWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetValidationReportResponse::fromMap($this->doROARequest('GetValidationReport', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/data/validation-report', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return ListABTestExperimentsResponse
     */
    public function listABTestExperiments($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestExperimentsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestExperimentsResponse
     */
    public function listABTestExperimentsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListABTestExperimentsResponse::fromMap($this->doROARequest('ListABTestExperiments', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return ListABTestFixedFlowDividersResponse
     */
    public function listABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestFixedFlowDividersResponse
     */
    public function listABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListABTestFixedFlowDividersResponse::fromMap($this->doROARequest('ListABTestFixedFlowDividers', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return ListABTestGroupsResponse
     */
    public function listABTestGroups($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestGroupsResponse
     */
    public function listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListABTestGroupsResponse::fromMap($this->doROARequest('ListABTestGroups', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return ListABTestMetricsResponse
     */
    public function listABTestMetrics($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestMetricsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestMetricsResponse
     */
    public function listABTestMetricsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListABTestMetricsResponse::fromMap($this->doROARequest('ListABTestMetrics', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/metrics', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListABTestScenesResponse
     */
    public function listABTestScenes($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestScenesResponse
     */
    public function listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListABTestScenesResponse::fromMap($this->doROARequest('ListABTestScenes', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes', 'json', $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListAppGroupErrorsRequest $request
     *
     * @return ListAppGroupErrorsResponse
     */
    public function listAppGroupErrors($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupErrorsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListAppGroupErrorsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAppGroupErrorsResponse
     */
    public function listAppGroupErrorsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            @$query['stopTime'] = $request->stopTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAppGroupErrorsResponse::fromMap($this->doROARequest('ListAppGroupErrors', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/errors', 'json', $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListAppGroupMetricsRequest $request
     *
     * @return ListAppGroupMetricsResponse
     */
    public function listAppGroupMetrics($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupMetricsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListAppGroupMetricsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppGroupMetricsResponse
     */
    public function listAppGroupMetricsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metricType)) {
            @$query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->indexes)) {
            @$query['indexes'] = $request->indexes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAppGroupMetricsResponse::fromMap($this->doROARequest('ListAppGroupMetrics', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/metrics', 'json', $req, $runtime));
    }

    /**
     * @param ListAppGroupsRequest $request
     *
     * @return ListAppGroupsResponse
     */
    public function listAppGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppGroupsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAppGroupsResponse
     */
    public function listAppGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['sortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAppGroupsResponse::fromMap($this->doROARequest('ListAppGroups', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups', 'json', $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->group)) {
            @$query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAppsResponse::fromMap($this->doROARequest('ListApps', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/apps', 'none', $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request
     *
     * @return ListDataCollectionsResponse
     */
    public function listDataCollections($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataCollectionsResponse
     */
    public function listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDataCollectionsResponse::fromMap($this->doROARequest('ListDataCollections', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections', 'json', $req, $runtime));
    }

    /**
     * @param string                             $appGroupIdentity
     * @param ListDeployedAlgorithmModelsRequest $request
     *
     * @return ListDeployedAlgorithmModelsResponse
     */
    public function listDeployedAlgorithmModels($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeployedAlgorithmModelsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                             $appGroupIdentity
     * @param ListDeployedAlgorithmModelsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDeployedAlgorithmModelsResponse
     */
    public function listDeployedAlgorithmModelsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inServiceOnly)) {
            @$query['inServiceOnly'] = $request->inServiceOnly;
        }
        if (!Utils::isUnset($request->algorithmType)) {
            @$query['algorithmType'] = $request->algorithmType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDeployedAlgorithmModelsResponse::fromMap($this->doROARequest('ListDeployedAlgorithmModels', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/deployed-algorithm-models', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListFirstRanksResponse
     */
    public function listFirstRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFirstRanksResponse
     */
    public function listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListFirstRanksResponse::fromMap($this->doROARequest('ListFirstRanks', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/first-ranks', 'json', $req, $runtime));
    }

    /**
     * @param ListInterventionDictionariesRequest $request
     *
     * @return ListInterventionDictionariesResponse
     */
    public function listInterventionDictionaries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInterventionDictionariesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInterventionDictionariesResponse
     */
    public function listInterventionDictionariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->types)) {
            @$query['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInterventionDictionariesResponse::fromMap($this->doROARequest('ListInterventionDictionaries', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/intervention-dictionaries', 'json', $req, $runtime));
    }

    /**
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request
     *
     * @return ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->word)) {
            @$query['word'] = $request->word;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInterventionDictionaryEntriesResponse::fromMap($this->doROARequest('ListInterventionDictionaryEntries', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '/entries', 'json', $req, $runtime));
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request
     *
     * @return ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResults($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInterventionDictionaryNerResultsResponse::fromMap($this->doROARequest('ListInterventionDictionaryNerResults', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '/ner-results', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntities($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListInterventionDictionaryRelatedEntitiesResponse::fromMap($this->doROARequest('ListInterventionDictionaryRelatedEntities', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '/related', 'json', $req, $runtime));
    }

    /**
     * @param string            $appGroupIdentity
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string            $appGroupIdentity
     * @param ListModelsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListModelsResponse::fromMap($this->doROARequest('ListModels', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models', 'json', $req, $runtime));
    }

    /**
     * @param ListQueryProcessorNersRequest $request
     *
     * @return ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorNersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListQueryProcessorNersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            @$query['domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListQueryProcessorNersResponse::fromMap($this->doROARequest('ListQueryProcessorNers', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/query-processor/ner/default-priorities', 'json', $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request
     *
     * @return ListQueryProcessorsResponse
     */
    public function listQueryProcessors($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListQueryProcessorsResponse
     */
    public function listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isActive)) {
            @$query['isActive'] = $request->isActive;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListQueryProcessorsResponse::fromMap($this->doROARequest('ListQueryProcessors', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/query-processors', 'json', $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListScheduledTasksResponse::fromMap($this->doROARequest('ListScheduledTasks', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSecondRanksResponse
     */
    public function listSecondRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSecondRanksResponse
     */
    public function listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSecondRanksResponse::fromMap($this->doROARequest('ListSecondRanks', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/second-ranks', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategories($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSlowQueryCategoriesResponse::fromMap($this->doROARequest('ListSlowQueryCategories', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/categories', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $categoryIndex
     *
     * @return ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueries($appGroupIdentity, $categoryIndex)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $categoryIndex
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSlowQueryQueriesResponse::fromMap($this->doROARequest('ListSlowQueryQueries', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/categories/{categoryIndex}/queries', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSortExpressionsResponse
     */
    public function listSortExpressions($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSortExpressionsResponse
     */
    public function listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSortExpressionsResponse::fromMap($this->doROARequest('ListSortExpressions', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/sort-expressions', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     *
     * @return ListSortScriptsResponse
     */
    public function listSortScripts($appGroupIdentity, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSortScriptsResponse
     */
    public function listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSortScriptsResponse::fromMap($this->doROARequest('ListSortScripts', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts', 'json', $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request
     *
     * @return ListStatisticLogsResponse
     */
    public function listStatisticLogs($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListStatisticLogsResponse
     */
    public function listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            @$query['stopTime'] = $request->stopTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['sortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->distinct)) {
            @$query['distinct'] = $request->distinct;
        }
        if (!Utils::isUnset($request->columns)) {
            @$query['columns'] = $request->columns;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListStatisticLogsResponse::fromMap($this->doROARequest('ListStatisticLogs', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/statistic-logs/{moduleName}', 'json', $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request
     *
     * @return ListStatisticReportResponse
     */
    public function listStatisticReport($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListStatisticReportResponse
     */
    public function listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->columns)) {
            @$query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListStatisticReportResponse::fromMap($this->doROARequest('ListStatisticReport', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/statistic-report/{moduleName}', 'json', $req, $runtime));
    }

    /**
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request
     *
     * @return ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->word)) {
            @$query['word'] = $request->word;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListUserAnalyzerEntriesResponse::fromMap($this->doROARequest('ListUserAnalyzerEntries', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/user-analyzers/' . $name . '/entries', 'json', $req, $runtime));
    }

    /**
     * @param ListUserAnalyzersRequest $request
     *
     * @return ListUserAnalyzersResponse
     */
    public function listUserAnalyzers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserAnalyzersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserAnalyzersResponse
     */
    public function listUserAnalyzersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListUserAnalyzersResponse::fromMap($this->doROARequest('ListUserAnalyzers', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/user-analyzers', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyAppGroupResponse::fromMap($this->doROARequest('ModifyAppGroup', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuota($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupQuotaWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuotaWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyAppGroupQuotaResponse::fromMap($this->doROARequest('ModifyAppGroupQuota', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/quota', 'json', $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request
     *
     * @return ModifyFirstRankResponse
     */
    public function modifyFirstRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyFirstRankResponse
     */
    public function modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyFirstRankResponse::fromMap($this->doROARequest('ModifyFirstRank', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/first-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return ModifyModelResponse
     */
    public function modifyModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyModelResponse::fromMap($this->doROARequest('ModifyModel', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}', 'json', $req, $runtime));
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request
     *
     * @return ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessor($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyQueryProcessorResponse::fromMap($this->doROARequest('ModifyQueryProcessor', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/query-processors/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->doROARequest('ModifyScheduledTask', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/{taskId}', 'json', $req, $runtime));
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request
     *
     * @return ModifySecondRankResponse
     */
    public function modifySecondRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySecondRankResponse
     */
    public function modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifySecondRankResponse::fromMap($this->doROARequest('ModifySecondRank', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/second-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string              $appGroupIdentity
     * @param string              $modelName
     * @param PreviewModelRequest $request
     *
     * @return PreviewModelResponse
     */
    public function previewModel($appGroupIdentity, $modelName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewModelWithOptions($appGroupIdentity, $modelName, $request, $headers, $runtime);
    }

    /**
     * @param string              $appGroupIdentity
     * @param string              $modelName
     * @param PreviewModelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewModelResponse
     */
    public function previewModelWithOptions($appGroupIdentity, $modelName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return PreviewModelResponse::fromMap($this->doROARequest('PreviewModel', '2017-12-25', 'HTTPS', 'GET', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}/actions/preview', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntries($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionDictionaryEntriesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntriesWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PushInterventionDictionaryEntriesResponse::fromMap($this->doROARequest('PushInterventionDictionaryEntries', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '/entries/actions/bulk', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntries($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushUserAnalyzerEntriesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntriesWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PushUserAnalyzerEntriesResponse::fromMap($this->doROARequest('PushUserAnalyzerEntries', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/user-analyzers/' . $name . '/entries/actions/bulk', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return RankPreviewQueryResponse
     */
    public function rankPreviewQuery($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rankPreviewQueryWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RankPreviewQueryResponse
     */
    public function rankPreviewQueryWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RankPreviewQueryResponse::fromMap($this->doROARequest('RankPreviewQuery', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}/actions/query-rank', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return ReleaseSortScriptResponse
     */
    public function releaseSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReleaseSortScriptResponse
     */
    public function releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ReleaseSortScriptResponse::fromMap($this->doROARequest('ReleaseSortScript', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/actions/release', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return RemoveAppResponse
     */
    public function removeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveAppResponse
     */
    public function removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveAppResponse::fromMap($this->doROARequest('RemoveApp', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return RemoveAppGroupResponse
     */
    public function removeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveAppGroupResponse
     */
    public function removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveAppGroupResponse::fromMap($this->doROARequest('RemoveAppGroup', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return RemoveDataCollectionResponse
     */
    public function removeDataCollection($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveDataCollectionResponse
     */
    public function removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveDataCollectionResponse::fromMap($this->doROARequest('RemoveDataCollection', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections/{dataCollectionIdentity}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveFirstRankResponse
     */
    public function removeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveFirstRankResponse
     */
    public function removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveFirstRankResponse::fromMap($this->doROARequest('RemoveFirstRank', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/first-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveInterventionDictionaryResponse::fromMap($this->doROARequest('RemoveInterventionDictionary', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/intervention-dictionaries/' . $name . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveQueryProcessorResponse
     */
    public function removeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveQueryProcessorResponse
     */
    public function removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveQueryProcessorResponse::fromMap($this->doROARequest('RemoveQueryProcessor', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/query-processors/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return RemoveScheduledTaskResponse
     */
    public function removeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveScheduledTaskResponse
     */
    public function removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveScheduledTaskResponse::fromMap($this->doROARequest('RemoveScheduledTask', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/{taskId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveSecondRankResponse
     */
    public function removeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveSecondRankResponse
     */
    public function removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveSecondRankResponse::fromMap($this->doROARequest('RemoveSecondRank', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/second-ranks/{name}', 'json', $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzer($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeUserAnalyzerWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzerWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveUserAnalyzerResponse::fromMap($this->doROARequest('RemoveUserAnalyzer', '2017-12-25', 'HTTPS', 'DELETE', 'AK', '/v4/openapi/user-analyzers/' . $name . '', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RenewAppGroupResponse::fromMap($this->doROARequest('RenewAppGroup', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/renew', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCode($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ReplaceAppGroupCommodityCodeResponse::fromMap($this->doROARequest('ReplaceAppGroupCommodityCode', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/to-instance-typed', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     * @param string $fileName
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return SaveSortScriptFileResponse::fromMap($this->doROARequest('SaveSortScriptFile', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzer($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StartSlowQueryAnalyzerResponse::fromMap($this->doROARequest('StartSlowQueryAnalyzer', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/run', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return TrainModelResponse
     */
    public function trainModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TrainModelResponse
     */
    public function trainModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return TrainModelResponse::fromMap($this->doROARequest('TrainModel', '2017-12-25', 'HTTPS', 'POST', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/{modelName}/actions/train', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateABTestExperimentResponse::fromMap($this->doROARequest('UpdateABTestExperiment', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateABTestFixedFlowDividersResponse::fromMap($this->doROARequest('UpdateABTestFixedFlowDividers', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateABTestGroupResponse::fromMap($this->doROARequest('UpdateABTestGroup', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}/groups/{groupId}', 'json', $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateABTestSceneResponse::fromMap($this->doROARequest('UpdateABTestScene', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/{sceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request
     *
     * @return UpdateFetchFieldsResponse
     */
    public function updateFetchFields($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateFetchFieldsResponse
     */
    public function updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateFetchFieldsResponse::fromMap($this->doROARequest('UpdateFetchFields', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/fetch-fields', 'json', $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request
     *
     * @return UpdateSummariesResponse
     */
    public function updateSummaries($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSummariesResponse
     */
    public function updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateSummariesResponse::fromMap($this->doROARequest('UpdateSummaries', '2017-12-25', 'HTTPS', 'PUT', 'AK', '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/{appId}/summaries', 'json', $req, $runtime));
    }
}

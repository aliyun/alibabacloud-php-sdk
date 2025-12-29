<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindEsInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindEsInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindESUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindESUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CompileSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestExperimentRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestGroupRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestSceneRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupCredentialsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupCredentialsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSearchStrategyRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSortScriptRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteFunctionResourceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteFunctionTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppStatisticsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeDataCollctionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSlowQueryStatusResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DisableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\EnableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetDomainRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetDomainResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionDefaultInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionResourceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionResourceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetScriptFileNamesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestExperimentsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestScenesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsShrinkRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTableFieldsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTableFieldsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTablesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTablesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionInstancesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionInstancesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionResourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionResourcesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryRelatedEntitiesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListProceedingsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListProceedingsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorAnalyzerResultsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorAnalyzerResultsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSearchStrategiesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSecondRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortExpressionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortScriptsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushInterventionDictionaryEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReleaseSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveDataCollectionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RenewAppGroupRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RenewAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReplaceAppGroupCommodityCodeResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SaveSortScriptFileRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SaveSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\StartSlowQueryAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\TagResourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\TagResourcesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UnbindEsInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UnbindESUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UnbindESUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestExperimentRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestFixedFlowDividersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestGroupRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestSceneRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionDefaultInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionDefaultInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSearchStrategyRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSortScriptRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Binds a custom analyzer to an Elasticsearch instance.
     *
     * @param request - BindESUserAnalyzerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindESUserAnalyzerResponse
     *
     * @param string                    $appGroupIdentity
     * @param string                    $esInstanceId
     * @param BindESUserAnalyzerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'BindESUserAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/es/' . Url::percentEncode($esInstanceId) . '/actions/bind-analyzer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a custom analyzer to an Elasticsearch instance.
     *
     * @param request - BindESUserAnalyzerRequest
     *
     * @returns BindESUserAnalyzerResponse
     *
     * @param string                    $appGroupIdentity
     * @param string                    $esInstanceId
     * @param BindESUserAnalyzerRequest $request
     *
     * @return BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzer($appGroupIdentity, $esInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime);
    }

    /**
     * Binds an Elasticsearch instance.
     *
     * @param request - BindEsInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindEsInstanceResponse
     *
     * @param string                $appGroupIdentity
     * @param BindEsInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return BindEsInstanceResponse
     */
    public function bindEsInstanceWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindEsInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/actions/bind-es-instance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an Elasticsearch instance.
     *
     * @param request - BindEsInstanceRequest
     *
     * @returns BindEsInstanceResponse
     *
     * @param string                $appGroupIdentity
     * @param BindEsInstanceRequest $request
     *
     * @return BindEsInstanceResponse
     */
    public function bindEsInstance($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindEsInstanceWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Compiles a sort script.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompileSortScriptResponse
     *
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
        $params = new Params([
            'action' => 'CompileSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/actions/compiling',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompileSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compiles a sort script.
     *
     * @returns CompileSortScriptResponse
     *
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
     * Creates an experiment.
     *
     * @param request - CreateABTestExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateABTestExperimentResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param CreateABTestExperimentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateABTestExperiment',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an experiment.
     *
     * @param request - CreateABTestExperimentRequest
     *
     * @returns CreateABTestExperimentResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param CreateABTestExperimentRequest $request
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperiment($appGroupIdentity, $sceneId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Creates a test group.
     *
     * @param request - CreateABTestGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateABTestGroupResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param CreateABTestGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroupWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateABTestGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a test group.
     *
     * @param request - CreateABTestGroupRequest
     *
     * @returns CreateABTestGroupResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param CreateABTestGroupRequest $request
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroup($appGroupIdentity, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestGroupWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime);
    }

    /**
     * Creates an scenario.
     *
     * @param request - CreateABTestSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateABTestSceneResponse
     *
     * @param string                   $appGroupIdentity
     * @param CreateABTestSceneRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestSceneWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateABTestScene',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an scenario.
     *
     * @param request - CreateABTestSceneRequest
     *
     * @returns CreateABTestSceneResponse
     *
     * @param string                   $appGroupIdentity
     * @param CreateABTestSceneRequest $request
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestScene($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestSceneWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Creates a version for an OpenSearch application.
     *
     * @remarks
     *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *
     * @param request - CreateAppRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->autoSwitch) {
            @$body['autoSwitch'] = $request->autoSwitch;
        }

        if (null !== $request->cluster) {
            @$body['cluster'] = $request->cluster;
        }

        if (null !== $request->configItems) {
            @$body['configItems'] = $request->configItems;
        }

        if (null !== $request->dataSources) {
            @$body['dataSources'] = $request->dataSources;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->fetchFields) {
            @$body['fetchFields'] = $request->fetchFields;
        }

        if (null !== $request->firstRanks) {
            @$body['firstRanks'] = $request->firstRanks;
        }

        if (null !== $request->interpretations) {
            @$body['interpretations'] = $request->interpretations;
        }

        if (null !== $request->networkType) {
            @$body['networkType'] = $request->networkType;
        }

        if (null !== $request->prompts) {
            @$body['prompts'] = $request->prompts;
        }

        if (null !== $request->queryProcessors) {
            @$body['queryProcessors'] = $request->queryProcessors;
        }

        if (null !== $request->realtimeShared) {
            @$body['realtimeShared'] = $request->realtimeShared;
        }

        if (null !== $request->schema) {
            @$body['schema'] = $request->schema;
        }

        if (null !== $request->schemas) {
            @$body['schemas'] = $request->schemas;
        }

        if (null !== $request->secondRanks) {
            @$body['secondRanks'] = $request->secondRanks;
        }

        if (null !== $request->summaries) {
            @$body['summaries'] = $request->summaries;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a version for an OpenSearch application.
     *
     * @remarks
     *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
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
     * Creates an OpenSearch application.
     *
     * @param request - CreateAppGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppGroupResponse
     *
     * @param CreateAppGroupRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an OpenSearch application.
     *
     * @param request - CreateAppGroupRequest
     *
     * @returns CreateAppGroupResponse
     *
     * @param CreateAppGroupRequest $request
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - CreateAppGroupCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppGroupCredentialsResponse
     *
     * @param string                           $appGroupIdentity
     * @param CreateAppGroupCredentialsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAppGroupCredentialsResponse
     */
    public function createAppGroupCredentialsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppGroupCredentials',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/credentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAppGroupCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAppGroupCredentialsRequest
     *
     * @returns CreateAppGroupCredentialsResponse
     *
     * @param string                           $appGroupIdentity
     * @param CreateAppGroupCredentialsRequest $request
     *
     * @return CreateAppGroupCredentialsResponse
     */
    public function createAppGroupCredentials($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupCredentialsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Creates a rough sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified rough sort expression. By default, the value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateFirstRankRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFirstRankResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateFirstRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/first-ranks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a rough sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified rough sort expression. By default, the value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateFirstRankRequest
     *
     * @returns CreateFirstRankResponse
     *
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
     * Creates an algorithm instance of a feature.
     *
     * @remarks
     * You can call the [GetFunctionCurrentVersion](https://help.aliyun.com/document_detail/421377.html) operation to query the latest version of a feature. The response of the operation includes the createParameters parameter that is used to create an algorithm instance, the usageParameters parameter, and the requirements for setting these parameters.
     *
     * @param request - CreateFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionInstanceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->createParameters) {
            @$body['createParameters'] = $request->createParameters;
        }

        if (null !== $request->cron) {
            @$body['cron'] = $request->cron;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->functionType) {
            @$body['functionType'] = $request->functionType;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->usageParameters) {
            @$body['usageParameters'] = $request->usageParameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFunctionInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an algorithm instance of a feature.
     *
     * @remarks
     * You can call the [GetFunctionCurrentVersion](https://help.aliyun.com/document_detail/421377.html) operation to query the latest version of a feature. The response of the operation includes the createParameters parameter that is used to create an algorithm instance, the usageParameters parameter, and the requirements for setting these parameters.
     *
     * @param request - CreateFunctionInstanceRequest
     *
     * @returns CreateFunctionInstanceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * Creates an algorithm resource for a specific feature.
     *
     * @param request - CreateFunctionResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionResourceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFunctionResourceResponse
     */
    public function createFunctionResourceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->resourceName) {
            @$body['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFunctionResource',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an algorithm resource for a specific feature.
     *
     * @param request - CreateFunctionResourceRequest
     *
     * @returns CreateFunctionResourceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionResourceRequest $request
     *
     * @return CreateFunctionResourceResponse
     */
    public function createFunctionResource($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionResourceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * Starts a training task for an algorithm instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionTaskResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateFunctionTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a training task for an algorithm instance.
     *
     * @returns CreateFunctionTaskResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTask($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * Create an intervention dictionary.
     *
     * @param request - CreateInterventionDictionaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInterventionDictionaryResponse
     *
     * @param CreateInterventionDictionaryRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->analyzerType) {
            @$body['analyzerType'] = $request->analyzerType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInterventionDictionary',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an intervention dictionary.
     *
     * @param request - CreateInterventionDictionaryRequest
     *
     * @returns CreateInterventionDictionaryResponse
     *
     * @param CreateInterventionDictionaryRequest $request
     *
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInterventionDictionaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a query analysis rule. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateQueryProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueryProcessorResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateQueryProcessor',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a query analysis rule. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateQueryProcessorRequest
     *
     * @returns CreateQueryProcessorResponse
     *
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
     * Creates a scheduled task for an OpenSearch application.
     *
     * @param request - CreateScheduledTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param string                     $appGroupIdentity
     * @param CreateScheduledTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scheduled-tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled task for an OpenSearch application.
     *
     * @param request - CreateScheduledTaskRequest
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param string                     $appGroupIdentity
     * @param CreateScheduledTaskRequest $request
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledTaskWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Creates a query policy.
     *
     * @param request - CreateSearchStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSearchStrategyResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateSearchStrategyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSearchStrategyResponse
     */
    public function createSearchStrategyWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateSearchStrategy',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/search-strategies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a query policy.
     *
     * @param request - CreateSearchStrategyRequest
     *
     * @returns CreateSearchStrategyResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateSearchStrategyRequest $request
     *
     * @return CreateSearchStrategyResponse
     */
    public function createSearchStrategy($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSearchStrategyWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * Creates a fine sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified fine sort expression. The default value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateSecondRankRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecondRankResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateSecondRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/second-ranks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a fine sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified fine sort expression. The default value of dryRun is false if you do not set this parameter.
     *
     * @param request - CreateSecondRankRequest
     *
     * @returns CreateSecondRankResponse
     *
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
     * Creates a sort script.
     *
     * @param request - CreateSortScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSortScriptResponse
     *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param CreateSortScriptRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScriptWithOptions($appGroupIdentity, $appVersionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->scriptName) {
            @$body['scriptName'] = $request->scriptName;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a sort script.
     *
     * @param request - CreateSortScriptRequest
     *
     * @returns CreateSortScriptResponse
     *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param CreateSortScriptRequest $request
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScript($appGroupIdentity, $appVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSortScriptWithOptions($appGroupIdentity, $appVersionId, $request, $headers, $runtime);
    }

    /**
     * Create a custom analyzer.
     *
     * @param request - CreateUserAnalyzerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserAnalyzerResponse
     *
     * @param CreateUserAnalyzerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->business) {
            @$body['business'] = $request->business;
        }

        if (null !== $request->businessAppGroupId) {
            @$body['businessAppGroupId'] = $request->businessAppGroupId;
        }

        if (null !== $request->businessType) {
            @$body['businessType'] = $request->businessType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a custom analyzer.
     *
     * @param request - CreateUserAnalyzerRequest
     *
     * @returns CreateUserAnalyzerResponse
     *
     * @param CreateUserAnalyzerRequest $request
     *
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserAnalyzerWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a test.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteABTestExperimentResponse
     *
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
        $params = new Params([
            'action' => 'DeleteABTestExperiment',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments/' . Url::percentEncode($experimentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a test.
     *
     * @returns DeleteABTestExperimentResponse
     *
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
     * 删除实验组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteABTestGroupResponse
     *
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
        $params = new Params([
            'action' => 'DeleteABTestGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实验组.
     *
     * @returns DeleteABTestGroupResponse
     *
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
     * Deletes an A/B test scenario.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteABTestSceneResponse
     *
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
        $params = new Params([
            'action' => 'DeleteABTestScene',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an A/B test scenario.
     *
     * @returns DeleteABTestSceneResponse
     *
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
     * Deletes an algorithm instance. Before you delete an instance, make sure that it is not in use to prevent service interruptions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionInstanceResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunctionInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an algorithm instance. Before you delete an instance, make sure that it is not in use to prevent service interruptions.
     *
     * @returns DeleteFunctionInstanceResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstance($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * Deletes an algorithm resource.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionResourceResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $resourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionResourceResponse
     */
    public function deleteFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunctionResource',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/resources/' . Url::percentEncode($resourceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an algorithm resource.
     *
     * @returns DeleteFunctionResourceResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $resourceName
     *
     * @return DeleteFunctionResourceResponse
     */
    public function deleteFunctionResource($appGroupIdentity, $functionName, $resourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $headers, $runtime);
    }

    /**
     * Deletes a training task. The training task in progress cannot be deleted.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionTaskResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string         $generation
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionTaskResponse
     */
    public function deleteFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunctionTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/tasks/' . Url::percentEncode($generation) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a training task. The training task in progress cannot be deleted.
     *
     * @returns DeleteFunctionTaskResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     * @param string $generation
     *
     * @return DeleteFunctionTaskResponse
     */
    public function deleteFunctionTask($appGroupIdentity, $functionName, $instanceName, $generation)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime);
    }

    /**
     * 删除排序脚本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSortScriptResponse
     *
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
        $params = new Params([
            'action' => 'DeleteSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除排序脚本.
     *
     * @returns DeleteSortScriptResponse
     *
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
     * Deletes a script file.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSortScriptFileResponse
     *
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
        $params = new Params([
            'action' => 'DeleteSortScriptFile',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/files/src/' . Url::percentEncode($fileName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a script file.
     *
     * @returns DeleteSortScriptFileResponse
     *
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
     * 获取实验详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeABTestExperimentResponse
     *
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
        $params = new Params([
            'action' => 'DescribeABTestExperiment',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments/' . Url::percentEncode($experimentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验详情.
     *
     * @returns DescribeABTestExperimentResponse
     *
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
     * Queries the details of a test group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeABTestGroupResponse
     *
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
        $params = new Params([
            'action' => 'DescribeABTestGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a test group.
     *
     * @returns DescribeABTestGroupResponse
     *
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
     * Queries the information about an A/B test scenario.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeABTestSceneResponse
     *
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
        $params = new Params([
            'action' => 'DescribeABTestScene',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an A/B test scenario.
     *
     * @returns DescribeABTestSceneResponse
     *
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
     * Queries the information about a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppResponse
     *
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
        $params = new Params([
            'action' => 'DescribeApp',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a version of an OpenSearch application.
     *
     * @returns DescribeAppResponse
     *
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
     * Queries the details of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppGroupResponse
     *
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
        $params = new Params([
            'action' => 'DescribeAppGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an OpenSearch application.
     *
     * @returns DescribeAppGroupResponse
     *
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
     * Queries the statistics about a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppStatisticsResponse
     *
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
        $params = new Params([
            'action' => 'DescribeAppStatistics',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/statistics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics about a version of an OpenSearch application.
     *
     * @returns DescribeAppStatisticsResponse
     *
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
     * Queries the version list of an OpenSearch application.
     *
     * @remarks
     *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppsResponse
     *
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
        $params = new Params([
            'action' => 'DescribeApps',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the version list of an OpenSearch application.
     *
     * @remarks
     *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *
     * @returns DescribeAppsResponse
     *
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
     * Queries the details of a data collection task of an application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataCollctionResponse
     *
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
        $params = new Params([
            'action' => 'DescribeDataCollction',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/data-collections/' . Url::percentEncode($dataCollectionIdentity) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDataCollctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data collection task of an application.
     *
     * @returns DescribeDataCollctionResponse
     *
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
     * Queries a rough sort expression that is configured for an OpenSearch application version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFirstRankResponse
     *
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
        $params = new Params([
            'action' => 'DescribeFirstRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/first-ranks/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a rough sort expression that is configured for an OpenSearch application version.
     *
     * @returns DescribeFirstRankResponse
     *
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
     * Queries the details of an intervention dictionary.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInterventionDictionaryResponse
     *
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
        $params = new Params([
            'action' => 'DescribeInterventionDictionary',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an intervention dictionary.
     *
     * @returns DescribeInterventionDictionaryResponse
     *
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
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQueryProcessorResponse
     *
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
        $params = new Params([
            'action' => 'DescribeQueryProcessor',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DescribeQueryProcessorResponse
     *
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
     * Queries the endpoints of all regions that support OpenSearch.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
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
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the endpoints of all regions that support OpenSearch.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * 查看应用定时任务详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScheduledTaskResponse
     *
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
        $params = new Params([
            'action' => 'DescribeScheduledTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scheduled-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看应用定时任务详情.
     *
     * @returns DescribeScheduledTaskResponse
     *
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
     * Queries a fine sort expression that is configured for a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecondRankResponse
     *
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
        $params = new Params([
            'action' => 'DescribeSecondRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/second-ranks/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a fine sort expression that is configured for a version of an OpenSearch application.
     *
     * @returns DescribeSecondRankResponse
     *
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
     * 获取优化大师慢查询开通状态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowQueryStatusResponse
     *
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
        $params = new Params([
            'action' => 'DescribeSlowQueryStatus',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSlowQueryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取优化大师慢查询开通状态
     *
     * @returns DescribeSlowQueryStatusResponse
     *
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
     * 获取自定义分析器详情.
     *
     * @param request - DescribeUserAnalyzerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAnalyzerResponse
     *
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzerWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->with) {
            @$query['with'] = $request->with;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义分析器详情.
     *
     * @param request - DescribeUserAnalyzerRequest
     *
     * @returns DescribeUserAnalyzerResponse
     *
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
     * 禁用优化大师慢查询服务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSlowQueryResponse
     *
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
        $params = new Params([
            'action' => 'DisableSlowQuery',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query/actions/disable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用优化大师慢查询服务
     *
     * @returns DisableSlowQueryResponse
     *
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
     * Enables slow query optimization of Optimization Master.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSlowQueryResponse
     *
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
        $params = new Params([
            'action' => 'EnableSlowQuery',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query/actions/enable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables slow query optimization of Optimization Master.
     *
     * @returns EnableSlowQueryResponse
     *
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
     * Queries the information about a wide table that is generated after a JOIN operation is performed on multiple tables.
     *
     * @param request - GenerateMergedTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateMergedTableResponse
     *
     * @param GenerateMergedTableRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GenerateMergedTableResponse
     */
    public function generateMergedTableWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->spec) {
            @$query['spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'GenerateMergedTable',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/assist/schema/actions/merge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateMergedTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a wide table that is generated after a JOIN operation is performed on multiple tables.
     *
     * @param request - GenerateMergedTableRequest
     *
     * @returns GenerateMergedTableResponse
     *
     * @param GenerateMergedTableRequest $request
     *
     * @return GenerateMergedTableResponse
     */
    public function generateMergedTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateMergedTableWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the type of an industry.
     *
     * @param request - GetDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainName
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appGroupIdentity) {
            @$query['appGroupIdentity'] = $request->appGroupIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/domains/' . Url::percentEncode($domainName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the type of an industry.
     *
     * @param request - GetDomainRequest
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainName
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * Queries the version information about the current feature when you create an instance.
     *
     * @param request - GetFunctionCurrentVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionCurrentVersionResponse
     *
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->domain) {
            @$query['domain'] = $request->domain;
        }

        if (null !== $request->functionType) {
            @$query['functionType'] = $request->functionType;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunctionCurrentVersion',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/functions/' . Url::percentEncode($functionName) . '/current-version',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionCurrentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the version information about the current feature when you create an instance.
     *
     * @param request - GetFunctionCurrentVersionRequest
     *
     * @returns GetFunctionCurrentVersionResponse
     *
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request
     *
     * @return GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersion($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries the algorithm instance that an application uses by default.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionDefaultInstanceResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFunctionDefaultInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/default-instance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the algorithm instance that an application uses by default.
     *
     * @returns GetFunctionDefaultInstanceResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     *
     * @return GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstance($appGroupIdentity, $functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime);
    }

    /**
     * Queries the details of an algorithm instance by instance name.
     *
     * @param request - GetFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionInstanceResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunctionInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an algorithm instance by instance name.
     *
     * @param request - GetFunctionInstanceRequest
     *
     * @returns GetFunctionInstanceResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Queries an algorithm resource.
     *
     * @param request - GetFunctionResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionResourceResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $resourceName
     * @param GetFunctionResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetFunctionResourceResponse
     */
    public function getFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunctionResource',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/resources/' . Url::percentEncode($resourceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an algorithm resource.
     *
     * @param request - GetFunctionResourceRequest
     *
     * @returns GetFunctionResourceResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $resourceName
     * @param GetFunctionResourceRequest $request
     *
     * @return GetFunctionResourceResponse
     */
    public function getFunctionResource($appGroupIdentity, $functionName, $resourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a training task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionTaskResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string         $generation
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFunctionTaskResponse
     */
    public function getFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFunctionTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/tasks/' . Url::percentEncode($generation) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a training task.
     *
     * @returns GetFunctionTaskResponse
     *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     * @param string $generation
     *
     * @return GetFunctionTaskResponse
     */
    public function getFunctionTask($appGroupIdentity, $functionName, $instanceName, $generation)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime);
    }

    /**
     * Queries version information by version ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionVersionResponse
     *
     * @param string         $functionName
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFunctionVersionResponse
     */
    public function getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFunctionVersion',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/functions/' . Url::percentEncode($functionName) . '/versions/' . Url::percentEncode($versionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries version information by version ID.
     *
     * @returns GetFunctionVersionResponse
     *
     * @param string $functionName
     * @param string $versionId
     *
     * @return GetFunctionVersionResponse
     */
    public function getFunctionVersion($functionName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScriptFileNamesResponse
     *
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
        $params = new Params([
            'action' => 'GetScriptFileNames',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/file-names',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScriptFileNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns GetScriptFileNamesResponse
     *
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
     * Queries the details of a query policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSearchStrategyResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSearchStrategyResponse
     */
    public function getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSearchStrategy',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/search-strategies/' . Url::percentEncode($strategyName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a query policy.
     *
     * @returns GetSearchStrategyResponse
     *
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return GetSearchStrategyResponse
     */
    public function getSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * Queries the details of a sort script.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSortScriptResponse
     *
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
        $params = new Params([
            'action' => 'GetSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a sort script.
     *
     * @returns GetSortScriptResponse
     *
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
     * Queries the content of a sort script.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSortScriptFileResponse
     *
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
        $params = new Params([
            'action' => 'GetSortScriptFile',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/files/src/' . Url::percentEncode($fileName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of a sort script.
     *
     * @returns GetSortScriptFileResponse
     *
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
     * Queries a list of experiments.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABTestExperimentsResponse
     *
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
        $params = new Params([
            'action' => 'ListABTestExperiments',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABTestExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of experiments.
     *
     * @returns ListABTestExperimentsResponse
     *
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
     * Queries whitelists.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABTestFixedFlowDividersResponse
     *
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
        $params = new Params([
            'action' => 'ListABTestFixedFlowDividers',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments/' . Url::percentEncode($experimentId) . '/fixed-flow-dividers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whitelists.
     *
     * @returns ListABTestFixedFlowDividersResponse
     *
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
     * 获取实验组清单.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABTestGroupsResponse
     *
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
        $params = new Params([
            'action' => 'ListABTestGroups',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABTestGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实验组清单.
     *
     * @returns ListABTestGroupsResponse
     *
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
     * Queries test scenarios.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListABTestScenesResponse
     *
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
        $params = new Params([
            'action' => 'ListABTestScenes',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListABTestScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries test scenarios.
     *
     * @returns ListABTestScenesResponse
     *
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
     * Queries a list of OpenSearch applications.
     *
     * @remarks
     *   This operation allows you to query applications by application name, instance ID, and application type.
     * *   This operation allows you to sort the applications based on their creation time.
     * *   This operation supports the parameters for paging.
     *
     * @param tmpReq - ListAppGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppGroupsResponse
     *
     * @param ListAppGroupsRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAppGroupsResponse
     */
    public function listAppGroupsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAppGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sortBy) {
            @$query['sortBy'] = $request->sortBy;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppGroups',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of OpenSearch applications.
     *
     * @remarks
     *   This operation allows you to query applications by application name, instance ID, and application type.
     * *   This operation allows you to sort the applications based on their creation time.
     * *   This operation supports the parameters for paging.
     *
     * @param request - ListAppGroupsRequest
     *
     * @returns ListAppGroupsResponse
     *
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
     * Queries the data collection tasks of an OpenSearch application.
     *
     * @param request - ListDataCollectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataCollectionsResponse
     *
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataCollectionsResponse
     */
    public function listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataCollections',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/data-collections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data collection tasks of an OpenSearch application.
     *
     * @param request - ListDataCollectionsRequest
     *
     * @returns ListDataCollectionsResponse
     *
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
     * Queries all fields in a table of a data source. This operation is for internal use only.
     *
     * @param request - ListDataSourceTableFieldsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceTableFieldsResponse
     *
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->rawType) {
            @$query['rawType'] = $request->rawType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceTableFields',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/assist/data-sources/' . Url::percentEncode($dataSourceType) . '/fields',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourceTableFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all fields in a table of a data source. This operation is for internal use only.
     *
     * @param request - ListDataSourceTableFieldsRequest
     *
     * @returns ListDataSourceTableFieldsResponse
     *
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request
     *
     * @return ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFields($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * Obtains all data from a specified data source.
     *
     * @param request - ListDataSourceTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceTablesResponse
     *
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDataSourceTablesResponse
     */
    public function listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceTables',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/assist/data-sources/' . Url::percentEncode($dataSourceType) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains all data from a specified data source.
     *
     * @param request - ListDataSourceTablesRequest
     *
     * @returns ListDataSourceTablesResponse
     *
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request
     *
     * @return ListDataSourceTablesResponse
     */
    public function listDataSourceTables($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * Queries the rough sort expressions that are configured for a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFirstRanksResponse
     *
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
        $params = new Params([
            'action' => 'ListFirstRanks',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/first-ranks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFirstRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the rough sort expressions that are configured for a version of an OpenSearch application.
     *
     * @returns ListFirstRanksResponse
     *
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
     * Queries all algorithm instances of a user, which meet specified conditions.
     *
     * @param request - ListFunctionInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionInstancesResponse
     *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionType) {
            @$query['functionType'] = $request->functionType;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionInstances',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all algorithm instances of a user, which meet specified conditions.
     *
     * @param request - ListFunctionInstancesRequest
     *
     * @returns ListFunctionInstancesResponse
     *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstances($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * Queries algorithm resources.
     *
     * @param request - ListFunctionResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionResourcesResponse
     *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFunctionResourcesResponse
     */
    public function listFunctionResourcesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionResources',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries algorithm resources.
     *
     * @param request - ListFunctionResourcesRequest
     *
     * @returns ListFunctionResourcesResponse
     *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionResourcesRequest $request
     *
     * @return ListFunctionResourcesResponse
     */
    public function listFunctionResources($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionResourcesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * Queries the training tasks. The returned results are sorted by start time in descending order.
     *
     * @param request - ListFunctionTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionTasksResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListFunctionTasksResponse
     */
    public function listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionTasks',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the training tasks. The returned results are sorted by start time in descending order.
     *
     * @param request - ListFunctionTasksRequest
     *
     * @returns ListFunctionTasksResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request
     *
     * @return ListFunctionTasksResponse
     */
    public function listFunctionTasks($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * 获取用户的干预词典列表.
     *
     * @param request - ListInterventionDictionariesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterventionDictionariesResponse
     *
     * @param ListInterventionDictionariesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInterventionDictionariesResponse
     */
    public function listInterventionDictionariesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInterventionDictionaries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInterventionDictionariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户的干预词典列表.
     *
     * @param request - ListInterventionDictionariesRequest
     *
     * @returns ListInterventionDictionariesResponse
     *
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
     * Queries the intervention entries in an intervention dictionary.
     *
     * @param request - ListInterventionDictionaryEntriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterventionDictionaryEntriesResponse
     *
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->word) {
            @$query['word'] = $request->word;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInterventionDictionaryEntries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '/entries',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the intervention entries in an intervention dictionary.
     *
     * @param request - ListInterventionDictionaryEntriesRequest
     *
     * @returns ListInterventionDictionaryEntriesResponse
     *
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
     * 获取实体识别结果.
     *
     * @param request - ListInterventionDictionaryNerResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterventionDictionaryNerResultsResponse
     *
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInterventionDictionaryNerResults',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '/ner-results',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInterventionDictionaryNerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实体识别结果.
     *
     * @param request - ListInterventionDictionaryNerResultsRequest
     *
     * @returns ListInterventionDictionaryNerResultsResponse
     *
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
     * Queries the resources that are associated with an intervention dictionary. If the intervention dictionary is referenced by query analysis rules, this operation returns all applications that use the intervention dictionary and the information about the query analysis rules.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterventionDictionaryRelatedEntitiesResponse
     *
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
        $params = new Params([
            'action' => 'ListInterventionDictionaryRelatedEntities',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '/related',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInterventionDictionaryRelatedEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources that are associated with an intervention dictionary. If the intervention dictionary is referenced by query analysis rules, this operation returns all applications that use the intervention dictionary and the information about the query analysis rules.
     *
     * @returns ListInterventionDictionaryRelatedEntitiesResponse
     *
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
     * 查看当前的处理流
     *
     * @param request - ListProceedingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProceedingsResponse
     *
     * @param string                 $appGroupIdentity
     * @param ListProceedingsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListProceedingsResponse
     */
    public function listProceedingsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterFinished) {
            @$query['filterFinished'] = $request->filterFinished;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProceedings',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/proceedings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProceedingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看当前的处理流
     *
     * @param request - ListProceedingsRequest
     *
     * @returns ListProceedingsResponse
     *
     * @param string                 $appGroupIdentity
     * @param ListProceedingsRequest $request
     *
     * @return ListProceedingsResponse
     */
    public function listProceedings($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProceedingsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Queries the results of a query analysis test. This API operation is available only to existing applications of OpenSearch Open Source Compatible Edition.
     *
     * @param request - ListQueryProcessorAnalyzerResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueryProcessorAnalyzerResultsResponse
     *
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->text) {
            @$query['text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueryProcessorAnalyzerResults',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors/' . Url::percentEncode($name) . '/analyze',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQueryProcessorAnalyzerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of a query analysis test. This API operation is available only to existing applications of OpenSearch Open Source Compatible Edition.
     *
     * @param request - ListQueryProcessorAnalyzerResultsRequest
     *
     * @returns ListQueryProcessorAnalyzerResultsResponse
     *
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request
     *
     * @return ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResults($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * Queries the recommended priority settings of entity types for named entity recognition (NER).
     *
     * @param request - ListQueryProcessorNersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueryProcessorNersResponse
     *
     * @param ListQueryProcessorNersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueryProcessorNers',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/query-processor/ner/default-priorities',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQueryProcessorNersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the recommended priority settings of entity types for named entity recognition (NER).
     *
     * @param request - ListQueryProcessorNersRequest
     *
     * @returns ListQueryProcessorNersResponse
     *
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
     * Queries a list of query analysis rules that are configured for a version of an OpenSearch application.
     *
     * @param request - ListQueryProcessorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueryProcessorsResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->isActive) {
            @$query['isActive'] = $request->isActive;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueryProcessors',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQueryProcessorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of query analysis rules that are configured for a version of an OpenSearch application.
     *
     * @param request - ListQueryProcessorsRequest
     *
     * @returns ListQueryProcessorsResponse
     *
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
     * Queries tickets that are submitted to apply for quotas for an OpenSearch application.
     *
     * @param request - ListQuotaReviewTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaReviewTasksResponse
     *
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotaReviewTasks',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/quota-review-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotaReviewTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tickets that are submitted to apply for quotas for an OpenSearch application.
     *
     * @param request - ListQuotaReviewTasksRequest
     *
     * @returns ListQuotaReviewTasksResponse
     *
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request
     *
     * @return ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Queries a list of scheduled tasks of an OpenSearch application.
     *
     * @param request - ListScheduledTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledTasksResponse
     *
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledTasks',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scheduled-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of scheduled tasks of an OpenSearch application.
     *
     * @param request - ListScheduledTasksRequest
     *
     * @returns ListScheduledTasksResponse
     *
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
     * Queries the details of query policies.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchStrategiesResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSearchStrategiesResponse
     */
    public function listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListSearchStrategies',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/search-strategies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSearchStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of query policies.
     *
     * @returns ListSearchStrategiesResponse
     *
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSearchStrategiesResponse
     */
    public function listSearchStrategies($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * Queries the fine sort expressions that are configured for a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecondRanksResponse
     *
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
        $params = new Params([
            'action' => 'ListSecondRanks',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/second-ranks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecondRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fine sort expressions that are configured for a version of an OpenSearch application.
     *
     * @returns ListSecondRanksResponse
     *
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
     * Queries the suggestions that are provided by Optimization Master for slow queries.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSlowQueryCategoriesResponse
     *
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
        $params = new Params([
            'action' => 'ListSlowQueryCategories',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query/categories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSlowQueryCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the suggestions that are provided by Optimization Master for slow queries.
     *
     * @returns ListSlowQueryCategoriesResponse
     *
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
     * 列出优化大师慢查询Query清单.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSlowQueryQueriesResponse
     *
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
        $params = new Params([
            'action' => 'ListSlowQueryQueries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query/categories/' . Url::percentEncode($categoryIndex) . '/queries',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSlowQueryQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出优化大师慢查询Query清单.
     *
     * @returns ListSlowQueryQueriesResponse
     *
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
     * Queries a list of sort expressions that are configured for a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSortExpressionsResponse
     *
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
        $params = new Params([
            'action' => 'ListSortExpressions',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/sort-expressions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSortExpressionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of sort expressions that are configured for a version of an OpenSearch application.
     *
     * @returns ListSortExpressionsResponse
     *
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
     * Queries all sort scripts of an application version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSortScriptsResponse
     *
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
        $params = new Params([
            'action' => 'ListSortScripts',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSortScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all sort scripts of an application version.
     *
     * @returns ListSortScriptsResponse
     *
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
     * Queries log statistics, such as application error logs, hotword rankings, and slow query logs.
     *
     * @param request - ListStatisticLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStatisticLogsResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->columns) {
            @$query['columns'] = $request->columns;
        }

        if (null !== $request->distinct) {
            @$query['distinct'] = $request->distinct;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->sortBy) {
            @$query['sortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['stopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStatisticLogs',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/statistic-logs/' . Url::percentEncode($moduleName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStatisticLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries log statistics, such as application error logs, hotword rankings, and slow query logs.
     *
     * @param request - ListStatisticLogsRequest
     *
     * @returns ListStatisticLogsResponse
     *
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
     * Queries statistical reports, such as application reports, drop-down suggestion reports, hotword shading reports, A/B test reports, and data quality reports.
     *
     * @param request - ListStatisticReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStatisticReportResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->columns) {
            @$query['columns'] = $request->columns;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStatisticReport',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/statistic-report/' . Url::percentEncode($moduleName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStatisticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries statistical reports, such as application reports, drop-down suggestion reports, hotword shading reports, A/B test reports, and data quality reports.
     *
     * @param request - ListStatisticReportRequest
     *
     * @returns ListStatisticReportResponse
     *
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
     * Queries tagged resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/resource-tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tagged resources.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the entries of a custom analyzer.
     *
     * @param request - ListUserAnalyzerEntriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserAnalyzerEntriesResponse
     *
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->word) {
            @$query['word'] = $request->word;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserAnalyzerEntries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers/' . Url::percentEncode($name) . '/entries',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the entries of a custom analyzer.
     *
     * @param request - ListUserAnalyzerEntriesRequest
     *
     * @returns ListUserAnalyzerEntriesResponse
     *
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
     * Queries the custom analyzers that belong to the current account.
     *
     * @param request - ListUserAnalyzersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserAnalyzersResponse
     *
     * @param ListUserAnalyzersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserAnalyzersResponse
     */
    public function listUserAnalyzersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserAnalyzers',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserAnalyzersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the custom analyzers that belong to the current account.
     *
     * @param request - ListUserAnalyzersRequest
     *
     * @returns ListUserAnalyzersResponse
     *
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
     * Modifies the properties of an OpenSearch application or sets the online version of an OpenSearch application.
     *
     * @param request - ModifyAppGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppGroupResponse
     *
     * @param string                $appGroupIdentity
     * @param ModifyAppGroupRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->currentVersion) {
            @$body['currentVersion'] = $request->currentVersion;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the properties of an OpenSearch application or sets the online version of an OpenSearch application.
     *
     * @param request - ModifyAppGroupRequest
     *
     * @returns ModifyAppGroupResponse
     *
     * @param string                $appGroupIdentity
     * @param ModifyAppGroupRequest $request
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroup($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Modifies the quotas of an OpenSearch application.
     *
     * @param request - ModifyAppGroupQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppGroupQuotaResponse
     *
     * @param string                     $appGroupIdentity
     * @param ModifyAppGroupQuotaRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuotaWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppGroupQuota',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/quota',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAppGroupQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the quotas of an OpenSearch application.
     *
     * @param request - ModifyAppGroupQuotaRequest
     *
     * @returns ModifyAppGroupQuotaResponse
     *
     * @param string                     $appGroupIdentity
     * @param ModifyAppGroupQuotaRequest $request
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuota($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupQuotaWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Modifies a rough sort expression for an OpenSearch application. If you set dryRun to true, this operation checks the rough sort expression after the expression is modified. If you do not specify this parameter, false is used by default.
     *
     * @param request - ModifyFirstRankRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFirstRankResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifyFirstRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/first-ranks/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a rough sort expression for an OpenSearch application. If you set dryRun to true, this operation checks the rough sort expression after the expression is modified. If you do not specify this parameter, false is used by default.
     *
     * @param request - ModifyFirstRankRequest
     *
     * @returns ModifyFirstRankResponse
     *
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
     * Modifies a query analysis rule for a specific application version. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not specify this parameter.
     *
     * @param request - ModifyQueryProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyQueryProcessorResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModifyQueryProcessor',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a query analysis rule for a specific application version. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not specify this parameter.
     *
     * @param request - ModifyQueryProcessorRequest
     *
     * @returns ModifyQueryProcessorResponse
     *
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
     * Modifies a scheduled task.
     *
     * @param request - ModifyScheduledTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $taskId
     * @param ModifyScheduledTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModifyScheduledTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scheduled-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a scheduled task.
     *
     * @param request - ModifyScheduledTaskRequest
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param string                     $appGroupIdentity
     * @param string                     $taskId
     * @param ModifyScheduledTaskRequest $request
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($appGroupIdentity, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $request, $headers, $runtime);
    }

    /**
     * Modifies a fine sort expression that is configured for a specific OpenSearch application version. If you set dryRun to true, the specified fine sort expression is checked after the expression is modified. By default, the value of dryRun is false if you do not specify this parameter.
     *
     * @param request - ModifySecondRankRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecondRankResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifySecondRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/second-ranks/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifySecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a fine sort expression that is configured for a specific OpenSearch application version. If you set dryRun to true, the specified fine sort expression is checked after the expression is modified. By default, the value of dryRun is false if you do not specify this parameter.
     *
     * @param request - ModifySecondRankRequest
     *
     * @returns ModifySecondRankResponse
     *
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
     * Accepts the changes in intervention entries.
     *
     * @param request - PushInterventionDictionaryEntriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushInterventionDictionaryEntriesResponse
     *
     * @param string                                   $name
     * @param PushInterventionDictionaryEntriesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'PushInterventionDictionaryEntries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '/entries/actions/bulk',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts the changes in intervention entries.
     *
     * @param request - PushInterventionDictionaryEntriesRequest
     *
     * @returns PushInterventionDictionaryEntriesResponse
     *
     * @param string                                   $name
     * @param PushInterventionDictionaryEntriesRequest $request
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Accepts the changes in the entries of a custom analyzer.
     *
     * @param request - PushUserAnalyzerEntriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushUserAnalyzerEntriesResponse
     *
     * @param string                         $name
     * @param PushUserAnalyzerEntriesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->entries) {
            @$body['entries'] = $request->entries;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushUserAnalyzerEntries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers/' . Url::percentEncode($name) . '/entries/actions/bulk',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts the changes in the entries of a custom analyzer.
     *
     * @param request - PushUserAnalyzerEntriesRequest
     *
     * @returns PushUserAnalyzerEntriesResponse
     *
     * @param string                         $name
     * @param PushUserAnalyzerEntriesRequest $request
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 发布排序脚本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseSortScriptResponse
     *
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
        $params = new Params([
            'action' => 'ReleaseSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/actions/release',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布排序脚本.
     *
     * @returns ReleaseSortScriptResponse
     *
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
     * Deletes a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAppResponse
     *
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
        $params = new Params([
            'action' => 'RemoveApp',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a version of an OpenSearch application.
     *
     * @returns RemoveAppResponse
     *
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
     * Deletes an OpenSearch application.
     *
     * @remarks
     * You can delete only pay-as-you-go applications. You cannot delete subscription applications.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAppGroupResponse
     *
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
        $params = new Params([
            'action' => 'RemoveAppGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an OpenSearch application.
     *
     * @remarks
     * You can delete only pay-as-you-go applications. You cannot delete subscription applications.
     *
     * @returns RemoveAppGroupResponse
     *
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
     * Disables data collection.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDataCollectionResponse
     *
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
        $params = new Params([
            'action' => 'RemoveDataCollection',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/data-collections/' . Url::percentEncode($dataCollectionIdentity) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveDataCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables data collection.
     *
     * @returns RemoveDataCollectionResponse
     *
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
     * Deletes a rough sort expression for a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveFirstRankResponse
     *
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
        $params = new Params([
            'action' => 'RemoveFirstRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/first-ranks/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a rough sort expression for a version of an OpenSearch application.
     *
     * @returns RemoveFirstRankResponse
     *
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
     * Deletes an intervention dictionary.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveInterventionDictionaryResponse
     *
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
        $params = new Params([
            'action' => 'RemoveInterventionDictionary',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/intervention-dictionaries/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an intervention dictionary.
     *
     * @returns RemoveInterventionDictionaryResponse
     *
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
     * Deletes a query analysis rule for an OpenSearch application version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveQueryProcessorResponse
     *
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
        $params = new Params([
            'action' => 'RemoveQueryProcessor',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/query-processors/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a query analysis rule for an OpenSearch application version.
     *
     * @returns RemoveQueryProcessorResponse
     *
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
     * Deletes a scheduled task of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveScheduledTaskResponse
     *
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
        $params = new Params([
            'action' => 'RemoveScheduledTask',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scheduled-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled task of an OpenSearch application.
     *
     * @returns RemoveScheduledTaskResponse
     *
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
     * Deletes a query policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSearchStrategyResponse
     *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveSearchStrategyResponse
     */
    public function removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveSearchStrategy',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/search-strategies/' . Url::percentEncode($strategyName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a query policy.
     *
     * @returns RemoveSearchStrategyResponse
     *
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return RemoveSearchStrategyResponse
     */
    public function removeSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * Deletes a fine sort expression from a version of an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSecondRankResponse
     *
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
        $params = new Params([
            'action' => 'RemoveSecondRank',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/second-ranks/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a fine sort expression from a version of an OpenSearch application.
     *
     * @returns RemoveSecondRankResponse
     *
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
     * Deletes a custom analyzer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserAnalyzerResponse
     *
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
        $params = new Params([
            'action' => 'RemoveUserAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/user-analyzers/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom analyzer.
     *
     * @returns RemoveUserAnalyzerResponse
     *
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
     * Renews an application. This operation is not available now. You must renew an application in the OpenSearch console.
     *
     * @param request - RenewAppGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppGroupResponse
     *
     * @param string               $appGroupIdentity
     * @param RenewAppGroupRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RenewAppGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/actions/renew',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews an application. This operation is not available now. You must renew an application in the OpenSearch console.
     *
     * @param request - RenewAppGroupRequest
     *
     * @returns RenewAppGroupResponse
     *
     * @param string               $appGroupIdentity
     * @param RenewAppGroupRequest $request
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroup($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * Converts a service-based application to an instance-based application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceAppGroupCommodityCodeResponse
     *
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
        $params = new Params([
            'action' => 'ReplaceAppGroupCommodityCode',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/actions/to-instance-typed',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReplaceAppGroupCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts a service-based application to an instance-based application.
     *
     * @returns ReplaceAppGroupCommodityCodeResponse
     *
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
     * Uploads a sort script.
     *
     * @param request - SaveSortScriptFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSortScriptFileResponse
     *
     * @param string                    $appGroupIdentity
     * @param string                    $scriptName
     * @param string                    $appVersionId
     * @param string                    $fileName
     * @param SaveSortScriptFileRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveSortScriptFile',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '/files/src/' . Url::percentEncode($fileName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SaveSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a sort script.
     *
     * @param request - SaveSortScriptFileRequest
     *
     * @returns SaveSortScriptFileResponse
     *
     * @param string                    $appGroupIdentity
     * @param string                    $scriptName
     * @param string                    $appVersionId
     * @param string                    $fileName
     * @param SaveSortScriptFileRequest $request
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request, $headers, $runtime);
    }

    /**
     * 立即进行慢查询分析.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSlowQueryAnalyzerResponse
     *
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
        $params = new Params([
            'action' => 'StartSlowQueryAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/optimizers/slow-query/actions/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartSlowQueryAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 立即进行慢查询分析.
     *
     * @returns StartSlowQueryAnalyzerResponse
     *
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
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/resource-tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Unbinds a custom analyzer from an Elasticsearch instance.
     *
     * @remarks
     * You can call this operation to unbind a custom analyzer from an Elasticsearch instance.
     *
     * @param request - UnbindESUserAnalyzerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindESUserAnalyzerResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $esInstanceId
     * @param UnbindESUserAnalyzerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UnbindESUserAnalyzer',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/es/' . Url::percentEncode($esInstanceId) . '/actions/unbind-analyzer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a custom analyzer from an Elasticsearch instance.
     *
     * @remarks
     * You can call this operation to unbind a custom analyzer from an Elasticsearch instance.
     *
     * @param request - UnbindESUserAnalyzerRequest
     *
     * @returns UnbindESUserAnalyzerResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $esInstanceId
     * @param UnbindESUserAnalyzerRequest $request
     *
     * @return UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzer($appGroupIdentity, $esInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime);
    }

    /**
     * Unbinds an Elasticsearch instance from an OpenSearch application.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindEsInstanceResponse
     *
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnbindEsInstanceResponse
     */
    public function unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnbindEsInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/actions/unbind-es-instance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds an Elasticsearch instance from an OpenSearch application.
     *
     * @returns UnbindEsInstanceResponse
     *
     * @param string $appGroupIdentity
     *
     * @return UnbindEsInstanceResponse
     */
    public function unbindEsInstance($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * Remove tags from resources.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'tagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['tagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/resource-tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove tags from resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the parameters of an A/B test.
     *
     * @param request - UpdateABTestExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABTestExperimentResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param string                        $experimentId
     * @param UpdateABTestExperimentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateABTestExperiment',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments/' . Url::percentEncode($experimentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of an A/B test.
     *
     * @param request - UpdateABTestExperimentRequest
     *
     * @returns UpdateABTestExperimentResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param string                        $experimentId
     * @param UpdateABTestExperimentRequest $request
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * Modifies whitelists.
     *
     * @param request - UpdateABTestFixedFlowDividersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABTestFixedFlowDividersResponse
     *
     * @param string                               $appGroupIdentity
     * @param string                               $sceneId
     * @param string                               $groupId
     * @param string                               $experimentId
     * @param UpdateABTestFixedFlowDividersRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateABTestFixedFlowDividers',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '/experiments/' . Url::percentEncode($experimentId) . '/fixed-flow-dividers',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies whitelists.
     *
     * @param request - UpdateABTestFixedFlowDividersRequest
     *
     * @returns UpdateABTestFixedFlowDividersResponse
     *
     * @param string                               $appGroupIdentity
     * @param string                               $sceneId
     * @param string                               $groupId
     * @param string                               $experimentId
     * @param UpdateABTestFixedFlowDividersRequest $request
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * Modifies a test group.
     *
     * @param request - UpdateABTestGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABTestGroupResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param string                   $groupId
     * @param UpdateABTestGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateABTestGroup',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '/groups/' . Url::percentEncode($groupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a test group.
     *
     * @param request - UpdateABTestGroupRequest
     *
     * @returns UpdateABTestGroupResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param string                   $groupId
     * @param UpdateABTestGroupRequest $request
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroup($appGroupIdentity, $sceneId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Modifies an A/B test scenario.
     *
     * @param request - UpdateABTestSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateABTestSceneResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param UpdateABTestSceneRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateABTestScene',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/scenes/' . Url::percentEncode($sceneId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an A/B test scenario.
     *
     * @param request - UpdateABTestSceneRequest
     *
     * @returns UpdateABTestSceneResponse
     *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param UpdateABTestSceneRequest $request
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestScene($appGroupIdentity, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime);
    }

    /**
     * Updates fetch fields. A dry run is supported.
     *
     * @param request - UpdateFetchFieldsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFetchFieldsResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateFetchFields',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/fetch-fields',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFetchFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates fetch fields. A dry run is supported.
     *
     * @param request - UpdateFetchFieldsRequest
     *
     * @returns UpdateFetchFieldsResponse
     *
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
     * Sets the default algorithm instance used by the specified application. The new algorithm instance automatically overwrites the most recently set default instance. If no instance is set, the default instance is canceled.
     *
     * @param request - UpdateFunctionDefaultInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFunctionDefaultInstanceResponse
     *
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFunctionDefaultInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/default-instance',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the default algorithm instance used by the specified application. The new algorithm instance automatically overwrites the most recently set default instance. If no instance is set, the default instance is canceled.
     *
     * @param request - UpdateFunctionDefaultInstanceRequest
     *
     * @returns UpdateFunctionDefaultInstanceResponse
     *
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request
     *
     * @return UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * Updates an algorithm instance.
     *
     * @param request - UpdateFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFunctionInstanceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->createParameters) {
            @$body['createParameters'] = $request->createParameters;
        }

        if (null !== $request->cron) {
            @$body['cron'] = $request->cron;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->usageParameters) {
            @$body['usageParameters'] = $request->usageParameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFunctionInstance',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an algorithm instance.
     *
     * @param request - UpdateFunctionInstanceRequest
     *
     * @returns UpdateFunctionInstanceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Updates an algorithm resource.
     *
     * @remarks
     * You can call this operation to update the information about resources by resource name. You can modify only the values of data and description.
     *
     * @param request - UpdateFunctionResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFunctionResourceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $resourceName
     * @param UpdateFunctionResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFunctionResourceResponse
     */
    public function updateFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFunctionResource',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/functions/' . Url::percentEncode($functionName) . '/resources/' . Url::percentEncode($resourceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an algorithm resource.
     *
     * @remarks
     * You can call this operation to update the information about resources by resource name. You can modify only the values of data and description.
     *
     * @param request - UpdateFunctionResourceRequest
     *
     * @returns UpdateFunctionResourceResponse
     *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $resourceName
     * @param UpdateFunctionResourceRequest $request
     *
     * @return UpdateFunctionResourceResponse
     */
    public function updateFunctionResource($appGroupIdentity, $functionName, $resourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime);
    }

    /**
     * Modifies a query policy.
     *
     * @param request - UpdateSearchStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSearchStrategyResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $strategyName
     * @param UpdateSearchStrategyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSearchStrategyResponse
     */
    public function updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSearchStrategy',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/search-strategies/' . Url::percentEncode($strategyName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a query policy.
     *
     * @param request - UpdateSearchStrategyRequest
     *
     * @returns UpdateSearchStrategyResponse
     *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $strategyName
     * @param UpdateSearchStrategyRequest $request
     *
     * @return UpdateSearchStrategyResponse
     */
    public function updateSearchStrategy($appGroupIdentity, $appId, $strategyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $request, $headers, $runtime);
    }

    /**
     * Modifies the description of a sort script.
     *
     * @remarks
     * You can call this operation to modify the description of a sort script.
     *
     * @param request - UpdateSortScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSortScriptResponse
     *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param string                  $scriptName
     * @param UpdateSortScriptRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSortScriptResponse
     */
    public function updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSortScript',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appVersionId) . '/sort-scripts/' . Url::percentEncode($scriptName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a sort script.
     *
     * @remarks
     * You can call this operation to modify the description of a sort script.
     *
     * @param request - UpdateSortScriptRequest
     *
     * @returns UpdateSortScriptResponse
     *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param string                  $scriptName
     * @param UpdateSortScriptRequest $request
     *
     * @return UpdateSortScriptResponse
     */
    public function updateSortScript($appGroupIdentity, $appVersionId, $scriptName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $request, $headers, $runtime);
    }

    /**
     * Updates summaries. A dry run is supported.
     *
     * @param request - UpdateSummariesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSummariesResponse
     *
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
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSummaries',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/app-groups/' . Url::percentEncode($appGroupIdentity) . '/apps/' . Url::percentEncode($appId) . '/summaries',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates summaries. A dry run is supported.
     *
     * @param request - UpdateSummariesRequest
     *
     * @returns UpdateSummariesResponse
     *
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
     * Verifies data sources.
     *
     * @param request - ValidateDataSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateDataSourcesResponse
     *
     * @param ValidateDataSourcesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateDataSourcesResponse
     */
    public function validateDataSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ValidateDataSources',
            'version' => '2017-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/v4/openapi/assist/data-sources/validations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies data sources.
     *
     * @param request - ValidateDataSourcesRequest
     *
     * @returns ValidateDataSourcesResponse
     *
     * @param ValidateDataSourcesRequest $request
     *
     * @return ValidateDataSourcesResponse
     */
    public function validateDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateDataSourcesWithOptions($request, $headers, $runtime);
    }
}

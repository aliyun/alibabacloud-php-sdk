<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @summary Binds a custom analyzer to an Elasticsearch instance.
     *  *
     * @param string                    $appGroupIdentity
     * @param string                    $esInstanceId
     * @param BindESUserAnalyzerRequest $request          BindESUserAnalyzerRequest
     * @param string[]                  $headers          map
     * @param RuntimeOptions            $runtime          runtime options for this request RuntimeOptions
     *
     * @return BindESUserAnalyzerResponse BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'BindESUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/es/' . OpenApiUtilClient::getEncodeParam($esInstanceId) . '/actions/bind-analyzer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a custom analyzer to an Elasticsearch instance.
     *  *
     * @param string                    $appGroupIdentity
     * @param string                    $esInstanceId
     * @param BindESUserAnalyzerRequest $request          BindESUserAnalyzerRequest
     *
     * @return BindESUserAnalyzerResponse BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzer($appGroupIdentity, $esInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Binds an Elasticsearch instance.
     *  *
     * @param string                $appGroupIdentity
     * @param BindEsInstanceRequest $request          BindEsInstanceRequest
     * @param string[]              $headers          map
     * @param RuntimeOptions        $runtime          runtime options for this request RuntimeOptions
     *
     * @return BindEsInstanceResponse BindEsInstanceResponse
     */
    public function bindEsInstanceWithOptions($appGroupIdentity, $request, $headers, $runtime)
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
            'action'      => 'BindEsInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/actions/bind-es-instance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds an Elasticsearch instance.
     *  *
     * @param string                $appGroupIdentity
     * @param BindEsInstanceRequest $request          BindEsInstanceRequest
     *
     * @return BindEsInstanceResponse BindEsInstanceResponse
     */
    public function bindEsInstance($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindEsInstanceWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return CompileSortScriptResponse CompileSortScriptResponse
     */
    public function compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CompileSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/actions/compiling',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CompileSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return CompileSortScriptResponse CompileSortScriptResponse
     */
    public function compileSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @summary Creates an experiment.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param CreateABTestExperimentRequest $request          CreateABTestExperimentRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateABTestExperimentResponse CreateABTestExperimentResponse
     */
    public function createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an experiment.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param CreateABTestExperimentRequest $request          CreateABTestExperimentRequest
     *
     * @return CreateABTestExperimentResponse CreateABTestExperimentResponse
     */
    public function createABTestExperiment($appGroupIdentity, $sceneId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a test group.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param CreateABTestGroupRequest $request          CreateABTestGroupRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateABTestGroupResponse CreateABTestGroupResponse
     */
    public function createABTestGroupWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a test group.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param CreateABTestGroupRequest $request          CreateABTestGroupRequest
     *
     * @return CreateABTestGroupResponse CreateABTestGroupResponse
     */
    public function createABTestGroup($appGroupIdentity, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestGroupWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param CreateABTestSceneRequest $request          CreateABTestSceneRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateABTestSceneResponse CreateABTestSceneResponse
     */
    public function createABTestSceneWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param CreateABTestSceneRequest $request          CreateABTestSceneRequest
     *
     * @return CreateABTestSceneResponse CreateABTestSceneResponse
     */
    public function createABTestScene($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestSceneWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a version for an OpenSearch application.
     *  *
     * @description *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *  *
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request          CreateAppRequest
     * @param string[]         $headers          map
     * @param RuntimeOptions   $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->autoSwitch)) {
            $body['autoSwitch'] = $request->autoSwitch;
        }
        if (!Utils::isUnset($request->cluster)) {
            $body['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->dataSources)) {
            $body['dataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->fetchFields)) {
            $body['fetchFields'] = $request->fetchFields;
        }
        if (!Utils::isUnset($request->firstRanks)) {
            $body['firstRanks'] = $request->firstRanks;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->queryProcessors)) {
            $body['queryProcessors'] = $request->queryProcessors;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->schemas)) {
            $body['schemas'] = $request->schemas;
        }
        if (!Utils::isUnset($request->secondRanks)) {
            $body['secondRanks'] = $request->secondRanks;
        }
        if (!Utils::isUnset($request->summaries)) {
            $body['summaries'] = $request->summaries;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a version for an OpenSearch application.
     *  *
     * @description *   When you create a standard application, a new version of the application is created if the specified application name already exists.
     * *   When you create a version of an existing application, you must specify the autoSwitch and realtimeShared parameters.
     * *   When you create a version of an existing application, the value of the quota parameter is the same as that of the quota parameter in the previous version of the application.
     * *   When you create a version of an existing application, the modification of the value of the quota parameter does not take effect.
     *  *
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request          CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Create an OpenSearch application.
     *  *
     * @param CreateAppGroupRequest $request CreateAppGroupRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppGroupResponse CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->quota)) {
            $body['quota'] = $request->quota;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create an OpenSearch application.
     *  *
     * @param CreateAppGroupRequest $request CreateAppGroupRequest
     *
     * @return CreateAppGroupResponse CreateAppGroupResponse
     */
    public function createAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                           $appGroupIdentity
     * @param CreateAppGroupCredentialsRequest $request          CreateAppGroupCredentialsRequest
     * @param string[]                         $headers          map
     * @param RuntimeOptions                   $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateAppGroupCredentialsResponse CreateAppGroupCredentialsResponse
     */
    public function createAppGroupCredentialsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppGroupCredentials',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/credentials',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppGroupCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $appGroupIdentity
     * @param CreateAppGroupCredentialsRequest $request          CreateAppGroupCredentialsRequest
     *
     * @return CreateAppGroupCredentialsResponse CreateAppGroupCredentialsResponse
     */
    public function createAppGroupCredentials($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupCredentialsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a rough sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified rough sort expression. By default, the value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request          CreateFirstRankRequest
     * @param string[]               $headers          map
     * @param RuntimeOptions         $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateFirstRankResponse CreateFirstRankResponse
     */
    public function createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/first-ranks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a rough sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified rough sort expression. By default, the value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request          CreateFirstRankRequest
     *
     * @return CreateFirstRankResponse CreateFirstRankResponse
     */
    public function createFirstRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an algorithm instance of a feature.
     *  *
     * @description You can call the [GetFunctionCurrentVersion](https://help.aliyun.com/document_detail/421377.html) operation to query the latest version of a feature. The response of the operation includes the createParameters parameter that is used to create an algorithm instance, the usageParameters parameter, and the requirements for setting these parameters.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request          CreateFunctionInstanceRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionInstanceResponse CreateFunctionInstanceResponse
     */
    public function createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createParameters)) {
            $body['createParameters'] = $request->createParameters;
        }
        if (!Utils::isUnset($request->cron)) {
            $body['cron'] = $request->cron;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->functionType)) {
            $body['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['modelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->usageParameters)) {
            $body['usageParameters'] = $request->usageParameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an algorithm instance of a feature.
     *  *
     * @description You can call the [GetFunctionCurrentVersion](https://help.aliyun.com/document_detail/421377.html) operation to query the latest version of a feature. The response of the operation includes the createParameters parameter that is used to create an algorithm instance, the usageParameters parameter, and the requirements for setting these parameters.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request          CreateFunctionInstanceRequest
     *
     * @return CreateFunctionInstanceResponse CreateFunctionInstanceResponse
     */
    public function createFunctionInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an algorithm resource for a specific feature.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionResourceRequest $request          CreateFunctionResourceRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionResourceResponse CreateFunctionResourceResponse
     */
    public function createFunctionResourceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $body['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionResource',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an algorithm resource for a specific feature.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionResourceRequest $request          CreateFunctionResourceRequest
     *
     * @return CreateFunctionResourceResponse CreateFunctionResourceResponse
     */
    public function createFunctionResource($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionResourceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Starts a training task for an algorithm instance.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionTaskResponse CreateFunctionTaskResponse
     */
    public function createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a training task for an algorithm instance.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return CreateFunctionTaskResponse CreateFunctionTaskResponse
     */
    public function createFunctionTask($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * @summary Create an intervention dictionary.
     *  *
     * @param CreateInterventionDictionaryRequest $request CreateInterventionDictionaryRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInterventionDictionaryResponse CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionaryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->analyzerType)) {
            $body['analyzerType'] = $request->analyzerType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create an intervention dictionary.
     *  *
     * @param CreateInterventionDictionaryRequest $request CreateInterventionDictionaryRequest
     *
     * @return CreateInterventionDictionaryResponse CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInterventionDictionaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a query analysis rule. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request          CreateQueryProcessorRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateQueryProcessorResponse CreateQueryProcessorResponse
     */
    public function createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a query analysis rule. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request          CreateQueryProcessorRequest
     *
     * @return CreateQueryProcessorResponse CreateQueryProcessorResponse
     */
    public function createQueryProcessor($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param CreateScheduledTaskRequest $request          CreateScheduledTaskRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledTaskResponse CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scheduled-tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param CreateScheduledTaskRequest $request          CreateScheduledTaskRequest
     *
     * @return CreateScheduledTaskResponse CreateScheduledTaskResponse
     */
    public function createScheduledTask($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledTaskWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a query policy.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateSearchStrategyRequest $request          CreateSearchStrategyRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateSearchStrategyResponse CreateSearchStrategyResponse
     */
    public function createSearchStrategyWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/search-strategies',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a query policy.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateSearchStrategyRequest $request          CreateSearchStrategyRequest
     *
     * @return CreateSearchStrategyResponse CreateSearchStrategyResponse
     */
    public function createSearchStrategy($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSearchStrategyWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a fine sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified fine sort expression. The default value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request          CreateSecondRankRequest
     * @param string[]                $headers          map
     * @param RuntimeOptions          $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateSecondRankResponse CreateSecondRankResponse
     */
    public function createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/second-ranks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a fine sort expression for a version of an OpenSearch application. If you set dryRun to true, this operation checks the specified fine sort expression. The default value of dryRun is false if you do not set this parameter.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request          CreateSecondRankRequest
     *
     * @return CreateSecondRankResponse CreateSecondRankResponse
     */
    public function createSecondRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a sort script.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param CreateSortScriptRequest $request          CreateSortScriptRequest
     * @param string[]                $headers          map
     * @param RuntimeOptions          $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateSortScriptResponse CreateSortScriptResponse
     */
    public function createSortScriptWithOptions($appGroupIdentity, $appVersionId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $body['scriptName'] = $request->scriptName;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a sort script.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appVersionId
     * @param CreateSortScriptRequest $request          CreateSortScriptRequest
     *
     * @return CreateSortScriptResponse CreateSortScriptResponse
     */
    public function createSortScript($appGroupIdentity, $appVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSortScriptWithOptions($appGroupIdentity, $appVersionId, $request, $headers, $runtime);
    }

    /**
     * @param CreateUserAnalyzerRequest $request CreateUserAnalyzerRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserAnalyzerResponse CreateUserAnalyzerResponse
     */
    public function createUserAnalyzerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->business)) {
            $body['business'] = $request->business;
        }
        if (!Utils::isUnset($request->businessAppGroupId)) {
            $body['businessAppGroupId'] = $request->businessAppGroupId;
        }
        if (!Utils::isUnset($request->businessType)) {
            $body['businessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserAnalyzerRequest $request CreateUserAnalyzerRequest
     *
     * @return CreateUserAnalyzerResponse CreateUserAnalyzerResponse
     */
    public function createUserAnalyzer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserAnalyzerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteABTestExperimentResponse DeleteABTestExperimentResponse
     */
    public function deleteABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DeleteABTestExperimentResponse DeleteABTestExperimentResponse
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
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteABTestGroupResponse DeleteABTestGroupResponse
     */
    public function deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DeleteABTestGroupResponse DeleteABTestGroupResponse
     */
    public function deleteABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @summary Deletes an A/B test scenario.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteABTestSceneResponse DeleteABTestSceneResponse
     */
    public function deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an A/B test scenario.
     *  *
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DeleteABTestSceneResponse DeleteABTestSceneResponse
     */
    public function deleteABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @summary Deletes an algorithm instance. Before you delete an instance, make sure that it is not in use to prevent service interruptions.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionInstanceResponse DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an algorithm instance. Before you delete an instance, make sure that it is not in use to prevent service interruptions.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return DeleteFunctionInstanceResponse DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstance($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * @summary Deletes an algorithm resource.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $resourceName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionResourceResponse DeleteFunctionResourceResponse
     */
    public function deleteFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionResource',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/resources/' . OpenApiUtilClient::getEncodeParam($resourceName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an algorithm resource.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $resourceName
     *
     * @return DeleteFunctionResourceResponse DeleteFunctionResourceResponse
     */
    public function deleteFunctionResource($appGroupIdentity, $functionName, $resourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $headers, $runtime);
    }

    /**
     * @summary Deletes a training task. The training task in progress cannot be deleted.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string         $generation
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionTaskResponse DeleteFunctionTaskResponse
     */
    public function deleteFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '/tasks/' . OpenApiUtilClient::getEncodeParam($generation) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a training task. The training task in progress cannot be deleted.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     * @param string $generation
     *
     * @return DeleteFunctionTaskResponse DeleteFunctionTaskResponse
     */
    public function deleteFunctionTask($appGroupIdentity, $functionName, $instanceName, $generation)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteSortScriptResponse DeleteSortScriptResponse
     */
    public function deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return DeleteSortScriptResponse DeleteSortScriptResponse
     */
    public function deleteSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string         $fileName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteSortScriptFileResponse DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/files/src/' . OpenApiUtilClient::getEncodeParam($fileName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     * @param string $fileName
     *
     * @return DeleteSortScriptFileResponse DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFile($appGroupIdentity, $appVersionId, $scriptName, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeABTestExperimentResponse DescribeABTestExperimentResponse
     */
    public function describeABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DescribeABTestExperimentResponse DescribeABTestExperimentResponse
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
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeABTestGroupResponse DescribeABTestGroupResponse
     */
    public function describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DescribeABTestGroupResponse DescribeABTestGroupResponse
     */
    public function describeABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @summary Queries the information about an A/B test scenario.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeABTestSceneResponse DescribeABTestSceneResponse
     */
    public function describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an A/B test scenario.
     *  *
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DescribeABTestSceneResponse DescribeABTestSceneResponse
     */
    public function describeABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeAppResponse DescribeAppResponse
     */
    public function describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppResponse DescribeAppResponse
     */
    public function describeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @summary Queries the details of an OpenSearch application.
     *  *
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeAppGroupResponse DescribeAppGroupResponse
     */
    public function describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an OpenSearch application.
     *  *
     * @param string $appGroupIdentity
     *
     * @return DescribeAppGroupResponse DescribeAppGroupResponse
     */
    public function describeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeAppStatisticsResponse DescribeAppStatisticsResponse
     */
    public function describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAppStatistics',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppStatisticsResponse DescribeAppStatisticsResponse
     */
    public function describeAppStatistics($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeAppsWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeApps',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeApps($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppsWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a data collection task of an application.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers                map
     * @param RuntimeOptions $runtime                runtime options for this request RuntimeOptions
     *
     * @return DescribeDataCollctionResponse DescribeDataCollctionResponse
     */
    public function describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCollction',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/data-collections/' . OpenApiUtilClient::getEncodeParam($dataCollectionIdentity) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCollctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a data collection task of an application.
     *  *
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return DescribeDataCollctionResponse DescribeDataCollctionResponse
     */
    public function describeDataCollction($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeFirstRankResponse DescribeFirstRankResponse
     */
    public function describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/first-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeFirstRankResponse DescribeFirstRankResponse
     */
    public function describeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInterventionDictionaryResponse DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DescribeInterventionDictionaryResponse DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeQueryProcessorResponse DescribeQueryProcessorResponse
     */
    public function describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeQueryProcessorResponse DescribeQueryProcessorResponse
     */
    public function describeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @summary Queries the endpoints of all regions that support OpenSearch.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the endpoints of all regions that support OpenSearch.
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeScheduledTaskResponse DescribeScheduledTaskResponse
     */
    public function describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scheduled-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return DescribeScheduledTaskResponse DescribeScheduledTaskResponse
     */
    public function describeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeSecondRankResponse DescribeSecondRankResponse
     */
    public function describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/second-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeSecondRankResponse DescribeSecondRankResponse
     */
    public function describeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowQueryStatusResponse DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowQueryStatus',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowQueryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeSlowQueryStatusResponse DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatus($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request DescribeUserAnalyzerRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserAnalyzerResponse DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzerWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->with)) {
            $query['with'] = $request->with;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request DescribeUserAnalyzerRequest
     *
     * @return DescribeUserAnalyzerResponse DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzer($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserAnalyzerWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DisableSlowQueryResponse DisableSlowQueryResponse
     */
    public function disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableSlowQuery',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query/actions/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DisableSlowQueryResponse DisableSlowQueryResponse
     */
    public function disableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return EnableSlowQueryResponse EnableSlowQueryResponse
     */
    public function enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableSlowQuery',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query/actions/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return EnableSlowQueryResponse EnableSlowQueryResponse
     */
    public function enableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a wide table that is generated after a JOIN operation is performed on multiple tables.
     *  *
     * @param GenerateMergedTableRequest $request GenerateMergedTableRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateMergedTableResponse GenerateMergedTableResponse
     */
    public function generateMergedTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spec)) {
            $query['spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'GenerateMergedTable',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/schema/actions/merge',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateMergedTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a wide table that is generated after a JOIN operation is performed on multiple tables.
     *  *
     * @param GenerateMergedTableRequest $request GenerateMergedTableRequest
     *
     * @return GenerateMergedTableResponse GenerateMergedTableResponse
     */
    public function generateMergedTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateMergedTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the type of an industry.
     *  *
     * @param string           $domainName
     * @param GetDomainRequest $request    GetDomainRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroupIdentity)) {
            $query['appGroupIdentity'] = $request->appGroupIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/domains/' . OpenApiUtilClient::getEncodeParam($domainName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the type of an industry.
     *  *
     * @param string           $domainName
     * @param GetDomainRequest $request    GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the version information about the current feature when you create an instance.
     *  *
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request      GetFunctionCurrentVersionRequest
     * @param string[]                         $headers      map
     * @param RuntimeOptions                   $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFunctionCurrentVersionResponse GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->functionType)) {
            $query['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['modelType'] = $request->modelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionCurrentVersion',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/current-version',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionCurrentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the version information about the current feature when you create an instance.
     *  *
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request      GetFunctionCurrentVersionRequest
     *
     * @return GetFunctionCurrentVersionResponse GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersion($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the algorithm instance that an application uses by default.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetFunctionDefaultInstanceResponse GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFunctionDefaultInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/default-instance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the algorithm instance that an application uses by default.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     *
     * @return GetFunctionDefaultInstanceResponse GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstance($appGroupIdentity, $functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of an algorithm instance by instance name.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request          GetFunctionInstanceRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetFunctionInstanceResponse GetFunctionInstanceResponse
     */
    public function getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an algorithm instance by instance name.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request          GetFunctionInstanceRequest
     *
     * @return GetFunctionInstanceResponse GetFunctionInstanceResponse
     */
    public function getFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries an algorithm resource.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $resourceName
     * @param GetFunctionResourceRequest $request          GetFunctionResourceRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetFunctionResourceResponse GetFunctionResourceResponse
     */
    public function getFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionResource',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/resources/' . OpenApiUtilClient::getEncodeParam($resourceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries an algorithm resource.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $resourceName
     * @param GetFunctionResourceRequest $request          GetFunctionResourceRequest
     *
     * @return GetFunctionResourceResponse GetFunctionResourceResponse
     */
    public function getFunctionResource($appGroupIdentity, $functionName, $resourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a training task.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string         $generation
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetFunctionTaskResponse GetFunctionTaskResponse
     */
    public function getFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFunctionTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '/tasks/' . OpenApiUtilClient::getEncodeParam($generation) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a training task.
     *  *
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     * @param string $generation
     *
     * @return GetFunctionTaskResponse GetFunctionTaskResponse
     */
    public function getFunctionTask($appGroupIdentity, $functionName, $instanceName, $generation)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $generation, $headers, $runtime);
    }

    /**
     * @summary Queries version information by version ID.
     *  *
     * @param string         $functionName
     * @param string         $versionId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFunctionVersionResponse GetFunctionVersionResponse
     */
    public function getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFunctionVersion',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries version information by version ID.
     *  *
     * @param string $functionName
     * @param string $versionId
     *
     * @return GetFunctionVersionResponse GetFunctionVersionResponse
     */
    public function getFunctionVersion($functionName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetScriptFileNamesResponse GetScriptFileNamesResponse
     */
    public function getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetScriptFileNames',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/file-names',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScriptFileNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     *
     * @return GetScriptFileNamesResponse GetScriptFileNamesResponse
     */
    public function getScriptFileNames($appGroupIdentity, $appVersionId, $scriptName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a query policy.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetSearchStrategyResponse GetSearchStrategyResponse
     */
    public function getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/search-strategies/' . OpenApiUtilClient::getEncodeParam($strategyName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a query policy.
     *  *
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return GetSearchStrategyResponse GetSearchStrategyResponse
     */
    public function getSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a sort script.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetSortScriptResponse GetSortScriptResponse
     */
    public function getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a sort script.
     *  *
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return GetSortScriptResponse GetSortScriptResponse
     */
    public function getSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @summary Queries the content of a sort script.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string         $fileName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetSortScriptFileResponse GetSortScriptFileResponse
     */
    public function getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/files/src/' . OpenApiUtilClient::getEncodeParam($fileName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the content of a sort script.
     *  *
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     * @param string $fileName
     *
     * @return GetSortScriptFileResponse GetSortScriptFileResponse
     */
    public function getSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime);
    }

    /**
     * @summary Queries a list of experiments.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListABTestExperimentsResponse ListABTestExperimentsResponse
     */
    public function listABTestExperimentsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestExperiments',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of experiments.
     *  *
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return ListABTestExperimentsResponse ListABTestExperimentsResponse
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
     * @param string         $experimentId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListABTestFixedFlowDividersResponse ListABTestFixedFlowDividersResponse
     */
    public function listABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestFixedFlowDividers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/fixed-flow-dividers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return ListABTestFixedFlowDividersResponse ListABTestFixedFlowDividersResponse
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
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListABTestGroupsResponse ListABTestGroupsResponse
     */
    public function listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestGroups',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return ListABTestGroupsResponse ListABTestGroupsResponse
     */
    public function listABTestGroups($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListABTestScenesResponse ListABTestScenesResponse
     */
    public function listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestScenes',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListABTestScenesResponse ListABTestScenesResponse
     */
    public function listABTestScenes($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Queries a list of OpenSearch applications.
     *  *
     * @description *   This operation allows you to query applications by application name, instance ID, and application type.
     * *   This operation allows you to sort the applications based on their creation time.
     * *   This operation supports the parameters for paging.
     *  *
     * @param ListAppGroupsRequest $tmpReq  ListAppGroupsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppGroupsResponse ListAppGroupsResponse
     */
    public function listAppGroupsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAppGroupsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['sortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroups',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of OpenSearch applications.
     *  *
     * @description *   This operation allows you to query applications by application name, instance ID, and application type.
     * *   This operation allows you to sort the applications based on their creation time.
     * *   This operation supports the parameters for paging.
     *  *
     * @param ListAppGroupsRequest $request ListAppGroupsRequest
     *
     * @return ListAppGroupsResponse ListAppGroupsResponse
     */
    public function listAppGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request          ListDataCollectionsRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListDataCollectionsResponse ListDataCollectionsResponse
     */
    public function listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataCollections',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/data-collections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request          ListDataCollectionsRequest
     *
     * @return ListDataCollectionsResponse ListDataCollectionsResponse
     */
    public function listDataCollections($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Queries all fields in a table of a data source. This operation is for internal use only.
     *  *
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request        ListDataSourceTableFieldsRequest
     * @param string[]                         $headers        map
     * @param RuntimeOptions                   $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceTableFieldsResponse ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        if (!Utils::isUnset($request->rawType)) {
            $query['rawType'] = $request->rawType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTableFields',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceType) . '/fields',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTableFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all fields in a table of a data source. This operation is for internal use only.
     *  *
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request        ListDataSourceTableFieldsRequest
     *
     * @return ListDataSourceTableFieldsResponse ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFields($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request        ListDataSourceTablesRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceTablesResponse ListDataSourceTablesResponse
     */
    public function listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTables',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceType) . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request        ListDataSourceTablesRequest
     *
     * @return ListDataSourceTablesResponse ListDataSourceTablesResponse
     */
    public function listDataSourceTables($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListFirstRanksResponse ListFirstRanksResponse
     */
    public function listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFirstRanks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/first-ranks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFirstRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListFirstRanksResponse ListFirstRanksResponse
     */
    public function listFirstRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @summary Queries all algorithm instances of a user, which meet specified conditions.
     *  *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request          ListFunctionInstancesRequest
     * @param string[]                     $headers          map
     * @param RuntimeOptions               $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListFunctionInstancesResponse ListFunctionInstancesResponse
     */
    public function listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionType)) {
            $query['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['modelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionInstances',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all algorithm instances of a user, which meet specified conditions.
     *  *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request          ListFunctionInstancesRequest
     *
     * @return ListFunctionInstancesResponse ListFunctionInstancesResponse
     */
    public function listFunctionInstances($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries algorithm resources.
     *  *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionResourcesRequest $request          ListFunctionResourcesRequest
     * @param string[]                     $headers          map
     * @param RuntimeOptions               $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListFunctionResourcesResponse ListFunctionResourcesResponse
     */
    public function listFunctionResourcesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionResources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries algorithm resources.
     *  *
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionResourcesRequest $request          ListFunctionResourcesRequest
     *
     * @return ListFunctionResourcesResponse ListFunctionResourcesResponse
     */
    public function listFunctionResources($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionResourcesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the training tasks. The returned results are sorted by start time in descending order.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request          ListFunctionTasksRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListFunctionTasksResponse ListFunctionTasksResponse
     */
    public function listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
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
            'action'      => 'ListFunctionTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the training tasks. The returned results are sorted by start time in descending order.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request          ListFunctionTasksRequest
     *
     * @return ListFunctionTasksResponse ListFunctionTasksResponse
     */
    public function listFunctionTasks($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @param ListInterventionDictionariesRequest $request ListInterventionDictionariesRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterventionDictionariesResponse ListInterventionDictionariesResponse
     */
    public function listInterventionDictionariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInterventionDictionariesRequest $request ListInterventionDictionariesRequest
     *
     * @return ListInterventionDictionariesResponse ListInterventionDictionariesResponse
     */
    public function listInterventionDictionaries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the intervention entries in an intervention dictionary.
     *  *
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request ListInterventionDictionaryEntriesRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterventionDictionaryEntriesResponse ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->word)) {
            $query['word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '/entries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the intervention entries in an intervention dictionary.
     *  *
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request ListInterventionDictionaryEntriesRequest
     *
     * @return ListInterventionDictionaryEntriesResponse ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request ListInterventionDictionaryNerResultsRequest
     * @param string[]                                    $headers map
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterventionDictionaryNerResultsResponse ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryNerResults',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '/ner-results',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryNerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request ListInterventionDictionaryNerResultsRequest
     *
     * @return ListInterventionDictionaryNerResultsResponse ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResults($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryRelatedEntities',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '/related',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryRelatedEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntities($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查看当前的处理流
     *  *
     * @param string                 $appGroupIdentity
     * @param ListProceedingsRequest $request          ListProceedingsRequest
     * @param string[]               $headers          map
     * @param RuntimeOptions         $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListProceedingsResponse ListProceedingsResponse
     */
    public function listProceedingsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterFinished)) {
            $query['filterFinished'] = $request->filterFinished;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProceedings',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/proceedings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProceedingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看当前的处理流
     *  *
     * @param string                 $appGroupIdentity
     * @param ListProceedingsRequest $request          ListProceedingsRequest
     *
     * @return ListProceedingsResponse ListProceedingsResponse
     */
    public function listProceedings($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProceedingsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the results of a query analysis test. This API operation is available only to existing applications of OpenSearch Open Source Compatible Edition.
     *  *
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request          ListQueryProcessorAnalyzerResultsRequest
     * @param string[]                                 $headers          map
     * @param RuntimeOptions                           $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListQueryProcessorAnalyzerResultsResponse ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->text)) {
            $query['text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessorAnalyzerResults',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors/' . OpenApiUtilClient::getEncodeParam($name) . '/analyze',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorAnalyzerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of a query analysis test. This API operation is available only to existing applications of OpenSearch Open Source Compatible Edition.
     *  *
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request          ListQueryProcessorAnalyzerResultsRequest
     *
     * @return ListQueryProcessorAnalyzerResultsResponse ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResults($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the recommended priority settings of entity types for named entity recognition (NER).
     *  *
     * @param ListQueryProcessorNersRequest $request ListQueryProcessorNersRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQueryProcessorNersResponse ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessorNers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/query-processor/ner/default-priorities',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorNersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the recommended priority settings of entity types for named entity recognition (NER).
     *  *
     * @param ListQueryProcessorNersRequest $request ListQueryProcessorNersRequest
     *
     * @return ListQueryProcessorNersResponse ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorNersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of query analysis rules that are configured for a version of an OpenSearch application.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request          ListQueryProcessorsRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListQueryProcessorsResponse ListQueryProcessorsResponse
     */
    public function listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isActive)) {
            $query['isActive'] = $request->isActive;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessors',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of query analysis rules that are configured for a version of an OpenSearch application.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request          ListQueryProcessorsRequest
     *
     * @return ListQueryProcessorsResponse ListQueryProcessorsResponse
     */
    public function listQueryProcessors($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries tickets that are submitted to apply for quotas for an OpenSearch application.
     *  *
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request          ListQuotaReviewTasksRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListQuotaReviewTasksResponse ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaReviewTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/quota-review-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotaReviewTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tickets that are submitted to apply for quotas for an OpenSearch application.
     *  *
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request          ListQuotaReviewTasksRequest
     *
     * @return ListQuotaReviewTasksResponse ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of scheduled tasks of an OpenSearch application.
     *  *
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request          ListScheduledTasksRequest
     * @param string[]                  $headers          map
     * @param RuntimeOptions            $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListScheduledTasksResponse ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScheduledTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scheduled-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of scheduled tasks of an OpenSearch application.
     *  *
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request          ListScheduledTasksRequest
     *
     * @return ListScheduledTasksResponse ListScheduledTasksResponse
     */
    public function listScheduledTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of query policies.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSearchStrategiesResponse ListSearchStrategiesResponse
     */
    public function listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSearchStrategies',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/search-strategies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of query policies.
     *  *
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSearchStrategiesResponse ListSearchStrategiesResponse
     */
    public function listSearchStrategies($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSecondRanksResponse ListSecondRanksResponse
     */
    public function listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSecondRanks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/second-ranks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSecondRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSecondRanksResponse ListSecondRanksResponse
     */
    public function listSecondRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @summary Queries the suggestions that are provided by Optimization Master for slow queries.
     *  *
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSlowQueryCategoriesResponse ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSlowQueryCategories',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query/categories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlowQueryCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the suggestions that are provided by Optimization Master for slow queries.
     *  *
     * @param string $appGroupIdentity
     *
     * @return ListSlowQueryCategoriesResponse ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategories($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $categoryIndex
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSlowQueryQueriesResponse ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSlowQueryQueries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query/categories/' . OpenApiUtilClient::getEncodeParam($categoryIndex) . '/queries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlowQueryQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $categoryIndex
     *
     * @return ListSlowQueryQueriesResponse ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueries($appGroupIdentity, $categoryIndex)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime);
    }

    /**
     * @summary Queries a list of sort expressions that are configured for a version of an OpenSearch application.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSortExpressionsResponse ListSortExpressionsResponse
     */
    public function listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSortExpressions',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/sort-expressions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSortExpressionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of sort expressions that are configured for a version of an OpenSearch application.
     *  *
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSortExpressionsResponse ListSortExpressionsResponse
     */
    public function listSortExpressions($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @summary Queries all sort scripts of an application version.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListSortScriptsResponse ListSortScriptsResponse
     */
    public function listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSortScripts',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSortScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all sort scripts of an application version.
     *  *
     * @param string $appGroupIdentity
     * @param string $appVersionId
     *
     * @return ListSortScriptsResponse ListSortScriptsResponse
     */
    public function listSortScripts($appGroupIdentity, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime);
    }

    /**
     * @summary Queries log statistics, such as application error logs, hotword rankings, and slow query logs.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request          ListStatisticLogsRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListStatisticLogsResponse ListStatisticLogsResponse
     */
    public function listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->distinct)) {
            $query['distinct'] = $request->distinct;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['sortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['stopTime'] = $request->stopTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStatisticLogs',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/statistic-logs/' . OpenApiUtilClient::getEncodeParam($moduleName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStatisticLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries log statistics, such as application error logs, hotword rankings, and slow query logs.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request          ListStatisticLogsRequest
     *
     * @return ListStatisticLogsResponse ListStatisticLogsResponse
     */
    public function listStatisticLogs($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request          ListStatisticReportRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return ListStatisticReportResponse ListStatisticReportResponse
     */
    public function listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStatisticReport',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/statistic-report/' . OpenApiUtilClient::getEncodeParam($moduleName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStatisticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request          ListStatisticReportRequest
     *
     * @return ListStatisticReportResponse ListStatisticReportResponse
     */
    public function listStatisticReport($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries tagged resources.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['resourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/resource-tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries tagged resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the entries of a custom analyzer.
     *  *
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request ListUserAnalyzerEntriesRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserAnalyzerEntriesResponse ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->word)) {
            $query['word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserAnalyzerEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . OpenApiUtilClient::getEncodeParam($name) . '/entries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the entries of a custom analyzer.
     *  *
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request ListUserAnalyzerEntriesRequest
     *
     * @return ListUserAnalyzerEntriesResponse ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the custom analyzers that belong to the current account.
     *  *
     * @param ListUserAnalyzersRequest $request ListUserAnalyzersRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserAnalyzersResponse ListUserAnalyzersResponse
     */
    public function listUserAnalyzersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserAnalyzers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserAnalyzersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the custom analyzers that belong to the current account.
     *  *
     * @param ListUserAnalyzersRequest $request ListUserAnalyzersRequest
     *
     * @return ListUserAnalyzersResponse ListUserAnalyzersResponse
     */
    public function listUserAnalyzers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the properties of an OpenSearch application or sets the online version of an OpenSearch application.
     *  *
     * @param string                $appGroupIdentity
     * @param ModifyAppGroupRequest $request          ModifyAppGroupRequest
     * @param string[]              $headers          map
     * @param RuntimeOptions        $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifyAppGroupResponse ModifyAppGroupResponse
     */
    public function modifyAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->currentVersion)) {
            $body['currentVersion'] = $request->currentVersion;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the properties of an OpenSearch application or sets the online version of an OpenSearch application.
     *  *
     * @param string                $appGroupIdentity
     * @param ModifyAppGroupRequest $request          ModifyAppGroupRequest
     *
     * @return ModifyAppGroupResponse ModifyAppGroupResponse
     */
    public function modifyAppGroup($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ModifyAppGroupQuotaRequest $request          ModifyAppGroupQuotaRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifyAppGroupQuotaResponse ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuotaWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppGroupQuota',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/quota',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAppGroupQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ModifyAppGroupQuotaRequest $request          ModifyAppGroupQuotaRequest
     *
     * @return ModifyAppGroupQuotaResponse ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuota($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupQuotaWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a rough sort expression for an OpenSearch application. If you set dryRun to true, this operation checks the rough sort expression after the expression is modified. If you do not specify this parameter, false is used by default.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request          ModifyFirstRankRequest
     * @param string[]               $headers          map
     * @param RuntimeOptions         $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifyFirstRankResponse ModifyFirstRankResponse
     */
    public function modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/first-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a rough sort expression for an OpenSearch application. If you set dryRun to true, this operation checks the rough sort expression after the expression is modified. If you do not specify this parameter, false is used by default.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request          ModifyFirstRankRequest
     *
     * @return ModifyFirstRankResponse ModifyFirstRankResponse
     */
    public function modifyFirstRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a query analysis rule for a specific application version. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not specify this parameter.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request          ModifyQueryProcessorRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifyQueryProcessorResponse ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a query analysis rule for a specific application version. If you set dryRun to true, this operation checks the specified query analysis rule. By default, the value of dryRun is false if you do not specify this parameter.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request          ModifyQueryProcessorRequest
     *
     * @return ModifyQueryProcessorResponse ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessor($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a scheduled task.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $taskId
     * @param ModifyScheduledTaskRequest $request          ModifyScheduledTaskRequest
     * @param string[]                   $headers          map
     * @param RuntimeOptions             $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifyScheduledTaskResponse ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scheduled-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a scheduled task.
     *  *
     * @param string                     $appGroupIdentity
     * @param string                     $taskId
     * @param ModifyScheduledTaskRequest $request          ModifyScheduledTaskRequest
     *
     * @return ModifyScheduledTaskResponse ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($appGroupIdentity, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a fine sort expression that is configured for a specific OpenSearch application version. If you set dryRun to true, the specified fine sort expression is checked after the expression is modified. By default, the value of dryRun is false if you do not specify this parameter.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request          ModifySecondRankRequest
     * @param string[]                $headers          map
     * @param RuntimeOptions          $runtime          runtime options for this request RuntimeOptions
     *
     * @return ModifySecondRankResponse ModifySecondRankResponse
     */
    public function modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifySecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/second-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a fine sort expression that is configured for a specific OpenSearch application version. If you set dryRun to true, the specified fine sort expression is checked after the expression is modified. By default, the value of dryRun is false if you do not specify this parameter.
     *  *
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request          ModifySecondRankRequest
     *
     * @return ModifySecondRankResponse ModifySecondRankResponse
     */
    public function modifySecondRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary Accepts the changes in intervention entries.
     *  *
     * @param string                                   $name
     * @param PushInterventionDictionaryEntriesRequest $request PushInterventionDictionaryEntriesRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return PushInterventionDictionaryEntriesResponse PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'PushInterventionDictionaryEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '/entries/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Accepts the changes in intervention entries.
     *  *
     * @param string                                   $name
     * @param PushInterventionDictionaryEntriesRequest $request PushInterventionDictionaryEntriesRequest
     *
     * @return PushInterventionDictionaryEntriesResponse PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary Accepts the changes in the entries of a custom analyzer.
     *  *
     * @param string                         $name
     * @param PushUserAnalyzerEntriesRequest $request PushUserAnalyzerEntriesRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return PushUserAnalyzerEntriesResponse PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->entries)) {
            $body['entries'] = $request->entries;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushUserAnalyzerEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . OpenApiUtilClient::getEncodeParam($name) . '/entries/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Accepts the changes in the entries of a custom analyzer.
     *  *
     * @param string                         $name
     * @param PushUserAnalyzerEntriesRequest $request PushUserAnalyzerEntriesRequest
     *
     * @return PushUserAnalyzerEntriesResponse PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ReleaseSortScriptResponse ReleaseSortScriptResponse
     */
    public function releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReleaseSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/actions/release',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return ReleaseSortScriptResponse ReleaseSortScriptResponse
     */
    public function releaseSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @summary Deletes a version of an OpenSearch application.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveAppResponse RemoveAppResponse
     */
    public function removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a version of an OpenSearch application.
     *  *
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return RemoveAppResponse RemoveAppResponse
     */
    public function removeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveAppGroupResponse RemoveAppGroupResponse
     */
    public function removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return RemoveAppGroupResponse RemoveAppGroupResponse
     */
    public function removeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Disables data collection.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers                map
     * @param RuntimeOptions $runtime                runtime options for this request RuntimeOptions
     *
     * @return RemoveDataCollectionResponse RemoveDataCollectionResponse
     */
    public function removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveDataCollection',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/data-collections/' . OpenApiUtilClient::getEncodeParam($dataCollectionIdentity) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDataCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables data collection.
     *  *
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return RemoveDataCollectionResponse RemoveDataCollectionResponse
     */
    public function removeDataCollection($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveFirstRankResponse RemoveFirstRankResponse
     */
    public function removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/first-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveFirstRankResponse RemoveFirstRankResponse
     */
    public function removeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveInterventionDictionaryResponse RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveInterventionDictionaryResponse RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveQueryProcessorResponse RemoveQueryProcessorResponse
     */
    public function removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/query-processors/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveQueryProcessorResponse RemoveQueryProcessorResponse
     */
    public function removeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveScheduledTaskResponse RemoveScheduledTaskResponse
     */
    public function removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scheduled-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return RemoveScheduledTaskResponse RemoveScheduledTaskResponse
     */
    public function removeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @summary Deletes a query policy.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveSearchStrategyResponse RemoveSearchStrategyResponse
     */
    public function removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/search-strategies/' . OpenApiUtilClient::getEncodeParam($strategyName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a query policy.
     *  *
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return RemoveSearchStrategyResponse RemoveSearchStrategyResponse
     */
    public function removeSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return RemoveSecondRankResponse RemoveSecondRankResponse
     */
    public function removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/second-ranks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveSecondRankResponse RemoveSecondRankResponse
     */
    public function removeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserAnalyzerResponse RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzerWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveUserAnalyzerResponse RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzer($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeUserAnalyzerWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary Renews an application. This operation is not available now. You must renew an application in the OpenSearch console.
     *  *
     * @param string               $appGroupIdentity
     * @param RenewAppGroupRequest $request          RenewAppGroupRequest
     * @param string[]             $headers          map
     * @param RuntimeOptions       $runtime          runtime options for this request RuntimeOptions
     *
     * @return RenewAppGroupResponse RenewAppGroupResponse
     */
    public function renewAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'RenewAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews an application. This operation is not available now. You must renew an application in the OpenSearch console.
     *  *
     * @param string               $appGroupIdentity
     * @param RenewAppGroupRequest $request          RenewAppGroupRequest
     *
     * @return RenewAppGroupResponse RenewAppGroupResponse
     */
    public function renewAppGroup($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewAppGroupWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @summary Converts a service-based application to an instance-based application.
     *  *
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return ReplaceAppGroupCommodityCodeResponse ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReplaceAppGroupCommodityCode',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/actions/to-instance-typed',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplaceAppGroupCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Converts a service-based application to an instance-based application.
     *  *
     * @param string $appGroupIdentity
     *
     * @return ReplaceAppGroupCommodityCodeResponse ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCode($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Uploads a sort script.
     *  *
     * @param string                    $appGroupIdentity
     * @param string                    $scriptName
     * @param string                    $appVersionId
     * @param string                    $fileName
     * @param SaveSortScriptFileRequest $request          SaveSortScriptFileRequest
     * @param string[]                  $headers          map
     * @param RuntimeOptions            $runtime          runtime options for this request RuntimeOptions
     *
     * @return SaveSortScriptFileResponse SaveSortScriptFileResponse
     */
    public function saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '/files/src/' . OpenApiUtilClient::getEncodeParam($fileName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SaveSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a sort script.
     *  *
     * @param string                    $appGroupIdentity
     * @param string                    $scriptName
     * @param string                    $appVersionId
     * @param string                    $fileName
     * @param SaveSortScriptFileRequest $request          SaveSortScriptFileRequest
     *
     * @return SaveSortScriptFileResponse SaveSortScriptFileResponse
     */
    public function saveSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $request, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return StartSlowQueryAnalyzerResponse StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartSlowQueryAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/optimizers/slow-query/actions/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartSlowQueryAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return StartSlowQueryAnalyzerResponse StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzer($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/resource-tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Unbinds a custom analyzer from an Elasticsearch instance.
     *  *
     * @description You can call this operation to unbind a custom analyzer from an Elasticsearch instance.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $esInstanceId
     * @param UnbindESUserAnalyzerRequest $request          UnbindESUserAnalyzerRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return UnbindESUserAnalyzerResponse UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UnbindESUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/es/' . OpenApiUtilClient::getEncodeParam($esInstanceId) . '/actions/unbind-analyzer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds a custom analyzer from an Elasticsearch instance.
     *  *
     * @description You can call this operation to unbind a custom analyzer from an Elasticsearch instance.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $esInstanceId
     * @param UnbindESUserAnalyzerRequest $request          UnbindESUserAnalyzerRequest
     *
     * @return UnbindESUserAnalyzerResponse UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzer($appGroupIdentity, $esInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Unbinds an Elasticsearch instance from an OpenSearch application.
     *  *
     * @param string         $appGroupIdentity
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return UnbindEsInstanceResponse UnbindEsInstanceResponse
     */
    public function unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UnbindEsInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/actions/unbind-es-instance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds an Elasticsearch instance from an OpenSearch application.
     *  *
     * @param string $appGroupIdentity
     *
     * @return UnbindEsInstanceResponse UnbindEsInstanceResponse
     */
    public function unbindEsInstance($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @summary Remove tags from resources.
     *  *
     * @param UntagResourcesRequest $tmpReq  UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UntagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKey)) {
            $request->tagKeyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'tagKey', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['all'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['resourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeyShrink)) {
            $query['tagKey'] = $request->tagKeyShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/resource-tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Remove tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the parameters of an A/B test.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param string                        $experimentId
     * @param UpdateABTestExperimentRequest $request          UpdateABTestExperimentRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateABTestExperimentResponse UpdateABTestExperimentResponse
     */
    public function updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the parameters of an A/B test.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $sceneId
     * @param string                        $groupId
     * @param string                        $experimentId
     * @param UpdateABTestExperimentRequest $request          UpdateABTestExperimentRequest
     *
     * @return UpdateABTestExperimentResponse UpdateABTestExperimentResponse
     */
    public function updateABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies whitelists.
     *  *
     * @param string                               $appGroupIdentity
     * @param string                               $sceneId
     * @param string                               $groupId
     * @param string                               $experimentId
     * @param UpdateABTestFixedFlowDividersRequest $request          UpdateABTestFixedFlowDividersRequest
     * @param string[]                             $headers          map
     * @param RuntimeOptions                       $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateABTestFixedFlowDividersResponse UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestFixedFlowDividers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/experiments/' . OpenApiUtilClient::getEncodeParam($experimentId) . '/fixed-flow-dividers',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies whitelists.
     *  *
     * @param string                               $appGroupIdentity
     * @param string                               $sceneId
     * @param string                               $groupId
     * @param string                               $experimentId
     * @param UpdateABTestFixedFlowDividersRequest $request          UpdateABTestFixedFlowDividersRequest
     *
     * @return UpdateABTestFixedFlowDividersResponse UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a test group.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param string                   $groupId
     * @param UpdateABTestGroupRequest $request          UpdateABTestGroupRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateABTestGroupResponse UpdateABTestGroupResponse
     */
    public function updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a test group.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param string                   $groupId
     * @param UpdateABTestGroupRequest $request          UpdateABTestGroupRequest
     *
     * @return UpdateABTestGroupResponse UpdateABTestGroupResponse
     */
    public function updateABTestGroup($appGroupIdentity, $sceneId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies an A/B test scenario.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param UpdateABTestSceneRequest $request          UpdateABTestSceneRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateABTestSceneResponse UpdateABTestSceneResponse
     */
    public function updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/scenes/' . OpenApiUtilClient::getEncodeParam($sceneId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an A/B test scenario.
     *  *
     * @param string                   $appGroupIdentity
     * @param string                   $sceneId
     * @param UpdateABTestSceneRequest $request          UpdateABTestSceneRequest
     *
     * @return UpdateABTestSceneResponse UpdateABTestSceneResponse
     */
    public function updateABTestScene($appGroupIdentity, $sceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request          UpdateFetchFieldsRequest
     * @param string[]                 $headers          map
     * @param RuntimeOptions           $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateFetchFieldsResponse UpdateFetchFieldsResponse
     */
    public function updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateFetchFields',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/fetch-fields',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFetchFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request          UpdateFetchFieldsRequest
     *
     * @return UpdateFetchFieldsResponse UpdateFetchFieldsResponse
     */
    public function updateFetchFields($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Sets the default algorithm instance used by the specified application. The new algorithm instance automatically overwrites the most recently set default instance. If no instance is set, the default instance is canceled.
     *  *
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request          UpdateFunctionDefaultInstanceRequest
     * @param string[]                             $headers          map
     * @param RuntimeOptions                       $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionDefaultInstanceResponse UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunctionDefaultInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/default-instance',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the default algorithm instance used by the specified application. The new algorithm instance automatically overwrites the most recently set default instance. If no instance is set, the default instance is canceled.
     *  *
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request          UpdateFunctionDefaultInstanceRequest
     *
     * @return UpdateFunctionDefaultInstanceResponse UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an algorithm instance.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request          UpdateFunctionInstanceRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionInstanceResponse UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createParameters)) {
            $body['createParameters'] = $request->createParameters;
        }
        if (!Utils::isUnset($request->cron)) {
            $body['cron'] = $request->cron;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->usageParameters)) {
            $body['usageParameters'] = $request->usageParameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances/' . OpenApiUtilClient::getEncodeParam($instanceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an algorithm instance.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request          UpdateFunctionInstanceRequest
     *
     * @return UpdateFunctionInstanceResponse UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an algorithm resource.
     *  *
     * @description You can call this operation to update the information about resources by resource name. You can modify only the values of data and description.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $resourceName
     * @param UpdateFunctionResourceRequest $request          UpdateFunctionResourceRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionResourceResponse UpdateFunctionResourceResponse
     */
    public function updateFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunctionResource',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/resources/' . OpenApiUtilClient::getEncodeParam($resourceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an algorithm resource.
     *  *
     * @description You can call this operation to update the information about resources by resource name. You can modify only the values of data and description.
     *  *
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $resourceName
     * @param UpdateFunctionResourceRequest $request          UpdateFunctionResourceRequest
     *
     * @return UpdateFunctionResourceResponse UpdateFunctionResourceResponse
     */
    public function updateFunctionResource($appGroupIdentity, $functionName, $resourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionResourceWithOptions($appGroupIdentity, $functionName, $resourceName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a query policy.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $strategyName
     * @param UpdateSearchStrategyRequest $request          UpdateSearchStrategyRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateSearchStrategyResponse UpdateSearchStrategyResponse
     */
    public function updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/search-strategies/' . OpenApiUtilClient::getEncodeParam($strategyName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a query policy.
     *  *
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $strategyName
     * @param UpdateSearchStrategyRequest $request          UpdateSearchStrategyRequest
     *
     * @return UpdateSearchStrategyResponse UpdateSearchStrategyResponse
     */
    public function updateSearchStrategy($appGroupIdentity, $appId, $strategyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the description of a sort script.
     *  *
     * @description You can call this operation to modify the description of a sort script.
     *  *
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateSortScriptResponse UpdateSortScriptResponse
     */
    public function updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appVersionId) . '/sort-scripts/' . OpenApiUtilClient::getEncodeParam($scriptName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a sort script.
     *  *
     * @description You can call this operation to modify the description of a sort script.
     *  *
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     *
     * @return UpdateSortScriptResponse UpdateSortScriptResponse
     */
    public function updateSortScript($appGroupIdentity, $appVersionId, $scriptName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime);
    }

    /**
     * @summary Updates summaries. A dry run is supported.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request          UpdateSummariesRequest
     * @param string[]               $headers          map
     * @param RuntimeOptions         $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateSummariesResponse UpdateSummariesResponse
     */
    public function updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSummaries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . OpenApiUtilClient::getEncodeParam($appGroupIdentity) . '/apps/' . OpenApiUtilClient::getEncodeParam($appId) . '/summaries',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates summaries. A dry run is supported.
     *  *
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request          UpdateSummariesRequest
     *
     * @return UpdateSummariesResponse UpdateSummariesResponse
     */
    public function updateSummaries($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary Verifies data sources.
     *  *
     * @param ValidateDataSourcesRequest $request ValidateDataSourcesRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateDataSourcesResponse ValidateDataSourcesResponse
     */
    public function validateDataSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ValidateDataSources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/validations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies data sources.
     *  *
     * @param ValidateDataSourcesRequest $request ValidateDataSourcesRequest
     *
     * @return ValidateDataSourcesResponse ValidateDataSourcesResponse
     */
    public function validateDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateDataSourcesWithOptions($request, $headers, $runtime);
    }
}

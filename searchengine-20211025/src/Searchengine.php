<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CloneSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CloneSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateAliasRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateAliasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateConfigDirRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateConfigDirResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreatePublicUrlResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DebugModelRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DebugModelResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteConfigDirRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteConfigDirResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeletePublicUrlResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ExecuteSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ExecuteSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ForceSwitchResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDatabaseSchemaResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexOnlineStrategyResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableGenerationResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigDirRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigDirResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAliasesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterNamesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexRecoverRecordsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListLogsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListLogsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListPausePolicysResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListPostQueryResultRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListPostQueryResultResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListQueryResultRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListQueryResultResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListRestQueryResultRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListRestQueryResultResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListSchemasRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListSchemasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTableGenerationsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTablesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTablesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTasksRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTasksResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListVectorQueryResultRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListVectorQueryResultResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAliasRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAliasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterDescRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterDescResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOfflineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOfflineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOnlineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOnlineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexOnlineStrategyRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexOnlineStrategyResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyNodeConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyNodeConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyOnlineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyOnlineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPasswordRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPasswordResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPausePolicyRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPausePolicyResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPublicUrlIpListRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPublicUrlIpListResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifySearcherReplicaRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifySearcherReplicaResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishIndexVersionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PushDocumentsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PushDocumentsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RecoverIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RecoverIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ReindexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ReindexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RemoveClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RenameFolderRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RenameFolderResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\StartIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\StopIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\StopTaskResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceContentRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceContentResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceNameRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceNameResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceParamsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceParamsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Searchengine extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('searchengine', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Triggers reindexing.
     *
     * @remarks
     * ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/actions/build-index
     *
     * @param request - BuildIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuildIndexResponse
     *
     * @param string            $instanceId
     * @param BuildIndexRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BuildIndexResponse
     */
    public function buildIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->buildMode) {
            @$body['buildMode'] = $request->buildMode;
        }

        if (null !== $request->dataSourceName) {
            @$body['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceType) {
            @$body['dataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->dataTimeSec) {
            @$body['dataTimeSec'] = $request->dataTimeSec;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->generation) {
            @$body['generation'] = $request->generation;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BuildIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/actions/build-index',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BuildIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers reindexing.
     *
     * @remarks
     * ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/actions/build-index
     *
     * @param request - BuildIndexRequest
     *
     * @returns BuildIndexResponse
     *
     * @param string            $instanceId
     * @param BuildIndexRequest $request
     *
     * @return BuildIndexResponse
     */
    public function buildIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 更换实例资源组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param string                     $instanceId
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->newResourceGroupId) {
            @$body['newResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/actions/change-resource-group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更换实例资源组.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param string                     $instanceId
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - CloneSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneSqlInstanceResponse
     *
     * @param string                  $instanceId
     * @param string                  $database
     * @param string                  $sqlInstanceId
     * @param CloneSqlInstanceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CloneSqlInstanceResponse
     */
    public function cloneSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->targetFolderId) {
            @$body['targetFolderId'] = $request->targetFolderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneSqlInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '/actions/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CloneSqlInstanceRequest
     *
     * @returns CloneSqlInstanceResponse
     *
     * @param string                  $instanceId
     * @param string                  $database
     * @param string                  $sqlInstanceId
     * @param CloneSqlInstanceRequest $request
     *
     * @return CloneSqlInstanceResponse
     */
    public function cloneSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - CreateAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAliasResponse
     *
     * @param string             $instanceId
     * @param CreateAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newMode) {
            @$query['newMode'] = $request->newMode;
        }

        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->index) {
            @$body['index'] = $request->index;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlias',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/aliases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAliasRequest
     *
     * @returns CreateAliasResponse
     *
     * @param string             $instanceId
     * @param CreateAliasRequest $request
     *
     * @return CreateAliasResponse
     */
    public function createAlias($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAliasWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a cluster.
     *
     * @remarks
     * ### [](#method)Method
     * `POST`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/clusters`
     *
     * @param request - CreateClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param string               $instanceId
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoLoad) {
            @$body['autoLoad'] = $request->autoLoad;
        }

        if (null !== $request->dataNode) {
            @$body['dataNode'] = $request->dataNode;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->queryNode) {
            @$body['queryNode'] = $request->queryNode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster.
     *
     * @remarks
     * ### [](#method)Method
     * `POST`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/clusters`
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param string               $instanceId
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - CreateConfigDirRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigDirResponse
     *
     * @param string                 $instanceId
     * @param string                 $configName
     * @param CreateConfigDirRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateConfigDirResponse
     */
    public function createConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dirName) {
            @$body['dirName'] = $request->dirName;
        }

        if (null !== $request->parentFullPath) {
            @$body['parentFullPath'] = $request->parentFullPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfigDir',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/dir',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateConfigDirRequest
     *
     * @returns CreateConfigDirResponse
     *
     * @param string                 $instanceId
     * @param string                 $configName
     * @param CreateConfigDirRequest $request
     *
     * @return CreateConfigDirResponse
     */
    public function createConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @param request - CreateConfigFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigFileResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param CreateConfigFileRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConfigFileResponse
     */
    public function createConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->ossPath) {
            @$body['ossPath'] = $request->ossPath;
        }

        if (null !== $request->parentFullPath) {
            @$body['parentFullPath'] = $request->parentFullPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfigFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/file',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateConfigFileRequest
     *
     * @returns CreateConfigFileResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param CreateConfigFileRequest $request
     *
     * @return CreateConfigFileResponse
     */
    public function createConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Creates data sources.
     *
     * @param request - CreateDataSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSourceResponse
     *
     * @param string                  $instanceId
     * @param CreateDataSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->autoBuildIndex) {
            @$body['autoBuildIndex'] = $request->autoBuildIndex;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->saroConfig) {
            @$body['saroConfig'] = $request->saroConfig;
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
            'action' => 'CreateDataSource',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates data sources.
     *
     * @param request - CreateDataSourceRequest
     *
     * @returns CreateDataSourceResponse
     *
     * @param string                  $instanceId
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSourceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - CreateFolderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFolderResponse
     *
     * @param string              $instanceId
     * @param string              $database
     * @param CreateFolderRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($instanceId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parent) {
            @$body['parent'] = $request->parent;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFolder',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/folders',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateFolderRequest
     *
     * @returns CreateFolderResponse
     *
     * @param string              $instanceId
     * @param string              $database
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolder($instanceId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFolderWithOptions($instanceId, $database, $request, $headers, $runtime);
    }

    /**
     * Creates an index.
     *
     * @remarks
     * ### Method
     * ```java
     * POST
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/indexes
     * ```
     *
     * @param request - CreateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexResponse
     *
     * @param string             $instanceId
     * @param CreateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->buildParallelNum) {
            @$body['buildParallelNum'] = $request->buildParallelNum;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->dataSource) {
            @$body['dataSource'] = $request->dataSource;
        }

        if (null !== $request->dataSourceInfo) {
            @$body['dataSourceInfo'] = $request->dataSourceInfo;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->extend) {
            @$body['extend'] = $request->extend;
        }

        if (null !== $request->mergeParallelNum) {
            @$body['mergeParallelNum'] = $request->mergeParallelNum;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an index.
     *
     * @remarks
     * ### Method
     * ```java
     * POST
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/indexes
     * ```
     *
     * @param request - CreateIndexRequest
     *
     * @returns CreateIndexResponse
     *
     * @param string             $instanceId
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a Havenask instance.
     *
     * @remarks
     * ### [](#)Method
     * `POST`
     * ### [](#uri)URI
     * `/api/instances?dryRun=false`
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Havenask instance.
     *
     * @remarks
     * ### [](#)Method
     * `POST`
     * ### [](#uri)URI
     * `/api/instances?dryRun=false`
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建模型信息.
     *
     * @param request - CreateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelResponse
     *
     * @param string             $instanceId
     * @param CreateModelRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModel',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模型信息.
     *
     * @param request - CreateModelRequest
     *
     * @returns CreateModelResponse
     *
     * @param string             $instanceId
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a public endpoint.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePublicUrlResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreatePublicUrlResponse
     */
    public function createPublicUrlWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreatePublicUrl',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/public-url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a public endpoint.
     *
     * @returns CreatePublicUrlResponse
     *
     * @param string $instanceId
     *
     * @return CreatePublicUrlResponse
     */
    public function createPublicUrl($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPublicUrlWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param request - CreateSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSqlInstanceResponse
     *
     * @param string                   $instanceId
     * @param string                   $database
     * @param CreateSqlInstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSqlInstanceResponse
     */
    public function createSqlInstanceWithOptions($instanceId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parent) {
            @$body['parent'] = $request->parent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSqlInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSqlInstanceRequest
     *
     * @returns CreateSqlInstanceResponse
     *
     * @param string                   $instanceId
     * @param string                   $database
     * @param CreateSqlInstanceRequest $request
     *
     * @return CreateSqlInstanceResponse
     */
    public function createSqlInstance($instanceId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlInstanceWithOptions($instanceId, $database, $request, $headers, $runtime);
    }

    /**
     * Creates an index table.
     *
     * @param request - CreateTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTableResponse
     *
     * @param string             $instanceId
     * @param CreateTableRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTableWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->dataProcessConfig) {
            @$body['dataProcessConfig'] = $request->dataProcessConfig;
        }

        if (null !== $request->dataProcessorCount) {
            @$body['dataProcessorCount'] = $request->dataProcessorCount;
        }

        if (null !== $request->dataSource) {
            @$body['dataSource'] = $request->dataSource;
        }

        if (null !== $request->fieldSchema) {
            @$body['fieldSchema'] = $request->fieldSchema;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->partitionCount) {
            @$body['partitionCount'] = $request->partitionCount;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        if (null !== $request->rawSchema) {
            @$body['rawSchema'] = $request->rawSchema;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->vectorIndex) {
            @$body['vectorIndex'] = $request->vectorIndex;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTable',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an index table.
     *
     * @param request - CreateTableRequest
     *
     * @returns CreateTableResponse
     *
     * @param string             $instanceId
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTable($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 调试模型.
     *
     * @param request - DebugModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugModelResponse
     *
     * @param string            $instanceId
     * @param string            $modelName
     * @param DebugModelRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DebugModelResponse
     */
    public function debugModelWithOptions($instanceId, $modelName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isOnline) {
            @$query['isOnline'] = $request->isOnline;
        }

        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DebugModel',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models/' . Url::percentEncode($modelName) . '/actions/debug',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DebugModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调试模型.
     *
     * @param request - DebugModelRequest
     *
     * @returns DebugModelResponse
     *
     * @param string            $instanceId
     * @param string            $modelName
     * @param DebugModelRequest $request
     *
     * @return DebugModelResponse
     */
    public function debugModel($instanceId, $modelName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->debugModelWithOptions($instanceId, $modelName, $request, $headers, $runtime);
    }

    /**
     * Deletes the details about advanced configurations.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAdvanceConfigResponse
     *
     * @param string         $instanceId
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAdvanceConfigResponse
     */
    public function deleteAdvanceConfigWithOptions($instanceId, $configName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAdvanceConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the details about advanced configurations.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *
     * @returns DeleteAdvanceConfigResponse
     *
     * @param string $instanceId
     * @param string $configName
     *
     * @return DeleteAdvanceConfigResponse
     */
    public function deleteAdvanceConfig($instanceId, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAdvanceConfigWithOptions($instanceId, $configName, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAliasResponse
     *
     * @param string         $instanceId
     * @param string         $alias
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions($instanceId, $alias, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAlias',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/aliases/' . Url::percentEncode($alias) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DeleteAliasResponse
     *
     * @param string $instanceId
     * @param string $alias
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias($instanceId, $alias)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAliasWithOptions($instanceId, $alias, $headers, $runtime);
    }

    /**
     * @param request - DeleteConfigDirRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigDirResponse
     *
     * @param string                 $instanceId
     * @param string                 $configName
     * @param DeleteConfigDirRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConfigDirResponse
     */
    public function deleteConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dirName) {
            @$query['dirName'] = $request->dirName;
        }

        if (null !== $request->parentFullPath) {
            @$query['parentFullPath'] = $request->parentFullPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigDir',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/dir',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteConfigDirRequest
     *
     * @returns DeleteConfigDirResponse
     *
     * @param string                 $instanceId
     * @param string                 $configName
     * @param DeleteConfigDirRequest $request
     *
     * @return DeleteConfigDirResponse
     */
    public function deleteConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @param request - DeleteConfigFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigFileResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param DeleteConfigFileRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConfigFileResponse
     */
    public function deleteConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->parentFullPath) {
            @$query['parentFullPath'] = $request->parentFullPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/file',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteConfigFileRequest
     *
     * @returns DeleteConfigFileResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param DeleteConfigFileRequest $request
     *
     * @return DeleteConfigFileResponse
     */
    public function deleteConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified data source.
     *
     * @remarks
     * ## Method
     * `DELETE`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceResponse
     *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDataSource',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified data source.
     *
     * @remarks
     * ## Method
     * `DELETE`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *
     * @returns DeleteDataSourceResponse
     *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFolderResponse
     *
     * @param string         $instanceId
     * @param string         $database
     * @param string         $folderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($instanceId, $database, $folderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFolder',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/folders/' . Url::percentEncode($folderId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DeleteFolderResponse
     *
     * @param string $instanceId
     * @param string $database
     * @param string $folderId
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($instanceId, $database, $folderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFolderWithOptions($instanceId, $database, $folderId, $headers, $runtime);
    }

    /**
     * Deletes an index.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
     *
     * @param request - DeleteIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $instanceId
     * @param string             $indexName
     * @param DeleteIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSource) {
            @$query['dataSource'] = $request->dataSource;
        }

        if (null !== $request->deleteDataSource) {
            @$query['deleteDataSource'] = $request->deleteDataSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an index.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
     *
     * @param request - DeleteIndexRequest
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $instanceId
     * @param string             $indexName
     * @param DeleteIndexRequest $request
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * Deletes the version of an index.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexVersionResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexVersionResponse
     */
    public function deleteIndexVersionWithOptions($instanceId, $indexName, $versionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIndexVersion',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/versions/' . Url::percentEncode($versionName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the version of an index.
     *
     * @remarks
     * ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}
     *
     * @returns DeleteIndexVersionResponse
     *
     * @param string $instanceId
     * @param string $indexName
     * @param string $versionName
     *
     * @return DeleteIndexVersionResponse
     */
    public function deleteIndexVersion($instanceId, $indexName, $versionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexVersionWithOptions($instanceId, $indexName, $versionName, $headers, $runtime);
    }

    /**
     * Deletes a specified instance.
     *
     * @remarks
     * ### Method
     * `DELETE`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified instance.
     *
     * @remarks
     * ### Method
     * `DELETE`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *
     * @returns DeleteInstanceResponse
     *
     * @param string $instanceId
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResponse
     *
     * @param string         $instanceId
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($instanceId, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModel',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models/' . Url::percentEncode($modelName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模型.
     *
     * @returns DeleteModelResponse
     *
     * @param string $instanceId
     * @param string $modelName
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($instanceId, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($instanceId, $modelName, $headers, $runtime);
    }

    /**
     * 删除公网域名.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePublicUrlResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePublicUrlResponse
     */
    public function deletePublicUrlWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePublicUrl',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/public-url',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除公网域名.
     *
     * @returns DeletePublicUrlResponse
     *
     * @param string $instanceId
     *
     * @return DeletePublicUrlResponse
     */
    public function deletePublicUrl($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePublicUrlWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSqlInstanceResponse
     *
     * @param string         $instanceId
     * @param string         $database
     * @param string         $sqlInstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSqlInstanceResponse
     */
    public function deleteSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSqlInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DeleteSqlInstanceResponse
     *
     * @param string $instanceId
     * @param string $database
     * @param string $sqlInstanceId
     *
     * @return DeleteSqlInstanceResponse
     */
    public function deleteSqlInstance($instanceId, $database, $sqlInstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $headers, $runtime);
    }

    /**
     * Deletes an index table.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTableResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTableResponse
     */
    public function deleteTableWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTable',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an index table.
     *
     * @returns DeleteTableResponse
     *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return DeleteTableResponse
     */
    public function deleteTable($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * Queries available regions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * @param request - ExecuteSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteSqlInstanceResponse
     *
     * @param string                    $instanceId
     * @param string                    $database
     * @param string                    $sqlInstanceId
     * @param ExecuteSqlInstanceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ExecuteSqlInstanceResponse
     */
    public function executeSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->combineParam) {
            @$body['combineParam'] = $request->combineParam;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->dynamicParam) {
            @$body['dynamicParam'] = $request->dynamicParam;
        }

        if (null !== $request->kvpair) {
            @$body['kvpair'] = $request->kvpair;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->staticParam) {
            @$body['staticParam'] = $request->staticParam;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteSqlInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '/actions/execution',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExecuteSqlInstanceRequest
     *
     * @returns ExecuteSqlInstanceResponse
     *
     * @param string                    $instanceId
     * @param string                    $database
     * @param string                    $sqlInstanceId
     * @param ExecuteSqlInstanceRequest $request
     *
     * @return ExecuteSqlInstanceResponse
     */
    public function executeSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * Performs a forced switchover.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * PUT
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForceSwitchResponse
     *
     * @param string         $instanceId
     * @param string         $fsmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ForceSwitchResponse
     */
    public function forceSwitchWithOptions($instanceId, $fsmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ForceSwitch',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/force-switch/' . Url::percentEncode($fsmId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ForceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a forced switchover.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * PUT
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     * ```
     *
     * @returns ForceSwitchResponse
     *
     * @param string $instanceId
     * @param string $fsmId
     *
     * @return ForceSwitchResponse
     */
    public function forceSwitch($instanceId, $fsmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->forceSwitchWithOptions($instanceId, $fsmId, $headers, $runtime);
    }

    /**
     * Queries the information about an advanced configuration.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *
     * @param request - GetAdvanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAdvanceConfigResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param GetAdvanceConfigRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAdvanceConfigResponse
     */
    public function getAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAdvanceConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an advanced configuration.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *
     * @param request - GetAdvanceConfigRequest
     *
     * @returns GetAdvanceConfigResponse
     *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param GetAdvanceConfigRequest $request
     *
     * @return GetAdvanceConfigResponse
     */
    public function getAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about an advanced configuration file.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *
     * @param request - GetAdvanceConfigFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAdvanceConfigFileResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param GetAdvanceConfigFileRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAdvanceConfigFileResponse
     */
    public function getAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAdvanceConfigFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/file',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAdvanceConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an advanced configuration file.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *
     * @param request - GetAdvanceConfigFileRequest
     *
     * @returns GetAdvanceConfigFileResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param GetAdvanceConfigFileRequest $request
     *
     * @return GetAdvanceConfigFileResponse
     */
    public function getAdvanceConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a cluster.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters/' . Url::percentEncode($clusterName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cluster.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`
     *
     * @returns GetClusterResponse
     *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return GetClusterResponse
     */
    public function getCluster($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * Queries the runtime information about a specified cluster.
     *
     * @remarks
     * ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-run-time-info
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterRunTimeInfoResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterRunTimeInfoResponse
     */
    public function getClusterRunTimeInfoWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetClusterRunTimeInfo',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/cluster-run-time-info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterRunTimeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the runtime information about a specified cluster.
     *
     * @remarks
     * ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-run-time-info
     *
     * @returns GetClusterRunTimeInfoResponse
     *
     * @param string $instanceId
     *
     * @return GetClusterRunTimeInfoResponse
     */
    public function getClusterRunTimeInfo($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterRunTimeInfoWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Obtains a data source.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataSourceResponse
     *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataSourceResponse
     */
    public function getDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDataSource',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a data source.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *
     * @returns GetDataSourceResponse
     *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return GetDataSourceResponse
     */
    public function getDataSource($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * 获取数据源部署信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataSourceDeployResponse
     *
     * @param string         $instanceId
     * @param string         $deployName
     * @param string         $dataSourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataSourceDeployResponse
     */
    public function getDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDataSourceDeploy',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/deploys/' . Url::percentEncode($deployName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDataSourceDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据源部署信息.
     *
     * @returns GetDataSourceDeployResponse
     *
     * @param string $instanceId
     * @param string $deployName
     * @param string $dataSourceName
     *
     * @return GetDataSourceDeployResponse
     */
    public function getDataSourceDeploy($instanceId, $deployName, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabaseSchemaResponse
     *
     * @param string         $instanceId
     * @param string         $database
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatabaseSchemaResponse
     */
    public function getDatabaseSchemaWithOptions($instanceId, $database, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDatabaseSchema',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($tableName) . '/schema',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabaseSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns GetDatabaseSchemaResponse
     *
     * @param string $instanceId
     * @param string $database
     * @param string $tableName
     *
     * @return GetDatabaseSchemaResponse
     */
    public function getDatabaseSchema($instanceId, $database, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseSchemaWithOptions($instanceId, $database, $tableName, $headers, $runtime);
    }

    /**
     * Displays the overview of the deployment.
     *
     * @remarks
     * ## Method
     * GET
     * ## URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/deploy-graph
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeployGraphResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeployGraphResponse
     */
    public function getDeployGraphWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeployGraph',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/deploy-graph',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeployGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the overview of the deployment.
     *
     * @remarks
     * ## Method
     * GET
     * ## URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/deploy-graph
     * ```
     *
     * @returns GetDeployGraphResponse
     *
     * @param string $instanceId
     *
     * @return GetDeployGraphResponse
     */
    public function getDeployGraph($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeployGraphWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries the details of an index table version.
     *
     * @remarks
     * ## [](#)Method
     *     GET
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file
     *
     * @param request - GetFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param GetFileRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/versions/' . Url::percentEncode($versionName) . '/file',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an index table version.
     *
     * @remarks
     * ## [](#)Method
     *     GET
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file
     *
     * @param request - GetFileRequest
     *
     * @returns GetFileResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFile($instanceId, $indexName, $versionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about an index version.
     *
     * @remarks
     * ## [](#)Method
     *     GET
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexResponse
     */
    public function getIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an index version.
     *
     * @remarks
     * ## [](#)Method
     *     GET
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}
     *
     * @returns GetIndexResponse
     *
     * @param string $instanceId
     * @param string $indexName
     *
     * @return GetIndexResponse
     */
    public function getIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * Queries the online effective policy of an index.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexOnlineStrategyResponse
     *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string         $deployName
     * @param string         $indexName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexOnlineStrategyResponse
     */
    public function getIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIndexOnlineStrategy',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/deploys/' . Url::percentEncode($deployName) . '/indexes/' . Url::percentEncode($indexName) . '/online-strategy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexOnlineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the online effective policy of an index.
     *
     * @returns GetIndexOnlineStrategyResponse
     *
     * @param string $instanceId
     * @param string $dataSourceName
     * @param string $deployName
     * @param string $indexName
     *
     * @return GetIndexOnlineStrategyResponse
     */
    public function getIndexOnlineStrategy($instanceId, $dataSourceName, $deployName, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $headers, $runtime);
    }

    /**
     * Queries the information about index versions that the current index version can be rolled back to.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexVersionResponse
     *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexVersionResponse
     */
    public function getIndexVersionWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIndexVersion',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters/' . Url::percentEncode($clusterName) . '/index-version',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about index versions that the current index version can be rolled back to.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *
     * @returns GetIndexVersionResponse
     *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return GetIndexVersionResponse
     */
    public function getIndexVersion($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexVersionWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * Queries the details of an instance based on the instance ID.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * GET
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an instance based on the instance ID.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * GET
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}
     * ```
     *
     * @returns GetInstanceResponse
     *
     * @param string $instanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * 通过实例ID和模型名称查询特定模型的详细配置信息。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定实例下的特定模型的详细信息，包括模型类型、URL、状态等。
     * - 确保提供的`instanceId`和`modelName`是有效的，否则可能返回错误或找不到资源。
     * - 返回的数据结构中包含了模型的内容（如请求头、参数等）以及创建和更新时间，有助于了解模型的具体配置及其最新状态。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelResponse
     *
     * @param string         $instanceId
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelResponse
     */
    public function getModelWithOptions($instanceId, $modelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModel',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models/' . Url::percentEncode($modelName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过实例ID和模型名称查询特定模型的详细配置信息。
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定实例下的特定模型的详细信息，包括模型类型、URL、状态等。
     * - 确保提供的`instanceId`和`modelName`是有效的，否则可能返回错误或找不到资源。
     * - 返回的数据结构中包含了模型的内容（如请求头、参数等）以及创建和更新时间，有助于了解模型的具体配置及其最新状态。
     *
     * @returns GetModelResponse
     *
     * @param string $instanceId
     * @param string $modelName
     *
     * @return GetModelResponse
     */
    public function getModel($instanceId, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelWithOptions($instanceId, $modelName, $headers, $runtime);
    }

    /**
     * Gets the configuration information of a node.
     *
     * @param request - GetNodeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeConfigResponse
     *
     * @param string               $instanceId
     * @param GetNodeConfigRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetNodeConfigResponse
     */
    public function getNodeConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['clusterName'] = $request->clusterName;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/node-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the configuration information of a node.
     *
     * @param request - GetNodeConfigRequest
     *
     * @returns GetNodeConfigResponse
     *
     * @param string               $instanceId
     * @param GetNodeConfigRequest $request
     *
     * @return GetNodeConfigResponse
     */
    public function getNodeConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - GetSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlInstanceResponse
     *
     * @param string                $instanceId
     * @param string                $database
     * @param string                $sqlInstanceId
     * @param GetSqlInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetSqlInstanceResponse
     */
    public function getSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSqlInstanceRequest
     *
     * @returns GetSqlInstanceResponse
     *
     * @param string                $instanceId
     * @param string                $database
     * @param string                $sqlInstanceId
     * @param GetSqlInstanceRequest $request
     *
     * @return GetSqlInstanceResponse
     */
    public function getSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the information about an index table.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableResponse
     */
    public function getTableWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTable',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an index table.
     *
     * @returns GetTableResponse
     *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return GetTableResponse
     */
    public function getTable($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * Queries the status of an index version based on the ID of the full index version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableGenerationResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string         $generationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableGenerationResponse
     */
    public function getTableGenerationWithOptions($instanceId, $tableName, $generationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTableGeneration',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '/index_versions/' . Url::percentEncode($generationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an index version based on the ID of the full index version.
     *
     * @returns GetTableGenerationResponse
     *
     * @param string $instanceId
     * @param string $tableName
     * @param string $generationId
     *
     * @return GetTableGenerationResponse
     */
    public function getTableGeneration($instanceId, $tableName, $generationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableGenerationWithOptions($instanceId, $tableName, $generationId, $headers, $runtime);
    }

    /**
     * Queries the files in an advanced configuration directory.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`
     *
     * @param request - ListAdvanceConfigDirRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAdvanceConfigDirResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param ListAdvanceConfigDirRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAdvanceConfigDirResponse
     */
    public function listAdvanceConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dirName) {
            @$query['dirName'] = $request->dirName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAdvanceConfigDir',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/dir',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAdvanceConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the files in an advanced configuration directory.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`
     *
     * @param request - ListAdvanceConfigDirRequest
     *
     * @returns ListAdvanceConfigDirResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param ListAdvanceConfigDirRequest $request
     *
     * @return ListAdvanceConfigDirResponse
     */
    public function listAdvanceConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAdvanceConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Obtains a list of advanced configurations.
     *
     * @remarks
     * ## Sample requests
     * `GET /openapi/ha3/instances/ose-test1/advanced-configs`
     *
     * @param request - ListAdvanceConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAdvanceConfigsResponse
     *
     * @param string                    $instanceId
     * @param ListAdvanceConfigsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAdvanceConfigsResponse
     */
    public function listAdvanceConfigsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceName) {
            @$query['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->indexName) {
            @$query['indexName'] = $request->indexName;
        }

        if (null !== $request->newMode) {
            @$query['newMode'] = $request->newMode;
        }

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
            'action' => 'ListAdvanceConfigs',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAdvanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of advanced configurations.
     *
     * @remarks
     * ## Sample requests
     * `GET /openapi/ha3/instances/ose-test1/advanced-configs`
     *
     * @param request - ListAdvanceConfigsRequest
     *
     * @returns ListAdvanceConfigsResponse
     *
     * @param string                    $instanceId
     * @param ListAdvanceConfigsRequest $request
     *
     * @return ListAdvanceConfigsResponse
     */
    public function listAdvanceConfigs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAdvanceConfigsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliasesResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAliases',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/aliases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListAliasesResponse
     *
     * @param string $instanceId
     *
     * @return ListAliasesResponse
     */
    public function listAliases($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliasesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries cluster names.
     *
     * @remarks
     * ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-names
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterNamesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterNamesResponse
     */
    public function listClusterNamesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusterNames',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/cluster-names',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries cluster names.
     *
     * @remarks
     * ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-names
     *
     * @returns ListClusterNamesResponse
     *
     * @return ListClusterNamesResponse
     */
    public function listClusterNames()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNamesWithOptions($headers, $runtime);
    }

    /**
     * Queries cluster tasks.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/cluster-tasks
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterTasksResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterTasksResponse
     */
    public function listClusterTasksWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusterTasks',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/cluster-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries cluster tasks.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/cluster-tasks
     * ```
     *
     * @returns ListClusterTasksResponse
     *
     * @param string $instanceId
     *
     * @return ListClusterTasksResponse
     */
    public function listClusterTasks($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterTasksWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries clusters.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries clusters.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters
     * ```
     *
     * @returns ListClustersResponse
     *
     * @param string $instanceId
     *
     * @return ListClustersResponse
     */
    public function listClusters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClustersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries the schema information about a data source.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceSchemasResponse
     *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSourceSchemasResponse
     */
    public function listDataSourceSchemasWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDataSourceSchemas',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourceSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the schema information about a data source.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`
     *
     * @returns ListDataSourceSchemasResponse
     *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return ListDataSourceSchemasResponse
     */
    public function listDataSourceSchemas($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceSchemasWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * Displays data source tasks.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * GET
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/data-source-tasks
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceTasksResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSourceTasksResponse
     */
    public function listDataSourceTasksWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDataSourceTasks',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-source-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourceTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays data source tasks.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * GET
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/data-source-tasks
     * ```
     *
     * @returns ListDataSourceTasksResponse
     *
     * @param string $instanceId
     *
     * @return ListDataSourceTasksResponse
     */
    public function listDataSourceTasks($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTasksWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Obtains the list of data sources.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources`
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourcesResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDataSources',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the list of data sources.
     *
     * @remarks
     * ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources`
     *
     * @returns ListDataSourcesResponse
     *
     * @param string $instanceId
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourcesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabasesResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDatabases',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListDatabasesResponse
     *
     * @param string $instanceId
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries the historical index versions of a data source.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`
     *
     * @param request - ListDateSourceGenerationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDateSourceGenerationsResponse
     *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param ListDateSourceGenerationsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDateSourceGenerationsResponse
     */
    public function listDateSourceGenerationsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->validStatus) {
            @$query['validStatus'] = $request->validStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDateSourceGenerations',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/generations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDateSourceGenerationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical index versions of a data source.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`
     *
     * @param request - ListDateSourceGenerationsRequest
     *
     * @returns ListDateSourceGenerationsResponse
     *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param ListDateSourceGenerationsRequest $request
     *
     * @return ListDateSourceGenerationsResponse
     */
    public function listDateSourceGenerations($instanceId, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDateSourceGenerationsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexRecoverRecordsResponse
     *
     * @param string         $indexName
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListIndexRecoverRecordsResponse
     */
    public function listIndexRecoverRecordsWithOptions($indexName, $instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListIndexRecoverRecords',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/actions/list-recover-records',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexRecoverRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListIndexRecoverRecordsResponse
     *
     * @param string $indexName
     * @param string $instanceId
     *
     * @return ListIndexRecoverRecordsResponse
     */
    public function listIndexRecoverRecords($indexName, $instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexRecoverRecordsWithOptions($indexName, $instanceId, $headers, $runtime);
    }

    /**
     * Obtains the index list.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes
     *
     * @param request - ListIndexesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexesResponse
     *
     * @param string             $instanceId
     * @param ListIndexesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndexesResponse
     */
    public function listIndexesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['catalog'] = $request->catalog;
        }

        if (null !== $request->database) {
            @$query['database'] = $request->database;
        }

        if (null !== $request->newMode) {
            @$query['newMode'] = $request->newMode;
        }

        if (null !== $request->table) {
            @$query['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndexes',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the index list.
     *
     * @remarks
     * ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes
     *
     * @param request - ListIndexesRequest
     *
     * @returns ListIndexesResponse
     *
     * @param string             $instanceId
     * @param ListIndexesRequest $request
     *
     * @return ListIndexesResponse
     */
    public function listIndexes($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the specifications of an instance.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`
     *
     * @param request - ListInstanceSpecsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceSpecsResponse
     *
     * @param string                   $instanceId
     * @param ListInstanceSpecsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceSpecsResponse
     */
    public function listInstanceSpecsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceSpecs',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/specs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of an instance.
     *
     * @remarks
     * ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`
     *
     * @param request - ListInstanceSpecsRequest
     *
     * @returns ListInstanceSpecsResponse
     *
     * @param string                   $instanceId
     * @param ListInstanceSpecsRequest $request
     *
     * @return ListInstanceSpecsResponse
     */
    public function listInstanceSpecs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSpecsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of instances.
     *
     * @remarks
     * ### [](#)Method
     * `GET`
     * ### [](#uri)URI
     * `/openapi/ha3/instances`
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->catalog) {
            @$query['catalog'] = $request->catalog;
        }

        if (null !== $request->dataSourceType) {
            @$query['dataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->database) {
            @$query['database'] = $request->database;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->edition) {
            @$query['edition'] = $request->edition;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
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

        if (null !== $request->table) {
            @$query['table'] = $request->table;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances.
     *
     * @remarks
     * ### [](#)Method
     * `GET`
     * ### [](#uri)URI
     * `/openapi/ha3/instances`
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
     * @param request - ListLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogsResponse
     *
     * @param string          $instanceId
     * @param ListLogsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListLogsResponse
     */
    public function listLogsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
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

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogs',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListLogsRequest
     *
     * @returns ListLogsResponse
     *
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
     * 通过实例ID查询指定条件下的模型列表。
     *
     * @remarks
     * ## 请求说明
     * 本API用于从指定实例中获取模型列表，支持通过模型名称、类型以及分页参数进行筛选。请求时需提供实例ID作为路径参数，其他筛选条件为可选的查询参数。
     *
     * @param request - ListModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelsResponse
     *
     * @param string            $instanceId
     * @param ListModelsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

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
            'action' => 'ListModels',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过实例ID查询指定条件下的模型列表。
     *
     * @remarks
     * ## 请求说明
     * 本API用于从指定实例中获取模型列表，支持通过模型名称、类型以及分页参数进行筛选。请求时需提供实例ID作为路径参数，其他筛选条件为可选的查询参数。
     *
     * @param request - ListModelsRequest
     *
     * @returns ListModelsResponse
     *
     * @param string            $instanceId
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of an online configuration.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     * ```
     *
     * @param request - ListOnlineConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOnlineConfigsResponse
     *
     * @param string                   $instanceId
     * @param string                   $nodeName
     * @param ListOnlineConfigsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListOnlineConfigsResponse
     */
    public function listOnlineConfigsWithOptions($instanceId, $nodeName, $request, $headers, $runtime)
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
            'action' => 'ListOnlineConfigs',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/node/' . Url::percentEncode($nodeName) . '/online-configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOnlineConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an online configuration.
     *
     * @remarks
     * ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     * ```
     *
     * @param request - ListOnlineConfigsRequest
     *
     * @returns ListOnlineConfigsResponse
     *
     * @param string                   $instanceId
     * @param string                   $nodeName
     * @param ListOnlineConfigsRequest $request
     *
     * @return ListOnlineConfigsResponse
     */
    public function listOnlineConfigs($instanceId, $nodeName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineConfigsWithOptions($instanceId, $nodeName, $request, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPausePolicysResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPausePolicysResponse
     */
    public function listPausePolicysWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPausePolicys',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/pause-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPausePolicysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListPausePolicysResponse
     *
     * @param string $instanceId
     *
     * @return ListPausePolicysResponse
     */
    public function listPausePolicys($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPausePolicysWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * 召回引擎版使用POST请求获取搜索测试结果.
     *
     * @param request - ListPostQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPostQueryResultResponse
     *
     * @param string                     $instanceId
     * @param ListPostQueryResultRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPostQueryResultResponse
     */
    public function listPostQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPostQueryResult',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPostQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 召回引擎版使用POST请求获取搜索测试结果.
     *
     * @param request - ListPostQueryResultRequest
     *
     * @returns ListPostQueryResultResponse
     *
     * @param string                     $instanceId
     * @param ListPostQueryResultRequest $request
     *
     * @return ListPostQueryResultResponse
     */
    public function listPostQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPostQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the query result.
     *
     * @remarks
     * ### [](#)Method
     * `GET`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`
     *
     * @param request - ListQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueryResultResponse
     *
     * @param string                 $instanceId
     * @param ListQueryResultRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListQueryResultResponse
     */
    public function listQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->sql) {
            @$query['sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueryResult',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the query result.
     *
     * @remarks
     * ### [](#)Method
     * `GET`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`
     *
     * @param request - ListQueryResultRequest
     *
     * @returns ListQueryResultResponse
     *
     * @param string                 $instanceId
     * @param ListQueryResultRequest $request
     *
     * @return ListQueryResultResponse
     */
    public function listQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 召回引擎版获取rest查询搜索测试结果.
     *
     * @param request - ListRestQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRestQueryResultResponse
     *
     * @param string                     $instanceId
     * @param ListRestQueryResultRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListRestQueryResultResponse
     */
    public function listRestQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->indexName) {
            @$body['indexName'] = $request->indexName;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRestQueryResult',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/rest-query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRestQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 召回引擎版获取rest查询搜索测试结果.
     *
     * @param request - ListRestQueryResultRequest
     *
     * @returns ListRestQueryResultResponse
     *
     * @param string                     $instanceId
     * @param ListRestQueryResultRequest $request
     *
     * @return ListRestQueryResultResponse
     */
    public function listRestQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRestQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 通过数据源配置获取schema信息.
     *
     * @param request - ListSchemasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSchemasResponse
     *
     * @param string             $instanceId
     * @param ListSchemasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSchemasResponse
     */
    public function listSchemasWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['accessKey'] = $request->accessKey;
        }

        if (null !== $request->accessSecret) {
            @$query['accessSecret'] = $request->accessSecret;
        }

        if (null !== $request->endpoint) {
            @$query['endpoint'] = $request->endpoint;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->partition) {
            @$query['partition'] = $request->partition;
        }

        if (null !== $request->project) {
            @$query['project'] = $request->project;
        }

        if (null !== $request->table) {
            @$query['table'] = $request->table;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSchemas',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过数据源配置获取schema信息.
     *
     * @param request - ListSchemasRequest
     *
     * @returns ListSchemasResponse
     *
     * @param string             $instanceId
     * @param ListSchemasRequest $request
     *
     * @return ListSchemasResponse
     */
    public function listSchemas($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSchemasWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of index versions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTableGenerationsResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTableGenerationsResponse
     */
    public function listTableGenerationsWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListTableGenerations',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '/index_versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTableGenerationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of index versions.
     *
     * @returns ListTableGenerationsResponse
     *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return ListTableGenerationsResponse
     */
    public function listTableGenerations($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableGenerationsWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * Queries a list of index tables.
     *
     * @param request - ListTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param string            $instanceId
     * @param ListTablesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newMode) {
            @$query['newMode'] = $request->newMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of index tables.
     *
     * @param request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param string            $instanceId
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 查标签接口.
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
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/resource-tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查标签接口.
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
     * 获取集群任务列表（数据源+集群）.
     *
     * @param request - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param string           $instanceId
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群任务列表（数据源+集群）.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param string           $instanceId
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 向量检索版获取向量查询搜索测试结果.
     *
     * @param request - ListVectorQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVectorQueryResultResponse
     *
     * @param string                       $instanceId
     * @param ListVectorQueryResultRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListVectorQueryResultResponse
     */
    public function listVectorQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        if (null !== $request->queryType) {
            @$query['queryType'] = $request->queryType;
        }

        if (null !== $request->vectorQueryType) {
            @$query['vectorQueryType'] = $request->vectorQueryType;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVectorQueryResult',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/vector-query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVectorQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向量检索版获取向量查询搜索测试结果.
     *
     * @param request - ListVectorQueryResultRequest
     *
     * @returns ListVectorQueryResultResponse
     *
     * @param string                       $instanceId
     * @param ListVectorQueryResultRequest $request
     *
     * @return ListVectorQueryResultResponse
     */
    public function listVectorQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVectorQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - ModifyAdvanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAdvanceConfigResponse
     *
     * @param string                     $instanceId
     * @param string                     $configName
     * @param ModifyAdvanceConfigRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyAdvanceConfigResponse
     */
    public function modifyAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->desc) {
            @$body['desc'] = $request->desc;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->updateTime) {
            @$body['updateTime'] = $request->updateTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAdvanceConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAdvanceConfigRequest
     *
     * @returns ModifyAdvanceConfigResponse
     *
     * @param string                     $instanceId
     * @param string                     $configName
     * @param ModifyAdvanceConfigRequest $request
     *
     * @return ModifyAdvanceConfigResponse
     */
    public function modifyAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Modifies the advanced configurations.
     *
     * @remarks
     * ## Method
     *     put
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *
     * @param request - ModifyAdvanceConfigFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAdvanceConfigFileResponse
     *
     * @param string                         $instanceId
     * @param string                         $configName
     * @param ModifyAdvanceConfigFileRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAdvanceConfigFileResponse
     */
    public function modifyAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAdvanceConfigFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/file',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAdvanceConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the advanced configurations.
     *
     * @remarks
     * ## Method
     *     put
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *
     * @param request - ModifyAdvanceConfigFileRequest
     *
     * @returns ModifyAdvanceConfigFileResponse
     *
     * @param string                         $instanceId
     * @param string                         $configName
     * @param ModifyAdvanceConfigFileRequest $request
     *
     * @return ModifyAdvanceConfigFileResponse
     */
    public function modifyAdvanceConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @param request - ModifyAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAliasResponse
     *
     * @param string             $instanceId
     * @param string             $alias
     * @param ModifyAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyAliasResponse
     */
    public function modifyAliasWithOptions($instanceId, $alias, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->index) {
            @$body['index'] = $request->index;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAlias',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/aliases/' . Url::percentEncode($alias) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAliasRequest
     *
     * @returns ModifyAliasResponse
     *
     * @param string             $instanceId
     * @param string             $alias
     * @param ModifyAliasRequest $request
     *
     * @return ModifyAliasResponse
     */
    public function modifyAlias($instanceId, $alias, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAliasWithOptions($instanceId, $alias, $request, $headers, $runtime);
    }

    /**
     * Modifies the description of a specified cluster.
     *
     * @remarks
     * ### [](#)Method
     * `PUT`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`
     *
     * @param request - ModifyClusterDescRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterDescResponse
     *
     * @param string                   $instanceId
     * @param string                   $clusterName
     * @param ModifyClusterDescRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterDescResponse
     */
    public function modifyClusterDescWithOptions($instanceId, $clusterName, $request, $headers, $runtime)
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
            'action' => 'ModifyClusterDesc',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters/' . Url::percentEncode($clusterName) . '/desc',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyClusterDescResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a specified cluster.
     *
     * @remarks
     * ### [](#)Method
     * `PUT`
     * ### [](#uri)URI
     * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`
     *
     * @param request - ModifyClusterDescRequest
     *
     * @returns ModifyClusterDescResponse
     *
     * @param string                   $instanceId
     * @param string                   $clusterName
     * @param ModifyClusterDescRequest $request
     *
     * @return ModifyClusterDescResponse
     */
    public function modifyClusterDesc($instanceId, $clusterName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterDescWithOptions($instanceId, $clusterName, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration information of a cluster.
     *
     * @remarks
     * ## Request syntax
     *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config
     *
     * @param request - ModifyClusterOfflineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterOfflineConfigResponse
     *
     * @param string                            $instanceId
     * @param ModifyClusterOfflineConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterOfflineConfigResponse
     */
    public function modifyClusterOfflineConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->buildMode) {
            @$body['buildMode'] = $request->buildMode;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->dataSourceName) {
            @$body['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceType) {
            @$body['dataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->dataTimeSec) {
            @$body['dataTimeSec'] = $request->dataTimeSec;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->generation) {
            @$body['generation'] = $request->generation;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        if (null !== $request->pushMode) {
            @$body['pushMode'] = $request->pushMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterOfflineConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/cluster-offline-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyClusterOfflineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration information of a cluster.
     *
     * @remarks
     * ## Request syntax
     *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config
     *
     * @param request - ModifyClusterOfflineConfigRequest
     *
     * @returns ModifyClusterOfflineConfigResponse
     *
     * @param string                            $instanceId
     * @param ModifyClusterOfflineConfigRequest $request
     *
     * @return ModifyClusterOfflineConfigResponse
     */
    public function modifyClusterOfflineConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterOfflineConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the online configuration of a cluster.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/cluster-online-config`
     *
     * @param request - ModifyClusterOnlineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterOnlineConfigResponse
     *
     * @param string                           $instanceId
     * @param ModifyClusterOnlineConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyClusterOnlineConfigResponse
     */
    public function modifyClusterOnlineConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusters) {
            @$body['clusters'] = $request->clusters;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterOnlineConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/cluster-online-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyClusterOnlineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the online configuration of a cluster.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/cluster-online-config`
     *
     * @param request - ModifyClusterOnlineConfigRequest
     *
     * @returns ModifyClusterOnlineConfigResponse
     *
     * @param string                           $instanceId
     * @param ModifyClusterOnlineConfigRequest $request
     *
     * @return ModifyClusterOnlineConfigResponse
     */
    public function modifyClusterOnlineConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterOnlineConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 修改数据源部署信息.
     *
     * @param request - ModifyDataSourceDeployRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataSourceDeployResponse
     *
     * @param string                        $instanceId
     * @param string                        $deployName
     * @param string                        $dataSourceName
     * @param ModifyDataSourceDeployRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDataSourceDeployResponse
     */
    public function modifyDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->generationId) {
            @$query['generationId'] = $request->generationId;
        }

        $body = [];
        if (null !== $request->autoBuildIndex) {
            @$body['autoBuildIndex'] = $request->autoBuildIndex;
        }

        if (null !== $request->extend) {
            @$body['extend'] = $request->extend;
        }

        if (null !== $request->processor) {
            @$body['processor'] = $request->processor;
        }

        if (null !== $request->storage) {
            @$body['storage'] = $request->storage;
        }

        if (null !== $request->swift) {
            @$body['swift'] = $request->swift;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDataSourceDeploy',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/deploys/' . Url::percentEncode($deployName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDataSourceDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改数据源部署信息.
     *
     * @param request - ModifyDataSourceDeployRequest
     *
     * @returns ModifyDataSourceDeployResponse
     *
     * @param string                        $instanceId
     * @param string                        $deployName
     * @param string                        $dataSourceName
     * @param ModifyDataSourceDeployRequest $request
     *
     * @return ModifyDataSourceDeployResponse
     */
    public function modifyDataSourceDeploy($instanceId, $deployName, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * Modifies a file.
     *
     * @remarks
     * ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *
     * @param request - ModifyFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFileResponse
     *
     * @param string            $instanceId
     * @param string            $indexName
     * @param string            $versionName
     * @param ModifyFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyFileResponse
     */
    public function modifyFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFile',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/versions/' . Url::percentEncode($versionName) . '/file',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a file.
     *
     * @remarks
     * ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *
     * @param request - ModifyFileRequest
     *
     * @returns ModifyFileResponse
     *
     * @param string            $instanceId
     * @param string            $indexName
     * @param string            $versionName
     * @param ModifyFileRequest $request
     *
     * @return ModifyFileResponse
     */
    public function modifyFile($instanceId, $indexName, $versionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime);
    }

    /**
     * @param request - ModifyIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIndexResponse
     *
     * @param string             $instanceId
     * @param string             $indexName
     * @param ModifyIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyIndexResponse
     */
    public function modifyIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->buildParallelNum) {
            @$body['buildParallelNum'] = $request->buildParallelNum;
        }

        if (null !== $request->cluster) {
            @$body['cluster'] = $request->cluster;
        }

        if (null !== $request->clusterConfigName) {
            @$body['clusterConfigName'] = $request->clusterConfigName;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->dataSource) {
            @$body['dataSource'] = $request->dataSource;
        }

        if (null !== $request->dataSourceInfo) {
            @$body['dataSourceInfo'] = $request->dataSourceInfo;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domain) {
            @$body['domain'] = $request->domain;
        }

        if (null !== $request->extend) {
            @$body['extend'] = $request->extend;
        }

        if (null !== $request->mergeParallelNum) {
            @$body['mergeParallelNum'] = $request->mergeParallelNum;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        if (null !== $request->pushMode) {
            @$body['pushMode'] = $request->pushMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyIndexRequest
     *
     * @returns ModifyIndexResponse
     *
     * @param string             $instanceId
     * @param string             $indexName
     * @param ModifyIndexRequest $request
     *
     * @return ModifyIndexResponse
     */
    public function modifyIndex($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * Modifies the online policy of an index.
     *
     * @param request - ModifyIndexOnlineStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIndexOnlineStrategyResponse
     *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param string                           $deployName
     * @param string                           $indexName
     * @param ModifyIndexOnlineStrategyRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyIndexOnlineStrategyResponse
     */
    public function modifyIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeRate) {
            @$body['changeRate'] = $request->changeRate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyIndexOnlineStrategy',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/deploys/' . Url::percentEncode($deployName) . '/indexes/' . Url::percentEncode($indexName) . '/online-strategy',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyIndexOnlineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the online policy of an index.
     *
     * @param request - ModifyIndexOnlineStrategyRequest
     *
     * @returns ModifyIndexOnlineStrategyResponse
     *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param string                           $deployName
     * @param string                           $indexName
     * @param ModifyIndexOnlineStrategyRequest $request
     *
     * @return ModifyIndexOnlineStrategyResponse
     */
    public function modifyIndexOnlineStrategy($instanceId, $dataSourceName, $deployName, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $request, $headers, $runtime);
    }

    /**
     * Modifies the information about index partitions.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/index-partition`
     *
     * @param request - ModifyIndexPartitionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIndexPartitionResponse
     *
     * @param string                      $instanceId
     * @param ModifyIndexPartitionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyIndexPartitionResponse
     */
    public function modifyIndexPartitionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceName) {
            @$body['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->domainName) {
            @$body['domainName'] = $request->domainName;
        }

        if (null !== $request->generation) {
            @$body['generation'] = $request->generation;
        }

        if (null !== $request->indexInfos) {
            @$body['indexInfos'] = $request->indexInfos;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyIndexPartition',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/index-partition',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyIndexPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about index partitions.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/index-partition`
     *
     * @param request - ModifyIndexPartitionRequest
     *
     * @returns ModifyIndexPartitionResponse
     *
     * @param string                      $instanceId
     * @param ModifyIndexPartitionRequest $request
     *
     * @return ModifyIndexPartitionResponse
     */
    public function modifyIndexPartition($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexPartitionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the index version of a cluster (an index version rollback).
     *
     * @remarks
     * ## [](#)Method
     *     PUT
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *
     * @param request - ModifyIndexVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIndexVersionResponse
     *
     * @param string                    $instanceId
     * @param string                    $clusterName
     * @param ModifyIndexVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyIndexVersionResponse
     */
    public function modifyIndexVersionWithOptions($instanceId, $clusterName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ModifyIndexVersion',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters/' . Url::percentEncode($clusterName) . '/index-version',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the index version of a cluster (an index version rollback).
     *
     * @remarks
     * ## [](#)Method
     *     PUT
     * ## [](#uri)URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *
     * @param request - ModifyIndexVersionRequest
     *
     * @returns ModifyIndexVersionResponse
     *
     * @param string                    $instanceId
     * @param string                    $clusterName
     * @param ModifyIndexVersionRequest $request
     *
     * @return ModifyIndexVersionResponse
     */
    public function modifyIndexVersion($instanceId, $clusterName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexVersionWithOptions($instanceId, $clusterName, $request, $headers, $runtime);
    }

    /**
     * 修改模型详情，修改模型状态
     *
     * @param request - ModifyModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyModelResponse
     *
     * @param string             $instanceId
     * @param string             $modelName
     * @param ModifyModelRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($instanceId, $modelName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyModel',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/models/' . Url::percentEncode($modelName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改模型详情，修改模型状态
     *
     * @param request - ModifyModelRequest
     *
     * @returns ModifyModelResponse
     *
     * @param string             $instanceId
     * @param string             $modelName
     * @param ModifyModelRequest $request
     *
     * @return ModifyModelResponse
     */
    public function modifyModel($instanceId, $modelName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyModelWithOptions($instanceId, $modelName, $request, $headers, $runtime);
    }

    /**
     * Modifies the configurations of a node.
     *
     * @remarks
     * ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     * ```
     *
     * @param request - ModifyNodeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeConfigResponse
     *
     * @param string                  $instanceId
     * @param ModifyNodeConfigRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyNodeConfigResponse
     */
    public function modifyNodeConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['clusterName'] = $request->clusterName;
        }

        if (null !== $request->dataSourceName) {
            @$query['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $body = [];
        if (null !== $request->active) {
            @$body['active'] = $request->active;
        }

        if (null !== $request->dataDuplicateNumber) {
            @$body['dataDuplicateNumber'] = $request->dataDuplicateNumber;
        }

        if (null !== $request->dataFragmentNumber) {
            @$body['dataFragmentNumber'] = $request->dataFragmentNumber;
        }

        if (null !== $request->flowRatio) {
            @$body['flowRatio'] = $request->flowRatio;
        }

        if (null !== $request->minServicePercent) {
            @$body['minServicePercent'] = $request->minServicePercent;
        }

        if (null !== $request->published) {
            @$body['published'] = $request->published;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/node-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a node.
     *
     * @remarks
     * ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     * ```
     *
     * @param request - ModifyNodeConfigRequest
     *
     * @returns ModifyNodeConfigResponse
     *
     * @param string                  $instanceId
     * @param ModifyNodeConfigRequest $request
     *
     * @return ModifyNodeConfigResponse
     */
    public function modifyNodeConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies online configurations.
     *
     * @remarks
     * ### Method
     * ```java
     * put
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     * ```
     *
     * @param request - ModifyOnlineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOnlineConfigResponse
     *
     * @param string                    $instanceId
     * @param string                    $nodeName
     * @param string                    $indexName
     * @param ModifyOnlineConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyOnlineConfigResponse
     */
    public function modifyOnlineConfigWithOptions($instanceId, $nodeName, $indexName, $request, $headers, $runtime)
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
            'action' => 'ModifyOnlineConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/node/' . Url::percentEncode($nodeName) . '/online-configs/' . Url::percentEncode($indexName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyOnlineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies online configurations.
     *
     * @remarks
     * ### Method
     * ```java
     * put
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     * ```
     *
     * @param request - ModifyOnlineConfigRequest
     *
     * @returns ModifyOnlineConfigResponse
     *
     * @param string                    $instanceId
     * @param string                    $nodeName
     * @param string                    $indexName
     * @param ModifyOnlineConfigRequest $request
     *
     * @return ModifyOnlineConfigResponse
     */
    public function modifyOnlineConfig($instanceId, $nodeName, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOnlineConfigWithOptions($instanceId, $nodeName, $indexName, $request, $headers, $runtime);
    }

    /**
     * 修改实例的密码
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/password`
     *
     * @param request - ModifyPasswordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPasswordResponse
     *
     * @param string                $instanceId
     * @param ModifyPasswordRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPasswordResponse
     */
    public function modifyPasswordWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPassword',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/password',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例的密码
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/password`
     *
     * @param request - ModifyPasswordRequest
     *
     * @returns ModifyPasswordResponse
     *
     * @param string                $instanceId
     * @param ModifyPasswordRequest $request
     *
     * @return ModifyPasswordResponse
     */
    public function modifyPassword($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPasswordWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - ModifyPausePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPausePolicyResponse
     *
     * @param string                   $instanceId
     * @param ModifyPausePolicyRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPausePolicyResponse
     */
    public function modifyPausePolicyWithOptions($instanceId, $request, $headers, $runtime)
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
            'action' => 'ModifyPausePolicy',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/pause-policies',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyPausePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyPausePolicyRequest
     *
     * @returns ModifyPausePolicyResponse
     *
     * @param string                   $instanceId
     * @param ModifyPausePolicyRequest $request
     *
     * @return ModifyPausePolicyResponse
     */
    public function modifyPausePolicy($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPausePolicyWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 修改公网域名访问白名单.
     *
     * @param request - ModifyPublicUrlIpListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPublicUrlIpListResponse
     *
     * @param string                       $instanceId
     * @param ModifyPublicUrlIpListRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyPublicUrlIpListResponse
     */
    public function modifyPublicUrlIpListWithOptions($instanceId, $request, $headers, $runtime)
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
            'action' => 'ModifyPublicUrlIpList',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/public-url-ip-list',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyPublicUrlIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改公网域名访问白名单.
     *
     * @param request - ModifyPublicUrlIpListRequest
     *
     * @returns ModifyPublicUrlIpListResponse
     *
     * @param string                       $instanceId
     * @param ModifyPublicUrlIpListRequest $request
     *
     * @return ModifyPublicUrlIpListResponse
     */
    public function modifyPublicUrlIpList($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPublicUrlIpListWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 通过指定实例ID来修改数据节点的副本或分片数量。
     *
     * @remarks
     * ## 请求说明
     * 本API允许用户修改特定实例下的数据节点副本数或分片数。请求时，需提供实例ID，并在请求体中指定要修改的`replica`（副本数）或`partition`（分片数）。请注意，这两个参数都是可选的，但至少需要提供其中一个以执行更新操作。
     *
     * @param request - ModifySearcherReplicaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySearcherReplicaResponse
     *
     * @param string                       $instanceId
     * @param ModifySearcherReplicaRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModifySearcherReplicaResponse
     */
    public function modifySearcherReplicaWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        if (null !== $request->replica) {
            @$body['replica'] = $request->replica;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySearcherReplica',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/replica',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifySearcherReplicaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过指定实例ID来修改数据节点的副本或分片数量。
     *
     * @remarks
     * ## 请求说明
     * 本API允许用户修改特定实例下的数据节点副本数或分片数。请求时，需提供实例ID，并在请求体中指定要修改的`replica`（副本数）或`partition`（分片数）。请注意，这两个参数都是可选的，但至少需要提供其中一个以执行更新操作。
     *
     * @param request - ModifySearcherReplicaRequest
     *
     * @returns ModifySearcherReplicaResponse
     *
     * @param string                       $instanceId
     * @param ModifySearcherReplicaRequest $request
     *
     * @return ModifySearcherReplicaResponse
     */
    public function modifySearcherReplica($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySearcherReplicaWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies an index table.
     *
     * @param request - ModifyTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTableResponse
     *
     * @param string             $instanceId
     * @param string             $tableName
     * @param ModifyTableRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyTableResponse
     */
    public function modifyTableWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->dataProcessConfig) {
            @$body['dataProcessConfig'] = $request->dataProcessConfig;
        }

        if (null !== $request->dataSource) {
            @$body['dataSource'] = $request->dataSource;
        }

        if (null !== $request->fieldSchema) {
            @$body['fieldSchema'] = $request->fieldSchema;
        }

        if (null !== $request->partitionCount) {
            @$body['partitionCount'] = $request->partitionCount;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        if (null !== $request->rawSchema) {
            @$body['rawSchema'] = $request->rawSchema;
        }

        if (null !== $request->vectorIndex) {
            @$body['vectorIndex'] = $request->vectorIndex;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTable',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an index table.
     *
     * @param request - ModifyTableRequest
     *
     * @returns ModifyTableResponse
     *
     * @param string             $instanceId
     * @param string             $tableName
     * @param ModifyTableRequest $request
     *
     * @return ModifyTableResponse
     */
    public function modifyTable($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyTableWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * Publishes a version of advanced configurations.
     *
     * @remarks
     * ## Method
     * ~~~
     * POST
     * ~~~
     * ## URI
     * ~~~
     * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     * ~~~
     *
     * @param request - PublishAdvanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishAdvanceConfigResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param PublishAdvanceConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PublishAdvanceConfigResponse
     */
    public function publishAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->desc) {
            @$body['desc'] = $request->desc;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishAdvanceConfig',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/advanced-configs/' . Url::percentEncode($configName) . '/actions/publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a version of advanced configurations.
     *
     * @remarks
     * ## Method
     * ~~~
     * POST
     * ~~~
     * ## URI
     * ~~~
     * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     * ~~~
     *
     * @param request - PublishAdvanceConfigRequest
     *
     * @returns PublishAdvanceConfigResponse
     *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param PublishAdvanceConfigRequest $request
     *
     * @return PublishAdvanceConfigResponse
     */
    public function publishAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * Publishes a specified index version.
     *
     * @remarks
     * ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish
     *
     * @param request - PublishIndexVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishIndexVersionResponse
     *
     * @param string                     $instanceId
     * @param string                     $indexName
     * @param PublishIndexVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PublishIndexVersionResponse
     */
    public function publishIndexVersionWithOptions($instanceId, $indexName, $request, $headers, $runtime)
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
            'action' => 'PublishIndexVersion',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/actions/publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a specified index version.
     *
     * @remarks
     * ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish
     *
     * @param request - PublishIndexVersionRequest
     *
     * @returns PublishIndexVersionResponse
     *
     * @param string                     $instanceId
     * @param string                     $indexName
     * @param PublishIndexVersionRequest $request
     *
     * @return PublishIndexVersionResponse
     */
    public function publishIndexVersion($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishIndexVersionWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * @param request - PushDocumentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushDocumentsResponse
     *
     * @param string               $instanceId
     * @param string               $dataSourceName
     * @param PushDocumentsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return PushDocumentsResponse
     */
    public function pushDocumentsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pkField) {
            @$query['pkField'] = $request->pkField;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'PushDocuments',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/data-sources/' . Url::percentEncode($dataSourceName) . '/actions/bulk',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushDocumentsRequest
     *
     * @returns PushDocumentsResponse
     *
     * @param string               $instanceId
     * @param string               $dataSourceName
     * @param PushDocumentsRequest $request
     *
     * @return PushDocumentsResponse
     */
    public function pushDocuments($instanceId, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDocumentsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * Restores data from an index.
     *
     * @remarks
     * ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/recover-index`
     *
     * @param request - RecoverIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverIndexResponse
     *
     * @param string              $instanceId
     * @param RecoverIndexRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RecoverIndexResponse
     */
    public function recoverIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->buildDeployId) {
            @$body['buildDeployId'] = $request->buildDeployId;
        }

        if (null !== $request->dataSourceName) {
            @$body['dataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->generation) {
            @$body['generation'] = $request->generation;
        }

        if (null !== $request->indexName) {
            @$body['indexName'] = $request->indexName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecoverIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/recover-index',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RecoverIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores data from an index.
     *
     * @remarks
     * ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/recover-index`
     *
     * @param request - RecoverIndexRequest
     *
     * @returns RecoverIndexResponse
     *
     * @param string              $instanceId
     * @param RecoverIndexRequest $request
     *
     * @return RecoverIndexResponse
     */
    public function recoverIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Rebuilds an index.
     *
     * @param request - ReindexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReindexResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param ReindexRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReindexResponse
     */
    public function reindexWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataTimeSec) {
            @$body['dataTimeSec'] = $request->dataTimeSec;
        }

        if (null !== $request->ossDataPath) {
            @$body['ossDataPath'] = $request->ossDataPath;
        }

        if (null !== $request->partition) {
            @$body['partition'] = $request->partition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Reindex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/tables/' . Url::percentEncode($tableName) . '/reindex',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReindexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebuilds an index.
     *
     * @param request - ReindexRequest
     *
     * @returns ReindexResponse
     *
     * @param string         $instanceId
     * @param string         $tableName
     * @param ReindexRequest $request
     *
     * @return ReindexResponse
     */
    public function reindex($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reindexWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * Deletes a cluster.
     *
     * @remarks
     * ### Method
     * ```java
     * DELETE
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveClusterResponse
     *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveClusterResponse
     */
    public function removeClusterWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveCluster',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/clusters/' . Url::percentEncode($clusterName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cluster.
     *
     * @remarks
     * ### Method
     * ```java
     * DELETE
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     * ```
     *
     * @returns RemoveClusterResponse
     *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return RemoveClusterResponse
     */
    public function removeCluster($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeClusterWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * @param request - RenameFolderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenameFolderResponse
     *
     * @param string              $instanceId
     * @param string              $database
     * @param string              $folderId
     * @param RenameFolderRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RenameFolderResponse
     */
    public function renameFolderWithOptions($instanceId, $database, $folderId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenameFolder',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/folders/' . Url::percentEncode($folderId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenameFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RenameFolderRequest
     *
     * @returns RenameFolderResponse
     *
     * @param string              $instanceId
     * @param string              $database
     * @param string              $folderId
     * @param RenameFolderRequest $request
     *
     * @return RenameFolderResponse
     */
    public function renameFolder($instanceId, $database, $folderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameFolderWithOptions($instanceId, $database, $folderId, $request, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartIndexResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartIndexResponse
     */
    public function startIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/startIndex',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns StartIndexResponse
     *
     * @param string $instanceId
     * @param string $indexName
     *
     * @return StartIndexResponse
     */
    public function startIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopIndexResponse
     *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopIndexResponse
     */
    public function stopIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopIndex',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/indexes/' . Url::percentEncode($indexName) . '/stopIndex',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns StopIndexResponse
     *
     * @param string $instanceId
     * @param string $indexName
     *
     * @return StopIndexResponse
     */
    public function stopIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * Stops an FSM task.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * PUT
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     * ```
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTaskResponse
     *
     * @param string         $instanceId
     * @param string         $fsmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopTaskResponse
     */
    public function stopTaskWithOptions($instanceId, $fsmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopTask',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/stop-task/' . Url::percentEncode($fsmId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an FSM task.
     *
     * @remarks
     * ### [](#)Method
     * ```java
     * PUT
     * ```
     * ### [](#uri)URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     * ```
     *
     * @returns StopTaskResponse
     *
     * @param string $instanceId
     * @param string $fsmId
     *
     * @return StopTaskResponse
     */
    public function stopTask($instanceId, $fsmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTaskWithOptions($instanceId, $fsmId, $headers, $runtime);
    }

    /**
     * 打标签接口.
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
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/resource-tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打标签接口.
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
     * 删标签接口.
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
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/resource-tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删标签接口.
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
     * Modifies the configuration of a specified instance.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->orderType) {
            @$body['orderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a specified instance.
     *
     * @remarks
     * ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - UpdateSqlInstanceContentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSqlInstanceContentResponse
     *
     * @param string                          $instanceId
     * @param string                          $database
     * @param string                          $sqlInstanceId
     * @param UpdateSqlInstanceContentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSqlInstanceContentResponse
     */
    public function updateSqlInstanceContentWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSqlInstanceContent',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '/content',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSqlInstanceContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSqlInstanceContentRequest
     *
     * @returns UpdateSqlInstanceContentResponse
     *
     * @param string                          $instanceId
     * @param string                          $database
     * @param string                          $sqlInstanceId
     * @param UpdateSqlInstanceContentRequest $request
     *
     * @return UpdateSqlInstanceContentResponse
     */
    public function updateSqlInstanceContent($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceContentWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - UpdateSqlInstanceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSqlInstanceNameResponse
     *
     * @param string                       $instanceId
     * @param string                       $database
     * @param string                       $sqlInstanceId
     * @param UpdateSqlInstanceNameRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSqlInstanceNameResponse
     */
    public function updateSqlInstanceNameWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSqlInstanceName',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSqlInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSqlInstanceNameRequest
     *
     * @returns UpdateSqlInstanceNameResponse
     *
     * @param string                       $instanceId
     * @param string                       $database
     * @param string                       $sqlInstanceId
     * @param UpdateSqlInstanceNameRequest $request
     *
     * @return UpdateSqlInstanceNameResponse
     */
    public function updateSqlInstanceName($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceNameWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - UpdateSqlInstanceParamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSqlInstanceParamsResponse
     *
     * @param string                         $instanceId
     * @param string                         $database
     * @param string                         $sqlInstanceId
     * @param UpdateSqlInstanceParamsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSqlInstanceParamsResponse
     */
    public function updateSqlInstanceParamsWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->combineParam) {
            @$body['combineParam'] = $request->combineParam;
        }

        if (null !== $request->dynamicParam) {
            @$body['dynamicParam'] = $request->dynamicParam;
        }

        if (null !== $request->kvpair) {
            @$body['kvpair'] = $request->kvpair;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->staticParam) {
            @$body['staticParam'] = $request->staticParam;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSqlInstanceParams',
            'version' => '2021-10-25',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ha3/instances/' . Url::percentEncode($instanceId) . '/sql-studio/databases/' . Url::percentEncode($database) . '/sql-instances/' . Url::percentEncode($sqlInstanceId) . '/params',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSqlInstanceParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSqlInstanceParamsRequest
     *
     * @returns UpdateSqlInstanceParamsResponse
     *
     * @param string                         $instanceId
     * @param string                         $database
     * @param string                         $sqlInstanceId
     * @param UpdateSqlInstanceParamsRequest $request
     *
     * @return UpdateSqlInstanceParamsResponse
     */
    public function updateSqlInstanceParams($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceParamsWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }
}

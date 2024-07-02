<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CloneSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CloneSqlInstanceResponse;
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
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreatePublicUrlResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateSqlInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateSqlInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteAdvanceConfigResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Triggers reindexing.
     *  *
     * @description ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/actions/build-index
     *  *
     * @param string            $instanceId
     * @param BuildIndexRequest $request    BuildIndexRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return BuildIndexResponse BuildIndexResponse
     */
    public function buildIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->buildMode)) {
            $body['buildMode'] = $request->buildMode;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $body['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['dataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->dataTimeSec)) {
            $body['dataTimeSec'] = $request->dataTimeSec;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->generation)) {
            $body['generation'] = $request->generation;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BuildIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/build-index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BuildIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Triggers reindexing.
     *  *
     * @description ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/actions/build-index
     *  *
     * @param string            $instanceId
     * @param BuildIndexRequest $request    BuildIndexRequest
     *
     * @return BuildIndexResponse BuildIndexResponse
     */
    public function buildIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更换实例资源组
     *  *
     * @param string                     $instanceId
     * @param ChangeResourceGroupRequest $request    ChangeResourceGroupRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['newResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/change-resource-group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更换实例资源组
     *  *
     * @param string                     $instanceId
     * @param ChangeResourceGroupRequest $request    ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $database
     * @param string                  $sqlInstanceId
     * @param CloneSqlInstanceRequest $request       CloneSqlInstanceRequest
     * @param string[]                $headers       map
     * @param RuntimeOptions          $runtime       runtime options for this request RuntimeOptions
     *
     * @return CloneSqlInstanceResponse CloneSqlInstanceResponse
     */
    public function cloneSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->targetFolderId)) {
            $body['targetFolderId'] = $request->targetFolderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneSqlInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '/actions/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $database
     * @param string                  $sqlInstanceId
     * @param CloneSqlInstanceRequest $request       CloneSqlInstanceRequest
     *
     * @return CloneSqlInstanceResponse CloneSqlInstanceResponse
     */
    public function cloneSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a cluster.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/clusters`
     *  *
     * @param string               $instanceId
     * @param CreateClusterRequest $request    CreateClusterRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoLoad)) {
            $body['autoLoad'] = $request->autoLoad;
        }
        if (!Utils::isUnset($request->dataNode)) {
            $body['dataNode'] = $request->dataNode;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->queryNode)) {
            $body['queryNode'] = $request->queryNode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a cluster.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/clusters`
     *  *
     * @param string               $instanceId
     * @param CreateClusterRequest $request    CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $instanceId
     * @param string                 $configName
     * @param CreateConfigDirRequest $request    CreateConfigDirRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateConfigDirResponse CreateConfigDirResponse
     */
    public function createConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dirName)) {
            $body['dirName'] = $request->dirName;
        }
        if (!Utils::isUnset($request->parentFullPath)) {
            $body['parentFullPath'] = $request->parentFullPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigDir',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/dir',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $instanceId
     * @param string                 $configName
     * @param CreateConfigDirRequest $request    CreateConfigDirRequest
     *
     * @return CreateConfigDirResponse CreateConfigDirResponse
     */
    public function createConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $configName
     * @param CreateConfigFileRequest $request    CreateConfigFileRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateConfigFileResponse CreateConfigFileResponse
     */
    public function createConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $body['ossPath'] = $request->ossPath;
        }
        if (!Utils::isUnset($request->parentFullPath)) {
            $body['parentFullPath'] = $request->parentFullPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/file',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $configName
     * @param CreateConfigFileRequest $request    CreateConfigFileRequest
     *
     * @return CreateConfigFileResponse CreateConfigFileResponse
     */
    public function createConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates data sources.
     *  *
     * @param string                  $instanceId
     * @param CreateDataSourceRequest $request    CreateDataSourceRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->autoBuildIndex)) {
            $body['autoBuildIndex'] = $request->autoBuildIndex;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->saroConfig)) {
            $body['saroConfig'] = $request->saroConfig;
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
            'action'      => 'CreateDataSource',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates data sources.
     *  *
     * @param string                  $instanceId
     * @param CreateDataSourceRequest $request    CreateDataSourceRequest
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSource($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSourceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string              $instanceId
     * @param string              $database
     * @param CreateFolderRequest $request    CreateFolderRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolderWithOptions($instanceId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parent)) {
            $body['parent'] = $request->parent;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFolder',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/folders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $instanceId
     * @param string              $database
     * @param CreateFolderRequest $request    CreateFolderRequest
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolder($instanceId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFolderWithOptions($instanceId, $database, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an index.
     *  *
     * @description ### Method
     * ```java
     * POST
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/indexes
     * ```
     *  *
     * @param string             $instanceId
     * @param CreateIndexRequest $request    CreateIndexRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->buildParallelNum)) {
            $body['buildParallelNum'] = $request->buildParallelNum;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $body['dataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->dataSourceInfo)) {
            $body['dataSourceInfo'] = $request->dataSourceInfo;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->extend)) {
            $body['extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->mergeParallelNum)) {
            $body['mergeParallelNum'] = $request->mergeParallelNum;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an index.
     *  *
     * @description ### Method
     * ```java
     * POST
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/indexes
     * ```
     *  *
     * @param string             $instanceId
     * @param CreateIndexRequest $request    CreateIndexRequest
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a Havenask instance.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/api/instances?dryRun=false`
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->components)) {
            $body['components'] = $request->components;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Havenask instance.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/api/instances?dryRun=false`
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 开通公网域名
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreatePublicUrlResponse CreatePublicUrlResponse
     */
    public function createPublicUrlWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreatePublicUrl',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/public-url',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通公网域名
     *  *
     * @param string $instanceId
     *
     * @return CreatePublicUrlResponse CreatePublicUrlResponse
     */
    public function createPublicUrl($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPublicUrlWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param string                   $database
     * @param CreateSqlInstanceRequest $request    CreateSqlInstanceRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateSqlInstanceResponse CreateSqlInstanceResponse
     */
    public function createSqlInstanceWithOptions($instanceId, $database, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parent)) {
            $body['parent'] = $request->parent;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSqlInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param string                   $database
     * @param CreateSqlInstanceRequest $request    CreateSqlInstanceRequest
     *
     * @return CreateSqlInstanceResponse CreateSqlInstanceResponse
     */
    public function createSqlInstance($instanceId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlInstanceWithOptions($instanceId, $database, $request, $headers, $runtime);
    }

    /**
     * @summary 创建索引V2
     *  *
     * @param string             $instanceId
     * @param CreateTableRequest $request    CreateTableRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTableWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->dataProcessConfig)) {
            $body['dataProcessConfig'] = $request->dataProcessConfig;
        }
        if (!Utils::isUnset($request->dataProcessorCount)) {
            $body['dataProcessorCount'] = $request->dataProcessorCount;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $body['dataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->fieldSchema)) {
            $body['fieldSchema'] = $request->fieldSchema;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->partitionCount)) {
            $body['partitionCount'] = $request->partitionCount;
        }
        if (!Utils::isUnset($request->primaryKey)) {
            $body['primaryKey'] = $request->primaryKey;
        }
        if (!Utils::isUnset($request->rawSchema)) {
            $body['rawSchema'] = $request->rawSchema;
        }
        if (!Utils::isUnset($request->vectorIndex)) {
            $body['vectorIndex'] = $request->vectorIndex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTable',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建索引V2
     *  *
     * @param string             $instanceId
     * @param CreateTableRequest $request    CreateTableRequest
     *
     * @return CreateTableResponse CreateTableResponse
     */
    public function createTable($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes the details about advanced configurations.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *  *
     * @param string         $instanceId
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteAdvanceConfigResponse DeleteAdvanceConfigResponse
     */
    public function deleteAdvanceConfigWithOptions($instanceId, $configName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAdvanceConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the details about advanced configurations.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *  *
     * @param string $instanceId
     * @param string $configName
     *
     * @return DeleteAdvanceConfigResponse DeleteAdvanceConfigResponse
     */
    public function deleteAdvanceConfig($instanceId, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAdvanceConfigWithOptions($instanceId, $configName, $headers, $runtime);
    }

    /**
     * @param string                 $instanceId
     * @param string                 $configName
     * @param DeleteConfigDirRequest $request    DeleteConfigDirRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigDirResponse DeleteConfigDirResponse
     */
    public function deleteConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dirName)) {
            $query['dirName'] = $request->dirName;
        }
        if (!Utils::isUnset($request->parentFullPath)) {
            $query['parentFullPath'] = $request->parentFullPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigDir',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/dir',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $instanceId
     * @param string                 $configName
     * @param DeleteConfigDirRequest $request    DeleteConfigDirRequest
     *
     * @return DeleteConfigDirResponse DeleteConfigDirResponse
     */
    public function deleteConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $configName
     * @param DeleteConfigFileRequest $request    DeleteConfigFileRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigFileResponse DeleteConfigFileResponse
     */
    public function deleteConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->parentFullPath)) {
            $query['parentFullPath'] = $request->parentFullPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/file',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $configName
     * @param DeleteConfigFileRequest $request    DeleteConfigFileRequest
     *
     * @return DeleteConfigFileResponse DeleteConfigFileResponse
     */
    public function deleteConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a specified data source.
     *  *
     * @description ## Method
     * `DELETE`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *  *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specified data source.
     *  *
     * @description ## Method
     * `DELETE`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *  *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $database
     * @param string         $folderId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolderWithOptions($instanceId, $database, $folderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFolder',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/folders/' . OpenApiUtilClient::getEncodeParam($folderId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $database
     * @param string $folderId
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolder($instanceId, $database, $folderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFolderWithOptions($instanceId, $database, $folderId, $headers, $runtime);
    }

    /**
     * @summary Deletes an index.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
     *  *
     * @param string             $instanceId
     * @param string             $indexName
     * @param DeleteIndexRequest $request    DeleteIndexRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSource)) {
            $query['dataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->deleteDataSource)) {
            $query['deleteDataSource'] = $request->deleteDataSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an index.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
     *  *
     * @param string             $instanceId
     * @param string             $indexName
     * @param DeleteIndexRequest $request    DeleteIndexRequest
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndex($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes the version of an index.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}
     *  *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexVersionResponse DeleteIndexVersionResponse
     */
    public function deleteIndexVersionWithOptions($instanceId, $indexName, $versionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndexVersion',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the version of an index.
     *  *
     * @description ## Method
     *     DELETE
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}
     *  *
     * @param string $instanceId
     * @param string $indexName
     * @param string $versionName
     *
     * @return DeleteIndexVersionResponse DeleteIndexVersionResponse
     */
    public function deleteIndexVersion($instanceId, $indexName, $versionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexVersionWithOptions($instanceId, $indexName, $versionName, $headers, $runtime);
    }

    /**
     * @summary Deletes a specified instance.
     *  *
     * @description ### Method
     * `DELETE`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specified instance.
     *  *
     * @description ### Method
     * `DELETE`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string $instanceId
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary 删除公网域名
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeletePublicUrlResponse DeletePublicUrlResponse
     */
    public function deletePublicUrlWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePublicUrl',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/public-url',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePublicUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除公网域名
     *  *
     * @param string $instanceId
     *
     * @return DeletePublicUrlResponse DeletePublicUrlResponse
     */
    public function deletePublicUrl($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePublicUrlWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $database
     * @param string         $sqlInstanceId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteSqlInstanceResponse DeleteSqlInstanceResponse
     */
    public function deleteSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSqlInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $database
     * @param string $sqlInstanceId
     *
     * @return DeleteSqlInstanceResponse DeleteSqlInstanceResponse
     */
    public function deleteSqlInstance($instanceId, $database, $sqlInstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $headers, $runtime);
    }

    /**
     * @summary 删除索引表V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteTableResponse DeleteTableResponse
     */
    public function deleteTableWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTable',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除索引表V2
     *  *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return DeleteTableResponse DeleteTableResponse
     */
    public function deleteTable($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
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
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $instanceId
     * @param string                    $database
     * @param string                    $sqlInstanceId
     * @param ExecuteSqlInstanceRequest $request       ExecuteSqlInstanceRequest
     * @param string[]                  $headers       map
     * @param RuntimeOptions            $runtime       runtime options for this request RuntimeOptions
     *
     * @return ExecuteSqlInstanceResponse ExecuteSqlInstanceResponse
     */
    public function executeSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->combineParam)) {
            $body['combineParam'] = $request->combineParam;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->dynamicParam)) {
            $body['dynamicParam'] = $request->dynamicParam;
        }
        if (!Utils::isUnset($request->kvpair)) {
            $body['kvpair'] = $request->kvpair;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->staticParam)) {
            $body['staticParam'] = $request->staticParam;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteSqlInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '/actions/execution',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $instanceId
     * @param string                    $database
     * @param string                    $sqlInstanceId
     * @param ExecuteSqlInstanceRequest $request       ExecuteSqlInstanceRequest
     *
     * @return ExecuteSqlInstanceResponse ExecuteSqlInstanceResponse
     */
    public function executeSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Performs a forced switchover.
     *  *
     * @description \\### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     * ```
     *  *
     * @param string         $instanceId
     * @param string         $fsmId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ForceSwitchResponse ForceSwitchResponse
     */
    public function forceSwitchWithOptions($instanceId, $fsmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ForceSwitch',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/force-switch/' . OpenApiUtilClient::getEncodeParam($fsmId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ForceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a forced switchover.
     *  *
     * @description \\### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     * ```
     *  *
     * @param string $instanceId
     * @param string $fsmId
     *
     * @return ForceSwitchResponse ForceSwitchResponse
     */
    public function forceSwitch($instanceId, $fsmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->forceSwitchWithOptions($instanceId, $fsmId, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a dictionary.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *  *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param GetAdvanceConfigRequest $request    GetAdvanceConfigRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetAdvanceConfigResponse GetAdvanceConfigResponse
     */
    public function getAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
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
            'action'      => 'GetAdvanceConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a dictionary.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
     *  *
     * @param string                  $instanceId
     * @param string                  $configName
     * @param GetAdvanceConfigRequest $request    GetAdvanceConfigRequest
     *
     * @return GetAdvanceConfigResponse GetAdvanceConfigResponse
     */
    public function getAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the information in a specified advanced configuration file.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param GetAdvanceConfigFileRequest $request    GetAdvanceConfigFileRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetAdvanceConfigFileResponse GetAdvanceConfigFileResponse
     */
    public function getAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAdvanceConfigFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/file',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAdvanceConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information in a specified advanced configuration file.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param GetAdvanceConfigFileRequest $request    GetAdvanceConfigFileRequest
     *
     * @return GetAdvanceConfigFileResponse GetAdvanceConfigFileResponse
     */
    public function getAdvanceConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a cluster.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`
     *  *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getClusterWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a cluster.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`
     *  *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * @summary Queries the runtime information about a specified cluster.
     *  *
     * @description ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-run-time-info
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetClusterRunTimeInfoResponse GetClusterRunTimeInfoResponse
     */
    public function getClusterRunTimeInfoWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetClusterRunTimeInfo',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/cluster-run-time-info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterRunTimeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the runtime information about a specified cluster.
     *  *
     * @description ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-run-time-info
     *  *
     * @param string $instanceId
     *
     * @return GetClusterRunTimeInfoResponse GetClusterRunTimeInfoResponse
     */
    public function getClusterRunTimeInfo($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterRunTimeInfoWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Obtains a data source.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *  *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceResponse GetDataSourceResponse
     */
    public function getDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataSource',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a data source.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`
     *  *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return GetDataSourceResponse GetDataSourceResponse
     */
    public function getDataSource($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * @summary 获取数据源部署信息
     *  *
     * @param string         $instanceId
     * @param string         $deployName
     * @param string         $dataSourceName
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceDeployResponse GetDataSourceDeployResponse
     */
    public function getDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceDeploy',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/deploys/' . OpenApiUtilClient::getEncodeParam($deployName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据源部署信息
     *  *
     * @param string $instanceId
     * @param string $deployName
     * @param string $dataSourceName
     *
     * @return GetDataSourceDeployResponse GetDataSourceDeployResponse
     */
    public function getDataSourceDeploy($instanceId, $deployName, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $database
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseSchemaResponse GetDatabaseSchemaResponse
     */
    public function getDatabaseSchemaWithOptions($instanceId, $database, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDatabaseSchema',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/schema',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $database
     * @param string $tableName
     *
     * @return GetDatabaseSchemaResponse GetDatabaseSchemaResponse
     */
    public function getDatabaseSchema($instanceId, $database, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseSchemaWithOptions($instanceId, $database, $tableName, $headers, $runtime);
    }

    /**
     * @summary Displays the overview of the deployment.
     *  *
     * @description ## Method
     * GET
     * ## URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/deploy-graph
     * ```
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetDeployGraphResponse GetDeployGraphResponse
     */
    public function getDeployGraphWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDeployGraph',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/deploy-graph',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeployGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Displays the overview of the deployment.
     *  *
     * @description ## Method
     * GET
     * ## URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/deploy-graph
     * ```
     *  *
     * @param string $instanceId
     *
     * @return GetDeployGraphResponse GetDeployGraphResponse
     */
    public function getDeployGraph($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeployGraphWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries details about the version information of an index table.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *  *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param GetFileRequest $request     GetFileRequest
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetFileResponse GetFileResponse
     */
    public function getFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionName) . '/file',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries details about the version information of an index table.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *  *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string         $versionName
     * @param GetFileRequest $request     GetFileRequest
     *
     * @return GetFileResponse GetFileResponse
     */
    public function getFile($instanceId, $indexName, $versionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about an index version.
     *  *
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetIndexResponse GetIndexResponse
     */
    public function getIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an index version.
     *  *
     * @param string $instanceId
     * @param string $indexName
     *
     * @return GetIndexResponse GetIndexResponse
     */
    public function getIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * @summary 获取索引在线生效策略
     *  *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string         $deployName
     * @param string         $indexName
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetIndexOnlineStrategyResponse GetIndexOnlineStrategyResponse
     */
    public function getIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndexOnlineStrategy',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/deploys/' . OpenApiUtilClient::getEncodeParam($deployName) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/online-strategy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexOnlineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取索引在线生效策略
     *  *
     * @param string $instanceId
     * @param string $dataSourceName
     * @param string $deployName
     * @param string $indexName
     *
     * @return GetIndexOnlineStrategyResponse GetIndexOnlineStrategyResponse
     */
    public function getIndexOnlineStrategy($instanceId, $dataSourceName, $deployName, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $headers, $runtime);
    }

    /**
     * @summary Obtains the information about index versions that the current index version can be rolled back to.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *  *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetIndexVersionResponse GetIndexVersionResponse
     */
    public function getIndexVersionWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndexVersion',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterName) . '/index-version',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about index versions that the current index version can be rolled back to.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *  *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return GetIndexVersionResponse GetIndexVersionResponse
     */
    public function getIndexVersion($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexVersionWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of an instance based on a specified instance ID.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an instance based on a specified instance ID.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string $instanceId
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Gets the configuration information of a node.
     *  *
     * @param string               $instanceId
     * @param GetNodeConfigRequest $request    GetNodeConfigRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetNodeConfigResponse GetNodeConfigResponse
     */
    public function getNodeConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterName)) {
            $query['clusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNodeConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/node-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Gets the configuration information of a node.
     *  *
     * @param string               $instanceId
     * @param GetNodeConfigRequest $request    GetNodeConfigRequest
     *
     * @return GetNodeConfigResponse GetNodeConfigResponse
     */
    public function getNodeConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $instanceId
     * @param string                $database
     * @param string                $sqlInstanceId
     * @param GetSqlInstanceRequest $request       GetSqlInstanceRequest
     * @param string[]              $headers       map
     * @param RuntimeOptions        $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetSqlInstanceResponse GetSqlInstanceResponse
     */
    public function getSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSqlInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSqlInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $instanceId
     * @param string                $database
     * @param string                $sqlInstanceId
     * @param GetSqlInstanceRequest $request       GetSqlInstanceRequest
     *
     * @return GetSqlInstanceResponse GetSqlInstanceResponse
     */
    public function getSqlInstance($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlInstanceWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取索引表信息V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTableWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTable',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取索引表信息V2
     *  *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTable($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @summary 根据generationId获取某个索引版本状态V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string         $generationId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetTableGenerationResponse GetTableGenerationResponse
     */
    public function getTableGenerationWithOptions($instanceId, $tableName, $generationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTableGeneration',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/index_versions/' . OpenApiUtilClient::getEncodeParam($generationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据generationId获取某个索引版本状态V2
     *  *
     * @param string $instanceId
     * @param string $tableName
     * @param string $generationId
     *
     * @return GetTableGenerationResponse GetTableGenerationResponse
     */
    public function getTableGeneration($instanceId, $tableName, $generationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableGenerationWithOptions($instanceId, $tableName, $generationId, $headers, $runtime);
    }

    /**
     * @summary Obtains the file list in an advanced configuration directory.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param ListAdvanceConfigDirRequest $request    ListAdvanceConfigDirRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListAdvanceConfigDirResponse ListAdvanceConfigDirResponse
     */
    public function listAdvanceConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dirName)) {
            $query['dirName'] = $request->dirName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvanceConfigDir',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/dir',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAdvanceConfigDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the file list in an advanced configuration directory.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param ListAdvanceConfigDirRequest $request    ListAdvanceConfigDirRequest
     *
     * @return ListAdvanceConfigDirResponse ListAdvanceConfigDirResponse
     */
    public function listAdvanceConfigDir($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAdvanceConfigDirWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of advanced configurations.
     *  *
     * @description ## Sample requests
     * `GET /openapi/ha3/instances/ose-test1/advanced-configs`
     *  *
     * @param string                    $instanceId
     * @param ListAdvanceConfigsRequest $request    ListAdvanceConfigsRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListAdvanceConfigsResponse ListAdvanceConfigsResponse
     */
    public function listAdvanceConfigsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->indexName)) {
            $query['indexName'] = $request->indexName;
        }
        if (!Utils::isUnset($request->newMode)) {
            $query['newMode'] = $request->newMode;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvanceConfigs',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAdvanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of advanced configurations.
     *  *
     * @description ## Sample requests
     * `GET /openapi/ha3/instances/ose-test1/advanced-configs`
     *  *
     * @param string                    $instanceId
     * @param ListAdvanceConfigsRequest $request    ListAdvanceConfigsRequest
     *
     * @return ListAdvanceConfigsResponse ListAdvanceConfigsResponse
     */
    public function listAdvanceConfigs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAdvanceConfigsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries cluster names.
     *  *
     * @description ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-names
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterNamesResponse ListClusterNamesResponse
     */
    public function listClusterNamesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListClusterNames',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/cluster-names',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries cluster names.
     *  *
     * @description ### Method
     * GET
     * ### URI
     * /openapi/ha3/instances/{instanceId}/cluster-names
     *  *
     * @return ListClusterNamesResponse ListClusterNamesResponse
     */
    public function listClusterNames()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNamesWithOptions($headers, $runtime);
    }

    /**
     * @summary Displays cluster tasks .
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/cluster-tasks
     * ```
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListClusterTasksResponse ListClusterTasksResponse
     */
    public function listClusterTasksWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListClusterTasks',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/cluster-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Displays cluster tasks .
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/cluster-tasks
     * ```
     *  *
     * @param string $instanceId
     *
     * @return ListClusterTasksResponse ListClusterTasksResponse
     */
    public function listClusterTasks($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterTasksWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries clusters.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters
     * ```
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries clusters.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters
     * ```
     *  *
     * @param string $instanceId
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClustersWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Obtains the schema information of a specified data source.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`
     *  *
     * @param string         $instanceId
     * @param string         $dataSourceName
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceSchemasResponse ListDataSourceSchemasResponse
     */
    public function listDataSourceSchemasWithOptions($instanceId, $dataSourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceSchemas',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/schemas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the schema information of a specified data source.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`
     *  *
     * @param string $instanceId
     * @param string $dataSourceName
     *
     * @return ListDataSourceSchemasResponse ListDataSourceSchemasResponse
     */
    public function listDataSourceSchemas($instanceId, $dataSourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceSchemasWithOptions($instanceId, $dataSourceName, $headers, $runtime);
    }

    /**
     * @summary Displays data source tasks.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/data-source-tasks
     * ```
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceTasksResponse ListDataSourceTasksResponse
     */
    public function listDataSourceTasksWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTasks',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-source-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Displays data source tasks.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/data-source-tasks
     * ```
     *  *
     * @param string $instanceId
     *
     * @return ListDataSourceTasksResponse ListDataSourceTasksResponse
     */
    public function listDataSourceTasks($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTasksWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Obtains the list of data sources.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources`
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataSourcesResponse ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataSources',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the list of data sources.
     *  *
     * @description ## Method
     * `GET`
     * ## URI
     * `/openapi/ha3/instances/{instanceId}/data-sources`
     *  *
     * @param string $instanceId
     *
     * @return ListDataSourcesResponse ListDataSourcesResponse
     */
    public function listDataSources($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourcesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabasesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDatabases',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabases($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Obtains the data restoration version of a data source.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`
     *  *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param ListDateSourceGenerationsRequest $request        ListDateSourceGenerationsRequest
     * @param string[]                         $headers        map
     * @param RuntimeOptions                   $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListDateSourceGenerationsResponse ListDateSourceGenerationsResponse
     */
    public function listDateSourceGenerationsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->validStatus)) {
            $query['validStatus'] = $request->validStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDateSourceGenerations',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/generations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDateSourceGenerationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the data restoration version of a data source.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`
     *  *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param ListDateSourceGenerationsRequest $request        ListDateSourceGenerationsRequest
     *
     * @return ListDateSourceGenerationsResponse ListDateSourceGenerationsResponse
     */
    public function listDateSourceGenerations($instanceId, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDateSourceGenerationsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $indexName
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListIndexRecoverRecordsResponse ListIndexRecoverRecordsResponse
     */
    public function listIndexRecoverRecordsWithOptions($indexName, $instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListIndexRecoverRecords',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/actions/list-recover-records',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexRecoverRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $indexName
     * @param string $instanceId
     *
     * @return ListIndexRecoverRecordsResponse ListIndexRecoverRecordsResponse
     */
    public function listIndexRecoverRecords($indexName, $instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexRecoverRecordsWithOptions($indexName, $instanceId, $headers, $runtime);
    }

    /**
     * @summary Obtains the index list.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes
     *  *
     * @param string             $instanceId
     * @param ListIndexesRequest $request    ListIndexesRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListIndexesResponse ListIndexesResponse
     */
    public function listIndexesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newMode)) {
            $query['newMode'] = $request->newMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIndexes',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the index list.
     *  *
     * @description ## Method
     *     GET
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes
     *  *
     * @param string             $instanceId
     * @param ListIndexesRequest $request    ListIndexesRequest
     *
     * @return ListIndexesResponse ListIndexesResponse
     */
    public function listIndexes($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries instances.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`
     *  *
     * @param string                   $instanceId
     * @param ListInstanceSpecsRequest $request    ListInstanceSpecsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceSpecsResponse ListInstanceSpecsResponse
     */
    public function listInstanceSpecsWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'ListInstanceSpecs',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/specs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries instances.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`
     *  *
     * @param string                   $instanceId
     * @param ListInstanceSpecsRequest $request    ListInstanceSpecsRequest
     *
     * @return ListInstanceSpecsResponse ListInstanceSpecsResponse
     */
    public function listInstanceSpecs($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSpecsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries instances.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/[code]/instances`
     *  *
     * @param ListInstancesRequest $tmpReq  ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->edition)) {
            $query['edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries instances.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/[code]/instances`
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
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
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
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogs',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/logs',
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
     * @summary Obtains the details of online configurations.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     * ```
     *  *
     * @param string                   $instanceId
     * @param string                   $nodeName
     * @param ListOnlineConfigsRequest $request    ListOnlineConfigsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListOnlineConfigsResponse ListOnlineConfigsResponse
     */
    public function listOnlineConfigsWithOptions($instanceId, $nodeName, $request, $headers, $runtime)
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
            'action'      => 'ListOnlineConfigs',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/node/' . OpenApiUtilClient::getEncodeParam($nodeName) . '/online-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOnlineConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of online configurations.
     *  *
     * @description ### Method
     * ```java
     * GET
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     * ```
     *  *
     * @param string                   $instanceId
     * @param string                   $nodeName
     * @param ListOnlineConfigsRequest $request    ListOnlineConfigsRequest
     *
     * @return ListOnlineConfigsResponse ListOnlineConfigsResponse
     */
    public function listOnlineConfigs($instanceId, $nodeName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineConfigsWithOptions($instanceId, $nodeName, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListPausePolicysResponse ListPausePolicysResponse
     */
    public function listPausePolicysWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListPausePolicys',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/pause-policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPausePolicysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     *
     * @return ListPausePolicysResponse ListPausePolicysResponse
     */
    public function listPausePolicys($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPausePolicysWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param ListPostQueryResultRequest $request    ListPostQueryResultRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListPostQueryResultResponse ListPostQueryResultResponse
     */
    public function listPostQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['address'] = $request->address;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPostQueryResult',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPostQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $instanceId
     * @param ListPostQueryResultRequest $request    ListPostQueryResultRequest
     *
     * @return ListPostQueryResultResponse ListPostQueryResultResponse
     */
    public function listPostQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPostQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the query result.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`
     *  *
     * @param string                 $instanceId
     * @param ListQueryResultRequest $request    ListQueryResultRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListQueryResultResponse ListQueryResultResponse
     */
    public function listQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sql)) {
            $query['sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryResult',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/query',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the query result.
     *  *
     * @description ### Method
     * `GET`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`
     *  *
     * @param string                 $instanceId
     * @param ListQueryResultRequest $request    ListQueryResultRequest
     *
     * @return ListQueryResultResponse ListQueryResultResponse
     */
    public function listQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param ListRestQueryResultRequest $request    ListRestQueryResultRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListRestQueryResultResponse ListRestQueryResultResponse
     */
    public function listRestQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['address'] = $request->address;
        }
        $body = [];
        if (!Utils::isUnset($request->indexName)) {
            $body['indexName'] = $request->indexName;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRestQueryResult',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/rest-query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRestQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $instanceId
     * @param ListRestQueryResultRequest $request    ListRestQueryResultRequest
     *
     * @return ListRestQueryResultResponse ListRestQueryResultResponse
     */
    public function listRestQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRestQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 通过数据源配置获取schema信息
     *  *
     * @param string             $instanceId
     * @param ListSchemasRequest $request    ListSchemasRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSchemasResponse ListSchemasResponse
     */
    public function listSchemasWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->accessSecret)) {
            $query['accessSecret'] = $request->accessSecret;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->partition)) {
            $query['partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->project)) {
            $query['project'] = $request->project;
        }
        if (!Utils::isUnset($request->table)) {
            $query['table'] = $request->table;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSchemas',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/schemas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过数据源配置获取schema信息
     *  *
     * @param string             $instanceId
     * @param ListSchemasRequest $request    ListSchemasRequest
     *
     * @return ListSchemasResponse ListSchemasResponse
     */
    public function listSchemas($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSchemasWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取索引generation列表V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTableGenerationsResponse ListTableGenerationsResponse
     */
    public function listTableGenerationsWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListTableGenerations',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/index_versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTableGenerationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取索引generation列表V2
     *  *
     * @param string $instanceId
     * @param string $tableName
     *
     * @return ListTableGenerationsResponse ListTableGenerationsResponse
     */
    public function listTableGenerations($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableGenerationsWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @summary 获取索引列表V2
     *  *
     * @param string            $instanceId
     * @param ListTablesRequest $request    ListTablesRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTablesWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newMode)) {
            $query['newMode'] = $request->newMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTables',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取索引列表V2
     *  *
     * @param string            $instanceId
     * @param ListTablesRequest $request    ListTablesRequest
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTables($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查标签接口
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
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/resource-tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查标签接口
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
     * @summary 获取集群任务列表（数据源+集群）
     *  *
     * @param string           $instanceId
     * @param ListTasksRequest $request    ListTasksRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群任务列表（数据源+集群）
     *  *
     * @param string           $instanceId
     * @param ListTasksRequest $request    ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param ListVectorQueryResultRequest $request    ListVectorQueryResultRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListVectorQueryResultResponse ListVectorQueryResultResponse
     */
    public function listVectorQueryResultWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['address'] = $request->address;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->vectorQueryType)) {
            $query['vectorQueryType'] = $request->vectorQueryType;
        }
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVectorQueryResult',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/vector-query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVectorQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $instanceId
     * @param ListVectorQueryResultRequest $request    ListVectorQueryResultRequest
     *
     * @return ListVectorQueryResultResponse ListVectorQueryResultResponse
     */
    public function listVectorQueryResult($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVectorQueryResultWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $instanceId
     * @param string                     $configName
     * @param ModifyAdvanceConfigRequest $request    ModifyAdvanceConfigRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyAdvanceConfigResponse ModifyAdvanceConfigResponse
     */
    public function modifyAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['contentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->updateTime)) {
            $body['updateTime'] = $request->updateTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAdvanceConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $instanceId
     * @param string                     $configName
     * @param ModifyAdvanceConfigRequest $request    ModifyAdvanceConfigRequest
     *
     * @return ModifyAdvanceConfigResponse ModifyAdvanceConfigResponse
     */
    public function modifyAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the advanced configurations.
     *  *
     * @description ## Method
     *     put
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *  *
     * @param string                         $instanceId
     * @param string                         $configName
     * @param ModifyAdvanceConfigFileRequest $request    ModifyAdvanceConfigFileRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyAdvanceConfigFileResponse ModifyAdvanceConfigFileResponse
     */
    public function modifyAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAdvanceConfigFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/file',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAdvanceConfigFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the advanced configurations.
     *  *
     * @description ## Method
     *     put
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
     *  *
     * @param string                         $instanceId
     * @param string                         $configName
     * @param ModifyAdvanceConfigFileRequest $request    ModifyAdvanceConfigFileRequest
     *
     * @return ModifyAdvanceConfigFileResponse ModifyAdvanceConfigFileResponse
     */
    public function modifyAdvanceConfigFile($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAdvanceConfigFileWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the description of a specified cluster.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`
     *  *
     * @param string                   $instanceId
     * @param string                   $clusterName
     * @param ModifyClusterDescRequest $request     ModifyClusterDescRequest
     * @param string[]                 $headers     map
     * @param RuntimeOptions           $runtime     runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterDescResponse ModifyClusterDescResponse
     */
    public function modifyClusterDescWithOptions($instanceId, $clusterName, $request, $headers, $runtime)
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
            'action'      => 'ModifyClusterDesc',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterName) . '/desc',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterDescResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a specified cluster.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`
     *  *
     * @param string                   $instanceId
     * @param string                   $clusterName
     * @param ModifyClusterDescRequest $request     ModifyClusterDescRequest
     *
     * @return ModifyClusterDescResponse ModifyClusterDescResponse
     */
    public function modifyClusterDesc($instanceId, $clusterName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterDescWithOptions($instanceId, $clusterName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configuration information of a cluster.
     *  *
     * @description ## Request syntax
     *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config
     *  *
     * @param string                            $instanceId
     * @param ModifyClusterOfflineConfigRequest $request    ModifyClusterOfflineConfigRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterOfflineConfigResponse ModifyClusterOfflineConfigResponse
     */
    public function modifyClusterOfflineConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->buildMode)) {
            $body['buildMode'] = $request->buildMode;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $body['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['dataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->dataTimeSec)) {
            $body['dataTimeSec'] = $request->dataTimeSec;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->generation)) {
            $body['generation'] = $request->generation;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->pushMode)) {
            $body['pushMode'] = $request->pushMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterOfflineConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/cluster-offline-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterOfflineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration information of a cluster.
     *  *
     * @description ## Request syntax
     *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config
     *  *
     * @param string                            $instanceId
     * @param ModifyClusterOfflineConfigRequest $request    ModifyClusterOfflineConfigRequest
     *
     * @return ModifyClusterOfflineConfigResponse ModifyClusterOfflineConfigResponse
     */
    public function modifyClusterOfflineConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterOfflineConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the online configurations of a cluster.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/cluster-online-config`
     *  *
     * @param string                           $instanceId
     * @param ModifyClusterOnlineConfigRequest $request    ModifyClusterOnlineConfigRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterOnlineConfigResponse ModifyClusterOnlineConfigResponse
     */
    public function modifyClusterOnlineConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusters)) {
            $body['clusters'] = $request->clusters;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterOnlineConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/cluster-online-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterOnlineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the online configurations of a cluster.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/cluster-online-config`
     *  *
     * @param string                           $instanceId
     * @param ModifyClusterOnlineConfigRequest $request    ModifyClusterOnlineConfigRequest
     *
     * @return ModifyClusterOnlineConfigResponse ModifyClusterOnlineConfigResponse
     */
    public function modifyClusterOnlineConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterOnlineConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改数据源部署信息
     *  *
     * @param string                        $instanceId
     * @param string                        $deployName
     * @param string                        $dataSourceName
     * @param ModifyDataSourceDeployRequest $request        ModifyDataSourceDeployRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return ModifyDataSourceDeployResponse ModifyDataSourceDeployResponse
     */
    public function modifyDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->generationId)) {
            $query['generationId'] = $request->generationId;
        }
        $body = [];
        if (!Utils::isUnset($request->autoBuildIndex)) {
            $body['autoBuildIndex'] = $request->autoBuildIndex;
        }
        if (!Utils::isUnset($request->extend)) {
            $body['extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->processor)) {
            $body['processor'] = $request->processor;
        }
        if (!Utils::isUnset($request->storage)) {
            $body['storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->swift)) {
            $body['swift'] = $request->swift;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataSourceDeploy',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/deploys/' . OpenApiUtilClient::getEncodeParam($deployName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDataSourceDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改数据源部署信息
     *  *
     * @param string                        $instanceId
     * @param string                        $deployName
     * @param string                        $dataSourceName
     * @param ModifyDataSourceDeployRequest $request        ModifyDataSourceDeployRequest
     *
     * @return ModifyDataSourceDeployResponse ModifyDataSourceDeployResponse
     */
    public function modifyDataSourceDeploy($instanceId, $deployName, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceDeployWithOptions($instanceId, $deployName, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a file.
     *  *
     * @description ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *  *
     * @param string            $instanceId
     * @param string            $indexName
     * @param string            $versionName
     * @param ModifyFileRequest $request     ModifyFileRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return ModifyFileResponse ModifyFileResponse
     */
    public function modifyFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyFile',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionName) . '/file',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a file.
     *  *
     * @description ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
     *  *
     * @param string            $instanceId
     * @param string            $indexName
     * @param string            $versionName
     * @param ModifyFileRequest $request     ModifyFileRequest
     *
     * @return ModifyFileResponse ModifyFileResponse
     */
    public function modifyFile($instanceId, $indexName, $versionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFileWithOptions($instanceId, $indexName, $versionName, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param string             $indexName
     * @param ModifyIndexRequest $request    ModifyIndexRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyIndexResponse ModifyIndexResponse
     */
    public function modifyIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->buildParallelNum)) {
            $body['buildParallelNum'] = $request->buildParallelNum;
        }
        if (!Utils::isUnset($request->cluster)) {
            $body['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->clusterConfigName)) {
            $body['clusterConfigName'] = $request->clusterConfigName;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $body['dataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->dataSourceInfo)) {
            $body['dataSourceInfo'] = $request->dataSourceInfo;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->mergeParallelNum)) {
            $body['mergeParallelNum'] = $request->mergeParallelNum;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->pushMode)) {
            $body['pushMode'] = $request->pushMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param string             $indexName
     * @param ModifyIndexRequest $request    ModifyIndexRequest
     *
     * @return ModifyIndexResponse ModifyIndexResponse
     */
    public function modifyIndex($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * @summary 修改索引在线策略
     *  *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param string                           $deployName
     * @param string                           $indexName
     * @param ModifyIndexOnlineStrategyRequest $request        ModifyIndexOnlineStrategyRequest
     * @param string[]                         $headers        map
     * @param RuntimeOptions                   $runtime        runtime options for this request RuntimeOptions
     *
     * @return ModifyIndexOnlineStrategyResponse ModifyIndexOnlineStrategyResponse
     */
    public function modifyIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeRate)) {
            $body['changeRate'] = $request->changeRate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyIndexOnlineStrategy',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/deploys/' . OpenApiUtilClient::getEncodeParam($deployName) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/online-strategy',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyIndexOnlineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改索引在线策略
     *  *
     * @param string                           $instanceId
     * @param string                           $dataSourceName
     * @param string                           $deployName
     * @param string                           $indexName
     * @param ModifyIndexOnlineStrategyRequest $request        ModifyIndexOnlineStrategyRequest
     *
     * @return ModifyIndexOnlineStrategyResponse ModifyIndexOnlineStrategyResponse
     */
    public function modifyIndexOnlineStrategy($instanceId, $dataSourceName, $deployName, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexOnlineStrategyWithOptions($instanceId, $dataSourceName, $deployName, $indexName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the information about index partitions.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/index-partition`
     *  *
     * @param string                      $instanceId
     * @param ModifyIndexPartitionRequest $request    ModifyIndexPartitionRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyIndexPartitionResponse ModifyIndexPartitionResponse
     */
    public function modifyIndexPartitionWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceName)) {
            $body['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->generation)) {
            $body['generation'] = $request->generation;
        }
        if (!Utils::isUnset($request->indexInfos)) {
            $body['indexInfos'] = $request->indexInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyIndexPartition',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/index-partition',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyIndexPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about index partitions.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/index-partition`
     *  *
     * @param string                      $instanceId
     * @param ModifyIndexPartitionRequest $request    ModifyIndexPartitionRequest
     *
     * @return ModifyIndexPartitionResponse ModifyIndexPartitionResponse
     */
    public function modifyIndexPartition($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexPartitionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the index version of a cluster (an index version rollback).
     *  *
     * @description ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *  *
     * @param string                    $instanceId
     * @param string                    $clusterName
     * @param ModifyIndexVersionRequest $request     ModifyIndexVersionRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return ModifyIndexVersionResponse ModifyIndexVersionResponse
     */
    public function modifyIndexVersionWithOptions($instanceId, $clusterName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ModifyIndexVersion',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterName) . '/index-version',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the index version of a cluster (an index version rollback).
     *  *
     * @description ## Method
     *     PUT
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
     *  *
     * @param string                    $instanceId
     * @param string                    $clusterName
     * @param ModifyIndexVersionRequest $request     ModifyIndexVersionRequest
     *
     * @return ModifyIndexVersionResponse ModifyIndexVersionResponse
     */
    public function modifyIndexVersion($instanceId, $clusterName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyIndexVersionWithOptions($instanceId, $clusterName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configurations of a node.
     *  *
     * @description ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     * ```
     *  *
     * @param string                  $instanceId
     * @param ModifyNodeConfigRequest $request    ModifyNodeConfigRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyNodeConfigResponse ModifyNodeConfigResponse
     */
    public function modifyNodeConfigWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterName)) {
            $query['clusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['active'] = $request->active;
        }
        if (!Utils::isUnset($request->dataDuplicateNumber)) {
            $body['dataDuplicateNumber'] = $request->dataDuplicateNumber;
        }
        if (!Utils::isUnset($request->dataFragmentNumber)) {
            $body['dataFragmentNumber'] = $request->dataFragmentNumber;
        }
        if (!Utils::isUnset($request->flowRatio)) {
            $body['flowRatio'] = $request->flowRatio;
        }
        if (!Utils::isUnset($request->minServicePercent)) {
            $body['minServicePercent'] = $request->minServicePercent;
        }
        if (!Utils::isUnset($request->published)) {
            $body['published'] = $request->published;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodeConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/node-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyNodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a node.
     *  *
     * @description ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     * ```
     *  *
     * @param string                  $instanceId
     * @param ModifyNodeConfigRequest $request    ModifyNodeConfigRequest
     *
     * @return ModifyNodeConfigResponse ModifyNodeConfigResponse
     */
    public function modifyNodeConfig($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeConfigWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies online configurations.
     *  *
     * @description ### Method
     * ```java
     * put
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     * ```
     *  *
     * @param string                    $instanceId
     * @param string                    $nodeName
     * @param string                    $indexName
     * @param ModifyOnlineConfigRequest $request    ModifyOnlineConfigRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyOnlineConfigResponse ModifyOnlineConfigResponse
     */
    public function modifyOnlineConfigWithOptions($instanceId, $nodeName, $indexName, $request, $headers, $runtime)
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
            'action'      => 'ModifyOnlineConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/node/' . OpenApiUtilClient::getEncodeParam($nodeName) . '/online-configs/' . OpenApiUtilClient::getEncodeParam($indexName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyOnlineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies online configurations.
     *  *
     * @description ### Method
     * ```java
     * put
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     * ```
     *  *
     * @param string                    $instanceId
     * @param string                    $nodeName
     * @param string                    $indexName
     * @param ModifyOnlineConfigRequest $request    ModifyOnlineConfigRequest
     *
     * @return ModifyOnlineConfigResponse ModifyOnlineConfigResponse
     */
    public function modifyOnlineConfig($instanceId, $nodeName, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOnlineConfigWithOptions($instanceId, $nodeName, $indexName, $request, $headers, $runtime);
    }

    /**
     * @summary 修改实例的密码
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/password`
     *  *
     * @param string                $instanceId
     * @param ModifyPasswordRequest $request    ModifyPasswordRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyPasswordResponse ModifyPasswordResponse
     */
    public function modifyPasswordWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPassword',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/password',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例的密码
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/password`
     *  *
     * @param string                $instanceId
     * @param ModifyPasswordRequest $request    ModifyPasswordRequest
     *
     * @return ModifyPasswordResponse ModifyPasswordResponse
     */
    public function modifyPassword($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPasswordWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param ModifyPausePolicyRequest $request    ModifyPausePolicyRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyPausePolicyResponse ModifyPausePolicyResponse
     */
    public function modifyPausePolicyWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'ModifyPausePolicy',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/pause-policies',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyPausePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param ModifyPausePolicyRequest $request    ModifyPausePolicyRequest
     *
     * @return ModifyPausePolicyResponse ModifyPausePolicyResponse
     */
    public function modifyPausePolicy($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPausePolicyWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改公网域名访问白名单
     *  *
     * @param string                       $instanceId
     * @param ModifyPublicUrlIpListRequest $request    ModifyPublicUrlIpListRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyPublicUrlIpListResponse ModifyPublicUrlIpListResponse
     */
    public function modifyPublicUrlIpListWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'ModifyPublicUrlIpList',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/public-url-ip-list',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyPublicUrlIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改公网域名访问白名单
     *  *
     * @param string                       $instanceId
     * @param ModifyPublicUrlIpListRequest $request    ModifyPublicUrlIpListRequest
     *
     * @return ModifyPublicUrlIpListResponse ModifyPublicUrlIpListResponse
     */
    public function modifyPublicUrlIpList($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyPublicUrlIpListWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改索引V2
     *  *
     * @param string             $instanceId
     * @param string             $tableName
     * @param ModifyTableRequest $request    ModifyTableRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyTableResponse ModifyTableResponse
     */
    public function modifyTableWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->dataProcessConfig)) {
            $body['dataProcessConfig'] = $request->dataProcessConfig;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $body['dataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->fieldSchema)) {
            $body['fieldSchema'] = $request->fieldSchema;
        }
        if (!Utils::isUnset($request->partitionCount)) {
            $body['partitionCount'] = $request->partitionCount;
        }
        if (!Utils::isUnset($request->primaryKey)) {
            $body['primaryKey'] = $request->primaryKey;
        }
        if (!Utils::isUnset($request->rawSchema)) {
            $body['rawSchema'] = $request->rawSchema;
        }
        if (!Utils::isUnset($request->vectorIndex)) {
            $body['vectorIndex'] = $request->vectorIndex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTable',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改索引V2
     *  *
     * @param string             $instanceId
     * @param string             $tableName
     * @param ModifyTableRequest $request    ModifyTableRequest
     *
     * @return ModifyTableResponse ModifyTableResponse
     */
    public function modifyTable($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyTableWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * @summary Publishes a version of advanced configurations.
     *  *
     * @description ## Method
     * ~~~
     * POST
     * ~~~
     * ## URI
     * ~~~
     * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     * ~~~
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param PublishAdvanceConfigRequest $request    PublishAdvanceConfigRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return PublishAdvanceConfigResponse PublishAdvanceConfigResponse
     */
    public function publishAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishAdvanceConfig',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/advanced-configs/' . OpenApiUtilClient::getEncodeParam($configName) . '/actions/publish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishAdvanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a version of advanced configurations.
     *  *
     * @description ## Method
     * ~~~
     * POST
     * ~~~
     * ## URI
     * ~~~
     * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     * ~~~
     *  *
     * @param string                      $instanceId
     * @param string                      $configName
     * @param PublishAdvanceConfigRequest $request    PublishAdvanceConfigRequest
     *
     * @return PublishAdvanceConfigResponse PublishAdvanceConfigResponse
     */
    public function publishAdvanceConfig($instanceId, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishAdvanceConfigWithOptions($instanceId, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Publishes a specified index version.
     *  *
     * @description ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish
     *  *
     * @param string                     $instanceId
     * @param string                     $indexName
     * @param PublishIndexVersionRequest $request    PublishIndexVersionRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return PublishIndexVersionResponse PublishIndexVersionResponse
     */
    public function publishIndexVersionWithOptions($instanceId, $indexName, $request, $headers, $runtime)
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
            'action'      => 'PublishIndexVersion',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/actions/publish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishIndexVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a specified index version.
     *  *
     * @description ## Method
     *     POST
     * ## URI
     *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish
     *  *
     * @param string                     $instanceId
     * @param string                     $indexName
     * @param PublishIndexVersionRequest $request    PublishIndexVersionRequest
     *
     * @return PublishIndexVersionResponse PublishIndexVersionResponse
     */
    public function publishIndexVersion($instanceId, $indexName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishIndexVersionWithOptions($instanceId, $indexName, $request, $headers, $runtime);
    }

    /**
     * @param string               $instanceId
     * @param string               $dataSourceName
     * @param PushDocumentsRequest $request        PushDocumentsRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return PushDocumentsResponse PushDocumentsResponse
     */
    public function pushDocumentsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pkField)) {
            $query['pkField'] = $request->pkField;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PushDocuments',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $instanceId
     * @param string               $dataSourceName
     * @param PushDocumentsRequest $request        PushDocumentsRequest
     *
     * @return PushDocumentsResponse PushDocumentsResponse
     */
    public function pushDocuments($instanceId, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDocumentsWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * @summary Restores data from an index.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/recover-index`
     *  *
     * @param string              $instanceId
     * @param RecoverIndexRequest $request    RecoverIndexRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return RecoverIndexResponse RecoverIndexResponse
     */
    public function recoverIndexWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->buildDeployId)) {
            $body['buildDeployId'] = $request->buildDeployId;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $body['dataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->generation)) {
            $body['generation'] = $request->generation;
        }
        if (!Utils::isUnset($request->indexName)) {
            $body['indexName'] = $request->indexName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecoverIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/recover-index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoverIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restores data from an index.
     *  *
     * @description ### Method
     * `POST`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}/recover-index`
     *  *
     * @param string              $instanceId
     * @param RecoverIndexRequest $request    RecoverIndexRequest
     *
     * @return RecoverIndexResponse RecoverIndexResponse
     */
    public function recoverIndex($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverIndexWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 索引重建V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param ReindexRequest $request    ReindexRequest
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ReindexResponse ReindexResponse
     */
    public function reindexWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataTimeSec)) {
            $body['dataTimeSec'] = $request->dataTimeSec;
        }
        if (!Utils::isUnset($request->ossDataPath)) {
            $body['ossDataPath'] = $request->ossDataPath;
        }
        if (!Utils::isUnset($request->partition)) {
            $body['partition'] = $request->partition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Reindex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/reindex',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReindexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 索引重建V2
     *  *
     * @param string         $instanceId
     * @param string         $tableName
     * @param ReindexRequest $request    ReindexRequest
     *
     * @return ReindexResponse ReindexResponse
     */
    public function reindex($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reindexWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a cluster.
     *  *
     * @description ### Method
     * ```java
     * DELETE
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     * ```
     *  *
     * @param string         $instanceId
     * @param string         $clusterName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return RemoveClusterResponse RemoveClusterResponse
     */
    public function removeClusterWithOptions($instanceId, $clusterName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveCluster',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/clusters/' . OpenApiUtilClient::getEncodeParam($clusterName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a cluster.
     *  *
     * @description ### Method
     * ```java
     * DELETE
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     * ```
     *  *
     * @param string $instanceId
     * @param string $clusterName
     *
     * @return RemoveClusterResponse RemoveClusterResponse
     */
    public function removeCluster($instanceId, $clusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeClusterWithOptions($instanceId, $clusterName, $headers, $runtime);
    }

    /**
     * @param string              $instanceId
     * @param string              $database
     * @param string              $folderId
     * @param RenameFolderRequest $request    RenameFolderRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return RenameFolderResponse RenameFolderResponse
     */
    public function renameFolderWithOptions($instanceId, $database, $folderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameFolder',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/folders/' . OpenApiUtilClient::getEncodeParam($folderId) . '/name',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenameFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $instanceId
     * @param string              $database
     * @param string              $folderId
     * @param RenameFolderRequest $request    RenameFolderRequest
     *
     * @return RenameFolderResponse RenameFolderResponse
     */
    public function renameFolder($instanceId, $database, $folderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameFolderWithOptions($instanceId, $database, $folderId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StartIndexResponse StartIndexResponse
     */
    public function startIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/startIndex',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $indexName
     *
     * @return StartIndexResponse StartIndexResponse
     */
    public function startIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $indexName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopIndexResponse StopIndexResponse
     */
    public function stopIndexWithOptions($instanceId, $indexName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopIndex',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/indexes/' . OpenApiUtilClient::getEncodeParam($indexName) . '/stopIndex',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $indexName
     *
     * @return StopIndexResponse StopIndexResponse
     */
    public function stopIndex($instanceId, $indexName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopIndexWithOptions($instanceId, $indexName, $headers, $runtime);
    }

    /**
     * @summary Stops an FSM task.
     *  *
     * @description ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     * ```
     *  *
     * @param string         $instanceId
     * @param string         $fsmId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTaskWithOptions($instanceId, $fsmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopTask',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/stop-task/' . OpenApiUtilClient::getEncodeParam($fsmId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops an FSM task.
     *  *
     * @description ### Method
     * ```java
     * PUT
     * ```
     * ### URI
     * ```java
     * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     * ```
     *  *
     * @param string $instanceId
     * @param string $fsmId
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTask($instanceId, $fsmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTaskWithOptions($instanceId, $fsmId, $headers, $runtime);
    }

    /**
     * @summary 打标签接口
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
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/resource-tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标签接口
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
     * @summary 删标签接口
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
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/resource-tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删标签接口
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
     * @summary Modifies the configuration of a specified instance.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->components)) {
            $body['components'] = $request->components;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->orderType)) {
            $body['orderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a specified instance.
     *  *
     * @description ### Method
     * `PUT`
     * ### URI
     * `/openapi/ha3/instances/{instanceId}`
     *  *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $instanceId
     * @param string                          $database
     * @param string                          $sqlInstanceId
     * @param UpdateSqlInstanceContentRequest $request       UpdateSqlInstanceContentRequest
     * @param string[]                        $headers       map
     * @param RuntimeOptions                  $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateSqlInstanceContentResponse UpdateSqlInstanceContentResponse
     */
    public function updateSqlInstanceContentWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSqlInstanceContent',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '/content',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSqlInstanceContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $instanceId
     * @param string                          $database
     * @param string                          $sqlInstanceId
     * @param UpdateSqlInstanceContentRequest $request       UpdateSqlInstanceContentRequest
     *
     * @return UpdateSqlInstanceContentResponse UpdateSqlInstanceContentResponse
     */
    public function updateSqlInstanceContent($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceContentWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $instanceId
     * @param string                       $database
     * @param string                       $sqlInstanceId
     * @param UpdateSqlInstanceNameRequest $request       UpdateSqlInstanceNameRequest
     * @param string[]                     $headers       map
     * @param RuntimeOptions               $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateSqlInstanceNameResponse UpdateSqlInstanceNameResponse
     */
    public function updateSqlInstanceNameWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSqlInstanceName',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '/name',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSqlInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $instanceId
     * @param string                       $database
     * @param string                       $sqlInstanceId
     * @param UpdateSqlInstanceNameRequest $request       UpdateSqlInstanceNameRequest
     *
     * @return UpdateSqlInstanceNameResponse UpdateSqlInstanceNameResponse
     */
    public function updateSqlInstanceName($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceNameWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param string                         $database
     * @param string                         $sqlInstanceId
     * @param UpdateSqlInstanceParamsRequest $request       UpdateSqlInstanceParamsRequest
     * @param string[]                       $headers       map
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateSqlInstanceParamsResponse UpdateSqlInstanceParamsResponse
     */
    public function updateSqlInstanceParamsWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->combineParam)) {
            $body['combineParam'] = $request->combineParam;
        }
        if (!Utils::isUnset($request->dynamicParam)) {
            $body['dynamicParam'] = $request->dynamicParam;
        }
        if (!Utils::isUnset($request->kvpair)) {
            $body['kvpair'] = $request->kvpair;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->staticParam)) {
            $body['staticParam'] = $request->staticParam;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSqlInstanceParams',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/sql-studio/databases/' . OpenApiUtilClient::getEncodeParam($database) . '/sql-instances/' . OpenApiUtilClient::getEncodeParam($sqlInstanceId) . '/params',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSqlInstanceParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $instanceId
     * @param string                         $database
     * @param string                         $sqlInstanceId
     * @param UpdateSqlInstanceParamsRequest $request       UpdateSqlInstanceParamsRequest
     *
     * @return UpdateSqlInstanceParamsResponse UpdateSqlInstanceParamsResponse
     */
    public function updateSqlInstanceParams($instanceId, $database, $sqlInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceParamsWithOptions($instanceId, $database, $sqlInstanceId, $request, $headers, $runtime);
    }
}

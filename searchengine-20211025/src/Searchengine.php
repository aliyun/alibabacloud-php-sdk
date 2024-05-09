<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\BuildIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DeleteTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ForceSwitchResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableGenerationResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigDirRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigDirResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterNamesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListQueryResultRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListQueryResultResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTableGenerationsResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTablesRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTablesResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterDescRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterDescResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOfflineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOfflineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOnlineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyClusterOnlineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyFileRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyFileResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyNodeConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyNodeConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyOnlineConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyOnlineConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPasswordRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyPasswordResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishIndexVersionRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishIndexVersionResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RecoverIndexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RecoverIndexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ReindexRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ReindexResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\RemoveClusterResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\StopTaskResponse;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceResponse;
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
     * ## Method
     *   *     POST
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/actions/build-index.
     *   *
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
     * ## Method
     *   *     POST
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/actions/build-index.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/clusters`.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/clusters`.
     *   *
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
     * @param string                  $instanceId
     * @param CreateDataSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
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
     * ### Method
     *   * ```java
     *   * POST
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/indexes
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * POST
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/indexes
     *   * ```.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/api/instances?dryRun=false`.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/api/instances?dryRun=false`.
     *   *
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
     * @param string             $instanceId
     * @param CreateTableRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}.
     *   *
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}.
     *   *
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
     * ## Method
     *   * `DELETE`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
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
     * ## Method
     *   * `DELETE`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx.
     *   *
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx.
     *   *
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}.
     *   *
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
     * ## Method
     *   *     DELETE
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}.
     *   *
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
     * ### Method
     *   * `DELETE`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
     * ### Method
     *   * `DELETE`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
     * \\### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     *   * ```.
     *   *
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
     * \\### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
     *   * ```.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`.
     *   *
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
     * ### Method
     *   * GET
     *   * ### URI
     *   * /openapi/ha3/instances/{instanceId}/cluster-run-time-info.
     *   *
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
     * ### Method
     *   * GET
     *   * ### URI
     *   * /openapi/ha3/instances/{instanceId}/cluster-run-time-info.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
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
     * ## Method
     *   * GET
     *   * ## URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/deploy-graph
     *   * ```.
     *   *
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
     * ## Method
     *   * GET
     *   * ## URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/deploy-graph
     *   * ```.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
     * @param string               $instanceId
     * @param GetNodeConfigRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetNodeConfigResponse
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`.
     *   *
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`.
     *   *
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
     * ## Sample requests
     *   * `GET /openapi/ha3/instances/ose-test1/advanced-configs`.
     *   *
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
     * ## Sample requests
     *   * `GET /openapi/ha3/instances/ose-test1/advanced-configs`.
     *   *
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
     * ### Method
     *   * GET
     *   * ### URI
     *   * /openapi/ha3/instances/{instanceId}/cluster-names.
     *   *
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
     * ### Method
     *   * GET
     *   * ### URI
     *   * /openapi/ha3/instances/{instanceId}/cluster-names.
     *   *
     * @return ListClusterNamesResponse ListClusterNamesResponse
     */
    public function listClusterNames()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNamesWithOptions($headers, $runtime);
    }

    /**
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/cluster-tasks
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/cluster-tasks
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/clusters
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/clusters
     *   * ```.
     *   *
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`.
     *   *
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/data-source-tasks
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/data-source-tasks
     *   * ```.
     *   *
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources`.
     *   *
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
     * ## Method
     *   * `GET`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes.
     *   *
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
     * ## Method
     *   *     GET
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/specs?type=qrs`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/[code]/instances`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/[code]/instances`.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * GET
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}
     *   * ```.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`.
     *   *
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
     * ### Method
     *   * `GET`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/query?query=xxxx`.
     *   *
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
     * @param string            $instanceId
     * @param ListTablesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
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
     * ## Method
     *   *     put
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}.
     *   *
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
     * ## Method
     *   *     put
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`.
     *   *
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
     * ## Request syntax
     *   *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config.
     *   *
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
     * ## Request syntax
     *   *     PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/cluster-online-config`.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/cluster-online-config`.
     *   *
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
     * ## Method
     *   * `PUT`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
     * @param string                  $instanceId
     * @param string                  $dataSourceName
     * @param ModifyDataSourceRequest $request        ModifyDataSourceRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
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
            'action'      => 'ModifyDataSource',
            'version'     => '2021-10-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ha3/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/data-sources/' . OpenApiUtilClient::getEncodeParam($dataSourceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Method
     *   * `PUT`
     *   * ## URI
     *   * `/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`.
     *   *
     * @param string                  $instanceId
     * @param string                  $dataSourceName
     * @param ModifyDataSourceRequest $request        ModifyDataSourceRequest
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSource($instanceId, $dataSourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceWithOptions($instanceId, $dataSourceName, $request, $headers, $runtime);
    }

    /**
     * ## Method
     *   *     PUT
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt.
     *   *
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
     * ## Method
     *   *     PUT
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/index-partition`.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/index-partition`.
     *   *
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
     * ## Method
     *   *     PUT
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version.
     *   *
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
     * ## Method
     *   *     PUT
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version.
     *   *
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
     * ### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * put
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * put
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
     *   * ```.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/password`.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/password`.
     *   *
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
     * ## Method
     *   * ~~~
     *   * POST
     *   * ~~~
     *   * ## URI
     *   * ~~~
     *   * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     *   * ~~~.
     *   *
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
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
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
     * ## Method
     *   * ~~~
     *   * POST
     *   * ~~~
     *   * ## URI
     *   * ~~~
     *   * /openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish
     *   * ~~~.
     *   *
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
     * ## Method
     *   *     POST
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish.
     *   *
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
     * ## Method
     *   *     POST
     *   * ## URI
     *   *     /openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/recover-index`.
     *   *
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
     * ### Method
     *   * `POST`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}/recover-index`.
     *   *
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
     * ### Method
     *   * ```java
     *   * DELETE
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * DELETE
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/clusters/{clusterName}
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     *   * ```.
     *   *
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
     * ### Method
     *   * ```java
     *   * PUT
     *   * ```
     *   * ### URI
     *   * ```java
     *   * /openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
     *   * ```.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
     * ### Method
     *   * `PUT`
     *   * ### URI
     *   * `/openapi/ha3/instances/{instanceId}`.
     *   *
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
}

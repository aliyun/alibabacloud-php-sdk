<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Igraph\V20210621\Models\CreateGraphRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\CreateGraphResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\CreateGraphSchemaRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\CreateGraphSchemaResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\DeleteGraphRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\DeleteGraphResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetGraphRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetGraphResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetGraphSchemaRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetGraphSchemaResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetIgraphLabelBackFlowResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetIgraphLabelLastBackflowResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetIgraphTableDetailResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetIgraphTablesBackFlowRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetIgraphTablesBackFlowResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetInstanceDigestRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetInstanceDigestResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetTableDetailResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetTableLastBackflowRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\GetTableLastBackflowResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListDemoGraphSchemasResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListGraphSchemasRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListGraphSchemasResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListIgraphInstancesRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListIgraphInstancesResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListIgraphInstancesShrinkRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListInstanceGraphRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\ListInstanceGraphResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\PublishGraphSchemaRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\PublishGraphSchemaResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\SearchIgraphDemoResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\TriggerLabelBackflowRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\TriggerLabelBackflowResponse;
use AlibabaCloud\SDK\Igraph\V20210621\Models\UpdateGraphDescriptionRequest;
use AlibabaCloud\SDK\Igraph\V20210621\Models\UpdateGraphDescriptionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Igraph extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('igraph', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string             $instanceId
     * @param string             $graphName
     * @param CreateGraphRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGraphResponse
     */
    public function createGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateGraph',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param string             $graphName
     * @param CreateGraphRequest $request
     *
     * @return CreateGraphResponse
     */
    public function createGraph($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param string                   $graphName
     * @param CreateGraphSchemaRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateGraphSchemaResponse
     */
    public function createGraphSchemaWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateGraphSchema',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/schemas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGraphSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param string                   $graphName
     * @param CreateGraphSchemaRequest $request
     *
     * @return CreateGraphSchemaResponse
     */
    public function createGraphSchema($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGraphSchemaWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param string             $graphName
     * @param DeleteGraphRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGraphResponse
     */
    public function deleteGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGraph',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param string             $graphName
     * @param DeleteGraphRequest $request
     *
     * @return DeleteGraphResponse
     */
    public function deleteGraph($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param string          $instanceId
     * @param string          $graphName
     * @param GetGraphRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetGraphResponse
     */
    public function getGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGraph',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $instanceId
     * @param string          $graphName
     * @param GetGraphRequest $request
     *
     * @return GetGraphResponse
     */
    public function getGraph($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGraphWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param string                $instanceId
     * @param string                $graphName
     * @param string                $graphSchemaName
     * @param GetGraphSchemaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetGraphSchemaResponse
     */
    public function getGraphSchemaWithOptions($instanceId, $graphName, $graphSchemaName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGraphSchema',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/schemas/' . OpenApiUtilClient::getEncodeParam($graphSchemaName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGraphSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $instanceId
     * @param string                $graphName
     * @param string                $graphSchemaName
     * @param GetGraphSchemaRequest $request
     *
     * @return GetGraphSchemaResponse
     */
    public function getGraphSchema($instanceId, $graphName, $graphSchemaName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGraphSchemaWithOptions($instanceId, $graphName, $graphSchemaName, $request, $headers, $runtime);
    }

    /**
     * @param string         $graphName
     * @param string         $instanceId
     * @param string         $labelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIgraphLabelBackFlowResponse
     */
    public function getIgraphLabelBackFlowWithOptions($graphName, $instanceId, $labelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIgraphLabelBackFlow',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/label/' . OpenApiUtilClient::getEncodeParam($labelName) . '/backflow',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIgraphLabelBackFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $graphName
     * @param string $instanceId
     * @param string $labelName
     *
     * @return GetIgraphLabelBackFlowResponse
     */
    public function getIgraphLabelBackFlow($graphName, $instanceId, $labelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIgraphLabelBackFlowWithOptions($graphName, $instanceId, $labelName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $graphName
     * @param string         $labelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIgraphLabelLastBackflowResponse
     */
    public function getIgraphLabelLastBackflowWithOptions($instanceId, $graphName, $labelName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIgraphLabelLastBackflow',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/label/' . OpenApiUtilClient::getEncodeParam($labelName) . '/backflow/last',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIgraphLabelLastBackflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $graphName
     * @param string $labelName
     *
     * @return GetIgraphLabelLastBackflowResponse
     */
    public function getIgraphLabelLastBackflow($instanceId, $graphName, $labelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIgraphLabelLastBackflowWithOptions($instanceId, $graphName, $labelName, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $graphName
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIgraphTableDetailResponse
     */
    public function getIgraphTableDetailWithOptions($instanceId, $graphName, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIgraphTableDetail',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIgraphTableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $graphName
     * @param string $tableName
     *
     * @return GetIgraphTableDetailResponse
     */
    public function getIgraphTableDetail($instanceId, $graphName, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIgraphTableDetailWithOptions($instanceId, $graphName, $tableName, $headers, $runtime);
    }

    /**
     * @param string                         $instanceId
     * @param string                         $graphName
     * @param GetIgraphTablesBackFlowRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetIgraphTablesBackFlowResponse
     */
    public function getIgraphTablesBackFlowWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIgraphTablesBackFlow',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/backflows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIgraphTablesBackFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $instanceId
     * @param string                         $graphName
     * @param GetIgraphTablesBackFlowRequest $request
     *
     * @return GetIgraphTablesBackFlowResponse
     */
    public function getIgraphTablesBackFlow($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIgraphTablesBackFlowWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param GetInstanceDigestRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetInstanceDigestResponse
     */
    public function getInstanceDigestWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceDigest',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/digest',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceDigestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param GetInstanceDigestRequest $request
     *
     * @return GetInstanceDigestResponse
     */
    public function getInstanceDigest($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceDigestWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param string         $tableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableDetailResponse
     */
    public function getTableDetailWithOptions($instanceId, $tableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTableDetail',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $instanceId
     * @param string $tableName
     *
     * @return GetTableDetailResponse
     */
    public function getTableDetail($instanceId, $tableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableDetailWithOptions($instanceId, $tableName, $headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param string                      $tableName
     * @param GetTableLastBackflowRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetTableLastBackflowResponse
     */
    public function getTableLastBackflowWithOptions($instanceId, $tableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->partition)) {
            $query['partition'] = $request->partition;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableLastBackflow',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/table/' . OpenApiUtilClient::getEncodeParam($tableName) . '/backflow/last',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableLastBackflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $instanceId
     * @param string                      $tableName
     * @param GetTableLastBackflowRequest $request
     *
     * @return GetTableLastBackflowResponse
     */
    public function getTableLastBackflow($instanceId, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableLastBackflowWithOptions($instanceId, $tableName, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDemoGraphSchemasResponse
     */
    public function listDemoGraphSchemasWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDemoGraphSchemas',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/demo/schemas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDemoGraphSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListDemoGraphSchemasResponse
     */
    public function listDemoGraphSchemas()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDemoGraphSchemasWithOptions($headers, $runtime);
    }

    /**
     * @param string                  $instanceId
     * @param string                  $graphName
     * @param ListGraphSchemasRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListGraphSchemasResponse
     */
    public function listGraphSchemasWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageLimit)) {
            $query['pageLimit'] = $request->pageLimit;
        }
        if (!Utils::isUnset($request->pageStart)) {
            $query['pageStart'] = $request->pageStart;
        }
        if (!Utils::isUnset($request->returnSpec)) {
            $query['returnSpec'] = $request->returnSpec;
        }
        if (!Utils::isUnset($request->schemaStatus)) {
            $query['schemaStatus'] = $request->schemaStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGraphSchemas',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/schemas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGraphSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $instanceId
     * @param string                  $graphName
     * @param ListGraphSchemasRequest $request
     *
     * @return ListGraphSchemasResponse
     */
    public function listGraphSchemas($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGraphSchemasWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }

    /**
     * @param ListIgraphInstancesRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListIgraphInstancesResponse
     */
    public function listIgraphInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListIgraphInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pageContinue)) {
            $query['pageContinue'] = $request->pageContinue;
        }
        if (!Utils::isUnset($request->pageLimit)) {
            $query['pageLimit'] = $request->pageLimit;
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
            'action'      => 'ListIgraphInstances',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIgraphInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIgraphInstancesRequest $request
     *
     * @return ListIgraphInstancesResponse
     */
    public function listIgraphInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIgraphInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param ListInstanceGraphRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceGraphResponse
     */
    public function listInstanceGraphWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceGraph',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $instanceId
     * @param ListInstanceGraphRequest $request
     *
     * @return ListInstanceGraphResponse
     */
    public function listInstanceGraph($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceGraphWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $instanceId
     * @param string                    $graphName
     * @param string                    $graphSchemaName
     * @param PublishGraphSchemaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PublishGraphSchemaResponse
     */
    public function publishGraphSchemaWithOptions($instanceId, $graphName, $graphSchemaName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishGraphSchema',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/schemas/' . OpenApiUtilClient::getEncodeParam($graphSchemaName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishGraphSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $instanceId
     * @param string                    $graphName
     * @param string                    $graphSchemaName
     * @param PublishGraphSchemaRequest $request
     *
     * @return PublishGraphSchemaResponse
     */
    public function publishGraphSchema($instanceId, $graphName, $graphSchemaName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishGraphSchemaWithOptions($instanceId, $graphName, $graphSchemaName, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SearchIgraphDemoResponse
     */
    public function searchIgraphDemoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SearchIgraphDemo',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/tool/actions/search_demo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchIgraphDemoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return SearchIgraphDemoResponse
     */
    public function searchIgraphDemo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchIgraphDemoWithOptions($headers, $runtime);
    }

    /**
     * @param string                      $instanceId
     * @param string                      $graphName
     * @param string                      $labelName
     * @param TriggerLabelBackflowRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TriggerLabelBackflowResponse
     */
    public function triggerLabelBackflowWithOptions($instanceId, $graphName, $labelName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->odpsPartition)) {
            $query['odpsPartition'] = $request->odpsPartition;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerLabelBackflow',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/label/' . OpenApiUtilClient::getEncodeParam($labelName) . '/backflow',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TriggerLabelBackflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $instanceId
     * @param string                      $graphName
     * @param string                      $labelName
     * @param TriggerLabelBackflowRequest $request
     *
     * @return TriggerLabelBackflowResponse
     */
    public function triggerLabelBackflow($instanceId, $graphName, $labelName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerLabelBackflowWithOptions($instanceId, $graphName, $labelName, $request, $headers, $runtime);
    }

    /**
     * @param string                        $instanceId
     * @param string                        $graphName
     * @param UpdateGraphDescriptionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGraphDescriptionResponse
     */
    public function updateGraphDescriptionWithOptions($instanceId, $graphName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGraphDescription',
            'version'     => '2021-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/igraph/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/graphs/' . OpenApiUtilClient::getEncodeParam($graphName) . '/description',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGraphDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $instanceId
     * @param string                        $graphName
     * @param UpdateGraphDescriptionRequest $request
     *
     * @return UpdateGraphDescriptionResponse
     */
    public function updateGraphDescription($instanceId, $graphName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGraphDescriptionWithOptions($instanceId, $graphName, $request, $headers, $runtime);
    }
}

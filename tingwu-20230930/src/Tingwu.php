<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Tingwu extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tingwu', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operation)) {
            $query['operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/tasks',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskInfoResponse
     */
    public function getTaskInfoWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskInfo',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $TaskId
     *
     * @return GetTaskInfoResponse
     */
    public function getTaskInfo($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskInfoWithOptions($TaskId, $headers, $runtime);
    }
}

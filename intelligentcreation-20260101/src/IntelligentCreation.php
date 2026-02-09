<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20260101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\IntelligentCreation\V20260101\Models\CheckTuringTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20260101\Models\CheckTuringTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20260101\Models\SubmitTuringTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20260101\Models\SubmitTuringTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IntelligentCreation extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('intelligentcreation', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 检查Turing任务
     *
     * @param request - CheckTuringTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckTuringTaskResponse
     *
     * @param CheckTuringTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CheckTuringTaskResponse
     */
    public function checkTuringTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckTuringTask',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/aigc-turing/openService/v1/task/checkTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckTuringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查Turing任务
     *
     * @param request - CheckTuringTaskRequest
     *
     * @returns CheckTuringTaskResponse
     *
     * @param CheckTuringTaskRequest $request
     *
     * @return CheckTuringTaskResponse
     */
    public function checkTuringTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkTuringTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 任务提交接口.
     *
     * @param request - SubmitTuringTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTuringTaskResponse
     *
     * @param SubmitTuringTaskRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitTuringTaskResponse
     */
    public function submitTuringTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->idempotentKey) {
            @$body['idempotentKey'] = $request->idempotentKey;
        }

        if (null !== $request->imgUrl) {
            @$body['imgUrl'] = $request->imgUrl;
        }

        if (null !== $request->resolution) {
            @$body['resolution'] = $request->resolution;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitTuringTask',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/aigc-turing/openService/v1/task/submitTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitTuringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务提交接口.
     *
     * @param request - SubmitTuringTaskRequest
     *
     * @returns SubmitTuringTaskResponse
     *
     * @param SubmitTuringTaskRequest $request
     *
     * @return SubmitTuringTaskResponse
     */
    public function submitTuringTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTuringTaskWithOptions($request, $headers, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260810;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OssAgent\V20260810\Models\A2aRequest;
use AlibabaCloud\SDK\OssAgent\V20260810\Models\A2aResponse;
use AlibabaCloud\SDK\OssAgent\V20260810\Models\AgentCardRequest;
use AlibabaCloud\SDK\OssAgent\V20260810\Models\AgentCardResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OssAgent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ossagent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * A2A接口.
     *
     * @param request - A2aRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns A2aResponse
     *
     * @param A2aRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return A2aResponse
     */
    public function a2aWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->method) {
            @$body['method'] = $request->method;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'a2a',
            'version' => '2026-08-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield A2aResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * A2A接口.
     *
     * @param request - A2aRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns A2aResponse
     *
     * @param A2aRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return A2aResponse
     */
    public function a2aWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->method) {
            @$body['method'] = $request->method;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'a2a',
            'version' => '2026-08-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);

        return A2aResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A2A接口.
     *
     * @param request - A2aRequest
     *
     * @returns A2aResponse
     *
     * @param A2aRequest $request
     *
     * @return A2aResponse
     */
    public function a2a($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->a2aWithOptions($request, $runtime);
    }

    /**
     * 获取Agent_Card.
     *
     * @param request - AgentCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AgentCardResponse
     *
     * @param AgentCardRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AgentCardResponse
     */
    public function agent_cardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'agent_card',
            'version' => '2026-08-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'any',
        ]);

        return AgentCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Agent_Card.
     *
     * @param request - AgentCardRequest
     *
     * @returns AgentCardResponse
     *
     * @param AgentCardRequest $request
     *
     * @return AgentCardResponse
     */
    public function agent_card($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->agent_cardWithOptions($request, $runtime);
    }
}

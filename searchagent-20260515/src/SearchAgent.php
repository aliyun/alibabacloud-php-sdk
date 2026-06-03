<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SearchAgent\V20260515;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SearchAgent\V20260515\Models\ExecuteAcpCommandRequest;
use AlibabaCloud\SDK\SearchAgent\V20260515\Models\ExecuteAcpCommandResponse;
use AlibabaCloud\SDK\SearchAgent\V20260515\Models\GenerateAcpCompletionRequest;
use AlibabaCloud\SDK\SearchAgent\V20260515\Models\GenerateAcpCompletionResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SearchAgent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'SearchAgent';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = '';
    }

    /**
     * search agent acp 接口.
     *
     * @param request - ExecuteAcpCommandRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAcpCommandResponse
     *
     * @param string                   $workspaceName
     * @param ExecuteAcpCommandRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteAcpCommandResponse
     */
    public function executeAcpCommandWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

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
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAcpCommand',
            'version' => '2026-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/agent/acp',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteAcpCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * search agent acp 接口.
     *
     * @param request - ExecuteAcpCommandRequest
     *
     * @returns ExecuteAcpCommandResponse
     *
     * @param string                   $workspaceName
     * @param ExecuteAcpCommandRequest $request
     *
     * @return ExecuteAcpCommandResponse
     */
    public function executeAcpCommand($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAcpCommandWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * 生成 acp stream.
     *
     * @param request - GenerateAcpCompletionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAcpCompletionResponse
     *
     * @param string                       $workspaceName
     * @param GenerateAcpCompletionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateAcpCompletionResponse
     */
    public function generateAcpCompletionWithSSE($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

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
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateAcpCompletion',
            'version' => '2026-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/agent/acp',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield GenerateAcpCompletionResponse::fromMap([
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
     * 生成 acp stream.
     *
     * @param request - GenerateAcpCompletionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAcpCompletionResponse
     *
     * @param string                       $workspaceName
     * @param GenerateAcpCompletionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateAcpCompletionResponse
     */
    public function generateAcpCompletionWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

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
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateAcpCompletion',
            'version' => '2026-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/agent/acp',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return GenerateAcpCompletionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 生成 acp stream.
     *
     * @param request - GenerateAcpCompletionRequest
     *
     * @returns GenerateAcpCompletionResponse
     *
     * @param string                       $workspaceName
     * @param GenerateAcpCompletionRequest $request
     *
     * @return GenerateAcpCompletionResponse
     */
    public function generateAcpCompletion($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateAcpCompletionWithOptions($workspaceName, $request, $headers, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateBrowserRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCodeInterpreterRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryEventRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryEventResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryEventRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryEventResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemorySessionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemorySessionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimeEndpointsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimeEndpointsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimeVersionsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListAgentRuntimeVersionsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListBrowsersRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListBrowsersResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCodeInterpretersRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCodeInterpretersResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryEventRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryEventResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemorySessionsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemorySessionsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\RetrieveMemoryRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\RetrieveMemoryResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateMemoryResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentRun extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentrun', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Create an agent runtime.
     *
     * @remarks
     * 创建一个新的智能体运行时实例，用于执行AI代理任务。智能体运行时是AgentRun服务的核心组件，提供代码执行、浏览器操作、内存管理等能力。
     *
     * @param request - CreateAgentRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentRuntimeResponse
     *
     * @param CreateAgentRuntimeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgentRuntimeResponse
     */
    public function createAgentRuntimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentRuntime',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an agent runtime.
     *
     * @remarks
     * 创建一个新的智能体运行时实例，用于执行AI代理任务。智能体运行时是AgentRun服务的核心组件，提供代码执行、浏览器操作、内存管理等能力。
     *
     * @param request - CreateAgentRuntimeRequest
     *
     * @returns CreateAgentRuntimeResponse
     *
     * @param CreateAgentRuntimeRequest $request
     *
     * @return CreateAgentRuntimeResponse
     */
    public function createAgentRuntime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentRuntimeWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建智能体运行时端点.
     *
     * @remarks
     * 为指定的智能体运行时创建新的端点，用于外部访问和调用。端点是智能体运行时对外提供服务的入口。
     *
     * @param request - CreateAgentRuntimeEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param CreateAgentRuntimeEndpointRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAgentRuntimeEndpointResponse
     */
    public function createAgentRuntimeEndpointWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentRuntimeEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/endpoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentRuntimeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建智能体运行时端点.
     *
     * @remarks
     * 为指定的智能体运行时创建新的端点，用于外部访问和调用。端点是智能体运行时对外提供服务的入口。
     *
     * @param request - CreateAgentRuntimeEndpointRequest
     *
     * @returns CreateAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param CreateAgentRuntimeEndpointRequest $request
     *
     * @return CreateAgentRuntimeEndpointResponse
     */
    public function createAgentRuntimeEndpoint($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentRuntimeEndpointWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * 创建浏览器实例.
     *
     * @remarks
     * 创建一个新的浏览器实例，用于执行网页自动化任务。浏览器实例提供网页浏览、元素操作、截图录制等功能。
     *
     * @param request - CreateBrowserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBrowserResponse
     *
     * @param CreateBrowserRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBrowserResponse
     */
    public function createBrowserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateBrowser',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/browsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBrowserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建浏览器实例.
     *
     * @remarks
     * 创建一个新的浏览器实例，用于执行网页自动化任务。浏览器实例提供网页浏览、元素操作、截图录制等功能。
     *
     * @param request - CreateBrowserRequest
     *
     * @returns CreateBrowserResponse
     *
     * @param CreateBrowserRequest $request
     *
     * @return CreateBrowserResponse
     */
    public function createBrowser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBrowserWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建代码解释器.
     *
     * @remarks
     * 创建一个新的代码解释器实例，用于执行代码解释和运行任务。代码解释器提供Python代码执行、数据处理、机器学习等功能。
     *
     * @param request - CreateCodeInterpreterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCodeInterpreterResponse
     *
     * @param CreateCodeInterpreterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCodeInterpreterResponse
     */
    public function createCodeInterpreterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateCodeInterpreter',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/code-interpreters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCodeInterpreterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建代码解释器.
     *
     * @remarks
     * 创建一个新的代码解释器实例，用于执行代码解释和运行任务。代码解释器提供Python代码执行、数据处理、机器学习等功能。
     *
     * @param request - CreateCodeInterpreterRequest
     *
     * @returns CreateCodeInterpreterResponse
     *
     * @param CreateCodeInterpreterRequest $request
     *
     * @return CreateCodeInterpreterResponse
     */
    public function createCodeInterpreter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeInterpreterWithOptions($request, $headers, $runtime);
    }

    /**
     * create memory store.
     *
     * @param request - CreateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryResponse
     *
     * @param CreateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemoryResponse
     */
    public function createMemoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->longTtl) {
            @$body['longTtl'] = $request->longTtl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->shortTtl) {
            @$body['shortTtl'] = $request->shortTtl;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * create memory store.
     *
     * @param request - CreateMemoryRequest
     *
     * @returns CreateMemoryResponse
     *
     * @param CreateMemoryRequest $request
     *
     * @return CreateMemoryResponse
     */
    public function createMemory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryWithOptions($request, $headers, $runtime);
    }

    /**
     * create event.
     *
     * @param request - CreateMemoryEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryEventResponse
     *
     * @param string                   $memoryName
     * @param CreateMemoryEventRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMemoryEventResponse
     */
    public function createMemoryEventWithOptions($memoryName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->events) {
            @$body['events'] = $request->events;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryEvent',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/events',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * create event.
     *
     * @param request - CreateMemoryEventRequest
     *
     * @returns CreateMemoryEventResponse
     *
     * @param string                   $memoryName
     * @param CreateMemoryEventRequest $request
     *
     * @return CreateMemoryEventResponse
     */
    public function createMemoryEvent($memoryName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryEventWithOptions($memoryName, $request, $headers, $runtime);
    }

    /**
     * 删除智能体运行时.
     *
     * @remarks
     * 删除指定的智能体运行时实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentRuntimeResponse
     *
     * @param string         $agentRuntimeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAgentRuntimeResponse
     */
    public function deleteAgentRuntimeWithOptions($agentRuntimeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgentRuntime',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除智能体运行时.
     *
     * @remarks
     * 删除指定的智能体运行时实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @returns DeleteAgentRuntimeResponse
     *
     * @param string $agentRuntimeId
     *
     * @return DeleteAgentRuntimeResponse
     */
    public function deleteAgentRuntime($agentRuntimeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentRuntimeWithOptions($agentRuntimeId, $headers, $runtime);
    }

    /**
     * Delete an agent runtime endpoint.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentRuntimeEndpointResponse
     *
     * @param string         $agentRuntimeId
     * @param string         $agentRuntimeEndpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAgentRuntimeEndpointResponse
     */
    public function deleteAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgentRuntimeEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/endpoints/' . Url::percentEncode($agentRuntimeEndpointId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentRuntimeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete an agent runtime endpoint.
     *
     * @returns DeleteAgentRuntimeEndpointResponse
     *
     * @param string $agentRuntimeId
     * @param string $agentRuntimeEndpointId
     *
     * @return DeleteAgentRuntimeEndpointResponse
     */
    public function deleteAgentRuntimeEndpoint($agentRuntimeId, $agentRuntimeEndpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $headers, $runtime);
    }

    /**
     * 删除浏览器实例.
     *
     * @remarks
     * 删除指定的浏览器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBrowserResponse
     *
     * @param string         $browserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBrowserResponse
     */
    public function deleteBrowserWithOptions($browserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteBrowser',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/browsers/' . Url::percentEncode($browserId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBrowserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除浏览器实例.
     *
     * @remarks
     * 删除指定的浏览器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @returns DeleteBrowserResponse
     *
     * @param string $browserId
     *
     * @return DeleteBrowserResponse
     */
    public function deleteBrowser($browserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBrowserWithOptions($browserId, $headers, $runtime);
    }

    /**
     * 删除代码解释器.
     *
     * @remarks
     * 删除指定的代码解释器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCodeInterpreterResponse
     *
     * @param string         $codeInterpreterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCodeInterpreterResponse
     */
    public function deleteCodeInterpreterWithOptions($codeInterpreterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCodeInterpreter',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/code-interpreters/' . Url::percentEncode($codeInterpreterId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCodeInterpreterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码解释器.
     *
     * @remarks
     * 删除指定的代码解释器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @returns DeleteCodeInterpreterResponse
     *
     * @param string $codeInterpreterId
     *
     * @return DeleteCodeInterpreterResponse
     */
    public function deleteCodeInterpreter($codeInterpreterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeInterpreterWithOptions($codeInterpreterId, $headers, $runtime);
    }

    /**
     * delete memory store.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string         $memoryName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($memoryName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * delete memory store.
     *
     * @returns DeleteMemoryResponse
     *
     * @param string $memoryName
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($memoryName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($memoryName, $headers, $runtime);
    }

    /**
     * 获取智能体运行时详情.
     *
     * @remarks
     * 根据智能体运行时ID获取指定智能体运行时的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param request - GetAgentRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentRuntimeResponse
     *
     * @param string                 $agentRuntimeId
     * @param GetAgentRuntimeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgentRuntimeResponse
     */
    public function getAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentRuntimeVersion) {
            @$query['agentRuntimeVersion'] = $request->agentRuntimeVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentRuntime',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取智能体运行时详情.
     *
     * @remarks
     * 根据智能体运行时ID获取指定智能体运行时的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param request - GetAgentRuntimeRequest
     *
     * @returns GetAgentRuntimeResponse
     *
     * @param string                 $agentRuntimeId
     * @param GetAgentRuntimeRequest $request
     *
     * @return GetAgentRuntimeResponse
     */
    public function getAgentRuntime($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * Get an agent runtime endpoint.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentRuntimeEndpointResponse
     *
     * @param string         $agentRuntimeId
     * @param string         $agentRuntimeEndpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAgentRuntimeEndpointResponse
     */
    public function getAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentRuntimeEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/endpoints/' . Url::percentEncode($agentRuntimeEndpointId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentRuntimeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get an agent runtime endpoint.
     *
     * @returns GetAgentRuntimeEndpointResponse
     *
     * @param string $agentRuntimeId
     * @param string $agentRuntimeEndpointId
     *
     * @return GetAgentRuntimeEndpointResponse
     */
    public function getAgentRuntimeEndpoint($agentRuntimeId, $agentRuntimeEndpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $headers, $runtime);
    }

    /**
     * 获取浏览器实例详情.
     *
     * @remarks
     * 根据浏览器ID获取指定浏览器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBrowserResponse
     *
     * @param string         $browserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBrowserResponse
     */
    public function getBrowserWithOptions($browserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBrowser',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/browsers/' . Url::percentEncode($browserId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBrowserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取浏览器实例详情.
     *
     * @remarks
     * 根据浏览器ID获取指定浏览器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @returns GetBrowserResponse
     *
     * @param string $browserId
     *
     * @return GetBrowserResponse
     */
    public function getBrowser($browserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBrowserWithOptions($browserId, $headers, $runtime);
    }

    /**
     * 获取代码解释器详情.
     *
     * @remarks
     * 根据代码解释器ID获取指定代码解释器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCodeInterpreterResponse
     *
     * @param string         $codeInterpreterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCodeInterpreterResponse
     */
    public function getCodeInterpreterWithOptions($codeInterpreterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCodeInterpreter',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/code-interpreters/' . Url::percentEncode($codeInterpreterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCodeInterpreterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取代码解释器详情.
     *
     * @remarks
     * 根据代码解释器ID获取指定代码解释器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @returns GetCodeInterpreterResponse
     *
     * @param string $codeInterpreterId
     *
     * @return GetCodeInterpreterResponse
     */
    public function getCodeInterpreter($codeInterpreterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeInterpreterWithOptions($codeInterpreterId, $headers, $runtime);
    }

    /**
     * GetMemory.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string         $memoryName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($memoryName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMemory.
     *
     * @returns GetMemoryResponse
     *
     * @param string $memoryName
     *
     * @return GetMemoryResponse
     */
    public function getMemory($memoryName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($memoryName, $headers, $runtime);
    }

    /**
     * get event.
     *
     * @param request - GetMemoryEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryEventResponse
     *
     * @param string                $memoryName
     * @param string                $sessionId
     * @param string                $eventId
     * @param GetMemoryEventRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMemoryEventResponse
     */
    public function getMemoryEventWithOptions($memoryName, $sessionId, $eventId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMemoryEvent',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/sessions/' . Url::percentEncode($sessionId) . '/events/' . Url::percentEncode($eventId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get event.
     *
     * @param request - GetMemoryEventRequest
     *
     * @returns GetMemoryEventResponse
     *
     * @param string                $memoryName
     * @param string                $sessionId
     * @param string                $eventId
     * @param GetMemoryEventRequest $request
     *
     * @return GetMemoryEventResponse
     */
    public function getMemoryEvent($memoryName, $sessionId, $eventId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryEventWithOptions($memoryName, $sessionId, $eventId, $request, $headers, $runtime);
    }

    /**
     * 获取内存会话详情.
     *
     * @remarks
     * 根据会话ID获取指定内存会话的详细信息，包括会话中的事件记录、时间戳等。用于查看和管理对话历史。
     *
     * @param request - GetMemorySessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemorySessionResponse
     *
     * @param string                  $memoryName
     * @param string                  $sessionId
     * @param GetMemorySessionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMemorySessionResponse
     */
    public function getMemorySessionWithOptions($memoryName, $sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMemorySession',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/sessions/' . Url::percentEncode($sessionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemorySessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取内存会话详情.
     *
     * @remarks
     * 根据会话ID获取指定内存会话的详细信息，包括会话中的事件记录、时间戳等。用于查看和管理对话历史。
     *
     * @param request - GetMemorySessionRequest
     *
     * @returns GetMemorySessionResponse
     *
     * @param string                  $memoryName
     * @param string                  $sessionId
     * @param GetMemorySessionRequest $request
     *
     * @return GetMemorySessionResponse
     */
    public function getMemorySession($memoryName, $sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemorySessionWithOptions($memoryName, $sessionId, $request, $headers, $runtime);
    }

    /**
     * 列出智能体运行时端点.
     *
     * @remarks
     * 获取指定智能体运行时的所有端点列表，支持按名称过滤和分页查询。端点用于外部系统访问智能体运行时服务。
     *
     * @param request - ListAgentRuntimeEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentRuntimeEndpointsResponse
     *
     * @param string                           $agentRuntimeId
     * @param ListAgentRuntimeEndpointsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAgentRuntimeEndpointsResponse
     */
    public function listAgentRuntimeEndpointsWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointName) {
            @$query['endpointName'] = $request->endpointName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['searchMode'] = $request->searchMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentRuntimeEndpoints',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentRuntimeEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出智能体运行时端点.
     *
     * @remarks
     * 获取指定智能体运行时的所有端点列表，支持按名称过滤和分页查询。端点用于外部系统访问智能体运行时服务。
     *
     * @param request - ListAgentRuntimeEndpointsRequest
     *
     * @returns ListAgentRuntimeEndpointsResponse
     *
     * @param string                           $agentRuntimeId
     * @param ListAgentRuntimeEndpointsRequest $request
     *
     * @return ListAgentRuntimeEndpointsResponse
     */
    public function listAgentRuntimeEndpoints($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentRuntimeEndpointsWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * List agent runtime versions.
     *
     * @param request - ListAgentRuntimeVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentRuntimeVersionsResponse
     *
     * @param string                          $agentRuntimeId
     * @param ListAgentRuntimeVersionsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAgentRuntimeVersionsResponse
     */
    public function listAgentRuntimeVersionsWithOptions($agentRuntimeId, $request, $headers, $runtime)
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
            'action' => 'ListAgentRuntimeVersions',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentRuntimeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List agent runtime versions.
     *
     * @param request - ListAgentRuntimeVersionsRequest
     *
     * @returns ListAgentRuntimeVersionsResponse
     *
     * @param string                          $agentRuntimeId
     * @param ListAgentRuntimeVersionsRequest $request
     *
     * @return ListAgentRuntimeVersionsResponse
     */
    public function listAgentRuntimeVersions($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentRuntimeVersionsWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * 列出智能体运行时.
     *
     * @remarks
     * 获取当前用户的所有智能体运行时列表，支持按名称、标签等条件过滤，支持分页查询。
     *
     * @param request - ListAgentRuntimesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentRuntimesResponse
     *
     * @param ListAgentRuntimesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAgentRuntimesResponse
     */
    public function listAgentRuntimesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentRuntimeName) {
            @$query['agentRuntimeName'] = $request->agentRuntimeName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['searchMode'] = $request->searchMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentRuntimes',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentRuntimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出智能体运行时.
     *
     * @remarks
     * 获取当前用户的所有智能体运行时列表，支持按名称、标签等条件过滤，支持分页查询。
     *
     * @param request - ListAgentRuntimesRequest
     *
     * @returns ListAgentRuntimesResponse
     *
     * @param ListAgentRuntimesRequest $request
     *
     * @return ListAgentRuntimesResponse
     */
    public function listAgentRuntimes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentRuntimesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出浏览器实例.
     *
     * @remarks
     * 获取当前用户的所有浏览器实例列表，支持按名称、状态等条件过滤，支持分页查询。
     *
     * @param request - ListBrowsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrowsersResponse
     *
     * @param ListBrowsersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListBrowsersResponse
     */
    public function listBrowsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->browserName) {
            @$query['browserName'] = $request->browserName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBrowsers',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/browsers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBrowsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出浏览器实例.
     *
     * @remarks
     * 获取当前用户的所有浏览器实例列表，支持按名称、状态等条件过滤，支持分页查询。
     *
     * @param request - ListBrowsersRequest
     *
     * @returns ListBrowsersResponse
     *
     * @param ListBrowsersRequest $request
     *
     * @return ListBrowsersResponse
     */
    public function listBrowsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBrowsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出代码解释器.
     *
     * @remarks
     * 获取当前用户的所有代码解释器实例列表，支持按名称等条件过滤，支持分页查询。
     *
     * @param request - ListCodeInterpretersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCodeInterpretersResponse
     *
     * @param ListCodeInterpretersRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListCodeInterpretersResponse
     */
    public function listCodeInterpretersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->codeInterpreterName) {
            @$query['codeInterpreterName'] = $request->codeInterpreterName;
        }

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
            'action' => 'ListCodeInterpreters',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/code-interpreters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCodeInterpretersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出代码解释器.
     *
     * @remarks
     * 获取当前用户的所有代码解释器实例列表，支持按名称等条件过滤，支持分页查询。
     *
     * @param request - ListCodeInterpretersRequest
     *
     * @returns ListCodeInterpretersResponse
     *
     * @param ListCodeInterpretersRequest $request
     *
     * @return ListCodeInterpretersResponse
     */
    public function listCodeInterpreters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCodeInterpretersWithOptions($request, $headers, $runtime);
    }

    /**
     * ListMemory.
     *
     * @param request - ListMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryResponse
     *
     * @param ListMemoryRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListMemoryResponse
     */
    public function listMemoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pattern) {
            @$query['pattern'] = $request->pattern;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMemory.
     *
     * @param request - ListMemoryRequest
     *
     * @returns ListMemoryResponse
     *
     * @param ListMemoryRequest $request
     *
     * @return ListMemoryResponse
     */
    public function listMemory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryWithOptions($request, $headers, $runtime);
    }

    /**
     * list events.
     *
     * @param request - ListMemoryEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryEventResponse
     *
     * @param string                 $memoryName
     * @param string                 $sessionId
     * @param ListMemoryEventRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMemoryEventResponse
     */
    public function listMemoryEventWithOptions($memoryName, $sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemoryEvent',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/sessions/' . Url::percentEncode($sessionId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list events.
     *
     * @param request - ListMemoryEventRequest
     *
     * @returns ListMemoryEventResponse
     *
     * @param string                 $memoryName
     * @param string                 $sessionId
     * @param ListMemoryEventRequest $request
     *
     * @return ListMemoryEventResponse
     */
    public function listMemoryEvent($memoryName, $sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryEventWithOptions($memoryName, $sessionId, $request, $headers, $runtime);
    }

    /**
     * 列出内存会话.
     *
     * @remarks
     * 获取指定内存实例的所有会话列表，支持按时间范围过滤和分页查询。会话是AgentRun中用于存储对话历史和管理上下文的重要组件。
     *
     * @param request - ListMemorySessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemorySessionsResponse
     *
     * @param string                    $memoryName
     * @param ListMemorySessionsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMemorySessionsResponse
     */
    public function listMemorySessionsWithOptions($memoryName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemorySessions',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemorySessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出内存会话.
     *
     * @remarks
     * 获取指定内存实例的所有会话列表，支持按时间范围过滤和分页查询。会话是AgentRun中用于存储对话历史和管理上下文的重要组件。
     *
     * @param request - ListMemorySessionsRequest
     *
     * @returns ListMemorySessionsResponse
     *
     * @param string                    $memoryName
     * @param ListMemorySessionsRequest $request
     *
     * @return ListMemorySessionsResponse
     */
    public function listMemorySessions($memoryName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemorySessionsWithOptions($memoryName, $request, $headers, $runtime);
    }

    /**
     * 发布运行时版本.
     *
     * @remarks
     * 为指定的智能体运行时发布新版本，用于版本管理和部署。新版本可以包含代码更新、配置变更等内容。
     *
     * @param request - PublishRuntimeVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRuntimeVersionResponse
     *
     * @param string                       $agentRuntimeId
     * @param PublishRuntimeVersionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return PublishRuntimeVersionResponse
     */
    public function publishRuntimeVersionWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PublishRuntimeVersion',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishRuntimeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布运行时版本.
     *
     * @remarks
     * 为指定的智能体运行时发布新版本，用于版本管理和部署。新版本可以包含代码更新、配置变更等内容。
     *
     * @param request - PublishRuntimeVersionRequest
     *
     * @returns PublishRuntimeVersionResponse
     *
     * @param string                       $agentRuntimeId
     * @param PublishRuntimeVersionRequest $request
     *
     * @return PublishRuntimeVersionResponse
     */
    public function publishRuntimeVersion($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRuntimeVersionWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * RetrieveMemory.
     *
     * @param request - RetrieveMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveMemoryResponse
     *
     * @param string                $memoryName
     * @param RetrieveMemoryRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RetrieveMemoryResponse
     */
    public function retrieveMemoryWithOptions($memoryName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->store) {
            @$body['store'] = $request->store;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        if (null !== $request->topk) {
            @$body['topk'] = $request->topk;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetrieveMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '/records',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetrieveMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RetrieveMemory.
     *
     * @param request - RetrieveMemoryRequest
     *
     * @returns RetrieveMemoryResponse
     *
     * @param string                $memoryName
     * @param RetrieveMemoryRequest $request
     *
     * @return RetrieveMemoryResponse
     */
    public function retrieveMemory($memoryName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveMemoryWithOptions($memoryName, $request, $headers, $runtime);
    }

    /**
     * 更新智能体运行时.
     *
     * @remarks
     * 更新指定智能体运行时的配置信息，包括资源分配、网络配置、环境变量等。更新操作会触发运行时重启。
     *
     * @param request - UpdateAgentRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentRuntimeResponse
     *
     * @param string                    $agentRuntimeId
     * @param UpdateAgentRuntimeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAgentRuntimeResponse
     */
    public function updateAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentRuntime',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新智能体运行时.
     *
     * @remarks
     * 更新指定智能体运行时的配置信息，包括资源分配、网络配置、环境变量等。更新操作会触发运行时重启。
     *
     * @param request - UpdateAgentRuntimeRequest
     *
     * @returns UpdateAgentRuntimeResponse
     *
     * @param string                    $agentRuntimeId
     * @param UpdateAgentRuntimeRequest $request
     *
     * @return UpdateAgentRuntimeResponse
     */
    public function updateAgentRuntime($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * Update an agent runtime endpoint.
     *
     * @param request - UpdateAgentRuntimeEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param string                            $agentRuntimeEndpointId
     * @param UpdateAgentRuntimeEndpointRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateAgentRuntimeEndpointResponse
     */
    public function updateAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentRuntimeEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/runtimes/' . Url::percentEncode($agentRuntimeId) . '/endpoints/' . Url::percentEncode($agentRuntimeEndpointId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentRuntimeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update an agent runtime endpoint.
     *
     * @param request - UpdateAgentRuntimeEndpointRequest
     *
     * @returns UpdateAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param string                            $agentRuntimeEndpointId
     * @param UpdateAgentRuntimeEndpointRequest $request
     *
     * @return UpdateAgentRuntimeEndpointResponse
     */
    public function updateAgentRuntimeEndpoint($agentRuntimeId, $agentRuntimeEndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime);
    }

    /**
     * Update Memory.
     *
     * @param request - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $memoryName
     * @param UpdateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($memoryName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->longTtl) {
            @$body['longTtl'] = $request->longTtl;
        }

        if (null !== $request->shortTtl) {
            @$body['shortTtl'] = $request->shortTtl;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memories/' . Url::percentEncode($memoryName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Memory.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $memoryName
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($memoryName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($memoryName, $request, $headers, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ActivateTemplateMCPRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ActivateTemplateMCPResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateBrowserRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCodeInterpreterRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetTemplateResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListKnowledgeBasesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListKnowledgeBasesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelProvidersRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelProvidersResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelProxiesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelProxiesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelServicesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelServicesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListSandboxesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListSandboxesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopTemplateMCPResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateTemplateResponse;
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
     * 启动模板的MCP服务器.
     *
     * @param request - ActivateTemplateMCPRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateTemplateMCPResponse
     *
     * @param string                     $templateName
     * @param ActivateTemplateMCPRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ActivateTemplateMCPResponse
     */
    public function activateTemplateMCPWithOptions($templateName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabledTools) {
            @$body['enabledTools'] = $request->enabledTools;
        }

        if (null !== $request->transport) {
            @$body['transport'] = $request->transport;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActivateTemplateMCP',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates/' . Url::percentEncode($templateName) . '/mcp/activate',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ActivateTemplateMCPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动模板的MCP服务器.
     *
     * @param request - ActivateTemplateMCPRequest
     *
     * @returns ActivateTemplateMCPResponse
     *
     * @param string                     $templateName
     * @param ActivateTemplateMCPRequest $request
     *
     * @return ActivateTemplateMCPResponse
     */
    public function activateTemplateMCP($templateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateTemplateMCPWithOptions($templateName, $request, $headers, $runtime);
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
     * Create a credential.
     *
     * @param request - CreateCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCredentialResponse
     *
     * @param CreateCredentialRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCredentialResponse
     */
    public function createCredentialWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateCredential',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/credentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a credential.
     *
     * @param request - CreateCredentialRequest
     *
     * @returns CreateCredentialResponse
     *
     * @param CreateCredentialRequest $request
     *
     * @return CreateCredentialResponse
     */
    public function createCredential($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCredentialWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建知识库.
     *
     * @param request - CreateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBaseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBase',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/knowledgebases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建知识库.
     *
     * @param request - CreateKnowledgeBaseRequest
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增模型.
     *
     * @param request - CreateModelProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelProxyResponse
     *
     * @param CreateModelProxyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateModelProxyResponse
     */
    public function createModelProxyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateModelProxy',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-proxies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModelProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增模型.
     *
     * @param request - CreateModelProxyRequest
     *
     * @returns CreateModelProxyResponse
     *
     * @param CreateModelProxyRequest $request
     *
     * @return CreateModelProxyResponse
     */
    public function createModelProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增模型.
     *
     * @param request - CreateModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelServiceResponse
     *
     * @param CreateModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelServiceResponse
     */
    public function createModelServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateModelService',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增模型.
     *
     * @param request - CreateModelServiceRequest
     *
     * @returns CreateModelServiceResponse
     *
     * @param CreateModelServiceRequest $request
     *
     * @return CreateModelServiceResponse
     */
    public function createModelService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建沙箱.
     *
     * @remarks
     * 根据模板创建一个新的沙箱实例。沙箱是运行时的执行环境，可以执行代码或运行浏览器。
     *
     * @param request - CreateSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSandboxResponse
     *
     * @param CreateSandboxRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSandboxResponse
     */
    public function createSandboxWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建沙箱.
     *
     * @remarks
     * 根据模板创建一个新的沙箱实例。沙箱是运行时的执行环境，可以执行代码或运行浏览器。
     *
     * @param request - CreateSandboxRequest
     *
     * @returns CreateSandboxResponse
     *
     * @param CreateSandboxRequest $request
     *
     * @return CreateSandboxResponse
     */
    public function createSandbox($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSandboxWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建模板
     *
     * @remarks
     * 创建一个新的模板，用于后续创建沙箱。模板定义了沙箱的运行时环境、资源配置等。
     *
     * @param request - CreateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模板
     *
     * @remarks
     * 创建一个新的模板，用于后续创建沙箱。模板定义了沙箱的运行时环境、资源配置等。
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
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
     * Delete a credential.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCredentialResponse
     *
     * @param string         $credentialName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredentialWithOptions($credentialName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCredential',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/credentials/' . Url::percentEncode($credentialName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a credential.
     *
     * @returns DeleteCredentialResponse
     *
     * @param string $credentialName
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredential($credentialName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCredentialWithOptions($credentialName, $headers, $runtime);
    }

    /**
     * 删除知识库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string         $knowledgeBaseName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBaseWithOptions($knowledgeBaseName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteKnowledgeBase',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/knowledgebases/' . Url::percentEncode($knowledgeBaseName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除知识库.
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string $knowledgeBaseName
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBase($knowledgeBaseName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseWithOptions($knowledgeBaseName, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelProxyResponse
     *
     * @param string         $modelProxyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelProxyResponse
     */
    public function deleteModelProxyWithOptions($modelProxyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModelProxy',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-proxies/' . Url::percentEncode($modelProxyName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模型.
     *
     * @returns DeleteModelProxyResponse
     *
     * @param string $modelProxyName
     *
     * @return DeleteModelProxyResponse
     */
    public function deleteModelProxy($modelProxyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelProxyWithOptions($modelProxyName, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string         $modelServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelServiceWithOptions($modelServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModelService',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-services/' . Url::percentEncode($modelServiceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模型.
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string $modelServiceName
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelService($modelServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelServiceWithOptions($modelServiceName, $headers, $runtime);
    }

    /**
     * 删除Sandbox.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSandboxResponse
     *
     * @param string         $sandboxId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSandboxResponse
     */
    public function deleteSandboxWithOptions($sandboxId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes/' . Url::percentEncode($sandboxId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Sandbox.
     *
     * @returns DeleteSandboxResponse
     *
     * @param string $sandboxId
     *
     * @return DeleteSandboxResponse
     */
    public function deleteSandbox($sandboxId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSandboxWithOptions($sandboxId, $headers, $runtime);
    }

    /**
     * 删除模板
     *
     * @remarks
     * 删除指定的模板。删除后，该模板将无法再用于创建新的沙箱。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param string         $templateName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($templateName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates/' . Url::percentEncode($templateName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模板
     *
     * @remarks
     * 删除指定的模板。删除后，该模板将无法再用于创建新的沙箱。
     *
     * @returns DeleteTemplateResponse
     *
     * @param string $templateName
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($templateName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($templateName, $headers, $runtime);
    }

    /**
     * Get access token for a resource.
     *
     * @param request - GetAccessTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessTokenResponse
     *
     * @param GetAccessTokenRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccessTokenResponse
     */
    public function getAccessTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceName) {
            @$query['resourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessToken',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/accessToken',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get access token for a resource.
     *
     * @param request - GetAccessTokenRequest
     *
     * @returns GetAccessTokenResponse
     *
     * @param GetAccessTokenRequest $request
     *
     * @return GetAccessTokenResponse
     */
    public function getAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccessTokenWithOptions($request, $headers, $runtime);
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
     * Get a credential.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialResponse
     *
     * @param string         $credentialName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCredentialResponse
     */
    public function getCredentialWithOptions($credentialName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCredential',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/credentials/' . Url::percentEncode($credentialName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get a credential.
     *
     * @returns GetCredentialResponse
     *
     * @param string $credentialName
     *
     * @return GetCredentialResponse
     */
    public function getCredential($credentialName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCredentialWithOptions($credentialName, $headers, $runtime);
    }

    /**
     * 获取知识库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string         $knowledgeBaseName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBaseWithOptions($knowledgeBaseName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBase',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/knowledgebases/' . Url::percentEncode($knowledgeBaseName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取知识库.
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string $knowledgeBaseName
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBase($knowledgeBaseName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseWithOptions($knowledgeBaseName, $headers, $runtime);
    }

    /**
     * 查看model.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelProxyResponse
     *
     * @param string         $modelProxyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelProxyResponse
     */
    public function getModelProxyWithOptions($modelProxyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelProxy',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-proxies/' . Url::percentEncode($modelProxyName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看model.
     *
     * @returns GetModelProxyResponse
     *
     * @param string $modelProxyName
     *
     * @return GetModelProxyResponse
     */
    public function getModelProxy($modelProxyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelProxyWithOptions($modelProxyName, $headers, $runtime);
    }

    /**
     * 查看model.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelServiceResponse
     *
     * @param string         $modelServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelServiceResponse
     */
    public function getModelServiceWithOptions($modelServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelService',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-services/' . Url::percentEncode($modelServiceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看model.
     *
     * @returns GetModelServiceResponse
     *
     * @param string $modelServiceName
     *
     * @return GetModelServiceResponse
     */
    public function getModelService($modelServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelServiceWithOptions($modelServiceName, $headers, $runtime);
    }

    /**
     * 获取沙箱.
     *
     * @remarks
     * 根据沙箱ID获取指定沙箱的详细信息，包括状态、配置等。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSandboxResponse
     *
     * @param string         $sandboxId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSandboxResponse
     */
    public function getSandboxWithOptions($sandboxId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes/' . Url::percentEncode($sandboxId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取沙箱.
     *
     * @remarks
     * 根据沙箱ID获取指定沙箱的详细信息，包括状态、配置等。
     *
     * @returns GetSandboxResponse
     *
     * @param string $sandboxId
     *
     * @return GetSandboxResponse
     */
    public function getSandbox($sandboxId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSandboxWithOptions($sandboxId, $headers, $runtime);
    }

    /**
     * 获取模板
     *
     * @remarks
     * 根据模板名称获取指定模板的详细信息，包括配置、状态等。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string         $templateName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($templateName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates/' . Url::percentEncode($templateName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模板
     *
     * @remarks
     * 根据模板名称获取指定模板的详细信息，包括配置、状态等。
     *
     * @returns GetTemplateResponse
     *
     * @param string $templateName
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($templateName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($templateName, $headers, $runtime);
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

        if (null !== $request->status) {
            @$query['status'] = $request->status;
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
     * List credentials.
     *
     * @param request - ListCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCredentialsResponse
     *
     * @param ListCredentialsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCredentialsResponse
     */
    public function listCredentialsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credentialAuthType) {
            @$query['credentialAuthType'] = $request->credentialAuthType;
        }

        if (null !== $request->credentialName) {
            @$query['credentialName'] = $request->credentialName;
        }

        if (null !== $request->credentialSourceType) {
            @$query['credentialSourceType'] = $request->credentialSourceType;
        }

        if (null !== $request->enabled) {
            @$query['enabled'] = $request->enabled;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCredentials',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/credentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List credentials.
     *
     * @param request - ListCredentialsRequest
     *
     * @returns ListCredentialsResponse
     *
     * @param ListCredentialsRequest $request
     *
     * @return ListCredentialsResponse
     */
    public function listCredentials($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCredentialsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出知识库.
     *
     * @param request - ListKnowledgeBasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBases',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/knowledgebases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出知识库.
     *
     * @param request - ListKnowledgeBasesRequest
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询支持的模型提供商及其模型.
     *
     * @param request - ListModelProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProvidersResponse
     *
     * @param ListModelProvidersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListModelProvidersResponse
     */
    public function listModelProvidersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelName) {
            @$query['modelName'] = $request->modelName;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviders',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询支持的模型提供商及其模型.
     *
     * @param request - ListModelProvidersRequest
     *
     * @returns ListModelProvidersResponse
     *
     * @param ListModelProvidersRequest $request
     *
     * @return ListModelProvidersResponse
     */
    public function listModelProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * model列表.
     *
     * @param request - ListModelProxiesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProxiesResponse
     *
     * @param ListModelProxiesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListModelProxiesResponse
     */
    public function listModelProxiesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->proxyMode) {
            @$query['proxyMode'] = $request->proxyMode;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProxies',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-proxies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelProxiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * model列表.
     *
     * @param request - ListModelProxiesRequest
     *
     * @returns ListModelProxiesResponse
     *
     * @param ListModelProxiesRequest $request
     *
     * @return ListModelProxiesResponse
     */
    public function listModelProxies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelProxiesWithOptions($request, $headers, $runtime);
    }

    /**
     * model列表.
     *
     * @param request - ListModelServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelServicesResponse
     *
     * @param ListModelServicesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelServicesResponse
     */
    public function listModelServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        if (null !== $request->providerType) {
            @$query['providerType'] = $request->providerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelServices',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * model列表.
     *
     * @param request - ListModelServicesRequest
     *
     * @returns ListModelServicesResponse
     *
     * @param ListModelServicesRequest $request
     *
     * @return ListModelServicesResponse
     */
    public function listModelServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出沙箱.
     *
     * @remarks
     * 获取当前用户的所有沙箱列表，支持按模板名称过滤，支持分页查询。
     *
     * @param request - ListSandboxesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSandboxesResponse
     *
     * @param ListSandboxesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSandboxesResponse
     */
    public function listSandboxesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->templateName) {
            @$query['templateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSandboxes',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSandboxesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出沙箱.
     *
     * @remarks
     * 获取当前用户的所有沙箱列表，支持按模板名称过滤，支持分页查询。
     *
     * @param request - ListSandboxesRequest
     *
     * @returns ListSandboxesResponse
     *
     * @param ListSandboxesRequest $request
     *
     * @return ListSandboxesResponse
     */
    public function listSandboxes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSandboxesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出模板
     *
     * @remarks
     * 获取当前用户的所有模板列表，支持按模板类型过滤，支持分页查询。
     *
     * @param request - ListTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->templateName) {
            @$query['templateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出模板
     *
     * @remarks
     * 获取当前用户的所有模板列表，支持按模板类型过滤，支持分页查询。
     *
     * @param request - ListTemplatesRequest
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
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
     * 删除沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSandboxResponse
     *
     * @param string         $sandboxId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopSandboxResponse
     */
    public function stopSandboxWithOptions($sandboxId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes/' . Url::percentEncode($sandboxId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @returns StopSandboxResponse
     *
     * @param string $sandboxId
     *
     * @return StopSandboxResponse
     */
    public function stopSandbox($sandboxId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSandboxWithOptions($sandboxId, $headers, $runtime);
    }

    /**
     * 停止模板的MCP服务器.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTemplateMCPResponse
     *
     * @param string         $templateName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopTemplateMCPResponse
     */
    public function stopTemplateMCPWithOptions($templateName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopTemplateMCP',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates/' . Url::percentEncode($templateName) . '/mcp/stop',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTemplateMCPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止模板的MCP服务器.
     *
     * @returns StopTemplateMCPResponse
     *
     * @param string $templateName
     *
     * @return StopTemplateMCPResponse
     */
    public function stopTemplateMCP($templateName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTemplateMCPWithOptions($templateName, $headers, $runtime);
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
     * Update a credential.
     *
     * @param request - UpdateCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCredentialResponse
     *
     * @param string                  $credentialName
     * @param UpdateCredentialRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredentialWithOptions($credentialName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateCredential',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/credentials/' . Url::percentEncode($credentialName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a credential.
     *
     * @param request - UpdateCredentialRequest
     *
     * @returns UpdateCredentialResponse
     *
     * @param string                  $credentialName
     * @param UpdateCredentialRequest $request
     *
     * @return UpdateCredentialResponse
     */
    public function updateCredential($credentialName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCredentialWithOptions($credentialName, $request, $headers, $runtime);
    }

    /**
     * 更新知识库.
     *
     * @param request - UpdateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseName
     * @param UpdateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBase',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/knowledgebases/' . Url::percentEncode($knowledgeBaseName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新知识库.
     *
     * @param request - UpdateKnowledgeBaseRequest
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseName
     * @param UpdateKnowledgeBaseRequest $request
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBase($knowledgeBaseName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime);
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelProxyResponse
     *
     * @param string                  $modelProxyName
     * @param UpdateModelProxyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateModelProxyResponse
     */
    public function updateModelProxyWithOptions($modelProxyName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelProxy',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-proxies/' . Url::percentEncode($modelProxyName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModelProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelProxyRequest
     *
     * @returns UpdateModelProxyResponse
     *
     * @param string                  $modelProxyName
     * @param UpdateModelProxyRequest $request
     *
     * @return UpdateModelProxyResponse
     */
    public function updateModelProxy($modelProxyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelProxyWithOptions($modelProxyName, $request, $headers, $runtime);
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelServiceResponse
     *
     * @param string                    $modelServiceName
     * @param UpdateModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateModelServiceResponse
     */
    public function updateModelServiceWithOptions($modelServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelService',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/model-services/' . Url::percentEncode($modelServiceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelServiceRequest
     *
     * @returns UpdateModelServiceResponse
     *
     * @param string                    $modelServiceName
     * @param UpdateModelServiceRequest $request
     *
     * @return UpdateModelServiceResponse
     */
    public function updateModelService($modelServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelServiceWithOptions($modelServiceName, $request, $headers, $runtime);
    }

    /**
     * 更新模板
     *
     * @remarks
     * 更新指定模板的配置信息，包括资源配置、网络配置、环境变量等。
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $templateName
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($templateName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/templates/' . Url::percentEncode($templateName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新模板
     *
     * @remarks
     * 更新指定模板的配置信息，包括资源配置、网络配置、环境变量等。
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $templateName
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($templateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($templateName, $request, $headers, $runtime);
    }
}

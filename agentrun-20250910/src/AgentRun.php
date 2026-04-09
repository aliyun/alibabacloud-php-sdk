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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCustomDomainRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryCollectionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateToolRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteBrowserRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCodeInterpreterRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCustomDomainRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteMemoryCollectionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteToolRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetBrowserRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCodeInterpreterRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCustomDomainRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryCollectionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetToolRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetWorkspaceDiscoveryEndpointsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetWorkspaceDiscoveryEndpointsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetWorkspaceResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCustomDomainsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListCustomDomainsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListKnowledgeBasesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListKnowledgeBasesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryCollectionsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListMemoryCollectionsResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListToolsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListToolsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PauseSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PauseSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ResumeSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ResumeSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopSandboxRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopTemplateMCPRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopTemplateMCPResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCustomDomainRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateKnowledgeBaseRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateMemoryCollectionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelProxyRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelServiceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateToolRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateWorkspaceDiscoveryEndpointsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateWorkspaceDiscoveryEndpointsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateWorkspaceResponse;
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
     * Enable the TemplateMCP service.
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
     * Enable the TemplateMCP service.
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
     * CreateAgentRuntime.
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
     * CreateAgentRuntime.
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
     * 创建自定义域名.
     *
     * @param request - CreateCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomDomainResponse
     *
     * @param CreateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomDomain',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/custom-domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建自定义域名.
     *
     * @param request - CreateCustomDomainRequest
     *
     * @returns CreateCustomDomainResponse
     *
     * @param CreateCustomDomainRequest $request
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomDomainWithOptions($request, $headers, $runtime);
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
     * 添加记忆存储.
     *
     * @param request - CreateMemoryCollectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryCollectionResponse
     *
     * @param CreateMemoryCollectionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMemoryCollectionResponse
     */
    public function createMemoryCollectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryCollection',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memory-collections',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加记忆存储.
     *
     * @param request - CreateMemoryCollectionRequest
     *
     * @returns CreateMemoryCollectionResponse
     *
     * @param CreateMemoryCollectionRequest $request
     *
     * @return CreateMemoryCollectionResponse
     */
    public function createMemoryCollection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryCollectionWithOptions($request, $headers, $runtime);
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
     * Create a template.
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
     * Create a template.
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
     * 创建工具.
     *
     * @remarks
     * 创建一个新的工具，支持创建 MCP、函数调用和技能等多种类型的工具。工具创建后可以被 Agent 调用以扩展其能力。
     *
     * @param request - CreateToolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateToolResponse
     *
     * @param CreateToolRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateToolResponse
     */
    public function createToolWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTool',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/tools',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateToolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工具.
     *
     * @remarks
     * 创建一个新的工具，支持创建 MCP、函数调用和技能等多种类型的工具。工具创建后可以被 Agent 调用以扩展其能力。
     *
     * @param request - CreateToolRequest
     *
     * @returns CreateToolResponse
     *
     * @param CreateToolRequest $request
     *
     * @return CreateToolResponse
     */
    public function createTool($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createToolWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工作空间.
     *
     * @remarks
     * 创建工作空间
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作空间.
     *
     * @remarks
     * 创建工作空间
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除智能体运行时.
     *
     * @remarks
     * 删除指定的智能体运行时实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param request - DeleteAgentRuntimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentRuntimeResponse
     *
     * @param string                    $agentRuntimeId
     * @param DeleteAgentRuntimeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAgentRuntimeResponse
     */
    public function deleteAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteAgentRuntimeRequest
     *
     * @returns DeleteAgentRuntimeResponse
     *
     * @param string                    $agentRuntimeId
     * @param DeleteAgentRuntimeRequest $request
     *
     * @return DeleteAgentRuntimeResponse
     */
    public function deleteAgentRuntime($agentRuntimeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentRuntimeWithOptions($agentRuntimeId, $request, $headers, $runtime);
    }

    /**
     * Delete an agent runtime endpoint.
     *
     * @param request - DeleteAgentRuntimeEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param string                            $agentRuntimeEndpointId
     * @param DeleteAgentRuntimeEndpointRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAgentRuntimeEndpointResponse
     */
    public function deleteAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteAgentRuntimeEndpointRequest
     *
     * @returns DeleteAgentRuntimeEndpointResponse
     *
     * @param string                            $agentRuntimeId
     * @param string                            $agentRuntimeEndpointId
     * @param DeleteAgentRuntimeEndpointRequest $request
     *
     * @return DeleteAgentRuntimeEndpointResponse
     */
    public function deleteAgentRuntimeEndpoint($agentRuntimeId, $agentRuntimeEndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime);
    }

    /**
     * 删除浏览器实例.
     *
     * @remarks
     * 删除指定的浏览器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param request - DeleteBrowserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBrowserResponse
     *
     * @param string               $browserId
     * @param DeleteBrowserRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBrowserResponse
     */
    public function deleteBrowserWithOptions($browserId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteBrowserRequest
     *
     * @returns DeleteBrowserResponse
     *
     * @param string               $browserId
     * @param DeleteBrowserRequest $request
     *
     * @return DeleteBrowserResponse
     */
    public function deleteBrowser($browserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBrowserWithOptions($browserId, $request, $headers, $runtime);
    }

    /**
     * 删除代码解释器.
     *
     * @remarks
     * 删除指定的代码解释器实例，包括其所有相关资源和数据。删除操作不可逆，请谨慎操作。
     *
     * @param request - DeleteCodeInterpreterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCodeInterpreterResponse
     *
     * @param string                       $codeInterpreterId
     * @param DeleteCodeInterpreterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCodeInterpreterResponse
     */
    public function deleteCodeInterpreterWithOptions($codeInterpreterId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteCodeInterpreterRequest
     *
     * @returns DeleteCodeInterpreterResponse
     *
     * @param string                       $codeInterpreterId
     * @param DeleteCodeInterpreterRequest $request
     *
     * @return DeleteCodeInterpreterResponse
     */
    public function deleteCodeInterpreter($codeInterpreterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeInterpreterWithOptions($codeInterpreterId, $request, $headers, $runtime);
    }

    /**
     * Delete a credential.
     *
     * @param request - DeleteCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCredentialResponse
     *
     * @param string                  $credentialName
     * @param DeleteCredentialRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredentialWithOptions($credentialName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteCredentialRequest
     *
     * @returns DeleteCredentialResponse
     *
     * @param string                  $credentialName
     * @param DeleteCredentialRequest $request
     *
     * @return DeleteCredentialResponse
     */
    public function deleteCredential($credentialName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCredentialWithOptions($credentialName, $request, $headers, $runtime);
    }

    /**
     * Delete a custom domain.
     *
     * @param request - DeleteCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string                    $domainName
     * @param DeleteCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCustomDomain',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a custom domain.
     *
     * @param request - DeleteCustomDomainRequest
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string                    $domainName
     * @param DeleteCustomDomainRequest $request
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * 删除知识库.
     *
     * @param request - DeleteKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseName
     * @param DeleteKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteKnowledgeBaseRequest
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $knowledgeBaseName
     * @param DeleteKnowledgeBaseRequest $request
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBase($knowledgeBaseName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime);
    }

    /**
     * 删除记忆存储.
     *
     * @param request - DeleteMemoryCollectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryCollectionResponse
     *
     * @param string                        $memoryCollectionName
     * @param DeleteMemoryCollectionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMemoryCollectionResponse
     */
    public function deleteMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemoryCollection',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memory-collections/' . Url::percentEncode($memoryCollectionName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除记忆存储.
     *
     * @param request - DeleteMemoryCollectionRequest
     *
     * @returns DeleteMemoryCollectionResponse
     *
     * @param string                        $memoryCollectionName
     * @param DeleteMemoryCollectionRequest $request
     *
     * @return DeleteMemoryCollectionResponse
     */
    public function deleteMemoryCollection($memoryCollectionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param request - DeleteModelProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelProxyResponse
     *
     * @param string                  $modelProxyName
     * @param DeleteModelProxyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteModelProxyResponse
     */
    public function deleteModelProxyWithOptions($modelProxyName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteModelProxyRequest
     *
     * @returns DeleteModelProxyResponse
     *
     * @param string                  $modelProxyName
     * @param DeleteModelProxyRequest $request
     *
     * @return DeleteModelProxyResponse
     */
    public function deleteModelProxy($modelProxyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelProxyWithOptions($modelProxyName, $request, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param request - DeleteModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string                    $modelServiceName
     * @param DeleteModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelServiceWithOptions($modelServiceName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteModelServiceRequest
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string                    $modelServiceName
     * @param DeleteModelServiceRequest $request
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelService($modelServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelServiceWithOptions($modelServiceName, $request, $headers, $runtime);
    }

    /**
     * 删除Sandbox.
     *
     * @param request - DeleteSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSandboxResponse
     *
     * @param string               $sandboxId
     * @param DeleteSandboxRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSandboxResponse
     */
    public function deleteSandboxWithOptions($sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteSandboxRequest
     *
     * @returns DeleteSandboxResponse
     *
     * @param string               $sandboxId
     * @param DeleteSandboxRequest $request
     *
     * @return DeleteSandboxResponse
     */
    public function deleteSandbox($sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSandboxWithOptions($sandboxId, $request, $headers, $runtime);
    }

    /**
     * 删除模板
     *
     * @remarks
     * 删除指定的模板。删除后，该模板将无法再用于创建新的沙箱。
     *
     * @param request - DeleteTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param string                $templateName
     * @param DeleteTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($templateName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
     * @param string                $templateName
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($templateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($templateName, $request, $headers, $runtime);
    }

    /**
     * 删除工具.
     *
     * @remarks
     * 删除指定的工具。删除操作不可逆，请谨慎操作。删除工具后，所有引用该工具的 Agent 将无法继续使用该工具。
     *
     * @param request - DeleteToolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteToolResponse
     *
     * @param string            $toolName
     * @param DeleteToolRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteToolResponse
     */
    public function deleteToolWithOptions($toolName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTool',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/tools/' . Url::percentEncode($toolName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteToolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工具.
     *
     * @remarks
     * 删除指定的工具。删除操作不可逆，请谨慎操作。删除工具后，所有引用该工具的 Agent 将无法继续使用该工具。
     *
     * @param request - DeleteToolRequest
     *
     * @returns DeleteToolResponse
     *
     * @param string            $toolName
     * @param DeleteToolRequest $request
     *
     * @return DeleteToolResponse
     */
    public function deleteTool($toolName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteToolWithOptions($toolName, $request, $headers, $runtime);
    }

    /**
     * 删除工作空间.
     *
     * @remarks
     * 删除工作空间
     *
     * @param request - DeleteWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作空间.
     *
     * @remarks
     * 删除工作空间
     *
     * @param request - DeleteWorkspaceRequest
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
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
     * @param request - GetAgentRuntimeEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentRuntimeEndpointResponse
     *
     * @param string                         $agentRuntimeId
     * @param string                         $agentRuntimeEndpointId
     * @param GetAgentRuntimeEndpointRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAgentRuntimeEndpointResponse
     */
    public function getAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetAgentRuntimeEndpointRequest
     *
     * @returns GetAgentRuntimeEndpointResponse
     *
     * @param string                         $agentRuntimeId
     * @param string                         $agentRuntimeEndpointId
     * @param GetAgentRuntimeEndpointRequest $request
     *
     * @return GetAgentRuntimeEndpointResponse
     */
    public function getAgentRuntimeEndpoint($agentRuntimeId, $agentRuntimeEndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentRuntimeEndpointWithOptions($agentRuntimeId, $agentRuntimeEndpointId, $request, $headers, $runtime);
    }

    /**
     * 获取浏览器实例详情.
     *
     * @remarks
     * 根据浏览器ID获取指定浏览器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param request - GetBrowserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBrowserResponse
     *
     * @param string            $browserId
     * @param GetBrowserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetBrowserResponse
     */
    public function getBrowserWithOptions($browserId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetBrowserRequest
     *
     * @returns GetBrowserResponse
     *
     * @param string            $browserId
     * @param GetBrowserRequest $request
     *
     * @return GetBrowserResponse
     */
    public function getBrowser($browserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBrowserWithOptions($browserId, $request, $headers, $runtime);
    }

    /**
     * 获取代码解释器详情.
     *
     * @remarks
     * 根据代码解释器ID获取指定代码解释器实例的详细信息，包括配置、状态、资源使用情况等。
     *
     * @param request - GetCodeInterpreterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCodeInterpreterResponse
     *
     * @param string                    $codeInterpreterId
     * @param GetCodeInterpreterRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetCodeInterpreterResponse
     */
    public function getCodeInterpreterWithOptions($codeInterpreterId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetCodeInterpreterRequest
     *
     * @returns GetCodeInterpreterResponse
     *
     * @param string                    $codeInterpreterId
     * @param GetCodeInterpreterRequest $request
     *
     * @return GetCodeInterpreterResponse
     */
    public function getCodeInterpreter($codeInterpreterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeInterpreterWithOptions($codeInterpreterId, $request, $headers, $runtime);
    }

    /**
     * Get a credential.
     *
     * @param request - GetCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialResponse
     *
     * @param string               $credentialName
     * @param GetCredentialRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCredentialResponse
     */
    public function getCredentialWithOptions($credentialName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetCredentialRequest
     *
     * @returns GetCredentialResponse
     *
     * @param string               $credentialName
     * @param GetCredentialRequest $request
     *
     * @return GetCredentialResponse
     */
    public function getCredential($credentialName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCredentialWithOptions($credentialName, $request, $headers, $runtime);
    }

    /**
     * 获取自定义域名详情.
     *
     * @param request - GetCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomDomainResponse
     *
     * @param string                 $domainName
     * @param GetCustomDomainRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCustomDomain',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义域名详情.
     *
     * @param request - GetCustomDomainRequest
     *
     * @returns GetCustomDomainResponse
     *
     * @param string                 $domainName
     * @param GetCustomDomainRequest $request
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * 获取知识库.
     *
     * @param request - GetKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $knowledgeBaseName
     * @param GetKnowledgeBaseRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetKnowledgeBaseRequest
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $knowledgeBaseName
     * @param GetKnowledgeBaseRequest $request
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBase($knowledgeBaseName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseWithOptions($knowledgeBaseName, $request, $headers, $runtime);
    }

    /**
     * 查询记忆存储详情.
     *
     * @param request - GetMemoryCollectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryCollectionResponse
     *
     * @param string                     $memoryCollectionName
     * @param GetMemoryCollectionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetMemoryCollectionResponse
     */
    public function getMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryCollection',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memory-collections/' . Url::percentEncode($memoryCollectionName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询记忆存储详情.
     *
     * @param request - GetMemoryCollectionRequest
     *
     * @returns GetMemoryCollectionResponse
     *
     * @param string                     $memoryCollectionName
     * @param GetMemoryCollectionRequest $request
     *
     * @return GetMemoryCollectionResponse
     */
    public function getMemoryCollection($memoryCollectionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime);
    }

    /**
     * 查看model.
     *
     * @param request - GetModelProxyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelProxyResponse
     *
     * @param string               $modelProxyName
     * @param GetModelProxyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetModelProxyResponse
     */
    public function getModelProxyWithOptions($modelProxyName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetModelProxyRequest
     *
     * @returns GetModelProxyResponse
     *
     * @param string               $modelProxyName
     * @param GetModelProxyRequest $request
     *
     * @return GetModelProxyResponse
     */
    public function getModelProxy($modelProxyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelProxyWithOptions($modelProxyName, $request, $headers, $runtime);
    }

    /**
     * 查看model.
     *
     * @param request - GetModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelServiceResponse
     *
     * @param string                 $modelServiceName
     * @param GetModelServiceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetModelServiceResponse
     */
    public function getModelServiceWithOptions($modelServiceName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetModelServiceRequest
     *
     * @returns GetModelServiceResponse
     *
     * @param string                 $modelServiceName
     * @param GetModelServiceRequest $request
     *
     * @return GetModelServiceResponse
     */
    public function getModelService($modelServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelServiceWithOptions($modelServiceName, $request, $headers, $runtime);
    }

    /**
     * 获取沙箱.
     *
     * @remarks
     * 根据沙箱ID获取指定沙箱的详细信息，包括状态、配置等。
     *
     * @param request - GetSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSandboxResponse
     *
     * @param string            $sandboxId
     * @param GetSandboxRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetSandboxResponse
     */
    public function getSandboxWithOptions($sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetSandboxRequest
     *
     * @returns GetSandboxResponse
     *
     * @param string            $sandboxId
     * @param GetSandboxRequest $request
     *
     * @return GetSandboxResponse
     */
    public function getSandbox($sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSandboxWithOptions($sandboxId, $request, $headers, $runtime);
    }

    /**
     * 获取模板
     *
     * @remarks
     * 根据模板名称获取指定模板的详细信息，包括配置、状态等。
     *
     * @param request - GetTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string             $templateName
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($templateName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param string             $templateName
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($templateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($templateName, $request, $headers, $runtime);
    }

    /**
     * 获取工具详情.
     *
     * @remarks
     * 根据工具名称获取工具的完整配置信息，包括工具的基本信息、资源配置、网络配置、运行状态等所有详细信息。
     *
     * @param request - GetToolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetToolResponse
     *
     * @param string         $toolName
     * @param GetToolRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetToolResponse
     */
    public function getToolWithOptions($toolName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTool',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/tools/' . Url::percentEncode($toolName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetToolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工具详情.
     *
     * @remarks
     * 根据工具名称获取工具的完整配置信息，包括工具的基本信息、资源配置、网络配置、运行状态等所有详细信息。
     *
     * @param request - GetToolRequest
     *
     * @returns GetToolResponse
     *
     * @param string         $toolName
     * @param GetToolRequest $request
     *
     * @return GetToolResponse
     */
    public function getTool($toolName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getToolWithOptions($toolName, $request, $headers, $runtime);
    }

    /**
     * 查看工作空间.
     *
     * @remarks
     * 查看工作空间
     *
     * @param request - GetWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceId
     * @param GetWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看工作空间.
     *
     * @remarks
     * 查看工作空间
     *
     * @param request - GetWorkspaceRequest
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceId
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间下的发现端点.
     *
     * @param request - GetWorkspaceDiscoveryEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceDiscoveryEndpointsResponse
     *
     * @param string                                $workspaceId
     * @param GetWorkspaceDiscoveryEndpointsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetWorkspaceDiscoveryEndpointsResponse
     */
    public function getWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspaceDiscoveryEndpoints',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces/' . Url::percentEncode($workspaceId) . '/discovery/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceDiscoveryEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间下的发现端点.
     *
     * @param request - GetWorkspaceDiscoveryEndpointsRequest
     *
     * @returns GetWorkspaceDiscoveryEndpointsResponse
     *
     * @param string                                $workspaceId
     * @param GetWorkspaceDiscoveryEndpointsRequest $request
     *
     * @return GetWorkspaceDiscoveryEndpointsResponse
     */
    public function getWorkspaceDiscoveryEndpoints($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve the list of access endpoints for an agent runtime.
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
     * Retrieve the list of access endpoints for an agent runtime.
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

        if (null !== $request->discoveryResourceGroupId) {
            @$query['discoveryResourceGroupId'] = $request->discoveryResourceGroupId;
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

        if (null !== $request->searchMode) {
            @$query['searchMode'] = $request->searchMode;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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
     * 自定义域名列表.
     *
     * @param request - ListCustomDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomDomainsResponse
     *
     * @param ListCustomDomainsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['domainType'] = $request->domainType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
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
            'action' => 'ListCustomDomains',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/custom-domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义域名列表.
     *
     * @param request - ListCustomDomainsRequest
     *
     * @returns ListCustomDomainsResponse
     *
     * @param ListCustomDomainsRequest $request
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCustomDomainsWithOptions($request, $headers, $runtime);
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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
     * 查询记忆存储列表.
     *
     * @param request - ListMemoryCollectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryCollectionsResponse
     *
     * @param ListMemoryCollectionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListMemoryCollectionsResponse
     */
    public function listMemoryCollectionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memoryCollectionName) {
            @$query['memoryCollectionName'] = $request->memoryCollectionName;
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

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemoryCollections',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memory-collections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询记忆存储列表.
     *
     * @param request - ListMemoryCollectionsRequest
     *
     * @returns ListMemoryCollectionsResponse
     *
     * @param ListMemoryCollectionsRequest $request
     *
     * @return ListMemoryCollectionsResponse
     */
    public function listMemoryCollections($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryCollectionsWithOptions($request, $headers, $runtime);
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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

        if (null !== $request->sandboxId) {
            @$query['sandboxId'] = $request->sandboxId;
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
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
     * 工具列表.
     *
     * @remarks
     * 查询工具列表，支持分页查询和按工具类型、工作空间等条件过滤。返回符合条件的工具列表及分页信息。
     *
     * @param request - ListToolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListToolsResponse
     *
     * @param ListToolsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListToolsResponse
     */
    public function listToolsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->toolName) {
            @$query['toolName'] = $request->toolName;
        }

        if (null !== $request->toolType) {
            @$query['toolType'] = $request->toolType;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceIds) {
            @$query['workspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTools',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/tools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 工具列表.
     *
     * @remarks
     * 查询工具列表，支持分页查询和按工具类型、工作空间等条件过滤。返回符合条件的工具列表及分页信息。
     *
     * @param request - ListToolsRequest
     *
     * @returns ListToolsResponse
     *
     * @param ListToolsRequest $request
     *
     * @return ListToolsResponse
     */
    public function listTools($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listToolsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取工作空间列表.
     *
     * @remarks
     * 获取工作空间列表
     *
     * @param request - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
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

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间列表.
     *
     * @remarks
     * 获取工作空间列表
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 暂停沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @param request - PauseSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseSandboxResponse
     *
     * @param string              $sandboxId
     * @param PauseSandboxRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PauseSandboxResponse
     */
    public function pauseSandboxWithOptions($sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PauseSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes/' . Url::percentEncode($sandboxId) . '/pause',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PauseSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @param request - PauseSandboxRequest
     *
     * @returns PauseSandboxResponse
     *
     * @param string              $sandboxId
     * @param PauseSandboxRequest $request
     *
     * @return PauseSandboxResponse
     */
    public function pauseSandbox($sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseSandboxWithOptions($sandboxId, $request, $headers, $runtime);
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
     * 恢复沙箱.
     *
     * @param request - ResumeSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeSandboxResponse
     *
     * @param string               $sandboxId
     * @param ResumeSandboxRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeSandboxResponse
     */
    public function resumeSandboxWithOptions($sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeSandbox',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/sandboxes/' . Url::percentEncode($sandboxId) . '/resume',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeSandboxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复沙箱.
     *
     * @param request - ResumeSandboxRequest
     *
     * @returns ResumeSandboxResponse
     *
     * @param string               $sandboxId
     * @param ResumeSandboxRequest $request
     *
     * @return ResumeSandboxResponse
     */
    public function resumeSandbox($sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeSandboxWithOptions($sandboxId, $request, $headers, $runtime);
    }

    /**
     * 停止沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @param request - StopSandboxRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSandboxResponse
     *
     * @param string             $sandboxId
     * @param StopSandboxRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StopSandboxResponse
     */
    public function stopSandboxWithOptions($sandboxId, $request, $headers, $runtime)
    {
        $request->validate();
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
     * 停止沙箱.
     *
     * @remarks
     * 停止指定的沙箱实例。停止后，沙箱将进入TERMINATED状态。
     *
     * @param request - StopSandboxRequest
     *
     * @returns StopSandboxResponse
     *
     * @param string             $sandboxId
     * @param StopSandboxRequest $request
     *
     * @return StopSandboxResponse
     */
    public function stopSandbox($sandboxId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSandboxWithOptions($sandboxId, $request, $headers, $runtime);
    }

    /**
     * Stop the TemplateMCP service.
     *
     * @param request - StopTemplateMCPRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTemplateMCPResponse
     *
     * @param string                 $templateName
     * @param StopTemplateMCPRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopTemplateMCPResponse
     */
    public function stopTemplateMCPWithOptions($templateName, $request, $headers, $runtime)
    {
        $request->validate();
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
     * Stop the TemplateMCP service.
     *
     * @param request - StopTemplateMCPRequest
     *
     * @returns StopTemplateMCPResponse
     *
     * @param string                 $templateName
     * @param StopTemplateMCPRequest $request
     *
     * @return StopTemplateMCPResponse
     */
    public function stopTemplateMCP($templateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTemplateMCPWithOptions($templateName, $request, $headers, $runtime);
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
     * 更新自定义域名.
     *
     * @param request - UpdateCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomDomainResponse
     *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomDomain',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新自定义域名.
     *
     * @param request - UpdateCustomDomainRequest
     *
     * @returns UpdateCustomDomainResponse
     *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomDomainWithOptions($domainName, $request, $headers, $runtime);
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
     * 修改记忆存储信息.
     *
     * @param request - UpdateMemoryCollectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryCollectionResponse
     *
     * @param string                        $memoryCollectionName
     * @param UpdateMemoryCollectionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMemoryCollectionResponse
     */
    public function updateMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemoryCollection',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/memory-collections/' . Url::percentEncode($memoryCollectionName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改记忆存储信息.
     *
     * @param request - UpdateMemoryCollectionRequest
     *
     * @returns UpdateMemoryCollectionResponse
     *
     * @param string                        $memoryCollectionName
     * @param UpdateMemoryCollectionRequest $request
     *
     * @return UpdateMemoryCollectionResponse
     */
    public function updateMemoryCollection($memoryCollectionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryCollectionWithOptions($memoryCollectionName, $request, $headers, $runtime);
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

    /**
     * 更新工具.
     *
     * @remarks
     * 更新现有工具的配置信息，可以修改工具的描述、资源配置、网络配置等。更新操作支持部分更新，只需提供需要修改的字段。
     *
     * @param request - UpdateToolRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateToolResponse
     *
     * @param string            $toolName
     * @param UpdateToolRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateToolResponse
     */
    public function updateToolWithOptions($toolName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTool',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/tools/' . Url::percentEncode($toolName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateToolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工具.
     *
     * @remarks
     * 更新现有工具的配置信息，可以修改工具的描述、资源配置、网络配置等。更新操作支持部分更新，只需提供需要修改的字段。
     *
     * @param request - UpdateToolRequest
     *
     * @returns UpdateToolResponse
     *
     * @param string            $toolName
     * @param UpdateToolRequest $request
     *
     * @return UpdateToolResponse
     */
    public function updateTool($toolName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateToolWithOptions($toolName, $request, $headers, $runtime);
    }

    /**
     * 更新工作空间.
     *
     * @remarks
     * 更新工作空间
     *
     * @param request - UpdateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param UpdateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspace',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工作空间.
     *
     * @remarks
     * 更新工作空间
     *
     * @param request - UpdateWorkspaceRequest
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间下的发现端点.
     *
     * @param request - UpdateWorkspaceDiscoveryEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceDiscoveryEndpointsResponse
     *
     * @param string                                   $workspaceId
     * @param UpdateWorkspaceDiscoveryEndpointsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateWorkspaceDiscoveryEndpointsResponse
     */
    public function updateWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspaceDiscoveryEndpoints',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/workspaces/' . Url::percentEncode($workspaceId) . '/discovery/endpoints',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceDiscoveryEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间下的发现端点.
     *
     * @param request - UpdateWorkspaceDiscoveryEndpointsRequest
     *
     * @returns UpdateWorkspaceDiscoveryEndpointsResponse
     *
     * @param string                                   $workspaceId
     * @param UpdateWorkspaceDiscoveryEndpointsRequest $request
     *
     * @return UpdateWorkspaceDiscoveryEndpointsResponse
     */
    public function updateWorkspaceDiscoveryEndpoints($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $request, $headers, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ActivateTemplateMCPRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ActivateTemplateMCPResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateFlowEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateFlowEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateFlowRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateFlowResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateIMBotRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CreateIMBotResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteFlowVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteIMBotRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteIMBotResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAccessTokenResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetBrowserResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCodeInterpreterResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowDraftRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowDraftResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetFlowVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetIMBotRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetIMBotResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetKnowledgeBaseResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryCollectionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelProxyResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetModelServiceResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetTemplateResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetToolResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\GetWorkspaceDiscoveryEndpointsResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowEndpointsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowEndpointsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowVersionsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListFlowVersionsResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListIMBotsRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ListIMBotsResponse;
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
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PauseSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishFlowVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishFlowVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\PublishRuntimeVersionResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ResumeSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopSandboxResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\StopTemplateMCPResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateAgentRuntimeResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCredentialResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCustomDomainRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateCustomDomainResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowDraftRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowDraftResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowEndpointRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowEndpointResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateFlowResponse;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateIMBotRequest;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateIMBotResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shenzhen' => 'agentrun.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'agentrun.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'agentrun.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'agentrun.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'agentrun.ap-southeast-1.aliyuncs.com',
        ];
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
     * Activates the `MCP service` for a `sandbox` `template`. This enables a client to access the `sandbox` using the MCP protocol.
     *
     * @remarks
     * After activation, the platform automatically deploys the `MCP service` `function` for the specified `sandbox` `template`. The `MCP service` ensures a unique mapping between an `mcp-session-id` and a `SandboxID`. When an MCP `client` invokes a `tool`, the `MCP service` automatically creates a `sandbox`.
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
     * Activates the `MCP service` for a `sandbox` `template`. This enables a client to access the `sandbox` using the MCP protocol.
     *
     * @remarks
     * After activation, the platform automatically deploys the `MCP service` `function` for the specified `sandbox` `template`. The `MCP service` ensures a unique mapping between an `mcp-session-id` and a `SandboxID`. When an MCP `client` invokes a `tool`, the `MCP service` automatically creates a `sandbox`.
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
     * Converts a Flow DSL.
     *
     * @remarks
     * This operation converts a third-party workflow DSL, such as Dify or n8n, into an AgentRun Flow definition. It performs compatibility checks, identifies plugins, and extracts metadata. The operation runs in dry-run mode, returning the converted Flow configuration, a compatibility analysis report, and the required Toolset installation configuration without creating a Flow resource.
     *
     * @param request - ConvertFlowDSLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertFlowDSLResponse
     *
     * @param ConvertFlowDSLRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ConvertFlowDSLResponse
     */
    public function convertFlowDSLWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ConvertFlowDSL',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/action/convertDsl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConvertFlowDSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts a Flow DSL.
     *
     * @remarks
     * This operation converts a third-party workflow DSL, such as Dify or n8n, into an AgentRun Flow definition. It performs compatibility checks, identifies plugins, and extracts metadata. The operation runs in dry-run mode, returning the converted Flow configuration, a compatibility analysis report, and the required Toolset installation configuration without creating a Flow resource.
     *
     * @param request - ConvertFlowDSLRequest
     *
     * @returns ConvertFlowDSLResponse
     *
     * @param ConvertFlowDSLRequest $request
     *
     * @return ConvertFlowDSLResponse
     */
    public function convertFlowDSL($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->convertFlowDSLWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an agent runtime.
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
     * Creates an agent runtime.
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
     * Create an access endpoint for an agent runtime.
     *
     * @remarks
     * Creates a new endpoint for the specified agent runtime, used for external access and invocation. An endpoint serves as the entry point through which an agent runtime provides services externally.
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
     * Create an access endpoint for an agent runtime.
     *
     * @remarks
     * Creates a new endpoint for the specified agent runtime, used for external access and invocation. An endpoint serves as the entry point through which an agent runtime provides services externally.
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
     * Create Browser Sandbox.
     *
     * @remarks
     * Create a new browser instance for executing web automation tasks. The browser instance provides features such as web browsing, element manipulation, and screenshot recording.
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
     * Create Browser Sandbox.
     *
     * @remarks
     * Create a new browser instance for executing web automation tasks. The browser instance provides features such as web browsing, element manipulation, and screenshot recording.
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
     * Creates a code interpreter.
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
     * Creates a code interpreter.
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
     * Creates a new credential.
     *
     * @remarks
     * This operation creates a credential for an agent.
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
     * Creates a new credential.
     *
     * @remarks
     * This operation creates a credential for an agent.
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
     * Creates a custom domain.
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
     * Creates a custom domain.
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
     * Creates a workflow.
     *
     * @remarks
     * Creates a flow orchestration agent. Flow orchestration is a core component of the AgentRun service that supports visual orchestration and version management.
     *
     * @param request - CreateFlowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateFlow',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workflow.
     *
     * @remarks
     * Creates a flow orchestration agent. Flow orchestration is a core component of the AgentRun service that supports visual orchestration and version management.
     *
     * @param request - CreateFlowRequest
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a flow endpoint.
     *
     * @remarks
     * 为指定工作流创建一个新的端点，用于对外提供服务访问。
     *
     * @param request - CreateFlowEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param CreateFlowEndpointRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowEndpointResponse
     */
    public function createFlowEndpointWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateFlowEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/endpoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFlowEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a flow endpoint.
     *
     * @remarks
     * 为指定工作流创建一个新的端点，用于对外提供服务访问。
     *
     * @param request - CreateFlowEndpointRequest
     *
     * @returns CreateFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param CreateFlowEndpointRequest $request
     *
     * @return CreateFlowEndpointResponse
     */
    public function createFlowEndpoint($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowEndpointWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Creates an IM Bot.
     *
     * @remarks
     * A successful request returns an HTTP 201 status code. Once created, an IM Bot\\"s status is always `running`. The response is in a standard format, and its `data` field contains an `IMBotInfo` object.
     *
     * @param request - CreateIMBotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIMBotResponse
     *
     * @param CreateIMBotRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIMBotResponse
     */
    public function createIMBotWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateIMBot',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/im-bots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIMBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IM Bot.
     *
     * @remarks
     * A successful request returns an HTTP 201 status code. Once created, an IM Bot\\"s status is always `running`. The response is in a standard format, and its `data` field contains an `IMBotInfo` object.
     *
     * @param request - CreateIMBotRequest
     *
     * @returns CreateIMBotResponse
     *
     * @param CreateIMBotRequest $request
     *
     * @return CreateIMBotResponse
     */
    public function createIMBot($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIMBotWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a knowledge base.
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
     * Creates a knowledge base.
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
     * Creates a memory collection.
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
     * Creates a memory collection.
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
     * Creates a Model Proxy.
     *
     * @remarks
     * This operation creates a Model Proxy based on the specified configuration.
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
     * Creates a Model Proxy.
     *
     * @remarks
     * This operation creates a Model Proxy based on the specified configuration.
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
     * Creates a model service.
     *
     * @remarks
     * This operation creates a model service, such as a code interpreter, based on the specified configuration.
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
     * Creates a model service.
     *
     * @remarks
     * This operation creates a model service, such as a code interpreter, based on the specified configuration.
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
     * Creates a sandbox.
     *
     * @remarks
     * Creates a new sandbox instance from a specified template. A sandbox provides an isolated execution environment to run code or launch a browser.
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
     * Creates a sandbox.
     *
     * @remarks
     * Creates a new sandbox instance from a specified template. A sandbox provides an isolated execution environment to run code or launch a browser.
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
     * Creates a template.
     *
     * @remarks
     * Creates a template for launching sandboxes. A template defines the runtime environment, resource configuration, and other settings for a sandbox.
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
     * Creates a template.
     *
     * @remarks
     * Creates a template for launching sandboxes. A template defines the runtime environment, resource configuration, and other settings for a sandbox.
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
     * Creates a tool.
     *
     * @remarks
     * This operation creates various types of tools, such as MCP, function call, and skill. An Agent can then call a tool to extend its capabilities.
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
     * Creates a tool.
     *
     * @remarks
     * This operation creates various types of tools, such as MCP, function call, and skill. An Agent can then call a tool to extend its capabilities.
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
     * Creates a workspace.
     *
     * @remarks
     * Creates a workspace.
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
     * Creates a workspace.
     *
     * @remarks
     * Creates a workspace.
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
     * Delete Agent Runtime.
     *
     * @remarks
     * Deletes a specified agent runtime instance, including all associated resources and data. This operation is irreversible. Proceed with caution.
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
     * Delete Agent Runtime.
     *
     * @remarks
     * Deletes a specified agent runtime instance, including all associated resources and data. This operation is irreversible. Proceed with caution.
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
     * Delete Agent Runtime Endpoint.
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
     * Delete Agent Runtime Endpoint.
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
     * Delete Browser Sandbox.
     *
     * @remarks
     * Delete the specified browser instance, including all its associated resources and data. The deletion is irreversible. Please proceed with caution.
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
     * Delete Browser Sandbox.
     *
     * @remarks
     * Delete the specified browser instance, including all its associated resources and data. The deletion is irreversible. Please proceed with caution.
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
     * Delete Code Interpreter.
     *
     * @remarks
     * Delete a specified code interpreter instance, including all its associated resources and data. This operation is irreversible. Please proceed with caution.
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
     * Delete Code Interpreter.
     *
     * @remarks
     * Delete a specified code interpreter instance, including all its associated resources and data. This operation is irreversible. Please proceed with caution.
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
     * Deletes the specified credential.
     *
     * @remarks
     * This operation deletes the specified credential. This action cannot be undone.
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
     * Deletes the specified credential.
     *
     * @remarks
     * This operation deletes the specified credential. This action cannot be undone.
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
     * Deletes a custom domain.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomainWithOptions($domainName, $headers, $runtime)
    {
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
     * Deletes a custom domain.
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string $domainName
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * Deletes a flow.
     *
     * @remarks
     * Deletes a specified flow instance, along with all its related resources and data. This operation is irreversible and cannot be undone. Use with caution.
     *
     * @param request - DeleteFlowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowResponse
     *
     * @param string            $flowName
     * @param DeleteFlowRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFlow',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a flow.
     *
     * @remarks
     * Deletes a specified flow instance, along with all its related resources and data. This operation is irreversible and cannot be undone. Use with caution.
     *
     * @param request - DeleteFlowRequest
     *
     * @returns DeleteFlowResponse
     *
     * @param string            $flowName
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Deletes a flow endpoint.
     *
     * @remarks
     * Deletes the specified flow endpoint. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteFlowEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param string                    $flowEndpointName
     * @param DeleteFlowEndpointRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowEndpointResponse
     */
    public function deleteFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFlowEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/endpoints/' . Url::percentEncode($flowEndpointName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFlowEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a flow endpoint.
     *
     * @remarks
     * Deletes the specified flow endpoint. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteFlowEndpointRequest
     *
     * @returns DeleteFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param string                    $flowEndpointName
     * @param DeleteFlowEndpointRequest $request
     *
     * @return DeleteFlowEndpointResponse
     */
    public function deleteFlowEndpoint($flowName, $flowEndpointName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime);
    }

    /**
     * Deletes a workflow version.
     *
     * @remarks
     * Deletes a specified version of a workflow. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteFlowVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowVersionResponse
     *
     * @param string                   $flowName
     * @param string                   $flowVersion
     * @param DeleteFlowVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlowVersionResponse
     */
    public function deleteFlowVersionWithOptions($flowName, $flowVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFlowVersion',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/versions/' . Url::percentEncode($flowVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workflow version.
     *
     * @remarks
     * Deletes a specified version of a workflow. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteFlowVersionRequest
     *
     * @returns DeleteFlowVersionResponse
     *
     * @param string                   $flowName
     * @param string                   $flowVersion
     * @param DeleteFlowVersionRequest $request
     *
     * @return DeleteFlowVersionResponse
     */
    public function deleteFlowVersion($flowName, $flowVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowVersionWithOptions($flowName, $flowVersion, $request, $headers, $runtime);
    }

    /**
     * Deletes an IM bot.
     *
     * @remarks
     * This operation deletes an IM bot via a `DELETE` request to the `/2025-09-10/agents/im-bots/{imBotId}` endpoint. A successful request returns an HTTP `204 No Content` status code and an empty response body.
     *
     * @param request - DeleteIMBotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIMBotResponse
     *
     * @param string             $imBotId
     * @param DeleteIMBotRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIMBotResponse
     */
    public function deleteIMBotWithOptions($imBotId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIMBot',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/im-bots/' . Url::percentEncode($imBotId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIMBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an IM bot.
     *
     * @remarks
     * This operation deletes an IM bot via a `DELETE` request to the `/2025-09-10/agents/im-bots/{imBotId}` endpoint. A successful request returns an HTTP `204 No Content` status code and an empty response body.
     *
     * @param request - DeleteIMBotRequest
     *
     * @returns DeleteIMBotResponse
     *
     * @param string             $imBotId
     * @param DeleteIMBotRequest $request
     *
     * @return DeleteIMBotResponse
     */
    public function deleteIMBot($imBotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIMBotWithOptions($imBotId, $request, $headers, $runtime);
    }

    /**
     * Deletes a knowledge base.
     * > This operation is permanent and cannot be undone.
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
     * Deletes a knowledge base.
     * > This operation is permanent and cannot be undone.
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
     * Deletes a memory collection.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryCollectionResponse
     *
     * @param string         $memoryCollectionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMemoryCollectionResponse
     */
    public function deleteMemoryCollectionWithOptions($memoryCollectionName, $headers, $runtime)
    {
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
     * Deletes a memory collection.
     *
     * @returns DeleteMemoryCollectionResponse
     *
     * @param string $memoryCollectionName
     *
     * @return DeleteMemoryCollectionResponse
     */
    public function deleteMemoryCollection($memoryCollectionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryCollectionWithOptions($memoryCollectionName, $headers, $runtime);
    }

    /**
     * Deletes a model proxy.
     *
     * @remarks
     * This operation deletes the specified model proxy configuration without deleting the underlying models or related resources.
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
     * Deletes a model proxy.
     *
     * @remarks
     * This operation deletes the specified model proxy configuration without deleting the underlying models or related resources.
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
     * Deletes a model service.
     *
     * @remarks
     * This operation deletes a model service. You must specify the name of the service to delete.
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
     * Deletes a model service.
     *
     * @remarks
     * This operation deletes a model service. You must specify the name of the service to delete.
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
     * Deletes a sandbox instance.
     *
     * @remarks
     * Deletes a sandbox instance.
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
     * Deletes a sandbox instance.
     *
     * @remarks
     * Deletes a sandbox instance.
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
     * Deletes a template.
     *
     * @remarks
     * Deletes the specified template. After you delete a template, you can no longer use it to create new sandboxes.
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
     * Deletes a template.
     *
     * @remarks
     * Deletes the specified template. After you delete a template, you can no longer use it to create new sandboxes.
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
     * Delete a tool.
     *
     * @remarks
     * Delete the specified tool. The delete operation is irreversible. Proceed with caution. After the tool is deleted, all Agents that reference this tool will no longer be able to use it.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteToolResponse
     *
     * @param string         $toolName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteToolResponse
     */
    public function deleteToolWithOptions($toolName, $headers, $runtime)
    {
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
     * Delete a tool.
     *
     * @remarks
     * Delete the specified tool. The delete operation is irreversible. Proceed with caution. After the tool is deleted, all Agents that reference this tool will no longer be able to use it.
     *
     * @returns DeleteToolResponse
     *
     * @param string $toolName
     *
     * @return DeleteToolResponse
     */
    public function deleteTool($toolName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteToolWithOptions($toolName, $headers, $runtime);
    }

    /**
     * Deletes a workspace.
     *
     * @remarks
     * Deletes the specified workspace.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
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
     * Deletes a workspace.
     *
     * @remarks
     * Deletes the specified workspace.
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string $workspaceId
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * Obtains an access token.
     *
     * @remarks
     * Obtains a temporary accessToken that is used to authenticate subsequent API requests.
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
     * Obtains an access token.
     *
     * @remarks
     * Obtains a temporary accessToken that is used to authenticate subsequent API requests.
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
     * Get Agent Runtime.
     *
     * @remarks
     * Retrieves detailed information about a specified agent runtime by its agent runtime ID, including configuration, status, resource usage, and more.
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
     * Get Agent Runtime.
     *
     * @remarks
     * Retrieves detailed information about a specified agent runtime by its agent runtime ID, including configuration, status, resource usage, and more.
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
     * Get Agent Runtime Access Endpoint.
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
     * Get Agent Runtime Access Endpoint.
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
     * GetBrowserSandbox.
     *
     * @remarks
     * Retrieves detailed information about a specified browser instance by browser ID, including configuration, status, resource usage, and more.
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
     * GetBrowserSandbox.
     *
     * @remarks
     * Retrieves detailed information about a specified browser instance by browser ID, including configuration, status, resource usage, and more.
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
     * Retrieves an interpreter.
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
     * Retrieves an interpreter.
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
     * Retrieves information about a specific credential.
     *
     * @remarks
     * Retrieves detailed information about a specified credential, including its configuration, metadata, and related resources.
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
     * Retrieves information about a specific credential.
     *
     * @remarks
     * Retrieves detailed information about a specified credential, including its configuration, metadata, and related resources.
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
     * Retrieves the configuration of a custom domain.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomDomainResponse
     *
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomainWithOptions($domainName, $headers, $runtime)
    {
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
     * Retrieves the configuration of a custom domain.
     *
     * @returns GetCustomDomainResponse
     *
     * @param string $domainName
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * Get flow details.
     *
     * @remarks
     * 根据工作流ID获取指定工作流的详细信息，包括配置、定义、版本信息等。
     *
     * @param request - GetFlowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowResponse
     *
     * @param string         $flowName
     * @param GetFlowRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowResponse
     */
    public function getFlowWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFlow',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get flow details.
     *
     * @remarks
     * 根据工作流ID获取指定工作流的详细信息，包括配置、定义、版本信息等。
     *
     * @param request - GetFlowRequest
     *
     * @returns GetFlowResponse
     *
     * @param string         $flowName
     * @param GetFlowRequest $request
     *
     * @return GetFlowResponse
     */
    public function getFlow($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Get the workflow draft.
     *
     * @remarks
     * 获取指定工作流的草稿版本，返回草稿中的配置信息。
     *
     * @param request - GetFlowDraftRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowDraftResponse
     *
     * @param string              $flowName
     * @param GetFlowDraftRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetFlowDraftResponse
     */
    public function getFlowDraftWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFlowDraft',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/draft',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFlowDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the workflow draft.
     *
     * @remarks
     * 获取指定工作流的草稿版本，返回草稿中的配置信息。
     *
     * @param request - GetFlowDraftRequest
     *
     * @returns GetFlowDraftResponse
     *
     * @param string              $flowName
     * @param GetFlowDraftRequest $request
     *
     * @return GetFlowDraftResponse
     */
    public function getFlowDraft($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowDraftWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a workflow endpoint.
     *
     * @remarks
     * 根据工作流ID和端点ID获取指定工作流端点的详细信息。
     *
     * @param request - GetFlowEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowEndpointResponse
     *
     * @param string                 $flowName
     * @param string                 $flowEndpointName
     * @param GetFlowEndpointRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetFlowEndpointResponse
     */
    public function getFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFlowEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/endpoints/' . Url::percentEncode($flowEndpointName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFlowEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a workflow endpoint.
     *
     * @remarks
     * 根据工作流ID和端点ID获取指定工作流端点的详细信息。
     *
     * @param request - GetFlowEndpointRequest
     *
     * @returns GetFlowEndpointResponse
     *
     * @param string                 $flowName
     * @param string                 $flowEndpointName
     * @param GetFlowEndpointRequest $request
     *
     * @return GetFlowEndpointResponse
     */
    public function getFlowEndpoint($flowName, $flowEndpointName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a workflow version.
     *
     * @remarks
     * Retrieves the details of a specific workflow version, including a complete configuration snapshot of its definition, environment variables, tracing configuration, and logging configuration.
     *
     * @param request - GetFlowVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowVersionResponse
     *
     * @param string                $flowName
     * @param string                $flowVersion
     * @param GetFlowVersionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetFlowVersionResponse
     */
    public function getFlowVersionWithOptions($flowName, $flowVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFlowVersion',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/versions/' . Url::percentEncode($flowVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a workflow version.
     *
     * @remarks
     * Retrieves the details of a specific workflow version, including a complete configuration snapshot of its definition, environment variables, tracing configuration, and logging configuration.
     *
     * @param request - GetFlowVersionRequest
     *
     * @returns GetFlowVersionResponse
     *
     * @param string                $flowName
     * @param string                $flowVersion
     * @param GetFlowVersionRequest $request
     *
     * @return GetFlowVersionResponse
     */
    public function getFlowVersion($flowName, $flowVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowVersionWithOptions($flowName, $flowVersion, $request, $headers, $runtime);
    }

    /**
     * Gets the details of a specific IM Bot.
     *
     * @remarks
     * GET /2025-09-10/agents/im-bots/{imBotId}；200 OK，Body 标准包装，data 为 IMBotInfo
     *
     * @param request - GetIMBotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIMBotResponse
     *
     * @param string          $imBotId
     * @param GetIMBotRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetIMBotResponse
     */
    public function getIMBotWithOptions($imBotId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIMBot',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/im-bots/' . Url::percentEncode($imBotId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIMBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the details of a specific IM Bot.
     *
     * @remarks
     * GET /2025-09-10/agents/im-bots/{imBotId}；200 OK，Body 标准包装，data 为 IMBotInfo
     *
     * @param request - GetIMBotRequest
     *
     * @returns GetIMBotResponse
     *
     * @param string          $imBotId
     * @param GetIMBotRequest $request
     *
     * @return GetIMBotResponse
     */
    public function getIMBot($imBotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIMBotWithOptions($imBotId, $request, $headers, $runtime);
    }

    /**
     * Gets information about a knowledge base.
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
     * Gets information about a knowledge base.
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
     * Retrieves details for a specific memory collection.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryCollectionResponse
     *
     * @param string         $memoryCollectionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMemoryCollectionResponse
     */
    public function getMemoryCollectionWithOptions($memoryCollectionName, $headers, $runtime)
    {
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
     * Retrieves details for a specific memory collection.
     *
     * @returns GetMemoryCollectionResponse
     *
     * @param string $memoryCollectionName
     *
     * @return GetMemoryCollectionResponse
     */
    public function getMemoryCollection($memoryCollectionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryCollectionWithOptions($memoryCollectionName, $headers, $runtime);
    }

    /**
     * Retrieves model governance information.
     *
     * @remarks
     * This operation retrieves the configuration details of a specific model proxy.
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
     * Retrieves model governance information.
     *
     * @remarks
     * This operation retrieves the configuration details of a specific model proxy.
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
     * Retrieves the details of a specified model service.
     *
     * @remarks
     * Retrieves the details of a specified model service.
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
     * Retrieves the details of a specified model service.
     *
     * @remarks
     * Retrieves the details of a specified model service.
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
     * Retrieves the details of a specific sandbox.
     *
     * @remarks
     * Retrieves the details of a specific sandbox by its `sandboxId`, including its status and configuration.
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
     * Retrieves the details of a specific sandbox.
     *
     * @remarks
     * Retrieves the details of a specific sandbox by its `sandboxId`, including its status and configuration.
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
     * Retrieves a template.
     *
     * @remarks
     * Retrieves the details of a template by its name. The response includes the template\\"s configuration and status.
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
     * Retrieves a template.
     *
     * @remarks
     * Retrieves the details of a template by its name. The response includes the template\\"s configuration and status.
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
     * Get a tool.
     *
     * @remarks
     * Obtain the complete configuration information of a tool by its name, including basic information, resource configuration, network configuration, running status, and all other detailed information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetToolResponse
     *
     * @param string         $toolName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetToolResponse
     */
    public function getToolWithOptions($toolName, $headers, $runtime)
    {
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
     * Get a tool.
     *
     * @remarks
     * Obtain the complete configuration information of a tool by its name, including basic information, resource configuration, network configuration, running status, and all other detailed information.
     *
     * @returns GetToolResponse
     *
     * @param string $toolName
     *
     * @return GetToolResponse
     */
    public function getTool($toolName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getToolWithOptions($toolName, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specific workspace.
     *
     * @remarks
     * Retrieves the details of a specific workspace.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
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
     * Retrieves the details of a specific workspace.
     *
     * @remarks
     * Retrieves the details of a specific workspace.
     *
     * @returns GetWorkspaceResponse
     *
     * @param string $workspaceId
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * Gets the discovery endpoints for a workspace.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceDiscoveryEndpointsResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceDiscoveryEndpointsResponse
     */
    public function getWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $headers, $runtime)
    {
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
     * Gets the discovery endpoints for a workspace.
     *
     * @returns GetWorkspaceDiscoveryEndpointsResponse
     *
     * @param string $workspaceId
     *
     * @return GetWorkspaceDiscoveryEndpointsResponse
     */
    public function getWorkspaceDiscoveryEndpoints($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceDiscoveryEndpointsWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * List Agent Runtime Endpoints.
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
     * List Agent Runtime Endpoints.
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
     * Retrieves agent runtime versions.
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
     * Retrieves agent runtime versions.
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
     * Retrieves a list of agent runtimes.
     *
     * @remarks
     * Retrieves a list of agent runtimes for the current user. You can filter the results based on criteria such as name and tags. This operation supports pagination.
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

        if (null !== $request->systemTags) {
            @$query['systemTags'] = $request->systemTags;
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
     * Retrieves a list of agent runtimes.
     *
     * @remarks
     * Retrieves a list of agent runtimes for the current user. You can filter the results based on criteria such as name and tags. This operation supports pagination.
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
     * List Browser Sandboxes.
     *
     * @remarks
     * Retrieves a list of all browser instances for the current user. Supports filtering by conditions such as name and status, and supports paginated queries.
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
     * List Browser Sandboxes.
     *
     * @remarks
     * Retrieves a list of all browser instances for the current user. Supports filtering by conditions such as name and status, and supports paginated queries.
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
     * List Code Interpreters.
     *
     * @remarks
     * Retrieve a list of all code interpreter instances for the current user, with support for filtering by name and pagination.
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
     * List Code Interpreters.
     *
     * @remarks
     * Retrieve a list of all code interpreter instances for the current user, with support for filtering by name and pagination.
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
     * Lists all credentials.
     *
     * @remarks
     * Lists the credentials in your account. This operation supports filtering and pagination.
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
     * Lists all credentials.
     *
     * @remarks
     * Lists the credentials in your account. This operation supports filtering and pagination.
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
     * Lists custom domains.
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
     * Lists custom domains.
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
     * List workflow endpoints.
     *
     * @remarks
     * Retrieve all endpoints for a specified workflow, with pagination support.
     *
     * @param request - ListFlowEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowEndpointsResponse
     *
     * @param string                   $flowId
     * @param ListFlowEndpointsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListFlowEndpointsResponse
     */
    public function listFlowEndpointsWithOptions($flowId, $request, $headers, $runtime)
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
            'action' => 'ListFlowEndpoints',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowId) . '/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFlowEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List workflow endpoints.
     *
     * @remarks
     * Retrieve all endpoints for a specified workflow, with pagination support.
     *
     * @param request - ListFlowEndpointsRequest
     *
     * @returns ListFlowEndpointsResponse
     *
     * @param string                   $flowId
     * @param ListFlowEndpointsRequest $request
     *
     * @return ListFlowEndpointsResponse
     */
    public function listFlowEndpoints($flowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowEndpointsWithOptions($flowId, $request, $headers, $runtime);
    }

    /**
     * Lists the versions of a flow.
     *
     * @remarks
     * Returns a paginated list of all versions for a specified flow.
     *
     * @param request - ListFlowVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowVersionsResponse
     *
     * @param string                  $flowName
     * @param ListFlowVersionsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowVersionsResponse
     */
    public function listFlowVersionsWithOptions($flowName, $request, $headers, $runtime)
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
            'action' => 'ListFlowVersions',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFlowVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the versions of a flow.
     *
     * @remarks
     * Returns a paginated list of all versions for a specified flow.
     *
     * @param request - ListFlowVersionsRequest
     *
     * @returns ListFlowVersionsResponse
     *
     * @param string                  $flowName
     * @param ListFlowVersionsRequest $request
     *
     * @return ListFlowVersionsResponse
     */
    public function listFlowVersions($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowVersionsWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * List flows.
     *
     * @remarks
     * 获取当前用户的工作流列表，支持按名称、工作空间等条件过滤，支持分页查询。
     *
     * @param request - ListFlowsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowName) {
            @$query['flowName'] = $request->flowName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
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
            'action' => 'ListFlows',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List flows.
     *
     * @remarks
     * 获取当前用户的工作流列表，支持按名称、工作空间等条件过滤，支持分页查询。
     *
     * @param request - ListFlowsRequest
     *
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a paginated list of IM bots.
     *
     * @remarks
     * Send a GET request to the `/2025-09-10/agents/im-bots` endpoint to retrieve a paginated list of IM bots. Use the `botName`, `agentRuntimeId`, `botBizType`, and `status` query parameters to filter the results. For pagination, the `pageNumber` defaults to 1 and the `pageSize` defaults to 20, with a maximum of 100.
     *
     * @param request - ListIMBotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIMBotsResponse
     *
     * @param ListIMBotsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListIMBotsResponse
     */
    public function listIMBotsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentRuntimeId) {
            @$query['agentRuntimeId'] = $request->agentRuntimeId;
        }

        if (null !== $request->botBizType) {
            @$query['botBizType'] = $request->botBizType;
        }

        if (null !== $request->botName) {
            @$query['botName'] = $request->botName;
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
            'action' => 'ListIMBots',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/im-bots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIMBotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of IM bots.
     *
     * @remarks
     * Send a GET request to the `/2025-09-10/agents/im-bots` endpoint to retrieve a paginated list of IM bots. Use the `botName`, `agentRuntimeId`, `botBizType`, and `status` query parameters to filter the results. For pagination, the `pageNumber` defaults to 1 and the `pageSize` defaults to 20, with a maximum of 100.
     *
     * @param request - ListIMBotsRequest
     *
     * @returns ListIMBotsResponse
     *
     * @param ListIMBotsRequest $request
     *
     * @return ListIMBotsResponse
     */
    public function listIMBots($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIMBotsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the knowledge bases in your account.
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
     * Lists the knowledge bases in your account.
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
     * Returns a paginated list of memory collections.
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
     * Returns a paginated list of memory collections.
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
     * Lists all model providers.
     *
     * @remarks
     * Lists the available model providers. This operation supports filtering and pagination.
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
     * Lists all model providers.
     *
     * @remarks
     * Lists the available model providers. This operation supports filtering and pagination.
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
     * Lists all Model Proxies.
     *
     * @remarks
     * Retrieves a paginated list of all Model Proxies for the current user. You can filter the list by status.
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
     * Lists all Model Proxies.
     *
     * @remarks
     * Retrieves a paginated list of all Model Proxies for the current user. You can filter the list by status.
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
     * Lists all models.
     *
     * @remarks
     * Retrieves a list of all models for the current user. You can filter the models by type and paginate the results.
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
     * Lists all models.
     *
     * @remarks
     * Retrieves a list of all models for the current user. You can filter the models by type and paginate the results.
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
     * Returns a list of sandboxes.
     *
     * @remarks
     * Retrieves a list of sandboxes for the current user. You can filter the results by template name, template type, or status. This operation supports pagination.
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
     * Returns a list of sandboxes.
     *
     * @remarks
     * Retrieves a list of sandboxes for the current user. You can filter the results by template name, template type, or status. This operation supports pagination.
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
     * Lists templates.
     *
     * @remarks
     * Lists all templates for the current user. You can filter the results by template type and use pagination.
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
     * Lists templates.
     *
     * @remarks
     * Lists all templates for the current user. You can filter the results by template type and use pagination.
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
     * List tools.
     *
     * @remarks
     * Query the tool list. Support paged query and conditional filtering by tool type, workspace, and other criteria. Return the list of tools that meet the conditions and paging information.
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
     * List tools.
     *
     * @remarks
     * Query the tool list. Support paged query and conditional filtering by tool type, workspace, and other criteria. Return the list of tools that meet the conditions and paging information.
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
     * Lists all workspaces in your account.
     *
     * @remarks
     * Lists all workspaces.
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
     * Lists all workspaces in your account.
     *
     * @remarks
     * Lists all workspaces.
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
     * Pause the sandbox and retain snapshots of its memory and file system. The sandbox enters the PAUSED state so that it can be recovered later.
     *
     * @remarks
     * This API is used to pause a sandbox. When invoked, the system takes a snapshot of the sandbox, capturing and persisting the memory and disk states. The user can recover the sandbox at a later time.
     * Note that sandbox snapshots are retained for only 30 days. After 30 days, recovery becomes unavailable.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseSandboxResponse
     *
     * @param string         $sandboxId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseSandboxResponse
     */
    public function pauseSandboxWithOptions($sandboxId, $headers, $runtime)
    {
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
     * Pause the sandbox and retain snapshots of its memory and file system. The sandbox enters the PAUSED state so that it can be recovered later.
     *
     * @remarks
     * This API is used to pause a sandbox. When invoked, the system takes a snapshot of the sandbox, capturing and persisting the memory and disk states. The user can recover the sandbox at a later time.
     * Note that sandbox snapshots are retained for only 30 days. After 30 days, recovery becomes unavailable.
     *
     * @returns PauseSandboxResponse
     *
     * @param string $sandboxId
     *
     * @return PauseSandboxResponse
     */
    public function pauseSandbox($sandboxId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseSandboxWithOptions($sandboxId, $headers, $runtime);
    }

    /**
     * Publishes a workflow version.
     *
     * @remarks
     * Publishes a new version of a specified workflow. This operation supports version management and rollbacks.
     *
     * @param request - PublishFlowVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishFlowVersionResponse
     *
     * @param string                    $flowName
     * @param PublishFlowVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PublishFlowVersionResponse
     */
    public function publishFlowVersionWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PublishFlowVersion',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a workflow version.
     *
     * @remarks
     * Publishes a new version of a specified workflow. This operation supports version management and rollbacks.
     *
     * @param request - PublishFlowVersionRequest
     *
     * @returns PublishFlowVersionResponse
     *
     * @param string                    $flowName
     * @param PublishFlowVersionRequest $request
     *
     * @return PublishFlowVersionResponse
     */
    public function publishFlowVersion($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFlowVersionWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Publishes a new version of an agent runtime.
     *
     * @remarks
     * Publishes a new version for a specified agent runtime for version management and deployment. The new version can include code updates, configuration changes, and other content.
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
     * Publishes a new version of an agent runtime.
     *
     * @remarks
     * Publishes a new version for a specified agent runtime for version management and deployment. The new version can include code updates, configuration changes, and other content.
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
     * Resume a paused sandbox instance to restore it from the PAUSED state to the READY (running) state.
     *
     * @remarks
     * This API resumes a sandbox instance from the paused state to the ready state, allowing the user to invoke it and restore it to the state it was in before being paused.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeSandboxResponse
     *
     * @param string         $sandboxId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeSandboxResponse
     */
    public function resumeSandboxWithOptions($sandboxId, $headers, $runtime)
    {
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
     * Resume a paused sandbox instance to restore it from the PAUSED state to the READY (running) state.
     *
     * @remarks
     * This API resumes a sandbox instance from the paused state to the ready state, allowing the user to invoke it and restore it to the state it was in before being paused.
     *
     * @returns ResumeSandboxResponse
     *
     * @param string $sandboxId
     *
     * @return ResumeSandboxResponse
     */
    public function resumeSandbox($sandboxId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeSandboxWithOptions($sandboxId, $headers, $runtime);
    }

    /**
     * Stops a sandbox.
     *
     * @remarks
     * Stops the specified sandbox instance. After the operation, the sandbox enters the TERMINATED state.
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
     * Stops a sandbox.
     *
     * @remarks
     * Stops the specified sandbox instance. After the operation, the sandbox enters the TERMINATED state.
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
     * Stops the TemplateMCP service.
     *
     * @remarks
     * Stopping the MCP service deletes the associated MCP resources and makes the endpoint inaccessible.
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
     * Stops the TemplateMCP service.
     *
     * @remarks
     * Stopping the MCP service deletes the associated MCP resources and makes the endpoint inaccessible.
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
     * UpdateAgentRuntime.
     *
     * @remarks
     * Updates the configuration of a specified agent runtime, including resource allocation, network configuration, and environment variables. The update operation triggers a runtime restart.
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
     * UpdateAgentRuntime.
     *
     * @remarks
     * Updates the configuration of a specified agent runtime, including resource allocation, network configuration, and environment variables. The update operation triggers a runtime restart.
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
     * Update Agent Runtime Endpoint.
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
     * Update Agent Runtime Endpoint.
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
     * Updates a credential.
     *
     * @remarks
     * Updates the configuration of a specified credential.
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
     * Updates a credential.
     *
     * @remarks
     * Updates the configuration of a specified credential.
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
     * Updates a custom domain.
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
     * Updates a custom domain.
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
     * Updates a workflow.
     *
     * @remarks
     * Updates the configuration of a specified workflow, including the definition, execution mode, and environment variables.
     *
     * @param request - UpdateFlowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowResponse
     *
     * @param string            $flowName
     * @param UpdateFlowRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlow',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a workflow.
     *
     * @remarks
     * Updates the configuration of a specified workflow, including the definition, execution mode, and environment variables.
     *
     * @param request - UpdateFlowRequest
     *
     * @returns UpdateFlowResponse
     *
     * @param string            $flowName
     * @param UpdateFlowRequest $request
     *
     * @return UpdateFlowResponse
     */
    public function updateFlow($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Update a flow draft.
     *
     * @remarks
     * 更新指定工作流的草稿版本，草稿更新不影响已发布的工作流版本。
     *
     * @param request - UpdateFlowDraftRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowDraftResponse
     *
     * @param string                 $flowName
     * @param UpdateFlowDraftRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFlowDraftResponse
     */
    public function updateFlowDraftWithOptions($flowName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowDraft',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/draft',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFlowDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a flow draft.
     *
     * @remarks
     * 更新指定工作流的草稿版本，草稿更新不影响已发布的工作流版本。
     *
     * @param request - UpdateFlowDraftRequest
     *
     * @returns UpdateFlowDraftResponse
     *
     * @param string                 $flowName
     * @param UpdateFlowDraftRequest $request
     *
     * @return UpdateFlowDraftResponse
     */
    public function updateFlowDraft($flowName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowDraftWithOptions($flowName, $request, $headers, $runtime);
    }

    /**
     * Update Flow Endpoint.
     *
     * @remarks
     * 更新指定工作流端点的配置信息，包括目标版本、路由配置等。
     *
     * @param request - UpdateFlowEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param string                    $flowEndpointName
     * @param UpdateFlowEndpointRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlowEndpointResponse
     */
    public function updateFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowEndpoint',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/flows/' . Url::percentEncode($flowName) . '/endpoints/' . Url::percentEncode($flowEndpointName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFlowEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Flow Endpoint.
     *
     * @remarks
     * 更新指定工作流端点的配置信息，包括目标版本、路由配置等。
     *
     * @param request - UpdateFlowEndpointRequest
     *
     * @returns UpdateFlowEndpointResponse
     *
     * @param string                    $flowName
     * @param string                    $flowEndpointName
     * @param UpdateFlowEndpointRequest $request
     *
     * @return UpdateFlowEndpointResponse
     */
    public function updateFlowEndpoint($flowName, $flowEndpointName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowEndpointWithOptions($flowName, $flowEndpointName, $request, $headers, $runtime);
    }

    /**
     * Updates an IM bot.
     *
     * @remarks
     * PUT /2025-09-10/agents/im-bots/{imBotId}；成功建议 HTTP 202，Body 标准包装，data 为更新后 IMBotInfo
     *
     * @param request - UpdateIMBotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIMBotResponse
     *
     * @param string             $imBotId
     * @param UpdateIMBotRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIMBotResponse
     */
    public function updateIMBotWithOptions($imBotId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateIMBot',
            'version' => '2025-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/2025-09-10/agents/im-bots/' . Url::percentEncode($imBotId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIMBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an IM bot.
     *
     * @remarks
     * PUT /2025-09-10/agents/im-bots/{imBotId}；成功建议 HTTP 202，Body 标准包装，data 为更新后 IMBotInfo
     *
     * @param request - UpdateIMBotRequest
     *
     * @returns UpdateIMBotResponse
     *
     * @param string             $imBotId
     * @param UpdateIMBotRequest $request
     *
     * @return UpdateIMBotResponse
     */
    public function updateIMBot($imBotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIMBotWithOptions($imBotId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a knowledge base.
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
     * Updates the configuration of a knowledge base.
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
     * Modifies a memory collection.
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
     * Modifies a memory collection.
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
     * Updates the configuration of a model proxy.
     *
     * @remarks
     * Use this operation to update the configuration of a specific model proxy.
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
     * Updates the configuration of a model proxy.
     *
     * @remarks
     * Use this operation to update the configuration of a specific model proxy.
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
     * Updates a model service.
     *
     * @remarks
     * This operation modifies the configuration of an existing model service.
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
     * Updates a model service.
     *
     * @remarks
     * This operation modifies the configuration of an existing model service.
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
     * Updates a template.
     *
     * @remarks
     * Updates a template\\"s configuration, including its resource configuration, network configuration, and environment variables.
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
     * Updates a template.
     *
     * @remarks
     * Updates a template\\"s configuration, including its resource configuration, network configuration, and environment variables.
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
     * Updates a tool.
     *
     * @remarks
     * Updates the configuration of an existing tool. You can modify its description, resource configuration, network configuration, and more. This operation supports partial updates. You only need to specify the fields that you want to modify.
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
     * Updates a tool.
     *
     * @remarks
     * Updates the configuration of an existing tool. You can modify its description, resource configuration, network configuration, and more. This operation supports partial updates. You only need to specify the fields that you want to modify.
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
     * Updates a workspace.
     *
     * @remarks
     * Updates the properties of a workspace.
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
     * Updates a workspace.
     *
     * @remarks
     * Updates the properties of a workspace.
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
     * Updates the discovery endpoint configuration for a specified workspace.
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
     * Updates the discovery endpoint configuration for a specified workspace.
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

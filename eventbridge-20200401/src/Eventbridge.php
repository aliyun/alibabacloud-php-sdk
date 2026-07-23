<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AskLumaRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AskLumaResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateAgentShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateServiceLinkedRoleForProductRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateServiceLinkedRoleForProductResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateTableRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateTableResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateTableShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventHouseRuntimeRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventHouseRuntimeResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTableRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTableResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DisableRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DisableRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EnableRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EnableRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetAgentRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetAgentResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetCatalogRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetCatalogResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventHouseRuntimeRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventHouseRuntimeResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetNamespaceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetTableRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetTableResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAgentsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAgentsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListCatalogsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListCatalogsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventHouseRuntimesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventHouseRuntimesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTablesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTablesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PauseEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PauseEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PollAskResultRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PollAskResultResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryAskLumaLogRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryAskLumaLogResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventHouseRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventHouseResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventTracesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventTracesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventByEventIdRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventByEventIdResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\StartEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\StartEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventPatternRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventPatternResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateAgentShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventHouseRuntimeRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventHouseRuntimeResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingBusinessOptionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingBusinessOptionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eventbridge extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'eventbridge-console.us-west-1.aliyuncs.com',
            'us-east-1' => 'eventbridge-console.us-east-1.aliyuncs.com',
            'eu-west-1' => 'eventbridge-console.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'eventbridge-console.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'eventbridge-console.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'eventbridge-console.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'eventbridge-console.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-shenzhen' => 'eventbridge-console.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'eventbridge-console.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'eventbridge-console.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'eventbridge-console.cn-qingdao.aliyuncs.com',
            'cn-huhehaote' => 'eventbridge-console.cn-huhehaote.aliyuncs.com',
            'cn-hongkong' => 'eventbridge-console.cn-hongkong.aliyuncs.com',
            'cn-heyuan' => 'eventbridge-console.cn-heyuan.aliyuncs.com',
            'cn-hangzhou' => 'eventbridge-console.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'eventbridge-console.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'eventbridge-console.cn-chengdu.aliyuncs.com',
            'cn-beijing-finance-1' => 'eventbridge-console.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing' => 'eventbridge-console.cn-beijing.aliyuncs.com',
            'ap-southeast-7' => 'eventbridge-console.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'eventbridge-console.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'eventbridge-console.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'eventbridge-console.ap-southeast-3.aliyuncs.com',
            'ap-southeast-1' => 'eventbridge-console.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'eventbridge-console.ap-northeast-2.aliyuncs.com',
            'ap-northeast-1' => 'eventbridge-console.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eventbridge', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Queries data using natural language.
     *
     * @param request - AskLumaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AskLumaResponse
     *
     * @param AskLumaRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AskLumaResponse
     */
    public function askLumaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['AgentName'] = $request->agentName;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->maxRows) {
            @$body['MaxRows'] = $request->maxRows;
        }

        if (null !== $request->question) {
            @$body['Question'] = $request->question;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AskLuma',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AskLumaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data using natural language.
     *
     * @param request - AskLumaRequest
     *
     * @returns AskLumaResponse
     *
     * @param AskLumaRequest $request
     *
     * @return AskLumaResponse
     */
    public function askLuma($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->askLumaWithOptions($request, $runtime);
    }

    /**
     * Checks whether a service-linked role is authorized for an account.
     *
     * @remarks
     * Checks for a service-linked role by name.
     *
     * @param request - CheckServiceLinkedRoleForProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleForProductResponse
     *
     * @param CheckServiceLinkedRoleForProductRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CheckServiceLinkedRoleForProductResponse
     */
    public function checkServiceLinkedRoleForProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRoleForProduct',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleForProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a service-linked role is authorized for an account.
     *
     * @remarks
     * Checks for a service-linked role by name.
     *
     * @param request - CheckServiceLinkedRoleForProductRequest
     *
     * @returns CheckServiceLinkedRoleForProductResponse
     *
     * @param CheckServiceLinkedRoleForProductRequest $request
     *
     * @return CheckServiceLinkedRoleForProductResponse
     */
    public function checkServiceLinkedRoleForProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleForProductWithOptions($request, $runtime);
    }

    /**
     * Creates a custom agent.
     *
     * @param tmpReq - CreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->metadataShrink) {
            @$body['Metadata'] = $request->metadataShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgent',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom agent.
     *
     * @param request - CreateAgentRequest
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     *
     * @return CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * Creates an API destination.
     *
     * @remarks
     * You can call this API operation to create an API destination.
     *
     * @param tmpReq - CreateApiDestinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiDestinationResponse
     *
     * @param CreateApiDestinationRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateApiDestinationResponse
     */
    public function createApiDestinationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApiDestinationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->httpApiParameters) {
            $request->httpApiParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->httpApiParameters, 'HttpApiParameters', 'json');
        }

        $query = [];
        if (null !== $request->apiDestinationName) {
            @$query['ApiDestinationName'] = $request->apiDestinationName;
        }

        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->httpApiParametersShrink) {
            @$query['HttpApiParameters'] = $request->httpApiParametersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiDestination',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API destination.
     *
     * @remarks
     * You can call this API operation to create an API destination.
     *
     * @param request - CreateApiDestinationRequest
     *
     * @returns CreateApiDestinationResponse
     *
     * @param CreateApiDestinationRequest $request
     *
     * @return CreateApiDestinationResponse
     */
    public function createApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiDestinationWithOptions($request, $runtime);
    }

    /**
     * Creates a connection configuration.
     *
     * @remarks
     * Creates a connection configuration.
     *
     * @param tmpReq - CreateConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConnectionResponse
     *
     * @param CreateConnectionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConnectionResponse
     */
    public function createConnectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateConnectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authParameters) {
            $request->authParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authParameters, 'AuthParameters', 'json');
        }

        if (null !== $tmpReq->networkParameters) {
            $request->networkParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkParameters, 'NetworkParameters', 'json');
        }

        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->authParametersShrink) {
            @$query['AuthParameters'] = $request->authParametersShrink;
        }

        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->networkParametersShrink) {
            @$query['NetworkParameters'] = $request->networkParametersShrink;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConnection',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a connection configuration.
     *
     * @remarks
     * Creates a connection configuration.
     *
     * @param request - CreateConnectionRequest
     *
     * @returns CreateConnectionResponse
     *
     * @param CreateConnectionRequest $request
     *
     * @return CreateConnectionResponse
     */
    public function createConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionWithOptions($request, $runtime);
    }

    /**
     * Creates an event bus.
     *
     * @remarks
     * Creates an event bus.
     *
     * @param request - CreateEventBusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventBusResponse
     *
     * @param CreateEventBusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEventBusResponse
     */
    public function createEventBusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEventBus',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an event bus.
     *
     * @remarks
     * Creates an event bus.
     *
     * @param request - CreateEventBusRequest
     *
     * @returns CreateEventBusResponse
     *
     * @param CreateEventBusRequest $request
     *
     * @return CreateEventBusResponse
     */
    public function createEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventBusWithOptions($request, $runtime);
    }

    /**
     * Creates an external event source.
     *
     * @remarks
     * Creates an external event source.
     *
     * @param tmpReq - CreateEventSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventSourceResponse
     *
     * @param CreateEventSourceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEventSourceResponse
     */
    public function createEventSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEventSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->externalSourceConfig) {
            $request->externalSourceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalSourceConfig, 'ExternalSourceConfig', 'json');
        }

        if (null !== $tmpReq->sourceHttpEventParameters) {
            $request->sourceHttpEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceHttpEventParameters, 'SourceHttpEventParameters', 'json');
        }

        if (null !== $tmpReq->sourceKafkaParameters) {
            $request->sourceKafkaParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceKafkaParameters, 'SourceKafkaParameters', 'json');
        }

        if (null !== $tmpReq->sourceMNSParameters) {
            $request->sourceMNSParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceMNSParameters, 'SourceMNSParameters', 'json');
        }

        if (null !== $tmpReq->sourceOSSEventParameters) {
            $request->sourceOSSEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceOSSEventParameters, 'SourceOSSEventParameters', 'json');
        }

        if (null !== $tmpReq->sourceRabbitMQParameters) {
            $request->sourceRabbitMQParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceRabbitMQParameters, 'SourceRabbitMQParameters', 'json');
        }

        if (null !== $tmpReq->sourceRocketMQParameters) {
            $request->sourceRocketMQParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceRocketMQParameters, 'SourceRocketMQParameters', 'json');
        }

        if (null !== $tmpReq->sourceSLSParameters) {
            $request->sourceSLSParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceSLSParameters, 'SourceSLSParameters', 'json');
        }

        if (null !== $tmpReq->sourceScheduledEventParameters) {
            $request->sourceScheduledEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceScheduledEventParameters, 'SourceScheduledEventParameters', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$body['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventSourceName) {
            @$body['EventSourceName'] = $request->eventSourceName;
        }

        if (null !== $request->externalSourceConfigShrink) {
            @$body['ExternalSourceConfig'] = $request->externalSourceConfigShrink;
        }

        if (null !== $request->externalSourceType) {
            @$body['ExternalSourceType'] = $request->externalSourceType;
        }

        if (null !== $request->linkedExternalSource) {
            @$body['LinkedExternalSource'] = $request->linkedExternalSource;
        }

        if (null !== $request->sourceHttpEventParametersShrink) {
            @$body['SourceHttpEventParameters'] = $request->sourceHttpEventParametersShrink;
        }

        if (null !== $request->sourceKafkaParametersShrink) {
            @$body['SourceKafkaParameters'] = $request->sourceKafkaParametersShrink;
        }

        if (null !== $request->sourceMNSParametersShrink) {
            @$body['SourceMNSParameters'] = $request->sourceMNSParametersShrink;
        }

        if (null !== $request->sourceOSSEventParametersShrink) {
            @$body['SourceOSSEventParameters'] = $request->sourceOSSEventParametersShrink;
        }

        if (null !== $request->sourceRabbitMQParametersShrink) {
            @$body['SourceRabbitMQParameters'] = $request->sourceRabbitMQParametersShrink;
        }

        if (null !== $request->sourceRocketMQParametersShrink) {
            @$body['SourceRocketMQParameters'] = $request->sourceRocketMQParametersShrink;
        }

        if (null !== $request->sourceSLSParametersShrink) {
            @$body['SourceSLSParameters'] = $request->sourceSLSParametersShrink;
        }

        if (null !== $request->sourceScheduledEventParametersShrink) {
            @$body['SourceScheduledEventParameters'] = $request->sourceScheduledEventParametersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEventSource',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an external event source.
     *
     * @remarks
     * Creates an external event source.
     *
     * @param request - CreateEventSourceRequest
     *
     * @returns CreateEventSourceResponse
     *
     * @param CreateEventSourceRequest $request
     *
     * @return CreateEventSourceResponse
     */
    public function createEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSourceWithOptions($request, $runtime);
    }

    /**
     * Creates an event stream.
     *
     * @remarks
     * Creates an event stream.
     *
     * @param tmpReq - CreateEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventStreamingResponse
     *
     * @param CreateEventStreamingRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEventStreamingResponse
     */
    public function createEventStreamingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEventStreamingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->runOptions) {
            $request->runOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runOptions, 'RunOptions', 'json');
        }

        if (null !== $tmpReq->sink) {
            $request->sinkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sink, 'Sink', 'json');
        }

        if (null !== $tmpReq->source) {
            $request->sourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }

        if (null !== $tmpReq->transforms) {
            $request->transformsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transforms, 'Transforms', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        if (null !== $request->filterPattern) {
            @$body['FilterPattern'] = $request->filterPattern;
        }

        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        if (null !== $request->runOptionsShrink) {
            @$body['RunOptions'] = $request->runOptionsShrink;
        }

        if (null !== $request->sinkShrink) {
            @$body['Sink'] = $request->sinkShrink;
        }

        if (null !== $request->sourceShrink) {
            @$body['Source'] = $request->sourceShrink;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->transformsShrink) {
            @$body['Transforms'] = $request->transformsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an event stream.
     *
     * @remarks
     * Creates an event stream.
     *
     * @param request - CreateEventStreamingRequest
     *
     * @returns CreateEventStreamingResponse
     *
     * @param CreateEventStreamingRequest $request
     *
     * @return CreateEventStreamingResponse
     */
    public function createEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Create Namespace.
     *
     * @param request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Namespace.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates an event rule.
     *
     * @remarks
     * Creates an event rule.
     *
     * @param tmpReq - CreateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventTargets) {
            $request->eventTargetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventTargets, 'EventTargets', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventTargetsShrink) {
            @$query['EventTargets'] = $request->eventTargetsShrink;
        }

        if (null !== $request->filterPattern) {
            @$query['FilterPattern'] = $request->filterPattern;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an event rule.
     *
     * @remarks
     * Creates an event rule.
     *
     * @param request - CreateRuleRequest
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * Creates the service-linked role (SLR) that is associated with a specified product.
     *
     * @remarks
     * Creates the service-linked role (SLR) that is associated with a specified product.
     *
     * @param request - CreateServiceLinkedRoleForProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleForProductResponse
     *
     * @param CreateServiceLinkedRoleForProductRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateServiceLinkedRoleForProductResponse
     */
    public function createServiceLinkedRoleForProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRoleForProduct',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleForProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates the service-linked role (SLR) that is associated with a specified product.
     *
     * @remarks
     * Creates the service-linked role (SLR) that is associated with a specified product.
     *
     * @param request - CreateServiceLinkedRoleForProductRequest
     *
     * @returns CreateServiceLinkedRoleForProductResponse
     *
     * @param CreateServiceLinkedRoleForProductRequest $request
     *
     * @return CreateServiceLinkedRoleForProductResponse
     */
    public function createServiceLinkedRoleForProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleForProductWithOptions($request, $runtime);
    }

    /**
     * Create a data catalog.
     *
     * @remarks
     * Creates an event target under the specified rule.
     *
     * @param tmpReq - CreateTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTableResponse
     *
     * @param CreateTableRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTableWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTableShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        if (null !== $tmpReq->retentionPolicy) {
            $request->retentionPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retentionPolicy, 'RetentionPolicy', 'json');
        }

        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->columnsShrink) {
            @$query['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->retentionPolicyShrink) {
            @$query['RetentionPolicy'] = $request->retentionPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTable',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a data catalog.
     *
     * @remarks
     * Creates an event target under the specified rule.
     *
     * @param request - CreateTableRequest
     *
     * @returns CreateTableResponse
     *
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom agent.
     *
     * @param request - DeleteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom agent.
     *
     * @param request - DeleteAgentRequest
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * Deletes an API destination.
     *
     * @remarks
     * You can call this API operation to delete an API destination.
     *
     * @param request - DeleteApiDestinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiDestinationResponse
     *
     * @param DeleteApiDestinationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteApiDestinationResponse
     */
    public function deleteApiDestinationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiDestinationName) {
            @$query['ApiDestinationName'] = $request->apiDestinationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiDestination',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API destination.
     *
     * @remarks
     * You can call this API operation to delete an API destination.
     *
     * @param request - DeleteApiDestinationRequest
     *
     * @returns DeleteApiDestinationResponse
     *
     * @param DeleteApiDestinationRequest $request
     *
     * @return DeleteApiDestinationResponse
     */
    public function deleteApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiDestinationWithOptions($request, $runtime);
    }

    /**
     * Deletes a connection.
     *
     * @remarks
     * You can call this API operation to delete a connection.
     *
     * @param request - DeleteConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnectionResponse
     *
     * @param DeleteConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConnection',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a connection.
     *
     * @remarks
     * You can call this API operation to delete a connection.
     *
     * @param request - DeleteConnectionRequest
     *
     * @returns DeleteConnectionResponse
     *
     * @param DeleteConnectionRequest $request
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionWithOptions($request, $runtime);
    }

    /**
     * Deletes a data integration job.
     *
     * @param tmpReq - DeleteEventAnalysisJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventAnalysisJobResponse
     *
     * @param DeleteEventAnalysisJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEventAnalysisJobResponse
     */
    public function deleteEventAnalysisJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteEventAnalysisJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceResource) {
            $request->sourceResourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceResource, 'SourceResource', 'json');
        }

        $body = [];
        if (null !== $request->sourceResourceShrink) {
            @$body['SourceResource'] = $request->sourceResourceShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEventAnalysisJob',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data integration job.
     *
     * @param request - DeleteEventAnalysisJobRequest
     *
     * @returns DeleteEventAnalysisJobResponse
     *
     * @param DeleteEventAnalysisJobRequest $request
     *
     * @return DeleteEventAnalysisJobResponse
     */
    public function deleteEventAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * Deletes an event bus.
     *
     * @remarks
     * Deletes an event bus.
     *
     * @param request - DeleteEventBusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventBusResponse
     *
     * @param DeleteEventBusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteEventBusResponse
     */
    public function deleteEventBusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventBus',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an event bus.
     *
     * @remarks
     * Deletes an event bus.
     *
     * @param request - DeleteEventBusRequest
     *
     * @returns DeleteEventBusResponse
     *
     * @param DeleteEventBusRequest $request
     *
     * @return DeleteEventBusResponse
     */
    public function deleteEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventBusWithOptions($request, $runtime);
    }

    /**
     * Deletes an EventHouse Runtime.
     *
     * @param request - DeleteEventHouseRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventHouseRuntimeResponse
     *
     * @param DeleteEventHouseRuntimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEventHouseRuntimeResponse
     */
    public function deleteEventHouseRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventHouseRuntime',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventHouseRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an EventHouse Runtime.
     *
     * @param request - DeleteEventHouseRuntimeRequest
     *
     * @returns DeleteEventHouseRuntimeResponse
     *
     * @param DeleteEventHouseRuntimeRequest $request
     *
     * @return DeleteEventHouseRuntimeResponse
     */
    public function deleteEventHouseRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventHouseRuntimeWithOptions($request, $runtime);
    }

    /**
     * Deletes an event source.
     *
     * @remarks
     * Deletes an event source.
     *
     * @param request - DeleteEventSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventSourceResponse
     *
     * @param DeleteEventSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEventSourceResponse
     */
    public function deleteEventSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventBusName) {
            @$body['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventSourceName) {
            @$body['EventSourceName'] = $request->eventSourceName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEventSource',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an event source.
     *
     * @remarks
     * Deletes an event source.
     *
     * @param request - DeleteEventSourceRequest
     *
     * @returns DeleteEventSourceResponse
     *
     * @param DeleteEventSourceRequest $request
     *
     * @return DeleteEventSourceResponse
     */
    public function deleteEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes an event stream.
     *
     * @remarks
     * Deletes an event stream.
     *
     * @param request - DeleteEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventStreamingResponse
     *
     * @param DeleteEventStreamingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEventStreamingResponse
     */
    public function deleteEventStreamingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an event stream.
     *
     * @remarks
     * Deletes an event stream.
     *
     * @param request - DeleteEventStreamingRequest
     *
     * @returns DeleteEventStreamingResponse
     *
     * @param DeleteEventStreamingRequest $request
     *
     * @return DeleteEventStreamingResponse
     */
    public function deleteEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Delete Namespace.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Namespace.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes an event rule.
     *
     * @remarks
     * You can call this API operation to delete an event rule.
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an event rule.
     *
     * @remarks
     * You can call this API operation to delete an event rule.
     *
     * @param request - DeleteRuleRequest
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * Delete table.
     *
     * @param request - DeleteTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTableResponse
     *
     * @param DeleteTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTableResponse
     */
    public function deleteTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTable',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete table.
     *
     * @param request - DeleteTableRequest
     *
     * @returns DeleteTableResponse
     *
     * @param DeleteTableRequest $request
     *
     * @return DeleteTableResponse
     */
    public function deleteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more event targets of an event rule.
     *
     * @remarks
     * You can call this API operation to delete one or more event targets of an event rule.
     *
     * @param tmpReq - DeleteTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTargetsResponse
     *
     * @param DeleteTargetsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTargetsResponse
     */
    public function deleteTargetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteTargetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->targetIds) {
            $request->targetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targetIds, 'TargetIds', 'json');
        }

        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->targetIdsShrink) {
            @$query['TargetIds'] = $request->targetIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTargets',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more event targets of an event rule.
     *
     * @remarks
     * You can call this API operation to delete one or more event targets of an event rule.
     *
     * @param request - DeleteTargetsRequest
     *
     * @returns DeleteTargetsResponse
     *
     * @param DeleteTargetsRequest $request
     *
     * @return DeleteTargetsResponse
     */
    public function deleteTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTargetsWithOptions($request, $runtime);
    }

    /**
     * Disables an event rule.
     *
     * @remarks
     * You can call this API operation to disable an event rule.
     *
     * @param request - DisableRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableRuleResponse
     *
     * @param DisableRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableRuleResponse
     */
    public function disableRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an event rule.
     *
     * @remarks
     * You can call this API operation to disable an event rule.
     *
     * @param request - DisableRuleRequest
     *
     * @returns DisableRuleResponse
     *
     * @param DisableRuleRequest $request
     *
     * @return DisableRuleResponse
     */
    public function disableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRuleWithOptions($request, $runtime);
    }

    /**
     * Discovers the schema and simple data of an event source, such as MySQL.
     *
     * @remarks
     * Discovers information about an event source.
     *
     * @param tmpReq - DiscoverEventSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DiscoverEventSourceResponse
     *
     * @param DiscoverEventSourceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DiscoverEventSourceResponse
     */
    public function discoverEventSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DiscoverEventSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceMySQLParameters) {
            $request->sourceMySQLParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceMySQLParameters, 'SourceMySQLParameters', 'json');
        }

        $body = [];
        if (null !== $request->sourceMySQLParametersShrink) {
            @$body['SourceMySQLParameters'] = $request->sourceMySQLParametersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DiscoverEventSource',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DiscoverEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Discovers the schema and simple data of an event source, such as MySQL.
     *
     * @remarks
     * Discovers information about an event source.
     *
     * @param request - DiscoverEventSourceRequest
     *
     * @returns DiscoverEventSourceResponse
     *
     * @param DiscoverEventSourceRequest $request
     *
     * @return DiscoverEventSourceResponse
     */
    public function discoverEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->discoverEventSourceWithOptions($request, $runtime);
    }

    /**
     * Enables an event rule.
     *
     * @remarks
     * You can call this API operation to enable an event rule.
     *
     * @param request - EnableRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableRuleResponse
     *
     * @param EnableRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableRuleResponse
     */
    public function enableRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an event rule.
     *
     * @remarks
     * You can call this API operation to enable an event rule.
     *
     * @param request - EnableRuleRequest
     *
     * @returns EnableRuleResponse
     *
     * @param EnableRuleRequest $request
     *
     * @return EnableRuleResponse
     */
    public function enableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRuleWithOptions($request, $runtime);
    }

    /**
     * Queries events from the event center.
     *
     * @param tmpReq - EventCenterQueryEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EventCenterQueryEventsResponse
     *
     * @param EventCenterQueryEventsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return EventCenterQueryEventsResponse
     */
    public function eventCenterQueryEventsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EventCenterQueryEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'Body', 'json');
        }

        $query = [];
        if (null !== $request->busName) {
            @$query['BusName'] = $request->busName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['Body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EventCenterQueryEvents',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EventCenterQueryEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries events from the event center.
     *
     * @param request - EventCenterQueryEventsRequest
     *
     * @returns EventCenterQueryEventsResponse
     *
     * @param EventCenterQueryEventsRequest $request
     *
     * @return EventCenterQueryEventsResponse
     */
    public function eventCenterQueryEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eventCenterQueryEventsWithOptions($request, $runtime);
    }

    /**
     * Retrieves agent metadata.
     *
     * @param request - GetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAgent',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves agent metadata.
     *
     * @param request - GetAgentRequest
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an API destination.
     *
     * @remarks
     * You can call this API operation to query the information about an API destination.
     *
     * @param request - GetApiDestinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiDestinationResponse
     *
     * @param GetApiDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApiDestinationResponse
     */
    public function getApiDestinationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiDestinationName) {
            @$query['ApiDestinationName'] = $request->apiDestinationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiDestination',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an API destination.
     *
     * @remarks
     * You can call this API operation to query the information about an API destination.
     *
     * @param request - GetApiDestinationRequest
     *
     * @returns GetApiDestinationResponse
     *
     * @param GetApiDestinationRequest $request
     *
     * @return GetApiDestinationResponse
     */
    public function getApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiDestinationWithOptions($request, $runtime);
    }

    /**
     * Get data catalog.
     *
     * @param request - GetCatalogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogResponse
     *
     * @param GetCatalogRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetCatalogResponse
     */
    public function getCatalogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCatalog',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get data catalog.
     *
     * @param request - GetCatalogRequest
     *
     * @returns GetCatalogResponse
     *
     * @param GetCatalogRequest $request
     *
     * @return GetCatalogResponse
     */
    public function getCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCatalogWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information of a single connection.
     *
     * @remarks
     * Queries the configuration information of a single connection.
     *
     * @param request - GetConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionResponse
     *
     * @param GetConnectionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConnectionResponse
     */
    public function getConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnection',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information of a single connection.
     *
     * @remarks
     * Queries the configuration information of a single connection.
     *
     * @param request - GetConnectionRequest
     *
     * @returns GetConnectionResponse
     *
     * @param GetConnectionRequest $request
     *
     * @return GetConnectionResponse
     */
    public function getConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about an event bus.
     *
     * @remarks
     * You can call this API operation to query the detailed information about an event bus.
     *
     * @param request - GetEventBusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventBusResponse
     *
     * @param GetEventBusRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetEventBusResponse
     */
    public function getEventBusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEventBus',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about an event bus.
     *
     * @remarks
     * You can call this API operation to query the detailed information about an event bus.
     *
     * @param request - GetEventBusRequest
     *
     * @returns GetEventBusResponse
     *
     * @param GetEventBusRequest $request
     *
     * @return GetEventBusResponse
     */
    public function getEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventBusWithOptions($request, $runtime);
    }

    /**
     * Queries the status and operation progress of an EventHouse Runtime.
     *
     * @param request - GetEventHouseRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventHouseRuntimeResponse
     *
     * @param GetEventHouseRuntimeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEventHouseRuntimeResponse
     */
    public function getEventHouseRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEventHouseRuntime',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEventHouseRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and operation progress of an EventHouse Runtime.
     *
     * @param request - GetEventHouseRuntimeRequest
     *
     * @returns GetEventHouseRuntimeResponse
     *
     * @param GetEventHouseRuntimeRequest $request
     *
     * @return GetEventHouseRuntimeResponse
     */
    public function getEventHouseRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventHouseRuntimeWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an event stream.
     *
     * @remarks
     * Retrieves the details of an event stream.
     *
     * @param request - GetEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventStreamingResponse
     *
     * @param GetEventStreamingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEventStreamingResponse
     */
    public function getEventStreamingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an event stream.
     *
     * @remarks
     * Retrieves the details of an event stream.
     *
     * @param request - GetEventStreamingRequest
     *
     * @returns GetEventStreamingResponse
     *
     * @param GetEventStreamingRequest $request
     *
     * @return GetEventStreamingResponse
     */
    public function getEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Get namespace.
     *
     * @param request - GetNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNamespace',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get namespace.
     *
     * @param request - GetNamespaceRequest
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an event rule.
     *
     * @remarks
     * Gets the details of an event rule.
     *
     * @param request - GetRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuleResponse
     *
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an event rule.
     *
     * @remarks
     * Gets the details of an event rule.
     *
     * @param request - GetRuleRequest
     *
     * @returns GetRuleResponse
     *
     * @param GetRuleRequest $request
     *
     * @return GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * Get Table.
     *
     * @param request - GetTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableResponse
     *
     * @param GetTableRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTableResponse
     */
    public function getTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTable',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Table.
     *
     * @param request - GetTableRequest
     *
     * @returns GetTableResponse
     *
     * @param GetTableRequest $request
     *
     * @return GetTableResponse
     */
    public function getTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of custom agents.
     *
     * @param request - ListAgentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->after) {
            @$body['After'] = $request->after;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAgents',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of custom agents.
     *
     * @param request - ListAgentsRequest
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     *
     * @return ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentsWithOptions($request, $runtime);
    }

    /**
     * Queries all Alibaba Cloud service event sources.
     *
     * @remarks
     * You can call this API operation to query all Alibaba Cloud service event sources.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliyunOfficialEventSourcesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListAliyunOfficialEventSourcesResponse
     */
    public function listAliyunOfficialEventSourcesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListAliyunOfficialEventSources',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAliyunOfficialEventSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all Alibaba Cloud service event sources.
     *
     * @remarks
     * You can call this API operation to query all Alibaba Cloud service event sources.
     *
     * @returns ListAliyunOfficialEventSourcesResponse
     *
     * @return ListAliyunOfficialEventSourcesResponse
     */
    public function listAliyunOfficialEventSources()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliyunOfficialEventSourcesWithOptions($runtime);
    }

    /**
     * Queries a list of API destinations.
     *
     * @remarks
     * You can use this API operation to query a list of API destinations.
     *
     * @param request - ListApiDestinationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiDestinationsResponse
     *
     * @param ListApiDestinationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListApiDestinationsResponse
     */
    public function listApiDestinationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiDestinationNamePrefix) {
            @$query['ApiDestinationNamePrefix'] = $request->apiDestinationNamePrefix;
        }

        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiDestinations',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApiDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of API destinations.
     *
     * @remarks
     * You can use this API operation to query a list of API destinations.
     *
     * @param request - ListApiDestinationsRequest
     *
     * @returns ListApiDestinationsResponse
     *
     * @param ListApiDestinationsRequest $request
     *
     * @return ListApiDestinationsResponse
     */
    public function listApiDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiDestinationsWithOptions($request, $runtime);
    }

    /**
     * Query data catalog list.
     *
     * @param request - ListCatalogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCatalogsResponse
     *
     * @param ListCatalogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCatalogs',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query data catalog list.
     *
     * @param request - ListCatalogsRequest
     *
     * @returns ListCatalogsResponse
     *
     * @param ListCatalogsRequest $request
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCatalogsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of connection configurations.
     *
     * @remarks
     * Queries the list of connection configurations.
     *
     * @param request - ListConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectionsResponse
     *
     * @param ListConnectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConnectionsResponse
     */
    public function listConnectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->connectionNamePrefix) {
            @$body['ConnectionNamePrefix'] = $request->connectionNamePrefix;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListConnections',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of connection configurations.
     *
     * @remarks
     * Queries the list of connection configurations.
     *
     * @param request - ListConnectionsRequest
     *
     * @returns ListConnectionsResponse
     *
     * @param ListConnectionsRequest $request
     *
     * @return ListConnectionsResponse
     */
    public function listConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionsWithOptions($request, $runtime);
    }

    /**
     * Queries all event buses.
     *
     * @remarks
     * You can call this API operation to query all event buses.
     *
     * @param request - ListEventBusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventBusesResponse
     *
     * @param ListEventBusesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListEventBusesResponse
     */
    public function listEventBusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventBuses',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEventBusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all event buses.
     *
     * @remarks
     * You can call this API operation to query all event buses.
     *
     * @param request - ListEventBusesRequest
     *
     * @returns ListEventBusesResponse
     *
     * @param ListEventBusesRequest $request
     *
     * @return ListEventBusesResponse
     */
    public function listEventBuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventBusesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of EventHouse runtimes.
     *
     * @param request - ListEventHouseRuntimesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventHouseRuntimesResponse
     *
     * @param ListEventHouseRuntimesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEventHouseRuntimesResponse
     */
    public function listEventHouseRuntimesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventHouseRuntimes',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEventHouseRuntimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of EventHouse runtimes.
     *
     * @param request - ListEventHouseRuntimesRequest
     *
     * @returns ListEventHouseRuntimesResponse
     *
     * @param ListEventHouseRuntimesRequest $request
     *
     * @return ListEventHouseRuntimesResponse
     */
    public function listEventHouseRuntimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventHouseRuntimesWithOptions($request, $runtime);
    }

    /**
     * Queries event streams.
     *
     * @remarks
     * Queries event streams.
     *
     * @param request - ListEventStreamingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventStreamingsResponse
     *
     * @param ListEventStreamingsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEventStreamingsResponse
     */
    public function listEventStreamingsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->namePrefix) {
            @$body['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sinkArn) {
            @$body['SinkArn'] = $request->sinkArn;
        }

        if (null !== $request->sourceArn) {
            @$body['SourceArn'] = $request->sourceArn;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEventStreamings',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEventStreamingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event streams.
     *
     * @remarks
     * Queries event streams.
     *
     * @param request - ListEventStreamingsRequest
     *
     * @returns ListEventStreamingsResponse
     *
     * @param ListEventStreamingsRequest $request
     *
     * @return ListEventStreamingsResponse
     */
    public function listEventStreamings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventStreamingsWithOptions($request, $runtime);
    }

    /**
     * Query namespace list.
     *
     * @param request - ListNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaces',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query namespace list.
     *
     * @param request - ListNamespacesRequest
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * Queries all rules of an event bus.
     *
     * @remarks
     * You can call this API operation to query all rules of an event bus.
     *
     * @param request - ListRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ruleNamePrefix) {
            @$query['RuleNamePrefix'] = $request->ruleNamePrefix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRules',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all rules of an event bus.
     *
     * @remarks
     * You can call this API operation to query all rules of an event bus.
     *
     * @param request - ListRulesRequest
     *
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * Query table list.
     *
     * @param request - ListTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query table list.
     *
     * @param request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablesWithOptions($request, $runtime);
    }

    /**
     * Queries all event targets of an event rule.
     *
     * @param request - ListTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTargetsResponse
     *
     * @param ListTargetsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTargetsResponse
     */
    public function listTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arn) {
            @$query['Arn'] = $request->arn;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTargets',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all event targets of an event rule.
     *
     * @param request - ListTargetsRequest
     *
     * @returns ListTargetsResponse
     *
     * @param ListTargetsRequest $request
     *
     * @return ListTargetsResponse
     */
    public function listTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTargetsWithOptions($request, $runtime);
    }

    /**
     * This operation queries all custom event sources.
     *
     * @remarks
     * Queries all custom event sources.
     *
     * @param request - ListUserDefinedEventSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDefinedEventSourcesResponse
     *
     * @param ListUserDefinedEventSourcesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserDefinedEventSourcesResponse
     */
    public function listUserDefinedEventSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDefinedEventSources',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserDefinedEventSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries all custom event sources.
     *
     * @remarks
     * Queries all custom event sources.
     *
     * @param request - ListUserDefinedEventSourcesRequest
     *
     * @returns ListUserDefinedEventSourcesResponse
     *
     * @param ListUserDefinedEventSourcesRequest $request
     *
     * @return ListUserDefinedEventSourcesResponse
     */
    public function listUserDefinedEventSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDefinedEventSourcesWithOptions($request, $runtime);
    }

    /**
     * Pauses a running event stream.
     *
     * @remarks
     * Pauses a running event stream.
     *
     * @param request - PauseEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseEventStreamingResponse
     *
     * @param PauseEventStreamingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PauseEventStreamingResponse
     */
    public function pauseEventStreamingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PauseEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a running event stream.
     *
     * @remarks
     * Pauses a running event stream.
     *
     * @param request - PauseEventStreamingRequest
     *
     * @returns PauseEventStreamingResponse
     *
     * @param PauseEventStreamingRequest $request
     *
     * @return PauseEventStreamingResponse
     */
    public function pauseEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Polls for natural language query results.
     *
     * @param request - PollAskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PollAskResultResponse
     *
     * @param PollAskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PollAskResultResponse
     */
    public function pollAskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentName) {
            @$body['AgentName'] = $request->agentName;
        }

        if (null !== $request->messageId) {
            @$body['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PollAskResult',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PollAskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Polls for natural language query results.
     *
     * @param request - PollAskResultRequest
     *
     * @returns PollAskResultResponse
     *
     * @param PollAskResultRequest $request
     *
     * @return PollAskResultResponse
     */
    public function pollAskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pollAskResultWithOptions($request, $runtime);
    }

    /**
     * Create or update event targets for the specified rule.
     *
     * @remarks
     * Creates or updates event targets for a specified rule.
     *
     * @param tmpReq - PutTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutTargetsResponse
     *
     * @param PutTargetsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return PutTargetsResponse
     */
    public function putTargetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PutTargetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->targets) {
            $request->targetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }

        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->targetsShrink) {
            @$query['Targets'] = $request->targetsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutTargets',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create or update event targets for the specified rule.
     *
     * @remarks
     * Creates or updates event targets for a specified rule.
     *
     * @param request - PutTargetsRequest
     *
     * @returns PutTargetsResponse
     *
     * @param PutTargetsRequest $request
     *
     * @return PutTargetsResponse
     */
    public function putTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the history logs of natural language queries.
     *
     * @param request - QueryAskLumaLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAskLumaLogResponse
     *
     * @param QueryAskLumaLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAskLumaLogResponse
     */
    public function queryAskLumaLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->after) {
            @$body['After'] = $request->after;
        }

        if (null !== $request->agentName) {
            @$body['AgentName'] = $request->agentName;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAskLumaLog',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAskLumaLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history logs of natural language queries.
     *
     * @param request - QueryAskLumaLogRequest
     *
     * @returns QueryAskLumaLogResponse
     *
     * @param QueryAskLumaLogRequest $request
     *
     * @return QueryAskLumaLogResponse
     */
    public function queryAskLumaLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAskLumaLogWithOptions($request, $runtime);
    }

    /**
     * Queries the content of an event.
     *
     * @remarks
     * You can call this API operation to query the content of an event.
     *
     * @param request - QueryEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEventResponse
     *
     * @param QueryEventRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryEventResponse
     */
    public function queryEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventSource) {
            @$query['EventSource'] = $request->eventSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEvent',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of an event.
     *
     * @remarks
     * You can call this API operation to query the content of an event.
     *
     * @param request - QueryEventRequest
     *
     * @returns QueryEventResponse
     *
     * @param QueryEventRequest $request
     *
     * @return QueryEventResponse
     */
    public function queryEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventWithOptions($request, $runtime);
    }

    /**
     * Query event store data.
     *
     * @param request - QueryEventHouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEventHouseResponse
     *
     * @param QueryEventHouseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryEventHouseResponse
     */
    public function queryEventHouseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEventHouse',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEventHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query event store data.
     *
     * @param request - QueryEventHouseRequest
     *
     * @returns QueryEventHouseResponse
     *
     * @param QueryEventHouseRequest $request
     *
     * @return QueryEventHouseResponse
     */
    public function queryEventHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventHouseWithOptions($request, $runtime);
    }

    /**
     * Queries event traces.
     *
     * @remarks
     * You can call this API operation to query event traces.
     *
     * @param request - QueryEventTracesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEventTracesResponse
     *
     * @param QueryEventTracesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryEventTracesResponse
     */
    public function queryEventTracesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEventTraces',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEventTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event traces.
     *
     * @remarks
     * You can call this API operation to query event traces.
     *
     * @param request - QueryEventTracesRequest
     *
     * @returns QueryEventTracesResponse
     *
     * @param QueryEventTracesRequest $request
     *
     * @return QueryEventTracesResponse
     */
    public function queryEventTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventTracesWithOptions($request, $runtime);
    }

    /**
     * Queries event traces by event ID.
     *
     * @remarks
     * You can call this API operation to query event traces by event ID.
     *
     * @param request - QueryTracedEventByEventIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTracedEventByEventIdResponse
     *
     * @param QueryTracedEventByEventIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryTracedEventByEventIdResponse
     */
    public function queryTracedEventByEventIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventSource) {
            @$query['EventSource'] = $request->eventSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTracedEventByEventId',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTracedEventByEventIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event traces by event ID.
     *
     * @remarks
     * You can call this API operation to query event traces by event ID.
     *
     * @param request - QueryTracedEventByEventIdRequest
     *
     * @returns QueryTracedEventByEventIdResponse
     *
     * @param QueryTracedEventByEventIdRequest $request
     *
     * @return QueryTracedEventByEventIdResponse
     */
    public function queryTracedEventByEventId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTracedEventByEventIdWithOptions($request, $runtime);
    }

    /**
     * This operation queries `event trace` data within a `time range`.
     *
     * @remarks
     * Queries for event traces within a specified time range.
     *
     * @param request - QueryTracedEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTracedEventsResponse
     *
     * @param QueryTracedEventsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTracedEventsResponse
     */
    public function queryTracedEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventSource) {
            @$query['EventSource'] = $request->eventSource;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->matchedRule) {
            @$query['MatchedRule'] = $request->matchedRule;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTracedEvents',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTracedEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries `event trace` data within a `time range`.
     *
     * @remarks
     * Queries for event traces within a specified time range.
     *
     * @param request - QueryTracedEventsRequest
     *
     * @returns QueryTracedEventsResponse
     *
     * @param QueryTracedEventsRequest $request
     *
     * @return QueryTracedEventsResponse
     */
    public function queryTracedEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTracedEventsWithOptions($request, $runtime);
    }

    /**
     * Enables a created or disabled event stream.
     *
     * @remarks
     * Enables a created or disabled event stream.
     *
     * @param request - StartEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartEventStreamingResponse
     *
     * @param StartEventStreamingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartEventStreamingResponse
     */
    public function startEventStreamingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a created or disabled event stream.
     *
     * @remarks
     * Enables a created or disabled event stream.
     *
     * @param request - StartEventStreamingRequest
     *
     * @returns StartEventStreamingResponse
     *
     * @param StartEventStreamingRequest $request
     *
     * @return StartEventStreamingResponse
     */
    public function startEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Tests if an event pattern matches a given event.
     *
     * @remarks
     * Use this action to test an event pattern before you apply it to a rule.
     *
     * @param request - TestEventPatternRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestEventPatternResponse
     *
     * @param TestEventPatternRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TestEventPatternResponse
     */
    public function testEventPatternWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->event) {
            @$body['Event'] = $request->event;
        }

        if (null !== $request->eventPattern) {
            @$body['EventPattern'] = $request->eventPattern;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TestEventPattern',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestEventPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests if an event pattern matches a given event.
     *
     * @remarks
     * Use this action to test an event pattern before you apply it to a rule.
     *
     * @param request - TestEventPatternRequest
     *
     * @returns TestEventPatternResponse
     *
     * @param TestEventPatternRequest $request
     *
     * @return TestEventPatternResponse
     */
    public function testEventPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testEventPatternWithOptions($request, $runtime);
    }

    /**
     * Checks whether the event source configuration is active.
     *
     * @remarks
     * Returns a list of all external event sources.
     *
     * @param tmpReq - TestEventSourceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestEventSourceConfigResponse
     *
     * @param TestEventSourceConfigRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return TestEventSourceConfigResponse
     */
    public function testEventSourceConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TestEventSourceConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceMySQLParameters) {
            $request->sourceMySQLParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceMySQLParameters, 'SourceMySQLParameters', 'json');
        }

        $body = [];
        if (null !== $request->sourceMySQLParametersShrink) {
            @$body['SourceMySQLParameters'] = $request->sourceMySQLParametersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TestEventSourceConfig',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestEventSourceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the event source configuration is active.
     *
     * @remarks
     * Returns a list of all external event sources.
     *
     * @param request - TestEventSourceConfigRequest
     *
     * @returns TestEventSourceConfigResponse
     *
     * @param TestEventSourceConfigRequest $request
     *
     * @return TestEventSourceConfigResponse
     */
    public function testEventSourceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testEventSourceConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a custom agent.
     *
     * @param tmpReq - UpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->metadataShrink) {
            @$body['Metadata'] = $request->metadataShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgent',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a custom agent.
     *
     * @param request - UpdateAgentRequest
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * Updates an API destination.
     *
     * @remarks
     * You can call this API operation to update an API destination.
     *
     * @param tmpReq - UpdateApiDestinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiDestinationResponse
     *
     * @param UpdateApiDestinationRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateApiDestinationResponse
     */
    public function updateApiDestinationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApiDestinationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->httpApiParameters) {
            $request->httpApiParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->httpApiParameters, 'HttpApiParameters', 'json');
        }

        $query = [];
        if (null !== $request->apiDestinationName) {
            @$query['ApiDestinationName'] = $request->apiDestinationName;
        }

        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->httpApiParametersShrink) {
            @$query['HttpApiParameters'] = $request->httpApiParametersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApiDestination',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an API destination.
     *
     * @remarks
     * You can call this API operation to update an API destination.
     *
     * @param request - UpdateApiDestinationRequest
     *
     * @returns UpdateApiDestinationResponse
     *
     * @param UpdateApiDestinationRequest $request
     *
     * @return UpdateApiDestinationResponse
     */
    public function updateApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiDestinationWithOptions($request, $runtime);
    }

    /**
     * Updates the connection configuration.
     *
     * @remarks
     * Updates the connection configuration.
     *
     * @param tmpReq - UpdateConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnectionResponse
     *
     * @param UpdateConnectionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateConnectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authParameters) {
            $request->authParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authParameters, 'AuthParameters', 'json');
        }

        if (null !== $tmpReq->networkParameters) {
            $request->networkParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkParameters, 'NetworkParameters', 'json');
        }

        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->authParametersShrink) {
            @$query['AuthParameters'] = $request->authParametersShrink;
        }

        if (null !== $request->connectionName) {
            @$query['ConnectionName'] = $request->connectionName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->networkParametersShrink) {
            @$query['NetworkParameters'] = $request->networkParametersShrink;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConnection',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the connection configuration.
     *
     * @remarks
     * Updates the connection configuration.
     *
     * @param request - UpdateConnectionRequest
     *
     * @returns UpdateConnectionResponse
     *
     * @param UpdateConnectionRequest $request
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }

    /**
     * Updates an event bus.
     *
     * @remarks
     * You can call this operation to update an event bus.
     *
     * @param request - UpdateEventBusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventBusResponse
     *
     * @param UpdateEventBusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateEventBusResponse
     */
    public function updateEventBusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEventBus',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an event bus.
     *
     * @remarks
     * You can call this operation to update an event bus.
     *
     * @param request - UpdateEventBusRequest
     *
     * @returns UpdateEventBusResponse
     *
     * @param UpdateEventBusRequest $request
     *
     * @return UpdateEventBusResponse
     */
    public function updateEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventBusWithOptions($request, $runtime);
    }

    /**
     * Updates an EventHouse Runtime.
     *
     * @param request - UpdateEventHouseRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventHouseRuntimeResponse
     *
     * @param UpdateEventHouseRuntimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateEventHouseRuntimeResponse
     */
    public function updateEventHouseRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cu) {
            @$query['Cu'] = $request->cu;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEventHouseRuntime',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventHouseRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an EventHouse Runtime.
     *
     * @param request - UpdateEventHouseRuntimeRequest
     *
     * @returns UpdateEventHouseRuntimeResponse
     *
     * @param UpdateEventHouseRuntimeRequest $request
     *
     * @return UpdateEventHouseRuntimeResponse
     */
    public function updateEventHouseRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventHouseRuntimeWithOptions($request, $runtime);
    }

    /**
     * Updates an event source.
     *
     * @remarks
     * You can call this API operation to update an event source.
     *
     * @param tmpReq - UpdateEventSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventSourceResponse
     *
     * @param UpdateEventSourceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEventSourceResponse
     */
    public function updateEventSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEventSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->externalSourceConfig) {
            $request->externalSourceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalSourceConfig, 'ExternalSourceConfig', 'json');
        }

        if (null !== $tmpReq->sourceHttpEventParameters) {
            $request->sourceHttpEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceHttpEventParameters, 'SourceHttpEventParameters', 'json');
        }

        if (null !== $tmpReq->sourceKafkaParameters) {
            $request->sourceKafkaParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceKafkaParameters, 'SourceKafkaParameters', 'json');
        }

        if (null !== $tmpReq->sourceMNSParameters) {
            $request->sourceMNSParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceMNSParameters, 'SourceMNSParameters', 'json');
        }

        if (null !== $tmpReq->sourceOSSEventParameters) {
            $request->sourceOSSEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceOSSEventParameters, 'SourceOSSEventParameters', 'json');
        }

        if (null !== $tmpReq->sourceRabbitMQParameters) {
            $request->sourceRabbitMQParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceRabbitMQParameters, 'SourceRabbitMQParameters', 'json');
        }

        if (null !== $tmpReq->sourceRocketMQParameters) {
            $request->sourceRocketMQParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceRocketMQParameters, 'SourceRocketMQParameters', 'json');
        }

        if (null !== $tmpReq->sourceSLSParameters) {
            $request->sourceSLSParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceSLSParameters, 'SourceSLSParameters', 'json');
        }

        if (null !== $tmpReq->sourceScheduledEventParameters) {
            $request->sourceScheduledEventParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceScheduledEventParameters, 'SourceScheduledEventParameters', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$body['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventSourceName) {
            @$body['EventSourceName'] = $request->eventSourceName;
        }

        if (null !== $request->externalSourceConfigShrink) {
            @$body['ExternalSourceConfig'] = $request->externalSourceConfigShrink;
        }

        if (null !== $request->externalSourceType) {
            @$body['ExternalSourceType'] = $request->externalSourceType;
        }

        if (null !== $request->linkedExternalSource) {
            @$body['LinkedExternalSource'] = $request->linkedExternalSource;
        }

        if (null !== $request->sourceHttpEventParametersShrink) {
            @$body['SourceHttpEventParameters'] = $request->sourceHttpEventParametersShrink;
        }

        if (null !== $request->sourceKafkaParametersShrink) {
            @$body['SourceKafkaParameters'] = $request->sourceKafkaParametersShrink;
        }

        if (null !== $request->sourceMNSParametersShrink) {
            @$body['SourceMNSParameters'] = $request->sourceMNSParametersShrink;
        }

        if (null !== $request->sourceOSSEventParametersShrink) {
            @$body['SourceOSSEventParameters'] = $request->sourceOSSEventParametersShrink;
        }

        if (null !== $request->sourceRabbitMQParametersShrink) {
            @$body['SourceRabbitMQParameters'] = $request->sourceRabbitMQParametersShrink;
        }

        if (null !== $request->sourceRocketMQParametersShrink) {
            @$body['SourceRocketMQParameters'] = $request->sourceRocketMQParametersShrink;
        }

        if (null !== $request->sourceSLSParametersShrink) {
            @$body['SourceSLSParameters'] = $request->sourceSLSParametersShrink;
        }

        if (null !== $request->sourceScheduledEventParametersShrink) {
            @$body['SourceScheduledEventParameters'] = $request->sourceScheduledEventParametersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEventSource',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an event source.
     *
     * @remarks
     * You can call this API operation to update an event source.
     *
     * @param request - UpdateEventSourceRequest
     *
     * @returns UpdateEventSourceResponse
     *
     * @param UpdateEventSourceRequest $request
     *
     * @return UpdateEventSourceResponse
     */
    public function updateEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventSourceWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information, event source information, event filtering pattern, or event target information of an event stream.
     *
     * @remarks
     * Modifies the basic information, event source information, event filtering pattern, or event target information of an event stream.
     *
     * @param tmpReq - UpdateEventStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventStreamingResponse
     *
     * @param UpdateEventStreamingRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEventStreamingResponse
     */
    public function updateEventStreamingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEventStreamingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->runOptions) {
            $request->runOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runOptions, 'RunOptions', 'json');
        }

        if (null !== $tmpReq->sink) {
            $request->sinkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sink, 'Sink', 'json');
        }

        if (null !== $tmpReq->source) {
            $request->sourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }

        if (null !== $tmpReq->transforms) {
            $request->transformsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transforms, 'Transforms', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        if (null !== $request->filterPattern) {
            @$body['FilterPattern'] = $request->filterPattern;
        }

        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        if (null !== $request->runOptionsShrink) {
            @$body['RunOptions'] = $request->runOptionsShrink;
        }

        if (null !== $request->sinkShrink) {
            @$body['Sink'] = $request->sinkShrink;
        }

        if (null !== $request->sourceShrink) {
            @$body['Source'] = $request->sourceShrink;
        }

        if (null !== $request->transformsShrink) {
            @$body['Transforms'] = $request->transformsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEventStreaming',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information, event source information, event filtering pattern, or event target information of an event stream.
     *
     * @remarks
     * Modifies the basic information, event source information, event filtering pattern, or event target information of an event stream.
     *
     * @param request - UpdateEventStreamingRequest
     *
     * @returns UpdateEventStreamingResponse
     *
     * @param UpdateEventStreamingRequest $request
     *
     * @return UpdateEventStreamingResponse
     */
    public function updateEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventStreamingWithOptions($request, $runtime);
    }

    /**
     * Querying an event stream.
     *
     * @remarks
     * Updates the billing method, compute unit (CU) resources, and other configurations of an event stream.
     *
     * @param request - UpdateEventStreamingBusinessOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventStreamingBusinessOptionResponse
     *
     * @param UpdateEventStreamingBusinessOptionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateEventStreamingBusinessOptionResponse
     */
    public function updateEventStreamingBusinessOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessMode) {
            @$body['BusinessMode'] = $request->businessMode;
        }

        if (null !== $request->eventStreamingName) {
            @$body['EventStreamingName'] = $request->eventStreamingName;
        }

        if (null !== $request->maxCapacityUnitCount) {
            @$body['MaxCapacityUnitCount'] = $request->maxCapacityUnitCount;
        }

        if (null !== $request->minCapacityUnitCount) {
            @$body['MinCapacityUnitCount'] = $request->minCapacityUnitCount;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEventStreamingBusinessOption',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventStreamingBusinessOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Querying an event stream.
     *
     * @remarks
     * Updates the billing method, compute unit (CU) resources, and other configurations of an event stream.
     *
     * @param request - UpdateEventStreamingBusinessOptionRequest
     *
     * @returns UpdateEventStreamingBusinessOptionResponse
     *
     * @param UpdateEventStreamingBusinessOptionRequest $request
     *
     * @return UpdateEventStreamingBusinessOptionResponse
     */
    public function updateEventStreamingBusinessOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventStreamingBusinessOptionWithOptions($request, $runtime);
    }

    /**
     * Modify namespace.
     *
     * @param request - UpdateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespace',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify namespace.
     *
     * @param request - UpdateNamespaceRequest
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of an event rule.
     *
     * @remarks
     * You can call this API operation to update the configurations of an event rule.
     *
     * @param request - UpdateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventBusName) {
            @$query['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->filterPattern) {
            @$query['FilterPattern'] = $request->filterPattern;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRule',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of an event rule.
     *
     * @remarks
     * You can call this API operation to update the configurations of an event rule.
     *
     * @param request - UpdateRuleRequest
     *
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * Update table.
     *
     * @remarks
     * Updates the configuration of an event rule.
     *
     * @param tmpReq - UpdateTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTableResponse
     *
     * @param UpdateTableRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTableResponse
     */
    public function updateTableWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTableShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addColumn) {
            $request->addColumnShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addColumn, 'AddColumn', 'json');
        }

        if (null !== $tmpReq->deleteColumn) {
            $request->deleteColumnShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deleteColumn, 'DeleteColumn', 'json');
        }

        if (null !== $tmpReq->renameColumn) {
            $request->renameColumnShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->renameColumn, 'RenameColumn', 'json');
        }

        if (null !== $tmpReq->updateColumnComment) {
            $request->updateColumnCommentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateColumnComment, 'UpdateColumnComment', 'json');
        }

        if (null !== $tmpReq->updateColumnType) {
            $request->updateColumnTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateColumnType, 'UpdateColumnType', 'json');
        }

        if (null !== $tmpReq->updateRetentionPolicy) {
            $request->updateRetentionPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateRetentionPolicy, 'UpdateRetentionPolicy', 'json');
        }

        $query = [];
        if (null !== $request->addColumnShrink) {
            @$query['AddColumn'] = $request->addColumnShrink;
        }

        if (null !== $request->catalog) {
            @$query['Catalog'] = $request->catalog;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteColumnShrink) {
            @$query['DeleteColumn'] = $request->deleteColumnShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->renameColumnShrink) {
            @$query['RenameColumn'] = $request->renameColumnShrink;
        }

        if (null !== $request->updateColumnCommentShrink) {
            @$query['UpdateColumnComment'] = $request->updateColumnCommentShrink;
        }

        if (null !== $request->updateColumnTypeShrink) {
            @$query['UpdateColumnType'] = $request->updateColumnTypeShrink;
        }

        if (null !== $request->updateComment) {
            @$query['UpdateComment'] = $request->updateComment;
        }

        if (null !== $request->updateRetentionPolicyShrink) {
            @$query['UpdateRetentionPolicy'] = $request->updateRetentionPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTable',
            'version' => '2020-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update table.
     *
     * @remarks
     * Updates the configuration of an event rule.
     *
     * @param request - UpdateTableRequest
     *
     * @returns UpdateTableResponse
     *
     * @param UpdateTableRequest $request
     *
     * @return UpdateTableResponse
     */
    public function updateTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableWithOptions($request, $runtime);
    }
}

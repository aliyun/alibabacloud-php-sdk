<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductResponse;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateServiceLinkedRoleForProductRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateServiceLinkedRoleForProductResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteRuleResponse;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PauseEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PauseEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsShrinkRequest;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateApiDestinationShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventBusRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventBusResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingBusinessOptionRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingBusinessOptionResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eventbridge extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * 检查账号是否存在ServiceLinkedRole授权.
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
     * 检查账号是否存在ServiceLinkedRole授权.
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
     * Creates a connection.
     *
     * @remarks
     * You can call this API operation to create a connection.
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
     * Creates a connection.
     *
     * @remarks
     * You can call this API operation to create a connection.
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
     * Creates an event source.
     *
     * @remarks
     * You can call this operation to create an event source.
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
     * Creates an event source.
     *
     * @remarks
     * You can call this operation to create an event source.
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
     * You can call this API operation to create an event stream.
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
     * You can call this API operation to create an event stream.
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
     * Creates an event rule.
     *
     * @remarks
     * You can call this API operation to create an event rule.
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
     * You can call this API operation to create an event rule.
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
     * Creates a service-linked role for your cloud service.
     *
     * @remarks
     * You can call this API operation to create a service-linked role for your cloud service.
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
     * Creates a service-linked role for your cloud service.
     *
     * @remarks
     * You can call this API operation to create a service-linked role for your cloud service.
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
     * Deletes an event bus.
     *
     * @remarks
     * You can call this API operation to delete an event bus.
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
     * You can call this API operation to delete an event bus.
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
     * Deletes an event source.
     *
     * @remarks
     * You can call this API operation to delete an event source.
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
     * You can call this API operation to delete an event source.
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
     * You can call this API operation to delete an event stream.
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
     * You can call this API operation to delete an event stream.
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
     * 发现EventSource(例如：Mysql)的Schema和SimpleData.
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
     * 发现EventSource(例如：Mysql)的Schema和SimpleData.
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
     * EventCenterQueryEvents.
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
     * EventCenterQueryEvents.
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
     * Queries the configurations of a connection.
     *
     * @remarks
     * You can call this API operation to query the configurations of a connection.
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
     * Queries the configurations of a connection.
     *
     * @remarks
     * You can call this API operation to query the configurations of a connection.
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
     * Queries the details of an event stream.
     *
     * @remarks
     * You can call this API operation to query the details of an event stream.
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
     * Queries the details of an event stream.
     *
     * @remarks
     * You can call this API operation to query the details of an event stream.
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
     * Queries the details of an event rule.
     *
     * @remarks
     * You can call this API operation to query the details of an event rule.
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
     * Queries the details of an event rule.
     *
     * @remarks
     * You can call this API operation to query the details of an event rule.
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
     * Queries all Alibaba Cloud service event sources.
     *
     * @remarks
     * You can call this API operation to query all Alibaba Cloud service event sources.
     *
     * @param request - ListAliyunOfficialEventSourcesRequest
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
     * Queries connections.
     *
     * @remarks
     * You can call this API operation to query connections.
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
     * Queries connections.
     *
     * @remarks
     * You can call this API operation to query connections.
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
     * Queries event streams.
     *
     * @remarks
     * You can call this API operation to query event streams.
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
     * You can call this API operation to query event streams.
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
     * Queries all custom event sources.
     *
     * @remarks
     * You can call this API operation to query custom event sources.
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
     * Queries all custom event sources.
     *
     * @remarks
     * You can call this API operation to query custom event sources.
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
     * Stops an event stream that is running.
     *
     * @remarks
     * You can call this API operation to stop an event stream that is running.
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
     * Stops an event stream that is running.
     *
     * @remarks
     * You can call this API operation to stop an event stream that is running.
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
     * Creates or updates event targets under a rule.
     *
     * @remarks
     * You can call this API operation to create or update event targets under a rule.
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
     * Creates or updates event targets under a rule.
     *
     * @remarks
     * You can call this API operation to create or update event targets under a rule.
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
     * Queries event traces by time range.
     *
     * @remarks
     * You can call this API operation to query event traces by time range.
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
     * Queries event traces by time range.
     *
     * @remarks
     * You can call this API operation to query event traces by time range.
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
     * Enables a created or deactivated event stream.
     *
     * @remarks
     * You can call this API operation to enable a created or deactivated event stream.
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
     * Enables a created or deactivated event stream.
     *
     * @remarks
     * You can call this API operation to enable a created or deactivated event stream.
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
     * Checks whether the event pattern matches the provided JSON format.
     *
     * @remarks
     * You can call this API operation to check whether the event pattern matches the provided JSON format.
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
     * Checks whether the event pattern matches the provided JSON format.
     *
     * @remarks
     * You can call this API operation to check whether the event pattern matches the provided JSON format.
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
     * Checks whether event source configurations are available.
     *
     * @remarks
     * You can call this API operation to query all custom event sources.
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
     * Checks whether event source configurations are available.
     *
     * @remarks
     * You can call this API operation to query all custom event sources.
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
     * Updates a connection.
     *
     * @remarks
     * You can call this API operation to update a connection.
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
     * Updates a connection.
     *
     * @remarks
     * You can call this API operation to update a connection.
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
     * Modifies the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
     *
     * @remarks
     * You can call this API operation to modify the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
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
     * Modifies the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
     *
     * @remarks
     * You can call this API operation to modify the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
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
     * 查询事件流
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
     * 查询事件流
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
}

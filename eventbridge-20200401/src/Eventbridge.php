<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EnableRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EnableRuleResponse;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingResponse;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingShrinkRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateRuleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * You can call this API operation to create an API destination.
     *   *
     * @param CreateApiDestinationRequest $tmpReq  CreateApiDestinationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiDestinationResponse CreateApiDestinationResponse
     */
    public function createApiDestinationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApiDestinationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->httpApiParameters)) {
            $request->httpApiParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->httpApiParameters, 'HttpApiParameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiDestinationName)) {
            $query['ApiDestinationName'] = $request->apiDestinationName;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->httpApiParametersShrink)) {
            $query['HttpApiParameters'] = $request->httpApiParametersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiDestination',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create an API destination.
     *   *
     * @param CreateApiDestinationRequest $request CreateApiDestinationRequest
     *
     * @return CreateApiDestinationResponse CreateApiDestinationResponse
     */
    public function createApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiDestinationWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create a connection.
     *   *
     * @param CreateConnectionRequest $tmpReq  CreateConnectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConnectionResponse CreateConnectionResponse
     */
    public function createConnectionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateConnectionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authParameters)) {
            $request->authParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authParameters, 'AuthParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->networkParameters)) {
            $request->networkParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networkParameters, 'NetworkParameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authParametersShrink)) {
            $query['AuthParameters'] = $request->authParametersShrink;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkParametersShrink)) {
            $query['NetworkParameters'] = $request->networkParametersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConnection',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create a connection.
     *   *
     * @param CreateConnectionRequest $request CreateConnectionRequest
     *
     * @return CreateConnectionResponse CreateConnectionResponse
     */
    public function createConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create an event bus.
     *   *
     * @param CreateEventBusRequest $request CreateEventBusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEventBusResponse CreateEventBusResponse
     */
    public function createEventBusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEventBus',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create an event bus.
     *   *
     * @param CreateEventBusRequest $request CreateEventBusRequest
     *
     * @return CreateEventBusResponse CreateEventBusResponse
     */
    public function createEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventBusWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create an event source.
     *   *
     * @param CreateEventSourceRequest $tmpReq  CreateEventSourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEventSourceResponse CreateEventSourceResponse
     */
    public function createEventSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEventSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sourceHttpEventParameters)) {
            $request->sourceHttpEventParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceHttpEventParameters, 'SourceHttpEventParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceKafkaParameters)) {
            $request->sourceKafkaParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceKafkaParameters, 'SourceKafkaParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceMNSParameters)) {
            $request->sourceMNSParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceMNSParameters, 'SourceMNSParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceRabbitMQParameters)) {
            $request->sourceRabbitMQParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceRabbitMQParameters, 'SourceRabbitMQParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceRocketMQParameters)) {
            $request->sourceRocketMQParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceRocketMQParameters, 'SourceRocketMQParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceSLSParameters)) {
            $request->sourceSLSParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceSLSParameters, 'SourceSLSParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceScheduledEventParameters)) {
            $request->sourceScheduledEventParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceScheduledEventParameters, 'SourceScheduledEventParameters', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $body['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventSourceName)) {
            $body['EventSourceName'] = $request->eventSourceName;
        }
        if (!Utils::isUnset($request->sourceHttpEventParametersShrink)) {
            $body['SourceHttpEventParameters'] = $request->sourceHttpEventParametersShrink;
        }
        if (!Utils::isUnset($request->sourceKafkaParametersShrink)) {
            $body['SourceKafkaParameters'] = $request->sourceKafkaParametersShrink;
        }
        if (!Utils::isUnset($request->sourceMNSParametersShrink)) {
            $body['SourceMNSParameters'] = $request->sourceMNSParametersShrink;
        }
        if (!Utils::isUnset($request->sourceRabbitMQParametersShrink)) {
            $body['SourceRabbitMQParameters'] = $request->sourceRabbitMQParametersShrink;
        }
        if (!Utils::isUnset($request->sourceRocketMQParametersShrink)) {
            $body['SourceRocketMQParameters'] = $request->sourceRocketMQParametersShrink;
        }
        if (!Utils::isUnset($request->sourceSLSParametersShrink)) {
            $body['SourceSLSParameters'] = $request->sourceSLSParametersShrink;
        }
        if (!Utils::isUnset($request->sourceScheduledEventParametersShrink)) {
            $body['SourceScheduledEventParameters'] = $request->sourceScheduledEventParametersShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEventSource',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to create an event source.
     *   *
     * @param CreateEventSourceRequest $request CreateEventSourceRequest
     *
     * @return CreateEventSourceResponse CreateEventSourceResponse
     */
    public function createEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSourceWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create an event stream.
     *   *
     * @param CreateEventStreamingRequest $tmpReq  CreateEventStreamingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEventStreamingResponse CreateEventStreamingResponse
     */
    public function createEventStreamingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEventStreamingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->runOptions)) {
            $request->runOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->runOptions, 'RunOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->sink)) {
            $request->sinkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sink, 'Sink', 'json');
        }
        if (!Utils::isUnset($tmpReq->source)) {
            $request->sourceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }
        if (!Utils::isUnset($tmpReq->transforms)) {
            $request->transformsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transforms, 'Transforms', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        if (!Utils::isUnset($request->filterPattern)) {
            $body['FilterPattern'] = $request->filterPattern;
        }
        if (!Utils::isUnset($request->runOptionsShrink)) {
            $body['RunOptions'] = $request->runOptionsShrink;
        }
        if (!Utils::isUnset($request->sinkShrink)) {
            $body['Sink'] = $request->sinkShrink;
        }
        if (!Utils::isUnset($request->sourceShrink)) {
            $body['Source'] = $request->sourceShrink;
        }
        if (!Utils::isUnset($request->transformsShrink)) {
            $body['Transforms'] = $request->transformsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create an event stream.
     *   *
     * @param CreateEventStreamingRequest $request CreateEventStreamingRequest
     *
     * @return CreateEventStreamingResponse CreateEventStreamingResponse
     */
    public function createEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create an event rule.
     *   *
     * @param CreateRuleRequest $tmpReq  CreateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->eventTargets)) {
            $request->eventTargetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventTargets, 'EventTargets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventTargetsShrink)) {
            $query['EventTargets'] = $request->eventTargetsShrink;
        }
        if (!Utils::isUnset($request->filterPattern)) {
            $query['FilterPattern'] = $request->filterPattern;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create an event rule.
     *   *
     * @param CreateRuleRequest $request CreateRuleRequest
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create a service-linked role for your cloud service.
     *   *
     * @param CreateServiceLinkedRoleForProductRequest $request CreateServiceLinkedRoleForProductRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleForProductResponse CreateServiceLinkedRoleForProductResponse
     */
    public function createServiceLinkedRoleForProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRoleForProduct',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleForProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create a service-linked role for your cloud service.
     *   *
     * @param CreateServiceLinkedRoleForProductRequest $request CreateServiceLinkedRoleForProductRequest
     *
     * @return CreateServiceLinkedRoleForProductResponse CreateServiceLinkedRoleForProductResponse
     */
    public function createServiceLinkedRoleForProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleForProductWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete an API destination.
     *   *
     * @param DeleteApiDestinationRequest $request DeleteApiDestinationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiDestinationResponse DeleteApiDestinationResponse
     */
    public function deleteApiDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDestinationName)) {
            $query['ApiDestinationName'] = $request->apiDestinationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiDestination',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete an API destination.
     *   *
     * @param DeleteApiDestinationRequest $request DeleteApiDestinationRequest
     *
     * @return DeleteApiDestinationResponse DeleteApiDestinationResponse
     */
    public function deleteApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiDestinationWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete a connection.
     *   *
     * @param DeleteConnectionRequest $request DeleteConnectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConnectionResponse DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnection',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete a connection.
     *   *
     * @param DeleteConnectionRequest $request DeleteConnectionRequest
     *
     * @return DeleteConnectionResponse DeleteConnectionResponse
     */
    public function deleteConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete an event bus.
     *   *
     * @param DeleteEventBusRequest $request DeleteEventBusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventBusResponse DeleteEventBusResponse
     */
    public function deleteEventBusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventBus',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete an event bus.
     *   *
     * @param DeleteEventBusRequest $request DeleteEventBusRequest
     *
     * @return DeleteEventBusResponse DeleteEventBusResponse
     */
    public function deleteEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventBusWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete an event source.
     *   *
     * @param DeleteEventSourceRequest $request DeleteEventSourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventSourceResponse DeleteEventSourceResponse
     */
    public function deleteEventSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventSourceName)) {
            $body['EventSourceName'] = $request->eventSourceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventSource',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete an event source.
     *   *
     * @param DeleteEventSourceRequest $request DeleteEventSourceRequest
     *
     * @return DeleteEventSourceResponse DeleteEventSourceResponse
     */
    public function deleteEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSourceWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete an event stream.
     *   *
     * @param DeleteEventStreamingRequest $request DeleteEventStreamingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventStreamingResponse DeleteEventStreamingResponse
     */
    public function deleteEventStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete an event stream.
     *   *
     * @param DeleteEventStreamingRequest $request DeleteEventStreamingRequest
     *
     * @return DeleteEventStreamingResponse DeleteEventStreamingResponse
     */
    public function deleteEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete an event rule.
     *   *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete an event rule.
     *   *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to delete one or more event targets of an event rule.
     *   *
     * @param DeleteTargetsRequest $tmpReq  DeleteTargetsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTargetsResponse DeleteTargetsResponse
     */
    public function deleteTargetsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteTargetsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->targetIds)) {
            $request->targetIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targetIds, 'TargetIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->targetIdsShrink)) {
            $query['TargetIds'] = $request->targetIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTargets',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to delete one or more event targets of an event rule.
     *   *
     * @param DeleteTargetsRequest $request DeleteTargetsRequest
     *
     * @return DeleteTargetsResponse DeleteTargetsResponse
     */
    public function deleteTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTargetsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to disable an event rule.
     *   *
     * @param DisableRuleRequest $request DisableRuleRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableRuleResponse DisableRuleResponse
     */
    public function disableRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to disable an event rule.
     *   *
     * @param DisableRuleRequest $request DisableRuleRequest
     *
     * @return DisableRuleResponse DisableRuleResponse
     */
    public function disableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to enable an event rule.
     *   *
     * @param EnableRuleRequest $request EnableRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableRuleResponse EnableRuleResponse
     */
    public function enableRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to enable an event rule.
     *   *
     * @param EnableRuleRequest $request EnableRuleRequest
     *
     * @return EnableRuleResponse EnableRuleResponse
     */
    public function enableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the information about an API destination.
     *   *
     * @param GetApiDestinationRequest $request GetApiDestinationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApiDestinationResponse GetApiDestinationResponse
     */
    public function getApiDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDestinationName)) {
            $query['ApiDestinationName'] = $request->apiDestinationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApiDestination',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the information about an API destination.
     *   *
     * @param GetApiDestinationRequest $request GetApiDestinationRequest
     *
     * @return GetApiDestinationResponse GetApiDestinationResponse
     */
    public function getApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiDestinationWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the configurations of a connection.
     *   *
     * @param GetConnectionRequest $request GetConnectionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionResponse GetConnectionResponse
     */
    public function getConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnection',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the configurations of a connection.
     *   *
     * @param GetConnectionRequest $request GetConnectionRequest
     *
     * @return GetConnectionResponse GetConnectionResponse
     */
    public function getConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the detailed information about an event bus.
     *   *
     * @param GetEventBusRequest $request GetEventBusRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEventBusResponse GetEventBusResponse
     */
    public function getEventBusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventBus',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the detailed information about an event bus.
     *   *
     * @param GetEventBusRequest $request GetEventBusRequest
     *
     * @return GetEventBusResponse GetEventBusResponse
     */
    public function getEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventBusWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the details of an event stream.
     *   *
     * @param GetEventStreamingRequest $request GetEventStreamingRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEventStreamingResponse GetEventStreamingResponse
     */
    public function getEventStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the details of an event stream.
     *   *
     * @param GetEventStreamingRequest $request GetEventStreamingRequest
     *
     * @return GetEventStreamingResponse GetEventStreamingResponse
     */
    public function getEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the details of an event rule.
     *   *
     * @param GetRuleRequest $request GetRuleRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the details of an event rule.
     *   *
     * @param GetRuleRequest $request GetRuleRequest
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query all Alibaba Cloud service event sources.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAliyunOfficialEventSourcesResponse ListAliyunOfficialEventSourcesResponse
     */
    public function listAliyunOfficialEventSourcesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListAliyunOfficialEventSources',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAliyunOfficialEventSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query all Alibaba Cloud service event sources.
     *   *
     * @return ListAliyunOfficialEventSourcesResponse ListAliyunOfficialEventSourcesResponse
     */
    public function listAliyunOfficialEventSources()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliyunOfficialEventSourcesWithOptions($runtime);
    }

    /**
     * You can use this API operation to query a list of API destinations.
     *   *
     * @param ListApiDestinationsRequest $request ListApiDestinationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApiDestinationsResponse ListApiDestinationsResponse
     */
    public function listApiDestinationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDestinationNamePrefix)) {
            $query['ApiDestinationNamePrefix'] = $request->apiDestinationNamePrefix;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApiDestinations',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApiDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this API operation to query a list of API destinations.
     *   *
     * @param ListApiDestinationsRequest $request ListApiDestinationsRequest
     *
     * @return ListApiDestinationsResponse ListApiDestinationsResponse
     */
    public function listApiDestinations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiDestinationsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query connections.
     *   *
     * @param ListConnectionsRequest $request ListConnectionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConnectionsResponse ListConnectionsResponse
     */
    public function listConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->connectionNamePrefix)) {
            $body['ConnectionNamePrefix'] = $request->connectionNamePrefix;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListConnections',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query connections.
     *   *
     * @param ListConnectionsRequest $request ListConnectionsRequest
     *
     * @return ListConnectionsResponse ListConnectionsResponse
     */
    public function listConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query all event buses.
     *   *
     * @param ListEventBusesRequest $request ListEventBusesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEventBusesResponse ListEventBusesResponse
     */
    public function listEventBusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namePrefix)) {
            $query['NamePrefix'] = $request->namePrefix;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventBuses',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventBusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query all event buses.
     *   *
     * @param ListEventBusesRequest $request ListEventBusesRequest
     *
     * @return ListEventBusesResponse ListEventBusesResponse
     */
    public function listEventBuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventBusesWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query event streams.
     *   *
     * @param ListEventStreamingsRequest $request ListEventStreamingsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEventStreamingsResponse ListEventStreamingsResponse
     */
    public function listEventStreamingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namePrefix)) {
            $body['NamePrefix'] = $request->namePrefix;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->sinkArn)) {
            $body['SinkArn'] = $request->sinkArn;
        }
        if (!Utils::isUnset($request->sourceArn)) {
            $body['SourceArn'] = $request->sourceArn;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEventStreamings',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventStreamingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query event streams.
     *   *
     * @param ListEventStreamingsRequest $request ListEventStreamingsRequest
     *
     * @return ListEventStreamingsResponse ListEventStreamingsResponse
     */
    public function listEventStreamings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventStreamingsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query all rules of an event bus.
     *   *
     * @param ListRulesRequest $request ListRulesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ruleNamePrefix)) {
            $query['RuleNamePrefix'] = $request->ruleNamePrefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query all rules of an event bus.
     *   *
     * @param ListRulesRequest $request ListRulesRequest
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListTargetsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTargetsResponse
     */
    public function listTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arn)) {
            $query['Arn'] = $request->arn;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTargets',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this API operation to query custom event sources.
     *   *
     * @param ListUserDefinedEventSourcesRequest $request ListUserDefinedEventSourcesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserDefinedEventSourcesResponse ListUserDefinedEventSourcesResponse
     */
    public function listUserDefinedEventSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->namePrefix)) {
            $query['NamePrefix'] = $request->namePrefix;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDefinedEventSources',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserDefinedEventSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query custom event sources.
     *   *
     * @param ListUserDefinedEventSourcesRequest $request ListUserDefinedEventSourcesRequest
     *
     * @return ListUserDefinedEventSourcesResponse ListUserDefinedEventSourcesResponse
     */
    public function listUserDefinedEventSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDefinedEventSourcesWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to stop an event stream that is running.
     *   *
     * @param PauseEventStreamingRequest $request PauseEventStreamingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseEventStreamingResponse PauseEventStreamingResponse
     */
    public function pauseEventStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PauseEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to stop an event stream that is running.
     *   *
     * @param PauseEventStreamingRequest $request PauseEventStreamingRequest
     *
     * @return PauseEventStreamingResponse PauseEventStreamingResponse
     */
    public function pauseEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to create or update event targets under a rule.
     *   *
     * @param PutTargetsRequest $tmpReq  PutTargetsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return PutTargetsResponse PutTargetsResponse
     */
    public function putTargetsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PutTargetsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->targets)) {
            $request->targetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->targetsShrink)) {
            $query['Targets'] = $request->targetsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutTargets',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to create or update event targets under a rule.
     *   *
     * @param PutTargetsRequest $request PutTargetsRequest
     *
     * @return PutTargetsResponse PutTargetsResponse
     */
    public function putTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putTargetsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query the content of an event.
     *   *
     * @param QueryEventRequest $request QueryEventRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEventResponse QueryEventResponse
     */
    public function queryEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventSource)) {
            $query['EventSource'] = $request->eventSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEvent',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query the content of an event.
     *   *
     * @param QueryEventRequest $request QueryEventRequest
     *
     * @return QueryEventResponse QueryEventResponse
     */
    public function queryEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query event traces.
     *   *
     * @param QueryEventTracesRequest $request QueryEventTracesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEventTracesResponse QueryEventTracesResponse
     */
    public function queryEventTracesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEventTraces',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query event traces.
     *   *
     * @param QueryEventTracesRequest $request QueryEventTracesRequest
     *
     * @return QueryEventTracesResponse QueryEventTracesResponse
     */
    public function queryEventTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventTracesWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query event traces by event ID.
     *   *
     * @param QueryTracedEventByEventIdRequest $request QueryTracedEventByEventIdRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTracedEventByEventIdResponse QueryTracedEventByEventIdResponse
     */
    public function queryTracedEventByEventIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventSource)) {
            $query['EventSource'] = $request->eventSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTracedEventByEventId',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTracedEventByEventIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query event traces by event ID.
     *   *
     * @param QueryTracedEventByEventIdRequest $request QueryTracedEventByEventIdRequest
     *
     * @return QueryTracedEventByEventIdResponse QueryTracedEventByEventIdResponse
     */
    public function queryTracedEventByEventId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTracedEventByEventIdWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to query event traces by time range.
     *   *
     * @param QueryTracedEventsRequest $request QueryTracedEventsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTracedEventsResponse QueryTracedEventsResponse
     */
    public function queryTracedEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventSource)) {
            $query['EventSource'] = $request->eventSource;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->matchedRule)) {
            $query['MatchedRule'] = $request->matchedRule;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTracedEvents',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTracedEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query event traces by time range.
     *   *
     * @param QueryTracedEventsRequest $request QueryTracedEventsRequest
     *
     * @return QueryTracedEventsResponse QueryTracedEventsResponse
     */
    public function queryTracedEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTracedEventsWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to enable a created or deactivated event stream.
     *   *
     * @param StartEventStreamingRequest $request StartEventStreamingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartEventStreamingResponse StartEventStreamingResponse
     */
    public function startEventStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to enable a created or deactivated event stream.
     *   *
     * @param StartEventStreamingRequest $request StartEventStreamingRequest
     *
     * @return StartEventStreamingResponse StartEventStreamingResponse
     */
    public function startEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to check whether the event pattern matches the provided JSON format.
     *   *
     * @param TestEventPatternRequest $request TestEventPatternRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TestEventPatternResponse TestEventPatternResponse
     */
    public function testEventPatternWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->event)) {
            $body['Event'] = $request->event;
        }
        if (!Utils::isUnset($request->eventPattern)) {
            $body['EventPattern'] = $request->eventPattern;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TestEventPattern',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestEventPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to check whether the event pattern matches the provided JSON format.
     *   *
     * @param TestEventPatternRequest $request TestEventPatternRequest
     *
     * @return TestEventPatternResponse TestEventPatternResponse
     */
    public function testEventPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testEventPatternWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to update an API destination.
     *   *
     * @param UpdateApiDestinationRequest $tmpReq  UpdateApiDestinationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApiDestinationResponse UpdateApiDestinationResponse
     */
    public function updateApiDestinationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateApiDestinationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->httpApiParameters)) {
            $request->httpApiParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->httpApiParameters, 'HttpApiParameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiDestinationName)) {
            $query['ApiDestinationName'] = $request->apiDestinationName;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->httpApiParametersShrink)) {
            $query['HttpApiParameters'] = $request->httpApiParametersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApiDestination',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApiDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to update an API destination.
     *   *
     * @param UpdateApiDestinationRequest $request UpdateApiDestinationRequest
     *
     * @return UpdateApiDestinationResponse UpdateApiDestinationResponse
     */
    public function updateApiDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiDestinationWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to update a connection.
     *   *
     * @param UpdateConnectionRequest $tmpReq  UpdateConnectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConnectionResponse UpdateConnectionResponse
     */
    public function updateConnectionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConnectionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authParameters)) {
            $request->authParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authParameters, 'AuthParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->networkParameters)) {
            $request->networkParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networkParameters, 'NetworkParameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authParametersShrink)) {
            $query['AuthParameters'] = $request->authParametersShrink;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $query['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkParametersShrink)) {
            $query['NetworkParameters'] = $request->networkParametersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnection',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to update a connection.
     *   *
     * @param UpdateConnectionRequest $request UpdateConnectionRequest
     *
     * @return UpdateConnectionResponse UpdateConnectionResponse
     */
    public function updateConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to modify an event bus.
     *   *
     * @param UpdateEventBusRequest $request UpdateEventBusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEventBusResponse UpdateEventBusResponse
     */
    public function updateEventBusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventBus',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEventBusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to modify an event bus.
     *   *
     * @param UpdateEventBusRequest $request UpdateEventBusRequest
     *
     * @return UpdateEventBusResponse UpdateEventBusResponse
     */
    public function updateEventBus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventBusWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to update an event source.
     *   *
     * @param UpdateEventSourceRequest $tmpReq  UpdateEventSourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEventSourceResponse UpdateEventSourceResponse
     */
    public function updateEventSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEventSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sourceHttpEventParameters)) {
            $request->sourceHttpEventParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceHttpEventParameters, 'SourceHttpEventParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceKafkaParameters)) {
            $request->sourceKafkaParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceKafkaParameters, 'SourceKafkaParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceMNSParameters)) {
            $request->sourceMNSParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceMNSParameters, 'SourceMNSParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceRabbitMQParameters)) {
            $request->sourceRabbitMQParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceRabbitMQParameters, 'SourceRabbitMQParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceRocketMQParameters)) {
            $request->sourceRocketMQParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceRocketMQParameters, 'SourceRocketMQParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceSLSParameters)) {
            $request->sourceSLSParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceSLSParameters, 'SourceSLSParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceScheduledEventParameters)) {
            $request->sourceScheduledEventParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceScheduledEventParameters, 'SourceScheduledEventParameters', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $body['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventSourceName)) {
            $body['EventSourceName'] = $request->eventSourceName;
        }
        if (!Utils::isUnset($request->sourceHttpEventParametersShrink)) {
            $body['SourceHttpEventParameters'] = $request->sourceHttpEventParametersShrink;
        }
        if (!Utils::isUnset($request->sourceKafkaParametersShrink)) {
            $body['SourceKafkaParameters'] = $request->sourceKafkaParametersShrink;
        }
        if (!Utils::isUnset($request->sourceMNSParametersShrink)) {
            $body['SourceMNSParameters'] = $request->sourceMNSParametersShrink;
        }
        if (!Utils::isUnset($request->sourceRabbitMQParametersShrink)) {
            $body['SourceRabbitMQParameters'] = $request->sourceRabbitMQParametersShrink;
        }
        if (!Utils::isUnset($request->sourceRocketMQParametersShrink)) {
            $body['SourceRocketMQParameters'] = $request->sourceRocketMQParametersShrink;
        }
        if (!Utils::isUnset($request->sourceSLSParametersShrink)) {
            $body['SourceSLSParameters'] = $request->sourceSLSParametersShrink;
        }
        if (!Utils::isUnset($request->sourceScheduledEventParametersShrink)) {
            $body['SourceScheduledEventParameters'] = $request->sourceScheduledEventParametersShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventSource',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEventSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to update an event source.
     *   *
     * @param UpdateEventSourceRequest $request UpdateEventSourceRequest
     *
     * @return UpdateEventSourceResponse UpdateEventSourceResponse
     */
    public function updateEventSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventSourceWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to modify the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
     *   *
     * @param UpdateEventStreamingRequest $tmpReq  UpdateEventStreamingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEventStreamingResponse UpdateEventStreamingResponse
     */
    public function updateEventStreamingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEventStreamingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->runOptions)) {
            $request->runOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->runOptions, 'RunOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->sink)) {
            $request->sinkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sink, 'Sink', 'json');
        }
        if (!Utils::isUnset($tmpReq->source)) {
            $request->sourceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }
        if (!Utils::isUnset($tmpReq->transforms)) {
            $request->transformsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transforms, 'Transforms', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventStreamingName)) {
            $body['EventStreamingName'] = $request->eventStreamingName;
        }
        if (!Utils::isUnset($request->filterPattern)) {
            $body['FilterPattern'] = $request->filterPattern;
        }
        if (!Utils::isUnset($request->runOptionsShrink)) {
            $body['RunOptions'] = $request->runOptionsShrink;
        }
        if (!Utils::isUnset($request->sinkShrink)) {
            $body['Sink'] = $request->sinkShrink;
        }
        if (!Utils::isUnset($request->sourceShrink)) {
            $body['Source'] = $request->sourceShrink;
        }
        if (!Utils::isUnset($request->transformsShrink)) {
            $body['Transforms'] = $request->transformsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventStreaming',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEventStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to modify the information about an event stream, such as the basic information and the information about the event source, event filtering rule, and event target.
     *   *
     * @param UpdateEventStreamingRequest $request UpdateEventStreamingRequest
     *
     * @return UpdateEventStreamingResponse UpdateEventStreamingResponse
     */
    public function updateEventStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventStreamingWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation to update the configurations of an event rule.
     *   *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $query['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->filterPattern)) {
            $query['FilterPattern'] = $request->filterPattern;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRule',
            'version'     => '2020-04-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to update the configurations of an event rule.
     *   *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }
}

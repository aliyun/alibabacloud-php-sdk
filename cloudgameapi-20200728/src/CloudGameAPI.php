<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CloseOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CloseOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateTokenRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateTokenResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeliveryOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeliveryOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DispatchGameSlotRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DispatchGameSlotResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameCcuRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameCcuResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetOutAccountBindDetailRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetOutAccountBindDetailResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOutAccountBindStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOutAccountBindStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryTenantRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryTenantResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameSessionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameSessionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CloudGameAPI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudgameapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BatchDispatchGameSlotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchDispatchGameSlotResponse
     */
    public function batchDispatchGameSlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDispatchGameSlotResponse::fromMap($this->doRPCRequest('BatchDispatchGameSlot', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchDispatchGameSlotRequest $request
     *
     * @return BatchDispatchGameSlotResponse
     */
    public function batchDispatchGameSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDispatchGameSlotWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopGameSessionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchStopGameSessionsResponse
     */
    public function batchStopGameSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopGameSessionsResponse::fromMap($this->doRPCRequest('BatchStopGameSessions', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStopGameSessionsRequest $request
     *
     * @return BatchStopGameSessionsResponse
     */
    public function batchStopGameSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopGameSessionsWithOptions($request, $runtime);
    }

    /**
     * @param CloseOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseOrderResponse
     */
    public function closeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseOrderResponse::fromMap($this->doRPCRequest('CloseOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseOrderRequest $request
     *
     * @return CloseOrderResponse
     */
    public function closeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderResponse::fromMap($this->doRPCRequest('CreateOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTokenResponse::fromMap($this->doRPCRequest('CreateToken', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTokenRequest $request
     *
     * @return CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @param DeliveryOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeliveryOrderResponse
     */
    public function deliveryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeliveryOrderResponse::fromMap($this->doRPCRequest('DeliveryOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeliveryOrderRequest $request
     *
     * @return DeliveryOrderResponse
     */
    public function deliveryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deliveryOrderWithOptions($request, $runtime);
    }

    /**
     * @param DispatchGameSlotRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DispatchGameSlotResponse
     */
    public function dispatchGameSlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DispatchGameSlotResponse::fromMap($this->doRPCRequest('DispatchGameSlot', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DispatchGameSlotRequest $request
     *
     * @return DispatchGameSlotResponse
     */
    public function dispatchGameSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dispatchGameSlotWithOptions($request, $runtime);
    }

    /**
     * @param GetGameCcuRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetGameCcuResponse
     */
    public function getGameCcuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameCcuResponse::fromMap($this->doRPCRequest('GetGameCcu', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameCcuRequest $request
     *
     * @return GetGameCcuResponse
     */
    public function getGameCcu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameCcuWithOptions($request, $runtime);
    }

    /**
     * @param GetItemRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetItemResponse
     */
    public function getItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetItemResponse::fromMap($this->doRPCRequest('GetItem', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetItemRequest $request
     *
     * @return GetItemResponse
     */
    public function getItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemWithOptions($request, $runtime);
    }

    /**
     * @param GetOutAccountBindDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOutAccountBindDetailResponse
     */
    public function getOutAccountBindDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOutAccountBindDetailResponse::fromMap($this->doRPCRequest('GetOutAccountBindDetail', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOutAccountBindDetailRequest $request
     *
     * @return GetOutAccountBindDetailResponse
     */
    public function getOutAccountBindDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOutAccountBindDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSessionResponse
     */
    public function getSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionResponse::fromMap($this->doRPCRequest('GetSession', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionRequest $request
     *
     * @return GetSessionResponse
     */
    public function getSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionWithOptions($request, $runtime);
    }

    /**
     * @param GetStopGameTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStopGameTokenResponse
     */
    public function getStopGameTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStopGameTokenResponse::fromMap($this->doRPCRequest('GetStopGameToken', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStopGameTokenRequest $request
     *
     * @return GetStopGameTokenResponse
     */
    public function getStopGameToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStopGameTokenWithOptions($request, $runtime);
    }

    /**
     * @param ListBoughtGamesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListBoughtGamesResponse
     */
    public function listBoughtGamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBoughtGamesResponse::fromMap($this->doRPCRequest('ListBoughtGames', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBoughtGamesRequest $request
     *
     * @return ListBoughtGamesResponse
     */
    public function listBoughtGames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBoughtGamesWithOptions($request, $runtime);
    }

    /**
     * @param QueryGameRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryGameResponse
     */
    public function queryGameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryGameResponse::fromMap($this->doRPCRequest('QueryGame', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryGameRequest $request
     *
     * @return QueryGameResponse
     */
    public function queryGame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGameWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryItemsResponse
     */
    public function queryItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemsResponse::fromMap($this->doRPCRequest('QueryItems', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryItemsRequest $request
     *
     * @return QueryItemsResponse
     */
    public function queryItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryOrderResponse
     */
    public function queryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderResponse::fromMap($this->doRPCRequest('QueryOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOrderRequest $request
     *
     * @return QueryOrderResponse
     */
    public function queryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderWithOptions($request, $runtime);
    }

    /**
     * @param QueryOutAccountBindStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryOutAccountBindStatusResponse
     */
    public function queryOutAccountBindStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOutAccountBindStatusResponse::fromMap($this->doRPCRequest('QueryOutAccountBindStatus', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOutAccountBindStatusRequest $request
     *
     * @return QueryOutAccountBindStatusResponse
     */
    public function queryOutAccountBindStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOutAccountBindStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProjectResponse
     */
    public function queryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProjectResponse::fromMap($this->doRPCRequest('QueryProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryProjectRequest $request
     *
     * @return QueryProjectResponse
     */
    public function queryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryTenantResponse
     */
    public function queryTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantResponse::fromMap($this->doRPCRequest('QueryTenant', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantRequest $request
     *
     * @return QueryTenantResponse
     */
    public function queryTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantWithOptions($request, $runtime);
    }

    /**
     * @param SkipTrialPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SkipTrialPolicyResponse
     */
    public function skipTrialPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SkipTrialPolicyResponse::fromMap($this->doRPCRequest('SkipTrialPolicy', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SkipTrialPolicyRequest $request
     *
     * @return SkipTrialPolicyResponse
     */
    public function skipTrialPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipTrialPolicyWithOptions($request, $runtime);
    }

    /**
     * @param StopGameSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopGameSessionResponse
     */
    public function stopGameSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopGameSessionResponse::fromMap($this->doRPCRequest('StopGameSession', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopGameSessionRequest $request
     *
     * @return StopGameSessionResponse
     */
    public function stopGameSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGameSessionWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AccountFlowListHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AccountFlowListRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AccountFlowListResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ApplyRefundRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ApplyRefundResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelOrRefundRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelOrRefundResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeCancelHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeCancelRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeCancelResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeConfirmHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeConfirmRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeConfirmResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateAndPayRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateAndPayResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateAndPayShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CreateOrderShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FileUploadHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FileUploadRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FileUploadResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GetTokenRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GetTokenResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelApplyRefundRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelApplyRefundResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCancelOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCancelOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCancelOrRefundRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCancelOrRefundResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateAndPayRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateAndPayResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateAndPayShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateOrderShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelPayRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelPayResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryAvailabilityRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryAvailabilityResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryAvailabilityShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryCalendarAvailabilityRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryCalendarAvailabilityResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryCalendarAvailabilityShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchCityPageRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchCityPageResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchHotelListRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchHotelListResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PayRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PayResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryAvailabilityRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryAvailabilityResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryAvailabilityShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryCalendarAvailabilityRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryCalendarAvailabilityResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryCalendarAvailabilityShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryOrderRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryOrderResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailListHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailListRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailListResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchCityPageRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchCityPageResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchHotelListRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchHotelListResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingCheckHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingCheckRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingCheckResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AirticketOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('airticketopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Queries the account fund flow list.
     *
     * @param request - AccountFlowListRequest
     * @param headers - AccountFlowListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AccountFlowListResponse
     *
     * @param AccountFlowListRequest $request
     * @param AccountFlowListHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AccountFlowListResponse
     */
    public function accountFlowListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dayNum) {
            @$query['day_num'] = $request->dayNum;
        }

        if (null !== $request->pageIndex) {
            @$query['page_index'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->utcBeginTime) {
            @$query['utc_begin_time'] = $request->utcBeginTime;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AccountFlowList',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/account/flow-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AccountFlowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the account fund flow list.
     *
     * @param request - AccountFlowListRequest
     *
     * @returns AccountFlowListResponse
     *
     * @param AccountFlowListRequest $request
     *
     * @return AccountFlowListResponse
     */
    public function accountFlowList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AccountFlowListHeaders([]);

        return $this->accountFlowListWithOptions($request, $headers, $runtime);
    }

    /**
     * Recommends ancillary products.
     *
     * @param request - AncillarySuggestRequest
     * @param headers - AncillarySuggestHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AncillarySuggestResponse
     *
     * @param AncillarySuggestRequest $request
     * @param AncillarySuggestHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AncillarySuggestResponse
     */
    public function ancillarySuggestWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->solutionId) {
            @$body['solution_id'] = $request->solutionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AncillarySuggest',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/ancillary/action-suggest',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AncillarySuggestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recommends ancillary products.
     *
     * @param request - AncillarySuggestRequest
     *
     * @returns AncillarySuggestResponse
     *
     * @param AncillarySuggestRequest $request
     *
     * @return AncillarySuggestResponse
     */
    public function ancillarySuggest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AncillarySuggestHeaders([]);

        return $this->ancillarySuggestWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a booking order.
     *
     * @param tmpReq - BookRequest
     * @param headers - BookHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BookResponse
     *
     * @param BookRequest    $tmpReq
     * @param BookHeaders    $headers
     * @param RuntimeOptions $runtime
     *
     * @return BookResponse
     */
    public function bookWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BookShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'contact', 'json');
        }

        if (null !== $tmpReq->passengerAncillaryPurchaseMapList) {
            $request->passengerAncillaryPurchaseMapListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerAncillaryPurchaseMapList, 'passenger_ancillary_purchase_map_list', 'json');
        }

        if (null !== $tmpReq->passengerList) {
            $request->passengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }

        $body = [];
        if (null !== $request->contactShrink) {
            @$body['contact'] = $request->contactShrink;
        }

        if (null !== $request->outOrderNum) {
            @$body['out_order_num'] = $request->outOrderNum;
        }

        if (null !== $request->passengerAncillaryPurchaseMapListShrink) {
            @$body['passenger_ancillary_purchase_map_list'] = $request->passengerAncillaryPurchaseMapListShrink;
        }

        if (null !== $request->passengerListShrink) {
            @$body['passenger_list'] = $request->passengerListShrink;
        }

        if (null !== $request->solutionId) {
            @$body['solution_id'] = $request->solutionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Book',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-book',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a booking order.
     *
     * @param request - BookRequest
     *
     * @returns BookResponse
     *
     * @param BookRequest $request
     *
     * @return BookResponse
     */
    public function book($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BookHeaders([]);

        return $this->bookWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels an unpaid order.
     *
     * @param request - CancelRequest
     * @param headers - CancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelResponse
     *
     * @param CancelRequest  $request
     * @param CancelHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelResponse
     */
    public function cancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Cancel',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an unpaid order.
     *
     * @param request - CancelRequest
     *
     * @returns CancelResponse
     *
     * @param CancelRequest $request
     *
     * @return CancelResponse
     */
    public function cancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelHeaders([]);

        return $this->cancelWithOptions($request, $headers, $runtime);
    }

    /**
     * Submits a change application.
     *
     * @param tmpReq - ChangeApplyRequest
     * @param headers - ChangeApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeApplyResponse
     *
     * @param ChangeApplyRequest $tmpReq
     * @param ChangeApplyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ChangeApplyResponse
     */
    public function changeApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ChangeApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->changePassengerList) {
            $request->changePassengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->changePassengerList, 'change_passenger_list', 'json');
        }

        if (null !== $tmpReq->changedJourneys) {
            $request->changedJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->changedJourneys, 'changed_journeys', 'json');
        }

        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'contact', 'json');
        }

        $body = [];
        if (null !== $request->changePassengerListShrink) {
            @$body['change_passenger_list'] = $request->changePassengerListShrink;
        }

        if (null !== $request->changedJourneysShrink) {
            @$body['changed_journeys'] = $request->changedJourneysShrink;
        }

        if (null !== $request->contactShrink) {
            @$body['contact'] = $request->contactShrink;
        }

        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeApply',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/action-apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a change application.
     *
     * @param request - ChangeApplyRequest
     *
     * @returns ChangeApplyResponse
     *
     * @param ChangeApplyRequest $request
     *
     * @return ChangeApplyResponse
     */
    public function changeApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeApplyHeaders([]);

        return $this->changeApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancel the change order.
     *
     * @param request - ChangeCancelRequest
     * @param headers - ChangeCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeCancelResponse
     *
     * @param ChangeCancelRequest $request
     * @param ChangeCancelHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ChangeCancelResponse
     */
    public function changeCancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeOrderNum) {
            @$body['change_order_num'] = $request->changeOrderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeCancel',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/action-cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel the change order.
     *
     * @param request - ChangeCancelRequest
     *
     * @returns ChangeCancelResponse
     *
     * @param ChangeCancelRequest $request
     *
     * @return ChangeCancelResponse
     */
    public function changeCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeCancelHeaders([]);

        return $this->changeCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * Confirms a flight change order.
     *
     * @param request - ChangeConfirmRequest
     * @param headers - ChangeConfirmHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeConfirmResponse
     *
     * @param ChangeConfirmRequest $request
     * @param ChangeConfirmHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ChangeConfirmResponse
     */
    public function changeConfirmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeOrderNum) {
            @$body['change_order_num'] = $request->changeOrderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeConfirm',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/action-confirm',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirms a flight change order.
     *
     * @param request - ChangeConfirmRequest
     *
     * @returns ChangeConfirmResponse
     *
     * @param ChangeConfirmRequest $request
     *
     * @return ChangeConfirmResponse
     */
    public function changeConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeConfirmHeaders([]);

        return $this->changeConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a flight change order.
     *
     * @param request - ChangeDetailRequest
     * @param headers - ChangeDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDetailResponse
     *
     * @param ChangeDetailRequest $request
     * @param ChangeDetailHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ChangeDetailResponse
     */
    public function changeDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeOrderNum) {
            @$query['change_order_num'] = $request->changeOrderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDetail',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a flight change order.
     *
     * @param request - ChangeDetailRequest
     *
     * @returns ChangeDetailResponse
     *
     * @param ChangeDetailRequest $request
     *
     * @return ChangeDetailResponse
     */
    public function changeDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailHeaders([]);

        return $this->changeDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a paging list of change order summaries by buyer account.
     *
     * @param request - ChangeDetailListOfBuyerRequest
     * @param headers - ChangeDetailListOfBuyerHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDetailListOfBuyerResponse
     *
     * @param ChangeDetailListOfBuyerRequest $request
     * @param ChangeDetailListOfBuyerHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ChangeDetailListOfBuyerResponse
     */
    public function changeDetailListOfBuyerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageIndex) {
            @$query['page_index'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->utcCreateBegin) {
            @$query['utc_create_begin'] = $request->utcCreateBegin;
        }

        if (null !== $request->utcCreateEnd) {
            @$query['utc_create_end'] = $request->utcCreateEnd;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDetailListOfBuyer',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/buyer/detail-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeDetailListOfBuyerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a paging list of change order summaries by buyer account.
     *
     * @param request - ChangeDetailListOfBuyerRequest
     *
     * @returns ChangeDetailListOfBuyerResponse
     *
     * @param ChangeDetailListOfBuyerRequest $request
     *
     * @return ChangeDetailListOfBuyerResponse
     */
    public function changeDetailListOfBuyer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailListOfBuyerHeaders([]);

        return $this->changeDetailListOfBuyerWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of change orders by the original order number.
     *
     * @param request - ChangeDetailListOfOrderNumRequest
     * @param headers - ChangeDetailListOfOrderNumHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDetailListOfOrderNumResponse
     *
     * @param ChangeDetailListOfOrderNumRequest $request
     * @param ChangeDetailListOfOrderNumHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ChangeDetailListOfOrderNumResponse
     */
    public function changeDetailListOfOrderNumWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderNum) {
            @$query['order_num'] = $request->orderNum;
        }

        if (null !== $request->pageIndex) {
            @$query['page_index'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDetailListOfOrderNum',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/change/order-num/detail-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeDetailListOfOrderNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of change orders by the original order number.
     *
     * @param request - ChangeDetailListOfOrderNumRequest
     *
     * @returns ChangeDetailListOfOrderNumResponse
     *
     * @param ChangeDetailListOfOrderNumRequest $request
     *
     * @return ChangeDetailListOfOrderNumResponse
     */
    public function changeDetailListOfOrderNum($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailListOfOrderNumHeaders([]);

        return $this->changeDetailListOfOrderNumWithOptions($request, $headers, $runtime);
    }

    /**
     * Collects lowest-price flight information.
     *
     * @remarks
     * Collects lowest-price flight information.
     *
     * @param tmpReq - CollectFlightLowestPriceRequest
     * @param headers - CollectFlightLowestPriceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CollectFlightLowestPriceResponse
     *
     * @param CollectFlightLowestPriceRequest $tmpReq
     * @param CollectFlightLowestPriceHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CollectFlightLowestPriceResponse
     */
    public function collectFlightLowestPriceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CollectFlightLowestPriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lowestPriceFlightInfoList) {
            $request->lowestPriceFlightInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lowestPriceFlightInfoList, 'lowest_price_flight_info_list', 'json');
        }

        $body = [];
        if (null !== $request->lowestPriceFlightInfoListShrink) {
            @$body['lowest_price_flight_info_list'] = $request->lowestPriceFlightInfoListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CollectFlightLowestPrice',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/data-collect/flight-lowest-price',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CollectFlightLowestPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Collects lowest-price flight information.
     *
     * @remarks
     * Collects lowest-price flight information.
     *
     * @param request - CollectFlightLowestPriceRequest
     *
     * @returns CollectFlightLowestPriceResponse
     *
     * @param CollectFlightLowestPriceRequest $request
     *
     * @return CollectFlightLowestPriceResponse
     */
    public function collectFlightLowestPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CollectFlightLowestPriceHeaders([]);

        return $this->collectFlightLowestPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * Find richer quote information for the itinerary, including free baggage allowance, refund and change rules, and baggage through-check rules.
     *
     * @remarks
     * In the input parameters, choose either solution_id or journey_param_list. solution_id must be obtained from the Search API.
     *
     * @param tmpReq - EnrichRequest
     * @param headers - EnrichHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnrichResponse
     *
     * @param EnrichRequest  $tmpReq
     * @param EnrichHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnrichResponse
     */
    public function enrichWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new EnrichShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->journeyParamList) {
            $request->journeyParamListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->journeyParamList, 'journey_param_list', 'json');
        }

        $body = [];
        if (null !== $request->adults) {
            @$body['adults'] = $request->adults;
        }

        if (null !== $request->cabinClass) {
            @$body['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->children) {
            @$body['children'] = $request->children;
        }

        if (null !== $request->infants) {
            @$body['infants'] = $request->infants;
        }

        if (null !== $request->journeyParamListShrink) {
            @$body['journey_param_list'] = $request->journeyParamListShrink;
        }

        if (null !== $request->solutionId) {
            @$body['solution_id'] = $request->solutionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Enrich',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-enrich',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnrichResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Find richer quote information for the itinerary, including free baggage allowance, refund and change rules, and baggage through-check rules.
     *
     * @remarks
     * In the input parameters, choose either solution_id or journey_param_list. solution_id must be obtained from the Search API.
     *
     * @param request - EnrichRequest
     *
     * @returns EnrichResponse
     *
     * @param EnrichRequest $request
     *
     * @return EnrichResponse
     */
    public function enrich($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EnrichHeaders([]);

        return $this->enrichWithOptions($request, $headers, $runtime);
    }

    /**
     * Uploads a file as an attachment image. The file size is limited to 300 KB or less.
     *
     * @param request - FileUploadRequest
     * @param headers - FileUploadHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileUploadResponse
     *
     * @param FileUploadRequest $request
     * @param FileUploadHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return FileUploadResponse
     */
    public function fileUploadWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileContent) {
            @$body['file_content'] = $request->fileContent;
        }

        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileUpload',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/attachment/action-upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a file as an attachment image. The file size is limited to 300 KB or less.
     *
     * @param request - FileUploadRequest
     *
     * @returns FileUploadResponse
     *
     * @param FileUploadRequest $request
     *
     * @return FileUploadResponse
     */
    public function fileUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FileUploadHeaders([]);

        return $this->fileUploadWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries flight change information by order number.
     *
     * @param request - FlightChangeOfOrderRequest
     * @param headers - FlightChangeOfOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightChangeOfOrderResponse
     *
     * @param FlightChangeOfOrderRequest $request
     * @param FlightChangeOfOrderHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightChangeOfOrderResponse
     */
    public function flightChangeOfOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderNum) {
            @$query['order_num'] = $request->orderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightChangeOfOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/flightchange/of-order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightChangeOfOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries flight change information by order number.
     *
     * @param request - FlightChangeOfOrderRequest
     *
     * @returns FlightChangeOfOrderResponse
     *
     * @param FlightChangeOfOrderRequest $request
     *
     * @return FlightChangeOfOrderResponse
     */
    public function flightChangeOfOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightChangeOfOrderHeaders([]);

        return $this->flightChangeOfOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains a token for API calls. The token is valid for 2 hours.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['app_key'] = $request->appKey;
        }

        if (null !== $request->appSecret) {
            @$query['app_secret'] = $request->appSecret;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a token for API calls. The token is valid for 2 hours.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries luggage through-check information for an itinerary.
     *
     * @remarks
     * Queries luggage through-check information for an itinerary. Provide itinerary information as input, and the API returns whether luggage through-check is supported for the itinerary. Luggage through-check applies to transfer and stopover scenarios.
     *
     * @param tmpReq - LuggageDirectRequest
     * @param headers - LuggageDirectHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LuggageDirectResponse
     *
     * @param LuggageDirectRequest $tmpReq
     * @param LuggageDirectHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return LuggageDirectResponse
     */
    public function luggageDirectWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new LuggageDirectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->flightSegmentParamList) {
            $request->flightSegmentParamListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->flightSegmentParamList, 'flight_segment_param_list', 'json');
        }

        $query = [];
        if (null !== $request->flightSegmentParamListShrink) {
            @$query['flight_segment_param_list'] = $request->flightSegmentParamListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LuggageDirect',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/flight-data/luggage-direct',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LuggageDirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries luggage through-check information for an itinerary.
     *
     * @remarks
     * Queries luggage through-check information for an itinerary. Provide itinerary information as input, and the API returns whether luggage through-check is supported for the itinerary. Luggage through-check applies to transfer and stopover scenarios.
     *
     * @param request - LuggageDirectRequest
     *
     * @returns LuggageDirectResponse
     *
     * @param LuggageDirectRequest $request
     *
     * @return LuggageDirectResponse
     */
    public function luggageDirect($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new LuggageDirectHeaders([]);

        return $this->luggageDirectWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries order details.
     *
     * @param request - OrderDetailRequest
     * @param headers - OrderDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OrderDetailResponse
     *
     * @param OrderDetailRequest $request
     * @param OrderDetailHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OrderDetailResponse
     */
    public function orderDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderNum) {
            @$query['order_num'] = $request->orderNum;
        }

        if (null !== $request->outOrderNum) {
            @$query['out_order_num'] = $request->outOrderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OrderDetail',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/order-detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries order details.
     *
     * @param request - OrderDetailRequest
     *
     * @returns OrderDetailResponse
     *
     * @param OrderDetailRequest $request
     *
     * @return OrderDetailResponse
     */
    public function orderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OrderDetailHeaders([]);

        return $this->orderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the order list.
     *
     * @param request - OrderListRequest
     * @param headers - OrderListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OrderListResponse
     *
     * @param OrderListRequest $request
     * @param OrderListHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return OrderListResponse
     */
    public function orderListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bookTimeEnd) {
            @$query['book_time_end'] = $request->bookTimeEnd;
        }

        if (null !== $request->bookTimeStart) {
            @$query['book_time_start'] = $request->bookTimeStart;
        }

        if (null !== $request->pageIndex) {
            @$query['page_index'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OrderList',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/order-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the order list.
     *
     * @param request - OrderListRequest
     *
     * @returns OrderListResponse
     *
     * @param OrderListRequest $request
     *
     * @return OrderListResponse
     */
    public function orderList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OrderListHeaders([]);

        return $this->orderListWithOptions($request, $headers, $runtime);
    }

    /**
     * Verifies seat availability and pricing. If the price has changed, the developer can proceed with Book at the updated price. If the price has not changed, the order is placed at the original price.
     *
     * @param request - PricingRequest
     * @param headers - PricingHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PricingResponse
     *
     * @param PricingRequest $request
     * @param PricingHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return PricingResponse
     */
    public function pricingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->solutionId) {
            @$body['solution_id'] = $request->solutionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Pricing',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-pricing',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PricingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies seat availability and pricing. If the price has changed, the developer can proceed with Book at the updated price. If the price has not changed, the order is placed at the original price.
     *
     * @param request - PricingRequest
     *
     * @returns PricingResponse
     *
     * @param PricingRequest $request
     *
     * @return PricingResponse
     */
    public function pricing($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PricingHeaders([]);

        return $this->pricingWithOptions($request, $headers, $runtime);
    }

    /**
     * Submits a refund application for an air ticket.
     *
     * @param tmpReq - RefundApplyRequest
     * @param headers - RefundApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundApplyResponse
     *
     * @param RefundApplyRequest $tmpReq
     * @param RefundApplyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RefundApplyResponse
     */
    public function refundApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RefundApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->refundJourneys) {
            $request->refundJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundJourneys, 'refund_journeys', 'json');
        }

        if (null !== $tmpReq->refundPassengerList) {
            $request->refundPassengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundPassengerList, 'refund_passenger_list', 'json');
        }

        if (null !== $tmpReq->refundType) {
            $request->refundTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundType, 'refund_type', 'json');
        }

        $body = [];
        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        if (null !== $request->refundJourneysShrink) {
            @$body['refund_journeys'] = $request->refundJourneysShrink;
        }

        if (null !== $request->refundPassengerListShrink) {
            @$body['refund_passenger_list'] = $request->refundPassengerListShrink;
        }

        if (null !== $request->refundTypeShrink) {
            @$body['refund_type'] = $request->refundTypeShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefundApply',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/refund/action-apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefundApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a refund application for an air ticket.
     *
     * @param request - RefundApplyRequest
     *
     * @returns RefundApplyResponse
     *
     * @param RefundApplyRequest $request
     *
     * @return RefundApplyResponse
     */
    public function refundApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundApplyHeaders([]);

        return $this->refundApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a refund order.
     *
     * @param request - RefundDetailRequest
     * @param headers - RefundDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundDetailResponse
     *
     * @param RefundDetailRequest $request
     * @param RefundDetailHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RefundDetailResponse
     */
    public function refundDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->refundOrderNum) {
            @$query['refund_order_num'] = $request->refundOrderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundDetail',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/refund/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a refund order.
     *
     * @param request - RefundDetailRequest
     *
     * @returns RefundDetailResponse
     *
     * @param RefundDetailRequest $request
     *
     * @return RefundDetailResponse
     */
    public function refundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundDetailHeaders([]);

        return $this->refundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of refund orders.
     *
     * @param request - RefundDetailListRequest
     * @param headers - RefundDetailListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundDetailListResponse
     *
     * @param RefundDetailListRequest $request
     * @param RefundDetailListHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RefundDetailListResponse
     */
    public function refundDetailListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderNum) {
            @$query['order_num'] = $request->orderNum;
        }

        if (null !== $request->pageIndex) {
            @$query['page_index'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->refundCreateBeginTime) {
            @$query['refund_create_begin_time'] = $request->refundCreateBeginTime;
        }

        if (null !== $request->refundCreateEndTime) {
            @$query['refund_create_end_time'] = $request->refundCreateEndTime;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundDetailList',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/refund/detail-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefundDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of refund orders.
     *
     * @param request - RefundDetailListRequest
     *
     * @returns RefundDetailListResponse
     *
     * @param RefundDetailListRequest $request
     *
     * @return RefundDetailListResponse
     */
    public function refundDetailList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundDetailListHeaders([]);

        return $this->refundDetailListWithOptions($request, $headers, $runtime);
    }

    /**
     * Searches for flight quotes and returns the lowest price across multiple flights. Note that the response of this operation does not include refund and change rules, free baggage allowance, or baggage through-check rules.
     *
     * @param tmpReq - SearchRequest
     * @param headers - SearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchResponse
     *
     * @param SearchRequest  $tmpReq
     * @param SearchHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return SearchResponse
     */
    public function searchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->airLegs) {
            $request->airLegsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->airLegs, 'air_legs', 'json');
        }

        if (null !== $tmpReq->searchControlOptions) {
            $request->searchControlOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchControlOptions, 'search_control_options', 'json');
        }

        $body = [];
        if (null !== $request->adults) {
            @$body['adults'] = $request->adults;
        }

        if (null !== $request->airLegsShrink) {
            @$body['air_legs'] = $request->airLegsShrink;
        }

        if (null !== $request->cabinClass) {
            @$body['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->children) {
            @$body['children'] = $request->children;
        }

        if (null !== $request->infants) {
            @$body['infants'] = $request->infants;
        }

        if (null !== $request->searchControlOptionsShrink) {
            @$body['search_control_options'] = $request->searchControlOptionsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Search',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for flight quotes and returns the lowest price across multiple flights. Note that the response of this operation does not include refund and change rules, free baggage allowance, or baggage through-check rules.
     *
     * @param request - SearchRequest
     *
     * @returns SearchResponse
     *
     * @param SearchRequest $request
     *
     * @return SearchResponse
     */
    public function search($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchHeaders([]);

        return $this->searchWithOptions($request, $headers, $runtime);
    }

    /**
     * Search and quote prices, currently providing the lowest price across multiple flights. Note that this API response includes refund/change rules, free baggage allowance, and baggage through-check rules.
     *
     * @param tmpReq - StandardSearchRequest
     * @param headers - StandardSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StandardSearchResponse
     *
     * @param StandardSearchRequest $tmpReq
     * @param StandardSearchHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StandardSearchResponse
     */
    public function standardSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new StandardSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->airLegs) {
            $request->airLegsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->airLegs, 'air_legs', 'json');
        }

        if (null !== $tmpReq->searchControlOptions) {
            $request->searchControlOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchControlOptions, 'search_control_options', 'json');
        }

        $body = [];
        if (null !== $request->adults) {
            @$body['adults'] = $request->adults;
        }

        if (null !== $request->airLegsShrink) {
            @$body['air_legs'] = $request->airLegsShrink;
        }

        if (null !== $request->cabinClass) {
            @$body['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->children) {
            @$body['children'] = $request->children;
        }

        if (null !== $request->infants) {
            @$body['infants'] = $request->infants;
        }

        if (null !== $request->searchControlOptionsShrink) {
            @$body['search_control_options'] = $request->searchControlOptionsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StandardSearch',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-standardsearch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StandardSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Search and quote prices, currently providing the lowest price across multiple flights. Note that this API response includes refund/change rules, free baggage allowance, and baggage through-check rules.
     *
     * @param request - StandardSearchRequest
     *
     * @returns StandardSearchResponse
     *
     * @param StandardSearchRequest $request
     *
     * @return StandardSearchResponse
     */
    public function standardSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StandardSearchHeaders([]);

        return $this->standardSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * Pays for and issues a ticket.
     *
     * @param request - TicketingRequest
     * @param headers - TicketingHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketingResponse
     *
     * @param TicketingRequest $request
     * @param TicketingHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return TicketingResponse
     */
    public function ticketingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Ticketing',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-ticketing',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TicketingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pays for and issues a ticket.
     *
     * @param request - TicketingRequest
     *
     * @returns TicketingResponse
     *
     * @param TicketingRequest $request
     *
     * @return TicketingResponse
     */
    public function ticketing($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketingHeaders([]);

        return $this->ticketingWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a pre-ticketing check. This operation is optional.
     *
     * @remarks
     * Performs a pre-ticketing check. This operation is optional.
     *
     * @param request - TicketingCheckRequest
     * @param headers - TicketingCheckHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketingCheckResponse
     *
     * @param TicketingCheckRequest $request
     * @param TicketingCheckHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return TicketingCheckResponse
     */
    public function ticketingCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orderNum) {
            @$body['order_num'] = $request->orderNum;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TicketingCheck',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/trade/action-ticketing-check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TicketingCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a pre-ticketing check. This operation is optional.
     *
     * @remarks
     * Performs a pre-ticketing check. This operation is optional.
     *
     * @param request - TicketingCheckRequest
     *
     * @returns TicketingCheckResponse
     *
     * @param TicketingCheckRequest $request
     *
     * @return TicketingCheckResponse
     */
    public function ticketingCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketingCheckHeaders([]);

        return $this->ticketingCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries transit visa requirements for a flight itinerary. You provide flight information, and the API returns whether a transit visa is required for the itinerary. Only transfer or stopover segments are valid input parameters (transfers or stopovers passing through a third country). The supported passenger type defaults to Chinese mainland travelers.
     *
     * @remarks
     * Queries transit visa requirements for a flight itinerary. You provide flight information, and the API returns whether a transit visa is required for the itinerary. Only transfer or stopover segments are valid input parameters (transfers or stopovers passing through a third country). The supported passenger type defaults to Chinese mainland travelers.
     *
     * @param tmpReq - TransitVisaRequest
     * @param headers - TransitVisaHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransitVisaResponse
     *
     * @param TransitVisaRequest $tmpReq
     * @param TransitVisaHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return TransitVisaResponse
     */
    public function transitVisaWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TransitVisaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->flightSegmentParamList) {
            $request->flightSegmentParamListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->flightSegmentParamList, 'flight_segment_param_list', 'json');
        }

        $query = [];
        if (null !== $request->flightSegmentParamListShrink) {
            @$query['flight_segment_param_list'] = $request->flightSegmentParamListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAirticketAccessToken) {
            @$realHeaders['x-acs-airticket-access-token'] = '' . $headers->xAcsAirticketAccessToken;
        }

        if (null !== $headers->xAcsAirticketLanguage) {
            @$realHeaders['x-acs-airticket-language'] = '' . $headers->xAcsAirticketLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransitVisa',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/airticket/v1/flight-data/transit-visa',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransitVisaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries transit visa requirements for a flight itinerary. You provide flight information, and the API returns whether a transit visa is required for the itinerary. Only transfer or stopover segments are valid input parameters (transfers or stopovers passing through a third country). The supported passenger type defaults to Chinese mainland travelers.
     *
     * @remarks
     * Queries transit visa requirements for a flight itinerary. You provide flight information, and the API returns whether a transit visa is required for the itinerary. Only transfer or stopover segments are valid input parameters (transfers or stopovers passing through a third country). The supported passenger type defaults to Chinese mainland travelers.
     *
     * @param request - TransitVisaRequest
     *
     * @returns TransitVisaResponse
     *
     * @param TransitVisaRequest $request
     *
     * @return TransitVisaResponse
     */
    public function transitVisa($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TransitVisaHeaders([]);

        return $this->transitVisaWithOptions($request, $headers, $runtime);
    }

    /**
     * 申请退款.
     *
     * @param request - ApplyRefundRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyRefundResponse
     *
     * @param ApplyRefundRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ApplyRefundResponse
     */
    public function applyRefundWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->refundReason) {
            @$body['RefundReason'] = $request->refundReason;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'applyRefund',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/applyRefund',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请退款.
     *
     * @param request - ApplyRefundRequest
     *
     * @returns ApplyRefundResponse
     *
     * @param ApplyRefundRequest $request
     *
     * @return ApplyRefundResponse
     */
    public function applyRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询酒店详情.
     *
     * @param tmpReq - BatchGetHotelDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetHotelDetailResponse
     *
     * @param BatchGetHotelDetailRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchGetHotelDetailResponse
     */
    public function batchGetHotelDetailWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetHotelDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'batchGetHotelDetail',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/batchGetHotelDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetHotelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询酒店详情.
     *
     * @param request - BatchGetHotelDetailRequest
     *
     * @returns BatchGetHotelDetailResponse
     *
     * @param BatchGetHotelDetailRequest $request
     *
     * @return BatchGetHotelDetailResponse
     */
    public function batchGetHotelDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetHotelDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消或退款.
     *
     * @param request - CancelOrRefundRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOrRefundResponse
     *
     * @param CancelOrRefundRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CancelOrRefundResponse
     */
    public function cancelOrRefundWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'cancelOrRefund',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/cancelOrRefund',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOrRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消或退款.
     *
     * @param request - CancelOrRefundRequest
     *
     * @returns CancelOrRefundResponse
     *
     * @param CancelOrRefundRequest $request
     *
     * @return CancelOrRefundResponse
     */
    public function cancelOrRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOrRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消订单.
     *
     * @param request - CancelOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOrderResponse
     *
     * @param CancelOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'cancelOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/cancelOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消订单.
     *
     * @param request - CancelOrderRequest
     *
     * @returns CancelOrderResponse
     *
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 创单并支付.
     *
     * @param tmpReq - CreateAndPayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndPayResponse
     *
     * @param CreateAndPayRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAndPayResponse
     */
    public function createAndPayWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAndPayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'Contact', 'json');
        }

        if (null !== $tmpReq->guests) {
            $request->guestsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->guests, 'Guests', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->contactShrink) {
            @$body['Contact'] = $request->contactShrink;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->guestsShrink) {
            @$body['Guests'] = $request->guestsShrink;
        }

        if (null !== $request->itemOfferId) {
            @$body['ItemOfferId'] = $request->itemOfferId;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'createAndPay',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/createAndPay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创单并支付.
     *
     * @param request - CreateAndPayRequest
     *
     * @returns CreateAndPayResponse
     *
     * @param CreateAndPayRequest $request
     *
     * @return CreateAndPayResponse
     */
    public function createAndPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndPayWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建订单.
     *
     * @param tmpReq - CreateOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'Contact', 'json');
        }

        if (null !== $tmpReq->guests) {
            $request->guestsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->guests, 'Guests', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->contactShrink) {
            @$body['Contact'] = $request->contactShrink;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->guestsShrink) {
            @$body['Guests'] = $request->guestsShrink;
        }

        if (null !== $request->itemOfferId) {
            @$body['ItemOfferId'] = $request->itemOfferId;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'createOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/createOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建订单.
     *
     * @param request - CreateOrderRequest
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Applies for a refund.
     *
     * @param request - GlobalHotelApplyRefundRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelApplyRefundResponse
     *
     * @param GlobalHotelApplyRefundRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GlobalHotelApplyRefundResponse
     */
    public function globalHotelApplyRefundWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->refundReason) {
            @$body['RefundReason'] = $request->refundReason;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelApplyRefund',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelApplyRefund',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a refund.
     *
     * @param request - GlobalHotelApplyRefundRequest
     *
     * @returns GlobalHotelApplyRefundResponse
     *
     * @param GlobalHotelApplyRefundRequest $request
     *
     * @return GlobalHotelApplyRefundResponse
     */
    public function globalHotelApplyRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelApplyRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries hotel details in batches.
     *
     * @param tmpReq - GlobalHotelBatchGetHotelDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelBatchGetHotelDetailResponse
     *
     * @param GlobalHotelBatchGetHotelDetailRequest $tmpReq
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GlobalHotelBatchGetHotelDetailResponse
     */
    public function globalHotelBatchGetHotelDetailWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelBatchGetHotelDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelBatchGetHotelDetail',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelBatchGetHotelDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelBatchGetHotelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries hotel details in batches.
     *
     * @param request - GlobalHotelBatchGetHotelDetailRequest
     *
     * @returns GlobalHotelBatchGetHotelDetailResponse
     *
     * @param GlobalHotelBatchGetHotelDetailRequest $request
     *
     * @return GlobalHotelBatchGetHotelDetailResponse
     */
    public function globalHotelBatchGetHotelDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelBatchGetHotelDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels or refunds an order.
     *
     * @param request - GlobalHotelCancelOrRefundRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelCancelOrRefundResponse
     *
     * @param GlobalHotelCancelOrRefundRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GlobalHotelCancelOrRefundResponse
     */
    public function globalHotelCancelOrRefundWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelCancelOrRefund',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelCancelOrRefund',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelCancelOrRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels or refunds an order.
     *
     * @param request - GlobalHotelCancelOrRefundRequest
     *
     * @returns GlobalHotelCancelOrRefundResponse
     *
     * @param GlobalHotelCancelOrRefundRequest $request
     *
     * @return GlobalHotelCancelOrRefundResponse
     */
    public function globalHotelCancelOrRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelCancelOrRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消订单.
     *
     * @param request - GlobalHotelCancelOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelCancelOrderResponse
     *
     * @param GlobalHotelCancelOrderRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GlobalHotelCancelOrderResponse
     */
    public function globalHotelCancelOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelCancelOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelCancelOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelCancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消订单.
     *
     * @param request - GlobalHotelCancelOrderRequest
     *
     * @returns GlobalHotelCancelOrderResponse
     *
     * @param GlobalHotelCancelOrderRequest $request
     *
     * @return GlobalHotelCancelOrderResponse
     */
    public function globalHotelCancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelCancelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an order and processes the payment.
     *
     * @param tmpReq - GlobalHotelCreateAndPayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelCreateAndPayResponse
     *
     * @param GlobalHotelCreateAndPayRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GlobalHotelCreateAndPayResponse
     */
    public function globalHotelCreateAndPayWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelCreateAndPayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'Contact', 'json');
        }

        if (null !== $tmpReq->guests) {
            $request->guestsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->guests, 'Guests', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->contactShrink) {
            @$body['Contact'] = $request->contactShrink;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->guestsShrink) {
            @$body['Guests'] = $request->guestsShrink;
        }

        if (null !== $request->itemOfferId) {
            @$body['ItemOfferId'] = $request->itemOfferId;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelCreateAndPay',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelCreateAndPay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelCreateAndPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an order and processes the payment.
     *
     * @param request - GlobalHotelCreateAndPayRequest
     *
     * @returns GlobalHotelCreateAndPayResponse
     *
     * @param GlobalHotelCreateAndPayRequest $request
     *
     * @return GlobalHotelCreateAndPayResponse
     */
    public function globalHotelCreateAndPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelCreateAndPayWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an order.
     *
     * @param tmpReq - GlobalHotelCreateOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelCreateOrderResponse
     *
     * @param GlobalHotelCreateOrderRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GlobalHotelCreateOrderResponse
     */
    public function globalHotelCreateOrderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelCreateOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contact) {
            $request->contactShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'Contact', 'json');
        }

        if (null !== $tmpReq->guests) {
            $request->guestsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->guests, 'Guests', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->contactShrink) {
            @$body['Contact'] = $request->contactShrink;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->guestsShrink) {
            @$body['Guests'] = $request->guestsShrink;
        }

        if (null !== $request->itemOfferId) {
            @$body['ItemOfferId'] = $request->itemOfferId;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelCreateOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelCreateOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an order.
     *
     * @param request - GlobalHotelCreateOrderRequest
     *
     * @returns GlobalHotelCreateOrderResponse
     *
     * @param GlobalHotelCreateOrderRequest $request
     *
     * @return GlobalHotelCreateOrderResponse
     */
    public function globalHotelCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelCreateOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Processes a distribution payment.
     *
     * @param request - GlobalHotelPayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelPayResponse
     *
     * @param GlobalHotelPayRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GlobalHotelPayResponse
     */
    public function globalHotelPayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelPay',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelPay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Processes a distribution payment.
     *
     * @param request - GlobalHotelPayRequest
     *
     * @returns GlobalHotelPayResponse
     *
     * @param GlobalHotelPayRequest $request
     *
     * @return GlobalHotelPayResponse
     */
    public function globalHotelPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelPayWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the availability of hotel rate plans.
     *
     * @param tmpReq - GlobalHotelQueryAvailabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelQueryAvailabilityResponse
     *
     * @param GlobalHotelQueryAvailabilityRequest $tmpReq
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GlobalHotelQueryAvailabilityResponse
     */
    public function globalHotelQueryAvailabilityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelQueryAvailabilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adultCount) {
            @$body['AdultCount'] = $request->adultCount;
        }

        if (null !== $request->checkInDate) {
            @$body['CheckInDate'] = $request->checkInDate;
        }

        if (null !== $request->checkOutDate) {
            @$body['CheckOutDate'] = $request->checkOutDate;
        }

        if (null !== $request->childCount) {
            @$body['ChildCount'] = $request->childCount;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelQueryAvailability',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelQueryAvailability',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelQueryAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the availability of hotel rate plans.
     *
     * @param request - GlobalHotelQueryAvailabilityRequest
     *
     * @returns GlobalHotelQueryAvailabilityResponse
     *
     * @param GlobalHotelQueryAvailabilityRequest $request
     *
     * @return GlobalHotelQueryAvailabilityResponse
     */
    public function globalHotelQueryAvailability($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelQueryAvailabilityWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries calendar-based availability and pricing for hotels in batch.
     *
     * @param tmpReq - GlobalHotelQueryCalendarAvailabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelQueryCalendarAvailabilityResponse
     *
     * @param GlobalHotelQueryCalendarAvailabilityRequest $tmpReq
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return GlobalHotelQueryCalendarAvailabilityResponse
     */
    public function globalHotelQueryCalendarAvailabilityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelQueryCalendarAvailabilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adultCount) {
            @$body['AdultCount'] = $request->adultCount;
        }

        if (null !== $request->checkInDateEnd) {
            @$body['CheckInDateEnd'] = $request->checkInDateEnd;
        }

        if (null !== $request->checkInDateStart) {
            @$body['CheckInDateStart'] = $request->checkInDateStart;
        }

        if (null !== $request->childCount) {
            @$body['ChildCount'] = $request->childCount;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelQueryCalendarAvailability',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelQueryCalendarAvailability',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelQueryCalendarAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries calendar-based availability and pricing for hotels in batch.
     *
     * @param request - GlobalHotelQueryCalendarAvailabilityRequest
     *
     * @returns GlobalHotelQueryCalendarAvailabilityResponse
     *
     * @param GlobalHotelQueryCalendarAvailabilityRequest $request
     *
     * @return GlobalHotelQueryCalendarAvailabilityResponse
     */
    public function globalHotelQueryCalendarAvailability($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelQueryCalendarAvailabilityWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries an order.
     *
     * @param request - GlobalHotelQueryOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelQueryOrderResponse
     *
     * @param GlobalHotelQueryOrderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GlobalHotelQueryOrderResponse
     */
    public function globalHotelQueryOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelQueryOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelQueryOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelQueryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an order.
     *
     * @param request - GlobalHotelQueryOrderRequest
     *
     * @returns GlobalHotelQueryOrderResponse
     *
     * @param GlobalHotelQueryOrderRequest $request
     *
     * @return GlobalHotelQueryOrderResponse
     */
    public function globalHotelQueryOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelQueryOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries city administrative divisions by paging (in Chinese and English).
     *
     * @param request - GlobalHotelSearchCityPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelSearchCityPageResponse
     *
     * @param GlobalHotelSearchCityPageRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GlobalHotelSearchCityPageResponse
     */
    public function globalHotelSearchCityPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->count) {
            @$body['Count'] = $request->count;
        }

        if (null !== $request->countryCode) {
            @$body['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelSearchCityPage',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelSearchCityPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelSearchCityPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries city administrative divisions by paging (in Chinese and English).
     *
     * @param request - GlobalHotelSearchCityPageRequest
     *
     * @returns GlobalHotelSearchCityPageResponse
     *
     * @param GlobalHotelSearchCityPageRequest $request
     *
     * @return GlobalHotelSearchCityPageResponse
     */
    public function globalHotelSearchCityPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelSearchCityPageWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a paged query to retrieve the list of hotels by city with paging.
     *
     * @param request - GlobalHotelSearchHotelListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelSearchHotelListResponse
     *
     * @param GlobalHotelSearchHotelListRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GlobalHotelSearchHotelListResponse
     */
    public function globalHotelSearchHotelListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->cityCode) {
            @$body['CityCode'] = $request->cityCode;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelSearchHotelList',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelSearchHotelList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelSearchHotelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query to retrieve the list of hotels by city with paging.
     *
     * @param request - GlobalHotelSearchHotelListRequest
     *
     * @returns GlobalHotelSearchHotelListResponse
     *
     * @param GlobalHotelSearchHotelListRequest $request
     *
     * @return GlobalHotelSearchHotelListResponse
     */
    public function globalHotelSearchHotelList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelSearchHotelListWithOptions($request, $headers, $runtime);
    }

    /**
     * 验价.
     *
     * @param tmpReq - GlobalHotelValidatePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalHotelValidatePriceResponse
     *
     * @param GlobalHotelValidatePriceRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GlobalHotelValidatePriceResponse
     */
    public function globalHotelValidatePriceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GlobalHotelValidatePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adults) {
            @$body['Adults'] = $request->adults;
        }

        if (null !== $request->children) {
            @$body['Children'] = $request->children;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->itemOfferKey) {
            @$body['ItemOfferKey'] = $request->itemOfferKey;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'globalHotelValidatePrice',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotelValidatePrice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GlobalHotelValidatePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 验价.
     *
     * @param request - GlobalHotelValidatePriceRequest
     *
     * @returns GlobalHotelValidatePriceResponse
     *
     * @param GlobalHotelValidatePriceRequest $request
     *
     * @return GlobalHotelValidatePriceResponse
     */
    public function globalHotelValidatePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalHotelValidatePriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 分销支付.
     *
     * @param request - PayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PayResponse
     *
     * @param PayRequest     $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PayResponse
     */
    public function payWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'pay',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/pay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分销支付.
     *
     * @param request - PayRequest
     *
     * @returns PayResponse
     *
     * @param PayRequest $request
     *
     * @return PayResponse
     */
    public function pay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->payWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询酒店报价可用性.
     *
     * @param tmpReq - QueryAvailabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvailabilityResponse
     *
     * @param QueryAvailabilityRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAvailabilityResponse
     */
    public function queryAvailabilityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryAvailabilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adultCount) {
            @$body['AdultCount'] = $request->adultCount;
        }

        if (null !== $request->checkInDate) {
            @$body['CheckInDate'] = $request->checkInDate;
        }

        if (null !== $request->checkOutDate) {
            @$body['CheckOutDate'] = $request->checkOutDate;
        }

        if (null !== $request->childCount) {
            @$body['ChildCount'] = $request->childCount;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'queryAvailability',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/queryAvailability',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询酒店报价可用性.
     *
     * @param request - QueryAvailabilityRequest
     *
     * @returns QueryAvailabilityResponse
     *
     * @param QueryAvailabilityRequest $request
     *
     * @return QueryAvailabilityResponse
     */
    public function queryAvailability($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAvailabilityWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量日历报价查询.
     *
     * @param tmpReq - QueryCalendarAvailabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCalendarAvailabilityResponse
     *
     * @param QueryCalendarAvailabilityRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCalendarAvailabilityResponse
     */
    public function queryCalendarAvailabilityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCalendarAvailabilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        if (null !== $tmpReq->standardHotelIds) {
            $request->standardHotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->standardHotelIds, 'StandardHotelIds', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adultCount) {
            @$body['AdultCount'] = $request->adultCount;
        }

        if (null !== $request->checkInDateEnd) {
            @$body['CheckInDateEnd'] = $request->checkInDateEnd;
        }

        if (null !== $request->checkInDateStart) {
            @$body['CheckInDateStart'] = $request->checkInDateStart;
        }

        if (null !== $request->childCount) {
            @$body['ChildCount'] = $request->childCount;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->standardHotelIdsShrink) {
            @$body['StandardHotelIds'] = $request->standardHotelIdsShrink;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'queryCalendarAvailability',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/queryCalendarAvailability',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCalendarAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量日历报价查询.
     *
     * @param request - QueryCalendarAvailabilityRequest
     *
     * @returns QueryCalendarAvailabilityResponse
     *
     * @param QueryCalendarAvailabilityRequest $request
     *
     * @return QueryCalendarAvailabilityResponse
     */
    public function queryCalendarAvailability($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryCalendarAvailabilityWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询订单.
     *
     * @param request - QueryOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrderResponse
     *
     * @param QueryOrderRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return QueryOrderResponse
     */
    public function queryOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->externalOrderNo) {
            @$body['ExternalOrderNo'] = $request->externalOrderNo;
        }

        if (null !== $request->orderNo) {
            @$body['OrderNo'] = $request->orderNo;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'queryOrder',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/queryOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订单.
     *
     * @param request - QueryOrderRequest
     *
     * @returns QueryOrderResponse
     *
     * @param QueryOrderRequest $request
     *
     * @return QueryOrderResponse
     */
    public function queryOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询城市行政区划（中英文）.
     *
     * @param request - SearchCityPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCityPageResponse
     *
     * @param SearchCityPageRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SearchCityPageResponse
     */
    public function searchCityPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->count) {
            @$body['Count'] = $request->count;
        }

        if (null !== $request->countryCode) {
            @$body['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'searchCityPage',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/searchCityPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCityPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询城市行政区划（中英文）.
     *
     * @param request - SearchCityPageRequest
     *
     * @returns SearchCityPageResponse
     *
     * @param SearchCityPageRequest $request
     *
     * @return SearchCityPageResponse
     */
    public function searchCityPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchCityPageWithOptions($request, $headers, $runtime);
    }

    /**
     * 按城市分页查询酒店列表.
     *
     * @param request - SearchHotelListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchHotelListResponse
     *
     * @param SearchHotelListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SearchHotelListResponse
     */
    public function searchHotelListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->cityCode) {
            @$body['CityCode'] = $request->cityCode;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'searchHotelList',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/globalHotel/searchHotelList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchHotelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按城市分页查询酒店列表.
     *
     * @param request - SearchHotelListRequest
     *
     * @returns SearchHotelListResponse
     *
     * @param SearchHotelListRequest $request
     *
     * @return SearchHotelListResponse
     */
    public function searchHotelList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchHotelListWithOptions($request, $headers, $runtime);
    }

    /**
     * 验价.
     *
     * @param tmpReq - ValidatePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidatePriceResponse
     *
     * @param ValidatePriceRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ValidatePriceResponse
     */
    public function validatePriceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ValidatePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->childrenAges) {
            $request->childrenAgesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->childrenAges, 'ChildrenAges', 'json');
        }

        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->adults) {
            @$body['Adults'] = $request->adults;
        }

        if (null !== $request->children) {
            @$body['Children'] = $request->children;
        }

        if (null !== $request->childrenAgesShrink) {
            @$body['ChildrenAges'] = $request->childrenAgesShrink;
        }

        if (null !== $request->itemOfferKey) {
            @$body['ItemOfferKey'] = $request->itemOfferKey;
        }

        if (null !== $request->roomCount) {
            @$body['RoomCount'] = $request->roomCount;
        }

        if (null !== $request->tracerId) {
            @$body['TracerId'] = $request->tracerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'validatePrice',
            'version' => '2023-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/validatePrice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidatePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 验价.
     *
     * @param request - ValidatePriceRequest
     *
     * @returns ValidatePriceResponse
     *
     * @param ValidatePriceRequest $request
     *
     * @return ValidatePriceResponse
     */
    public function validatePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validatePriceWithOptions($request, $headers, $runtime);
    }
}

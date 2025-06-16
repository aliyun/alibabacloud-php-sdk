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
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookShrinkRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CancelHeaders;
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
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponse;
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
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchHeaders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponse;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AirticketOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * 账号资金流水.
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
     * 账号资金流水.
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
     * Ancillary - Suggestion.
     *
     * @remarks
     * search ancillary for selected solution, you should enter the solution_id returned by enrich.
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
     * Ancillary - Suggestion.
     *
     * @remarks
     * search ancillary for selected solution, you should enter the solution_id returned by enrich.
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
     * Transaction-Reservation.
     *
     * @remarks
     * Enter solution_id returned by enrich, ancillary_id returned by ancillarySuggest(optional), passengers information and contact information, the book interface will create an order wait for pay.
     * There are two issues should be noticed:
     * 1. the solution_id must be processed by pricing.
     * 2. the order created by book interface should be pay within 30 minutes, otherwise the order will be closed.
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
     * Transaction-Reservation.
     *
     * @remarks
     * Enter solution_id returned by enrich, ancillary_id returned by ancillarySuggest(optional), passengers information and contact information, the book interface will create an order wait for pay.
     * There are two issues should be noticed:
     * 1. the solution_id must be processed by pricing.
     * 2. the order created by book interface should be pay within 30 minutes, otherwise the order will be closed.
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
     * Transaction - Unpaid Cancellation.
     *
     * @remarks
     * close an unpaid order
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
     * Transaction - Unpaid Cancellation.
     *
     * @remarks
     * close an unpaid order
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
     * 改签-Apply.
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
     * 改签-Apply.
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
     * 改签-取消.
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
     * 改签-取消.
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
     * 改签-确认.
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
     * 改签-确认.
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
     * 改签-Detail.
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
     * 改签-Detail.
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
     * 改签单列表-关于买家账号.
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
     * 改签单列表-关于买家账号.
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
     * 改签单列表-关于正向订单.
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
     * 改签单列表-关于正向订单.
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
     * 数据收集-低价航班信息.
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
     * 数据收集-低价航班信息.
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
     * Search-Enrich.
     *
     * @remarks
     * Enrich supports two modes:
     * 1. mode1: enter solution_id returned by Search.
     * 2. mode2: enter journeyParamList.
     * If you already confirm which flight to fly with, then you can use mode2, otherwise, use mode1(search first, then chose one solution_ID and Enrich).
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
     * Search-Enrich.
     *
     * @remarks
     * Enrich supports two modes:
     * 1. mode1: enter solution_id returned by Search.
     * 2. mode2: enter journeyParamList.
     * If you already confirm which flight to fly with, then you can use mode2, otherwise, use mode1(search first, then chose one solution_ID and Enrich).
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
     * 附件上传.
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
     * 附件上传.
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
     * 航变信息-关于订单.
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
     * 航变信息-关于订单.
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
     * Get Token.
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
     * Get Token.
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
     * 航程行李直挂
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
     * 航程行李直挂
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
     * Trade-Order Details.
     *
     * @remarks
     * query order detail
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
     * Trade-Order Details.
     *
     * @remarks
     * query order detail
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
     * Trade - Order List.
     *
     * @remarks
     * query order list
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
     * Trade - Order List.
     *
     * @remarks
     * query order list
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
     * Trade - Seat and Price Verification.
     *
     * @remarks
     * Check is price and remaining seats of solution you selected has changed. You should enter the solution_id returned by enrich.
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
     * Trade - Seat and Price Verification.
     *
     * @remarks
     * Check is price and remaining seats of solution you selected has changed. You should enter the solution_id returned by enrich.
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
     * 退票-申请.
     *
     * @remarks
     * Apply for a refund and generate a refund order.
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
     * 退票-申请.
     *
     * @remarks
     * Apply for a refund and generate a refund order.
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
     * Refund - Detail.
     *
     * @remarks
     * Query refund order detail.
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
     * Refund - Detail.
     *
     * @remarks
     * Query refund order detail.
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
     * Refund - Detail List.
     *
     * @remarks
     * Query refund order detail.
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
     * Refund - Detail List.
     *
     * @remarks
     * Query refund order detail.
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
     * search.
     *
     * @remarks
     * Enter the information of departure, arrival, departure date, passenger number and cabin, return the lowest price for each flight.
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
     * search.
     *
     * @remarks
     * Enter the information of departure, arrival, departure date, passenger number and cabin, return the lowest price for each flight.
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
     * Transaction - Payment and Ticket Issuance.
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
     * Transaction - Payment and Ticket Issuance.
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
     * Transaction - Pre-payment verification.
     *
     * @remarks
     * Pre-check for Ticketing, this interface is optional to use.
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
     * Transaction - Pre-payment verification.
     *
     * @remarks
     * Pre-check for Ticketing, this interface is optional to use.
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
     * 航程过境签.
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
     * 航程过境签.
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
}

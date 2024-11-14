<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 账号资金流水
     *  *
     * @param AccountFlowListRequest $request AccountFlowListRequest
     * @param AccountFlowListHeaders $headers AccountFlowListHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AccountFlowListResponse AccountFlowListResponse
     */
    public function accountFlowListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dayNum)) {
            $query['day_num'] = $request->dayNum;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['page_index'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->utcBeginTime)) {
            $query['utc_begin_time'] = $request->utcBeginTime;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccountFlowList',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/account/flow-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AccountFlowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 账号资金流水
     *  *
     * @param AccountFlowListRequest $request AccountFlowListRequest
     *
     * @return AccountFlowListResponse AccountFlowListResponse
     */
    public function accountFlowList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AccountFlowListHeaders([]);

        return $this->accountFlowListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Ancillary - Suggestion
     *  *
     * @description search ancillary for selected solution, you should enter the solution_id returned by enrich.
     *  *
     * @param AncillarySuggestRequest $request AncillarySuggestRequest
     * @param AncillarySuggestHeaders $headers AncillarySuggestHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AncillarySuggestResponse AncillarySuggestResponse
     */
    public function ancillarySuggestWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->solutionId)) {
            $body['solution_id'] = $request->solutionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AncillarySuggest',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/ancillary/action-suggest',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AncillarySuggestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Ancillary - Suggestion
     *  *
     * @description search ancillary for selected solution, you should enter the solution_id returned by enrich.
     *  *
     * @param AncillarySuggestRequest $request AncillarySuggestRequest
     *
     * @return AncillarySuggestResponse AncillarySuggestResponse
     */
    public function ancillarySuggest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AncillarySuggestHeaders([]);

        return $this->ancillarySuggestWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Transaction-Reservation
     *  *
     * @description Enter solution_id returned by enrich, ancillary_id returned by ancillarySuggest(optional), passengers information and contact information, the book interface will create an order wait for pay.
     * There are two issues should be noticed:
     * 1. the solution_id must be processed by pricing.
     * 2. the order created by book interface should be pay within 30 minutes, otherwise the order will be closed.
     *  *
     * @param BookRequest    $tmpReq  BookRequest
     * @param BookHeaders    $headers BookHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BookResponse BookResponse
     */
    public function bookWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BookShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contact)) {
            $request->contactShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'contact', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerAncillaryPurchaseMapList)) {
            $request->passengerAncillaryPurchaseMapListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerAncillaryPurchaseMapList, 'passenger_ancillary_purchase_map_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerList)) {
            $request->passengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contactShrink)) {
            $body['contact'] = $request->contactShrink;
        }
        if (!Utils::isUnset($request->outOrderNum)) {
            $body['out_order_num'] = $request->outOrderNum;
        }
        if (!Utils::isUnset($request->passengerAncillaryPurchaseMapListShrink)) {
            $body['passenger_ancillary_purchase_map_list'] = $request->passengerAncillaryPurchaseMapListShrink;
        }
        if (!Utils::isUnset($request->passengerListShrink)) {
            $body['passenger_list'] = $request->passengerListShrink;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $body['solution_id'] = $request->solutionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Book',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-book',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transaction-Reservation
     *  *
     * @description Enter solution_id returned by enrich, ancillary_id returned by ancillarySuggest(optional), passengers information and contact information, the book interface will create an order wait for pay.
     * There are two issues should be noticed:
     * 1. the solution_id must be processed by pricing.
     * 2. the order created by book interface should be pay within 30 minutes, otherwise the order will be closed.
     *  *
     * @param BookRequest $request BookRequest
     *
     * @return BookResponse BookResponse
     */
    public function book($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BookHeaders([]);

        return $this->bookWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Transaction - Unpaid Cancellation
     *  *
     * @description close an unpaid order
     *  *
     * @param CancelRequest  $request CancelRequest
     * @param CancelHeaders  $headers CancelHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelResponse CancelResponse
     */
    public function cancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Cancel',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transaction - Unpaid Cancellation
     *  *
     * @description close an unpaid order
     *  *
     * @param CancelRequest $request CancelRequest
     *
     * @return CancelResponse CancelResponse
     */
    public function cancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelHeaders([]);

        return $this->cancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签-Apply
     *  *
     * @param ChangeApplyRequest $tmpReq  ChangeApplyRequest
     * @param ChangeApplyHeaders $headers ChangeApplyHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeApplyResponse ChangeApplyResponse
     */
    public function changeApplyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ChangeApplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->changePassengerList)) {
            $request->changePassengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->changePassengerList, 'change_passenger_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->changedJourneys)) {
            $request->changedJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->changedJourneys, 'changed_journeys', 'json');
        }
        if (!Utils::isUnset($tmpReq->contact)) {
            $request->contactShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'contact', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->changePassengerListShrink)) {
            $body['change_passenger_list'] = $request->changePassengerListShrink;
        }
        if (!Utils::isUnset($request->changedJourneysShrink)) {
            $body['changed_journeys'] = $request->changedJourneysShrink;
        }
        if (!Utils::isUnset($request->contactShrink)) {
            $body['contact'] = $request->contactShrink;
        }
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeApply',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/action-apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签-Apply
     *  *
     * @param ChangeApplyRequest $request ChangeApplyRequest
     *
     * @return ChangeApplyResponse ChangeApplyResponse
     */
    public function changeApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeApplyHeaders([]);

        return $this->changeApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签-取消
     *  *
     * @param ChangeCancelRequest $request ChangeCancelRequest
     * @param ChangeCancelHeaders $headers ChangeCancelHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeCancelResponse ChangeCancelResponse
     */
    public function changeCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeOrderNum)) {
            $body['change_order_num'] = $request->changeOrderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeCancel',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/action-cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签-取消
     *  *
     * @param ChangeCancelRequest $request ChangeCancelRequest
     *
     * @return ChangeCancelResponse ChangeCancelResponse
     */
    public function changeCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeCancelHeaders([]);

        return $this->changeCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签-确认
     *  *
     * @param ChangeConfirmRequest $request ChangeConfirmRequest
     * @param ChangeConfirmHeaders $headers ChangeConfirmHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeConfirmResponse ChangeConfirmResponse
     */
    public function changeConfirmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeOrderNum)) {
            $body['change_order_num'] = $request->changeOrderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeConfirm',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/action-confirm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签-确认
     *  *
     * @param ChangeConfirmRequest $request ChangeConfirmRequest
     *
     * @return ChangeConfirmResponse ChangeConfirmResponse
     */
    public function changeConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeConfirmHeaders([]);

        return $this->changeConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签-Detail
     *  *
     * @param ChangeDetailRequest $request ChangeDetailRequest
     * @param ChangeDetailHeaders $headers ChangeDetailHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDetailResponse ChangeDetailResponse
     */
    public function changeDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderNum)) {
            $query['change_order_num'] = $request->changeOrderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDetail',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签-Detail
     *  *
     * @param ChangeDetailRequest $request ChangeDetailRequest
     *
     * @return ChangeDetailResponse ChangeDetailResponse
     */
    public function changeDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailHeaders([]);

        return $this->changeDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签单列表-关于买家账号
     *  *
     * @param ChangeDetailListOfBuyerRequest $request ChangeDetailListOfBuyerRequest
     * @param ChangeDetailListOfBuyerHeaders $headers ChangeDetailListOfBuyerHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDetailListOfBuyerResponse ChangeDetailListOfBuyerResponse
     */
    public function changeDetailListOfBuyerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['page_index'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->utcCreateBegin)) {
            $query['utc_create_begin'] = $request->utcCreateBegin;
        }
        if (!Utils::isUnset($request->utcCreateEnd)) {
            $query['utc_create_end'] = $request->utcCreateEnd;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDetailListOfBuyer',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/buyer/detail-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeDetailListOfBuyerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签单列表-关于买家账号
     *  *
     * @param ChangeDetailListOfBuyerRequest $request ChangeDetailListOfBuyerRequest
     *
     * @return ChangeDetailListOfBuyerResponse ChangeDetailListOfBuyerResponse
     */
    public function changeDetailListOfBuyer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailListOfBuyerHeaders([]);

        return $this->changeDetailListOfBuyerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 改签单列表-关于正向订单
     *  *
     * @param ChangeDetailListOfOrderNumRequest $request ChangeDetailListOfOrderNumRequest
     * @param ChangeDetailListOfOrderNumHeaders $headers ChangeDetailListOfOrderNumHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDetailListOfOrderNumResponse ChangeDetailListOfOrderNumResponse
     */
    public function changeDetailListOfOrderNumWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderNum)) {
            $query['order_num'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['page_index'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDetailListOfOrderNum',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/change/order-num/detail-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeDetailListOfOrderNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 改签单列表-关于正向订单
     *  *
     * @param ChangeDetailListOfOrderNumRequest $request ChangeDetailListOfOrderNumRequest
     *
     * @return ChangeDetailListOfOrderNumResponse ChangeDetailListOfOrderNumResponse
     */
    public function changeDetailListOfOrderNum($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChangeDetailListOfOrderNumHeaders([]);

        return $this->changeDetailListOfOrderNumWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 数据收集-低价航班信息
     *  *
     * @param CollectFlightLowestPriceRequest $tmpReq  CollectFlightLowestPriceRequest
     * @param CollectFlightLowestPriceHeaders $headers CollectFlightLowestPriceHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CollectFlightLowestPriceResponse CollectFlightLowestPriceResponse
     */
    public function collectFlightLowestPriceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CollectFlightLowestPriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lowestPriceFlightList)) {
            $request->lowestPriceFlightListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lowestPriceFlightList, 'lowestPriceFlightList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->lowestPriceFlightListShrink)) {
            $body['lowestPriceFlightList'] = $request->lowestPriceFlightListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CollectFlightLowestPrice',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/data-collect/flight-lowest-price',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CollectFlightLowestPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 数据收集-低价航班信息
     *  *
     * @param CollectFlightLowestPriceRequest $request CollectFlightLowestPriceRequest
     *
     * @return CollectFlightLowestPriceResponse CollectFlightLowestPriceResponse
     */
    public function collectFlightLowestPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CollectFlightLowestPriceHeaders([]);

        return $this->collectFlightLowestPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Search-Enrich
     *  *
     * @description Enrich supports two modes:
     * 1. mode1: enter solution_id returned by Search.
     * 2. mode2: enter journeyParamList.
     * If you already confirm which flight to fly with, then you can use mode2, otherwise, use mode1(search first, then chose one solution_ID and Enrich).
     *  *
     * @param EnrichRequest  $tmpReq  EnrichRequest
     * @param EnrichHeaders  $headers EnrichHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnrichResponse EnrichResponse
     */
    public function enrichWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EnrichShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->journeyParamList)) {
            $request->journeyParamListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->journeyParamList, 'journey_param_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->adults)) {
            $body['adults'] = $request->adults;
        }
        if (!Utils::isUnset($request->cabinClass)) {
            $body['cabin_class'] = $request->cabinClass;
        }
        if (!Utils::isUnset($request->children)) {
            $body['children'] = $request->children;
        }
        if (!Utils::isUnset($request->infants)) {
            $body['infants'] = $request->infants;
        }
        if (!Utils::isUnset($request->journeyParamListShrink)) {
            $body['journey_param_list'] = $request->journeyParamListShrink;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $body['solution_id'] = $request->solutionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Enrich',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-enrich',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnrichResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Search-Enrich
     *  *
     * @description Enrich supports two modes:
     * 1. mode1: enter solution_id returned by Search.
     * 2. mode2: enter journeyParamList.
     * If you already confirm which flight to fly with, then you can use mode2, otherwise, use mode1(search first, then chose one solution_ID and Enrich).
     *  *
     * @param EnrichRequest $request EnrichRequest
     *
     * @return EnrichResponse EnrichResponse
     */
    public function enrich($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EnrichHeaders([]);

        return $this->enrichWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 附件上传
     *  *
     * @param FileUploadRequest $request FileUploadRequest
     * @param FileUploadHeaders $headers FileUploadHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return FileUploadResponse FileUploadResponse
     */
    public function fileUploadWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileContent)) {
            $body['file_content'] = $request->fileContent;
        }
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileUpload',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/attachment/action-upload',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 附件上传
     *  *
     * @param FileUploadRequest $request FileUploadRequest
     *
     * @return FileUploadResponse FileUploadResponse
     */
    public function fileUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FileUploadHeaders([]);

        return $this->fileUploadWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航变信息-关于订单
     *  *
     * @param FlightChangeOfOrderRequest $request FlightChangeOfOrderRequest
     * @param FlightChangeOfOrderHeaders $headers FlightChangeOfOrderHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightChangeOfOrderResponse FlightChangeOfOrderResponse
     */
    public function flightChangeOfOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderNum)) {
            $query['order_num'] = $request->orderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightChangeOfOrder',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/flightchange/of-order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightChangeOfOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 航变信息-关于订单
     *  *
     * @param FlightChangeOfOrderRequest $request FlightChangeOfOrderRequest
     *
     * @return FlightChangeOfOrderResponse FlightChangeOfOrderResponse
     */
    public function flightChangeOfOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightChangeOfOrderHeaders([]);

        return $this->flightChangeOfOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get Token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['app_key'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['app_secret'] = $request->appSecret;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/token',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航程行李直挂
     *  *
     * @param LuggageDirectRequest $tmpReq  LuggageDirectRequest
     * @param LuggageDirectHeaders $headers LuggageDirectHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LuggageDirectResponse LuggageDirectResponse
     */
    public function luggageDirectWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new LuggageDirectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flightSegmentParamList)) {
            $request->flightSegmentParamListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flightSegmentParamList, 'flight_segment_param_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->flightSegmentParamListShrink)) {
            $query['flight_segment_param_list'] = $request->flightSegmentParamListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LuggageDirect',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/flight-data/luggage-direct',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LuggageDirectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 航程行李直挂
     *  *
     * @param LuggageDirectRequest $request LuggageDirectRequest
     *
     * @return LuggageDirectResponse LuggageDirectResponse
     */
    public function luggageDirect($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new LuggageDirectHeaders([]);

        return $this->luggageDirectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Trade-Order Details
     *  *
     * @description query order detail
     *  *
     * @param OrderDetailRequest $request OrderDetailRequest
     * @param OrderDetailHeaders $headers OrderDetailHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return OrderDetailResponse OrderDetailResponse
     */
    public function orderDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderNum)) {
            $query['order_num'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->outOrderNum)) {
            $query['out_order_num'] = $request->outOrderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderDetail',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/order-detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Trade-Order Details
     *  *
     * @description query order detail
     *  *
     * @param OrderDetailRequest $request OrderDetailRequest
     *
     * @return OrderDetailResponse OrderDetailResponse
     */
    public function orderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OrderDetailHeaders([]);

        return $this->orderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Trade - Order List
     *  *
     * @description query order list
     *  *
     * @param OrderListRequest $request OrderListRequest
     * @param OrderListHeaders $headers OrderListHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return OrderListResponse OrderListResponse
     */
    public function orderListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bookTimeEnd)) {
            $query['book_time_end'] = $request->bookTimeEnd;
        }
        if (!Utils::isUnset($request->bookTimeStart)) {
            $query['book_time_start'] = $request->bookTimeStart;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['page_index'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderList',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Trade - Order List
     *  *
     * @description query order list
     *  *
     * @param OrderListRequest $request OrderListRequest
     *
     * @return OrderListResponse OrderListResponse
     */
    public function orderList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OrderListHeaders([]);

        return $this->orderListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Trade - Seat and Price Verification
     *  *
     * @description Check is price and remaining seats of solution you selected has changed. You should enter the solution_id returned by enrich.
     *  *
     * @param PricingRequest $request PricingRequest
     * @param PricingHeaders $headers PricingHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return PricingResponse PricingResponse
     */
    public function pricingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->solutionId)) {
            $body['solution_id'] = $request->solutionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Pricing',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-pricing',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PricingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Trade - Seat and Price Verification
     *  *
     * @description Check is price and remaining seats of solution you selected has changed. You should enter the solution_id returned by enrich.
     *  *
     * @param PricingRequest $request PricingRequest
     *
     * @return PricingResponse PricingResponse
     */
    public function pricing($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PricingHeaders([]);

        return $this->pricingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 退票-申请
     *  *
     * @description Apply for a refund and generate a refund order.
     *  *
     * @param RefundApplyRequest $tmpReq  RefundApplyRequest
     * @param RefundApplyHeaders $headers RefundApplyHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundApplyResponse RefundApplyResponse
     */
    public function refundApplyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RefundApplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->refundJourneys)) {
            $request->refundJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundJourneys, 'refund_journeys', 'json');
        }
        if (!Utils::isUnset($tmpReq->refundPassengerList)) {
            $request->refundPassengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundPassengerList, 'refund_passenger_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->refundType)) {
            $request->refundTypeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundType, 'refund_type', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->refundJourneysShrink)) {
            $body['refund_journeys'] = $request->refundJourneysShrink;
        }
        if (!Utils::isUnset($request->refundPassengerListShrink)) {
            $body['refund_passenger_list'] = $request->refundPassengerListShrink;
        }
        if (!Utils::isUnset($request->refundTypeShrink)) {
            $body['refund_type'] = $request->refundTypeShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefundApply',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/refund/action-apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 退票-申请
     *  *
     * @description Apply for a refund and generate a refund order.
     *  *
     * @param RefundApplyRequest $request RefundApplyRequest
     *
     * @return RefundApplyResponse RefundApplyResponse
     */
    public function refundApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundApplyHeaders([]);

        return $this->refundApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Refund - Detail
     *  *
     * @description Query refund order detail.
     *  *
     * @param RefundDetailRequest $request RefundDetailRequest
     * @param RefundDetailHeaders $headers RefundDetailHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundDetailResponse RefundDetailResponse
     */
    public function refundDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->refundOrderNum)) {
            $query['refund_order_num'] = $request->refundOrderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundDetail',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/refund/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Refund - Detail
     *  *
     * @description Query refund order detail.
     *  *
     * @param RefundDetailRequest $request RefundDetailRequest
     *
     * @return RefundDetailResponse RefundDetailResponse
     */
    public function refundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundDetailHeaders([]);

        return $this->refundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Refund - Detail List
     *  *
     * @description Query refund order detail.
     *  *
     * @param RefundDetailListRequest $request RefundDetailListRequest
     * @param RefundDetailListHeaders $headers RefundDetailListHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundDetailListResponse RefundDetailListResponse
     */
    public function refundDetailListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderNum)) {
            $query['order_num'] = $request->orderNum;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['page_index'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->refundCreateBeginTime)) {
            $query['refund_create_begin_time'] = $request->refundCreateBeginTime;
        }
        if (!Utils::isUnset($request->refundCreateEndTime)) {
            $query['refund_create_end_time'] = $request->refundCreateEndTime;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundDetailList',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/refund/detail-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefundDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Refund - Detail List
     *  *
     * @description Query refund order detail.
     *  *
     * @param RefundDetailListRequest $request RefundDetailListRequest
     *
     * @return RefundDetailListResponse RefundDetailListResponse
     */
    public function refundDetailList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RefundDetailListHeaders([]);

        return $this->refundDetailListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary search
     *  *
     * @description Enter the information of departure, arrival, departure date, passenger number and cabin, return the lowest price for each flight.
     *  *
     * @param SearchRequest  $tmpReq  SearchRequest
     * @param SearchHeaders  $headers SearchHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchResponse SearchResponse
     */
    public function searchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->airLegs)) {
            $request->airLegsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->airLegs, 'air_legs', 'json');
        }
        if (!Utils::isUnset($tmpReq->searchControlOptions)) {
            $request->searchControlOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchControlOptions, 'search_control_options', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->adults)) {
            $body['adults'] = $request->adults;
        }
        if (!Utils::isUnset($request->airLegsShrink)) {
            $body['air_legs'] = $request->airLegsShrink;
        }
        if (!Utils::isUnset($request->cabinClass)) {
            $body['cabin_class'] = $request->cabinClass;
        }
        if (!Utils::isUnset($request->children)) {
            $body['children'] = $request->children;
        }
        if (!Utils::isUnset($request->infants)) {
            $body['infants'] = $request->infants;
        }
        if (!Utils::isUnset($request->searchControlOptionsShrink)) {
            $body['search_control_options'] = $request->searchControlOptionsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Search',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary search
     *  *
     * @description Enter the information of departure, arrival, departure date, passenger number and cabin, return the lowest price for each flight.
     *  *
     * @param SearchRequest $request SearchRequest
     *
     * @return SearchResponse SearchResponse
     */
    public function search($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchHeaders([]);

        return $this->searchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Transaction - Payment and Ticket Issuance
     *  *
     * @param TicketingRequest $request TicketingRequest
     * @param TicketingHeaders $headers TicketingHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketingResponse TicketingResponse
     */
    public function ticketingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Ticketing',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-ticketing',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TicketingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transaction - Payment and Ticket Issuance
     *  *
     * @param TicketingRequest $request TicketingRequest
     *
     * @return TicketingResponse TicketingResponse
     */
    public function ticketing($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketingHeaders([]);

        return $this->ticketingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Transaction - Pre-payment verification
     *  *
     * @description Pre-check for Ticketing, this interface is optional to use.
     *  *
     * @param TicketingCheckRequest $request TicketingCheckRequest
     * @param TicketingCheckHeaders $headers TicketingCheckHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketingCheckResponse TicketingCheckResponse
     */
    public function ticketingCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderNum)) {
            $body['order_num'] = $request->orderNum;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TicketingCheck',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/trade/action-ticketing-check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TicketingCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transaction - Pre-payment verification
     *  *
     * @description Pre-check for Ticketing, this interface is optional to use.
     *  *
     * @param TicketingCheckRequest $request TicketingCheckRequest
     *
     * @return TicketingCheckResponse TicketingCheckResponse
     */
    public function ticketingCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketingCheckHeaders([]);

        return $this->ticketingCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航程过境签
     *  *
     * @param TransitVisaRequest $tmpReq  TransitVisaRequest
     * @param TransitVisaHeaders $headers TransitVisaHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return TransitVisaResponse TransitVisaResponse
     */
    public function transitVisaWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TransitVisaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flightSegmentParamList)) {
            $request->flightSegmentParamListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flightSegmentParamList, 'flight_segment_param_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->flightSegmentParamListShrink)) {
            $query['flight_segment_param_list'] = $request->flightSegmentParamListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['x-acs-airticket-access-token'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['x-acs-airticket-language'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransitVisa',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/airticket/v1/flight-data/transit-visa',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransitVisaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 航程过境签
     *  *
     * @param TransitVisaRequest $request TransitVisaRequest
     *
     * @return TransitVisaResponse TransitVisaResponse
     */
    public function transitVisa($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TransitVisaHeaders([]);

        return $this->transitVisaWithOptions($request, $headers, $runtime);
    }
}

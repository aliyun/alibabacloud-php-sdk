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
     * @param AccountFlowListRequest $request
     * @param AccountFlowListHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AccountFlowListResponse
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
     * @param AncillarySuggestRequest $request
     * @param AncillarySuggestHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AncillarySuggestResponse
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
     * @param BookRequest    $tmpReq
     * @param BookHeaders    $headers
     * @param RuntimeOptions $runtime
     *
     * @return BookResponse
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
     * @param CancelRequest  $request
     * @param CancelHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelResponse
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
     * @param ChangeApplyRequest $tmpReq
     * @param ChangeApplyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ChangeApplyResponse
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
     * @param ChangeCancelRequest $request
     * @param ChangeCancelHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ChangeCancelResponse
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
     * @param ChangeConfirmRequest $request
     * @param ChangeConfirmHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ChangeConfirmResponse
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
     * @param ChangeDetailRequest $request
     * @param ChangeDetailHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ChangeDetailResponse
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
     * @param ChangeDetailListOfBuyerRequest $request
     * @param ChangeDetailListOfBuyerHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ChangeDetailListOfBuyerResponse
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
     * @param ChangeDetailListOfOrderNumRequest $request
     * @param ChangeDetailListOfOrderNumHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ChangeDetailListOfOrderNumResponse
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
     * @param EnrichRequest  $tmpReq
     * @param EnrichHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnrichResponse
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
     * @param FileUploadRequest $request
     * @param FileUploadHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return FileUploadResponse
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
     * @param FlightChangeOfOrderRequest $request
     * @param FlightChangeOfOrderHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightChangeOfOrderResponse
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
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
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
     * @param LuggageDirectRequest $tmpReq
     * @param LuggageDirectHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return LuggageDirectResponse
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
     * @param OrderDetailRequest $request
     * @param OrderDetailHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OrderDetailResponse
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
     * @param OrderListRequest $request
     * @param OrderListHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return OrderListResponse
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
     * @param PricingRequest $request
     * @param PricingHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return PricingResponse
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
     * @param RefundApplyRequest $tmpReq
     * @param RefundApplyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RefundApplyResponse
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
     * @param RefundDetailRequest $request
     * @param RefundDetailHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RefundDetailResponse
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
     * @param RefundDetailListRequest $request
     * @param RefundDetailListHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RefundDetailListResponse
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
     * @param SearchRequest  $tmpReq
     * @param SearchHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return SearchResponse
     */
    public function searchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->airLegs)) {
            $request->airLegsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->airLegs, 'air_legs', 'json');
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
     * @param TicketingRequest $request
     * @param TicketingHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return TicketingResponse
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
     * @param TicketingCheckRequest $request
     * @param TicketingCheckHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return TicketingCheckResponse
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
     * @param TransitVisaRequest $tmpReq
     * @param TransitVisaHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return TransitVisaResponse
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExceedApplySyncRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExceedApplySyncResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BtripOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('btripopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AccessTokenRequest $request
     *
     * @return AccessTokenResponse
     */
    public function accessToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->accessTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AccessTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AccessTokenResponse
     */
    public function accessTokenWithOptions($request, $headers, $runtime)
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
            'action'      => 'AccessToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/btrip-open-auth/v1/access-token/action/take',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddressGetRequest $request
     *
     * @return AddressGetResponse
     */
    public function addressGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addressGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddressGetRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddressGetResponse
     */
    public function addressGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['action_type'] = $request->actionType;
        }
        if (!Utils::isUnset($request->itineraryId)) {
            $query['itinerary_id'] = $request->itineraryId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddressGet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/open/v1/address',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddressGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAddRequest $request
     *
     * @return ApplyAddResponse
     */
    public function applyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyAddRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ApplyAddResponse
     */
    public function applyAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->externalTravelerList)) {
            $request->externalTravelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->externalTravelerStandard)) {
            $request->externalTravelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->externalTravelerStandard), 'external_traveler_standard', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotelShare)) {
            $request->hotelShareShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->hotelShare), 'hotel_share', 'json');
        }
        if (!Utils::isUnset($tmpReq->itineraryList)) {
            $request->itineraryListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerList)) {
            $request->travelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerStandard)) {
            $request->travelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->budget)) {
            $body['budget'] = $request->budget;
        }
        if (!Utils::isUnset($request->budgetMerge)) {
            $body['budget_merge'] = $request->budgetMerge;
        }
        if (!Utils::isUnset($request->corpName)) {
            $body['corp_name'] = $request->corpName;
        }
        if (!Utils::isUnset($request->departId)) {
            $body['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->departName)) {
            $body['depart_name'] = $request->departName;
        }
        if (!Utils::isUnset($request->externalTravelerListShrink)) {
            $body['external_traveler_list'] = $request->externalTravelerListShrink;
        }
        if (!Utils::isUnset($request->externalTravelerStandardShrink)) {
            $body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }
        if (!Utils::isUnset($request->flightBudget)) {
            $body['flight_budget'] = $request->flightBudget;
        }
        if (!Utils::isUnset($request->hotelBudget)) {
            $body['hotel_budget'] = $request->hotelBudget;
        }
        if (!Utils::isUnset($request->hotelShareShrink)) {
            $body['hotel_share'] = $request->hotelShareShrink;
        }
        if (!Utils::isUnset($request->itineraryListShrink)) {
            $body['itinerary_list'] = $request->itineraryListShrink;
        }
        if (!Utils::isUnset($request->limitTraveler)) {
            $body['limit_traveler'] = $request->limitTraveler;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->thirdpartBusinessId)) {
            $body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }
        if (!Utils::isUnset($request->togetherBookRule)) {
            $body['together_book_rule'] = $request->togetherBookRule;
        }
        if (!Utils::isUnset($request->trainBudget)) {
            $body['train_budget'] = $request->trainBudget;
        }
        if (!Utils::isUnset($request->travelerListShrink)) {
            $body['traveler_list'] = $request->travelerListShrink;
        }
        if (!Utils::isUnset($request->travelerStandardShrink)) {
            $body['traveler_standard'] = $request->travelerStandardShrink;
        }
        if (!Utils::isUnset($request->tripCause)) {
            $body['trip_cause'] = $request->tripCause;
        }
        if (!Utils::isUnset($request->tripDay)) {
            $body['trip_day'] = $request->tripDay;
        }
        if (!Utils::isUnset($request->tripTitle)) {
            $body['trip_title'] = $request->tripTitle;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $body['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        if (!Utils::isUnset($request->vehicleBudget)) {
            $body['vehicle_budget'] = $request->vehicleBudget;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyListQueryRequest $request
     *
     * @return ApplyListQueryResponse
     */
    public function applyListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyListQueryRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ApplyListQueryResponse
     */
    public function applyListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['gmt_modified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->onlyShangLvApply)) {
            $query['only_shang_lv_apply'] = $request->onlyShangLvApply;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $query['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trips',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ApplyListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyModifyRequest $request
     *
     * @return ApplyModifyResponse
     */
    public function applyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyModifyRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ApplyModifyResponse
     */
    public function applyModifyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyModifyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->externalTravelerList)) {
            $request->externalTravelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->externalTravelerStandard)) {
            $request->externalTravelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->externalTravelerStandard), 'external_traveler_standard', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotelShare)) {
            $request->hotelShareShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->hotelShare), 'hotel_share', 'json');
        }
        if (!Utils::isUnset($tmpReq->itineraryList)) {
            $request->itineraryListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerList)) {
            $request->travelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerStandard)) {
            $request->travelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->budget)) {
            $body['budget'] = $request->budget;
        }
        if (!Utils::isUnset($request->budgetMerge)) {
            $body['budget_merge'] = $request->budgetMerge;
        }
        if (!Utils::isUnset($request->corpName)) {
            $body['corp_name'] = $request->corpName;
        }
        if (!Utils::isUnset($request->departId)) {
            $body['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->departName)) {
            $body['depart_name'] = $request->departName;
        }
        if (!Utils::isUnset($request->externalTravelerListShrink)) {
            $body['external_traveler_list'] = $request->externalTravelerListShrink;
        }
        if (!Utils::isUnset($request->externalTravelerStandardShrink)) {
            $body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }
        if (!Utils::isUnset($request->flightBudget)) {
            $body['flight_budget'] = $request->flightBudget;
        }
        if (!Utils::isUnset($request->hotelBudget)) {
            $body['hotel_budget'] = $request->hotelBudget;
        }
        if (!Utils::isUnset($request->hotelShareShrink)) {
            $body['hotel_share'] = $request->hotelShareShrink;
        }
        if (!Utils::isUnset($request->itineraryListShrink)) {
            $body['itinerary_list'] = $request->itineraryListShrink;
        }
        if (!Utils::isUnset($request->limitTraveler)) {
            $body['limit_traveler'] = $request->limitTraveler;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->thirdpartBusinessId)) {
            $body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }
        if (!Utils::isUnset($request->togetherBookRule)) {
            $body['together_book_rule'] = $request->togetherBookRule;
        }
        if (!Utils::isUnset($request->trainBudget)) {
            $body['train_budget'] = $request->trainBudget;
        }
        if (!Utils::isUnset($request->travelerListShrink)) {
            $body['traveler_list'] = $request->travelerListShrink;
        }
        if (!Utils::isUnset($request->travelerStandardShrink)) {
            $body['traveler_standard'] = $request->travelerStandardShrink;
        }
        if (!Utils::isUnset($request->tripCause)) {
            $body['trip_cause'] = $request->tripCause;
        }
        if (!Utils::isUnset($request->tripDay)) {
            $body['trip_day'] = $request->tripDay;
        }
        if (!Utils::isUnset($request->tripTitle)) {
            $body['trip_title'] = $request->tripTitle;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $body['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        if (!Utils::isUnset($request->vehicleBudget)) {
            $body['vehicle_budget'] = $request->vehicleBudget;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyQueryRequest $request
     *
     * @return ApplyQueryResponse
     */
    public function applyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyQueryRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyQueryResponse
     */
    public function applyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->applyShowId)) {
            $query['apply_show_id'] = $request->applyShowId;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyAddRequest $request
     *
     * @return CarApplyAddResponse
     */
    public function carApplyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->carApplyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyAddRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CarApplyAddResponse
     */
    public function carApplyAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cause)) {
            $body['cause'] = $request->cause;
        }
        if (!Utils::isUnset($request->city)) {
            $body['city'] = $request->city;
        }
        if (!Utils::isUnset($request->date)) {
            $body['date'] = $request->date;
        }
        if (!Utils::isUnset($request->finishedDate)) {
            $body['finished_date'] = $request->finishedDate;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['project_code'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $body['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        if (!Utils::isUnset($request->timesTotal)) {
            $body['times_total'] = $request->timesTotal;
        }
        if (!Utils::isUnset($request->timesType)) {
            $body['times_type'] = $request->timesType;
        }
        if (!Utils::isUnset($request->timesUsed)) {
            $body['times_used'] = $request->timesUsed;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CarApplyAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CarApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyModifyRequest $request
     *
     * @return CarApplyModifyResponse
     */
    public function carApplyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->carApplyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyModifyRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CarApplyModifyResponse
     */
    public function carApplyModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->operateTime)) {
            $body['operate_time'] = $request->operateTime;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $body['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CarApplyModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CarApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyQueryRequest $request
     *
     * @return CarApplyQueryResponse
     */
    public function carApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->carApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyQueryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarApplyQueryResponse
     */
    public function carApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createdEndAt)) {
            $query['created_end_at'] = $request->createdEndAt;
        }
        if (!Utils::isUnset($request->createdStartAt)) {
            $query['created_start_at'] = $request->createdStartAt;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $query['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarBillSettlementQueryRequest $request
     *
     * @return CarBillSettlementQueryResponse
     */
    public function carBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->carBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarBillSettlementQueryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CarBillSettlementQueryResponse
     */
    public function carBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarOrderListQueryRequest $request
     *
     * @return CarOrderListQueryResponse
     */
    public function carOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->carOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarOrderListQueryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CarOrderListQueryResponse
     */
    public function carOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommonApplyQueryRequest $request
     *
     * @return CommonApplyQueryResponse
     */
    public function commonApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commonApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CommonApplyQueryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CommonApplyQueryResponse
     */
    public function commonApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommonApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/common',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommonApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommonApplySyncRequest $request
     *
     * @return CommonApplySyncResponse
     */
    public function commonApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commonApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CommonApplySyncRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CommonApplySyncResponse
     */
    public function commonApplySyncWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartyFlowId)) {
            $query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommonApplySync',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/syn-common',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommonApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CorpTokenRequest $request
     *
     * @return CorpTokenResponse
     */
    public function corpToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->corpTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CorpTokenRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CorpTokenResponse
     */
    public function corpTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CorpToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/btrip-open-auth/v1/corp-token/action/take',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CorpTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterDeleteRequest $request
     *
     * @return CostCenterDeleteResponse
     */
    public function costCenterDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->costCenterDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterDeleteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterDeleteResponse
     */
    public function costCenterDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdpartId)) {
            $query['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CostCenterDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/delete-costcenter',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CostCenterDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterModifyRequest $request
     *
     * @return CostCenterModifyResponse
     */
    public function costCenterModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->costCenterModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterModifyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterModifyResponse
     */
    public function costCenterModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->number)) {
            $body['number'] = $request->number;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CostCenterModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/modify-costcenter',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CostCenterModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterQueryRequest $request
     *
     * @return CostCenterQueryResponse
     */
    public function costCenterQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->costCenterQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterQueryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CostCenterQueryResponse
     */
    public function costCenterQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        $body = [];
        if (!Utils::isUnset($request->needOrgEntity)) {
            $body['need_org_entity'] = $request->needOrgEntity;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CostCenterQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/costcenter',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CostCenterQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterSaveRequest $request
     *
     * @return CostCenterSaveResponse
     */
    public function costCenterSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->costCenterSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterSaveRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CostCenterSaveResponse
     */
    public function costCenterSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayId)) {
            $body['alipay_id'] = $request->alipayId;
        }
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->number)) {
            $body['number'] = $request->number;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CostCenterSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/save-costcenter',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CostCenterSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DepartmentSaveRequest $request
     *
     * @return DepartmentSaveResponse
     */
    public function departmentSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->departmentSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DepartmentSaveRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DepartmentSaveResponse
     */
    public function departmentSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DepartmentSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->departList)) {
            $request->departListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->departList, 'depart_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->departListShrink)) {
            $body['depart_list'] = $request->departListShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DepartmentSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/department/v1/department',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DepartmentSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntityAddRequest $request
     *
     * @return EntityAddResponse
     */
    public function entityAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->entityAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntityAddRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntityAddResponse
     */
    public function entityAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntityAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntityAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/add-entity',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntityAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntityDeleteRequest $request
     *
     * @return EntityDeleteResponse
     */
    public function entityDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->entityDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntityDeleteRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EntityDeleteResponse
     */
    public function entityDeleteWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntityDeleteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->delAll)) {
            $query['del_all'] = $request->delAll;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $query['thirdpart_id'] = $request->thirdpartId;
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntityDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/delete-entity',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntityDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntitySetRequest $request
     *
     * @return EntitySetResponse
     */
    public function entitySet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->entitySetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntitySetRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntitySetResponse
     */
    public function entitySetWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntitySetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntitySet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/set-entity',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntitySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExceedApplySyncRequest $request
     *
     * @return ExceedApplySyncResponse
     */
    public function exceedApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exceedApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExceedApplySyncRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ExceedApplySyncResponse
     */
    public function exceedApplySyncWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartyFlowId)) {
            $query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExceedApplySync',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/syn-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExceedApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightBillSettlementQueryRequest $request
     *
     * @return FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->flightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightBillSettlementQueryRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightExceedApplyQueryRequest $request
     *
     * @return FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->flightExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightExceedApplyQueryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/flight-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOrderListQueryRequest $request
     *
     * @return FlightOrderListQueryResponse
     */
    public function flightOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->flightOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOrderListQueryRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightOrderListQueryResponse
     */
    public function flightOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOrderQueryRequest $request
     *
     * @return FlightOrderQueryResponse
     */
    public function flightOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->flightOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOrderQueryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightOrderQueryResponse
     */
    public function flightOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelBillSettlementQueryRequest $request
     *
     * @return HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelBillSettlementQueryRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/hotel/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelExceedApplyQueryRequest $request
     *
     * @return HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hotelExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelExceedApplyQueryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/hotel-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderListQueryRequest $request
     *
     * @return HotelOrderListQueryResponse
     */
    public function hotelOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hotelOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderListQueryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return HotelOrderListQueryResponse
     */
    public function hotelOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/hotel/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceAddRequest $request
     *
     * @return InvoiceAddResponse
     */
    public function invoiceAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invoiceAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceAddRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return InvoiceAddResponse
     */
    public function invoiceAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['address'] = $request->address;
        }
        if (!Utils::isUnset($request->bankName)) {
            $body['bank_name'] = $request->bankName;
        }
        if (!Utils::isUnset($request->bankNo)) {
            $body['bank_no'] = $request->bankNo;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->taxNo)) {
            $body['tax_no'] = $request->taxNo;
        }
        if (!Utils::isUnset($request->tel)) {
            $body['tel'] = $request->tel;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/add-invoice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceDeleteRequest $request
     *
     * @return InvoiceDeleteResponse
     */
    public function invoiceDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invoiceDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceDeleteRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceDeleteResponse
     */
    public function invoiceDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceModifyRequest $request
     *
     * @return InvoiceModifyResponse
     */
    public function invoiceModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invoiceModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceModifyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceModifyResponse
     */
    public function invoiceModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['address'] = $request->address;
        }
        if (!Utils::isUnset($request->bankName)) {
            $body['bank_name'] = $request->bankName;
        }
        if (!Utils::isUnset($request->bankNo)) {
            $body['bank_no'] = $request->bankNo;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->taxNo)) {
            $body['tax_no'] = $request->taxNo;
        }
        if (!Utils::isUnset($request->tel)) {
            $body['tel'] = $request->tel;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceRuleSaveRequest $request
     *
     * @return InvoiceRuleSaveResponse
     */
    public function invoiceRuleSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invoiceRuleSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceRuleSaveRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvoiceRuleSaveResponse
     */
    public function invoiceRuleSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvoiceRuleSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->allEmploye)) {
            $body['all_employe'] = $request->allEmploye;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->entitiesShrink)) {
            $body['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceRuleSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice-rule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceRuleSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceSearchRequest $request
     *
     * @return InvoiceSearchResponse
     */
    public function invoiceSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invoiceSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceSearchRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceSearchResponse
     */
    public function invoiceSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $body = [];
        if (!Utils::isUnset($request->authority)) {
            $body['authority'] = $request->authority;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IsvUserSaveRequest $request
     *
     * @return IsvUserSaveResponse
     */
    public function isvUserSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isvUserSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IsvUserSaveRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsvUserSaveResponse
     */
    public function isvUserSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IsvUserSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userList)) {
            $request->userListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'user_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_Id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userListShrink)) {
            $body['user_list'] = $request->userListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IsvUserSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/isvuser/v1/isvuser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsvUserSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MonthBillGetRequest $request
     *
     * @return MonthBillGetResponse
     */
    public function monthBillGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->monthBillGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MonthBillGetRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return MonthBillGetResponse
     */
    public function monthBillGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billMonth)) {
            $query['bill_month'] = $request->billMonth;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MonthBillGet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/open/v1/month-bill',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MonthBillGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectAddRequest $request
     *
     * @return ProjectAddResponse
     */
    public function projectAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->projectAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectAddRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ProjectAddResponse
     */
    public function projectAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProjectAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectDeleteRequest $request
     *
     * @return ProjectDeleteResponse
     */
    public function projectDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->projectDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectDeleteRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectDeleteResponse
     */
    public function projectDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ProjectDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectModifyRequest $request
     *
     * @return ProjectModifyResponse
     */
    public function projectModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->projectModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectModifyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectModifyResponse
     */
    public function projectModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProjectModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainBillSettlementQueryRequest $request
     *
     * @return TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainBillSettlementQueryRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainExceedApplyQueryRequest $request
     *
     * @return TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainExceedApplyQueryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/train-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainOrderListQueryRequest $request
     *
     * @return TrainOrderListQueryResponse
     */
    public function trainOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainOrderListQueryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TrainOrderListQueryResponse
     */
    public function trainOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainOrderQueryRequest $request
     *
     * @return TrainOrderQueryResponse
     */
    public function trainOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainOrderQueryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TrainOrderQueryResponse
     */
    public function trainOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}

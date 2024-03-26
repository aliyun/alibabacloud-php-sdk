<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\CreateCouponTemplateRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\CreateCouponTemplateResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\DiscardCouponListRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\DiscardCouponListResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCouponPageRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCouponPageResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCustomerListRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCustomerListResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetRelationRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetRelationResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetResellerPayOrderRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetResellerPayOrderResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\LabelPartnerUserRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\LabelPartnerUserResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\MigrateResourceRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\MigrateResourceResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\OfflineActivityRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\OfflineActivityResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\PayResultCallbackRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\PayResultCallbackResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\PublicActivityRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\PublicActivityResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryActivityRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryActivityResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityShrinkRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SendCouponRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SendCouponResponse;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\TransferResourceRequest;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\TransferResourceResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ResellerTrade extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'resellertrade.aliyuncs.com',
            'ap-northeast-2-pop'          => 'resellertrade.aliyuncs.com',
            'ap-south-1'                  => 'resellertrade.aliyuncs.com',
            'ap-southeast-1'              => 'resellertrade.aliyuncs.com',
            'ap-southeast-2'              => 'resellertrade.aliyuncs.com',
            'ap-southeast-3'              => 'resellertrade.aliyuncs.com',
            'ap-southeast-5'              => 'resellertrade.aliyuncs.com',
            'cn-beijing'                  => 'resellertrade.aliyuncs.com',
            'cn-beijing-finance-1'        => 'resellertrade.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'resellertrade.aliyuncs.com',
            'cn-beijing-gov-1'            => 'resellertrade.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'resellertrade.aliyuncs.com',
            'cn-chengdu'                  => 'resellertrade.aliyuncs.com',
            'cn-edge-1'                   => 'resellertrade.aliyuncs.com',
            'cn-fujian'                   => 'resellertrade.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'resellertrade.aliyuncs.com',
            'cn-hangzhou'                 => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-finance'         => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'resellertrade.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'resellertrade.aliyuncs.com',
            'cn-hongkong'                 => 'resellertrade.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'resellertrade.aliyuncs.com',
            'cn-huhehaote'                => 'resellertrade.aliyuncs.com',
            'cn-north-2-gov-1'            => 'resellertrade.aliyuncs.com',
            'cn-qingdao'                  => 'resellertrade.aliyuncs.com',
            'cn-qingdao-nebula'           => 'resellertrade.aliyuncs.com',
            'cn-shanghai'                 => 'resellertrade.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'resellertrade.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'resellertrade.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'resellertrade.aliyuncs.com',
            'cn-shanghai-inner'           => 'resellertrade.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'resellertrade.aliyuncs.com',
            'cn-shenzhen'                 => 'resellertrade.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'resellertrade.aliyuncs.com',
            'cn-shenzhen-inner'           => 'resellertrade.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'resellertrade.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'resellertrade.aliyuncs.com',
            'cn-wuhan'                    => 'resellertrade.aliyuncs.com',
            'cn-yushanfang'               => 'resellertrade.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'resellertrade.aliyuncs.com',
            'cn-zhangjiakou'              => 'resellertrade.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'resellertrade.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'resellertrade.aliyuncs.com',
            'eu-central-1'                => 'resellertrade.aliyuncs.com',
            'eu-west-1'                   => 'resellertrade.aliyuncs.com',
            'eu-west-1-oxs'               => 'resellertrade.aliyuncs.com',
            'me-east-1'                   => 'resellertrade.aliyuncs.com',
            'rus-west-1-pop'              => 'resellertrade.aliyuncs.com',
            'us-east-1'                   => 'resellertrade.aliyuncs.com',
            'us-west-1'                   => 'resellertrade.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resellertrade', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCouponTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCouponTemplateResponse
     */
    public function createCouponTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->activitySite)) {
            $body['ActivitySite'] = $request->activitySite;
        }
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->certainMoney)) {
            $body['CertainMoney'] = $request->certainMoney;
        }
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->commodityType)) {
            $body['CommodityType'] = $request->commodityType;
        }
        if (!Utils::isUnset($request->controlType)) {
            $body['ControlType'] = $request->controlType;
        }
        if (!Utils::isUnset($request->couponAmount)) {
            $body['CouponAmount'] = $request->couponAmount;
        }
        if (!Utils::isUnset($request->couponEndTime)) {
            $body['CouponEndTime'] = $request->couponEndTime;
        }
        if (!Utils::isUnset($request->couponFixedType)) {
            $body['CouponFixedType'] = $request->couponFixedType;
        }
        if (!Utils::isUnset($request->couponStartTime)) {
            $body['CouponStartTime'] = $request->couponStartTime;
        }
        if (!Utils::isUnset($request->couponType)) {
            $body['CouponType'] = $request->couponType;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->currency)) {
            $bodyFlat['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->discountRate)) {
            $body['DiscountRate'] = $request->discountRate;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extendsMap)) {
            $bodyFlat['ExtendsMap'] = $request->extendsMap;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $body['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->itemCodeSet)) {
            $body['ItemCodeSet'] = $request->itemCodeSet;
        }
        if (!Utils::isUnset($request->market)) {
            $body['Market'] = $request->market;
        }
        if (!Utils::isUnset($request->marketType)) {
            $body['MarketType'] = $request->marketType;
        }
        if (!Utils::isUnset($request->maxRelease)) {
            $body['MaxRelease'] = $request->maxRelease;
        }
        if (!Utils::isUnset($request->messageId)) {
            $body['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->orderTypeSet)) {
            $body['OrderTypeSet'] = $request->orderTypeSet;
        }
        if (!Utils::isUnset($request->perLimitNum)) {
            $body['PerLimitNum'] = $request->perLimitNum;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $body['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->relativeSecond)) {
            $body['RelativeSecond'] = $request->relativeSecond;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->selectionIdSet)) {
            $body['SelectionIdSet'] = $request->selectionIdSet;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $body['SellerId'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->site)) {
            $body['Site'] = $request->site;
        }
        if (!Utils::isUnset($request->spId)) {
            $body['SpId'] = $request->spId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->universalType)) {
            $body['UniversalType'] = $request->universalType;
        }
        if (!Utils::isUnset($request->upperLimit)) {
            $body['UpperLimit'] = $request->upperLimit;
        }
        if (!Utils::isUnset($request->usageCount)) {
            $body['UsageCount'] = $request->usageCount;
        }
        if (!Utils::isUnset($request->useScene)) {
            $body['UseScene'] = $request->useScene;
        }
        if (!Utils::isUnset($request->userPkAmount)) {
            $body['UserPkAmount'] = $request->userPkAmount;
        }
        if (!Utils::isUnset($request->validityType)) {
            $body['ValidityType'] = $request->validityType;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCouponTemplate',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCouponTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCouponTemplateRequest $request
     *
     * @return CreateCouponTemplateResponse
     */
    public function createCouponTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCouponTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DiscardCouponListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DiscardCouponListResponse
     */
    public function discardCouponListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->couponList)) {
            $body['CouponList'] = $request->couponList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DiscardCouponList',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DiscardCouponListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DiscardCouponListRequest $request
     *
     * @return DiscardCouponListResponse
     */
    public function discardCouponList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->discardCouponListWithOptions($request, $runtime);
    }

    /**
     * @param GetCouponPageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCouponPageResponse
     */
    public function getCouponPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCouponPage',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCouponPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCouponPageRequest $request
     *
     * @return GetCouponPageResponse
     */
    public function getCouponPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCouponPageWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomerListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomerList',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCustomerListRequest $request
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerListWithOptions($request, $runtime);
    }

    /**
     * @param GetRelationRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRelationResponse
     */
    public function getRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRelation',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRelationRequest $request
     *
     * @return GetRelationResponse
     */
    public function getRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRelationWithOptions($request, $runtime);
    }

    /**
     * @param GetResellerPayOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetResellerPayOrderResponse
     */
    public function getResellerPayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResellerPayOrder',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResellerPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResellerPayOrderRequest $request
     *
     * @return GetResellerPayOrderResponse
     */
    public function getResellerPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResellerPayOrderWithOptions($request, $runtime);
    }

    /**
     * @param LabelPartnerUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return LabelPartnerUserResponse
     */
    public function labelPartnerUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userPK)) {
            $body['UserPK'] = $request->userPK;
        }
        if (!Utils::isUnset($request->userTag)) {
            $body['UserTag'] = $request->userTag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LabelPartnerUser',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LabelPartnerUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LabelPartnerUserRequest $request
     *
     * @return LabelPartnerUserResponse
     */
    public function labelPartnerUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->labelPartnerUserWithOptions($request, $runtime);
    }

    /**
     * @param MigrateResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MigrateResourceResponse
     */
    public function migrateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionCode)) {
            $body['ActionCode'] = $request->actionCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MigrateResource',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateResourceRequest $request
     *
     * @return MigrateResourceResponse
     */
    public function migrateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateResourceWithOptions($request, $runtime);
    }

    /**
     * @param OfflineActivityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OfflineActivityResponse
     */
    public function offlineActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->activityList)) {
            $body['ActivityList'] = $request->activityList;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OfflineActivity',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OfflineActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OfflineActivityRequest $request
     *
     * @return OfflineActivityResponse
     */
    public function offlineActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineActivityWithOptions($request, $runtime);
    }

    /**
     * @param PayResultCallbackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PayResultCallbackResponse
     */
    public function payResultCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->payStatus)) {
            $query['PayStatus'] = $request->payStatus;
        }
        if (!Utils::isUnset($request->payTime)) {
            $query['PayTime'] = $request->payTime;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PayResultCallback',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PayResultCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PayResultCallbackRequest $request
     *
     * @return PayResultCallbackResponse
     */
    public function payResultCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->payResultCallbackWithOptions($request, $runtime);
    }

    /**
     * @param PublicActivityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublicActivityResponse
     */
    public function publicActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->activityList)) {
            $body['ActivityList'] = $request->activityList;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->snapType)) {
            $body['SnapType'] = $request->snapType;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublicActivity',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublicActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublicActivityRequest $request
     *
     * @return PublicActivityResponse
     */
    public function publicActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publicActivityWithOptions($request, $runtime);
    }

    /**
     * @param QueryActivityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryActivityResponse
     */
    public function queryActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->activityId)) {
            $body['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->snapType)) {
            $body['SnapType'] = $request->snapType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryActivity',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryActivityRequest $request
     *
     * @return QueryActivityResponse
     */
    public function queryActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryActivityWithOptions($request, $runtime);
    }

    /**
     * @param QueryEcoRelationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryEcoRelationResponse
     */
    public function queryEcoRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->relationTime)) {
            $body['RelationTime'] = $request->relationTime;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryEcoRelation',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEcoRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEcoRelationRequest $request
     *
     * @return QueryEcoRelationResponse
     */
    public function queryEcoRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEcoRelationWithOptions($request, $runtime);
    }

    /**
     * @param SaveActivityRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SaveActivityResponse
     */
    public function saveActivityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveActivityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendMap)) {
            $request->extendMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendMap, 'ExtendMap', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->activityName)) {
            $body['ActivityName'] = $request->activityName;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->blackUidList)) {
            $body['BlackUidList'] = $request->blackUidList;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extendMapShrink)) {
            $body['ExtendMap'] = $request->extendMapShrink;
        }
        if (!Utils::isUnset($request->fusionPromotionParamList)) {
            $body['FusionPromotionParamList'] = $request->fusionPromotionParamList;
        }
        if (!Utils::isUnset($request->publishTag)) {
            $body['PublishTag'] = $request->publishTag;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->testAccountUidList)) {
            $body['TestAccountUidList'] = $request->testAccountUidList;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->whiteUidList)) {
            $body['WhiteUidList'] = $request->whiteUidList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveActivity',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveActivityRequest $request
     *
     * @return SaveActivityResponse
     */
    public function saveActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveActivityWithOptions($request, $runtime);
    }

    /**
     * @param SendCouponRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SendCouponResponse
     */
    public function sendCouponWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $body['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $body['SellerId'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userAmountModelList)) {
            $body['UserAmountModelList'] = $request->userAmountModelList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCoupon',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCouponResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCouponRequest $request
     *
     * @return SendCouponResponse
     */
    public function sendCoupon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCouponWithOptions($request, $runtime);
    }

    /**
     * @param TransferResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TransferResourceResponse
     */
    public function transferResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionCode)) {
            $body['ActionCode'] = $request->actionCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransferResource',
            'version'     => '2019-12-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferResourceRequest $request
     *
     * @return TransferResourceResponse
     */
    public function transferResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferResourceWithOptions($request, $runtime);
    }
}

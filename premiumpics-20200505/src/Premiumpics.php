<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\AddUserCollectionRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\AddUserCollectionResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CheckSensitiveRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CheckSensitiveResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ConfirmConfigurationOrderRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ConfirmConfigurationOrderResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateCommodityOrderRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateCommodityOrderResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateCommodityOrderShrinkRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateConfigurationOrderRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateConfigurationOrderResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateImageOrderRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateImageOrderResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateInventoryLockRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\CreateInventoryLockResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DeleteUserCollectionRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DeleteUserCollectionResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeDownloadImageInfoRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeDownloadImageInfoResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeIndustryListResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeLogoRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeLogoResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribePartnerConfigRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribePartnerConfigResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribePolicyRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribePolicyResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeUserProduceRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\DescribeUserProduceResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoFontListRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoFontListResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoImageRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoImageResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetProduceInfoRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetProduceInfoResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTemplateCategoriesRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTemplateCategoriesResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTextLogoListRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTextLogoListResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogoSamplesRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogoSamplesResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogosRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogosResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserCollectionsRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserCollectionsResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProduceOperateLogsRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProduceOperateLogsResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProducesRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProducesResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\OperateProduceForPartnerRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\OperateProduceForPartnerResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\OperateProduceForUserRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\OperateProduceForUserResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryBarrelImageListRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryBarrelImageListResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryConfigurationOrderRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryConfigurationOrderResponse;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\SubmitIntentionRequest;
use AlibabaCloud\SDK\Premiumpics\V20200505\Models\SubmitIntentionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Premiumpics extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('premiumpics', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddUserCollectionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddUserCollectionResponse
     */
    public function addUserCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->unitId)) {
            $query['UnitId'] = $request->unitId;
        }
        if (!Utils::isUnset($request->unitName)) {
            $query['UnitName'] = $request->unitName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserCollection',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserCollectionRequest $request
     *
     * @return AddUserCollectionResponse
     */
    public function addUserCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserCollectionWithOptions($request, $runtime);
    }

    /**
     * @param CheckSensitiveRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckSensitiveResponse
     */
    public function checkSensitiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSensitive',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSensitiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSensitiveRequest $request
     *
     * @return CheckSensitiveResponse
     */
    public function checkSensitive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSensitiveWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmConfigurationOrderRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfirmConfigurationOrderResponse
     */
    public function confirmConfigurationOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->aliyunKpLong)) {
            $query['AliyunKpLong'] = $request->aliyunKpLong;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->callerParentId)) {
            $query['CallerParentId'] = $request->callerParentId;
        }
        if (!Utils::isUnset($request->callerSecurityTransport)) {
            $query['CallerSecurityTransport'] = $request->callerSecurityTransport;
        }
        if (!Utils::isUnset($request->callerType)) {
            $query['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->configurationId)) {
            $query['ConfigurationId'] = $request->configurationId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->mfaPresent)) {
            $query['MfaPresent'] = $request->mfaPresent;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->popAction)) {
            $query['PopAction'] = $request->popAction;
        }
        if (!Utils::isUnset($request->proxyCallerIp)) {
            $query['ProxyCallerIp'] = $request->proxyCallerIp;
        }
        if (!Utils::isUnset($request->proxyCallerSecurityTransport)) {
            $query['ProxyCallerSecurityTransport'] = $request->proxyCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->proxyTrustTransportInfo)) {
            $query['ProxyTrustTransportInfo'] = $request->proxyTrustTransportInfo;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stsTokenCallerBid)) {
            $query['StsTokenCallerBid'] = $request->stsTokenCallerBid;
        }
        if (!Utils::isUnset($request->stsTokenCallerUid)) {
            $query['StsTokenCallerUid'] = $request->stsTokenCallerUid;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmConfigurationOrder',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmConfigurationOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmConfigurationOrderRequest $request
     *
     * @return ConfirmConfigurationOrderResponse
     */
    public function confirmConfigurationOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmConfigurationOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommodityOrderRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCommodityOrderResponse
     */
    public function createCommodityOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCommodityOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->components)) {
            $request->componentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }
        if (!Utils::isUnset($tmpReq->orderParams)) {
            $request->orderParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderParams, 'OrderParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $query['Components'] = $request->componentsShrink;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderParamsShrink)) {
            $query['OrderParams'] = $request->orderParamsShrink;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->specCode)) {
            $query['SpecCode'] = $request->specCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommodityOrder',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommodityOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommodityOrderRequest $request
     *
     * @return CreateCommodityOrderResponse
     */
    public function createCommodityOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommodityOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigurationOrderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateConfigurationOrderResponse
     */
    public function createConfigurationOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->aliyunKpLong)) {
            $query['AliyunKpLong'] = $request->aliyunKpLong;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->callerParentId)) {
            $query['CallerParentId'] = $request->callerParentId;
        }
        if (!Utils::isUnset($request->callerSecurityTransport)) {
            $query['CallerSecurityTransport'] = $request->callerSecurityTransport;
        }
        if (!Utils::isUnset($request->callerType)) {
            $query['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->mfaPresent)) {
            $query['MfaPresent'] = $request->mfaPresent;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->packageId)) {
            $query['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->popAction)) {
            $query['PopAction'] = $request->popAction;
        }
        if (!Utils::isUnset($request->proxyCallerIp)) {
            $query['ProxyCallerIp'] = $request->proxyCallerIp;
        }
        if (!Utils::isUnset($request->proxyCallerSecurityTransport)) {
            $query['ProxyCallerSecurityTransport'] = $request->proxyCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->proxyTrustTransportInfo)) {
            $query['ProxyTrustTransportInfo'] = $request->proxyTrustTransportInfo;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stsTokenCallerBid)) {
            $query['StsTokenCallerBid'] = $request->stsTokenCallerBid;
        }
        if (!Utils::isUnset($request->stsTokenCallerUid)) {
            $query['StsTokenCallerUid'] = $request->stsTokenCallerUid;
        }
        if (!Utils::isUnset($request->systemCall)) {
            $query['SystemCall'] = $request->systemCall;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigurationOrder',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigurationOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigurationOrderRequest $request
     *
     * @return CreateConfigurationOrderResponse
     */
    public function createConfigurationOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigurationOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageOrderResponse
     */
    public function createImageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->buyerType)) {
            $query['BuyerType'] = $request->buyerType;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->goodsId)) {
            $query['GoodsId'] = $request->goodsId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageOrder',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageOrderRequest $request
     *
     * @return CreateImageOrderResponse
     */
    public function createImageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateInventoryLockRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateInventoryLockResponse
     */
    public function createInventoryLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->goodsId)) {
            $query['GoodsId'] = $request->goodsId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInventoryLock',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInventoryLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInventoryLockRequest $request
     *
     * @return CreateInventoryLockResponse
     */
    public function createInventoryLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInventoryLockWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserCollectionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUserCollectionResponse
     */
    public function deleteUserCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->unitId)) {
            $query['UnitId'] = $request->unitId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserCollection',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserCollectionRequest $request
     *
     * @return DeleteUserCollectionResponse
     */
    public function deleteUserCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserCollectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadImageInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDownloadImageInfoResponse
     */
    public function describeDownloadImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->downloadType)) {
            $query['DownloadType'] = $request->downloadType;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageUserBuyId)) {
            $query['ImageUserBuyId'] = $request->imageUserBuyId;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadImageInfo',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDownloadImageInfoRequest $request
     *
     * @return DescribeDownloadImageInfoResponse
     */
    public function describeDownloadImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeIndustryListResponse
     */
    public function describeIndustryListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeIndustryList',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIndustryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeIndustryListResponse
     */
    public function describeIndustryList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIndustryListWithOptions($runtime);
    }

    /**
     * @param DescribeLogoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeLogoResponse
     */
    public function describeLogoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogo',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogoRequest $request
     *
     * @return DescribeLogoResponse
     */
    public function describeLogo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogoWithOptions($request, $runtime);
    }

    /**
     * @param DescribePartnerConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->partnerCode)) {
            $query['PartnerCode'] = $request->partnerCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePartnerConfig',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePartnerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePartnerConfigRequest $request
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePartnerConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePolicyResponse
     */
    public function describePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicy',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePolicyRequest $request
     *
     * @return DescribePolicyResponse
     */
    public function describePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserProduceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserProduceResponse
     */
    public function describeUserProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserProduce',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserProduceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserProduceRequest $request
     *
     * @return DescribeUserProduceResponse
     */
    public function describeUserProduce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserProduceWithOptions($request, $runtime);
    }

    /**
     * @param GetLogoFontListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLogoFontListResponse
     */
    public function getLogoFontListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogoFontList',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogoFontListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLogoFontListRequest $request
     *
     * @return GetLogoFontListResponse
     */
    public function getLogoFontList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogoFontListWithOptions($request, $runtime);
    }

    /**
     * @param GetLogoImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLogoImageResponse
     */
    public function getLogoImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogoImage',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogoImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLogoImageRequest $request
     *
     * @return GetLogoImageResponse
     */
    public function getLogoImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogoImageWithOptions($request, $runtime);
    }

    /**
     * @param GetProduceInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProduceInfoResponse
     */
    public function getProduceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProduceInfo',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProduceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProduceInfoRequest $request
     *
     * @return GetProduceInfoResponse
     */
    public function getProduceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProduceInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateCategoriesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTemplateCategoriesResponse
     */
    public function getTemplateCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateCategories',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateCategoriesRequest $request
     *
     * @return GetTemplateCategoriesResponse
     */
    public function getTemplateCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param GetTextLogoListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTextLogoListResponse
     */
    public function getTextLogoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTextLogoList',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTextLogoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTextLogoListRequest $request
     *
     * @return GetTextLogoListResponse
     */
    public function getTextLogoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTextLogoListWithOptions($request, $runtime);
    }

    /**
     * @param ListDesignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDesignResponse
     */
    public function listDesignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->designType)) {
            $query['DesignType'] = $request->designType;
        }
        if (!Utils::isUnset($request->designVersion)) {
            $query['DesignVersion'] = $request->designVersion;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDesign',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDesignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDesignRequest $request
     *
     * @return ListDesignResponse
     */
    public function listDesign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDesignWithOptions($request, $runtime);
    }

    /**
     * @param ListLogoSamplesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogoSamplesResponse
     */
    public function listLogoSamplesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogoSamples',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogoSamplesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogoSamplesRequest $request
     *
     * @return ListLogoSamplesResponse
     */
    public function listLogoSamples($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogoSamplesWithOptions($request, $runtime);
    }

    /**
     * @param ListLogosRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListLogosResponse
     */
    public function listLogosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogos',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogosRequest $request
     *
     * @return ListLogosResponse
     */
    public function listLogos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogosWithOptions($request, $runtime);
    }

    /**
     * @param ListUserCollectionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserCollectionsResponse
     */
    public function listUserCollectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserCollections',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserCollectionsRequest $request
     *
     * @return ListUserCollectionsResponse
     */
    public function listUserCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserProduceOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserProduceOperateLogs',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProduceOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserProduceOperateLogsRequest $request
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProduceOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserProducesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUserProducesResponse
     */
    public function listUserProducesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extCondition)) {
            $query['ExtCondition'] = $request->extCondition;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->solutionBizId)) {
            $query['SolutionBizId'] = $request->solutionBizId;
        }
        if (!Utils::isUnset($request->sortParam)) {
            $query['SortParam'] = $request->sortParam;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserProduces',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProducesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserProducesRequest $request
     *
     * @return ListUserProducesResponse
     */
    public function listUserProduces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProducesWithOptions($request, $runtime);
    }

    /**
     * @param OperateProduceForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateProduceForPartner',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateProduceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateProduceForPartnerRequest $request
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateProduceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param OperateProduceForUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OperateProduceForUserResponse
     */
    public function operateProduceForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateProduceForUser',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateProduceForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateProduceForUserRequest $request
     *
     * @return OperateProduceForUserResponse
     */
    public function operateProduceForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateProduceForUserWithOptions($request, $runtime);
    }

    /**
     * @param QueryBarrelImageListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryBarrelImageListResponse
     */
    public function queryBarrelImageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->barrel)) {
            $query['Barrel'] = $request->barrel;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startId)) {
            $query['StartId'] = $request->startId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBarrelImageList',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBarrelImageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBarrelImageListRequest $request
     *
     * @return QueryBarrelImageListResponse
     */
    public function queryBarrelImageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBarrelImageListWithOptions($request, $runtime);
    }

    /**
     * @param QueryConfigurationOrderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryConfigurationOrderResponse
     */
    public function queryConfigurationOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConfigurationOrder',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConfigurationOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConfigurationOrderRequest $request
     *
     * @return QueryConfigurationOrderResponse
     */
    public function queryConfigurationOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConfigurationOrderWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIntentionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitIntentionResponse
     */
    public function submitIntentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->commodityType)) {
            $query['CommodityType'] = $request->commodityType;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vcode)) {
            $query['Vcode'] = $request->vcode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIntention',
            'version'     => '2020-05-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitIntentionRequest $request
     *
     * @return SubmitIntentionResponse
     */
    public function submitIntention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIntentionWithOptions($request, $runtime);
    }
}

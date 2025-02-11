<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\AutoRenewInstanceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\AutoRenewInstanceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\CrossAccountVerifyTokenRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\CrossAccountVerifyTokenResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeApiMeteringRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeApiMeteringResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCurrentNodeInfoRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCurrentNodeInfoResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsLinkRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsLinkResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsLinkShrinkRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectAttachmentsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectAttachmentsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectInfoRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectInfoResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectMessagesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectMessagesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectNodesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectNodesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectOperateLogsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectOperateLogsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\FinishCurrentProjectNodeRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\FinishCurrentProjectNodeResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\ResumeProjectRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ResumeProjectResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\RollbackCurrentProjectNodeRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\RollbackCurrentProjectNodeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Market extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'           => 'market.aliyuncs.com',
            'ap-northeast-1'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'market.ap-southeast-1.aliyuncs.com',
            'cn-beijing'            => 'market.aliyuncs.com',
            'cn-chengdu'            => 'market.aliyuncs.com',
            'cn-hongkong'           => 'market.aliyuncs.com',
            'cn-huhehaote'          => 'market.aliyuncs.com',
            'cn-qingdao'            => 'market.aliyuncs.com',
            'cn-shanghai'           => 'market.aliyuncs.com',
            'cn-shenzhen'           => 'market.aliyuncs.com',
            'cn-zhangjiakou'        => 'market.aliyuncs.com',
            'eu-central-1'          => 'market.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'us-west-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'market.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'market.aliyuncs.com',
            'cn-shanghai-finance-1' => 'market.aliyuncs.com',
            'cn-north-2-gov-1'      => 'market.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('market', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 增加STS支持
     *
     * @param request - ActivateLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identification) {
            @$query['Identification'] = $request->identification;
        }

        if (null !== $request->licenseCode) {
            @$query['LicenseCode'] = $request->licenseCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateLicense',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActivateLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 增加STS支持
     *
     * @param request - ActivateLicenseRequest
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * @param request - AutoRenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AutoRenewInstanceResponse
     *
     * @param AutoRenewInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AutoRenewInstanceResponse
     */
    public function autoRenewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRenewCycle) {
            @$body['AutoRenewCycle'] = $request->autoRenewCycle;
        }

        if (null !== $request->autoRenewDuration) {
            @$body['AutoRenewDuration'] = $request->autoRenewDuration;
        }

        if (null !== $request->orderBizId) {
            @$body['OrderBizId'] = $request->orderBizId;
        }

        if (null !== $request->ownerId) {
            @$body['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AutoRenewInstance',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AutoRenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AutoRenewInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AutoRenewInstanceRequest
     * @returns AutoRenewInstanceResponse
     *
     * @param AutoRenewInstanceRequest $request
     *
     * @return AutoRenewInstanceResponse
     */
    public function autoRenewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->autoRenewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodity) {
            @$query['Commodity'] = $request->commodity;
        }

        if (null !== $request->orderSouce) {
            @$query['OrderSouce'] = $request->orderSouce;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateOrderRequest
     * @returns CreateOrderResponse
     *
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
     * @param request - CrossAccountVerifyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CrossAccountVerifyTokenResponse
     *
     * @param CrossAccountVerifyTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CrossAccountVerifyTokenResponse
     */
    public function crossAccountVerifyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CrossAccountVerifyToken',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CrossAccountVerifyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CrossAccountVerifyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CrossAccountVerifyTokenRequest
     * @returns CrossAccountVerifyTokenResponse
     *
     * @param CrossAccountVerifyTokenRequest $request
     *
     * @return CrossAccountVerifyTokenResponse
     */
    public function crossAccountVerifyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->crossAccountVerifyTokenWithOptions($request, $runtime);
    }

    /**
     * 查询API用量.
     *
     * @param request - DescribeApiMeteringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeApiMeteringResponse
     *
     * @param DescribeApiMeteringRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApiMeteringResponse
     */
    public function describeApiMeteringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiMetering',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeApiMeteringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeApiMeteringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询API用量.
     *
     * @param request - DescribeApiMeteringRequest
     * @returns DescribeApiMeteringResponse
     *
     * @param DescribeApiMeteringRequest $request
     *
     * @return DescribeApiMeteringResponse
     */
    public function describeApiMetering($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMeteringWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCurrentNodeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCurrentNodeInfoResponse
     *
     * @param DescribeCurrentNodeInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCurrentNodeInfoResponse
     */
    public function describeCurrentNodeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCurrentNodeInfo',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCurrentNodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCurrentNodeInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCurrentNodeInfoRequest
     * @returns DescribeCurrentNodeInfoResponse
     *
     * @param DescribeCurrentNodeInfoRequest $request
     *
     * @return DescribeCurrentNodeInfoResponse
     */
    public function describeCurrentNodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCurrentNodeInfoWithOptions($request, $runtime);
    }

    /**
     * 分页获取推广商品
     *
     * @param request - DescribeDistributionProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDistributionProductsResponse
     *
     * @param DescribeDistributionProductsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDistributionProductsResponse
     */
    public function describeDistributionProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDistributionProducts',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDistributionProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDistributionProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 分页获取推广商品
     *
     * @param request - DescribeDistributionProductsRequest
     * @returns DescribeDistributionProductsResponse
     *
     * @param DescribeDistributionProductsRequest $request
     *
     * @return DescribeDistributionProductsResponse
     */
    public function describeDistributionProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistributionProductsWithOptions($request, $runtime);
    }

    /**
     * 获取并生成推广商品-链接.
     *
     * @param tmpReq - DescribeDistributionProductsLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDistributionProductsLinkResponse
     *
     * @param DescribeDistributionProductsLinkRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDistributionProductsLinkResponse
     */
    public function describeDistributionProductsLinkWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeDistributionProductsLinkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->codes) {
            $request->codesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->codes, 'Codes', 'json');
        }

        $query = [];
        if (null !== $request->codesShrink) {
            @$query['Codes'] = $request->codesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDistributionProductsLink',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDistributionProductsLinkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDistributionProductsLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取并生成推广商品-链接.
     *
     * @param request - DescribeDistributionProductsLinkRequest
     * @returns DescribeDistributionProductsLinkResponse
     *
     * @param DescribeDistributionProductsLinkRequest $request
     *
     * @return DescribeDistributionProductsLinkResponse
     */
    public function describeDistributionProductsLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistributionProductsLinkWithOptions($request, $runtime);
    }

    /**
     * 服务商侧查询镜像实例信息.
     *
     * @param request - DescribeImageInstanceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeImageInstanceForIsvResponse
     *
     * @param DescribeImageInstanceForIsvRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageInstanceForIsvResponse
     */
    public function describeImageInstanceForIsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerPk) {
            @$query['CustomerPk'] = $request->customerPk;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageInstanceForIsv',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeImageInstanceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeImageInstanceForIsvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 服务商侧查询镜像实例信息.
     *
     * @param request - DescribeImageInstanceForIsvRequest
     * @returns DescribeImageInstanceForIsvResponse
     *
     * @param DescribeImageInstanceForIsvRequest $request
     *
     * @return DescribeImageInstanceForIsvResponse
     */
    public function describeImageInstanceForIsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInstanceForIsvWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceRequest
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * 服务商侧查询实例信息.
     *
     * @param request - DescribeInstanceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstanceForIsvResponse
     *
     * @param DescribeInstanceForIsvRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceForIsvResponse
     */
    public function describeInstanceForIsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceForIsv',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceForIsvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 服务商侧查询实例信息.
     *
     * @param request - DescribeInstanceForIsvRequest
     * @returns DescribeInstanceForIsvResponse
     *
     * @param DescribeInstanceForIsvRequest $request
     *
     * @return DescribeInstanceForIsvResponse
     */
    public function describeInstanceForIsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceForIsvWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->codes) {
            @$query['Codes'] = $request->codes;
        }

        if (null !== $request->exceptCodes) {
            @$query['ExceptCodes'] = $request->exceptCodes;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstancesRequest
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取License.
     *
     * @param request - DescribeLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeLicenseResponse
     *
     * @param DescribeLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLicenseResponse
     */
    public function describeLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->licenseCode) {
            @$query['LicenseCode'] = $request->licenseCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLicense',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取License.
     *
     * @param request - DescribeLicenseRequest
     * @returns DescribeLicenseResponse
     *
     * @param DescribeLicenseRequest $request
     *
     * @return DescribeLicenseResponse
     */
    public function describeLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLicenseWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeOrderResponse
     *
     * @param DescribeOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeOrderResponse
     */
    public function describeOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrder',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeOrderRequest
     * @returns DescribeOrderResponse
     *
     * @param DescribeOrderRequest $request
     *
     * @return DescribeOrderResponse
     */
    public function describeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderWithOptions($request, $runtime);
    }

    /**
     * 服务商侧查询订单详情.
     *
     * @param request - DescribeOrderForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeOrderForIsvResponse
     *
     * @param DescribeOrderForIsvRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOrderForIsvResponse
     */
    public function describeOrderForIsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrderForIsv',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOrderForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOrderForIsvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 服务商侧查询订单详情.
     *
     * @param request - DescribeOrderForIsvRequest
     * @returns DescribeOrderForIsvResponse
     *
     * @param DescribeOrderForIsvRequest $request
     *
     * @return DescribeOrderForIsvResponse
     */
    public function describeOrderForIsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderForIsvWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodity) {
            @$query['Commodity'] = $request->commodity;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribePriceRequest
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProductResponse
     *
     * @param DescribeProductRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProductResponse
     */
    public function describeProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->queryDraft) {
            @$query['QueryDraft'] = $request->queryDraft;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProduct',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProductRequest
     * @returns DescribeProductResponse
     *
     * @param DescribeProductRequest $request
     *
     * @return DescribeProductResponse
     */
    public function describeProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProductsResponse
     *
     * @param DescribeProductsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeProductsResponse
     */
    public function describeProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchTerm) {
            @$query['SearchTerm'] = $request->searchTerm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProducts',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProductsRequest
     * @returns DescribeProductsResponse
     *
     * @param DescribeProductsRequest $request
     *
     * @return DescribeProductsResponse
     */
    public function describeProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProjectAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProjectAttachmentsResponse
     *
     * @param DescribeProjectAttachmentsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeProjectAttachmentsResponse
     */
    public function describeProjectAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectAttachments',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectAttachmentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProjectAttachmentsRequest
     * @returns DescribeProjectAttachmentsResponse
     *
     * @param DescribeProjectAttachmentsRequest $request
     *
     * @return DescribeProjectAttachmentsResponse
     */
    public function describeProjectAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProjectInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProjectInfoResponse
     *
     * @param DescribeProjectInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProjectInfoResponse
     */
    public function describeProjectInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectInfo',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProjectInfoRequest
     * @returns DescribeProjectInfoResponse
     *
     * @param DescribeProjectInfoRequest $request
     *
     * @return DescribeProjectInfoResponse
     */
    public function describeProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProjectMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProjectMessagesResponse
     *
     * @param DescribeProjectMessagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeProjectMessagesResponse
     */
    public function describeProjectMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectMessages',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectMessagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProjectMessagesRequest
     * @returns DescribeProjectMessagesResponse
     *
     * @param DescribeProjectMessagesRequest $request
     *
     * @return DescribeProjectMessagesResponse
     */
    public function describeProjectMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectMessagesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     *
     * @param request - DescribeProjectNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProjectNodesResponse
     *
     * @param DescribeProjectNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProjectNodesResponse
     */
    public function describeProjectNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectNodes',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     *
     * @param request - DescribeProjectNodesRequest
     * @returns DescribeProjectNodesResponse
     *
     * @param DescribeProjectNodesRequest $request
     *
     * @return DescribeProjectNodesResponse
     */
    public function describeProjectNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectNodesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeProjectOperateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeProjectOperateLogsResponse
     *
     * @param DescribeProjectOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeProjectOperateLogsResponse
     */
    public function describeProjectOperateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectOperateLogs',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectOperateLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeProjectOperateLogsRequest
     * @returns DescribeProjectOperateLogsResponse
     *
     * @param DescribeProjectOperateLogsRequest $request
     *
     * @return DescribeProjectOperateLogsResponse
     */
    public function describeProjectOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @param request - FinishCurrentProjectNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns FinishCurrentProjectNodeResponse
     *
     * @param FinishCurrentProjectNodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FinishCurrentProjectNodeResponse
     */
    public function finishCurrentProjectNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->templateForm) {
            @$query['TemplateForm'] = $request->templateForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'FinishCurrentProjectNode',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return FinishCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FinishCurrentProjectNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - FinishCurrentProjectNodeRequest
     * @returns FinishCurrentProjectNodeResponse
     *
     * @param FinishCurrentProjectNodeRequest $request
     *
     * @return FinishCurrentProjectNodeResponse
     */
    public function finishCurrentProjectNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishCurrentProjectNodeWithOptions($request, $runtime);
    }

    /**
     * @param request - PauseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PauseProjectResponse
     *
     * @param PauseProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PauseProjectResponse
     */
    public function pauseProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseProject',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PauseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PauseProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - PauseProjectRequest
     * @returns PauseProjectResponse
     *
     * @param PauseProjectRequest $request
     *
     * @return PauseProjectResponse
     */
    public function pauseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - PushMeteringDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metering) {
            @$query['Metering'] = $request->metering;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushMeteringDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - PushMeteringDataRequest
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }

    /**
     * @param request - ResumeProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResumeProjectResponse
     *
     * @param ResumeProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeProjectResponse
     */
    public function resumeProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeProject',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ResumeProjectRequest
     * @returns ResumeProjectResponse
     *
     * @param ResumeProjectRequest $request
     *
     * @return ResumeProjectResponse
     */
    public function resumeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - RollbackCurrentProjectNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RollbackCurrentProjectNodeResponse
     *
     * @param RollbackCurrentProjectNodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackCurrentProjectNodeResponse
     */
    public function rollbackCurrentProjectNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackCurrentProjectNode',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RollbackCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackCurrentProjectNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - RollbackCurrentProjectNodeRequest
     * @returns RollbackCurrentProjectNodeResponse
     *
     * @param RollbackCurrentProjectNodeRequest $request
     *
     * @return RollbackCurrentProjectNodeResponse
     */
    public function rollbackCurrentProjectNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackCurrentProjectNodeWithOptions($request, $runtime);
    }
}

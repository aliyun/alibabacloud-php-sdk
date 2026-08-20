<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\AutoRenewInstanceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\AutoRenewInstanceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\ConfirmNotificationRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ConfirmNotificationResponse;
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
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeFailedNotificationsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeFailedNotificationsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponse;
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
use AlibabaCloud\SDK\Market\V20151101\Models\ModifyInvoiceForIsvRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ModifyInvoiceForIsvResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PushTimesUsageRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PushTimesUsageResponse;
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
        $this->_endpointMap = [
            'cn-hangzhou' => 'market.aliyuncs.com',
            'ap-northeast-1' => 'market.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'market.ap-southeast-1.aliyuncs.com',
            'cn-beijing' => 'market.aliyuncs.com',
            'cn-chengdu' => 'market.aliyuncs.com',
            'cn-hongkong' => 'market.aliyuncs.com',
            'cn-huhehaote' => 'market.aliyuncs.com',
            'cn-qingdao' => 'market.aliyuncs.com',
            'cn-shanghai' => 'market.aliyuncs.com',
            'cn-shenzhen' => 'market.aliyuncs.com',
            'cn-zhangjiakou' => 'market.aliyuncs.com',
            'eu-central-1' => 'market.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'market.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'market.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'market.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'market.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'market.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'market.aliyuncs.com',
            'cn-shanghai-finance-1' => 'market.aliyuncs.com',
            'cn-north-2-gov-1' => 'market.aliyuncs.com',
            'ap-southeast-1' => 'market.ap-southeast-1.aliyuncs.com',
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
     * Activates an authorization code by calling ActivateLicense.
     *
     * @param request - ActivateLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ActivateLicense',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates an authorization code by calling ActivateLicense.
     *
     * @param request - ActivateLicenseRequest
     *
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
     * Sets auto-renewal.
     *
     * @param request - AutoRenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AutoRenewInstance',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AutoRenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets auto-renewal.
     *
     * @param request - AutoRenewInstanceRequest
     *
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
     * Confirms that the merchant has received and processed a notification message. After this call, the message will no longer be returned in subsequent queries.
     *
     * @remarks
     * Confirms the receipt of a subscription notification failure message.
     * - After a successful call, the message will no longer be returned in subsequent queries. The platform considers that the merchant has correctly processed the message.
     *
     * @param request - ConfirmNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmNotificationResponse
     *
     * @param ConfirmNotificationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfirmNotificationResponse
     */
    public function confirmNotificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->notificationRequestId) {
            @$query['NotificationRequestId'] = $request->notificationRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmNotification',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirms that the merchant has received and processed a notification message. After this call, the message will no longer be returned in subsequent queries.
     *
     * @remarks
     * Confirms the receipt of a subscription notification failure message.
     * - After a successful call, the message will no longer be returned in subsequent queries. The platform considers that the merchant has correctly processed the message.
     *
     * @param request - ConfirmNotificationRequest
     *
     * @returns ConfirmNotificationResponse
     *
     * @param ConfirmNotificationRequest $request
     *
     * @return ConfirmNotificationResponse
     */
    public function confirmNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmNotificationWithOptions($request, $runtime);
    }

    /**
     * Calls the CreateOrder operation to create an order.
     * Before calling this operation, make sure that you fully understand the billing method and pricing of Alibaba Cloud Marketplace products.
     * To create an order for a commercial image, refer to [CreateInstance](https://help.aliyun.com/document_detail/25499.html).
     *
     * @remarks
     * Before calling this operation, make sure that you fully understand the billing method and [pricing](https://market.aliyun.com/) of Alibaba Cloud Marketplace products.
     * To create an order for a commercial image, refer to [CreateInstance](https://help.aliyun.com/document_detail/25499.html).
     *
     * @param request - CreateOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateOrder',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the CreateOrder operation to create an order.
     * Before calling this operation, make sure that you fully understand the billing method and pricing of Alibaba Cloud Marketplace products.
     * To create an order for a commercial image, refer to [CreateInstance](https://help.aliyun.com/document_detail/25499.html).
     *
     * @remarks
     * Before calling this operation, make sure that you fully understand the billing method and [pricing](https://market.aliyun.com/) of Alibaba Cloud Marketplace products.
     * To create an order for a commercial image, refer to [CreateInstance](https://help.aliyun.com/document_detail/25499.html).
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

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * Query cross-account role authorization information, including the authorized user\\"s Alibaba Cloud account UID, name, authorization time, and authorized role name.
     *
     * @param request - CrossAccountVerifyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CrossAccountVerifyToken',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CrossAccountVerifyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query cross-account role authorization information, including the authorized user\\"s Alibaba Cloud account UID, name, authorization time, and authorized role name.
     *
     * @param request - CrossAccountVerifyTokenRequest
     *
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
     * Retrieves the API quota data of a user, including the remaining quota, total quota, and usage.
     *
     * @remarks
     * ### **Note: This operation supports both Alibaba Cloud accounts and RAM users to retrieve API remaining quota, total quota, and usage information.**.
     *
     * @param request - DescribeApiMeteringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiMetering',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiMeteringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the API quota data of a user, including the remaining quota, total quota, and usage.
     *
     * @remarks
     * ### **Note: This operation supports both Alibaba Cloud accounts and RAM users to retrieve API remaining quota, total quota, and usage information.**.
     *
     * @param request - DescribeApiMeteringRequest
     *
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
     * Calls DescribeCurrentNodeInfo to retrieve the process information of the current node.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeCurrentNodeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeCurrentNodeInfo',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCurrentNodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeCurrentNodeInfo to retrieve the process information of the current node.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeCurrentNodeInfoRequest
     *
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
     * Retrieves a paginated list of promotional products with detailed information.
     *
     * @remarks
     * Call this operation by using a promotion service provider account.
     *
     * @param request - DescribeDistributionProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDistributionProducts',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDistributionProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of promotional products with detailed information.
     *
     * @remarks
     * Call this operation by using a promotion service provider account.
     *
     * @param request - DescribeDistributionProductsRequest
     *
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
     * Retrieves promotion links for promoted products.
     *
     * @remarks
     * Call this operation by using a promotion service provider account. Calls from non-promotion service provider accounts will fail.
     *
     * @param tmpReq - DescribeDistributionProductsLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeDistributionProductsLink',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDistributionProductsLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves promotion links for promoted products.
     *
     * @remarks
     * Call this operation by using a promotion service provider account. Calls from non-promotion service provider accounts will fail.
     *
     * @param request - DescribeDistributionProductsLinkRequest
     *
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
     * Queries the list of failed subscription notifications. After Alibaba Cloud Marketplace fails to call a service provider\\"s message SPI, the service provider can use this operation to proactively query the failed notification information.
     *
     * @remarks
     * Queries the information about failed subscription notifications for a service provider.
     * - If no unconfirmed failed notifications exist, TotalCount returns 0.
     *
     * @param request - DescribeFailedNotificationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFailedNotificationsResponse
     *
     * @param DescribeFailedNotificationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFailedNotificationsResponse
     */
    public function describeFailedNotificationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFailedNotifications',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFailedNotificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of failed subscription notifications. After Alibaba Cloud Marketplace fails to call a service provider\\"s message SPI, the service provider can use this operation to proactively query the failed notification information.
     *
     * @remarks
     * Queries the information about failed subscription notifications for a service provider.
     * - If no unconfirmed failed notifications exist, TotalCount returns 0.
     *
     * @param request - DescribeFailedNotificationsRequest
     *
     * @returns DescribeFailedNotificationsResponse
     *
     * @param DescribeFailedNotificationsRequest $request
     *
     * @return DescribeFailedNotificationsResponse
     */
    public function describeFailedNotifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFailedNotificationsWithOptions($request, $runtime);
    }

    /**
     * 服务商侧查询镜像实例信息.
     *
     * @param request - DescribeImageInstanceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeImageInstanceForIsv',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageInstanceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 服务商侧查询镜像实例信息.
     *
     * @param request - DescribeImageInstanceForIsvRequest
     *
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
     * Calls the DescribeInstance operation to query instance information.
     *
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeInstance',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeInstance operation to query instance information.
     *
     * @param request - DescribeInstanceRequest
     *
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
     * Queries instance information from the service provider side.
     *
     * @param request - DescribeInstanceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeInstanceForIsv',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance information from the service provider side.
     *
     * @param request - DescribeInstanceForIsvRequest
     *
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
     * Queries the list of services purchased by the user.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeInstances',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of services purchased by the user.
     *
     * @param request - DescribeInstancesRequest
     *
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
     * Queries the invoice information of a supplier store in Alibaba Cloud Marketplace.
     *
     * @remarks
     * Queries business information based on an authorization code. The system first verifies whether the authorization code is valid.
     * - If the authorization code is invalid, an error message is returned.
     * - If the authorization code is valid, the authorization information is returned.
     *
     * @param request - DescribeInvoiceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInvoiceForIsvResponse
     *
     * @param DescribeInvoiceForIsvRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInvoiceForIsvResponse
     */
    public function describeInvoiceForIsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->invoiceId) {
            @$query['InvoiceId'] = $request->invoiceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInvoiceForIsv',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInvoiceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the invoice information of a supplier store in Alibaba Cloud Marketplace.
     *
     * @remarks
     * Queries business information based on an authorization code. The system first verifies whether the authorization code is valid.
     * - If the authorization code is invalid, an error message is returned.
     * - If the authorization code is valid, the authorization information is returned.
     *
     * @param request - DescribeInvoiceForIsvRequest
     *
     * @returns DescribeInvoiceForIsvResponse
     *
     * @param DescribeInvoiceForIsvRequest $request
     *
     * @return DescribeInvoiceForIsvResponse
     */
    public function describeInvoiceForIsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvoiceForIsvWithOptions($request, $runtime);
    }

    /**
     * Calls DescribeLicense to query license information.
     *
     * @param request - DescribeLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeLicense',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeLicense to query license information.
     *
     * @param request - DescribeLicenseRequest
     *
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
     * Queries the details of a specified order.
     *
     * @param request - DescribeOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeOrder',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified order.
     *
     * @param request - DescribeOrderRequest
     *
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
     * Queries order details from the service provider side.
     *
     * @param request - DescribeOrderForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeOrderForIsv',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrderForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries order details from the service provider side.
     *
     * @param request - DescribeOrderForIsvRequest
     *
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
     * Calls DescribePrice to query the price information of the corresponding product.
     *
     * @param request - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribePrice',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribePrice to query the price information of the corresponding product.
     *
     * @param request - DescribePriceRequest
     *
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
     * Queries the details of a specified product by calling DescribeProduct.
     *
     * @param request - DescribeProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProduct',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified product by calling DescribeProduct.
     *
     * @param request - DescribeProductRequest
     *
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
     * Retrieves a list of products that meet the specified conditions along with their details.
     *
     * @param request - DescribeProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProducts',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of products that meet the specified conditions along with their details.
     *
     * @param request - DescribeProductsRequest
     *
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
     * Calls DescribeProjectAttachments to retrieve the list of project attachments.
     *
     * @param request - DescribeProjectAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProjectAttachments',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeProjectAttachments to retrieve the list of project attachments.
     *
     * @param request - DescribeProjectAttachmentsRequest
     *
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
     * Calls DescribeProjectInfo to query project information.
     *
     * @param request - DescribeProjectInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProjectInfo',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeProjectInfo to query project information.
     *
     * @param request - DescribeProjectInfoRequest
     *
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
     * Calls DescribeProjectMessages to retrieve the list of project workflow messages.
     *
     * @param request - DescribeProjectMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProjectMessages',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeProjectMessages to retrieve the list of project workflow messages.
     *
     * @param request - DescribeProjectMessagesRequest
     *
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
     * Queries the list of project flow nodes by calling DescribeProjectNodes.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeProjectNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProjectNodes',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of project flow nodes by calling DescribeProjectNodes.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeProjectNodesRequest
     *
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
     * Calls DescribeProjectOperateLogs to retrieve the operation logs of a project flow.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeProjectOperateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DescribeProjectOperateLogs',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProjectOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribeProjectOperateLogs to retrieve the operation logs of a project flow.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - DescribeProjectOperateLogsRequest
     *
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
     * Completes the current process by calling FinishCurrentProjectNode.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - FinishCurrentProjectNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'FinishCurrentProjectNode',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FinishCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Completes the current process by calling FinishCurrentProjectNode.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - FinishCurrentProjectNodeRequest
     *
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
     * Processes invoice acceptance requests.
     *
     * @remarks
     * Queries information about failed subscription notifications for merchants.
     * - If no unconfirmed notification failure information exists, TotalCount returns 0.
     *
     * @param request - ModifyInvoiceForIsvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInvoiceForIsvResponse
     *
     * @param ModifyInvoiceForIsvRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyInvoiceForIsvResponse
     */
    public function modifyInvoiceForIsvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkNotice) {
            @$query['CheckNotice'] = $request->checkNotice;
        }

        if (null !== $request->electronUrl) {
            @$query['ElectronUrl'] = $request->electronUrl;
        }

        if (null !== $request->invoiceId) {
            @$query['InvoiceId'] = $request->invoiceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInvoiceForIsv',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInvoiceForIsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Processes invoice acceptance requests.
     *
     * @remarks
     * Queries information about failed subscription notifications for merchants.
     * - If no unconfirmed notification failure information exists, TotalCount returns 0.
     *
     * @param request - ModifyInvoiceForIsvRequest
     *
     * @returns ModifyInvoiceForIsvResponse
     *
     * @param ModifyInvoiceForIsvRequest $request
     *
     * @return ModifyInvoiceForIsvResponse
     */
    public function modifyInvoiceForIsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInvoiceForIsvWithOptions($request, $runtime);
    }

    /**
     * Calls PauseProject to pause a project.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - PauseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'PauseProject',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls PauseProject to pause a project.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - PauseProjectRequest
     *
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
     * Call PushMeteringData to push metering data.
     *
     * @remarks
     * ### Encoding and Format Requirements
     * - All request parameters must be URLEncoded.
     * - The Metering field in the parameters must strictly follow the format in the example in this document. It has been found that many submissions are not valid JSON. Please verify the format with a JSON formatting tool before submission, otherwise the API call will fail.
     * ### Request Frequency and Single Write Volume Limits
     * - For hourly/daily metering: Cloud Marketplace limits requests for each InstanceId to once per 60 seconds, and each request supports writing up to 100 metering data entries.
     * - For real-time metering (for large model usage scenarios): Cloud Marketplace has no frequency limit for each InstanceId, and each request supports writing up to 10 metering data entries.
     * ### Batch Push Limits for Metering Data
     * - Cross-product InstanceId batch pushing is not supported. When batch pushing, ensure all InstanceIds belong to the same product.
     * - When batch pushing metering data, the "InstanceId" attribute must belong to instances generated by the same product. Pushing instances from multiple products simultaneously is currently not supported.
     * ### Time Requirements for Metering Data Push
     * - For products billed by the hour, the billing deadline is the next hour, and metering data must be pushed on time. For example, if the metering data is for 8:10-08:20, it must be pushed before 9:59, otherwise billing will not occur. The rule for daily billing is similar: the previous day\\"s data must be pushed before 1:59 of the next day, otherwise the metering push will return an error and billing will not occur.
     * - For products billed by the minute, real-time pushed data is aggregated by the minute and billed by the minute.
     * - If the product is set to real-time billing, StartTime and EndTime can have any time span, but EndTime must be greater than StartTime.
     * - If the product is set to non-real-time billing (i.e., hourly, daily, etc.), the interval between StartTime and EndTime must be greater than 5 minutes.
     * ### Timeliness of Pushing and Billing
     * - If the instance status has expired, metering data pushed after the instance expiration will not be billed. For example, if the instance expired at 2025-07-09 12:20:00, metering data pushed for the period 2025-07-09 13:00:00-2025-07-09 14:00:00 will not be billed. Metering data for the period 2025-07-09 12:00:00-2025-07-09 13:00:00 can still be billed normally.
     * - After pushing metering data, billing does not occur immediately. For hourly billing, bills are generated in the next time interval. For example, for hourly billing, the bill for 8:00-9:00 is generated after 10:00. For daily billing, bills are generated the next day. After billing, customers can view the bills in [Alibaba Cloud Bill Details](https://billing-cost.console.aliyun.com/finance/expense-report/expense-detail-by-instance).
     * ### Amount Rounding to Zero
     * - If the bill amount is too small and the single bill amount is less than 0.01 CNY, the bill amount on the buyer\\"s side will be 0. For example, if the product unit price is 0.001 CNY/count and is billed by the minute with 9 uses per minute, the bill amount per minute is 0. If billed by the hour and the single hourly bill amount is less than 0.01, the buyer\\"s bill amount will be 0. The probability of minute-level billing amounts being rounded to zero may be higher than that of hourly billing.
     *
     * @param request - PushMeteringDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'PushMeteringData',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call PushMeteringData to push metering data.
     *
     * @remarks
     * ### Encoding and Format Requirements
     * - All request parameters must be URLEncoded.
     * - The Metering field in the parameters must strictly follow the format in the example in this document. It has been found that many submissions are not valid JSON. Please verify the format with a JSON formatting tool before submission, otherwise the API call will fail.
     * ### Request Frequency and Single Write Volume Limits
     * - For hourly/daily metering: Cloud Marketplace limits requests for each InstanceId to once per 60 seconds, and each request supports writing up to 100 metering data entries.
     * - For real-time metering (for large model usage scenarios): Cloud Marketplace has no frequency limit for each InstanceId, and each request supports writing up to 10 metering data entries.
     * ### Batch Push Limits for Metering Data
     * - Cross-product InstanceId batch pushing is not supported. When batch pushing, ensure all InstanceIds belong to the same product.
     * - When batch pushing metering data, the "InstanceId" attribute must belong to instances generated by the same product. Pushing instances from multiple products simultaneously is currently not supported.
     * ### Time Requirements for Metering Data Push
     * - For products billed by the hour, the billing deadline is the next hour, and metering data must be pushed on time. For example, if the metering data is for 8:10-08:20, it must be pushed before 9:59, otherwise billing will not occur. The rule for daily billing is similar: the previous day\\"s data must be pushed before 1:59 of the next day, otherwise the metering push will return an error and billing will not occur.
     * - For products billed by the minute, real-time pushed data is aggregated by the minute and billed by the minute.
     * - If the product is set to real-time billing, StartTime and EndTime can have any time span, but EndTime must be greater than StartTime.
     * - If the product is set to non-real-time billing (i.e., hourly, daily, etc.), the interval between StartTime and EndTime must be greater than 5 minutes.
     * ### Timeliness of Pushing and Billing
     * - If the instance status has expired, metering data pushed after the instance expiration will not be billed. For example, if the instance expired at 2025-07-09 12:20:00, metering data pushed for the period 2025-07-09 13:00:00-2025-07-09 14:00:00 will not be billed. Metering data for the period 2025-07-09 12:00:00-2025-07-09 13:00:00 can still be billed normally.
     * - After pushing metering data, billing does not occur immediately. For hourly billing, bills are generated in the next time interval. For example, for hourly billing, the bill for 8:00-9:00 is generated after 10:00. For daily billing, bills are generated the next day. After billing, customers can view the bills in [Alibaba Cloud Bill Details](https://billing-cost.console.aliyun.com/finance/expense-report/expense-detail-by-instance).
     * ### Amount Rounding to Zero
     * - If the bill amount is too small and the single bill amount is less than 0.01 CNY, the bill amount on the buyer\\"s side will be 0. For example, if the product unit price is 0.001 CNY/count and is billed by the minute with 9 uses per minute, the bill amount per minute is 0. If billed by the hour and the single hourly bill amount is less than 0.01, the buyer\\"s bill amount will be 0. The probability of minute-level billing amounts being rounded to zero may be higher than that of hourly billing.
     *
     * @param request - PushMeteringDataRequest
     *
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
     * Pushes usage deduction for a prepaid per-use product to Alibaba Cloud Marketplace on behalf of a service provider.
     *
     * @remarks
     * ## Operation description
     * - This operation applies to prepaid per-use products. Service providers can call this operation to push usage deductions to Alibaba Cloud Marketplace.
     * - The operation uses a forced update mode that directly deducts the specified number of uses. The caller must determine whether the user\\"s usage exceeds the quota.
     * - All request parameters must be URL-encoded.
     * - Use the `ClientToken` parameter for idempotency control. The same `ClientToken` cannot be submitted more than once within 24 hours.
     * - Retries for the same deduction operation must use the same `ClientToken`. Use a new `ClientToken` for new business operations.
     * - If the previous request succeeded (even if no response was received due to a gateway timeout), retrying with the same `ClientToken` returns a success response idempotently without duplicate deductions.
     * - If the result of the previous request is undetermined (in PROCESSING state), retrying with the same `ClientToken` returns a `DuplicateClientToken` error. Retry later or contact Alibaba Cloud Marketplace to confirm the push status.
     * - Only one operation can be executed at a time for the same `InstanceId`. Concurrent requests return a `Throttling` error. Retry later.
     * - You can run this operation in [OpenAPI Explorer](https://api.aliyun.com/#product=Market&api=PushTimesUsage&type=RPC&version=2015-11-01) without calculating signatures.
     *
     * @param request - PushTimesUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushTimesUsageResponse
     *
     * @param PushTimesUsageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PushTimesUsageResponse
     */
    public function pushTimesUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adjust) {
            @$query['Adjust'] = $request->adjust;
        }

        if (null !== $request->adjustDate) {
            @$query['AdjustDate'] = $request->adjustDate;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mark) {
            @$query['Mark'] = $request->mark;
        }

        if (null !== $request->times) {
            @$query['Times'] = $request->times;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushTimesUsage',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushTimesUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pushes usage deduction for a prepaid per-use product to Alibaba Cloud Marketplace on behalf of a service provider.
     *
     * @remarks
     * ## Operation description
     * - This operation applies to prepaid per-use products. Service providers can call this operation to push usage deductions to Alibaba Cloud Marketplace.
     * - The operation uses a forced update mode that directly deducts the specified number of uses. The caller must determine whether the user\\"s usage exceeds the quota.
     * - All request parameters must be URL-encoded.
     * - Use the `ClientToken` parameter for idempotency control. The same `ClientToken` cannot be submitted more than once within 24 hours.
     * - Retries for the same deduction operation must use the same `ClientToken`. Use a new `ClientToken` for new business operations.
     * - If the previous request succeeded (even if no response was received due to a gateway timeout), retrying with the same `ClientToken` returns a success response idempotently without duplicate deductions.
     * - If the result of the previous request is undetermined (in PROCESSING state), retrying with the same `ClientToken` returns a `DuplicateClientToken` error. Retry later or contact Alibaba Cloud Marketplace to confirm the push status.
     * - Only one operation can be executed at a time for the same `InstanceId`. Concurrent requests return a `Throttling` error. Retry later.
     * - You can run this operation in [OpenAPI Explorer](https://api.aliyun.com/#product=Market&api=PushTimesUsage&type=RPC&version=2015-11-01) without calculating signatures.
     *
     * @param request - PushTimesUsageRequest
     *
     * @returns PushTimesUsageResponse
     *
     * @param PushTimesUsageRequest $request
     *
     * @return PushTimesUsageResponse
     */
    public function pushTimesUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushTimesUsageWithOptions($request, $runtime);
    }

    /**
     * Calls ResumeProject to resume a paused project.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - ResumeProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ResumeProject',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls ResumeProject to resume a paused project.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - ResumeProjectRequest
     *
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
     * Triggers a rejection of the current process node by calling RollbackCurrentProjectNode.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - RollbackCurrentProjectNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'RollbackCurrentProjectNode',
            'version' => '2015-11-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a rejection of the current process node by calling RollbackCurrentProjectNode.
     *
     * @remarks
     * *
     * **.
     *
     * @param request - RollbackCurrentProjectNodeRequest
     *
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

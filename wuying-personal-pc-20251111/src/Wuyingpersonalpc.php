<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateDesktopImageRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateDesktopImageResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateDesktopImageShrinkRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderShrinkRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DeleteDesktopImageRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DeleteDesktopImageResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DeleteDesktopRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DeleteDesktopResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeAccessibleImagesRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeAccessibleImagesResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeImageDetailRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeImageDetailResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribePackageOrdersRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribePackageOrdersResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribePackageOrdersShrinkRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GenerateWuyingServerSceneUrlRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GenerateWuyingServerSceneUrlResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\StartDesktopRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\StartDesktopResponse;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\StopDesktopRequest;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\StopDesktopResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wuyingpersonalpc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wuying-personal-pc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建桌面镜像.
     *
     * @param tmpReq - CreateDesktopImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDesktopImageResponse
     *
     * @param CreateDesktopImageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDesktopImageResponse
     */
    public function createDesktopImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDesktopImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->startUpFilePathList) {
            $request->startUpFilePathListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startUpFilePathList, 'StartUpFilePathList', 'json');
        }

        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->autoCleanUserData) {
            @$query['AutoCleanUserData'] = $request->autoCleanUserData;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->enableStartUpConfig) {
            @$query['EnableStartUpConfig'] = $request->enableStartUpConfig;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->startUpFilePathListShrink) {
            @$query['StartUpFilePathList'] = $request->startUpFilePathListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDesktopImage',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDesktopImageResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 创建桌面镜像.
     *
     * @param request - CreateDesktopImageRequest
     *
     * @returns CreateDesktopImageResponse
     *
     * @param CreateDesktopImageRequest $request
     *
     * @return CreateDesktopImageResponse
     */
    public function createDesktopImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopImageWithOptions($request, $runtime);
    }

    /**
     * 下单套餐包和核时包.
     *
     * @param tmpReq - CreateOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dynamicProductParams) {
            $request->dynamicProductParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dynamicProductParams, 'DynamicProductParams', 'json');
        }

        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->dynamicProductParamsShrink) {
            @$query['DynamicProductParams'] = $request->dynamicProductParamsShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->orderFrom) {
            @$query['OrderFrom'] = $request->orderFrom;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrder',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 下单套餐包和核时包.
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
     * 删除云桌面.
     *
     * @param request - DeleteDesktopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDesktopResponse
     *
     * @param DeleteDesktopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDesktopResponse
     */
    public function deleteDesktopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDesktop',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDesktopResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 删除云桌面.
     *
     * @param request - DeleteDesktopRequest
     *
     * @returns DeleteDesktopResponse
     *
     * @param DeleteDesktopRequest $request
     *
     * @return DeleteDesktopResponse
     */
    public function deleteDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopWithOptions($request, $runtime);
    }

    /**
     * 删除桌面镜像.
     *
     * @param request - DeleteDesktopImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDesktopImageResponse
     *
     * @param DeleteDesktopImageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDesktopImageResponse
     */
    public function deleteDesktopImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->isCleanImageCode) {
            @$query['IsCleanImageCode'] = $request->isCleanImageCode;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDesktopImage',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDesktopImageResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 删除桌面镜像.
     *
     * @param request - DeleteDesktopImageRequest
     *
     * @returns DeleteDesktopImageResponse
     *
     * @param DeleteDesktopImageRequest $request
     *
     * @return DeleteDesktopImageResponse
     */
    public function deleteDesktopImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopImageWithOptions($request, $runtime);
    }

    /**
     * 查询用户可变更的镜像.
     *
     * @param request - DescribeAccessibleImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessibleImagesResponse
     *
     * @param DescribeAccessibleImagesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAccessibleImagesResponse
     */
    public function describeAccessibleImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->bizSource) {
            @$query['BizSource'] = $request->bizSource;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessibleImages',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessibleImagesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询用户可变更的镜像.
     *
     * @param request - DescribeAccessibleImagesRequest
     *
     * @returns DescribeAccessibleImagesResponse
     *
     * @param DescribeAccessibleImagesRequest $request
     *
     * @return DescribeAccessibleImagesResponse
     */
    public function describeAccessibleImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessibleImagesWithOptions($request, $runtime);
    }

    /**
     * 查询核时包包列表.
     *
     * @param request - DescribeCorePackageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCorePackageListResponse
     *
     * @param DescribeCorePackageListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCorePackageListResponse
     */
    public function describeCorePackageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->queryDeductionInstances) {
            @$query['QueryDeductionInstances'] = $request->queryDeductionInstances;
        }

        if (null !== $request->queryScenario) {
            @$query['QueryScenario'] = $request->queryScenario;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCorePackageList',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCorePackageListResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询核时包包列表.
     *
     * @param request - DescribeCorePackageListRequest
     *
     * @returns DescribeCorePackageListResponse
     *
     * @param DescribeCorePackageListRequest $request
     *
     * @return DescribeCorePackageListResponse
     */
    public function describeCorePackageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCorePackageListWithOptions($request, $runtime);
    }

    /**
     * 软终端分tab查询云桌面列表 & 组织信息.
     *
     * @param request - DescribeDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopsResponse
     *
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->displayType) {
            @$query['DisplayType'] = $request->displayType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktops',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 软终端分tab查询云桌面列表 & 组织信息.
     *
     * @param request - DescribeDesktopsRequest
     *
     * @returns DescribeDesktopsResponse
     *
     * @param DescribeDesktopsRequest $request
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * 根据分享码查询镜像.
     *
     * @param request - DescribeImageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageDetailResponse
     *
     * @param DescribeImageDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeImageDetailResponse
     */
    public function describeImageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->shareCode) {
            @$query['ShareCode'] = $request->shareCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImageDetail',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageDetailResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 根据分享码查询镜像.
     *
     * @param request - DescribeImageDetailRequest
     *
     * @returns DescribeImageDetailResponse
     *
     * @param DescribeImageDetailRequest $request
     *
     * @return DescribeImageDetailResponse
     */
    public function describeImageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageDetailWithOptions($request, $runtime);
    }

    /**
     * 查询套餐包订单列表.
     *
     * @param tmpReq - DescribePackageOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackageOrdersResponse
     *
     * @param DescribePackageOrdersRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePackageOrdersResponse
     */
    public function describePackageOrdersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePackageOrdersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->desktopIdList) {
            $request->desktopIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->desktopIdList, 'DesktopIdList', 'json');
        }

        if (null !== $tmpReq->orderIdList) {
            $request->orderIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderIdList, 'OrderIdList', 'json');
        }

        if (null !== $tmpReq->orderStatusList) {
            $request->orderStatusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderStatusList, 'OrderStatusList', 'json');
        }

        if (null !== $tmpReq->productTypeList) {
            $request->productTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productTypeList, 'ProductTypeList', 'json');
        }

        if (null !== $tmpReq->resourceIdList) {
            $request->resourceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIdList, 'ResourceIdList', 'json');
        }

        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->desktopIdListShrink) {
            @$query['DesktopIdList'] = $request->desktopIdListShrink;
        }

        if (null !== $request->orderIdListShrink) {
            @$query['OrderIdList'] = $request->orderIdListShrink;
        }

        if (null !== $request->orderStatusListShrink) {
            @$query['OrderStatusList'] = $request->orderStatusListShrink;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productTypeListShrink) {
            @$query['ProductTypeList'] = $request->productTypeListShrink;
        }

        if (null !== $request->resourceIdListShrink) {
            @$query['ResourceIdList'] = $request->resourceIdListShrink;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackageOrders',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackageOrdersResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询套餐包订单列表.
     *
     * @param request - DescribePackageOrdersRequest
     *
     * @returns DescribePackageOrdersResponse
     *
     * @param DescribePackageOrdersRequest $request
     *
     * @return DescribePackageOrdersResponse
     */
    public function describePackageOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageOrdersWithOptions($request, $runtime);
    }

    /**
     * 生成无影工作站的场景url.
     *
     * @param request - GenerateWuyingServerSceneUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateWuyingServerSceneUrlResponse
     *
     * @param GenerateWuyingServerSceneUrlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateWuyingServerSceneUrlResponse
     */
    public function generateWuyingServerSceneUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateWuyingServerSceneUrl',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateWuyingServerSceneUrlResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 生成无影工作站的场景url.
     *
     * @param request - GenerateWuyingServerSceneUrlRequest
     *
     * @returns GenerateWuyingServerSceneUrlResponse
     *
     * @param GenerateWuyingServerSceneUrlRequest $request
     *
     * @return GenerateWuyingServerSceneUrlResponse
     */
    public function generateWuyingServerSceneUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWuyingServerSceneUrlWithOptions($request, $runtime);
    }

    /**
     * 查询展示商品列表.
     *
     * @param request - GetProductListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductListResponse
     *
     * @param GetProductListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProductListResponse
     */
    public function getProductListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->configVersion) {
            @$query['ConfigVersion'] = $request->configVersion;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductList',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductListResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询展示商品列表.
     *
     * @param request - GetProductListRequest
     *
     * @returns GetProductListResponse
     *
     * @param GetProductListRequest $request
     *
     * @return GetProductListResponse
     */
    public function getProductList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductListWithOptions($request, $runtime);
    }

    /**
     * 获取用户信息.
     *
     * @param request - GetUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserInfo',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取用户信息.
     *
     * @param request - GetUserInfoRequest
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInfoWithOptions($request, $runtime);
    }

    /**
     * 开机.
     *
     * @param request - StartDesktopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDesktopResponse
     *
     * @param StartDesktopRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartDesktopResponse
     */
    public function startDesktopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDesktop',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDesktopResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 开机.
     *
     * @param request - StartDesktopRequest
     *
     * @returns StartDesktopResponse
     *
     * @param StartDesktopRequest $request
     *
     * @return StartDesktopResponse
     */
    public function startDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopWithOptions($request, $runtime);
    }

    /**
     * 关机.
     *
     * @param request - StopDesktopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDesktopResponse
     *
     * @param StopDesktopRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopDesktopResponse
     */
    public function stopDesktopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDesktop',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDesktopResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 关机.
     *
     * @param request - StopDesktopRequest
     *
     * @returns StopDesktopResponse
     *
     * @param StopDesktopRequest $request
     *
     * @return StopDesktopResponse
     */
    public function stopDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mhub\V20170825\Models\CreateAppRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\CreateAppResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\CreateProductRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\CreateProductResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DescribeDashboardRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\DescribeDashboardResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ModifyAppRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ModifyAppResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ModifyProductRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ModifyProductResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\OpenEmasServiceRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\OpenEmasServiceResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppInfoRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppInfoResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponse;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryProductInfoRequest;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryProductInfoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mhub extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mhub', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->encodedIcon) {
            @$query['EncodedIcon'] = $request->encodedIcon;
        }

        if (null !== $request->industryId) {
            @$query['IndustryId'] = $request->industryId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->packageName) {
            @$query['PackageName'] = $request->packageName;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAppRequest
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * 获取emas dashboard.
     *
     * @param request - DescribeDashboardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardResponse
     *
     * @param DescribeDashboardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDashboardResponse
     */
    public function describeDashboardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->proxyAction) {
            @$query['ProxyAction'] = $request->proxyAction;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboard',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取emas dashboard.
     *
     * @param request - DescribeDashboardRequest
     *
     * @returns DescribeDashboardResponse
     *
     * @param DescribeDashboardRequest $request
     *
     * @return DescribeDashboardResponse
     */
    public function describeDashboard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardWithOptions($request, $runtime);
    }

    /**
     * 展示用户应用列表.
     *
     * @param request - ListAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApps',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 展示用户应用列表.
     *
     * @param request - ListAppsRequest
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * 分页获取产品(在基座中表达为项目)列表.
     *
     * @param request - ListProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->searchKeyWord) {
            @$query['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->simple) {
            @$query['Simple'] = $request->simple;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页获取产品(在基座中表达为项目)列表.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->encodedIcon) {
            @$query['EncodedIcon'] = $request->encodedIcon;
        }

        if (null !== $request->industryId) {
            @$query['IndustryId'] = $request->industryId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->packageName) {
            @$query['PackageName'] = $request->packageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApp',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAppRequest
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProductResponse
     *
     * @param ModifyProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyProductResponse
     */
    public function modifyProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProduct',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyProductRequest
     *
     * @returns ModifyProductResponse
     *
     * @param ModifyProductRequest $request
     *
     * @return ModifyProductResponse
     */
    public function modifyProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProductWithOptions($request, $runtime);
    }

    /**
     * @param request - OpenEmasServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenEmasServiceResponse
     *
     * @param OpenEmasServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenEmasServiceResponse
     */
    public function openEmasServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenEmasService',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenEmasServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpenEmasServiceRequest
     *
     * @returns OpenEmasServiceResponse
     *
     * @param OpenEmasServiceRequest $request
     *
     * @return OpenEmasServiceResponse
     */
    public function openEmasService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openEmasServiceWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAppInfoResponse
     *
     * @param QueryAppInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAppInfoResponse
     */
    public function queryAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAppInfo',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAppInfoRequest
     *
     * @returns QueryAppInfoResponse
     *
     * @param QueryAppInfoRequest $request
     *
     * @return QueryAppInfoResponse
     */
    public function queryAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppInfoWithOptions($request, $runtime);
    }

    /**
     * 查询应用对应的安全字段.
     *
     * @param request - QueryAppSecurityInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAppSecurityInfoResponse
     *
     * @param QueryAppSecurityInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAppSecurityInfoResponse
     */
    public function queryAppSecurityInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAppSecurityInfo',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAppSecurityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用对应的安全字段.
     *
     * @param request - QueryAppSecurityInfoRequest
     *
     * @returns QueryAppSecurityInfoResponse
     *
     * @param QueryAppSecurityInfoRequest $request
     *
     * @return QueryAppSecurityInfoResponse
     */
    public function queryAppSecurityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppSecurityInfoWithOptions($request, $runtime);
    }

    /**
     * 查询基座的Product信息.
     *
     * @param request - QueryProductInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProductInfoResponse
     *
     * @param QueryProductInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductInfoResponse
     */
    public function queryProductInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProductInfo',
            'version' => '2017-08-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProductInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询基座的Product信息.
     *
     * @param request - QueryProductInfoRequest
     *
     * @returns QueryProductInfoResponse
     *
     * @param QueryProductInfoRequest $request
     *
     * @return QueryProductInfoResponse
     */
    public function queryProductInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductInfoWithOptions($request, $runtime);
    }
}

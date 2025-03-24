<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateAppRequest $request CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->encodedIcon)) {
            $query['EncodedIcon'] = $request->encodedIcon;
        }
        if (!Utils::isUnset($request->industryId)) {
            $query['IndustryId'] = $request->industryId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductRequest $request CreateProductRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProductResponse CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateProductRequest $request CreateProductRequest
     *
     * @return CreateProductResponse CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request DeleteAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request DeleteAppRequest
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductRequest $request DeleteProductRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProductResponse DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteProductRequest $request DeleteProductRequest
     *
     * @return DeleteProductResponse DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * @summary 获取emas dashboard
     *  *
     * @param DescribeDashboardRequest $request DescribeDashboardRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDashboardResponse DescribeDashboardResponse
     */
    public function describeDashboardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->proxyAction)) {
            $query['ProxyAction'] = $request->proxyAction;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取emas dashboard
     *  *
     * @param DescribeDashboardRequest $request DescribeDashboardRequest
     *
     * @return DescribeDashboardResponse DescribeDashboardResponse
     */
    public function describeDashboard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardWithOptions($request, $runtime);
    }

    /**
     * @summary 展示用户应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 展示用户应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListProductsRequest $request ListProductsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->simple)) {
            $query['Simple'] = $request->simple;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListProductsRequest $request ListProductsRequest
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request ModifyAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->encodedIcon)) {
            $query['EncodedIcon'] = $request->encodedIcon;
        }
        if (!Utils::isUnset($request->industryId)) {
            $query['IndustryId'] = $request->industryId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyAppRequest $request ModifyAppRequest
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProductRequest $request ModifyProductRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProductResponse ModifyProductResponse
     */
    public function modifyProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyProductRequest $request ModifyProductRequest
     *
     * @return ModifyProductResponse ModifyProductResponse
     */
    public function modifyProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProductWithOptions($request, $runtime);
    }

    /**
     * @param OpenEmasServiceRequest $request OpenEmasServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenEmasServiceResponse OpenEmasServiceResponse
     */
    public function openEmasServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenEmasServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenEmasServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param OpenEmasServiceRequest $request OpenEmasServiceRequest
     *
     * @return OpenEmasServiceResponse OpenEmasServiceResponse
     */
    public function openEmasService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openEmasServiceWithOptions($request, $runtime);
    }

    /**
     * @param QueryAppInfoRequest $request QueryAppInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAppInfoResponse QueryAppInfoResponse
     */
    public function queryAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAppInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param QueryAppInfoRequest $request QueryAppInfoRequest
     *
     * @return QueryAppInfoResponse QueryAppInfoResponse
     */
    public function queryAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用对应的安全字段
     *  *
     * @param QueryAppSecurityInfoRequest $request QueryAppSecurityInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAppSecurityInfoResponse QueryAppSecurityInfoResponse
     */
    public function queryAppSecurityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryAppSecurityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAppSecurityInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询应用对应的安全字段
     *  *
     * @param QueryAppSecurityInfoRequest $request QueryAppSecurityInfoRequest
     *
     * @return QueryAppSecurityInfoResponse QueryAppSecurityInfoResponse
     */
    public function queryAppSecurityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppSecurityInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductInfoRequest $request QueryProductInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryProductInfoResponse QueryProductInfoResponse
     */
    public function queryProductInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryProductInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryProductInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param QueryProductInfoRequest $request QueryProductInfoRequest
     *
     * @return QueryProductInfoResponse QueryProductInfoResponse
     */
    public function queryProductInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductInfoWithOptions($request, $runtime);
    }
}

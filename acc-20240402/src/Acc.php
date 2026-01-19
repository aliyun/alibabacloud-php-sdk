<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acc\V20240402;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheShrinkRequest;
use AlibabaCloud\SDK\Acc\V20240402\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Acc\V20240402\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Acc\V20240402\Models\GetImageCacheRequest;
use AlibabaCloud\SDK\Acc\V20240402\Models\GetImageCacheResponse;
use AlibabaCloud\SDK\Acc\V20240402\Models\ListImageCachesRequest;
use AlibabaCloud\SDK\Acc\V20240402\Models\ListImageCachesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Acc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'acc.aliyuncs.com',
            'ap-south-1' => 'acc.aliyuncs.com',
            'ap-southeast-2' => 'acc.aliyuncs.com',
            'cn-beijing-finance-1' => 'acc.aliyuncs.com',
            'cn-beijing-finance-pop' => 'acc.aliyuncs.com',
            'cn-beijing-gov-1' => 'acc.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'acc.aliyuncs.com',
            'cn-edge-1' => 'acc.aliyuncs.com',
            'cn-fujian' => 'acc.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'acc.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'acc.aliyuncs.com',
            'cn-hangzhou-finance' => 'acc.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'acc.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'acc.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'acc.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'acc.aliyuncs.com',
            'cn-hangzhou-test-306' => 'acc.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'acc.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'acc.aliyuncs.com',
            'cn-qingdao-nebula' => 'acc.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'acc.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'acc.aliyuncs.com',
            'cn-shanghai-inner' => 'acc.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'acc.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'acc.aliyuncs.com',
            'cn-shenzhen-inner' => 'acc.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'acc.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'acc.aliyuncs.com',
            'cn-wuhan' => 'acc.aliyuncs.com',
            'cn-yushanfang' => 'acc.aliyuncs.com',
            'cn-zhangbei' => 'acc.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'acc.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'acc.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'acc.aliyuncs.com',
            'eu-west-1-oxs' => 'acc.aliyuncs.com',
            'rus-west-1-pop' => 'acc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('acc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建镜像缓存.
     *
     * @param tmpReq - CreateImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateImageCacheShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->networkConfig) {
            $request->networkConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkConfig, 'NetworkConfig', 'json');
        }

        $query = [];
        if (null !== $request->acrRegistryInfos) {
            @$query['AcrRegistryInfos'] = $request->acrRegistryInfos;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageCacheName) {
            @$query['ImageCacheName'] = $request->imageCacheName;
        }

        if (null !== $request->imageRegistryCredentials) {
            @$query['ImageRegistryCredentials'] = $request->imageRegistryCredentials;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->networkConfigShrink) {
            @$query['NetworkConfig'] = $request->networkConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageCache',
            'version' => '2024-04-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建镜像缓存.
     *
     * @param request - CreateImageCacheRequest
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $request
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * 删除镜像缓存.
     *
     * @param request - DeleteImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageCacheResponse
     *
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->imageCacheId) {
            @$query['ImageCacheId'] = $request->imageCacheId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImageCache',
            'version' => '2024-04-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除镜像缓存.
     *
     * @param request - DeleteImageCacheRequest
     *
     * @returns DeleteImageCacheResponse
     *
     * @param DeleteImageCacheRequest $request
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * 查询镜像缓存.
     *
     * @param request - GetImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageCacheResponse
     *
     * @param GetImageCacheRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetImageCacheResponse
     */
    public function getImageCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageCacheId) {
            @$query['ImageCacheId'] = $request->imageCacheId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageCache',
            'version' => '2024-04-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询镜像缓存.
     *
     * @param request - GetImageCacheRequest
     *
     * @returns GetImageCacheResponse
     *
     * @param GetImageCacheRequest $request
     *
     * @return GetImageCacheResponse
     */
    public function getImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageCacheWithOptions($request, $runtime);
    }

    /**
     * 查询镜像缓存.
     *
     * @param request - ListImageCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageCachesResponse
     *
     * @param ListImageCachesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListImageCachesResponse
     */
    public function listImageCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageCacheName) {
            @$query['ImageCacheName'] = $request->imageCacheName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImageCaches',
            'version' => '2024-04-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImageCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询镜像缓存.
     *
     * @param request - ListImageCachesRequest
     *
     * @returns ListImageCachesResponse
     *
     * @param ListImageCachesRequest $request
     *
     * @return ListImageCachesResponse
     */
    public function listImageCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageCachesWithOptions($request, $runtime);
    }
}

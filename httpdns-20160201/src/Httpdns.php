<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\AddDomainRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\AddDomainResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetAccountInfoResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\RefreshResolveCacheRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\RefreshResolveCacheResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\RefreshResolveCacheShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Httpdns extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('httpdns', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加域名.
     *
     * @param request - AddDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomain',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加域名.
     *
     * @param request - AddDomainRequest
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     *
     * @return AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * 删除域名.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除域名.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

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
            'action' => 'DescribeDomains',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainsRequest
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * 获取用户信息包含配置项.
     *
     * @param request - GetAccountInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountInfoResponse
     */
    public function getAccountInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAccountInfo',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAccountInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户信息包含配置项.
     *
     * @returns GetAccountInfoResponse
     *
     * @return GetAccountInfoResponse
     */
    public function getAccountInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountInfoWithOptions($runtime);
    }

    /**
     * 解析次数概览.
     *
     * @param request - GetResolveCountSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResolveCountSummaryResponse
     *
     * @param GetResolveCountSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetResolveCountSummaryResponse
     */
    public function getResolveCountSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->timeSpan) {
            @$query['TimeSpan'] = $request->timeSpan;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResolveCountSummary',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResolveCountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResolveCountSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 解析次数概览.
     *
     * @param request - GetResolveCountSummaryRequest
     *
     * @returns GetResolveCountSummaryResponse
     *
     * @param GetResolveCountSummaryRequest $request
     *
     * @return GetResolveCountSummaryResponse
     */
    public function getResolveCountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResolveCountSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetResolveStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResolveStatisticsResponse
     *
     * @param GetResolveStatisticsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetResolveStatisticsResponse
     */
    public function getResolveStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->protocolName) {
            @$query['ProtocolName'] = $request->protocolName;
        }

        if (null !== $request->timeSpan) {
            @$query['TimeSpan'] = $request->timeSpan;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResolveStatistics',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResolveStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResolveStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetResolveStatisticsRequest
     *
     * @returns GetResolveStatisticsResponse
     *
     * @param GetResolveStatisticsRequest $request
     *
     * @return GetResolveStatisticsResponse
     */
    public function getResolveStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResolveStatisticsWithOptions($request, $runtime);
    }

    /**
     * 列举域名以及解析统计信息.
     *
     * @param request - ListDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        if (null !== $request->withoutMeteringData) {
            @$query['WithoutMeteringData'] = $request->withoutMeteringData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举域名以及解析统计信息.
     *
     * @param request - ListDomainsRequest
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * 刷新域名缓存.
     *
     * @param tmpReq - RefreshResolveCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshResolveCacheResponse
     *
     * @param RefreshResolveCacheRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return RefreshResolveCacheResponse
     */
    public function refreshResolveCacheWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RefreshResolveCacheShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->domains) {
            $request->domainsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domains, 'Domains', 'json');
        }

        $query = [];
        if (null !== $request->domainsShrink) {
            @$query['Domains'] = $request->domainsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshResolveCache',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RefreshResolveCacheResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefreshResolveCacheResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 刷新域名缓存.
     *
     * @param request - RefreshResolveCacheRequest
     *
     * @returns RefreshResolveCacheResponse
     *
     * @param RefreshResolveCacheRequest $request
     *
     * @return RefreshResolveCacheResponse
     */
    public function refreshResolveCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshResolveCacheWithOptions($request, $runtime);
    }
}

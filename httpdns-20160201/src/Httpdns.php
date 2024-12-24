<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加域名
     *  *
     * @param AddDomainRequest $request AddDomainRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainResponse AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDomain',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加域名
     *  *
     * @param AddDomainRequest $request AddDomainRequest
     *
     * @return AddDomainResponse AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 删除域名
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除域名
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户信息包含配置项
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountInfoResponse GetAccountInfoResponse
     */
    public function getAccountInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAccountInfo',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户信息包含配置项
     *  *
     * @return GetAccountInfoResponse GetAccountInfoResponse
     */
    public function getAccountInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountInfoWithOptions($runtime);
    }

    /**
     * @summary 解析次数概览
     *  *
     * @param GetResolveCountSummaryRequest $request GetResolveCountSummaryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResolveCountSummaryResponse GetResolveCountSummaryResponse
     */
    public function getResolveCountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->timeSpan)) {
            $query['TimeSpan'] = $request->timeSpan;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResolveCountSummary',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResolveCountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解析次数概览
     *  *
     * @param GetResolveCountSummaryRequest $request GetResolveCountSummaryRequest
     *
     * @return GetResolveCountSummaryResponse GetResolveCountSummaryResponse
     */
    public function getResolveCountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResolveCountSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetResolveStatisticsRequest $request GetResolveStatisticsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResolveStatisticsResponse GetResolveStatisticsResponse
     */
    public function getResolveStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->timeSpan)) {
            $query['TimeSpan'] = $request->timeSpan;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResolveStatistics',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResolveStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResolveStatisticsRequest $request GetResolveStatisticsRequest
     *
     * @return GetResolveStatisticsResponse GetResolveStatisticsResponse
     */
    public function getResolveStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResolveStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 列举域名以及解析统计信息
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->withoutMeteringData)) {
            $query['WithoutMeteringData'] = $request->withoutMeteringData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举域名以及解析统计信息
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary 刷新域名缓存
     *  *
     * @param RefreshResolveCacheRequest $tmpReq  RefreshResolveCacheRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshResolveCacheResponse RefreshResolveCacheResponse
     */
    public function refreshResolveCacheWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RefreshResolveCacheShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domains)) {
            $request->domainsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domains, 'Domains', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->domainsShrink)) {
            $query['Domains'] = $request->domainsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshResolveCache',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshResolveCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 刷新域名缓存
     *  *
     * @param RefreshResolveCacheRequest $request RefreshResolveCacheRequest
     *
     * @return RefreshResolveCacheResponse RefreshResolveCacheResponse
     */
    public function refreshResolveCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshResolveCacheWithOptions($request, $runtime);
    }
}

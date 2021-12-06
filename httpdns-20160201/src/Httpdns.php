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
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AccountId']  = $request->accountId;
        $query['DomainName'] = $request->domainName;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddDomain',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AccountId']  = $request->accountId;
        $query['DomainName'] = $request->domainName;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AccountId']  = $request->accountId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountInfoResponse
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAccountInfoResponse
     */
    public function getAccountInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountInfoWithOptions($runtime);
    }

    /**
     * @param GetResolveCountSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetResolveCountSummaryResponse
     */
    public function getResolveCountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Granularity'] = $request->granularity;
        $query['TimeSpan']    = $request->timeSpan;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetResolveCountSummary',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResolveCountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetResolveStatisticsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetResolveStatisticsResponse
     */
    public function getResolveStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['DomainName']   = $request->domainName;
        $query['Granularity']  = $request->granularity;
        $query['ProtocolName'] = $request->protocolName;
        $query['TimeSpan']     = $request->timeSpan;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetResolveStatistics',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResolveStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDomainsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }
}

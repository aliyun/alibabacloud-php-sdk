<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\AddDomainRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\AddDomainResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\CreateSdnsRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\CreateSdnsRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\CreateSdnsRuleCategoryShrinkRequest;
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
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsDeleteRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsDeleteRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsSwitchRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsSwitchRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsVerifyRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsVerifyRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsVerifyRuleCategoryShrinkRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\UpdateSdnsRuleCategoryRequest;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\UpdateSdnsRuleCategoryResponse;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\UpdateSdnsRuleCategoryShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Httpdns extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'httpdns-api.aliyuncs.com',
        ];
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
     * Adds a domain name based on the specified parameters.
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

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name based on the specified parameters.
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
     * Creates a custom resolution policy for a domain name connected to the current account. This operation supports the LINE mode and the IP_RANGE mode. IP address ranges can include IPv4 and IPv6 addresses. When a match occurs, A or AAAA records are returned based on the rules. By default, the policy is created in the disabled state. If Enable is set to true, the policy is enabled upon creation, but actual resolution still requires waiting for configuration propagation. The returned Id is used for subsequent queries, updates, enabling, disabling, and deletion. Create a disabled policy first, and then enable it after querying and verifying it. The policy type and the bound domain name cannot be modified after creation. If the response times out or is lost, query the list first to verify and avoid duplicate creation.
     *
     * @param tmpReq - CreateSdnsRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSdnsRuleCategoryResponse
     *
     * @param CreateSdnsRuleCategoryRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSdnsRuleCategoryResponse
     */
    public function createSdnsRuleCategoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSdnsRuleCategoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientIpRanges) {
            $request->clientIpRangesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIpRanges, 'ClientIpRanges', 'json');
        }

        if (null !== $tmpReq->paths) {
            $request->pathsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->paths, 'Paths', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $body = [];
        if (null !== $request->clientIpRangesShrink) {
            @$body['ClientIpRanges'] = $request->clientIpRangesShrink;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->enable) {
            @$body['Enable'] = $request->enable;
        }

        if (null !== $request->lineId) {
            @$body['LineId'] = $request->lineId;
        }

        if (null !== $request->matchType) {
            @$body['MatchType'] = $request->matchType;
        }

        if (null !== $request->pathsShrink) {
            @$body['Paths'] = $request->pathsShrink;
        }

        if (null !== $request->rulesShrink) {
            @$body['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSdnsRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSdnsRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom resolution policy for a domain name connected to the current account. This operation supports the LINE mode and the IP_RANGE mode. IP address ranges can include IPv4 and IPv6 addresses. When a match occurs, A or AAAA records are returned based on the rules. By default, the policy is created in the disabled state. If Enable is set to true, the policy is enabled upon creation, but actual resolution still requires waiting for configuration propagation. The returned Id is used for subsequent queries, updates, enabling, disabling, and deletion. Create a disabled policy first, and then enable it after querying and verifying it. The policy type and the bound domain name cannot be modified after creation. If the response times out or is lost, query the list first to verify and avoid duplicate creation.
     *
     * @param request - CreateSdnsRuleCategoryRequest
     *
     * @returns CreateSdnsRuleCategoryResponse
     *
     * @param CreateSdnsRuleCategoryRequest $request
     *
     * @return CreateSdnsRuleCategoryResponse
     */
    public function createSdnsRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSdnsRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * Deletes a domain name based on the specified parameters.
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

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name based on the specified parameters.
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
     * Lists the domain names of a user based on the specified parameters.
     *
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

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the domain names of a user based on the specified parameters.
     *
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
     * Retrieves the current HTTPDNS account information.
     *
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

        return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the current HTTPDNS account information.
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
     * Retrieves parse and billing statistics, corresponding to the "Billing" page feature in the console.
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

        return GetResolveCountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves parse and billing statistics, corresponding to the "Billing" page feature in the console.
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
     * Retrieves the statistics information of parse requests for a specific domain name.
     *
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

        return GetResolveStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the statistics information of parse requests for a specific domain name.
     *
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
     * Lists the domain names and resolution counts of a user based on the specified parameters.
     *
     * @remarks
     * # Operation description
     * - You can specify the page number (PageNumber) and the number of entries per page (PageSize) for the query.
     * - By default, the domain name list is sorted in descending order of the time when the domain names were added.
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

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the domain names and resolution counts of a user based on the specified parameters.
     *
     * @remarks
     * # Operation description
     * - You can specify the page number (PageNumber) and the number of entries per page (PageSize) for the query.
     * - By default, the domain name list is sorted in descending order of the time when the domain names were added.
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
     * Refreshes the domain name cache.
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

        return RefreshResolveCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the domain name cache.
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

    /**
     * Deletes a custom resolution policy of the current account by policy ID. A deleted policy cannot be recovered by using its original ID, and a new ID is generated when the policy is recreated. Disable the policy and verify the resolution results before deletion. After an address block policy is deleted, its scope is excluded from overlap checks with other policies. Actual resolution takes effect after configuration propagation. You can call SdnsListRuleCategories to verify the deletion.
     *
     * @param request - SdnsDeleteRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdnsDeleteRuleCategoryResponse
     *
     * @param SdnsDeleteRuleCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SdnsDeleteRuleCategoryResponse
     */
    public function sdnsDeleteRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdnsDeleteRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdnsDeleteRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom resolution policy of the current account by policy ID. A deleted policy cannot be recovered by using its original ID, and a new ID is generated when the policy is recreated. Disable the policy and verify the resolution results before deletion. After an address block policy is deleted, its scope is excluded from overlap checks with other policies. Actual resolution takes effect after configuration propagation. You can call SdnsListRuleCategories to verify the deletion.
     *
     * @param request - SdnsDeleteRuleCategoryRequest
     *
     * @returns SdnsDeleteRuleCategoryResponse
     *
     * @param SdnsDeleteRuleCategoryRequest $request
     *
     * @return SdnsDeleteRuleCategoryResponse
     */
    public function sdnsDeleteRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdnsDeleteRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * 根据ID获取规则策略.
     *
     * @param request - SdnsGetRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdnsGetRuleCategoryResponse
     *
     * @param SdnsGetRuleCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SdnsGetRuleCategoryResponse
     */
    public function sdnsGetRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdnsGetRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdnsGetRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据ID获取规则策略.
     *
     * @param request - SdnsGetRuleCategoryRequest
     *
     * @returns SdnsGetRuleCategoryResponse
     *
     * @param SdnsGetRuleCategoryRequest $request
     *
     * @return SdnsGetRuleCategoryResponse
     */
    public function sdnsGetRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdnsGetRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * Queries the custom resolution policies for a specified domain name under the current account, including line policies, client CIDR block policies, and policies in enabled or disabled states. The returned IDs can be used to query details, update, enable, disable, or delete policies. This operation does not provide pagination parameters and does not guarantee the order of returned results. CIDR blocks are returned in the original input format.
     *
     * @param request - SdnsListRuleCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdnsListRuleCategoriesResponse
     *
     * @param SdnsListRuleCategoriesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SdnsListRuleCategoriesResponse
     */
    public function sdnsListRuleCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdnsListRuleCategories',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdnsListRuleCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the custom resolution policies for a specified domain name under the current account, including line policies, client CIDR block policies, and policies in enabled or disabled states. The returned IDs can be used to query details, update, enable, disable, or delete policies. This operation does not provide pagination parameters and does not guarantee the order of returned results. CIDR blocks are returned in the original input format.
     *
     * @param request - SdnsListRuleCategoriesRequest
     *
     * @returns SdnsListRuleCategoriesResponse
     *
     * @param SdnsListRuleCategoriesRequest $request
     *
     * @return SdnsListRuleCategoriesResponse
     */
    public function sdnsListRuleCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdnsListRuleCategoriesWithOptions($request, $runtime);
    }

    /**
     * 启用、禁用规则策略.
     *
     * @param request - SdnsSwitchRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdnsSwitchRuleCategoryResponse
     *
     * @param SdnsSwitchRuleCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SdnsSwitchRuleCategoryResponse
     */
    public function sdnsSwitchRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdnsSwitchRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdnsSwitchRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用、禁用规则策略.
     *
     * @param request - SdnsSwitchRuleCategoryRequest
     *
     * @returns SdnsSwitchRuleCategoryResponse
     *
     * @param SdnsSwitchRuleCategoryRequest $request
     *
     * @return SdnsSwitchRuleCategoryResponse
     */
    public function sdnsSwitchRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdnsSwitchRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * Validates the submitted rules without saving or enabling any policies. In IP_RANGE mode, the Cip parameter is used to simulate a client IPv4 or IPv6 address. The system checks for CIDR block matches first and then returns the matched rules. If no custom parameters are used, pass an empty JSON object {} for the top-level Args parameter. If no rules are matched, the Data field is empty or omitted. A successful API call does not indicate a policy match. This operation does not check for CIDR block conflicts with existing policies, perform A/AAAA query type filtering or weight sampling, or simulate the complete resolution chain such as legacy CIDR block configurations, line fallback, or Function Compute. After saving and enabling the policies, verify them by using the actual resolution API.
     *
     * @param tmpReq - SdnsVerifyRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdnsVerifyRuleCategoryResponse
     *
     * @param SdnsVerifyRuleCategoryRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SdnsVerifyRuleCategoryResponse
     */
    public function sdnsVerifyRuleCategoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SdnsVerifyRuleCategoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->args) {
            $request->argsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->args, 'Args', 'json');
        }

        if (null !== $tmpReq->clientIpRanges) {
            $request->clientIpRangesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIpRanges, 'ClientIpRanges', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $body = [];
        if (null !== $request->argsShrink) {
            @$body['Args'] = $request->argsShrink;
        }

        if (null !== $request->cip) {
            @$body['Cip'] = $request->cip;
        }

        if (null !== $request->clientIpRangesShrink) {
            @$body['ClientIpRanges'] = $request->clientIpRangesShrink;
        }

        if (null !== $request->matchType) {
            @$body['MatchType'] = $request->matchType;
        }

        if (null !== $request->rulesShrink) {
            @$body['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SdnsVerifyRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdnsVerifyRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the submitted rules without saving or enabling any policies. In IP_RANGE mode, the Cip parameter is used to simulate a client IPv4 or IPv6 address. The system checks for CIDR block matches first and then returns the matched rules. If no custom parameters are used, pass an empty JSON object {} for the top-level Args parameter. If no rules are matched, the Data field is empty or omitted. A successful API call does not indicate a policy match. This operation does not check for CIDR block conflicts with existing policies, perform A/AAAA query type filtering or weight sampling, or simulate the complete resolution chain such as legacy CIDR block configurations, line fallback, or Function Compute. After saving and enabling the policies, verify them by using the actual resolution API.
     *
     * @param request - SdnsVerifyRuleCategoryRequest
     *
     * @returns SdnsVerifyRuleCategoryResponse
     *
     * @param SdnsVerifyRuleCategoryRequest $request
     *
     * @return SdnsVerifyRuleCategoryResponse
     */
    public function sdnsVerifyRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdnsVerifyRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * Updates the complete rule list of an existing policy for the current account. For IP_RANGE policies, the client IP address ranges can be replaced as a whole at the same time. If ClientIpRanges is omitted, the original IP address ranges are retained. Explicitly passing an empty array is not allowed. The update does not change the bound domain names, match types, or enabled status of the policy. The new ranges are checked for conflicts only with other IP address range policies under the same domain name. If the validation fails, the update is not saved. After a successful update, you can call SdnsGetRuleCategory to verify the configuration. Actual DNS resolution requires waiting for configuration propagation.
     *
     * @param tmpReq - UpdateSdnsRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSdnsRuleCategoryResponse
     *
     * @param UpdateSdnsRuleCategoryRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSdnsRuleCategoryResponse
     */
    public function updateSdnsRuleCategoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSdnsRuleCategoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $body = [];
        if (null !== $request->clientIpRanges) {
            @$body['ClientIpRanges'] = $request->clientIpRanges;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->rulesShrink) {
            @$body['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSdnsRuleCategory',
            'version' => '2016-02-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSdnsRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the complete rule list of an existing policy for the current account. For IP_RANGE policies, the client IP address ranges can be replaced as a whole at the same time. If ClientIpRanges is omitted, the original IP address ranges are retained. Explicitly passing an empty array is not allowed. The update does not change the bound domain names, match types, or enabled status of the policy. The new ranges are checked for conflicts only with other IP address range policies under the same domain name. If the validation fails, the update is not saved. After a successful update, you can call SdnsGetRuleCategory to verify the configuration. Actual DNS resolution requires waiting for configuration propagation.
     *
     * @param request - UpdateSdnsRuleCategoryRequest
     *
     * @returns UpdateSdnsRuleCategoryResponse
     *
     * @param UpdateSdnsRuleCategoryRequest $request
     *
     * @return UpdateSdnsRuleCategoryResponse
     */
    public function updateSdnsRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSdnsRuleCategoryWithOptions($request, $runtime);
    }
}

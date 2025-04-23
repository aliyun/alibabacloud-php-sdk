<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesFlatPageRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesFlatPageResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesPageRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesPageResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksFoPagesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksFoPagesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksFoPagesShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorResourcesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorResourcesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostOptimizationOverviewRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostOptimizationOverviewResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostOptimizationOverviewShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetHistoryAdvicesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetHistoryAdvicesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetInspectProgressRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetInspectProgressResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetProductListRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetProductListResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetTaskStatusByIdRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetTaskStatusByIdResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCostCheckRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCostCheckResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCostCheckShrinkRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorResourceRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorResourceResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\ReportBizAlertInfoRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\ReportBizAlertInfoResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\ReportBizAlertInfoShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Advisor extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('advisor', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 根据多个维度获取用户最新的巡检结果，全量返回-openApi.
     *
     * @param request - DescribeAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvicesResponse
     *
     * @param DescribeAdvicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAdvicesResponse
     */
    public function describeAdvicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceId) {
            @$query['AdviceId'] = $request->adviceId;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->excludeAdviceId) {
            @$query['ExcludeAdviceId'] = $request->excludeAdviceId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvices',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据多个维度获取用户最新的巡检结果，全量返回-openApi.
     *
     * @param request - DescribeAdvicesRequest
     *
     * @returns DescribeAdvicesResponse
     *
     * @param DescribeAdvicesRequest $request
     *
     * @return DescribeAdvicesResponse
     */
    public function describeAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvicesWithOptions($request, $runtime);
    }

    /**
     * DescribeAdvicesFlat分页.
     *
     * @param request - DescribeAdvicesFlatPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvicesFlatPageResponse
     *
     * @param DescribeAdvicesFlatPageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdvicesFlatPageResponse
     */
    public function describeAdvicesFlatPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceId) {
            @$query['AdviceId'] = $request->adviceId;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvicesFlatPage',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvicesFlatPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeAdvicesFlat分页.
     *
     * @param request - DescribeAdvicesFlatPageRequest
     *
     * @returns DescribeAdvicesFlatPageResponse
     *
     * @param DescribeAdvicesFlatPageRequest $request
     *
     * @return DescribeAdvicesFlatPageResponse
     */
    public function describeAdvicesFlatPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvicesFlatPageWithOptions($request, $runtime);
    }

    /**
     * DescribeAdvices分页.
     *
     * @param request - DescribeAdvicesPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvicesPageResponse
     *
     * @param DescribeAdvicesPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAdvicesPageResponse
     */
    public function describeAdvicesPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceId) {
            @$query['AdviceId'] = $request->adviceId;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvicesPage',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvicesPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeAdvices分页.
     *
     * @param request - DescribeAdvicesPageRequest
     *
     * @returns DescribeAdvicesPageResponse
     *
     * @param DescribeAdvicesPageRequest $request
     *
     * @return DescribeAdvicesPageResponse
     */
    public function describeAdvicesPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvicesPageWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAdvisorChecksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvisorChecksResponse
     *
     * @param DescribeAdvisorChecksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAdvisorChecksResponse
     */
    public function describeAdvisorChecksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvisorChecks',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvisorChecksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAdvisorChecksRequest
     *
     * @returns DescribeAdvisorChecksResponse
     *
     * @param DescribeAdvisorChecksRequest $request
     *
     * @return DescribeAdvisorChecksResponse
     */
    public function describeAdvisorChecks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvisorChecksWithOptions($request, $runtime);
    }

    /**
     * 巡检项设置-分页.
     *
     * @param tmpReq - DescribeAdvisorChecksFoPagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvisorChecksFoPagesResponse
     *
     * @param DescribeAdvisorChecksFoPagesRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAdvisorChecksFoPagesResponse
     */
    public function describeAdvisorChecksFoPagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAdvisorChecksFoPagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->checkTypes) {
            $request->checkTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkTypes, 'CheckTypes', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunId) {
            @$query['AssumeAliyunId'] = $request->assumeAliyunId;
        }

        if (null !== $request->bizCategory) {
            @$query['BizCategory'] = $request->bizCategory;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->checkTypesShrink) {
            @$query['CheckTypes'] = $request->checkTypesShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvisorChecksFoPages',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvisorChecksFoPagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 巡检项设置-分页.
     *
     * @param request - DescribeAdvisorChecksFoPagesRequest
     *
     * @returns DescribeAdvisorChecksFoPagesResponse
     *
     * @param DescribeAdvisorChecksFoPagesRequest $request
     *
     * @return DescribeAdvisorChecksFoPagesResponse
     */
    public function describeAdvisorChecksFoPages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvisorChecksFoPagesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAdvisorResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvisorResourcesResponse
     *
     * @param DescribeAdvisorResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAdvisorResourcesResponse
     */
    public function describeAdvisorResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvisorResources',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvisorResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAdvisorResourcesRequest
     *
     * @returns DescribeAdvisorResourcesResponse
     *
     * @param DescribeAdvisorResourcesRequest $request
     *
     * @return DescribeAdvisorResourcesResponse
     */
    public function describeAdvisorResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvisorResourcesWithOptions($request, $runtime);
    }

    /**
     * 查询成本优化结果详情.
     *
     * @param tmpReq - DescribeCostCheckAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCostCheckAdvicesResponse
     *
     * @param DescribeCostCheckAdvicesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCostCheckAdvicesResponse
     */
    public function describeCostCheckAdvicesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCostCheckAdvicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assumeAliyunIdList) {
            $request->assumeAliyunIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assumeAliyunIdList, 'AssumeAliyunIdList', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        if (null !== $tmpReq->resourceGroupIdList) {
            $request->resourceGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupIdList, 'ResourceGroupIdList', 'json');
        }

        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }

        if (null !== $tmpReq->tagList) {
            $request->tagListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagList, 'TagList', 'json');
        }

        if (null !== $tmpReq->tagValues) {
            $request->tagValuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagValues, 'TagValues', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunIdListShrink) {
            @$query['AssumeAliyunIdList'] = $request->assumeAliyunIdListShrink;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->resourceGroupIdListShrink) {
            @$query['ResourceGroupIdList'] = $request->resourceGroupIdListShrink;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['TagKeys'] = $request->tagKeysShrink;
        }

        if (null !== $request->tagListShrink) {
            @$query['TagList'] = $request->tagListShrink;
        }

        if (null !== $request->tagValuesShrink) {
            @$query['TagValues'] = $request->tagValuesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCostCheckAdvices',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCostCheckAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询成本优化结果详情.
     *
     * @param request - DescribeCostCheckAdvicesRequest
     *
     * @returns DescribeCostCheckAdvicesResponse
     *
     * @param DescribeCostCheckAdvicesRequest $request
     *
     * @return DescribeCostCheckAdvicesResponse
     */
    public function describeCostCheckAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostCheckAdvicesWithOptions($request, $runtime);
    }

    /**
     * 查询巡检项聚合成本优化结果概览.
     *
     * @param tmpReq - DescribeCostCheckResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCostCheckResultsResponse
     *
     * @param DescribeCostCheckResultsRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCostCheckResultsResponse
     */
    public function describeCostCheckResultsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCostCheckResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assumeAliyunIdList) {
            $request->assumeAliyunIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assumeAliyunIdList, 'AssumeAliyunIdList', 'json');
        }

        if (null !== $tmpReq->checkIds) {
            $request->checkIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkIds, 'CheckIds', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        if (null !== $tmpReq->resourceGroupIdList) {
            $request->resourceGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupIdList, 'ResourceGroupIdList', 'json');
        }

        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }

        if (null !== $tmpReq->tagList) {
            $request->tagListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagList, 'TagList', 'json');
        }

        if (null !== $tmpReq->tagValues) {
            $request->tagValuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagValues, 'TagValues', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunIdListShrink) {
            @$query['AssumeAliyunIdList'] = $request->assumeAliyunIdListShrink;
        }

        if (null !== $request->checkIdsShrink) {
            @$query['CheckIds'] = $request->checkIdsShrink;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->resourceGroupIdListShrink) {
            @$query['ResourceGroupIdList'] = $request->resourceGroupIdListShrink;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['TagKeys'] = $request->tagKeysShrink;
        }

        if (null !== $request->tagListShrink) {
            @$query['TagList'] = $request->tagListShrink;
        }

        if (null !== $request->tagValuesShrink) {
            @$query['TagValues'] = $request->tagValuesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCostCheckResults',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCostCheckResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询巡检项聚合成本优化结果概览.
     *
     * @param request - DescribeCostCheckResultsRequest
     *
     * @returns DescribeCostCheckResultsResponse
     *
     * @param DescribeCostCheckResultsRequest $request
     *
     * @return DescribeCostCheckResultsResponse
     */
    public function describeCostCheckResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostCheckResultsWithOptions($request, $runtime);
    }

    /**
     * 成本优化-概览.
     *
     * @param tmpReq - DescribeCostOptimizationOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCostOptimizationOverviewResponse
     *
     * @param DescribeCostOptimizationOverviewRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCostOptimizationOverviewResponse
     */
    public function describeCostOptimizationOverviewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCostOptimizationOverviewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assumeAliyunIdList) {
            $request->assumeAliyunIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assumeAliyunIdList, 'AssumeAliyunIdList', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunId) {
            @$query['AssumeAliyunId'] = $request->assumeAliyunId;
        }

        if (null !== $request->assumeAliyunIdListShrink) {
            @$query['AssumeAliyunIdList'] = $request->assumeAliyunIdListShrink;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCostOptimizationOverview',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCostOptimizationOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 成本优化-概览.
     *
     * @param request - DescribeCostOptimizationOverviewRequest
     *
     * @returns DescribeCostOptimizationOverviewResponse
     *
     * @param DescribeCostOptimizationOverviewRequest $request
     *
     * @return DescribeCostOptimizationOverviewResponse
     */
    public function describeCostOptimizationOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostOptimizationOverviewWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHistoryAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoryAdvicesResponse
     *
     * @param GetHistoryAdvicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetHistoryAdvicesResponse
     */
    public function getHistoryAdvicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoryAdvices',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHistoryAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHistoryAdvicesRequest
     *
     * @returns GetHistoryAdvicesResponse
     *
     * @param GetHistoryAdvicesRequest $request
     *
     * @return GetHistoryAdvicesResponse
     */
    public function getHistoryAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoryAdvicesWithOptions($request, $runtime);
    }

    /**
     * 获取任务执行进度(普通用户、RD单账号).
     *
     * @param request - GetInspectProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInspectProgressResponse
     *
     * @param GetInspectProgressRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInspectProgressResponse
     */
    public function getInspectProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assumeAliyunId) {
            @$query['AssumeAliyunId'] = $request->assumeAliyunId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInspectProgress',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInspectProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务执行进度(普通用户、RD单账号).
     *
     * @param request - GetInspectProgressRequest
     *
     * @returns GetInspectProgressResponse
     *
     * @param GetInspectProgressRequest $request
     *
     * @return GetInspectProgressResponse
     */
    public function getInspectProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInspectProgressWithOptions($request, $runtime);
    }

    /**
     * 获取云产品的列表.
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
        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductList',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云产品的列表.
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
     * 根据id获取任务状态
     *
     * @param request - GetTaskStatusByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusByIdResponse
     *
     * @param GetTaskStatusByIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTaskStatusByIdResponse
     */
    public function getTaskStatusByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatusById',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据id获取任务状态
     *
     * @param request - GetTaskStatusByIdRequest
     *
     * @returns GetTaskStatusByIdResponse
     *
     * @param GetTaskStatusByIdRequest $request
     *
     * @return GetTaskStatusByIdResponse
     */
    public function getTaskStatusById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusByIdWithOptions($request, $runtime);
    }

    /**
     * 触发立即巡检
     *
     * @param tmpReq - RefreshAdvisorCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAdvisorCheckResponse
     *
     * @param RefreshAdvisorCheckRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return RefreshAdvisorCheckResponse
     */
    public function refreshAdvisorCheckWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RefreshAdvisorCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceDimensionList) {
            $request->resourceDimensionListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceDimensionList, 'ResourceDimensionList', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunId) {
            @$query['AssumeAliyunId'] = $request->assumeAliyunId;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $body = [];
        if (null !== $request->resourceDimensionListShrink) {
            @$body['ResourceDimensionList'] = $request->resourceDimensionListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefreshAdvisorCheck',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAdvisorCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 触发立即巡检
     *
     * @param request - RefreshAdvisorCheckRequest
     *
     * @returns RefreshAdvisorCheckResponse
     *
     * @param RefreshAdvisorCheckRequest $request
     *
     * @return RefreshAdvisorCheckResponse
     */
    public function refreshAdvisorCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAdvisorCheckWithOptions($request, $runtime);
    }

    /**
     * 发起成本优化巡检
     *
     * @param tmpReq - RefreshAdvisorCostCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAdvisorCostCheckResponse
     *
     * @param RefreshAdvisorCostCheckRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshAdvisorCostCheckResponse
     */
    public function refreshAdvisorCostCheckWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RefreshAdvisorCostCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assumeAliyunIdList) {
            $request->assumeAliyunIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assumeAliyunIdList, 'AssumeAliyunIdList', 'json');
        }

        if (null !== $tmpReq->checkIds) {
            $request->checkIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->checkIds, 'CheckIds', 'json');
        }

        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }

        $query = [];
        if (null !== $request->assumeAliyunIdListShrink) {
            @$query['AssumeAliyunIdList'] = $request->assumeAliyunIdListShrink;
        }

        if (null !== $request->checkIdsShrink) {
            @$query['CheckIds'] = $request->checkIdsShrink;
        }

        if (null !== $request->checkPlanId) {
            @$query['CheckPlanId'] = $request->checkPlanId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->refreshResource) {
            @$query['RefreshResource'] = $request->refreshResource;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshAdvisorCostCheck',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAdvisorCostCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发起成本优化巡检
     *
     * @param request - RefreshAdvisorCostCheckRequest
     *
     * @returns RefreshAdvisorCostCheckResponse
     *
     * @param RefreshAdvisorCostCheckRequest $request
     *
     * @return RefreshAdvisorCostCheckResponse
     */
    public function refreshAdvisorCostCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAdvisorCostCheckWithOptions($request, $runtime);
    }

    /**
     * RefreshAdvisorResource.
     *
     * @param request - RefreshAdvisorResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAdvisorResourceResponse
     *
     * @param RefreshAdvisorResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshAdvisorResourceResponse
     */
    public function refreshAdvisorResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshAdvisorResource',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAdvisorResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RefreshAdvisorResource.
     *
     * @param request - RefreshAdvisorResourceRequest
     *
     * @returns RefreshAdvisorResourceResponse
     *
     * @param RefreshAdvisorResourceRequest $request
     *
     * @return RefreshAdvisorResourceResponse
     */
    public function refreshAdvisorResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAdvisorResourceWithOptions($request, $runtime);
    }

    /**
     * 上报用户业务报警信息.
     *
     * @param tmpReq - ReportBizAlertInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportBizAlertInfoResponse
     *
     * @param ReportBizAlertInfoRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ReportBizAlertInfoResponse
     */
    public function reportBizAlertInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReportBizAlertInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertUid) {
            $request->alertUidShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertUid, 'AlertUid', 'json');
        }

        $query = [];
        if (null !== $request->alertDescription) {
            @$query['AlertDescription'] = $request->alertDescription;
        }

        if (null !== $request->alertDetail) {
            @$query['AlertDetail'] = $request->alertDetail;
        }

        if (null !== $request->alertGrade) {
            @$query['AlertGrade'] = $request->alertGrade;
        }

        if (null !== $request->alertLabels) {
            @$query['AlertLabels'] = $request->alertLabels;
        }

        if (null !== $request->alertScene) {
            @$query['AlertScene'] = $request->alertScene;
        }

        if (null !== $request->alertToken) {
            @$query['AlertToken'] = $request->alertToken;
        }

        if (null !== $request->alertUidShrink) {
            @$query['AlertUid'] = $request->alertUidShrink;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReportBizAlertInfo',
            'version' => '2018-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportBizAlertInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上报用户业务报警信息.
     *
     * @param request - ReportBizAlertInfoRequest
     *
     * @returns ReportBizAlertInfoResponse
     *
     * @param ReportBizAlertInfoRequest $request
     *
     * @return ReportBizAlertInfoResponse
     */
    public function reportBizAlertInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportBizAlertInfoWithOptions($request, $runtime);
    }
}

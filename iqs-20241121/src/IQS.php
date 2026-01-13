<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\IQS\V20241121\Models\ApplyFormalServiceRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\ApplyFormalServiceResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\CheckAccountTypeResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\DownloadApiCallDailyDetailRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\DownloadApiCallDailyDetailResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\DownloadMeteringDailyDetailRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\DownloadMeteringDailyDetailResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ExpandSearchExpiredTimeRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\ExpandSearchExpiredTimeResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\GetAccountConfigInfoResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\GetAccountReviewRecordResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\GetMeteringSummaryRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\GetMeteringSummaryResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\GetServiceConfigResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListApiCallDailyDetailRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListApiCallDailyDetailResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListApiNamesResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListMeteringDailyDetailRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListMeteringDailyDetailResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListSubAccountInfoResponse;
use AlibabaCloud\SDK\IQS\V20241121\Models\ManageSearchAccountInfoRequest;
use AlibabaCloud\SDK\IQS\V20241121\Models\ManageSearchAccountInfoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IQS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iqs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 申请正式开通.
     *
     * @param request - ApplyFormalServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyFormalServiceResponse
     *
     * @param ApplyFormalServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ApplyFormalServiceResponse
     */
    public function applyFormalServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ApplyFormalService',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/services/commands/applyFormalService',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyFormalServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请正式开通.
     *
     * @param request - ApplyFormalServiceRequest
     *
     * @returns ApplyFormalServiceResponse
     *
     * @param ApplyFormalServiceRequest $request
     *
     * @return ApplyFormalServiceResponse
     */
    public function applyFormalService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyFormalServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 校验账号类型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccountTypeResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CheckAccountTypeResponse
     */
    public function checkAccountTypeWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CheckAccountType',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/openService/v1/account/commands/checkAccountType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckAccountTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验账号类型.
     *
     * @returns CheckAccountTypeResponse
     *
     * @return CheckAccountTypeResponse
     */
    public function checkAccountType()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkAccountTypeWithOptions($headers, $runtime);
    }

    /**
     * 下载接口计量日明细.
     *
     * @param request - DownloadApiCallDailyDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadApiCallDailyDetailResponse
     *
     * @param DownloadApiCallDailyDetailRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DownloadApiCallDailyDetailResponse
     */
    public function downloadApiCallDailyDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'DownloadApiCallDailyDetail',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/downloadApiCallDailyDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DownloadApiCallDailyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载接口计量日明细.
     *
     * @param request - DownloadApiCallDailyDetailRequest
     *
     * @returns DownloadApiCallDailyDetailResponse
     *
     * @param DownloadApiCallDailyDetailRequest $request
     *
     * @return DownloadApiCallDailyDetailResponse
     */
    public function downloadApiCallDailyDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadApiCallDailyDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 下载接口计量日明细.
     *
     * @param request - DownloadMeteringDailyDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadMeteringDailyDetailResponse
     *
     * @param DownloadMeteringDailyDetailRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DownloadMeteringDailyDetailResponse
     */
    public function downloadMeteringDailyDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'DownloadMeteringDailyDetail',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/downloadMeteringDailyDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DownloadMeteringDailyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载接口计量日明细.
     *
     * @param request - DownloadMeteringDailyDetailRequest
     *
     * @returns DownloadMeteringDailyDetailResponse
     *
     * @param DownloadMeteringDailyDetailRequest $request
     *
     * @return DownloadMeteringDailyDetailResponse
     */
    public function downloadMeteringDailyDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadMeteringDailyDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 延长测试时间.
     *
     * @param request - ExpandSearchExpiredTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpandSearchExpiredTimeResponse
     *
     * @param ExpandSearchExpiredTimeRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ExpandSearchExpiredTimeResponse
     */
    public function expandSearchExpiredTimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ExpandSearchExpiredTime',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/openService/v1/account/commands/expendExpiredTime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExpandSearchExpiredTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 延长测试时间.
     *
     * @param request - ExpandSearchExpiredTimeRequest
     *
     * @returns ExpandSearchExpiredTimeResponse
     *
     * @param ExpandSearchExpiredTimeRequest $request
     *
     * @return ExpandSearchExpiredTimeResponse
     */
    public function expandSearchExpiredTime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->expandSearchExpiredTimeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取账号配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountConfigInfoResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountConfigInfoResponse
     */
    public function getAccountConfigInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAccountConfigInfo',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/openService/v1/account/command/accountConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAccountConfigInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取账号配置信息.
     *
     * @returns GetAccountConfigInfoResponse
     *
     * @return GetAccountConfigInfoResponse
     */
    public function getAccountConfigInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccountConfigInfoWithOptions($headers, $runtime);
    }

    /**
     * 查询用户申请记录.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountReviewRecordResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountReviewRecordResponse
     */
    public function getAccountReviewRecordWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAccountReviewRecord',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/services/commands/reviewRecord',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAccountReviewRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户申请记录.
     *
     * @returns GetAccountReviewRecordResponse
     *
     * @return GetAccountReviewRecordResponse
     */
    public function getAccountReviewRecord()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAccountReviewRecordWithOptions($headers, $runtime);
    }

    /**
     * 查询计量汇总信息.
     *
     * @param request - GetMeteringSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMeteringSummaryResponse
     *
     * @param GetMeteringSummaryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetMeteringSummaryResponse
     */
    public function getMeteringSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billPeriod) {
            @$query['billPeriod'] = $request->billPeriod;
        }

        if (null !== $request->billingItem) {
            @$query['billingItem'] = $request->billingItem;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->subAccountId) {
            @$query['subAccountId'] = $request->subAccountId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMeteringSummary',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/metering/summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMeteringSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询计量汇总信息.
     *
     * @param request - GetMeteringSummaryRequest
     *
     * @returns GetMeteringSummaryResponse
     *
     * @param GetMeteringSummaryRequest $request
     *
     * @return GetMeteringSummaryResponse
     */
    public function getMeteringSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMeteringSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务额度信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceConfigResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceConfigResponse
     */
    public function getServiceConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceConfig',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/services/commands/serviceConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务额度信息.
     *
     * @returns GetServiceConfigResponse
     *
     * @return GetServiceConfigResponse
     */
    public function getServiceConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceConfigWithOptions($headers, $runtime);
    }

    /**
     * 查询Api调用量（性能）日明细.
     *
     * @param request - ListApiCallDailyDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiCallDailyDetailResponse
     *
     * @param ListApiCallDailyDetailRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListApiCallDailyDetailResponse
     */
    public function listApiCallDailyDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['apiName'] = $request->apiName;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->engineType) {
            @$query['engineType'] = $request->engineType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiCallDailyDetail',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/apiCall/dailyDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiCallDailyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Api调用量（性能）日明细.
     *
     * @param request - ListApiCallDailyDetailRequest
     *
     * @returns ListApiCallDailyDetailResponse
     *
     * @param ListApiCallDailyDetailRequest $request
     *
     * @return ListApiCallDailyDetailResponse
     */
    public function listApiCallDailyDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiCallDailyDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Api名称列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiNamesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListApiNamesResponse
     */
    public function listApiNamesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListApiNames',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/apiNames',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Api名称列表.
     *
     * @returns ListApiNamesResponse
     *
     * @return ListApiNamesResponse
     */
    public function listApiNames()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiNamesWithOptions($headers, $runtime);
    }

    /**
     * 查询计量日明细信息.
     *
     * @param request - ListMeteringDailyDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMeteringDailyDetailResponse
     *
     * @param ListMeteringDailyDetailRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListMeteringDailyDetailResponse
     */
    public function listMeteringDailyDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billPeriod) {
            @$query['billPeriod'] = $request->billPeriod;
        }

        if (null !== $request->billingItem) {
            @$query['billingItem'] = $request->billingItem;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->subAccountId) {
            @$query['subAccountId'] = $request->subAccountId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMeteringDailyDetail',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/metering/dailyDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMeteringDailyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询计量日明细信息.
     *
     * @param request - ListMeteringDailyDetailRequest
     *
     * @returns ListMeteringDailyDetailResponse
     *
     * @param ListMeteringDailyDetailRequest $request
     *
     * @return ListMeteringDailyDetailResponse
     */
    public function listMeteringDailyDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMeteringDailyDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询主账号的所有子账号信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubAccountInfoResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSubAccountInfoResponse
     */
    public function listSubAccountInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListSubAccountInfo',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/console/v1/monitors/commands/subAccountInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询主账号的所有子账号信息.
     *
     * @returns ListSubAccountInfoResponse
     *
     * @return ListSubAccountInfoResponse
     */
    public function listSubAccountInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubAccountInfoWithOptions($headers, $runtime);
    }

    /**
     * 管理智搜用户.
     *
     * @param request - ManageSearchAccountInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManageSearchAccountInfoResponse
     *
     * @param ManageSearchAccountInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ManageSearchAccountInfoResponse
     */
    public function manageSearchAccountInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ManageSearchAccountInfo',
            'version' => '2024-11-21',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/openService/v1/account/commands/manage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ManageSearchAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 管理智搜用户.
     *
     * @param request - ManageSearchAccountInfoRequest
     *
     * @returns ManageSearchAccountInfoResponse
     *
     * @param ManageSearchAccountInfoRequest $request
     *
     * @return ManageSearchAccountInfoResponse
     */
    public function manageSearchAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->manageSearchAccountInfoWithOptions($request, $headers, $runtime);
    }
}

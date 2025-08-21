<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyIpDefenseThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyIpDefenseThresholdResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Antiddospublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'antiddos.aliyuncs.com',
            'cn-beijing' => 'antiddos.aliyuncs.com',
            'cn-zhangjiakou' => 'antiddos-openapi.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote' => 'antiddos-openapi.cn-huhehaote.aliyuncs.com',
            'cn-wulanchabu' => 'antiddos-openapi.cn-wulanchabu.aliyuncs.com',
            'cn-hangzhou' => 'antiddos.aliyuncs.com',
            'cn-shanghai' => 'antiddos.aliyuncs.com',
            'cn-nanjing' => 'antiddos-openapi.cn-hangzhou-cloudstone.aliyuncs.com',
            'cn-shenzhen' => 'antiddos.aliyuncs.com',
            'cn-heyuan' => 'antiddos-openapi.cn-heyuan.aliyuncs.com',
            'cn-guangzhou' => 'antiddos-openapi.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'antiddos-openapi.cn-chengdu.aliyuncs.com',
            'cn-hongkong' => 'antiddos.aliyuncs.com',
            'ap-northeast-1' => 'antiddos-openapi.ap-northeast-1.aliyuncs.com',
            'ap-northeast-2' => 'antiddos-openapi.ap-northeast-2.aliyuncs.com',
            'ap-southeast-1' => 'antiddos.aliyuncs.com',
            'ap-southeast-2' => 'antiddos-openapi.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'antiddos-openapi.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'antiddos-openapi.ap-southeast-5.aliyuncs.com',
            'ap-southeast-6' => 'antiddos-openapi.ap-southeast-6.aliyuncs.com',
            'us-east-1' => 'antiddos.aliyuncs.com',
            'us-west-1' => 'antiddos.aliyuncs.com',
            'eu-west-1' => 'antiddos-openapi.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'antiddos-openapi.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'antiddos-openapi.ap-south-1.aliyuncs.com',
            'me-east-1' => 'antiddos-openapi.me-east-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'antiddos.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'antiddos.aliyuncs.com',
            'cn-north-2-gov-1' => 'antiddos.aliyuncs.com',
            'ap-northeast-2-pop' => 'antiddos.aliyuncs.com',
            'cn-beijing-finance-1' => 'antiddos.aliyuncs.com',
            'cn-beijing-finance-pop' => 'antiddos.aliyuncs.com',
            'cn-beijing-gov-1' => 'antiddos.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'antiddos.aliyuncs.com',
            'cn-edge-1' => 'antiddos.aliyuncs.com',
            'cn-fujian' => 'antiddos.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-finance' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-test-306' => 'antiddos.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'antiddos.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'antiddos.aliyuncs.com',
            'cn-qingdao-nebula' => 'antiddos.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'antiddos.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'antiddos.aliyuncs.com',
            'cn-shanghai-inner' => 'antiddos.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'antiddos.aliyuncs.com',
            'cn-shenzhen-inner' => 'antiddos.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'antiddos.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'antiddos.aliyuncs.com',
            'cn-wuhan' => 'antiddos.aliyuncs.com',
            'cn-yushanfang' => 'antiddos.aliyuncs.com',
            'cn-zhangbei' => 'antiddos.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'antiddos.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'antiddos-openapi.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'antiddos.aliyuncs.com',
            'eu-west-1-oxs' => 'antiddos.aliyuncs.com',
            'rus-west-1-pop' => 'antiddos.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('antiddos-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Queries the configurations of the Anti-DDoS Origin instance that is associated with an asset. The asset is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeBgpPackByIp operation to query the configurations of the Anti-DDoS Origin instance that is associated with an asset. The configurations include the basic protection threshold, burstable protection threshold, and expiration time.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeBgpPackByIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBgpPackByIpResponse
     *
     * @param DescribeBgpPackByIpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBgpPackByIp',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBgpPackByIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the Anti-DDoS Origin instance that is associated with an asset. The asset is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeBgpPackByIp operation to query the configurations of the Anti-DDoS Origin instance that is associated with an asset. The configurations include the basic protection threshold, burstable protection threshold, and expiration time.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeBgpPackByIpRequest
     *
     * @returns DescribeBgpPackByIpResponse
     *
     * @param DescribeBgpPackByIpRequest $request
     *
     * @return DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpPackByIpWithOptions($request, $runtime);
    }

    /**
     * Queries the download link to the traffic data that is captured when a DDoS attack event occurs.
     *
     * @remarks
     * You can call the DescribeCap operation to query the download link to the traffic data that is captured when a DDoS attack event occurs. You can download the traffic data from the download link and use the data as evidence.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCapResponse
     *
     * @param DescribeCapRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeCapResponse
     */
    public function describeCapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->begTime) {
            @$query['BegTime'] = $request->begTime;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCap',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the download link to the traffic data that is captured when a DDoS attack event occurs.
     *
     * @remarks
     * You can call the DescribeCap operation to query the download link to the traffic data that is captured when a DDoS attack event occurs. You can download the traffic data from the download link and use the data as evidence.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCapRequest
     *
     * @returns DescribeCapResponse
     *
     * @param DescribeCapRequest $request
     *
     * @return DescribeCapResponse
     */
    public function describeCap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapWithOptions($request, $runtime);
    }

    /**
     * Queries the number of assets that are under DDoS attacks in a specific region. The assets are assigned public IP addresses.
     *
     * @remarks
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosCountResponse
     *
     * @param DescribeDdosCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosCountResponse
     */
    public function describeDdosCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosCount',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of assets that are under DDoS attacks in a specific region. The assets are assigned public IP addresses.
     *
     * @remarks
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosCountRequest
     *
     * @returns DescribeDdosCountResponse
     *
     * @param DescribeDdosCountRequest $request
     *
     * @return DescribeDdosCountResponse
     */
    public function describeDdosCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCountWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the security credit score of the current Alibaba Cloud account in a specific region.
     *
     * @remarks
     * You can call the DescribeDdosCredit operation to query the details of the security credit score of the current Alibaba Cloud account in a specific region. The details include the security credit score, security credit level, and the time period after which blackhole filtering is automatically deactivated.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosCreditResponse
     *
     * @param DescribeDdosCreditRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDdosCreditResponse
     */
    public function describeDdosCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosCredit',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the security credit score of the current Alibaba Cloud account in a specific region.
     *
     * @remarks
     * You can call the DescribeDdosCredit operation to query the details of the security credit score of the current Alibaba Cloud account in a specific region. The details include the security credit score, security credit level, and the time period after which blackhole filtering is automatically deactivated.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosCreditRequest
     *
     * @returns DescribeDdosCreditResponse
     *
     * @param DescribeDdosCreditRequest $request
     *
     * @return DescribeDdosCreditResponse
     */
    public function describeDdosCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCreditWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the DDoS attack events that occur on an asset. The asset is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeDdosEventList operation to query the details of the DDoS attack events that occur on an asset by page. The details include the start time, end time, and status of each DDoS attack event.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosEventListResponse
     *
     * @param DescribeDdosEventListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDdosEventListResponse
     */
    public function describeDdosEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryDays) {
            @$query['QueryDays'] = $request->queryDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosEventList',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the DDoS attack events that occur on an asset. The asset is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeDdosEventList operation to query the details of the DDoS attack events that occur on an asset by page. The details include the start time, end time, and status of each DDoS attack event.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosEventListRequest
     *
     * @returns DescribeDdosEventListResponse
     *
     * @param DescribeDdosEventListRequest $request
     *
     * @return DescribeDdosEventListResponse
     */
    public function describeDdosEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * You can call the DescribeDdosThreshold operation to query the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The details include the current traffic scrubbing threshold, maximum traffic scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosThresholdResponse
     *
     * @param DescribeDdosThresholdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDdosThresholdResponse
     */
    public function describeDdosThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->ddosType) {
            @$query['DdosType'] = $request->ddosType;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDdosThreshold',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * You can call the DescribeDdosThreshold operation to query the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The details include the current traffic scrubbing threshold, maximum traffic scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDdosThresholdRequest
     *
     * @returns DescribeDdosThresholdResponse
     *
     * @param DescribeDdosThresholdRequest $request
     *
     * @return DescribeDdosThresholdResponse
     */
    public function describeDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the assets within the current Alibaba Cloud account. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses. This operation is phased out. We recommend that you use the DescribeInstanceIpAddress operation.
     *
     * @remarks
     * You can call the DescribeInstance operation to query the details of the assets that are within the current Alibaba Cloud account by page. The details include the IDs and IP addresses of the assets, the basic protection thresholds and traffic scrubbing thresholds that are configured for the assets in Anti-DDoS Origin, and whether the assets are associated with Anti-DDoS Origin instances.
     * ### [](#qps-)Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->ddosStatus) {
            @$query['DdosStatus'] = $request->ddosStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIp) {
            @$query['InstanceIp'] = $request->instanceIp;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the assets within the current Alibaba Cloud account. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses. This operation is phased out. We recommend that you use the DescribeInstanceIpAddress operation.
     *
     * @remarks
     * You can call the DescribeInstance operation to query the details of the assets that are within the current Alibaba Cloud account by page. The details include the IDs and IP addresses of the assets, the basic protection thresholds and traffic scrubbing thresholds that are configured for the assets in Anti-DDoS Origin, and whether the assets are associated with Anti-DDoS Origin instances.
     * ### [](#qps-)Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the assets within the current Alibaba Cloud account and the details of the Anti-DDoS Origin instance to which the assets belong. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeInstanceIpAddress operation to query the DDoS mitigation information and the details of the Anti-DDoS Origin instance. The information and the details include the basic protection threshold and traffic scrubbing threshold for the assets, DDoS mitigation status of the assets, ID of the instance, and the mitigation status of the instance.
     * ## Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceIpAddressResponse
     *
     * @param DescribeInstanceIpAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->ddosStatus) {
            @$query['DdosStatus'] = $request->ddosStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIp) {
            @$query['InstanceIp'] = $request->instanceIp;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceIpAddress',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the assets within the current Alibaba Cloud account and the details of the Anti-DDoS Origin instance to which the assets belong. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeInstanceIpAddress operation to query the DDoS mitigation information and the details of the Anti-DDoS Origin instance. The information and the details include the basic protection threshold and traffic scrubbing threshold for the assets, DDoS mitigation status of the assets, ID of the instance, and the mitigation status of the instance.
     * ## Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceIpAddressRequest
     *
     * @returns DescribeInstanceIpAddressResponse
     *
     * @param DescribeInstanceIpAddressRequest $request
     *
     * @return DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeIpDdosThreshold operation to query the details of the DDoS mitigation threshold or traffic scrubbing threshold for a specific asset. The details include the current traffic scrubbing threshold, maximum scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeIpDdosThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpDdosThresholdResponse
     *
     * @param DescribeIpDdosThresholdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->ddosType) {
            @$query['DdosType'] = $request->ddosType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpDdosThreshold',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *
     * @remarks
     * If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeIpDdosThreshold operation to query the details of the DDoS mitigation threshold or traffic scrubbing threshold for a specific asset. The details include the current traffic scrubbing threshold, maximum scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeIpDdosThresholdRequest
     *
     * @returns DescribeIpDdosThresholdResponse
     *
     * @param DescribeIpDdosThresholdRequest $request
     *
     * @return DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * Queries the region to which the public IP address of the asset within the current Alibaba Cloud account belongs. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeIpLocationService operation to query the region of the public IP address for a specified asset that is within the current Alibaba Cloud account. You can also query the details of the Anti-DDoS Origin instance to which the asset is added. The details include the ID and name.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeIpLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpLocationServiceResponse
     *
     * @param DescribeIpLocationServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIpLocationServiceResponse
     */
    public function describeIpLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpLocationService',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the region to which the public IP address of the asset within the current Alibaba Cloud account belongs. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *
     * @remarks
     * You can call the DescribeIpLocationService operation to query the region of the public IP address for a specified asset that is within the current Alibaba Cloud account. You can also query the details of the Anti-DDoS Origin instance to which the asset is added. The details include the ID and name.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeIpLocationServiceRequest
     *
     * @returns DescribeIpLocationServiceResponse
     *
     * @param DescribeIpLocationServiceRequest $request
     *
     * @return DescribeIpLocationServiceResponse
     */
    public function describeIpLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpLocationServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the regions in which Anti-DDoS Origin Basic is available.
     *
     * @remarks
     * You can call this operation to query information about the regions in which Anti-DDoS Origin Basic is available. The information includes the region ID, region name, and code.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions in which Anti-DDoS Origin Basic is available.
     *
     * @remarks
     * You can call this operation to query information about the regions in which Anti-DDoS Origin Basic is available. The information includes the region ID, region name, and code.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * Changes the scrubbing thresholds for an asset that is assigned a public IP address.
     *
     * @remarks
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyDefenseThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefenseThresholdResponse
     *
     * @param ModifyDefenseThresholdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bps) {
            @$query['Bps'] = $request->bps;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        if (null !== $request->isAuto) {
            @$query['IsAuto'] = $request->isAuto;
        }

        if (null !== $request->pps) {
            @$query['Pps'] = $request->pps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefenseThreshold',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDefenseThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the scrubbing thresholds for an asset that is assigned a public IP address.
     *
     * @remarks
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyDefenseThresholdRequest
     *
     * @returns ModifyDefenseThresholdResponse
     *
     * @param ModifyDefenseThresholdRequest $request
     *
     * @return ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseThresholdWithOptions($request, $runtime);
    }

    /**
     * Modifies the scrubbing thresholds for an asset that is assigned a public IP address. This operation is a synchronous operation that supports Terraform.
     *
     * @remarks
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyIpDefenseThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIpDefenseThresholdResponse
     *
     * @param ModifyIpDefenseThresholdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyIpDefenseThresholdResponse
     */
    public function modifyIpDefenseThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bps) {
            @$query['Bps'] = $request->bps;
        }

        if (null !== $request->ddosRegionId) {
            @$query['DdosRegionId'] = $request->ddosRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetIp) {
            @$query['InternetIp'] = $request->internetIp;
        }

        if (null !== $request->isAuto) {
            @$query['IsAuto'] = $request->isAuto;
        }

        if (null !== $request->pps) {
            @$query['Pps'] = $request->pps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIpDefenseThreshold',
            'version' => '2017-05-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIpDefenseThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the scrubbing thresholds for an asset that is assigned a public IP address. This operation is a synchronous operation that supports Terraform.
     *
     * @remarks
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyIpDefenseThresholdRequest
     *
     * @returns ModifyIpDefenseThresholdResponse
     *
     * @param ModifyIpDefenseThresholdRequest $request
     *
     * @return ModifyIpDefenseThresholdResponse
     */
    public function modifyIpDefenseThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpDefenseThresholdWithOptions($request, $runtime);
    }
}

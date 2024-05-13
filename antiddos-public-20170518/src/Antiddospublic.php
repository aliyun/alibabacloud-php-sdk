<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Antiddospublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'antiddos-openapi.ap-northeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'antiddos.aliyuncs.com',
            'ap-south-1'                  => 'antiddos-openapi.ap-south-1.aliyuncs.com',
            'ap-southeast-1'              => 'antiddos.aliyuncs.com',
            'ap-southeast-2'              => 'antiddos-openapi.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'antiddos-openapi.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'              => 'antiddos-openapi-vpc.ap-southeast-5.aliyuncs.com',
            'cn-beijing'                  => 'antiddos-openapi-vpc.cn-beijing.aliyuncs.com',
            'cn-beijing-finance-1'        => 'antiddos.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'antiddos.aliyuncs.com',
            'cn-beijing-gov-1'            => 'antiddos.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'antiddos.aliyuncs.com',
            'cn-chengdu'                  => 'antiddos-openapi.cn-chengdu.aliyuncs.com',
            'cn-edge-1'                   => 'antiddos.aliyuncs.com',
            'cn-fujian'                   => 'antiddos.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'antiddos.aliyuncs.com',
            'cn-hangzhou'                 => 'antiddos-openapi-vpc.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'antiddos.aliyuncs.com',
            'cn-hangzhou-finance'         => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'antiddos.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'antiddos.aliyuncs.com',
            'cn-hongkong'                 => 'antiddos-openapi-vpc.cn-hongkong.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'antiddos.aliyuncs.com',
            'cn-huhehaote'                => 'antiddos-openapi.cn-huhehaote.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'antiddos.aliyuncs.com',
            'cn-north-2-gov-1'            => 'antiddos.aliyuncs.com',
            'cn-qingdao'                  => 'antiddos-openapi-vpc.cn-qingdao.aliyuncs.com',
            'cn-qingdao-nebula'           => 'antiddos.aliyuncs.com',
            'cn-shanghai'                 => 'antiddos-openapi-vpc.cn-shanghai.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'antiddos.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'antiddos.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'antiddos.aliyuncs.com',
            'cn-shanghai-inner'           => 'antiddos.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'antiddos.aliyuncs.com',
            'cn-shenzhen'                 => 'antiddos.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'antiddos.aliyuncs.com',
            'cn-shenzhen-inner'           => 'antiddos.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'antiddos.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'antiddos.aliyuncs.com',
            'cn-wuhan'                    => 'antiddos.aliyuncs.com',
            'cn-wulanchabu'               => 'antiddos-openapi.cn-wulanchabu.aliyuncs.com',
            'cn-yushanfang'               => 'antiddos.aliyuncs.com',
            'cn-zhangbei'                 => 'antiddos.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'antiddos.aliyuncs.com',
            'cn-zhangjiakou'              => 'antiddos-openapi.cn-zhangjiakou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'antiddos.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'antiddos.aliyuncs.com',
            'eu-central-1'                => 'antiddos-openapi.eu-central-1.aliyuncs.com',
            'eu-west-1'                   => 'antiddos-openapi.eu-west-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'antiddos.aliyuncs.com',
            'me-east-1'                   => 'antiddos-openapi.me-east-1.aliyuncs.com',
            'rus-west-1-pop'              => 'antiddos.aliyuncs.com',
            'us-east-1'                   => 'antiddos.aliyuncs.com',
            'us-west-1'                   => 'antiddos.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Queries the configurations of the Anti-DDoS Origin Basic instance that is associated with an asset. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeBgpPackByIp operation to query the configurations of the Anti-DDoS Origin instance that is associated with an asset. The configurations include the basic protection threshold, burstable protection threshold, and expiration time.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeBgpPackByIpRequest $request DescribeBgpPackByIpRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBgpPackByIpResponse DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBgpPackByIp',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBgpPackByIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of the Anti-DDoS Origin Basic instance that is associated with an asset. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeBgpPackByIp operation to query the configurations of the Anti-DDoS Origin instance that is associated with an asset. The configurations include the basic protection threshold, burstable protection threshold, and expiration time.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeBgpPackByIpRequest $request DescribeBgpPackByIpRequest
     *
     * @return DescribeBgpPackByIpResponse DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpPackByIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download link to the traffic data that is captured when a DDoS attack event occurs.
     *  *
     * @description You can call the DescribeCap operation to query the download link to the traffic data that is captured when a DDoS attack event occurs. You can download the traffic data from the download link and use the data as evidence.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCapRequest $request DescribeCapRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCapResponse DescribeCapResponse
     */
    public function describeCapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->begTime)) {
            $query['BegTime'] = $request->begTime;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCap',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the download link to the traffic data that is captured when a DDoS attack event occurs.
     *  *
     * @description You can call the DescribeCap operation to query the download link to the traffic data that is captured when a DDoS attack event occurs. You can download the traffic data from the download link and use the data as evidence.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCapRequest $request DescribeCapRequest
     *
     * @return DescribeCapResponse DescribeCapResponse
     */
    public function describeCap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of assets that are under DDoS attacks in a specific region. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeDdosCount operation to query the number of assets that are under DDoS attacks in a specific region.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosCountRequest $request DescribeDdosCountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosCountResponse DescribeDdosCountResponse
     */
    public function describeDdosCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosCount',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of assets that are under DDoS attacks in a specific region. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeDdosCount operation to query the number of assets that are under DDoS attacks in a specific region.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosCountRequest $request DescribeDdosCountRequest
     *
     * @return DescribeDdosCountResponse DescribeDdosCountResponse
     */
    public function describeDdosCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the security credit score of the current Alibaba Cloud account in a specific region.
     *  *
     * @description You can call the DescribeDdosCredit operation to query the details of the security credit score of the current Alibaba Cloud account in a specific region. The details include the security credit score, security credit level, and the time period after which blackhole filtering is automatically deactivated.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosCreditRequest $request DescribeDdosCreditRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosCreditResponse DescribeDdosCreditResponse
     */
    public function describeDdosCreditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosCredit',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the security credit score of the current Alibaba Cloud account in a specific region.
     *  *
     * @description You can call the DescribeDdosCredit operation to query the details of the security credit score of the current Alibaba Cloud account in a specific region. The details include the security credit score, security credit level, and the time period after which blackhole filtering is automatically deactivated.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosCreditRequest $request DescribeDdosCreditRequest
     *
     * @return DescribeDdosCreditResponse DescribeDdosCreditResponse
     */
    public function describeDdosCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCreditWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the DDoS attack events that occur on an asset. The asset can be an Elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeDdosEventList operation to query the details of the DDoS attack events that occur on an asset by page. The details include the start time, end time, and status of each DDoS attack event.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosEventListRequest $request DescribeDdosEventListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosEventListResponse DescribeDdosEventListResponse
     */
    public function describeDdosEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosEventList',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the DDoS attack events that occur on an asset. The asset can be an Elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeDdosEventList operation to query the details of the DDoS attack events that occur on an asset by page. The details include the start time, end time, and status of each DDoS attack event.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosEventListRequest $request DescribeDdosEventListRequest
     *
     * @return DescribeDdosEventListResponse DescribeDdosEventListResponse
     */
    public function describeDdosEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeDdosThreshold operation to query the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The details include the current traffic scrubbing threshold, maximum traffic scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosThresholdRequest $request DescribeDdosThresholdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDdosThresholdResponse DescribeDdosThresholdResponse
     */
    public function describeDdosThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosType)) {
            $query['DdosType'] = $request->ddosType;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeDdosThreshold operation to query the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The details include the current traffic scrubbing threshold, maximum traffic scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDdosThresholdRequest $request DescribeDdosThresholdRequest
     *
     * @return DescribeDdosThresholdResponse DescribeDdosThresholdResponse
     */
    public function describeDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the assets within the current Alibaba Cloud account. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeInstance operation to query the details of the assets that are within the current Alibaba Cloud account by page. The details include the IDs and IP addresses of the assets, the basic protection thresholds and traffic scrubbing thresholds that are configured for the assets in Anti-DDoS Origin Basic, and whether the assets are associated with Anti-DDoS Origin Basic instances.
     * ### Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosStatus)) {
            $query['DdosStatus'] = $request->ddosStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIp)) {
            $query['InstanceIp'] = $request->instanceIp;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the assets within the current Alibaba Cloud account. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description You can call the DescribeInstance operation to query the details of the assets that are within the current Alibaba Cloud account by page. The details include the IDs and IP addresses of the assets, the basic protection thresholds and traffic scrubbing thresholds that are configured for the assets in Anti-DDoS Origin Basic, and whether the assets are associated with Anti-DDoS Origin Basic instances.
     * ### Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the assets within the current Alibaba Cloud account and the details of the Anti-DDoS Origin instance to which the assets belong. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeInstanceIpAddress operation to query the DDoS mitigation information and the details of the Anti-DDoS Origin instance. The information and the details include the basic protection threshold and traffic scrubbing threshold for the assets, DDoS mitigation status of the assets, ID of the instance, and the mitigation status of the instance.
     * ## Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceIpAddressRequest $request DescribeInstanceIpAddressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceIpAddressResponse DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosStatus)) {
            $query['DdosStatus'] = $request->ddosStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIp)) {
            $query['InstanceIp'] = $request->instanceIp;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceIpAddress',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the assets within the current Alibaba Cloud account and the details of the Anti-DDoS Origin instance to which the assets belong. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeInstanceIpAddress operation to query the DDoS mitigation information and the details of the Anti-DDoS Origin instance. The information and the details include the basic protection threshold and traffic scrubbing threshold for the assets, DDoS mitigation status of the assets, ID of the instance, and the mitigation status of the instance.
     * ## Limits
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceIpAddressRequest $request DescribeInstanceIpAddressRequest
     *
     * @return DescribeInstanceIpAddressResponse DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeIpDdosThreshold operation to query the details of the DDoS mitigation threshold or traffic scrubbing threshold for a specific asset. The details include the current traffic scrubbing threshold, maximum scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeIpDdosThresholdRequest $request DescribeIpDdosThresholdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpDdosThresholdResponse DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosType)) {
            $query['DdosType'] = $request->ddosType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpDdosThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the DDoS mitigation thresholds or traffic scrubbing thresholds for specified assets. The assets can be elastic IP addresses (EIPs). The assets can also be Elastic Compute Service (ECS) instances or Server Load Balancer (SLB) instances that are assigned public IP addresses.
     *  *
     * @description If one or more assets of the current Alibaba Cloud account are added to an Anti-DDoS Origin instance, you can call the DescribeIpDdosThreshold operation to query the details of the DDoS mitigation threshold or traffic scrubbing threshold for a specific asset. The details include the current traffic scrubbing threshold, maximum scrubbing threshold, current DDoS mitigation threshold, and maximum DDoS mitigation threshold.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeIpDdosThresholdRequest $request DescribeIpDdosThresholdRequest
     *
     * @return DescribeIpDdosThresholdResponse DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the region in which an asset within the current Alibaba Cloud account resides. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeIpLocationService operation to query the region of the public IP address for a specified asset that is within the current Alibaba Cloud account. You can also query the details of the Anti-DDoS Origin instance to which the asset is added. The details include the ID and name.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeIpLocationServiceRequest $request DescribeIpLocationServiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpLocationServiceResponse DescribeIpLocationServiceResponse
     */
    public function describeIpLocationServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpLocationService',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the region in which an asset within the current Alibaba Cloud account resides. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the DescribeIpLocationService operation to query the region of the public IP address for a specified asset that is within the current Alibaba Cloud account. You can also query the details of the Anti-DDoS Origin instance to which the asset is added. The details include the ID and name.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeIpLocationServiceRequest $request DescribeIpLocationServiceRequest
     *
     * @return DescribeIpLocationServiceResponse DescribeIpLocationServiceResponse
     */
    public function describeIpLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpLocationServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions in which Anti-DDoS Origin Basic is available.
     *  *
     * @description You can call this operation to query information about the regions in which Anti-DDoS Origin Basic is available. The information includes the region ID, region name, and code.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions in which Anti-DDoS Origin Basic is available.
     *  *
     * @description You can call this operation to query information about the regions in which Anti-DDoS Origin Basic is available. The information includes the region ID, region name, and code.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @summary Changes the scrubbing thresholds for an asset. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the ModifyDefenseThreshold operation to change the scrubbing thresholds for an asset.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyDefenseThresholdRequest $request ModifyDefenseThresholdRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefenseThresholdResponse ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bps)) {
            $query['Bps'] = $request->bps;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        if (!Utils::isUnset($request->isAuto)) {
            $query['IsAuto'] = $request->isAuto;
        }
        if (!Utils::isUnset($request->pps)) {
            $query['Pps'] = $request->pps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the scrubbing thresholds for an asset. The asset can be an elastic IP address (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description You can call the ModifyDefenseThreshold operation to change the scrubbing thresholds for an asset.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyDefenseThresholdRequest $request ModifyDefenseThresholdRequest
     *
     * @return ModifyDefenseThresholdResponse ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseThresholdWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the traffic scrubbing thresholds for an asset. The asset can be an elastic IP addresses (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyIpDefenseThresholdRequest $request ModifyIpDefenseThresholdRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIpDefenseThresholdResponse ModifyIpDefenseThresholdResponse
     */
    public function modifyIpDefenseThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bps)) {
            $query['Bps'] = $request->bps;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        if (!Utils::isUnset($request->isAuto)) {
            $query['IsAuto'] = $request->isAuto;
        }
        if (!Utils::isUnset($request->pps)) {
            $query['Pps'] = $request->pps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpDefenseThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpDefenseThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the traffic scrubbing thresholds for an asset. The asset can be an elastic IP addresses (EIP). The asset can also be an Elastic Compute Service (ECS) instance or Server Load Balancer (SLB) instance that is assigned a public IP address.
     *  *
     * @description ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyIpDefenseThresholdRequest $request ModifyIpDefenseThresholdRequest
     *
     * @return ModifyIpDefenseThresholdResponse ModifyIpDefenseThresholdResponse
     */
    public function modifyIpDefenseThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpDefenseThresholdWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Actiontrail extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'actiontrail.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'actiontrail.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'actiontrail.aliyuncs.com',
            'cn-beijing-gov-1'            => 'actiontrail.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'actiontrail.aliyuncs.com',
            'cn-edge-1'                   => 'actiontrail.aliyuncs.com',
            'cn-fujian'                   => 'actiontrail.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-finance'         => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'actiontrail.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'actiontrail.aliyuncs.com',
            'cn-qingdao-nebula'           => 'actiontrail.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'actiontrail.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'actiontrail.aliyuncs.com',
            'cn-shanghai-inner'           => 'actiontrail.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-inner'           => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'actiontrail.aliyuncs.com',
            'cn-wuhan'                    => 'actiontrail.aliyuncs.com',
            'cn-yushanfang'               => 'actiontrail.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'actiontrail.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'actiontrail.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'actiontrail.aliyuncs.com',
            'eu-west-1-oxs'               => 'actiontrail.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'actiontrail.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('actiontrail', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ListDeliveryHistoryJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeliveryHistoryJobsResponse
     */
    public function listDeliveryHistoryJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDeliveryHistoryJobsResponse::fromMap($this->doRequest('ListDeliveryHistoryJobs', 'HTTPS', 'POST', '2020-07-06', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDeliveryHistoryJobsRequest $request
     *
     * @return ListDeliveryHistoryJobsResponse
     */
    public function listDeliveryHistoryJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeliveryHistoryJobsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeliveryHistoryJobResponse::fromMap($this->doRequest('CreateDeliveryHistoryJob', 'HTTPS', 'POST', '2020-07-06', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDeliveryHistoryJobRequest $request
     *
     * @return CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * @param LookupEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LookupEventsResponse
     */
    public function lookupEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return LookupEventsResponse::fromMap($this->doRequest('LookupEvents', 'HTTPS', 'POST', '2020-07-06', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param LookupEventsRequest $request
     *
     * @return LookupEventsResponse
     */
    public function lookupEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupEventsWithOptions($request, $runtime);
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
}

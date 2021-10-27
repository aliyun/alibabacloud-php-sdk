<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateTrailResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteTrailResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetTrailStatusRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetTrailStatusResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StartLoggingRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StartLoggingResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StopLoggingRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StopLoggingResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Actiontrail extends OpenApiClient
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
     * @param CreateDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeliveryHistoryJobResponse::fromMap($this->doRPCRequest('CreateDeliveryHistoryJob', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTrailResponse
     */
    public function createTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrailResponse::fromMap($this->doRPCRequest('CreateTrail', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTrailRequest $request
     *
     * @return CreateTrailResponse
     */
    public function createTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeliveryHistoryJobResponse
     */
    public function deleteDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeliveryHistoryJobResponse::fromMap($this->doRPCRequest('DeleteDeliveryHistoryJob', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeliveryHistoryJobRequest $request
     *
     * @return DeleteDeliveryHistoryJobResponse
     */
    public function deleteDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTrailResponse
     */
    public function deleteTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrailResponse::fromMap($this->doRPCRequest('DeleteTrail', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTrailRequest $request
     *
     * @return DeleteTrailResponse
     */
    public function deleteTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrailsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTrailsResponse
     */
    public function describeTrailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTrailsResponse::fromMap($this->doRPCRequest('DescribeTrails', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTrailsRequest $request
     *
     * @return DescribeTrailsResponse
     */
    public function describeTrails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrailsWithOptions($request, $runtime);
    }

    /**
     * @param GetDeliveryHistoryJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeliveryHistoryJobResponse
     */
    public function getDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeliveryHistoryJobResponse::fromMap($this->doRPCRequest('GetDeliveryHistoryJob', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeliveryHistoryJobRequest $request
     *
     * @return GetDeliveryHistoryJobResponse
     */
    public function getDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * @param GetTrailStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTrailStatusResponse
     */
    public function getTrailStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrailStatusResponse::fromMap($this->doRPCRequest('GetTrailStatus', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrailStatusRequest $request
     *
     * @return GetTrailStatusResponse
     */
    public function getTrailStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrailStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeliveryHistoryJobsResponse::fromMap($this->doRPCRequest('ListDeliveryHistoryJobs', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param LookupEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LookupEventsResponse
     */
    public function lookupEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LookupEventsResponse::fromMap($this->doRPCRequest('LookupEvents', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartLoggingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartLoggingResponse
     */
    public function startLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartLoggingResponse::fromMap($this->doRPCRequest('StartLogging', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartLoggingRequest $request
     *
     * @return StartLoggingResponse
     */
    public function startLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoggingWithOptions($request, $runtime);
    }

    /**
     * @param StopLoggingRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopLoggingResponse
     */
    public function stopLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return StopLoggingResponse::fromMap($this->doRPCRequest('StopLogging', '2020-07-06', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopLoggingRequest $request
     *
     * @return StopLoggingResponse
     */
    public function stopLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoggingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTrailResponse
     */
    public function updateTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrailResponse::fromMap($this->doRPCRequest('UpdateTrail', '2020-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTrailRequest $request
     *
     * @return UpdateTrailResponse
     */
    public function updateTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrailWithOptions($request, $runtime);
    }
}

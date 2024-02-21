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
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\EnableInsightRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\EnableInsightResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedEventsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedEventsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedInfoRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedInfoResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedIpsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedIpsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedProductsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedProductsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedResourcesRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedResourcesResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGlobalEventsStorageRegionResponse;
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
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateGlobalEventsStorageRegionRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateGlobalEventsStorageRegionResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * Take note of the following limits:
     *   * - You must have created and configured a single-account trail to deliver events to Log Service by calling the [CreateTrail](~~212313~~) operation.
     *   * - Only one historical event delivery task can be running at a time within an Alibaba Cloud account.
     *   * This topic shows you how to create a historical event delivery task for a sample trail named `trail-name`.
     *   *
     * @param CreateDeliveryHistoryJobRequest $request CreateDeliveryHistoryJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeliveryHistoryJobResponse CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->trailName)) {
            $query['TrailName'] = $request->trailName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliveryHistoryJob',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Take note of the following limits:
     *   * - You must have created and configured a single-account trail to deliver events to Log Service by calling the [CreateTrail](~~212313~~) operation.
     *   * - Only one historical event delivery task can be running at a time within an Alibaba Cloud account.
     *   * This topic shows you how to create a historical event delivery task for a sample trail named `trail-name`.
     *   *
     * @param CreateDeliveryHistoryJobRequest $request CreateDeliveryHistoryJobRequest
     *
     * @return CreateDeliveryHistoryJobResponse CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * You can create a trail to deliver events to Log Service, Object Storage Service (OSS), or both. Before you call this operation to create a trail, make sure that the following requirements are met:
     *   * *   Deliver events to Log Service: A project is created in Log Service.
     *   * **
     *   * **Description** After you create a trail to deliver events to Log Service, a Logstore whose name is in the `actiontrail_<Trail name>` format is automatically created and optimally configured for subsequent auditing. Indexes and a dashboard are created for the Logstore to facilitate event queries. You cannot manually write data to the Logstore. This ensures data accuracy. You do not need to create a Logstore in advance.
     *   * *   Deliver events to OSS: A bucket is created in OSS. This topic provides an example on how to call the API operation to create a single-account trail named `trail-test` to deliver events to an OSS bucket named `audit-log`.
     *   *
     * @param CreateTrailRequest $request CreateTrailRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrailResponse CreateTrailResponse
     */
    public function createTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventRW)) {
            $query['EventRW'] = $request->eventRW;
        }
        if (!Utils::isUnset($request->isOrganizationTrail)) {
            $query['IsOrganizationTrail'] = $request->isOrganizationTrail;
        }
        if (!Utils::isUnset($request->maxComputeProjectArn)) {
            $query['MaxComputeProjectArn'] = $request->maxComputeProjectArn;
        }
        if (!Utils::isUnset($request->maxComputeWriteRoleArn)) {
            $query['MaxComputeWriteRoleArn'] = $request->maxComputeWriteRoleArn;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossKeyPrefix)) {
            $query['OssKeyPrefix'] = $request->ossKeyPrefix;
        }
        if (!Utils::isUnset($request->ossWriteRoleArn)) {
            $query['OssWriteRoleArn'] = $request->ossWriteRoleArn;
        }
        if (!Utils::isUnset($request->slsProjectArn)) {
            $query['SlsProjectArn'] = $request->slsProjectArn;
        }
        if (!Utils::isUnset($request->slsWriteRoleArn)) {
            $query['SlsWriteRoleArn'] = $request->slsWriteRoleArn;
        }
        if (!Utils::isUnset($request->trailRegion)) {
            $query['TrailRegion'] = $request->trailRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrail',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create a trail to deliver events to Log Service, Object Storage Service (OSS), or both. Before you call this operation to create a trail, make sure that the following requirements are met:
     *   * *   Deliver events to Log Service: A project is created in Log Service.
     *   * **
     *   * **Description** After you create a trail to deliver events to Log Service, a Logstore whose name is in the `actiontrail_<Trail name>` format is automatically created and optimally configured for subsequent auditing. Indexes and a dashboard are created for the Logstore to facilitate event queries. You cannot manually write data to the Logstore. This ensures data accuracy. You do not need to create a Logstore in advance.
     *   * *   Deliver events to OSS: A bucket is created in OSS. This topic provides an example on how to call the API operation to create a single-account trail named `trail-test` to deliver events to an OSS bucket named `audit-log`.
     *   *
     * @param CreateTrailRequest $request CreateTrailRequest
     *
     * @return CreateTrailResponse CreateTrailResponse
     */
    public function createTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrailWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to delete a sample historical event delivery task whose ID is `16602`.
     *   *
     * @param DeleteDeliveryHistoryJobRequest $request DeleteDeliveryHistoryJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDeliveryHistoryJobResponse DeleteDeliveryHistoryJobResponse
     */
    public function deleteDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeliveryHistoryJob',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to delete a sample historical event delivery task whose ID is `16602`.
     *   *
     * @param DeleteDeliveryHistoryJobRequest $request DeleteDeliveryHistoryJobRequest
     *
     * @return DeleteDeliveryHistoryJobResponse DeleteDeliveryHistoryJobResponse
     */
    public function deleteDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to delete a sample trail named `trail-test`.
     *   *
     * @param DeleteTrailRequest $request DeleteTrailRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTrailResponse DeleteTrailResponse
     */
    public function deleteTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrail',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to delete a sample trail named `trail-test`.
     *   *
     * @param DeleteTrailRequest $request DeleteTrailRequest
     *
     * @return DeleteTrailResponse DeleteTrailResponse
     */
    public function deleteTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrailWithOptions($request, $runtime);
    }

    /**
     * For more information, see [Regions and zones](~~40654~~).
     *   *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-07-06',
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
     * For more information, see [Regions and zones](~~40654~~).
     *   *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * This topic shows you how to query the information about the single-account trails within an Alibaba Cloud account. In this example, the information about a trail named `test-4` is returned.
     *   *
     * @param DescribeTrailsRequest $request DescribeTrailsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrailsResponse DescribeTrailsResponse
     */
    public function describeTrailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeOrganizationTrail)) {
            $query['IncludeOrganizationTrail'] = $request->includeOrganizationTrail;
        }
        if (!Utils::isUnset($request->includeShadowTrails)) {
            $query['IncludeShadowTrails'] = $request->includeShadowTrails;
        }
        if (!Utils::isUnset($request->nameList)) {
            $query['NameList'] = $request->nameList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrails',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic shows you how to query the information about the single-account trails within an Alibaba Cloud account. In this example, the information about a trail named `test-4` is returned.
     *   *
     * @param DescribeTrailsRequest $request DescribeTrailsRequest
     *
     * @return DescribeTrailsResponse DescribeTrailsResponse
     */
    public function describeTrails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrailsWithOptions($request, $runtime);
    }

    /**
     * @param EnableInsightRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EnableInsightResponse
     */
    public function enableInsightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->insightType)) {
            $query['InsightType'] = $request->insightType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInsight',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInsightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInsightRequest $request
     *
     * @return EnableInsightResponse
     */
    public function enableInsight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInsightWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query only the information about the most recent events that are generated within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. For more information about supported events, see [Alibaba Cloud services and events that are supported by the AccessKey pair audit feature](~~419214~~). Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedEventsRequest $request GetAccessKeyLastUsedEventsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedEventsResponse GetAccessKeyLastUsedEventsResponse
     */
    public function getAccessKeyLastUsedEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsedEvents',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only the information about the most recent events that are generated within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. For more information about supported events, see [Alibaba Cloud services and events that are supported by the AccessKey pair audit feature](~~419214~~). Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedEventsRequest $request GetAccessKeyLastUsedEventsRequest
     *
     * @return GetAccessKeyLastUsedEventsResponse GetAccessKeyLastUsedEventsResponse
     */
    public function getAccessKeyLastUsedEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedEventsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query only the information about the most recent call of a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedInfoRequest $request GetAccessKeyLastUsedInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedInfoResponse GetAccessKeyLastUsedInfoResponse
     */
    public function getAccessKeyLastUsedInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsedInfo',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only the information about the most recent call of a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedInfoRequest $request GetAccessKeyLastUsedInfoRequest
     *
     * @return GetAccessKeyLastUsedInfoResponse GetAccessKeyLastUsedInfoResponse
     */
    public function getAccessKeyLastUsedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedInfoWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query only the information about the IP addresses that are most recently used within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedIpsRequest $request GetAccessKeyLastUsedIpsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedIpsResponse GetAccessKeyLastUsedIpsResponse
     */
    public function getAccessKeyLastUsedIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsedIps',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only the information about the IP addresses that are most recently used within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedIpsRequest $request GetAccessKeyLastUsedIpsRequest
     *
     * @return GetAccessKeyLastUsedIpsResponse GetAccessKeyLastUsedIpsResponse
     */
    public function getAccessKeyLastUsedIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedIpsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query only the information about Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedProductsRequest $request GetAccessKeyLastUsedProductsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedProductsResponse GetAccessKeyLastUsedProductsResponse
     */
    public function getAccessKeyLastUsedProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsedProducts',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only the information about Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedProductsRequest $request GetAccessKeyLastUsedProductsRequest
     *
     * @return GetAccessKeyLastUsedProductsResponse GetAccessKeyLastUsedProductsResponse
     */
    public function getAccessKeyLastUsedProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedProductsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query only the information about resources that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedResourcesRequest $request GetAccessKeyLastUsedResourcesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedResourcesResponse GetAccessKeyLastUsedResourcesResponse
     */
    public function getAccessKeyLastUsedResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsedResources',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only the information about resources that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *   *
     * @param GetAccessKeyLastUsedResourcesRequest $request GetAccessKeyLastUsedResourcesRequest
     *
     * @return GetAccessKeyLastUsedResourcesResponse GetAccessKeyLastUsedResourcesResponse
     */
    public function getAccessKeyLastUsedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedResourcesWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to query the details of a historical event delivery tasks created within your Alibaba Cloud account. In this example, the details of a historical event delivery task whose ID is `16602` are returned. The sample response shows that this task is used to deliver the historical events recorded by the trail named `trail-name` to Log Service and the task is complete.
     *   *
     * @param GetDeliveryHistoryJobRequest $request GetDeliveryHistoryJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeliveryHistoryJobResponse GetDeliveryHistoryJobResponse
     */
    public function getDeliveryHistoryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeliveryHistoryJob',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to query the details of a historical event delivery tasks created within your Alibaba Cloud account. In this example, the details of a historical event delivery task whose ID is `16602` are returned. The sample response shows that this task is used to deliver the historical events recorded by the trail named `trail-name` to Log Service and the task is complete.
     *   *
     * @param GetDeliveryHistoryJobRequest $request GetDeliveryHistoryJobRequest
     *
     * @return GetDeliveryHistoryJobResponse GetDeliveryHistoryJobResponse
     */
    public function getDeliveryHistoryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeliveryHistoryJobWithOptions($request, $runtime);
    }

    /**
     * By default, global events are stored in the Singapore region.
     *   * To obtain the permissions to call the API operation, you must submit a ticket.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGlobalEventsStorageRegionResponse GetGlobalEventsStorageRegionResponse
     */
    public function getGlobalEventsStorageRegionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetGlobalEventsStorageRegion',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGlobalEventsStorageRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, global events are stored in the Singapore region.
     *   * To obtain the permissions to call the API operation, you must submit a ticket.
     *   *
     * @return GetGlobalEventsStorageRegionResponse GetGlobalEventsStorageRegionResponse
     */
    public function getGlobalEventsStorageRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGlobalEventsStorageRegionWithOptions($runtime);
    }

    /**
     * This topic describes how to query the status of a sample single-account trail named `trail-test`.
     *   *
     * @param GetTrailStatusRequest $request GetTrailStatusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTrailStatusResponse GetTrailStatusResponse
     */
    public function getTrailStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isOrganizationTrail)) {
            $query['IsOrganizationTrail'] = $request->isOrganizationTrail;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrailStatus',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrailStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to query the status of a sample single-account trail named `trail-test`.
     *   *
     * @param GetTrailStatusRequest $request GetTrailStatusRequest
     *
     * @return GetTrailStatusResponse GetTrailStatusResponse
     */
    public function getTrailStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrailStatusWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to query the historical event delivery tasks created within your Alibaba Cloud account. In this example, a historical event delivery task whose ID is `16602` is returned. This task is used to deliver historical events for the trail named `trail-name` to Log Service.
     *   *
     * @param ListDeliveryHistoryJobsRequest $request ListDeliveryHistoryJobsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeliveryHistoryJobsResponse ListDeliveryHistoryJobsResponse
     */
    public function listDeliveryHistoryJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListDeliveryHistoryJobs',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeliveryHistoryJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to query the historical event delivery tasks created within your Alibaba Cloud account. In this example, a historical event delivery task whose ID is `16602` is returned. This task is used to deliver historical events for the trail named `trail-name` to Log Service.
     *   *
     * @param ListDeliveryHistoryJobsRequest $request ListDeliveryHistoryJobsRequest
     *
     * @return ListDeliveryHistoryJobsResponse ListDeliveryHistoryJobsResponse
     */
    public function listDeliveryHistoryJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeliveryHistoryJobsWithOptions($request, $runtime);
    }

    /**
     * When you call this operation to query event details, you can query the event details at most twice per second.
     *   * > Do not frequently call this operation. You can create a trail to deliver events to Log Service. Then, you can query event details in near real time by using the real-time log consumption feature of Log Service. For more information, see [Create a single-account trail](~~28810~~), [Create a multi-account trail](~~160661~~), and [Overview](~~28997~~).
     *   *
     * @param LookupEventsRequest $request LookupEventsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return LookupEventsResponse LookupEventsResponse
     */
    public function lookupEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lookupAttribute)) {
            $query['LookupAttribute'] = $request->lookupAttribute;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LookupEvents',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LookupEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation to query event details, you can query the event details at most twice per second.
     *   * > Do not frequently call this operation. You can create a trail to deliver events to Log Service. Then, you can query event details in near real time by using the real-time log consumption feature of Log Service. For more information, see [Create a single-account trail](~~28810~~), [Create a multi-account trail](~~160661~~), and [Overview](~~28997~~).
     *   *
     * @param LookupEventsRequest $request LookupEventsRequest
     *
     * @return LookupEventsResponse LookupEventsResponse
     */
    public function lookupEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupEventsWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to enable logging for a sample trail named `trail-test`.
     *   *
     * @param StartLoggingRequest $request StartLoggingRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartLoggingResponse StartLoggingResponse
     */
    public function startLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLogging',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to enable logging for a sample trail named `trail-test`.
     *   *
     * @param StartLoggingRequest $request StartLoggingRequest
     *
     * @return StartLoggingResponse StartLoggingResponse
     */
    public function startLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoggingWithOptions($request, $runtime);
    }

    /**
     * This topic describes how to disable logging for a sample trail named `trail-test`.
     *   *
     * @param StopLoggingRequest $request StopLoggingRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopLoggingResponse StopLoggingResponse
     */
    public function stopLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLogging',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes how to disable logging for a sample trail named `trail-test`.
     *   *
     * @param StopLoggingRequest $request StopLoggingRequest
     *
     * @return StopLoggingResponse StopLoggingResponse
     */
    public function stopLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoggingWithOptions($request, $runtime);
    }

    /**
     * By default, global events are stored in the Singapore region.
     *   * *   To obtain the permissions to call the API operation, you must submit a ticket.
     *   * *   Only the China (Hangzhou) region (cn-hangzhou) and the Singapore region (ap-southeast-1) are supported.
     *   *
     * @param UpdateGlobalEventsStorageRegionRequest $request UpdateGlobalEventsStorageRegionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGlobalEventsStorageRegionResponse UpdateGlobalEventsStorageRegionResponse
     */
    public function updateGlobalEventsStorageRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->storageRegion)) {
            $query['StorageRegion'] = $request->storageRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGlobalEventsStorageRegion',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGlobalEventsStorageRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, global events are stored in the Singapore region.
     *   * *   To obtain the permissions to call the API operation, you must submit a ticket.
     *   * *   Only the China (Hangzhou) region (cn-hangzhou) and the Singapore region (ap-southeast-1) are supported.
     *   *
     * @param UpdateGlobalEventsStorageRegionRequest $request UpdateGlobalEventsStorageRegionRequest
     *
     * @return UpdateGlobalEventsStorageRegionResponse UpdateGlobalEventsStorageRegionResponse
     */
    public function updateGlobalEventsStorageRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGlobalEventsStorageRegionWithOptions($request, $runtime);
    }

    /**
     * This topic shows you how to change the destination Object Storage Service (OSS) bucket of a sample trail named `trail-test` to `audit-log`.
     *   *
     * @param UpdateTrailRequest $request UpdateTrailRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTrailResponse UpdateTrailResponse
     */
    public function updateTrailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventRW)) {
            $query['EventRW'] = $request->eventRW;
        }
        if (!Utils::isUnset($request->maxComputeProjectArn)) {
            $query['MaxComputeProjectArn'] = $request->maxComputeProjectArn;
        }
        if (!Utils::isUnset($request->maxComputeWriteRoleArn)) {
            $query['MaxComputeWriteRoleArn'] = $request->maxComputeWriteRoleArn;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossKeyPrefix)) {
            $query['OssKeyPrefix'] = $request->ossKeyPrefix;
        }
        if (!Utils::isUnset($request->ossWriteRoleArn)) {
            $query['OssWriteRoleArn'] = $request->ossWriteRoleArn;
        }
        if (!Utils::isUnset($request->slsProjectArn)) {
            $query['SlsProjectArn'] = $request->slsProjectArn;
        }
        if (!Utils::isUnset($request->slsWriteRoleArn)) {
            $query['SlsWriteRoleArn'] = $request->slsWriteRoleArn;
        }
        if (!Utils::isUnset($request->trailRegion)) {
            $query['TrailRegion'] = $request->trailRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrail',
            'version'     => '2020-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic shows you how to change the destination Object Storage Service (OSS) bucket of a sample trail named `trail-test` to `audit-log`.
     *   *
     * @param UpdateTrailRequest $request UpdateTrailRequest
     *
     * @return UpdateTrailResponse UpdateTrailResponse
     */
    public function updateTrail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrailWithOptions($request, $runtime);
    }
}

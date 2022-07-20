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
     * @param CreateDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeliveryHistoryJobResponse
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
        $query = [];
        if (!Utils::isUnset($request->eventRW)) {
            $query['EventRW'] = $request->eventRW;
        }
        if (!Utils::isUnset($request->isOrganizationTrail)) {
            $query['IsOrganizationTrail'] = $request->isOrganizationTrail;
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
     * @param GetAccessKeyLastUsedEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAccessKeyLastUsedEventsResponse
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
     * @param GetAccessKeyLastUsedEventsRequest $request
     *
     * @return GetAccessKeyLastUsedEventsResponse
     */
    public function getAccessKeyLastUsedEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedEventsWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessKeyLastUsedInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAccessKeyLastUsedInfoResponse
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
     * @param GetAccessKeyLastUsedInfoRequest $request
     *
     * @return GetAccessKeyLastUsedInfoResponse
     */
    public function getAccessKeyLastUsedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessKeyLastUsedIpsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAccessKeyLastUsedIpsResponse
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
     * @param GetAccessKeyLastUsedIpsRequest $request
     *
     * @return GetAccessKeyLastUsedIpsResponse
     */
    public function getAccessKeyLastUsedIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedIpsWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessKeyLastUsedProductsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAccessKeyLastUsedProductsResponse
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
     * @param GetAccessKeyLastUsedProductsRequest $request
     *
     * @return GetAccessKeyLastUsedProductsResponse
     */
    public function getAccessKeyLastUsedProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedProductsWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessKeyLastUsedResourcesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAccessKeyLastUsedResourcesResponse
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
     * @param GetAccessKeyLastUsedResourcesRequest $request
     *
     * @return GetAccessKeyLastUsedResourcesResponse
     */
    public function getAccessKeyLastUsedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->eventRW)) {
            $query['EventRW'] = $request->eventRW;
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

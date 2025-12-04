<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateAdvancedQueryHistoryRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateAdvancedQueryHistoryResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateAdvancedQueryTemplateRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateAdvancedQueryTemplateResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\CreateTrailResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteAdvancedQueryHistoryRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteAdvancedQueryHistoryResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteAdvancedQueryTemplateRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteAdvancedQueryTemplateResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDataEventSelectorRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDataEventSelectorResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DeleteTrailResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryHistoryResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryTemplateRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryTemplateResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeResourceLifeCycleEventsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeResourceLifeCycleEventsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeScenesRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeScenesResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeSearchTemplatesRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeSearchTemplatesResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeUserAlertCountRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeUserAlertCountResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeUserLogCountRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeUserLogCountResponse;
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
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAdvancedQueryTemplateRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAdvancedQueryTemplateResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDataEventSelectorRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDataEventSelectorResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGlobalEventsStorageRegionResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGovernanceMetricsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetTrailStatusRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetTrailStatusResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventServicesRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventServicesResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\PutDataEventSelectorRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\PutDataEventSelectorResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StartLoggingRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StartLoggingResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StopLoggingRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\StopLoggingResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateAdvancedQueryTemplateRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateAdvancedQueryTemplateResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateGlobalEventsStorageRegionRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateGlobalEventsStorageRegionResponse;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailRequest;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\UpdateTrailResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Actiontrail extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'actiontrail.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'actiontrail.aliyuncs.com',
            'cn-beijing-finance-pop' => 'actiontrail.aliyuncs.com',
            'cn-beijing-gov-1' => 'actiontrail.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'actiontrail.aliyuncs.com',
            'cn-edge-1' => 'actiontrail.aliyuncs.com',
            'cn-fujian' => 'actiontrail.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-finance' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'actiontrail.aliyuncs.com',
            'cn-hangzhou-test-306' => 'actiontrail.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'actiontrail.aliyuncs.com',
            'cn-qingdao-nebula' => 'actiontrail.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'actiontrail.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'actiontrail.aliyuncs.com',
            'cn-shanghai-inner' => 'actiontrail.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-inner' => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'actiontrail.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'actiontrail.aliyuncs.com',
            'cn-wuhan' => 'actiontrail.aliyuncs.com',
            'cn-yushanfang' => 'actiontrail.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'actiontrail.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'actiontrail.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'actiontrail.aliyuncs.com',
            'eu-west-1-oxs' => 'actiontrail.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop' => 'actiontrail.ap-northeast-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建高级查询历史记录.
     *
     * @param request - CreateAdvancedQueryHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAdvancedQueryHistoryResponse
     *
     * @param CreateAdvancedQueryHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAdvancedQueryHistoryResponse
     */
    public function createAdvancedQueryHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->querySql) {
            @$query['QuerySql'] = $request->querySql;
        }

        if (null !== $request->simpleQuery) {
            @$query['SimpleQuery'] = $request->simpleQuery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAdvancedQueryHistory',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAdvancedQueryHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建高级查询历史记录.
     *
     * @param request - CreateAdvancedQueryHistoryRequest
     *
     * @returns CreateAdvancedQueryHistoryResponse
     *
     * @param CreateAdvancedQueryHistoryRequest $request
     *
     * @return CreateAdvancedQueryHistoryResponse
     */
    public function createAdvancedQueryHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedQueryHistoryWithOptions($request, $runtime);
    }

    /**
     * 创建高级查询模板
     *
     * @param request - CreateAdvancedQueryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAdvancedQueryTemplateResponse
     *
     * @param CreateAdvancedQueryTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateAdvancedQueryTemplateResponse
     */
    public function createAdvancedQueryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->simpleQuery) {
            @$query['SimpleQuery'] = $request->simpleQuery;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateSql) {
            @$query['TemplateSql'] = $request->templateSql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAdvancedQueryTemplate',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAdvancedQueryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建高级查询模板
     *
     * @param request - CreateAdvancedQueryTemplateRequest
     *
     * @returns CreateAdvancedQueryTemplateResponse
     *
     * @param CreateAdvancedQueryTemplateRequest $request
     *
     * @return CreateAdvancedQueryTemplateResponse
     */
    public function createAdvancedQueryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedQueryTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a data backfill task.
     *
     * @remarks
     * Limits
     * *   Make sure that you have created a single-account trail to deliver events to Simple Log Service by calling the [CreateTrail](https://help.aliyun.com/document_detail/212313.html) operation.
     * *   Only one data backfill task can run at a time within an Alibaba Cloud account.
     * This topic provides an example on how to create a data backfill task for a trail named `trail-name`.
     *
     * @param request - CreateDeliveryHistoryJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeliveryHistoryJobResponse
     *
     * @param CreateDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeliveryHistoryJobResponse
     */
    public function createDeliveryHistoryJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->trailName) {
            @$query['TrailName'] = $request->trailName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDeliveryHistoryJob',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data backfill task.
     *
     * @remarks
     * Limits
     * *   Make sure that you have created a single-account trail to deliver events to Simple Log Service by calling the [CreateTrail](https://help.aliyun.com/document_detail/212313.html) operation.
     * *   Only one data backfill task can run at a time within an Alibaba Cloud account.
     * This topic provides an example on how to create a data backfill task for a trail named `trail-name`.
     *
     * @param request - CreateDeliveryHistoryJobRequest
     *
     * @returns CreateDeliveryHistoryJobResponse
     *
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
     * Creates a trail. By default, ActionTrail allows you to query events generated within your Alibaba Cloud account in the last 90 days. To query and analyze events generated more than 90 days ago, create a trail to deliver events to Object Storage Service (OSS), Simple Log Service, or MaxCompute.
     *
     * @remarks
     * *Operation description**
     * >By default, a trail that is created by calling an operation is in the Disabled state. You must call the StartLogging operation to enable the trail. This way, ActionTrail can deliver events to the destination cloud service.
     * **Prerequisites**
     * Before you create a trail, make sure that at least one of the following storage configurations is complete:
     * - Deliver events to OSS
     *   - OSS is activated and a bucket is created.
     *
     * - Deliver events to Simple Log Service
     *   - Simple Log Service is activated and a project is created.
     *  >When a trail is created, ActionTrail automatically creates a Logstore named `actiontrail_<Trail name>` in the project. You cannot write data other than the audit data to the Logstore. This ensures the accuracy of the audit data.
     *
     * - Deliver events to MaxCompute
     *   - MaxCompute is activated.
     * >When a trail is created, ActionTrail automatically creates a project named `actiontrail_<Account ID>` on the Projects page. You cannot write data other than the audit data to the project. This ensures the accuracy of the audit data.
     * **Usage Notes**
     * This topic provides an example on how to create a single-account trail named `trail-test` to deliver events to an OSS bucket named `audit-log`.
     *
     * @param request - CreateTrailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrailResponse
     *
     * @param CreateTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTrailResponse
     */
    public function createTrailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventRW) {
            @$query['EventRW'] = $request->eventRW;
        }

        if (null !== $request->isOrganizationTrail) {
            @$query['IsOrganizationTrail'] = $request->isOrganizationTrail;
        }

        if (null !== $request->maxComputeProjectArn) {
            @$query['MaxComputeProjectArn'] = $request->maxComputeProjectArn;
        }

        if (null !== $request->maxComputeWriteRoleArn) {
            @$query['MaxComputeWriteRoleArn'] = $request->maxComputeWriteRoleArn;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossKeyPrefix) {
            @$query['OssKeyPrefix'] = $request->ossKeyPrefix;
        }

        if (null !== $request->ossWriteRoleArn) {
            @$query['OssWriteRoleArn'] = $request->ossWriteRoleArn;
        }

        if (null !== $request->slsProjectArn) {
            @$query['SlsProjectArn'] = $request->slsProjectArn;
        }

        if (null !== $request->slsWriteRoleArn) {
            @$query['SlsWriteRoleArn'] = $request->slsWriteRoleArn;
        }

        if (null !== $request->trailRegion) {
            @$query['TrailRegion'] = $request->trailRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrail',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a trail. By default, ActionTrail allows you to query events generated within your Alibaba Cloud account in the last 90 days. To query and analyze events generated more than 90 days ago, create a trail to deliver events to Object Storage Service (OSS), Simple Log Service, or MaxCompute.
     *
     * @remarks
     * *Operation description**
     * >By default, a trail that is created by calling an operation is in the Disabled state. You must call the StartLogging operation to enable the trail. This way, ActionTrail can deliver events to the destination cloud service.
     * **Prerequisites**
     * Before you create a trail, make sure that at least one of the following storage configurations is complete:
     * - Deliver events to OSS
     *   - OSS is activated and a bucket is created.
     *
     * - Deliver events to Simple Log Service
     *   - Simple Log Service is activated and a project is created.
     *  >When a trail is created, ActionTrail automatically creates a Logstore named `actiontrail_<Trail name>` in the project. You cannot write data other than the audit data to the Logstore. This ensures the accuracy of the audit data.
     *
     * - Deliver events to MaxCompute
     *   - MaxCompute is activated.
     * >When a trail is created, ActionTrail automatically creates a project named `actiontrail_<Account ID>` on the Projects page. You cannot write data other than the audit data to the project. This ensures the accuracy of the audit data.
     * **Usage Notes**
     * This topic provides an example on how to create a single-account trail named `trail-test` to deliver events to an OSS bucket named `audit-log`.
     *
     * @param request - CreateTrailRequest
     *
     * @returns CreateTrailResponse
     *
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
     * 删除高级查询历史记录.
     *
     * @param request - DeleteAdvancedQueryHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAdvancedQueryHistoryResponse
     *
     * @param DeleteAdvancedQueryHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAdvancedQueryHistoryResponse
     */
    public function deleteAdvancedQueryHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAdvancedQueryHistory',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAdvancedQueryHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除高级查询历史记录.
     *
     * @param request - DeleteAdvancedQueryHistoryRequest
     *
     * @returns DeleteAdvancedQueryHistoryResponse
     *
     * @param DeleteAdvancedQueryHistoryRequest $request
     *
     * @return DeleteAdvancedQueryHistoryResponse
     */
    public function deleteAdvancedQueryHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdvancedQueryHistoryWithOptions($request, $runtime);
    }

    /**
     * 删除高级查询模板
     *
     * @param request - DeleteAdvancedQueryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAdvancedQueryTemplateResponse
     *
     * @param DeleteAdvancedQueryTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAdvancedQueryTemplateResponse
     */
    public function deleteAdvancedQueryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAdvancedQueryTemplate',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAdvancedQueryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除高级查询模板
     *
     * @param request - DeleteAdvancedQueryTemplateRequest
     *
     * @returns DeleteAdvancedQueryTemplateResponse
     *
     * @param DeleteAdvancedQueryTemplateRequest $request
     *
     * @return DeleteAdvancedQueryTemplateResponse
     */
    public function deleteAdvancedQueryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdvancedQueryTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除数据事件选择器.
     *
     * @param request - DeleteDataEventSelectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataEventSelectorResponse
     *
     * @param DeleteDataEventSelectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDataEventSelectorResponse
     */
    public function deleteDataEventSelectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->trailName) {
            @$query['TrailName'] = $request->trailName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataEventSelector',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataEventSelectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据事件选择器.
     *
     * @param request - DeleteDataEventSelectorRequest
     *
     * @returns DeleteDataEventSelectorResponse
     *
     * @param DeleteDataEventSelectorRequest $request
     *
     * @return DeleteDataEventSelectorResponse
     */
    public function deleteDataEventSelector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataEventSelectorWithOptions($request, $runtime);
    }

    /**
     * Deletes a data backfill task.
     *
     * @remarks
     * This topic describes how to delete a data backfill task whose ID is `16602`.
     *
     * @param request - DeleteDeliveryHistoryJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeliveryHistoryJobResponse
     *
     * @param DeleteDeliveryHistoryJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeliveryHistoryJobResponse
     */
    public function deleteDeliveryHistoryJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeliveryHistoryJob',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data backfill task.
     *
     * @remarks
     * This topic describes how to delete a data backfill task whose ID is `16602`.
     *
     * @param request - DeleteDeliveryHistoryJobRequest
     *
     * @returns DeleteDeliveryHistoryJobResponse
     *
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
     * Deletes a trail.
     *
     * @remarks
     * This topic describes how to delete a sample trail named `trail-test`.
     *
     * @param request - DeleteTrailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrailResponse
     *
     * @param DeleteTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTrailResponse
     */
    public function deleteTrailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrail',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a trail.
     *
     * @remarks
     * This topic describes how to delete a sample trail named `trail-test`.
     *
     * @param request - DeleteTrailRequest
     *
     * @returns DeleteTrailResponse
     *
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
     * 查询高级查询历史记录.
     *
     * @param request - DescribeAdvancedQueryHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvancedQueryHistoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAdvancedQueryHistoryResponse
     */
    public function describeAdvancedQueryHistoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAdvancedQueryHistory',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvancedQueryHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询高级查询历史记录.
     *
     * @returns DescribeAdvancedQueryHistoryResponse
     *
     * @return DescribeAdvancedQueryHistoryResponse
     */
    public function describeAdvancedQueryHistory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvancedQueryHistoryWithOptions($runtime);
    }

    /**
     * 查询高级查询模板
     *
     * @param request - DescribeAdvancedQueryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdvancedQueryTemplateResponse
     *
     * @param DescribeAdvancedQueryTemplateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAdvancedQueryTemplateResponse
     */
    public function describeAdvancedQueryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdvancedQueryTemplate',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdvancedQueryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询高级查询模板
     *
     * @param request - DescribeAdvancedQueryTemplateRequest
     *
     * @returns DescribeAdvancedQueryTemplateResponse
     *
     * @param DescribeAdvancedQueryTemplateRequest $request
     *
     * @return DescribeAdvancedQueryTemplateResponse
     */
    public function describeAdvancedQueryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvancedQueryTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the Alibaba Cloud regions that are supported by ActionTrail.
     *
     * @remarks
     * For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-07-06',
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
     * Queries the Alibaba Cloud regions that are supported by ActionTrail.
     *
     * @remarks
     * For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * 列举资源生命周期事件.
     *
     * @param request - DescribeResourceLifeCycleEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceLifeCycleEventsResponse
     *
     * @param DescribeResourceLifeCycleEventsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeResourceLifeCycleEventsResponse
     */
    public function describeResourceLifeCycleEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceLifeCycleEvents',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceLifeCycleEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举资源生命周期事件.
     *
     * @param request - DescribeResourceLifeCycleEventsRequest
     *
     * @returns DescribeResourceLifeCycleEventsResponse
     *
     * @param DescribeResourceLifeCycleEventsRequest $request
     *
     * @return DescribeResourceLifeCycleEventsResponse
     */
    public function describeResourceLifeCycleEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLifeCycleEventsWithOptions($request, $runtime);
    }

    /**
     * 查询所有场景.
     *
     * @param request - DescribeScenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScenesResponse
     *
     * @param DescribeScenesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeScenesResponse
     */
    public function describeScenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->searchCode) {
            @$query['SearchCode'] = $request->searchCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScenes',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有场景.
     *
     * @param request - DescribeScenesRequest
     *
     * @returns DescribeScenesResponse
     *
     * @param DescribeScenesRequest $request
     *
     * @return DescribeScenesResponse
     */
    public function describeScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScenesWithOptions($request, $runtime);
    }

    /**
     * 列举所有模版.
     *
     * @param request - DescribeSearchTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSearchTemplatesResponse
     *
     * @param DescribeSearchTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSearchTemplatesResponse
     */
    public function describeSearchTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSearchTemplates',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSearchTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举所有模版.
     *
     * @param request - DescribeSearchTemplatesRequest
     *
     * @returns DescribeSearchTemplatesResponse
     *
     * @param DescribeSearchTemplatesRequest $request
     *
     * @return DescribeSearchTemplatesResponse
     */
    public function describeSearchTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSearchTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries created trails.
     *
     * @remarks
     * This topic shows you how to query the information about the single-account trails within an Alibaba Cloud account. In this example, the information about a trail named `test-4` is returned.
     *
     * @param request - DescribeTrailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrailsResponse
     *
     * @param DescribeTrailsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTrailsResponse
     */
    public function describeTrailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeOrganizationTrail) {
            @$query['IncludeOrganizationTrail'] = $request->includeOrganizationTrail;
        }

        if (null !== $request->includeShadowTrails) {
            @$query['IncludeShadowTrails'] = $request->includeShadowTrails;
        }

        if (null !== $request->nameList) {
            @$query['NameList'] = $request->nameList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrails',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries created trails.
     *
     * @remarks
     * This topic shows you how to query the information about the single-account trails within an Alibaba Cloud account. In this example, the information about a trail named `test-4` is returned.
     *
     * @param request - DescribeTrailsRequest
     *
     * @returns DescribeTrailsResponse
     *
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
     * 查询用户告警量.
     *
     * @param request - DescribeUserAlertCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAlertCountResponse
     *
     * @param DescribeUserAlertCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserAlertCountResponse
     */
    public function describeUserAlertCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserAlertCount',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserAlertCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户告警量.
     *
     * @param request - DescribeUserAlertCountRequest
     *
     * @returns DescribeUserAlertCountResponse
     *
     * @param DescribeUserAlertCountRequest $request
     *
     * @return DescribeUserAlertCountResponse
     */
    public function describeUserAlertCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAlertCountWithOptions($request, $runtime);
    }

    /**
     * 查询用户日志量.
     *
     * @param request - DescribeUserLogCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserLogCountResponse
     *
     * @param DescribeUserLogCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserLogCountResponse
     */
    public function describeUserLogCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserLogCount',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户日志量.
     *
     * @param request - DescribeUserLogCountRequest
     *
     * @returns DescribeUserLogCountResponse
     *
     * @param DescribeUserLogCountRequest $request
     *
     * @return DescribeUserLogCountResponse
     */
    public function describeUserLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogCountWithOptions($request, $runtime);
    }

    /**
     * Enables the Insights feature.
     *
     * @param request - EnableInsightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInsightResponse
     *
     * @param EnableInsightRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EnableInsightResponse
     */
    public function enableInsightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->insightType) {
            @$query['InsightType'] = $request->insightType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInsight',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInsightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Insights feature.
     *
     * @param request - EnableInsightRequest
     *
     * @returns EnableInsightResponse
     *
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
     * Queries the information about the most recent events that are generated when a specified AccessKey pair is called to access Alibaba Cloud services.
     *
     * @remarks
     * You can call this operation to query only the information about the most recent events that are generated within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. For more information about supported events, see [Alibaba Cloud services and events that are supported by the AccessKey pair audit feature](https://help.aliyun.com/document_detail/419214.html). Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedEventsResponse
     *
     * @param GetAccessKeyLastUsedEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAccessKeyLastUsedEventsResponse
     */
    public function getAccessKeyLastUsedEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsedEvents',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the most recent events that are generated when a specified AccessKey pair is called to access Alibaba Cloud services.
     *
     * @remarks
     * You can call this operation to query only the information about the most recent events that are generated within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. For more information about supported events, see [Alibaba Cloud services and events that are supported by the AccessKey pair audit feature](https://help.aliyun.com/document_detail/419214.html). Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedEventsRequest
     *
     * @returns GetAccessKeyLastUsedEventsResponse
     *
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
     * Queries the information about the most recent call of a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about the most recent call of a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedInfoResponse
     *
     * @param GetAccessKeyLastUsedInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAccessKeyLastUsedInfoResponse
     */
    public function getAccessKeyLastUsedInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsedInfo',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the most recent call of a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about the most recent call of a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedInfoRequest
     *
     * @returns GetAccessKeyLastUsedInfoResponse
     *
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
     * Queries the information about the IP addresses that are most recently used when an AccessKey pair is called to access Alibaba Cloud services.
     *
     * @remarks
     * You can call this operation to query only the information about the IP addresses that are most recently used within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedIpsResponse
     *
     * @param GetAccessKeyLastUsedIpsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAccessKeyLastUsedIpsResponse
     */
    public function getAccessKeyLastUsedIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsedIps',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the IP addresses that are most recently used when an AccessKey pair is called to access Alibaba Cloud services.
     *
     * @remarks
     * You can call this operation to query only the information about the IP addresses that are most recently used within 400 days after February 1, 2022 when a specified AccessKey pair is called to access Alibaba Cloud services. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedIpsRequest
     *
     * @returns GetAccessKeyLastUsedIpsResponse
     *
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
     * Queries the information about the Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedProductsResponse
     *
     * @param GetAccessKeyLastUsedProductsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAccessKeyLastUsedProductsResponse
     */
    public function getAccessKeyLastUsedProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsedProducts',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about Alibaba Cloud services that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedProductsRequest
     *
     * @returns GetAccessKeyLastUsedProductsResponse
     *
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
     * Queries the information about the resources that are most recently accessed by using a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about resources that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedResourcesResponse
     *
     * @param GetAccessKeyLastUsedResourcesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAccessKeyLastUsedResourcesResponse
     */
    public function getAccessKeyLastUsedResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsedResources',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the resources that are most recently accessed by using a specified AccessKey pair.
     *
     * @remarks
     * You can call this operation to query only the information about resources that are most recently accessed by using a specified AccessKey pair within 400 days after February 1, 2022. Data is updated at 1-hour intervals, which can cause query latency. We recommend that you do not change an AccessKey pair unless required.
     *
     * @param request - GetAccessKeyLastUsedResourcesRequest
     *
     * @returns GetAccessKeyLastUsedResourcesResponse
     *
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
     * 查询单个高级查询模板
     *
     * @param request - GetAdvancedQueryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAdvancedQueryTemplateResponse
     *
     * @param GetAdvancedQueryTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAdvancedQueryTemplateResponse
     */
    public function getAdvancedQueryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAdvancedQueryTemplate',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAdvancedQueryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个高级查询模板
     *
     * @param request - GetAdvancedQueryTemplateRequest
     *
     * @returns GetAdvancedQueryTemplateResponse
     *
     * @param GetAdvancedQueryTemplateRequest $request
     *
     * @return GetAdvancedQueryTemplateResponse
     */
    public function getAdvancedQueryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdvancedQueryTemplateWithOptions($request, $runtime);
    }

    /**
     * 查询事件选择器.
     *
     * @param request - GetDataEventSelectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataEventSelectorResponse
     *
     * @param GetDataEventSelectorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDataEventSelectorResponse
     */
    public function getDataEventSelectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->trailName) {
            @$query['TrailName'] = $request->trailName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataEventSelector',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataEventSelectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询事件选择器.
     *
     * @param request - GetDataEventSelectorRequest
     *
     * @returns GetDataEventSelectorResponse
     *
     * @param GetDataEventSelectorRequest $request
     *
     * @return GetDataEventSelectorResponse
     */
    public function getDataEventSelector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataEventSelectorWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a data backfill task.
     *
     * @remarks
     * This topic provides an example on how to query the details of a data backfill task whose ID is `16602`. The return result shows that historical events for a trail named `trail-name` are delivered to Simple Log Service and the task is complete.
     *
     * @param request - GetDeliveryHistoryJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeliveryHistoryJobResponse
     *
     * @param GetDeliveryHistoryJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeliveryHistoryJobResponse
     */
    public function getDeliveryHistoryJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeliveryHistoryJob',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeliveryHistoryJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data backfill task.
     *
     * @remarks
     * This topic provides an example on how to query the details of a data backfill task whose ID is `16602`. The return result shows that historical events for a trail named `trail-name` are delivered to Simple Log Service and the task is complete.
     *
     * @param request - GetDeliveryHistoryJobRequest
     *
     * @returns GetDeliveryHistoryJobResponse
     *
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
     * Queries the region where global events are stored.
     *
     * @remarks
     * By default, global events are stored in the Singapore region.
     * To obtain the permissions to call the API operation, you must submit a ticket.
     *
     * @param request - GetGlobalEventsStorageRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGlobalEventsStorageRegionResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetGlobalEventsStorageRegionResponse
     */
    public function getGlobalEventsStorageRegionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetGlobalEventsStorageRegion',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGlobalEventsStorageRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the region where global events are stored.
     *
     * @remarks
     * By default, global events are stored in the Singapore region.
     * To obtain the permissions to call the API operation, you must submit a ticket.
     *
     * @returns GetGlobalEventsStorageRegionResponse
     *
     * @return GetGlobalEventsStorageRegionResponse
     */
    public function getGlobalEventsStorageRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGlobalEventsStorageRegionWithOptions($runtime);
    }

    /**
     * 操作审计成熟度查询接口.
     *
     * @param request - GetGovernanceMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGovernanceMetricsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetGovernanceMetricsResponse
     */
    public function getGovernanceMetricsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetGovernanceMetrics',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGovernanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 操作审计成熟度查询接口.
     *
     * @returns GetGovernanceMetricsResponse
     *
     * @return GetGovernanceMetricsResponse
     */
    public function getGovernanceMetrics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceMetricsWithOptions($runtime);
    }

    /**
     * Queries the status of a trail.
     *
     * @remarks
     * This topic describes how to query the status of a sample single-account trail named `trail-test`.
     *
     * @param request - GetTrailStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrailStatusResponse
     *
     * @param GetTrailStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTrailStatusResponse
     */
    public function getTrailStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isOrganizationTrail) {
            @$query['IsOrganizationTrail'] = $request->isOrganizationTrail;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrailStatus',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTrailStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a trail.
     *
     * @remarks
     * This topic describes how to query the status of a sample single-account trail named `trail-test`.
     *
     * @param request - GetTrailStatusRequest
     *
     * @returns GetTrailStatusResponse
     *
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
     * 批量查询事件选择器.
     *
     * @param request - ListDataEventSelectorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataEventSelectorsResponse
     *
     * @param ListDataEventSelectorsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataEventSelectorsResponse
     */
    public function listDataEventSelectorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataEventSelectors',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataEventSelectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询事件选择器.
     *
     * @param request - ListDataEventSelectorsRequest
     *
     * @returns ListDataEventSelectorsResponse
     *
     * @param ListDataEventSelectorsRequest $request
     *
     * @return ListDataEventSelectorsResponse
     */
    public function listDataEventSelectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataEventSelectorsWithOptions($request, $runtime);
    }

    /**
     * 查询数据事件支持的服务与事件名称.
     *
     * @param request - ListDataEventServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataEventServicesResponse
     *
     * @param ListDataEventServicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataEventServicesResponse
     */
    public function listDataEventServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataEventServices',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataEventServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据事件支持的服务与事件名称.
     *
     * @param request - ListDataEventServicesRequest
     *
     * @returns ListDataEventServicesResponse
     *
     * @param ListDataEventServicesRequest $request
     *
     * @return ListDataEventServicesResponse
     */
    public function listDataEventServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataEventServicesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data backfill tasks.
     *
     * @remarks
     * This topic provides an example on how to query a list of data backfill tasks. The returned result shows that a data backfill task with the ID `16602` is used to deliver historical events for a trail named `trail-name` to Simple Log Service.
     *
     * @param request - ListDeliveryHistoryJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeliveryHistoryJobsResponse
     *
     * @param ListDeliveryHistoryJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeliveryHistoryJobsResponse
     */
    public function listDeliveryHistoryJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListDeliveryHistoryJobs',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeliveryHistoryJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of data backfill tasks.
     *
     * @remarks
     * This topic provides an example on how to query a list of data backfill tasks. The returned result shows that a data backfill task with the ID `16602` is used to deliver historical events for a trail named `trail-name` to Simple Log Service.
     *
     * @param request - ListDeliveryHistoryJobsRequest
     *
     * @returns ListDeliveryHistoryJobsResponse
     *
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
     * Queries event details.
     *
     * @remarks
     * When you call this operation to query event details, you can query the event details at most twice per second.
     * > Do not frequently call this operation. You can create a trail to deliver events to Log Service. Then, you can query event details in near real time by using the real-time log consumption feature of Log Service. For more information, see [Create a single-account trail](https://help.aliyun.com/document_detail/28810.html), [Create a multi-account trail](https://help.aliyun.com/document_detail/160661.html), and [Overview](https://help.aliyun.com/document_detail/28997.html).
     *
     * @param request - LookupEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LookupEventsResponse
     *
     * @param LookupEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LookupEventsResponse
     */
    public function lookupEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lookupAttribute) {
            @$query['LookupAttribute'] = $request->lookupAttribute;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LookupEvents',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LookupEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event details.
     *
     * @remarks
     * When you call this operation to query event details, you can query the event details at most twice per second.
     * > Do not frequently call this operation. You can create a trail to deliver events to Log Service. Then, you can query event details in near real time by using the real-time log consumption feature of Log Service. For more information, see [Create a single-account trail](https://help.aliyun.com/document_detail/28810.html), [Create a multi-account trail](https://help.aliyun.com/document_detail/160661.html), and [Overview](https://help.aliyun.com/document_detail/28997.html).
     *
     * @param request - LookupEventsRequest
     *
     * @returns LookupEventsResponse
     *
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
     * 创建事件选择器.
     *
     * @param request - PutDataEventSelectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDataEventSelectorResponse
     *
     * @param PutDataEventSelectorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutDataEventSelectorResponse
     */
    public function putDataEventSelectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventSelectors) {
            @$query['EventSelectors'] = $request->eventSelectors;
        }

        if (null !== $request->isTrailAllRegion) {
            @$query['IsTrailAllRegion'] = $request->isTrailAllRegion;
        }

        if (null !== $request->trailName) {
            @$query['TrailName'] = $request->trailName;
        }

        if (null !== $request->trailRegionIds) {
            @$query['TrailRegionIds'] = $request->trailRegionIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDataEventSelector',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDataEventSelectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建事件选择器.
     *
     * @param request - PutDataEventSelectorRequest
     *
     * @returns PutDataEventSelectorResponse
     *
     * @param PutDataEventSelectorRequest $request
     *
     * @return PutDataEventSelectorResponse
     */
    public function putDataEventSelector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDataEventSelectorWithOptions($request, $runtime);
    }

    /**
     * Enables a trail to deliver events to an Object Storage Service (OSS) bucket or a Simple Log Service Logstore.
     *
     * @remarks
     * This topic describes how to enable logging for a sample trail named `trail-test`.
     *
     * @param request - StartLoggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartLoggingResponse
     *
     * @param StartLoggingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartLoggingResponse
     */
    public function startLoggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartLogging',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a trail to deliver events to an Object Storage Service (OSS) bucket or a Simple Log Service Logstore.
     *
     * @remarks
     * This topic describes how to enable logging for a sample trail named `trail-test`.
     *
     * @param request - StartLoggingRequest
     *
     * @returns StartLoggingResponse
     *
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
     * Disables a trail to stop the delivery of events to an Object Storage Service (OSS) bucket or a  Simple Log Service Logstore.
     *
     * @remarks
     * This topic describes how to disable logging for a sample trail named `trail-test`.
     *
     * @param request - StopLoggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopLoggingResponse
     *
     * @param StopLoggingRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopLoggingResponse
     */
    public function stopLoggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopLogging',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a trail to stop the delivery of events to an Object Storage Service (OSS) bucket or a  Simple Log Service Logstore.
     *
     * @remarks
     * This topic describes how to disable logging for a sample trail named `trail-test`.
     *
     * @param request - StopLoggingRequest
     *
     * @returns StopLoggingResponse
     *
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
     * 更新高级查询模板
     *
     * @param request - UpdateAdvancedQueryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAdvancedQueryTemplateResponse
     *
     * @param UpdateAdvancedQueryTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAdvancedQueryTemplateResponse
     */
    public function updateAdvancedQueryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->simpleQuery) {
            @$query['SimpleQuery'] = $request->simpleQuery;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateSql) {
            @$query['TemplateSql'] = $request->templateSql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAdvancedQueryTemplate',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAdvancedQueryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新高级查询模板
     *
     * @param request - UpdateAdvancedQueryTemplateRequest
     *
     * @returns UpdateAdvancedQueryTemplateResponse
     *
     * @param UpdateAdvancedQueryTemplateRequest $request
     *
     * @return UpdateAdvancedQueryTemplateResponse
     */
    public function updateAdvancedQueryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdvancedQueryTemplateWithOptions($request, $runtime);
    }

    /**
     * Specifies the region where you want to store global events.
     *
     * @remarks
     * By default, global events are stored in the Singapore region.
     * *   To obtain the permissions to call the API operation, you must submit a ticket.
     * *   Only the China (Hangzhou) region (cn-hangzhou) and the Singapore region (ap-southeast-1) are supported.
     *
     * @param request - UpdateGlobalEventsStorageRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGlobalEventsStorageRegionResponse
     *
     * @param UpdateGlobalEventsStorageRegionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateGlobalEventsStorageRegionResponse
     */
    public function updateGlobalEventsStorageRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->storageRegion) {
            @$query['StorageRegion'] = $request->storageRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGlobalEventsStorageRegion',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGlobalEventsStorageRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies the region where you want to store global events.
     *
     * @remarks
     * By default, global events are stored in the Singapore region.
     * *   To obtain the permissions to call the API operation, you must submit a ticket.
     * *   Only the China (Hangzhou) region (cn-hangzhou) and the Singapore region (ap-southeast-1) are supported.
     *
     * @param request - UpdateGlobalEventsStorageRegionRequest
     *
     * @returns UpdateGlobalEventsStorageRegionResponse
     *
     * @param UpdateGlobalEventsStorageRegionRequest $request
     *
     * @return UpdateGlobalEventsStorageRegionResponse
     */
    public function updateGlobalEventsStorageRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGlobalEventsStorageRegionWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a trail.
     *
     * @remarks
     * This topic shows you how to change the destination Object Storage Service (OSS) bucket of a sample trail named `trail-test` to `audit-log`.
     *
     * @param request - UpdateTrailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrailResponse
     *
     * @param UpdateTrailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTrailResponse
     */
    public function updateTrailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventRW) {
            @$query['EventRW'] = $request->eventRW;
        }

        if (null !== $request->maxComputeProjectArn) {
            @$query['MaxComputeProjectArn'] = $request->maxComputeProjectArn;
        }

        if (null !== $request->maxComputeWriteRoleArn) {
            @$query['MaxComputeWriteRoleArn'] = $request->maxComputeWriteRoleArn;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossKeyPrefix) {
            @$query['OssKeyPrefix'] = $request->ossKeyPrefix;
        }

        if (null !== $request->ossWriteRoleArn) {
            @$query['OssWriteRoleArn'] = $request->ossWriteRoleArn;
        }

        if (null !== $request->slsProjectArn) {
            @$query['SlsProjectArn'] = $request->slsProjectArn;
        }

        if (null !== $request->slsWriteRoleArn) {
            @$query['SlsWriteRoleArn'] = $request->slsWriteRoleArn;
        }

        if (null !== $request->trailRegion) {
            @$query['TrailRegion'] = $request->trailRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTrail',
            'version' => '2020-07-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTrailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a trail.
     *
     * @remarks
     * This topic shows you how to change the destination Object Storage Service (OSS) bucket of a sample trail named `trail-test` to `audit-log`.
     *
     * @param request - UpdateTrailRequest
     *
     * @returns UpdateTrailResponse
     *
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

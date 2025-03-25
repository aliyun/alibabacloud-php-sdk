<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ApplyComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsDataSourceRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsDataSourceResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsFetchMetadataJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsJobRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreatePackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreatePackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateProjectRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateProjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateRoleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateRoleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteMmsDataSourceResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeEffectivePlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaScheduleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsAsyncTaskResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDataSourceRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDataSourceResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDbResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsFetchMetadataJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsPartitionResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTaskResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRolePolicyResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTrustedProjectsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\KillJobsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\KillJobsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobSnapshotInfosRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobSnapshotInfosResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDataSourcesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDataSourcesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDbsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDbsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDbsShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsJobsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsJobsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTaskLogsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTasksRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTasksResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectUsersResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTunnelQuotaTimerResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersByRoleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\RetryMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\StartMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\StopMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateMmsDataSourceRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateMmsDataSourceResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdatePackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdatePackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectDefaultQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectDefaultQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectIpWhiteListRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectIpWhiteListResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaScheduleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MaxCompute extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'maxcompute.aliyuncs.com',
            'ap-northeast-2-pop' => 'maxcompute.aliyuncs.com',
            'ap-south-1' => 'maxcompute.aliyuncs.com',
            'ap-southeast-1' => 'maxcompute.aliyuncs.com',
            'ap-southeast-2' => 'maxcompute.aliyuncs.com',
            'ap-southeast-3' => 'maxcompute.aliyuncs.com',
            'ap-southeast-5' => 'maxcompute.aliyuncs.com',
            'cn-beijing' => 'maxcompute.aliyuncs.com',
            'cn-beijing-finance-1' => 'maxcompute.aliyuncs.com',
            'cn-beijing-finance-pop' => 'maxcompute.aliyuncs.com',
            'cn-beijing-gov-1' => 'maxcompute.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'maxcompute.aliyuncs.com',
            'cn-chengdu' => 'maxcompute.aliyuncs.com',
            'cn-edge-1' => 'maxcompute.aliyuncs.com',
            'cn-fujian' => 'maxcompute.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-finance' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-test-306' => 'maxcompute.aliyuncs.com',
            'cn-hongkong' => 'maxcompute.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'maxcompute.aliyuncs.com',
            'cn-huhehaote' => 'maxcompute.aliyuncs.com',
            'cn-north-2-gov-1' => 'maxcompute.aliyuncs.com',
            'cn-qingdao' => 'maxcompute.aliyuncs.com',
            'cn-qingdao-nebula' => 'maxcompute.aliyuncs.com',
            'cn-shanghai' => 'maxcompute.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'maxcompute.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'maxcompute.aliyuncs.com',
            'cn-shanghai-finance-1' => 'maxcompute.aliyuncs.com',
            'cn-shanghai-inner' => 'maxcompute.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-inner' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'maxcompute.aliyuncs.com',
            'cn-wuhan' => 'maxcompute.aliyuncs.com',
            'cn-yushanfang' => 'maxcompute.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'maxcompute.aliyuncs.com',
            'cn-zhangjiakou' => 'maxcompute.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'maxcompute.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'maxcompute.aliyuncs.com',
            'eu-central-1' => 'maxcompute.aliyuncs.com',
            'eu-west-1' => 'maxcompute.aliyuncs.com',
            'eu-west-1-oxs' => 'maxcompute.aliyuncs.com',
            'me-east-1' => 'maxcompute.aliyuncs.com',
            'rus-west-1-pop' => 'maxcompute.aliyuncs.com',
            'us-east-1' => 'maxcompute.aliyuncs.com',
            'us-west-1' => 'maxcompute.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('maxcompute', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Activate a Quota Plan Immediately.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ApplyComputeQuotaPlanResponse ApplyComputeQuotaPlanResponse
     */
    public function applyComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ApplyComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan/' . OpenApiUtilClient::getEncodeParam($planName) . '/apply',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ApplyComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Activate a Quota Plan Immediately.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string $nickname
     * @param string $planName
     *
     * @return ApplyComputeQuotaPlanResponse ApplyComputeQuotaPlanResponse
     */
    public function applyComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * @summary Create MaxCompute ComputeQuotaPlan.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                        $nickname
     * @param CreateComputeQuotaPlanRequest $request  CreateComputeQuotaPlanRequest
     * @param string[]                      $headers  map
     * @param RuntimeOptions                $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateComputeQuotaPlanResponse CreateComputeQuotaPlanResponse
     */
    public function createComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->quota)) {
            $body['quota'] = $request->quota;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create MaxCompute ComputeQuotaPlan.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                        $nickname
     * @param CreateComputeQuotaPlanRequest $request  CreateComputeQuotaPlanRequest
     *
     * @return CreateComputeQuotaPlanResponse CreateComputeQuotaPlanResponse
     */
    public function createComputeQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param CreateMmsDataSourceRequest $request CreateMmsDataSourceRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMmsDataSourceResponse CreateMmsDataSourceResponse
     */
    public function createMmsDataSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->networklink)) {
            $body['networklink'] = $request->networklink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMmsDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateMmsDataSourceRequest $request CreateMmsDataSourceRequest
     *
     * @return CreateMmsDataSourceResponse CreateMmsDataSourceResponse
     */
    public function createMmsDataSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsDataSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建数据源的更新元数据操作
     *  *
     * @param string         $sourceId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateMmsFetchMetadataJobResponse CreateMmsFetchMetadataJobResponse
     */
    public function createMmsFetchMetadataJobWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateMmsFetchMetadataJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/scans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMmsFetchMetadataJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMmsFetchMetadataJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建数据源的更新元数据操作
     *  *
     * @param string $sourceId
     *
     * @return CreateMmsFetchMetadataJobResponse CreateMmsFetchMetadataJobResponse
     */
    public function createMmsFetchMetadataJob($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsFetchMetadataJobWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * @summary 创建迁移任务
     *  *
     * @param string              $sourceId
     * @param CreateMmsJobRequest $request  CreateMmsJobRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateMmsJobResponse CreateMmsJobResponse
     */
    public function createMmsJobWithOptions($sourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->columnMapping)) {
            $body['columnMapping'] = $request->columnMapping;
        }
        if (!Utils::isUnset($request->dstDbName)) {
            $body['dstDbName'] = $request->dstDbName;
        }
        if (!Utils::isUnset($request->dstSchemaName)) {
            $body['dstSchemaName'] = $request->dstSchemaName;
        }
        if (!Utils::isUnset($request->enableVerification)) {
            $body['enableVerification'] = $request->enableVerification;
        }
        if (!Utils::isUnset($request->eta)) {
            $body['eta'] = $request->eta;
        }
        if (!Utils::isUnset($request->increment)) {
            $body['increment'] = $request->increment;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->others)) {
            $body['others'] = $request->others;
        }
        if (!Utils::isUnset($request->partitionFilters)) {
            $body['partitionFilters'] = $request->partitionFilters;
        }
        if (!Utils::isUnset($request->partitions)) {
            $body['partitions'] = $request->partitions;
        }
        if (!Utils::isUnset($request->schemaOnly)) {
            $body['schemaOnly'] = $request->schemaOnly;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['sourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $body['sourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->srcDbName)) {
            $body['srcDbName'] = $request->srcDbName;
        }
        if (!Utils::isUnset($request->srcSchemaName)) {
            $body['srcSchemaName'] = $request->srcSchemaName;
        }
        if (!Utils::isUnset($request->tableBlackList)) {
            $body['tableBlackList'] = $request->tableBlackList;
        }
        if (!Utils::isUnset($request->tableMapping)) {
            $body['tableMapping'] = $request->tableMapping;
        }
        if (!Utils::isUnset($request->tableWhiteList)) {
            $body['tableWhiteList'] = $request->tableWhiteList;
        }
        if (!Utils::isUnset($request->tables)) {
            $body['tables'] = $request->tables;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['taskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建迁移任务
     *  *
     * @param string              $sourceId
     * @param CreateMmsJobRequest $request  CreateMmsJobRequest
     *
     * @return CreateMmsJobResponse CreateMmsJobResponse
     */
    public function createMmsJob($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsJobWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a package.
     *  *
     * @param string               $projectName
     * @param CreatePackageRequest $request     CreatePackageRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreatePackageResponse CreatePackageResponse
     */
    public function createPackageWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isInstall)) {
            $query['isInstall'] = $request->isInstall;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreatePackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePackageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a package.
     *  *
     * @param string               $projectName
     * @param CreatePackageRequest $request     CreatePackageRequest
     *
     * @return CreatePackageResponse CreatePackageResponse
     */
    public function createPackage($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPackageWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a MaxCompute project.
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a MaxCompute project.
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a quota plan.
     *  *
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request  CreateQuotaPlanRequest
     * @param string[]               $headers  map
     * @param RuntimeOptions         $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateQuotaPlanResponse CreateQuotaPlanResponse
     */
    public function createQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a quota plan.
     *  *
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request  CreateQuotaPlanRequest
     *
     * @return CreateQuotaPlanResponse CreateQuotaPlanResponse
     */
    public function createQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a role at the MaxCompute project level.
     *  *
     * @param string            $projectName
     * @param CreateRoleRequest $request     CreateRoleRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRoleWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a role at the MaxCompute project level.
     *  *
     * @param string            $projectName
     * @param CreateRoleRequest $request     CreateRoleRequest
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRole($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Delete MaxCompute compute quota plan.
     *  *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteComputeQuotaPlanResponse DeleteComputeQuotaPlanResponse
     */
    public function deleteComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete MaxCompute compute quota plan.
     *  *
     * @param string $nickname
     * @param string $planName
     *
     * @return DeleteComputeQuotaPlanResponse DeleteComputeQuotaPlanResponse
     */
    public function deleteComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * @summary 删除数据源
     *  *
     * @param string         $sourceId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteMmsDataSourceResponse DeleteMmsDataSourceResponse
     */
    public function deleteMmsDataSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMmsDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除数据源
     *  *
     * @param string $sourceId
     *
     * @return DeleteMmsDataSourceResponse DeleteMmsDataSourceResponse
     */
    public function deleteMmsDataSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMmsDataSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteMmsJobResponse DeleteMmsJobResponse
     */
    public function deleteMmsJobWithOptions($sourceId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $jobId
     *
     * @return DeleteMmsJobResponse DeleteMmsJobResponse
     */
    public function deleteMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @summary Deletes a quota plan.
     *  *
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request  DeleteQuotaPlanRequest
     * @param string[]               $headers  map
     * @param RuntimeOptions         $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteQuotaPlanResponse DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a quota plan.
     *  *
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request  DeleteQuotaPlanRequest
     *
     * @return DeleteQuotaPlanResponse DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @summary GetComputeEffectivePlan.
     *  *
     * @param string         $nickname
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetComputeEffectivePlanResponse GetComputeEffectivePlanResponse
     */
    public function getComputeEffectivePlanWithOptions($nickname, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetComputeEffectivePlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeEffectivePlan/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetComputeEffectivePlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetComputeEffectivePlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary GetComputeEffectivePlan.
     *  *
     * @param string $nickname
     *
     * @return GetComputeEffectivePlanResponse GetComputeEffectivePlanResponse
     */
    public function getComputeEffectivePlan($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeEffectivePlanWithOptions($nickname, $headers, $runtime);
    }

    /**
     * @summary Get detailed information of a single compute quota plan.
     *  *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetComputeQuotaPlanResponse GetComputeQuotaPlanResponse
     */
    public function getComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get detailed information of a single compute quota plan.
     *  *
     * @param string $nickname
     * @param string $planName
     *
     * @return GetComputeQuotaPlanResponse GetComputeQuotaPlanResponse
     */
    public function getComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * @summary Displays the time-specific configuration of compute quota.
     *  *
     * @param string                         $nickname
     * @param GetComputeQuotaScheduleRequest $request  GetComputeQuotaScheduleRequest
     * @param string[]                       $headers  map
     * @param RuntimeOptions                 $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetComputeQuotaScheduleResponse GetComputeQuotaScheduleResponse
     */
    public function getComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayTimezone)) {
            $query['displayTimezone'] = $request->displayTimezone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetComputeQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaSchedule',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetComputeQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetComputeQuotaScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Displays the time-specific configuration of compute quota.
     *  *
     * @param string                         $nickname
     * @param GetComputeQuotaScheduleRequest $request  GetComputeQuotaScheduleRequest
     *
     * @return GetComputeQuotaScheduleResponse GetComputeQuotaScheduleResponse
     */
    public function getComputeQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Get basic information about a single job.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetJobInfoResponse GetJobInfoResponse
     */
    public function getJobInfoWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetJobInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetJobInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get basic information about a single job.
     *  *
     * @param string $instanceId
     *
     * @return GetJobInfoResponse GetJobInfoResponse
     */
    public function getJobInfo($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobInfoWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Performs statistics on all jobs that are complete on a specified day and obtains the total resource usage of each job executor on a daily basis.
     *  *
     * @param GetJobResourceUsageRequest $tmpReq  GetJobResourceUsageRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResourceUsageResponse GetJobResourceUsageResponse
     */
    public function getJobResourceUsageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetJobResourceUsageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobOwnerList)) {
            $request->jobOwnerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->quotaNicknameList)) {
            $request->quotaNicknameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->date)) {
            $query['date'] = $request->date;
        }
        if (!Utils::isUnset($request->jobOwnerListShrink)) {
            $query['jobOwnerList'] = $request->jobOwnerListShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaNicknameListShrink)) {
            $query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobResourceUsage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/resourceUsage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetJobResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetJobResourceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Performs statistics on all jobs that are complete on a specified day and obtains the total resource usage of each job executor on a daily basis.
     *  *
     * @param GetJobResourceUsageRequest $request GetJobResourceUsageRequest
     *
     * @return GetJobResourceUsageResponse GetJobResourceUsageResponse
     */
    public function getJobResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobResourceUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $asyncTaskId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetMmsAsyncTaskResponse GetMmsAsyncTaskResponse
     */
    public function getMmsAsyncTaskWithOptions($sourceId, $asyncTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsAsyncTask',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/asyncTasks/' . OpenApiUtilClient::getEncodeParam($asyncTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $asyncTaskId
     *
     * @return GetMmsAsyncTaskResponse GetMmsAsyncTaskResponse
     */
    public function getMmsAsyncTask($sourceId, $asyncTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsAsyncTaskWithOptions($sourceId, $asyncTaskId, $headers, $runtime);
    }

    /**
     * @param string                  $sourceId
     * @param GetMmsDataSourceRequest $request  GetMmsDataSourceRequest
     * @param string[]                $headers  map
     * @param RuntimeOptions          $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsDataSourceResponse GetMmsDataSourceResponse
     */
    public function getMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->withConfig)) {
            $query['withConfig'] = $request->withConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $sourceId
     * @param GetMmsDataSourceRequest $request  GetMmsDataSourceRequest
     *
     * @return GetMmsDataSourceResponse GetMmsDataSourceResponse
     */
    public function getMmsDataSource($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $dbId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsDbResponse GetMmsDbResponse
     */
    public function getMmsDbWithOptions($sourceId, $dbId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsDb',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/dbs/' . OpenApiUtilClient::getEncodeParam($dbId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsDbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsDbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $dbId
     *
     * @return GetMmsDbResponse GetMmsDbResponse
     */
    public function getMmsDb($sourceId, $dbId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsDbWithOptions($sourceId, $dbId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $scanId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsFetchMetadataJobResponse GetMmsFetchMetadataJobResponse
     */
    public function getMmsFetchMetadataJobWithOptions($sourceId, $scanId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsFetchMetadataJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/scans/' . OpenApiUtilClient::getEncodeParam($scanId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsFetchMetadataJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsFetchMetadataJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $scanId
     *
     * @return GetMmsFetchMetadataJobResponse GetMmsFetchMetadataJobResponse
     */
    public function getMmsFetchMetadataJob($sourceId, $scanId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsFetchMetadataJobWithOptions($sourceId, $scanId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsJobResponse GetMmsJobResponse
     */
    public function getMmsJobWithOptions($sourceId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $jobId
     *
     * @return GetMmsJobResponse GetMmsJobResponse
     */
    public function getMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $partitionId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetMmsPartitionResponse GetMmsPartitionResponse
     */
    public function getMmsPartitionWithOptions($sourceId, $partitionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsPartition',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/partitions/' . OpenApiUtilClient::getEncodeParam($partitionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsPartitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $partitionId
     *
     * @return GetMmsPartitionResponse GetMmsPartitionResponse
     */
    public function getMmsPartition($sourceId, $partitionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsPartitionWithOptions($sourceId, $partitionId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $tableId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsTableResponse GetMmsTableResponse
     */
    public function getMmsTableWithOptions($sourceId, $tableId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsTable',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $tableId
     *
     * @return GetMmsTableResponse GetMmsTableResponse
     */
    public function getMmsTable($sourceId, $tableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsTableWithOptions($sourceId, $tableId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $taskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMmsTaskResponse GetMmsTaskResponse
     */
    public function getMmsTaskWithOptions($sourceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMmsTask',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMmsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMmsTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $taskId
     *
     * @return GetMmsTaskResponse GetMmsTaskResponse
     */
    public function getMmsTask($sourceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsTaskWithOptions($sourceId, $taskId, $headers, $runtime);
    }

    /**
     * @summary Obtains the information about a package.
     *  *
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request     GetPackageRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetPackageResponse GetPackageResponse
     */
    public function getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceProject)) {
            $query['sourceProject'] = $request->sourceProject;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages/' . OpenApiUtilClient::getEncodeParam($packageName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPackageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPackageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about a package.
     *  *
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request     GetPackageRequest
     *
     * @return GetPackageResponse GetPackageResponse
     */
    public function getPackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a MaxCompute project.
     *  *
     * @param string            $projectName
     * @param GetProjectRequest $request     GetProjectRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a MaxCompute project.
     *  *
     * @param string            $projectName
     * @param GetProjectRequest $request     GetProjectRequest
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the information about a specified level-1 quota.
     *  *
     * @param string          $nickname
     * @param GetQuotaRequest $request  GetQuotaRequest
     * @param string[]        $headers  map
     * @param RuntimeOptions  $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->akProven)) {
            $query['AkProven'] = $request->akProven;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about a specified level-1 quota.
     *  *
     * @param string          $nickname
     * @param GetQuotaRequest $request  GetQuotaRequest
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the information of a quota plan.
     *  *
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request  GetQuotaPlanRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetQuotaPlanResponse GetQuotaPlanResponse
     */
    public function getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information of a quota plan.
     *  *
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request  GetQuotaPlanRequest
     *
     * @return GetQuotaPlanResponse GetQuotaPlanResponse
     */
    public function getQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the scheduling plan for a quota plan.
     *  *
     * @param string                  $nickname
     * @param GetQuotaScheduleRequest $request  GetQuotaScheduleRequest
     * @param string[]                $headers  map
     * @param RuntimeOptions          $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetQuotaScheduleResponse GetQuotaScheduleResponse
     */
    public function getQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayTimezone)) {
            $query['displayTimezone'] = $request->displayTimezone;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/schedule',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the scheduling plan for a quota plan.
     *  *
     * @param string                  $nickname
     * @param GetQuotaScheduleRequest $request  GetQuotaScheduleRequest
     *
     * @return GetQuotaScheduleResponse GetQuotaScheduleResponse
     */
    public function getQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Queries quota resource consumption information.
     *  *
     * @param string               $nickname
     * @param GetQuotaUsageRequest $tmpReq   GetQuotaUsageRequest
     * @param string[]             $headers  map
     * @param RuntimeOptions       $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetQuotaUsageResponse GetQuotaUsageResponse
     */
    public function getQuotaUsageWithOptions($nickname, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetQuotaUsageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->plotTypes)) {
            $request->plotTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->plotTypes, 'plotTypes', 'simple');
        }
        if (!Utils::isUnset($tmpReq->yAxisTypes)) {
            $request->yAxisTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->yAxisTypes, 'yAxisTypes', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->aggMethod)) {
            $query['aggMethod'] = $request->aggMethod;
        }
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->plotTypesShrink)) {
            $query['plotTypes'] = $request->plotTypesShrink;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->subQuotaNickname)) {
            $query['subQuotaNickname'] = $request->subQuotaNickname;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->yAxisTypesShrink)) {
            $query['yAxisTypes'] = $request->yAxisTypesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaUsage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetQuotaUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries quota resource consumption information.
     *  *
     * @param string               $nickname
     * @param GetQuotaUsageRequest $request  GetQuotaUsageRequest
     *
     * @return GetQuotaUsageResponse GetQuotaUsageResponse
     */
    public function getQuotaUsage($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaUsageWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the ACL-based permissions that is granted to a project-level role.
     *  *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetRoleAclResponse GetRoleAclResponse
     */
    public function getRoleAclWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRoleAcl',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/roleAcl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoleAclResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoleAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the ACL-based permissions that is granted to a project-level role.
     *  *
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRoleAclResponse GetRoleAclResponse
     */
    public function getRoleAcl($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @summary Obtains ACL-based permissions on an object that are granted to a project-level role.
     *  *
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request     GetRoleAclOnObjectRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetRoleAclOnObjectResponse GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectName)) {
            $query['objectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['objectType'] = $request->objectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRoleAclOnObject',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/acl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoleAclOnObjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoleAclOnObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains ACL-based permissions on an object that are granted to a project-level role.
     *  *
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request     GetRoleAclOnObjectRequest
     *
     * @return GetRoleAclOnObjectResponse GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObject($projectName, $roleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the policy that is attached to a project-level role.
     *  *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetRolePolicyResponse GetRolePolicyResponse
     */
    public function getRolePolicyWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRolePolicy',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/policy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRolePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRolePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the policy that is attached to a project-level role.
     *  *
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRolePolicyResponse GetRolePolicyResponse
     */
    public function getRolePolicy($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRolePolicyWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @summary Obtains the running state data of jobs that are in the running state in a specified period of time.
     *  *
     * @param GetRunningJobsRequest $tmpReq  GetRunningJobsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRunningJobsResponse GetRunningJobsResponse
     */
    public function getRunningJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRunningJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobOwnerList)) {
            $request->jobOwnerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->quotaNicknameList)) {
            $request->quotaNicknameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->jobOwnerListShrink)) {
            $query['jobOwnerList'] = $request->jobOwnerListShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaNicknameListShrink)) {
            $query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRunningJobs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/runningJobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRunningJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRunningJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the running state data of jobs that are in the running state in a specified period of time.
     *  *
     * @param GetRunningJobsRequest $request GetRunningJobsRequest
     *
     * @return GetRunningJobsResponse GetRunningJobsResponse
     */
    public function getRunningJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunningJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Views the information about MaxCompute internal tables, views, external tables, clustered tables, or transactional tables.
     *  *
     * @param string              $projectName
     * @param string              $tableName
     * @param GetTableInfoRequest $request     GetTableInfoRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetTableInfoResponse GetTableInfoResponse
     */
    public function getTableInfoWithOptions($projectName, $tableName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->schemaName)) {
            $query['schemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/tables/' . OpenApiUtilClient::getEncodeParam($tableName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTableInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTableInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Views the information about MaxCompute internal tables, views, external tables, clustered tables, or transactional tables.
     *  *
     * @param string              $projectName
     * @param string              $tableName
     * @param GetTableInfoRequest $request     GetTableInfoRequest
     *
     * @return GetTableInfoResponse GetTableInfoResponse
     */
    public function getTableInfo($projectName, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableInfoWithOptions($projectName, $tableName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the trusted projects of the current project.
     *  *
     * @param string         $projectName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetTrustedProjectsResponse GetTrustedProjectsResponse
     */
    public function getTrustedProjectsWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTrustedProjects',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/trustedProjects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTrustedProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTrustedProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the trusted projects of the current project.
     *  *
     * @param string $projectName
     *
     * @return GetTrustedProjectsResponse GetTrustedProjectsResponse
     */
    public function getTrustedProjects($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrustedProjectsWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @summary Terminates a running job.
     *  *
     * @param KillJobsRequest $request KillJobsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return KillJobsResponse KillJobsResponse
     */
    public function killJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'KillJobs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/kill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return KillJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return KillJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Terminates a running job.
     *  *
     * @param KillJobsRequest $request KillJobsRequest
     *
     * @return KillJobsResponse KillJobsResponse
     */
    public function killJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->killJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get compute usage of pay-as-you-go jobs.
     *  *
     * @param ListComputeMetricsByInstanceRequest $request ListComputeMetricsByInstanceRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListComputeMetricsByInstanceResponse ListComputeMetricsByInstanceResponse
     */
    public function listComputeMetricsByInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobOwner)) {
            $body['jobOwner'] = $request->jobOwner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectNames)) {
            $body['projectNames'] = $request->projectNames;
        }
        if (!Utils::isUnset($request->region)) {
            $body['region'] = $request->region;
        }
        if (!Utils::isUnset($request->signature)) {
            $body['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->specCodes)) {
            $body['specCodes'] = $request->specCodes;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->types)) {
            $body['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListComputeMetricsByInstance',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/computeMetrics/listByInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListComputeMetricsByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListComputeMetricsByInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get compute usage of pay-as-you-go jobs.
     *  *
     * @param ListComputeMetricsByInstanceRequest $request ListComputeMetricsByInstanceRequest
     *
     * @return ListComputeMetricsByInstanceResponse ListComputeMetricsByInstanceResponse
     */
    public function listComputeMetricsByInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeMetricsByInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get computeQuotaPlan list.
     *  *
     * @param string         $nickname
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListComputeQuotaPlanResponse ListComputeQuotaPlanResponse
     */
    public function listComputeQuotaPlanWithOptions($nickname, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get computeQuotaPlan list.
     *  *
     * @param string $nickname
     *
     * @return ListComputeQuotaPlanResponse ListComputeQuotaPlanResponse
     */
    public function listComputeQuotaPlan($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeQuotaPlanWithOptions($nickname, $headers, $runtime);
    }

    /**
     * @summary Obtains functions in a MaxCompute project.
     *  *
     * @param string               $projectName
     * @param ListFunctionsRequest $request     ListFunctionsRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctionsWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['schemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctions',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/functions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFunctionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains functions in a MaxCompute project.
     *  *
     * @param string               $projectName
     * @param ListFunctionsRequest $request     ListFunctionsRequest
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctions($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Views a list of jobs.
     *  *
     * @param ListJobInfosRequest $request ListJobInfosRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobInfosResponse ListJobInfosResponse
     */
    public function listJobInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ascOrder)) {
            $query['ascOrder'] = $request->ascOrder;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['orderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->extNodeIdList)) {
            $body['extNodeIdList'] = $request->extNodeIdList;
        }
        if (!Utils::isUnset($request->from)) {
            $body['from'] = $request->from;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['instanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->jobOwnerList)) {
            $body['jobOwnerList'] = $request->jobOwnerList;
        }
        if (!Utils::isUnset($request->priorityList)) {
            $body['priorityList'] = $request->priorityList;
        }
        if (!Utils::isUnset($request->projectList)) {
            $body['projectList'] = $request->projectList;
        }
        if (!Utils::isUnset($request->quotaNickname)) {
            $body['quotaNickname'] = $request->quotaNickname;
        }
        if (!Utils::isUnset($request->sceneTagList)) {
            $body['sceneTagList'] = $request->sceneTagList;
        }
        if (!Utils::isUnset($request->signatureList)) {
            $body['signatureList'] = $request->signatureList;
        }
        if (!Utils::isUnset($request->sortByList)) {
            $body['sortByList'] = $request->sortByList;
        }
        if (!Utils::isUnset($request->sortOrderList)) {
            $body['sortOrderList'] = $request->sortOrderList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['statusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->to)) {
            $body['to'] = $request->to;
        }
        if (!Utils::isUnset($request->typeList)) {
            $body['typeList'] = $request->typeList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListJobInfos',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListJobInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListJobInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Views a list of jobs.
     *  *
     * @param ListJobInfosRequest $request ListJobInfosRequest
     *
     * @return ListJobInfosResponse ListJobInfosResponse
     */
    public function listJobInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Retrieve performance metrics for completed jobs.
     *  *
     * @param ListJobMetricRequest $request ListJobMetricRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobMetricResponse ListJobMetricResponse
     */
    public function listJobMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $body = [];
        if (!Utils::isUnset($request->group)) {
            $body['group'] = $request->group;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->project)) {
            $body['project'] = $request->project;
        }
        if (!Utils::isUnset($request->quota)) {
            $body['quota'] = $request->quota;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListJobMetric',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/metric',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListJobMetricResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListJobMetricResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Retrieve performance metrics for completed jobs.
     *  *
     * @param ListJobMetricRequest $request ListJobMetricRequest
     *
     * @return ListJobMetricResponse ListJobMetricResponse
     */
    public function listJobMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Views a list of job snapshot data at a specific point in time.
     *  *
     * @param ListJobSnapshotInfosRequest $request ListJobSnapshotInfosRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobSnapshotInfosResponse ListJobSnapshotInfosResponse
     */
    public function listJobSnapshotInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ascOrder)) {
            $query['ascOrder'] = $request->ascOrder;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['orderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->extNodeIdList)) {
            $body['extNodeIdList'] = $request->extNodeIdList;
        }
        if (!Utils::isUnset($request->from)) {
            $body['from'] = $request->from;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['instanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->jobOwnerList)) {
            $body['jobOwnerList'] = $request->jobOwnerList;
        }
        if (!Utils::isUnset($request->priorityList)) {
            $body['priorityList'] = $request->priorityList;
        }
        if (!Utils::isUnset($request->projectList)) {
            $body['projectList'] = $request->projectList;
        }
        if (!Utils::isUnset($request->quotaNickname)) {
            $body['quotaNickname'] = $request->quotaNickname;
        }
        if (!Utils::isUnset($request->signatureList)) {
            $body['signatureList'] = $request->signatureList;
        }
        if (!Utils::isUnset($request->sortByList)) {
            $body['sortByList'] = $request->sortByList;
        }
        if (!Utils::isUnset($request->sortOrderList)) {
            $body['sortOrderList'] = $request->sortOrderList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['statusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->to)) {
            $body['to'] = $request->to;
        }
        if (!Utils::isUnset($request->typeList)) {
            $body['typeList'] = $request->typeList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListJobSnapshotInfos',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/snapshot',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListJobSnapshotInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListJobSnapshotInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Views a list of job snapshot data at a specific point in time.
     *  *
     * @param ListJobSnapshotInfosRequest $request ListJobSnapshotInfosRequest
     *
     * @return ListJobSnapshotInfosResponse ListJobSnapshotInfosResponse
     */
    public function listJobSnapshotInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobSnapshotInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMmsDataSourcesRequest $request ListMmsDataSourcesRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMmsDataSourcesResponse ListMmsDataSourcesResponse
     */
    public function listMmsDataSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsDataSources',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsDataSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListMmsDataSourcesRequest $request ListMmsDataSourcesRequest
     *
     * @return ListMmsDataSourcesResponse ListMmsDataSourcesResponse
     */
    public function listMmsDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsDataSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一个数据源内“库”列表
     *  *
     * @param string            $sourceId
     * @param ListMmsDbsRequest $tmpReq   ListMmsDbsRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsDbsResponse ListMmsDbsResponse
     */
    public function listMmsDbsWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMmsDbsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sorter)) {
            $request->sorterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sorter, 'sorter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sorterShrink)) {
            $query['sorter'] = $request->sorterShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsDbs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/dbs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsDbsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsDbsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取一个数据源内“库”列表
     *  *
     * @param string            $sourceId
     * @param ListMmsDbsRequest $request  ListMmsDbsRequest
     *
     * @return ListMmsDbsResponse ListMmsDbsResponse
     */
    public function listMmsDbs($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsDbsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @param string             $sourceId
     * @param ListMmsJobsRequest $request  ListMmsJobsRequest
     * @param string[]           $headers  map
     * @param RuntimeOptions     $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsJobsResponse ListMmsJobsResponse
     */
    public function listMmsJobsWithOptions($sourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstDbName)) {
            $query['dstDbName'] = $request->dstDbName;
        }
        if (!Utils::isUnset($request->dstTableName)) {
            $query['dstTableName'] = $request->dstTableName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->srcDbName)) {
            $query['srcDbName'] = $request->srcDbName;
        }
        if (!Utils::isUnset($request->srcTableName)) {
            $query['srcTableName'] = $request->srcTableName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->stopped)) {
            $query['stopped'] = $request->stopped;
        }
        if (!Utils::isUnset($request->sorter)) {
            $query['sorter'] = $request->sorter;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsJobs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $sourceId
     * @param ListMmsJobsRequest $request  ListMmsJobsRequest
     *
     * @return ListMmsJobsResponse ListMmsJobsResponse
     */
    public function listMmsJobs($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsJobsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $sourceId
     * @param ListMmsPartitionsRequest $tmpReq   ListMmsPartitionsRequest
     * @param string[]                 $headers  map
     * @param RuntimeOptions           $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsPartitionsResponse ListMmsPartitionsResponse
     */
    public function listMmsPartitionsWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMmsPartitionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->status)) {
            $request->statusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->status, 'status', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['dbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['dbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->lastDdlTimeEnd)) {
            $query['lastDdlTimeEnd'] = $request->lastDdlTimeEnd;
        }
        if (!Utils::isUnset($request->lastDdlTimeStart)) {
            $query['lastDdlTimeStart'] = $request->lastDdlTimeStart;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statusShrink)) {
            $query['status'] = $request->statusShrink;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['tableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->updated)) {
            $query['updated'] = $request->updated;
        }
        if (!Utils::isUnset($request->value)) {
            $query['value'] = $request->value;
        }
        if (!Utils::isUnset($request->sorter)) {
            $query['sorter'] = $request->sorter;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsPartitions',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/partitions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsPartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsPartitionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $sourceId
     * @param ListMmsPartitionsRequest $request  ListMmsPartitionsRequest
     *
     * @return ListMmsPartitionsResponse ListMmsPartitionsResponse
     */
    public function listMmsPartitions($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsPartitionsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $sourceId
     * @param ListMmsTablesRequest $tmpReq   ListMmsTablesRequest
     * @param string[]             $headers  map
     * @param RuntimeOptions       $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsTablesResponse ListMmsTablesResponse
     */
    public function listMmsTablesWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMmsTablesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->status)) {
            $request->statusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->status, 'status', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dbId)) {
            $query['dbId'] = $request->dbId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['dbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->hasPartitions)) {
            $query['hasPartitions'] = $request->hasPartitions;
        }
        if (!Utils::isUnset($request->lastDdlTimeEnd)) {
            $query['lastDdlTimeEnd'] = $request->lastDdlTimeEnd;
        }
        if (!Utils::isUnset($request->lastDdlTimeStart)) {
            $query['lastDdlTimeStart'] = $request->lastDdlTimeStart;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->onlyName)) {
            $query['onlyName'] = $request->onlyName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statusShrink)) {
            $query['status'] = $request->statusShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->sorter)) {
            $query['sorter'] = $request->sorter;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsTables',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $sourceId
     * @param ListMmsTablesRequest $request  ListMmsTablesRequest
     *
     * @return ListMmsTablesResponse ListMmsTablesResponse
     */
    public function listMmsTables($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTablesWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $taskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsTaskLogsResponse ListMmsTaskLogsResponse
     */
    public function listMmsTaskLogsWithOptions($sourceId, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListMmsTaskLogs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsTaskLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $taskId
     *
     * @return ListMmsTaskLogsResponse ListMmsTaskLogsResponse
     */
    public function listMmsTaskLogs($sourceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTaskLogsWithOptions($sourceId, $taskId, $headers, $runtime);
    }

    /**
     * @param string              $sourceId
     * @param ListMmsTasksRequest $request  ListMmsTasksRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListMmsTasksResponse ListMmsTasksResponse
     */
    public function listMmsTasksWithOptions($sourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstDbName)) {
            $query['dstDbName'] = $request->dstDbName;
        }
        if (!Utils::isUnset($request->dstTableName)) {
            $query['dstTableName'] = $request->dstTableName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['jobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['jobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partition)) {
            $query['partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->srcDbName)) {
            $query['srcDbName'] = $request->srcDbName;
        }
        if (!Utils::isUnset($request->srcTableName)) {
            $query['srcTableName'] = $request->srcTableName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->sorter)) {
            $query['sorter'] = $request->sorter;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsTasks',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMmsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMmsTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $sourceId
     * @param ListMmsTasksRequest $request  ListMmsTasksRequest
     *
     * @return ListMmsTasksResponse ListMmsTasksResponse
     */
    public function listMmsTasks($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTasksWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the packages in a MaxCompute project.
     *  *
     * @param string         $projectName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListPackagesResponse ListPackagesResponse
     */
    public function listPackagesWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPackages',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPackagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the packages in a MaxCompute project.
     *  *
     * @param string $projectName
     *
     * @return ListPackagesResponse ListPackagesResponse
     */
    public function listPackages($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPackagesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @summary Queries a list of users in a project.
     *  *
     * @param string         $projectName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListProjectUsersResponse ListProjectUsersResponse
     */
    public function listProjectUsersWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListProjectUsers',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListProjectUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of users in a project.
     *  *
     * @param string $projectName
     *
     * @return ListProjectUsersResponse ListProjectUsersResponse
     */
    public function listProjectUsers($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectUsersWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @summary Queries a list of MaxCompute projects.
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listSystemCatalog)) {
            $query['listSystemCatalog'] = $request->listSystemCatalog;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->quotaName)) {
            $query['quotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->quotaNickName)) {
            $query['quotaNickName'] = $request->quotaNickName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->saleTags)) {
            $query['saleTags'] = $request->saleTags;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of MaxCompute projects.
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries quotas.
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billingType)) {
            $query['billingType'] = $request->billingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->saleTags)) {
            $query['saleTags'] = $request->saleTags;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotas',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQuotasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries quotas.
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtains quota plans.
     *  *
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request  ListQuotasPlansRequest
     * @param string[]               $headers  map
     * @param RuntimeOptions         $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListQuotasPlansResponse ListQuotasPlansResponse
     */
    public function listQuotasPlansWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotasPlans',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListQuotasPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQuotasPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains quota plans.
     *  *
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request  ListQuotasPlansRequest
     *
     * @return ListQuotasPlansResponse ListQuotasPlansResponse
     */
    public function listQuotasPlans($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasPlansWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains resources in a MaxCompute project.
     *  *
     * @param string               $projectName
     * @param ListResourcesRequest $request     ListResourcesRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResourcesWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['schemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains resources in a MaxCompute project.
     *  *
     * @param string               $projectName
     * @param ListResourcesRequest $request     ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains MaxCompute project-level roles.
     *  *
     * @param string         $projectName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRolesWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains MaxCompute project-level roles.
     *  *
     * @param string $projectName
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRoles($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @summary Queries the storage details of a specific partition in a partitioned table in a MaxCompute project.
     *  *
     * @param string                           $project
     * @param string                           $table
     * @param ListStoragePartitionsInfoRequest $tmpReq  ListStoragePartitionsInfoRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStoragePartitionsInfoResponse ListStoragePartitionsInfoResponse
     */
    public function listStoragePartitionsInfoWithOptions($project, $table, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListStoragePartitionsInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'types', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ascOrder)) {
            $query['ascOrder'] = $request->ascOrder;
        }
        if (!Utils::isUnset($request->date)) {
            $query['date'] = $request->date;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['orderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partitionPrefix)) {
            $query['partitionPrefix'] = $request->partitionPrefix;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $query['types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStoragePartitionsInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/tables/' . OpenApiUtilClient::getEncodeParam($table) . '/partitionsInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListStoragePartitionsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListStoragePartitionsInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage details of a specific partition in a partitioned table in a MaxCompute project.
     *  *
     * @param string                           $project
     * @param string                           $table
     * @param ListStoragePartitionsInfoRequest $request ListStoragePartitionsInfoRequest
     *
     * @return ListStoragePartitionsInfoResponse ListStoragePartitionsInfoResponse
     */
    public function listStoragePartitionsInfo($project, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStoragePartitionsInfoWithOptions($project, $table, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the table storage details of a MaxCompute project.
     *  *
     * @param string                       $project
     * @param ListStorageTablesInfoRequest $tmpReq  ListStorageTablesInfoRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStorageTablesInfoResponse ListStorageTablesInfoResponse
     */
    public function listStorageTablesInfoWithOptions($project, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListStorageTablesInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'types', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->ascOrder)) {
            $query['ascOrder'] = $request->ascOrder;
        }
        if (!Utils::isUnset($request->date)) {
            $query['date'] = $request->date;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['orderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recentDays)) {
            $query['recentDays'] = $request->recentDays;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->tablePrefix)) {
            $query['tablePrefix'] = $request->tablePrefix;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $query['types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStorageTablesInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/tablesInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListStorageTablesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListStorageTablesInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the table storage details of a MaxCompute project.
     *  *
     * @param string                       $project
     * @param ListStorageTablesInfoRequest $request ListStorageTablesInfoRequest
     *
     * @return ListStorageTablesInfoResponse ListStorageTablesInfoResponse
     */
    public function listStorageTablesInfo($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStorageTablesInfoWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains tables in a MaxCompute project.
     *  *
     * @param string            $projectName
     * @param ListTablesRequest $request     ListTablesRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTablesWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['schemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains tables in a MaxCompute project.
     *  *
     * @param string            $projectName
     * @param ListTablesRequest $request     ListTablesRequest
     *
     * @return ListTablesResponse ListTablesResponse
     */
    public function listTables($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Displays the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *  *
     * @param string         $nickname
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListTunnelQuotaTimerResponse ListTunnelQuotaTimerResponse
     */
    public function listTunnelQuotaTimerWithOptions($nickname, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListTunnelQuotaTimer',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tunnel/' . OpenApiUtilClient::getEncodeParam($nickname) . '/timers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTunnelQuotaTimerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTunnelQuotaTimerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Displays the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *  *
     * @param string $nickname
     *
     * @return ListTunnelQuotaTimerResponse ListTunnelQuotaTimerResponse
     */
    public function listTunnelQuotaTimer($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTunnelQuotaTimerWithOptions($nickname, $headers, $runtime);
    }

    /**
     * @summary Queries a list of all users under a tenant.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of all users under a tenant.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtains information about the users who are assigned a project-level role.
     *  *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListUsersByRoleResponse ListUsersByRoleResponse
     */
    public function listUsersByRoleWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListUsersByRole',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUsersByRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersByRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains information about the users who are assigned a project-level role.
     *  *
     * @param string $projectName
     * @param string $roleName
     *
     * @return ListUsersByRoleResponse ListUsersByRoleResponse
     */
    public function listUsersByRole($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersByRoleWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @param string            $nickname
     * @param QueryQuotaRequest $request  QueryQuotaRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return QueryQuotaResponse QueryQuotaResponse
     */
    public function queryQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->akProven)) {
            $query['AkProven'] = $request->akProven;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $nickname
     * @param QueryQuotaRequest $request  QueryQuotaRequest
     *
     * @return QueryQuotaResponse QueryQuotaResponse
     */
    public function queryQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return RetryMmsJobResponse RetryMmsJobResponse
     */
    public function retryMmsJobWithOptions($sourceId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RetryMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/retry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RetryMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetryMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $jobId
     *
     * @return RetryMmsJobResponse RetryMmsJobResponse
     */
    public function retryMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return StartMmsJobResponse StartMmsJobResponse
     */
    public function startMmsJobWithOptions($sourceId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $jobId
     *
     * @return StartMmsJobResponse StartMmsJobResponse
     */
    public function startMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return StopMmsJobResponse StopMmsJobResponse
     */
    public function stopMmsJobWithOptions($sourceId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopMmsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $sourceId
     * @param string $jobId
     *
     * @return StopMmsJobResponse StopMmsJobResponse
     */
    public function stopMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @summary Update the ComputeQuotaPlan.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                        $nickname
     * @param UpdateComputeQuotaPlanRequest $request  UpdateComputeQuotaPlanRequest
     * @param string[]                      $headers  map
     * @param RuntimeOptions                $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateComputeQuotaPlanResponse UpdateComputeQuotaPlanResponse
     */
    public function updateComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->quota)) {
            $body['quota'] = $request->quota;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaPlan',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateComputeQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update the ComputeQuotaPlan.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                        $nickname
     * @param UpdateComputeQuotaPlanRequest $request  UpdateComputeQuotaPlanRequest
     *
     * @return UpdateComputeQuotaPlanResponse UpdateComputeQuotaPlanResponse
     */
    public function updateComputeQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Update the time-based plan for computing quota.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the<props="china">[Pricing and Billing](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Billing](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                            $nickname
     * @param UpdateComputeQuotaScheduleRequest $request  UpdateComputeQuotaScheduleRequest
     * @param string[]                          $headers  map
     * @param RuntimeOptions                    $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateComputeQuotaScheduleResponse UpdateComputeQuotaScheduleResponse
     */
    public function updateComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scheduleTimezone)) {
            $query['scheduleTimezone'] = $request->scheduleTimezone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeQuotaSchedule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateComputeQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateComputeQuotaScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update the time-based plan for computing quota.
     *  *
     * @description Please ensure that before using this interface, you have fully understood the<props="china">[Pricing and Billing](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Billing](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *  *
     * @param string                            $nickname
     * @param UpdateComputeQuotaScheduleRequest $request  UpdateComputeQuotaScheduleRequest
     *
     * @return UpdateComputeQuotaScheduleResponse UpdateComputeQuotaScheduleResponse
     */
    public function updateComputeQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Update the basic configuration of the calculation quota, including adding or deleting the sub quota, modifying the basic properties of the secondary quota, and the CU configuration of the effective quota plan.
     *  *
     * @param string                       $nickname
     * @param UpdateComputeSubQuotaRequest $request  UpdateComputeSubQuotaRequest
     * @param string[]                     $headers  map
     * @param RuntimeOptions               $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateComputeSubQuotaResponse UpdateComputeSubQuotaResponse
     */
    public function updateComputeSubQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subQuotaInfoList)) {
            $body['subQuotaInfoList'] = $request->subQuotaInfoList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeSubQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/computeSubQuota',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateComputeSubQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateComputeSubQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update the basic configuration of the calculation quota, including adding or deleting the sub quota, modifying the basic properties of the secondary quota, and the CU configuration of the effective quota plan.
     *  *
     * @param string                       $nickname
     * @param UpdateComputeSubQuotaRequest $request  UpdateComputeSubQuotaRequest
     *
     * @return UpdateComputeSubQuotaResponse UpdateComputeSubQuotaResponse
     */
    public function updateComputeSubQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeSubQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary 更新数据源配置、名称，启/停数据源实例
     *  *
     * @param string                     $sourceId
     * @param UpdateMmsDataSourceRequest $request  UpdateMmsDataSourceRequest
     * @param string[]                   $headers  map
     * @param RuntimeOptions             $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateMmsDataSourceResponse UpdateMmsDataSourceResponse
     */
    public function updateMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->config)) {
            $body['config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->test)) {
            $body['test'] = $request->test;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . OpenApiUtilClient::getEncodeParam($sourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMmsDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新数据源配置、名称，启/停数据源实例
     *  *
     * @param string                     $sourceId
     * @param UpdateMmsDataSourceRequest $request  UpdateMmsDataSourceRequest
     *
     * @return UpdateMmsDataSourceResponse UpdateMmsDataSourceResponse
     */
    public function updateMmsDataSource($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the objects in a package and projects in which the package can be installed.
     *  *
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request     UpdatePackageRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdatePackageResponse UpdatePackageResponse
     */
    public function updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages/' . OpenApiUtilClient::getEncodeParam($packageName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePackageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the objects in a package and projects in which the package can be installed.
     *  *
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request     UpdatePackageRequest
     *
     * @return UpdatePackageResponse UpdatePackageResponse
     */
    public function updatePackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * @summary Update Project Basic Information
     *  *
     * @param string                        $projectName
     * @param UpdateProjectBasicMetaRequest $request     UpdateProjectBasicMetaRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectBasicMetaResponse UpdateProjectBasicMetaResponse
     */
    public function updateProjectBasicMetaWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->properties)) {
            $body['properties'] = $request->properties;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectBasicMeta',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/meta',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateProjectBasicMetaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectBasicMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update Project Basic Information
     *  *
     * @param string                        $projectName
     * @param UpdateProjectBasicMetaRequest $request     UpdateProjectBasicMetaRequest
     *
     * @return UpdateProjectBasicMetaResponse UpdateProjectBasicMetaResponse
     */
    public function updateProjectBasicMeta($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectBasicMetaWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Modify Default Project Compute Quota
     *  *
     * @param string                           $projectName
     * @param UpdateProjectDefaultQuotaRequest $request     UpdateProjectDefaultQuotaRequest
     * @param string[]                         $headers     map
     * @param RuntimeOptions                   $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectDefaultQuotaResponse UpdateProjectDefaultQuotaResponse
     */
    public function updateProjectDefaultQuotaWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->quota)) {
            $body['quota'] = $request->quota;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectDefaultQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/quota',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateProjectDefaultQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectDefaultQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Default Project Compute Quota
     *  *
     * @param string                           $projectName
     * @param UpdateProjectDefaultQuotaRequest $request     UpdateProjectDefaultQuotaRequest
     *
     * @return UpdateProjectDefaultQuotaResponse UpdateProjectDefaultQuotaResponse
     */
    public function updateProjectDefaultQuota($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectDefaultQuotaWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the IP address whitelist of a MaxCompute project.
     *  *
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request     UpdateProjectIpWhiteListRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectIpWhiteListResponse UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateProjectIpWhiteList',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/ipWhiteList',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateProjectIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectIpWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IP address whitelist of a MaxCompute project.
     *  *
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request     UpdateProjectIpWhiteListRequest
     *
     * @return UpdateProjectIpWhiteListResponse UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteList($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a quota plan.
     *  *
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request  UpdateQuotaPlanRequest
     * @param string[]               $headers  map
     * @param RuntimeOptions         $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateQuotaPlanResponse UpdateQuotaPlanResponse
     */
    public function updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQuotaPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a quota plan.
     *  *
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request  UpdateQuotaPlanRequest
     *
     * @return UpdateQuotaPlanResponse UpdateQuotaPlanResponse
     */
    public function updateQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the scheduling plan for a quota plan.
     *  *
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request  UpdateQuotaScheduleRequest
     * @param string[]                   $headers  map
     * @param RuntimeOptions             $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateQuotaScheduleResponse UpdateQuotaScheduleResponse
     */
    public function updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/schedule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQuotaScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the scheduling plan for a quota plan.
     *  *
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request  UpdateQuotaScheduleRequest
     *
     * @return UpdateQuotaScheduleResponse UpdateQuotaScheduleResponse
     */
    public function updateQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing and prices](https://www.alibabacloud.com/help/maxcompute/product-overview/data-transfer-fees-hourly-billing) of Tunnel quotas and elastically reserved computing resources.
     *  *
     * @param string                        $nickname
     * @param UpdateTunnelQuotaTimerRequest $request  UpdateTunnelQuotaTimerRequest
     * @param string[]                      $headers  map
     * @param RuntimeOptions                $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateTunnelQuotaTimerResponse UpdateTunnelQuotaTimerResponse
     */
    public function updateTunnelQuotaTimerWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->timezone)) {
            $query['timezone'] = $request->timezone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTunnelQuotaTimer',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tunnel/' . OpenApiUtilClient::getEncodeParam($nickname) . '/timers',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateTunnelQuotaTimerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTunnelQuotaTimerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing and prices](https://www.alibabacloud.com/help/maxcompute/product-overview/data-transfer-fees-hourly-billing) of Tunnel quotas and elastically reserved computing resources.
     *  *
     * @param string                        $nickname
     * @param UpdateTunnelQuotaTimerRequest $request  UpdateTunnelQuotaTimerRequest
     *
     * @return UpdateTunnelQuotaTimerResponse UpdateTunnelQuotaTimerResponse
     */
    public function updateTunnelQuotaTimer($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTunnelQuotaTimerWithOptions($nickname, $request, $headers, $runtime);
    }
}

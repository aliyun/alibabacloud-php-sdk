<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
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
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageAmountSummaryRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageAmountSummaryResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSizeSummaryRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSizeSummaryResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSummaryComparedRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSummaryComparedResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSummaryComparedShrinkRequest;
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
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTunnelQuotaTimerResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersByRoleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaMetricRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaMetricResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryStorageMetricRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryStorageMetricResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricDetailRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricDetailResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\RetryMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\StartMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\StopMmsJobResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponse;
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
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateUsersToRoleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateUsersToRoleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Activate a Quota Plan Immediately.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyComputeQuotaPlanResponse
     *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ApplyComputeQuotaPlanResponse
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
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan/' . Url::percentEncode($planName) . '/apply',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activate a Quota Plan Immediately.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @returns ApplyComputeQuotaPlanResponse
     *
     * @param string $nickname
     * @param string $planName
     *
     * @return ApplyComputeQuotaPlanResponse
     */
    public function applyComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * Create MaxCompute ComputeQuotaPlan.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - CreateComputeQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeQuotaPlanResponse
     *
     * @param string                        $nickname
     * @param CreateComputeQuotaPlanRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateComputeQuotaPlanResponse
     */
    public function createComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create MaxCompute ComputeQuotaPlan.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - CreateComputeQuotaPlanRequest
     *
     * @returns CreateComputeQuotaPlanResponse
     *
     * @param string                        $nickname
     * @param CreateComputeQuotaPlanRequest $request
     *
     * @return CreateComputeQuotaPlanResponse
     */
    public function createComputeQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * CreateMmsDataSource.
     *
     * @param request - CreateMmsDataSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMmsDataSourceResponse
     *
     * @param CreateMmsDataSourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMmsDataSourceResponse
     */
    public function createMmsDataSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networklink) {
            @$body['networklink'] = $request->networklink;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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

        return CreateMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateMmsDataSource.
     *
     * @param request - CreateMmsDataSourceRequest
     *
     * @returns CreateMmsDataSourceResponse
     *
     * @param CreateMmsDataSourceRequest $request
     *
     * @return CreateMmsDataSourceResponse
     */
    public function createMmsDataSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsDataSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据源的更新元数据操作.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMmsFetchMetadataJobResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateMmsFetchMetadataJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/scans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMmsFetchMetadataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据源的更新元数据操作.
     *
     * @returns CreateMmsFetchMetadataJobResponse
     *
     * @param string $sourceId
     *
     * @return CreateMmsFetchMetadataJobResponse
     */
    public function createMmsFetchMetadataJob($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsFetchMetadataJobWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * 创建迁移任务
     *
     * @param request - CreateMmsJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMmsJobResponse
     *
     * @param string              $sourceId
     * @param CreateMmsJobRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMmsJobResponse
     */
    public function createMmsJobWithOptions($sourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->columnMapping) {
            @$body['columnMapping'] = $request->columnMapping;
        }

        if (null !== $request->dstDbName) {
            @$body['dstDbName'] = $request->dstDbName;
        }

        if (null !== $request->dstSchemaName) {
            @$body['dstSchemaName'] = $request->dstSchemaName;
        }

        if (null !== $request->enableDataMigration) {
            @$body['enableDataMigration'] = $request->enableDataMigration;
        }

        if (null !== $request->enableSchemaMigration) {
            @$body['enableSchemaMigration'] = $request->enableSchemaMigration;
        }

        if (null !== $request->enableVerification) {
            @$body['enableVerification'] = $request->enableVerification;
        }

        if (null !== $request->eta) {
            @$body['eta'] = $request->eta;
        }

        if (null !== $request->increment) {
            @$body['increment'] = $request->increment;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->others) {
            @$body['others'] = $request->others;
        }

        if (null !== $request->partitionFilters) {
            @$body['partitionFilters'] = $request->partitionFilters;
        }

        if (null !== $request->partitions) {
            @$body['partitions'] = $request->partitions;
        }

        if (null !== $request->schemaOnly) {
            @$body['schemaOnly'] = $request->schemaOnly;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceName) {
            @$body['sourceName'] = $request->sourceName;
        }

        if (null !== $request->srcDbName) {
            @$body['srcDbName'] = $request->srcDbName;
        }

        if (null !== $request->srcSchemaName) {
            @$body['srcSchemaName'] = $request->srcSchemaName;
        }

        if (null !== $request->tableBlackList) {
            @$body['tableBlackList'] = $request->tableBlackList;
        }

        if (null !== $request->tableMapping) {
            @$body['tableMapping'] = $request->tableMapping;
        }

        if (null !== $request->tableWhiteList) {
            @$body['tableWhiteList'] = $request->tableWhiteList;
        }

        if (null !== $request->tables) {
            @$body['tables'] = $request->tables;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMmsJob',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建迁移任务
     *
     * @param request - CreateMmsJobRequest
     *
     * @returns CreateMmsJobResponse
     *
     * @param string              $sourceId
     * @param CreateMmsJobRequest $request
     *
     * @return CreateMmsJobResponse
     */
    public function createMmsJob($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMmsJobWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * Creates a package.
     *
     * @param request - CreatePackageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePackageResponse
     *
     * @param string               $projectName
     * @param CreatePackageRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreatePackageResponse
     */
    public function createPackageWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isInstall) {
            @$query['isInstall'] = $request->isInstall;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreatePackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/packages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a package.
     *
     * @param request - CreatePackageRequest
     *
     * @returns CreatePackageResponse
     *
     * @param string               $projectName
     * @param CreatePackageRequest $request
     *
     * @return CreatePackageResponse
     */
    public function createPackage($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPackageWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Creates a MaxCompute project.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
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

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a MaxCompute project.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a quota plan.
     *
     * @param request - CreateQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateQuotaPlanResponse
     */
    public function createQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/plans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a quota plan.
     *
     * @param request - CreateQuotaPlanRequest
     *
     * @returns CreateQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request
     *
     * @return CreateQuotaPlanResponse
     */
    public function createQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Creates a role at the MaxCompute project level.
     *
     * @param request - CreateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param string            $projectName
     * @param CreateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a role at the MaxCompute project level.
     *
     * @param request - CreateRoleRequest
     *
     * @returns CreateRoleResponse
     *
     * @param string            $projectName
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Delete MaxCompute compute quota plan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComputeQuotaPlanResponse
     *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteComputeQuotaPlanResponse
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
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan/' . Url::percentEncode($planName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete MaxCompute compute quota plan.
     *
     * @returns DeleteComputeQuotaPlanResponse
     *
     * @param string $nickname
     * @param string $planName
     *
     * @return DeleteComputeQuotaPlanResponse
     */
    public function deleteComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * 删除数据源.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMmsDataSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMmsDataSourceResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据源.
     *
     * @returns DeleteMmsDataSourceResponse
     *
     * @param string $sourceId
     *
     * @return DeleteMmsDataSourceResponse
     */
    public function deleteMmsDataSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMmsDataSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * 删除迁移计划.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMmsJobResponse
     *
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMmsJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除迁移计划.
     *
     * @returns DeleteMmsJobResponse
     *
     * @param string $sourceId
     * @param string $jobId
     *
     * @return DeleteMmsJobResponse
     */
    public function deleteMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * Deletes a quota plan.
     *
     * @param request - DeleteQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/plans/' . Url::percentEncode($planName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quota plan.
     *
     * @param request - DeleteQuotaPlanRequest
     *
     * @returns DeleteQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request
     *
     * @return DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * GetComputeEffectivePlan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComputeEffectivePlanResponse
     *
     * @param string         $nickname
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetComputeEffectivePlanResponse
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
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeEffectivePlan/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetComputeEffectivePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetComputeEffectivePlan.
     *
     * @returns GetComputeEffectivePlanResponse
     *
     * @param string $nickname
     *
     * @return GetComputeEffectivePlanResponse
     */
    public function getComputeEffectivePlan($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeEffectivePlanWithOptions($nickname, $headers, $runtime);
    }

    /**
     * Get detailed information of a single compute quota plan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComputeQuotaPlanResponse
     *
     * @param string         $nickname
     * @param string         $planName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetComputeQuotaPlanResponse
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
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan/' . Url::percentEncode($planName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get detailed information of a single compute quota plan.
     *
     * @returns GetComputeQuotaPlanResponse
     *
     * @param string $nickname
     * @param string $planName
     *
     * @return GetComputeQuotaPlanResponse
     */
    public function getComputeQuotaPlan($nickname, $planName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeQuotaPlanWithOptions($nickname, $planName, $headers, $runtime);
    }

    /**
     * Displays the time-specific configuration of compute quota.
     *
     * @param request - GetComputeQuotaScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComputeQuotaScheduleResponse
     *
     * @param string                         $nickname
     * @param GetComputeQuotaScheduleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetComputeQuotaScheduleResponse
     */
    public function getComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayTimezone) {
            @$query['displayTimezone'] = $request->displayTimezone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetComputeQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaSchedule',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetComputeQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the time-specific configuration of compute quota.
     *
     * @param request - GetComputeQuotaScheduleRequest
     *
     * @returns GetComputeQuotaScheduleResponse
     *
     * @param string                         $nickname
     * @param GetComputeQuotaScheduleRequest $request
     *
     * @return GetComputeQuotaScheduleResponse
     */
    public function getComputeQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Queries the basic information about a job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobInfoResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobInfoResponse
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
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($instanceId) . '/info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about a job.
     *
     * @returns GetJobInfoResponse
     *
     * @param string $instanceId
     *
     * @return GetJobInfoResponse
     */
    public function getJobInfo($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobInfoWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Performs statistics on all jobs that are complete on a specified day and obtains the total resource usage of each job executor on a daily basis.
     *
     * @param tmpReq - GetJobResourceUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResourceUsageResponse
     *
     * @param GetJobResourceUsageRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetJobResourceUsageResponse
     */
    public function getJobResourceUsageWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetJobResourceUsageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobOwnerList) {
            $request->jobOwnerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }

        if (null !== $tmpReq->quotaNicknameList) {
            $request->quotaNicknameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }

        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->jobOwnerListShrink) {
            @$query['jobOwnerList'] = $request->jobOwnerListShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->quotaNicknameListShrink) {
            @$query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return GetJobResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs statistics on all jobs that are complete on a specified day and obtains the total resource usage of each job executor on a daily basis.
     *
     * @param request - GetJobResourceUsageRequest
     *
     * @returns GetJobResourceUsageResponse
     *
     * @param GetJobResourceUsageRequest $request
     *
     * @return GetJobResourceUsageResponse
     */
    public function getJobResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobResourceUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * GetMmsAsyncTask.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsAsyncTaskResponse
     *
     * @param string         $sourceId
     * @param string         $asyncTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsAsyncTaskResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/asyncTasks/' . Url::percentEncode($asyncTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsAsyncTask.
     *
     * @returns GetMmsAsyncTaskResponse
     *
     * @param string $sourceId
     * @param string $asyncTaskId
     *
     * @return GetMmsAsyncTaskResponse
     */
    public function getMmsAsyncTask($sourceId, $asyncTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsAsyncTaskWithOptions($sourceId, $asyncTaskId, $headers, $runtime);
    }

    /**
     * 获取数据源.
     *
     * @param request - GetMmsDataSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsDataSourceResponse
     *
     * @param string                  $sourceId
     * @param GetMmsDataSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMmsDataSourceResponse
     */
    public function getMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        if (null !== $request->withConfig) {
            @$query['withConfig'] = $request->withConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据源.
     *
     * @param request - GetMmsDataSourceRequest
     *
     * @returns GetMmsDataSourceResponse
     *
     * @param string                  $sourceId
     * @param GetMmsDataSourceRequest $request
     *
     * @return GetMmsDataSourceResponse
     */
    public function getMmsDataSource($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * GetMmsDb.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsDbResponse
     *
     * @param string         $sourceId
     * @param string         $dbId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsDbResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/dbs/' . Url::percentEncode($dbId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsDb.
     *
     * @returns GetMmsDbResponse
     *
     * @param string $sourceId
     * @param string $dbId
     *
     * @return GetMmsDbResponse
     */
    public function getMmsDb($sourceId, $dbId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsDbWithOptions($sourceId, $dbId, $headers, $runtime);
    }

    /**
     * GetMmsFetchMetadataJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsFetchMetadataJobResponse
     *
     * @param string         $sourceId
     * @param string         $scanId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsFetchMetadataJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/scans/' . Url::percentEncode($scanId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsFetchMetadataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsFetchMetadataJob.
     *
     * @returns GetMmsFetchMetadataJobResponse
     *
     * @param string $sourceId
     * @param string $scanId
     *
     * @return GetMmsFetchMetadataJobResponse
     */
    public function getMmsFetchMetadataJob($sourceId, $scanId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsFetchMetadataJobWithOptions($sourceId, $scanId, $headers, $runtime);
    }

    /**
     * 获取迁移计划.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsJobResponse
     *
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取迁移计划.
     *
     * @returns GetMmsJobResponse
     *
     * @param string $sourceId
     * @param string $jobId
     *
     * @return GetMmsJobResponse
     */
    public function getMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * GetMmsPartition.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsPartitionResponse
     *
     * @param string         $sourceId
     * @param string         $partitionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsPartitionResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/partitions/' . Url::percentEncode($partitionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsPartition.
     *
     * @returns GetMmsPartitionResponse
     *
     * @param string $sourceId
     * @param string $partitionId
     *
     * @return GetMmsPartitionResponse
     */
    public function getMmsPartition($sourceId, $partitionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsPartitionWithOptions($sourceId, $partitionId, $headers, $runtime);
    }

    /**
     * GetMmsTable.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsTableResponse
     *
     * @param string         $sourceId
     * @param string         $tableId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsTableResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/tables/' . Url::percentEncode($tableId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsTable.
     *
     * @returns GetMmsTableResponse
     *
     * @param string $sourceId
     * @param string $tableId
     *
     * @return GetMmsTableResponse
     */
    public function getMmsTable($sourceId, $tableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsTableWithOptions($sourceId, $tableId, $headers, $runtime);
    }

    /**
     * GetMmsTask.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMmsTaskResponse
     *
     * @param string         $sourceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMmsTaskResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMmsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetMmsTask.
     *
     * @returns GetMmsTaskResponse
     *
     * @param string $sourceId
     * @param string $taskId
     *
     * @return GetMmsTaskResponse
     */
    public function getMmsTask($sourceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMmsTaskWithOptions($sourceId, $taskId, $headers, $runtime);
    }

    /**
     * Obtains the information about a package.
     *
     * @param request - GetPackageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPackageResponse
     *
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPackageResponse
     */
    public function getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceProject) {
            @$query['sourceProject'] = $request->sourceProject;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/packages/' . Url::percentEncode($packageName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about a package.
     *
     * @param request - GetPackageRequest
     *
     * @returns GetPackageResponse
     *
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request
     *
     * @return GetPackageResponse
     */
    public function getPackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a MaxCompute project.
     *
     * @param request - GetProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string            $projectName
     * @param GetProjectRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a MaxCompute project.
     *
     * @param request - GetProjectRequest
     *
     * @returns GetProjectResponse
     *
     * @param string            $projectName
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Obtains the information about a specified level-1 quota.
     *
     * @param request - GetQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaResponse
     *
     * @param string          $nickname
     * @param GetQuotaRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->akProven) {
            @$query['AkProven'] = $request->akProven;
        }

        if (null !== $request->mock) {
            @$query['mock'] = $request->mock;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about a specified level-1 quota.
     *
     * @param request - GetQuotaRequest
     *
     * @returns GetQuotaResponse
     *
     * @param string          $nickname
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Obtains the information of a quota plan.
     *
     * @param request - GetQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaPlanResponse
     *
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetQuotaPlanResponse
     */
    public function getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/plans/' . Url::percentEncode($planName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information of a quota plan.
     *
     * @param request - GetQuotaPlanRequest
     *
     * @returns GetQuotaPlanResponse
     *
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request
     *
     * @return GetQuotaPlanResponse
     */
    public function getQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * Obtains the scheduling plan for a quota plan.
     *
     * @param request - GetQuotaScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaScheduleResponse
     *
     * @param string                  $nickname
     * @param GetQuotaScheduleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetQuotaScheduleResponse
     */
    public function getQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayTimezone) {
            @$query['displayTimezone'] = $request->displayTimezone;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/schedule',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the scheduling plan for a quota plan.
     *
     * @param request - GetQuotaScheduleRequest
     *
     * @returns GetQuotaScheduleResponse
     *
     * @param string                  $nickname
     * @param GetQuotaScheduleRequest $request
     *
     * @return GetQuotaScheduleResponse
     */
    public function getQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Queries quota resource consumption information.
     *
     * @param tmpReq - GetQuotaUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaUsageResponse
     *
     * @param string               $nickname
     * @param GetQuotaUsageRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetQuotaUsageResponse
     */
    public function getQuotaUsageWithOptions($nickname, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetQuotaUsageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->plotTypes) {
            $request->plotTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->plotTypes, 'plotTypes', 'simple');
        }

        if (null !== $tmpReq->yAxisTypes) {
            $request->yAxisTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->yAxisTypes, 'yAxisTypes', 'simple');
        }

        $query = [];
        if (null !== $request->aggMethod) {
            @$query['aggMethod'] = $request->aggMethod;
        }

        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->plotTypesShrink) {
            @$query['plotTypes'] = $request->plotTypesShrink;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->subQuotaNickname) {
            @$query['subQuotaNickname'] = $request->subQuotaNickname;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        if (null !== $request->yAxisTypesShrink) {
            @$query['yAxisTypes'] = $request->yAxisTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuotaUsage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries quota resource consumption information.
     *
     * @param request - GetQuotaUsageRequest
     *
     * @returns GetQuotaUsageResponse
     *
     * @param string               $nickname
     * @param GetQuotaUsageRequest $request
     *
     * @return GetQuotaUsageResponse
     */
    public function getQuotaUsage($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaUsageWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Obtains the ACL-based permissions that is granted to a project-level role.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleAclResponse
     *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleAclResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles/' . Url::percentEncode($roleName) . '/roleAcl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRoleAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the ACL-based permissions that is granted to a project-level role.
     *
     * @returns GetRoleAclResponse
     *
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRoleAclResponse
     */
    public function getRoleAcl($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * Obtains ACL-based permissions on an object that are granted to a project-level role.
     *
     * @param request - GetRoleAclOnObjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleAclOnObjectResponse
     *
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->objectName) {
            @$query['objectName'] = $request->objectName;
        }

        if (null !== $request->objectType) {
            @$query['objectType'] = $request->objectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRoleAclOnObject',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles/' . Url::percentEncode($roleName) . '/acl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRoleAclOnObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains ACL-based permissions on an object that are granted to a project-level role.
     *
     * @param request - GetRoleAclOnObjectRequest
     *
     * @returns GetRoleAclOnObjectResponse
     *
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request
     *
     * @return GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObject($projectName, $roleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime);
    }

    /**
     * Obtains the policy that is attached to a project-level role.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRolePolicyResponse
     *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRolePolicyResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles/' . Url::percentEncode($roleName) . '/policy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRolePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the policy that is attached to a project-level role.
     *
     * @returns GetRolePolicyResponse
     *
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRolePolicyResponse
     */
    public function getRolePolicy($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRolePolicyWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * Obtains the running state data of jobs that are in the running state in a specified period of time.
     *
     * @param tmpReq - GetRunningJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRunningJobsResponse
     *
     * @param GetRunningJobsRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetRunningJobsResponse
     */
    public function getRunningJobsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetRunningJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobOwnerList) {
            $request->jobOwnerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }

        if (null !== $tmpReq->quotaNicknameList) {
            $request->quotaNicknameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }

        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->jobOwnerListShrink) {
            @$query['jobOwnerList'] = $request->jobOwnerListShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->quotaNicknameListShrink) {
            @$query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return GetRunningJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the running state data of jobs that are in the running state in a specified period of time.
     *
     * @param request - GetRunningJobsRequest
     *
     * @returns GetRunningJobsResponse
     *
     * @param GetRunningJobsRequest $request
     *
     * @return GetRunningJobsResponse
     */
    public function getRunningJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunningJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - GetStorageAmountSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStorageAmountSummaryResponse
     *
     * @param GetStorageAmountSummaryRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetStorageAmountSummaryResponse
     */
    public function getStorageAmountSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStorageAmountSummary',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/amount',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStorageAmountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetStorageAmountSummaryRequest
     *
     * @returns GetStorageAmountSummaryResponse
     *
     * @param GetStorageAmountSummaryRequest $request
     *
     * @return GetStorageAmountSummaryResponse
     */
    public function getStorageAmountSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStorageAmountSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - GetStorageSizeSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStorageSizeSummaryResponse
     *
     * @param GetStorageSizeSummaryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetStorageSizeSummaryResponse
     */
    public function getStorageSizeSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStorageSizeSummary',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/size',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStorageSizeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetStorageSizeSummaryRequest
     *
     * @returns GetStorageSizeSummaryResponse
     *
     * @param GetStorageSizeSummaryRequest $request
     *
     * @return GetStorageSizeSummaryResponse
     */
    public function getStorageSizeSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStorageSizeSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param tmpReq - GetStorageSummaryComparedRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStorageSummaryComparedResponse
     *
     * @param string                           $type
     * @param GetStorageSummaryComparedRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetStorageSummaryComparedResponse
     */
    public function getStorageSummaryComparedWithOptions($type, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetStorageSummaryComparedShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->projects) {
            $request->projectsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->projects, 'projects', 'simple');
        }

        $query = [];
        if (null !== $request->beginDate) {
            @$query['beginDate'] = $request->beginDate;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->projectsShrink) {
            @$query['projects'] = $request->projectsShrink;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStorageSummaryCompared',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/' . Url::percentEncode($type) . '/compared',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStorageSummaryComparedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetStorageSummaryComparedRequest
     *
     * @returns GetStorageSummaryComparedResponse
     *
     * @param string                           $type
     * @param GetStorageSummaryComparedRequest $request
     *
     * @return GetStorageSummaryComparedResponse
     */
    public function getStorageSummaryCompared($type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStorageSummaryComparedWithOptions($type, $request, $headers, $runtime);
    }

    /**
     * Views the information about MaxCompute internal tables, views, external tables, clustered tables, or transactional tables.
     *
     * @param request - GetTableInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableInfoResponse
     *
     * @param string              $projectName
     * @param string              $tableName
     * @param GetTableInfoRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetTableInfoResponse
     */
    public function getTableInfoWithOptions($projectName, $tableName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->schemaName) {
            @$query['schemaName'] = $request->schemaName;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/tables/' . Url::percentEncode($tableName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Views the information about MaxCompute internal tables, views, external tables, clustered tables, or transactional tables.
     *
     * @param request - GetTableInfoRequest
     *
     * @returns GetTableInfoResponse
     *
     * @param string              $projectName
     * @param string              $tableName
     * @param GetTableInfoRequest $request
     *
     * @return GetTableInfoResponse
     */
    public function getTableInfo($projectName, $tableName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableInfoWithOptions($projectName, $tableName, $request, $headers, $runtime);
    }

    /**
     * Obtains the trusted projects of the current project.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrustedProjectsResponse
     *
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTrustedProjectsResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/trustedProjects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrustedProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the trusted projects of the current project.
     *
     * @returns GetTrustedProjectsResponse
     *
     * @param string $projectName
     *
     * @return GetTrustedProjectsResponse
     */
    public function getTrustedProjects($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrustedProjectsWithOptions($projectName, $headers, $runtime);
    }

    /**
     * Terminates a running job.
     *
     * @param request - KillJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillJobsResponse
     *
     * @param KillJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return KillJobsResponse
     */
    public function killJobsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return KillJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a running job.
     *
     * @param request - KillJobsRequest
     *
     * @returns KillJobsResponse
     *
     * @param KillJobsRequest $request
     *
     * @return KillJobsResponse
     */
    public function killJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->killJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Get compute usage of pay-as-you-go jobs.
     *
     * @param request - ListComputeMetricsByInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeMetricsByInstanceResponse
     *
     * @param ListComputeMetricsByInstanceRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListComputeMetricsByInstanceResponse
     */
    public function listComputeMetricsByInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endDate) {
            @$body['endDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->jobOwner) {
            @$body['jobOwner'] = $request->jobOwner;
        }

        if (null !== $request->pageNumber) {
            @$body['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectNames) {
            @$body['projectNames'] = $request->projectNames;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        if (null !== $request->specCodes) {
            @$body['specCodes'] = $request->specCodes;
        }

        if (null !== $request->startDate) {
            @$body['startDate'] = $request->startDate;
        }

        if (null !== $request->types) {
            @$body['types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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

        return ListComputeMetricsByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get compute usage of pay-as-you-go jobs.
     *
     * @param request - ListComputeMetricsByInstanceRequest
     *
     * @returns ListComputeMetricsByInstanceResponse
     *
     * @param ListComputeMetricsByInstanceRequest $request
     *
     * @return ListComputeMetricsByInstanceResponse
     */
    public function listComputeMetricsByInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeMetricsByInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Get computeQuotaPlan list.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeQuotaPlanResponse
     *
     * @param string         $nickname
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListComputeQuotaPlanResponse
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
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get computeQuotaPlan list.
     *
     * @returns ListComputeQuotaPlanResponse
     *
     * @param string $nickname
     *
     * @return ListComputeQuotaPlanResponse
     */
    public function listComputeQuotaPlan($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeQuotaPlanWithOptions($nickname, $headers, $runtime);
    }

    /**
     * Obtains functions in a MaxCompute project.
     *
     * @param request - ListFunctionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionsResponse
     *
     * @param string               $projectName
     * @param ListFunctionsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
     */
    public function listFunctionsWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['marker'] = $request->marker;
        }

        if (null !== $request->maxItem) {
            @$query['maxItem'] = $request->maxItem;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->schemaName) {
            @$query['schemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctions',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/functions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains functions in a MaxCompute project.
     *
     * @param request - ListFunctionsRequest
     *
     * @returns ListFunctionsResponse
     *
     * @param string               $projectName
     * @param ListFunctionsRequest $request
     *
     * @return ListFunctionsResponse
     */
    public function listFunctions($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Views a list of jobs.
     *
     * @param request - ListJobInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobInfosResponse
     *
     * @param ListJobInfosRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListJobInfosResponse
     */
    public function listJobInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ascOrder) {
            @$query['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->orderColumn) {
            @$query['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->extNodeIdList) {
            @$body['extNodeIdList'] = $request->extNodeIdList;
        }

        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->instanceIdList) {
            @$body['instanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->jobOwnerList) {
            @$body['jobOwnerList'] = $request->jobOwnerList;
        }

        if (null !== $request->priorityList) {
            @$body['priorityList'] = $request->priorityList;
        }

        if (null !== $request->projectList) {
            @$body['projectList'] = $request->projectList;
        }

        if (null !== $request->quotaNickname) {
            @$body['quotaNickname'] = $request->quotaNickname;
        }

        if (null !== $request->sceneTagList) {
            @$body['sceneTagList'] = $request->sceneTagList;
        }

        if (null !== $request->signatureList) {
            @$body['signatureList'] = $request->signatureList;
        }

        if (null !== $request->sortByList) {
            @$body['sortByList'] = $request->sortByList;
        }

        if (null !== $request->sortOrderList) {
            @$body['sortOrderList'] = $request->sortOrderList;
        }

        if (null !== $request->statusList) {
            @$body['statusList'] = $request->statusList;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        if (null !== $request->typeList) {
            @$body['typeList'] = $request->typeList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return ListJobInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Views a list of jobs.
     *
     * @param request - ListJobInfosRequest
     *
     * @returns ListJobInfosResponse
     *
     * @param ListJobInfosRequest $request
     *
     * @return ListJobInfosResponse
     */
    public function listJobInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve performance metrics for completed jobs.
     *
     * @param request - ListJobMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobMetricResponse
     *
     * @param ListJobMetricRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobMetricResponse
     */
    public function listJobMetricWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->group) {
            @$body['group'] = $request->group;
        }

        if (null !== $request->metric) {
            @$body['metric'] = $request->metric;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->project) {
            @$body['project'] = $request->project;
        }

        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return ListJobMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve performance metrics for completed jobs.
     *
     * @param request - ListJobMetricRequest
     *
     * @returns ListJobMetricResponse
     *
     * @param ListJobMetricRequest $request
     *
     * @return ListJobMetricResponse
     */
    public function listJobMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * Views a list of job snapshot data at a specific point in time.
     *
     * @param request - ListJobSnapshotInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobSnapshotInfosResponse
     *
     * @param ListJobSnapshotInfosRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListJobSnapshotInfosResponse
     */
    public function listJobSnapshotInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ascOrder) {
            @$query['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->orderColumn) {
            @$query['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $body = [];
        if (null !== $request->extNodeIdList) {
            @$body['extNodeIdList'] = $request->extNodeIdList;
        }

        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->instanceIdList) {
            @$body['instanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->jobOwnerList) {
            @$body['jobOwnerList'] = $request->jobOwnerList;
        }

        if (null !== $request->priorityList) {
            @$body['priorityList'] = $request->priorityList;
        }

        if (null !== $request->projectList) {
            @$body['projectList'] = $request->projectList;
        }

        if (null !== $request->quotaNickname) {
            @$body['quotaNickname'] = $request->quotaNickname;
        }

        if (null !== $request->signatureList) {
            @$body['signatureList'] = $request->signatureList;
        }

        if (null !== $request->sortByList) {
            @$body['sortByList'] = $request->sortByList;
        }

        if (null !== $request->sortOrderList) {
            @$body['sortOrderList'] = $request->sortOrderList;
        }

        if (null !== $request->statusList) {
            @$body['statusList'] = $request->statusList;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        if (null !== $request->typeList) {
            @$body['typeList'] = $request->typeList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return ListJobSnapshotInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Views a list of job snapshot data at a specific point in time.
     *
     * @param request - ListJobSnapshotInfosRequest
     *
     * @returns ListJobSnapshotInfosResponse
     *
     * @param ListJobSnapshotInfosRequest $request
     *
     * @return ListJobSnapshotInfosResponse
     */
    public function listJobSnapshotInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobSnapshotInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * ListMmsDataSources.
     *
     * @param request - ListMmsDataSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsDataSourcesResponse
     *
     * @param ListMmsDataSourcesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMmsDataSourcesResponse
     */
    public function listMmsDataSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return ListMmsDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMmsDataSources.
     *
     * @param request - ListMmsDataSourcesRequest
     *
     * @returns ListMmsDataSourcesResponse
     *
     * @param ListMmsDataSourcesRequest $request
     *
     * @return ListMmsDataSourcesResponse
     */
    public function listMmsDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsDataSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一个数据源内“库”列表.
     *
     * @param tmpReq - ListMmsDbsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsDbsResponse
     *
     * @param string            $sourceId
     * @param ListMmsDbsRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListMmsDbsResponse
     */
    public function listMmsDbsWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMmsDbsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sorter) {
            $request->sorterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sorter, 'sorter', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sorterShrink) {
            @$query['sorter'] = $request->sorterShrink;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsDbs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/dbs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一个数据源内“库”列表.
     *
     * @param request - ListMmsDbsRequest
     *
     * @returns ListMmsDbsResponse
     *
     * @param string            $sourceId
     * @param ListMmsDbsRequest $request
     *
     * @return ListMmsDbsResponse
     */
    public function listMmsDbs($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsDbsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * ListMmsJobs.
     *
     * @param request - ListMmsJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsJobsResponse
     *
     * @param string             $sourceId
     * @param ListMmsJobsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMmsJobsResponse
     */
    public function listMmsJobsWithOptions($sourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dstDbName) {
            @$query['dstDbName'] = $request->dstDbName;
        }

        if (null !== $request->dstTableName) {
            @$query['dstTableName'] = $request->dstTableName;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->srcDbName) {
            @$query['srcDbName'] = $request->srcDbName;
        }

        if (null !== $request->srcTableName) {
            @$query['srcTableName'] = $request->srcTableName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->stopped) {
            @$query['stopped'] = $request->stopped;
        }

        if (null !== $request->sorter) {
            @$query['sorter'] = $request->sorter;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsJobs',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMmsJobs.
     *
     * @param request - ListMmsJobsRequest
     *
     * @returns ListMmsJobsResponse
     *
     * @param string             $sourceId
     * @param ListMmsJobsRequest $request
     *
     * @return ListMmsJobsResponse
     */
    public function listMmsJobs($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsJobsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * 获取元数据-分区.
     *
     * @param tmpReq - ListMmsPartitionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsPartitionsResponse
     *
     * @param string                   $sourceId
     * @param ListMmsPartitionsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListMmsPartitionsResponse
     */
    public function listMmsPartitionsWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMmsPartitionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'status', 'json');
        }

        $query = [];
        if (null !== $request->dbId) {
            @$query['dbId'] = $request->dbId;
        }

        if (null !== $request->dbName) {
            @$query['dbName'] = $request->dbName;
        }

        if (null !== $request->lastDdlTimeEnd) {
            @$query['lastDdlTimeEnd'] = $request->lastDdlTimeEnd;
        }

        if (null !== $request->lastDdlTimeStart) {
            @$query['lastDdlTimeStart'] = $request->lastDdlTimeStart;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->statusShrink) {
            @$query['status'] = $request->statusShrink;
        }

        if (null !== $request->tableId) {
            @$query['tableId'] = $request->tableId;
        }

        if (null !== $request->tableName) {
            @$query['tableName'] = $request->tableName;
        }

        if (null !== $request->updated) {
            @$query['updated'] = $request->updated;
        }

        if (null !== $request->value) {
            @$query['value'] = $request->value;
        }

        if (null !== $request->sorter) {
            @$query['sorter'] = $request->sorter;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsPartitions',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/partitions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsPartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取元数据-分区.
     *
     * @param request - ListMmsPartitionsRequest
     *
     * @returns ListMmsPartitionsResponse
     *
     * @param string                   $sourceId
     * @param ListMmsPartitionsRequest $request
     *
     * @return ListMmsPartitionsResponse
     */
    public function listMmsPartitions($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsPartitionsWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * ListMmsTables.
     *
     * @param tmpReq - ListMmsTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsTablesResponse
     *
     * @param string               $sourceId
     * @param ListMmsTablesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListMmsTablesResponse
     */
    public function listMmsTablesWithOptions($sourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMmsTablesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'status', 'json');
        }

        $query = [];
        if (null !== $request->dbId) {
            @$query['dbId'] = $request->dbId;
        }

        if (null !== $request->dbName) {
            @$query['dbName'] = $request->dbName;
        }

        if (null !== $request->dstName) {
            @$query['dstName'] = $request->dstName;
        }

        if (null !== $request->dstProjectName) {
            @$query['dstProjectName'] = $request->dstProjectName;
        }

        if (null !== $request->dstSchemaName) {
            @$query['dstSchemaName'] = $request->dstSchemaName;
        }

        if (null !== $request->hasPartitions) {
            @$query['hasPartitions'] = $request->hasPartitions;
        }

        if (null !== $request->lastDdlTimeEnd) {
            @$query['lastDdlTimeEnd'] = $request->lastDdlTimeEnd;
        }

        if (null !== $request->lastDdlTimeStart) {
            @$query['lastDdlTimeStart'] = $request->lastDdlTimeStart;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->onlyName) {
            @$query['onlyName'] = $request->onlyName;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->statusShrink) {
            @$query['status'] = $request->statusShrink;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->sorter) {
            @$query['sorter'] = $request->sorter;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsTables',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMmsTables.
     *
     * @param request - ListMmsTablesRequest
     *
     * @returns ListMmsTablesResponse
     *
     * @param string               $sourceId
     * @param ListMmsTablesRequest $request
     *
     * @return ListMmsTablesResponse
     */
    public function listMmsTables($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTablesWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * ListMmsTaskLogs.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsTaskLogsResponse
     *
     * @param string         $sourceId
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListMmsTaskLogsResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/tasks/' . Url::percentEncode($taskId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMmsTaskLogs.
     *
     * @returns ListMmsTaskLogsResponse
     *
     * @param string $sourceId
     * @param string $taskId
     *
     * @return ListMmsTaskLogsResponse
     */
    public function listMmsTaskLogs($sourceId, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTaskLogsWithOptions($sourceId, $taskId, $headers, $runtime);
    }

    /**
     * ListMmsTasks.
     *
     * @param request - ListMmsTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmsTasksResponse
     *
     * @param string              $sourceId
     * @param ListMmsTasksRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMmsTasksResponse
     */
    public function listMmsTasksWithOptions($sourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dstDbName) {
            @$query['dstDbName'] = $request->dstDbName;
        }

        if (null !== $request->dstTableName) {
            @$query['dstTableName'] = $request->dstTableName;
        }

        if (null !== $request->jobId) {
            @$query['jobId'] = $request->jobId;
        }

        if (null !== $request->jobName) {
            @$query['jobName'] = $request->jobName;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->partition) {
            @$query['partition'] = $request->partition;
        }

        if (null !== $request->srcDbName) {
            @$query['srcDbName'] = $request->srcDbName;
        }

        if (null !== $request->srcTableName) {
            @$query['srcTableName'] = $request->srcTableName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->sorter) {
            @$query['sorter'] = $request->sorter;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmsTasks',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMmsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMmsTasks.
     *
     * @param request - ListMmsTasksRequest
     *
     * @returns ListMmsTasksResponse
     *
     * @param string              $sourceId
     * @param ListMmsTasksRequest $request
     *
     * @return ListMmsTasksResponse
     */
    public function listMmsTasks($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMmsTasksWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * Queries the packages in a MaxCompute project.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPackagesResponse
     *
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPackagesResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/packages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the packages in a MaxCompute project.
     *
     * @returns ListPackagesResponse
     *
     * @param string $projectName
     *
     * @return ListPackagesResponse
     */
    public function listPackages($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPackagesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * Queries a list of users in a project.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectUsersResponse
     *
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectUsersResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of users in a project.
     *
     * @returns ListProjectUsersResponse
     *
     * @param string $projectName
     *
     * @return ListProjectUsersResponse
     */
    public function listProjectUsers($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectUsersWithOptions($projectName, $headers, $runtime);
    }

    /**
     * Queries a list of MaxCompute projects.
     *
     * @param request - ListProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listSystemCatalog) {
            @$query['listSystemCatalog'] = $request->listSystemCatalog;
        }

        if (null !== $request->marker) {
            @$query['marker'] = $request->marker;
        }

        if (null !== $request->maxItem) {
            @$query['maxItem'] = $request->maxItem;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->quotaName) {
            @$query['quotaName'] = $request->quotaName;
        }

        if (null !== $request->quotaNickName) {
            @$query['quotaNickName'] = $request->quotaNickName;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->saleTags) {
            @$query['saleTags'] = $request->saleTags;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of MaxCompute projects.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries quotas.
     *
     * @param request - ListQuotasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingType) {
            @$query['billingType'] = $request->billingType;
        }

        if (null !== $request->marker) {
            @$query['marker'] = $request->marker;
        }

        if (null !== $request->maxItem) {
            @$query['maxItem'] = $request->maxItem;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->saleTags) {
            @$query['saleTags'] = $request->saleTags;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries quotas.
     *
     * @param request - ListQuotasRequest
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     *
     * @return ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains quota plans.
     *
     * @param request - ListQuotasPlansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotasPlansResponse
     *
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListQuotasPlansResponse
     */
    public function listQuotasPlansWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotasPlans',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/plans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotasPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains quota plans.
     *
     * @param request - ListQuotasPlansRequest
     *
     * @returns ListQuotasPlansResponse
     *
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request
     *
     * @return ListQuotasPlansResponse
     */
    public function listQuotasPlans($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasPlansWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Obtains resources in a MaxCompute project.
     *
     * @param request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param string               $projectName
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['marker'] = $request->marker;
        }

        if (null !== $request->maxItem) {
            @$query['maxItem'] = $request->maxItem;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->schemaName) {
            @$query['schemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains resources in a MaxCompute project.
     *
     * @param request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
     * @param string               $projectName
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Obtains MaxCompute project-level roles.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRolesResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains MaxCompute project-level roles.
     *
     * @returns ListRolesResponse
     *
     * @param string $projectName
     *
     * @return ListRolesResponse
     */
    public function listRoles($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * Queries the storage details of a specific partition in a partitioned table in a MaxCompute project.
     *
     * @param tmpReq - ListStoragePartitionsInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStoragePartitionsInfoResponse
     *
     * @param string                           $project
     * @param string                           $table
     * @param ListStoragePartitionsInfoRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListStoragePartitionsInfoResponse
     */
    public function listStoragePartitionsInfoWithOptions($project, $table, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListStoragePartitionsInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'types', 'json');
        }

        $query = [];
        if (null !== $request->ascOrder) {
            @$query['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->orderColumn) {
            @$query['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->partitionPrefix) {
            @$query['partitionPrefix'] = $request->partitionPrefix;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->schema) {
            @$query['schema'] = $request->schema;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->typesShrink) {
            @$query['types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStoragePartitionsInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/projects/' . Url::percentEncode($project) . '/tables/' . Url::percentEncode($table) . '/partitionsInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStoragePartitionsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage details of a specific partition in a partitioned table in a MaxCompute project.
     *
     * @param request - ListStoragePartitionsInfoRequest
     *
     * @returns ListStoragePartitionsInfoResponse
     *
     * @param string                           $project
     * @param string                           $table
     * @param ListStoragePartitionsInfoRequest $request
     *
     * @return ListStoragePartitionsInfoResponse
     */
    public function listStoragePartitionsInfo($project, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStoragePartitionsInfoWithOptions($project, $table, $request, $headers, $runtime);
    }

    /**
     * @param request - ListStorageProjectsInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStorageProjectsInfoResponse
     *
     * @param ListStorageProjectsInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStorageProjectsInfoResponse
     */
    public function listStorageProjectsInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ascOrder) {
            @$query['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->orderColumn) {
            @$query['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectPrefix) {
            @$query['projectPrefix'] = $request->projectPrefix;
        }

        if (null !== $request->recentDays) {
            @$query['recentDays'] = $request->recentDays;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStorageProjectsInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/projectsInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStorageProjectsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListStorageProjectsInfoRequest
     *
     * @returns ListStorageProjectsInfoResponse
     *
     * @param ListStorageProjectsInfoRequest $request
     *
     * @return ListStorageProjectsInfoResponse
     */
    public function listStorageProjectsInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStorageProjectsInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the table storage details of a MaxCompute project.
     *
     * @param tmpReq - ListStorageTablesInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStorageTablesInfoResponse
     *
     * @param string                       $project
     * @param ListStorageTablesInfoRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageTablesInfoResponse
     */
    public function listStorageTablesInfoWithOptions($project, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListStorageTablesInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'types', 'simple');
        }

        $query = [];
        if (null !== $request->ascOrder) {
            @$query['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        if (null !== $request->orderColumn) {
            @$query['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->recentDays) {
            @$query['recentDays'] = $request->recentDays;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->schema) {
            @$query['schema'] = $request->schema;
        }

        if (null !== $request->tablePrefix) {
            @$query['tablePrefix'] = $request->tablePrefix;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        if (null !== $request->typesShrink) {
            @$query['types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStorageTablesInfo',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/analysis/storage/projects/' . Url::percentEncode($project) . '/tablesInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStorageTablesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the table storage details of a MaxCompute project.
     *
     * @param request - ListStorageTablesInfoRequest
     *
     * @returns ListStorageTablesInfoResponse
     *
     * @param string                       $project
     * @param ListStorageTablesInfoRequest $request
     *
     * @return ListStorageTablesInfoResponse
     */
    public function listStorageTablesInfo($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStorageTablesInfoWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Obtains tables in a MaxCompute project.
     *
     * @param request - ListTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param string            $projectName
     * @param ListTablesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['marker'] = $request->marker;
        }

        if (null !== $request->maxItem) {
            @$query['maxItem'] = $request->maxItem;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->schemaName) {
            @$query['schemaName'] = $request->schemaName;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains tables in a MaxCompute project.
     *
     * @param request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param string            $projectName
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Displays the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTunnelQuotaTimerResponse
     *
     * @param string         $nickname
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTunnelQuotaTimerResponse
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
            'pathname' => '/api/v1/tunnel/' . Url::percentEncode($nickname) . '/timers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTunnelQuotaTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *
     * @returns ListTunnelQuotaTimerResponse
     *
     * @param string $nickname
     *
     * @return ListTunnelQuotaTimerResponse
     */
    public function listTunnelQuotaTimer($nickname)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTunnelQuotaTimerWithOptions($nickname, $headers, $runtime);
    }

    /**
     * Queries a list of all users under a tenant.
     *
     * @param request - ListUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of all users under a tenant.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains information about the users who are assigned a project-level role.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersByRoleResponse
     *
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUsersByRoleResponse
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
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles/' . Url::percentEncode($roleName) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersByRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains information about the users who are assigned a project-level role.
     *
     * @returns ListUsersByRoleResponse
     *
     * @param string $projectName
     * @param string $roleName
     *
     * @return ListUsersByRoleResponse
     */
    public function listUsersByRole($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersByRoleWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * Queries the information about a specified level-1 quota group.
     *
     * @param request - QueryQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryQuotaResponse
     *
     * @param string            $nickname
     * @param QueryQuotaRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return QueryQuotaResponse
     */
    public function queryQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->akProven) {
            @$query['AkProven'] = $request->akProven;
        }

        if (null !== $request->mock) {
            @$query['mock'] = $request->mock;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a specified level-1 quota group.
     *
     * @param request - QueryQuotaRequest
     *
     * @returns QueryQuotaResponse
     *
     * @param string            $nickname
     * @param QueryQuotaRequest $request
     *
     * @return QueryQuotaResponse
     */
    public function queryQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * 查询quota的资源使用信息.
     *
     * @param request - QueryQuotaMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryQuotaMetricResponse
     *
     * @param string                  $metric
     * @param QueryQuotaMetricRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryQuotaMetricResponse
     */
    public function queryQuotaMetricWithOptions($metric, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->strategy) {
            @$query['strategy'] = $request->strategy;
        }

        $body = [];
        if (null !== $request->interval) {
            @$body['interval'] = $request->interval;
        }

        if (null !== $request->nickname) {
            @$body['nickname'] = $request->nickname;
        }

        if (null !== $request->subQuotaNickname) {
            @$body['subQuotaNickname'] = $request->subQuotaNickname;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryQuotaMetric',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/quota/' . Url::percentEncode($metric) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryQuotaMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询quota的资源使用信息.
     *
     * @param request - QueryQuotaMetricRequest
     *
     * @returns QueryQuotaMetricResponse
     *
     * @param string                  $metric
     * @param QueryQuotaMetricRequest $request
     *
     * @return QueryQuotaMetricResponse
     */
    public function queryQuotaMetric($metric, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryQuotaMetricWithOptions($metric, $request, $headers, $runtime);
    }

    /**
     * 查看存储数据的时序指标.
     *
     * @param request - QueryStorageMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStorageMetricResponse
     *
     * @param string                    $metric
     * @param QueryStorageMetricRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryStorageMetricResponse
     */
    public function queryStorageMetricWithOptions($metric, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->projectList) {
            @$body['projectList'] = $request->projectList;
        }

        if (null !== $request->typeList) {
            @$body['typeList'] = $request->typeList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryStorageMetric',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/storage/' . Url::percentEncode($metric) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryStorageMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看存储数据的时序指标.
     *
     * @param request - QueryStorageMetricRequest
     *
     * @returns QueryStorageMetricResponse
     *
     * @param string                    $metric
     * @param QueryStorageMetricRequest $request
     *
     * @return QueryStorageMetricResponse
     */
    public function queryStorageMetric($metric, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryStorageMetricWithOptions($metric, $request, $headers, $runtime);
    }

    /**
     * 查询tunnel资源使用信息.
     *
     * @param request - QueryTunnelMetricRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTunnelMetricResponse
     *
     * @param string                   $metric
     * @param QueryTunnelMetricRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTunnelMetricResponse
     */
    public function queryTunnelMetricWithOptions($metric, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->strategy) {
            @$query['strategy'] = $request->strategy;
        }

        $body = [];
        if (null !== $request->codeList) {
            @$body['codeList'] = $request->codeList;
        }

        if (null !== $request->groupList) {
            @$body['groupList'] = $request->groupList;
        }

        if (null !== $request->operationList) {
            @$body['operationList'] = $request->operationList;
        }

        if (null !== $request->project) {
            @$body['project'] = $request->project;
        }

        if (null !== $request->quotaNickname) {
            @$body['quotaNickname'] = $request->quotaNickname;
        }

        if (null !== $request->tableList) {
            @$body['tableList'] = $request->tableList;
        }

        if (null !== $request->topN) {
            @$body['topN'] = $request->topN;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryTunnelMetric',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/tunnel/' . Url::percentEncode($metric) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTunnelMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询tunnel资源使用信息.
     *
     * @param request - QueryTunnelMetricRequest
     *
     * @returns QueryTunnelMetricResponse
     *
     * @param string                   $metric
     * @param QueryTunnelMetricRequest $request
     *
     * @return QueryTunnelMetricResponse
     */
    public function queryTunnelMetric($metric, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTunnelMetricWithOptions($metric, $request, $headers, $runtime);
    }

    /**
     * 查询tunnel资源使用详情.
     *
     * @param request - QueryTunnelMetricDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTunnelMetricDetailResponse
     *
     * @param string                         $metric
     * @param QueryTunnelMetricDetailRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTunnelMetricDetailResponse
     */
    public function queryTunnelMetricDetailWithOptions($metric, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->ascOrder) {
            @$body['ascOrder'] = $request->ascOrder;
        }

        if (null !== $request->groupList) {
            @$body['groupList'] = $request->groupList;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->operationList) {
            @$body['operationList'] = $request->operationList;
        }

        if (null !== $request->orderColumn) {
            @$body['orderColumn'] = $request->orderColumn;
        }

        if (null !== $request->project) {
            @$body['project'] = $request->project;
        }

        if (null !== $request->quotaNickname) {
            @$body['quotaNickname'] = $request->quotaNickname;
        }

        if (null !== $request->tableList) {
            @$body['tableList'] = $request->tableList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryTunnelMetricDetail',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/observations/tunnel/' . Url::percentEncode($metric) . '/detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTunnelMetricDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询tunnel资源使用详情.
     *
     * @param request - QueryTunnelMetricDetailRequest
     *
     * @returns QueryTunnelMetricDetailResponse
     *
     * @param string                         $metric
     * @param QueryTunnelMetricDetailRequest $request
     *
     * @return QueryTunnelMetricDetailResponse
     */
    public function queryTunnelMetricDetail($metric, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTunnelMetricDetailWithOptions($metric, $request, $headers, $runtime);
    }

    /**
     * RetryMmsJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryMmsJobResponse
     *
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryMmsJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs/' . Url::percentEncode($jobId) . '/retry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetryMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RetryMmsJob.
     *
     * @returns RetryMmsJobResponse
     *
     * @param string $sourceId
     * @param string $jobId
     *
     * @return RetryMmsJobResponse
     */
    public function retryMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * StartMmsJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMmsJobResponse
     *
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartMmsJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs/' . Url::percentEncode($jobId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StartMmsJob.
     *
     * @returns StartMmsJobResponse
     *
     * @param string $sourceId
     * @param string $jobId
     *
     * @return StartMmsJobResponse
     */
    public function startMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * StopMmsJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMmsJobResponse
     *
     * @param string         $sourceId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopMmsJobResponse
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
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '/jobs/' . Url::percentEncode($jobId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopMmsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StopMmsJob.
     *
     * @returns StopMmsJobResponse
     *
     * @param string $sourceId
     * @param string $jobId
     *
     * @return StopMmsJobResponse
     */
    public function stopMmsJob($sourceId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopMmsJobWithOptions($sourceId, $jobId, $headers, $runtime);
    }

    /**
     * @param request - SumStorageMetricsByDateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SumStorageMetricsByDateResponse
     *
     * @param SumStorageMetricsByDateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SumStorageMetricsByDateResponse
     */
    public function sumStorageMetricsByDateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endDate) {
            @$body['endDate'] = $request->endDate;
        }

        if (null !== $request->projectNames) {
            @$body['projectNames'] = $request->projectNames;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->startDate) {
            @$body['startDate'] = $request->startDate;
        }

        if (null !== $request->statsType) {
            @$body['statsType'] = $request->statsType;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SumStorageMetricsByDate',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/storageMetrics/sumByDate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SumStorageMetricsByDateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SumStorageMetricsByDateRequest
     *
     * @returns SumStorageMetricsByDateResponse
     *
     * @param SumStorageMetricsByDateRequest $request
     *
     * @return SumStorageMetricsByDateResponse
     */
    public function sumStorageMetricsByDate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sumStorageMetricsByDateWithOptions($request, $headers, $runtime);
    }

    /**
     * Update the ComputeQuotaPlan.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - UpdateComputeQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeQuotaPlanResponse
     *
     * @param string                        $nickname
     * @param UpdateComputeQuotaPlanRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateComputeQuotaPlanResponse
     */
    public function updateComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaPlan',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComputeQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the ComputeQuotaPlan.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the <props="china">[Pricing and Charges](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Charges](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - UpdateComputeQuotaPlanRequest
     *
     * @returns UpdateComputeQuotaPlanResponse
     *
     * @param string                        $nickname
     * @param UpdateComputeQuotaPlanRequest $request
     *
     * @return UpdateComputeQuotaPlanResponse
     */
    public function updateComputeQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Update the time-based plan for computing quota.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the<props="china">[Pricing and Billing](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Billing](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - UpdateComputeQuotaScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeQuotaScheduleResponse
     *
     * @param string                            $nickname
     * @param UpdateComputeQuotaScheduleRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateComputeQuotaScheduleResponse
     */
    public function updateComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scheduleTimezone) {
            @$query['scheduleTimezone'] = $request->scheduleTimezone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeQuotaSchedule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComputeQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the time-based plan for computing quota.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the<props="china">[Pricing and Billing](https://help.aliyun.com/zh/maxcompute/product-overview/computing-pricing-1)
     * <props="intl">[Pricing and Billing](https://www.alibabacloud.com/help/maxcompute/product-overview/computing-pricing-1) of MaxCompute Elastic Reserved CU.
     *
     * @param request - UpdateComputeQuotaScheduleRequest
     *
     * @returns UpdateComputeQuotaScheduleResponse
     *
     * @param string                            $nickname
     * @param UpdateComputeQuotaScheduleRequest $request
     *
     * @return UpdateComputeQuotaScheduleResponse
     */
    public function updateComputeQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Update the basic configuration of the calculation quota, including adding or deleting the sub quota, modifying the basic properties of the secondary quota, and the CU configuration of the effective quota plan.
     *
     * @param request - UpdateComputeSubQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeSubQuotaResponse
     *
     * @param string                       $nickname
     * @param UpdateComputeSubQuotaRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateComputeSubQuotaResponse
     */
    public function updateComputeSubQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->subQuotaInfoList) {
            @$body['subQuotaInfoList'] = $request->subQuotaInfoList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeSubQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/computeSubQuota',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComputeSubQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the basic configuration of the calculation quota, including adding or deleting the sub quota, modifying the basic properties of the secondary quota, and the CU configuration of the effective quota plan.
     *
     * @param request - UpdateComputeSubQuotaRequest
     *
     * @returns UpdateComputeSubQuotaResponse
     *
     * @param string                       $nickname
     * @param UpdateComputeSubQuotaRequest $request
     *
     * @return UpdateComputeSubQuotaResponse
     */
    public function updateComputeSubQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComputeSubQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * 更新数据源配置、名称，启/停数据源实例.
     *
     * @param request - UpdateMmsDataSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmsDataSourceResponse
     *
     * @param string                     $sourceId
     * @param UpdateMmsDataSourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMmsDataSourceResponse
     */
    public function updateMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->test) {
            @$body['test'] = $request->test;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMmsDataSource',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/mms/datasources/' . Url::percentEncode($sourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMmsDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据源配置、名称，启/停数据源实例.
     *
     * @param request - UpdateMmsDataSourceRequest
     *
     * @returns UpdateMmsDataSourceResponse
     *
     * @param string                     $sourceId
     * @param UpdateMmsDataSourceRequest $request
     *
     * @return UpdateMmsDataSourceResponse
     */
    public function updateMmsDataSource($sourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMmsDataSourceWithOptions($sourceId, $request, $headers, $runtime);
    }

    /**
     * Updates the objects in a package and projects in which the package can be installed.
     *
     * @param request - UpdatePackageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePackageResponse
     *
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdatePackageResponse
     */
    public function updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePackage',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/packages/' . Url::percentEncode($packageName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the objects in a package and projects in which the package can be installed.
     *
     * @param request - UpdatePackageRequest
     *
     * @returns UpdatePackageResponse
     *
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request
     *
     * @return UpdatePackageResponse
     */
    public function updatePackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * Update Project Basic Information.
     *
     * @param request - UpdateProjectBasicMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectBasicMetaResponse
     *
     * @param string                        $projectName
     * @param UpdateProjectBasicMetaRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateProjectBasicMetaResponse
     */
    public function updateProjectBasicMetaWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->properties) {
            @$body['properties'] = $request->properties;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectBasicMeta',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/meta',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectBasicMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Project Basic Information.
     *
     * @param request - UpdateProjectBasicMetaRequest
     *
     * @returns UpdateProjectBasicMetaResponse
     *
     * @param string                        $projectName
     * @param UpdateProjectBasicMetaRequest $request
     *
     * @return UpdateProjectBasicMetaResponse
     */
    public function updateProjectBasicMeta($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectBasicMetaWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Modify Default Project Compute Quota.
     *
     * @param request - UpdateProjectDefaultQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectDefaultQuotaResponse
     *
     * @param string                           $projectName
     * @param UpdateProjectDefaultQuotaRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateProjectDefaultQuotaResponse
     */
    public function updateProjectDefaultQuotaWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectDefaultQuota',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/quota',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectDefaultQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Default Project Compute Quota.
     *
     * @param request - UpdateProjectDefaultQuotaRequest
     *
     * @returns UpdateProjectDefaultQuotaResponse
     *
     * @param string                           $projectName
     * @param UpdateProjectDefaultQuotaRequest $request
     *
     * @return UpdateProjectDefaultQuotaResponse
     */
    public function updateProjectDefaultQuota($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectDefaultQuotaWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Modifies the IP address whitelist of a MaxCompute project.
     *
     * @param request - UpdateProjectIpWhiteListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectIpWhiteListResponse
     *
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateProjectIpWhiteList',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/ipWhiteList',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of a MaxCompute project.
     *
     * @param request - UpdateProjectIpWhiteListRequest
     *
     * @returns UpdateProjectIpWhiteListResponse
     *
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request
     *
     * @return UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteList($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * Updates a quota plan.
     *
     * @param request - UpdateQuotaPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateQuotaPlanResponse
     */
    public function updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateQuotaPlan',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/plans/' . Url::percentEncode($planName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a quota plan.
     *
     * @param request - UpdateQuotaPlanRequest
     *
     * @returns UpdateQuotaPlanResponse
     *
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request
     *
     * @return UpdateQuotaPlanResponse
     */
    public function updateQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * Updates the scheduling plan for a quota plan.
     *
     * @param request - UpdateQuotaScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaScheduleResponse
     *
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateQuotaScheduleResponse
     */
    public function updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->tenantId) {
            @$query['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateQuotaSchedule',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($nickname) . '/schedule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the scheduling plan for a quota plan.
     *
     * @param request - UpdateQuotaScheduleRequest
     *
     * @returns UpdateQuotaScheduleResponse
     *
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request
     *
     * @return UpdateQuotaScheduleResponse
     */
    public function updateQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Updates the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing and prices](https://www.alibabacloud.com/help/maxcompute/product-overview/data-transfer-fees-hourly-billing) of Tunnel quotas and elastically reserved computing resources.
     *
     * @param request - UpdateTunnelQuotaTimerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTunnelQuotaTimerResponse
     *
     * @param string                        $nickname
     * @param UpdateTunnelQuotaTimerRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateTunnelQuotaTimerResponse
     */
    public function updateTunnelQuotaTimerWithOptions($nickname, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->timezone) {
            @$query['timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTunnelQuotaTimer',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tunnel/' . Url::percentEncode($nickname) . '/timers',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTunnelQuotaTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the time-specific configuration of an exclusive resource group for Tunnel (referred to as Tunnel quota).
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing and prices](https://www.alibabacloud.com/help/maxcompute/product-overview/data-transfer-fees-hourly-billing) of Tunnel quotas and elastically reserved computing resources.
     *
     * @param request - UpdateTunnelQuotaTimerRequest
     *
     * @returns UpdateTunnelQuotaTimerResponse
     *
     * @param string                        $nickname
     * @param UpdateTunnelQuotaTimerRequest $request
     *
     * @return UpdateTunnelQuotaTimerResponse
     */
    public function updateTunnelQuotaTimer($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTunnelQuotaTimerWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * Add or remove users from a project role.
     *
     * @param request - UpdateUsersToRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUsersToRoleResponse
     *
     * @param string                   $projectName
     * @param string                   $roleName
     * @param UpdateUsersToRoleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateUsersToRoleResponse
     */
    public function updateUsersToRoleWithOptions($projectName, $roleName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->add) {
            @$body['add'] = $request->add;
        }

        if (null !== $request->remove) {
            @$body['remove'] = $request->remove;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUsersToRole',
            'version' => '2022-01-04',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/projects/' . Url::percentEncode($projectName) . '/roles/' . Url::percentEncode($roleName) . '/users',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUsersToRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add or remove users from a project role.
     *
     * @param request - UpdateUsersToRoleRequest
     *
     * @returns UpdateUsersToRoleResponse
     *
     * @param string                   $projectName
     * @param string                   $roleName
     * @param UpdateUsersToRoleRequest $request
     *
     * @return UpdateUsersToRoleResponse
     */
    public function updateUsersToRole($projectName, $roleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUsersToRoleWithOptions($projectName, $roleName, $request, $headers, $runtime);
    }
}

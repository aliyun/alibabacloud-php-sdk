<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeletePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeletePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetAppVersionsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetAppVersionsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\RemoveImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\RemoveImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\TagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\TagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EhpcInstant extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpcinstant', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加托管侧用户自定义镜像.
     *
     * @param tmpReq - AddImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddImageResponse
     *
     * @param AddImageRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->containerImageSpec) {
            $request->containerImageSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->containerImageSpec, 'ContainerImageSpec', 'json');
        }

        if (null !== $tmpReq->VMImageSpec) {
            $request->VMImageSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->VMImageSpec, 'VMImageSpec', 'json');
        }

        $query = [];
        if (null !== $request->containerImageSpecShrink) {
            @$query['ContainerImageSpec'] = $request->containerImageSpecShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->imageVersion) {
            @$query['ImageVersion'] = $request->imageVersion;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->VMImageSpecShrink) {
            @$query['VMImageSpec'] = $request->VMImageSpecShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加托管侧用户自定义镜像.
     *
     * @param request - AddImageRequest
     *
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * 提交任务
     *
     * @param tmpReq - CreateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dependencyPolicy) {
            $request->dependencyPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dependencyPolicy, 'DependencyPolicy', 'json');
        }

        if (null !== $tmpReq->deploymentPolicy) {
            $request->deploymentPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deploymentPolicy, 'DeploymentPolicy', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->tasks) {
            $request->tasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }

        $query = [];
        if (null !== $request->dependencyPolicyShrink) {
            @$query['DependencyPolicy'] = $request->dependencyPolicyShrink;
        }

        if (null !== $request->deploymentPolicyShrink) {
            @$query['DeploymentPolicy'] = $request->deploymentPolicyShrink;
        }

        if (null !== $request->jobDescription) {
            @$query['JobDescription'] = $request->jobDescription;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->jobScheduler) {
            @$query['JobScheduler'] = $request->jobScheduler;
        }

        if (null !== $request->securityPolicyShrink) {
            @$query['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->tasksShrink) {
            @$query['Tasks'] = $request->tasksShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交任务
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * 创建资源池.
     *
     * @param tmpReq - CreatePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePoolResponse
     *
     * @param CreatePoolRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreatePoolResponse
     */
    public function createPoolWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePoolShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceLimits) {
            $request->resourceLimitsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceLimits, 'ResourceLimits', 'json');
        }

        $query = [];
        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceLimitsShrink) {
            @$query['ResourceLimits'] = $request->resourceLimitsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源池.
     *
     * @param request - CreatePoolRequest
     *
     * @returns CreatePoolResponse
     *
     * @param CreatePoolRequest $request
     *
     * @return CreatePoolResponse
     */
    public function createPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPoolWithOptions($request, $runtime);
    }

    /**
     * 删除作业.
     *
     * @param tmpReq - DeleteJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->executorIds) {
            $request->executorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }

        if (null !== $tmpReq->jobSpec) {
            $request->jobSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobSpec, 'JobSpec', 'json');
        }

        $query = [];
        if (null !== $request->executorIdsShrink) {
            @$query['ExecutorIds'] = $request->executorIdsShrink;
        }

        if (null !== $request->jobScheduler) {
            @$query['JobScheduler'] = $request->jobScheduler;
        }

        if (null !== $request->jobSpecShrink) {
            @$query['JobSpec'] = $request->jobSpecShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJobs',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除作业.
     *
     * @param request - DeleteJobsRequest
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * 删除资源池.
     *
     * @param request - DeletePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePoolResponse
     *
     * @param DeletePoolRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeletePoolResponse
     */
    public function deletePoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源池.
     *
     * @param request - DeletePoolRequest
     *
     * @returns DeletePoolResponse
     *
     * @param DeletePoolRequest $request
     *
     * @return DeletePoolResponse
     */
    public function deletePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePoolWithOptions($request, $runtime);
    }

    /**
     * 查询作业性能数据.
     *
     * @param tmpReq - DescribeJobMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobMetricDataResponse
     *
     * @param DescribeJobMetricDataRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeJobMetricDataResponse
     */
    public function describeJobMetricDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeJobMetricDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->arrayIndex) {
            $request->arrayIndexShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->arrayIndex, 'ArrayIndex', 'json');
        }

        $query = [];
        if (null !== $request->arrayIndexShrink) {
            @$query['ArrayIndex'] = $request->arrayIndexShrink;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobMetricData',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作业性能数据.
     *
     * @param request - DescribeJobMetricDataRequest
     *
     * @returns DescribeJobMetricDataResponse
     *
     * @param DescribeJobMetricDataRequest $request
     *
     * @return DescribeJobMetricDataResponse
     */
    public function describeJobMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMetricDataWithOptions($request, $runtime);
    }

    /**
     * 查询作业即时监控项.
     *
     * @param tmpReq - DescribeJobMetricLastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobMetricLastResponse
     *
     * @param DescribeJobMetricLastRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeJobMetricLastResponse
     */
    public function describeJobMetricLastWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeJobMetricLastShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->arrayIndex) {
            $request->arrayIndexShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->arrayIndex, 'ArrayIndex', 'json');
        }

        $query = [];
        if (null !== $request->arrayIndexShrink) {
            @$query['ArrayIndex'] = $request->arrayIndexShrink;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobMetricLast',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作业即时监控项.
     *
     * @param request - DescribeJobMetricLastRequest
     *
     * @returns DescribeJobMetricLastResponse
     *
     * @param DescribeJobMetricLastRequest $request
     *
     * @return DescribeJobMetricLastResponse
     */
    public function describeJobMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMetricLastWithOptions($request, $runtime);
    }

    /**
     * 查看应用版本列表.
     *
     * @param request - GetAppVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppVersionsResponse
     *
     * @param GetAppVersionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAppVersionsResponse
     */
    public function getAppVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

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
            'action' => 'GetAppVersions',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看应用版本列表.
     *
     * @param request - GetAppVersionsRequest
     *
     * @returns GetAppVersionsResponse
     *
     * @param GetAppVersionsRequest $request
     *
     * @return GetAppVersionsResponse
     */
    public function getAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppVersionsWithOptions($request, $runtime);
    }

    /**
     * 查询托管侧镜像详情。
     *
     * @param tmpReq - GetImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->additionalRegionIds) {
            $request->additionalRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->additionalRegionIds, 'AdditionalRegionIds', 'json');
        }

        $query = [];
        if (null !== $request->additionalRegionIdsShrink) {
            @$query['AdditionalRegionIds'] = $request->additionalRegionIdsShrink;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询托管侧镜像详情。
     *
     * @param request - GetImageRequest
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * 查询作业详情.
     *
     * @param request - GetJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
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
            'action' => 'GetJob',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作业详情.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * 查询队列详细信息.
     *
     * @param request - GetPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPoolResponse
     *
     * @param GetPoolRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetPoolResponse
     */
    public function getPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询队列详细信息.
     *
     * @param request - GetPoolRequest
     *
     * @returns GetPoolResponse
     *
     * @param GetPoolRequest $request
     *
     * @return GetPoolResponse
     */
    public function getPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPoolWithOptions($request, $runtime);
    }

    /**
     * 查询全局Executor信息.
     *
     * @param tmpReq - ListExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListExecutorsResponse
     */
    public function listExecutorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListExecutorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

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
            'action' => 'ListExecutors',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询全局Executor信息.
     *
     * @param request - ListExecutorsRequest
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $request
     *
     * @return ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * 查看托管侧镜像列表.
     *
     * @param tmpReq - ListImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListImagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageIds) {
            $request->imageIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageIds, 'ImageIds', 'json');
        }

        if (null !== $tmpReq->imageNames) {
            $request->imageNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'json');
        }

        $query = [];
        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageIdsShrink) {
            @$query['ImageIds'] = $request->imageIdsShrink;
        }

        if (null !== $request->imageNamesShrink) {
            @$query['ImageNames'] = $request->imageNamesShrink;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

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
            'action' => 'ListImages',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看托管侧镜像列表.
     *
     * @param request - ListImagesRequest
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * 查询作业Executor信息.
     *
     * @param request - ListJobExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobExecutorsResponse
     *
     * @param ListJobExecutorsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobExecutors',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作业Executor信息.
     *
     * @param request - ListJobExecutorsRequest
     *
     * @returns ListJobExecutorsResponse
     *
     * @param ListJobExecutorsRequest $request
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutorsWithOptions($request, $runtime);
    }

    /**
     * 查询作业列表.
     *
     * @param tmpReq - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        if (null !== $tmpReq->sortBy) {
            $request->sortByShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sortBy, 'SortBy', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortByShrink) {
            @$query['SortBy'] = $request->sortByShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作业列表.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * 查询资源池列表.
     *
     * @param tmpReq - ListPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoolsResponse
     *
     * @param ListPoolsRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListPoolsResponse
     */
    public function listPoolsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPoolsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

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
            'action' => 'ListPools',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询资源池列表.
     *
     * @param request - ListPoolsRequest
     *
     * @returns ListPoolsResponse
     *
     * @param ListPoolsRequest $request
     *
     * @return ListPoolsResponse
     */
    public function listPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoolsWithOptions($request, $runtime);
    }

    /**
     * 查询一个或多个资源已经绑定的标签列表.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一个或多个资源已经绑定的标签列表.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 移除托管侧镜像信息。
     *
     * @param request - RemoveImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveImageResponse
     *
     * @param RemoveImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveImageResponse
     */
    public function removeImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除托管侧镜像信息。
     *
     * @param request - RemoveImageRequest
     *
     * @returns RemoveImageResponse
     *
     * @param RemoveImageRequest $request
     *
     * @return RemoveImageResponse
     */
    public function removeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeImageWithOptions($request, $runtime);
    }

    /**
     * 为指定的资源列表统一创建并绑定标签.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为指定的资源列表统一创建并绑定标签.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * 为指定的ECS资源列表统一解绑标签.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为指定的ECS资源列表统一解绑标签.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 更新资源池.
     *
     * @param tmpReq - UpdatePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePoolResponse
     *
     * @param UpdatePoolRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdatePoolResponse
     */
    public function updatePoolWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePoolShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceLimits) {
            $request->resourceLimitsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceLimits, 'ResourceLimits', 'json');
        }

        $query = [];
        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceLimitsShrink) {
            @$query['ResourceLimits'] = $request->resourceLimitsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新资源池.
     *
     * @param request - UpdatePoolRequest
     *
     * @returns UpdatePoolResponse
     *
     * @param UpdatePoolRequest $request
     *
     * @return UpdatePoolResponse
     */
    public function updatePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePoolWithOptions($request, $runtime);
    }
}

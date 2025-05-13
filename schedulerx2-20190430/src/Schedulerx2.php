<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteJobsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteRouteStrategyRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteRouteStrategyResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDisableJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDisableJobsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchEnableJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchEnableJobsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateAppGroupRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateAppGroupResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateRouteStrategyRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateRouteStrategyResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateWorkflowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteAppGroupRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteAppGroupResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteRouteStrategyRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteRouteStrategyResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteWorkflowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DesignateWorkersRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DesignateWorkersResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DisableJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DisableJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DisableWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DisableWorkflowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\EnableJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\EnableJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\EnableWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\EnableWorkflowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteWorkflowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetLogRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetLogResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetOverviewRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetOverviewResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GrantPermissionRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GrantPermissionResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateDetailRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateDetailResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RerunJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RerunJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RetryJobInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RetryJobInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RevokePermissionRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RevokePermissionResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\SetJobInstanceSuccessRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\SetJobInstanceSuccessResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\SetWfInstanceSuccessRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\SetWfInstanceSuccessResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateAppGroupRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateAppGroupResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobScriptRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobScriptResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowDagRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowDagResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Schedulerx2 extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'schedulerx.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'schedulerx.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'schedulerx.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'schedulerx.cn-shenzhen.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('schedulerx2', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Deletes multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchDeleteJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteJobsResponse
     *
     * @param BatchDeleteJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchDeleteJobsResponse
     */
    public function batchDeleteJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->jobIdList) {
            @$body['JobIdList'] = $request->jobIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteJobs',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchDeleteJobsRequest
     *
     * @returns BatchDeleteJobsResponse
     *
     * @param BatchDeleteJobsRequest $request
     *
     * @return BatchDeleteJobsResponse
     */
    public function batchDeleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteJobsWithOptions($request, $runtime);
    }

    /**
     * The additional information that is returned.
     *
     * @param request - BatchDeleteRouteStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteRouteStrategyResponse
     *
     * @param BatchDeleteRouteStrategyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchDeleteRouteStrategyResponse
     */
    public function batchDeleteRouteStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->jobIdList) {
            @$body['JobIdList'] = $request->jobIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteRouteStrategy',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The additional information that is returned.
     *
     * @param request - BatchDeleteRouteStrategyRequest
     *
     * @returns BatchDeleteRouteStrategyResponse
     *
     * @param BatchDeleteRouteStrategyRequest $request
     *
     * @return BatchDeleteRouteStrategyResponse
     */
    public function batchDeleteRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * Disables multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchDisableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDisableJobsResponse
     *
     * @param BatchDisableJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchDisableJobsResponse
     */
    public function batchDisableJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->jobIdList) {
            @$body['JobIdList'] = $request->jobIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDisableJobs',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDisableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchDisableJobsRequest
     *
     * @returns BatchDisableJobsResponse
     *
     * @param BatchDisableJobsRequest $request
     *
     * @return BatchDisableJobsResponse
     */
    public function batchDisableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDisableJobsWithOptions($request, $runtime);
    }

    /**
     * Enables multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchEnableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchEnableJobsResponse
     *
     * @param BatchEnableJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchEnableJobsResponse
     */
    public function batchEnableJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->jobIdList) {
            @$body['JobIdList'] = $request->jobIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchEnableJobs',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchEnableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables multiple jobs at a time.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *
     * @param request - BatchEnableJobsRequest
     *
     * @returns BatchEnableJobsResponse
     *
     * @param BatchEnableJobsRequest $request
     *
     * @return BatchEnableJobsResponse
     */
    public function batchEnableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEnableJobsWithOptions($request, $runtime);
    }

    /**
     * Creates an application group. The AppKey is returned.
     *
     * @param request - CreateAppGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppGroupResponse
     *
     * @param CreateAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppGroup',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application group. The AppKey is returned.
     *
     * @param request - CreateAppGroupRequest
     *
     * @returns CreateAppGroupResponse
     *
     * @param CreateAppGroupRequest $request
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a job and obtains the job ID.
     *
     * @param request - CreateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->className) {
            @$body['ClassName'] = $request->className;
        }

        if (null !== $request->consumerSize) {
            @$body['ConsumerSize'] = $request->consumerSize;
        }

        if (null !== $request->contactInfo) {
            @$body['ContactInfo'] = $request->contactInfo;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->dataOffset) {
            @$body['DataOffset'] = $request->dataOffset;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dispatcherSize) {
            @$body['DispatcherSize'] = $request->dispatcherSize;
        }

        if (null !== $request->executeMode) {
            @$body['ExecuteMode'] = $request->executeMode;
        }

        if (null !== $request->failEnable) {
            @$body['FailEnable'] = $request->failEnable;
        }

        if (null !== $request->failTimes) {
            @$body['FailTimes'] = $request->failTimes;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->missWorkerEnable) {
            @$body['MissWorkerEnable'] = $request->missWorkerEnable;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->queueSize) {
            @$body['QueueSize'] = $request->queueSize;
        }

        if (null !== $request->sendChannel) {
            @$body['SendChannel'] = $request->sendChannel;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->successNoticeEnable) {
            @$body['SuccessNoticeEnable'] = $request->successNoticeEnable;
        }

        if (null !== $request->taskAttemptInterval) {
            @$body['TaskAttemptInterval'] = $request->taskAttemptInterval;
        }

        if (null !== $request->taskMaxAttempt) {
            @$body['TaskMaxAttempt'] = $request->taskMaxAttempt;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        if (null !== $request->timeoutEnable) {
            @$body['TimeoutEnable'] = $request->timeoutEnable;
        }

        if (null !== $request->timeoutKillEnable) {
            @$body['TimeoutKillEnable'] = $request->timeoutKillEnable;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        if (null !== $request->XAttrs) {
            @$body['XAttrs'] = $request->XAttrs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2019-04-30',
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
     * Creates a job and obtains the job ID.
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
     * Creates a namespace.
     *
     * @param request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a namespace.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates a routing policy.
     *
     * @param request - CreateRouteStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRouteStrategyResponse
     *
     * @param CreateRouteStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRouteStrategyResponse
     */
    public function createRouteStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->strategyContent) {
            @$query['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRouteStrategy',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routing policy.
     *
     * @param request - CreateRouteStrategyRequest
     *
     * @returns CreateRouteStrategyResponse
     *
     * @param CreateRouteStrategyRequest $request
     *
     * @return CreateRouteStrategyResponse
     */
    public function createRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates a workflow. By default, the created workflow is disabled. After you update the directed acyclic graph (DAG) of the workflow, you must manually or call the corresponding operation to enable the workflow. You can call this operation only in the professional edition.
     *
     * @param request - CreateWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkflowResponse
     *
     * @param CreateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workflow. By default, the created workflow is disabled. After you update the directed acyclic graph (DAG) of the workflow, you must manually or call the corresponding operation to enable the workflow. You can call this operation only in the professional edition.
     *
     * @param request - CreateWorkflowRequest
     *
     * @returns CreateWorkflowResponse
     *
     * @param CreateWorkflowRequest $request
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowWithOptions($request, $runtime);
    }

    /**
     * The additional information that is returned.
     *
     * @param request - DeleteAppGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppGroupResponse
     *
     * @param DeleteAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAppGroupResponse
     */
    public function deleteAppGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteJobs) {
            @$query['DeleteJobs'] = $request->deleteJobs;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppGroup',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The additional information that is returned.
     *
     * @param request - DeleteAppGroupRequest
     *
     * @returns DeleteAppGroupResponse
     *
     * @param DeleteAppGroupRequest $request
     *
     * @return DeleteAppGroupResponse
     */
    public function deleteAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified job.
     *
     * @param request - DeleteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobResponse
     *
     * @param DeleteJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified job.
     *
     * @param request - DeleteJobRequest
     *
     * @returns DeleteJobResponse
     *
     * @param DeleteJobRequest $request
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobWithOptions($request, $runtime);
    }

    /**
     * 删除命名空间.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除命名空间.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a routing policy.
     *
     * @param request - DeleteRouteStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRouteStrategyResponse
     *
     * @param DeleteRouteStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRouteStrategyResponse
     */
    public function deleteRouteStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRouteStrategy',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a routing policy.
     *
     * @param request - DeleteRouteStrategyRequest
     *
     * @returns DeleteRouteStrategyResponse
     *
     * @param DeleteRouteStrategyRequest $request
     *
     * @return DeleteRouteStrategyResponse
     */
    public function deleteRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * Deletes a workflow.
     *
     * @param request - DeleteWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkflowResponse
     *
     * @param DeleteWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workflow.
     *
     * @param request - DeleteWorkflowRequest
     *
     * @returns DeleteWorkflowResponse
     *
     * @param DeleteWorkflowRequest $request
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowWithOptions($request, $runtime);
    }

    /**
     * Returns available regions.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-04-30',
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
     * Returns available regions.
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
     * Designates machines.
     *
     * @param request - DesignateWorkersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DesignateWorkersResponse
     *
     * @param DesignateWorkersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DesignateWorkersResponse
     */
    public function designateWorkersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DesignateWorkers',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DesignateWorkersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Designates machines.
     *
     * @param request - DesignateWorkersRequest
     *
     * @returns DesignateWorkersResponse
     *
     * @param DesignateWorkersRequest $request
     *
     * @return DesignateWorkersResponse
     */
    public function designateWorkers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->designateWorkersWithOptions($request, $runtime);
    }

    /**
     * Disables a job.
     *
     * @param request - DisableJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableJobResponse
     *
     * @param DisableJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DisableJobResponse
     */
    public function disableJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a job.
     *
     * @param request - DisableJobRequest
     *
     * @returns DisableJobResponse
     *
     * @param DisableJobRequest $request
     *
     * @return DisableJobResponse
     */
    public function disableJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableJobWithOptions($request, $runtime);
    }

    /**
     * Disables a specified workflow.
     *
     * @param request - DisableWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableWorkflowResponse
     *
     * @param DisableWorkflowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableWorkflowResponse
     */
    public function disableWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a specified workflow.
     *
     * @param request - DisableWorkflowRequest
     *
     * @returns DisableWorkflowResponse
     *
     * @param DisableWorkflowRequest $request
     *
     * @return DisableWorkflowResponse
     */
    public function disableWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWorkflowWithOptions($request, $runtime);
    }

    /**
     * Enables a job.
     *
     * @param request - EnableJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableJobResponse
     *
     * @param EnableJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EnableJobResponse
     */
    public function enableJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a job.
     *
     * @param request - EnableJobRequest
     *
     * @returns EnableJobResponse
     *
     * @param EnableJobRequest $request
     *
     * @return EnableJobResponse
     */
    public function enableJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableJobWithOptions($request, $runtime);
    }

    /**
     * Enables a specified workflow.
     *
     * @param request - EnableWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWorkflowResponse
     *
     * @param EnableWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableWorkflowResponse
     */
    public function enableWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a specified workflow.
     *
     * @param request - EnableWorkflowRequest
     *
     * @returns EnableWorkflowResponse
     *
     * @param EnableWorkflowRequest $request
     *
     * @return EnableWorkflowResponse
     */
    public function enableWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWorkflowWithOptions($request, $runtime);
    }

    /**
     * Triggers a job to immediately run once.
     *
     * @remarks
     * > The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *
     * @param request - ExecuteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteJobResponse
     *
     * @param ExecuteJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ExecuteJobResponse
     */
    public function executeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a job to immediately run once.
     *
     * @remarks
     * > The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *
     * @param request - ExecuteJobRequest
     *
     * @returns ExecuteJobResponse
     *
     * @param ExecuteJobRequest $request
     *
     * @return ExecuteJobResponse
     */
    public function executeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeJobWithOptions($request, $runtime);
    }

    /**
     * Immediately triggers a workflow.
     *
     * @param request - ExecuteWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteWorkflowResponse
     *
     * @param ExecuteWorkflowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteWorkflowResponse
     */
    public function executeWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Immediately triggers a workflow.
     *
     * @param request - ExecuteWorkflowRequest
     *
     * @returns ExecuteWorkflowResponse
     *
     * @param ExecuteWorkflowRequest $request
     *
     * @return ExecuteWorkflowResponse
     */
    public function executeWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeWorkflowWithOptions($request, $runtime);
    }

    /**
     * The configuration of the alert. The value is a JSON string. For more information, see \\\\*\\\\*the additional information about response parameters below this table\\\\*\\\\*.
     *
     * @param request - GetAppGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppGroupResponse
     *
     * @param GetAppGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAppGroupResponse
     */
    public function getAppGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppGroup',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The configuration of the alert. The value is a JSON string. For more information, see \\\\*\\\\*the additional information about response parameters below this table\\\\*\\\\*.
     *
     * @param request - GetAppGroupRequest
     *
     * @returns GetAppGroupResponse
     *
     * @param GetAppGroupRequest $request
     *
     * @return GetAppGroupResponse
     */
    public function getAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a job based on the job ID. In most cases, the obtained information is used to update jobs.
     *
     * @param request - GetJobInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobInfoResponse
     *
     * @param GetJobInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetJobInfoResponse
     */
    public function getJobInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobInfo',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a job based on the job ID. In most cases, the obtained information is used to update jobs.
     *
     * @param request - GetJobInfoRequest
     *
     * @returns GetJobInfoResponse
     *
     * @param GetJobInfoRequest $request
     *
     * @return GetJobInfoResponse
     */
    public function getJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a job instance. You can view the status and progress of the job instance.
     *
     * @param request - GetJobInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobInstanceResponse
     *
     * @param GetJobInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetJobInstanceResponse
     */
    public function getJobInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobInstance',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a job instance. You can view the status and progress of the job instance.
     *
     * @param request - GetJobInstanceRequest
     *
     * @returns GetJobInstanceResponse
     *
     * @param GetJobInstanceRequest $request
     *
     * @return GetJobInstanceResponse
     */
    public function getJobInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the most recent 10 execution instances of a job.
     *
     * @param request - GetJobInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobInstanceListResponse
     *
     * @param GetJobInstanceListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetJobInstanceListResponse
     */
    public function getJobInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobInstanceList',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the most recent 10 execution instances of a job.
     *
     * @param request - GetJobInstanceListRequest
     *
     * @returns GetJobInstanceListResponse
     *
     * @param GetJobInstanceListRequest $request
     *
     * @return GetJobInstanceListResponse
     */
    public function getJobInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInstanceListWithOptions($request, $runtime);
    }

    /**
     * Queries the operational logs of a job. You can call this operation only in the professional edition.
     *
     * @param request - GetLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLogResponse
     */
    public function getLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLog',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operational logs of a job. You can call this operation only in the professional edition.
     *
     * @param request - GetLogRequest
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest $request
     *
     * @return GetLogResponse
     */
    public function getLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogWithOptions($request, $runtime);
    }

    /**
     * 查询概览数据信息.
     *
     * @param request - GetOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOverviewResponse
     *
     * @param GetOverviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->operate) {
            @$query['Operate'] = $request->operate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOverview',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览数据信息.
     *
     * @param request - GetOverviewRequest
     *
     * @returns GetOverviewResponse
     *
     * @param GetOverviewRequest $request
     *
     * @return GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about a workflow.
     *
     * @param request - GetWorkFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkFlowResponse
     *
     * @param GetWorkFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWorkFlowResponse
     */
    public function getWorkFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkFlow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about a workflow.
     *
     * @param request - GetWorkFlowRequest
     *
     * @returns GetWorkFlowResponse
     *
     * @param GetWorkFlowRequest $request
     *
     * @return GetWorkFlowResponse
     */
    public function getWorkFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkFlowWithOptions($request, $runtime);
    }

    /**
     * Obtains the list of workers that are connected to an application.
     *
     * @param request - GetWorkerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkerListResponse
     *
     * @param GetWorkerListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetWorkerListResponse
     */
    public function getWorkerListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkerList',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the list of workers that are connected to an application.
     *
     * @param request - GetWorkerListRequest
     *
     * @returns GetWorkerListResponse
     *
     * @param GetWorkerListRequest $request
     *
     * @return GetWorkerListResponse
     */
    public function getWorkerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified workflow instance, including the state of the workflow instance, the state of each job instance, and the dependencies between job instances. You can call this operation only in the professional edition.
     *
     * @param request - GetWorkflowInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowInstanceResponse
     *
     * @param GetWorkflowInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkflowInstanceResponse
     */
    public function getWorkflowInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflowInstance',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified workflow instance, including the state of the workflow instance, the state of each job instance, and the dependencies between job instances. You can call this operation only in the professional edition.
     *
     * @param request - GetWorkflowInstanceRequest
     *
     * @returns GetWorkflowInstanceResponse
     *
     * @param GetWorkflowInstanceRequest $request
     *
     * @return GetWorkflowInstanceResponse
     */
    public function getWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * Grants permissions to an application group.
     *
     * @param request - GrantPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantPermissionResponse
     *
     * @param GrantPermissionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GrantPermissionResponse
     */
    public function grantPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->grantOption) {
            @$query['GrantOption'] = $request->grantOption;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantPermission',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions to an application group.
     *
     * @param request - GrantPermissionRequest
     *
     * @returns GrantPermissionResponse
     *
     * @param GrantPermissionRequest $request
     *
     * @return GrantPermissionResponse
     */
    public function grantPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantPermissionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of applications.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.5</version>
     * </dependency>
     * ```
     *
     * @param request - ListGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appGroupName) {
            @$query['AppGroupName'] = $request->appGroupName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of applications.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.5</version>
     * </dependency>
     * ```
     *
     * @param request - ListGroupsRequest
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * 获取任务脚本历史列表.
     *
     * @param request - ListJobScriptHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobScriptHistoryResponse
     *
     * @param ListJobScriptHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListJobScriptHistoryResponse
     */
    public function listJobScriptHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobScriptHistory',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobScriptHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务脚本历史列表.
     *
     * @param request - ListJobScriptHistoryRequest
     *
     * @returns ListJobScriptHistoryResponse
     *
     * @param ListJobScriptHistoryRequest $request
     *
     * @return ListJobScriptHistoryResponse
     */
    public function listJobScriptHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobScriptHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries jobs.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *           <groupId>com.aliyun</groupId>
     *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *           <version>1.0.5</version>
     *     </dependency>
     *
     * @param request - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries jobs.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *           <groupId>com.aliyun</groupId>
     *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *           <version>1.0.5</version>
     *     </dependency>
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
     * Queries namespaces.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *         <groupId>com.aliyun</groupId>
     *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *         <version>1.0.5</version>
     *     </dependency>
     *
     * @param request - ListNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaces',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries namespaces.
     *
     * @remarks
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *         <groupId>com.aliyun</groupId>
     *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *         <version>1.0.5</version>
     *     </dependency>
     *
     * @param request - ListNamespacesRequest
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * Queries the execution history of a workflow. You can call this operation only in the professional edition.
     *
     * @param request - ListWorkflowInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowInstanceResponse
     *
     * @param ListWorkflowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListWorkflowInstanceResponse
     */
    public function listWorkflowInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflowInstance',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution history of a workflow. You can call this operation only in the professional edition.
     *
     * @param request - ListWorkflowInstanceRequest
     *
     * @returns ListWorkflowInstanceResponse
     *
     * @param ListWorkflowInstanceRequest $request
     *
     * @return ListWorkflowInstanceResponse
     */
    public function listWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取机器详细信息.
     *
     * @param request - ReadSchedulerxDesignateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadSchedulerxDesignateDetailResponse
     *
     * @param ReadSchedulerxDesignateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ReadSchedulerxDesignateDetailResponse
     */
    public function readSchedulerxDesignateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->designateType) {
            @$query['DesignateType'] = $request->designateType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReadSchedulerxDesignateDetail',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadSchedulerxDesignateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取机器详细信息.
     *
     * @param request - ReadSchedulerxDesignateDetailRequest
     *
     * @returns ReadSchedulerxDesignateDetailResponse
     *
     * @param ReadSchedulerxDesignateDetailRequest $request
     *
     * @return ReadSchedulerxDesignateDetailResponse
     */
    public function readSchedulerxDesignateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readSchedulerxDesignateDetailWithOptions($request, $runtime);
    }

    /**
     * Reruns a job to obtain the historical data of the job. You can call this operation only in the professional edition.
     *
     * @param request - RerunJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RerunJobResponse
     *
     * @param RerunJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RerunJobResponse
     */
    public function rerunJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataTime) {
            @$body['DataTime'] = $request->dataTime;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RerunJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RerunJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reruns a job to obtain the historical data of the job. You can call this operation only in the professional edition.
     *
     * @param request - RerunJobRequest
     *
     * @returns RerunJobResponse
     *
     * @param RerunJobRequest $request
     *
     * @return RerunJobResponse
     */
    public function rerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunJobWithOptions($request, $runtime);
    }

    /**
     * Reruns a successful or failed job instance. You can call this operation only in the professional edition.
     *
     * @param request - RetryJobInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryJobInstanceResponse
     *
     * @param RetryJobInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RetryJobInstanceResponse
     */
    public function retryJobInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobInstanceId) {
            @$query['JobInstanceId'] = $request->jobInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryJobInstance',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryJobInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reruns a successful or failed job instance. You can call this operation only in the professional edition.
     *
     * @param request - RetryJobInstanceRequest
     *
     * @returns RetryJobInstanceResponse
     *
     * @param RetryJobInstanceRequest $request
     *
     * @return RetryJobInstanceResponse
     */
    public function retryJobInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryJobInstanceWithOptions($request, $runtime);
    }

    /**
     * Revokes the permissions that are granted to an Alibaba Cloud Resource Access Management (RAM) user.
     *
     * @param request - RevokePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePermissionResponse
     *
     * @param RevokePermissionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RevokePermissionResponse
     */
    public function revokePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokePermission',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions that are granted to an Alibaba Cloud Resource Access Management (RAM) user.
     *
     * @param request - RevokePermissionRequest
     *
     * @returns RevokePermissionResponse
     *
     * @param RevokePermissionRequest $request
     *
     * @return RevokePermissionResponse
     */
    public function revokePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePermissionWithOptions($request, $runtime);
    }

    /**
     * Forcibly sets the state of a job instance to successful. You can call this operation only in the professional edition.
     *
     * @param request - SetJobInstanceSuccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetJobInstanceSuccessResponse
     *
     * @param SetJobInstanceSuccessRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetJobInstanceSuccessResponse
     */
    public function setJobInstanceSuccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobInstanceId) {
            @$query['JobInstanceId'] = $request->jobInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetJobInstanceSuccess',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetJobInstanceSuccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Forcibly sets the state of a job instance to successful. You can call this operation only in the professional edition.
     *
     * @param request - SetJobInstanceSuccessRequest
     *
     * @returns SetJobInstanceSuccessResponse
     *
     * @param SetJobInstanceSuccessRequest $request
     *
     * @return SetJobInstanceSuccessResponse
     */
    public function setJobInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setJobInstanceSuccessWithOptions($request, $runtime);
    }

    /**
     * Forcibly sets the state of a workflow instance to successful. You can call this operation only in the professional edition.
     *
     * @param request - SetWfInstanceSuccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetWfInstanceSuccessResponse
     *
     * @param SetWfInstanceSuccessRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetWfInstanceSuccessResponse
     */
    public function setWfInstanceSuccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$query['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->wfInstanceId) {
            @$query['WfInstanceId'] = $request->wfInstanceId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetWfInstanceSuccess',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetWfInstanceSuccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Forcibly sets the state of a workflow instance to successful. You can call this operation only in the professional edition.
     *
     * @param request - SetWfInstanceSuccessRequest
     *
     * @returns SetWfInstanceSuccessResponse
     *
     * @param SetWfInstanceSuccessRequest $request
     *
     * @return SetWfInstanceSuccessResponse
     */
    public function setWfInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWfInstanceSuccessWithOptions($request, $runtime);
    }

    /**
     * Stops a job instance in the running state.
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a job instance in the running state.
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the application group.
     *
     * @param request - UpdateAppGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppGroupResponse
     *
     * @param UpdateAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAppGroupResponse
     */
    public function updateAppGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->monitorConfigJson) {
            @$query['MonitorConfigJson'] = $request->monitorConfigJson;
        }

        if (null !== $request->monitorContactsJson) {
            @$query['MonitorContactsJson'] = $request->monitorContactsJson;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppGroup',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the application group.
     *
     * @param request - UpdateAppGroupRequest
     *
     * @returns UpdateAppGroupResponse
     *
     * @param UpdateAppGroupRequest $request
     *
     * @return UpdateAppGroupResponse
     */
    public function updateAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppGroupWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration information about a job. By default, you need to call the GetJobInfo operation to obtain the original configuration of the job before you call this operation to modify the configuration as required.
     *
     * @param request - UpdateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->className) {
            @$body['ClassName'] = $request->className;
        }

        if (null !== $request->consumerSize) {
            @$body['ConsumerSize'] = $request->consumerSize;
        }

        if (null !== $request->contactInfo) {
            @$body['ContactInfo'] = $request->contactInfo;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->dataOffset) {
            @$body['DataOffset'] = $request->dataOffset;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dispatcherSize) {
            @$body['DispatcherSize'] = $request->dispatcherSize;
        }

        if (null !== $request->executeMode) {
            @$body['ExecuteMode'] = $request->executeMode;
        }

        if (null !== $request->failEnable) {
            @$body['FailEnable'] = $request->failEnable;
        }

        if (null !== $request->failTimes) {
            @$body['FailTimes'] = $request->failTimes;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->missWorkerEnable) {
            @$body['MissWorkerEnable'] = $request->missWorkerEnable;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->queueSize) {
            @$body['QueueSize'] = $request->queueSize;
        }

        if (null !== $request->sendChannel) {
            @$body['SendChannel'] = $request->sendChannel;
        }

        if (null !== $request->successNoticeEnable) {
            @$body['SuccessNoticeEnable'] = $request->successNoticeEnable;
        }

        if (null !== $request->taskAttemptInterval) {
            @$body['TaskAttemptInterval'] = $request->taskAttemptInterval;
        }

        if (null !== $request->taskDispatchMode) {
            @$body['TaskDispatchMode'] = $request->taskDispatchMode;
        }

        if (null !== $request->taskMaxAttempt) {
            @$body['TaskMaxAttempt'] = $request->taskMaxAttempt;
        }

        if (null !== $request->template) {
            @$body['Template'] = $request->template;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        if (null !== $request->timeoutEnable) {
            @$body['TimeoutEnable'] = $request->timeoutEnable;
        }

        if (null !== $request->timeoutKillEnable) {
            @$body['TimeoutKillEnable'] = $request->timeoutKillEnable;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        if (null !== $request->XAttrs) {
            @$body['XAttrs'] = $request->XAttrs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJob',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration information about a job. By default, you need to call the GetJobInfo operation to obtain the original configuration of the job before you call this operation to modify the configuration as required.
     *
     * @param request - UpdateJobRequest
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }

    /**
     * 更新任务执行脚本.
     *
     * @param request - UpdateJobScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobScriptResponse
     *
     * @param UpdateJobScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateJobScriptResponse
     */
    public function updateJobScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->scriptContent) {
            @$body['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->versionDescription) {
            @$body['VersionDescription'] = $request->versionDescription;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJobScript',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新任务执行脚本.
     *
     * @param request - UpdateJobScriptRequest
     *
     * @returns UpdateJobScriptResponse
     *
     * @param UpdateJobScriptRequest $request
     *
     * @return UpdateJobScriptResponse
     */
    public function updateJobScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobScriptWithOptions($request, $runtime);
    }

    /**
     * 更新命名空间.
     *
     * @param request - UpdateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespace',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新命名空间.
     *
     * @param request - UpdateNamespaceRequest
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * Updates the basic information about a workflow. You can call this operation only in the professional edition.
     *
     * @param request - UpdateWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowResponse
     *
     * @param UpdateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflow',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a workflow. You can call this operation only in the professional edition.
     *
     * @param request - UpdateWorkflowRequest
     *
     * @returns UpdateWorkflowResponse
     *
     * @param UpdateWorkflowRequest $request
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowWithOptions($request, $runtime);
    }

    /**
     * Modifies the nodes and dependencies of a workflow. You can call this operation only in the professional edition.
     *
     * @param request - UpdateWorkflowDagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowDagResponse
     *
     * @param UpdateWorkflowDagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateWorkflowDagResponse
     */
    public function updateWorkflowDagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->dagJson) {
            @$body['DagJson'] = $request->dagJson;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespaceSource) {
            @$body['NamespaceSource'] = $request->namespaceSource;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflowDag',
            'version' => '2019-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkflowDagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the nodes and dependencies of a workflow. You can call this operation only in the professional edition.
     *
     * @param request - UpdateWorkflowDagRequest
     *
     * @returns UpdateWorkflowDagResponse
     *
     * @param UpdateWorkflowDagRequest $request
     *
     * @return UpdateWorkflowDagResponse
     */
    public function updateWorkflowDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDagWithOptions($request, $runtime);
    }
}

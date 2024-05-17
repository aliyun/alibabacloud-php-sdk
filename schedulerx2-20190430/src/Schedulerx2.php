<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteRouteStrategyRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteRouteStrategyResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteWorkflowResponse;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponse;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowDagRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowDagResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateWorkflowResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Schedulerx2 extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'  => 'schedulerx.cn-beijing.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Deletes multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchDeleteJobsRequest $request BatchDeleteJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteJobsResponse BatchDeleteJobsResponse
     */
    public function batchDeleteJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->jobIdList)) {
            $body['JobIdList'] = $request->jobIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteJobs',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchDeleteJobsRequest $request BatchDeleteJobsRequest
     *
     * @return BatchDeleteJobsResponse BatchDeleteJobsResponse
     */
    public function batchDeleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteJobsWithOptions($request, $runtime);
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param BatchDeleteRouteStrategyRequest $request BatchDeleteRouteStrategyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteRouteStrategyResponse BatchDeleteRouteStrategyResponse
     */
    public function batchDeleteRouteStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->jobIdList)) {
            $body['JobIdList'] = $request->jobIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteRouteStrategy',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param BatchDeleteRouteStrategyRequest $request BatchDeleteRouteStrategyRequest
     *
     * @return BatchDeleteRouteStrategyResponse BatchDeleteRouteStrategyResponse
     */
    public function batchDeleteRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Disables multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchDisableJobsRequest $request BatchDisableJobsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDisableJobsResponse BatchDisableJobsResponse
     */
    public function batchDisableJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->jobIdList)) {
            $body['JobIdList'] = $request->jobIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDisableJobs',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDisableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchDisableJobsRequest $request BatchDisableJobsRequest
     *
     * @return BatchDisableJobsResponse BatchDisableJobsResponse
     */
    public function batchDisableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDisableJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Enables multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchEnableJobsRequest $request BatchEnableJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchEnableJobsResponse BatchEnableJobsResponse
     */
    public function batchEnableJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->jobIdList)) {
            $body['JobIdList'] = $request->jobIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchEnableJobs',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchEnableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables multiple jobs at a time.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.4</version>
     * </dependency>
     * ```
     *  *
     * @param BatchEnableJobsRequest $request BatchEnableJobsRequest
     *
     * @return BatchEnableJobsResponse BatchEnableJobsResponse
     */
    public function batchEnableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEnableJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application group. The AppKey is returned.
     *  *
     * @param CreateAppGroupRequest $request CreateAppGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppGroupResponse CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppGroup',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an application group. The AppKey is returned.
     *  *
     * @param CreateAppGroupRequest $request CreateAppGroupRequest
     *
     * @return CreateAppGroupResponse CreateAppGroupResponse
     */
    public function createAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a job and obtains the job ID.
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->attemptInterval)) {
            $body['AttemptInterval'] = $request->attemptInterval;
        }
        if (!Utils::isUnset($request->calendar)) {
            $body['Calendar'] = $request->calendar;
        }
        if (!Utils::isUnset($request->className)) {
            $body['ClassName'] = $request->className;
        }
        if (!Utils::isUnset($request->consumerSize)) {
            $body['ConsumerSize'] = $request->consumerSize;
        }
        if (!Utils::isUnset($request->contactInfo)) {
            $body['ContactInfo'] = $request->contactInfo;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataOffset)) {
            $body['DataOffset'] = $request->dataOffset;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dispatcherSize)) {
            $body['DispatcherSize'] = $request->dispatcherSize;
        }
        if (!Utils::isUnset($request->executeMode)) {
            $body['ExecuteMode'] = $request->executeMode;
        }
        if (!Utils::isUnset($request->failEnable)) {
            $body['FailEnable'] = $request->failEnable;
        }
        if (!Utils::isUnset($request->failTimes)) {
            $body['FailTimes'] = $request->failTimes;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $body['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->maxAttempt)) {
            $body['MaxAttempt'] = $request->maxAttempt;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->missWorkerEnable)) {
            $body['MissWorkerEnable'] = $request->missWorkerEnable;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->queueSize)) {
            $body['QueueSize'] = $request->queueSize;
        }
        if (!Utils::isUnset($request->sendChannel)) {
            $body['SendChannel'] = $request->sendChannel;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->successNoticeEnable)) {
            $body['SuccessNoticeEnable'] = $request->successNoticeEnable;
        }
        if (!Utils::isUnset($request->taskAttemptInterval)) {
            $body['TaskAttemptInterval'] = $request->taskAttemptInterval;
        }
        if (!Utils::isUnset($request->taskMaxAttempt)) {
            $body['TaskMaxAttempt'] = $request->taskMaxAttempt;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->timeoutEnable)) {
            $body['TimeoutEnable'] = $request->timeoutEnable;
        }
        if (!Utils::isUnset($request->timeoutKillEnable)) {
            $body['TimeoutKillEnable'] = $request->timeoutKillEnable;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->XAttrs)) {
            $body['XAttrs'] = $request->XAttrs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a job and obtains the job ID.
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a namespace.
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a namespace.
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a routing policy.
     *  *
     * @param CreateRouteStrategyRequest $request CreateRouteStrategyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRouteStrategyResponse CreateRouteStrategyResponse
     */
    public function createRouteStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->strategyContent)) {
            $query['StrategyContent'] = $request->strategyContent;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRouteStrategy',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a routing policy.
     *  *
     * @param CreateRouteStrategyRequest $request CreateRouteStrategyRequest
     *
     * @return CreateRouteStrategyResponse CreateRouteStrategyResponse
     */
    public function createRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a workflow. By default, the created workflow is disabled. After you update the directed acyclic graph (DAG) of the workflow, you must manually or call the corresponding operation to enable the workflow. You can call this operation only in the professional edition.
     *  *
     * @param CreateWorkflowRequest $request CreateWorkflowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkflowResponse CreateWorkflowResponse
     */
    public function createWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a workflow. By default, the created workflow is disabled. After you update the directed acyclic graph (DAG) of the workflow, you must manually or call the corresponding operation to enable the workflow. You can call this operation only in the professional edition.
     *  *
     * @param CreateWorkflowRequest $request CreateWorkflowRequest
     *
     * @return CreateWorkflowResponse CreateWorkflowResponse
     */
    public function createWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param DeleteAppGroupRequest $request DeleteAppGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppGroupResponse DeleteAppGroupResponse
     */
    public function deleteAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteJobs)) {
            $query['DeleteJobs'] = $request->deleteJobs;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppGroup',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param DeleteAppGroupRequest $request DeleteAppGroupRequest
     *
     * @return DeleteAppGroupResponse DeleteAppGroupResponse
     */
    public function deleteAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified job.
     *  *
     * @param DeleteJobRequest $request DeleteJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specified job.
     *  *
     * @param DeleteJobRequest $request DeleteJobRequest
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a routing policy.
     *  *
     * @param DeleteRouteStrategyRequest $request DeleteRouteStrategyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRouteStrategyResponse DeleteRouteStrategyResponse
     */
    public function deleteRouteStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRouteStrategy',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRouteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a routing policy.
     *  *
     * @param DeleteRouteStrategyRequest $request DeleteRouteStrategyRequest
     *
     * @return DeleteRouteStrategyResponse DeleteRouteStrategyResponse
     */
    public function deleteRouteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a workflow.
     *  *
     * @param DeleteWorkflowRequest $request DeleteWorkflowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkflowResponse DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a workflow.
     *  *
     * @param DeleteWorkflowRequest $request DeleteWorkflowRequest
     *
     * @return DeleteWorkflowResponse DeleteWorkflowResponse
     */
    public function deleteWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Returns available regions.
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
            'version'     => '2019-04-30',
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
     * @summary Returns available regions.
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @summary Designates machines.
     *  *
     * @param DesignateWorkersRequest $request DesignateWorkersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DesignateWorkersResponse DesignateWorkersResponse
     */
    public function designateWorkersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DesignateWorkers',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DesignateWorkersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Designates machines.
     *  *
     * @param DesignateWorkersRequest $request DesignateWorkersRequest
     *
     * @return DesignateWorkersResponse DesignateWorkersResponse
     */
    public function designateWorkers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->designateWorkersWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a job.
     *  *
     * @param DisableJobRequest $request DisableJobRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableJobResponse DisableJobResponse
     */
    public function disableJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a job.
     *  *
     * @param DisableJobRequest $request DisableJobRequest
     *
     * @return DisableJobResponse DisableJobResponse
     */
    public function disableJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableJobWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a specified workflow.
     *  *
     * @param DisableWorkflowRequest $request DisableWorkflowRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableWorkflowResponse DisableWorkflowResponse
     */
    public function disableWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a specified workflow.
     *  *
     * @param DisableWorkflowRequest $request DisableWorkflowRequest
     *
     * @return DisableWorkflowResponse DisableWorkflowResponse
     */
    public function disableWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a job.
     *  *
     * @param EnableJobRequest $request EnableJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableJobResponse EnableJobResponse
     */
    public function enableJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a job.
     *  *
     * @param EnableJobRequest $request EnableJobRequest
     *
     * @return EnableJobResponse EnableJobResponse
     */
    public function enableJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableJobWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a specified workflow.
     *  *
     * @param EnableWorkflowRequest $request EnableWorkflowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableWorkflowResponse EnableWorkflowResponse
     */
    public function enableWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a specified workflow.
     *  *
     * @param EnableWorkflowRequest $request EnableWorkflowRequest
     *
     * @return EnableWorkflowResponse EnableWorkflowResponse
     */
    public function enableWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Triggers a job to immediately run once.
     *  *
     * @description > The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *  *
     * @param ExecuteJobRequest $request ExecuteJobRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteJobResponse ExecuteJobResponse
     */
    public function executeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Triggers a job to immediately run once.
     *  *
     * @description > The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *  *
     * @param ExecuteJobRequest $request ExecuteJobRequest
     *
     * @return ExecuteJobResponse ExecuteJobResponse
     */
    public function executeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Immediately triggers a workflow.
     *  *
     * @param ExecuteWorkflowRequest $request ExecuteWorkflowRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteWorkflowResponse ExecuteWorkflowResponse
     */
    public function executeWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Immediately triggers a workflow.
     *  *
     * @param ExecuteWorkflowRequest $request ExecuteWorkflowRequest
     *
     * @return ExecuteWorkflowResponse ExecuteWorkflowResponse
     */
    public function executeWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary The configuration of the alert. The value is a JSON string. For more information, see **the additional information about response parameters below this table**.
     *  *
     * @param GetAppGroupRequest $request GetAppGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppGroupResponse GetAppGroupResponse
     */
    public function getAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppGroup',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The configuration of the alert. The value is a JSON string. For more information, see **the additional information about response parameters below this table**.
     *  *
     * @param GetAppGroupRequest $request GetAppGroupRequest
     *
     * @return GetAppGroupResponse GetAppGroupResponse
     */
    public function getAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a job based on the job ID. In most cases, the obtained information is used to update jobs.
     *  *
     * @param GetJobInfoRequest $request GetJobInfoRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobInfoResponse GetJobInfoResponse
     */
    public function getJobInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobInfo',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a job based on the job ID. In most cases, the obtained information is used to update jobs.
     *  *
     * @param GetJobInfoRequest $request GetJobInfoRequest
     *
     * @return GetJobInfoResponse GetJobInfoResponse
     */
    public function getJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a job instance. You can view the status and progress of the job instance.
     *  *
     * @param GetJobInstanceRequest $request GetJobInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobInstanceResponse GetJobInstanceResponse
     */
    public function getJobInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobInstance',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a job instance. You can view the status and progress of the job instance.
     *  *
     * @param GetJobInstanceRequest $request GetJobInstanceRequest
     *
     * @return GetJobInstanceResponse GetJobInstanceResponse
     */
    public function getJobInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the most recent 10 execution instances of a job.
     *  *
     * @param GetJobInstanceListRequest $request GetJobInstanceListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobInstanceListResponse GetJobInstanceListResponse
     */
    public function getJobInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobInstanceList',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the most recent 10 execution instances of a job.
     *  *
     * @param GetJobInstanceListRequest $request GetJobInstanceListRequest
     *
     * @return GetJobInstanceListResponse GetJobInstanceListResponse
     */
    public function getJobInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInstanceListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operational logs of a job. You can call this operation only in the professional edition.
     *  *
     * @param GetLogRequest  $request GetLogRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLogResponse GetLogResponse
     */
    public function getLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLog',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the operational logs of a job. You can call this operation only in the professional edition.
     *  *
     * @param GetLogRequest $request GetLogRequest
     *
     * @return GetLogResponse GetLogResponse
     */
    public function getLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogWithOptions($request, $runtime);
    }

    /**
     * @summary 查询概览数据信息
     *  *
     * @param GetOverviewRequest $request GetOverviewRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->operate)) {
            $query['Operate'] = $request->operate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOverview',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询概览数据信息
     *  *
     * @param GetOverviewRequest $request GetOverviewRequest
     *
     * @return GetOverviewResponse GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the information about a workflow.
     *  *
     * @param GetWorkFlowRequest $request GetWorkFlowRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkFlowResponse GetWorkFlowResponse
     */
    public function getWorkFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkFlow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about a workflow.
     *  *
     * @param GetWorkFlowRequest $request GetWorkFlowRequest
     *
     * @return GetWorkFlowResponse GetWorkFlowResponse
     */
    public function getWorkFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the list of workers that are connected to an application.
     *  *
     * @param GetWorkerListRequest $request GetWorkerListRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkerListResponse GetWorkerListResponse
     */
    public function getWorkerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkerList',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the list of workers that are connected to an application.
     *  *
     * @param GetWorkerListRequest $request GetWorkerListRequest
     *
     * @return GetWorkerListResponse GetWorkerListResponse
     */
    public function getWorkerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkerListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a specified workflow instance, including the state of the workflow instance, the state of each job instance, and the dependencies between job instances. You can call this operation only in the professional edition.
     *  *
     * @param GetWorkflowInstanceRequest $request GetWorkflowInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkflowInstanceResponse GetWorkflowInstanceResponse
     */
    public function getWorkflowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowInstance',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a specified workflow instance, including the state of the workflow instance, the state of each job instance, and the dependencies between job instances. You can call this operation only in the professional edition.
     *  *
     * @param GetWorkflowInstanceRequest $request GetWorkflowInstanceRequest
     *
     * @return GetWorkflowInstanceResponse GetWorkflowInstanceResponse
     */
    public function getWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Grants permissions to an application group.
     *  *
     * @param GrantPermissionRequest $request GrantPermissionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantPermissionResponse GrantPermissionResponse
     */
    public function grantPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->grantOption)) {
            $query['GrantOption'] = $request->grantOption;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantPermission',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grants permissions to an application group.
     *  *
     * @param GrantPermissionRequest $request GrantPermissionRequest
     *
     * @return GrantPermissionResponse GrantPermissionResponse
     */
    public function grantPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of applications.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.5</version>
     * </dependency>
     * ```
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroupName)) {
            $query['AppGroupName'] = $request->appGroupName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of applications.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     * ```xml
     * <dependency>
     *     <groupId>com.aliyun</groupId>
     *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *     <version>1.0.5</version>
     * </dependency>
     * ```
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries jobs.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *           <groupId>com.aliyun</groupId>
     *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *           <version>1.0.5</version>
     *     </dependency>
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries jobs.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *           <groupId>com.aliyun</groupId>
     *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *           <version>1.0.5</version>
     *     </dependency>
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries namespaces.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *         <groupId>com.aliyun</groupId>
     *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *         <version>1.0.5</version>
     *     </dependency>
     *  *
     * @param ListNamespacesRequest $request ListNamespacesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamespacesResponse ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            $query['NamespaceName'] = $request->namespaceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamespaces',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries namespaces.
     *  *
     * @description Before you call this operation, you must add the following dependency to the pom.xml file:
     *     <dependency>
     *         <groupId>com.aliyun</groupId>
     *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *         <version>1.0.5</version>
     *     </dependency>
     *  *
     * @param ListNamespacesRequest $request ListNamespacesRequest
     *
     * @return ListNamespacesResponse ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution history of a workflow. You can call this operation only in the professional edition.
     *  *
     * @param ListWorkflowInstanceRequest $request ListWorkflowInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkflowInstanceResponse ListWorkflowInstanceResponse
     */
    public function listWorkflowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowInstance',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution history of a workflow. You can call this operation only in the professional edition.
     *  *
     * @param ListWorkflowInstanceRequest $request ListWorkflowInstanceRequest
     *
     * @return ListWorkflowInstanceResponse ListWorkflowInstanceResponse
     */
    public function listWorkflowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Reruns a job to obtain the historical data of the job. You can call this operation only in the professional edition.
     *  *
     * @param RerunJobRequest $request RerunJobRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return RerunJobResponse RerunJobResponse
     */
    public function rerunJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataTime)) {
            $body['DataTime'] = $request->dataTime;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RerunJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RerunJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reruns a job to obtain the historical data of the job. You can call this operation only in the professional edition.
     *  *
     * @param RerunJobRequest $request RerunJobRequest
     *
     * @return RerunJobResponse RerunJobResponse
     */
    public function rerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunJobWithOptions($request, $runtime);
    }

    /**
     * @summary Reruns a successful or failed job instance. You can call this operation only in the professional edition.
     *  *
     * @param RetryJobInstanceRequest $request RetryJobInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryJobInstanceResponse RetryJobInstanceResponse
     */
    public function retryJobInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobInstanceId)) {
            $query['JobInstanceId'] = $request->jobInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryJobInstance',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryJobInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reruns a successful or failed job instance. You can call this operation only in the professional edition.
     *  *
     * @param RetryJobInstanceRequest $request RetryJobInstanceRequest
     *
     * @return RetryJobInstanceResponse RetryJobInstanceResponse
     */
    public function retryJobInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryJobInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the permissions that are granted to an Alibaba Cloud Resource Access Management (RAM) user.
     *  *
     * @param RevokePermissionRequest $request RevokePermissionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokePermissionResponse RevokePermissionResponse
     */
    public function revokePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokePermission',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions that are granted to an Alibaba Cloud Resource Access Management (RAM) user.
     *  *
     * @param RevokePermissionRequest $request RevokePermissionRequest
     *
     * @return RevokePermissionResponse RevokePermissionResponse
     */
    public function revokePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Forcibly sets the state of a job instance to successful. You can call this operation only in the professional edition.
     *  *
     * @param SetJobInstanceSuccessRequest $request SetJobInstanceSuccessRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetJobInstanceSuccessResponse SetJobInstanceSuccessResponse
     */
    public function setJobInstanceSuccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobInstanceId)) {
            $query['JobInstanceId'] = $request->jobInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetJobInstanceSuccess',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetJobInstanceSuccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Forcibly sets the state of a job instance to successful. You can call this operation only in the professional edition.
     *  *
     * @param SetJobInstanceSuccessRequest $request SetJobInstanceSuccessRequest
     *
     * @return SetJobInstanceSuccessResponse SetJobInstanceSuccessResponse
     */
    public function setJobInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setJobInstanceSuccessWithOptions($request, $runtime);
    }

    /**
     * @summary Forcibly sets the state of a workflow instance to successful. You can call this operation only in the professional edition.
     *  *
     * @param SetWfInstanceSuccessRequest $request SetWfInstanceSuccessRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetWfInstanceSuccessResponse SetWfInstanceSuccessResponse
     */
    public function setWfInstanceSuccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $query['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->wfInstanceId)) {
            $query['WfInstanceId'] = $request->wfInstanceId;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetWfInstanceSuccess',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetWfInstanceSuccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Forcibly sets the state of a workflow instance to successful. You can call this operation only in the professional edition.
     *  *
     * @param SetWfInstanceSuccessRequest $request SetWfInstanceSuccessRequest
     *
     * @return SetWfInstanceSuccessResponse SetWfInstanceSuccessResponse
     */
    public function setWfInstanceSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWfInstanceSuccessWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a job instance in the running state.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a job instance in the running state.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param UpdateAppGroupRequest $request UpdateAppGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppGroupResponse UpdateAppGroupResponse
     */
    public function updateAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppGroup',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The additional information that is returned.
     *  *
     * @param UpdateAppGroupRequest $request UpdateAppGroupRequest
     *
     * @return UpdateAppGroupResponse UpdateAppGroupResponse
     */
    public function updateAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration information about a job. By default, you need to call the GetJobInfo operation to obtain the original configuration of the job before you call this operation to modify the configuration as required.
     *  *
     * @param UpdateJobRequest $request UpdateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->attemptInterval)) {
            $body['AttemptInterval'] = $request->attemptInterval;
        }
        if (!Utils::isUnset($request->calendar)) {
            $body['Calendar'] = $request->calendar;
        }
        if (!Utils::isUnset($request->className)) {
            $body['ClassName'] = $request->className;
        }
        if (!Utils::isUnset($request->consumerSize)) {
            $body['ConsumerSize'] = $request->consumerSize;
        }
        if (!Utils::isUnset($request->contactInfo)) {
            $body['ContactInfo'] = $request->contactInfo;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataOffset)) {
            $body['DataOffset'] = $request->dataOffset;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dispatcherSize)) {
            $body['DispatcherSize'] = $request->dispatcherSize;
        }
        if (!Utils::isUnset($request->executeMode)) {
            $body['ExecuteMode'] = $request->executeMode;
        }
        if (!Utils::isUnset($request->failEnable)) {
            $body['FailEnable'] = $request->failEnable;
        }
        if (!Utils::isUnset($request->failTimes)) {
            $body['FailTimes'] = $request->failTimes;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxAttempt)) {
            $body['MaxAttempt'] = $request->maxAttempt;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->missWorkerEnable)) {
            $body['MissWorkerEnable'] = $request->missWorkerEnable;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->queueSize)) {
            $body['QueueSize'] = $request->queueSize;
        }
        if (!Utils::isUnset($request->sendChannel)) {
            $body['SendChannel'] = $request->sendChannel;
        }
        if (!Utils::isUnset($request->successNoticeEnable)) {
            $body['SuccessNoticeEnable'] = $request->successNoticeEnable;
        }
        if (!Utils::isUnset($request->taskAttemptInterval)) {
            $body['TaskAttemptInterval'] = $request->taskAttemptInterval;
        }
        if (!Utils::isUnset($request->taskDispatchMode)) {
            $body['TaskDispatchMode'] = $request->taskDispatchMode;
        }
        if (!Utils::isUnset($request->taskMaxAttempt)) {
            $body['TaskMaxAttempt'] = $request->taskMaxAttempt;
        }
        if (!Utils::isUnset($request->template)) {
            $body['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->timeoutEnable)) {
            $body['TimeoutEnable'] = $request->timeoutEnable;
        }
        if (!Utils::isUnset($request->timeoutKillEnable)) {
            $body['TimeoutKillEnable'] = $request->timeoutKillEnable;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->XAttrs)) {
            $body['XAttrs'] = $request->XAttrs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateJob',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration information about a job. By default, you need to call the GetJobInfo operation to obtain the original configuration of the job before you call this operation to modify the configuration as required.
     *  *
     * @param UpdateJobRequest $request UpdateJobRequest
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the basic information about a workflow. You can call this operation only in the professional edition.
     *  *
     * @param UpdateWorkflowRequest $request UpdateWorkflowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkflowResponse UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $body['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflow',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the basic information about a workflow. You can call this operation only in the professional edition.
     *  *
     * @param UpdateWorkflowRequest $request UpdateWorkflowRequest
     *
     * @return UpdateWorkflowResponse UpdateWorkflowResponse
     */
    public function updateWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the nodes and dependencies of a workflow. You can call this operation only in the professional edition.
     *  *
     * @param UpdateWorkflowDagRequest $request UpdateWorkflowDagRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkflowDagResponse UpdateWorkflowDagResponse
     */
    public function updateWorkflowDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->dagJson)) {
            $body['DagJson'] = $request->dagJson;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespaceSource)) {
            $body['NamespaceSource'] = $request->namespaceSource;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $body['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflowDag',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkflowDagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the nodes and dependencies of a workflow. You can call this operation only in the professional edition.
     *  *
     * @param UpdateWorkflowDagRequest $request UpdateWorkflowDagRequest
     *
     * @return UpdateWorkflowDagResponse UpdateWorkflowDagResponse
     */
    public function updateWorkflowDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDagWithOptions($request, $runtime);
    }
}

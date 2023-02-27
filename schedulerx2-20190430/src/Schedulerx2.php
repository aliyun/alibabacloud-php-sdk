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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * @param BatchDeleteRouteStrategyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchDeleteRouteStrategyResponse
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   * ```xml
     *   * <dependency>
     *   *     <groupId>com.aliyun</groupId>
     *   *     <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *     <version>1.0.4</version>
     *   * </dependency>
     *   * ```.
     *   *
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
     * @param CreateAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAppGroupResponse
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
     * @param CreateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
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
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
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
     * @param CreateRouteStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRouteStrategyResponse
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
     * @param CreateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkflowResponse
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
     * @param DeleteAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAppGroupResponse
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
     * @param DeleteJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
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
     * @param DeleteRouteStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRouteStrategyResponse
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
     * @param DeleteWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkflowResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
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
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DesignateWorkersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DesignateWorkersResponse
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
     * @param DisableJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DisableJobResponse
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
     * @param DisableWorkflowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableWorkflowResponse
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
     * @param EnableJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EnableJobResponse
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
     * @param EnableWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableWorkflowResponse
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
     * > : The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *   *
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
     * > : The combination of the `JobID` and `ScheduleTime` parameters serves as a unique index. Therefore, after the ExecuteJob operation is called to run a job once, a sleep for one second is required before the ExecuteJob operation is called to run the job again. Otherwise, the job may fail.
     *   *
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
     * @param ExecuteWorkflowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteWorkflowResponse
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
     * @param GetAppGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAppGroupResponse
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
     * @param GetJobInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetJobInfoResponse
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
     * @param GetJobInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetJobInstanceResponse
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
     * @param GetJobInstanceListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetJobInstanceListResponse
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
     * @param GetLogRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLogResponse
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
     * @param GetWorkFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWorkFlowResponse
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
     * @param GetWorkerListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetWorkerListResponse
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
     * @param GetWorkflowInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWorkflowInstanceResponse
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
     * @param GrantPermissionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GrantPermissionResponse
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
     * >  Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *       <groupId>com.aliyun</groupId>
     *   *       <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *       <version>1.0.5</version>.
     *   *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *       <groupId>com.aliyun</groupId>
     *   *       <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *       <version>1.0.5</version>.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *     <dependency>
     *   *           <groupId>com.aliyun</groupId>
     *   *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *           <version>1.0.5</version>
     *   *     </dependency>.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *     <dependency>
     *   *           <groupId>com.aliyun</groupId>
     *   *           <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *           <version>1.0.5</version>
     *   *     </dependency>.
     *   *
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
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *     <dependency>
     *   *         <groupId>com.aliyun</groupId>
     *   *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *         <version>1.0.5</version>
     *   *     </dependency>.
     *   *
     * @param ListNamespacesRequest $request ListNamespacesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamespacesResponse ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamespaces',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, you must add the following dependency to the pom.xml file:
     *   *     <dependency>
     *   *         <groupId>com.aliyun</groupId>
     *   *         <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
     *   *         <version>1.0.5</version>
     *   *     </dependency>.
     *   *
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
     * @param ListWorkflowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListWorkflowInstanceResponse
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
     * @param RerunJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RerunJobResponse
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
     * @param RetryJobInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RetryJobInstanceResponse
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
     * @param RevokePermissionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RevokePermissionResponse
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
     * @param SetJobInstanceSuccessRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetJobInstanceSuccessResponse
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
     * @param SetWfInstanceSuccessRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetWfInstanceSuccessResponse
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
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
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
     * @param UpdateAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAppGroupResponse
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
     * @param UpdateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
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
     * @param UpdateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkflowResponse
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
     * @param UpdateWorkflowDagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateWorkflowDagResponse
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

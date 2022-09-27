<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteJobsRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\BatchDeleteJobsResponse;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\DeleteJobResponse;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponse;
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
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RevokePermissionRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\RevokePermissionResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobResponse;
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
     * @param BatchDeleteJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchDeleteJobsResponse
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
     * @param BatchDisableJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchDisableJobsResponse
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
     * @param BatchEnableJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchEnableJobsResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jarUrl)) {
            $body['JarUrl'] = $request->jarUrl;
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
     * @param ExecuteJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ExecuteJobResponse
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
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
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
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
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
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jarUrl)) {
            $body['JarUrl'] = $request->jarUrl;
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
}

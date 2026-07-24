<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CheckSqlContentRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CheckSqlContentResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetJobDebugDataRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetJobDebugDataResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesInPageRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesInPageResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesInPageShrinkRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesShrinkRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeJobsRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeJobsResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListSupportedConnectorsRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListSupportedConnectorsResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ReopenComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ReopenComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\RestartComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\RestartComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StartComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StartComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StartComputeInstanceShrinkRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StartComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StartComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StopComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StopComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StopComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\StopComputeJobResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeInstanceNameRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeInstanceNameResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobCuRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobCuResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobDraftSqlRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobDraftSqlResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\UpdateComputeJobResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AlikafkaStreaming extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alikafkastreaming', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 检查sql语法.
     *
     * @param request - CheckSqlContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSqlContentResponse
     *
     * @param CheckSqlContentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckSqlContentResponse
     */
    public function checkSqlContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sqlContent) {
            @$query['SqlContent'] = $request->sqlContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSqlContent',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSqlContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查sql语法.
     *
     * @param request - CheckSqlContentRequest
     *
     * @returns CheckSqlContentResponse
     *
     * @param CheckSqlContentRequest $request
     *
     * @return CheckSqlContentResponse
     */
    public function checkSqlContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSqlContentWithOptions($request, $runtime);
    }

    /**
     * 创建 流计算实例.
     *
     * @param request - CreateComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeInstanceResponse
     *
     * @param CreateComputeInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateComputeInstanceResponse
     */
    public function createComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 流计算实例.
     *
     * @param request - CreateComputeInstanceRequest
     *
     * @returns CreateComputeInstanceResponse
     *
     * @param CreateComputeInstanceRequest $request
     *
     * @return CreateComputeInstanceResponse
     */
    public function createComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 创建 JOB.
     *
     * @param request - CreateComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeJobResponse
     *
     * @param CreateComputeJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateComputeJobResponse
     */
    public function createComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cuLimit) {
            @$query['CuLimit'] = $request->cuLimit;
        }

        if (null !== $request->cuReserved) {
            @$query['CuReserved'] = $request->cuReserved;
        }

        if (null !== $request->draftSql) {
            @$query['DraftSql'] = $request->draftSql;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobConfig) {
            @$query['JobConfig'] = $request->jobConfig;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->upgradeMode) {
            @$query['UpgradeMode'] = $request->upgradeMode;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 JOB.
     *
     * @param request - CreateComputeJobRequest
     *
     * @returns CreateComputeJobResponse
     *
     * @param CreateComputeJobRequest $request
     *
     * @return CreateComputeJobResponse
     */
    public function createComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createComputeJobWithOptions($request, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComputeInstanceResponse
     *
     * @param DeleteComputeInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteComputeInstanceResponse
     */
    public function deleteComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteComputeInstanceRequest
     *
     * @returns DeleteComputeInstanceResponse
     *
     * @param DeleteComputeInstanceRequest $request
     *
     * @return DeleteComputeInstanceResponse
     */
    public function deleteComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除 JOB.
     *
     * @param request - DeleteComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComputeJobResponse
     *
     * @param DeleteComputeJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteComputeJobResponse
     */
    public function deleteComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 JOB.
     *
     * @param request - DeleteComputeJobRequest
     *
     * @returns DeleteComputeJobResponse
     *
     * @param DeleteComputeJobRequest $request
     *
     * @return DeleteComputeJobResponse
     */
    public function deleteComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComputeJobWithOptions($request, $runtime);
    }

    /**
     * 查询单个实例.
     *
     * @param request - GetComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComputeInstanceResponse
     *
     * @param GetComputeInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetComputeInstanceResponse
     */
    public function getComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个实例.
     *
     * @param request - GetComputeInstanceRequest
     *
     * @returns GetComputeInstanceResponse
     *
     * @param GetComputeInstanceRequest $request
     *
     * @return GetComputeInstanceResponse
     */
    public function getComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 查询 JOB 详情.
     *
     * @param request - GetComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComputeJobResponse
     *
     * @param GetComputeJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetComputeJobResponse
     */
    public function getComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 JOB 详情.
     *
     * @param request - GetComputeJobRequest
     *
     * @returns GetComputeJobResponse
     *
     * @param GetComputeJobRequest $request
     *
     * @return GetComputeJobResponse
     */
    public function getComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getComputeJobWithOptions($request, $runtime);
    }

    /**
     * 获取debug信息.
     *
     * @param request - GetJobDebugDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobDebugDataResponse
     *
     * @param GetJobDebugDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetJobDebugDataResponse
     */
    public function getJobDebugDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
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
            'action' => 'GetJobDebugData',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobDebugDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取debug信息.
     *
     * @param request - GetJobDebugDataRequest
     *
     * @returns GetJobDebugDataResponse
     *
     * @param GetJobDebugDataRequest $request
     *
     * @return GetJobDebugDataResponse
     */
    public function getJobDebugData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDebugDataWithOptions($request, $runtime);
    }

    /**
     * 查询实例列表（分页）.
     *
     * @param tmpReq - ListComputeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeInstancesResponse
     *
     * @param ListComputeInstancesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListComputeInstancesResponse
     */
    public function listComputeInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListComputeInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComputeInstances',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListComputeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例列表（分页）.
     *
     * @param request - ListComputeInstancesRequest
     *
     * @returns ListComputeInstancesResponse
     *
     * @param ListComputeInstancesRequest $request
     *
     * @return ListComputeInstancesResponse
     */
    public function listComputeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComputeInstancesWithOptions($request, $runtime);
    }

    /**
     * 查询实例列表（分页）.
     *
     * @param tmpReq - ListComputeInstancesInPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeInstancesInPageResponse
     *
     * @param ListComputeInstancesInPageRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListComputeInstancesInPageResponse
     */
    public function listComputeInstancesInPageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListComputeInstancesInPageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComputeInstancesInPage',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListComputeInstancesInPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例列表（分页）.
     *
     * @param request - ListComputeInstancesInPageRequest
     *
     * @returns ListComputeInstancesInPageResponse
     *
     * @param ListComputeInstancesInPageRequest $request
     *
     * @return ListComputeInstancesInPageResponse
     */
    public function listComputeInstancesInPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComputeInstancesInPageWithOptions($request, $runtime);
    }

    /**
     * 分页查询 JOB 列表.
     *
     * @param request - ListComputeJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeJobsResponse
     *
     * @param ListComputeJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListComputeJobsResponse
     */
    public function listComputeJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComputeJobs',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListComputeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询 JOB 列表.
     *
     * @param request - ListComputeJobsRequest
     *
     * @returns ListComputeJobsResponse
     *
     * @param ListComputeJobsRequest $request
     *
     * @return ListComputeJobsResponse
     */
    public function listComputeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComputeJobsWithOptions($request, $runtime);
    }

    /**
     * 查询创建 SQL 任务时支持的连接器列表.
     *
     * @param request - ListSupportedConnectorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupportedConnectorsResponse
     *
     * @param ListSupportedConnectorsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSupportedConnectorsResponse
     */
    public function listSupportedConnectorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSupportedConnectors',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupportedConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询创建 SQL 任务时支持的连接器列表.
     *
     * @param request - ListSupportedConnectorsRequest
     *
     * @returns ListSupportedConnectorsResponse
     *
     * @param ListSupportedConnectorsRequest $request
     *
     * @return ListSupportedConnectorsResponse
     */
    public function listSupportedConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportedConnectorsWithOptions($request, $runtime);
    }

    /**
     * 重新启动后付费实例.
     *
     * @param request - ReopenComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReopenComputeInstanceResponse
     *
     * @param ReopenComputeInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReopenComputeInstanceResponse
     */
    public function reopenComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReopenComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReopenComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新启动后付费实例.
     *
     * @param request - ReopenComputeInstanceRequest
     *
     * @returns ReopenComputeInstanceResponse
     *
     * @param ReopenComputeInstanceRequest $request
     *
     * @return ReopenComputeInstanceResponse
     */
    public function reopenComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reopenComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 重启 JOB.
     *
     * @param request - RestartComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartComputeJobResponse
     *
     * @param RestartComputeJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartComputeJobResponse
     */
    public function restartComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启 JOB.
     *
     * @param request - RestartComputeJobRequest
     *
     * @returns RestartComputeJobResponse
     *
     * @param RestartComputeJobRequest $request
     *
     * @return RestartComputeJobResponse
     */
    public function restartComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartComputeJobWithOptions($request, $runtime);
    }

    /**
     * 部署实例.
     *
     * @param tmpReq - StartComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartComputeInstanceResponse
     *
     * @param StartComputeInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return StartComputeInstanceResponse
     */
    public function startComputeInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartComputeInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vSwitchIds) {
            $request->vSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->selectedZones) {
            @$query['SelectedZones'] = $request->selectedZones;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->vSwitchIdsShrink) {
            @$query['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 部署实例.
     *
     * @param request - StartComputeInstanceRequest
     *
     * @returns StartComputeInstanceResponse
     *
     * @param StartComputeInstanceRequest $request
     *
     * @return StartComputeInstanceResponse
     */
    public function startComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 创建 JOB.
     *
     * @param request - StartComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartComputeJobResponse
     *
     * @param StartComputeJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartComputeJobResponse
     */
    public function startComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cuLimit) {
            @$query['CuLimit'] = $request->cuLimit;
        }

        if (null !== $request->cuReserved) {
            @$query['CuReserved'] = $request->cuReserved;
        }

        if (null !== $request->draftSql) {
            @$query['DraftSql'] = $request->draftSql;
        }

        if (null !== $request->draftSqlStart) {
            @$query['DraftSqlStart'] = $request->draftSqlStart;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->recoveryMode) {
            @$query['RecoveryMode'] = $request->recoveryMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 JOB.
     *
     * @param request - StartComputeJobRequest
     *
     * @returns StartComputeJobResponse
     *
     * @param StartComputeJobRequest $request
     *
     * @return StartComputeJobResponse
     */
    public function startComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startComputeJobWithOptions($request, $runtime);
    }

    /**
     * 停用/释放后付费实例.
     *
     * @param request - StopComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopComputeInstanceResponse
     *
     * @param StopComputeInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopComputeInstanceResponse
     */
    public function stopComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停用/释放后付费实例.
     *
     * @param request - StopComputeInstanceRequest
     *
     * @returns StopComputeInstanceResponse
     *
     * @param StopComputeInstanceRequest $request
     *
     * @return StopComputeInstanceResponse
     */
    public function stopComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 停止 JOB.
     *
     * @param request - StopComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopComputeJobResponse
     *
     * @param StopComputeJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopComputeJobResponse
     */
    public function stopComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止 JOB.
     *
     * @param request - StopComputeJobRequest
     *
     * @returns StopComputeJobResponse
     *
     * @param StopComputeJobRequest $request
     *
     * @return StopComputeJobResponse
     */
    public function stopComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopComputeJobWithOptions($request, $runtime);
    }

    /**
     * 更新实例名称.
     *
     * @param request - UpdateComputeInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeInstanceNameResponse
     *
     * @param UpdateComputeInstanceNameRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateComputeInstanceNameResponse
     */
    public function updateComputeInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeInstanceName',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateComputeInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例名称.
     *
     * @param request - UpdateComputeInstanceNameRequest
     *
     * @returns UpdateComputeInstanceNameResponse
     *
     * @param UpdateComputeInstanceNameRequest $request
     *
     * @return UpdateComputeInstanceNameResponse
     */
    public function updateComputeInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateComputeInstanceNameWithOptions($request, $runtime);
    }

    /**
     * 更新 JOB.
     *
     * @param request - UpdateComputeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeJobResponse
     *
     * @param UpdateComputeJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateComputeJobResponse
     */
    public function updateComputeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->upgradeMode) {
            @$query['UpgradeMode'] = $request->upgradeMode;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeJob',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateComputeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 JOB.
     *
     * @param request - UpdateComputeJobRequest
     *
     * @returns UpdateComputeJobResponse
     *
     * @param UpdateComputeJobRequest $request
     *
     * @return UpdateComputeJobResponse
     */
    public function updateComputeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateComputeJobWithOptions($request, $runtime);
    }

    /**
     * 更新 JOB 的 CU 配额.
     *
     * @param request - UpdateComputeJobCuRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeJobCuResponse
     *
     * @param UpdateComputeJobCuRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateComputeJobCuResponse
     */
    public function updateComputeJobCuWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cuLimit) {
            @$query['CuLimit'] = $request->cuLimit;
        }

        if (null !== $request->cuReserved) {
            @$query['CuReserved'] = $request->cuReserved;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeJobCu',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateComputeJobCuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 JOB 的 CU 配额.
     *
     * @param request - UpdateComputeJobCuRequest
     *
     * @returns UpdateComputeJobCuResponse
     *
     * @param UpdateComputeJobCuRequest $request
     *
     * @return UpdateComputeJobCuResponse
     */
    public function updateComputeJobCu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateComputeJobCuWithOptions($request, $runtime);
    }

    /**
     * 更新 JOB 的 SQL.
     *
     * @param request - UpdateComputeJobDraftSqlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComputeJobDraftSqlResponse
     *
     * @param UpdateComputeJobDraftSqlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateComputeJobDraftSqlResponse
     */
    public function updateComputeJobDraftSqlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draftSql) {
            @$query['DraftSql'] = $request->draftSql;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComputeJobDraftSql',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateComputeJobDraftSqlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 JOB 的 SQL.
     *
     * @param request - UpdateComputeJobDraftSqlRequest
     *
     * @returns UpdateComputeJobDraftSqlResponse
     *
     * @param UpdateComputeJobDraftSqlRequest $request
     *
     * @return UpdateComputeJobDraftSqlResponse
     */
    public function updateComputeJobDraftSql($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateComputeJobDraftSqlWithOptions($request, $runtime);
    }
}

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
        $this->_endpointRule = 'regional';
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
     * @remarks
     * ## 请求说明
     * - 该接口支持通过 GET 或 POST 方法调用。
     * - 必须提供 `InstanceId`、`JobName` 和 `SqlContent` 参数，其中 `SqlContent` 是待校验的 Flink SQL 语句。
     * - 返回结果中，`Data.Valid` 字段指示 SQL 是否通过校验；若未通过，则错误详情位于 `Data.ErrorList` 中。
     * - 当前版本要求同时传入实例 ID (`InstanceId`) 和作业名称 (`JobName`) 以构建作业上下文。
     * - 接口返回成功仅表示校验流程执行完成，并不直接反映 SQL 的有效性，请检查 `Data.Valid` 字段来确定 SQL 是否有效。
     * - 错误码和异常处理请参考文档中的“错误码”部分。
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
     * @remarks
     * ## 请求说明
     * - 该接口支持通过 GET 或 POST 方法调用。
     * - 必须提供 `InstanceId`、`JobName` 和 `SqlContent` 参数，其中 `SqlContent` 是待校验的 Flink SQL 语句。
     * - 返回结果中，`Data.Valid` 字段指示 SQL 是否通过校验；若未通过，则错误详情位于 `Data.ErrorList` 中。
     * - 当前版本要求同时传入实例 ID (`InstanceId`) 和作业名称 (`JobName`) 以构建作业上下文。
     * - 接口返回成功仅表示校验流程执行完成，并不直接反映 SQL 的有效性，请检查 `Data.Valid` 字段来确定 SQL 是否有效。
     * - 错误码和异常处理请参考文档中的“错误码”部分。
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
     * @remarks
     * 创建一个计算实例。接口只完成购买阶段；创建成功后需调用 StartComputeInstance 完成网络配置和部署。
     * - API 版本：2026-02-02
     * - Action：CreateComputeInstance
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
     * @remarks
     * 创建一个计算实例。接口只完成购买阶段；创建成功后需调用 StartComputeInstance 完成网络配置和部署。
     * - API 版本：2026-02-02
     * - Action：CreateComputeInstance
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
     * @remarks
     * ## 请求说明
     * - 该API用于在指定的运行中的计算实例上创建一个新的Flink SQL作业。
     * - 创建后的作业将处于`INIT`状态。
     * - 用户可以通过设置`CuLimit`和`CuReserved`来控制作业的资源使用情况。
     * - `Remark`字段允许用户为作业添加备注信息，便于管理和识别。
     * - 确保提供的`RegionId`、`InstanceId`以及`JobName`参数准确无误，否则可能导致请求失败。
     * - 如果尝试创建同名作业，则会返回错误提示。
     * - 计算实例必须处于运行状态才能成功创建作业。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * - 该API用于在指定的运行中的计算实例上创建一个新的Flink SQL作业。
     * - 创建后的作业将处于`INIT`状态。
     * - 用户可以通过设置`CuLimit`和`CuReserved`来控制作业的资源使用情况。
     * - `Remark`字段允许用户为作业添加备注信息，便于管理和识别。
     * - 确保提供的`RegionId`、`InstanceId`以及`JobName`参数准确无误，否则可能导致请求失败。
     * - 如果尝试创建同名作业，则会返回错误提示。
     * - 计算实例必须处于运行状态才能成功创建作业。
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
     * @remarks
     * 删除处于待部署、已停止或已释放状态的计算实例。
     * - API版本：2026-02-02
     * - Action：DeleteComputeInstance
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
     * @remarks
     * 删除处于待部署、已停止或已释放状态的计算实例。
     * - API版本：2026-02-02
     * - Action：DeleteComputeInstance
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
     * @remarks
     * ## 请求说明
     * - 该接口用于删除一个特定的计算作业。
     * - 成功调用此接口仅表示删除请求已被系统接受，并非立即完成删除操作。
     * - 确保提供的`RegionId`、`InstanceId`以及`JobName`参数准确无误，否则可能导致请求失败。
     * - 如果计算实例或作业处于不允许删除的状态（例如：非运行状态），则会返回相应的错误信息。
     * - 删除操作不可逆，请谨慎使用。
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
     * @remarks
     * ## 请求说明
     * - 该接口用于删除一个特定的计算作业。
     * - 成功调用此接口仅表示删除请求已被系统接受，并非立即完成删除操作。
     * - 确保提供的`RegionId`、`InstanceId`以及`JobName`参数准确无误，否则可能导致请求失败。
     * - 如果计算实例或作业处于不允许删除的状态（例如：非运行状态），则会返回相应的错误信息。
     * - 删除操作不可逆，请谨慎使用。
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
     * @remarks
     * ## 请求说明
     * - 本接口用于查询指定计算作业的详情。
     * - 支持使用 GET 或 POST 方法进行请求。
     * - 所有时间字段以 Unix 时间戳形式返回，单位为毫秒。
     * - 必须提供 `RegionId`、`InstanceId` 和 `JobName` 参数。
     * - 授权操作为 `alikafkastreaming:GetComputeJob`，访问级别为读取（Read）。
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
     * @remarks
     * ## 请求说明
     * - 本接口用于查询指定计算作业的详情。
     * - 支持使用 GET 或 POST 方法进行请求。
     * - 所有时间字段以 Unix 时间戳形式返回，单位为毫秒。
     * - 必须提供 `RegionId`、`InstanceId` 和 `JobName` 参数。
     * - 授权操作为 `alikafkastreaming:GetComputeJob`，访问级别为读取（Read）。
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

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * @remarks
     * ## 请求说明
     * - 该接口支持通过 `MaxResults` 和 `NextToken` 参数进行游标分页查询。
     * - 首次请求时不需要传递 `NextToken`，后续请求需使用上一次响应中返回的 `NextToken` 值。
     * - 支持按作业名称或备注搜索，并可选择不同的排序字段和方向。
     * - 返回的时间字段均为 Unix 时间戳（单位：毫秒）。
     * - 授权操作为 `alikafkastreaming:ListComputeJobs`，访问级别为列出（List），适用于全部资源。
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
     * @remarks
     * ## 请求说明
     * - 该接口支持通过 `MaxResults` 和 `NextToken` 参数进行游标分页查询。
     * - 首次请求时不需要传递 `NextToken`，后续请求需使用上一次响应中返回的 `NextToken` 值。
     * - 支持按作业名称或备注搜索，并可选择不同的排序字段和方向。
     * - 返回的时间字段均为 Unix 时间戳（单位：毫秒）。
     * - 授权操作为 `alikafkastreaming:ListComputeJobs`，访问级别为列出（List），适用于全部资源。
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
     * @remarks
     * 重新启用一个已停止的后付费计算实例。接口返回成功表示启用请求已受理。
     * - API版本：2026-02-02
     * - Action：ReopenComputeInstance
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * 重新启用一个已停止的后付费计算实例。接口返回成功表示启用请求已受理。
     * - API版本：2026-02-02
     * - Action：ReopenComputeInstance
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
     * @remarks
     * 为处于待部署状态的计算实例配置网络并发起部署。
     * - API 版本：2026-02-02
     * - Action：StartComputeInstance
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

        if (null !== $request->vSwitchIdsShrink) {
            @$query['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * 为处于待部署状态的计算实例配置网络并发起部署。
     * - API 版本：2026-02-02
     * - Action：StartComputeInstance
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
     * @remarks
     * ## 请求说明
     * - `RecoveryMode` 支持两种模式：`savepoint` 和 `stateless`。如果选择 `savepoint` 模式但没有可用的 savepoint，则会返回错误。
     * - `CuLimit` 和 `CuReserved` 参数分别用来设定作业的 CU 上限和预留 CU 数量，支持整数或小数形式输入。
     * - 确保提供的 `RegionId`, `InstanceId`, 和 `JobName` 参数值正确且存在，否则将导致请求失败。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * - `RecoveryMode` 支持两种模式：`savepoint` 和 `stateless`。如果选择 `savepoint` 模式但没有可用的 savepoint，则会返回错误。
     * - `CuLimit` 和 `CuReserved` 参数分别用来设定作业的 CU 上限和预留 CU 数量，支持整数或小数形式输入。
     * - 确保提供的 `RegionId`, `InstanceId`, 和 `JobName` 参数值正确且存在，否则将导致请求失败。
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
     * @remarks
     * 停止一个正在运行的后付费计算实例。接口返回成功表示停止请求已受理。
     * - API 版本：2026-02-02
     * - Action：StopComputeInstance
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * 停止一个正在运行的后付费计算实例。接口返回成功表示停止请求已受理。
     * - API 版本：2026-02-02
     * - Action：StopComputeInstance
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
     * @remarks
     * ## 请求说明
     * - 该接口用于停止指定的计算作业生产或 Debug 运行实例。
     * - 接口返回成功表示停止请求已被受理，但并不意味着作业立即停止。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * - 该接口用于停止指定的计算作业生产或 Debug 运行实例。
     * - 接口返回成功表示停止请求已被受理，但并不意味着作业立即停止。
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
     * @remarks
     * 修改计算实例名称。实例需处于部署准备阶段或运行中状态。
     * - API 版本：2026-02-02
     * - Action：UpdateComputeInstanceName
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * 修改计算实例名称。实例需处于部署准备阶段或运行中状态。
     * - API 版本：2026-02-02
     * - Action：UpdateComputeInstanceName
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
     * @remarks
     * ## 请求说明
     * - 确保提供的 `InstanceId` 和 `JobName` 是有效的，否则将返回错误。
     * - 如果实例状态不在运行中，则不允许执行此操作。
     * - 当前作业状态如果为调试任务正在运行或变更中，则不支持修改。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * - 确保提供的 `InstanceId` 和 `JobName` 是有效的，否则将返回错误。
     * - 如果实例状态不在运行中，则不允许执行此操作。
     * - 当前作业状态如果为调试任务正在运行或变更中，则不支持修改。
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
     * @remarks
     * ## 请求说明
     * 本API允许用户修改特定计算作业的计算单元（CU）上限和预留CU数量。在调用此接口前，请确保提供的`InstanceId`和`JobName`正确无误，并且实例处于运行状态。此外，注意检查`CuLimit`与`CuReserved`参数的有效性和合理性，避免因超出限制或不符合业务逻辑导致请求失败。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * 本API允许用户修改特定计算作业的计算单元（CU）上限和预留CU数量。在调用此接口前，请确保提供的`InstanceId`和`JobName`正确无误，并且实例处于运行状态。此外，注意检查`CuLimit`与`CuReserved`参数的有效性和合理性，避免因超出限制或不符合业务逻辑导致请求失败。
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
     * @remarks
     * ## 请求说明
     * 本接口用于更新特定计算实例下的某个计算作业所保存的Flink SQL草稿内容。请确保提供的`InstanceId`和`JobName`准确无误，并且该作业当前状态支持进行SQL修改操作。
     * - **注意事项**：
     *   - 确保目标实例处于运行状态。
     *   - 当前作业状态需允许修改SQL，即作业不应处于调试或变更过程中。
     *   - `DraftSql`参数应包含完整的、格式正确的Flink SQL语句。
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     * ## 请求说明
     * 本接口用于更新特定计算实例下的某个计算作业所保存的Flink SQL草稿内容。请确保提供的`InstanceId`和`JobName`准确无误，并且该作业当前状态支持进行SQL修改操作。
     * - **注意事项**：
     *   - 确保目标实例处于运行状态。
     *   - 当前作业状态需允许修改SQL，即作业不应处于调试或变更过程中。
     *   - `DraftSql`参数应包含完整的、格式正确的Flink SQL语句。
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

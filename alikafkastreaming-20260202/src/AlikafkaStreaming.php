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
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AlikafkaStreaming extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'AlikafkaStreaming';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
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
     * Validates whether a specified Flink SQL statement complies with the specifications.
     *
     * @remarks
     * ## Operation description
     * - You can invoke this operation by using the GET or POST method.
     * - You must specify the `InstanceId`, `JobName`, and `SqlContent` parameters. The `SqlContent` parameter specifies the Flink SQL statement to be validated.
     * - In the response, the `Data.Valid` field indicates whether the SQL statement passed the validation. If the validation fails, the fault details are returned in the `Data.ErrorList` field.
     * - The current version requires both the instance ID (`InstanceId`) and the job name (`JobName`) to build the job context.
     * - A successful response only indicates that the system starts to execute the validation flow. It does not directly indicate whether the SQL statement is valid. Check the `Data.Valid` field to determine whether the SQL statement is valid.
     * - For error codes and exception handling, refer to the Error codes section in the References.
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
     * Validates whether a specified Flink SQL statement complies with the specifications.
     *
     * @remarks
     * ## Operation description
     * - You can invoke this operation by using the GET or POST method.
     * - You must specify the `InstanceId`, `JobName`, and `SqlContent` parameters. The `SqlContent` parameter specifies the Flink SQL statement to be validated.
     * - In the response, the `Data.Valid` field indicates whether the SQL statement passed the validation. If the validation fails, the fault details are returned in the `Data.ErrorList` field.
     * - The current version requires both the instance ID (`InstanceId`) and the job name (`JobName`) to build the job context.
     * - A successful response only indicates that the system starts to execute the validation flow. It does not directly indicate whether the SQL statement is valid. Check the `Data.Valid` field to determine whether the SQL statement is valid.
     * - For error codes and exception handling, refer to the Error codes section in the References.
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
     * Creates a compute instance. This operation only completes the purchase phase. After the instance is created, call StartComputeInstance to complete network configuration and deployment.
     *
     * @remarks
     * Creates a compute instance. This operation only completes the purchase phase. After the instance is created, call StartComputeInstance to complete network configuration and deployment.
     * - API version: 2026-02-02
     * - Action: CreateComputeInstance
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
     * Creates a compute instance. This operation only completes the purchase phase. After the instance is created, call StartComputeInstance to complete network configuration and deployment.
     *
     * @remarks
     * Creates a compute instance. This operation only completes the purchase phase. After the instance is created, call StartComputeInstance to complete network configuration and deployment.
     * - API version: 2026-02-02
     * - Action: CreateComputeInstance
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
     * Creates a Flink SQL job on a running compute instance.
     *
     * @remarks
     * ## Request description
     * - This API creates a new Flink SQL job on a specified running compute instance.
     * - The created job is in the `INIT` state.
     * - You can control the resource usage of the job by setting `CuLimit` and `CuReserved`.
     * - The `Remark` field allows you to add remarks to the job for easier management and identification.
     * - Make sure that the `RegionId`, `InstanceId`, and `JobName` parameters are accurate. Otherwise, the request may fail.
     * - If you attempt to create a job with a duplicate name, an error is returned.
     * - The compute instance must be in the running state to successfully create a job.
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
     * Creates a Flink SQL job on a running compute instance.
     *
     * @remarks
     * ## Request description
     * - This API creates a new Flink SQL job on a specified running compute instance.
     * - The created job is in the `INIT` state.
     * - You can control the resource usage of the job by setting `CuLimit` and `CuReserved`.
     * - The `Remark` field allows you to add remarks to the job for easier management and identification.
     * - Make sure that the `RegionId`, `InstanceId`, and `JobName` parameters are accurate. Otherwise, the request may fail.
     * - If you attempt to create a job with a duplicate name, an error is returned.
     * - The compute instance must be in the running state to successfully create a job.
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
     * Deletes a compute instance that is in the pending deployment, stopped, or released state.
     *
     * @remarks
     * Deletes a compute instance that is in the pending deployment, stopped, or released state.
     * - API version: 2026-02-02
     * - Action: DeleteComputeInstance
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
     * Deletes a compute instance that is in the pending deployment, stopped, or released state.
     *
     * @remarks
     * Deletes a compute instance that is in the pending deployment, stopped, or released state.
     * - API version: 2026-02-02
     * - Action: DeleteComputeInstance
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
     * Deletes a specified compute job. A successful request indicates that the deletion request has been accepted.
     *
     * @remarks
     * ## Request description
     * - This operation deletes a specific compute job.
     * - A successful call to this operation only indicates that the deletion request has been accepted by the system. The deletion is not completed immediately.
     * - Make sure that the `RegionId`, `InstanceId`, and `JobName` parameters are accurate. Otherwise, the request may fail.
     * - If the compute instance or job is in a state that does not allow deletion, such as a non-running state, an error message is returned.
     * - The deletion operation is irreversible. Proceed with caution.
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
     * Deletes a specified compute job. A successful request indicates that the deletion request has been accepted.
     *
     * @remarks
     * ## Request description
     * - This operation deletes a specific compute job.
     * - A successful call to this operation only indicates that the deletion request has been accepted by the system. The deletion is not completed immediately.
     * - Make sure that the `RegionId`, `InstanceId`, and `JobName` parameters are accurate. Otherwise, the request may fail.
     * - If the compute instance or job is in a state that does not allow deletion, such as a non-running state, an error message is returned.
     * - The deletion operation is irreversible. Proceed with caution.
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
     * Queries the details of a specified compute instance.
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
     * Queries the details of a specified compute instance.
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
     * Queries the details of a compute job in Alikafka Streaming by using a parameter query.
     *
     * @remarks
     * ## Request description
     * - This operation queries the details of a specified compute job.
     * - You can use the GET or POST method to send requests.
     * - The `RegionId`, `InstanceId`, and `JobName` parameters are required.
     * - The authorization action is `alikafkastreaming:GetComputeJob`, and the access level is Read.
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
     * Queries the details of a compute job in Alikafka Streaming by using a parameter query.
     *
     * @remarks
     * ## Request description
     * - This operation queries the details of a specified compute job.
     * - You can use the GET or POST method to send requests.
     * - The `RegionId`, `InstanceId`, and `JobName` parameters are required.
     * - The authorization action is `alikafkastreaming:GetComputeJob`, and the access level is Read.
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
     * Queries compute instances under the current account by using paging.
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
     * Queries compute instances under the current account by using paging.
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
     * Queries all job information under a specified compute instance by using paging.
     *
     * @remarks
     * ## Request description
     * - This operation supports a cursor-based paged query by using the `MaxResults` and `NextToken` parameters.
     * - You do not need to specify `NextToken` in the first request. For subsequent requests, use the `NextToken` value returned in the previous response.
     * - You can search by job name or remark, and specify different sorting fields and directions.
     * - The authorization action is `alikafkastreaming:ListComputeJobs`. The access level is List, which applies to all resources.
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
     * Queries all job information under a specified compute instance by using paging.
     *
     * @remarks
     * ## Request description
     * - This operation supports a cursor-based paged query by using the `MaxResults` and `NextToken` parameters.
     * - You do not need to specify `NextToken` in the first request. For subsequent requests, use the `NextToken` value returned in the previous response.
     * - You can search by job name or remark, and specify different sorting fields and directions.
     * - The authorization action is `alikafkastreaming:ListComputeJobs`. The access level is List, which applies to all resources.
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
     * Re-enables a stopped pay-as-you-go compute instance. A successful response indicates that the re-enablement request has been accepted.
     *
     * @remarks
     * Re-enables a stopped pay-as-you-go compute instance. A successful response indicates that the re-enablement request has been accepted.
     * - API version: 2026-02-02
     * - Action: ReopenComputeInstance
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
     * Re-enables a stopped pay-as-you-go compute instance. A successful response indicates that the re-enablement request has been accepted.
     *
     * @remarks
     * Re-enables a stopped pay-as-you-go compute instance. A successful response indicates that the re-enablement request has been accepted.
     * - API version: 2026-02-02
     * - Action: ReopenComputeInstance
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
     * Configures the network and deploys a compute instance in the pending deployment state.
     *
     * @remarks
     * Configures the network and deploys a compute instance in the pending deployment state.
     * - API version: 2026-02-02
     * - Action: StartComputeInstance
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
     * Configures the network and deploys a compute instance in the pending deployment state.
     *
     * @remarks
     * Configures the network and deploys a compute instance in the pending deployment state.
     * - API version: 2026-02-02
     * - Action: StartComputeInstance
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
     * Starts, resumes, or debugs a compute job.
     *
     * @remarks
     * ## Request description
     * - `RecoveryMode` supports two modes: `savepoint` and `stateless`. If you select the `savepoint` mode but no savepoint is available, an error is returned.
     * - The `CuLimit` and `CuReserved` parameters are used to set the CU limit and the number of reserved CUs for the job, respectively. Integers and decimals are supported.
     * - Make sure that the values of the `RegionId`, `InstanceId`, and `JobName` parameters are correct and exist. Otherwise, the request fails.
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
     * Starts, resumes, or debugs a compute job.
     *
     * @remarks
     * ## Request description
     * - `RecoveryMode` supports two modes: `savepoint` and `stateless`. If you select the `savepoint` mode but no savepoint is available, an error is returned.
     * - The `CuLimit` and `CuReserved` parameters are used to set the CU limit and the number of reserved CUs for the job, respectively. Integers and decimals are supported.
     * - Make sure that the values of the `RegionId`, `InstanceId`, and `JobName` parameters are correct and exist. Otherwise, the request fails.
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
     * Stops a running pay-as-you-go compute instance. A successful response indicates that the stop request has been accepted.
     *
     * @remarks
     * Stops a running pay-as-you-go compute instance. A successful response indicates that the stop request has been accepted.
     * - API version: 2026-02-02
     * - Action: StopComputeInstance
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
     * Stops a running pay-as-you-go compute instance. A successful response indicates that the stop request has been accepted.
     *
     * @remarks
     * Stops a running pay-as-you-go compute instance. A successful response indicates that the stop request has been accepted.
     * - API version: 2026-02-02
     * - Action: StopComputeInstance
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
     * Stops a compute job in a specified region and instance.
     *
     * @remarks
     * ## Request description
     * - This operation stops the production or debug runtime instance of a specified compute job.
     * - A successful response indicates that the stop request has been accepted, but it does not mean that the job stops immediately.
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
     * Stops a compute job in a specified region and instance.
     *
     * @remarks
     * ## Request description
     * - This operation stops the production or debug runtime instance of a specified compute job.
     * - A successful response indicates that the stop request has been accepted, but it does not mean that the job stops immediately.
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
     * Updates the name of a compute instance. The instance must be in the deployment preparation or running state.
     *
     * @remarks
     * Updates the name of a compute instance. The instance must be in the deployment preparation or running state.
     * - API version: 2026-02-02
     * - Action: UpdateComputeInstanceName
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
     * Updates the name of a compute instance. The instance must be in the deployment preparation or running state.
     *
     * @remarks
     * Updates the name of a compute instance. The instance must be in the deployment preparation or running state.
     * - API version: 2026-02-02
     * - Action: UpdateComputeInstanceName
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
     * Modifies the remarks of a specified compute job.
     *
     * @remarks
     * ## Request description
     * - Ensure that the provided `InstanceId` and `JobName` are valid. Otherwise, an error is returned.
     * - You cannot execute this operation if the instance is not in the running state.
     * - Modifications are not supported if the current job is running as a debug node or undergoing changes.
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
     * Modifies the remarks of a specified compute job.
     *
     * @remarks
     * ## Request description
     * - Ensure that the provided `InstanceId` and `JobName` are valid. Otherwise, an error is returned.
     * - You cannot execute this operation if the instance is not in the running state.
     * - Modifications are not supported if the current job is running as a debug node or undergoing changes.
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
     * Modifies the compute unit (CU) limit and the number of reserved CUs for a specified compute job.
     *
     * @remarks
     * ## Request description
     * This operation allows you to modify the compute unit (CU) limit and the number of reserved CUs for a specific compute job. Before calling this operation, ensure that the specified `InstanceId` and `JobName` are correct and that the instance is in the running state. Additionally, verify the validity and reasonableness of the `CuLimit` and `CuReserved` parameters to prevent request failures caused by exceeding limits or violating business logic.
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
     * Modifies the compute unit (CU) limit and the number of reserved CUs for a specified compute job.
     *
     * @remarks
     * ## Request description
     * This operation allows you to modify the compute unit (CU) limit and the number of reserved CUs for a specific compute job. Before calling this operation, ensure that the specified `InstanceId` and `JobName` are correct and that the instance is in the running state. Additionally, verify the validity and reasonableness of the `CuLimit` and `CuReserved` parameters to prevent request failures caused by exceeding limits or violating business logic.
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
     * Updates the Flink SQL draft saved for a specified compute job.
     *
     * @remarks
     * ## Request description
     * This operation updates the Flink SQL draft saved for a specific compute job under a given compute instance. Make sure that the provided `InstanceId` and `JobName` are accurate, and the current status of the job supports SQL modification.
     * - **Precautions**:
     *   - Make sure that the target instance is in the running state.
     *   - The current job status must allow SQL modification. The job must not be undergoing debugging or modification.
     *   - The `DraftSql` parameter must contain a complete and correctly formatted Flink SQL statement.
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
     * Updates the Flink SQL draft saved for a specified compute job.
     *
     * @remarks
     * ## Request description
     * This operation updates the Flink SQL draft saved for a specific compute job under a given compute instance. Make sure that the provided `InstanceId` and `JobName` are accurate, and the current status of the job supports SQL modification.
     * - **Precautions**:
     *   - Make sure that the target instance is in the running state.
     *   - The current job status must allow SQL modification. The job must not be undergoing debugging or modification.
     *   - The `DraftSql` parameter must contain a complete and correctly formatted Flink SQL statement.
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

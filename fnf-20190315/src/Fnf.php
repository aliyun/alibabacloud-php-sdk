<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeExecutionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeExecutionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListExecutionsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListExecutionsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ReportTaskFailedRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ReportTaskFailedResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ReportTaskSucceededRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ReportTaskSucceededResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StartExecutionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StartExecutionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StartSyncExecutionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StartSyncExecutionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StopExecutionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\StopExecutionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateScheduleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Fnf extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'cn-beijing'  => 'cn-beijing.fnf.aliyuncs.com',
            'cn-hangzhou' => 'cn-hangzhou.fnf.aliyuncs.com',
            'cn-shanghai' => 'cn-shanghai.fnf.aliyuncs.com',
            'cn-shenzhen' => 'cn-shenzhen.fnf.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('fnf', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   The number of flows that each user can create is restricted by resources. For more information, see [Limits](https://help.aliyun.com/document_detail/122093.html). If you want to create more flows, submit a ticket.
     * *   At the user level, flows are distinguished by name. The name of a flow within one account must be unique.
     *
     * @param request - CreateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->executionMode) {
            @$body['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->externalStorageLocation) {
            @$body['ExternalStorageLocation'] = $request->externalStorageLocation;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFlow',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   The number of flows that each user can create is restricted by resources. For more information, see [Limits](https://help.aliyun.com/document_detail/122093.html). If you want to create more flows, submit a ticket.
     * *   At the user level, flows are distinguished by name. The name of a flow within one account must be unique.
     *
     * @param request - CreateFlowRequest
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * Creates a time-based schedule.
     *
     * @param request - CreateScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateScheduleResponse
     *
     * @param CreateScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScheduleResponse
     */
    public function createScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->signatureVersion) {
            @$query['SignatureVersion'] = $request->signatureVersion;
        }

        $body = [];
        if (null !== $request->cronExpression) {
            @$body['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['Enable'] = $request->enable;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->scheduleName) {
            @$body['ScheduleName'] = $request->scheduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSchedule',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a time-based schedule.
     *
     * @param request - CreateScheduleRequest
     * @returns CreateScheduleResponse
     *
     * @param CreateScheduleRequest $request
     *
     * @return CreateScheduleResponse
     */
    public function createSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduleWithOptions($request, $runtime);
    }

    /**
     * Deletes an existing flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * A delete operation is asynchronous. If this operation is successful, the system returns a successful response. If an existing flow is pending to be deleted, a new flow of the same name will not be affected by the existing one. After you delete a flow, you cannot query its historical executions. All executions in progress will stop after their most recent steps are complete.
     *
     * @param request - DeleteFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an existing flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * A delete operation is asynchronous. If this operation is successful, the system returns a successful response. If an existing flow is pending to be deleted, a new flow of the same name will not be affected by the existing one. After you delete a flow, you cannot query its historical executions. All executions in progress will stop after their most recent steps are complete.
     *
     * @param request - DeleteFlowRequest
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * Deletes a time-based scheduling task.
     *
     * @param request - DeleteScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteScheduleResponse
     *
     * @param DeleteScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScheduleResponse
     */
    public function deleteScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->scheduleName) {
            @$body['ScheduleName'] = $request->scheduleName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchedule',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a time-based scheduling task.
     *
     * @param request - DeleteScheduleRequest
     * @returns DeleteScheduleResponse
     *
     * @param DeleteScheduleRequest $request
     *
     * @return DeleteScheduleResponse
     */
    public function deleteSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduleWithOptions($request, $runtime);
    }

    /**
     * Queries an execution in a flow. The long polling mode is supported. The maximum waiting period for long polling depends on the value of the WaitTimeSeconds parameter.
     *
     * @param request - DescribeExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeExecutionResponse
     *
     * @param DescribeExecutionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeExecutionResponse
     */
    public function describeExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExecution',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an execution in a flow. The long polling mode is supported. The maximum waiting period for long polling depends on the value of the WaitTimeSeconds parameter.
     *
     * @param request - DescribeExecutionRequest
     * @returns DescribeExecutionResponse
     *
     * @param DescribeExecutionRequest $request
     *
     * @return DescribeExecutionResponse
     */
    public function describeExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a flow.
     *
     * @param request - DescribeFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeFlowResponse
     *
     * @param DescribeFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFlowResponse
     */
    public function describeFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlow',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a flow.
     *
     * @param request - DescribeFlowRequest
     * @returns DescribeFlowResponse
     *
     * @param DescribeFlowRequest $request
     *
     * @return DescribeFlowResponse
     */
    public function describeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowWithOptions($request, $runtime);
    }

    /**
     * 查询地域信息列表.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询地域信息列表.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * Queries the detailed information about a time-based schedule.
     *
     * @param request - DescribeScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeScheduleResponse
     *
     * @param DescribeScheduleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeScheduleResponse
     */
    public function describeScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSchedule',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a time-based schedule.
     *
     * @param request - DescribeScheduleRequest
     * @returns DescribeScheduleResponse
     *
     * @param DescribeScheduleRequest $request
     *
     * @return DescribeScheduleResponse
     */
    public function describeSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleWithOptions($request, $runtime);
    }

    /**
     * Queries the details about each step in an execution process.
     *
     * @param request - GetExecutionHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetExecutionHistoryResponse
     *
     * @param GetExecutionHistoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetExecutionHistoryResponse
     */
    public function getExecutionHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExecutionHistory',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetExecutionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExecutionHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details about each step in an execution process.
     *
     * @param request - GetExecutionHistoryRequest
     * @returns GetExecutionHistoryResponse
     *
     * @param GetExecutionHistoryRequest $request
     *
     * @return GetExecutionHistoryResponse
     */
    public function getExecutionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecutionHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries all historical executions of a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * After you delete a flow, you cannot query its historical executions, even if you create a flow of the same name.
     *
     * @param request - ListExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListExecutionsResponse
     *
     * @param ListExecutionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListExecutionsResponse
     */
    public function listExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExecutions',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListExecutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all historical executions of a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * After you delete a flow, you cannot query its historical executions, even if you create a flow of the same name.
     *
     * @param request - ListExecutionsRequest
     * @returns ListExecutionsResponse
     *
     * @param ListExecutionsRequest $request
     *
     * @return ListExecutionsResponse
     */
    public function listExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of flows.
     *
     * @param request - ListFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlows',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFlowsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of flows.
     *
     * @param request - ListFlowsRequest
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowsWithOptions($request, $runtime);
    }

    /**
     * Queries time-based schedules in a flow.
     *
     * @param request - ListSchedulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSchedulesResponse
     *
     * @param ListSchedulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSchedules',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSchedulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries time-based schedules in a flow.
     *
     * @param request - ListSchedulesRequest
     * @returns ListSchedulesResponse
     *
     * @param ListSchedulesRequest $request
     *
     * @return ListSchedulesResponse
     */
    public function listSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchedulesWithOptions($request, $runtime);
    }

    /**
     * Reports a failed task.
     *
     * @remarks
     * ## [](#)Usage notes
     * In the previous service (Serverless Workflow), the task step that ReportTaskFailed is used to call back `pattern: waitForCallback` indicates that the current task fails to be executed.
     * In the new service (CloudFlow), the task step that ReportTaskFailed is used to call back `TaskMode: WaitForCustomCallback` indicates that the current task fails to be executed.
     *
     * @param request - ReportTaskFailedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ReportTaskFailedResponse
     *
     * @param ReportTaskFailedRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportTaskFailedResponse
     */
    public function reportTaskFailedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskToken) {
            @$query['TaskToken'] = $request->taskToken;
        }

        $body = [];
        if (null !== $request->cause) {
            @$body['Cause'] = $request->cause;
        }

        if (null !== $request->error) {
            @$body['Error'] = $request->error;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportTaskFailed',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReportTaskFailedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReportTaskFailedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Reports a failed task.
     *
     * @remarks
     * ## [](#)Usage notes
     * In the previous service (Serverless Workflow), the task step that ReportTaskFailed is used to call back `pattern: waitForCallback` indicates that the current task fails to be executed.
     * In the new service (CloudFlow), the task step that ReportTaskFailed is used to call back `TaskMode: WaitForCustomCallback` indicates that the current task fails to be executed.
     *
     * @param request - ReportTaskFailedRequest
     * @returns ReportTaskFailedResponse
     *
     * @param ReportTaskFailedRequest $request
     *
     * @return ReportTaskFailedResponse
     */
    public function reportTaskFailed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTaskFailedWithOptions($request, $runtime);
    }

    /**
     * Reports a successful task.
     *
     * @remarks
     * ## [](#)Usage notes
     * In the previous service (Serverless Workflow), the task step that ReportTaskSucceeded is used to call back pattern: waitForCallback indicates that the current task is successfully executed.
     * In the new service (CloudFlow), the task step that ReportTaskSucceeded is used to call back TaskMode: WaitForCustomCallback indicates that the current task is successfully executed.
     *
     * @param request - ReportTaskSucceededRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ReportTaskSucceededResponse
     *
     * @param ReportTaskSucceededRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportTaskSucceededResponse
     */
    public function reportTaskSucceededWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskToken) {
            @$query['TaskToken'] = $request->taskToken;
        }

        $body = [];
        if (null !== $request->output) {
            @$body['Output'] = $request->output;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportTaskSucceeded',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReportTaskSucceededResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReportTaskSucceededResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Reports a successful task.
     *
     * @remarks
     * ## [](#)Usage notes
     * In the previous service (Serverless Workflow), the task step that ReportTaskSucceeded is used to call back pattern: waitForCallback indicates that the current task is successfully executed.
     * In the new service (CloudFlow), the task step that ReportTaskSucceeded is used to call back TaskMode: WaitForCustomCallback indicates that the current task is successfully executed.
     *
     * @param request - ReportTaskSucceededRequest
     * @returns ReportTaskSucceededResponse
     *
     * @param ReportTaskSucceededRequest $request
     *
     * @return ReportTaskSucceededResponse
     */
    public function reportTaskSucceeded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTaskSucceededWithOptions($request, $runtime);
    }

    /**
     * Starts the execution of a workflow.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   The flow is created. A flow only in standard mode is supported.
     * *   If you do not specify an execution, the system automatically generates an execution and starts the execution.
     * *   If an ongoing execution has the same name as that of the execution to be started, the system directly returns the ongoing execution.
     * *   If the ongoing execution with the same name has ended (succeeded or failed), `ExecutionAlreadyExists` is returned.
     * *   If no execution with the same name exists, the system starts a new execution.
     *
     * @param request - StartExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartExecutionResponse
     *
     * @param StartExecutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartExecutionResponse
     */
    public function startExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->callbackFnFTaskToken) {
            @$body['CallbackFnFTaskToken'] = $request->callbackFnFTaskToken;
        }

        if (null !== $request->executionName) {
            @$body['ExecutionName'] = $request->executionName;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartExecution',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts the execution of a workflow.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   The flow is created. A flow only in standard mode is supported.
     * *   If you do not specify an execution, the system automatically generates an execution and starts the execution.
     * *   If an ongoing execution has the same name as that of the execution to be started, the system directly returns the ongoing execution.
     * *   If the ongoing execution with the same name has ended (succeeded or failed), `ExecutionAlreadyExists` is returned.
     * *   If no execution with the same name exists, the system starts a new execution.
     *
     * @param request - StartExecutionRequest
     * @returns StartExecutionResponse
     *
     * @param StartExecutionRequest $request
     *
     * @return StartExecutionResponse
     */
    public function startExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startExecutionWithOptions($request, $runtime);
    }

    /**
     * Synchronously starts an execution in a flow.
     *
     * @remarks
     *   Only flows of the express execution mode are supported.
     *
     * @param request - StartSyncExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartSyncExecutionResponse
     *
     * @param StartSyncExecutionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartSyncExecutionResponse
     */
    public function startSyncExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->executionName) {
            @$body['ExecutionName'] = $request->executionName;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSyncExecution',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartSyncExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartSyncExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Synchronously starts an execution in a flow.
     *
     * @remarks
     *   Only flows of the express execution mode are supported.
     *
     * @param request - StartSyncExecutionRequest
     * @returns StartSyncExecutionResponse
     *
     * @param StartSyncExecutionRequest $request
     *
     * @return StartSyncExecutionResponse
     */
    public function startSyncExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSyncExecutionWithOptions($request, $runtime);
    }

    /**
     * Stops an execution that is in progress in a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * The flow must be in progress.
     *
     * @param request - StopExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopExecutionResponse
     *
     * @param StopExecutionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopExecutionResponse
     */
    public function stopExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cause) {
            @$body['Cause'] = $request->cause;
        }

        if (null !== $request->error) {
            @$body['Error'] = $request->error;
        }

        if (null !== $request->executionName) {
            @$body['ExecutionName'] = $request->executionName;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopExecution',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops an execution that is in progress in a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * The flow must be in progress.
     *
     * @param request - StopExecutionRequest
     * @returns StopExecutionResponse
     *
     * @param StopExecutionRequest $request
     *
     * @return StopExecutionResponse
     */
    public function stopExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopExecutionWithOptions($request, $runtime);
    }

    /**
     * Updates a flow.
     *
     * @param request - UpdateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateFlowResponse
     *
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlow',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a flow.
     *
     * @param request - UpdateFlowRequest
     * @returns UpdateFlowResponse
     *
     * @param UpdateFlowRequest $request
     *
     * @return UpdateFlowResponse
     */
    public function updateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowWithOptions($request, $runtime);
    }

    /**
     * Updates a time-based schedule.
     *
     * @param request - UpdateScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateScheduleResponse
     *
     * @param UpdateScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateScheduleResponse
     */
    public function updateScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cronExpression) {
            @$body['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['Enable'] = $request->enable;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->scheduleName) {
            @$body['ScheduleName'] = $request->scheduleName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSchedule',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a time-based schedule.
     *
     * @param request - UpdateScheduleRequest
     * @returns UpdateScheduleResponse
     *
     * @param UpdateScheduleRequest $request
     *
     * @return UpdateScheduleResponse
     */
    public function updateSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScheduleWithOptions($request, $runtime);
    }
}

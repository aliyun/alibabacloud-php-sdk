<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowAliasRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowAliasResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowAliasShrinkRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateFlowShrinkRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\CreateScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowAliasRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowAliasResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowVersionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteFlowVersionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DeleteScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeExecutionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeExecutionResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowAliasRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowAliasResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeMapRunRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeMapRunResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeScheduleRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeScheduleResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListExecutionsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListExecutionsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowAliasesRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowAliasesResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowVersionsRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowVersionsResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\PublishFlowVersionRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\PublishFlowVersionResponse;
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
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasShrinkRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowResponse;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowShrinkRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateMapRunRequest;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateMapRunResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'cn-beijing.fnf.aliyuncs.com',
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
     * @param tmpReq - CreateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->environment) {
            $request->environmentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->environment, 'Environment', 'json');
        }

        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environmentShrink) {
            @$body['Environment'] = $request->environmentShrink;
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
            'action' => 'CreateFlow',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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
     * 创建流程版本别名.
     *
     * @param tmpReq - CreateFlowAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowAliasResponse
     *
     * @param CreateFlowAliasRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFlowAliasResponse
     */
    public function createFlowAliasWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFlowAliasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->routingConfigurations) {
            $request->routingConfigurationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->routingConfigurations, 'RoutingConfigurations', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->routingConfigurationsShrink) {
            @$body['RoutingConfigurations'] = $request->routingConfigurationsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFlowAlias',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建流程版本别名.
     *
     * @param request - CreateFlowAliasRequest
     *
     * @returns CreateFlowAliasResponse
     *
     * @param CreateFlowAliasRequest $request
     *
     * @return CreateFlowAliasResponse
     */
    public function createFlowAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowAliasWithOptions($request, $runtime);
    }

    /**
     * Creates a time-based schedule.
     *
     * @param request - CreateScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSchedule',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a time-based schedule.
     *
     * @param request - CreateScheduleRequest
     *
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
     *
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
            'action' => 'DeleteFlow',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an existing flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * A delete operation is asynchronous. If this operation is successful, the system returns a successful response. If an existing flow is pending to be deleted, a new flow of the same name will not be affected by the existing one. After you delete a flow, you cannot query its historical executions. All executions in progress will stop after their most recent steps are complete.
     *
     * @param request - DeleteFlowRequest
     *
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
     * 删除流程别名.
     *
     * @param request - DeleteFlowAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowAliasResponse
     *
     * @param DeleteFlowAliasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFlowAliasResponse
     */
    public function deleteFlowAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFlowAlias',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流程别名.
     *
     * @param request - DeleteFlowAliasRequest
     *
     * @returns DeleteFlowAliasResponse
     *
     * @param DeleteFlowAliasRequest $request
     *
     * @return DeleteFlowAliasResponse
     */
    public function deleteFlowAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowAliasWithOptions($request, $runtime);
    }

    /**
     * 删除流程版本.
     *
     * @param request - DeleteFlowVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowVersionResponse
     *
     * @param DeleteFlowVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlowVersionResponse
     */
    public function deleteFlowVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->flowVersion) {
            @$body['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFlowVersion',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流程版本.
     *
     * @param request - DeleteFlowVersionRequest
     *
     * @returns DeleteFlowVersionResponse
     *
     * @param DeleteFlowVersionRequest $request
     *
     * @return DeleteFlowVersionResponse
     */
    public function deleteFlowVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowVersionWithOptions($request, $runtime);
    }

    /**
     * Deletes a time-based scheduling task.
     *
     * @param request - DeleteScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteSchedule',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a time-based scheduling task.
     *
     * @param request - DeleteScheduleRequest
     *
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
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExecution',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an execution in a flow. The long polling mode is supported. The maximum waiting period for long polling depends on the value of the WaitTimeSeconds parameter.
     *
     * @param request - DescribeExecutionRequest
     *
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
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFlow',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a flow.
     *
     * @param request - DescribeFlowRequest
     *
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
     * 查询流程版本别名详情.
     *
     * @param request - DescribeFlowAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowAliasResponse
     *
     * @param DescribeFlowAliasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFlowAliasResponse
     */
    public function describeFlowAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFlowAlias',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流程版本别名详情.
     *
     * @param request - DescribeFlowAliasRequest
     *
     * @returns DescribeFlowAliasResponse
     *
     * @param DescribeFlowAliasRequest $request
     *
     * @return DescribeFlowAliasResponse
     */
    public function describeFlowAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowAliasWithOptions($request, $runtime);
    }

    /**
     * 查询 MapRun 详情.
     *
     * @param request - DescribeMapRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMapRunResponse
     *
     * @param DescribeMapRunRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeMapRunResponse
     */
    public function describeMapRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMapRun',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMapRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 MapRun 详情.
     *
     * @param request - DescribeMapRunRequest
     *
     * @returns DescribeMapRunResponse
     *
     * @param DescribeMapRunRequest $request
     *
     * @return DescribeMapRunResponse
     */
    public function describeMapRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMapRunWithOptions($request, $runtime);
    }

    /**
     * 查询地域信息列表.
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
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-03-15',
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
     * 查询地域信息列表.
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
     * Queries the detailed information about a time-based schedule.
     *
     * @param request - DescribeScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSchedule',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a time-based schedule.
     *
     * @param request - DescribeScheduleRequest
     *
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
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExecutionHistory',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExecutionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about each step in an execution process.
     *
     * @param request - GetExecutionHistoryRequest
     *
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
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutions',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all historical executions of a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * After you delete a flow, you cannot query its historical executions, even if you create a flow of the same name.
     *
     * @param request - ListExecutionsRequest
     *
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
     * 查询流程版本别名列表.
     *
     * @param request - ListFlowAliasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowAliasesResponse
     *
     * @param ListFlowAliasesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowAliasesResponse
     */
    public function listFlowAliasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlowAliases',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlowAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流程版本别名列表.
     *
     * @param request - ListFlowAliasesRequest
     *
     * @returns ListFlowAliasesResponse
     *
     * @param ListFlowAliasesRequest $request
     *
     * @return ListFlowAliasesResponse
     */
    public function listFlowAliases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowAliasesWithOptions($request, $runtime);
    }

    /**
     * 查询流程版本列表.
     *
     * @param request - ListFlowVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowVersionsResponse
     *
     * @param ListFlowVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowVersionsResponse
     */
    public function listFlowVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlowVersions',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlowVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流程版本列表.
     *
     * @param request - ListFlowVersionsRequest
     *
     * @returns ListFlowVersionsResponse
     *
     * @param ListFlowVersionsRequest $request
     *
     * @return ListFlowVersionsResponse
     */
    public function listFlowVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of flows.
     *
     * @param request - ListFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlows',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of flows.
     *
     * @param request - ListFlowsRequest
     *
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
     *
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
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSchedules',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries time-based schedules in a flow.
     *
     * @param request - ListSchedulesRequest
     *
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
     * 发布流程版本.
     *
     * @param request - PublishFlowVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishFlowVersionResponse
     *
     * @param PublishFlowVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PublishFlowVersionResponse
     */
    public function publishFlowVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishFlowVersion',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布流程版本.
     *
     * @param request - PublishFlowVersionRequest
     *
     * @returns PublishFlowVersionResponse
     *
     * @param PublishFlowVersionRequest $request
     *
     * @return PublishFlowVersionResponse
     */
    public function publishFlowVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishFlowVersionWithOptions($request, $runtime);
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
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportTaskFailed',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportTaskFailedResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportTaskSucceeded',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportTaskSucceededResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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
     *
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

        if (null !== $request->qualifier) {
            @$body['Qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartExecution',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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
     *
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

        if (null !== $request->qualifier) {
            @$body['Qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartSyncExecution',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSyncExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronously starts an execution in a flow.
     *
     * @remarks
     *   Only flows of the express execution mode are supported.
     *
     * @param request - StartSyncExecutionRequest
     *
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
     *
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
            'action' => 'StopExecution',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an execution that is in progress in a flow.
     *
     * @remarks
     * ## [](#)Usage notes
     * The flow must be in progress.
     *
     * @param request - StopExecutionRequest
     *
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
     * @param tmpReq - UpdateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowResponse
     *
     * @param UpdateFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->environment) {
            $request->environmentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->environment, 'Environment', 'json');
        }

        $body = [];
        if (null !== $request->definition) {
            @$body['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->environmentShrink) {
            @$body['Environment'] = $request->environmentShrink;
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
            'action' => 'UpdateFlow',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a flow.
     *
     * @param request - UpdateFlowRequest
     *
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
     * 更新流程版本别名配置.
     *
     * @param tmpReq - UpdateFlowAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowAliasResponse
     *
     * @param UpdateFlowAliasRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFlowAliasResponse
     */
    public function updateFlowAliasWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFlowAliasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->routingConfigurations) {
            $request->routingConfigurationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->routingConfigurations, 'RoutingConfigurations', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->routingConfigurationsShrink) {
            @$body['RoutingConfigurations'] = $request->routingConfigurationsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowAlias',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFlowAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流程版本别名配置.
     *
     * @param request - UpdateFlowAliasRequest
     *
     * @returns UpdateFlowAliasResponse
     *
     * @param UpdateFlowAliasRequest $request
     *
     * @return UpdateFlowAliasResponse
     */
    public function updateFlowAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowAliasWithOptions($request, $runtime);
    }

    /**
     * 更新 MapRun 配置.
     *
     * @param request - UpdateMapRunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMapRunResponse
     *
     * @param UpdateMapRunRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMapRunResponse
     */
    public function updateMapRunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMapRun',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMapRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 MapRun 配置.
     *
     * @param request - UpdateMapRunRequest
     *
     * @returns UpdateMapRunResponse
     *
     * @param UpdateMapRunRequest $request
     *
     * @return UpdateMapRunResponse
     */
    public function updateMapRun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMapRunWithOptions($request, $runtime);
    }

    /**
     * Updates a time-based schedule.
     *
     * @param request - UpdateScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateSchedule',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a time-based schedule.
     *
     * @param request - UpdateScheduleRequest
     *
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

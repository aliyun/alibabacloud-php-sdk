<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * ## [](#)Usage notes
     *   * *   The number of flows that each user can create is restricted by resources. For more information, see [Limits](~~122093~~). If you want to create more flows, submit a ticket.
     *   * *   At the user level, flows are distinguished by name. The name of a flow within one account must be unique.
     *   *
     * @param CreateFlowRequest $request CreateFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionMode)) {
            $body['ExecutionMode'] = $request->executionMode;
        }
        if (!Utils::isUnset($request->externalStorageLocation)) {
            $body['ExternalStorageLocation'] = $request->externalStorageLocation;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $body['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   The number of flows that each user can create is restricted by resources. For more information, see [Limits](~~122093~~). If you want to create more flows, submit a ticket.
     *   * *   At the user level, flows are distinguished by name. The name of a flow within one account must be unique.
     *   *
     * @param CreateFlowRequest $request CreateFlowRequest
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScheduleResponse
     */
    public function createScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->signatureVersion)) {
            $query['SignatureVersion'] = $request->signatureVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $body['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->payload)) {
            $body['Payload'] = $request->payload;
        }
        if (!Utils::isUnset($request->scheduleName)) {
            $body['ScheduleName'] = $request->scheduleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return CreateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * A delete operation is asynchronous. If this operation is successful, the system returns a successful response. If an existing flow is pending to be deleted, a new flow of the same name will not be affected by the existing one. After you delete a flow, you cannot query its historical executions. All executions in progress will stop after their most recent steps are complete.
     *   *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * A delete operation is asynchronous. If this operation is successful, the system returns a successful response. If an existing flow is pending to be deleted, a new flow of the same name will not be affected by the existing one. After you delete a flow, you cannot query its historical executions. All executions in progress will stop after their most recent steps are complete.
     *   *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScheduleResponse
     */
    public function deleteScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->scheduleName)) {
            $query['ScheduleName'] = $request->scheduleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeExecutionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeExecutionResponse
     */
    public function describeExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFlowResponse
     */
    public function describeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeScheduleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeScheduleResponse
     */
    public function describeScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetExecutionHistoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetExecutionHistoryResponse
     */
    public function getExecutionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetExecutionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * After you delete a flow, you cannot query its historical executions, even if you create a flow of the same name.
     *   *
     * @param ListExecutionsRequest $request ListExecutionsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutionsResponse ListExecutionsResponse
     */
    public function listExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * After you delete a flow, you cannot query its historical executions, even if you create a flow of the same name.
     *   *
     * @param ListExecutionsRequest $request ListExecutionsRequest
     *
     * @return ListExecutionsResponse ListExecutionsResponse
     */
    public function listExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSchedulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * In the old version of CloudFlow, the task step that ReportTaskFailed is used to call back `pattern: waitForCallback` indicates that the current task fails to be executed.
     *   * In the new version of CloudFlow, the task step that ReportTaskFailed is used to call back `TaskMode: WaitForCustomCallback` indicates that the current task fails to be executed.
     *   *
     * @param ReportTaskFailedRequest $request ReportTaskFailedRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportTaskFailedResponse ReportTaskFailedResponse
     */
    public function reportTaskFailedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskToken)) {
            $query['TaskToken'] = $request->taskToken;
        }
        $body = [];
        if (!Utils::isUnset($request->cause)) {
            $body['Cause'] = $request->cause;
        }
        if (!Utils::isUnset($request->error)) {
            $body['Error'] = $request->error;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return ReportTaskFailedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * In the old version of CloudFlow, the task step that ReportTaskFailed is used to call back `pattern: waitForCallback` indicates that the current task fails to be executed.
     *   * In the new version of CloudFlow, the task step that ReportTaskFailed is used to call back `TaskMode: WaitForCustomCallback` indicates that the current task fails to be executed.
     *   *
     * @param ReportTaskFailedRequest $request ReportTaskFailedRequest
     *
     * @return ReportTaskFailedResponse ReportTaskFailedResponse
     */
    public function reportTaskFailed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTaskFailedWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * In the old version of CloudFlow, the task step that ReportTaskSucceeded is used to call back pattern: waitForCallback indicates that the current task is successfully executed.
     *   * In the new version of CloudFlow, the task step that ReportTaskSucceeded is used to call back TaskMode: WaitForCustomCallback indicates that the current task is successfully executed.
     *   *
     * @param ReportTaskSucceededRequest $request ReportTaskSucceededRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportTaskSucceededResponse ReportTaskSucceededResponse
     */
    public function reportTaskSucceededWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskToken)) {
            $query['TaskToken'] = $request->taskToken;
        }
        $body = [];
        if (!Utils::isUnset($request->output)) {
            $body['Output'] = $request->output;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return ReportTaskSucceededResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * In the old version of CloudFlow, the task step that ReportTaskSucceeded is used to call back pattern: waitForCallback indicates that the current task is successfully executed.
     *   * In the new version of CloudFlow, the task step that ReportTaskSucceeded is used to call back TaskMode: WaitForCustomCallback indicates that the current task is successfully executed.
     *   *
     * @param ReportTaskSucceededRequest $request ReportTaskSucceededRequest
     *
     * @return ReportTaskSucceededResponse ReportTaskSucceededResponse
     */
    public function reportTaskSucceeded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTaskSucceededWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   The flow is created. A flow only in standard mode is supported.
     *   * *   If you do not specify an execution, the system automatically generates an execution and starts the execution.
     *   * *   If an ongoing execution has the same name as that of the execution to be started, the system directly returns the ongoing execution.
     *   * *   If the ongoing execution with the same name has ended (succeeded or failed), `ExecutionAlreadyExists` is returned.
     *   * *   If no execution with the same name exists, the system starts a new execution.
     *   *
     * @param StartExecutionRequest $request StartExecutionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartExecutionResponse StartExecutionResponse
     */
    public function startExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackFnFTaskToken)) {
            $body['CallbackFnFTaskToken'] = $request->callbackFnFTaskToken;
        }
        if (!Utils::isUnset($request->executionName)) {
            $body['ExecutionName'] = $request->executionName;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return StartExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   The flow is created. A flow only in standard mode is supported.
     *   * *   If you do not specify an execution, the system automatically generates an execution and starts the execution.
     *   * *   If an ongoing execution has the same name as that of the execution to be started, the system directly returns the ongoing execution.
     *   * *   If the ongoing execution with the same name has ended (succeeded or failed), `ExecutionAlreadyExists` is returned.
     *   * *   If no execution with the same name exists, the system starts a new execution.
     *   *
     * @param StartExecutionRequest $request StartExecutionRequest
     *
     * @return StartExecutionResponse StartExecutionResponse
     */
    public function startExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startExecutionWithOptions($request, $runtime);
    }

    /**
     * *   Only flows of the express execution mode are supported.
     *   *
     * @param StartSyncExecutionRequest $request StartSyncExecutionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSyncExecutionResponse StartSyncExecutionResponse
     */
    public function startSyncExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->executionName)) {
            $body['ExecutionName'] = $request->executionName;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return StartSyncExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only flows of the express execution mode are supported.
     *   *
     * @param StartSyncExecutionRequest $request StartSyncExecutionRequest
     *
     * @return StartSyncExecutionResponse StartSyncExecutionResponse
     */
    public function startSyncExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSyncExecutionWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * The flow must be in progress.
     *   *
     * @param StopExecutionRequest $request StopExecutionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopExecutionResponse StopExecutionResponse
     */
    public function stopExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cause)) {
            $body['Cause'] = $request->cause;
        }
        if (!Utils::isUnset($request->error)) {
            $body['Error'] = $request->error;
        }
        if (!Utils::isUnset($request->executionName)) {
            $body['ExecutionName'] = $request->executionName;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return StopExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * The flow must be in progress.
     *   *
     * @param StopExecutionRequest $request StopExecutionRequest
     *
     * @return StopExecutionResponse StopExecutionResponse
     */
    public function stopExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopExecutionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $body['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateScheduleResponse
     */
    public function updateScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $body['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->payload)) {
            $body['Payload'] = $request->payload;
        }
        if (!Utils::isUnset($request->scheduleName)) {
            $body['ScheduleName'] = $request->scheduleName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UpdateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

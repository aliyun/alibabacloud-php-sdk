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
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScheduleResponse
     */
    public function createScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
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
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScheduleResponse
     */
    public function deleteScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchedule',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
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
     * @param ListExecutionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListExecutionsResponse
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
     * @param ReportTaskFailedRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportTaskFailedResponse
     */
    public function reportTaskFailedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
     * @param ReportTaskSucceededRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportTaskSucceededResponse
     */
    public function reportTaskSucceededWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
     * @param StartExecutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartExecutionResponse
     */
    public function startExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param StopExecutionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopExecutionResponse
     */
    public function stopExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        $query = [];
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
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

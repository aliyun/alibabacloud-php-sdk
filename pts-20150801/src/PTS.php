<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PTS\V20150801\Models\CreateTransactionRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\CreateTransactionResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\GetKeySecretResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\GetScriptRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\GetScriptResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\GetTasksRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\GetTasksResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportLogSampleRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportLogSampleResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportTestSampleRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportTestSampleResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportVuserRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\ReportVuserResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\SendWangWangRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\SendWangWangResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\SendWangWangShrinkRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\SetScenarioStatusRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\SetScenarioStatusResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\SetTaskStatusRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\SetTaskStatusResponse;
use AlibabaCloud\SDK\PTS\V20150801\Models\StopTaskRequest;
use AlibabaCloud\SDK\PTS\V20150801\Models\StopTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PTS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateTransactionRequest $request CreateTransactionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTransactionResponse CreateTransactionResponse
     */
    public function createTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->transactionName)) {
            $query['TransactionName'] = $request->transactionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransaction',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateTransactionRequest $request CreateTransactionRequest
     *
     * @return CreateTransactionResponse CreateTransactionResponse
     */
    public function createTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransactionWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKeySecretResponse GetKeySecretResponse
     */
    public function getKeySecretWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetKeySecret',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKeySecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @return GetKeySecretResponse GetKeySecretResponse
     */
    public function getKeySecret()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeySecretWithOptions($runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetScriptRequest $request GetScriptRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScriptResponse GetScriptResponse
     */
    public function getScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->tfsname)) {
            $query['Tfsname'] = $request->tfsname;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScript',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetScriptRequest $request GetScriptRequest
     *
     * @return GetScriptResponse GetScriptResponse
     */
    public function getScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScriptWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetTasksRequest $request GetTasksRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTasksResponse GetTasksResponse
     */
    public function getTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTasks',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetTasksRequest $request GetTasksRequest
     *
     * @return GetTasksResponse GetTasksResponse
     */
    public function getTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTasksWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportLogSampleRequest $request ReportLogSampleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportLogSampleResponse ReportLogSampleResponse
     */
    public function reportLogSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logSample)) {
            $query['LogSample'] = $request->logSample;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->wskey)) {
            $query['Wskey'] = $request->wskey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportLogSample',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportLogSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportLogSampleRequest $request ReportLogSampleRequest
     *
     * @return ReportLogSampleResponse ReportLogSampleResponse
     */
    public function reportLogSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportLogSampleWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportTestSampleRequest $request ReportTestSampleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportTestSampleResponse ReportTestSampleResponse
     */
    public function reportTestSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->testSample)) {
            $query['TestSample'] = $request->testSample;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportTestSample',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportTestSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportTestSampleRequest $request ReportTestSampleRequest
     *
     * @return ReportTestSampleResponse ReportTestSampleResponse
     */
    public function reportTestSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTestSampleWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportVuserRequest $request ReportVuserRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportVuserResponse ReportVuserResponse
     */
    public function reportVuserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gmtCreated)) {
            $query['GmtCreated'] = $request->gmtCreated;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->vuser)) {
            $query['Vuser'] = $request->vuser;
        }
        if (!Utils::isUnset($request->wskey)) {
            $query['Wskey'] = $request->wskey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportVuser',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportVuserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ReportVuserRequest $request ReportVuserRequest
     *
     * @return ReportVuserResponse ReportVuserResponse
     */
    public function reportVuser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportVuserWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SendWangWangRequest $tmpReq  SendWangWangRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SendWangWangResponse SendWangWangResponse
     */
    public function sendWangWangWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendWangWangShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->to)) {
            $request->toShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->to, 'To', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->msg)) {
            $query['Msg'] = $request->msg;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->toShrink)) {
            $query['To'] = $request->toShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendWangWang',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendWangWangResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SendWangWangRequest $request SendWangWangRequest
     *
     * @return SendWangWangResponse SendWangWangResponse
     */
    public function sendWangWang($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendWangWangWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SetScenarioStatusRequest $request SetScenarioStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetScenarioStatusResponse SetScenarioStatusResponse
     */
    public function setScenarioStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeIp)) {
            $query['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->wskey)) {
            $query['Wskey'] = $request->wskey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetScenarioStatus',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetScenarioStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SetScenarioStatusRequest $request SetScenarioStatusRequest
     *
     * @return SetScenarioStatusResponse SetScenarioStatusResponse
     */
    public function setScenarioStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScenarioStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SetTaskStatusRequest $request SetTaskStatusRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTaskStatusResponse SetTaskStatusResponse
     */
    public function setTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->wskey)) {
            $query['Wskey'] = $request->wskey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTaskStatus',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param SetTaskStatusRequest $request SetTaskStatusRequest
     *
     * @return SetTaskStatusResponse SetTaskStatusResponse
     */
    public function setTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StopTaskRequest $request StopTaskRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->msg)) {
            $query['Msg'] = $request->msg;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTask',
            'version'     => '2015-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StopTaskRequest $request StopTaskRequest
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskWithOptions($request, $runtime);
    }
}

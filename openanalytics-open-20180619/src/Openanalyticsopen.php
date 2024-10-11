<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CancelSparkStatementRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CancelSparkStatementResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ExecuteSparkStatementRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ExecuteSparkStatementResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobAttemptLogRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobAttemptLogResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobLogRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobLogResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetSparkSessionStateRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetSparkSessionStateResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetSparkStatementRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetSparkStatementResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\KillSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\KillSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptShrinkRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobShrinkRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkStatementsRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkStatementsResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkSQLRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkSQLResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ValidateVirtualClusterNameRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ValidateVirtualClusterNameResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Openanalyticsopen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-beijing'                  => 'openanalytics.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'              => 'openanalytics.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'                 => 'openanalytics.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'openanalytics.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'                 => 'openanalytics.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'                 => 'openanalytics.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'              => 'openanalytics.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'datalakeanalytics.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'openanalytics.ap-southeast-3.aliyuncs.com',
            'ap-northeast-1'              => 'datalakeanalytics.ap-northeast-1.aliyuncs.com',
            'eu-west-1'                   => 'openanalytics.eu-west-1.aliyuncs.com',
            'us-west-1'                   => 'openanalytics.us-west-1.aliyuncs.com',
            'us-east-1'                   => 'datalakeanalytics.us-east-1.aliyuncs.com',
            'eu-central-1'                => 'datalakeanalytics.eu-central-1.aliyuncs.com',
            'ap-south-1'                  => 'openanalytics.ap-south-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'openanalytics.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'openanalytics.ap-southeast-5.aliyuncs.com',
            'cn-beijing-finance-1'        => 'openanalytics.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'openanalytics.aliyuncs.com',
            'cn-beijing-gov-1'            => 'openanalytics.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'openanalytics.aliyuncs.com',
            'cn-chengdu'                  => 'openanalytics.aliyuncs.com',
            'cn-edge-1'                   => 'openanalytics.aliyuncs.com',
            'cn-fujian'                   => 'openanalytics.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-finance'         => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'openanalytics.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'openanalytics.aliyuncs.com',
            'cn-huhehaote'                => 'openanalytics.cn-huhehaote.aliyuncs.com',
            'cn-north-2-gov-1'            => 'openanalytics.aliyuncs.com',
            'cn-qingdao'                  => 'openanalytics.cn-qingdao.aliyuncs.com',
            'cn-qingdao-nebula'           => 'openanalytics.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'openanalytics.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'openanalytics.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'openanalytics.aliyuncs.com',
            'cn-shanghai-inner'           => 'openanalytics.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-inner'           => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'openanalytics.aliyuncs.com',
            'cn-wuhan'                    => 'openanalytics.aliyuncs.com',
            'cn-yushanfang'               => 'openanalytics.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'openanalytics.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'openanalytics.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'openanalytics.aliyuncs.com',
            'eu-west-1-oxs'               => 'openanalytics.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'openanalytics.me-east-1.aliyuncs.com',
            'rus-west-1-pop'              => 'openanalytics.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openanalytics-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelSparkStatementRequest $request CancelSparkStatementRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelSparkStatementResponse CancelSparkStatementResponse
     */
    public function cancelSparkStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->statementId)) {
            $body['StatementId'] = $request->statementId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelSparkStatement',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelSparkStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelSparkStatementRequest $request CancelSparkStatementRequest
     *
     * @return CancelSparkStatementResponse CancelSparkStatementResponse
     */
    public function cancelSparkStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSparkStatementWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->component)) {
            $body['Component'] = $request->component;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteSparkStatementRequest $request ExecuteSparkStatementRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteSparkStatementResponse ExecuteSparkStatementResponse
     */
    public function executeSparkStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->kind)) {
            $body['Kind'] = $request->kind;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteSparkStatement',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteSparkStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteSparkStatementRequest $request ExecuteSparkStatementRequest
     *
     * @return ExecuteSparkStatementResponse ExecuteSparkStatementResponse
     */
    public function executeSparkStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSparkStatementWithOptions($request, $runtime);
    }

    /**
     * @param GetJobAttemptLogRequest $request GetJobAttemptLogRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobAttemptLogResponse GetJobAttemptLogResponse
     */
    public function getJobAttemptLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobAttemptId)) {
            $body['JobAttemptId'] = $request->jobAttemptId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobAttemptLog',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobAttemptLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobAttemptLogRequest $request GetJobAttemptLogRequest
     *
     * @return GetJobAttemptLogResponse GetJobAttemptLogResponse
     */
    public function getJobAttemptLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobAttemptLogWithOptions($request, $runtime);
    }

    /**
     * @param GetJobDetailRequest $request GetJobDetailRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobDetailResponse GetJobDetailResponse
     */
    public function getJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobDetail',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobDetailRequest $request GetJobDetailRequest
     *
     * @return GetJobDetailResponse GetJobDetailResponse
     */
    public function getJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetJobLogRequest $request GetJobLogRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobLogResponse GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobLog',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobLogRequest $request GetJobLogRequest
     *
     * @return GetJobLogResponse GetJobLogResponse
     */
    public function getJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobLogWithOptions($request, $runtime);
    }

    /**
     * @param GetJobStatusRequest $request GetJobStatusRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobStatusResponse GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobStatus',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobStatusRequest $request GetJobStatusRequest
     *
     * @return GetJobStatusResponse GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSparkSessionStateRequest $request GetSparkSessionStateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkSessionStateResponse GetSparkSessionStateResponse
     */
    public function getSparkSessionStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkSessionState',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkSessionStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSparkSessionStateRequest $request GetSparkSessionStateRequest
     *
     * @return GetSparkSessionStateResponse GetSparkSessionStateResponse
     */
    public function getSparkSessionState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkSessionStateWithOptions($request, $runtime);
    }

    /**
     * @param GetSparkStatementRequest $request GetSparkStatementRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkStatementResponse GetSparkStatementResponse
     */
    public function getSparkStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->statementId)) {
            $body['StatementId'] = $request->statementId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkStatement',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSparkStatementRequest $request GetSparkStatementRequest
     *
     * @return GetSparkStatementResponse GetSparkStatementResponse
     */
    public function getSparkStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkStatementWithOptions($request, $runtime);
    }

    /**
     * @param KillSparkJobRequest $request KillSparkJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return KillSparkJobResponse KillSparkJobResponse
     */
    public function killSparkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KillSparkJob',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillSparkJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KillSparkJobRequest $request KillSparkJobRequest
     *
     * @return KillSparkJobResponse KillSparkJobResponse
     */
    public function killSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param ListSparkJobRequest $tmpReq  ListSparkJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkJobResponse ListSparkJobResponse
     */
    public function listSparkJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSparkJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->conditionShrink)) {
            $query['Condition'] = $request->conditionShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vcName)) {
            $query['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSparkJob',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSparkJobRequest $request ListSparkJobRequest
     *
     * @return ListSparkJobResponse ListSparkJobResponse
     */
    public function listSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param ListSparkJobAttemptRequest $tmpReq  ListSparkJobAttemptRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkJobAttemptResponse ListSparkJobAttemptResponse
     */
    public function listSparkJobAttemptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSparkJobAttemptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->conditionShrink)) {
            $query['Condition'] = $request->conditionShrink;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vcName)) {
            $query['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSparkJobAttempt',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkJobAttemptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSparkJobAttemptRequest $request ListSparkJobAttemptRequest
     *
     * @return ListSparkJobAttemptResponse ListSparkJobAttemptResponse
     */
    public function listSparkJobAttempt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkJobAttemptWithOptions($request, $runtime);
    }

    /**
     * @param ListSparkStatementsRequest $request ListSparkStatementsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkStatementsResponse ListSparkStatementsResponse
     */
    public function listSparkStatementsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSparkStatements',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkStatementsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSparkStatementsRequest $request ListSparkStatementsRequest
     *
     * @return ListSparkStatementsResponse ListSparkStatementsResponse
     */
    public function listSparkStatements($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkStatementsWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSparkJobRequest $request SubmitSparkJobRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSparkJobResponse SubmitSparkJobResponse
     */
    public function submitSparkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->configJson)) {
            $body['ConfigJson'] = $request->configJson;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitSparkJob',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSparkJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSparkJobRequest $request SubmitSparkJobRequest
     *
     * @return SubmitSparkJobResponse SubmitSparkJobResponse
     */
    public function submitSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSparkSQLRequest $request SubmitSparkSQLRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSparkSQLResponse SubmitSparkSQLResponse
     */
    public function submitSparkSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sql)) {
            $body['Sql'] = $request->sql;
        }
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitSparkSQL',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSparkSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSparkSQLRequest $request SubmitSparkSQLRequest
     *
     * @return SubmitSparkSQLResponse SubmitSparkSQLResponse
     */
    public function submitSparkSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkSQLWithOptions($request, $runtime);
    }

    /**
     * @param ValidateVirtualClusterNameRequest $request ValidateVirtualClusterNameRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateVirtualClusterNameResponse ValidateVirtualClusterNameResponse
     */
    public function validateVirtualClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->vcName)) {
            $body['VcName'] = $request->vcName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValidateVirtualClusterName',
            'version'     => '2018-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateVirtualClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateVirtualClusterNameRequest $request ValidateVirtualClusterNameRequest
     *
     * @return ValidateVirtualClusterNameResponse ValidateVirtualClusterNameResponse
     */
    public function validateVirtualClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateVirtualClusterNameWithOptions($request, $runtime);
    }
}

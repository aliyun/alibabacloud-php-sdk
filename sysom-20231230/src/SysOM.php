<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotResponseRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotResponseResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAbnormalEventsCountRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAbnormalEventsCountResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHealthPercentageRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHealthPercentageResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeDiagnosisResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class SysOM extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sysom', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 授权 SysOM 对某个机器进行诊断
     *  *
     * @param AuthDiagnosisRequest $request AuthDiagnosisRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthDiagnosisResponse AuthDiagnosisResponse
     */
    public function authDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoCreateRole)) {
            $body['autoCreateRole'] = $request->autoCreateRole;
        }
        if (!Utils::isUnset($request->autoInstallAgent)) {
            $body['autoInstallAgent'] = $request->autoInstallAgent;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AuthDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/auth',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuthDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 授权 SysOM 对某个机器进行诊断
     *  *
     * @param AuthDiagnosisRequest $request AuthDiagnosisRequest
     *
     * @return AuthDiagnosisResponse AuthDiagnosisResponse
     */
    public function authDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取copilot服务的返回结果
     *  *
     * @param GenerateCopilotResponseRequest $request GenerateCopilotResponseRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCopilotResponseResponse GenerateCopilotResponseResponse
     */
    public function generateCopilotResponseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->llmParamString)) {
            $body['llmParamString'] = $request->llmParamString;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCopilotResponse',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/copilot/generate_copilot_response',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateCopilotResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取copilot服务的返回结果
     *  *
     * @param GenerateCopilotResponseRequest $request GenerateCopilotResponseRequest
     *
     * @return GenerateCopilotResponseResponse GenerateCopilotResponseResponse
     */
    public function generateCopilotResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCopilotResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取节点/Pod不同等级异常事件的数量
     *  *
     * @param GetAbnormalEventsCountRequest $request GetAbnormalEventsCountRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAbnormalEventsCountResponse GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['pod'] = $request->pod;
        }
        if (!Utils::isUnset($request->showPod)) {
            $query['showPod'] = $request->showPod;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAbnormalEventsCount',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/abnormaly_events_count',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAbnormalEventsCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点/Pod不同等级异常事件的数量
     *  *
     * @param GetAbnormalEventsCountRequest $request GetAbnormalEventsCountRequest
     *
     * @return GetAbnormalEventsCountResponse GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAbnormalEventsCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取诊断结果
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['task_id'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnosisResult',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/get_diagnosis_results',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取诊断结果
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一段时间的节点/pod健康度比例
     *  *
     * @param GetHealthPercentageRequest $request GetHealthPercentageRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHealthPercentageResponse GetHealthPercentageResponse
     */
    public function getHealthPercentageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHealthPercentage',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/health_percentage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHealthPercentageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一段时间的节点/pod健康度比例
     *  *
     * @param GetHealthPercentageRequest $request GetHealthPercentageRequest
     *
     * @return GetHealthPercentageResponse GetHealthPercentageResponse
     */
    public function getHealthPercentage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHealthPercentageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发起诊断
     *  *
     * @param InvokeDiagnosisRequest $request InvokeDiagnosisRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InvokeDiagnosisResponse InvokeDiagnosisResponse
     */
    public function invokeDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['service_name'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokeDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/invoke_diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvokeDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发起诊断
     *  *
     * @param InvokeDiagnosisRequest $request InvokeDiagnosisRequest
     *
     * @return InvokeDiagnosisResponse InvokeDiagnosisResponse
     */
    public function invokeDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDiagnosisWithOptions($request, $headers, $runtime);
    }
}

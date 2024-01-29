<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultResponse;
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
     * @param AuthDiagnosisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AuthDiagnosisResponse
     */
    public function authDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * @param AuthDiagnosisRequest $request
     *
     * @return AuthDiagnosisResponse
     */
    public function authDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDiagnosisResultRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDiagnosisResultResponse
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
     * @param GetDiagnosisResultRequest $request
     *
     * @return GetDiagnosisResultResponse
     */
    public function getDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvokeDiagnosisRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvokeDiagnosisResponse
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
     * @param InvokeDiagnosisRequest $request
     *
     * @return InvokeDiagnosisResponse
     */
    public function invokeDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDiagnosisWithOptions($request, $headers, $runtime);
    }
}

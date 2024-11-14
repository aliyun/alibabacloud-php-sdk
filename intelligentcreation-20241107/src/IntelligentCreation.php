<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20241107;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IntelligentCreation\V20241107\Models\CreateLabelTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20241107\Models\CreateLabelTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20241107\Models\GetLabelTaskResultRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20241107\Models\GetLabelTaskResultResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IntelligentCreation extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('intelligentcreation', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建模型标注任务
     *  *
     * @param CreateLabelTaskRequest $request CreateLabelTaskRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLabelTaskResponse CreateLabelTaskResponse
     */
    public function createLabelTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileUrl)) {
            $body['fileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $body['idempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->labelTemplateId)) {
            $body['labelTemplateId'] = $request->labelTemplateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabelTask',
            'version'     => '2024-11-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aitag/createLabelTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLabelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建模型标注任务
     *  *
     * @param CreateLabelTaskRequest $request CreateLabelTaskRequest
     *
     * @return CreateLabelTaskResponse CreateLabelTaskResponse
     */
    public function createLabelTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLabelTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询模型标注任务结果
     *  *
     * @param GetLabelTaskResultRequest $request GetLabelTaskResultRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLabelTaskResultResponse GetLabelTaskResultResponse
     */
    public function getLabelTaskResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLabelTaskResult',
            'version'     => '2024-11-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aitag/getLabelTask',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLabelTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询模型标注任务结果
     *  *
     * @param GetLabelTaskResultRequest $request GetLabelTaskResultRequest
     *
     * @return GetLabelTaskResultResponse GetLabelTaskResultResponse
     */
    public function getLabelTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLabelTaskResultWithOptions($request, $headers, $runtime);
    }
}

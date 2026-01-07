<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20250301;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateLabelTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateLabelTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateOssUploadTokenRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateOssUploadTokenResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateTextLabelRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\CreateTextLabelResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\GetLabelTaskResultRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20250301\Models\GetLabelTaskResultResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建模型标注任务
     *
     * @param request - CreateLabelTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLabelTaskResponse
     *
     * @param CreateLabelTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLabelTaskResponse
     */
    public function createLabelTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->callbackUrl) {
            @$body['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->idempotentId) {
            @$body['IdempotentId'] = $request->idempotentId;
        }

        if (null !== $request->labelTemplateId) {
            @$body['LabelTemplateId'] = $request->labelTemplateId;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLabelTask',
            'version' => '2025-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/tongjian/yic-tongjian/openService/v2/aitag/createLabelTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLabelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模型标注任务
     *
     * @param request - CreateLabelTaskRequest
     *
     * @returns CreateLabelTaskResponse
     *
     * @param CreateLabelTaskRequest $request
     *
     * @return CreateLabelTaskResponse
     */
    public function createLabelTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLabelTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建OSS上传token.
     *
     * @param request - CreateOssUploadTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOssUploadTokenResponse
     *
     * @param CreateOssUploadTokenRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOssUploadTokenResponse
     */
    public function createOssUploadTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOssUploadToken',
            'version' => '2025-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/tongjian/yic-tongjian/openService/v2/base/createOssUploadToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建OSS上传token.
     *
     * @param request - CreateOssUploadTokenRequest
     *
     * @returns CreateOssUploadTokenResponse
     *
     * @param CreateOssUploadTokenRequest $request
     *
     * @return CreateOssUploadTokenResponse
     */
    public function createOssUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOssUploadTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 单条文本标注.
     *
     * @param request - CreateTextLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTextLabelResponse
     *
     * @param CreateTextLabelRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTextLabelResponse
     */
    public function createTextLabelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->labelTemplateId) {
            @$body['LabelTemplateId'] = $request->labelTemplateId;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTextLabel',
            'version' => '2025-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/tongjian/yic-tongjian/openService/v2/aitag/createTextLabel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTextLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单条文本标注.
     *
     * @param request - CreateTextLabelRequest
     *
     * @returns CreateTextLabelResponse
     *
     * @param CreateTextLabelRequest $request
     *
     * @return CreateTextLabelResponse
     */
    public function createTextLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTextLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询模型标注任务
     *
     * @param request - GetLabelTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLabelTaskResultResponse
     *
     * @param GetLabelTaskResultRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetLabelTaskResultResponse
     */
    public function getLabelTaskResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLabelTaskResult',
            'version' => '2025-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/tongjian/yic-tongjian/openService/v2/aitag/getLabelTaskResult',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLabelTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模型标注任务
     *
     * @param request - GetLabelTaskResultRequest
     *
     * @returns GetLabelTaskResultResponse
     *
     * @param GetLabelTaskResultRequest $request
     *
     * @return GetLabelTaskResultResponse
     */
    public function getLabelTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLabelTaskResultWithOptions($request, $headers, $runtime);
    }
}

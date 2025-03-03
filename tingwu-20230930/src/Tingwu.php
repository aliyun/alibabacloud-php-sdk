<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTranscriptionPhrasesRequest;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTranscriptionPhrasesResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\DeleteTranscriptionPhrasesResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTranscriptionPhrasesResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\ListTranscriptionPhrasesResponse;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\UpdateTranscriptionPhrasesRequest;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\UpdateTranscriptionPhrasesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Tingwu extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tingwu', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建听悟任务
     *
     * @param request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operation) {
            @$query['operation'] = $request->operation;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/tasks',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建听悟任务
     *
     * @param request - CreateTaskRequest
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建热词词表.
     *
     * @param request - CreateTranscriptionPhrasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTranscriptionPhrasesResponse
     *
     * @param CreateTranscriptionPhrasesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateTranscriptionPhrasesResponse
     */
    public function createTranscriptionPhrasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->wordWeights) {
            @$body['WordWeights'] = $request->wordWeights;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTranscriptionPhrases',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/resources/phrases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTranscriptionPhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTranscriptionPhrasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建热词词表.
     *
     * @param request - CreateTranscriptionPhrasesRequest
     * @returns CreateTranscriptionPhrasesResponse
     *
     * @param CreateTranscriptionPhrasesRequest $request
     *
     * @return CreateTranscriptionPhrasesResponse
     */
    public function createTranscriptionPhrases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTranscriptionPhrasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除词表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTranscriptionPhrasesResponse
     *
     * @param string         $PhraseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTranscriptionPhrasesResponse
     */
    public function deleteTranscriptionPhrasesWithOptions($PhraseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTranscriptionPhrases',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/resources/phrases/' . Url::percentEncode($PhraseId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTranscriptionPhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTranscriptionPhrasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除词表.
     *
     * @returns DeleteTranscriptionPhrasesResponse
     *
     * @param string $PhraseId
     *
     * @return DeleteTranscriptionPhrasesResponse
     */
    public function deleteTranscriptionPhrases($PhraseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTranscriptionPhrasesWithOptions($PhraseId, $headers, $runtime);
    }

    /**
     * 查询听悟任务信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTaskInfoResponse
     *
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskInfoResponse
     */
    public function getTaskInfoWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskInfo',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/tasks/' . Url::percentEncode($TaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询听悟任务信息.
     *
     * @returns GetTaskInfoResponse
     *
     * @param string $TaskId
     *
     * @return GetTaskInfoResponse
     */
    public function getTaskInfo($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskInfoWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * 查询热词词表信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTranscriptionPhrasesResponse
     *
     * @param string         $PhraseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTranscriptionPhrasesResponse
     */
    public function getTranscriptionPhrasesWithOptions($PhraseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTranscriptionPhrases',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/resources/phrases/' . Url::percentEncode($PhraseId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTranscriptionPhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTranscriptionPhrasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询热词词表信息.
     *
     * @returns GetTranscriptionPhrasesResponse
     *
     * @param string $PhraseId
     *
     * @return GetTranscriptionPhrasesResponse
     */
    public function getTranscriptionPhrases($PhraseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTranscriptionPhrasesWithOptions($PhraseId, $headers, $runtime);
    }

    /**
     * 列举用户所有热词词表信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTranscriptionPhrasesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTranscriptionPhrasesResponse
     */
    public function listTranscriptionPhrasesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListTranscriptionPhrases',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/resources/phrases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTranscriptionPhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTranscriptionPhrasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举用户所有热词词表信息.
     *
     * @returns ListTranscriptionPhrasesResponse
     *
     * @return ListTranscriptionPhrasesResponse
     */
    public function listTranscriptionPhrases()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTranscriptionPhrasesWithOptions($headers, $runtime);
    }

    /**
     * 更新热词词表.
     *
     * @param request - UpdateTranscriptionPhrasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTranscriptionPhrasesResponse
     *
     * @param string                            $PhraseId
     * @param UpdateTranscriptionPhrasesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateTranscriptionPhrasesResponse
     */
    public function updateTranscriptionPhrasesWithOptions($PhraseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->wordWeights) {
            @$body['WordWeights'] = $request->wordWeights;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTranscriptionPhrases',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tingwu/v2/resources/phrases/' . Url::percentEncode($PhraseId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTranscriptionPhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTranscriptionPhrasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新热词词表.
     *
     * @param request - UpdateTranscriptionPhrasesRequest
     * @returns UpdateTranscriptionPhrasesResponse
     *
     * @param string                            $PhraseId
     * @param UpdateTranscriptionPhrasesRequest $request
     *
     * @return UpdateTranscriptionPhrasesResponse
     */
    public function updateTranscriptionPhrases($PhraseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTranscriptionPhrasesWithOptions($PhraseId, $request, $headers, $runtime);
    }
}

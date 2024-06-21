<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Searchplat extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
        $this->_endpointRule = '';
    }

    /**
     * @summary 创建异步提取任务
     *  *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param CreateDocumentAnalyzeTaskRequest $request       CreateDocumentAnalyzeTaskRequest
     * @param string[]                         $headers       map
     * @param RuntimeOptions                   $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateDocumentAnalyzeTaskResponse CreateDocumentAnalyzeTaskResponse
     */
    public function createDocumentAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->document)) {
            $body['document'] = $request->document;
        }
        if (!Utils::isUnset($request->output)) {
            $body['output'] = $request->output;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDocumentAnalyzeTask',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/document-analyze/' . $serviceId . '/async',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDocumentAnalyzeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建异步提取任务
     *  *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param CreateDocumentAnalyzeTaskRequest $request       CreateDocumentAnalyzeTaskRequest
     *
     * @return CreateDocumentAnalyzeTaskResponse CreateDocumentAnalyzeTaskResponse
     */
    public function createDocumentAnalyzeTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDocumentAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取异步提取任务状态
     *  *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param GetDocumentAnalyzeTaskStatusRequest $request       GetDocumentAnalyzeTaskStatusRequest
     * @param string[]                            $headers       map
     * @param RuntimeOptions                      $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetDocumentAnalyzeTaskStatusResponse GetDocumentAnalyzeTaskStatusResponse
     */
    public function getDocumentAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
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
            'action'      => 'GetDocumentAnalyzeTaskStatus',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/document-analyze/' . $serviceId . '/async/task-status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentAnalyzeTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取异步提取任务状态
     *  *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param GetDocumentAnalyzeTaskStatusRequest $request       GetDocumentAnalyzeTaskStatusRequest
     *
     * @return GetDocumentAnalyzeTaskStatusResponse GetDocumentAnalyzeTaskStatusResponse
     */
    public function getDocumentAnalyzeTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文档相关性打分
     *  *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetDocumentRankRequest $request       GetDocumentRankRequest
     * @param string[]               $headers       map
     * @param RuntimeOptions         $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetDocumentRankResponse GetDocumentRankResponse
     */
    public function getDocumentRankWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docs)) {
            $body['docs'] = $request->docs;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentRank',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/ranker/' . $serviceId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentRankResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档相关性打分
     *  *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetDocumentRankRequest $request       GetDocumentRankRequest
     *
     * @return GetDocumentRankResponse GetDocumentRankResponse
     */
    public function getDocumentRank($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentRankWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文档切片
     *  *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetDocumentSplitRequest $request       GetDocumentSplitRequest
     * @param string[]                $headers       map
     * @param RuntimeOptions          $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetDocumentSplitResponse GetDocumentSplitResponse
     */
    public function getDocumentSplitWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->document)) {
            $body['document'] = $request->document;
        }
        if (!Utils::isUnset($request->strategy)) {
            $body['strategy'] = $request->strategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentSplit',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/document-split/' . $serviceId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDocumentSplitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档切片
     *  *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetDocumentSplitRequest $request       GetDocumentSplitRequest
     *
     * @return GetDocumentSplitResponse GetDocumentSplitResponse
     */
    public function getDocumentSplit($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentSplitWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文本向量化
     *  *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetTextEmbeddingRequest $request       GetTextEmbeddingRequest
     * @param string[]                $headers       map
     * @param RuntimeOptions          $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTextEmbeddingResponse GetTextEmbeddingResponse
     */
    public function getTextEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->input)) {
            $body['input'] = $request->input;
        }
        if (!Utils::isUnset($request->inputType)) {
            $body['input_type'] = $request->inputType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTextEmbedding',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/text-embedding/' . $serviceId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextEmbeddingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文本向量化
     *  *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetTextEmbeddingRequest $request       GetTextEmbeddingRequest
     *
     * @return GetTextEmbeddingResponse GetTextEmbeddingResponse
     */
    public function getTextEmbedding($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 大模型问答
     *  *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param GetTextGenerationRequest $request       GetTextGenerationRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTextGenerationResponse GetTextGenerationResponse
     */
    public function getTextGenerationWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->csiLevel)) {
            $body['csi_level'] = $request->csiLevel;
        }
        if (!Utils::isUnset($request->messages)) {
            $body['messages'] = $request->messages;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTextGeneration',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/text-generation/' . $serviceId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 大模型问答
     *  *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param GetTextGenerationRequest $request       GetTextGenerationRequest
     *
     * @return GetTextGenerationResponse GetTextGenerationResponse
     */
    public function getTextGeneration($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextGenerationWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文本稀疏向量化
     *  *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetTextSparseEmbeddingRequest $request       GetTextSparseEmbeddingRequest
     * @param string[]                      $headers       map
     * @param RuntimeOptions                $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTextSparseEmbeddingResponse GetTextSparseEmbeddingResponse
     */
    public function getTextSparseEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->input)) {
            $body['input'] = $request->input;
        }
        if (!Utils::isUnset($request->inputType)) {
            $body['input_type'] = $request->inputType;
        }
        if (!Utils::isUnset($request->returnToken)) {
            $body['return_token'] = $request->returnToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTextSparseEmbedding',
            'version'     => '2024-05-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v3/openapi/workspaces/' . $workspaceName . '/text-sparse-embedding/' . $serviceId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextSparseEmbeddingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文本稀疏向量化
     *  *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetTextSparseEmbeddingRequest $request       GetTextSparseEmbeddingRequest
     *
     * @return GetTextSparseEmbeddingResponse GetTextSparseEmbeddingResponse
     */
    public function getTextSparseEmbedding($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextSparseEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }
}

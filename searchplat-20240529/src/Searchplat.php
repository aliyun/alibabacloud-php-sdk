<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateAudioAsrTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateAudioAsrTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateImageAnalyzeTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateImageAnalyzeTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSnapshotTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSnapshotTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetAudioAsrTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetAudioAsrTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetEmbeddingTuningRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetEmbeddingTuningResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageAnalyzeTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageAnalyzeTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetPredictionHeaders;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetPredictionRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetPredictionResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Searchplat extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Searchplat';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = '';
    }

    /**
     * 创建语音转录异步任务
     *
     * @param request - CreateAudioAsrTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAudioAsrTaskResponse
     *
     * @param string                    $workspaceName
     * @param string                    $serviceId
     * @param CreateAudioAsrTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAudioAsrTaskResponse
     */
    public function createAudioAsrTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAudioAsrTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/audio-asr/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAudioAsrTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建语音转录异步任务
     *
     * @param request - CreateAudioAsrTaskRequest
     *
     * @returns CreateAudioAsrTaskResponse
     *
     * @param string                    $workspaceName
     * @param string                    $serviceId
     * @param CreateAudioAsrTaskRequest $request
     *
     * @return CreateAudioAsrTaskResponse
     */
    public function createAudioAsrTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAudioAsrTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 创建文档解析异步提取任务
     *
     * @param request - CreateDocumentAnalyzeTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocumentAnalyzeTaskResponse
     *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param CreateDocumentAnalyzeTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDocumentAnalyzeTaskResponse
     */
    public function createDocumentAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDocumentAnalyzeTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/document-analyze/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDocumentAnalyzeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建文档解析异步提取任务
     *
     * @param request - CreateDocumentAnalyzeTaskRequest
     *
     * @returns CreateDocumentAnalyzeTaskResponse
     *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param CreateDocumentAnalyzeTaskRequest $request
     *
     * @return CreateDocumentAnalyzeTaskResponse
     */
    public function createDocumentAnalyzeTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDocumentAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 创建图片解析异步提取任务
     *
     * @param request - CreateImageAnalyzeTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageAnalyzeTaskResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param CreateImageAnalyzeTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateImageAnalyzeTaskResponse
     */
    public function createImageAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageAnalyzeTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/image-analyze/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateImageAnalyzeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建图片解析异步提取任务
     *
     * @param request - CreateImageAnalyzeTaskRequest
     *
     * @returns CreateImageAnalyzeTaskResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param CreateImageAnalyzeTaskRequest $request
     *
     * @return CreateImageAnalyzeTaskResponse
     */
    public function createImageAnalyzeTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createImageAnalyzeTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 创建语音转录异步任务
     *
     * @param request - CreateVideoSnapshotTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoSnapshotTaskResponse
     *
     * @param string                         $workspaceName
     * @param string                         $serviceId
     * @param CreateVideoSnapshotTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVideoSnapshotTaskResponse
     */
    public function createVideoSnapshotTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVideoSnapshotTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-snapshot/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVideoSnapshotTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建语音转录异步任务
     *
     * @param request - CreateVideoSnapshotTaskRequest
     *
     * @returns CreateVideoSnapshotTaskResponse
     *
     * @param string                         $workspaceName
     * @param string                         $serviceId
     * @param CreateVideoSnapshotTaskRequest $request
     *
     * @return CreateVideoSnapshotTaskResponse
     */
    public function createVideoSnapshotTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVideoSnapshotTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 获取视频截帧异步提取任务状态
     *
     * @param request - GetAudioAsrTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAudioAsrTaskStatusResponse
     *
     * @param string                       $workspaceName
     * @param string                       $serviceId
     * @param GetAudioAsrTaskStatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAudioAsrTaskStatusResponse
     */
    public function getAudioAsrTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAudioAsrTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/audio-asr/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAudioAsrTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取视频截帧异步提取任务状态
     *
     * @param request - GetAudioAsrTaskStatusRequest
     *
     * @returns GetAudioAsrTaskStatusResponse
     *
     * @param string                       $workspaceName
     * @param string                       $serviceId
     * @param GetAudioAsrTaskStatusRequest $request
     *
     * @return GetAudioAsrTaskStatusResponse
     */
    public function getAudioAsrTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAudioAsrTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档解析异步提取任务状态
     *
     * @param request - GetDocumentAnalyzeTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentAnalyzeTaskStatusResponse
     *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param GetDocumentAnalyzeTaskStatusRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDocumentAnalyzeTaskStatusResponse
     */
    public function getDocumentAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocumentAnalyzeTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/document-analyze/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentAnalyzeTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文档解析异步提取任务状态
     *
     * @param request - GetDocumentAnalyzeTaskStatusRequest
     *
     * @returns GetDocumentAnalyzeTaskStatusResponse
     *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param GetDocumentAnalyzeTaskStatusRequest $request
     *
     * @return GetDocumentAnalyzeTaskStatusResponse
     */
    public function getDocumentAnalyzeTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 文档相关性打分.
     *
     * @param request - GetDocumentRankRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentRankResponse
     *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetDocumentRankRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDocumentRankResponse
     */
    public function getDocumentRankWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docs) {
            @$body['docs'] = $request->docs;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentRank',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/ranker/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentRankResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文档相关性打分.
     *
     * @param request - GetDocumentRankRequest
     *
     * @returns GetDocumentRankResponse
     *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetDocumentRankRequest $request
     *
     * @return GetDocumentRankResponse
     */
    public function getDocumentRank($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentRankWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 文档切片.
     *
     * @param request - GetDocumentSplitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentSplitResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetDocumentSplitRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetDocumentSplitResponse
     */
    public function getDocumentSplitWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentSplit',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/document-split/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentSplitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文档切片.
     *
     * @param request - GetDocumentSplitRequest
     *
     * @returns GetDocumentSplitResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetDocumentSplitRequest $request
     *
     * @return GetDocumentSplitResponse
     */
    public function getDocumentSplit($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentSplitWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 向量微调.
     *
     * @param request - GetEmbeddingTuningRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmbeddingTuningResponse
     *
     * @param string                    $workspaceName
     * @param string                    $serviceId
     * @param GetEmbeddingTuningRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEmbeddingTuningResponse
     */
    public function getEmbeddingTuningWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEmbeddingTuning',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/embedding-tuning/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmbeddingTuningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 向量微调.
     *
     * @param request - GetEmbeddingTuningRequest
     *
     * @returns GetEmbeddingTuningResponse
     *
     * @param string                    $workspaceName
     * @param string                    $serviceId
     * @param GetEmbeddingTuningRequest $request
     *
     * @return GetEmbeddingTuningResponse
     */
    public function getEmbeddingTuning($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmbeddingTuningWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 获取图片解析异步提取任务状态
     *
     * @param request - GetImageAnalyzeTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageAnalyzeTaskStatusResponse
     *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param GetImageAnalyzeTaskStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetImageAnalyzeTaskStatusResponse
     */
    public function getImageAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageAnalyzeTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/image-analyze/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetImageAnalyzeTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取图片解析异步提取任务状态
     *
     * @param request - GetImageAnalyzeTaskStatusRequest
     *
     * @returns GetImageAnalyzeTaskStatusResponse
     *
     * @param string                           $workspaceName
     * @param string                           $serviceId
     * @param GetImageAnalyzeTaskStatusRequest $request
     *
     * @return GetImageAnalyzeTaskStatusResponse
     */
    public function getImageAnalyzeTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageAnalyzeTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 多模态向量化.
     *
     * @param request - GetMultiModalEmbeddingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiModalEmbeddingResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetMultiModalEmbeddingRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetMultiModalEmbeddingResponse
     */
    public function getMultiModalEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiModalEmbedding',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/multi-modal-embedding/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMultiModalEmbeddingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 多模态向量化.
     *
     * @param request - GetMultiModalEmbeddingRequest
     *
     * @returns GetMultiModalEmbeddingResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetMultiModalEmbeddingRequest $request
     *
     * @return GetMultiModalEmbeddingResponse
     */
    public function getMultiModalEmbedding($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMultiModalEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 获取推理结果.
     *
     * @param request - GetPredictionRequest
     * @param headers - GetPredictionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPredictionResponse
     *
     * @param string               $deploymentId
     * @param GetPredictionRequest $request
     * @param GetPredictionHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetPredictionResponse
     */
    public function getPredictionWithOptions($deploymentId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->token) {
            @$realHeaders['Token'] = '' . $headers->token;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'GetPrediction',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/deployments/' . $deploymentId . '/predict',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return GetPredictionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取推理结果.
     *
     * @param request - GetPredictionRequest
     *
     * @returns GetPredictionResponse
     *
     * @param string               $deploymentId
     * @param GetPredictionRequest $request
     *
     * @return GetPredictionResponse
     */
    public function getPrediction($deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetPredictionHeaders([]);

        return $this->getPredictionWithOptions($deploymentId, $request, $headers, $runtime);
    }

    /**
     * 获取query分析结果.
     *
     * @param request - GetQueryAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryAnalysisResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetQueryAnalysisRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetQueryAnalysisResponse
     */
    public function getQueryAnalysisWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->functions) {
            @$body['functions'] = $request->functions;
        }

        if (null !== $request->history) {
            @$body['history'] = $request->history;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQueryAnalysis',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/query-analyze/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQueryAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取query分析结果.
     *
     * @param request - GetQueryAnalysisRequest
     *
     * @returns GetQueryAnalysisResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetQueryAnalysisRequest $request
     *
     * @return GetQueryAnalysisResponse
     */
    public function getQueryAnalysis($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQueryAnalysisWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 文本向量化.
     *
     * @param request - GetTextEmbeddingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextEmbeddingResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetTextEmbeddingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetTextEmbeddingResponse
     */
    public function getTextEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->inputType) {
            @$body['input_type'] = $request->inputType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextEmbedding',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/text-embedding/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextEmbeddingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文本向量化.
     *
     * @param request - GetTextEmbeddingRequest
     *
     * @returns GetTextEmbeddingResponse
     *
     * @param string                  $workspaceName
     * @param string                  $serviceId
     * @param GetTextEmbeddingRequest $request
     *
     * @return GetTextEmbeddingResponse
     */
    public function getTextEmbedding($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 大模型问答.
     *
     * @param request - GetTextGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextGenerationResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param GetTextGenerationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetTextGenerationResponse
     */
    public function getTextGenerationWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->csiLevel) {
            @$body['csi_level'] = $request->csiLevel;
        }

        if (null !== $request->enableSearch) {
            @$body['enable_search'] = $request->enableSearch;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextGeneration',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/text-generation/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 大模型问答.
     *
     * @param request - GetTextGenerationRequest
     *
     * @returns GetTextGenerationResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param GetTextGenerationRequest $request
     *
     * @return GetTextGenerationResponse
     */
    public function getTextGeneration($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextGenerationWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 文本稀疏向量化.
     *
     * @param request - GetTextSparseEmbeddingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextSparseEmbeddingResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetTextSparseEmbeddingRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetTextSparseEmbeddingResponse
     */
    public function getTextSparseEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->inputType) {
            @$body['input_type'] = $request->inputType;
        }

        if (null !== $request->returnToken) {
            @$body['return_token'] = $request->returnToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextSparseEmbedding',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/text-sparse-embedding/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextSparseEmbeddingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文本稀疏向量化.
     *
     * @param request - GetTextSparseEmbeddingRequest
     *
     * @returns GetTextSparseEmbeddingResponse
     *
     * @param string                        $workspaceName
     * @param string                        $serviceId
     * @param GetTextSparseEmbeddingRequest $request
     *
     * @return GetTextSparseEmbeddingResponse
     */
    public function getTextSparseEmbedding($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextSparseEmbeddingWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 获取视频截帧异步提取任务状态
     *
     * @param request - GetVideoSnapshotTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoSnapshotTaskStatusResponse
     *
     * @param string                            $workspaceName
     * @param string                            $serviceId
     * @param GetVideoSnapshotTaskStatusRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetVideoSnapshotTaskStatusResponse
     */
    public function getVideoSnapshotTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoSnapshotTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-snapshot/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoSnapshotTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取视频截帧异步提取任务状态
     *
     * @param request - GetVideoSnapshotTaskStatusRequest
     *
     * @returns GetVideoSnapshotTaskStatusResponse
     *
     * @param string                            $workspaceName
     * @param string                            $serviceId
     * @param GetVideoSnapshotTaskStatusRequest $request
     *
     * @return GetVideoSnapshotTaskStatusResponse
     */
    public function getVideoSnapshotTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoSnapshotTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 联网搜索.
     *
     * @param request - GetWebSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWebSearchResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param GetWebSearchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWebSearchResponse
     */
    public function getWebSearchWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contentType) {
            @$body['content_type'] = $request->contentType;
        }

        if (null !== $request->history) {
            @$body['history'] = $request->history;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryRewrite) {
            @$body['query_rewrite'] = $request->queryRewrite;
        }

        if (null !== $request->topK) {
            @$body['top_k'] = $request->topK;
        }

        if (null !== $request->way) {
            @$body['way'] = $request->way;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWebSearch',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/web-search/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWebSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 联网搜索.
     *
     * @param request - GetWebSearchRequest
     *
     * @returns GetWebSearchResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param GetWebSearchRequest $request
     *
     * @return GetWebSearchResponse
     */
    public function getWebSearch($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebSearchWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }
}

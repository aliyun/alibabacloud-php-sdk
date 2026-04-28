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
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemoryRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemoryResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemorySkillRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateMemorySkillResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSegmentationTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSegmentationTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSnapshotTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSnapshotTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSummarizationTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSummarizationTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemoryRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemorySkillRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemorySkillResponse;
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
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryHealthRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryHealthResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemorySkillRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemorySkillResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerResponse;
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
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSegmentationTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSegmentationTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\UpdateMemorySkillRequest;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\UpdateMemorySkillResponse;
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
     * 存储 Memory 内容.
     *
     * @param request - CreateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param CreateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemoryResponse
     */
    public function createMemoryWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->enhancements) {
            @$body['enhancements'] = $request->enhancements;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->runId) {
            @$body['run_id'] = $request->runId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemory',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/memories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 存储 Memory 内容.
     *
     * @param request - CreateMemoryRequest
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param CreateMemoryRequest $request
     *
     * @return CreateMemoryResponse
     */
    public function createMemory($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 上传skill.
     *
     * @param request - CreateMemorySkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param CreateMemorySkillRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMemorySkillResponse
     */
    public function createMemorySkillWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->zipBase64) {
            @$body['zip_base64'] = $request->zipBase64;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMemorySkill',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/skills',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemorySkillResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 上传skill.
     *
     * @param request - CreateMemorySkillRequest
     *
     * @returns CreateMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param CreateMemorySkillRequest $request
     *
     * @return CreateMemorySkillResponse
     */
    public function createMemorySkill($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemorySkillWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 创建视频切割异步任务
     *
     * @param request - CreateVideoSegmentationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoSegmentationTaskResponse
     *
     * @param string                             $workspaceName
     * @param string                             $serviceId
     * @param CreateVideoSegmentationTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateVideoSegmentationTaskResponse
     */
    public function createVideoSegmentationTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
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
            'action' => 'CreateVideoSegmentationTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-segmentation/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVideoSegmentationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建视频切割异步任务
     *
     * @param request - CreateVideoSegmentationTaskRequest
     *
     * @returns CreateVideoSegmentationTaskResponse
     *
     * @param string                             $workspaceName
     * @param string                             $serviceId
     * @param CreateVideoSegmentationTaskRequest $request
     *
     * @return CreateVideoSegmentationTaskResponse
     */
    public function createVideoSegmentationTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVideoSegmentationTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
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
     * 创建视频总结异步任务
     *
     * @param request - CreateVideoSummarizationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoSummarizationTaskResponse
     *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param CreateVideoSummarizationTaskRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateVideoSummarizationTaskResponse
     */
    public function createVideoSummarizationTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
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
            'action' => 'CreateVideoSummarizationTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-summarization/' . $serviceId . '/async',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVideoSummarizationTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建视频总结异步任务
     *
     * @param request - CreateVideoSummarizationTaskRequest
     *
     * @returns CreateVideoSummarizationTaskResponse
     *
     * @param string                              $workspaceName
     * @param string                              $serviceId
     * @param CreateVideoSummarizationTaskRequest $request
     *
     * @return CreateVideoSummarizationTaskResponse
     */
    public function createVideoSummarizationTask($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVideoSummarizationTaskWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 删除一条 Memory.
     *
     * @param request - DeleteMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/memories/' . $memoryId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除一条 Memory.
     *
     * @param request - DeleteMemoryRequest
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($workspaceName, $serviceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * 删除skill.
     *
     * @param request - DeleteMemorySkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param string                   $skillId
     * @param DeleteMemorySkillRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMemorySkillResponse
     */
    public function deleteMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemorySkill',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/skills/' . $skillId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemorySkillResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除skill.
     *
     * @param request - DeleteMemorySkillRequest
     *
     * @returns DeleteMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param string                   $skillId
     * @param DeleteMemorySkillRequest $request
     *
     * @return DeleteMemorySkillResponse
     */
    public function deleteMemorySkill($workspaceName, $serviceId, $skillId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime);
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
     * 图片主体检测.
     *
     * @param request - GetImageObjectDetectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageObjectDetectionResponse
     *
     * @param string                         $workspaceName
     * @param string                         $serviceId
     * @param GetImageObjectDetectionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetImageObjectDetectionResponse
     */
    public function getImageObjectDetectionWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->image) {
            @$body['image'] = $request->image;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageObjectDetection',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/image-object-detection/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetImageObjectDetectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 图片主体检测.
     *
     * @param request - GetImageObjectDetectionRequest
     *
     * @returns GetImageObjectDetectionResponse
     *
     * @param string                         $workspaceName
     * @param string                         $serviceId
     * @param GetImageObjectDetectionRequest $request
     *
     * @return GetImageObjectDetectionResponse
     */
    public function getImageObjectDetection($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageObjectDetectionWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 查看memory详情.
     *
     * @param request - GetMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceName
     * @param string           $serviceId
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/memories/' . $memoryId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看memory详情.
     *
     * @param request - GetMemoryRequest
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceName
     * @param string           $serviceId
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     *
     * @return GetMemoryResponse
     */
    public function getMemory($workspaceName, $serviceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * 检查 Memory 服务健康状态
     *
     * @param request - GetMemoryHealthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryHealthResponse
     *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetMemoryHealthRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetMemoryHealthResponse
     */
    public function getMemoryHealthWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryHealth',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/health',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryHealthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 检查 Memory 服务健康状态
     *
     * @param request - GetMemoryHealthRequest
     *
     * @returns GetMemoryHealthResponse
     *
     * @param string                 $workspaceName
     * @param string                 $serviceId
     * @param GetMemoryHealthRequest $request
     *
     * @return GetMemoryHealthResponse
     */
    public function getMemoryHealth($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryHealthWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 查看skill详情.
     *
     * @param request - GetMemorySkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemorySkillResponse
     *
     * @param string                $workspaceName
     * @param string                $serviceId
     * @param string                $skillId
     * @param GetMemorySkillRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMemorySkillResponse
     */
    public function getMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemorySkill',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/skills/' . $skillId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemorySkillResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看skill详情.
     *
     * @param request - GetMemorySkillRequest
     *
     * @returns GetMemorySkillResponse
     *
     * @param string                $workspaceName
     * @param string                $serviceId
     * @param string                $skillId
     * @param GetMemorySkillRequest $request
     *
     * @return GetMemorySkillResponse
     */
    public function getMemorySkill($workspaceName, $serviceId, $skillId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime);
    }

    /**
     * 查询memory异步任务的处理状态
     *
     * @param request - GetMemoryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryTaskResponse
     *
     * @param string               $workspaceName
     * @param string               $serviceId
     * @param string               $taskId
     * @param GetMemoryTaskRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetMemoryTaskResponse
     */
    public function getMemoryTaskWithOptions($workspaceName, $serviceId, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryTask',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/tasks/' . $taskId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询memory异步任务的处理状态
     *
     * @param request - GetMemoryTaskRequest
     *
     * @returns GetMemoryTaskResponse
     *
     * @param string               $workspaceName
     * @param string               $serviceId
     * @param string               $taskId
     * @param GetMemoryTaskRequest $request
     *
     * @return GetMemoryTaskResponse
     */
    public function getMemoryTask($workspaceName, $serviceId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryTaskWithOptions($workspaceName, $serviceId, $taskId, $request, $headers, $runtime);
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

        if (null !== $request->options) {
            @$body['options'] = $request->options;
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
     * 多模态 Reranker.
     *
     * @param request - GetMultiModalRerankerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiModalRerankerResponse
     *
     * @param string                       $workspaceName
     * @param string                       $serviceId
     * @param GetMultiModalRerankerRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetMultiModalRerankerResponse
     */
    public function getMultiModalRerankerWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docs) {
            @$body['docs'] = $request->docs;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiModalReranker',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/multi-modal-reranker/' . $serviceId . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMultiModalRerankerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 多模态 Reranker.
     *
     * @param request - GetMultiModalRerankerRequest
     *
     * @returns GetMultiModalRerankerResponse
     *
     * @param string                       $workspaceName
     * @param string                       $serviceId
     * @param GetMultiModalRerankerRequest $request
     *
     * @return GetMultiModalRerankerResponse
     */
    public function getMultiModalReranker($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMultiModalRerankerWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
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
     * 获取视频切割异步任务状态
     *
     * @param request - GetVideoSegmentationTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoSegmentationTaskStatusResponse
     *
     * @param string                                $workspaceName
     * @param string                                $serviceId
     * @param GetVideoSegmentationTaskStatusRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetVideoSegmentationTaskStatusResponse
     */
    public function getVideoSegmentationTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
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
            'action' => 'GetVideoSegmentationTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-segmentation/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoSegmentationTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取视频切割异步任务状态
     *
     * @param request - GetVideoSegmentationTaskStatusRequest
     *
     * @returns GetVideoSegmentationTaskStatusResponse
     *
     * @param string                                $workspaceName
     * @param string                                $serviceId
     * @param GetVideoSegmentationTaskStatusRequest $request
     *
     * @return GetVideoSegmentationTaskStatusResponse
     */
    public function getVideoSegmentationTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoSegmentationTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
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
     * 获取视频总结异步任务状态
     *
     * @param request - GetVideoSummarizationTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoSummarizationTaskStatusResponse
     *
     * @param string                                 $workspaceName
     * @param string                                 $serviceId
     * @param GetVideoSummarizationTaskStatusRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetVideoSummarizationTaskStatusResponse
     */
    public function getVideoSummarizationTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
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
            'action' => 'GetVideoSummarizationTaskStatus',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/video-summarization/' . $serviceId . '/async/task-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoSummarizationTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取视频总结异步任务状态
     *
     * @param request - GetVideoSummarizationTaskStatusRequest
     *
     * @returns GetVideoSummarizationTaskStatusResponse
     *
     * @param string                                 $workspaceName
     * @param string                                 $serviceId
     * @param GetVideoSummarizationTaskStatusRequest $request
     *
     * @return GetVideoSummarizationTaskStatusResponse
     */
    public function getVideoSummarizationTaskStatus($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoSummarizationTaskStatusWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
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

    /**
     * 根据查询条件搜索 Memory.
     *
     * @param request - SearchMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param SearchMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SearchMemoryResponse
     */
    public function searchMemoryWithOptions($workspaceName, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->enhancements) {
            @$body['enhancements'] = $request->enhancements;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->runId) {
            @$body['run_id'] = $request->runId;
        }

        if (null !== $request->size) {
            @$body['size'] = $request->size;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchMemory',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchMemoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据查询条件搜索 Memory.
     *
     * @param request - SearchMemoryRequest
     *
     * @returns SearchMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param SearchMemoryRequest $request
     *
     * @return SearchMemoryResponse
     */
    public function searchMemory($workspaceName, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMemoryWithOptions($workspaceName, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 更新 Memory.
     *
     * @param request - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->memory) {
            @$body['memory'] = $request->memory;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/memories/' . $memoryId . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新 Memory.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceName
     * @param string              $serviceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($workspaceName, $serviceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($workspaceName, $serviceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * 更新 Skill.
     *
     * @param request - UpdateMemorySkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param string                   $skillId
     * @param UpdateMemorySkillRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMemorySkillResponse
     */
    public function updateMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMemorySkill',
            'version' => '2024-05-29',
            'protocol' => 'HTTPS',
            'pathname' => '/v3/openapi/workspaces/' . $workspaceName . '/memory/' . $serviceId . '/skills/' . $skillId . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemorySkillResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新 Skill.
     *
     * @param request - UpdateMemorySkillRequest
     *
     * @returns UpdateMemorySkillResponse
     *
     * @param string                   $workspaceName
     * @param string                   $serviceId
     * @param string                   $skillId
     * @param UpdateMemorySkillRequest $request
     *
     * @return UpdateMemorySkillResponse
     */
    public function updateMemorySkill($workspaceName, $serviceId, $skillId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemorySkillWithOptions($workspaceName, $serviceId, $skillId, $request, $headers, $runtime);
    }
}

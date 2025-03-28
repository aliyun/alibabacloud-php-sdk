<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateFinReportSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateFinReportSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePdfTranslateTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePdfTranslateTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EvictTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EvictTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RebuildTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RebuildTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentAdvanceRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DianJin extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dianjin', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建按年文档总结任务
     *
     * @param request - CreateAnnualDocSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnnualDocSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateAnnualDocSummaryTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAnnualDocSummaryTaskResponse
     */
    public function createAnnualDocSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->anaYears) {
            @$body['anaYears'] = $request->anaYears;
        }

        if (null !== $request->docInfos) {
            @$body['docInfos'] = $request->docInfos;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAnnualDocSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/doc/annual',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAnnualDocSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAnnualDocSummaryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建按年文档总结任务
     *
     * @param request - CreateAnnualDocSummaryTaskRequest
     *
     * @returns CreateAnnualDocSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateAnnualDocSummaryTaskRequest $request
     *
     * @return CreateAnnualDocSummaryTaskResponse
     */
    public function createAnnualDocSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnualDocSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建外呼会话.
     *
     * @param request - CreateDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDialogResponse
     *
     * @param string              $workspaceId
     * @param CreateDialogRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDialogResponse
     */
    public function createDialogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->enableLibrary) {
            @$body['enableLibrary'] = $request->enableLibrary;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->playCode) {
            @$body['playCode'] = $request->playCode;
        }

        if (null !== $request->qaLibraryList) {
            @$body['qaLibraryList'] = $request->qaLibraryList;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->selfDirected) {
            @$body['selfDirected'] = $request->selfDirected;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDialog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDialogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDialogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建外呼会话.
     *
     * @param request - CreateDialogRequest
     *
     * @returns CreateDialogResponse
     *
     * @param string              $workspaceId
     * @param CreateDialogRequest $request
     *
     * @return CreateDialogResponse
     */
    public function createDialog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDialogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建会话分析任务
     *
     * @param request - CreateDialogAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDialogAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateDialogAnalysisTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDialogAnalysisTaskResponse
     */
    public function createDialogAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysisNodes) {
            @$body['analysisNodes'] = $request->analysisNodes;
        }

        if (null !== $request->conversationList) {
            @$body['conversationList'] = $request->conversationList;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->playCode) {
            @$body['playCode'] = $request->playCode;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDialogAnalysisTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/analysis/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDialogAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDialogAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建会话分析任务
     *
     * @param request - CreateDialogAnalysisTaskRequest
     *
     * @returns CreateDialogAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateDialogAnalysisTaskRequest $request
     *
     * @return CreateDialogAnalysisTaskResponse
     */
    public function createDialogAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDialogAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建财报总结任务
     *
     * @param request - CreateDocsSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocsSummaryTaskResponse
     *
     * @param string                       $workspaceId
     * @param CreateDocsSummaryTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDocsSummaryTaskResponse
     */
    public function createDocsSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docInfos) {
            @$body['docInfos'] = $request->docInfos;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDocsSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/docs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDocsSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDocsSummaryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建财报总结任务
     *
     * @param request - CreateDocsSummaryTaskRequest
     *
     * @returns CreateDocsSummaryTaskResponse
     *
     * @param string                       $workspaceId
     * @param CreateDocsSummaryTaskRequest $request
     *
     * @return CreateDocsSummaryTaskResponse
     */
    public function createDocsSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDocsSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建财报总结任务
     *
     * @param request - CreateFinReportSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFinReportSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateFinReportSummaryTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFinReportSummaryTaskResponse
     */
    public function createFinReportSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->endPage) {
            @$body['endPage'] = $request->endPage;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->startPage) {
            @$body['startPage'] = $request->startPage;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFinReportSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFinReportSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFinReportSummaryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建财报总结任务
     *
     * @param request - CreateFinReportSummaryTaskRequest
     *
     * @returns CreateFinReportSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateFinReportSummaryTaskRequest $request
     *
     * @return CreateFinReportSummaryTaskResponse
     */
    public function createFinReportSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFinReportSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建文档库.
     *
     * @param request - CreateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibraryResponse
     *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLibraryResponse
     */
    public function createLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->indexSetting) {
            @$body['indexSetting'] = $request->indexSetting;
        }

        if (null !== $request->libraryName) {
            @$body['libraryName'] = $request->libraryName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLibraryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建文档库.
     *
     * @param request - CreateLibraryRequest
     *
     * @returns CreateLibraryResponse
     *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request
     *
     * @return CreateLibraryResponse
     */
    public function createLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建PDF翻译任务
     *
     * @param request - CreatePdfTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdfTranslateTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreatePdfTranslateTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePdfTranslateTaskResponse
     */
    public function createPdfTranslateTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->knowledge) {
            @$body['knowledge'] = $request->knowledge;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->translateTo) {
            @$body['translateTo'] = $request->translateTo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePdfTranslateTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/pdfTranslate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePdfTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePdfTranslateTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建PDF翻译任务
     *
     * @param request - CreatePdfTranslateTaskRequest
     *
     * @returns CreatePdfTranslateTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreatePdfTranslateTaskRequest $request
     *
     * @return CreatePdfTranslateTaskResponse
     */
    public function createPdfTranslateTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdfTranslateTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建预定义文档.
     *
     * @param request - CreatePredefinedDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePredefinedDocumentResponse
     *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunks) {
            @$body['chunks'] = $request->chunks;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePredefinedDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/createPredefinedDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePredefinedDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePredefinedDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建预定义文档.
     *
     * @param request - CreatePredefinedDocumentRequest
     *
     * @returns CreatePredefinedDocumentResponse
     *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request
     *
     * @return CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建财报总结的任务
     *
     * @param request - CreateQualityCheckTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQualityCheckTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreateQualityCheckTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQualityCheckTaskResponse
     */
    public function createQualityCheckTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationList) {
            @$body['conversationList'] = $request->conversationList;
        }

        if (null !== $request->gmtService) {
            @$body['gmtService'] = $request->gmtService;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->qualityGroup) {
            @$body['qualityGroup'] = $request->qualityGroup;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQualityCheckTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/qualitycheck/task/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateQualityCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateQualityCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建财报总结的任务
     *
     * @param request - CreateQualityCheckTaskRequest
     *
     * @returns CreateQualityCheckTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreateQualityCheckTaskRequest $request
     *
     * @return CreateQualityCheckTaskResponse
     */
    public function createQualityCheckTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQualityCheckTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除文档.
     *
     * @param request - DeleteDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentResponse
     *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docIds) {
            @$body['docIds'] = $request->docIds;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除文档.
     *
     * @param request - DeleteDocumentRequest
     *
     * @returns DeleteDocumentResponse
     *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除文档库.
     *
     * @param request - DeleteLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLibraryResponse
     *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLibraryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除文档库.
     *
     * @param request - DeleteLibraryRequest
     *
     * @returns DeleteLibraryResponse
     *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 中断任务
     *
     * @param request - EvictTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvictTaskResponse
     *
     * @param string           $workspaceId
     * @param EvictTaskRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EvictTaskResponse
     */
    public function evictTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EvictTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/evict',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EvictTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EvictTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 中断任务
     *
     * @param request - EvictTaskRequest
     *
     * @returns EvictTaskResponse
     *
     * @param string           $workspaceId
     * @param EvictTaskRequest $request
     *
     * @return EvictTaskResponse
     */
    public function evictTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->evictTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 根据文档解析问答QA.
     *
     * @param request - GenDocQaResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenDocQaResultResponse
     *
     * @param string                $workspaceId
     * @param GenDocQaResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenDocQaResultResponse
     */
    public function genDocQaResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenDocQaResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/qa/parse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenDocQaResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenDocQaResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据文档解析问答QA.
     *
     * @param request - GenDocQaResultRequest
     *
     * @returns GenDocQaResultResponse
     *
     * @param string                $workspaceId
     * @param GenDocQaResultRequest $request
     *
     * @return GenDocQaResultResponse
     */
    public function genDocQaResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genDocQaResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取app配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppConfigResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfigWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAppConfig',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/app/config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取app配置.
     *
     * @returns GetAppConfigResponse
     *
     * @param string $workspaceId
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfig($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppConfigWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * 获取问答结果.
     *
     * @param request - GetChatQuestionRespRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatQuestionRespResponse
     *
     * @param string                     $workspaceId
     * @param GetChatQuestionRespRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetChatQuestionRespResponse
     */
    public function getChatQuestionRespWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->batchId) {
            @$body['batchId'] = $request->batchId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetChatQuestionResp',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/chat/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetChatQuestionRespResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChatQuestionRespResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取问答结果.
     *
     * @param request - GetChatQuestionRespRequest
     *
     * @returns GetChatQuestionRespResponse
     *
     * @param string                     $workspaceId
     * @param GetChatQuestionRespRequest $request
     *
     * @return GetChatQuestionRespResponse
     */
    public function getChatQuestionResp($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatQuestionRespWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取外呼会话分析结果.
     *
     * @param request - GetDialogAnalysisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDialogAnalysisResultResponse
     *
     * @param string                         $workspaceId
     * @param GetDialogAnalysisResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDialogAnalysisResultResponse
     */
    public function getDialogAnalysisResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asc) {
            @$body['asc'] = $request->asc;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->sessionIds) {
            @$body['sessionIds'] = $request->sessionIds;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->useUrl) {
            @$body['useUrl'] = $request->useUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDialogAnalysisResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDialogAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDialogAnalysisResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取外呼会话分析结果.
     *
     * @param request - GetDialogAnalysisResultRequest
     *
     * @returns GetDialogAnalysisResultResponse
     *
     * @param string                         $workspaceId
     * @param GetDialogAnalysisResultRequest $request
     *
     * @return GetDialogAnalysisResultResponse
     */
    public function getDialogAnalysisResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDialogAnalysisResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档的chunk列表.
     *
     * @param request - GetDocumentChunkListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentChunkListResponse
     *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetDocumentChunkListResponse
     */
    public function getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunkIdList) {
            @$body['chunkIdList'] = $request->chunkIdList;
        }

        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$body['orderBy'] = $request->orderBy;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->searchQuery) {
            @$body['searchQuery'] = $request->searchQuery;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentChunkList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/getDocumentChunk',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDocumentChunkListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocumentChunkListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文档的chunk列表.
     *
     * @param request - GetDocumentChunkListRequest
     *
     * @returns GetDocumentChunkListResponse
     *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request
     *
     * @return GetDocumentChunkListResponse
     */
    public function getDocumentChunkList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 分页查询文档库的文档列表.
     *
     * @param request - GetDocumentListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentListResponse
     *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDocumentListResponse
     */
    public function getDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocumentList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/listDocument',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocumentListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 分页查询文档库的文档列表.
     *
     * @param request - GetDocumentListRequest
     *
     * @returns GetDocumentListResponse
     *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request
     *
     * @return GetDocumentListResponse
     */
    public function getDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档URL.
     *
     * @param request - GetDocumentUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentUrlResponse
     *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetDocumentUrlResponse
     */
    public function getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocumentUrl',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDocumentUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocumentUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文档URL.
     *
     * @param request - GetDocumentUrlRequest
     *
     * @returns GetDocumentUrlResponse
     *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request
     *
     * @return GetDocumentUrlResponse
     */
    public function getDocumentUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 带条件的分页查询文档库的文档列表.
     *
     * @param request - GetFilterDocumentListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFilterDocumentListResponse
     *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetFilterDocumentListResponse
     */
    public function getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->and) {
            @$body['and'] = $request->and;
        }

        if (null !== $request->docIdList) {
            @$body['docIdList'] = $request->docIdList;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->or) {
            @$body['or'] = $request->or;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFilterDocumentList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/filterDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFilterDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFilterDocumentListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 带条件的分页查询文档库的文档列表.
     *
     * @param request - GetFilterDocumentListRequest
     *
     * @returns GetFilterDocumentListResponse
     *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request
     *
     * @return GetFilterDocumentListResponse
     */
    public function getFilterDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 分页查询文档库列表.
     *
     * @param request - GetHistoryListByBizTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoryListByBizTypeResponse
     *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['bizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['bizType'] = $request->bizType;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoryListByBizType',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/history/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHistoryListByBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHistoryListByBizTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 分页查询文档库列表.
     *
     * @param request - GetHistoryListByBizTypeRequest
     *
     * @returns GetHistoryListByBizTypeResponse
     *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request
     *
     * @return GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizType($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档库配置详情.
     *
     * @param request - GetLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryResponse
     *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetLibraryResponse
     */
    public function getLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLibraryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文档库配置详情.
     *
     * @param request - GetLibraryRequest
     *
     * @returns GetLibraryResponse
     *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request
     *
     * @return GetLibraryResponse
     */
    public function getLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 分页查询文档库列表.
     *
     * @param request - GetLibraryListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryListResponse
     *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLibraryListResponse
     */
    public function getLibraryListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLibraryList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLibraryListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLibraryListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 分页查询文档库列表.
     *
     * @param request - GetLibraryListRequest
     *
     * @returns GetLibraryListResponse
     *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request
     *
     * @return GetLibraryListResponse
     */
    public function getLibraryList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取解析结果.
     *
     * @param request - GetParseResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParseResultResponse
     *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetParseResultResponse
     */
    public function getParseResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->useUrlResult) {
            @$body['useUrlResult'] = $request->useUrlResult;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetParseResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/getParseResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetParseResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetParseResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取解析结果.
     *
     * @param request - GetParseResultRequest
     *
     * @returns GetParseResultResponse
     *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request
     *
     * @return GetParseResultResponse
     */
    public function getParseResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParseResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取异步任务的结果.
     *
     * @param request - GetQualityCheckTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityCheckTaskResultResponse
     *
     * @param string                           $workspaceId
     * @param GetQualityCheckTaskResultRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetQualityCheckTaskResultResponse
     */
    public function getQualityCheckTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityCheckTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/qualitycheck/task/query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetQualityCheckTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQualityCheckTaskResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取异步任务的结果.
     *
     * @param request - GetQualityCheckTaskResultRequest
     *
     * @returns GetQualityCheckTaskResultResponse
     *
     * @param string                           $workspaceId
     * @param GetQualityCheckTaskResultRequest $request
     *
     * @return GetQualityCheckTaskResultResponse
     */
    public function getQualityCheckTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQualityCheckTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取财报总结任务结果.
     *
     * @param request - GetSummaryTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSummaryTaskResultResponse
     *
     * @param string                      $workspaceId
     * @param GetSummaryTaskResultRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSummaryTaskResultResponse
     */
    public function getSummaryTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSummaryTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSummaryTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSummaryTaskResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取财报总结任务结果.
     *
     * @param request - GetSummaryTaskResultRequest
     *
     * @returns GetSummaryTaskResultResponse
     *
     * @param string                      $workspaceId
     * @param GetSummaryTaskResultRequest $request
     *
     * @return GetSummaryTaskResultResponse
     */
    public function getSummaryTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSummaryTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取异步任务结果.
     *
     * @param request - GetTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResultResponse
     *
     * @param string               $workspaceId
     * @param GetTaskResultRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取异步任务结果.
     *
     * @param request - GetTaskResultRequest
     *
     * @returns GetTaskResultResponse
     *
     * @param string               $workspaceId
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取财报总结任务结果.
     *
     * @param request - GetTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param string               $workspaceId
     * @param GetTaskStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取财报总结任务结果.
     *
     * @param request - GetTaskStatusRequest
     *
     * @returns GetTaskStatusResponse
     *
     * @param string               $workspaceId
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 插件调试接口.
     *
     * @param request - InvokePluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokePluginResponse
     *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InvokePluginResponse
     */
    public function invokePluginWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->pluginId) {
            @$body['pluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokePlugin',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/plugin/invoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokePluginResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokePluginResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 插件调试接口.
     *
     * @param request - InvokePluginRequest
     *
     * @returns InvokePluginResponse
     *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request
     *
     * @return InvokePluginResponse
     */
    public function invokePlugin($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokePluginWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取文档预览.
     *
     * @param request - PreviewDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewDocumentResponse
     *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PreviewDocumentResponse
     */
    public function previewDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreviewDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/preview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PreviewDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PreviewDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文档预览.
     *
     * @param request - PreviewDocumentRequest
     *
     * @returns PreviewDocumentResponse
     *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request
     *
     * @return PreviewDocumentResponse
     */
    public function previewDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 重新索引.
     *
     * @param request - ReIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReIndexResponse
     *
     * @param string         $workspaceId
     * @param ReIndexRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReIndexResponse
     */
    public function reIndexWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReIndex',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/reIndex',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 重新索引.
     *
     * @param request - ReIndexRequest
     *
     * @returns ReIndexResponse
     *
     * @param string         $workspaceId
     * @param ReIndexRequest $request
     *
     * @return ReIndexResponse
     */
    public function reIndex($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reIndexWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 实时对话.
     *
     * @param request - RealTimeDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RealTimeDialogResponse
     *
     * @param string                $workspaceId
     * @param RealTimeDialogRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RealTimeDialogResponse
     */
    public function realTimeDialogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversationModel) {
            @$body['conversationModel'] = $request->conversationModel;
        }

        if (null !== $request->dialogMemoryTurns) {
            @$body['dialogMemoryTurns'] = $request->dialogMemoryTurns;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->opType) {
            @$body['opType'] = $request->opType;
        }

        if (null !== $request->recommend) {
            @$body['recommend'] = $request->recommend;
        }

        if (null !== $request->scriptContentPlayed) {
            @$body['scriptContentPlayed'] = $request->scriptContentPlayed;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->userVad) {
            @$body['userVad'] = $request->userVad;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RealTimeDialog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/realtime/dialog/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RealTimeDialogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RealTimeDialogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 实时对话.
     *
     * @param request - RealTimeDialogRequest
     *
     * @returns RealTimeDialogResponse
     *
     * @param string                $workspaceId
     * @param RealTimeDialogRequest $request
     *
     * @return RealTimeDialogResponse
     */
    public function realTimeDialog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->realTimeDialogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 重建任务
     *
     * @param request - RebuildTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebuildTaskResponse
     *
     * @param string             $workspaceId
     * @param RebuildTaskRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RebuildTaskResponse
     */
    public function rebuildTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskIds) {
            @$body['taskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RebuildTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/rebuild',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RebuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebuildTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 重建任务
     *
     * @param request - RebuildTaskRequest
     *
     * @returns RebuildTaskResponse
     *
     * @param string             $workspaceId
     * @param RebuildTaskRequest $request
     *
     * @return RebuildTaskResponse
     */
    public function rebuildTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 文档召回。
     *
     * @param request - RecallDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecallDocumentResponse
     *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RecallDocumentResponse
     */
    public function recallDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filters) {
            @$body['filters'] = $request->filters;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->rearrangement) {
            @$body['rearrangement'] = $request->rearrangement;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecallDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/recallDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecallDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecallDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文档召回。
     *
     * @param request - RecallDocumentRequest
     *
     * @returns RecallDocumentResponse
     *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request
     *
     * @return RecallDocumentResponse
     */
    public function recallDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recallDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 意图识别.
     *
     * @param request - RecognizeIntentionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeIntentionResponse
     *
     * @param string                    $workspaceId
     * @param RecognizeIntentionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeIntentionResponse
     */
    public function recognizeIntentionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversation) {
            @$body['conversation'] = $request->conversation;
        }

        if (null !== $request->globalIntentionList) {
            @$body['globalIntentionList'] = $request->globalIntentionList;
        }

        if (null !== $request->hierarchicalIntentionList) {
            @$body['hierarchicalIntentionList'] = $request->hierarchicalIntentionList;
        }

        if (null !== $request->intentionDomainCode) {
            @$body['intentionDomainCode'] = $request->intentionDomainCode;
        }

        if (null !== $request->intentionList) {
            @$body['intentionList'] = $request->intentionList;
        }

        if (null !== $request->opType) {
            @$body['opType'] = $request->opType;
        }

        if (null !== $request->recommend) {
            @$body['recommend'] = $request->recommend;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeIntention',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/recog/intent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecognizeIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecognizeIntentionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 意图识别.
     *
     * @param request - RecognizeIntentionRequest
     *
     * @returns RecognizeIntentionResponse
     *
     * @param string                    $workspaceId
     * @param RecognizeIntentionRequest $request
     *
     * @return RecognizeIntentionResponse
     */
    public function recognizeIntention($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recognizeIntentionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 运行智能体.
     *
     * @param request - RunAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunAgentResponse
     *
     * @param string          $workspaceId
     * @param RunAgentRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RunAgentResponse
     */
    public function runAgentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->botId) {
            @$body['botId'] = $request->botId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->useDraft) {
            @$body['useDraft'] = $request->useDraft;
        }

        if (null !== $request->userContent) {
            @$body['userContent'] = $request->userContent;
        }

        if (null !== $request->versionId) {
            @$body['versionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunAgent',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/bot/thread/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 运行智能体.
     *
     * @param request - RunAgentRequest
     *
     * @returns RunAgentResponse
     *
     * @param string          $workspaceId
     * @param RunAgentRequest $request
     *
     * @return RunAgentResponse
     */
    public function runAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取生成式对话结果.
     *
     * @param request - RunChatResultGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunChatResultGenerationResponse
     *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RunChatResultGenerationResponse
     */
    public function runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inferenceParameters) {
            @$body['inferenceParameters'] = $request->inferenceParameters;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunChatResultGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunChatResultGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunChatResultGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取生成式对话结果.
     *
     * @param request - RunChatResultGenerationRequest
     *
     * @returns RunChatResultGenerationResponse
     *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request
     *
     * @return RunChatResultGenerationResponse
     */
    public function runChatResultGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取生成式对话结果.
     *
     * @param request - RunLibraryChatGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunLibraryChatGenerationResponse
     *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docIdList) {
            @$body['docIdList'] = $request->docIdList;
        }

        if (null !== $request->enableFollowUp) {
            @$body['enableFollowUp'] = $request->enableFollowUp;
        }

        if (null !== $request->enableMultiQuery) {
            @$body['enableMultiQuery'] = $request->enableMultiQuery;
        }

        if (null !== $request->enableOpenQa) {
            @$body['enableOpenQa'] = $request->enableOpenQa;
        }

        if (null !== $request->followUpLlm) {
            @$body['followUpLlm'] = $request->followUpLlm;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->llmType) {
            @$body['llmType'] = $request->llmType;
        }

        if (null !== $request->multiQueryLlm) {
            @$body['multiQueryLlm'] = $request->multiQueryLlm;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryCriteria) {
            @$body['queryCriteria'] = $request->queryCriteria;
        }

        if (null !== $request->rerankType) {
            @$body['rerankType'] = $request->rerankType;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->subQueryList) {
            @$body['subQueryList'] = $request->subQueryList;
        }

        if (null !== $request->textSearchParameter) {
            @$body['textSearchParameter'] = $request->textSearchParameter;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->vectorSearchParameter) {
            @$body['vectorSearchParameter'] = $request->vectorSearchParameter;
        }

        if (null !== $request->withDocumentReference) {
            @$body['withDocumentReference'] = $request->withDocumentReference;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunLibraryChatGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/library/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunLibraryChatGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunLibraryChatGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取生成式对话结果.
     *
     * @param request - RunLibraryChatGenerationRequest
     *
     * @returns RunLibraryChatGenerationResponse
     *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request
     *
     * @return RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 提交问题列表.
     *
     * @param request - SubmitChatQuestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitChatQuestionResponse
     *
     * @param string                    $workspaceId
     * @param SubmitChatQuestionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitChatQuestionResponse
     */
    public function submitChatQuestionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gmtService) {
            @$body['gmtService'] = $request->gmtService;
        }

        if (null !== $request->liveScriptContent) {
            @$body['liveScriptContent'] = $request->liveScriptContent;
        }

        if (null !== $request->openSmallTalk) {
            @$body['openSmallTalk'] = $request->openSmallTalk;
        }

        if (null !== $request->questionList) {
            @$body['questionList'] = $request->questionList;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitChatQuestion',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/chat/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitChatQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitChatQuestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交问题列表.
     *
     * @param request - SubmitChatQuestionRequest
     *
     * @returns SubmitChatQuestionResponse
     *
     * @param string                    $workspaceId
     * @param SubmitChatQuestionRequest $request
     *
     * @return SubmitChatQuestionResponse
     */
    public function submitChatQuestion($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitChatQuestionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新文档.
     *
     * @param request - UpdateDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDocumentResponse
     *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateDocumentResponse
     */
    public function updateDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/updateDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新文档.
     *
     * @param request - UpdateDocumentRequest
     *
     * @returns UpdateDocumentResponse
     *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request
     *
     * @return UpdateDocumentResponse
     */
    public function updateDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新文档库配置.
     *
     * @param request - UpdateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLibraryResponse
     *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->indexSetting) {
            @$body['indexSetting'] = $request->indexSetting;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->libraryName) {
            @$body['libraryName'] = $request->libraryName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLibraryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新文档库配置.
     *
     * @param request - UpdateLibraryRequest
     *
     * @returns UpdateLibraryResponse
     *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新QA问答库.
     *
     * @param request - UpdateQaLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQaLibraryResponse
     *
     * @param string                 $workspaceId
     * @param UpdateQaLibraryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateQaLibraryResponse
     */
    public function updateQaLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parseQaResults) {
            @$body['parseQaResults'] = $request->parseQaResults;
        }

        if (null !== $request->qaLibraryId) {
            @$body['qaLibraryId'] = $request->qaLibraryId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQaLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/qa/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateQaLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQaLibraryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新QA问答库.
     *
     * @param request - UpdateQaLibraryRequest
     *
     * @returns UpdateQaLibraryResponse
     *
     * @param string                 $workspaceId
     * @param UpdateQaLibraryRequest $request
     *
     * @return UpdateQaLibraryResponse
     */
    public function updateQaLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQaLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 上传文档到文档库.
     *
     * @param request - UploadDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDocumentResponse
     *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$body['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 上传文档到文档库.
     *
     * @param request - UploadDocumentRequest
     *
     * @returns UploadDocumentResponse
     *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $workspaceId
     * @param UploadDocumentAdvanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentAdvance($workspaceId, $request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'DianJin',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $uploadDocumentReq = new UploadDocumentRequest([]);
        Utils::convert($request, $uploadDocumentReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadDocumentReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadDocumentWithOptions($workspaceId, $uploadDocumentReq, $headers, $runtime);
    }
}

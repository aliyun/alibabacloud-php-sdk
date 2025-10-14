<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchAddDocumentRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchAddDocumentResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchCreateAICoachTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchCreateAICoachTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BuildAICoachScriptRecordRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BuildAICoachScriptRecordResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CloseAICoachTaskSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CloseAICoachTaskSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAgentRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAgentResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAnchorRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAnchorResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIndividuationProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIndividuationProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIndividuationTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIndividuationTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateProductImageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateProductImageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateRealisticPortraitRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateRealisticPortraitResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTrainTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTrainTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateVideoClipTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateVideoClipTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteAICoachScriptRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteAICoachScriptResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DescribeDocumentResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\FinishAICoachTaskSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\FinishAICoachTaskSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachAssessmentPointRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachAssessmentPointResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionReportRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionReportResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionResourceUsageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionResourceUsageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetIllustrationResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetIllustrationTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetOssUploadTokenRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetOssUploadTokenResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\InteractTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\InteractTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAgentsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAgentsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListKnowledgeBaseRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListKnowledgeBaseResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OfflineAICoachScriptRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OfflineAICoachScriptResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OperateAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OperateAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryImageToVideoTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryImageToVideoTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryTextStreamResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ReleaseAgentRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ReleaseAgentResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectImageTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkMessageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkMessageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkStreamMessageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkStreamMessageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendTextMsgRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendTextMsgResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StartAvatarSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StartAvatarSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopAvatarSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopAvatarSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitImageToVideoTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitImageToVideoTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\TransferPortraitStyleRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\TransferPortraitStyleResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\UpdateAgentResponse;
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
     * 添加文案反馈.
     *
     * @param request - AddTextFeedbackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTextFeedbackResponse
     *
     * @param AddTextFeedbackRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddTextFeedbackResponse
     */
    public function addTextFeedbackWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->quality) {
            @$body['quality'] = $request->quality;
        }

        if (null !== $request->textId) {
            @$body['textId'] = $request->textId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTextFeedback',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/addTextFeedback',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddTextFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加文案反馈.
     *
     * @param request - AddTextFeedbackRequest
     *
     * @returns AddTextFeedbackResponse
     *
     * @param AddTextFeedbackRequest $request
     *
     * @return AddTextFeedbackResponse
     */
    public function addTextFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addTextFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量添加知识文档.
     *
     * @param request - BatchAddDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddDocumentResponse
     *
     * @param string                  $knowledgeBaseId
     * @param BatchAddDocumentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAddDocumentResponse
     */
    public function batchAddDocumentWithOptions($knowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addDocumentInfos) {
            @$body['addDocumentInfos'] = $request->addDocumentInfos;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchAddDocument',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/knowledge-base/' . Url::percentEncode($knowledgeBaseId) . '/documents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchAddDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量添加知识文档.
     *
     * @param request - BatchAddDocumentRequest
     *
     * @returns BatchAddDocumentResponse
     *
     * @param string                  $knowledgeBaseId
     * @param BatchAddDocumentRequest $request
     *
     * @return BatchAddDocumentResponse
     */
    public function batchAddDocument($knowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAddDocumentWithOptions($knowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 批量发布剧本任务
     *
     * @param request - BatchCreateAICoachTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateAICoachTaskResponse
     *
     * @param BatchCreateAICoachTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BatchCreateAICoachTaskResponse
     */
    public function batchCreateAICoachTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->scriptRecordId) {
            @$body['scriptRecordId'] = $request->scriptRecordId;
        }

        if (null !== $request->studentIds) {
            @$body['studentIds'] = $request->studentIds;
        }

        if (null !== $request->studentList) {
            @$body['studentList'] = $request->studentList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateAICoachTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/batchCreateTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchCreateAICoachTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量发布剧本任务
     *
     * @param request - BatchCreateAICoachTaskRequest
     *
     * @returns BatchCreateAICoachTaskResponse
     *
     * @param BatchCreateAICoachTaskRequest $request
     *
     * @return BatchCreateAICoachTaskResponse
     */
    public function batchCreateAICoachTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchCreateAICoachTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询项目信息.
     *
     * @param tmpReq - BatchGetProjectTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetProjectTaskResponse
     *
     * @param BatchGetProjectTaskRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchGetProjectTaskResponse
     */
    public function batchGetProjectTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetProjectTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIdList) {
            $request->taskIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'taskIdList', 'simple');
        }

        $query = [];
        if (null !== $request->taskIdListShrink) {
            @$query['taskIdList'] = $request->taskIdListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetProjectTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/project/batchGetProjectTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchGetProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询项目信息.
     *
     * @param request - BatchGetProjectTaskRequest
     *
     * @returns BatchGetProjectTaskResponse
     *
     * @param BatchGetProjectTaskRequest $request
     *
     * @return BatchGetProjectTaskResponse
     */
    public function batchGetProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询声音复刻任务
     *
     * @param tmpReq - BatchGetTrainTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetTrainTaskResponse
     *
     * @param BatchGetTrainTaskRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return BatchGetTrainTaskResponse
     */
    public function batchGetTrainTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetTrainTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIdList) {
            $request->taskIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'taskIdList', 'simple');
        }

        $query = [];
        if (null !== $request->aliyunMainId) {
            @$query['aliyunMainId'] = $request->aliyunMainId;
        }

        if (null !== $request->taskIdListShrink) {
            @$query['taskIdList'] = $request->taskIdListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetTrainTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/train/task/batchGetTrainTaskInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchGetTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询声音复刻任务
     *
     * @param request - BatchGetTrainTaskRequest
     *
     * @returns BatchGetTrainTaskResponse
     *
     * @param BatchGetTrainTaskRequest $request
     *
     * @return BatchGetTrainTaskResponse
     */
    public function batchGetTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetTrainTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询视频切片任务信息.
     *
     * @param tmpReq - BatchGetVideoClipTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetVideoClipTaskResponse
     *
     * @param BatchGetVideoClipTaskRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchGetVideoClipTaskResponse
     */
    public function batchGetVideoClipTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetVideoClipTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIdList) {
            $request->taskIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'taskIdList', 'simple');
        }

        $query = [];
        if (null !== $request->taskIdListShrink) {
            @$query['taskIdList'] = $request->taskIdListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetVideoClipTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/video/clip/batchGetVideoClipTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchGetVideoClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询视频切片任务信息.
     *
     * @param request - BatchGetVideoClipTaskRequest
     *
     * @returns BatchGetVideoClipTaskResponse
     *
     * @param BatchGetVideoClipTaskRequest $request
     *
     * @return BatchGetVideoClipTaskResponse
     */
    public function batchGetVideoClipTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetVideoClipTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询文案.
     *
     * @param tmpReq - BatchQueryIndividuationTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQueryIndividuationTextResponse
     *
     * @param BatchQueryIndividuationTextRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchQueryIndividuationTextResponse
     */
    public function batchQueryIndividuationTextWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchQueryIndividuationTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->textIdList) {
            $request->textIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->textIdList, 'textIdList', 'simple');
        }

        $query = [];
        if (null !== $request->textIdListShrink) {
            @$query['textIdList'] = $request->textIdListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQueryIndividuationText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/batchQueryText',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchQueryIndividuationTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询文案.
     *
     * @param request - BatchQueryIndividuationTextRequest
     *
     * @returns BatchQueryIndividuationTextResponse
     *
     * @param BatchQueryIndividuationTextRequest $request
     *
     * @return BatchQueryIndividuationTextResponse
     */
    public function batchQueryIndividuationText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchQueryIndividuationTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 快速发布剧本.
     *
     * @param request - BuildAICoachScriptRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuildAICoachScriptRecordResponse
     *
     * @param BuildAICoachScriptRecordRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return BuildAICoachScriptRecordResponse
     */
    public function buildAICoachScriptRecordWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scriptJsonUrl) {
            @$body['scriptJsonUrl'] = $request->scriptJsonUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BuildAICoachScriptRecord',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/buildScriptRecord',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BuildAICoachScriptRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 快速发布剧本.
     *
     * @param request - BuildAICoachScriptRecordRequest
     *
     * @returns BuildAICoachScriptRecordResponse
     *
     * @param BuildAICoachScriptRecordRequest $request
     *
     * @return BuildAICoachScriptRecordResponse
     */
    public function buildAICoachScriptRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildAICoachScriptRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 检查会话状态
     *
     * @param request - CheckSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSessionResponse
     *
     * @param CheckSessionRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CheckSessionResponse
     */
    public function checkSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/checkSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查会话状态
     *
     * @param request - CheckSessionRequest
     *
     * @returns CheckSessionResponse
     *
     * @param CheckSessionRequest $request
     *
     * @return CheckSessionResponse
     */
    public function checkSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 学员关闭会话.
     *
     * @param request - CloseAICoachTaskSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseAICoachTaskSessionResponse
     *
     * @param CloseAICoachTaskSessionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CloseAICoachTaskSessionResponse
     */
    public function closeAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$body['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseAICoachTaskSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/closeSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 学员关闭会话.
     *
     * @param request - CloseAICoachTaskSessionRequest
     *
     * @returns CloseAICoachTaskSessionResponse
     *
     * @param CloseAICoachTaskSessionRequest $request
     *
     * @return CloseAICoachTaskSessionResponse
     */
    public function closeAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 文本数量统计
     *
     * @param request - CountTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CountTextResponse
     *
     * @param CountTextRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CountTextResponse
     */
    public function countTextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->generationSource) {
            @$query['generationSource'] = $request->generationSource;
        }

        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->publishStatus) {
            @$query['publishStatus'] = $request->publishStatus;
        }

        if (null !== $request->style) {
            @$query['style'] = $request->style;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CountText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/countText',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CountTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文本数量统计
     *
     * @param request - CountTextRequest
     *
     * @returns CountTextResponse
     *
     * @param CountTextRequest $request
     *
     * @return CountTextResponse
     */
    public function countText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询剧本列表.
     *
     * @param request - CreateAICoachTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAICoachTaskResponse
     *
     * @param CreateAICoachTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAICoachTaskResponse
     */
    public function createAICoachTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->scriptRecordId) {
            @$body['scriptRecordId'] = $request->scriptRecordId;
        }

        if (null !== $request->studentAudioUrl) {
            @$body['studentAudioUrl'] = $request->studentAudioUrl;
        }

        if (null !== $request->studentId) {
            @$body['studentId'] = $request->studentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAICoachTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/createTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAICoachTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询剧本列表.
     *
     * @param request - CreateAICoachTaskRequest
     *
     * @returns CreateAICoachTaskResponse
     *
     * @param CreateAICoachTaskRequest $request
     *
     * @return CreateAICoachTaskResponse
     */
    public function createAICoachTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAICoachTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 学员开启对练会话.
     *
     * @param request - CreateAICoachTaskSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAICoachTaskSessionResponse
     *
     * @param CreateAICoachTaskSessionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAICoachTaskSessionResponse
     */
    public function createAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->uid) {
            @$body['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAICoachTaskSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/startSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 学员开启对练会话.
     *
     * @param request - CreateAICoachTaskSessionRequest
     *
     * @returns CreateAICoachTaskSessionResponse
     *
     * @param CreateAICoachTaskSessionRequest $request
     *
     * @return CreateAICoachTaskSessionResponse
     */
    public function createAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * CreateAgent.
     *
     * @param request - CreateAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentIconUrl) {
            @$body['agentIconUrl'] = $request->agentIconUrl;
        }

        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->agentScene) {
            @$body['agentScene'] = $request->agentScene;
        }

        if (null !== $request->characterAgeStage) {
            @$body['characterAgeStage'] = $request->characterAgeStage;
        }

        if (null !== $request->characterGender) {
            @$body['characterGender'] = $request->characterGender;
        }

        if (null !== $request->characterName) {
            @$body['characterName'] = $request->characterName;
        }

        if (null !== $request->extraDescription) {
            @$body['extraDescription'] = $request->extraDescription;
        }

        if (null !== $request->industry) {
            @$body['industry'] = $request->industry;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgent',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/agent/createAgent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateAgent.
     *
     * @param request - CreateAgentRequest
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     *
     * @return CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建照片数字人.
     *
     * @param request - CreateAnchorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnchorResponse
     *
     * @param CreateAnchorRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAnchorResponse
     */
    public function createAnchorWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->anchorCategory) {
            @$body['anchorCategory'] = $request->anchorCategory;
        }

        if (null !== $request->anchorMaterialName) {
            @$body['anchorMaterialName'] = $request->anchorMaterialName;
        }

        if (null !== $request->coverUrl) {
            @$body['coverUrl'] = $request->coverUrl;
        }

        if (null !== $request->digitalHumanType) {
            @$body['digitalHumanType'] = $request->digitalHumanType;
        }

        if (null !== $request->gender) {
            @$body['gender'] = $request->gender;
        }

        if (null !== $request->useScene) {
            @$body['useScene'] = $request->useScene;
        }

        if (null !== $request->videoOssKey) {
            @$body['videoOssKey'] = $request->videoOssKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAnchor',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/anchorOpen/createAnchor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAnchorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建照片数字人.
     *
     * @param request - CreateAnchorRequest
     *
     * @returns CreateAnchorResponse
     *
     * @param CreateAnchorRequest $request
     *
     * @return CreateAnchorResponse
     */
    public function createAnchor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnchorWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建配图生成任务
     *
     * @param request - CreateIllustrationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIllustrationTaskResponse
     *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIllustrationTaskResponse
     */
    public function createIllustrationTaskWithOptions($textId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateIllustrationTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts/' . Url::percentEncode($textId) . '/illustrationTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建配图生成任务
     *
     * @param request - CreateIllustrationTaskRequest
     *
     * @returns CreateIllustrationTaskResponse
     *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request
     *
     * @return CreateIllustrationTaskResponse
     */
    public function createIllustrationTask($textId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIllustrationTaskWithOptions($textId, $request, $headers, $runtime);
    }

    /**
     * 创建个性化文案项目.
     *
     * @param request - CreateIndividuationProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndividuationProjectResponse
     *
     * @param CreateIndividuationProjectRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateIndividuationProjectResponse
     */
    public function createIndividuationProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectInfo) {
            @$body['projectInfo'] = $request->projectInfo;
        }

        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        if (null !== $request->purpose) {
            @$body['purpose'] = $request->purpose;
        }

        if (null !== $request->sceneId) {
            @$body['sceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIndividuationProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/createProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndividuationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建个性化文案项目.
     *
     * @param request - CreateIndividuationProjectRequest
     *
     * @returns CreateIndividuationProjectResponse
     *
     * @param CreateIndividuationProjectRequest $request
     *
     * @return CreateIndividuationProjectResponse
     */
    public function createIndividuationProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndividuationProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建个性化文案任务
     *
     * @param request - CreateIndividuationTextTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndividuationTextTaskResponse
     *
     * @param CreateIndividuationTextTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateIndividuationTextTaskResponse
     */
    public function createIndividuationTextTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->crowdPack) {
            @$body['crowdPack'] = $request->crowdPack;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->taskName) {
            @$body['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIndividuationTextTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/createTextTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndividuationTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建个性化文案任务
     *
     * @param request - CreateIndividuationTextTaskRequest
     *
     * @returns CreateIndividuationTextTaskResponse
     *
     * @param CreateIndividuationTextTaskRequest $request
     *
     * @return CreateIndividuationTextTaskResponse
     */
    public function createIndividuationTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndividuationTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建产品图.
     *
     * @param request - CreateProductImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductImageResponse
     *
     * @param CreateProductImageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateProductImageResponse
     */
    public function createProductImageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backgroundDescription) {
            @$body['backgroundDescription'] = $request->backgroundDescription;
        }

        if (null !== $request->backgroundPriority) {
            @$body['backgroundPriority'] = $request->backgroundPriority;
        }

        if (null !== $request->backgroundUrl) {
            @$body['backgroundUrl'] = $request->backgroundUrl;
        }

        if (null !== $request->highlightText) {
            @$body['highlightText'] = $request->highlightText;
        }

        if (null !== $request->imageCount) {
            @$body['imageCount'] = $request->imageCount;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->subTitle) {
            @$body['subTitle'] = $request->subTitle;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProductImage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/images/products',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProductImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建产品图.
     *
     * @param request - CreateProductImageRequest
     *
     * @returns CreateProductImageResponse
     *
     * @param CreateProductImageRequest $request
     *
     * @return CreateProductImageResponse
     */
    public function createProductImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductImageWithOptions($request, $headers, $runtime);
    }

    /**
     * 写实人像创作.
     *
     * @param request - CreateRealisticPortraitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRealisticPortraitResponse
     *
     * @param CreateRealisticPortraitRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRealisticPortraitResponse
     */
    public function createRealisticPortraitWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ages) {
            @$body['ages'] = $request->ages;
        }

        if (null !== $request->cloth) {
            @$body['cloth'] = $request->cloth;
        }

        if (null !== $request->color) {
            @$body['color'] = $request->color;
        }

        if (null !== $request->custom) {
            @$body['custom'] = $request->custom;
        }

        if (null !== $request->face) {
            @$body['face'] = $request->face;
        }

        if (null !== $request->figure) {
            @$body['figure'] = $request->figure;
        }

        if (null !== $request->gender) {
            @$body['gender'] = $request->gender;
        }

        if (null !== $request->hairColor) {
            @$body['hairColor'] = $request->hairColor;
        }

        if (null !== $request->hairstyle) {
            @$body['hairstyle'] = $request->hairstyle;
        }

        if (null !== $request->height) {
            @$body['height'] = $request->height;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->numbers) {
            @$body['numbers'] = $request->numbers;
        }

        if (null !== $request->ratio) {
            @$body['ratio'] = $request->ratio;
        }

        if (null !== $request->width) {
            @$body['width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRealisticPortrait',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/images/portrait/realistic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRealisticPortraitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 写实人像创作.
     *
     * @param request - CreateRealisticPortraitRequest
     *
     * @returns CreateRealisticPortraitResponse
     *
     * @param CreateRealisticPortraitRequest $request
     *
     * @return CreateRealisticPortraitResponse
     */
    public function createRealisticPortrait($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRealisticPortraitWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建文案生成任务
     *
     * @param request - CreateTextTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTextTaskResponse
     *
     * @param CreateTextTaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTextTaskResponse
     */
    public function createTextTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTextTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/textTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建文案生成任务
     *
     * @param request - CreateTextTaskRequest
     *
     * @returns CreateTextTaskResponse
     *
     * @param CreateTextTaskRequest $request
     *
     * @return CreateTextTaskResponse
     */
    public function createTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交声音复刻任务
     *
     * @param request - CreateTrainTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrainTaskResponse
     *
     * @param CreateTrainTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTrainTaskResponse
     */
    public function createTrainTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunMainId) {
            @$body['aliyunMainId'] = $request->aliyunMainId;
        }

        if (null !== $request->resSpecType) {
            @$body['resSpecType'] = $request->resSpecType;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        if (null !== $request->useScene) {
            @$body['useScene'] = $request->useScene;
        }

        if (null !== $request->voiceGender) {
            @$body['voiceGender'] = $request->voiceGender;
        }

        if (null !== $request->voiceLanguage) {
            @$body['voiceLanguage'] = $request->voiceLanguage;
        }

        if (null !== $request->voiceName) {
            @$body['voiceName'] = $request->voiceName;
        }

        if (null !== $request->voicePath) {
            @$body['voicePath'] = $request->voicePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrainTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/train/task/createTrainTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交声音复刻任务
     *
     * @param request - CreateTrainTaskRequest
     *
     * @returns CreateTrainTaskResponse
     *
     * @param CreateTrainTaskRequest $request
     *
     * @return CreateTrainTaskResponse
     */
    public function createTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrainTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交视频切片任务
     *
     * @param request - CreateVideoClipTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoClipTaskResponse
     *
     * @param CreateVideoClipTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVideoClipTaskResponse
     */
    public function createVideoClipTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunMainId) {
            @$body['aliyunMainId'] = $request->aliyunMainId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->ossKeys) {
            @$body['ossKeys'] = $request->ossKeys;
        }

        if (null !== $request->requirement) {
            @$body['requirement'] = $request->requirement;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVideoClipTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/video/clip/createVideoClipTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVideoClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交视频切片任务
     *
     * @param request - CreateVideoClipTaskRequest
     *
     * @returns CreateVideoClipTaskResponse
     *
     * @param CreateVideoClipTaskRequest $request
     *
     * @return CreateVideoClipTaskResponse
     */
    public function createVideoClipTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVideoClipTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * DeleteAICoachScript.
     *
     * @param request - DeleteAICoachScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAICoachScriptResponse
     *
     * @param DeleteAICoachScriptRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAICoachScriptResponse
     */
    public function deleteAICoachScriptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scriptId) {
            @$body['scriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAICoachScript',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/deleteAICoachScript',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAICoachScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteAICoachScript.
     *
     * @param request - DeleteAICoachScriptRequest
     *
     * @returns DeleteAICoachScriptResponse
     *
     * @param DeleteAICoachScriptRequest $request
     *
     * @return DeleteAICoachScriptResponse
     */
    public function deleteAICoachScript($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAICoachScriptWithOptions($request, $headers, $runtime);
    }

    /**
     * DeleteAgent.
     *
     * @param request - DeleteAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/agent/deleteAgent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteAgent.
     *
     * @param request - DeleteAgentRequest
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除个性化文案项目.
     *
     * @param request - DeleteIndividuationProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndividuationProjectResponse
     *
     * @param DeleteIndividuationProjectRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteIndividuationProjectResponse
     */
    public function deleteIndividuationProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteIndividuationProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/deleteProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndividuationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除个性化文案项目.
     *
     * @param request - DeleteIndividuationProjectRequest
     *
     * @returns DeleteIndividuationProjectResponse
     *
     * @param DeleteIndividuationProjectRequest $request
     *
     * @return DeleteIndividuationProjectResponse
     */
    public function deleteIndividuationProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndividuationProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除个性化文案.
     *
     * @param request - DeleteIndividuationTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndividuationTextResponse
     *
     * @param DeleteIndividuationTextRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIndividuationTextResponse
     */
    public function deleteIndividuationTextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->textIdList) {
            @$body['textIdList'] = $request->textIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteIndividuationText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/deleteText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndividuationTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除个性化文案.
     *
     * @param request - DeleteIndividuationTextRequest
     *
     * @returns DeleteIndividuationTextResponse
     *
     * @param DeleteIndividuationTextRequest $request
     *
     * @return DeleteIndividuationTextResponse
     */
    public function deleteIndividuationText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndividuationTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询文档信息与状态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocumentResponse
     *
     * @param string         $knowledgeBaseId
     * @param string         $documentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDocumentResponse
     */
    public function describeDocumentWithOptions($knowledgeBaseId, $documentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeDocument',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/knowledge-base/' . Url::percentEncode($knowledgeBaseId) . '/documents/' . Url::percentEncode($documentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文档信息与状态
     *
     * @returns DescribeDocumentResponse
     *
     * @param string $knowledgeBaseId
     * @param string $documentId
     *
     * @return DescribeDocumentResponse
     */
    public function describeDocument($knowledgeBaseId, $documentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDocumentWithOptions($knowledgeBaseId, $documentId, $headers, $runtime);
    }

    /**
     * 学员完成会话.
     *
     * @param request - FinishAICoachTaskSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishAICoachTaskSessionResponse
     *
     * @param FinishAICoachTaskSessionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return FinishAICoachTaskSessionResponse
     */
    public function finishAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$body['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FinishAICoachTaskSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/finishSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FinishAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 学员完成会话.
     *
     * @param request - FinishAICoachTaskSessionRequest
     *
     * @returns FinishAICoachTaskSessionResponse
     *
     * @param FinishAICoachTaskSessionRequest $request
     *
     * @return FinishAICoachTaskSessionResponse
     */
    public function finishAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取考核点详情.
     *
     * @param request - GetAICoachAssessmentPointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachAssessmentPointResponse
     *
     * @param GetAICoachAssessmentPointRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAICoachAssessmentPointResponse
     */
    public function getAICoachAssessmentPointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pointId) {
            @$query['pointId'] = $request->pointId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachAssessmentPoint',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/getAssessmentPoint',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachAssessmentPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取考核点详情.
     *
     * @param request - GetAICoachAssessmentPointRequest
     *
     * @returns GetAICoachAssessmentPointResponse
     *
     * @param GetAICoachAssessmentPointRequest $request
     *
     * @return GetAICoachAssessmentPointResponse
     */
    public function getAICoachAssessmentPoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachAssessmentPointWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询作弊检测详情.
     *
     * @param request - GetAICoachCheatDetectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachCheatDetectionResponse
     *
     * @param GetAICoachCheatDetectionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAICoachCheatDetectionResponse
     */
    public function getAICoachCheatDetectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachCheatDetection',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/getCheatDetection',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachCheatDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询作弊检测详情.
     *
     * @param request - GetAICoachCheatDetectionRequest
     *
     * @returns GetAICoachCheatDetectionResponse
     *
     * @param GetAICoachCheatDetectionRequest $request
     *
     * @return GetAICoachCheatDetectionResponse
     */
    public function getAICoachCheatDetection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachCheatDetectionWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询剧本详情.
     *
     * @param request - GetAICoachScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachScriptResponse
     *
     * @param GetAICoachScriptRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAICoachScriptResponse
     */
    public function getAICoachScriptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scriptRecordId) {
            @$query['scriptRecordId'] = $request->scriptRecordId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachScript',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/getScript',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询剧本详情.
     *
     * @param request - GetAICoachScriptRequest
     *
     * @returns GetAICoachScriptResponse
     *
     * @param GetAICoachScriptRequest $request
     *
     * @return GetAICoachScriptResponse
     */
    public function getAICoachScript($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachScriptWithOptions($request, $headers, $runtime);
    }

    /**
     * 学员查询会话历史.
     *
     * @param request - GetAICoachTaskSessionHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachTaskSessionHistoryResponse
     *
     * @param GetAICoachTaskSessionHistoryRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAICoachTaskSessionHistoryResponse
     */
    public function getAICoachTaskSessionHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$query['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachTaskSessionHistory',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/querySessionHistory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachTaskSessionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 学员查询会话历史.
     *
     * @param request - GetAICoachTaskSessionHistoryRequest
     *
     * @returns GetAICoachTaskSessionHistoryResponse
     *
     * @param GetAICoachTaskSessionHistoryRequest $request
     *
     * @return GetAICoachTaskSessionHistoryResponse
     */
    public function getAICoachTaskSessionHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachTaskSessionHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 学员查询会话评测报告.
     *
     * @param request - GetAICoachTaskSessionReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachTaskSessionReportResponse
     *
     * @param GetAICoachTaskSessionReportRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAICoachTaskSessionReportResponse
     */
    public function getAICoachTaskSessionReportWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->uid) {
            @$query['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachTaskSessionReport',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/queryTaskSessionReport',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachTaskSessionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 学员查询会话评测报告.
     *
     * @param request - GetAICoachTaskSessionReportRequest
     *
     * @returns GetAICoachTaskSessionReportResponse
     *
     * @param GetAICoachTaskSessionReportRequest $request
     *
     * @return GetAICoachTaskSessionReportResponse
     */
    public function getAICoachTaskSessionReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachTaskSessionReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取对练会话资源使用情况.
     *
     * @param request - GetAICoachTaskSessionResourceUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAICoachTaskSessionResourceUsageResponse
     *
     * @param GetAICoachTaskSessionResourceUsageRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return GetAICoachTaskSessionResourceUsageResponse
     */
    public function getAICoachTaskSessionResourceUsageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAICoachTaskSessionResourceUsage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/getSessionResourceUsage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAICoachTaskSessionResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取对练会话资源使用情况.
     *
     * @param request - GetAICoachTaskSessionResourceUsageRequest
     *
     * @returns GetAICoachTaskSessionResourceUsageResponse
     *
     * @param GetAICoachTaskSessionResourceUsageRequest $request
     *
     * @return GetAICoachTaskSessionResourceUsageResponse
     */
    public function getAICoachTaskSessionResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachTaskSessionResourceUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询配图.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIllustrationResponse
     *
     * @param string         $textId
     * @param string         $illustrationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIllustrationResponse
     */
    public function getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIllustration',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts/' . Url::percentEncode($textId) . '/illustrations/' . Url::percentEncode($illustrationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIllustrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询配图.
     *
     * @returns GetIllustrationResponse
     *
     * @param string $textId
     * @param string $illustrationId
     *
     * @return GetIllustrationResponse
     */
    public function getIllustration($textId, $illustrationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime);
    }

    /**
     * 查询配图任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIllustrationTaskResponse
     *
     * @param string         $textId
     * @param string         $illustrationTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIllustrationTaskResponse
     */
    public function getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIllustrationTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts/' . Url::percentEncode($textId) . '/illustrationTasks/' . Url::percentEncode($illustrationTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询配图任务
     *
     * @returns GetIllustrationTaskResponse
     *
     * @param string $textId
     * @param string $illustrationTaskId
     *
     * @return GetIllustrationTaskResponse
     */
    public function getIllustrationTask($textId, $illustrationTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime);
    }

    /**
     * 获取图片上传oss token.
     *
     * @param request - GetOssUploadTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssUploadTokenResponse
     *
     * @param GetOssUploadTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetOssUploadTokenResponse
     */
    public function getOssUploadTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['fileType'] = $request->fileType;
        }

        if (null !== $request->uploadType) {
            @$query['uploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssUploadToken',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/uploadToken',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取图片上传oss token.
     *
     * @param request - GetOssUploadTokenRequest
     *
     * @returns GetOssUploadTokenResponse
     *
     * @param GetOssUploadTokenRequest $request
     *
     * @return GetOssUploadTokenResponse
     */
    public function getOssUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOssUploadTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据人合成信息.
     *
     * @param request - GetProjectTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectTaskResponse
     *
     * @param GetProjectTaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectTaskResponse
     */
    public function getProjectTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->idempotentId) {
            @$query['IdempotentId'] = $request->idempotentId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProjectTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/project/getProjectTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据人合成信息.
     *
     * @param request - GetProjectTaskRequest
     *
     * @returns GetProjectTaskResponse
     *
     * @param GetProjectTaskRequest $request
     *
     * @return GetProjectTaskResponse
     */
    public function getProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询文案.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextResponse
     *
     * @param string         $textId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTextResponse
     */
    public function getTextWithOptions($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts/' . Url::percentEncode($textId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文案.
     *
     * @returns GetTextResponse
     *
     * @param string $textId
     *
     * @return GetTextResponse
     */
    public function getText($textId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextWithOptions($textId, $headers, $runtime);
    }

    /**
     * 查询文案任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextTaskResponse
     *
     * @param string         $textTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTextTaskResponse
     */
    public function getTextTaskWithOptions($textTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTextTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/textTasks/' . Url::percentEncode($textTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文案任务
     *
     * @returns GetTextTaskResponse
     *
     * @param string $textTaskId
     *
     * @return GetTextTaskResponse
     */
    public function getTextTask($textTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextTaskWithOptions($textTaskId, $headers, $runtime);
    }

    /**
     * 查询表单配置.
     *
     * @param request - GetTextTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextTemplateResponse
     *
     * @param GetTextTemplateRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetTextTemplateResponse
     */
    public function getTextTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTextTemplate',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts/commands/getTextTemplate',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTextTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询表单配置.
     *
     * @param request - GetTextTemplateRequest
     *
     * @returns GetTextTemplateResponse
     *
     * @param GetTextTemplateRequest $request
     *
     * @return GetTextTemplateResponse
     */
    public function getTextTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 营销文案互动问答.
     *
     * @param request - InteractTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InteractTextResponse
     *
     * @param InteractTextRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InteractTextResponse
     */
    public function interactTextWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InteractText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/stream/interactText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield InteractTextResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 营销文案互动问答.
     *
     * @param request - InteractTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InteractTextResponse
     *
     * @param InteractTextRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InteractTextResponse
     */
    public function interactTextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InteractText',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/stream/interactText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InteractTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 营销文案互动问答.
     *
     * @param request - InteractTextRequest
     *
     * @returns InteractTextResponse
     *
     * @param InteractTextRequest $request
     *
     * @return InteractTextResponse
     */
    public function interactText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interactTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询剧本列表.
     *
     * @param request - ListAICoachScriptPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAICoachScriptPageResponse
     *
     * @param ListAICoachScriptPageRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAICoachScriptPageResponse
     */
    public function listAICoachScriptPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAICoachScriptPage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/pageScript',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAICoachScriptPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询剧本列表.
     *
     * @param request - ListAICoachScriptPageRequest
     *
     * @returns ListAICoachScriptPageResponse
     *
     * @param ListAICoachScriptPageRequest $request
     *
     * @return ListAICoachScriptPageResponse
     */
    public function listAICoachScriptPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAICoachScriptPageWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询任务列表.
     *
     * @param request - ListAICoachTaskPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAICoachTaskPageResponse
     *
     * @param ListAICoachTaskPageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAICoachTaskPageResponse
     */
    public function listAICoachTaskPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->studentId) {
            @$query['studentId'] = $request->studentId;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAICoachTaskPage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/listTaskPage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAICoachTaskPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务列表.
     *
     * @param request - ListAICoachTaskPageRequest
     *
     * @returns ListAICoachTaskPageResponse
     *
     * @param ListAICoachTaskPageRequest $request
     *
     * @return ListAICoachTaskPageResponse
     */
    public function listAICoachTaskPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAICoachTaskPageWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询智能体.
     *
     * @param request - ListAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agentId'] = $request->agentId;
        }

        if (null !== $request->agentScene) {
            @$query['agentScene'] = $request->agentScene;
        }

        if (null !== $request->owner) {
            @$query['owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
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
            'action' => 'ListAgents',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/agent/listAgents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询智能体.
     *
     * @param request - ListAgentsRequest
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     *
     * @return ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数字人模特列表.
     *
     * @param request - ListAnchorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnchorResponse
     *
     * @param ListAnchorRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAnchorResponse
     */
    public function listAnchorWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anchorCategory) {
            @$query['anchorCategory'] = $request->anchorCategory;
        }

        if (null !== $request->anchorId) {
            @$query['anchorId'] = $request->anchorId;
        }

        if (null !== $request->anchorType) {
            @$query['anchorType'] = $request->anchorType;
        }

        if (null !== $request->coverRate) {
            @$query['coverRate'] = $request->coverRate;
        }

        if (null !== $request->digitalHumanType) {
            @$query['digitalHumanType'] = $request->digitalHumanType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resSpecType) {
            @$query['resSpecType'] = $request->resSpecType;
        }

        if (null !== $request->useScene) {
            @$query['useScene'] = $request->useScene;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnchor',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/anchorOpen/listAnchor',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnchorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数字人模特列表.
     *
     * @param request - ListAnchorRequest
     *
     * @returns ListAnchorResponse
     *
     * @param ListAnchorRequest $request
     *
     * @return ListAnchorResponse
     */
    public function listAnchor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnchorWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询数字人项目启动结果.
     *
     * @param tmpReq - ListAvatarProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvatarProjectResponse
     *
     * @param ListAvatarProjectRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAvatarProjectResponse
     */
    public function listAvatarProjectWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAvatarProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->projectIdList) {
            $request->projectIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->projectIdList, 'projectIdList', 'simple');
        }

        $query = [];
        if (null !== $request->projectIdListShrink) {
            @$query['projectIdList'] = $request->projectIdListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvatarProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/listAvatarProject',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询数字人项目启动结果.
     *
     * @param request - ListAvatarProjectRequest
     *
     * @returns ListAvatarProjectResponse
     *
     * @param ListAvatarProjectRequest $request
     *
     * @return ListAvatarProjectResponse
     */
    public function listAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询知识库.
     *
     * @param request - ListKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBaseResponse
     *
     * @param ListKnowledgeBaseRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListKnowledgeBaseResponse
     */
    public function listKnowledgeBaseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->knowledgeBaseId) {
            @$query['knowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBase',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/knowledge-base',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询知识库.
     *
     * @param request - ListKnowledgeBaseRequest
     *
     * @returns ListKnowledgeBaseResponse
     *
     * @param ListKnowledgeBaseRequest $request
     *
     * @return ListKnowledgeBaseResponse
     */
    public function listKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBaseWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询文案主题列表.
     *
     * @param request - ListTextThemesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextThemesResponse
     *
     * @param ListTextThemesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListTextThemesResponse
     */
    public function listTextThemesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTextThemes',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/textThemes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextThemesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文案主题列表.
     *
     * @param request - ListTextThemesRequest
     *
     * @returns ListTextThemesResponse
     *
     * @param ListTextThemesRequest $request
     *
     * @return ListTextThemesResponse
     */
    public function listTextThemes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextThemesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举文案.
     *
     * @param request - ListTextsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextsResponse
     *
     * @param ListTextsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTextsResponse
     */
    public function listTextsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->generationSource) {
            @$query['generationSource'] = $request->generationSource;
        }

        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->publishStatus) {
            @$query['publishStatus'] = $request->publishStatus;
        }

        if (null !== $request->textStyleType) {
            @$query['textStyleType'] = $request->textStyleType;
        }

        if (null !== $request->textTheme) {
            @$query['textTheme'] = $request->textTheme;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTexts',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/texts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举文案.
     *
     * @param request - ListTextsRequest
     *
     * @returns ListTextsResponse
     *
     * @param ListTextsRequest $request
     *
     * @return ListTextsResponse
     */
    public function listTexts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取声音模版列表.
     *
     * @param request - ListVoiceModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoiceModelsResponse
     *
     * @param ListVoiceModelsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListVoiceModelsResponse
     */
    public function listVoiceModelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resSpecType) {
            @$query['resSpecType'] = $request->resSpecType;
        }

        if (null !== $request->useScene) {
            @$query['useScene'] = $request->useScene;
        }

        if (null !== $request->voiceLanguage) {
            @$query['voiceLanguage'] = $request->voiceLanguage;
        }

        if (null !== $request->voiceType) {
            @$query['voiceType'] = $request->voiceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVoiceModels',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/voiceOpen/listVoiceModels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVoiceModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取声音模版列表.
     *
     * @param request - ListVoiceModelsRequest
     *
     * @returns ListVoiceModelsResponse
     *
     * @param ListVoiceModelsRequest $request
     *
     * @return ListVoiceModelsResponse
     */
    public function listVoiceModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVoiceModelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 下线剧本.
     *
     * @param request - OfflineAICoachScriptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineAICoachScriptResponse
     *
     * @param OfflineAICoachScriptRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return OfflineAICoachScriptResponse
     */
    public function offlineAICoachScriptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scriptId) {
            @$body['scriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OfflineAICoachScript',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/aicoach/offlineAICoachScript',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OfflineAICoachScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下线剧本.
     *
     * @param request - OfflineAICoachScriptRequest
     *
     * @returns OfflineAICoachScriptResponse
     *
     * @param OfflineAICoachScriptRequest $request
     *
     * @return OfflineAICoachScriptResponse
     */
    public function offlineAICoachScript($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineAICoachScriptWithOptions($request, $headers, $runtime);
    }

    /**
     * 操作实时数字人项目.
     *
     * @param request - OperateAvatarProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAvatarProjectResponse
     *
     * @param OperateAvatarProjectRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return OperateAvatarProjectResponse
     */
    public function operateAvatarProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operateType) {
            @$body['operateType'] = $request->operateType;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->resChannelNumber) {
            @$body['resChannelNumber'] = $request->resChannelNumber;
        }

        if (null !== $request->resType) {
            @$body['resType'] = $request->resType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateAvatarProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/operateProjectAvatar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OperateAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 操作实时数字人项目.
     *
     * @param request - OperateAvatarProjectRequest
     *
     * @returns OperateAvatarProjectResponse
     *
     * @param OperateAvatarProjectRequest $request
     *
     * @return OperateAvatarProjectResponse
     */
    public function operateAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询数字人项目信息.
     *
     * @param request - QueryAvatarProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvatarProjectResponse
     *
     * @param QueryAvatarProjectRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAvatarProjectResponse
     */
    public function queryAvatarProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAvatarProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/queryAvatarProject',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数字人项目信息.
     *
     * @param request - QueryAvatarProjectRequest
     *
     * @returns QueryAvatarProjectResponse
     *
     * @param QueryAvatarProjectRequest $request
     *
     * @return QueryAvatarProjectResponse
     */
    public function queryAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 查找资源.
     *
     * @param request - QueryAvatarResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvatarResourceResponse
     *
     * @param QueryAvatarResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryAvatarResourceResponse
     */
    public function queryAvatarResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->idempotentId) {
            @$query['idempotentId'] = $request->idempotentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAvatarResource',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/queryResource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryAvatarResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查找资源.
     *
     * @param request - QueryAvatarResourceRequest
     *
     * @returns QueryAvatarResourceResponse
     *
     * @param QueryAvatarResourceRequest $request
     *
     * @return QueryAvatarResourceResponse
     */
    public function queryAvatarResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAvatarResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询图片转视频任务
     *
     * @param request - QueryImageToVideoTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryImageToVideoTaskResponse
     *
     * @param QueryImageToVideoTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryImageToVideoTaskResponse
     */
    public function queryImageToVideoTaskWithOptions($request, $headers, $runtime)
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
            'action' => 'QueryImageToVideoTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/video/imageToVideo/task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryImageToVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询图片转视频任务
     *
     * @param request - QueryImageToVideoTaskRequest
     *
     * @returns QueryImageToVideoTaskResponse
     *
     * @param QueryImageToVideoTaskRequest $request
     *
     * @return QueryImageToVideoTaskResponse
     */
    public function queryImageToVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryImageToVideoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询个性化文案任务
     *
     * @param request - QueryIndividuationTextTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIndividuationTextTaskResponse
     *
     * @param QueryIndividuationTextTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryIndividuationTextTaskResponse
     */
    public function queryIndividuationTextTaskWithOptions($request, $headers, $runtime)
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
            'action' => 'QueryIndividuationTextTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/individuationText/queryTextTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryIndividuationTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询个性化文案任务
     *
     * @param request - QueryIndividuationTextTaskRequest
     *
     * @returns QueryIndividuationTextTaskResponse
     *
     * @param QueryIndividuationTextTaskRequest $request
     *
     * @return QueryIndividuationTextTaskResponse
     */
    public function queryIndividuationTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIndividuationTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会话信息.
     *
     * @param tmpReq - QuerySessionInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionInfoResponse
     *
     * @param QuerySessionInfoRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySessionInfoResponse
     */
    public function querySessionInfoWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySessionInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'statusList', 'simple');
        }

        $query = [];
        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->statusListShrink) {
            @$query['statusList'] = $request->statusListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySessionInfo',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/querySessionInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QuerySessionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询会话信息.
     *
     * @param request - QuerySessionInfoRequest
     *
     * @returns QuerySessionInfoResponse
     *
     * @param QuerySessionInfoRequest $request
     *
     * @return QuerySessionInfoResponse
     */
    public function querySessionInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySessionInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 流式输出文案.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTextStreamResponse
     *
     * @param string         $textId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryTextStreamResponse
     */
    public function queryTextStreamWithSSE($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryTextStream',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/stream/queryTextStream/' . Url::percentEncode($textId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield QueryTextStreamResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 流式输出文案.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTextStreamResponse
     *
     * @param string         $textId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryTextStreamResponse
     */
    public function queryTextStreamWithOptions($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryTextStream',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/stream/queryTextStream/' . Url::percentEncode($textId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryTextStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 流式输出文案.
     *
     * @returns QueryTextStreamResponse
     *
     * @param string $textId
     *
     * @return QueryTextStreamResponse
     */
    public function queryTextStream($textId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTextStreamWithOptions($textId, $headers, $runtime);
    }

    /**
     * ReleaseAgent.
     *
     * @param request - ReleaseAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseAgentResponse
     *
     * @param ReleaseAgentRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ReleaseAgentResponse
     */
    public function releaseAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseAgent',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/agent/releaseAgent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ReleaseAgent.
     *
     * @param request - ReleaseAgentRequest
     *
     * @returns ReleaseAgentResponse
     *
     * @param ReleaseAgentRequest $request
     *
     * @return ReleaseAgentResponse
     */
    public function releaseAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 保存实时数字人项目.
     *
     * @param request - SaveAvatarProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAvatarProjectResponse
     *
     * @param SaveAvatarProjectRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SaveAvatarProjectResponse
     */
    public function saveAvatarProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->bitRate) {
            @$body['bitRate'] = $request->bitRate;
        }

        if (null !== $request->frameRate) {
            @$body['frameRate'] = $request->frameRate;
        }

        if (null !== $request->frames) {
            @$body['frames'] = $request->frames;
        }

        if (null !== $request->operateType) {
            @$body['operateType'] = $request->operateType;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        if (null !== $request->resSpecType) {
            @$body['resSpecType'] = $request->resSpecType;
        }

        if (null !== $request->resolution) {
            @$body['resolution'] = $request->resolution;
        }

        if (null !== $request->scaleType) {
            @$body['scaleType'] = $request->scaleType;
        }

        if (null !== $request->scriptModelTag) {
            @$body['scriptModelTag'] = $request->scriptModelTag;
        }

        if (null !== $request->synchronizedDisplay) {
            @$body['synchronizedDisplay'] = $request->synchronizedDisplay;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveAvatarProject',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/saveAvatarProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SaveAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存实时数字人项目.
     *
     * @param request - SaveAvatarProjectRequest
     *
     * @returns SaveAvatarProjectResponse
     *
     * @param SaveAvatarProjectRequest $request
     *
     * @return SaveAvatarProjectResponse
     */
    public function saveAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询图片任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectImageTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SelectImageTaskResponse
     */
    public function selectImageTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SelectImageTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/images/portrait/select/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询图片任务
     *
     * @returns SelectImageTaskResponse
     *
     * @param string $taskId
     *
     * @return SelectImageTaskResponse
     */
    public function selectImageTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectImageTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * 查询离线数字人剩余资源.
     *
     * @param request - SelectResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectResourceResponse
     *
     * @param SelectResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SelectResourceResponse
     */
    public function selectResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->idempotentId) {
            @$query['idempotentId'] = $request->idempotentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SelectResource',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/project/commands/overview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询离线数字人剩余资源.
     *
     * @param request - SelectResourceRequest
     *
     * @returns SelectResourceResponse
     *
     * @param SelectResourceRequest $request
     *
     * @return SelectResourceResponse
     */
    public function selectResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送sdk消息.
     *
     * @param request - SendSdkMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSdkMessageResponse
     *
     * @param SendSdkMessageRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SendSdkMessageResponse
     */
    public function sendSdkMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->header) {
            @$body['header'] = $request->header;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->operationName) {
            @$body['operationName'] = $request->operationName;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendSdkMessage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/sdk/sendMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendSdkMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送sdk消息.
     *
     * @param request - SendSdkMessageRequest
     *
     * @returns SendSdkMessageResponse
     *
     * @param SendSdkMessageRequest $request
     *
     * @return SendSdkMessageResponse
     */
    public function sendSdkMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendSdkMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送sdk流式消息.
     *
     * @param request - SendSdkStreamMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSdkStreamMessageResponse
     *
     * @param SendSdkStreamMessageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SendSdkStreamMessageResponse
     */
    public function sendSdkStreamMessageWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->header) {
            @$body['header'] = $request->header;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->operationName) {
            @$body['operationName'] = $request->operationName;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendSdkStreamMessage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/sdk/stream/sendMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield SendSdkStreamMessageResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 发送sdk流式消息.
     *
     * @param request - SendSdkStreamMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSdkStreamMessageResponse
     *
     * @param SendSdkStreamMessageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SendSdkStreamMessageResponse
     */
    public function sendSdkStreamMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->header) {
            @$body['header'] = $request->header;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->operationName) {
            @$body['operationName'] = $request->operationName;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendSdkStreamMessage',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/sdk/stream/sendMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendSdkStreamMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送sdk流式消息.
     *
     * @param request - SendSdkStreamMessageRequest
     *
     * @returns SendSdkStreamMessageResponse
     *
     * @param SendSdkStreamMessageRequest $request
     *
     * @return SendSdkStreamMessageResponse
     */
    public function sendSdkStreamMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendSdkStreamMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送文本消息.
     *
     * @param request - SendTextMsgRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendTextMsgResponse
     *
     * @param SendTextMsgRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendTextMsgResponse
     */
    public function sendTextMsgWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendTextMsg',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/sendTextMsg',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendTextMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送文本消息.
     *
     * @param request - SendTextMsgRequest
     *
     * @returns SendTextMsgResponse
     *
     * @param SendTextMsgRequest $request
     *
     * @return SendTextMsgResponse
     */
    public function sendTextMsg($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendTextMsgWithOptions($request, $headers, $runtime);
    }

    /**
     * 启动会话.
     *
     * @param request - StartAvatarSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAvatarSessionResponse
     *
     * @param StartAvatarSessionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StartAvatarSessionResponse
     */
    public function startAvatarSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelToken) {
            @$body['channelToken'] = $request->channelToken;
        }

        if (null !== $request->customPushUrl) {
            @$body['customPushUrl'] = $request->customPushUrl;
        }

        if (null !== $request->customUserId) {
            @$body['customUserId'] = $request->customUserId;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAvatarSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/startAvatarSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动会话.
     *
     * @param request - StartAvatarSessionRequest
     *
     * @returns StartAvatarSessionResponse
     *
     * @param StartAvatarSessionRequest $request
     *
     * @return StartAvatarSessionResponse
     */
    public function startAvatarSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAvatarSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 停止会话.
     *
     * @param request - StopAvatarSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAvatarSessionResponse
     *
     * @param StopAvatarSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return StopAvatarSessionResponse
     */
    public function stopAvatarSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopAvatarSession',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/avatar/project/stopAvatarSession',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止会话.
     *
     * @param request - StopAvatarSessionRequest
     *
     * @returns StopAvatarSessionResponse
     *
     * @param StopAvatarSessionRequest $request
     *
     * @return StopAvatarSessionResponse
     */
    public function stopAvatarSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAvatarSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 视频合成任务停止.
     *
     * @param request - StopProjectTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopProjectTaskResponse
     *
     * @param StopProjectTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopProjectTaskResponse
     */
    public function stopProjectTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopProjectTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/project/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频合成任务停止.
     *
     * @param request - StopProjectTaskRequest
     *
     * @returns StopProjectTaskResponse
     *
     * @param StopProjectTaskRequest $request
     *
     * @return StopProjectTaskResponse
     */
    public function stopProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交图片转视频任务
     *
     * @param request - SubmitImageToVideoTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImageToVideoTaskResponse
     *
     * @param SubmitImageToVideoTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitImageToVideoTaskResponse
     */
    public function submitImageToVideoTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->posPrompt) {
            @$body['posPrompt'] = $request->posPrompt;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitImageToVideoTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/video/imageToVideo/task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitImageToVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交图片转视频任务
     *
     * @param request - SubmitImageToVideoTaskRequest
     *
     * @returns SubmitImageToVideoTaskResponse
     *
     * @param SubmitImageToVideoTaskRequest $request
     *
     * @return SubmitImageToVideoTaskResponse
     */
    public function submitImageToVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitImageToVideoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交离线数字人合成任务
     *
     * @param request - SubmitProjectTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitProjectTaskResponse
     *
     * @param SubmitProjectTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitProjectTaskResponse
     */
    public function submitProjectTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->frames) {
            @$body['frames'] = $request->frames;
        }

        if (null !== $request->scaleType) {
            @$body['scaleType'] = $request->scaleType;
        }

        if (null !== $request->subtitleTag) {
            @$body['subtitleTag'] = $request->subtitleTag;
        }

        if (null !== $request->transparentBackground) {
            @$body['transparentBackground'] = $request->transparentBackground;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitProjectTask',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/digitalHuman/project/submitProjectTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交离线数字人合成任务
     *
     * @param request - SubmitProjectTaskRequest
     *
     * @returns SubmitProjectTaskResponse
     *
     * @param SubmitProjectTaskRequest $request
     *
     * @return SubmitProjectTaskResponse
     */
    public function submitProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 人像风格变化.
     *
     * @param request - TransferPortraitStyleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferPortraitStyleResponse
     *
     * @param TransferPortraitStyleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TransferPortraitStyleResponse
     */
    public function transferPortraitStyleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->height) {
            @$body['height'] = $request->height;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->numbers) {
            @$body['numbers'] = $request->numbers;
        }

        if (null !== $request->redrawAmplitude) {
            @$body['redrawAmplitude'] = $request->redrawAmplitude;
        }

        if (null !== $request->style) {
            @$body['style'] = $request->style;
        }

        if (null !== $request->width) {
            @$body['width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TransferPortraitStyle',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/images/portrait/transferPortraitStyle',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransferPortraitStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人像风格变化.
     *
     * @param request - TransferPortraitStyleRequest
     *
     * @returns TransferPortraitStyleResponse
     *
     * @param TransferPortraitStyleRequest $request
     *
     * @return TransferPortraitStyleResponse
     */
    public function transferPortraitStyle($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferPortraitStyleWithOptions($request, $headers, $runtime);
    }

    /**
     * UpdateAgent.
     *
     * @param request - UpdateAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentIconUrl) {
            @$body['agentIconUrl'] = $request->agentIconUrl;
        }

        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->characterAgeStage) {
            @$body['characterAgeStage'] = $request->characterAgeStage;
        }

        if (null !== $request->characterGender) {
            @$body['characterGender'] = $request->characterGender;
        }

        if (null !== $request->characterName) {
            @$body['characterName'] = $request->characterName;
        }

        if (null !== $request->extraDescription) {
            @$body['extraDescription'] = $request->extraDescription;
        }

        if (null !== $request->industry) {
            @$body['industry'] = $request->industry;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgent',
            'version' => '2024-03-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yic/yic-console/openService/v1/agent/updateAgent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateAgent.
     *
     * @param request - UpdateAgentRequest
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentWithOptions($request, $headers, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateAccessWarrantRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateAccessWarrantResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherChineseCompositionTutoringWorkflowRunHeaders;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishParaphraseChatMessageRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherEnglishParaphraseChatMessageResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDifficultyRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDifficultyResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRefineByContextRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRefineByContextResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantStartConversationRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantStartConversationResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantTranslateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantTranslateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherSyncDialogueSuggestionRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherSyncDialogueSuggestionResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetTextbookAssistantTokenRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\GetTextbookAssistantTokenResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddInferenceJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryImageAssetResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainJobListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryModelTrainStatusResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryApplicationAccessIdRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryApplicationAccessIdResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryPurchasedServiceResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\UpdateProjectResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AiContent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aicontent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 拓展练问答对生成.
     *
     * @param request - AITeacherExpansionPracticeTaskGenerateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AITeacherExpansionPracticeTaskGenerateResponse
     *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->keySentences) {
            @$body['keySentences'] = $request->keySentences;
        }

        if (null !== $request->keyWords) {
            @$body['keyWords'] = $request->keyWords;
        }

        if (null !== $request->learningObject) {
            @$body['learningObject'] = $request->learningObject;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        if (null !== $request->textbook) {
            @$body['textbook'] = $request->textbook;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AITeacherExpansionPracticeTaskGenerate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/generateTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AITeacherExpansionPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AITeacherExpansionPracticeTaskGenerateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 拓展练问答对生成.
     *
     * @param request - AITeacherExpansionPracticeTaskGenerateRequest
     *
     * @returns AITeacherExpansionPracticeTaskGenerateResponse
     *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * 同步基础练问答对生成.
     *
     * @param request - AITeacherSyncPracticeTaskGenerateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AITeacherSyncPracticeTaskGenerateResponse
     *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->keySentences) {
            @$body['keySentences'] = $request->keySentences;
        }

        if (null !== $request->keyWords) {
            @$body['keyWords'] = $request->keyWords;
        }

        if (null !== $request->learningObject) {
            @$body['learningObject'] = $request->learningObject;
        }

        if (null !== $request->textContent) {
            @$body['textContent'] = $request->textContent;
        }

        if (null !== $request->textbook) {
            @$body['textbook'] = $request->textbook;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AITeacherSyncPracticeTaskGenerate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/generateTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AITeacherSyncPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AITeacherSyncPracticeTaskGenerateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同步基础练问答对生成.
     *
     * @param request - AITeacherSyncPracticeTaskGenerateRequest
     *
     * @returns AITeacherSyncPracticeTaskGenerateResponse
     *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * 阿里云控制台/列出阿里云控制台上可使用的服务列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'AliyunConsoleOpenApiQueryAliyunConsoleServcieList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/列出阿里云控制台上可使用的服务列表.
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime);
    }

    /**
     * 阿里云控制台/列出阿里云控制台上可使用的服务列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'AliyunConsoleOpenApiQueryAliyunConsoleServiceList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryAliyunConsoleServiceList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/列出阿里云控制台上可使用的服务列表.
     *
     * @returns AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime);
    }

    /**
     * 阿里云控制台/授权凭证创建.
     *
     * @param request - CreateAccessWarrantRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessWarrantResponse
     *
     * @param CreateAccessWarrantRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAccessWarrantResponse
     */
    public function createAccessWarrantWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->requestSign) {
            @$body['requestSign'] = $request->requestSign;
        }

        if (null !== $request->timestamp) {
            @$body['timestamp'] = $request->timestamp;
        }

        if (null !== $request->userClientIp) {
            @$body['userClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        if (null !== $request->warrantAvailable) {
            @$body['warrantAvailable'] = $request->warrantAvailable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAccessWarrant',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/createAccessWarrant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAccessWarrantResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccessWarrantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/授权凭证创建.
     *
     * @param request - CreateAccessWarrantRequest
     *
     * @returns CreateAccessWarrantResponse
     *
     * @param CreateAccessWarrantRequest $request
     *
     * @return CreateAccessWarrantResponse
     */
    public function createAccessWarrant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAccessWarrantWithOptions($request, $headers, $runtime);
    }

    /**
     * 阿里云控制台/创建项目.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        if (null !== $request->projectType) {
            @$body['projectType'] = $request->projectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/createProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 中文作文辅导
     *
     * @param request - ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest
     * @param headers - ExecuteAITeacherChineseCompositionTutoringWorkflowRunHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest $request
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunHeaders $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherChineseCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->callerParentId) {
            @$realHeaders['callerParentId'] = json_encode($headers->callerParentId, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        if (null !== $headers->callerType) {
            @$realHeaders['callerType'] = '' . $headers->callerType;
        }

        if (null !== $headers->callerUid) {
            @$realHeaders['callerUid'] = json_encode($headers->callerUid, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        if (null !== $headers->stsTokenCallerUid) {
            @$realHeaders['stsTokenCallerUid'] = json_encode($headers->stsTokenCallerUid, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherChineseCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/chineseCompositionTutoring/workflowRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 中文作文辅导
     *
     * @param request - ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest
     *
     * @returns ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherChineseCompositionTutoringWorkflowRunRequest $request
     *
     * @return ExecuteAITeacherChineseCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherChineseCompositionTutoringWorkflowRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteAITeacherChineseCompositionTutoringWorkflowRunHeaders([]);

        return $this->executeAITeacherChineseCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 英语作文辅导
     *
     * @param request - ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest $request
     * @param string[]                                                     $headers
     * @param RuntimeOptions                                               $runtime
     *
     * @return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherEnglishCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->essayOutline) {
            @$body['essayOutline'] = $request->essayOutline;
        }

        if (null !== $request->essayRequirements) {
            @$body['essayRequirements'] = $request->essayRequirements;
        }

        if (null !== $request->essayTopic) {
            @$body['essayTopic'] = $request->essayTopic;
        }

        if (null !== $request->essayType) {
            @$body['essayType'] = $request->essayType;
        }

        if (null !== $request->essayWordCount) {
            @$body['essayWordCount'] = $request->essayWordCount;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishCompositionTutoringWorkflowRun',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishCompositionTutoring/workflowRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 英语作文辅导
     *
     * @param request - ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest
     *
     * @returns ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     *
     * @param ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest $request
     *
     * @return ExecuteAITeacherEnglishCompositionTutoringWorkflowRunResponse
     */
    public function executeAITeacherEnglishCompositionTutoringWorkflowRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherEnglishCompositionTutoringWorkflowRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 英文释义.
     *
     * @param request - ExecuteAITeacherEnglishParaphraseChatMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherEnglishParaphraseChatMessageResponse
     *
     * @param ExecuteAITeacherEnglishParaphraseChatMessageRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return ExecuteAITeacherEnglishParaphraseChatMessageResponse
     */
    public function executeAITeacherEnglishParaphraseChatMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->questionId) {
            @$body['questionId'] = $request->questionId;
        }

        if (null !== $request->questionInfo) {
            @$body['questionInfo'] = $request->questionInfo;
        }

        if (null !== $request->responseMode) {
            @$body['responseMode'] = $request->responseMode;
        }

        if (null !== $request->userAnswer) {
            @$body['userAnswer'] = $request->userAnswer;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherEnglishParaphraseChatMessage',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/intelligentAgent/englishParaphrase/chatMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherEnglishParaphraseChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherEnglishParaphraseChatMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 英文释义.
     *
     * @param request - ExecuteAITeacherEnglishParaphraseChatMessageRequest
     *
     * @returns ExecuteAITeacherEnglishParaphraseChatMessageResponse
     *
     * @param ExecuteAITeacherEnglishParaphraseChatMessageRequest $request
     *
     * @return ExecuteAITeacherEnglishParaphraseChatMessageResponse
     */
    public function executeAITeacherEnglishParaphraseChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherEnglishParaphraseChatMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 进行拓展练对话.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/executeExpansionTraining',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherExpansionDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherExpansionDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 进行拓展练对话.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * 拓展练根据上下文进行润色.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRefineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueRefineResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogueRefine',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/refineByContext',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherExpansionDialogueRefineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherExpansionDialogueRefineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 拓展练根据上下文进行润色.
     *
     * @param request - ExecuteAITeacherExpansionDialogueRefineRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueRefineResponse
     *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime);
    }

    /**
     * 拓展练语境翻译.
     *
     * @param request - ExecuteAITeacherExpansionDialogueTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherExpansionDialogueTranslateResponse
     *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherExpansionDialogueTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/translate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherExpansionDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherExpansionDialogueTranslateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 拓展练语境翻译.
     *
     * @param request - ExecuteAITeacherExpansionDialogueTranslateRequest
     *
     * @returns ExecuteAITeacherExpansionDialogueTranslateResponse
     *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * 语法检测.
     *
     * @param request - ExecuteAITeacherGrammarCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherGrammarCheckResponse
     *
     * @param ExecuteAITeacherGrammarCheckRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherGrammarCheck',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/common/grammarChecking',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherGrammarCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 语法检测.
     *
     * @param request - ExecuteAITeacherGrammarCheckRequest
     *
     * @returns ExecuteAITeacherGrammarCheckResponse
     *
     * @param ExecuteAITeacherGrammarCheckRequest $request
     *
     * @return ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 进行同步练对话.
     *
     * @param request - ExecuteAITeacherSyncDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherSyncDialogueResponse
     *
     * @param ExecuteAITeacherSyncDialogueRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherSyncDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/executeSyncTraining',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherSyncDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherSyncDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 进行同步练对话.
     *
     * @param request - ExecuteAITeacherSyncDialogueRequest
     *
     * @returns ExecuteAITeacherSyncDialogueResponse
     *
     * @param ExecuteAITeacherSyncDialogueRequest $request
     *
     * @return ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * 同步练语境翻译.
     *
     * @param request - ExecuteAITeacherSyncDialogueTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAITeacherSyncDialogueTranslateResponse
     *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAITeacherSyncDialogueTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/translate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteAITeacherSyncDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteAITeacherSyncDialogueTranslateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同步练语境翻译.
     *
     * @param request - ExecuteAITeacherSyncDialogueTranslateRequest
     *
     * @returns ExecuteAITeacherSyncDialogueTranslateResponse
     *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * 进行AI对话.
     *
     * @param request - ExecuteTextbookAssistantDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantDialogueResponse
     *
     * @param ExecuteTextbookAssistantDialogueRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->userMessage) {
            @$body['userMessage'] = $request->userMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteDialogue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 进行AI对话.
     *
     * @param request - ExecuteTextbookAssistantDialogueRequest
     *
     * @returns ExecuteTextbookAssistantDialogueResponse
     *
     * @param ExecuteTextbookAssistantDialogueRequest $request
     *
     * @return ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * 调整难度.
     *
     * @param request - ExecuteTextbookAssistantDifficultyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantDifficultyResponse
     *
     * @param ExecuteTextbookAssistantDifficultyRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantDifficulty',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteDifficulty',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantDifficultyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantDifficultyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调整难度.
     *
     * @param request - ExecuteTextbookAssistantDifficultyRequest
     *
     * @returns ExecuteTextbookAssistantDifficultyResponse
     *
     * @param ExecuteTextbookAssistantDifficultyRequest $request
     *
     * @return ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficulty($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime);
    }

    /**
     * 语法检测.
     *
     * @param request - ExecuteTextbookAssistantGrammarCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantGrammarCheckResponse
     *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantGrammarCheck',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteGrammarCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantGrammarCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 语法检测.
     *
     * @param request - ExecuteTextbookAssistantGrammarCheckRequest
     *
     * @returns ExecuteTextbookAssistantGrammarCheckResponse
     *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 句子润色.
     *
     * @param request - ExecuteTextbookAssistantRefineByContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantRefineByContextResponse
     *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantRefineByContext',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/RefineByContext',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantRefineByContextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantRefineByContextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 句子润色.
     *
     * @param request - ExecuteTextbookAssistantRefineByContextRequest
     *
     * @returns ExecuteTextbookAssistantRefineByContextResponse
     *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContext($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime);
    }

    /**
     * 对话重试.
     *
     * @param request - ExecuteTextbookAssistantRetryConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantRetryConversationResponse
     *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantRetryConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/RetryConversation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantRetryConversationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantRetryConversationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 对话重试.
     *
     * @param request - ExecuteTextbookAssistantRetryConversationRequest
     *
     * @returns ExecuteTextbookAssistantRetryConversationResponse
     *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * 进行对话-流式输出.
     *
     * @param request - ExecuteTextbookAssistantSseDialogueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantSseDialogueResponse
     *
     * @param ExecuteTextbookAssistantSseDialogueRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ExecuteTextbookAssistantSseDialogueResponse
     */
    public function executeTextbookAssistantSseDialogueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->userMessage) {
            @$body['userMessage'] = $request->userMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantSseDialogue',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteSseDialogue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantSseDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantSseDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 进行对话-流式输出.
     *
     * @param request - ExecuteTextbookAssistantSseDialogueRequest
     *
     * @returns ExecuteTextbookAssistantSseDialogueResponse
     *
     * @param ExecuteTextbookAssistantSseDialogueRequest $request
     *
     * @return ExecuteTextbookAssistantSseDialogueResponse
     */
    public function executeTextbookAssistantSseDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantSseDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启自由对话.
     *
     * @param request - ExecuteTextbookAssistantStartConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantStartConversationResponse
     *
     * @param ExecuteTextbookAssistantStartConversationRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->articleId) {
            @$body['articleId'] = $request->articleId;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantStartConversation',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/StartConversation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantStartConversationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantStartConversationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启自由对话.
     *
     * @param request - ExecuteTextbookAssistantStartConversationRequest
     *
     * @returns ExecuteTextbookAssistantStartConversationResponse
     *
     * @param ExecuteTextbookAssistantStartConversationRequest $request
     *
     * @return ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取鉴权参数.
     *
     * @param request - ExecuteTextbookAssistantSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantSuggestionResponse
     *
     * @param ExecuteTextbookAssistantSuggestionRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/Suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantSuggestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取鉴权参数.
     *
     * @param request - ExecuteTextbookAssistantSuggestionRequest
     *
     * @returns ExecuteTextbookAssistantSuggestionResponse
     *
     * @param ExecuteTextbookAssistantSuggestionRequest $request
     *
     * @return ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * 翻译消息内容.
     *
     * @param request - ExecuteTextbookAssistantTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTextbookAssistantTranslateResponse
     *
     * @param ExecuteTextbookAssistantTranslateRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistant) {
            @$body['assistant'] = $request->assistant;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->chatId) {
            @$body['chatId'] = $request->chatId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTextbookAssistantTranslate',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/dialogue/ExecuteTranslate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTextbookAssistantTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTextbookAssistantTranslateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 翻译消息内容.
     *
     * @param request - ExecuteTextbookAssistantTranslateRequest
     *
     * @returns ExecuteTextbookAssistantTranslateResponse
     *
     * @param ExecuteTextbookAssistantTranslateRequest $request
     *
     * @return ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * 拓展练小助手.
     *
     * @param request - GetAITeacherExpansionDialogueSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITeacherExpansionDialogueSuggestionResponse
     *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->background) {
            @$body['background'] = $request->background;
        }

        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->roleInfo) {
            @$body['roleInfo'] = $request->roleInfo;
        }

        if (null !== $request->startSentence) {
            @$body['startSentence'] = $request->startSentence;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAITeacherExpansionDialogueSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/expansionPractice/suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAITeacherExpansionDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAITeacherExpansionDialogueSuggestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 拓展练小助手.
     *
     * @param request - GetAITeacherExpansionDialogueSuggestionRequest
     *
     * @returns GetAITeacherExpansionDialogueSuggestionResponse
     *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * 同步练小助手.
     *
     * @param request - GetAITeacherSyncDialogueSuggestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITeacherSyncDialogueSuggestionResponse
     *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogueTasks) {
            @$body['dialogueTasks'] = $request->dialogueTasks;
        }

        if (null !== $request->languageCode) {
            @$body['languageCode'] = $request->languageCode;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAITeacherSyncDialogueSuggestion',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aiteacher/syncPractice/suggestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAITeacherSyncDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAITeacherSyncDialogueSuggestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同步练小助手.
     *
     * @param request - GetAITeacherSyncDialogueSuggestionRequest
     *
     * @returns GetAITeacherSyncDialogueSuggestionResponse
     *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取请求鉴权参数.
     *
     * @param request - GetTextbookAssistantTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextbookAssistantTokenResponse
     *
     * @param GetTextbookAssistantTokenRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceId) {
            @$body['deviceId'] = $request->deviceId;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextbookAssistantToken',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/GetToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTextbookAssistantTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTextbookAssistantTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取请求鉴权参数.
     *
     * @param request - GetTextbookAssistantTokenRequest
     *
     * @returns GetTextbookAssistantTokenResponse
     *
     * @param GetTextbookAssistantTokenRequest $request
     *
     * @return GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextbookAssistantTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量获取文章详情.
     *
     * @param request - ListTextbookAssistantArticleDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantArticleDetailsResponse
     *
     * @param ListTextbookAssistantArticleDetailsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListTextbookAssistantArticleDetailsResponse
     */
    public function listTextbookAssistantArticleDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->articleIdList) {
            @$body['articleIdList'] = $request->articleIdList;
        }

        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantArticleDetails',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListArticleDetails',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantArticleDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantArticleDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量获取文章详情.
     *
     * @param request - ListTextbookAssistantArticleDetailsRequest
     *
     * @returns ListTextbookAssistantArticleDetailsResponse
     *
     * @param ListTextbookAssistantArticleDetailsRequest $request
     *
     * @return ListTextbookAssistantArticleDetailsResponse
     */
    public function listTextbookAssistantArticleDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantArticleDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文章列表.
     *
     * @param request - ListTextbookAssistantArticlesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantArticlesResponse
     *
     * @param ListTextbookAssistantArticlesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticlesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->directoryId) {
            @$body['directoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantArticles',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListArticles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantArticlesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantArticlesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文章列表.
     *
     * @param request - ListTextbookAssistantArticlesRequest
     *
     * @returns ListTextbookAssistantArticlesResponse
     *
     * @param ListTextbookAssistantArticlesRequest $request
     *
     * @return ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantArticlesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取书本下的目录信息.
     *
     * @param request - ListTextbookAssistantBookDirectoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantBookDirectoriesResponse
     *
     * @param ListTextbookAssistantBookDirectoriesRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->bookId) {
            @$body['bookId'] = $request->bookId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantBookDirectories',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListBookDirectories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantBookDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantBookDirectoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取书本下的目录信息.
     *
     * @param request - ListTextbookAssistantBookDirectoriesRequest
     *
     * @returns ListTextbookAssistantBookDirectoriesResponse
     *
     * @param ListTextbookAssistantBookDirectoriesRequest $request
     *
     * @return ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取包含年级下的书本列表.
     *
     * @param request - ListTextbookAssistantBooksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantBooksResponse
     *
     * @param ListTextbookAssistantBooksRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->bookId) {
            @$body['bookId'] = $request->bookId;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->volume) {
            @$body['volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantBooks',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListBooks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantBooksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantBooksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取包含年级下的书本列表.
     *
     * @param request - ListTextbookAssistantBooksRequest
     *
     * @returns ListTextbookAssistantBooksResponse
     *
     * @param ListTextbookAssistantBooksRequest $request
     *
     * @return ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBooksWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取有资源的年级信息.
     *
     * @param request - ListTextbookAssistantGradeVolumesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantGradeVolumesResponse
     *
     * @param ListTextbookAssistantGradeVolumesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantGradeVolumes',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListGradeVolumes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantGradeVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantGradeVolumesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取有资源的年级信息.
     *
     * @param request - ListTextbookAssistantGradeVolumesRequest
     *
     * @returns ListTextbookAssistantGradeVolumesResponse
     *
     * @param ListTextbookAssistantGradeVolumesRequest $request
     *
     * @return ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文章内容详情.
     *
     * @param request - ListTextbookAssistantSceneDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTextbookAssistantSceneDetailsResponse
     *
     * @param ListTextbookAssistantSceneDetailsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListTextbookAssistantSceneDetailsResponse
     */
    public function listTextbookAssistantSceneDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authToken) {
            @$body['authToken'] = $request->authToken;
        }

        if (null !== $request->sceneIdList) {
            @$body['sceneIdList'] = $request->sceneIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTextbookAssistantSceneDetails',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/textbookAssistant/teachingResource/ListSceneDetails',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTextbookAssistantSceneDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextbookAssistantSceneDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文章内容详情.
     *
     * @param request - ListTextbookAssistantSceneDetailsRequest
     *
     * @returns ListTextbookAssistantSceneDetailsResponse
     *
     * @param ListTextbookAssistantSceneDetailsRequest $request
     *
     * @return ListTextbookAssistantSceneDetailsResponse
     */
    public function listTextbookAssistantSceneDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantSceneDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/基于一个预训练模型创建图片推理任务
     *
     * @param request - PersonalizedTextToImageAddInferenceJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageAddInferenceJobResponse
     *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageNumber) {
            @$body['imageNumber'] = $request->imageNumber;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->strength) {
            @$body['strength'] = $request->strength;
        }

        if (null !== $request->trainSteps) {
            @$body['trainSteps'] = $request->trainSteps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageAddInferenceJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PersonalizedTextToImageAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PersonalizedTextToImageAddInferenceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/基于一个预训练模型创建图片推理任务
     *
     * @param request - PersonalizedTextToImageAddInferenceJobRequest
     *
     * @returns PersonalizedTextToImageAddInferenceJobResponse
     *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/通过唯一的图片编号获取图片内容.
     *
     * @param request - PersonalizedTextToImageQueryImageAssetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageQueryImageAssetResponse
     *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encodeFormat) {
            @$query['encodeFormat'] = $request->encodeFormat;
        }

        if (null !== $request->imageId) {
            @$query['imageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageQueryImageAsset',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PersonalizedTextToImageQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PersonalizedTextToImageQueryImageAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/通过唯一的图片编号获取图片内容.
     *
     * @param request - PersonalizedTextToImageQueryImageAssetRequest
     *
     * @returns PersonalizedTextToImageQueryImageAssetResponse
     *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/查询预制模型推理任务的状态
     *
     * @param request - PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request
     * @param string[]                                                    $headers
     * @param RuntimeOptions                                              $runtime
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inferenceJobId) {
            @$query['inferenceJobId'] = $request->inferenceJobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PersonalizedTextToImageQueryPreModelInferenceJobInfo',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/查询预制模型推理任务的状态
     *
     * @param request - PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     *
     * @returns PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/基于一个模型创建图片推理任务
     *
     * @param request - Personalizedtxt2imgAddInferenceJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgAddInferenceJobResponse
     *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageNumber) {
            @$body['imageNumber'] = $request->imageNumber;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgAddInferenceJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addInferenceJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgAddInferenceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/基于一个模型创建图片推理任务
     *
     * @param request - Personalizedtxt2imgAddInferenceJobRequest
     *
     * @returns Personalizedtxt2imgAddInferenceJobResponse
     *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/创建一个模型训练任务
     *
     * @param request - Personalizedtxt2imgAddModelTrainJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgAddModelTrainJobResponse
     *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->objectType) {
            @$body['objectType'] = $request->objectType;
        }

        if (null !== $request->trainSteps) {
            @$body['trainSteps'] = $request->trainSteps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgAddModelTrainJob',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/addModelTrainJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgAddModelTrainJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgAddModelTrainJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/创建一个模型训练任务
     *
     * @param request - Personalizedtxt2imgAddModelTrainJobRequest
     *
     * @returns Personalizedtxt2imgAddModelTrainJobResponse
     *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/图片二进制内容获取.
     *
     * @param request - Personalizedtxt2imgQueryImageAssetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryImageAssetResponse
     *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encodeFormat) {
            @$query['encodeFormat'] = $request->encodeFormat;
        }

        if (null !== $request->imageId) {
            @$query['imageId'] = $request->imageId;
        }

        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        if (null !== $request->promptId) {
            @$query['promptId'] = $request->promptId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryImageAsset',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryImageAsset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'any',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgQueryImageAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/图片二进制内容获取.
     *
     * @param request - Personalizedtxt2imgQueryImageAssetRequest
     *
     * @returns Personalizedtxt2imgQueryImageAssetResponse
     *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/查询模型推理任务的状态和结果信息.
     *
     * @param request - Personalizedtxt2imgQueryInferenceJobInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryInferenceJobInfoResponse
     *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inferenceJobId) {
            @$query['inferenceJobId'] = $request->inferenceJobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryInferenceJobInfo',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgQueryInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgQueryInferenceJobInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/查询模型推理任务的状态和结果信息.
     *
     * @param request - Personalizedtxt2imgQueryInferenceJobInfoRequest
     *
     * @returns Personalizedtxt2imgQueryInferenceJobInfoResponse
     *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 个性化文生图/查询模型训练任务列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryModelTrainJobListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryModelTrainJobList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgQueryModelTrainJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgQueryModelTrainJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/查询模型训练任务列表.
     *
     * @returns Personalizedtxt2imgQueryModelTrainJobListResponse
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime);
    }

    /**
     * 个性化文生图/模型训练状态查询.
     *
     * @param request - Personalizedtxt2imgQueryModelTrainStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Personalizedtxt2imgQueryModelTrainStatusResponse
     *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelId) {
            @$query['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Personalizedtxt2imgQueryModelTrainStatus',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return Personalizedtxt2imgQueryModelTrainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return Personalizedtxt2imgQueryModelTrainStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 个性化文生图/模型训练状态查询.
     *
     * @param request - Personalizedtxt2imgQueryModelTrainStatusRequest
     *
     * @returns Personalizedtxt2imgQueryModelTrainStatusResponse
     *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 阿里云控制台/获取应用访问识别码(appkey)信息.
     *
     * @param request - QueryApplicationAccessIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApplicationAccessIdResponse
     *
     * @param QueryApplicationAccessIdRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryApplicationAccessIdResponse
     */
    public function queryApplicationAccessIdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationAccessId) {
            @$query['applicationAccessId'] = $request->applicationAccessId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryApplicationAccessId',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryApplicationAccessId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryApplicationAccessIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryApplicationAccessIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/获取应用访问识别码(appkey)信息.
     *
     * @param request - QueryApplicationAccessIdRequest
     *
     * @returns QueryApplicationAccessIdResponse
     *
     * @param QueryApplicationAccessIdRequest $request
     *
     * @return QueryApplicationAccessIdResponse
     */
    public function queryApplicationAccessId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryApplicationAccessIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 阿里云控制台/获取项目列表.
     *
     * @param request - QueryProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectResponse
     *
     * @param QueryProjectRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProjectResponse
     */
    public function queryProjectWithOptions($request, $headers, $runtime)
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
            'action' => 'QueryProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryProject',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/获取项目列表.
     *
     * @param request - QueryProjectRequest
     *
     * @returns QueryProjectResponse
     *
     * @param QueryProjectRequest $request
     *
     * @return QueryProjectResponse
     */
    public function queryProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 阿里云控制台/获取项目列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryProjectListResponse
     */
    public function queryProjectListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryProjectList',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryProjectList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryProjectListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/获取项目列表.
     *
     * @returns QueryProjectListResponse
     *
     * @return QueryProjectListResponse
     */
    public function queryProjectList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProjectListWithOptions($headers, $runtime);
    }

    /**
     * 阿里云控制台/已经购买过的服务项目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPurchasedServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryPurchasedServiceResponse
     */
    public function queryPurchasedServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryPurchasedService',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/queryPurchasedService',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryPurchasedServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryPurchasedServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/已经购买过的服务项目.
     *
     * @returns QueryPurchasedServiceResponse
     *
     * @return QueryPurchasedServiceResponse
     */
    public function queryPurchasedService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPurchasedServiceWithOptions($headers, $runtime);
    }

    /**
     * 阿里云控制台/更新项目信息.
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '20240611',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aliyunConsole/updateProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 阿里云控制台/更新项目信息.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($request, $headers, $runtime);
    }
}

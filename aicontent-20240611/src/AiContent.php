<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse;
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
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponse;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesRequest;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 拓展练问答对生成
     *  *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request AITeacherExpansionPracticeTaskGenerateRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->keySentences)) {
            $body['keySentences'] = $request->keySentences;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['keyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->learningObject)) {
            $body['learningObject'] = $request->learningObject;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['textContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->textbook)) {
            $body['textbook'] = $request->textbook;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AITeacherExpansionPracticeTaskGenerate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/generateTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AITeacherExpansionPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拓展练问答对生成
     *  *
     * @param AITeacherExpansionPracticeTaskGenerateRequest $request AITeacherExpansionPracticeTaskGenerateRequest
     *
     * @return AITeacherExpansionPracticeTaskGenerateResponse AITeacherExpansionPracticeTaskGenerateResponse
     */
    public function aITeacherExpansionPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherExpansionPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步基础练问答对生成
     *  *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request AITeacherSyncPracticeTaskGenerateRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->keySentences)) {
            $body['keySentences'] = $request->keySentences;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['keyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->learningObject)) {
            $body['learningObject'] = $request->learningObject;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['textContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->textbook)) {
            $body['textbook'] = $request->textbook;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AITeacherSyncPracticeTaskGenerate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/syncPractice/generateTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AITeacherSyncPracticeTaskGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步基础练问答对生成
     *  *
     * @param AITeacherSyncPracticeTaskGenerateRequest $request AITeacherSyncPracticeTaskGenerateRequest
     *
     * @return AITeacherSyncPracticeTaskGenerateResponse AITeacherSyncPracticeTaskGenerateResponse
     */
    public function aITeacherSyncPracticeTaskGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aITeacherSyncPracticeTaskGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AliyunConsoleOpenApiQueryAliyunConsoleServcieList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServcieList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServcieListWithOptions($headers, $runtime);
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AliyunConsoleOpenApiQueryAliyunConsoleServiceList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aliyunconsole/queryAliyunConsoleServiceList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 阿里云控制台/列出阿里云控制台上可使用的服务列表
     *  *
     * @return AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse AliyunConsoleOpenApiQueryAliyunConsoleServiceListResponse
     */
    public function aliyunConsoleOpenApiQueryAliyunConsoleServiceList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aliyunConsoleOpenApiQueryAliyunConsoleServiceListWithOptions($headers, $runtime);
    }

    /**
     * @summary 进行拓展练对话
     *  *
     * @param ExecuteAITeacherExpansionDialogueRequest $request ExecuteAITeacherExpansionDialogueRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherExpansionDialogueResponse ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->background)) {
            $body['background'] = $request->background;
        }
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $body['languageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->roleInfo)) {
            $body['roleInfo'] = $request->roleInfo;
        }
        if (!Utils::isUnset($request->startSentence)) {
            $body['startSentence'] = $request->startSentence;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherExpansionDialogue',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/executeExpansionTraining',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 进行拓展练对话
     *  *
     * @param ExecuteAITeacherExpansionDialogueRequest $request ExecuteAITeacherExpansionDialogueRequest
     *
     * @return ExecuteAITeacherExpansionDialogueResponse ExecuteAITeacherExpansionDialogueResponse
     */
    public function executeAITeacherExpansionDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 拓展练根据上下文进行润色
     *  *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request ExecuteAITeacherExpansionDialogueRefineRequest
     * @param string[]                                       $headers map
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->background)) {
            $body['background'] = $request->background;
        }
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $body['languageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->roleInfo)) {
            $body['roleInfo'] = $request->roleInfo;
        }
        if (!Utils::isUnset($request->startSentence)) {
            $body['startSentence'] = $request->startSentence;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherExpansionDialogueRefine',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/refineByContext',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueRefineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拓展练根据上下文进行润色
     *  *
     * @param ExecuteAITeacherExpansionDialogueRefineRequest $request ExecuteAITeacherExpansionDialogueRefineRequest
     *
     * @return ExecuteAITeacherExpansionDialogueRefineResponse ExecuteAITeacherExpansionDialogueRefineResponse
     */
    public function executeAITeacherExpansionDialogueRefine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueRefineWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 拓展练语境翻译
     *  *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request ExecuteAITeacherExpansionDialogueTranslateRequest
     * @param string[]                                          $headers map
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->background)) {
            $body['background'] = $request->background;
        }
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->roleInfo)) {
            $body['roleInfo'] = $request->roleInfo;
        }
        if (!Utils::isUnset($request->startSentence)) {
            $body['startSentence'] = $request->startSentence;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherExpansionDialogueTranslate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/translate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherExpansionDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拓展练语境翻译
     *  *
     * @param ExecuteAITeacherExpansionDialogueTranslateRequest $request ExecuteAITeacherExpansionDialogueTranslateRequest
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateResponse ExecuteAITeacherExpansionDialogueTranslateResponse
     */
    public function executeAITeacherExpansionDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherExpansionDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语法检测
     *  *
     * @param ExecuteAITeacherGrammarCheckRequest $request ExecuteAITeacherGrammarCheckRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherGrammarCheckResponse ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherGrammarCheck',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/common/grammarChecking',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语法检测
     *  *
     * @param ExecuteAITeacherGrammarCheckRequest $request ExecuteAITeacherGrammarCheckRequest
     *
     * @return ExecuteAITeacherGrammarCheckResponse ExecuteAITeacherGrammarCheckResponse
     */
    public function executeAITeacherGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 进行同步练对话
     *  *
     * @param ExecuteAITeacherSyncDialogueRequest $request ExecuteAITeacherSyncDialogueRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherSyncDialogueResponse ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $body['languageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherSyncDialogue',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/syncPractice/executeSyncTraining',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherSyncDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 进行同步练对话
     *  *
     * @param ExecuteAITeacherSyncDialogueRequest $request ExecuteAITeacherSyncDialogueRequest
     *
     * @return ExecuteAITeacherSyncDialogueResponse ExecuteAITeacherSyncDialogueResponse
     */
    public function executeAITeacherSyncDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步练语境翻译
     *  *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request ExecuteAITeacherSyncDialogueTranslateRequest
     * @param string[]                                     $headers map
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteAITeacherSyncDialogueTranslate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/syncPractice/translate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteAITeacherSyncDialogueTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步练语境翻译
     *  *
     * @param ExecuteAITeacherSyncDialogueTranslateRequest $request ExecuteAITeacherSyncDialogueTranslateRequest
     *
     * @return ExecuteAITeacherSyncDialogueTranslateResponse ExecuteAITeacherSyncDialogueTranslateResponse
     */
    public function executeAITeacherSyncDialogueTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeAITeacherSyncDialogueTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 进行AI对话
     *  *
     * @param ExecuteTextbookAssistantDialogueRequest $request ExecuteTextbookAssistantDialogueRequest
     * @param string[]                                $headers map
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantDialogueResponse ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->userMessage)) {
            $body['userMessage'] = $request->userMessage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantDialogue',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/ExecuteDialogue',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 进行AI对话
     *  *
     * @param ExecuteTextbookAssistantDialogueRequest $request ExecuteTextbookAssistantDialogueRequest
     *
     * @return ExecuteTextbookAssistantDialogueResponse ExecuteTextbookAssistantDialogueResponse
     */
    public function executeTextbookAssistantDialogue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDialogueWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 调整难度
     *  *
     * @param ExecuteTextbookAssistantDifficultyRequest $request ExecuteTextbookAssistantDifficultyRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantDifficultyResponse ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->assistant)) {
            $body['assistant'] = $request->assistant;
        }
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantDifficulty',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/ExecuteDifficulty',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantDifficultyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调整难度
     *  *
     * @param ExecuteTextbookAssistantDifficultyRequest $request ExecuteTextbookAssistantDifficultyRequest
     *
     * @return ExecuteTextbookAssistantDifficultyResponse ExecuteTextbookAssistantDifficultyResponse
     */
    public function executeTextbookAssistantDifficulty($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantDifficultyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语法检测
     *  *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request ExecuteTextbookAssistantGrammarCheckRequest
     * @param string[]                                    $headers map
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->user)) {
            $body['user'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantGrammarCheck',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/ExecuteGrammarCheck',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantGrammarCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语法检测
     *  *
     * @param ExecuteTextbookAssistantGrammarCheckRequest $request ExecuteTextbookAssistantGrammarCheckRequest
     *
     * @return ExecuteTextbookAssistantGrammarCheckResponse ExecuteTextbookAssistantGrammarCheckResponse
     */
    public function executeTextbookAssistantGrammarCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantGrammarCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 句子润色
     *  *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request ExecuteTextbookAssistantRefineByContextRequest
     * @param string[]                                       $headers map
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->user)) {
            $body['user'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantRefineByContext',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/RefineByContext',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantRefineByContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 句子润色
     *  *
     * @param ExecuteTextbookAssistantRefineByContextRequest $request ExecuteTextbookAssistantRefineByContextRequest
     *
     * @return ExecuteTextbookAssistantRefineByContextResponse ExecuteTextbookAssistantRefineByContextResponse
     */
    public function executeTextbookAssistantRefineByContext($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRefineByContextWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 对话重试
     *  *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request ExecuteTextbookAssistantRetryConversationRequest
     * @param string[]                                         $headers map
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistant)) {
            $body['assistant'] = $request->assistant;
        }
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantRetryConversation',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/RetryConversation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantRetryConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对话重试
     *  *
     * @param ExecuteTextbookAssistantRetryConversationRequest $request ExecuteTextbookAssistantRetryConversationRequest
     *
     * @return ExecuteTextbookAssistantRetryConversationResponse ExecuteTextbookAssistantRetryConversationResponse
     */
    public function executeTextbookAssistantRetryConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantRetryConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 开启自由对话
     *  *
     * @param ExecuteTextbookAssistantStartConversationRequest $request ExecuteTextbookAssistantStartConversationRequest
     * @param string[]                                         $headers map
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantStartConversationResponse ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->articleId)) {
            $body['articleId'] = $request->articleId;
        }
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantStartConversation',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/StartConversation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantStartConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启自由对话
     *  *
     * @param ExecuteTextbookAssistantStartConversationRequest $request ExecuteTextbookAssistantStartConversationRequest
     *
     * @return ExecuteTextbookAssistantStartConversationResponse ExecuteTextbookAssistantStartConversationResponse
     */
    public function executeTextbookAssistantStartConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantStartConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取鉴权参数
     *  *
     * @param ExecuteTextbookAssistantSuggestionRequest $request ExecuteTextbookAssistantSuggestionRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantSuggestionResponse ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistant)) {
            $body['assistant'] = $request->assistant;
        }
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantSuggestion',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/Suggestion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取鉴权参数
     *  *
     * @param ExecuteTextbookAssistantSuggestionRequest $request ExecuteTextbookAssistantSuggestionRequest
     *
     * @return ExecuteTextbookAssistantSuggestionResponse ExecuteTextbookAssistantSuggestionResponse
     */
    public function executeTextbookAssistantSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 翻译消息内容
     *  *
     * @param ExecuteTextbookAssistantTranslateRequest $request ExecuteTextbookAssistantTranslateRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteTextbookAssistantTranslateResponse ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistant)) {
            $body['assistant'] = $request->assistant;
        }
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->chatId)) {
            $body['chatId'] = $request->chatId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTextbookAssistantTranslate',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/dialogue/ExecuteTranslate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteTextbookAssistantTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 翻译消息内容
     *  *
     * @param ExecuteTextbookAssistantTranslateRequest $request ExecuteTextbookAssistantTranslateRequest
     *
     * @return ExecuteTextbookAssistantTranslateResponse ExecuteTextbookAssistantTranslateResponse
     */
    public function executeTextbookAssistantTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTextbookAssistantTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 拓展练小助手
     *  *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request GetAITeacherExpansionDialogueSuggestionRequest
     * @param string[]                                       $headers map
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->background)) {
            $body['background'] = $request->background;
        }
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $body['languageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->roleInfo)) {
            $body['roleInfo'] = $request->roleInfo;
        }
        if (!Utils::isUnset($request->startSentence)) {
            $body['startSentence'] = $request->startSentence;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAITeacherExpansionDialogueSuggestion',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/expansionPractice/suggestion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAITeacherExpansionDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拓展练小助手
     *  *
     * @param GetAITeacherExpansionDialogueSuggestionRequest $request GetAITeacherExpansionDialogueSuggestionRequest
     *
     * @return GetAITeacherExpansionDialogueSuggestionResponse GetAITeacherExpansionDialogueSuggestionResponse
     */
    public function getAITeacherExpansionDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherExpansionDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步练小助手
     *  *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request GetAITeacherSyncDialogueSuggestionRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogueTasks)) {
            $body['dialogueTasks'] = $request->dialogueTasks;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $body['languageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->records)) {
            $body['records'] = $request->records;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAITeacherSyncDialogueSuggestion',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/aiteacher/syncPractice/suggestion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAITeacherSyncDialogueSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步练小助手
     *  *
     * @param GetAITeacherSyncDialogueSuggestionRequest $request GetAITeacherSyncDialogueSuggestionRequest
     *
     * @return GetAITeacherSyncDialogueSuggestionResponse GetAITeacherSyncDialogueSuggestionResponse
     */
    public function getAITeacherSyncDialogueSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAITeacherSyncDialogueSuggestionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取请求鉴权参数
     *  *
     * @param GetTextbookAssistantTokenRequest $request GetTextbookAssistantTokenRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextbookAssistantTokenResponse GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceId)) {
            $body['deviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['model'] = $request->model;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTextbookAssistantToken',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/teachingResource/GetToken',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextbookAssistantTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取请求鉴权参数
     *  *
     * @param GetTextbookAssistantTokenRequest $request GetTextbookAssistantTokenRequest
     *
     * @return GetTextbookAssistantTokenResponse GetTextbookAssistantTokenResponse
     */
    public function getTextbookAssistantToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextbookAssistantTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取文章列表
     *  *
     * @param ListTextbookAssistantArticlesRequest $request ListTextbookAssistantArticlesRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextbookAssistantArticlesResponse ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticlesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $body['directoryId'] = $request->directoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTextbookAssistantArticles',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/teachingResource/ListArticles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextbookAssistantArticlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文章列表
     *  *
     * @param ListTextbookAssistantArticlesRequest $request ListTextbookAssistantArticlesRequest
     *
     * @return ListTextbookAssistantArticlesResponse ListTextbookAssistantArticlesResponse
     */
    public function listTextbookAssistantArticles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantArticlesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取书本下的目录信息
     *  *
     * @param ListTextbookAssistantBookDirectoriesRequest $request ListTextbookAssistantBookDirectoriesRequest
     * @param string[]                                    $headers map
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextbookAssistantBookDirectoriesResponse ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->bookId)) {
            $body['bookId'] = $request->bookId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTextbookAssistantBookDirectories',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/teachingResource/ListBookDirectories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextbookAssistantBookDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取书本下的目录信息
     *  *
     * @param ListTextbookAssistantBookDirectoriesRequest $request ListTextbookAssistantBookDirectoriesRequest
     *
     * @return ListTextbookAssistantBookDirectoriesResponse ListTextbookAssistantBookDirectoriesResponse
     */
    public function listTextbookAssistantBookDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBookDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取包含年级下的书本列表
     *  *
     * @param ListTextbookAssistantBooksRequest $request ListTextbookAssistantBooksRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextbookAssistantBooksResponse ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->bookId)) {
            $body['bookId'] = $request->bookId;
        }
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        if (!Utils::isUnset($request->volume)) {
            $body['volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTextbookAssistantBooks',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/teachingResource/ListBooks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextbookAssistantBooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取包含年级下的书本列表
     *  *
     * @param ListTextbookAssistantBooksRequest $request ListTextbookAssistantBooksRequest
     *
     * @return ListTextbookAssistantBooksResponse ListTextbookAssistantBooksResponse
     */
    public function listTextbookAssistantBooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantBooksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取有资源的年级信息
     *  *
     * @param ListTextbookAssistantGradeVolumesRequest $request ListTextbookAssistantGradeVolumesRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextbookAssistantGradeVolumesResponse ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authToken)) {
            $body['authToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTextbookAssistantGradeVolumes',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/textbookAssistant/teachingResource/ListGradeVolumes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextbookAssistantGradeVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取有资源的年级信息
     *  *
     * @param ListTextbookAssistantGradeVolumesRequest $request ListTextbookAssistantGradeVolumesRequest
     *
     * @return ListTextbookAssistantGradeVolumesResponse ListTextbookAssistantGradeVolumesResponse
     */
    public function listTextbookAssistantGradeVolumes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextbookAssistantGradeVolumesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/基于一个预训练模型创建图片推理任务
     *  *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request PersonalizedTextToImageAddInferenceJobRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageNumber)) {
            $body['imageNumber'] = $request->imageNumber;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->seed)) {
            $body['seed'] = $request->seed;
        }
        if (!Utils::isUnset($request->strength)) {
            $body['strength'] = $request->strength;
        }
        if (!Utils::isUnset($request->trainSteps)) {
            $body['trainSteps'] = $request->trainSteps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageAddInferenceJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PersonalizedTextToImageAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/基于一个预训练模型创建图片推理任务
     *  *
     * @param PersonalizedTextToImageAddInferenceJobRequest $request PersonalizedTextToImageAddInferenceJobRequest
     *
     * @return PersonalizedTextToImageAddInferenceJobResponse PersonalizedTextToImageAddInferenceJobResponse
     */
    public function personalizedTextToImageAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/通过唯一的图片编号获取图片内容
     *  *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request PersonalizedTextToImageQueryImageAssetRequest
     * @param string[]                                      $headers map
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodeFormat)) {
            $query['encodeFormat'] = $request->encodeFormat;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['imageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageQueryImageAsset',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return PersonalizedTextToImageQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/通过唯一的图片编号获取图片内容
     *  *
     * @param PersonalizedTextToImageQueryImageAssetRequest $request PersonalizedTextToImageQueryImageAssetRequest
     *
     * @return PersonalizedTextToImageQueryImageAssetResponse PersonalizedTextToImageQueryImageAssetResponse
     */
    public function personalizedTextToImageQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询预制模型推理任务的状态
     *  *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     * @param string[]                                                    $headers map
     * @param RuntimeOptions                                              $runtime runtime options for this request RuntimeOptions
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inferenceJobId)) {
            $query['inferenceJobId'] = $request->inferenceJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PersonalizedTextToImageQueryPreModelInferenceJobInfo',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询预制模型推理任务的状态
     *  *
     * @param PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest $request PersonalizedTextToImageQueryPreModelInferenceJobInfoRequest
     *
     * @return PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse PersonalizedTextToImageQueryPreModelInferenceJobInfoResponse
     */
    public function personalizedTextToImageQueryPreModelInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedTextToImageQueryPreModelInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/基于一个模型创建图片推理任务
     *  *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request Personalizedtxt2imgAddInferenceJobRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageNumber)) {
            $body['imageNumber'] = $request->imageNumber;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->seed)) {
            $body['seed'] = $request->seed;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgAddInferenceJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addInferenceJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgAddInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/基于一个模型创建图片推理任务
     *  *
     * @param Personalizedtxt2imgAddInferenceJobRequest $request Personalizedtxt2imgAddInferenceJobRequest
     *
     * @return Personalizedtxt2imgAddInferenceJobResponse Personalizedtxt2imgAddInferenceJobResponse
     */
    public function personalizedtxt2imgAddInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/创建一个模型训练任务
     *  *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request Personalizedtxt2imgAddModelTrainJobRequest
     * @param string[]                                   $headers map
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectType)) {
            $body['objectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->trainSteps)) {
            $body['trainSteps'] = $request->trainSteps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgAddModelTrainJob',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/addModelTrainJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgAddModelTrainJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/创建一个模型训练任务
     *  *
     * @param Personalizedtxt2imgAddModelTrainJobRequest $request Personalizedtxt2imgAddModelTrainJobRequest
     *
     * @return Personalizedtxt2imgAddModelTrainJobResponse Personalizedtxt2imgAddModelTrainJobResponse
     */
    public function personalizedtxt2imgAddModelTrainJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgAddModelTrainJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/图片二进制内容获取
     *  *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request Personalizedtxt2imgQueryImageAssetRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodeFormat)) {
            $query['encodeFormat'] = $request->encodeFormat;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['imageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->promptId)) {
            $query['promptId'] = $request->promptId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryImageAsset',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryImageAsset',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return Personalizedtxt2imgQueryImageAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/图片二进制内容获取
     *  *
     * @param Personalizedtxt2imgQueryImageAssetRequest $request Personalizedtxt2imgQueryImageAssetRequest
     *
     * @return Personalizedtxt2imgQueryImageAssetResponse Personalizedtxt2imgQueryImageAssetResponse
     */
    public function personalizedtxt2imgQueryImageAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryImageAssetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询模型推理任务的状态和结果信息
     *  *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request Personalizedtxt2imgQueryInferenceJobInfoRequest
     * @param string[]                                        $headers map
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inferenceJobId)) {
            $query['inferenceJobId'] = $request->inferenceJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryInferenceJobInfo',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryInferenceJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询模型推理任务的状态和结果信息
     *  *
     * @param Personalizedtxt2imgQueryInferenceJobInfoRequest $request Personalizedtxt2imgQueryInferenceJobInfoRequest
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoResponse Personalizedtxt2imgQueryInferenceJobInfoResponse
     */
    public function personalizedtxt2imgQueryInferenceJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryInferenceJobInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 个性化文生图/查询模型训练任务列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryModelTrainJobList',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/查询模型训练任务列表
     *  *
     * @return Personalizedtxt2imgQueryModelTrainJobListResponse Personalizedtxt2imgQueryModelTrainJobListResponse
     */
    public function personalizedtxt2imgQueryModelTrainJobList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainJobListWithOptions($headers, $runtime);
    }

    /**
     * @summary 个性化文生图/模型训练状态查询
     *  *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request Personalizedtxt2imgQueryModelTrainStatusRequest
     * @param string[]                                        $headers map
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modelId)) {
            $query['modelId'] = $request->modelId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Personalizedtxt2imgQueryModelTrainStatus',
            'version'     => '20240611',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return Personalizedtxt2imgQueryModelTrainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 个性化文生图/模型训练状态查询
     *  *
     * @param Personalizedtxt2imgQueryModelTrainStatusRequest $request Personalizedtxt2imgQueryModelTrainStatusRequest
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusResponse Personalizedtxt2imgQueryModelTrainStatusResponse
     */
    public function personalizedtxt2imgQueryModelTrainStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->personalizedtxt2imgQueryModelTrainStatusWithOptions($request, $headers, $runtime);
    }
}

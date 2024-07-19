<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskResponse;
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
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendTextMsgRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendTextMsgResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StartAvatarSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StartAvatarSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopAvatarSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopAvatarSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\StopProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskResponse;
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
     * @summary 添加文案反馈
     *  *
     * @param AddTextFeedbackRequest $request AddTextFeedbackRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTextFeedbackResponse AddTextFeedbackResponse
     */
    public function addTextFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->quality)) {
            $body['quality'] = $request->quality;
        }
        if (!Utils::isUnset($request->textId)) {
            $body['textId'] = $request->textId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddTextFeedback',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/addTextFeedback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddTextFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加文案反馈
     *  *
     * @param AddTextFeedbackRequest $request AddTextFeedbackRequest
     *
     * @return AddTextFeedbackResponse AddTextFeedbackResponse
     */
    public function addTextFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addTextFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 检查会话状态
     *  *
     * @param CheckSessionRequest $request CheckSessionRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSessionResponse CheckSessionResponse
     */
    public function checkSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/checkSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查会话状态
     *  *
     * @param CheckSessionRequest $request CheckSessionRequest
     *
     * @return CheckSessionResponse CheckSessionResponse
     */
    public function checkSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建配图生成任务
     *  *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request CreateIllustrationTaskRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIllustrationTaskResponse CreateIllustrationTaskResponse
     */
    public function createIllustrationTaskWithOptions($textId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateIllustrationTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrationTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建配图生成任务
     *  *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request CreateIllustrationTaskRequest
     *
     * @return CreateIllustrationTaskResponse CreateIllustrationTaskResponse
     */
    public function createIllustrationTask($textId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIllustrationTaskWithOptions($textId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建文案生成任务
     *  *
     * @param CreateTextTaskRequest $request CreateTextTaskRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTextTaskResponse CreateTextTaskResponse
     */
    public function createTextTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建文案生成任务
     *  *
     * @param CreateTextTaskRequest $request CreateTextTaskRequest
     *
     * @return CreateTextTaskResponse CreateTextTaskResponse
     */
    public function createTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询配图
     *  *
     * @param string         $textId
     * @param string         $illustrationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetIllustrationResponse GetIllustrationResponse
     */
    public function getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIllustration',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrations/' . OpenApiUtilClient::getEncodeParam($illustrationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIllustrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配图
     *  *
     * @param string $textId
     * @param string $illustrationId
     *
     * @return GetIllustrationResponse GetIllustrationResponse
     */
    public function getIllustration($textId, $illustrationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime);
    }

    /**
     * @summary 查询配图任务
     *  *
     * @param string         $textId
     * @param string         $illustrationTaskId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetIllustrationTaskResponse GetIllustrationTaskResponse
     */
    public function getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIllustrationTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrationTasks/' . OpenApiUtilClient::getEncodeParam($illustrationTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配图任务
     *  *
     * @param string $textId
     * @param string $illustrationTaskId
     *
     * @return GetIllustrationTaskResponse GetIllustrationTaskResponse
     */
    public function getIllustrationTask($textId, $illustrationTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime);
    }

    /**
     * @summary 获取图片上传oss token
     *  *
     * @param GetOssUploadTokenRequest $request GetOssUploadTokenRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssUploadTokenResponse GetOssUploadTokenResponse
     */
    public function getOssUploadTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssUploadToken',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/uploadToken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取图片上传oss token
     *  *
     * @param GetOssUploadTokenRequest $request GetOssUploadTokenRequest
     *
     * @return GetOssUploadTokenResponse GetOssUploadTokenResponse
     */
    public function getOssUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOssUploadTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取数据人合成信息
     *  *
     * @param GetProjectTaskRequest $request GetProjectTaskRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectTaskResponse GetProjectTaskResponse
     */
    public function getProjectTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/project/getProjectTask',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据人合成信息
     *  *
     * @param GetProjectTaskRequest $request GetProjectTaskRequest
     *
     * @return GetProjectTaskResponse GetProjectTaskResponse
     */
    public function getProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询文案
     *  *
     * @param string         $textId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextResponse GetTextResponse
     */
    public function getTextWithOptions($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案
     *  *
     * @param string $textId
     *
     * @return GetTextResponse GetTextResponse
     */
    public function getText($textId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextWithOptions($textId, $headers, $runtime);
    }

    /**
     * @summary 查询文案任务
     *  *
     * @param string         $textTaskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTextTaskResponse GetTextTaskResponse
     */
    public function getTextTaskWithOptions($textTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textTasks/' . OpenApiUtilClient::getEncodeParam($textTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案任务
     *  *
     * @param string $textTaskId
     *
     * @return GetTextTaskResponse GetTextTaskResponse
     */
    public function getTextTask($textTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextTaskWithOptions($textTaskId, $headers, $runtime);
    }

    /**
     * @summary 查询表单配置
     *  *
     * @param GetTextTemplateRequest $request GetTextTemplateRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextTemplateResponse GetTextTemplateResponse
     */
    public function getTextTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTextTemplate',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/commands/getTextTemplate',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询表单配置
     *  *
     * @param GetTextTemplateRequest $request GetTextTemplateRequest
     *
     * @return GetTextTemplateResponse GetTextTemplateResponse
     */
    public function getTextTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取数字人模特列表
     *  *
     * @param ListAnchorRequest $request ListAnchorRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnchorResponse ListAnchorResponse
     */
    public function listAnchorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anchorType)) {
            $query['anchorType'] = $request->anchorType;
        }
        if (!Utils::isUnset($request->coverRate)) {
            $query['coverRate'] = $request->coverRate;
        }
        if (!Utils::isUnset($request->digitalHumanType)) {
            $query['digitalHumanType'] = $request->digitalHumanType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->useScene)) {
            $query['useScene'] = $request->useScene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnchor',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/anchorOpen/listAnchor',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAnchorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数字人模特列表
     *  *
     * @param ListAnchorRequest $request ListAnchorRequest
     *
     * @return ListAnchorResponse ListAnchorResponse
     */
    public function listAnchor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnchorWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询文案主题列表
     *  *
     * @param ListTextThemesRequest $request ListTextThemesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextThemesResponse ListTextThemesResponse
     */
    public function listTextThemesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTextThemes',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textThemes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextThemesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案主题列表
     *  *
     * @param ListTextThemesRequest $request ListTextThemesRequest
     *
     * @return ListTextThemesResponse ListTextThemesResponse
     */
    public function listTextThemes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextThemesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举文案
     *  *
     * @param ListTextsRequest $request ListTextsRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextsResponse ListTextsResponse
     */
    public function listTextsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->generationSource)) {
            $query['generationSource'] = $request->generationSource;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publishStatus)) {
            $query['publishStatus'] = $request->publishStatus;
        }
        if (!Utils::isUnset($request->textStyleType)) {
            $query['textStyleType'] = $request->textStyleType;
        }
        if (!Utils::isUnset($request->textTheme)) {
            $query['textTheme'] = $request->textTheme;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTexts',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举文案
     *  *
     * @param ListTextsRequest $request ListTextsRequest
     *
     * @return ListTextsResponse ListTextsResponse
     */
    public function listTexts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取声音模版列表
     *  *
     * @param ListVoiceModelsRequest $request ListVoiceModelsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVoiceModelsResponse ListVoiceModelsResponse
     */
    public function listVoiceModelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->useScene)) {
            $query['useScene'] = $request->useScene;
        }
        if (!Utils::isUnset($request->voiceType)) {
            $query['voiceType'] = $request->voiceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceModels',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/voiceOpen/listVoiceModels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVoiceModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取声音模版列表
     *  *
     * @param ListVoiceModelsRequest $request ListVoiceModelsRequest
     *
     * @return ListVoiceModelsResponse ListVoiceModelsResponse
     */
    public function listVoiceModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVoiceModelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询数字人项目信息
     *  *
     * @param QueryAvatarProjectRequest $request QueryAvatarProjectRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAvatarProjectResponse QueryAvatarProjectResponse
     */
    public function queryAvatarProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['projectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvatarProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/queryAvatarProject',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数字人项目信息
     *  *
     * @param QueryAvatarProjectRequest $request QueryAvatarProjectRequest
     *
     * @return QueryAvatarProjectResponse QueryAvatarProjectResponse
     */
    public function queryAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查找资源
     *  *
     * @param QueryAvatarResourceRequest $request QueryAvatarResourceRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAvatarResourceResponse QueryAvatarResourceResponse
     */
    public function queryAvatarResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->idempotentId)) {
            $query['idempotentId'] = $request->idempotentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvatarResource',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/queryResource',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryAvatarResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查找资源
     *  *
     * @param QueryAvatarResourceRequest $request QueryAvatarResourceRequest
     *
     * @return QueryAvatarResourceResponse QueryAvatarResourceResponse
     */
    public function queryAvatarResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAvatarResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询离线数字人剩余资源
     *  *
     * @param SelectResourceRequest $request SelectResourceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectResourceResponse SelectResourceResponse
     */
    public function selectResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->idempotentId)) {
            $query['idempotentId'] = $request->idempotentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SelectResource',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/project/commands/overview',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SelectResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询离线数字人剩余资源
     *  *
     * @param SelectResourceRequest $request SelectResourceRequest
     *
     * @return SelectResourceResponse SelectResourceResponse
     */
    public function selectResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发送文本消息
     *  *
     * @param SendTextMsgRequest $request SendTextMsgRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SendTextMsgResponse SendTextMsgResponse
     */
    public function sendTextMsgWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->text)) {
            $body['text'] = $request->text;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendTextMsg',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/sendTextMsg',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendTextMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送文本消息
     *  *
     * @param SendTextMsgRequest $request SendTextMsgRequest
     *
     * @return SendTextMsgResponse SendTextMsgResponse
     */
    public function sendTextMsg($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendTextMsgWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 启动会话
     *  *
     * @param StartAvatarSessionRequest $request StartAvatarSessionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAvatarSessionResponse StartAvatarSessionResponse
     */
    public function startAvatarSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartAvatarSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/startAvatarSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动会话
     *  *
     * @param StartAvatarSessionRequest $request StartAvatarSessionRequest
     *
     * @return StartAvatarSessionResponse StartAvatarSessionResponse
     */
    public function startAvatarSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAvatarSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 停止会话
     *  *
     * @param StopAvatarSessionRequest $request StopAvatarSessionRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAvatarSessionResponse StopAvatarSessionResponse
     */
    public function stopAvatarSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopAvatarSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/stopAvatarSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止会话
     *  *
     * @param StopAvatarSessionRequest $request StopAvatarSessionRequest
     *
     * @return StopAvatarSessionResponse StopAvatarSessionResponse
     */
    public function stopAvatarSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAvatarSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频合成任务停止
     *  *
     * @param StopProjectTaskRequest $request StopProjectTaskRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StopProjectTaskResponse StopProjectTaskResponse
     */
    public function stopProjectTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopProjectTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/project/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频合成任务停止
     *  *
     * @param StopProjectTaskRequest $request StopProjectTaskRequest
     *
     * @return StopProjectTaskResponse StopProjectTaskResponse
     */
    public function stopProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 提交离线数字人合成任务
     *  *
     * @param SubmitProjectTaskRequest $request SubmitProjectTaskRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitProjectTaskResponse SubmitProjectTaskResponse
     */
    public function submitProjectTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->frames)) {
            $body['frames'] = $request->frames;
        }
        if (!Utils::isUnset($request->scaleType)) {
            $body['scaleType'] = $request->scaleType;
        }
        if (!Utils::isUnset($request->subtitleTag)) {
            $body['subtitleTag'] = $request->subtitleTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitProjectTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/project/submitProjectTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交离线数字人合成任务
     *  *
     * @param SubmitProjectTaskRequest $request SubmitProjectTaskRequest
     *
     * @return SubmitProjectTaskResponse SubmitProjectTaskResponse
     */
    public function submitProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitProjectTaskWithOptions($request, $headers, $runtime);
    }
}

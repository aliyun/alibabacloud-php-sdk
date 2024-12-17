<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\AddTextFeedbackResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CheckSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CloseAICoachTaskSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CloseAICoachTaskSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponse;
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
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateRealisticPortraitRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateRealisticPortraitResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationTextRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\DeleteIndividuationTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\FinishAICoachTaskSessionRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\FinishAICoachTaskSessionResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionReportRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionReportResponse;
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
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAnchorResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListVoiceModelsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OperateAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\OperateAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoShrinkRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryTextStreamResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectImageTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkMessageRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SendSdkMessageResponse;
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
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\TransferPortraitStyleRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\TransferPortraitStyleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IntelligentCreation extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'IntelligentCreation';
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddTextFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddTextFeedbackResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 批量查询项目信息
     *  *
     * @param BatchGetProjectTaskRequest $tmpReq  BatchGetProjectTaskRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetProjectTaskResponse BatchGetProjectTaskResponse
     */
    public function batchGetProjectTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchGetProjectTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIdList)) {
            $request->taskIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'taskIdList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->taskIdListShrink)) {
            $query['taskIdList'] = $request->taskIdListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetProjectTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/project/batchGetProjectTask',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchGetProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetProjectTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 批量查询项目信息
     *  *
     * @param BatchGetProjectTaskRequest $request BatchGetProjectTaskRequest
     *
     * @return BatchGetProjectTaskResponse BatchGetProjectTaskResponse
     */
    public function batchGetProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGetProjectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询文案
     *  *
     * @param BatchQueryIndividuationTextRequest $tmpReq  BatchQueryIndividuationTextRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchQueryIndividuationTextResponse BatchQueryIndividuationTextResponse
     */
    public function batchQueryIndividuationTextWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchQueryIndividuationTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->textIdList)) {
            $request->textIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textIdList, 'textIdList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->textIdListShrink)) {
            $query['textIdList'] = $request->textIdListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchQueryIndividuationText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/batchQueryText',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchQueryIndividuationTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchQueryIndividuationTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 批量查询文案
     *  *
     * @param BatchQueryIndividuationTextRequest $request BatchQueryIndividuationTextRequest
     *
     * @return BatchQueryIndividuationTextResponse BatchQueryIndividuationTextResponse
     */
    public function batchQueryIndividuationText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchQueryIndividuationTextWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckSessionResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 学员关闭会话
     *  *
     * @param CloseAICoachTaskSessionRequest $request CloseAICoachTaskSessionRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseAICoachTaskSessionResponse CloseAICoachTaskSessionResponse
     */
    public function closeAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseAICoachTaskSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/closeSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CloseAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseAICoachTaskSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 学员关闭会话
     *  *
     * @param CloseAICoachTaskSessionRequest $request CloseAICoachTaskSessionRequest
     *
     * @return CloseAICoachTaskSessionResponse CloseAICoachTaskSessionResponse
     */
    public function closeAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文本数量统计
     *  *
     * @param CountTextRequest $request CountTextRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CountTextResponse CountTextResponse
     */
    public function countTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->generationSource)) {
            $query['generationSource'] = $request->generationSource;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->publishStatus)) {
            $query['publishStatus'] = $request->publishStatus;
        }
        if (!Utils::isUnset($request->style)) {
            $query['style'] = $request->style;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CountText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/countText',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CountTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CountTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文本数量统计
     *  *
     * @param CountTextRequest $request CountTextRequest
     *
     * @return CountTextResponse CountTextResponse
     */
    public function countText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 学员开启对练会话
     *  *
     * @param CreateAICoachTaskSessionRequest $request CreateAICoachTaskSessionRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAICoachTaskSessionResponse CreateAICoachTaskSessionResponse
     */
    public function createAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAICoachTaskSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/startSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAICoachTaskSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 学员开启对练会话
     *  *
     * @param CreateAICoachTaskSessionRequest $request CreateAICoachTaskSessionRequest
     *
     * @return CreateAICoachTaskSessionResponse CreateAICoachTaskSessionResponse
     */
    public function createAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建照片数字人
     *  *
     * @param CreateAnchorRequest $request CreateAnchorRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnchorResponse CreateAnchorResponse
     */
    public function createAnchorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->anchorMaterialName)) {
            $body['anchorMaterialName'] = $request->anchorMaterialName;
        }
        if (!Utils::isUnset($request->coverUrl)) {
            $body['coverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->digitalHumanType)) {
            $body['digitalHumanType'] = $request->digitalHumanType;
        }
        if (!Utils::isUnset($request->gender)) {
            $body['gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->useScene)) {
            $body['useScene'] = $request->useScene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAnchor',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/anchorOpen/createAnchor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAnchorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAnchorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建照片数字人
     *  *
     * @param CreateAnchorRequest $request CreateAnchorRequest
     *
     * @return CreateAnchorResponse CreateAnchorResponse
     */
    public function createAnchor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnchorWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIllustrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 创建个性化文案项目
     *  *
     * @param CreateIndividuationProjectRequest $request CreateIndividuationProjectRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIndividuationProjectResponse CreateIndividuationProjectResponse
     */
    public function createIndividuationProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectInfo)) {
            $body['projectInfo'] = $request->projectInfo;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->purpose)) {
            $body['purpose'] = $request->purpose;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['sceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndividuationProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/createProject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateIndividuationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIndividuationProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建个性化文案项目
     *  *
     * @param CreateIndividuationProjectRequest $request CreateIndividuationProjectRequest
     *
     * @return CreateIndividuationProjectResponse CreateIndividuationProjectResponse
     */
    public function createIndividuationProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndividuationProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建个性化文案任务
     *  *
     * @param CreateIndividuationTextTaskRequest $request CreateIndividuationTextTaskRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIndividuationTextTaskResponse CreateIndividuationTextTaskResponse
     */
    public function createIndividuationTextTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->crowdPack)) {
            $body['crowdPack'] = $request->crowdPack;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['taskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndividuationTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/createTextTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateIndividuationTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIndividuationTextTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建个性化文案任务
     *  *
     * @param CreateIndividuationTextTaskRequest $request CreateIndividuationTextTaskRequest
     *
     * @return CreateIndividuationTextTaskResponse CreateIndividuationTextTaskResponse
     */
    public function createIndividuationTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndividuationTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 写实人像创作
     *  *
     * @param CreateRealisticPortraitRequest $request CreateRealisticPortraitRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRealisticPortraitResponse CreateRealisticPortraitResponse
     */
    public function createRealisticPortraitWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ages)) {
            $body['ages'] = $request->ages;
        }
        if (!Utils::isUnset($request->cloth)) {
            $body['cloth'] = $request->cloth;
        }
        if (!Utils::isUnset($request->color)) {
            $body['color'] = $request->color;
        }
        if (!Utils::isUnset($request->custom)) {
            $body['custom'] = $request->custom;
        }
        if (!Utils::isUnset($request->face)) {
            $body['face'] = $request->face;
        }
        if (!Utils::isUnset($request->figure)) {
            $body['figure'] = $request->figure;
        }
        if (!Utils::isUnset($request->gender)) {
            $body['gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->hairColor)) {
            $body['hairColor'] = $request->hairColor;
        }
        if (!Utils::isUnset($request->hairstyle)) {
            $body['hairstyle'] = $request->hairstyle;
        }
        if (!Utils::isUnset($request->height)) {
            $body['height'] = $request->height;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->numbers)) {
            $body['numbers'] = $request->numbers;
        }
        if (!Utils::isUnset($request->ratio)) {
            $body['ratio'] = $request->ratio;
        }
        if (!Utils::isUnset($request->width)) {
            $body['width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRealisticPortrait',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/images/portrait/realistic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRealisticPortraitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRealisticPortraitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 写实人像创作
     *  *
     * @param CreateRealisticPortraitRequest $request CreateRealisticPortraitRequest
     *
     * @return CreateRealisticPortraitResponse CreateRealisticPortraitResponse
     */
    public function createRealisticPortrait($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRealisticPortraitWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTextTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 删除个性化文案项目
     *  *
     * @param DeleteIndividuationProjectRequest $request DeleteIndividuationProjectRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIndividuationProjectResponse DeleteIndividuationProjectResponse
     */
    public function deleteIndividuationProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteIndividuationProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/deleteProject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteIndividuationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIndividuationProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除个性化文案项目
     *  *
     * @param DeleteIndividuationProjectRequest $request DeleteIndividuationProjectRequest
     *
     * @return DeleteIndividuationProjectResponse DeleteIndividuationProjectResponse
     */
    public function deleteIndividuationProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndividuationProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除个性化文案
     *  *
     * @param DeleteIndividuationTextRequest $request DeleteIndividuationTextRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIndividuationTextResponse DeleteIndividuationTextResponse
     */
    public function deleteIndividuationTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->textIdList)) {
            $body['textIdList'] = $request->textIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteIndividuationText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/deleteText',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteIndividuationTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIndividuationTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除个性化文案
     *  *
     * @param DeleteIndividuationTextRequest $request DeleteIndividuationTextRequest
     *
     * @return DeleteIndividuationTextResponse DeleteIndividuationTextResponse
     */
    public function deleteIndividuationText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndividuationTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 学员完成会话
     *  *
     * @param FinishAICoachTaskSessionRequest $request FinishAICoachTaskSessionRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return FinishAICoachTaskSessionResponse FinishAICoachTaskSessionResponse
     */
    public function finishAICoachTaskSessionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FinishAICoachTaskSession',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/finishSession',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return FinishAICoachTaskSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FinishAICoachTaskSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 学员完成会话
     *  *
     * @param FinishAICoachTaskSessionRequest $request FinishAICoachTaskSessionRequest
     *
     * @return FinishAICoachTaskSessionResponse FinishAICoachTaskSessionResponse
     */
    public function finishAICoachTaskSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishAICoachTaskSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 学员查询会话历史
     *  *
     * @param GetAICoachTaskSessionHistoryRequest $request GetAICoachTaskSessionHistoryRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAICoachTaskSessionHistoryResponse GetAICoachTaskSessionHistoryResponse
     */
    public function getAICoachTaskSessionHistoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAICoachTaskSessionHistory',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/querySessionHistory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAICoachTaskSessionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAICoachTaskSessionHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 学员查询会话历史
     *  *
     * @param GetAICoachTaskSessionHistoryRequest $request GetAICoachTaskSessionHistoryRequest
     *
     * @return GetAICoachTaskSessionHistoryResponse GetAICoachTaskSessionHistoryResponse
     */
    public function getAICoachTaskSessionHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachTaskSessionHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 学员查询会话评测报告
     *  *
     * @param GetAICoachTaskSessionReportRequest $request GetAICoachTaskSessionReportRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAICoachTaskSessionReportResponse GetAICoachTaskSessionReportResponse
     */
    public function getAICoachTaskSessionReportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sessionId)) {
            $query['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAICoachTaskSessionReport',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/queryTaskSessionReport',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAICoachTaskSessionReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAICoachTaskSessionReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 学员查询会话评测报告
     *  *
     * @param GetAICoachTaskSessionReportRequest $request GetAICoachTaskSessionReportRequest
     *
     * @return GetAICoachTaskSessionReportResponse GetAICoachTaskSessionReportResponse
     */
    public function getAICoachTaskSessionReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAICoachTaskSessionReportWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetIllustrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIllustrationResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIllustrationTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOssUploadTokenResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTextResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTextTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTextTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTextTemplateResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 营销文案互动问答
     *  *
     * @param InteractTextRequest $request InteractTextRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return InteractTextResponse InteractTextResponse
     */
    public function interactTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['sessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InteractText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/stream/interactText',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InteractTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InteractTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 营销文案互动问答
     *  *
     * @param InteractTextRequest $request InteractTextRequest
     *
     * @return InteractTextResponse InteractTextResponse
     */
    public function interactText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interactTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAICoachTaskPageRequest $request ListAICoachTaskPageRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAICoachTaskPageResponse ListAICoachTaskPageResponse
     */
    public function listAICoachTaskPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->studentId)) {
            $query['studentId'] = $request->studentId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAICoachTaskPage',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/aicoach/listTaskPage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAICoachTaskPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAICoachTaskPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAICoachTaskPageRequest $request ListAICoachTaskPageRequest
     *
     * @return ListAICoachTaskPageResponse ListAICoachTaskPageResponse
     */
    public function listAICoachTaskPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAICoachTaskPageWithOptions($request, $headers, $runtime);
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
        if (!Utils::isUnset($request->anchorCategory)) {
            $query['anchorCategory'] = $request->anchorCategory;
        }
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
        if (!Utils::isUnset($request->resSpecType)) {
            $query['resSpecType'] = $request->resSpecType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAnchorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnchorResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 批量查询数字人项目启动结果
     *  *
     * @param ListAvatarProjectRequest $tmpReq  ListAvatarProjectRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvatarProjectResponse ListAvatarProjectResponse
     */
    public function listAvatarProjectWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAvatarProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->projectIdList)) {
            $request->projectIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->projectIdList, 'projectIdList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->projectIdListShrink)) {
            $query['projectIdList'] = $request->projectIdListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvatarProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/listAvatarProject',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAvatarProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 批量查询数字人项目启动结果
     *  *
     * @param ListAvatarProjectRequest $request ListAvatarProjectRequest
     *
     * @return ListAvatarProjectResponse ListAvatarProjectResponse
     */
    public function listAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvatarProjectWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTextThemesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextThemesResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTextsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTextsResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (!Utils::isUnset($request->resSpecType)) {
            $query['resSpecType'] = $request->resSpecType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListVoiceModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVoiceModelsResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 操作实时数字人项目
     *  *
     * @param OperateAvatarProjectRequest $request OperateAvatarProjectRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateAvatarProjectResponse OperateAvatarProjectResponse
     */
    public function operateAvatarProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operateType)) {
            $body['operateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resChannelNumber)) {
            $body['resChannelNumber'] = $request->resChannelNumber;
        }
        if (!Utils::isUnset($request->resType)) {
            $body['resType'] = $request->resType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OperateAvatarProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/operateProjectAvatar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OperateAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OperateAvatarProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 操作实时数字人项目
     *  *
     * @param OperateAvatarProjectRequest $request OperateAvatarProjectRequest
     *
     * @return OperateAvatarProjectResponse OperateAvatarProjectResponse
     */
    public function operateAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateAvatarProjectWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAvatarProjectResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryAvatarResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAvatarResourceResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 查询个性化文案任务
     *  *
     * @param QueryIndividuationTextTaskRequest $request QueryIndividuationTextTaskRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryIndividuationTextTaskResponse QueryIndividuationTextTaskResponse
     */
    public function queryIndividuationTextTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIndividuationTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/individuationText/queryTextTask',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryIndividuationTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIndividuationTextTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询个性化文案任务
     *  *
     * @param QueryIndividuationTextTaskRequest $request QueryIndividuationTextTaskRequest
     *
     * @return QueryIndividuationTextTaskResponse QueryIndividuationTextTaskResponse
     */
    public function queryIndividuationTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIndividuationTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会话信息
     *  *
     * @param QuerySessionInfoRequest $tmpReq  QuerySessionInfoRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySessionInfoResponse QuerySessionInfoResponse
     */
    public function querySessionInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QuerySessionInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'statusList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['pageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $query['statusList'] = $request->statusListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySessionInfo',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/querySessionInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QuerySessionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySessionInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询会话信息
     *  *
     * @param QuerySessionInfoRequest $request QuerySessionInfoRequest
     *
     * @return QuerySessionInfoResponse QuerySessionInfoResponse
     */
    public function querySessionInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySessionInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 流式输出文案
     *  *
     * @param string         $textId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTextStreamResponse QueryTextStreamResponse
     */
    public function queryTextStreamWithOptions($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'QueryTextStream',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/stream/queryTextStream/' . OpenApiUtilClient::getEncodeParam($textId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryTextStreamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTextStreamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 流式输出文案
     *  *
     * @param string $textId
     *
     * @return QueryTextStreamResponse QueryTextStreamResponse
     */
    public function queryTextStream($textId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTextStreamWithOptions($textId, $headers, $runtime);
    }

    /**
     * @summary 保存实时数字人项目
     *  *
     * @param SaveAvatarProjectRequest $request SaveAvatarProjectRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveAvatarProjectResponse SaveAvatarProjectResponse
     */
    public function saveAvatarProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->frames)) {
            $body['frames'] = $request->frames;
        }
        if (!Utils::isUnset($request->operateType)) {
            $body['operateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resSpecType)) {
            $body['resSpecType'] = $request->resSpecType;
        }
        if (!Utils::isUnset($request->scaleType)) {
            $body['scaleType'] = $request->scaleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveAvatarProject',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/avatar/project/saveAvatarProject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SaveAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveAvatarProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 保存实时数字人项目
     *  *
     * @param SaveAvatarProjectRequest $request SaveAvatarProjectRequest
     *
     * @return SaveAvatarProjectResponse SaveAvatarProjectResponse
     */
    public function saveAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveAvatarProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询图片任务
     *  *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectImageTaskResponse SelectImageTaskResponse
     */
    public function selectImageTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SelectImageTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/images/portrait/select/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SelectImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectImageTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询图片任务
     *  *
     * @param string $taskId
     *
     * @return SelectImageTaskResponse SelectImageTaskResponse
     */
    public function selectImageTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectImageTaskWithOptions($taskId, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SelectResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectResourceResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 发送sdk消息
     *  *
     * @param SendSdkMessageRequest $request SendSdkMessageRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SendSdkMessageResponse SendSdkMessageResponse
     */
    public function sendSdkMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['data'] = $request->data;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $body['moduleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->operationName)) {
            $body['operationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendSdkMessage',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/sdk/sendMessage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendSdkMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendSdkMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 发送sdk消息
     *  *
     * @param SendSdkMessageRequest $request SendSdkMessageRequest
     *
     * @return SendSdkMessageResponse SendSdkMessageResponse
     */
    public function sendSdkMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendSdkMessageWithOptions($request, $headers, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendTextMsgResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendTextMsgResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (!Utils::isUnset($request->customPushUrl)) {
            $body['customPushUrl'] = $request->customPushUrl;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAvatarSessionResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopAvatarSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAvatarSessionResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopProjectTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (!Utils::isUnset($request->transparentBackground)) {
            $body['transparentBackground'] = $request->transparentBackground;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitProjectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitProjectTaskResponse::fromMap($this->execute($params, $req, $runtime));
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

    /**
     * @summary 人像风格变化
     *  *
     * @param TransferPortraitStyleRequest $request TransferPortraitStyleRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferPortraitStyleResponse TransferPortraitStyleResponse
     */
    public function transferPortraitStyleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->height)) {
            $body['height'] = $request->height;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['imageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->numbers)) {
            $body['numbers'] = $request->numbers;
        }
        if (!Utils::isUnset($request->redrawAmplitude)) {
            $body['redrawAmplitude'] = $request->redrawAmplitude;
        }
        if (!Utils::isUnset($request->style)) {
            $body['style'] = $request->style;
        }
        if (!Utils::isUnset($request->width)) {
            $body['width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransferPortraitStyle',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/images/portrait/transferPortraitStyle',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TransferPortraitStyleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TransferPortraitStyleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 人像风格变化
     *  *
     * @param TransferPortraitStyleRequest $request TransferPortraitStyleRequest
     *
     * @return TransferPortraitStyleResponse TransferPortraitStyleResponse
     */
    public function transferPortraitStyle($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferPortraitStyleWithOptions($request, $headers, $runtime);
    }
}

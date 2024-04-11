<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\AuthUserRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\AuthUserResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\BatchQueryMotionShopTaskStatusRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\BatchQueryMotionShopTaskStatusResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateAvatarTalkProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateAvatarTalkProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateDigitalHumanProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateDigitalHumanProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateLivePortraitProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\CreateLivePortraitProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GenerateMotionShopVideoUploadUrlRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GenerateMotionShopVideoUploadUrlResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GetMapDataRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GetMapDataResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GetMapPublishDataRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\GetMapPublishDataResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\InitLocateRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\InitLocateResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListCommonMaterialsRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListCommonMaterialsResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListDigitalHumanMaterialsRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListDigitalHumanMaterialsResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListMotionShopTasksRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\ListMotionShopTasksResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LivePortraitFaceDetectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LivePortraitFaceDetectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LocateRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LocateResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LoginHuggingFaceRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LoginHuggingFaceResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LoginModelScopeRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\LoginModelScopeResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\MotionShopVideoDetectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\MotionShopVideoDetectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBatchQueryObjectGenerationProjectStatusRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBatchQueryObjectGenerationProjectStatusResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBatchQueryObjectProjectStatusRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBatchQueryObjectProjectStatusResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildFeatureToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildFeatureToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildLivePortraitModelScopeProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildLivePortraitModelScopeProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildObjectGenerationProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildObjectGenerationProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildObjectProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildObjectProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildPakRenderProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildPakRenderProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildTextToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopBuildTextToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateFeatureToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateFeatureToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateLivePortraitModelScopeProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateLivePortraitModelScopeProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateMaterialRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateMaterialResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateObjectGenerationProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateObjectGenerationProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateObjectProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateObjectProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreatePakRenderProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreatePakRenderProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateTextToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopCreateTextToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopDeleteMaterialRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopDeleteMaterialResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListCommonMaterialsAllRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListCommonMaterialsAllResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListFeatureToAvatarMaterialsRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListFeatureToAvatarMaterialsResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListFeatureToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListFeatureToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListLivePortraitModelScopeMaterialsRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListLivePortraitModelScopeMaterialsResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectCaseRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectCaseResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectGenerationProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectGenerationProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListPakRenderExpressionRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListPakRenderExpressionResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListTextToAvatarProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListTextToAvatarProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectProjectDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectProjectDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectRetrievalRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectRetrievalResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectRetrievalUploadDataRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectRetrievalUploadDataResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryAvatarProjectDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryAvatarProjectDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLivePortraitModelScopeProjectDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLivePortraitModelScopeProjectDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryObjectGenerationProjectDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryObjectGenerationProjectDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopRetryAITryOnTaskRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopRetryAITryOnTaskResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopSubmitAITryOnJobRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopSubmitAITryOnJobResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopUploadMaterialRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopUploadMaterialResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopVideoSaveSourceRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopVideoSaveSourceResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryDigitalHumanProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryDigitalHumanProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryLongTtsResultRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryLongTtsResultResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryMotionShopVideoDetectResultRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryMotionShopVideoDetectResultResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\SubmitLongTtsTaskRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\SubmitLongTtsTaskResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\SubmitMotionShopTaskRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\SubmitMotionShopTaskResponse;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\UpdateUserEmailRequest;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\UpdateUserEmailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class XrEngine extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'xrengine-daily.aliyuncs.com',
            'ap-northeast-2-pop'          => 'xrengine-daily.aliyuncs.com',
            'ap-south-1'                  => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-1'              => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-2'              => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-3'              => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-5'              => 'xrengine-daily.aliyuncs.com',
            'cn-beijing'                  => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-finance-1'        => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-gov-1'            => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'xrengine-daily.aliyuncs.com',
            'cn-chengdu'                  => 'xrengine-daily.aliyuncs.com',
            'cn-edge-1'                   => 'xrengine-daily.aliyuncs.com',
            'cn-fujian'                   => 'xrengine-daily.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-finance'         => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'xrengine-daily.aliyuncs.com',
            'cn-hongkong'                 => 'xrengine-daily.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'xrengine-daily.aliyuncs.com',
            'cn-huhehaote'                => 'xrengine-daily.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'xrengine-daily.aliyuncs.com',
            'cn-north-2-gov-1'            => 'xrengine-daily.aliyuncs.com',
            'cn-qingdao'                  => 'xrengine-daily.aliyuncs.com',
            'cn-qingdao-nebula'           => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai'                 => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-inner'           => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen'                 => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-inner'           => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'xrengine-daily.aliyuncs.com',
            'cn-wuhan'                    => 'xrengine-daily.aliyuncs.com',
            'cn-wulanchabu'               => 'xrengine-daily.aliyuncs.com',
            'cn-yushanfang'               => 'xrengine-daily.aliyuncs.com',
            'cn-zhangbei'                 => 'xrengine-daily.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'xrengine-daily.aliyuncs.com',
            'cn-zhangjiakou'              => 'xrengine-daily.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'xrengine-daily.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'xrengine-daily.aliyuncs.com',
            'eu-central-1'                => 'xrengine-daily.aliyuncs.com',
            'eu-west-1'                   => 'xrengine-daily.aliyuncs.com',
            'eu-west-1-oxs'               => 'xrengine-daily.aliyuncs.com',
            'me-east-1'                   => 'xrengine-daily.aliyuncs.com',
            'rus-west-1-pop'              => 'xrengine-daily.aliyuncs.com',
            'us-east-1'                   => 'xrengine-daily.aliyuncs.com',
            'us-west-1'                   => 'xrengine-daily.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('xrengine', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AuthUserRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AuthUserResponse
     */
    public function authUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthUser',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthUserRequest $request
     *
     * @return AuthUserResponse
     */
    public function authUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authUserWithOptions($request, $runtime);
    }

    /**
     * @param BatchQueryMotionShopTaskStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchQueryMotionShopTaskStatusResponse
     */
    public function batchQueryMotionShopTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchQueryMotionShopTaskStatus',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchQueryMotionShopTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchQueryMotionShopTaskStatusRequest $request
     *
     * @return BatchQueryMotionShopTaskStatusResponse
     */
    public function batchQueryMotionShopTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryMotionShopTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateAvatarTalkProjectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAvatarTalkProjectResponse
     */
    public function createAvatarTalkProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->avatarProjectId)) {
            $body['AvatarProjectId'] = $request->avatarProjectId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->ttsVoice)) {
            $body['TtsVoice'] = $request->ttsVoice;
        }
        if (!Utils::isUnset($request->txtContent)) {
            $body['TxtContent'] = $request->txtContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAvatarTalkProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAvatarTalkProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAvatarTalkProjectRequest $request
     *
     * @return CreateAvatarTalkProjectResponse
     */
    public function createAvatarTalkProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvatarTalkProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateDigitalHumanProjectRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDigitalHumanProjectResponse
     */
    public function createDigitalHumanProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->audioId)) {
            $body['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->audioUrl)) {
            $body['AudioUrl'] = $request->audioUrl;
        }
        if (!Utils::isUnset($request->backgroundId)) {
            $body['BackgroundId'] = $request->backgroundId;
        }
        if (!Utils::isUnset($request->backgroundUrl)) {
            $body['BackgroundUrl'] = $request->backgroundUrl;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->foregroundId)) {
            $body['ForegroundId'] = $request->foregroundId;
        }
        if (!Utils::isUnset($request->foregroundUrl)) {
            $body['ForegroundUrl'] = $request->foregroundUrl;
        }
        if (!Utils::isUnset($request->humanLayerStyle)) {
            $body['HumanLayerStyle'] = $request->humanLayerStyle;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $body['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->ttsVoiceId)) {
            $body['TtsVoiceId'] = $request->ttsVoiceId;
        }
        if (!Utils::isUnset($request->watermarkImageUrl)) {
            $body['WatermarkImageUrl'] = $request->watermarkImageUrl;
        }
        if (!Utils::isUnset($request->watermarkStyle)) {
            $body['WatermarkStyle'] = $request->watermarkStyle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDigitalHumanProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDigitalHumanProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDigitalHumanProjectRequest $request
     *
     * @return CreateDigitalHumanProjectResponse
     */
    public function createDigitalHumanProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDigitalHumanProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateLivePortraitProjectRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateLivePortraitProjectResponse
     */
    public function createLivePortraitProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->audioId)) {
            $body['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->audioUrl)) {
            $body['AudioUrl'] = $request->audioUrl;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->customParams)) {
            $body['CustomParams'] = $request->customParams;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->lightModel)) {
            $body['LightModel'] = $request->lightModel;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $body['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->ttsVoiceId)) {
            $body['TtsVoiceId'] = $request->ttsVoiceId;
        }
        if (!Utils::isUnset($request->watermarkImageUrl)) {
            $body['WatermarkImageUrl'] = $request->watermarkImageUrl;
        }
        if (!Utils::isUnset($request->watermarkStyle)) {
            $body['WatermarkStyle'] = $request->watermarkStyle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLivePortraitProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLivePortraitProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLivePortraitProjectRequest $request
     *
     * @return CreateLivePortraitProjectResponse
     */
    public function createLivePortraitProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePortraitProjectWithOptions($request, $runtime);
    }

    /**
     * @param GenerateMotionShopVideoUploadUrlRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GenerateMotionShopVideoUploadUrlResponse
     */
    public function generateMotionShopVideoUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateMotionShopVideoUploadUrl',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateMotionShopVideoUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateMotionShopVideoUploadUrlRequest $request
     *
     * @return GenerateMotionShopVideoUploadUrlResponse
     */
    public function generateMotionShopVideoUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateMotionShopVideoUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetMapDataRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetMapDataResponse
     */
    public function getMapDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMapData',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMapDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMapDataRequest $request
     *
     * @return GetMapDataResponse
     */
    public function getMapData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMapDataWithOptions($request, $runtime);
    }

    /**
     * @param GetMapPublishDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMapPublishDataResponse
     */
    public function getMapPublishDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMapPublishData',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMapPublishDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMapPublishDataRequest $request
     *
     * @return GetMapPublishDataResponse
     */
    public function getMapPublishData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMapPublishDataWithOptions($request, $runtime);
    }

    /**
     * @param InitLocateRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitLocateResponse
     */
    public function initLocateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitLocate',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitLocateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitLocateRequest $request
     *
     * @return InitLocateResponse
     */
    public function initLocate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initLocateWithOptions($request, $runtime);
    }

    /**
     * @param ListCommonMaterialsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCommonMaterialsResponse
     */
    public function listCommonMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommonMaterials',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommonMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCommonMaterialsRequest $request
     *
     * @return ListCommonMaterialsResponse
     */
    public function listCommonMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param ListDigitalHumanMaterialsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDigitalHumanMaterialsResponse
     */
    public function listDigitalHumanMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->onlyPersonalMaterials)) {
            $body['OnlyPersonalMaterials'] = $request->onlyPersonalMaterials;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->types)) {
            $body['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDigitalHumanMaterials',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDigitalHumanMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDigitalHumanMaterialsRequest $request
     *
     * @return ListDigitalHumanMaterialsResponse
     */
    public function listDigitalHumanMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDigitalHumanMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param ListLocationServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLocationServiceResponse
     */
    public function listLocationServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLocationService',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLocationServiceRequest $request
     *
     * @return ListLocationServiceResponse
     */
    public function listLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLocationServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListMotionShopTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMotionShopTasksResponse
     */
    public function listMotionShopTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMotionShopTasks',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMotionShopTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMotionShopTasksRequest $request
     *
     * @return ListMotionShopTasksResponse
     */
    public function listMotionShopTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMotionShopTasksWithOptions($request, $runtime);
    }

    /**
     * @param LivePortraitFaceDetectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return LivePortraitFaceDetectResponse
     */
    public function livePortraitFaceDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LivePortraitFaceDetect',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LivePortraitFaceDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LivePortraitFaceDetectRequest $request
     *
     * @return LivePortraitFaceDetectResponse
     */
    public function livePortraitFaceDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->livePortraitFaceDetectWithOptions($request, $runtime);
    }

    /**
     * @param LocateRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return LocateResponse
     */
    public function locateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->image)) {
            $body['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Locate',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LocateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LocateRequest $request
     *
     * @return LocateResponse
     */
    public function locate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->locateWithOptions($request, $runtime);
    }

    /**
     * @param LoginHuggingFaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return LoginHuggingFaceResponse
     */
    public function loginHuggingFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LoginHuggingFace',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoginHuggingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LoginHuggingFaceRequest $request
     *
     * @return LoginHuggingFaceResponse
     */
    public function loginHuggingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginHuggingFaceWithOptions($request, $runtime);
    }

    /**
     * @param LoginModelScopeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return LoginModelScopeResponse
     */
    public function loginModelScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->empId)) {
            $body['EmpId'] = $request->empId;
        }
        if (!Utils::isUnset($request->empName)) {
            $body['EmpName'] = $request->empName;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LoginModelScope',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoginModelScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LoginModelScopeRequest $request
     *
     * @return LoginModelScopeResponse
     */
    public function loginModelScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginModelScopeWithOptions($request, $runtime);
    }

    /**
     * @param MotionShopVideoDetectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MotionShopVideoDetectResponse
     */
    public function motionShopVideoDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->ossKey)) {
            $body['OssKey'] = $request->ossKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MotionShopVideoDetect',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MotionShopVideoDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MotionShopVideoDetectRequest $request
     *
     * @return MotionShopVideoDetectResponse
     */
    public function motionShopVideoDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->motionShopVideoDetectWithOptions($request, $runtime);
    }

    /**
     * @param PopBatchQueryObjectGenerationProjectStatusRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return PopBatchQueryObjectGenerationProjectStatusResponse
     */
    public function popBatchQueryObjectGenerationProjectStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->projectIds)) {
            $body['ProjectIds'] = $request->projectIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBatchQueryObjectGenerationProjectStatus',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBatchQueryObjectGenerationProjectStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBatchQueryObjectGenerationProjectStatusRequest $request
     *
     * @return PopBatchQueryObjectGenerationProjectStatusResponse
     */
    public function popBatchQueryObjectGenerationProjectStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBatchQueryObjectGenerationProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param PopBatchQueryObjectProjectStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PopBatchQueryObjectProjectStatusResponse
     */
    public function popBatchQueryObjectProjectStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->projectIds)) {
            $body['ProjectIds'] = $request->projectIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBatchQueryObjectProjectStatus',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBatchQueryObjectProjectStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBatchQueryObjectProjectStatusRequest $request
     *
     * @return PopBatchQueryObjectProjectStatusResponse
     */
    public function popBatchQueryObjectProjectStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBatchQueryObjectProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildFeatureToAvatarProjectRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return PopBuildFeatureToAvatarProjectResponse
     */
    public function popBuildFeatureToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildFeatureToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildFeatureToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildFeatureToAvatarProjectRequest $request
     *
     * @return PopBuildFeatureToAvatarProjectResponse
     */
    public function popBuildFeatureToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildFeatureToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildLivePortraitModelScopeProjectRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return PopBuildLivePortraitModelScopeProjectResponse
     */
    public function popBuildLivePortraitModelScopeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildLivePortraitModelScopeProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildLivePortraitModelScopeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildLivePortraitModelScopeProjectRequest $request
     *
     * @return PopBuildLivePortraitModelScopeProjectResponse
     */
    public function popBuildLivePortraitModelScopeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildLivePortraitModelScopeProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildObjectGenerationProjectRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return PopBuildObjectGenerationProjectResponse
     */
    public function popBuildObjectGenerationProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildObjectGenerationProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildObjectGenerationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildObjectGenerationProjectRequest $request
     *
     * @return PopBuildObjectGenerationProjectResponse
     */
    public function popBuildObjectGenerationProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildObjectGenerationProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildObjectProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PopBuildObjectProjectResponse
     */
    public function popBuildObjectProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildObjectProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildObjectProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildObjectProjectRequest $request
     *
     * @return PopBuildObjectProjectResponse
     */
    public function popBuildObjectProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildObjectProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildPakRenderProjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PopBuildPakRenderProjectResponse
     */
    public function popBuildPakRenderProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildPakRenderProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildPakRenderProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildPakRenderProjectRequest $request
     *
     * @return PopBuildPakRenderProjectResponse
     */
    public function popBuildPakRenderProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildPakRenderProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopBuildTextToAvatarProjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PopBuildTextToAvatarProjectResponse
     */
    public function popBuildTextToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopBuildTextToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopBuildTextToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopBuildTextToAvatarProjectRequest $request
     *
     * @return PopBuildTextToAvatarProjectResponse
     */
    public function popBuildTextToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popBuildTextToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateFeatureToAvatarProjectRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return PopCreateFeatureToAvatarProjectResponse
     */
    public function popCreateFeatureToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateFeatureToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateFeatureToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateFeatureToAvatarProjectRequest $request
     *
     * @return PopCreateFeatureToAvatarProjectResponse
     */
    public function popCreateFeatureToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateFeatureToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateLivePortraitModelScopeProjectRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return PopCreateLivePortraitModelScopeProjectResponse
     */
    public function popCreateLivePortraitModelScopeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateLivePortraitModelScopeProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateLivePortraitModelScopeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateLivePortraitModelScopeProjectRequest $request
     *
     * @return PopCreateLivePortraitModelScopeProjectResponse
     */
    public function popCreateLivePortraitModelScopeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateLivePortraitModelScopeProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PopCreateMaterialResponse
     */
    public function popCreateMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->checkStatus)) {
            $body['CheckStatus'] = $request->checkStatus;
        }
        if (!Utils::isUnset($request->ext)) {
            $body['Ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->listStatus)) {
            $body['ListStatus'] = $request->listStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $body['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateMaterial',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateMaterialRequest $request
     *
     * @return PopCreateMaterialResponse
     */
    public function popCreateMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateMaterialWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateObjectGenerationProjectRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PopCreateObjectGenerationProjectResponse
     */
    public function popCreateObjectGenerationProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->bizUsage)) {
            $body['BizUsage'] = $request->bizUsage;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateObjectGenerationProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateObjectGenerationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateObjectGenerationProjectRequest $request
     *
     * @return PopCreateObjectGenerationProjectResponse
     */
    public function popCreateObjectGenerationProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateObjectGenerationProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateObjectProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PopCreateObjectProjectResponse
     */
    public function popCreateObjectProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoBuild)) {
            $body['AutoBuild'] = $request->autoBuild;
        }
        if (!Utils::isUnset($request->bizUsage)) {
            $body['BizUsage'] = $request->bizUsage;
        }
        if (!Utils::isUnset($request->customSource)) {
            $body['CustomSource'] = $request->customSource;
        }
        if (!Utils::isUnset($request->dependencies)) {
            $body['Dependencies'] = $request->dependencies;
        }
        if (!Utils::isUnset($request->foreignUid)) {
            $body['ForeignUid'] = $request->foreignUid;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->recommendStatus)) {
            $body['RecommendStatus'] = $request->recommendStatus;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateObjectProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateObjectProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateObjectProjectRequest $request
     *
     * @return PopCreateObjectProjectResponse
     */
    public function popCreateObjectProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateObjectProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreatePakRenderProjectRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PopCreatePakRenderProjectResponse
     */
    public function popCreatePakRenderProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreatePakRenderProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreatePakRenderProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreatePakRenderProjectRequest $request
     *
     * @return PopCreatePakRenderProjectResponse
     */
    public function popCreatePakRenderProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreatePakRenderProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopCreateTextToAvatarProjectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PopCreateTextToAvatarProjectResponse
     */
    public function popCreateTextToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->intro)) {
            $body['Intro'] = $request->intro;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopCreateTextToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopCreateTextToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopCreateTextToAvatarProjectRequest $request
     *
     * @return PopCreateTextToAvatarProjectResponse
     */
    public function popCreateTextToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popCreateTextToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopDeleteMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PopDeleteMaterialResponse
     */
    public function popDeleteMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopDeleteMaterial',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopDeleteMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopDeleteMaterialRequest $request
     *
     * @return PopDeleteMaterialResponse
     */
    public function popDeleteMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popDeleteMaterialWithOptions($request, $runtime);
    }

    /**
     * @param PopGetAITryOnJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PopGetAITryOnJobResponse
     */
    public function popGetAITryOnJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->withMaterial)) {
            $query['WithMaterial'] = $request->withMaterial;
        }
        if (!Utils::isUnset($request->withResult)) {
            $query['WithResult'] = $request->withResult;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopGetAITryOnJob',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopGetAITryOnJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopGetAITryOnJobRequest $request
     *
     * @return PopGetAITryOnJobResponse
     */
    public function popGetAITryOnJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popGetAITryOnJobWithOptions($request, $runtime);
    }

    /**
     * @param PopListAITryOnJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PopListAITryOnJobsResponse
     */
    public function popListAITryOnJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListAITryOnJobs',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListAITryOnJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListAITryOnJobsRequest $request
     *
     * @return PopListAITryOnJobsResponse
     */
    public function popListAITryOnJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListAITryOnJobsWithOptions($request, $runtime);
    }

    /**
     * @param PopListCommonMaterialsAllRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PopListCommonMaterialsAllResponse
     */
    public function popListCommonMaterialsAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->listStatus)) {
            $query['ListStatus'] = $request->listStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListCommonMaterialsAll',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListCommonMaterialsAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListCommonMaterialsAllRequest $request
     *
     * @return PopListCommonMaterialsAllResponse
     */
    public function popListCommonMaterialsAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListCommonMaterialsAllWithOptions($request, $runtime);
    }

    /**
     * @param PopListFeatureToAvatarMaterialsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return PopListFeatureToAvatarMaterialsResponse
     */
    public function popListFeatureToAvatarMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->listStatus)) {
            $body['ListStatus'] = $request->listStatus;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListFeatureToAvatarMaterials',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListFeatureToAvatarMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListFeatureToAvatarMaterialsRequest $request
     *
     * @return PopListFeatureToAvatarMaterialsResponse
     */
    public function popListFeatureToAvatarMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListFeatureToAvatarMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param PopListFeatureToAvatarProjectRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return PopListFeatureToAvatarProjectResponse
     */
    public function popListFeatureToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListFeatureToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListFeatureToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListFeatureToAvatarProjectRequest $request
     *
     * @return PopListFeatureToAvatarProjectResponse
     */
    public function popListFeatureToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListFeatureToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopListLivePortraitModelScopeMaterialsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return PopListLivePortraitModelScopeMaterialsResponse
     */
    public function popListLivePortraitModelScopeMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->types)) {
            $body['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListLivePortraitModelScopeMaterials',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListLivePortraitModelScopeMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListLivePortraitModelScopeMaterialsRequest $request
     *
     * @return PopListLivePortraitModelScopeMaterialsResponse
     */
    public function popListLivePortraitModelScopeMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListLivePortraitModelScopeMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param PopListObjectCaseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PopListObjectCaseResponse
     */
    public function popListObjectCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListObjectCase',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListObjectCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListObjectCaseRequest $request
     *
     * @return PopListObjectCaseResponse
     */
    public function popListObjectCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListObjectCaseWithOptions($request, $runtime);
    }

    /**
     * @param PopListObjectGenerationProjectRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return PopListObjectGenerationProjectResponse
     */
    public function popListObjectGenerationProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListObjectGenerationProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListObjectGenerationProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListObjectGenerationProjectRequest $request
     *
     * @return PopListObjectGenerationProjectResponse
     */
    public function popListObjectGenerationProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListObjectGenerationProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopListObjectProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PopListObjectProjectResponse
     */
    public function popListObjectProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $body['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->customSource)) {
            $body['CustomSource'] = $request->customSource;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->withSource)) {
            $body['WithSource'] = $request->withSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListObjectProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListObjectProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListObjectProjectRequest $request
     *
     * @return PopListObjectProjectResponse
     */
    public function popListObjectProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListObjectProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopListPakRenderExpressionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PopListPakRenderExpressionResponse
     */
    public function popListPakRenderExpressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listStatus)) {
            $query['ListStatus'] = $request->listStatus;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListPakRenderExpression',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListPakRenderExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListPakRenderExpressionRequest $request
     *
     * @return PopListPakRenderExpressionResponse
     */
    public function popListPakRenderExpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListPakRenderExpressionWithOptions($request, $runtime);
    }

    /**
     * @param PopListTextToAvatarProjectRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PopListTextToAvatarProjectResponse
     */
    public function popListTextToAvatarProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopListTextToAvatarProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopListTextToAvatarProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopListTextToAvatarProjectRequest $request
     *
     * @return PopListTextToAvatarProjectResponse
     */
    public function popListTextToAvatarProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popListTextToAvatarProjectWithOptions($request, $runtime);
    }

    /**
     * @param PopObjectProjectDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PopObjectProjectDetailResponse
     */
    public function popObjectProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopObjectProjectDetail',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopObjectProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopObjectProjectDetailRequest $request
     *
     * @return PopObjectProjectDetailResponse
     */
    public function popObjectProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popObjectProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param PopObjectRetrievalRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PopObjectRetrievalResponse
     */
    public function popObjectRetrievalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->topK)) {
            $body['TopK'] = $request->topK;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopObjectRetrieval',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopObjectRetrievalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopObjectRetrievalRequest $request
     *
     * @return PopObjectRetrievalResponse
     */
    public function popObjectRetrieval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popObjectRetrievalWithOptions($request, $runtime);
    }

    /**
     * @param PopObjectRetrievalUploadDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PopObjectRetrievalUploadDataResponse
     */
    public function popObjectRetrievalUploadDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopObjectRetrievalUploadData',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopObjectRetrievalUploadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopObjectRetrievalUploadDataRequest $request
     *
     * @return PopObjectRetrievalUploadDataResponse
     */
    public function popObjectRetrievalUploadData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popObjectRetrievalUploadDataWithOptions($request, $runtime);
    }

    /**
     * @param PopQueryAvatarProjectDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PopQueryAvatarProjectDetailResponse
     */
    public function popQueryAvatarProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopQueryAvatarProjectDetail',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopQueryAvatarProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopQueryAvatarProjectDetailRequest $request
     *
     * @return PopQueryAvatarProjectDetailResponse
     */
    public function popQueryAvatarProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popQueryAvatarProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param PopQueryLatestAvatarProjectDetailByUserRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return PopQueryLatestAvatarProjectDetailByUserResponse
     */
    public function popQueryLatestAvatarProjectDetailByUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopQueryLatestAvatarProjectDetailByUser',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopQueryLatestAvatarProjectDetailByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopQueryLatestAvatarProjectDetailByUserRequest $request
     *
     * @return PopQueryLatestAvatarProjectDetailByUserResponse
     */
    public function popQueryLatestAvatarProjectDetailByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popQueryLatestAvatarProjectDetailByUserWithOptions($request, $runtime);
    }

    /**
     * @param PopQueryLivePortraitModelScopeProjectDetailRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return PopQueryLivePortraitModelScopeProjectDetailResponse
     */
    public function popQueryLivePortraitModelScopeProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopQueryLivePortraitModelScopeProjectDetail',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopQueryLivePortraitModelScopeProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopQueryLivePortraitModelScopeProjectDetailRequest $request
     *
     * @return PopQueryLivePortraitModelScopeProjectDetailResponse
     */
    public function popQueryLivePortraitModelScopeProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popQueryLivePortraitModelScopeProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param PopQueryObjectGenerationProjectDetailRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return PopQueryObjectGenerationProjectDetailResponse
     */
    public function popQueryObjectGenerationProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopQueryObjectGenerationProjectDetail',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopQueryObjectGenerationProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopQueryObjectGenerationProjectDetailRequest $request
     *
     * @return PopQueryObjectGenerationProjectDetailResponse
     */
    public function popQueryObjectGenerationProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popQueryObjectGenerationProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param PopRetryAITryOnTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PopRetryAITryOnTaskResponse
     */
    public function popRetryAITryOnTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopRetryAITryOnTask',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopRetryAITryOnTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopRetryAITryOnTaskRequest $request
     *
     * @return PopRetryAITryOnTaskResponse
     */
    public function popRetryAITryOnTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popRetryAITryOnTaskWithOptions($request, $runtime);
    }

    /**
     * @param PopSubmitAITryOnJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PopSubmitAITryOnJobResponse
     */
    public function popSubmitAITryOnJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bottomsId)) {
            $query['BottomsId'] = $request->bottomsId;
        }
        if (!Utils::isUnset($request->clothingType)) {
            $query['ClothingType'] = $request->clothingType;
        }
        if (!Utils::isUnset($request->generatePictureNum)) {
            $query['GeneratePictureNum'] = $request->generatePictureNum;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->shoeType)) {
            $query['ShoeType'] = $request->shoeType;
        }
        if (!Utils::isUnset($request->suitId)) {
            $query['SuitId'] = $request->suitId;
        }
        if (!Utils::isUnset($request->topsId)) {
            $query['TopsId'] = $request->topsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopSubmitAITryOnJob',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopSubmitAITryOnJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopSubmitAITryOnJobRequest $request
     *
     * @return PopSubmitAITryOnJobResponse
     */
    public function popSubmitAITryOnJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popSubmitAITryOnJobWithOptions($request, $runtime);
    }

    /**
     * @param PopUploadMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PopUploadMaterialResponse
     */
    public function popUploadMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PopUploadMaterial',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopUploadMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopUploadMaterialRequest $request
     *
     * @return PopUploadMaterialResponse
     */
    public function popUploadMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popUploadMaterialWithOptions($request, $runtime);
    }

    /**
     * @param PopVideoSaveSourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PopVideoSaveSourceResponse
     */
    public function popVideoSaveSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $body = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PopVideoSaveSource',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PopVideoSaveSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PopVideoSaveSourceRequest $request
     *
     * @return PopVideoSaveSourceResponse
     */
    public function popVideoSaveSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->popVideoSaveSourceWithOptions($request, $runtime);
    }

    /**
     * @param QueryDigitalHumanProjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDigitalHumanProjectResponse
     */
    public function queryDigitalHumanProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->ids)) {
            $body['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDigitalHumanProject',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDigitalHumanProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDigitalHumanProjectRequest $request
     *
     * @return QueryDigitalHumanProjectResponse
     */
    public function queryDigitalHumanProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalHumanProjectWithOptions($request, $runtime);
    }

    /**
     * @param QueryLongTtsResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryLongTtsResultResponse
     */
    public function queryLongTtsResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLongTtsResult',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLongTtsResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLongTtsResultRequest $request
     *
     * @return QueryLongTtsResultResponse
     */
    public function queryLongTtsResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLongTtsResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryMotionShopVideoDetectResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryMotionShopVideoDetectResultResponse
     */
    public function queryMotionShopVideoDetectResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMotionShopVideoDetectResult',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMotionShopVideoDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMotionShopVideoDetectResultRequest $request
     *
     * @return QueryMotionShopVideoDetectResultResponse
     */
    public function queryMotionShopVideoDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMotionShopVideoDetectResultWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLongTtsTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitLongTtsTaskResponse
     */
    public function submitLongTtsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jwtToken)) {
            $query['JwtToken'] = $request->jwtToken;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->ttsVoiceId)) {
            $body['TtsVoiceId'] = $request->ttsVoiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitLongTtsTask',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLongTtsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitLongTtsTaskRequest $request
     *
     * @return SubmitLongTtsTaskResponse
     */
    public function submitLongTtsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLongTtsTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMotionShopTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMotionShopTaskResponse
     */
    public function submitMotionShopTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->avatarId)) {
            $body['AvatarId'] = $request->avatarId;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        if (!Utils::isUnset($request->selectedBoxIndex)) {
            $body['SelectedBoxIndex'] = $request->selectedBoxIndex;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitMotionShopTask',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMotionShopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMotionShopTaskRequest $request
     *
     * @return SubmitMotionShopTaskResponse
     */
    public function submitMotionShopTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMotionShopTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserEmailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserEmailResponse
     */
    public function updateUserEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->jwtToken)) {
            $body['JwtToken'] = $request->jwtToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserEmail',
            'version'     => '2023-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserEmailRequest $request
     *
     * @return UpdateUserEmailResponse
     */
    public function updateUserEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserEmailWithOptions($request, $runtime);
    }
}

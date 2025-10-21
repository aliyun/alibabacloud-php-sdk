<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CheckAccountRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CheckAccountResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateModelInstanceRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateModelInstanceResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateTopicRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateTopicResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateTopicShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateWordGroupRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateWordGroupResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreateWordGroupShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteModelInstanceRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteModelInstanceResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteModelInstanceShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeletePolicyShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteTopicShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteWordGroupRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteWordGroupResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\DeleteWordGroupShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInputContentDetectResultRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInputContentDetectResultResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInstanceInfoRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInstanceInfoResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetTopicRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetTopicResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetWordGroupRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetWordGroupResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListModelCategoryRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListModelCategoryResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListModelInstanceRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListModelInstanceResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListPolicyRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListPolicyResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListTopicRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListTopicResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListWordGroupRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListWordGroupResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentAsyncDetectShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentAsyncDetectShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\RegisterAccountRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\RegisterAccountResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateModelInstanceRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateModelInstanceResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdatePolicyShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateTopicRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateTopicResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateTopicShrinkRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * BatchContentAsyncDetect.
     *
     * @param request - BatchContentAsyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchContentAsyncDetectResponse
     *
     * @param BatchContentAsyncDetectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchContentAsyncDetectResponse
     */
    public function batchContentAsyncDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->serviceParameterList) {
            @$body['serviceParameterList'] = $request->serviceParameterList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchContentAsyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * BatchContentAsyncDetect.
     *
     * @param request - BatchContentAsyncDetectRequest
     *
     * @returns BatchContentAsyncDetectResponse
     *
     * @param BatchContentAsyncDetectRequest $request
     *
     * @return BatchContentAsyncDetectResponse
     */
    public function batchContentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchContentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * BatchContentSyncDetect.
     *
     * @param request - BatchContentSyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchContentSyncDetectResponse
     *
     * @param BatchContentSyncDetectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchContentSyncDetectResponse
     */
    public function batchContentSyncDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->serviceParameterList) {
            @$body['serviceParameterList'] = $request->serviceParameterList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchContentSyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * BatchContentSyncDetect.
     *
     * @param request - BatchContentSyncDetectRequest
     *
     * @returns BatchContentSyncDetectResponse
     *
     * @param BatchContentSyncDetectRequest $request
     *
     * @return BatchContentSyncDetectResponse
     */
    public function batchContentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchContentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * 检查用户是否开通RAI服务
     *
     * @param request - CheckAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccountResponse
     *
     * @param CheckAccountRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckAccountResponse
     */
    public function checkAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckAccount',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查用户是否开通RAI服务
     *
     * @param request - CheckAccountRequest
     *
     * @returns CheckAccountResponse
     *
     * @param CheckAccountRequest $request
     *
     * @return CheckAccountResponse
     */
    public function checkAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountWithOptions($request, $runtime);
    }

    /**
     * ContentAsyncDetect.
     *
     * @param request - ContentAsyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContentAsyncDetectResponse
     *
     * @param ContentAsyncDetectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContentAsyncDetectResponse
     */
    public function contentAsyncDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->serviceParameter) {
            @$body['serviceParameter'] = $request->serviceParameter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContentAsyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ContentAsyncDetect.
     *
     * @param request - ContentAsyncDetectRequest
     *
     * @returns ContentAsyncDetectResponse
     *
     * @param ContentAsyncDetectRequest $request
     *
     * @return ContentAsyncDetectResponse
     */
    public function contentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * ContentSyncDetect.
     *
     * @param request - ContentSyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContentSyncDetectResponse
     *
     * @param ContentSyncDetectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ContentSyncDetectResponse
     */
    public function contentSyncDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->serviceParameter) {
            @$body['serviceParameter'] = $request->serviceParameter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContentSyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ContentSyncDetect.
     *
     * @param request - ContentSyncDetectRequest
     *
     * @returns ContentSyncDetectResponse
     *
     * @param ContentSyncDetectRequest $request
     *
     * @return ContentSyncDetectResponse
     */
    public function contentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * CreateModelInstance.
     *
     * @param request - CreateModelInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelInstanceResponse
     *
     * @param CreateModelInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModelInstanceResponse
     */
    public function createModelInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->easServiceId) {
            @$query['EasServiceId'] = $request->easServiceId;
        }

        if (null !== $request->easServiceName) {
            @$query['EasServiceName'] = $request->easServiceName;
        }

        if (null !== $request->modelCallName) {
            @$query['ModelCallName'] = $request->modelCallName;
        }

        if (null !== $request->modelCategoryId) {
            @$query['ModelCategoryId'] = $request->modelCategoryId;
        }

        if (null !== $request->modelToken) {
            @$query['ModelToken'] = $request->modelToken;
        }

        if (null !== $request->modelUrl) {
            @$query['ModelUrl'] = $request->modelUrl;
        }

        if (null !== $request->modelVpcUrl) {
            @$query['ModelVpcUrl'] = $request->modelVpcUrl;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelInstance',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateModelInstance.
     *
     * @param request - CreateModelInstanceRequest
     *
     * @returns CreateModelInstanceResponse
     *
     * @param CreateModelInstanceRequest $request
     *
     * @return CreateModelInstanceResponse
     */
    public function createModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelInstanceWithOptions($request, $runtime);
    }

    /**
     * CreatePolicy.
     *
     * @param tmpReq - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->harmfulCategoryConfigInfoList) {
            $request->harmfulCategoryConfigInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmfulCategoryConfigInfoList, 'HarmfulCategoryConfigInfoList', 'json');
        }

        if (null !== $tmpReq->promptAttackInfo) {
            $request->promptAttackInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptAttackInfo, 'PromptAttackInfo', 'json');
        }

        if (null !== $tmpReq->promptAttackInfoList) {
            $request->promptAttackInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptAttackInfoList, 'PromptAttackInfoList', 'json');
        }

        if (null !== $tmpReq->regularExpressList) {
            $request->regularExpressListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regularExpressList, 'RegularExpressList', 'json');
        }

        if (null !== $tmpReq->sensitiveConfigList) {
            $request->sensitiveConfigListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveConfigList, 'SensitiveConfigList', 'json');
        }

        if (null !== $tmpReq->sensitiveTopicList) {
            $request->sensitiveTopicListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveTopicList, 'SensitiveTopicList', 'json');
        }

        if (null !== $tmpReq->sensitiveWordList) {
            $request->sensitiveWordListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveWordList, 'SensitiveWordList', 'json');
        }

        if (null !== $tmpReq->topicConfigInfoList) {
            $request->topicConfigInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topicConfigInfoList, 'TopicConfigInfoList', 'json');
        }

        if (null !== $tmpReq->wordGroupInfoList) {
            $request->wordGroupInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->wordGroupInfoList, 'WordGroupInfoList', 'json');
        }

        $query = [];
        if (null !== $request->contentSafeModelInstanceId) {
            @$query['ContentSafeModelInstanceId'] = $request->contentSafeModelInstanceId;
        }

        if (null !== $request->enableSensitiveInputCheck) {
            @$query['EnableSensitiveInputCheck'] = $request->enableSensitiveInputCheck;
        }

        if (null !== $request->enableSensitiveOutputCheck) {
            @$query['EnableSensitiveOutputCheck'] = $request->enableSensitiveOutputCheck;
        }

        if (null !== $request->harmfulCategoryConfigInfoListShrink) {
            @$query['HarmfulCategoryConfigInfoList'] = $request->harmfulCategoryConfigInfoListShrink;
        }

        if (null !== $request->inputSafeAnswer) {
            @$query['InputSafeAnswer'] = $request->inputSafeAnswer;
        }

        if (null !== $request->inputSafeAnswerSwitch) {
            @$query['InputSafeAnswerSwitch'] = $request->inputSafeAnswerSwitch;
        }

        if (null !== $request->isSidecarPolicy) {
            @$query['IsSidecarPolicy'] = $request->isSidecarPolicy;
        }

        if (null !== $request->outputSafeAnswer) {
            @$query['OutputSafeAnswer'] = $request->outputSafeAnswer;
        }

        if (null !== $request->outputSafeAnswerSwitch) {
            @$query['OutputSafeAnswerSwitch'] = $request->outputSafeAnswerSwitch;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->promptAttackInfoShrink) {
            @$query['PromptAttackInfo'] = $request->promptAttackInfoShrink;
        }

        if (null !== $request->promptAttackInfoListShrink) {
            @$query['PromptAttackInfoList'] = $request->promptAttackInfoListShrink;
        }

        if (null !== $request->promptAttackModelInstanceId) {
            @$query['PromptAttackModelInstanceId'] = $request->promptAttackModelInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regularExpressListShrink) {
            @$query['RegularExpressList'] = $request->regularExpressListShrink;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->sensitiveConfigListShrink) {
            @$query['SensitiveConfigList'] = $request->sensitiveConfigListShrink;
        }

        if (null !== $request->sensitiveTopicListShrink) {
            @$query['SensitiveTopicList'] = $request->sensitiveTopicListShrink;
        }

        if (null !== $request->sensitiveTopicModelInstanceId) {
            @$query['SensitiveTopicModelInstanceId'] = $request->sensitiveTopicModelInstanceId;
        }

        if (null !== $request->sensitiveWordListShrink) {
            @$query['SensitiveWordList'] = $request->sensitiveWordListShrink;
        }

        if (null !== $request->topicConfigInfoListShrink) {
            @$query['TopicConfigInfoList'] = $request->topicConfigInfoListShrink;
        }

        if (null !== $request->wordGroupInfoListShrink) {
            @$query['WordGroupInfoList'] = $request->wordGroupInfoListShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreatePolicy.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * CreateTopic.
     *
     * @param tmpReq - CreateTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTopicShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topicDefinition) {
            @$query['TopicDefinition'] = $request->topicDefinition;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTopic',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateTopic.
     *
     * @param request - CreateTopicRequest
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $request
     *
     * @return CreateTopicResponse
     */
    public function createTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTopicWithOptions($request, $runtime);
    }

    /**
     * CreateWordGroup.
     *
     * @param tmpReq - CreateWordGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWordGroupResponse
     *
     * @param CreateWordGroupRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWordGroupResponse
     */
    public function createWordGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWordGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->commit) {
            @$query['Commit'] = $request->commit;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWordGroup',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWordGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateWordGroup.
     *
     * @param request - CreateWordGroupRequest
     *
     * @returns CreateWordGroupResponse
     *
     * @param CreateWordGroupRequest $request
     *
     * @return CreateWordGroupResponse
     */
    public function createWordGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWordGroupWithOptions($request, $runtime);
    }

    /**
     * DeleteModelInstance.
     *
     * @param tmpReq - DeleteModelInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelInstanceResponse
     *
     * @param DeleteModelInstanceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteModelInstanceResponse
     */
    public function deleteModelInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteModelInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->modelInstanceIdList) {
            $request->modelInstanceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelInstanceIdList, 'ModelInstanceIdList', 'json');
        }

        $query = [];
        if (null !== $request->modelInstanceIdListShrink) {
            @$query['ModelInstanceIdList'] = $request->modelInstanceIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelInstance',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteModelInstance.
     *
     * @param request - DeleteModelInstanceRequest
     *
     * @returns DeleteModelInstanceResponse
     *
     * @param DeleteModelInstanceRequest $request
     *
     * @return DeleteModelInstanceResponse
     */
    public function deleteModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelInstanceWithOptions($request, $runtime);
    }

    /**
     * DeletePolicy.
     *
     * @param tmpReq - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeletePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->policyIdList) {
            $request->policyIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policyIdList, 'PolicyIdList', 'json');
        }

        $query = [];
        if (null !== $request->policyIdListShrink) {
            @$query['PolicyIdList'] = $request->policyIdListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeletePolicy.
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * DeleteTopic.
     *
     * @param tmpReq - DeleteTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopicWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteTopicShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->topicIdList) {
            $request->topicIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topicIdList, 'TopicIdList', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topicIdListShrink) {
            @$query['TopicIdList'] = $request->topicIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTopic',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteTopic.
     *
     * @param request - DeleteTopicRequest
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $request
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicWithOptions($request, $runtime);
    }

    /**
     * DeleteWordGroup.
     *
     * @param tmpReq - DeleteWordGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWordGroupResponse
     *
     * @param DeleteWordGroupRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWordGroupResponse
     */
    public function deleteWordGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteWordGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->groupIdList) {
            $request->groupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIdList, 'GroupIdList', 'json');
        }

        $query = [];
        if (null !== $request->groupIdListShrink) {
            @$query['GroupIdList'] = $request->groupIdListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWordGroup',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWordGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteWordGroup.
     *
     * @param request - DeleteWordGroupRequest
     *
     * @returns DeleteWordGroupResponse
     *
     * @param DeleteWordGroupRequest $request
     *
     * @return DeleteWordGroupResponse
     */
    public function deleteWordGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWordGroupWithOptions($request, $runtime);
    }

    /**
     * GetContentDetectResult.
     *
     * @param request - GetContentDetectResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContentDetectResultResponse
     *
     * @param GetContentDetectResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetContentDetectResultResponse
     */
    public function getContentDetectResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContentDetectResult',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContentDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetContentDetectResult.
     *
     * @param request - GetContentDetectResultRequest
     *
     * @returns GetContentDetectResultResponse
     *
     * @param GetContentDetectResultRequest $request
     *
     * @return GetContentDetectResultResponse
     */
    public function getContentDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentDetectResultWithOptions($request, $runtime);
    }

    /**
     * GetModelInputContentDetectResult.
     *
     * @param request - GetModelInputContentDetectResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelInputContentDetectResultResponse
     *
     * @param GetModelInputContentDetectResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetModelInputContentDetectResultResponse
     */
    public function getModelInputContentDetectResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelInputContentDetectResult',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelInputContentDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetModelInputContentDetectResult.
     *
     * @param request - GetModelInputContentDetectResultRequest
     *
     * @returns GetModelInputContentDetectResultResponse
     *
     * @param GetModelInputContentDetectResultRequest $request
     *
     * @return GetModelInputContentDetectResultResponse
     */
    public function getModelInputContentDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelInputContentDetectResultWithOptions($request, $runtime);
    }

    /**
     * GetModelInstanceInfo.
     *
     * @param request - GetModelInstanceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelInstanceInfoResponse
     *
     * @param GetModelInstanceInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetModelInstanceInfoResponse
     */
    public function getModelInstanceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelInstanceId) {
            @$query['ModelInstanceId'] = $request->modelInstanceId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelInstanceInfo',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetModelInstanceInfo.
     *
     * @param request - GetModelInstanceInfoRequest
     *
     * @returns GetModelInstanceInfoResponse
     *
     * @param GetModelInstanceInfoRequest $request
     *
     * @return GetModelInstanceInfoResponse
     */
    public function getModelInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * GetModelOutputContentDetectResult.
     *
     * @param request - GetModelOutputContentDetectResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelOutputContentDetectResultResponse
     *
     * @param GetModelOutputContentDetectResultRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetModelOutputContentDetectResultResponse
     */
    public function getModelOutputContentDetectResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelOutputContentDetectResult',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelOutputContentDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetModelOutputContentDetectResult.
     *
     * @param request - GetModelOutputContentDetectResultRequest
     *
     * @returns GetModelOutputContentDetectResultResponse
     *
     * @param GetModelOutputContentDetectResultRequest $request
     *
     * @return GetModelOutputContentDetectResultResponse
     */
    public function getModelOutputContentDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelOutputContentDetectResultWithOptions($request, $runtime);
    }

    /**
     * GetPolicyDefaultOptions.
     *
     * @param request - GetPolicyDefaultOptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyDefaultOptionsResponse
     *
     * @param GetPolicyDefaultOptionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPolicyDefaultOptionsResponse
     */
    public function getPolicyDefaultOptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicyDefaultOptions',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyDefaultOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetPolicyDefaultOptions.
     *
     * @param request - GetPolicyDefaultOptionsRequest
     *
     * @returns GetPolicyDefaultOptionsResponse
     *
     * @param GetPolicyDefaultOptionsRequest $request
     *
     * @return GetPolicyDefaultOptionsResponse
     */
    public function getPolicyDefaultOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyDefaultOptionsWithOptions($request, $runtime);
    }

    /**
     * GetPolicyInfo.
     *
     * @param request - GetPolicyInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyInfoResponse
     *
     * @param GetPolicyInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPolicyInfoResponse
     */
    public function getPolicyInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicyInfo',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetPolicyInfo.
     *
     * @param request - GetPolicyInfoRequest
     *
     * @returns GetPolicyInfoResponse
     *
     * @param GetPolicyInfoRequest $request
     *
     * @return GetPolicyInfoResponse
     */
    public function getPolicyInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyInfoWithOptions($request, $runtime);
    }

    /**
     * GetTopic.
     *
     * @param request - GetTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicResponse
     *
     * @param GetTopicRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topicId) {
            @$query['TopicId'] = $request->topicId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopic',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTopic.
     *
     * @param request - GetTopicRequest
     *
     * @returns GetTopicResponse
     *
     * @param GetTopicRequest $request
     *
     * @return GetTopicResponse
     */
    public function getTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicWithOptions($request, $runtime);
    }

    /**
     * GetWordGroup.
     *
     * @param request - GetWordGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWordGroupResponse
     *
     * @param GetWordGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWordGroupResponse
     */
    public function getWordGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWordGroup',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWordGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetWordGroup.
     *
     * @param request - GetWordGroupRequest
     *
     * @returns GetWordGroupResponse
     *
     * @param GetWordGroupRequest $request
     *
     * @return GetWordGroupResponse
     */
    public function getWordGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWordGroupWithOptions($request, $runtime);
    }

    /**
     * ListModelCategory.
     *
     * @param request - ListModelCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelCategoryResponse
     *
     * @param ListModelCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelCategoryResponse
     */
    public function listModelCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contentSafeImageSupported) {
            @$query['ContentSafeImageSupported'] = $request->contentSafeImageSupported;
        }

        if (null !== $request->contentSafeTextSupported) {
            @$query['ContentSafeTextSupported'] = $request->contentSafeTextSupported;
        }

        if (null !== $request->modelCategoryName) {
            @$query['ModelCategoryName'] = $request->modelCategoryName;
        }

        if (null !== $request->modelSource) {
            @$query['ModelSource'] = $request->modelSource;
        }

        if (null !== $request->promptAttackTextSupported) {
            @$query['PromptAttackTextSupported'] = $request->promptAttackTextSupported;
        }

        if (null !== $request->sensitiveTopicTextSupported) {
            @$query['SensitiveTopicTextSupported'] = $request->sensitiveTopicTextSupported;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelCategory',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListModelCategory.
     *
     * @param request - ListModelCategoryRequest
     *
     * @returns ListModelCategoryResponse
     *
     * @param ListModelCategoryRequest $request
     *
     * @return ListModelCategoryResponse
     */
    public function listModelCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelCategoryWithOptions($request, $runtime);
    }

    /**
     * ListModelInstance.
     *
     * @param request - ListModelInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelInstanceResponse
     *
     * @param ListModelInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelInstanceResponse
     */
    public function listModelInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->easServiceName) {
            @$query['EasServiceName'] = $request->easServiceName;
        }

        if (null !== $request->isSidecarPolicy) {
            @$query['IsSidecarPolicy'] = $request->isSidecarPolicy;
        }

        if (null !== $request->isSupportContentSafe) {
            @$query['IsSupportContentSafe'] = $request->isSupportContentSafe;
        }

        if (null !== $request->isSupportPromptAttack) {
            @$query['IsSupportPromptAttack'] = $request->isSupportPromptAttack;
        }

        if (null !== $request->isSupportSensitiveTopic) {
            @$query['IsSupportSensitiveTopic'] = $request->isSupportSensitiveTopic;
        }

        if (null !== $request->modelSource) {
            @$query['ModelSource'] = $request->modelSource;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelInstance',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListModelInstance.
     *
     * @param request - ListModelInstanceRequest
     *
     * @returns ListModelInstanceResponse
     *
     * @param ListModelInstanceRequest $request
     *
     * @return ListModelInstanceResponse
     */
    public function listModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelInstanceWithOptions($request, $runtime);
    }

    /**
     * ListPolicy.
     *
     * @param request - ListPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyResponse
     *
     * @param ListPolicyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListPolicyResponse
     */
    public function listPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isSidecarPolicy) {
            @$query['IsSidecarPolicy'] = $request->isSidecarPolicy;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyIdentifier) {
            @$query['PolicyIdentifier'] = $request->policyIdentifier;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicy',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListPolicy.
     *
     * @param request - ListPolicyRequest
     *
     * @returns ListPolicyResponse
     *
     * @param ListPolicyRequest $request
     *
     * @return ListPolicyResponse
     */
    public function listPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyWithOptions($request, $runtime);
    }

    /**
     * ListTopic.
     *
     * @param request - ListTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicResponse
     *
     * @param ListTopicRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTopicResponse
     */
    public function listTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTopic',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListTopic.
     *
     * @param request - ListTopicRequest
     *
     * @returns ListTopicResponse
     *
     * @param ListTopicRequest $request
     *
     * @return ListTopicResponse
     */
    public function listTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicWithOptions($request, $runtime);
    }

    /**
     * ListWordGroup.
     *
     * @param request - ListWordGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWordGroupResponse
     *
     * @param ListWordGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWordGroupResponse
     */
    public function listWordGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWordGroup',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWordGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListWordGroup.
     *
     * @param request - ListWordGroupRequest
     *
     * @returns ListWordGroupResponse
     *
     * @param ListWordGroupRequest $request
     *
     * @return ListWordGroupResponse
     */
    public function listWordGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWordGroupWithOptions($request, $runtime);
    }

    /**
     * ModelInputContentAsyncDetect.
     *
     * @param tmpReq - ModelInputContentAsyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelInputContentAsyncDetectResponse
     *
     * @param ModelInputContentAsyncDetectRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelInputContentAsyncDetectResponse
     */
    public function modelInputContentAsyncDetectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModelInputContentAsyncDetectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->policyIdentifier) {
            @$query['PolicyIdentifier'] = $request->policyIdentifier;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelInputContentAsyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelInputContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModelInputContentAsyncDetect.
     *
     * @param request - ModelInputContentAsyncDetectRequest
     *
     * @returns ModelInputContentAsyncDetectResponse
     *
     * @param ModelInputContentAsyncDetectRequest $request
     *
     * @return ModelInputContentAsyncDetectResponse
     */
    public function modelInputContentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelInputContentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * ModelInputContentSyncDetect.
     *
     * @param tmpReq - ModelInputContentSyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelInputContentSyncDetectResponse
     *
     * @param ModelInputContentSyncDetectRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ModelInputContentSyncDetectResponse
     */
    public function modelInputContentSyncDetectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModelInputContentSyncDetectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->policyIdentifier) {
            @$query['PolicyIdentifier'] = $request->policyIdentifier;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelInputContentSyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelInputContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModelInputContentSyncDetect.
     *
     * @param request - ModelInputContentSyncDetectRequest
     *
     * @returns ModelInputContentSyncDetectResponse
     *
     * @param ModelInputContentSyncDetectRequest $request
     *
     * @return ModelInputContentSyncDetectResponse
     */
    public function modelInputContentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelInputContentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * ModelOutputContentAsyncDetect.
     *
     * @param tmpReq - ModelOutputContentAsyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelOutputContentAsyncDetectResponse
     *
     * @param ModelOutputContentAsyncDetectRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return ModelOutputContentAsyncDetectResponse
     */
    public function modelOutputContentAsyncDetectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModelOutputContentAsyncDetectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->policyIdentifier) {
            @$query['PolicyIdentifier'] = $request->policyIdentifier;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelOutputContentAsyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelOutputContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModelOutputContentAsyncDetect.
     *
     * @param request - ModelOutputContentAsyncDetectRequest
     *
     * @returns ModelOutputContentAsyncDetectResponse
     *
     * @param ModelOutputContentAsyncDetectRequest $request
     *
     * @return ModelOutputContentAsyncDetectResponse
     */
    public function modelOutputContentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelOutputContentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * ModelOutputContentSyncDetect.
     *
     * @param tmpReq - ModelOutputContentSyncDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelOutputContentSyncDetectResponse
     *
     * @param ModelOutputContentSyncDetectRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ModelOutputContentSyncDetectResponse
     */
    public function modelOutputContentSyncDetectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModelOutputContentSyncDetectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->policyIdentifier) {
            @$query['PolicyIdentifier'] = $request->policyIdentifier;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelOutputContentSyncDetect',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelOutputContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModelOutputContentSyncDetect.
     *
     * @param request - ModelOutputContentSyncDetectRequest
     *
     * @returns ModelOutputContentSyncDetectResponse
     *
     * @param ModelOutputContentSyncDetectRequest $request
     *
     * @return ModelOutputContentSyncDetectResponse
     */
    public function modelOutputContentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modelOutputContentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * 注册RAI账号.
     *
     * @param request - RegisterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterAccountResponse
     *
     * @param RegisterAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterAccountResponse
     */
    public function registerAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memo) {
            @$query['Memo'] = $request->memo;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterAccount',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册RAI账号.
     *
     * @param request - RegisterAccountRequest
     *
     * @returns RegisterAccountResponse
     *
     * @param RegisterAccountRequest $request
     *
     * @return RegisterAccountResponse
     */
    public function registerAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerAccountWithOptions($request, $runtime);
    }

    /**
     * UpdateModelInstance.
     *
     * @param request - UpdateModelInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelInstanceResponse
     *
     * @param UpdateModelInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateModelInstanceResponse
     */
    public function updateModelInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->easServiceId) {
            @$query['EasServiceId'] = $request->easServiceId;
        }

        if (null !== $request->easServiceName) {
            @$query['EasServiceName'] = $request->easServiceName;
        }

        if (null !== $request->modelCallName) {
            @$query['ModelCallName'] = $request->modelCallName;
        }

        if (null !== $request->modelCategoryId) {
            @$query['ModelCategoryId'] = $request->modelCategoryId;
        }

        if (null !== $request->modelInstanceId) {
            @$query['ModelInstanceId'] = $request->modelInstanceId;
        }

        if (null !== $request->modelToken) {
            @$query['ModelToken'] = $request->modelToken;
        }

        if (null !== $request->modelUrl) {
            @$query['ModelUrl'] = $request->modelUrl;
        }

        if (null !== $request->modelVpcUrl) {
            @$query['ModelVpcUrl'] = $request->modelVpcUrl;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateModelInstance',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateModelInstance.
     *
     * @param request - UpdateModelInstanceRequest
     *
     * @returns UpdateModelInstanceResponse
     *
     * @param UpdateModelInstanceRequest $request
     *
     * @return UpdateModelInstanceResponse
     */
    public function updateModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelInstanceWithOptions($request, $runtime);
    }

    /**
     * UpdatePolicy.
     *
     * @param tmpReq - UpdatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->harmfulCategoryConfigInfoList) {
            $request->harmfulCategoryConfigInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmfulCategoryConfigInfoList, 'HarmfulCategoryConfigInfoList', 'json');
        }

        if (null !== $tmpReq->promptAttackInfo) {
            $request->promptAttackInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptAttackInfo, 'PromptAttackInfo', 'json');
        }

        if (null !== $tmpReq->promptAttackInfoList) {
            $request->promptAttackInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptAttackInfoList, 'PromptAttackInfoList', 'json');
        }

        if (null !== $tmpReq->regularExpressList) {
            $request->regularExpressListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regularExpressList, 'RegularExpressList', 'json');
        }

        if (null !== $tmpReq->sensitiveConfigList) {
            $request->sensitiveConfigListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveConfigList, 'SensitiveConfigList', 'json');
        }

        if (null !== $tmpReq->sensitiveTopicList) {
            $request->sensitiveTopicListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveTopicList, 'SensitiveTopicList', 'json');
        }

        if (null !== $tmpReq->sensitiveWordList) {
            $request->sensitiveWordListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sensitiveWordList, 'SensitiveWordList', 'json');
        }

        if (null !== $tmpReq->topicConfigInfoList) {
            $request->topicConfigInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topicConfigInfoList, 'TopicConfigInfoList', 'json');
        }

        if (null !== $tmpReq->wordGroupInfoList) {
            $request->wordGroupInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->wordGroupInfoList, 'WordGroupInfoList', 'json');
        }

        $query = [];
        if (null !== $request->contentSafeModelInstanceId) {
            @$query['ContentSafeModelInstanceId'] = $request->contentSafeModelInstanceId;
        }

        if (null !== $request->enableSensitiveInputCheck) {
            @$query['EnableSensitiveInputCheck'] = $request->enableSensitiveInputCheck;
        }

        if (null !== $request->enableSensitiveOutputCheck) {
            @$query['EnableSensitiveOutputCheck'] = $request->enableSensitiveOutputCheck;
        }

        if (null !== $request->harmfulCategoryConfigInfoListShrink) {
            @$query['HarmfulCategoryConfigInfoList'] = $request->harmfulCategoryConfigInfoListShrink;
        }

        if (null !== $request->inputSafeAnswer) {
            @$query['InputSafeAnswer'] = $request->inputSafeAnswer;
        }

        if (null !== $request->inputSafeAnswerSwitch) {
            @$query['InputSafeAnswerSwitch'] = $request->inputSafeAnswerSwitch;
        }

        if (null !== $request->isSidecarPolicy) {
            @$query['IsSidecarPolicy'] = $request->isSidecarPolicy;
        }

        if (null !== $request->outputSafeAnswer) {
            @$query['OutputSafeAnswer'] = $request->outputSafeAnswer;
        }

        if (null !== $request->outputSafeAnswerSwitch) {
            @$query['OutputSafeAnswerSwitch'] = $request->outputSafeAnswerSwitch;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->promptAttackInfoShrink) {
            @$query['PromptAttackInfo'] = $request->promptAttackInfoShrink;
        }

        if (null !== $request->promptAttackInfoListShrink) {
            @$query['PromptAttackInfoList'] = $request->promptAttackInfoListShrink;
        }

        if (null !== $request->promptAttackModelInstanceId) {
            @$query['PromptAttackModelInstanceId'] = $request->promptAttackModelInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regularExpressListShrink) {
            @$query['RegularExpressList'] = $request->regularExpressListShrink;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->sensitiveConfigListShrink) {
            @$query['SensitiveConfigList'] = $request->sensitiveConfigListShrink;
        }

        if (null !== $request->sensitiveTopicListShrink) {
            @$query['SensitiveTopicList'] = $request->sensitiveTopicListShrink;
        }

        if (null !== $request->sensitiveTopicModelInstanceId) {
            @$query['SensitiveTopicModelInstanceId'] = $request->sensitiveTopicModelInstanceId;
        }

        if (null !== $request->sensitiveWordListShrink) {
            @$query['SensitiveWordList'] = $request->sensitiveWordListShrink;
        }

        if (null !== $request->topicConfigInfoListShrink) {
            @$query['TopicConfigInfoList'] = $request->topicConfigInfoListShrink;
        }

        if (null !== $request->wordGroupInfoListShrink) {
            @$query['WordGroupInfoList'] = $request->wordGroupInfoListShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdatePolicy.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyWithOptions($request, $runtime);
    }

    /**
     * UpdateTopic.
     *
     * @param tmpReq - UpdateTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTopicResponse
     *
     * @param UpdateTopicRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTopicResponse
     */
    public function updateTopicWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTopicShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topicDefinition) {
            @$query['TopicDefinition'] = $request->topicDefinition;
        }

        if (null !== $request->topicId) {
            @$query['TopicId'] = $request->topicId;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTopic',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateTopic.
     *
     * @param request - UpdateTopicRequest
     *
     * @returns UpdateTopicResponse
     *
     * @param UpdateTopicRequest $request
     *
     * @return UpdateTopicResponse
     */
    public function updateTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTopicWithOptions($request, $runtime);
    }

    /**
     * UpdateWordGroup.
     *
     * @param tmpReq - UpdateWordGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWordGroupResponse
     *
     * @param UpdateWordGroupRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWordGroupResponse
     */
    public function updateWordGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWordGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bodyData) {
            $request->bodyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }

        $query = [];
        if (null !== $request->commit) {
            @$query['Commit'] = $request->commit;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->wordInfoListModified) {
            @$query['WordInfoListModified'] = $request->wordInfoListModified;
        }

        $body = [];
        if (null !== $request->bodyDataShrink) {
            @$body['BodyData'] = $request->bodyDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWordGroup',
            'version' => '2024-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWordGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateWordGroup.
     *
     * @param request - UpdateWordGroupRequest
     *
     * @returns UpdateWordGroupResponse
     *
     * @param UpdateWordGroupRequest $request
     *
     * @return UpdateWordGroupResponse
     */
    public function updateWordGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWordGroupWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerBySessionGroupRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerBySessionGroupResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\BatchSubmitReviewInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\BatchSubmitReviewInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateCheckTypeToSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateCheckTypeToSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteBusinessCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteCheckTypeToSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteCheckTypeToSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteCustomizationConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteCustomizationConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeletePrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeletePrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleByIdRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleByIdResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRulesCountListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRulesCountListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\HandleComplaintRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\HandleComplaintResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InvalidRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InvalidRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RevertAssignedSessionGroupRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RevertAssignedSessionGroupResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RevertAssignedSessionRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RevertAssignedSessionResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SaveConfigDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SaveConfigDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitComplaintRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitComplaintResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitQualityCheckTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitQualityCheckTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateCheckTypeToSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateCheckTypeToSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateQualityCheckDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateQualityCheckDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleByIdRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleByIdResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleToSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleToSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSyncQualityCheckDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSyncQualityCheckDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadAudioDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadAudioDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifyFileRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifyFileResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Qualitycheck extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qualitycheck', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddBusinessCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddBusinessCategoryResponse
     *
     * @param AddBusinessCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddBusinessCategoryResponse
     */
    public function addBusinessCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBusinessCategory',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddBusinessCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AddBusinessCategoryRequest
     * @returns AddBusinessCategoryResponse
     *
     * @param AddBusinessCategoryRequest $request
     *
     * @return AddBusinessCategoryResponse
     */
    public function addBusinessCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBusinessCategoryWithOptions($request, $runtime);
    }

    /**
     * @param request - AddRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddRuleCategoryResponse
     *
     * @param AddRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddRuleCategoryResponse
     */
    public function addRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRuleCategory',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddRuleCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AddRuleCategoryRequest
     * @returns AddRuleCategoryResponse
     *
     * @param AddRuleCategoryRequest $request
     *
     * @return AddRuleCategoryResponse
     */
    public function addRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * V4创建规则.
     *
     * @param request - AddRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddRuleV4Response
     *
     * @param AddRuleV4Request $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddRuleV4Response
     */
    public function addRuleV4WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->isCopy) {
            @$body['IsCopy'] = $request->isCopy;
        }

        if (null !== $request->jsonStrForRule) {
            @$body['JsonStrForRule'] = $request->jsonStrForRule;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddRuleV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddRuleV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * V4创建规则.
     *
     * @param request - AddRuleV4Request
     * @returns AddRuleV4Response
     *
     * @param AddRuleV4Request $request
     *
     * @return AddRuleV4Response
     */
    public function addRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRuleV4WithOptions($request, $runtime);
    }

    /**
     * 申领实时语音所需token.
     *
     * @param request - ApplyWsTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ApplyWsTokenResponse
     *
     * @param ApplyWsTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyWsTokenResponse
     */
    public function applyWsTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyWsToken',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyWsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyWsTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 申领实时语音所需token.
     *
     * @param request - ApplyWsTokenRequest
     * @returns ApplyWsTokenResponse
     *
     * @param ApplyWsTokenRequest $request
     *
     * @return ApplyWsTokenResponse
     */
    public function applyWsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyWsTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - AssignReviewerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AssignReviewerResponse
     *
     * @param AssignReviewerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssignReviewerResponse
     */
    public function assignReviewerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssignReviewer',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssignReviewerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssignReviewerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AssignReviewerRequest
     * @returns AssignReviewerResponse
     *
     * @param AssignReviewerRequest $request
     *
     * @return AssignReviewerResponse
     */
    public function assignReviewer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignReviewerWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 会话组批量分配.
     *
     * @deprecated OpenAPI AssignReviewerBySessionGroup is deprecated
     *
     * @param request - AssignReviewerBySessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AssignReviewerBySessionGroupResponse
     *
     * @param AssignReviewerBySessionGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AssignReviewerBySessionGroupResponse
     */
    public function assignReviewerBySessionGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssignReviewerBySessionGroup',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssignReviewerBySessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssignReviewerBySessionGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 会话组批量分配.
     *
     * @deprecated OpenAPI AssignReviewerBySessionGroup is deprecated
     *
     * @param request - AssignReviewerBySessionGroupRequest
     * @returns AssignReviewerBySessionGroupResponse
     *
     * @param AssignReviewerBySessionGroupRequest $request
     *
     * @return AssignReviewerBySessionGroupResponse
     */
    public function assignReviewerBySessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignReviewerBySessionGroupWithOptions($request, $runtime);
    }

    /**
     * 批量复核.
     *
     * @param request - BatchSubmitReviewInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BatchSubmitReviewInfoResponse
     *
     * @param BatchSubmitReviewInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchSubmitReviewInfoResponse
     */
    public function batchSubmitReviewInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSubmitReviewInfo',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchSubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchSubmitReviewInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量复核.
     *
     * @param request - BatchSubmitReviewInfoRequest
     * @returns BatchSubmitReviewInfoResponse
     *
     * @param BatchSubmitReviewInfoRequest $request
     *
     * @return BatchSubmitReviewInfoResponse
     */
    public function batchSubmitReviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSubmitReviewInfoWithOptions($request, $runtime);
    }

    /**
     * 创建热词模型.
     *
     * @param request - CreateAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAsrVocabResponse
     *
     * @param CreateAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAsrVocabResponse
     */
    public function createAsrVocabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAsrVocab',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAsrVocabResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建热词模型.
     *
     * @param request - CreateAsrVocabRequest
     * @returns CreateAsrVocabResponse
     *
     * @param CreateAsrVocabRequest $request
     *
     * @return CreateAsrVocabResponse
     */
    public function createAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsrVocabWithOptions($request, $runtime);
    }

    /**
     * 创建质检方案中的质检维度.
     *
     * @param request - CreateCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCheckTypeToSchemeResponse
     *
     * @param CreateCheckTypeToSchemeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCheckTypeToSchemeResponse
     */
    public function createCheckTypeToSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCheckTypeToScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCheckTypeToSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建质检方案中的质检维度.
     *
     * @param request - CreateCheckTypeToSchemeRequest
     * @returns CreateCheckTypeToSchemeResponse
     *
     * @param CreateCheckTypeToSchemeRequest $request
     *
     * @return CreateCheckTypeToSchemeResponse
     */
    public function createCheckTypeToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCheckTypeToSchemeWithOptions($request, $runtime);
    }

    /**
     * 新增质检方案.
     *
     * @param request - CreateQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateQualityCheckSchemeResponse
     *
     * @param CreateQualityCheckSchemeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateQualityCheckSchemeResponse
     */
    public function createQualityCheckSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityCheckScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateQualityCheckSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新增质检方案.
     *
     * @param request - CreateQualityCheckSchemeRequest
     * @returns CreateQualityCheckSchemeResponse
     *
     * @param CreateQualityCheckSchemeRequest $request
     *
     * @return CreateQualityCheckSchemeResponse
     */
    public function createQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * 新建质检任务
     *
     * @param request - CreateSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSchemeTaskConfigResponse
     *
     * @param CreateSchemeTaskConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSchemeTaskConfigResponse
     */
    public function createSchemeTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSchemeTaskConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSchemeTaskConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新建质检任务
     *
     * @param request - CreateSchemeTaskConfigRequest
     * @returns CreateSchemeTaskConfigResponse
     *
     * @param CreateSchemeTaskConfigRequest $request
     *
     * @return CreateSchemeTaskConfigResponse
     */
    public function createSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSkillGroupConfigResponse
     *
     * @param CreateSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSkillGroupConfigResponse
     */
    public function createSkillGroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSkillGroupConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSkillGroupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateSkillGroupConfigRequest
     * @returns CreateSkillGroupConfigResponse
     *
     * @param CreateSkillGroupConfigRequest $request
     *
     * @return CreateSkillGroupConfigResponse
     */
    public function createSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTaskAssignRuleResponse
     *
     * @param CreateTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTaskAssignRuleResponse
     */
    public function createTaskAssignRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskAssignRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTaskAssignRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateTaskAssignRuleRequest
     * @returns CreateTaskAssignRuleResponse
     *
     * @param CreateTaskAssignRuleRequest $request
     *
     * @return CreateTaskAssignRuleResponse
     */
    public function createTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWarningConfigResponse
     *
     * @param CreateWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateWarningConfigResponse
     */
    public function createWarningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWarningConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWarningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateWarningConfigRequest
     * @returns CreateWarningConfigResponse
     *
     * @param CreateWarningConfigRequest $request
     *
     * @return CreateWarningConfigResponse
     */
    public function createWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningConfigWithOptions($request, $runtime);
    }

    /**
     * 预警策略-新增.
     *
     * @param request - CreateWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWarningStrategyConfigResponse
     *
     * @param CreateWarningStrategyConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateWarningStrategyConfigResponse
     */
    public function createWarningStrategyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWarningStrategyConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWarningStrategyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预警策略-新增.
     *
     * @param request - CreateWarningStrategyConfigRequest
     * @returns CreateWarningStrategyConfigResponse
     *
     * @param CreateWarningStrategyConfigRequest $request
     *
     * @return CreateWarningStrategyConfigResponse
     */
    public function createWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DelRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DelRuleCategoryResponse
     *
     * @param DelRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DelRuleCategoryResponse
     */
    public function delRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelRuleCategory',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DelRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DelRuleCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DelRuleCategoryRequest
     * @returns DelRuleCategoryResponse
     *
     * @param DelRuleCategoryRequest $request
     *
     * @return DelRuleCategoryResponse
     */
    public function delRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAsrVocabResponse
     *
     * @param DeleteAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAsrVocabResponse
     */
    public function deleteAsrVocabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAsrVocab',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAsrVocabResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAsrVocabRequest
     * @returns DeleteAsrVocabResponse
     *
     * @param DeleteAsrVocabRequest $request
     *
     * @return DeleteAsrVocabResponse
     */
    public function deleteAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteBusinessCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteBusinessCategoryResponse
     *
     * @param DeleteBusinessCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBusinessCategoryResponse
     */
    public function deleteBusinessCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBusinessCategory',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteBusinessCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteBusinessCategoryRequest
     * @returns DeleteBusinessCategoryResponse
     *
     * @param DeleteBusinessCategoryRequest $request
     *
     * @return DeleteBusinessCategoryResponse
     */
    public function deleteBusinessCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessCategoryWithOptions($request, $runtime);
    }

    /**
     * 删除质检唯独.
     *
     * @param request - DeleteCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCheckTypeToSchemeResponse
     *
     * @param DeleteCheckTypeToSchemeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCheckTypeToSchemeResponse
     */
    public function deleteCheckTypeToSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCheckTypeToScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCheckTypeToSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除质检唯独.
     *
     * @param request - DeleteCheckTypeToSchemeRequest
     * @returns DeleteCheckTypeToSchemeResponse
     *
     * @param DeleteCheckTypeToSchemeRequest $request
     *
     * @return DeleteCheckTypeToSchemeResponse
     */
    public function deleteCheckTypeToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCheckTypeToSchemeWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCustomizationConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCustomizationConfigResponse
     *
     * @param DeleteCustomizationConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCustomizationConfigResponse
     */
    public function deleteCustomizationConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomizationConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomizationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomizationConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCustomizationConfigRequest
     * @returns DeleteCustomizationConfigResponse
     *
     * @param DeleteCustomizationConfigRequest $request
     *
     * @return DeleteCustomizationConfigResponse
     */
    public function deleteCustomizationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizationConfigWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated OpenAPI DeleteDataSet is deprecated
     *
     * @param request - DeleteDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDataSetResponse
     *
     * @param DeleteDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSet',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated OpenAPI DeleteDataSet is deprecated
     *
     * @param request - DeleteDataSetRequest
     * @returns DeleteDataSetResponse
     *
     * @param DeleteDataSetRequest $request
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSetWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePrecisionTaskResponse
     *
     * @param DeletePrecisionTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePrecisionTaskResponse
     */
    public function deletePrecisionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrecisionTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePrecisionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeletePrecisionTaskRequest
     * @returns DeletePrecisionTaskResponse
     *
     * @param DeletePrecisionTaskRequest $request
     *
     * @return DeletePrecisionTaskResponse
     */
    public function deletePrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * 删除质检方案.
     *
     * @param request - DeleteQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteQualityCheckSchemeResponse
     *
     * @param DeleteQualityCheckSchemeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteQualityCheckSchemeResponse
     */
    public function deleteQualityCheckSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityCheckScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteQualityCheckSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除质检方案.
     *
     * @param request - DeleteQualityCheckSchemeRequest
     * @returns DeleteQualityCheckSchemeResponse
     *
     * @param DeleteQualityCheckSchemeRequest $request
     *
     * @return DeleteQualityCheckSchemeResponse
     */
    public function deleteQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityCheckSchemeWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 删除规则.
     *
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->forceDelete) {
            @$body['ForceDelete'] = $request->forceDelete;
        }

        if (null !== $request->isSchemeData) {
            @$body['IsSchemeData'] = $request->isSchemeData;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 删除规则.
     *
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - DeleteRuleRequest
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * V4删除规则.
     *
     * @param request - DeleteRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRuleV4Response
     *
     * @param DeleteRuleV4Request $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRuleV4Response
     */
    public function deleteRuleV4WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->forceDelete) {
            @$body['ForceDelete'] = $request->forceDelete;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRuleV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRuleV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * V4删除规则.
     *
     * @param request - DeleteRuleV4Request
     * @returns DeleteRuleV4Response
     *
     * @param DeleteRuleV4Request $request
     *
     * @return DeleteRuleV4Response
     */
    public function deleteRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleV4WithOptions($request, $runtime);
    }

    /**
     * 删除质检任务
     *
     * @param request - DeleteSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSchemeTaskConfigResponse
     *
     * @param DeleteSchemeTaskConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSchemeTaskConfigResponse
     */
    public function deleteSchemeTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchemeTaskConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSchemeTaskConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除质检任务
     *
     * @param request - DeleteSchemeTaskConfigRequest
     * @returns DeleteSchemeTaskConfigResponse
     *
     * @param DeleteSchemeTaskConfigRequest $request
     *
     * @return DeleteSchemeTaskConfigResponse
     */
    public function deleteSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSkillGroupConfigResponse
     *
     * @param DeleteSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSkillGroupConfigResponse
     */
    public function deleteSkillGroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSkillGroupConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSkillGroupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSkillGroupConfigRequest
     * @returns DeleteSkillGroupConfigResponse
     *
     * @param DeleteSkillGroupConfigRequest $request
     *
     * @return DeleteSkillGroupConfigResponse
     */
    public function deleteSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTaskAssignRuleResponse
     *
     * @param DeleteTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTaskAssignRuleResponse
     */
    public function deleteTaskAssignRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTaskAssignRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTaskAssignRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTaskAssignRuleRequest
     * @returns DeleteTaskAssignRuleResponse
     *
     * @param DeleteTaskAssignRuleRequest $request
     *
     * @return DeleteTaskAssignRuleResponse
     */
    public function deleteTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWarningConfigResponse
     *
     * @param DeleteWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteWarningConfigResponse
     */
    public function deleteWarningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWarningConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWarningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteWarningConfigRequest
     * @returns DeleteWarningConfigResponse
     *
     * @param DeleteWarningConfigRequest $request
     *
     * @return DeleteWarningConfigResponse
     */
    public function deleteWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWarningConfigWithOptions($request, $runtime);
    }

    /**
     * 预警策略-删除.
     *
     * @param request - DeleteWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWarningStrategyConfigResponse
     *
     * @param DeleteWarningStrategyConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteWarningStrategyConfigResponse
     */
    public function deleteWarningStrategyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWarningStrategyConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWarningStrategyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预警策略-删除.
     *
     * @param request - DeleteWarningStrategyConfigRequest
     * @returns DeleteWarningStrategyConfigResponse
     *
     * @param DeleteWarningStrategyConfigRequest $request
     *
     * @return DeleteWarningStrategyConfigResponse
     */
    public function deleteWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAsrVocabResponse
     *
     * @param GetAsrVocabRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAsrVocabResponse
     */
    public function getAsrVocabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsrVocab',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAsrVocabResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetAsrVocabRequest
     * @returns GetAsrVocabResponse
     *
     * @param GetAsrVocabRequest $request
     *
     * @return GetAsrVocabResponse
     */
    public function getAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @param request - GetBusinessCategoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetBusinessCategoryListResponse
     *
     * @param GetBusinessCategoryListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBusinessCategoryListResponse
     */
    public function getBusinessCategoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessCategoryList',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBusinessCategoryListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBusinessCategoryListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetBusinessCategoryListRequest
     * @returns GetBusinessCategoryListResponse
     *
     * @param GetBusinessCategoryListRequest $request
     *
     * @return GetBusinessCategoryListResponse
     */
    public function getBusinessCategoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessCategoryListWithOptions($request, $runtime);
    }

    /**
     * 获取语音模型列表.
     *
     * @param request - GetCustomizationConfigListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCustomizationConfigListResponse
     *
     * @param GetCustomizationConfigListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCustomizationConfigListResponse
     */
    public function getCustomizationConfigListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomizationConfigList',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomizationConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomizationConfigListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取语音模型列表.
     *
     * @param request - GetCustomizationConfigListRequest
     * @returns GetCustomizationConfigListResponse
     *
     * @param GetCustomizationConfigListRequest $request
     *
     * @return GetCustomizationConfigListResponse
     */
    public function getCustomizationConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizationConfigListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetNextResultToVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNextResultToVerifyResponse
     *
     * @param GetNextResultToVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNextResultToVerifyResponse
     */
    public function getNextResultToVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNextResultToVerify',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNextResultToVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNextResultToVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetNextResultToVerifyRequest
     * @returns GetNextResultToVerifyResponse
     *
     * @param GetNextResultToVerifyRequest $request
     *
     * @return GetNextResultToVerifyResponse
     */
    public function getNextResultToVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNextResultToVerifyWithOptions($request, $runtime);
    }

    /**
     * @param request - GetPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrecisionTaskResponse
     *
     * @param GetPrecisionTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPrecisionTaskResponse
     */
    public function getPrecisionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrecisionTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrecisionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetPrecisionTaskRequest
     * @returns GetPrecisionTaskResponse
     *
     * @param GetPrecisionTaskRequest $request
     *
     * @return GetPrecisionTaskResponse
     */
    public function getPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * 获取质检方案.
     *
     * @param request - GetQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetQualityCheckSchemeResponse
     *
     * @param GetQualityCheckSchemeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQualityCheckSchemeResponse
     */
    public function getQualityCheckSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityCheckScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQualityCheckSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取质检方案.
     *
     * @param request - GetQualityCheckSchemeRequest
     * @returns GetQualityCheckSchemeResponse
     *
     * @param GetQualityCheckSchemeRequest $request
     *
     * @return GetQualityCheckSchemeResponse
     */
    public function getQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @param request - GetResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResultResponse
     *
     * @param GetResultRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetResultResponse
     */
    public function getResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResult',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetResultRequest
     * @returns GetResultResponse
     *
     * @param GetResultRequest $request
     *
     * @return GetResultResponse
     */
    public function getResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResultWithOptions($request, $runtime);
    }

    /**
     * @param request - GetResultToReviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResultToReviewResponse
     *
     * @param GetResultToReviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResultToReviewResponse
     */
    public function getResultToReviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResultToReview',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResultToReviewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResultToReviewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetResultToReviewRequest
     * @returns GetResultToReviewResponse
     *
     * @param GetResultToReviewRequest $request
     *
     * @return GetResultToReviewResponse
     */
    public function getResultToReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResultToReviewWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRuleResponse
     *
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleRequest
     * @returns GetRuleResponse
     *
     * @param GetRuleRequest $request
     *
     * @return GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 获取规则.
     *
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRuleByIdResponse
     *
     * @param GetRuleByIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRuleByIdResponse
     */
    public function getRuleByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRuleById',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRuleByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 获取规则.
     *
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleByIdRequest
     * @returns GetRuleByIdResponse
     *
     * @param GetRuleByIdRequest $request
     *
     * @return GetRuleByIdResponse
     */
    public function getRuleById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleByIdWithOptions($request, $runtime);
    }

    /**
     * @param request - GetRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRuleCategoryResponse
     *
     * @param GetRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRuleCategoryResponse
     */
    public function getRuleCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRuleCategory',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRuleCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetRuleCategoryRequest
     * @returns GetRuleCategoryResponse
     *
     * @param GetRuleCategoryRequest $request
     *
     * @return GetRuleCategoryResponse
     */
    public function getRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleCategoryWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRuleDetailResponse
     *
     * @param GetRuleDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRuleDetailResponse
     */
    public function getRuleDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRuleDetail',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRuleDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleDetailRequest
     * @returns GetRuleDetailResponse
     *
     * @param GetRuleDetailRequest $request
     *
     * @return GetRuleDetailResponse
     */
    public function getRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleDetailWithOptions($request, $runtime);
    }

    /**
     * V4获取规则.
     *
     * @param request - GetRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRuleV4Response
     *
     * @param GetRuleV4Request $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRuleV4Response
     */
    public function getRuleV4WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRuleV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRuleV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * V4获取规则.
     *
     * @param request - GetRuleV4Request
     * @returns GetRuleV4Response
     *
     * @param GetRuleV4Request $request
     *
     * @return GetRuleV4Response
     */
    public function getRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleV4WithOptions($request, $runtime);
    }

    /**
     * 获得规则列表.
     *
     * @param request - GetRulesCountListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRulesCountListResponse
     *
     * @param GetRulesCountListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRulesCountListResponse
     */
    public function getRulesCountListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->businessName) {
            @$body['BusinessName'] = $request->businessName;
        }

        if (null !== $request->businessRange) {
            @$body['BusinessRange'] = $request->businessRange;
        }

        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->countTotal) {
            @$body['CountTotal'] = $request->countTotal;
        }

        if (null !== $request->createEmpid) {
            @$body['CreateEmpid'] = $request->createEmpid;
        }

        if (null !== $request->createUserId) {
            @$body['CreateUserId'] = $request->createUserId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->lastUpdateEmpid) {
            @$body['LastUpdateEmpid'] = $request->lastUpdateEmpid;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requireInfos) {
            @$body['RequireInfos'] = $request->requireInfos;
        }

        if (null !== $request->rid) {
            @$body['Rid'] = $request->rid;
        }

        if (null !== $request->ruleIdOrRuleName) {
            @$body['RuleIdOrRuleName'] = $request->ruleIdOrRuleName;
        }

        if (null !== $request->ruleScoreSingleType) {
            @$body['RuleScoreSingleType'] = $request->ruleScoreSingleType;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        if (null !== $request->schemeId) {
            @$body['SchemeId'] = $request->schemeId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->typeName) {
            @$body['TypeName'] = $request->typeName;
        }

        if (null !== $request->updateEndTime) {
            @$body['UpdateEndTime'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$body['UpdateStartTime'] = $request->updateStartTime;
        }

        if (null !== $request->updateUserId) {
            @$body['UpdateUserId'] = $request->updateUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRulesCountList',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRulesCountListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRulesCountListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获得规则列表.
     *
     * @param request - GetRulesCountListRequest
     * @returns GetRulesCountListResponse
     *
     * @param GetRulesCountListRequest $request
     *
     * @return GetRulesCountListResponse
     */
    public function getRulesCountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRulesCountListWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *
     * @param request - GetScoreInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetScoreInfoResponse
     *
     * @param GetScoreInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetScoreInfoResponse
     */
    public function getScoreInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScoreInfo',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetScoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetScoreInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *
     * @param request - GetScoreInfoRequest
     * @returns GetScoreInfoResponse
     *
     * @param GetScoreInfoRequest $request
     *
     * @return GetScoreInfoResponse
     */
    public function getScoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScoreInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSkillGroupConfigResponse
     *
     * @param GetSkillGroupConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSkillGroupConfigResponse
     */
    public function getSkillGroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSkillGroupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetSkillGroupConfigRequest
     * @returns GetSkillGroupConfigResponse
     *
     * @param GetSkillGroupConfigRequest $request
     *
     * @return GetSkillGroupConfigResponse
     */
    public function getSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupConfigWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead
     *
     * @param request - GetSyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSyncResultResponse
     *
     * @param GetSyncResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSyncResultResponse
     */
    public function getSyncResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSyncResult',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSyncResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead
     *
     * @param request - GetSyncResultRequest
     * @returns GetSyncResultResponse
     *
     * @param GetSyncResultRequest $request
     *
     * @return GetSyncResultResponse
     */
    public function getSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyncResultWithOptions($request, $runtime);
    }

    /**
     * 预警策略-详情.
     *
     * @param request - GetWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWarningStrategyConfigResponse
     *
     * @param GetWarningStrategyConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetWarningStrategyConfigResponse
     */
    public function getWarningStrategyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWarningStrategyConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWarningStrategyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预警策略-详情.
     *
     * @param request - GetWarningStrategyConfigRequest
     * @returns GetWarningStrategyConfigResponse
     *
     * @param GetWarningStrategyConfigRequest $request
     *
     * @return GetWarningStrategyConfigResponse
     */
    public function getWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - HandleComplaintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns HandleComplaintResponse
     *
     * @param HandleComplaintRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HandleComplaintResponse
     */
    public function handleComplaintWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleComplaint',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return HandleComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return HandleComplaintResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - HandleComplaintRequest
     * @returns HandleComplaintResponse
     *
     * @param HandleComplaintRequest $request
     *
     * @return HandleComplaintResponse
     */
    public function handleComplaint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleComplaintWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - InvalidRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InvalidRuleResponse
     *
     * @param InvalidRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return InvalidRuleResponse
     */
    public function invalidRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvalidRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvalidRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvalidRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - InvalidRuleRequest
     * @returns InvalidRuleResponse
     *
     * @param InvalidRuleRequest $request
     *
     * @return InvalidRuleResponse
     */
    public function invalidRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invalidRuleWithOptions($request, $runtime);
    }

    /**
     * 获取热词模型列表.
     *
     * @param request - ListAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAsrVocabResponse
     *
     * @param ListAsrVocabRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAsrVocabResponse
     */
    public function listAsrVocabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsrVocab',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsrVocabResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取热词模型列表.
     *
     * @param request - ListAsrVocabRequest
     * @returns ListAsrVocabResponse
     *
     * @param ListAsrVocabRequest $request
     *
     * @return ListAsrVocabResponse
     */
    public function listAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsrVocabWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 获取数据集列表.
     *
     * @deprecated OpenAPI ListDataSet is deprecated
     *
     * @param request - ListDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDataSetResponse
     *
     * @param ListDataSetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDataSetResponse
     */
    public function listDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSet',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 获取数据集列表.
     *
     * @deprecated OpenAPI ListDataSet is deprecated
     *
     * @param request - ListDataSetRequest
     * @returns ListDataSetResponse
     *
     * @param ListDataSetRequest $request
     *
     * @return ListDataSetResponse
     */
    public function listDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSetWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrecisionTaskResponse
     *
     * @param ListPrecisionTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPrecisionTaskResponse
     */
    public function listPrecisionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrecisionTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrecisionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListPrecisionTaskRequest
     * @returns ListPrecisionTaskResponse
     *
     * @param ListPrecisionTaskRequest $request
     *
     * @return ListPrecisionTaskResponse
     */
    public function listPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * 质检方案列表.
     *
     * @param request - ListQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListQualityCheckSchemeResponse
     *
     * @param ListQualityCheckSchemeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListQualityCheckSchemeResponse
     */
    public function listQualityCheckSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQualityCheckScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQualityCheckSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 质检方案列表.
     *
     * @param request - ListQualityCheckSchemeRequest
     * @returns ListQualityCheckSchemeResponse
     *
     * @param ListQualityCheckSchemeRequest $request
     *
     * @return ListQualityCheckSchemeResponse
     */
    public function listQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityCheckSchemeWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead
     *
     * @param request - ListRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead
     *
     * @param request - ListRulesRequest
     * @returns ListRulesResponse
     *
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * V4获得规则列表.
     *
     * @param request - ListRulesV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRulesV4Response
     *
     * @param ListRulesV4Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRulesV4Response
     */
    public function listRulesV4WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->businessName) {
            @$body['BusinessName'] = $request->businessName;
        }

        if (null !== $request->businessRange) {
            @$body['BusinessRange'] = $request->businessRange;
        }

        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->countTotal) {
            @$body['CountTotal'] = $request->countTotal;
        }

        if (null !== $request->createEmpid) {
            @$body['CreateEmpid'] = $request->createEmpid;
        }

        if (null !== $request->createUserId) {
            @$body['CreateUserId'] = $request->createUserId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->lastUpdateEmpid) {
            @$body['LastUpdateEmpid'] = $request->lastUpdateEmpid;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requireInfos) {
            @$body['RequireInfos'] = $request->requireInfos;
        }

        if (null !== $request->rid) {
            @$body['Rid'] = $request->rid;
        }

        if (null !== $request->ruleIdOrRuleName) {
            @$body['RuleIdOrRuleName'] = $request->ruleIdOrRuleName;
        }

        if (null !== $request->ruleScoreSingleType) {
            @$body['RuleScoreSingleType'] = $request->ruleScoreSingleType;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        if (null !== $request->schemeId) {
            @$body['SchemeId'] = $request->schemeId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->typeName) {
            @$body['TypeName'] = $request->typeName;
        }

        if (null !== $request->updateEndTime) {
            @$body['UpdateEndTime'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$body['UpdateStartTime'] = $request->updateStartTime;
        }

        if (null !== $request->updateUserId) {
            @$body['UpdateUserId'] = $request->updateUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRulesV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRulesV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRulesV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * V4获得规则列表.
     *
     * @param request - ListRulesV4Request
     * @returns ListRulesV4Response
     *
     * @param ListRulesV4Request $request
     *
     * @return ListRulesV4Response
     */
    public function listRulesV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesV4WithOptions($request, $runtime);
    }

    /**
     * 获取质检任务列表.
     *
     * @param request - ListSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSchemeTaskConfigResponse
     *
     * @param ListSchemeTaskConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSchemeTaskConfigResponse
     */
    public function listSchemeTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSchemeTaskConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSchemeTaskConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取质检任务列表.
     *
     * @param request - ListSchemeTaskConfigRequest
     * @returns ListSchemeTaskConfigResponse
     *
     * @param ListSchemeTaskConfigRequest $request
     *
     * @return ListSchemeTaskConfigResponse
     */
    public function listSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemeTaskConfigWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 获取会话组列表.
     *
     * @deprecated OpenAPI ListSessionGroup is deprecated
     *
     * @param request - ListSessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSessionGroupResponse
     *
     * @param ListSessionGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSessionGroupResponse
     */
    public function listSessionGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSessionGroup',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSessionGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 获取会话组列表.
     *
     * @deprecated OpenAPI ListSessionGroup is deprecated
     *
     * @param request - ListSessionGroupRequest
     * @returns ListSessionGroupResponse
     *
     * @param ListSessionGroupRequest $request
     *
     * @return ListSessionGroupResponse
     */
    public function listSessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSessionGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - ListSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSkillGroupConfigResponse
     *
     * @param ListSkillGroupConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSkillGroupConfigResponse
     */
    public function listSkillGroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillGroupConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSkillGroupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListSkillGroupConfigRequest
     * @returns ListSkillGroupConfigResponse
     *
     * @param ListSkillGroupConfigRequest $request
     *
     * @return ListSkillGroupConfigResponse
     */
    public function listSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTaskAssignRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTaskAssignRulesResponse
     *
     * @param ListTaskAssignRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTaskAssignRulesResponse
     */
    public function listTaskAssignRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskAssignRules',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTaskAssignRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTaskAssignRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListTaskAssignRulesRequest
     * @returns ListTaskAssignRulesResponse
     *
     * @param ListTaskAssignRulesRequest $request
     *
     * @return ListTaskAssignRulesResponse
     */
    public function listTaskAssignRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskAssignRulesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUsersRequest
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param request - ListWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWarningConfigResponse
     *
     * @param ListWarningConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListWarningConfigResponse
     */
    public function listWarningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWarningConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWarningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListWarningConfigRequest
     * @returns ListWarningConfigResponse
     *
     * @param ListWarningConfigRequest $request
     *
     * @return ListWarningConfigResponse
     */
    public function listWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWarningConfigWithOptions($request, $runtime);
    }

    /**
     * 预警策略-列表.
     *
     * @param request - ListWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWarningStrategyConfigResponse
     *
     * @param ListWarningStrategyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListWarningStrategyConfigResponse
     */
    public function listWarningStrategyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWarningStrategyConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWarningStrategyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预警策略-列表.
     *
     * @param request - ListWarningStrategyConfigRequest
     * @returns ListWarningStrategyConfigResponse
     *
     * @param ListWarningStrategyConfigRequest $request
     *
     * @return ListWarningStrategyConfigResponse
     */
    public function listWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * 批量回收.
     *
     * @param request - RevertAssignedSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevertAssignedSessionResponse
     *
     * @param RevertAssignedSessionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevertAssignedSessionResponse
     */
    public function revertAssignedSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevertAssignedSession',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevertAssignedSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevertAssignedSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量回收.
     *
     * @param request - RevertAssignedSessionRequest
     * @returns RevertAssignedSessionResponse
     *
     * @param RevertAssignedSessionRequest $request
     *
     * @return RevertAssignedSessionResponse
     */
    public function revertAssignedSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAssignedSessionWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 会话组批量回收.
     *
     * @deprecated OpenAPI RevertAssignedSessionGroup is deprecated
     *
     * @param request - RevertAssignedSessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RevertAssignedSessionGroupResponse
     *
     * @param RevertAssignedSessionGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RevertAssignedSessionGroupResponse
     */
    public function revertAssignedSessionGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevertAssignedSessionGroup',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevertAssignedSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevertAssignedSessionGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 会话组批量回收.
     *
     * @deprecated OpenAPI RevertAssignedSessionGroup is deprecated
     *
     * @param request - RevertAssignedSessionGroupRequest
     * @returns RevertAssignedSessionGroupResponse
     *
     * @param RevertAssignedSessionGroupRequest $request
     *
     * @return RevertAssignedSessionGroupResponse
     */
    public function revertAssignedSessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAssignedSessionGroupWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated OpenAPI SaveConfigDataSet is deprecated
     *
     * @param request - SaveConfigDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SaveConfigDataSetResponse
     *
     * @param SaveConfigDataSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveConfigDataSetResponse
     */
    public function saveConfigDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveConfigDataSet',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveConfigDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveConfigDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated OpenAPI SaveConfigDataSet is deprecated
     *
     * @param request - SaveConfigDataSetRequest
     * @returns SaveConfigDataSetResponse
     *
     * @param SaveConfigDataSetRequest $request
     *
     * @return SaveConfigDataSetResponse
     */
    public function saveConfigDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveConfigDataSetWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitComplaintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitComplaintResponse
     *
     * @param SubmitComplaintRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitComplaintResponse
     */
    public function submitComplaintWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitComplaint',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitComplaintResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SubmitComplaintRequest
     * @returns SubmitComplaintResponse
     *
     * @param SubmitComplaintRequest $request
     *
     * @return SubmitComplaintResponse
     */
    public function submitComplaint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitComplaintWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitPrecisionTaskResponse
     *
     * @param SubmitPrecisionTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitPrecisionTaskResponse
     */
    public function submitPrecisionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitPrecisionTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitPrecisionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SubmitPrecisionTaskRequest
     * @returns SubmitPrecisionTaskResponse
     *
     * @param SubmitPrecisionTaskRequest $request
     *
     * @return SubmitPrecisionTaskResponse
     */
    public function submitPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitQualityCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitQualityCheckTaskResponse
     *
     * @param SubmitQualityCheckTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitQualityCheckTaskResponse
     */
    public function submitQualityCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitQualityCheckTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitQualityCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitQualityCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SubmitQualityCheckTaskRequest
     * @returns SubmitQualityCheckTaskResponse
     *
     * @param SubmitQualityCheckTaskRequest $request
     *
     * @return SubmitQualityCheckTaskResponse
     */
    public function submitQualityCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitQualityCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitReviewInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitReviewInfoResponse
     *
     * @param SubmitReviewInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitReviewInfoResponse
     */
    public function submitReviewInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitReviewInfo',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitReviewInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SubmitReviewInfoRequest
     * @returns SubmitReviewInfoResponse
     *
     * @param SubmitReviewInfoRequest $request
     *
     * @return SubmitReviewInfoResponse
     */
    public function submitReviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReviewInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - SyncQualityCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SyncQualityCheckResponse
     *
     * @param SyncQualityCheckRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncQualityCheckResponse
     */
    public function syncQualityCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncQualityCheck',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncQualityCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncQualityCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SyncQualityCheckRequest
     * @returns SyncQualityCheckResponse
     *
     * @param SyncQualityCheckRequest $request
     *
     * @return SyncQualityCheckResponse
     */
    public function syncQualityCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncQualityCheckWithOptions($request, $runtime);
    }

    /**
     * 测试规则.
     *
     * @param request - TestRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TestRuleV4Response
     *
     * @param TestRuleV4Request $request
     * @param RuntimeOptions    $runtime
     *
     * @return TestRuleV4Response
     */
    public function testRuleV4WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isSchemeData) {
            @$body['IsSchemeData'] = $request->isSchemeData;
        }

        if (null !== $request->testJson) {
            @$body['TestJson'] = $request->testJson;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TestRuleV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TestRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return TestRuleV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 测试规则.
     *
     * @param request - TestRuleV4Request
     * @returns TestRuleV4Response
     *
     * @param TestRuleV4Request $request
     *
     * @return TestRuleV4Response
     */
    public function testRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testRuleV4WithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAsrVocabResponse
     *
     * @param UpdateAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAsrVocabResponse
     */
    public function updateAsrVocabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAsrVocab',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAsrVocabResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAsrVocabRequest
     * @returns UpdateAsrVocabResponse
     *
     * @param UpdateAsrVocabRequest $request
     *
     * @return UpdateAsrVocabResponse
     */
    public function updateAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAsrVocabWithOptions($request, $runtime);
    }

    /**
     * 更新质检方案中的质检维度.
     *
     * @param request - UpdateCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCheckTypeToSchemeResponse
     *
     * @param UpdateCheckTypeToSchemeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCheckTypeToSchemeResponse
     */
    public function updateCheckTypeToSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCheckTypeToScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCheckTypeToSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新质检方案中的质检维度.
     *
     * @param request - UpdateCheckTypeToSchemeRequest
     * @returns UpdateCheckTypeToSchemeResponse
     *
     * @param UpdateCheckTypeToSchemeRequest $request
     *
     * @return UpdateCheckTypeToSchemeResponse
     */
    public function updateCheckTypeToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCheckTypeToSchemeWithOptions($request, $runtime);
    }

    /**
     * 更新会话随录数据.
     *
     * @param request - UpdateQualityCheckDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateQualityCheckDataResponse
     *
     * @param UpdateQualityCheckDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateQualityCheckDataResponse
     */
    public function updateQualityCheckDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateQualityCheckData',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQualityCheckDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新会话随录数据.
     *
     * @param request - UpdateQualityCheckDataRequest
     * @returns UpdateQualityCheckDataResponse
     *
     * @param UpdateQualityCheckDataRequest $request
     *
     * @return UpdateQualityCheckDataResponse
     */
    public function updateQualityCheckData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityCheckDataWithOptions($request, $runtime);
    }

    /**
     * 更新质检方案.
     *
     * @param request - UpdateQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateQualityCheckSchemeResponse
     *
     * @param UpdateQualityCheckSchemeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateQualityCheckSchemeResponse
     */
    public function updateQualityCheckSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateQualityCheckScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQualityCheckSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新质检方案.
     *
     * @param request - UpdateQualityCheckSchemeRequest
     * @returns UpdateQualityCheckSchemeResponse
     *
     * @param UpdateQualityCheckSchemeRequest $request
     *
     * @return UpdateQualityCheckSchemeResponse
     */
    public function updateQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityCheckSchemeWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * @deprecated openAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * @deprecated openAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleRequest
     * @returns UpdateRuleResponse
     *
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 更新规则.
     *
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRuleByIdResponse
     *
     * @param UpdateRuleByIdRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRuleByIdResponse
     */
    public function updateRuleByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->isCopy) {
            @$body['IsCopy'] = $request->isCopy;
        }

        if (null !== $request->jsonStrForRule) {
            @$body['JsonStrForRule'] = $request->jsonStrForRule;
        }

        if (null !== $request->returnRelatedSchemes) {
            @$body['ReturnRelatedSchemes'] = $request->returnRelatedSchemes;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleById',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRuleByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 更新规则.
     *
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleByIdRequest
     * @returns UpdateRuleByIdResponse
     *
     * @param UpdateRuleByIdRequest $request
     *
     * @return UpdateRuleByIdResponse
     */
    public function updateRuleById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleByIdWithOptions($request, $runtime);
    }

    /**
     * 更新质检方案的规则.
     *
     * @param request - UpdateRuleToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRuleToSchemeResponse
     *
     * @param UpdateRuleToSchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRuleToSchemeResponse
     */
    public function updateRuleToSchemeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleToScheme',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRuleToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRuleToSchemeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新质检方案的规则.
     *
     * @param request - UpdateRuleToSchemeRequest
     * @returns UpdateRuleToSchemeResponse
     *
     * @param UpdateRuleToSchemeRequest $request
     *
     * @return UpdateRuleToSchemeResponse
     */
    public function updateRuleToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleToSchemeWithOptions($request, $runtime);
    }

    /**
     * V4更新规则.
     *
     * @param request - UpdateRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRuleV4Response
     *
     * @param UpdateRuleV4Request $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRuleV4Response
     */
    public function updateRuleV4WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->jsonStrForRule) {
            @$body['JsonStrForRule'] = $request->jsonStrForRule;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRuleV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * V4更新规则.
     *
     * @param request - UpdateRuleV4Request
     * @returns UpdateRuleV4Response
     *
     * @param UpdateRuleV4Request $request
     *
     * @return UpdateRuleV4Response
     */
    public function updateRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleV4WithOptions($request, $runtime);
    }

    /**
     * 更新质检任务
     *
     * @param request - UpdateSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSchemeTaskConfigResponse
     *
     * @param UpdateSchemeTaskConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSchemeTaskConfigResponse
     */
    public function updateSchemeTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['jsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSchemeTaskConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSchemeTaskConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新质检任务
     *
     * @param request - UpdateSchemeTaskConfigRequest
     * @returns UpdateSchemeTaskConfigResponse
     *
     * @param UpdateSchemeTaskConfigRequest $request
     *
     * @return UpdateSchemeTaskConfigResponse
     */
    public function updateSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSkillGroupConfigResponse
     *
     * @param UpdateSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSkillGroupConfigResponse
     */
    public function updateSkillGroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSkillGroupConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSkillGroupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSkillGroupConfigRequest
     * @returns UpdateSkillGroupConfigResponse
     *
     * @param UpdateSkillGroupConfigRequest $request
     *
     * @return UpdateSkillGroupConfigResponse
     */
    public function updateSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateSyncQualityCheckDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSyncQualityCheckDataResponse
     *
     * @param UpdateSyncQualityCheckDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSyncQualityCheckDataResponse
     */
    public function updateSyncQualityCheckDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSyncQualityCheckData',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSyncQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSyncQualityCheckDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSyncQualityCheckDataRequest
     * @returns UpdateSyncQualityCheckDataResponse
     *
     * @param UpdateSyncQualityCheckDataRequest $request
     *
     * @return UpdateSyncQualityCheckDataResponse
     */
    public function updateSyncQualityCheckData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSyncQualityCheckDataWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTaskAssignRuleResponse
     *
     * @param UpdateTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTaskAssignRuleResponse
     */
    public function updateTaskAssignRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskAssignRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTaskAssignRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateTaskAssignRuleRequest
     * @returns UpdateTaskAssignRuleResponse
     *
     * @param UpdateTaskAssignRuleRequest $request
     *
     * @return UpdateTaskAssignRuleResponse
     */
    public function updateTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateUserRequest
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWarningConfigResponse
     *
     * @param UpdateWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateWarningConfigResponse
     */
    public function updateWarningConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWarningConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWarningConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateWarningConfigRequest
     * @returns UpdateWarningConfigResponse
     *
     * @param UpdateWarningConfigRequest $request
     *
     * @return UpdateWarningConfigResponse
     */
    public function updateWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWarningConfigWithOptions($request, $runtime);
    }

    /**
     * 预警策略-更新.
     *
     * @param request - UpdateWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWarningStrategyConfigResponse
     *
     * @param UpdateWarningStrategyConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateWarningStrategyConfigResponse
     */
    public function updateWarningStrategyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWarningStrategyConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWarningStrategyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预警策略-更新.
     *
     * @param request - UpdateWarningStrategyConfigRequest
     * @returns UpdateWarningStrategyConfigResponse
     *
     * @param UpdateWarningStrategyConfigRequest $request
     *
     * @return UpdateWarningStrategyConfigResponse
     */
    public function updateWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadAudioDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadAudioDataResponse
     *
     * @param UploadAudioDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadAudioDataResponse
     */
    public function uploadAudioDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadAudioData',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadAudioDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadAudioDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UploadAudioDataRequest
     * @returns UploadAudioDataResponse
     *
     * @param UploadAudioDataRequest $request
     *
     * @return UploadAudioDataResponse
     */
    public function uploadAudioData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadAudioDataWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 推荐使用UploadDataV4接口,支持更长的JsonStr,但仅支持POST方法.
     *
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *
     * @param request - UploadDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadDataResponse
     *
     * @param UploadDataRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadDataResponse
     */
    public function uploadDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadData',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 推荐使用UploadDataV4接口,支持更长的JsonStr,但仅支持POST方法.
     *
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *
     * @param request - UploadDataRequest
     * @returns UploadDataResponse
     *
     * @param UploadDataRequest $request
     *
     * @return UploadDataResponse
     */
    public function uploadData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataWithOptions($request, $runtime);
    }

    /**
     * http_hsf.
     *
     * @param request - UploadDataSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadDataSyncResponse
     *
     * @param UploadDataSyncRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UploadDataSyncResponse
     */
    public function uploadDataSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadDataSync',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadDataSyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadDataSyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * http_hsf.
     *
     * @param request - UploadDataSyncRequest
     * @returns UploadDataSyncResponse
     *
     * @param UploadDataSyncRequest $request
     *
     * @return UploadDataSyncResponse
     */
    public function uploadDataSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataSyncWithOptions($request, $runtime);
    }

    /**
     * UploadDataV4.
     *
     * @param request - UploadDataV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadDataV4Response
     *
     * @param UploadDataV4Request $request
     * @param RuntimeOptions      $runtime
     *
     * @return UploadDataV4Response
     */
    public function uploadDataV4WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseMeAgentId) {
            @$body['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$body['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadDataV4',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadDataV4Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadDataV4Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * UploadDataV4.
     *
     * @param request - UploadDataV4Request
     * @returns UploadDataV4Response
     *
     * @param UploadDataV4Request $request
     *
     * @return UploadDataV4Response
     */
    public function uploadDataV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataV4WithOptions($request, $runtime);
    }

    /**
     * @param request - UploadRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadRuleResponse
     *
     * @param UploadRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadRuleResponse
     */
    public function uploadRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadRule',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UploadRuleRequest
     * @returns UploadRuleResponse
     *
     * @param UploadRuleRequest $request
     *
     * @return UploadRuleResponse
     */
    public function uploadRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifyFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns VerifyFileResponse
     *
     * @param VerifyFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifyFileResponse
     */
    public function verifyFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyFile',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return VerifyFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifyFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - VerifyFileRequest
     * @returns VerifyFileResponse
     *
     * @param VerifyFileRequest $request
     *
     * @return VerifyFileResponse
     */
    public function verifyFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyFileWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifySentenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns VerifySentenceResponse
     *
     * @param VerifySentenceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifySentenceResponse
     */
    public function verifySentenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$query['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifySentence',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return VerifySentenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifySentenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - VerifySentenceRequest
     * @returns VerifySentenceResponse
     *
     * @param VerifySentenceRequest $request
     *
     * @return VerifySentenceResponse
     */
    public function verifySentence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySentenceWithOptions($request, $runtime);
    }
}

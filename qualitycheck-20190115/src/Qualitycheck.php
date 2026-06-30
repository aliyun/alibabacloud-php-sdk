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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AnalyzeLabelRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AnalyzeLabelResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ApplyWsTokenResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerBySessionGroupRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerBySessionGroupResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\BatchSubmitReviewInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\BatchSubmitReviewInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAgentTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAgentTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateCheckTypeToSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateCheckTypeToSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateMiningTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateMiningTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateQualityCheckSchemeRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateQualityCheckSchemeResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTagRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTagResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAgentResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ExecuteAgentRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ExecuteAgentResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GenerateLabelRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GenerateLabelResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelGeneratedResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelGeneratedResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetMiningTaskResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetMiningTaskResultResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTagRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTagResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTagRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTagResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RunCompletionMessageRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RunCompletionMessageResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RunCompletionMessageShrinkRequest;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4Response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAgentResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateTagRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateTagResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'qualitycheck.cn-hangzhou.aliyuncs.com',
        ];
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
     * Adds a business category.
     *
     * @param request - AddBusinessCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AddBusinessCategory',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a business category.
     *
     * @param request - AddBusinessCategoryRequest
     *
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
     * Add a rule category.
     *
     * @param request - AddRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AddRuleCategory',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a rule category.
     *
     * @param request - AddRuleCategoryRequest
     *
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
     * This operation creates a rule on the Quality Inspection Rule Configuration page. For Apsara Stack, the URL is ip:port/api/client/UpdateRuleById.json.
     *
     * @param request - AddRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddRuleV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation creates a rule on the Quality Inspection Rule Configuration page. For Apsara Stack, the URL is ip:port/api/client/UpdateRuleById.json.
     *
     * @param request - AddRuleV4Request
     *
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
     * Performs tag categorization.
     *
     * @param request - AnalyzeLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnalyzeLabelResponse
     *
     * @param AnalyzeLabelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AnalyzeLabelResponse
     */
    public function analyzeLabelWithOptions($request, $runtime)
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
            'action' => 'AnalyzeLabel',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnalyzeLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs tag categorization.
     *
     * @param request - AnalyzeLabelRequest
     *
     * @returns AnalyzeLabelResponse
     *
     * @param AnalyzeLabelRequest $request
     *
     * @return AnalyzeLabelResponse
     */
    public function analyzeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeLabelWithOptions($request, $runtime);
    }

    /**
     * Apply for the token required for real-time speech processing.
     *
     * @param request - ApplyWsTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ApplyWsToken',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyWsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Apply for the token required for real-time speech processing.
     *
     * @param request - ApplyWsTokenRequest
     *
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
     * Manually assign quality reviewers.
     *
     * @remarks
     * You can manually assign files that have completed quality inspection to reviewers. Assignments can be made one file at a time or in batches:
     * Single-file assignment: Assign a specific file to a specified reviewer.
     * Batch assignment: Assign multiple filtered files to one or more reviewers. You can specify how many files each reviewer receives, or let the system distribute the files evenly among reviewers.
     *
     * @param request - AssignReviewerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AssignReviewer',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignReviewerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually assign quality reviewers.
     *
     * @remarks
     * You can manually assign files that have completed quality inspection to reviewers. Assignments can be made one file at a time or in batches:
     * Single-file assignment: Assign a specific file to a specified reviewer.
     * Batch assignment: Assign multiple filtered files to one or more reviewers. You can specify how many files each reviewer receives, or let the system distribute the files evenly among reviewers.
     *
     * @param request - AssignReviewerRequest
     *
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

    /**
     * Frontend location: Quality Check Plan Management > Task Results > Session Groups > Batch Assign. Apsara Stack URL: ip:port/api/job/AssignReviewerBySessionGroup.json.
     *
     * @deprecated OpenAPI AssignReviewerBySessionGroup is deprecated
     *
     * @param request - AssignReviewerBySessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'AssignReviewerBySessionGroup',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignReviewerBySessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Frontend location: Quality Check Plan Management > Task Results > Session Groups > Batch Assign. Apsara Stack URL: ip:port/api/job/AssignReviewerBySessionGroup.json.
     *
     * @deprecated OpenAPI AssignReviewerBySessionGroup is deprecated
     *
     * @param request - AssignReviewerBySessionGroupRequest
     *
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
     * This operation implements the Batch Review feature, which is available in the frontend under Task Management > Task Result.
     * For private cloud deployments, use the URL: ip:port/api/qcsBatchSubmitReviewInfo.json.
     * You can use this operation to perform a batch review on all filtered data.
     * Note: This operation updates a large volume of data. The changes may take some time to appear.
     *
     * @param request - BatchSubmitReviewInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'BatchSubmitReviewInfo',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation implements the Batch Review feature, which is available in the frontend under Task Management > Task Result.
     * For private cloud deployments, use the URL: ip:port/api/qcsBatchSubmitReviewInfo.json.
     * You can use this operation to perform a batch review on all filtered data.
     * Note: This operation updates a large volume of data. The changes may take some time to appear.
     *
     * @param request - BatchSubmitReviewInfoRequest
     *
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
     * Creates an agent.
     *
     * @param request - CreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
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
            'action' => 'CreateAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an agent.
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

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * Creates an Agent batch task for conversation analysis. The application call supports HTTP calls to complete the customer response.
     *
     * @param request - CreateAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentTaskResponse
     *
     * @param CreateAgentTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgentTaskResponse
     */
    public function createAgentTaskWithOptions($request, $runtime)
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
            'action' => 'CreateAgentTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Agent batch task for conversation analysis. The application call supports HTTP calls to complete the customer response.
     *
     * @param request - CreateAgentTaskRequest
     *
     * @returns CreateAgentTaskResponse
     *
     * @param CreateAgentTaskRequest $request
     *
     * @return CreateAgentTaskResponse
     */
    public function createAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Uploads a set of speech hotwords to the server and obtains the hotword ID in the response.
     *
     * @remarks
     * > Hotwords help improve recognition accuracy for specific terms, such as names, place names, or technical terms. [Learn more](https://help.aliyun.com/document_detail/213249.html).
     *
     * @param request - CreateAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateAsrVocab',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a set of speech hotwords to the server and obtains the hotword ID in the response.
     *
     * @remarks
     * > Hotwords help improve recognition accuracy for specific terms, such as names, place names, or technical terms. [Learn more](https://help.aliyun.com/document_detail/213249.html).
     *
     * @param request - CreateAsrVocabRequest
     *
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
     * UI path: Quality Check Plan Management > Add or Edit Quality Check Dimension > Add Quality Check Dimension. Apsara Stack API endpoint: ip:port/api/qcs/CreateCheckTypeToScheme.json.
     *
     * @param request - CreateCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateCheckTypeToScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UI path: Quality Check Plan Management > Add or Edit Quality Check Dimension > Add Quality Check Dimension. Apsara Stack API endpoint: ip:port/api/qcs/CreateCheckTypeToScheme.json.
     *
     * @param request - CreateCheckTypeToSchemeRequest
     *
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
     * Creates a label mining task.
     *
     * @param request - CreateMiningTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMiningTaskResponse
     *
     * @param CreateMiningTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMiningTaskResponse
     */
    public function createMiningTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->callbackUrl) {
            @$body['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        if (null !== $request->param) {
            @$body['Param'] = $request->param;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMiningTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMiningTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a label mining task.
     *
     * @param request - CreateMiningTaskRequest
     *
     * @returns CreateMiningTaskResponse
     *
     * @param CreateMiningTaskRequest $request
     *
     * @return CreateMiningTaskResponse
     */
    public function createMiningTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMiningTaskWithOptions($request, $runtime);
    }

    /**
     * You can access this operation from the Quality Check Plan Management page in the console. The Apsara Stack endpoint is ip:port/api/qcs/CreateQualityCheckScheme.json.
     *
     * @param request - CreateQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateQualityCheckScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can access this operation from the Quality Check Plan Management page in the console. The Apsara Stack endpoint is ip:port/api/qcs/CreateQualityCheckScheme.json.
     *
     * @param request - CreateQualityCheckSchemeRequest
     *
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
     * Corresponding frontend feature location: Plan Management > Create Quality Inspection Job. Apsara Stack URL: ip:port/api/task/CreateSchemeTaskConfig.json.
     *
     * @param request - CreateSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateSchemeTaskConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Corresponding frontend feature location: Plan Management > Create Quality Inspection Job. Apsara Stack URL: ip:port/api/task/CreateSchemeTaskConfig.json.
     *
     * @param request - CreateSchemeTaskConfigRequest
     *
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
     * Create a configuration.
     *
     * @deprecated OpenAPI CreateSkillGroupConfig is deprecated
     *
     * @param request - CreateSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateSkillGroupConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Create a configuration.
     *
     * @deprecated OpenAPI CreateSkillGroupConfig is deprecated
     *
     * @param request - CreateSkillGroupConfigRequest
     *
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
     * Creates a label node.
     *
     * @param request - CreateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
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
            'action' => 'CreateTag',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a label node.
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * Creates an automatic allocation rule for quality review tasks.
     *
     * @param request - CreateTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateTaskAssignRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an automatic allocation rule for quality review tasks.
     *
     * @param request - CreateTaskAssignRuleRequest
     *
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
     * Create a user.
     *
     * @remarks
     * Alibaba Cloud uses Resource Access Management (RAM) for unified account management. Before you create a user in Smart Conversation Analysis, first create the user in [RAM](https://ram.console.aliyun.com). Then, obtain the user’s UID, username, and display name. Finally, add the RAM user to Smart Conversation Analysis to grant them access to the Smart Conversation Analysis service.
     *
     * @param request - CreateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
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
            'action' => 'CreateUser',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a user.
     *
     * @remarks
     * Alibaba Cloud uses Resource Access Management (RAM) for unified account management. Before you create a user in Smart Conversation Analysis, first create the user in [RAM](https://ram.console.aliyun.com). Then, obtain the user’s UID, username, and display name. Finally, add the RAM user to Smart Conversation Analysis to grant them access to the Smart Conversation Analysis service.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * Create a warning configuration.
     *
     * @param request - CreateWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateWarningConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a warning configuration.
     *
     * @param request - CreateWarningConfigRequest
     *
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
     *
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
            'action' => 'CreateWarningStrategyConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警策略-新增.
     *
     * @param request - CreateWarningStrategyConfigRequest
     *
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
     * Deletes a rule category.
     *
     * @param request - DelRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DelRuleCategory',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a rule category.
     *
     * @param request - DelRuleCategoryRequest
     *
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
     * Deletes an agent.
     *
     * @param request - DeleteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
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
            'action' => 'DeleteAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an agent.
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

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * Deletes a hotword group.
     *
     * @param request - DeleteAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteAsrVocab',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a hotword group.
     *
     * @param request - DeleteAsrVocabRequest
     *
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
     * Deletes a business category.
     *
     * @param request - DeleteBusinessCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteBusinessCategory',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a business category.
     *
     * @param request - DeleteBusinessCategoryRequest
     *
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
     * Deletes a dimension from a quality inspection scheme.
     *
     * @param request - DeleteCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteCheckTypeToScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dimension from a quality inspection scheme.
     *
     * @param request - DeleteCheckTypeToSchemeRequest
     *
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
     * Deletes a language model.
     *
     * @param request - DeleteCustomizationConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteCustomizationConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomizationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a language model.
     *
     * @param request - DeleteCustomizationConfigRequest
     *
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

    /**
     * Deletes a dataset.
     *
     * @deprecated OpenAPI DeleteDataSet is deprecated
     *
     * @param request - DeleteDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteDataSet',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes a dataset.
     *
     * @deprecated OpenAPI DeleteDataSet is deprecated
     *
     * @param request - DeleteDataSetRequest
     *
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
     * Delete a speech recognition quality check task.
     *
     * @param request - DeletePrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeletePrecisionTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a speech recognition quality check task.
     *
     * @param request - DeletePrecisionTaskRequest
     *
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
     * You can delete a quality check plan from the Quality Check Plan Management page by clicking the Delete button on the right side of the plan. The Apsara Stack API endpoint is ip:port/api/qcs/DeleteQualityCheckScheme.json.
     *
     * @param request - DeleteQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteQualityCheckScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can delete a quality check plan from the Quality Check Plan Management page by clicking the Delete button on the right side of the plan. The Apsara Stack API endpoint is ip:port/api/qcs/DeleteQualityCheckScheme.json.
     *
     * @param request - DeleteQualityCheckSchemeRequest
     *
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

    /**
     * This operation deletes a quality check rule. You can access it from the Quality Check Rule Configuration page in the Apsara Stack console. The API endpoint is ip:port/api/client/DeleteRule.json.
     *
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This operation deletes a quality check rule. You can access it from the Quality Check Rule Configuration page in the Apsara Stack console. The API endpoint is ip:port/api/client/DeleteRule.json.
     *
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - DeleteRuleRequest
     *
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
     * Frontend feature location: Quality Inspection Rule Configuration — Delete. Apsara Stack URL: ip:port/api/client/DeleteRule.json.
     *
     * @param request - DeleteRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRuleV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend feature location: Quality Inspection Rule Configuration — Delete. Apsara Stack URL: ip:port/api/client/DeleteRule.json.
     *
     * @param request - DeleteRuleV4Request
     *
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
     * This feature is not available on the frontend. The Apsara Stack API endpoint is ip:port/api/task/DeleteSchemeTaskConfig.json.
     *
     * @param request - DeleteSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteSchemeTaskConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature is not available on the frontend. The Apsara Stack API endpoint is ip:port/api/task/DeleteSchemeTaskConfig.json.
     *
     * @param request - DeleteSchemeTaskConfigRequest
     *
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
     * Delete a configuration.
     *
     * @deprecated OpenAPI DeleteSkillGroupConfig is deprecated
     *
     * @param request - DeleteSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteSkillGroupConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Delete a configuration.
     *
     * @deprecated OpenAPI DeleteSkillGroupConfig is deprecated
     *
     * @param request - DeleteSkillGroupConfigRequest
     *
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
     * Deletes a label node.
     *
     * @param request - DeleteTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
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
            'action' => 'DeleteTag',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a label node.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * Deletes an automatic allocation rule for review tasks.
     *
     * @param request - DeleteTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteTaskAssignRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an automatic allocation rule for review tasks.
     *
     * @param request - DeleteTaskAssignRuleRequest
     *
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
     * Deletes a warning configuration.
     *
     * @param request - DeleteWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteWarningConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a warning configuration.
     *
     * @param request - DeleteWarningConfigRequest
     *
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
     *
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
            'action' => 'DeleteWarningStrategyConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警策略-删除.
     *
     * @param request - DeleteWarningStrategyConfigRequest
     *
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
     * Runs an agent.
     *
     * @param request - ExecuteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAgentResponse
     *
     * @param ExecuteAgentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExecuteAgentResponse
     */
    public function executeAgentWithSSE($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseMeAgentId) {
            @$body['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$body['JsonStr'] = $request->jsonStr;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ExecuteAgentResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Runs an agent.
     *
     * @param request - ExecuteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAgentResponse
     *
     * @param ExecuteAgentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExecuteAgentResponse
     */
    public function executeAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseMeAgentId) {
            @$body['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->jsonStr) {
            @$body['JsonStr'] = $request->jsonStr;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs an agent.
     *
     * @param request - ExecuteAgentRequest
     *
     * @returns ExecuteAgentResponse
     *
     * @param ExecuteAgentRequest $request
     *
     * @return ExecuteAgentResponse
     */
    public function executeAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeAgentWithOptions($request, $runtime);
    }

    /**
     * Generates labels.
     *
     * @param request - GenerateLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateLabelResponse
     *
     * @param GenerateLabelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateLabelResponse
     */
    public function generateLabelWithOptions($request, $runtime)
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
            'action' => 'GenerateLabel',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates labels.
     *
     * @param request - GenerateLabelRequest
     *
     * @returns GenerateLabelResponse
     *
     * @param GenerateLabelRequest $request
     *
     * @return GenerateLabelResponse
     */
    public function generateLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateLabelWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an agent.
     *
     * @param request - GetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
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
            'action' => 'GetAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an agent.
     *
     * @param request - GetAgentRequest
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * Retrieves the task result of an agent node.
     *
     * @param request - GetAgentTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentTaskResultResponse
     *
     * @param GetAgentTaskResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAgentTaskResultResponse
     */
    public function getAgentTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetAgentTaskResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the task result of an agent node.
     *
     * @param request - GetAgentTaskResultRequest
     *
     * @returns GetAgentTaskResultResponse
     *
     * @param GetAgentTaskResultRequest $request
     *
     * @return GetAgentTaskResultResponse
     */
    public function getAgentTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentTaskResultWithOptions($request, $runtime);
    }

    /**
     * Retrieves details for a specified hotword group.
     *
     * @param request - GetAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetAsrVocab',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details for a specified hotword group.
     *
     * @param request - GetAsrVocabRequest
     *
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
     * Obtain the list of applicable businesses.
     *
     * @param request - GetBusinessCategoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetBusinessCategoryList',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBusinessCategoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the list of applicable businesses.
     *
     * @param request - GetBusinessCategoryListRequest
     *
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
     * Retrieves a list of language models.
     *
     * @param request - GetCustomizationConfigListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetCustomizationConfigList',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomizationConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of language models.
     *
     * @param request - GetCustomizationConfigListRequest
     *
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
     * Queries the results of tag categorization analysis.
     *
     * @param request - GetLabelAnalysisResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLabelAnalysisResultResponse
     *
     * @param GetLabelAnalysisResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLabelAnalysisResultResponse
     */
    public function getLabelAnalysisResultWithOptions($request, $runtime)
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
            'action' => 'GetLabelAnalysisResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLabelAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of tag categorization analysis.
     *
     * @param request - GetLabelAnalysisResultRequest
     *
     * @returns GetLabelAnalysisResultResponse
     *
     * @param GetLabelAnalysisResultRequest $request
     *
     * @return GetLabelAnalysisResultResponse
     */
    public function getLabelAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLabelAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * Queries the result of a label generation task.
     *
     * @param request - GetLabelGeneratedResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLabelGeneratedResultResponse
     *
     * @param GetLabelGeneratedResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLabelGeneratedResultResponse
     */
    public function getLabelGeneratedResultWithOptions($request, $runtime)
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
            'action' => 'GetLabelGeneratedResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLabelGeneratedResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of a label generation task.
     *
     * @param request - GetLabelGeneratedResultRequest
     *
     * @returns GetLabelGeneratedResultResponse
     *
     * @param GetLabelGeneratedResultRequest $request
     *
     * @return GetLabelGeneratedResultResponse
     */
    public function getLabelGeneratedResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLabelGeneratedResultWithOptions($request, $runtime);
    }

    /**
     * Retrieve the result of a tag mining task.
     *
     * @param request - GetMiningTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMiningTaskResultResponse
     *
     * @param GetMiningTaskResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMiningTaskResultResponse
     */
    public function getMiningTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMiningTaskResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMiningTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the result of a tag mining task.
     *
     * @param request - GetMiningTaskResultRequest
     *
     * @returns GetMiningTaskResultResponse
     *
     * @param GetMiningTaskResultRequest $request
     *
     * @return GetMiningTaskResultResponse
     */
    public function getMiningTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMiningTaskResultWithOptions($request, $runtime);
    }

    /**
     * Retrieve the next file details for manual verification.
     *
     * @param request - GetNextResultToVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetNextResultToVerify',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNextResultToVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the next file details for manual verification.
     *
     * @param request - GetNextResultToVerifyRequest
     *
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
     * Retrieves the details of a (speech recognition) detection task.
     *
     * @param request - GetPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetPrecisionTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a (speech recognition) detection task.
     *
     * @param request - GetPrecisionTaskRequest
     *
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
     * This operation implements the query feature in quality check plan management on the frontend. The Apsara Stack URL is ip:port/api/qcs/GetQualityCheckScheme.json.
     *
     * @param request - GetQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetQualityCheckScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation implements the query feature in quality check plan management on the frontend. The Apsara Stack URL is ip:port/api/qcs/GetQualityCheckScheme.json.
     *
     * @param request - GetQualityCheckSchemeRequest
     *
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
     * Query quality inspection results. Some fields require the requiredFields parameter to be explicitly specified in the request. Set the service endpoint (Region) to Hangzhou (cn-hangzhou).
     *
     * @remarks
     * You can query data uploaded using [UploadAudioData](https://help.aliyun.com/document_detail/139399.html) or [UploadData](https://help.aliyun.com/document_detail/111394.html). You can also query data from dataset-based quality inspection tasks created with [SubmitQualityCheckTask](https://help.aliyun.com/document_detail/158890.html). You can search by task ID (taskId) or by time range.
     *
     * @param request - GetResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query quality inspection results. Some fields require the requiredFields parameter to be explicitly specified in the request. Set the service endpoint (Region) to Hangzhou (cn-hangzhou).
     *
     * @remarks
     * You can query data uploaded using [UploadAudioData](https://help.aliyun.com/document_detail/139399.html) or [UploadData](https://help.aliyun.com/document_detail/111394.html). You can also query data from dataset-based quality inspection tasks created with [SubmitQualityCheckTask](https://help.aliyun.com/document_detail/158890.html). You can search by task ID (taskId) or by time range.
     *
     * @param request - GetResultRequest
     *
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
     * Retrieves the quality inspection results for a specified file. The response includes the transcript, audio URL, and details of detected rule hits. You can use this information to review the file by listening to the audio, reading the transcript, and locating where rules were triggered.
     *
     * @param request - GetResultToReviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetResultToReview',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResultToReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the quality inspection results for a specified file. The response includes the transcript, audio URL, and details of detected rule hits. You can use this information to review the file by listening to the audio, reading the transcript, and locating where rules were triggered.
     *
     * @param request - GetResultToReviewRequest
     *
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

    /**
     * Retrieves basic information about rules.
     *
     * @remarks
     * > This operation returns basic rule information such as the **id** and **name**. You can use this information with [GetRuleDetails](https://help.aliyun.com/document_detail/142310.html).
     *
     * @deprecated openAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves basic information about rules.
     *
     * @remarks
     * > This operation returns basic rule information such as the **id** and **name**. You can use this information with [GetRuleDetails](https://help.aliyun.com/document_detail/142310.html).
     *
     * @deprecated openAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleRequest
     *
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

    /**
     * Retrieves the details of a specific quality inspection rule. It corresponds to the **Edit** action on the **Quality Inspection Rule Configuration** page. The URL for this operation in a private cloud is `ip:port/api/client/GetRuleById.json`.
     *
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRuleById',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the details of a specific quality inspection rule. It corresponds to the **Edit** action on the **Quality Inspection Rule Configuration** page. The URL for this operation in a private cloud is `ip:port/api/client/GetRuleById.json`.
     *
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleByIdRequest
     *
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
     * Retrieves a list of rule types.
     *
     * @param request - GetRuleCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetRuleCategory',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of rule types.
     *
     * @param request - GetRuleCategoryRequest
     *
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

    /**
     * Retrieves the detailed information of a rule.
     *
     * @remarks
     * > This operation is used in conjunction with [Get basic rule information](https://help.aliyun.com/document_detail/142333.html). First, call the GetRule operation to obtain the rule ID. Then, use the rule ID as a parameter to call the **GetRuleDetail** operation.
     *
     * @deprecated openAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetRuleDetail',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the detailed information of a rule.
     *
     * @remarks
     * > This operation is used in conjunction with [Get basic rule information](https://help.aliyun.com/document_detail/142333.html). First, call the GetRule operation to obtain the rule ID. Then, use the rule ID as a parameter to call the **GetRuleDetail** operation.
     *
     * @deprecated openAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *
     * @param request - GetRuleDetailRequest
     *
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
     * This API is located in the frontend at Quality Check Rule Configuration > Query. The Apsara Stack URL is ip:port/api/client/GetRuleById.json.
     *
     * @param request - GetRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetRuleV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is located in the frontend at Quality Check Rule Configuration > Query. The Apsara Stack URL is ip:port/api/client/GetRuleById.json.
     *
     * @param request - GetRuleV4Request
     *
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
     * Corresponds to the frontend feature location: Quality Inspection Rule Configuration > List. Apsara Stack URL: ip:port/api/rule/GetRulesCountList.json.
     *
     * @param request - GetRulesCountListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRulesCountList',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRulesCountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Corresponds to the frontend feature location: Quality Inspection Rule Configuration > List. Apsara Stack URL: ip:port/api/rule/GetRulesCountList.json.
     *
     * @param request - GetRulesCountListRequest
     *
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

    /**
     * Obtain the configuration details of a quality inspection task.
     *
     * @param request - GetSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSchemeTaskConfigResponse
     *
     * @param GetSchemeTaskConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSchemeTaskConfigResponse
     */
    public function getSchemeTaskConfigWithOptions($request, $runtime)
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
            'action' => 'GetSchemeTaskConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the configuration details of a quality inspection task.
     *
     * @param request - GetSchemeTaskConfigRequest
     *
     * @returns GetSchemeTaskConfigResponse
     *
     * @param GetSchemeTaskConfigRequest $request
     *
     * @return GetSchemeTaskConfigResponse
     */
    public function getSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves information about all scoring items.
     *
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *
     * @param request - GetScoreInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetScoreInfo',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves information about all scoring items.
     *
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *
     * @param request - GetScoreInfoRequest
     *
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
     * Retrieves the configuration that is specified by its ID.
     *
     * @deprecated OpenAPI GetSkillGroupConfig is deprecated
     *
     * @param request - GetSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetSkillGroupConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the configuration that is specified by its ID.
     *
     * @deprecated OpenAPI GetSkillGroupConfig is deprecated
     *
     * @param request - GetSkillGroupConfigRequest
     *
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

    /**
     * You can obtain the real-time quality inspection result of the hotline.
     *
     * @deprecated openAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead
     *
     * @param request - GetSyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetSyncResult',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * You can obtain the real-time quality inspection result of the hotline.
     *
     * @deprecated openAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead
     *
     * @param request - GetSyncResultRequest
     *
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
     * Queries the details of a label node.
     *
     * @param request - GetTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagResponse
     *
     * @param GetTagRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTagResponse
     */
    public function getTagWithOptions($request, $runtime)
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
            'action' => 'GetTag',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a label node.
     *
     * @param request - GetTagRequest
     *
     * @returns GetTagResponse
     *
     * @param GetTagRequest $request
     *
     * @return GetTagResponse
     */
    public function getTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagWithOptions($request, $runtime);
    }

    /**
     * 预警策略-详情.
     *
     * @param request - GetWarningStrategyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetWarningStrategyConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警策略-详情.
     *
     * @param request - GetWarningStrategyConfigRequest
     *
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
     * Handles a complaint.
     *
     * @remarks
     * Only quality checkers or administrators can call this operation.
     *
     * @param request - HandleComplaintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'HandleComplaint',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HandleComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Handles a complaint.
     *
     * @remarks
     * Only quality checkers or administrators can call this operation.
     *
     * @param request - HandleComplaintRequest
     *
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

    /**
     * Delete rules.
     *
     * @deprecated openAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - InvalidRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'InvalidRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvalidRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Delete rules.
     *
     * @deprecated openAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *
     * @param request - InvalidRuleRequest
     *
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
     * Retrieves a list of vocabulary groups without their specific content.
     *
     * @param request - ListAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListAsrVocab',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of vocabulary groups without their specific content.
     *
     * @param request - ListAsrVocabRequest
     *
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

    /**
     * This feature is located in the Dataset management section of the frontend. The Apsara Stack URL is ip:port/api/dataset/ListDataSet.json.
     *
     * @deprecated OpenAPI ListDataSet is deprecated
     *
     * @param request - ListDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListDataSet',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This feature is located in the Dataset management section of the frontend. The Apsara Stack URL is ip:port/api/dataset/ListDataSet.json.
     *
     * @deprecated OpenAPI ListDataSet is deprecated
     *
     * @param request - ListDataSetRequest
     *
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
     * Retrieve the list of speech recognition precision tasks. Set the service endpoint to Hangzhou (cn-hangzhou).
     *
     * @param request - ListPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListPrecisionTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of speech recognition precision tasks. Set the service endpoint to Hangzhou (cn-hangzhou).
     *
     * @param request - ListPrecisionTaskRequest
     *
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
     * Retrieves a list of quality check schemes.
     *
     * @param request - ListQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListQualityCheckScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of quality check schemes.
     *
     * @param request - ListQualityCheckSchemeRequest
     *
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

    /**
     * Lists rules.
     *
     * @deprecated openAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead
     *
     * @param request - ListRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListRules',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Lists rules.
     *
     * @deprecated openAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead
     *
     * @param request - ListRulesRequest
     *
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
     * Frontend location: Quality inspection rule configuration — List. Apsara Stack URL: ip:port/api/rule/GetRulesCountList.json.
     *
     * @param request - ListRulesV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRulesV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRulesV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend location: Quality inspection rule configuration — List. Apsara Stack URL: ip:port/api/rule/GetRulesCountList.json.
     *
     * @param request - ListRulesV4Request
     *
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
     * This operation is used for the Task Management feature on the frontend. The Apsara Stack URL is ip:port/api/task/ListSchemeTaskInfo.json.
     *
     * @param request - ListSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListSchemeTaskConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used for the Task Management feature on the frontend. The Apsara Stack URL is ip:port/api/task/ListSchemeTaskInfo.json.
     *
     * @param request - ListSchemeTaskConfigRequest
     *
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

    /**
     * This API corresponds to the frontend location: Task Management > View Results > Task Result > Session Group Results tab. The Apsara Stack URL is: ip:port/api/session/group/ListSessionGroup.json. It aggregates multi-turn sessions by their session group ID for unified management. You must pass the `sessionGroupId` field. For more information, see the UploadData and UploadAudioData API documentation.
     *
     * @deprecated OpenAPI ListSessionGroup is deprecated
     *
     * @param request - ListSessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListSessionGroup',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This API corresponds to the frontend location: Task Management > View Results > Task Result > Session Group Results tab. The Apsara Stack URL is: ip:port/api/session/group/ListSessionGroup.json. It aggregates multi-turn sessions by their session group ID for unified management. You must pass the `sessionGroupId` field. For more information, see the UploadData and UploadAudioData API documentation.
     *
     * @deprecated OpenAPI ListSessionGroup is deprecated
     *
     * @param request - ListSessionGroupRequest
     *
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
     * You can call ListSkillGroupConfig to obtain the configuration list.
     *
     * @deprecated OpenAPI ListSkillGroupConfig is deprecated
     *
     * @param request - ListSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListSkillGroupConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * You can call ListSkillGroupConfig to obtain the configuration list.
     *
     * @deprecated OpenAPI ListSkillGroupConfig is deprecated
     *
     * @param request - ListSkillGroupConfigRequest
     *
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
     * Queries the list of label nodes.
     *
     * @param request - ListTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResponse
     *
     * @param ListTagRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListTagResponse
     */
    public function listTagWithOptions($request, $runtime)
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
            'action' => 'ListTag',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of label nodes.
     *
     * @param request - ListTagRequest
     *
     * @returns ListTagResponse
     *
     * @param ListTagRequest $request
     *
     * @return ListTagResponse
     */
    public function listTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagWithOptions($request, $runtime);
    }

    /**
     * Lists automatic allocation rules for review tasks.
     *
     * @param request - ListTaskAssignRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListTaskAssignRules',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTaskAssignRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists automatic allocation rules for review tasks.
     *
     * @param request - ListTaskAssignRulesRequest
     *
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
     * Retrieves a list of users. Set the service endpoint to China (Hangzhou) (cn-hangzhou).
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListUsers',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of users. Set the service endpoint to China (Hangzhou) (cn-hangzhou).
     *
     * @param request - ListUsersRequest
     *
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
     * Lists warning configurations.
     *
     * @param request - ListWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListWarningConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists warning configurations.
     *
     * @param request - ListWarningConfigRequest
     *
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
     *
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
            'action' => 'ListWarningStrategyConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警策略-列表.
     *
     * @param request - ListWarningStrategyConfigRequest
     *
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
     * Frontend location: Task Management > Task Results > Batch Revoke. Apsara Stack URL: ip:port/api/job/RevertAssignedSession.json.
     *
     * @param request - RevertAssignedSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'RevertAssignedSession',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevertAssignedSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend location: Task Management > Task Results > Batch Revoke. Apsara Stack URL: ip:port/api/job/RevertAssignedSession.json.
     *
     * @param request - RevertAssignedSessionRequest
     *
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

    /**
     * You can use this feature in the frontend console under Plan Management > Task Result > Session Group > Batch Revoke. The Apsara Stack URL for this operation is `ip:port/api/job/RevertAssignedSessionGroup.json`.
     *
     * @deprecated OpenAPI RevertAssignedSessionGroup is deprecated
     *
     * @param request - RevertAssignedSessionGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'RevertAssignedSessionGroup',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevertAssignedSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * You can use this feature in the frontend console under Plan Management > Task Result > Session Group > Batch Revoke. The Apsara Stack URL for this operation is `ip:port/api/job/RevertAssignedSessionGroup.json`.
     *
     * @deprecated OpenAPI RevertAssignedSessionGroup is deprecated
     *
     * @param request - RevertAssignedSessionGroupRequest
     *
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

    /**
     * This operation calls a large model using the message protocol to generate a response. You can make calls using standard HTTP for a complete response or use Server-Sent Events (SSE) for a streaming response.
     *
     * @param tmpReq - RunCompletionMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCompletionMessageResponse
     *
     * @param RunCompletionMessageRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RunCompletionMessageResponse
     */
    public function runCompletionMessageWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunCompletionMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }

        $body = [];
        if (null !== $request->messagesShrink) {
            @$body['Messages'] = $request->messagesShrink;
        }

        if (null !== $request->modelCode) {
            @$body['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCompletionMessage',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RunCompletionMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * This operation calls a large model using the message protocol to generate a response. You can make calls using standard HTTP for a complete response or use Server-Sent Events (SSE) for a streaming response.
     *
     * @param tmpReq - RunCompletionMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCompletionMessageResponse
     *
     * @param RunCompletionMessageRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RunCompletionMessageResponse
     */
    public function runCompletionMessageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunCompletionMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }

        $body = [];
        if (null !== $request->messagesShrink) {
            @$body['Messages'] = $request->messagesShrink;
        }

        if (null !== $request->modelCode) {
            @$body['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCompletionMessage',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCompletionMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation calls a large model using the message protocol to generate a response. You can make calls using standard HTTP for a complete response or use Server-Sent Events (SSE) for a streaming response.
     *
     * @param request - RunCompletionMessageRequest
     *
     * @returns RunCompletionMessageResponse
     *
     * @param RunCompletionMessageRequest $request
     *
     * @return RunCompletionMessageResponse
     */
    public function runCompletionMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCompletionMessageWithOptions($request, $runtime);
    }

    /**
     * Saves the speaker role configuration for a dataset.
     *
     * @deprecated OpenAPI SaveConfigDataSet is deprecated
     *
     * @param request - SaveConfigDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SaveConfigDataSet',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveConfigDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Saves the speaker role configuration for a dataset.
     *
     * @deprecated OpenAPI SaveConfigDataSet is deprecated
     *
     * @param request - SaveConfigDataSetRequest
     *
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
     * Submits a complaint.
     *
     * @param request - SubmitComplaintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SubmitComplaint',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a complaint.
     *
     * @param request - SubmitComplaintRequest
     *
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
     * Creates a speech recognition evaluation task. The service endpoint is China East 1 (Hangzhou) (cn-hangzhou).
     *
     * @param request - SubmitPrecisionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SubmitPrecisionTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a speech recognition evaluation task. The service endpoint is China East 1 (Hangzhou) (cn-hangzhou).
     *
     * @param request - SubmitPrecisionTaskRequest
     *
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
     * Create a new dataset quality check task.
     *
     * @param request - SubmitQualityCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SubmitQualityCheckTask',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitQualityCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new dataset quality check task.
     *
     * @param request - SubmitQualityCheckTaskRequest
     *
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
     * Save review results. This is only supported by the legacy Smart Conversation Analysis.
     *
     * @remarks
     * You can manually review files after quality inspection. After completing the review, call this API to save the review results. This involves manually reviewing rules identified by the system as hits to determine if they are true hits or false positives. Refer to the file review feature on the console page. For more information, see [File Review](https://help.aliyun.com/document_detail/139653.html#h2-u6587u4EF6u590Du68385).
     *
     * @param request - SubmitReviewInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SubmitReviewInfo',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Save review results. This is only supported by the legacy Smart Conversation Analysis.
     *
     * @remarks
     * You can manually review files after quality inspection. After completing the review, call this API to save the review results. This involves manually reviewing rules identified by the system as hits to determine if they are true hits or false positives. Refer to the file review feature on the console page. For more information, see [File Review](https://help.aliyun.com/document_detail/139653.html#h2-u6587u4EF6u590Du68385).
     *
     * @param request - SubmitReviewInfoRequest
     *
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
     * Review quality inspection results.
     *
     * @param request - SubmitReviewInfoV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitReviewInfoV4Response
     *
     * @param SubmitReviewInfoV4Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitReviewInfoV4Response
     */
    public function submitReviewInfoV4WithOptions($request, $runtime)
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
            'action' => 'SubmitReviewInfoV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitReviewInfoV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Review quality inspection results.
     *
     * @param request - SubmitReviewInfoV4Request
     *
     * @returns SubmitReviewInfoV4Response
     *
     * @param SubmitReviewInfoV4Request $request
     *
     * @return SubmitReviewInfoV4Response
     */
    public function submitReviewInfoV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReviewInfoV4WithOptions($request, $runtime);
    }

    /**
     * Perform real-time quality inspection for hotlines.
     *
     * @remarks
     * Real-time hotline quality inspection transcribes spoken dialogue into text during a call. It sends the text to the Smart Conversation Analysis system for real-time quality inspection to detect potential issues or risks. You can display the dialogue text and inspection results in real time on the customer service representative\\"s workbench (a third-party system). This differs from offline quality inspection, which uses UploadAudioData for inspection or dataset inspection. For details, see the developer guide. Offline quality inspection occurs after the call ends and the recording file is generated.
     * **Usage Flow**
     * You can implement real-time transcription of audio streams to text during calls, or use Alibaba Cloud Call Center (CC) directly. CC integrates deeply with Smart Conversation Analysis, enabling real-time quality inspection during calls without API integration.
     * If you implement audio-to-text conversion yourself, invoke the SyncQualityCheck API for real-time quality inspection after a speaker finishes a sentence and generates dialogue text. This returns the inspection result for that sentence synchronously.
     * You should include skill group information when uploading data. Then, you can use the Call Center Quality Inspection - Configuration Management feature to configure different quality inspection rules for calls from different skill groups.
     * After the call ends, you can store the recording file on a storage server accessible over the public network. You can invoke the recording information maintenance API: UpdateSyncQualityCheckData. You can submit the recording name, recording file URL, and other details to the Smart Conversation Analysis service. This lets quality inspectors play back the recording during review.
     * After the call ends, you can view the quality inspection results in Call Center Quality Inspection - Result Display - Real-time Quality Inspection Results. You can also invoke the real-time quality inspection result query API: GetSyncResult to retrieve the results. You can use Score Dashboard - Real-time Dashboard to view data charts for customer service representatives, skill groups, and scoring items.
     * **Full-Text Quality Inspection**
     * Quality inspection rules include dozens of operators. Some operators require dialogue context (multi-turn conversations between customer service representatives and customers) for analysis. However, real-time quality inspection occurs during a call and typically uses text from only one sentence spoken by a single speaker. Some operators are not suitable for real-time quality inspection. Therefore, quality inspection rules are divided into real-time quality inspection rules and full-text quality inspection rules:
     * **Real-time quality inspection rules**: Rules used for real-time quality inspection. They support a limited number of operator types. They do not support specifying the detection range for operators.
     * **Full-text quality inspection rules**: Rules used for offline quality inspection. They support all operator types. They support custom detection ranges for operators.
     * For calls that underwent real-time quality inspection, you can apply full-text quality inspection rules to the complete dialogue text after the call ends. To enable full-text quality inspection after real-time inspection, see the full-text quality inspection description in Call Center Quality Inspection - Configuration Management.
     *
     * @param request - SyncQualityCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SyncQualityCheck',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncQualityCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Perform real-time quality inspection for hotlines.
     *
     * @remarks
     * Real-time hotline quality inspection transcribes spoken dialogue into text during a call. It sends the text to the Smart Conversation Analysis system for real-time quality inspection to detect potential issues or risks. You can display the dialogue text and inspection results in real time on the customer service representative\\"s workbench (a third-party system). This differs from offline quality inspection, which uses UploadAudioData for inspection or dataset inspection. For details, see the developer guide. Offline quality inspection occurs after the call ends and the recording file is generated.
     * **Usage Flow**
     * You can implement real-time transcription of audio streams to text during calls, or use Alibaba Cloud Call Center (CC) directly. CC integrates deeply with Smart Conversation Analysis, enabling real-time quality inspection during calls without API integration.
     * If you implement audio-to-text conversion yourself, invoke the SyncQualityCheck API for real-time quality inspection after a speaker finishes a sentence and generates dialogue text. This returns the inspection result for that sentence synchronously.
     * You should include skill group information when uploading data. Then, you can use the Call Center Quality Inspection - Configuration Management feature to configure different quality inspection rules for calls from different skill groups.
     * After the call ends, you can store the recording file on a storage server accessible over the public network. You can invoke the recording information maintenance API: UpdateSyncQualityCheckData. You can submit the recording name, recording file URL, and other details to the Smart Conversation Analysis service. This lets quality inspectors play back the recording during review.
     * After the call ends, you can view the quality inspection results in Call Center Quality Inspection - Result Display - Real-time Quality Inspection Results. You can also invoke the real-time quality inspection result query API: GetSyncResult to retrieve the results. You can use Score Dashboard - Real-time Dashboard to view data charts for customer service representatives, skill groups, and scoring items.
     * **Full-Text Quality Inspection**
     * Quality inspection rules include dozens of operators. Some operators require dialogue context (multi-turn conversations between customer service representatives and customers) for analysis. However, real-time quality inspection occurs during a call and typically uses text from only one sentence spoken by a single speaker. Some operators are not suitable for real-time quality inspection. Therefore, quality inspection rules are divided into real-time quality inspection rules and full-text quality inspection rules:
     * **Real-time quality inspection rules**: Rules used for real-time quality inspection. They support a limited number of operator types. They do not support specifying the detection range for operators.
     * **Full-text quality inspection rules**: Rules used for offline quality inspection. They support all operator types. They support custom detection ranges for operators.
     * For calls that underwent real-time quality inspection, you can apply full-text quality inspection rules to the complete dialogue text after the call ends. To enable full-text quality inspection after real-time inspection, see the full-text quality inspection description in Call Center Quality Inspection - Configuration Management.
     *
     * @param request - SyncQualityCheckRequest
     *
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
     * Frontend location: Quality Check Rule Configuration > Test. Apsara Stack URL: http://<ip>:<port>/api/client/TestRule.json.
     *
     * @param request - TestRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'TestRuleV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend location: Quality Check Rule Configuration > Test. Apsara Stack URL: http://<ip>:<port>/api/client/TestRule.json.
     *
     * @param request - TestRuleV4Request
     *
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
     * Modifies an agent.
     *
     * @param request - UpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
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
            'action' => 'UpdateAgent',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an agent.
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

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * Updates the hotword vocabulary.
     *
     * @param request - UpdateAsrVocabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateAsrVocab',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the hotword vocabulary.
     *
     * @param request - UpdateAsrVocabRequest
     *
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
     * You can access this operation from the frontend by navigating to Plan Management > Create Quality Inspection Task or Edit > Edit icon next to the quality inspection dimension name. The Apsara Stack endpoint is ip:port/api/qcs/UpdateCheckTypeToScheme.json.
     *
     * @param request - UpdateCheckTypeToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateCheckTypeToScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can access this operation from the frontend by navigating to Plan Management > Create Quality Inspection Task or Edit > Edit icon next to the quality inspection dimension name. The Apsara Stack endpoint is ip:port/api/qcs/UpdateCheckTypeToScheme.json.
     *
     * @param request - UpdateCheckTypeToSchemeRequest
     *
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
     * Update session recording data (third-party business fields) to facilitate statistics and queries across more business dimensions.
     *
     * @param request - UpdateQualityCheckDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateQualityCheckData',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update session recording data (third-party business fields) to facilitate statistics and queries across more business dimensions.
     *
     * @param request - UpdateQualityCheckDataRequest
     *
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
     * Updates a quality check scheme.
     *
     * @param request - UpdateQualityCheckSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateQualityCheckScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a quality check scheme.
     *
     * @param request - UpdateQualityCheckSchemeRequest
     *
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

    /**
     * Update rule information.
     *
     * @remarks
     * > Update an existing rule. You can modify its conditions and operators as needed. The rule ID (rid) remains unchanged, but condition IDs and operator IDs may change.
     *
     * @deprecated openAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Update rule information.
     *
     * @remarks
     * > Update an existing rule. You can modify its conditions and operators as needed. The rule ID (rid) remains unchanged, but condition IDs and operator IDs may change.
     *
     * @deprecated openAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleRequest
     *
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

    /**
     * This API maps to the frontend function location: Quality Inspection Rule Configuration - Create & Update. The Apsara Stack URL is: ip:port/api/client/UpdateRuleById.json.
     *
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRuleById',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * This API maps to the frontend function location: Quality Inspection Rule Configuration - Create & Update. The Apsara Stack URL is: ip:port/api/client/UpdateRuleById.json.
     *
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *
     * @param request - UpdateRuleByIdRequest
     *
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
     * Frontend location: Quality Check Plan Management > Create or edit a quality check task > Associate quality check rules. Apsara Stack URL: ip:port/api/qcs/UpdateRuleToScheme.json.
     *
     * @param request - UpdateRuleToSchemeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateRuleToScheme',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend location: Quality Check Plan Management > Create or edit a quality check task > Associate quality check rules. Apsara Stack URL: ip:port/api/qcs/UpdateRuleToScheme.json.
     *
     * @param request - UpdateRuleToSchemeRequest
     *
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
     * Corresponding frontend feature location: Rule Configuration - Update. Apsara Stack URL: ip:port/api/client/UpdateRuleById.json.
     *
     * @param request - UpdateRuleV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRuleV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Corresponding frontend feature location: Rule Configuration - Update. Apsara Stack URL: ip:port/api/client/UpdateRuleById.json.
     *
     * @param request - UpdateRuleV4Request
     *
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
     * Frontend path: Task Management > Edit any data on the right. Apsara Stack URL: ip:port/api/task/UpdateSchemeTaskConfig.json.
     *
     * @remarks
     * Updates quality inspection task information.
     *
     * @param request - UpdateSchemeTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateSchemeTaskConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Frontend path: Task Management > Edit any data on the right. Apsara Stack URL: ip:port/api/task/UpdateSchemeTaskConfig.json.
     *
     * @remarks
     * Updates quality inspection task information.
     *
     * @param request - UpdateSchemeTaskConfigRequest
     *
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
     * You can call UpdateSkillGroupConfig to update a configuration.
     *
     * @deprecated OpenAPI UpdateSkillGroupConfig is deprecated
     *
     * @param request - UpdateSkillGroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateSkillGroupConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * You can call UpdateSkillGroupConfig to update a configuration.
     *
     * @deprecated OpenAPI UpdateSkillGroupConfig is deprecated
     *
     * @param request - UpdateSkillGroupConfigRequest
     *
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
     * Maintain the recording information after real-time quality inspection is completed, which is used to play back the recording during review. After the recording information is maintained, the task status will change to Succeeded.
     *
     * @param request - UpdateSyncQualityCheckDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateSyncQualityCheckData',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSyncQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Maintain the recording information after real-time quality inspection is completed, which is used to play back the recording during review. After the recording information is maintained, the task status will change to Succeeded.
     *
     * @param request - UpdateSyncQualityCheckDataRequest
     *
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
     * Updates a label node.
     *
     * @param request - UpdateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTagResponse
     *
     * @param UpdateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateTagResponse
     */
    public function updateTagWithOptions($request, $runtime)
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
            'action' => 'UpdateTag',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a label node.
     *
     * @param request - UpdateTagRequest
     *
     * @returns UpdateTagResponse
     *
     * @param UpdateTagRequest $request
     *
     * @return UpdateTagResponse
     */
    public function updateTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagWithOptions($request, $runtime);
    }

    /**
     * Update the automatic allocation rule for quality review tasks.
     *
     * @param request - UpdateTaskAssignRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateTaskAssignRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the automatic allocation rule for quality review tasks.
     *
     * @param request - UpdateTaskAssignRuleRequest
     *
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
     * Update users by modifying their roles in batches.
     *
     * @remarks
     * When you update users, you can modify only their roles. You cannot modify other account information because all Alibaba Cloud products use a unified account management system. Smart Conversation Analysis uses these accounts. To modify account information, go to [Resource Access Management (RAM)](https://ram.console.aliyun.com/).
     *
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateUser',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update users by modifying their roles in batches.
     *
     * @remarks
     * When you update users, you can modify only their roles. You cannot modify other account information because all Alibaba Cloud products use a unified account management system. Smart Conversation Analysis uses these accounts. To modify account information, go to [Resource Access Management (RAM)](https://ram.console.aliyun.com/).
     *
     * @param request - UpdateUserRequest
     *
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
     * Updates the warning configuration.
     *
     * @param request - UpdateWarningConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateWarningConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the warning configuration.
     *
     * @param request - UpdateWarningConfigRequest
     *
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
     *
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
            'action' => 'UpdateWarningStrategyConfig',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预警策略-更新.
     *
     * @param request - UpdateWarningStrategyConfigRequest
     *
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
     * Uploads offline audio data—such as recorded call session files—for quality inspection. This operation supports two call center agent scenarios.
     * Scenario 1: Native integration with Alibaba Cloud Call Center (CC). No development is required. You can push call data to Smart Conversation Analysis (SCA) with a single click.
     * Scenario 2: Integration with your own call center system. Each time a recording is generated, the call center pushes it to SCA for analysis.
     *
     * @remarks
     * ### Process description
     * The process is as follows: An API call uploads the audio file for quality inspection → The audio file is converted to text → The transcribed text is separated by speaker role (agent and customer), based on the specified channel separation method → The role-separated text is analyzed using quality inspection rules → Quality inspection completes.
     * ### Task execution efficiency
     * Task execution speed depends on how quickly the audio file is transcribed. A 5-minute audio file is typically transcribed in about 2 minutes. However, if the transcription service queue is long, a waiting period occurs. Transcription usually completes within 6 hours, except when large volumes of data are uploaded simultaneously—more than 500 hours of audio within 30 minutes. After transcription, quality inspection analysis completes in milliseconds.
     * ### Audio file URL requirements
     * - Supports single-channel or dual-channel audio files in WAV or MP3 format. File size must be less than 512 MB.
     * - The URL must be accessible over HTTP. Local files are not supported. The audio file must have public access permissions.
     * - The URL must use a domain name, not an IP address. The URL cannot contain spaces or Chinese characters.
     * - After transcription, the system deletes the downloaded audio file. No copy of the recording is retained.
     * - If your audio URL has an expiration period—such as a presigned URL for an audio file stored in Alibaba Cloud Object Storage Service (OSS)—set the validity period to at least 12 hours. Ideally, set it to 24 hours. Because transcription may involve queuing, the audio file is downloaded only when transcription begins. A longer validity period prevents the URL from expiring before download starts.
     * - After quality inspection completes, the provided URL is used for playback when you review the file in the console. Ensure the URL remains valid long-term. Otherwise, audio playback fails.
     * ### Role separation
     * After transcription, the system automatically separates the text into two speaker roles but cannot determine which role corresponds to the agent and which to the customer. You must define rules for role separation. Role separation accuracy is critical because many quality inspection rules apply to a specific role—for example, checking only agent or only customer utterances. Incorrect role separation significantly reduces quality inspection accuracy.
     * Audio files are typically either single-channel (mono) or dual-channel (stereo):
     * - Single-channel recording: The voices of the agent and customer are mixed on one channel. After transcription, the system uses a built-in algorithm to separate dialogue into two roles. You can provide a list of keywords commonly spoken by agents. The system analyzes the transcribed text sentence by sentence. When a sentence contains a keyword, that speaker is identified as the agent, and the other speaker is identified as the customer. For more information, see the recognizeRoleDataSetId and serviceChannelKeywords request parameters. Because conversations can be unpredictable—for example, speakers may talk over each other—role separation for single-channel recordings cannot achieve 100% accuracy. We strongly recommend saving recordings as dual-channel audio.
     * - Dual-channel recording: The voices of the agent and customer are stored on separate channels. Even if speakers talk over each other, transcription accurately distinguishes between them. Specify the agent and customer channels using the serviceChannel and clientChannel request parameters.
     * ### Retrieve quality inspection results
     * Because audio analysis is asynchronous, you must retrieve results asynchronously. You can retrieve results in one of the following three ways:
     * - Message notification: For more information, see [Message Queue](https://help.aliyun.com/document_detail/213237.html). After you receive a message, call the GetResult operation to retrieve detailed results. (Recommended)
     * - Callback: Specify a callbackUrl in the request parameters. The system initiates a callback after the task completes. After you receive the callback, call the GetResult operation to retrieve detailed results.
     * - Polling: The operation returns a task ID (taskId). Use the taskId to poll the getResult operation and retrieve the result asynchronously. Check the `status` parameter in the response to determine whether the task is complete. We recommend a polling interval of 30 seconds or longer because analysis typically completes within a few minutes. (Not recommended)
     *
     * @param request - UploadAudioDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UploadAudioData',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadAudioDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads offline audio data—such as recorded call session files—for quality inspection. This operation supports two call center agent scenarios.
     * Scenario 1: Native integration with Alibaba Cloud Call Center (CC). No development is required. You can push call data to Smart Conversation Analysis (SCA) with a single click.
     * Scenario 2: Integration with your own call center system. Each time a recording is generated, the call center pushes it to SCA for analysis.
     *
     * @remarks
     * ### Process description
     * The process is as follows: An API call uploads the audio file for quality inspection → The audio file is converted to text → The transcribed text is separated by speaker role (agent and customer), based on the specified channel separation method → The role-separated text is analyzed using quality inspection rules → Quality inspection completes.
     * ### Task execution efficiency
     * Task execution speed depends on how quickly the audio file is transcribed. A 5-minute audio file is typically transcribed in about 2 minutes. However, if the transcription service queue is long, a waiting period occurs. Transcription usually completes within 6 hours, except when large volumes of data are uploaded simultaneously—more than 500 hours of audio within 30 minutes. After transcription, quality inspection analysis completes in milliseconds.
     * ### Audio file URL requirements
     * - Supports single-channel or dual-channel audio files in WAV or MP3 format. File size must be less than 512 MB.
     * - The URL must be accessible over HTTP. Local files are not supported. The audio file must have public access permissions.
     * - The URL must use a domain name, not an IP address. The URL cannot contain spaces or Chinese characters.
     * - After transcription, the system deletes the downloaded audio file. No copy of the recording is retained.
     * - If your audio URL has an expiration period—such as a presigned URL for an audio file stored in Alibaba Cloud Object Storage Service (OSS)—set the validity period to at least 12 hours. Ideally, set it to 24 hours. Because transcription may involve queuing, the audio file is downloaded only when transcription begins. A longer validity period prevents the URL from expiring before download starts.
     * - After quality inspection completes, the provided URL is used for playback when you review the file in the console. Ensure the URL remains valid long-term. Otherwise, audio playback fails.
     * ### Role separation
     * After transcription, the system automatically separates the text into two speaker roles but cannot determine which role corresponds to the agent and which to the customer. You must define rules for role separation. Role separation accuracy is critical because many quality inspection rules apply to a specific role—for example, checking only agent or only customer utterances. Incorrect role separation significantly reduces quality inspection accuracy.
     * Audio files are typically either single-channel (mono) or dual-channel (stereo):
     * - Single-channel recording: The voices of the agent and customer are mixed on one channel. After transcription, the system uses a built-in algorithm to separate dialogue into two roles. You can provide a list of keywords commonly spoken by agents. The system analyzes the transcribed text sentence by sentence. When a sentence contains a keyword, that speaker is identified as the agent, and the other speaker is identified as the customer. For more information, see the recognizeRoleDataSetId and serviceChannelKeywords request parameters. Because conversations can be unpredictable—for example, speakers may talk over each other—role separation for single-channel recordings cannot achieve 100% accuracy. We strongly recommend saving recordings as dual-channel audio.
     * - Dual-channel recording: The voices of the agent and customer are stored on separate channels. Even if speakers talk over each other, transcription accurately distinguishes between them. Specify the agent and customer channels using the serviceChannel and clientChannel request parameters.
     * ### Retrieve quality inspection results
     * Because audio analysis is asynchronous, you must retrieve results asynchronously. You can retrieve results in one of the following three ways:
     * - Message notification: For more information, see [Message Queue](https://help.aliyun.com/document_detail/213237.html). After you receive a message, call the GetResult operation to retrieve detailed results. (Recommended)
     * - Callback: Specify a callbackUrl in the request parameters. The system initiates a callback after the task completes. After you receive the callback, call the GetResult operation to retrieve detailed results.
     * - Polling: The operation returns a task ID (taskId). Use the taskId to poll the getResult operation and retrieve the result asynchronously. Check the `status` parameter in the response to determine whether the task is complete. We recommend a polling interval of 30 seconds or longer because analysis typically completes within a few minutes. (Not recommended)
     *
     * @param request - UploadAudioDataRequest
     *
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

    /**
     * Upload offline plain text quality inspection data (plain text sessions). This applies to online agent scenarios. Use the UploadDataV4 API. Differences between UploadDataV4 and UploadData include the following: UploadDataV4 supports only POST requests, and it supports longer JsonStr values.
     *
     * @remarks
     * You can call UploadData.json to upload text-based quality inspection data. Text typically originates from online customer service interactions or tickets. The API returns a task ID. You can retrieve results in one of three ways:
     * - Message notification: For details, see [message queues](https://help.aliyun.com/document_detail/213237.html). After you receive a message, call the GetResult API to retrieve detailed results. (Recommended)
     * - Callback: Specify a callback URL in your request parameters. After the task completes, the system sends a callback to that URL. Then call the GetResult API to retrieve detailed results.
     * - Polling: Use the returned task ID to poll the GetResult API asynchronously. Check whether the status field in the response indicates completion. (Not recommended)
     *
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *
     * @param request - UploadDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UploadData',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Upload offline plain text quality inspection data (plain text sessions). This applies to online agent scenarios. Use the UploadDataV4 API. Differences between UploadDataV4 and UploadData include the following: UploadDataV4 supports only POST requests, and it supports longer JsonStr values.
     *
     * @remarks
     * You can call UploadData.json to upload text-based quality inspection data. Text typically originates from online customer service interactions or tickets. The API returns a task ID. You can retrieve results in one of three ways:
     * - Message notification: For details, see [message queues](https://help.aliyun.com/document_detail/213237.html). After you receive a message, call the GetResult API to retrieve detailed results. (Recommended)
     * - Callback: Specify a callback URL in your request parameters. After the task completes, the system sends a callback to that URL. Then call the GetResult API to retrieve detailed results.
     * - Polling: Use the returned task ID to poll the GetResult API asynchronously. Check whether the status field in the response indicates completion. (Not recommended)
     *
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *
     * @param request - UploadDataRequest
     *
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
     * Real-time text quality check.
     *
     * @remarks
     * This API pushes text data to SCA for real-time quality inspection based on specified rules and synchronously returns the analysis results. Unlike post-call quality inspection, which requires uploading the full transcript after a dialogue ends, real-time quality inspection offers lower latency by analyzing text immediately after a speaker completes one or more utterances.
     * - If you push a single utterance from one speaker, some rule operators may fail because the required dialogue context is missing. Examples include the context repetition check, speech interruption check, and call mute check.
     * - SCA returns analysis results synchronously and does not save call records, so you cannot query the results later via an API.
     *
     * @param request - UploadDataSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UploadDataSync',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDataSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Real-time text quality check.
     *
     * @remarks
     * This API pushes text data to SCA for real-time quality inspection based on specified rules and synchronously returns the analysis results. Unlike post-call quality inspection, which requires uploading the full transcript after a dialogue ends, real-time quality inspection offers lower latency by analyzing text immediately after a speaker completes one or more utterances.
     * - If you push a single utterance from one speaker, some rule operators may fail because the required dialogue context is missing. Examples include the context repetition check, speech interruption check, and call mute check.
     * - SCA returns analysis results synchronously and does not save call records, so you cannot query the results later via an API.
     *
     * @param request - UploadDataSyncRequest
     *
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
     * http_hsf.
     *
     * @param request - UploadDataSyncForLLMRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDataSyncForLLMResponse
     *
     * @param UploadDataSyncForLLMRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UploadDataSyncForLLMResponse
     */
    public function uploadDataSyncForLLMWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseMeAgentId) {
            @$query['BaseMeAgentId'] = $request->baseMeAgentId;
        }

        $body = [];
        if (null !== $request->jsonStr) {
            @$body['JsonStr'] = $request->jsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDataSyncForLLM',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDataSyncForLLMResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * http_hsf.
     *
     * @param request - UploadDataSyncForLLMRequest
     *
     * @returns UploadDataSyncForLLMResponse
     *
     * @param UploadDataSyncForLLMRequest $request
     *
     * @return UploadDataSyncForLLMResponse
     */
    public function uploadDataSyncForLLM($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataSyncForLLMWithOptions($request, $runtime);
    }

    /**
     * Uploads offline plain text conversation data for quality inspection in online agent scenarios. We recommend that you use the UploadDataV4 API. Compared to the UploadData API, UploadDataV4 supports only POST requests and allows a longer JsonStr.
     *
     * @remarks
     * You can call the UploadData.json operation to upload text data for quality inspection. The text usually comes from sources such as online customer service and tickets. The API returns a task ID. You can retrieve the results in one of the following three ways:
     * - Message notifications: After you receive a notification, call the GetResult API to obtain the detailed results. For more information, see [Message Queue](https://help.aliyun.com/document_detail/213237.html). (Recommended)
     * - Callbacks: Specify a callbackUrl in the request parameters. The system automatically initiates a callback after the task is complete. After you receive the callback, call the GetResult API to retrieve the detailed results.
     * - Polling: Use the task ID returned by this API to poll the GetResult API and asynchronously retrieve the results. Check the status in the response to determine whether the task is complete. (Not recommended)
     *
     * @param request - UploadDataV4Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UploadDataV4',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDataV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads offline plain text conversation data for quality inspection in online agent scenarios. We recommend that you use the UploadDataV4 API. Compared to the UploadData API, UploadDataV4 supports only POST requests and allows a longer JsonStr.
     *
     * @remarks
     * You can call the UploadData.json operation to upload text data for quality inspection. The text usually comes from sources such as online customer service and tickets. The API returns a task ID. You can retrieve the results in one of the following three ways:
     * - Message notifications: After you receive a notification, call the GetResult API to obtain the detailed results. For more information, see [Message Queue](https://help.aliyun.com/document_detail/213237.html). (Recommended)
     * - Callbacks: Specify a callbackUrl in the request parameters. The system automatically initiates a callback after the task is complete. After you receive the callback, call the GetResult API to retrieve the detailed results.
     * - Polling: Use the task ID returned by this API to poll the GetResult API and asynchronously retrieve the results. Check the status in the response to determine whether the task is complete. (Not recommended)
     *
     * @param request - UploadDataV4Request
     *
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
     * Creates a rule. You can use this operation to provide your own rule editing interface.
     *
     * @remarks
     * > For more information, see [Rule configuration](https://help.aliyun.com/document_detail/213225.html).
     *
     * @param request - UploadRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UploadRule',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a rule. You can use this operation to provide your own rule editing interface.
     *
     * @remarks
     * > For more information, see [Rule configuration](https://help.aliyun.com/document_detail/213225.html).
     *
     * @param request - UploadRuleRequest
     *
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
     * Saves the verification result of a single file.
     *
     * @param request - VerifyFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'VerifyFile',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves the verification result of a single file.
     *
     * @param request - VerifyFileRequest
     *
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
     * Save the verification result for a single sentence.
     *
     * @param request - VerifySentenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'VerifySentence',
            'version' => '2019-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifySentenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Save the verification result for a single sentence.
     *
     * @param request - VerifySentenceRequest
     *
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

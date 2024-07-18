<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleV4Request;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleV4Response;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningStrategyConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteBusinessCategoryResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteScoreForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSubScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSubScoreForApiResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InsertScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InsertScoreForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InsertSubScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InsertSubScoreForApiResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateScoreForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSubScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSubScoreForApiResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddBusinessCategoryRequest $request AddBusinessCategoryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddBusinessCategoryResponse AddBusinessCategoryResponse
     */
    public function addBusinessCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBusinessCategoryRequest $request AddBusinessCategoryRequest
     *
     * @return AddBusinessCategoryResponse AddBusinessCategoryResponse
     */
    public function addBusinessCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBusinessCategoryWithOptions($request, $runtime);
    }

    /**
     * @param AddRuleCategoryRequest $request AddRuleCategoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddRuleCategoryResponse AddRuleCategoryResponse
     */
    public function addRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRuleCategoryRequest $request AddRuleCategoryRequest
     *
     * @return AddRuleCategoryResponse AddRuleCategoryResponse
     */
    public function addRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary V4创建规则
     *  *
     * @param AddRuleV4Request $request AddRuleV4Request
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddRuleV4Response AddRuleV4Response
     */
    public function addRuleV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->isCopy)) {
            $body['IsCopy'] = $request->isCopy;
        }
        if (!Utils::isUnset($request->jsonStrForRule)) {
            $body['JsonStrForRule'] = $request->jsonStrForRule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return AddRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary V4创建规则
     *  *
     * @param AddRuleV4Request $request AddRuleV4Request
     *
     * @return AddRuleV4Response AddRuleV4Response
     */
    public function addRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRuleV4WithOptions($request, $runtime);
    }

    /**
     * @param AssignReviewerRequest $request AssignReviewerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignReviewerResponse AssignReviewerResponse
     */
    public function assignReviewerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AssignReviewerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssignReviewerRequest $request AssignReviewerRequest
     *
     * @return AssignReviewerResponse AssignReviewerResponse
     */
    public function assignReviewer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignReviewerWithOptions($request, $runtime);
    }

    /**
     * @summary 会话组批量分配
     *  *
     * @param AssignReviewerBySessionGroupRequest $request AssignReviewerBySessionGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignReviewerBySessionGroupResponse AssignReviewerBySessionGroupResponse
     */
    public function assignReviewerBySessionGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AssignReviewerBySessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话组批量分配
     *  *
     * @param AssignReviewerBySessionGroupRequest $request AssignReviewerBySessionGroupRequest
     *
     * @return AssignReviewerBySessionGroupResponse AssignReviewerBySessionGroupResponse
     */
    public function assignReviewerBySessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignReviewerBySessionGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 批量复核
     *  *
     * @param BatchSubmitReviewInfoRequest $request BatchSubmitReviewInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSubmitReviewInfoResponse BatchSubmitReviewInfoResponse
     */
    public function batchSubmitReviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return BatchSubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量复核
     *  *
     * @param BatchSubmitReviewInfoRequest $request BatchSubmitReviewInfoRequest
     *
     * @return BatchSubmitReviewInfoResponse BatchSubmitReviewInfoResponse
     */
    public function batchSubmitReviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSubmitReviewInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateAsrVocabRequest $request CreateAsrVocabRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAsrVocabResponse CreateAsrVocabResponse
     */
    public function createAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAsrVocabRequest $request CreateAsrVocabRequest
     *
     * @return CreateAsrVocabResponse CreateAsrVocabResponse
     */
    public function createAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @summary 创建质检方案中的质检维度
     *  *
     * @param CreateCheckTypeToSchemeRequest $request CreateCheckTypeToSchemeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCheckTypeToSchemeResponse CreateCheckTypeToSchemeResponse
     */
    public function createCheckTypeToSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建质检方案中的质检维度
     *  *
     * @param CreateCheckTypeToSchemeRequest $request CreateCheckTypeToSchemeRequest
     *
     * @return CreateCheckTypeToSchemeResponse CreateCheckTypeToSchemeResponse
     */
    public function createCheckTypeToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCheckTypeToSchemeWithOptions($request, $runtime);
    }

    /**
     * @summary 新增质检方案
     *  *
     * @param CreateQualityCheckSchemeRequest $request CreateQualityCheckSchemeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQualityCheckSchemeResponse CreateQualityCheckSchemeResponse
     */
    public function createQualityCheckSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增质检方案
     *  *
     * @param CreateQualityCheckSchemeRequest $request CreateQualityCheckSchemeRequest
     *
     * @return CreateQualityCheckSchemeResponse CreateQualityCheckSchemeResponse
     */
    public function createQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @summary 新建质检任务
     *  *
     * @param CreateSchemeTaskConfigRequest $request CreateSchemeTaskConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSchemeTaskConfigResponse CreateSchemeTaskConfigResponse
     */
    public function createSchemeTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建质检任务
     *  *
     * @param CreateSchemeTaskConfigRequest $request CreateSchemeTaskConfigRequest
     *
     * @return CreateSchemeTaskConfigResponse CreateSchemeTaskConfigResponse
     */
    public function createSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupConfigRequest $request CreateSkillGroupConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSkillGroupConfigResponse CreateSkillGroupConfigResponse
     */
    public function createSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSkillGroupConfigRequest $request CreateSkillGroupConfigRequest
     *
     * @return CreateSkillGroupConfigResponse CreateSkillGroupConfigResponse
     */
    public function createSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskAssignRuleRequest $request CreateTaskAssignRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskAssignRuleResponse CreateTaskAssignRuleResponse
     */
    public function createTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskAssignRuleRequest $request CreateTaskAssignRuleRequest
     *
     * @return CreateTaskAssignRuleResponse CreateTaskAssignRuleResponse
     */
    public function createTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI CreateUser is deprecated
     *  *
     * Deprecated
     *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI CreateUser is deprecated
     *  *
     * Deprecated
     *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateWarningConfigRequest $request CreateWarningConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWarningConfigResponse CreateWarningConfigResponse
     */
    public function createWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWarningConfigRequest $request CreateWarningConfigRequest
     *
     * @return CreateWarningConfigResponse CreateWarningConfigResponse
     */
    public function createWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary  预警策略-新增
     *  *
     * @param CreateWarningStrategyConfigRequest $request CreateWarningStrategyConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWarningStrategyConfigResponse CreateWarningStrategyConfigResponse
     */
    public function createWarningStrategyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary  预警策略-新增
     *  *
     * @param CreateWarningStrategyConfigRequest $request CreateWarningStrategyConfigRequest
     *
     * @return CreateWarningStrategyConfigResponse CreateWarningStrategyConfigResponse
     */
    public function createWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DelRuleCategoryRequest $request DelRuleCategoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DelRuleCategoryResponse DelRuleCategoryResponse
     */
    public function delRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DelRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelRuleCategoryRequest $request DelRuleCategoryRequest
     *
     * @return DelRuleCategoryResponse DelRuleCategoryResponse
     */
    public function delRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAsrVocabRequest $request DeleteAsrVocabRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAsrVocabResponse DeleteAsrVocabResponse
     */
    public function deleteAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAsrVocabRequest $request DeleteAsrVocabRequest
     *
     * @return DeleteAsrVocabResponse DeleteAsrVocabResponse
     */
    public function deleteAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBusinessCategoryRequest $request DeleteBusinessCategoryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBusinessCategoryResponse DeleteBusinessCategoryResponse
     */
    public function deleteBusinessCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteBusinessCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBusinessCategoryRequest $request DeleteBusinessCategoryRequest
     *
     * @return DeleteBusinessCategoryResponse DeleteBusinessCategoryResponse
     */
    public function deleteBusinessCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomizationConfigRequest $request DeleteCustomizationConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomizationConfigResponse DeleteCustomizationConfigResponse
     */
    public function deleteCustomizationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteCustomizationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomizationConfigRequest $request DeleteCustomizationConfigRequest
     *
     * @return DeleteCustomizationConfigResponse DeleteCustomizationConfigResponse
     */
    public function deleteCustomizationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizationConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSetRequest $request DeleteDataSetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSetResponse DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataSetRequest $request DeleteDataSetRequest
     *
     * @return DeleteDataSetResponse DeleteDataSetResponse
     */
    public function deleteDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSetWithOptions($request, $runtime);
    }

    /**
     * @param DeletePrecisionTaskRequest $request DeletePrecisionTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrecisionTaskResponse DeletePrecisionTaskResponse
     */
    public function deletePrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeletePrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePrecisionTaskRequest $request DeletePrecisionTaskRequest
     *
     * @return DeletePrecisionTaskResponse DeletePrecisionTaskResponse
     */
    public function deletePrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 删除质检方案
     *  *
     * @param DeleteQualityCheckSchemeRequest $request DeleteQualityCheckSchemeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQualityCheckSchemeResponse DeleteQualityCheckSchemeResponse
     */
    public function deleteQualityCheckSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除质检方案
     *  *
     * @param DeleteQualityCheckSchemeRequest $request DeleteQualityCheckSchemeRequest
     *
     * @return DeleteQualityCheckSchemeResponse DeleteQualityCheckSchemeResponse
     */
    public function deleteQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *  *
     * @summary 删除规则
     *  *
     * Deprecated
     *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->forceDelete)) {
            $body['ForceDelete'] = $request->forceDelete;
        }
        if (!Utils::isUnset($request->isSchemeData)) {
            $body['IsSchemeData'] = $request->isSchemeData;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI DeleteRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead
     *  *
     * @summary 删除规则
     *  *
     * Deprecated
     *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @summary V4删除规则
     *  *
     * @param DeleteRuleV4Request $request DeleteRuleV4Request
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleV4Response DeleteRuleV4Response
     */
    public function deleteRuleV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->forceDelete)) {
            $body['ForceDelete'] = $request->forceDelete;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return DeleteRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary V4删除规则
     *  *
     * @param DeleteRuleV4Request $request DeleteRuleV4Request
     *
     * @return DeleteRuleV4Response DeleteRuleV4Response
     */
    public function deleteRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleV4WithOptions($request, $runtime);
    }

    /**
     * @summary 删除质检任务
     *  *
     * @param DeleteSchemeTaskConfigRequest $request DeleteSchemeTaskConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSchemeTaskConfigResponse DeleteSchemeTaskConfigResponse
     */
    public function deleteSchemeTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除质检任务
     *  *
     * @param DeleteSchemeTaskConfigRequest $request DeleteSchemeTaskConfigRequest
     *
     * @return DeleteSchemeTaskConfigResponse DeleteSchemeTaskConfigResponse
     */
    public function deleteSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param DeleteScoreForApiRequest $request DeleteScoreForApiRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScoreForApiResponse DeleteScoreForApiResponse
     */
    public function deleteScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param DeleteScoreForApiRequest $request DeleteScoreForApiRequest
     *
     * @return DeleteScoreForApiResponse DeleteScoreForApiResponse
     */
    public function deleteScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSkillGroupConfigRequest $request DeleteSkillGroupConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSkillGroupConfigResponse DeleteSkillGroupConfigResponse
     */
    public function deleteSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSkillGroupConfigRequest $request DeleteSkillGroupConfigRequest
     *
     * @return DeleteSkillGroupConfigResponse DeleteSkillGroupConfigResponse
     */
    public function deleteSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param DeleteSubScoreForApiRequest $request DeleteSubScoreForApiRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSubScoreForApiResponse DeleteSubScoreForApiResponse
     */
    public function deleteSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param DeleteSubScoreForApiRequest $request DeleteSubScoreForApiRequest
     *
     * @return DeleteSubScoreForApiResponse DeleteSubScoreForApiResponse
     */
    public function deleteSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTaskAssignRuleRequest $request DeleteTaskAssignRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskAssignRuleResponse DeleteTaskAssignRuleResponse
     */
    public function deleteTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTaskAssignRuleRequest $request DeleteTaskAssignRuleRequest
     *
     * @return DeleteTaskAssignRuleResponse DeleteTaskAssignRuleResponse
     */
    public function deleteTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWarningConfigRequest $request DeleteWarningConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWarningConfigResponse DeleteWarningConfigResponse
     */
    public function deleteWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWarningConfigRequest $request DeleteWarningConfigRequest
     *
     * @return DeleteWarningConfigResponse DeleteWarningConfigResponse
     */
    public function deleteWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWarningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary  预警策略-删除
     *  *
     * @param DeleteWarningStrategyConfigRequest $request DeleteWarningStrategyConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWarningStrategyConfigResponse DeleteWarningStrategyConfigResponse
     */
    public function deleteWarningStrategyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary  预警策略-删除
     *  *
     * @param DeleteWarningStrategyConfigRequest $request DeleteWarningStrategyConfigRequest
     *
     * @return DeleteWarningStrategyConfigResponse DeleteWarningStrategyConfigResponse
     */
    public function deleteWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetAsrVocabRequest $request GetAsrVocabRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsrVocabResponse GetAsrVocabResponse
     */
    public function getAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsrVocabRequest $request GetAsrVocabRequest
     *
     * @return GetAsrVocabResponse GetAsrVocabResponse
     */
    public function getAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessCategoryListRequest $request GetBusinessCategoryListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBusinessCategoryListResponse GetBusinessCategoryListResponse
     */
    public function getBusinessCategoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetBusinessCategoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessCategoryListRequest $request GetBusinessCategoryListRequest
     *
     * @return GetBusinessCategoryListResponse GetBusinessCategoryListResponse
     */
    public function getBusinessCategoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessCategoryListWithOptions($request, $runtime);
    }

    /**
     * @summary GetCustomizationConfigList HSF_HTTP
     *  *
     * @param GetCustomizationConfigListRequest $request GetCustomizationConfigListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomizationConfigListResponse GetCustomizationConfigListResponse
     */
    public function getCustomizationConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetCustomizationConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetCustomizationConfigList HSF_HTTP
     *  *
     * @param GetCustomizationConfigListRequest $request GetCustomizationConfigListRequest
     *
     * @return GetCustomizationConfigListResponse GetCustomizationConfigListResponse
     */
    public function getCustomizationConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizationConfigListWithOptions($request, $runtime);
    }

    /**
     * @param GetNextResultToVerifyRequest $request GetNextResultToVerifyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNextResultToVerifyResponse GetNextResultToVerifyResponse
     */
    public function getNextResultToVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetNextResultToVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNextResultToVerifyRequest $request GetNextResultToVerifyRequest
     *
     * @return GetNextResultToVerifyResponse GetNextResultToVerifyResponse
     */
    public function getNextResultToVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNextResultToVerifyWithOptions($request, $runtime);
    }

    /**
     * @param GetPrecisionTaskRequest $request GetPrecisionTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrecisionTaskResponse GetPrecisionTaskResponse
     */
    public function getPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPrecisionTaskRequest $request GetPrecisionTaskRequest
     *
     * @return GetPrecisionTaskResponse GetPrecisionTaskResponse
     */
    public function getPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质检方案
     *  *
     * @param GetQualityCheckSchemeRequest $request GetQualityCheckSchemeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityCheckSchemeResponse GetQualityCheckSchemeResponse
     */
    public function getQualityCheckSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取质检方案
     *  *
     * @param GetQualityCheckSchemeRequest $request GetQualityCheckSchemeRequest
     *
     * @return GetQualityCheckSchemeResponse GetQualityCheckSchemeResponse
     */
    public function getQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @param GetResultRequest $request GetResultRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResultResponse GetResultResponse
     */
    public function getResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResultRequest $request GetResultRequest
     *
     * @return GetResultResponse GetResultResponse
     */
    public function getResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResultWithOptions($request, $runtime);
    }

    /**
     * @param GetResultToReviewRequest $request GetResultToReviewRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResultToReviewResponse GetResultToReviewResponse
     */
    public function getResultToReviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetResultToReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResultToReviewRequest $request GetResultToReviewRequest
     *
     * @return GetResultToReviewResponse GetResultToReviewResponse
     */
    public function getResultToReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResultToReviewWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param GetRuleRequest $request GetRuleRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetRule is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param GetRuleRequest $request GetRuleRequest
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *  *
     * @summary 获取规则
     *  *
     * Deprecated
     *
     * @param GetRuleByIdRequest $request GetRuleByIdRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleByIdResponse GetRuleByIdResponse
     */
    public function getRuleByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return GetRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI GetRuleById is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead
     *  *
     * @summary 获取规则
     *  *
     * Deprecated
     *
     * @param GetRuleByIdRequest $request GetRuleByIdRequest
     *
     * @return GetRuleByIdResponse GetRuleByIdResponse
     */
    public function getRuleById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleCategoryRequest $request GetRuleCategoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleCategoryResponse GetRuleCategoryResponse
     */
    public function getRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRuleCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRuleCategoryRequest $request GetRuleCategoryRequest
     *
     * @return GetRuleCategoryResponse GetRuleCategoryResponse
     */
    public function getRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleCategoryWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param GetRuleDetailRequest $request GetRuleDetailRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleDetailResponse GetRuleDetailResponse
     */
    public function getRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetRuleDetail is deprecated, please use Qualitycheck::2019-01-15::GetRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param GetRuleDetailRequest $request GetRuleDetailRequest
     *
     * @return GetRuleDetailResponse GetRuleDetailResponse
     */
    public function getRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @summary V4获取规则
     *  *
     * @param GetRuleV4Request $request GetRuleV4Request
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleV4Response GetRuleV4Response
     */
    public function getRuleV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return GetRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary V4获取规则
     *  *
     * @param GetRuleV4Request $request GetRuleV4Request
     *
     * @return GetRuleV4Response GetRuleV4Response
     */
    public function getRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleV4WithOptions($request, $runtime);
    }

    /**
     * @summary 获得规则列表
     *  *
     * @param GetRulesCountListRequest $request GetRulesCountListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRulesCountListResponse GetRulesCountListResponse
     */
    public function getRulesCountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->businessName)) {
            $body['BusinessName'] = $request->businessName;
        }
        if (!Utils::isUnset($request->businessRange)) {
            $body['BusinessRange'] = $request->businessRange;
        }
        if (!Utils::isUnset($request->categoryName)) {
            $body['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->countTotal)) {
            $body['CountTotal'] = $request->countTotal;
        }
        if (!Utils::isUnset($request->createEmpid)) {
            $body['CreateEmpid'] = $request->createEmpid;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lastUpdateEmpid)) {
            $body['LastUpdateEmpid'] = $request->lastUpdateEmpid;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requireInfos)) {
            $body['RequireInfos'] = $request->requireInfos;
        }
        if (!Utils::isUnset($request->rid)) {
            $body['Rid'] = $request->rid;
        }
        if (!Utils::isUnset($request->ruleIdOrRuleName)) {
            $body['RuleIdOrRuleName'] = $request->ruleIdOrRuleName;
        }
        if (!Utils::isUnset($request->ruleScoreSingleType)) {
            $body['RuleScoreSingleType'] = $request->ruleScoreSingleType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->schemeId)) {
            $body['SchemeId'] = $request->schemeId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->typeName)) {
            $body['TypeName'] = $request->typeName;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $body['UpdateEndTime'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $body['UpdateStartTime'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->updateUserId)) {
            $body['UpdateUserId'] = $request->updateUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return GetRulesCountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得规则列表
     *  *
     * @param GetRulesCountListRequest $request GetRulesCountListRequest
     *
     * @return GetRulesCountListResponse GetRulesCountListResponse
     */
    public function getRulesCountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRulesCountListWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *  *
     * Deprecated
     *
     * @param GetScoreInfoRequest $request GetScoreInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScoreInfoResponse GetScoreInfoResponse
     */
    public function getScoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetScoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetScoreInfo is deprecated
     *  *
     * Deprecated
     *
     * @param GetScoreInfoRequest $request GetScoreInfoRequest
     *
     * @return GetScoreInfoResponse GetScoreInfoResponse
     */
    public function getScoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScoreInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupConfigRequest $request GetSkillGroupConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupConfigResponse GetSkillGroupConfigResponse
     */
    public function getSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSkillGroupConfigRequest $request GetSkillGroupConfigRequest
     *
     * @return GetSkillGroupConfigResponse GetSkillGroupConfigResponse
     */
    public function getSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead.
     *  *
     * Deprecated
     *
     * @param GetSyncResultRequest $request GetSyncResultRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSyncResultResponse GetSyncResultResponse
     */
    public function getSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetSyncResult is deprecated, please use Qualitycheck::2019-01-15::GetResult instead.
     *  *
     * Deprecated
     *
     * @param GetSyncResultRequest $request GetSyncResultRequest
     *
     * @return GetSyncResultResponse GetSyncResultResponse
     */
    public function getSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyncResultWithOptions($request, $runtime);
    }

    /**
     * @summary 预警策略-详情
     *  *
     * @param GetWarningStrategyConfigRequest $request GetWarningStrategyConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWarningStrategyConfigResponse GetWarningStrategyConfigResponse
     */
    public function getWarningStrategyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预警策略-详情
     *  *
     * @param GetWarningStrategyConfigRequest $request GetWarningStrategyConfigRequest
     *
     * @return GetWarningStrategyConfigResponse GetWarningStrategyConfigResponse
     */
    public function getWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param HandleComplaintRequest $request HandleComplaintRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HandleComplaintResponse HandleComplaintResponse
     */
    public function handleComplaintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return HandleComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandleComplaintRequest $request HandleComplaintRequest
     *
     * @return HandleComplaintResponse HandleComplaintResponse
     */
    public function handleComplaint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleComplaintWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI InsertScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param InsertScoreForApiRequest $request InsertScoreForApiRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertScoreForApiResponse InsertScoreForApiResponse
     */
    public function insertScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI InsertScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param InsertScoreForApiRequest $request InsertScoreForApiRequest
     *
     * @return InsertScoreForApiResponse InsertScoreForApiResponse
     */
    public function insertScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI InsertSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param InsertSubScoreForApiRequest $request InsertSubScoreForApiRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertSubScoreForApiResponse InsertSubScoreForApiResponse
     */
    public function insertSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertSubScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertSubScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI InsertSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param InsertSubScoreForApiRequest $request InsertSubScoreForApiRequest
     *
     * @return InsertSubScoreForApiResponse InsertSubScoreForApiResponse
     */
    public function insertSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param InvalidRuleRequest $request InvalidRuleRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return InvalidRuleResponse InvalidRuleResponse
     */
    public function invalidRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return InvalidRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI InvalidRule is deprecated, please use Qualitycheck::2019-01-15::DeleteRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param InvalidRuleRequest $request InvalidRuleRequest
     *
     * @return InvalidRuleResponse InvalidRuleResponse
     */
    public function invalidRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invalidRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListAsrVocabRequest $request ListAsrVocabRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAsrVocabResponse ListAsrVocabResponse
     */
    public function listAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAsrVocabRequest $request ListAsrVocabRequest
     *
     * @return ListAsrVocabResponse ListAsrVocabResponse
     */
    public function listAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据集列表
     *  *
     * @param ListDataSetRequest $request ListDataSetRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSetResponse ListDataSetResponse
     */
    public function listDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集列表
     *  *
     * @param ListDataSetRequest $request ListDataSetRequest
     *
     * @return ListDataSetResponse ListDataSetResponse
     */
    public function listDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSetWithOptions($request, $runtime);
    }

    /**
     * @param ListPrecisionTaskRequest $request ListPrecisionTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrecisionTaskResponse ListPrecisionTaskResponse
     */
    public function listPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrecisionTaskRequest $request ListPrecisionTaskRequest
     *
     * @return ListPrecisionTaskResponse ListPrecisionTaskResponse
     */
    public function listPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 质检方案列表
     *  *
     * @param ListQualityCheckSchemeRequest $request ListQualityCheckSchemeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQualityCheckSchemeResponse ListQualityCheckSchemeResponse
     */
    public function listQualityCheckSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 质检方案列表
     *  *
     * @param ListQualityCheckSchemeRequest $request ListQualityCheckSchemeRequest
     *
     * @return ListQualityCheckSchemeResponse ListQualityCheckSchemeResponse
     */
    public function listQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead.
     *  *
     * Deprecated
     *
     * @param ListRulesRequest $request ListRulesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ListRules is deprecated, please use Qualitycheck::2019-01-15::ListRulesV4 instead.
     *  *
     * Deprecated
     *
     * @param ListRulesRequest $request ListRulesRequest
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @summary V4获得规则列表
     *  *
     * @param ListRulesV4Request $request ListRulesV4Request
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRulesV4Response ListRulesV4Response
     */
    public function listRulesV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->businessName)) {
            $body['BusinessName'] = $request->businessName;
        }
        if (!Utils::isUnset($request->businessRange)) {
            $body['BusinessRange'] = $request->businessRange;
        }
        if (!Utils::isUnset($request->categoryName)) {
            $body['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->countTotal)) {
            $body['CountTotal'] = $request->countTotal;
        }
        if (!Utils::isUnset($request->createEmpid)) {
            $body['CreateEmpid'] = $request->createEmpid;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lastUpdateEmpid)) {
            $body['LastUpdateEmpid'] = $request->lastUpdateEmpid;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requireInfos)) {
            $body['RequireInfos'] = $request->requireInfos;
        }
        if (!Utils::isUnset($request->rid)) {
            $body['Rid'] = $request->rid;
        }
        if (!Utils::isUnset($request->ruleIdOrRuleName)) {
            $body['RuleIdOrRuleName'] = $request->ruleIdOrRuleName;
        }
        if (!Utils::isUnset($request->ruleScoreSingleType)) {
            $body['RuleScoreSingleType'] = $request->ruleScoreSingleType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->schemeId)) {
            $body['SchemeId'] = $request->schemeId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->typeName)) {
            $body['TypeName'] = $request->typeName;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $body['UpdateEndTime'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $body['UpdateStartTime'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->updateUserId)) {
            $body['UpdateUserId'] = $request->updateUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return ListRulesV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary V4获得规则列表
     *  *
     * @param ListRulesV4Request $request ListRulesV4Request
     *
     * @return ListRulesV4Response ListRulesV4Response
     */
    public function listRulesV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesV4WithOptions($request, $runtime);
    }

    /**
     * @summary 获取质检任务列表
     *  *
     * @param ListSchemeTaskConfigRequest $request ListSchemeTaskConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSchemeTaskConfigResponse ListSchemeTaskConfigResponse
     */
    public function listSchemeTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取质检任务列表
     *  *
     * @param ListSchemeTaskConfigRequest $request ListSchemeTaskConfigRequest
     *
     * @return ListSchemeTaskConfigResponse ListSchemeTaskConfigResponse
     */
    public function listSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取会话组列表
     *  *
     * @param ListSessionGroupRequest $request ListSessionGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSessionGroupResponse ListSessionGroupResponse
     */
    public function listSessionGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取会话组列表
     *  *
     * @param ListSessionGroupRequest $request ListSessionGroupRequest
     *
     * @return ListSessionGroupResponse ListSessionGroupResponse
     */
    public function listSessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSessionGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupConfigRequest $request ListSkillGroupConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillGroupConfigResponse ListSkillGroupConfigResponse
     */
    public function listSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSkillGroupConfigRequest $request ListSkillGroupConfigRequest
     *
     * @return ListSkillGroupConfigResponse ListSkillGroupConfigResponse
     */
    public function listSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskAssignRulesRequest $request ListTaskAssignRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskAssignRulesResponse ListTaskAssignRulesResponse
     */
    public function listTaskAssignRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTaskAssignRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskAssignRulesRequest $request ListTaskAssignRulesRequest
     *
     * @return ListTaskAssignRulesResponse ListTaskAssignRulesResponse
     */
    public function listTaskAssignRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskAssignRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListWarningConfigRequest $request ListWarningConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWarningConfigResponse ListWarningConfigResponse
     */
    public function listWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWarningConfigRequest $request ListWarningConfigRequest
     *
     * @return ListWarningConfigResponse ListWarningConfigResponse
     */
    public function listWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWarningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary  预警策略-列表
     *  *
     * @param ListWarningStrategyConfigRequest $request ListWarningStrategyConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWarningStrategyConfigResponse ListWarningStrategyConfigResponse
     */
    public function listWarningStrategyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary  预警策略-列表
     *  *
     * @param ListWarningStrategyConfigRequest $request ListWarningStrategyConfigRequest
     *
     * @return ListWarningStrategyConfigResponse ListWarningStrategyConfigResponse
     */
    public function listWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 批量回收
     *  *
     * @param RevertAssignedSessionRequest $request RevertAssignedSessionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RevertAssignedSessionResponse RevertAssignedSessionResponse
     */
    public function revertAssignedSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RevertAssignedSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量回收
     *  *
     * @param RevertAssignedSessionRequest $request RevertAssignedSessionRequest
     *
     * @return RevertAssignedSessionResponse RevertAssignedSessionResponse
     */
    public function revertAssignedSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAssignedSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 会话组批量回收
     *  *
     * @param RevertAssignedSessionGroupRequest $request RevertAssignedSessionGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RevertAssignedSessionGroupResponse RevertAssignedSessionGroupResponse
     */
    public function revertAssignedSessionGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RevertAssignedSessionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话组批量回收
     *  *
     * @param RevertAssignedSessionGroupRequest $request RevertAssignedSessionGroupRequest
     *
     * @return RevertAssignedSessionGroupResponse RevertAssignedSessionGroupResponse
     */
    public function revertAssignedSessionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertAssignedSessionGroupWithOptions($request, $runtime);
    }

    /**
     * @param SaveConfigDataSetRequest $request SaveConfigDataSetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveConfigDataSetResponse SaveConfigDataSetResponse
     */
    public function saveConfigDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SaveConfigDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveConfigDataSetRequest $request SaveConfigDataSetRequest
     *
     * @return SaveConfigDataSetResponse SaveConfigDataSetResponse
     */
    public function saveConfigDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveConfigDataSetWithOptions($request, $runtime);
    }

    /**
     * @param SubmitComplaintRequest $request SubmitComplaintRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitComplaintResponse SubmitComplaintResponse
     */
    public function submitComplaintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SubmitComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitComplaintRequest $request SubmitComplaintRequest
     *
     * @return SubmitComplaintResponse SubmitComplaintResponse
     */
    public function submitComplaint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitComplaintWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPrecisionTaskRequest $request SubmitPrecisionTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitPrecisionTaskResponse SubmitPrecisionTaskResponse
     */
    public function submitPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SubmitPrecisionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitPrecisionTaskRequest $request SubmitPrecisionTaskRequest
     *
     * @return SubmitPrecisionTaskResponse SubmitPrecisionTaskResponse
     */
    public function submitPrecisionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPrecisionTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitQualityCheckTaskRequest $request SubmitQualityCheckTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitQualityCheckTaskResponse SubmitQualityCheckTaskResponse
     */
    public function submitQualityCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SubmitQualityCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitQualityCheckTaskRequest $request SubmitQualityCheckTaskRequest
     *
     * @return SubmitQualityCheckTaskResponse SubmitQualityCheckTaskResponse
     */
    public function submitQualityCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitQualityCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitReviewInfoRequest $request SubmitReviewInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitReviewInfoResponse SubmitReviewInfoResponse
     */
    public function submitReviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SubmitReviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitReviewInfoRequest $request SubmitReviewInfoRequest
     *
     * @return SubmitReviewInfoResponse SubmitReviewInfoResponse
     */
    public function submitReviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReviewInfoWithOptions($request, $runtime);
    }

    /**
     * @param SyncQualityCheckRequest $request SyncQualityCheckRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncQualityCheckResponse SyncQualityCheckResponse
     */
    public function syncQualityCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SyncQualityCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncQualityCheckRequest $request SyncQualityCheckRequest
     *
     * @return SyncQualityCheckResponse SyncQualityCheckResponse
     */
    public function syncQualityCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncQualityCheckWithOptions($request, $runtime);
    }

    /**
     * @summary 测试规则
     *  *
     * @param TestRuleV4Request $request TestRuleV4Request
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return TestRuleV4Response TestRuleV4Response
     */
    public function testRuleV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isSchemeData)) {
            $body['IsSchemeData'] = $request->isSchemeData;
        }
        if (!Utils::isUnset($request->testJson)) {
            $body['TestJson'] = $request->testJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return TestRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 测试规则
     *  *
     * @param TestRuleV4Request $request TestRuleV4Request
     *
     * @return TestRuleV4Response TestRuleV4Response
     */
    public function testRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testRuleV4WithOptions($request, $runtime);
    }

    /**
     * @param UpdateAsrVocabRequest $request UpdateAsrVocabRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAsrVocabResponse UpdateAsrVocabResponse
     */
    public function updateAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateAsrVocabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAsrVocabRequest $request UpdateAsrVocabRequest
     *
     * @return UpdateAsrVocabResponse UpdateAsrVocabResponse
     */
    public function updateAsrVocab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAsrVocabWithOptions($request, $runtime);
    }

    /**
     * @summary 更新质检方案中的质检维度
     *  *
     * @param UpdateCheckTypeToSchemeRequest $request UpdateCheckTypeToSchemeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCheckTypeToSchemeResponse UpdateCheckTypeToSchemeResponse
     */
    public function updateCheckTypeToSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateCheckTypeToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新质检方案中的质检维度
     *  *
     * @param UpdateCheckTypeToSchemeRequest $request UpdateCheckTypeToSchemeRequest
     *
     * @return UpdateCheckTypeToSchemeResponse UpdateCheckTypeToSchemeResponse
     */
    public function updateCheckTypeToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCheckTypeToSchemeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新会话随录数据
     *  *
     * @param UpdateQualityCheckDataRequest $request UpdateQualityCheckDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQualityCheckDataResponse UpdateQualityCheckDataResponse
     */
    public function updateQualityCheckDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新会话随录数据
     *  *
     * @param UpdateQualityCheckDataRequest $request UpdateQualityCheckDataRequest
     *
     * @return UpdateQualityCheckDataResponse UpdateQualityCheckDataResponse
     */
    public function updateQualityCheckData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityCheckDataWithOptions($request, $runtime);
    }

    /**
     * @summary 更新质检方案
     *  *
     * @param UpdateQualityCheckSchemeRequest $request UpdateQualityCheckSchemeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQualityCheckSchemeResponse UpdateQualityCheckSchemeResponse
     */
    public function updateQualityCheckSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateQualityCheckSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新质检方案
     *  *
     * @param UpdateQualityCheckSchemeRequest $request UpdateQualityCheckSchemeRequest
     *
     * @return UpdateQualityCheckSchemeResponse UpdateQualityCheckSchemeResponse
     */
    public function updateQualityCheckScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityCheckSchemeWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI UpdateRule is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead.
     *  *
     * Deprecated
     *
     * @param UpdateRuleRequest $request UpdateRuleRequest
     *
     * @return UpdateRuleResponse UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *  *
     * @summary 更新规则
     *  *
     * Deprecated
     *
     * @param UpdateRuleByIdRequest $request UpdateRuleByIdRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleByIdResponse UpdateRuleByIdResponse
     */
    public function updateRuleByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->isCopy)) {
            $body['IsCopy'] = $request->isCopy;
        }
        if (!Utils::isUnset($request->jsonStrForRule)) {
            $body['JsonStrForRule'] = $request->jsonStrForRule;
        }
        if (!Utils::isUnset($request->returnRelatedSchemes)) {
            $body['ReturnRelatedSchemes'] = $request->returnRelatedSchemes;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdateRuleByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI UpdateRuleById is deprecated, please use Qualitycheck::2019-01-15::UpdateRuleV4 instead
     *  *
     * @summary 更新规则
     *  *
     * Deprecated
     *
     * @param UpdateRuleByIdRequest $request UpdateRuleByIdRequest
     *
     * @return UpdateRuleByIdResponse UpdateRuleByIdResponse
     */
    public function updateRuleById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 更新质检方案的规则
     *  *
     * @param UpdateRuleToSchemeRequest $request UpdateRuleToSchemeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleToSchemeResponse UpdateRuleToSchemeResponse
     */
    public function updateRuleToSchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateRuleToSchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新质检方案的规则
     *  *
     * @param UpdateRuleToSchemeRequest $request UpdateRuleToSchemeRequest
     *
     * @return UpdateRuleToSchemeResponse UpdateRuleToSchemeResponse
     */
    public function updateRuleToScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleToSchemeWithOptions($request, $runtime);
    }

    /**
     * @summary V4更新规则
     *  *
     * @param UpdateRuleV4Request $request UpdateRuleV4Request
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRuleV4Response UpdateRuleV4Response
     */
    public function updateRuleV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->jsonStrForRule)) {
            $body['JsonStrForRule'] = $request->jsonStrForRule;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdateRuleV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary V4更新规则
     *  *
     * @param UpdateRuleV4Request $request UpdateRuleV4Request
     *
     * @return UpdateRuleV4Response UpdateRuleV4Response
     */
    public function updateRuleV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleV4WithOptions($request, $runtime);
    }

    /**
     * @summary 创建质检任务
     *  *
     * @param UpdateSchemeTaskConfigRequest $request UpdateSchemeTaskConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSchemeTaskConfigResponse UpdateSchemeTaskConfigResponse
     */
    public function updateSchemeTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['jsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateSchemeTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建质检任务
     *  *
     * @param UpdateSchemeTaskConfigRequest $request UpdateSchemeTaskConfigRequest
     *
     * @return UpdateSchemeTaskConfigResponse UpdateSchemeTaskConfigResponse
     */
    public function updateSchemeTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemeTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI UpdateScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param UpdateScoreForApiRequest $request UpdateScoreForApiRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScoreForApiResponse UpdateScoreForApiResponse
     */
    public function updateScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI UpdateScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param UpdateScoreForApiRequest $request UpdateScoreForApiRequest
     *
     * @return UpdateScoreForApiResponse UpdateScoreForApiResponse
     */
    public function updateScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSkillGroupConfigRequest $request UpdateSkillGroupConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSkillGroupConfigResponse UpdateSkillGroupConfigResponse
     */
    public function updateSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateSkillGroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSkillGroupConfigRequest $request UpdateSkillGroupConfigRequest
     *
     * @return UpdateSkillGroupConfigResponse UpdateSkillGroupConfigResponse
     */
    public function updateSkillGroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillGroupConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI UpdateSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param UpdateSubScoreForApiRequest $request UpdateSubScoreForApiRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSubScoreForApiResponse UpdateSubScoreForApiResponse
     */
    public function updateSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubScoreForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubScoreForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI UpdateSubScoreForApi is deprecated
     *  *
     * Deprecated
     *
     * @param UpdateSubScoreForApiRequest $request UpdateSubScoreForApiRequest
     *
     * @return UpdateSubScoreForApiResponse UpdateSubScoreForApiResponse
     */
    public function updateSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSyncQualityCheckDataRequest $request UpdateSyncQualityCheckDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSyncQualityCheckDataResponse UpdateSyncQualityCheckDataResponse
     */
    public function updateSyncQualityCheckDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateSyncQualityCheckDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSyncQualityCheckDataRequest $request UpdateSyncQualityCheckDataRequest
     *
     * @return UpdateSyncQualityCheckDataResponse UpdateSyncQualityCheckDataResponse
     */
    public function updateSyncQualityCheckData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSyncQualityCheckDataWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskAssignRuleRequest $request UpdateTaskAssignRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskAssignRuleResponse UpdateTaskAssignRuleResponse
     */
    public function updateTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateTaskAssignRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTaskAssignRuleRequest $request UpdateTaskAssignRuleRequest
     *
     * @return UpdateTaskAssignRuleResponse UpdateTaskAssignRuleResponse
     */
    public function updateTaskAssignRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskAssignRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWarningConfigRequest $request UpdateWarningConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWarningConfigResponse UpdateWarningConfigResponse
     */
    public function updateWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateWarningConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWarningConfigRequest $request UpdateWarningConfigRequest
     *
     * @return UpdateWarningConfigResponse UpdateWarningConfigResponse
     */
    public function updateWarningConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWarningConfigWithOptions($request, $runtime);
    }

    /**
     * @summary  预警策略-更新
     *  *
     * @param UpdateWarningStrategyConfigRequest $request UpdateWarningStrategyConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWarningStrategyConfigResponse UpdateWarningStrategyConfigResponse
     */
    public function updateWarningStrategyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateWarningStrategyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary  预警策略-更新
     *  *
     * @param UpdateWarningStrategyConfigRequest $request UpdateWarningStrategyConfigRequest
     *
     * @return UpdateWarningStrategyConfigResponse UpdateWarningStrategyConfigResponse
     */
    public function updateWarningStrategyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWarningStrategyConfigWithOptions($request, $runtime);
    }

    /**
     * @param UploadAudioDataRequest $request UploadAudioDataRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadAudioDataResponse UploadAudioDataResponse
     */
    public function uploadAudioDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UploadAudioDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadAudioDataRequest $request UploadAudioDataRequest
     *
     * @return UploadAudioDataResponse UploadAudioDataResponse
     */
    public function uploadAudioData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadAudioDataWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *  *
     * @summary 推荐使用UploadDataV4接口,支持更长的JsonStr,但仅支持POST方法.
     *  *
     * Deprecated
     *
     * @param UploadDataRequest $request UploadDataRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadDataResponse UploadDataResponse
     */
    public function uploadDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UploadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI UploadData is deprecated, please use Qualitycheck::2019-01-15::UploadDataV4 instead
     *  *
     * @summary 推荐使用UploadDataV4接口,支持更长的JsonStr,但仅支持POST方法.
     *  *
     * Deprecated
     *
     * @param UploadDataRequest $request UploadDataRequest
     *
     * @return UploadDataResponse UploadDataResponse
     */
    public function uploadData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataWithOptions($request, $runtime);
    }

    /**
     * @summary http_hsf
     *  *
     * @param UploadDataSyncRequest $request UploadDataSyncRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadDataSyncResponse UploadDataSyncResponse
     */
    public function uploadDataSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UploadDataSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary http_hsf
     *  *
     * @param UploadDataSyncRequest $request UploadDataSyncRequest
     *
     * @return UploadDataSyncResponse UploadDataSyncResponse
     */
    public function uploadDataSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataSyncWithOptions($request, $runtime);
    }

    /**
     * @summary UploadDataV4
     *  *
     * @param UploadDataV4Request $request UploadDataV4Request
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadDataV4Response UploadDataV4Response
     */
    public function uploadDataV4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $body['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $body['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return UploadDataV4Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UploadDataV4
     *  *
     * @param UploadDataV4Request $request UploadDataV4Request
     *
     * @return UploadDataV4Response UploadDataV4Response
     */
    public function uploadDataV4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDataV4WithOptions($request, $runtime);
    }

    /**
     * @param UploadRuleRequest $request UploadRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadRuleResponse UploadRuleResponse
     */
    public function uploadRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UploadRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadRuleRequest $request UploadRuleRequest
     *
     * @return UploadRuleResponse UploadRuleResponse
     */
    public function uploadRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRuleWithOptions($request, $runtime);
    }

    /**
     * @param VerifyFileRequest $request VerifyFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyFileResponse VerifyFileResponse
     */
    public function verifyFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return VerifyFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyFileRequest $request VerifyFileRequest
     *
     * @return VerifyFileResponse VerifyFileResponse
     */
    public function verifyFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyFileWithOptions($request, $runtime);
    }

    /**
     * @param VerifySentenceRequest $request VerifySentenceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifySentenceResponse VerifySentenceResponse
     */
    public function verifySentenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseMeAgentId)) {
            $query['BaseMeAgentId'] = $request->baseMeAgentId;
        }
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return VerifySentenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifySentenceRequest $request VerifySentenceRequest
     *
     * @return VerifySentenceResponse VerifySentenceResponse
     */
    public function verifySentence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySentenceWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddThesaurusForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddThesaurusForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateWarningConfigResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteScoreForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSubScoreForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteSubScoreForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteTaskAssignRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelThesaurusForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DelThesaurusForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\EditThesaurusForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\EditThesaurusForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHitResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHitResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultCallbackRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultCallbackResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRolesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRolesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateWarningConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadAudioDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadAudioDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponse;
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
     * @param AddBusinessCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddBusinessCategoryResponse
     */
    public function addBusinessCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param AddRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddRuleCategoryResponse
     */
    public function addRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param AddThesaurusForApiRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddThesaurusForApiResponse
     */
    public function addThesaurusForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddThesaurusForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddThesaurusForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddThesaurusForApiRequest $request
     *
     * @return AddThesaurusForApiResponse
     */
    public function addThesaurusForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addThesaurusForApiWithOptions($request, $runtime);
    }

    /**
     * @param AssignReviewerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssignReviewerResponse
     */
    public function assignReviewerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAsrVocabResponse
     */
    public function createAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSkillGroupConfigResponse
     */
    public function createSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTaskAssignRuleResponse
     */
    public function createTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateWarningConfigResponse
     */
    public function createWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DelRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DelRuleCategoryResponse
     */
    public function delRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DelThesaurusForApiRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DelThesaurusForApiResponse
     */
    public function delThesaurusForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelThesaurusForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelThesaurusForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelThesaurusForApiRequest $request
     *
     * @return DelThesaurusForApiResponse
     */
    public function delThesaurusForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delThesaurusForApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAsrVocabResponse
     */
    public function deleteAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteBusinessCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBusinessCategoryResponse
     */
    public function deleteBusinessCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteCustomizationConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCustomizationConfigResponse
     */
    public function deleteCustomizationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeletePrecisionTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePrecisionTaskResponse
     */
    public function deletePrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteScoreForApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScoreForApiResponse
     */
    public function deleteScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteScoreForApiRequest $request
     *
     * @return DeleteScoreForApiResponse
     */
    public function deleteScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSkillGroupConfigResponse
     */
    public function deleteSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteSubScoreForApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSubScoreForApiResponse
     */
    public function deleteSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteSubScoreForApiRequest $request
     *
     * @return DeleteSubScoreForApiResponse
     */
    public function deleteSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTaskAssignRuleResponse
     */
    public function deleteTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteWarningConfigResponse
     */
    public function deleteWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param EditThesaurusForApiRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EditThesaurusForApiResponse
     */
    public function editThesaurusForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditThesaurusForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditThesaurusForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditThesaurusForApiRequest $request
     *
     * @return EditThesaurusForApiResponse
     */
    public function editThesaurusForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editThesaurusForApiWithOptions($request, $runtime);
    }

    /**
     * @param GetAsrVocabRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAsrVocabResponse
     */
    public function getAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetBusinessCategoryListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBusinessCategoryListResponse
     */
    public function getBusinessCategoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetCustomizationConfigListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCustomizationConfigListResponse
     */
    public function getCustomizationConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetHitResultRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHitResultResponse
     */
    public function getHitResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHitResult',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHitResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHitResultRequest $request
     *
     * @return GetHitResultResponse
     */
    public function getHitResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHitResultWithOptions($request, $runtime);
    }

    /**
     * @param GetNextResultToVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNextResultToVerifyResponse
     */
    public function getNextResultToVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetPrecisionTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPrecisionTaskResponse
     */
    public function getPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetResultRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetResultResponse
     */
    public function getResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetResultCallbackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResultCallbackResponse
     */
    public function getResultCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResultCallback',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResultCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResultCallbackRequest $request
     *
     * @return GetResultCallbackResponse
     */
    public function getResultCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResultCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetResultToReviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResultToReviewResponse
     */
    public function getResultToReviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRuleCategoryResponse
     */
    public function getRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetRuleDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRuleDetailResponse
     */
    public function getRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetScoreInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetScoreInfoResponse
     */
    public function getScoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetSkillGroupConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSkillGroupConfigResponse
     */
    public function getSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetSyncResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSyncResultResponse
     */
    public function getSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetThesaurusBySynonymForApiRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetThesaurusBySynonymForApiResponse
     */
    public function getThesaurusBySynonymForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThesaurusBySynonymForApi',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThesaurusBySynonymForApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetThesaurusBySynonymForApiRequest $request
     *
     * @return GetThesaurusBySynonymForApiResponse
     */
    public function getThesaurusBySynonymForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThesaurusBySynonymForApiWithOptions($request, $runtime);
    }

    /**
     * @param HandleComplaintRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HandleComplaintResponse
     */
    public function handleComplaintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param InsertScoreForApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return InsertScoreForApiResponse
     */
    public function insertScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param InsertScoreForApiRequest $request
     *
     * @return InsertScoreForApiResponse
     */
    public function insertScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param InsertSubScoreForApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InsertSubScoreForApiResponse
     */
    public function insertSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param InsertSubScoreForApiRequest $request
     *
     * @return InsertSubScoreForApiResponse
     */
    public function insertSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param InvalidRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return InvalidRuleResponse
     */
    public function invalidRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListAsrVocabRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAsrVocabResponse
     */
    public function listAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListHotWordsTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHotWordsTasksResponse
     */
    public function listHotWordsTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotWordsTasks',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotWordsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotWordsTasksRequest $request
     *
     * @return ListHotWordsTasksResponse
     */
    public function listHotWordsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotWordsTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListPrecisionTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPrecisionTaskResponse
     */
    public function listPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListSkillGroupConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSkillGroupConfigResponse
     */
    public function listSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListTaskAssignRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTaskAssignRulesResponse
     */
    public function listTaskAssignRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListWarningConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListWarningConfigResponse
     */
    public function listWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param RestartAsrTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RestartAsrTaskResponse
     */
    public function restartAsrTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartAsrTask',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartAsrTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartAsrTaskRequest $request
     *
     * @return RestartAsrTaskResponse
     */
    public function restartAsrTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartAsrTaskWithOptions($request, $runtime);
    }

    /**
     * @param SaveConfigDataSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveConfigDataSetResponse
     */
    public function saveConfigDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param SubmitComplaintRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitComplaintResponse
     */
    public function submitComplaintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param SubmitPrecisionTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitPrecisionTaskResponse
     */
    public function submitPrecisionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param SubmitQualityCheckTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitQualityCheckTaskResponse
     */
    public function submitQualityCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param SubmitReviewInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitReviewInfoResponse
     */
    public function submitReviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param SyncQualityCheckRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncQualityCheckResponse
     */
    public function syncQualityCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAsrVocabResponse
     */
    public function updateAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateScoreForApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateScoreForApiResponse
     */
    public function updateScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateScoreForApiRequest $request
     *
     * @return UpdateScoreForApiResponse
     */
    public function updateScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSkillGroupConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSkillGroupConfigResponse
     */
    public function updateSkillGroupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateSubScoreForApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSubScoreForApiResponse
     */
    public function updateSubScoreForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateSubScoreForApiRequest $request
     *
     * @return UpdateSubScoreForApiResponse
     */
    public function updateSubScoreForApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubScoreForApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSyncQualityCheckDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSyncQualityCheckDataResponse
     */
    public function updateSyncQualityCheckDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateTaskAssignRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTaskAssignRuleResponse
     */
    public function updateTaskAssignRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateUserConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateUserConfigResponse
     */
    public function updateUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jsonStr)) {
            $query['JsonStr'] = $request->jsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserConfig',
            'version'     => '2019-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserConfigRequest $request
     *
     * @return UpdateUserConfigResponse
     */
    public function updateUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWarningConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateWarningConfigResponse
     */
    public function updateWarningConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UploadAudioDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadAudioDataResponse
     */
    public function uploadAudioDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UploadDataRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadDataResponse
     */
    public function uploadDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UploadDataSyncRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UploadDataSyncResponse
     */
    public function uploadDataSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UploadRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadRuleResponse
     */
    public function uploadRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param VerifyFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifyFileResponse
     */
    public function verifyFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param VerifySentenceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifySentenceResponse
     */
    public function verifySentenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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

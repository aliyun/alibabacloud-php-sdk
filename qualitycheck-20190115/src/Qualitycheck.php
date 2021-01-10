<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddBusinessCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddThesaurusForApiRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddThesaurusForApiResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddUploadDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AddUploadDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AssignReviewerResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\CreateRuleResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDimensionRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDimensionResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponse;
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
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RemoveAndGetTaskRulesRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RemoveAndGetTaskRulesResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SaveConfigDataSetRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SaveConfigDataSetResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitComplaintRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitComplaintResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitCustomizationConfigRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitCustomizationConfigResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitPrecisionTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitPrecisionTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitQualityCheckTaskRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitQualityCheckTaskResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SubmitReviewInfoResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateAsrVocabResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateOnPurchaseSuccessRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateOnPurchaseSuccessResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleForAntRequest;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateRuleForAntResponse;
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
use Darabonba\OpenApi\OpenApiClient;

class Qualitycheck extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'qualitycheck.aliyuncs.com',
            'ap-northeast-2-pop'          => 'qualitycheck.aliyuncs.com',
            'ap-south-1'                  => 'qualitycheck.aliyuncs.com',
            'ap-southeast-1'              => 'qualitycheck.aliyuncs.com',
            'ap-southeast-2'              => 'qualitycheck.aliyuncs.com',
            'ap-southeast-3'              => 'qualitycheck.aliyuncs.com',
            'ap-southeast-5'              => 'qualitycheck.aliyuncs.com',
            'cn-beijing'                  => 'qualitycheck.aliyuncs.com',
            'cn-beijing-finance-1'        => 'qualitycheck.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'qualitycheck.aliyuncs.com',
            'cn-beijing-gov-1'            => 'qualitycheck.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'qualitycheck.aliyuncs.com',
            'cn-chengdu'                  => 'qualitycheck.aliyuncs.com',
            'cn-edge-1'                   => 'qualitycheck.aliyuncs.com',
            'cn-fujian'                   => 'qualitycheck.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-finance'         => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'qualitycheck.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'qualitycheck.aliyuncs.com',
            'cn-hongkong'                 => 'qualitycheck.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'qualitycheck.aliyuncs.com',
            'cn-huhehaote'                => 'qualitycheck.aliyuncs.com',
            'cn-north-2-gov-1'            => 'qualitycheck.aliyuncs.com',
            'cn-qingdao'                  => 'qualitycheck.aliyuncs.com',
            'cn-qingdao-nebula'           => 'qualitycheck.aliyuncs.com',
            'cn-shanghai'                 => 'qualitycheck.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'qualitycheck.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'qualitycheck.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'qualitycheck.aliyuncs.com',
            'cn-shanghai-inner'           => 'qualitycheck.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'qualitycheck.aliyuncs.com',
            'cn-shenzhen'                 => 'qualitycheck.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'qualitycheck.aliyuncs.com',
            'cn-shenzhen-inner'           => 'qualitycheck.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'qualitycheck.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'qualitycheck.aliyuncs.com',
            'cn-wuhan'                    => 'qualitycheck.aliyuncs.com',
            'cn-yushanfang'               => 'qualitycheck.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'qualitycheck.aliyuncs.com',
            'cn-zhangjiakou'              => 'qualitycheck.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'qualitycheck.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'qualitycheck.aliyuncs.com',
            'eu-central-1'                => 'qualitycheck.aliyuncs.com',
            'eu-west-1'                   => 'qualitycheck.aliyuncs.com',
            'eu-west-1-oxs'               => 'qualitycheck.aliyuncs.com',
            'me-east-1'                   => 'qualitycheck.aliyuncs.com',
            'rus-west-1-pop'              => 'qualitycheck.aliyuncs.com',
            'us-east-1'                   => 'qualitycheck.aliyuncs.com',
            'us-west-1'                   => 'qualitycheck.aliyuncs.com',
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBusinessCategoryResponse::fromMap($this->doRPCRequest('AddBusinessCategory', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRuleCategoryResponse::fromMap($this->doRPCRequest('AddRuleCategory', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddThesaurusForApiResponse::fromMap($this->doRPCRequest('AddThesaurusForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddUploadDataSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddUploadDataSetResponse
     */
    public function addUploadDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUploadDataSetResponse::fromMap($this->doRPCRequest('AddUploadDataSet', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddUploadDataSetRequest $request
     *
     * @return AddUploadDataSetResponse
     */
    public function addUploadDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUploadDataSetWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignReviewerResponse::fromMap($this->doRPCRequest('AssignReviewer', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfigDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ConfigDataSetResponse
     */
    public function configDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigDataSetResponse::fromMap($this->doRPCRequest('ConfigDataSet', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigDataSetRequest $request
     *
     * @return ConfigDataSetResponse
     */
    public function configDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configDataSetWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAsrVocabResponse::fromMap($this->doRPCRequest('CreateAsrVocab', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSkillGroupConfigResponse::fromMap($this->doRPCRequest('CreateSkillGroupConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTaskAssignRuleResponse::fromMap($this->doRPCRequest('CreateTaskAssignRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWarningConfigResponse::fromMap($this->doRPCRequest('CreateWarningConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteAsrVocabRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAsrVocabResponse
     */
    public function deleteAsrVocabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAsrVocabResponse::fromMap($this->doRPCRequest('DeleteAsrVocab', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBusinessCategoryResponse::fromMap($this->doRPCRequest('DeleteBusinessCategory', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomizationConfigResponse::fromMap($this->doRPCRequest('DeleteCustomizationConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDataSetResponse::fromMap($this->doRPCRequest('DeleteDataSet', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePrecisionTaskResponse::fromMap($this->doRPCRequest('DeletePrecisionTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScoreForApiResponse::fromMap($this->doRPCRequest('DeleteScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSkillGroupConfigResponse::fromMap($this->doRPCRequest('DeleteSkillGroupConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSubScoreForApiResponse::fromMap($this->doRPCRequest('DeleteSubScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTaskAssignRuleResponse::fromMap($this->doRPCRequest('DeleteTaskAssignRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWarningConfigResponse::fromMap($this->doRPCRequest('DeleteWarningConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DelRuleCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DelRuleCategoryResponse
     */
    public function delRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DelRuleCategoryResponse::fromMap($this->doRPCRequest('DelRuleCategory', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DelThesaurusForApiResponse::fromMap($this->doRPCRequest('DelThesaurusForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EditThesaurusForApiRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EditThesaurusForApiResponse
     */
    public function editThesaurusForApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditThesaurusForApiResponse::fromMap($this->doRPCRequest('EditThesaurusForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAsrVocabResponse::fromMap($this->doRPCRequest('GetAsrVocab', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBusinessCategoryListResponse::fromMap($this->doRPCRequest('GetBusinessCategoryList', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCustomizationConfigListResponse::fromMap($this->doRPCRequest('GetCustomizationConfigList', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHitResultResponse::fromMap($this->doRPCRequest('GetHitResult', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNextResultToVerifyResponse::fromMap($this->doRPCRequest('GetNextResultToVerify', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPrecisionTaskResponse::fromMap($this->doRPCRequest('GetPrecisionTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetResultResponse::fromMap($this->doRPCRequest('GetResult', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetResultCallbackResponse::fromMap($this->doRPCRequest('GetResultCallback', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetResultToReviewResponse::fromMap($this->doRPCRequest('GetResultToReview', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetReviewInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetReviewInfoResponse
     */
    public function getReviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetReviewInfoResponse::fromMap($this->doRPCRequest('GetReviewInfo', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetReviewInfoRequest $request
     *
     * @return GetReviewInfoResponse
     */
    public function getReviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReviewInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleResponse::fromMap($this->doRPCRequest('GetRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleCategoryResponse::fromMap($this->doRPCRequest('GetRuleCategory', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleDetailResponse::fromMap($this->doRPCRequest('GetRuleDetail', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetRuleDimensionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRuleDimensionResponse
     */
    public function getRuleDimensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleDimensionResponse::fromMap($this->doRPCRequest('GetRuleDimension', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRuleDimensionRequest $request
     *
     * @return GetRuleDimensionResponse
     */
    public function getRuleDimension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleDimensionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetScoreInfoResponse::fromMap($this->doRPCRequest('GetScoreInfo', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSkillGroupConfigResponse::fromMap($this->doRPCRequest('GetSkillGroupConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSyncResultResponse::fromMap($this->doRPCRequest('GetSyncResult', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetTaskFileResultListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTaskFileResultListResponse
     */
    public function getTaskFileResultListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskFileResultListResponse::fromMap($this->doRPCRequest('GetTaskFileResultList', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskFileResultListRequest $request
     *
     * @return GetTaskFileResultListResponse
     */
    public function getTaskFileResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskFileResultListWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRuleListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTaskRuleListResponse
     */
    public function getTaskRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskRuleListResponse::fromMap($this->doRPCRequest('GetTaskRuleList', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskRuleListRequest $request
     *
     * @return GetTaskRuleListResponse
     */
    public function getTaskRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskRuleListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThesaurusBySynonymForApiResponse::fromMap($this->doRPCRequest('GetThesaurusBySynonymForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HandleComplaintResponse::fromMap($this->doRPCRequest('HandleComplaint', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertScoreForApiResponse::fromMap($this->doRPCRequest('InsertScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertSubScoreForApiResponse::fromMap($this->doRPCRequest('InsertSubScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvalidRuleResponse::fromMap($this->doRPCRequest('InvalidRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAsrVocabResponse::fromMap($this->doRPCRequest('ListAsrVocab', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListDataSetTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSetTaskResponse
     */
    public function listDataSetTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataSetTaskResponse::fromMap($this->doRPCRequest('ListDataSetTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataSetTaskRequest $request
     *
     * @return ListDataSetTaskResponse
     */
    public function listDataSetTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSetTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHotWordsTasksResponse::fromMap($this->doRPCRequest('ListHotWordsTasks', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPrecisionTaskResponse::fromMap($this->doRPCRequest('ListPrecisionTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRulesResponse::fromMap($this->doRPCRequest('ListRules', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupConfigResponse::fromMap($this->doRPCRequest('ListSkillGroupConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskAssignRulesResponse::fromMap($this->doRPCRequest('ListTaskAssignRules', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWarningConfigResponse::fromMap($this->doRPCRequest('ListWarningConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveAndGetTaskRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveAndGetTaskRulesResponse
     */
    public function removeAndGetTaskRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAndGetTaskRulesResponse::fromMap($this->doRPCRequest('RemoveAndGetTaskRules', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveAndGetTaskRulesRequest $request
     *
     * @return RemoveAndGetTaskRulesResponse
     */
    public function removeAndGetTaskRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAndGetTaskRulesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartAsrTaskResponse::fromMap($this->doRPCRequest('RestartAsrTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReviewSingleResultByIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReviewSingleResultByIdResponse
     */
    public function reviewSingleResultByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReviewSingleResultByIdResponse::fromMap($this->doRPCRequest('ReviewSingleResultById', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReviewSingleResultByIdRequest $request
     *
     * @return ReviewSingleResultByIdResponse
     */
    public function reviewSingleResultById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reviewSingleResultByIdWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveConfigDataSetResponse::fromMap($this->doRPCRequest('SaveConfigDataSet', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitComplaintResponse::fromMap($this->doRPCRequest('SubmitComplaint', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitCustomizationConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitCustomizationConfigResponse
     */
    public function submitCustomizationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitCustomizationConfigResponse::fromMap($this->doRPCRequest('SubmitCustomizationConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitCustomizationConfigRequest $request
     *
     * @return SubmitCustomizationConfigResponse
     */
    public function submitCustomizationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomizationConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitPrecisionTaskResponse::fromMap($this->doRPCRequest('SubmitPrecisionTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitQualityCheckTaskResponse::fromMap($this->doRPCRequest('SubmitQualityCheckTask', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitReviewInfoResponse::fromMap($this->doRPCRequest('SubmitReviewInfo', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncQualityCheckResponse::fromMap($this->doRPCRequest('SyncQualityCheck', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TestRuleRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return TestRuleResponse
     */
    public function testRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TestRuleResponse::fromMap($this->doRPCRequest('TestRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TestRuleRequest $request
     *
     * @return TestRuleResponse
     */
    public function testRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testRuleWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAsrVocabResponse::fromMap($this->doRPCRequest('UpdateAsrVocab', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateOnPurchaseSuccessRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateOnPurchaseSuccessResponse
     */
    public function updateOnPurchaseSuccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOnPurchaseSuccessResponse::fromMap($this->doRPCRequest('UpdateOnPurchaseSuccess', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOnPurchaseSuccessRequest $request
     *
     * @return UpdateOnPurchaseSuccessResponse
     */
    public function updateOnPurchaseSuccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOnPurchaseSuccessWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleResponse::fromMap($this->doRPCRequest('UpdateRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateRuleForAntRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRuleForAntResponse
     */
    public function updateRuleForAntWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleForAntResponse::fromMap($this->doRPCRequest('UpdateRuleForAnt', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRuleForAntRequest $request
     *
     * @return UpdateRuleForAntResponse
     */
    public function updateRuleForAnt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleForAntWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateScoreForApiResponse::fromMap($this->doRPCRequest('UpdateScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSkillGroupConfigResponse::fromMap($this->doRPCRequest('UpdateSkillGroupConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSubScoreForApiResponse::fromMap($this->doRPCRequest('UpdateSubScoreForApi', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSyncQualityCheckDataResponse::fromMap($this->doRPCRequest('UpdateSyncQualityCheckData', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTaskAssignRuleResponse::fromMap($this->doRPCRequest('UpdateTaskAssignRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserConfigResponse::fromMap($this->doRPCRequest('UpdateUserConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateWarningConfigResponse::fromMap($this->doRPCRequest('UpdateWarningConfig', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadAudioDataResponse::fromMap($this->doRPCRequest('UploadAudioData', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadDataResponse::fromMap($this->doRPCRequest('UploadData', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadDataSyncResponse::fromMap($this->doRPCRequest('UploadDataSync', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadRuleResponse::fromMap($this->doRPCRequest('UploadRule', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyFileResponse::fromMap($this->doRPCRequest('VerifyFile', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifySentenceResponse::fromMap($this->doRPCRequest('VerifySentence', '2019-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

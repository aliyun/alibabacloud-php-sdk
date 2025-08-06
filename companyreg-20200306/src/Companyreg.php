<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseIntentionForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseIntentionForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseUserIntentionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CloseUserIntentionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateBusinessOpportunityRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateBusinessOpportunityResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateProduceForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\CreateProduceForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\DescribePartnerConfigRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\DescribePartnerConfigResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GenerateUploadFilePolicyRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GenerateUploadFilePolicyResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GetAlipayUrlRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\GetAlipayUrlResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListIntentionNoteRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListIntentionNoteResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserDetailSolutionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserDetailSolutionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionNotesRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionNotesResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserIntentionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserProduceOperateLogsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserProduceOperateLogsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsShrinkRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\OperateProduceForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\OperateProduceForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureDataRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureDataResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureReadyFlagRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\PutMeasureReadyFlagResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryAvailableNumbersRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryAvailableNumbersResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryBagRemainingRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryBagRemainingResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCallRecordListRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCallRecordListResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryInstanceRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryInstanceResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerIntentionListRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerIntentionListResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerProduceListRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryPartnerProduceListResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryUserNeedAuthResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RecordPostBackRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RecordPostBackResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectUserSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\RejectUserSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ReleaseProduceAuthorizationRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\ReleaseProduceAuthorizationResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\StartBackToBackCallRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\StartBackToBackCallResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionForPartnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionForPartnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionNoteRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitIntentionNoteResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitSolutionRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\SubmitSolutionResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferIntentionOwnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferIntentionOwnerResponse;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferProduceOwnerRequest;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\TransferProduceOwnerResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Companyreg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'companyreg.aliyuncs.com',
            'ap-northeast-2-pop' => 'companyreg.aliyuncs.com',
            'ap-south-1' => 'companyreg.aliyuncs.com',
            'ap-southeast-1' => 'companyreg.aliyuncs.com',
            'ap-southeast-2' => 'companyreg.aliyuncs.com',
            'ap-southeast-3' => 'companyreg.aliyuncs.com',
            'ap-southeast-5' => 'companyreg.aliyuncs.com',
            'cn-beijing' => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-1' => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-pop' => 'companyreg.aliyuncs.com',
            'cn-beijing-gov-1' => 'companyreg.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'companyreg.aliyuncs.com',
            'cn-chengdu' => 'companyreg.aliyuncs.com',
            'cn-edge-1' => 'companyreg.aliyuncs.com',
            'cn-fujian' => 'companyreg.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-finance' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-test-306' => 'companyreg.aliyuncs.com',
            'cn-hongkong' => 'companyreg.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'companyreg.aliyuncs.com',
            'cn-huhehaote' => 'companyreg.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'companyreg.aliyuncs.com',
            'cn-north-2-gov-1' => 'companyreg.aliyuncs.com',
            'cn-qingdao' => 'companyreg.aliyuncs.com',
            'cn-qingdao-nebula' => 'companyreg.aliyuncs.com',
            'cn-shanghai' => 'companyreg.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'companyreg.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'companyreg.aliyuncs.com',
            'cn-shanghai-finance-1' => 'companyreg.aliyuncs.com',
            'cn-shanghai-inner' => 'companyreg.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-shenzhen' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-inner' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'companyreg.aliyuncs.com',
            'cn-wuhan' => 'companyreg.aliyuncs.com',
            'cn-wulanchabu' => 'companyreg.aliyuncs.com',
            'cn-yushanfang' => 'companyreg.aliyuncs.com',
            'cn-zhangbei' => 'companyreg.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou' => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'companyreg.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'companyreg.aliyuncs.com',
            'eu-central-1' => 'companyreg.aliyuncs.com',
            'eu-west-1' => 'companyreg.aliyuncs.com',
            'eu-west-1-oxs' => 'companyreg.aliyuncs.com',
            'me-east-1' => 'companyreg.aliyuncs.com',
            'rus-west-1-pop' => 'companyreg.aliyuncs.com',
            'us-east-1' => 'companyreg.aliyuncs.com',
            'us-west-1' => 'companyreg.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('companyreg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - BindProduceAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindProduceAuthorizationResponse
     *
     * @param BindProduceAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindProduceAuthorizationResponse
     */
    public function bindProduceAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizedUserIds) {
            @$body['AuthorizedUserIds'] = $request->authorizedUserIds;
        }

        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindProduceAuthorization',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindProduceAuthorizationRequest
     *
     * @returns BindProduceAuthorizationResponse
     *
     * @param BindProduceAuthorizationRequest $request
     *
     * @return BindProduceAuthorizationResponse
     */
    public function bindProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param request - CloseIntentionForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseIntentionForPartnerResponse
     *
     * @param CloseIntentionForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CloseIntentionForPartnerResponse
     */
    public function closeIntentionForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseIntentionForPartner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseIntentionForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CloseIntentionForPartnerRequest
     *
     * @returns CloseIntentionForPartnerResponse
     *
     * @param CloseIntentionForPartnerRequest $request
     *
     * @return CloseIntentionForPartnerResponse
     */
    public function closeIntentionForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeIntentionForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param request - CloseUserIntentionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseUserIntentionResponse
     *
     * @param CloseUserIntentionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CloseUserIntentionResponse
     */
    public function closeUserIntentionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseUserIntention',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseUserIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CloseUserIntentionRequest
     *
     * @returns CloseUserIntentionResponse
     *
     * @param CloseUserIntentionRequest $request
     *
     * @return CloseUserIntentionResponse
     */
    public function closeUserIntention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeUserIntentionWithOptions($request, $runtime);
    }

    /**
     * CreateBusinessOpportunity.
     *
     * @param request - CreateBusinessOpportunityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBusinessOpportunityResponse
     *
     * @param CreateBusinessOpportunityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateBusinessOpportunityResponse
     */
    public function createBusinessOpportunityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->VCode) {
            @$query['VCode'] = $request->VCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBusinessOpportunity',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBusinessOpportunityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateBusinessOpportunity.
     *
     * @param request - CreateBusinessOpportunityRequest
     *
     * @returns CreateBusinessOpportunityResponse
     *
     * @param CreateBusinessOpportunityRequest $request
     *
     * @return CreateBusinessOpportunityResponse
     */
    public function createBusinessOpportunity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBusinessOpportunityWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateProduceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProduceForPartnerResponse
     *
     * @param CreateProduceForPartnerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateProduceForPartnerResponse
     */
    public function createProduceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProduceForPartner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProduceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateProduceForPartnerRequest
     *
     * @returns CreateProduceForPartnerResponse
     *
     * @param CreateProduceForPartnerRequest $request
     *
     * @return CreateProduceForPartnerResponse
     */
    public function createProduceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProduceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePartnerConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePartnerConfigResponse
     *
     * @param DescribePartnerConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->partnerCode) {
            @$query['PartnerCode'] = $request->partnerCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePartnerConfig',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePartnerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePartnerConfigRequest
     *
     * @returns DescribePartnerConfigResponse
     *
     * @param DescribePartnerConfigRequest $request
     *
     * @return DescribePartnerConfigResponse
     */
    public function describePartnerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePartnerConfigWithOptions($request, $runtime);
    }

    /**
     * GenerateUploadFilePolicy.
     *
     * @param request - GenerateUploadFilePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUploadFilePolicyResponse
     *
     * @param GenerateUploadFilePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUploadFilePolicy',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUploadFilePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GenerateUploadFilePolicy.
     *
     * @param request - GenerateUploadFilePolicyRequest
     *
     * @returns GenerateUploadFilePolicyResponse
     *
     * @param GenerateUploadFilePolicyRequest $request
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadFilePolicyWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAlipayUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlipayUrlResponse
     *
     * @param GetAlipayUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlipayUrl',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAlipayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAlipayUrlRequest
     *
     * @returns GetAlipayUrlResponse
     *
     * @param GetAlipayUrlRequest $request
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlipayUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - ListIntentionNoteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntentionNoteResponse
     *
     * @param ListIntentionNoteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListIntentionNoteResponse
     */
    public function listIntentionNoteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntentionNote',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntentionNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListIntentionNoteRequest
     *
     * @returns ListIntentionNoteResponse
     *
     * @param ListIntentionNoteRequest $request
     *
     * @return ListIntentionNoteResponse
     */
    public function listIntentionNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentionNoteWithOptions($request, $runtime);
    }

    /**
     * @param request - ListProduceAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProduceAuthorizationResponse
     *
     * @param ListProduceAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProduceAuthorizationResponse
     */
    public function listProduceAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProduceAuthorization',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListProduceAuthorizationRequest
     *
     * @returns ListProduceAuthorizationResponse
     *
     * @param ListProduceAuthorizationRequest $request
     *
     * @return ListProduceAuthorizationResponse
     */
    public function listProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserDetailSolutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDetailSolutionsResponse
     *
     * @param ListUserDetailSolutionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserDetailSolutionsResponse
     */
    public function listUserDetailSolutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDetailSolutions',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserDetailSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListUserDetailSolutionsRequest
     *
     * @returns ListUserDetailSolutionsResponse
     *
     * @param ListUserDetailSolutionsRequest $request
     *
     * @return ListUserDetailSolutionsResponse
     */
    public function listUserDetailSolutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDetailSolutionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserIntentionNotesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserIntentionNotesResponse
     *
     * @param ListUserIntentionNotesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserIntentionNotesResponse
     */
    public function listUserIntentionNotesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserIntentionNotes',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserIntentionNotesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListUserIntentionNotesRequest
     *
     * @returns ListUserIntentionNotesResponse
     *
     * @param ListUserIntentionNotesRequest $request
     *
     * @return ListUserIntentionNotesResponse
     */
    public function listUserIntentionNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserIntentionNotesWithOptions($request, $runtime);
    }

    /**
     * 用户控制天需求列表查询.
     *
     * @param request - ListUserIntentionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserIntentionsResponse
     *
     * @param ListUserIntentionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserIntentionsResponse
     */
    public function listUserIntentionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->bizTypes) {
            @$query['BizTypes'] = $request->bizTypes;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortFiled) {
            @$query['SortFiled'] = $request->sortFiled;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->withExtInfo) {
            @$query['WithExtInfo'] = $request->withExtInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserIntentions',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserIntentionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户控制天需求列表查询.
     *
     * @param request - ListUserIntentionsRequest
     *
     * @returns ListUserIntentionsResponse
     *
     * @param ListUserIntentionsRequest $request
     *
     * @return ListUserIntentionsResponse
     */
    public function listUserIntentions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserIntentionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserProduceOperateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserProduceOperateLogsResponse
     *
     * @param ListUserProduceOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserProduceOperateLogs',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserProduceOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListUserProduceOperateLogsRequest
     *
     * @returns ListUserProduceOperateLogsResponse
     *
     * @param ListUserProduceOperateLogsRequest $request
     *
     * @return ListUserProduceOperateLogsResponse
     */
    public function listUserProduceOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProduceOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - ListUserSolutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserSolutionsResponse
     *
     * @param ListUserSolutionsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserSolutionsResponse
     */
    public function listUserSolutionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListUserSolutionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->existStatus) {
            $request->existStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->existStatus, 'ExistStatus', 'json');
        }

        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->existStatusShrink) {
            @$query['ExistStatus'] = $request->existStatusShrink;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserSolutions',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListUserSolutionsRequest
     *
     * @returns ListUserSolutionsResponse
     *
     * @param ListUserSolutionsRequest $request
     *
     * @return ListUserSolutionsResponse
     */
    public function listUserSolutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSolutionsWithOptions($request, $runtime);
    }

    /**
     * @param request - OperateProduceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateProduceForPartnerResponse
     *
     * @param OperateProduceForPartnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateProduceForPartner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateProduceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OperateProduceForPartnerRequest
     *
     * @returns OperateProduceForPartnerResponse
     *
     * @param OperateProduceForPartnerRequest $request
     *
     * @return OperateProduceForPartnerResponse
     */
    public function operateProduceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateProduceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param request - PutMeasureDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMeasureDataResponse
     *
     * @param PutMeasureDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$body['DataType'] = $request->dataType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutMeasureData',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMeasureDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutMeasureDataRequest
     *
     * @returns PutMeasureDataResponse
     *
     * @param PutMeasureDataRequest $request
     *
     * @return PutMeasureDataResponse
     */
    public function putMeasureData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureDataWithOptions($request, $runtime);
    }

    /**
     * @param request - PutMeasureReadyFlagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMeasureReadyFlagResponse
     *
     * @param PutMeasureReadyFlagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutMeasureReadyFlagResponse
     */
    public function putMeasureReadyFlagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->readyFlag) {
            @$query['ReadyFlag'] = $request->readyFlag;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutMeasureReadyFlag',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMeasureReadyFlagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutMeasureReadyFlagRequest
     *
     * @returns PutMeasureReadyFlagResponse
     *
     * @param PutMeasureReadyFlagRequest $request
     *
     * @return PutMeasureReadyFlagResponse
     */
    public function putMeasureReadyFlag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMeasureReadyFlagWithOptions($request, $runtime);
    }

    /**
     * 获取玄坛合作伙伴双呼时可用外呼号码
     *
     * @param request - QueryAvailableNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvailableNumbersResponse
     *
     * @param QueryAvailableNumbersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAvailableNumbersResponse
     */
    public function queryAvailableNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAvailableNumbers',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAvailableNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取玄坛合作伙伴双呼时可用外呼号码
     *
     * @param request - QueryAvailableNumbersRequest
     *
     * @returns QueryAvailableNumbersResponse
     *
     * @param QueryAvailableNumbersRequest $request
     *
     * @return QueryAvailableNumbersResponse
     */
    public function queryAvailableNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableNumbersWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBagRemainingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBagRemainingResponse
     *
     * @param QueryBagRemainingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBagRemainingResponse
     */
    public function queryBagRemainingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBagRemaining',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBagRemainingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBagRemainingRequest
     *
     * @returns QueryBagRemainingResponse
     *
     * @param QueryBagRemainingRequest $request
     *
     * @return QueryBagRemainingResponse
     */
    public function queryBagRemaining($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBagRemainingWithOptions($request, $runtime);
    }

    /**
     * 查询玄坛外呼语音文件.
     *
     * @param request - QueryCallRecordListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallRecordListResponse
     *
     * @param QueryCallRecordListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCallRecordListResponse
     */
    public function queryCallRecordListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->skillType) {
            @$query['SkillType'] = $request->skillType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCallRecordList',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCallRecordListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询玄坛外呼语音文件.
     *
     * @param request - QueryCallRecordListRequest
     *
     * @returns QueryCallRecordListResponse
     *
     * @param QueryCallRecordListRequest $request
     *
     * @return QueryCallRecordListResponse
     */
    public function queryCallRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallRecordListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceResponse
     *
     * @param QueryInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryInstanceResponse
     */
    public function queryInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInstance',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryInstanceRequest
     *
     * @returns QueryInstanceResponse
     *
     * @param QueryInstanceRequest $request
     *
     * @return QueryInstanceResponse
     */
    public function queryInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceWithOptions($request, $runtime);
    }

    /**
     * QueryPartnerIntentionList.
     *
     * @param request - QueryPartnerIntentionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPartnerIntentionListResponse
     *
     * @param QueryPartnerIntentionListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPartnerIntentionListResponse
     */
    public function queryPartnerIntentionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPartnerIntentionList',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPartnerIntentionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryPartnerIntentionList.
     *
     * @param request - QueryPartnerIntentionListRequest
     *
     * @returns QueryPartnerIntentionListResponse
     *
     * @param QueryPartnerIntentionListRequest $request
     *
     * @return QueryPartnerIntentionListResponse
     */
    public function queryPartnerIntentionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPartnerIntentionListWithOptions($request, $runtime);
    }

    /**
     * QueryPartnerProduceList.
     *
     * @param request - QueryPartnerProduceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPartnerProduceListResponse
     *
     * @param QueryPartnerProduceListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryPartnerProduceListResponse
     */
    public function queryPartnerProduceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPartnerProduceList',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPartnerProduceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryPartnerProduceList.
     *
     * @param request - QueryPartnerProduceListRequest
     *
     * @returns QueryPartnerProduceListResponse
     *
     * @param QueryPartnerProduceListRequest $request
     *
     * @return QueryPartnerProduceListResponse
     */
    public function queryPartnerProduceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPartnerProduceListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryUserNeedAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserNeedAuthResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryUserNeedAuthResponse
     */
    public function queryUserNeedAuthWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryUserNeedAuth',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserNeedAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns QueryUserNeedAuthResponse
     *
     * @return QueryUserNeedAuthResponse
     */
    public function queryUserNeedAuth()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserNeedAuthWithOptions($runtime);
    }

    /**
     * RecordPostBack.
     *
     * @param request - RecordPostBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecordPostBackResponse
     *
     * @param RecordPostBackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecordPostBackResponse
     */
    public function recordPostBackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['bizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['bizType'] = $request->bizType;
        }

        if (null !== $request->contactor) {
            @$query['contactor'] = $request->contactor;
        }

        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->entityKey) {
            @$query['entityKey'] = $request->entityKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecordPostBack',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecordPostBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RecordPostBack.
     *
     * @param request - RecordPostBackRequest
     *
     * @returns RecordPostBackResponse
     *
     * @param RecordPostBackRequest $request
     *
     * @return RecordPostBackResponse
     */
    public function recordPostBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordPostBackWithOptions($request, $runtime);
    }

    /**
     * @param request - RejectSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectSolutionResponse
     *
     * @param RejectSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RejectSolutionResponse
     */
    public function rejectSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->solutionBizId) {
            @$query['SolutionBizId'] = $request->solutionBizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RejectSolution',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RejectSolutionRequest
     *
     * @returns RejectSolutionResponse
     *
     * @param RejectSolutionRequest $request
     *
     * @return RejectSolutionResponse
     */
    public function rejectSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectSolutionWithOptions($request, $runtime);
    }

    /**
     * @param request - RejectUserSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectUserSolutionResponse
     *
     * @param RejectUserSolutionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RejectUserSolutionResponse
     */
    public function rejectUserSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->solutionBizId) {
            @$query['SolutionBizId'] = $request->solutionBizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RejectUserSolution',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectUserSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RejectUserSolutionRequest
     *
     * @returns RejectUserSolutionResponse
     *
     * @param RejectUserSolutionRequest $request
     *
     * @return RejectUserSolutionResponse
     */
    public function rejectUserSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectUserSolutionWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseProduceAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseProduceAuthorizationResponse
     *
     * @param ReleaseProduceAuthorizationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleaseProduceAuthorizationResponse
     */
    public function releaseProduceAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizedUserId) {
            @$body['AuthorizedUserId'] = $request->authorizedUserId;
        }

        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseProduceAuthorization',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseProduceAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseProduceAuthorizationRequest
     *
     * @returns ReleaseProduceAuthorizationResponse
     *
     * @param ReleaseProduceAuthorizationRequest $request
     *
     * @return ReleaseProduceAuthorizationResponse
     */
    public function releaseProduceAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseProduceAuthorizationWithOptions($request, $runtime);
    }

    /**
     * 玄坛双呼外呼发起.
     *
     * @param request - StartBackToBackCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartBackToBackCallResponse
     *
     * @param StartBackToBackCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartBackToBackCallResponse
     */
    public function startBackToBackCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callCenterNumber) {
            @$query['CallCenterNumber'] = $request->callCenterNumber;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->mobileKey) {
            @$query['MobileKey'] = $request->mobileKey;
        }

        if (null !== $request->skillType) {
            @$query['SkillType'] = $request->skillType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartBackToBackCall',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartBackToBackCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 玄坛双呼外呼发起.
     *
     * @param request - StartBackToBackCallRequest
     *
     * @returns StartBackToBackCallResponse
     *
     * @param StartBackToBackCallRequest $request
     *
     * @return StartBackToBackCallResponse
     */
    public function startBackToBackCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBackToBackCallWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴提交需求单.
     *
     * @param request - SubmitIntentionForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIntentionForPartnerResponse
     *
     * @param SubmitIntentionForPartnerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitIntentionForPartnerResponse
     */
    public function submitIntentionForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->commodityType) {
            @$query['CommodityType'] = $request->commodityType;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->grade) {
            @$query['Grade'] = $request->grade;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIntentionForPartner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitIntentionForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴提交需求单.
     *
     * @param request - SubmitIntentionForPartnerRequest
     *
     * @returns SubmitIntentionForPartnerResponse
     *
     * @param SubmitIntentionForPartnerRequest $request
     *
     * @return SubmitIntentionForPartnerResponse
     */
    public function submitIntentionForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIntentionForPartnerWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitIntentionNoteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIntentionNoteResponse
     *
     * @param SubmitIntentionNoteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitIntentionNoteResponse
     */
    public function submitIntentionNoteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIntentionNote',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitIntentionNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitIntentionNoteRequest
     *
     * @returns SubmitIntentionNoteResponse
     *
     * @param SubmitIntentionNoteRequest $request
     *
     * @return SubmitIntentionNoteResponse
     */
    public function submitIntentionNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIntentionNoteWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSolutionResponse
     *
     * @param SubmitSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSolutionResponse
     */
    public function submitSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intentionBizId) {
            @$query['IntentionBizId'] = $request->intentionBizId;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->solution) {
            @$query['Solution'] = $request->solution;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSolution',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitSolutionRequest
     *
     * @returns SubmitSolutionResponse
     *
     * @param SubmitSolutionRequest $request
     *
     * @return SubmitSolutionResponse
     */
    public function submitSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSolutionWithOptions($request, $runtime);
    }

    /**
     * 玄坛需求单转派小二.
     *
     * @param request - TransferIntentionOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferIntentionOwnerResponse
     *
     * @param TransferIntentionOwnerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TransferIntentionOwnerResponse
     */
    public function transferIntentionOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferIntentionOwner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferIntentionOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 玄坛需求单转派小二.
     *
     * @param request - TransferIntentionOwnerRequest
     *
     * @returns TransferIntentionOwnerResponse
     *
     * @param TransferIntentionOwnerRequest $request
     *
     * @return TransferIntentionOwnerResponse
     */
    public function transferIntentionOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferIntentionOwnerWithOptions($request, $runtime);
    }

    /**
     * 玄坛服务单转派小二.
     *
     * @param request - TransferProduceOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferProduceOwnerResponse
     *
     * @param TransferProduceOwnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TransferProduceOwnerResponse
     */
    public function transferProduceOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferProduceOwner',
            'version' => '2020-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferProduceOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 玄坛服务单转派小二.
     *
     * @param request - TransferProduceOwnerRequest
     *
     * @returns TransferProduceOwnerResponse
     *
     * @param TransferProduceOwnerRequest $request
     *
     * @return TransferProduceOwnerResponse
     */
    public function transferProduceOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferProduceOwnerWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AcceptAgreementRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AcceptAgreementResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AddWhitelistRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AddWhitelistResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ApplyForTryOnRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ApplyForTryOnResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AuthUserRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\AuthUserResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchCreateSvcMapBindRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchCreateSvcMapBindResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchCreateSvcMapBindShrinkRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchDeleteSvcMapBindRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchDeleteSvcMapBindResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BatchDeleteSvcMapBindShrinkRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BuildProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\BuildProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateSourcePolicyRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateSourcePolicyResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeleteSourceFileRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeleteSourceFileResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeployLocationTreeRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\DeployLocationTreeResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\FindSvcMapBindRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\FindSvcMapBindResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetApplyStatusForTryOnRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetApplyStatusForTryOnResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditCommonMaterialRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditCommonMaterialResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditStsAuthRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditStsAuthResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditUgcMaterialRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditUgcMaterialResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetProjectDatasetRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\GetProjectDatasetResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\InvokeSyncAlgorithmRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\InvokeSyncAlgorithmResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\InvokeSyncAlgorithmShrinkRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListAreaMapRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListAreaMapResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListClothesRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListClothesResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListClothesShrinkRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListClothTypesResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListHdrResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListLocationPaiImageRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListLocationPaiImageResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListSourceFileRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListSourceFileResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\LoginAppRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\LoginAppResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\LoginRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\LoginResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\PublishArEditProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\PublishArEditProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\PublishProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\PublishProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryAreaMapRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryAreaMapResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryBuildBreakpointRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryBuildBreakpointResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectBuildDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectBuildDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\RegisterUserRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\RegisterUserResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ResumeLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ResumeLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SaveArEditProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SaveArEditProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SaveSourceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SaveSourceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SuspendLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\SuspendLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UnPublishProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UnPublishProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateLocationServiceRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateLocationServiceResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateLocationTreeRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateLocationTreeResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\UpdateProjectShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class XrEngine extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'xrengine-daily.aliyuncs.com',
            'ap-northeast-2-pop' => 'xrengine-daily.aliyuncs.com',
            'ap-south-1' => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-1' => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-2' => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-3' => 'xrengine-daily.aliyuncs.com',
            'ap-southeast-5' => 'xrengine-daily.aliyuncs.com',
            'cn-beijing' => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-finance-1' => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-finance-pop' => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-gov-1' => 'xrengine-daily.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-chengdu' => 'xrengine-daily.aliyuncs.com',
            'cn-edge-1' => 'xrengine-daily.aliyuncs.com',
            'cn-fujian' => 'xrengine-daily.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-finance' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'xrengine-daily.aliyuncs.com',
            'cn-hangzhou-test-306' => 'xrengine-daily.aliyuncs.com',
            'cn-hongkong' => 'xrengine-daily.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'xrengine-daily.aliyuncs.com',
            'cn-huhehaote' => 'xrengine-daily.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'xrengine-daily.aliyuncs.com',
            'cn-north-2-gov-1' => 'xrengine-daily.aliyuncs.com',
            'cn-qingdao' => 'xrengine-daily.aliyuncs.com',
            'cn-qingdao-nebula' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-finance-1' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-inner' => 'xrengine-daily.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-inner' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'xrengine-daily.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-wuhan' => 'xrengine-daily.aliyuncs.com',
            'cn-wulanchabu' => 'xrengine-daily.aliyuncs.com',
            'cn-yushanfang' => 'xrengine-daily.aliyuncs.com',
            'cn-zhangbei' => 'xrengine-daily.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'xrengine-daily.aliyuncs.com',
            'cn-zhangjiakou' => 'xrengine-daily.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'xrengine-daily.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'xrengine-daily.aliyuncs.com',
            'eu-central-1' => 'xrengine-daily.aliyuncs.com',
            'eu-west-1' => 'xrengine-daily.aliyuncs.com',
            'eu-west-1-oxs' => 'xrengine-daily.aliyuncs.com',
            'me-east-1' => 'xrengine-daily.aliyuncs.com',
            'rus-west-1-pop' => 'xrengine-daily.aliyuncs.com',
            'us-east-1' => 'xrengine-daily.aliyuncs.com',
            'us-west-1' => 'xrengine-daily.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 用户签署协议.
     *
     * @param request - AcceptAgreementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptAgreementResponse
     *
     * @param AcceptAgreementRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AcceptAgreementResponse
     */
    public function acceptAgreementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcceptAgreement',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptAgreementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户签署协议.
     *
     * @param request - AcceptAgreementRequest
     *
     * @returns AcceptAgreementResponse
     *
     * @param AcceptAgreementRequest $request
     *
     * @return AcceptAgreementResponse
     */
    public function acceptAgreement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptAgreementWithOptions($request, $runtime);
    }

    /**
     * 添加白名单（云账号）.
     *
     * @param request - AddWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWhitelistResponse
     *
     * @param AddWhitelistRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddWhitelistResponse
     */
    public function addWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunUid) {
            @$body['AliyunUid'] = $request->aliyunUid;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWhitelist',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加白名单（云账号）.
     *
     * @param request - AddWhitelistRequest
     *
     * @returns AddWhitelistResponse
     *
     * @param AddWhitelistRequest $request
     *
     * @return AddWhitelistResponse
     */
    public function addWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWhitelistWithOptions($request, $runtime);
    }

    /**
     * 申请ai试衣服务
     *
     * @param request - ApplyForTryOnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyForTryOnResponse
     *
     * @param ApplyForTryOnRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyForTryOnResponse
     */
    public function applyForTryOnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyForTryOn',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyForTryOnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请ai试衣服务
     *
     * @param request - ApplyForTryOnRequest
     *
     * @returns ApplyForTryOnResponse
     *
     * @param ApplyForTryOnRequest $request
     *
     * @return ApplyForTryOnResponse
     */
    public function applyForTryOn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyForTryOnWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthUserResponse
     *
     * @param AuthUserRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AuthUserResponse
     */
    public function authUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthUser',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthUserRequest
     *
     * @returns AuthUserResponse
     *
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
     * @param tmpReq - BatchCreateSvcMapBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateSvcMapBindResponse
     *
     * @param BatchCreateSvcMapBindRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return BatchCreateSvcMapBindResponse
     */
    public function batchCreateSvcMapBindWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateSvcMapBindShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->mapIds) {
            $request->mapIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mapIds, 'MapIds', 'json');
        }

        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapIdsShrink) {
            @$body['MapIds'] = $request->mapIdsShrink;
        }

        if (null !== $request->svcId) {
            @$body['SvcId'] = $request->svcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateSvcMapBind',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateSvcMapBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchCreateSvcMapBindRequest
     *
     * @returns BatchCreateSvcMapBindResponse
     *
     * @param BatchCreateSvcMapBindRequest $request
     *
     * @return BatchCreateSvcMapBindResponse
     */
    public function batchCreateSvcMapBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateSvcMapBindWithOptions($request, $runtime);
    }

    /**
     * 取消关联.
     *
     * @param tmpReq - BatchDeleteSvcMapBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteSvcMapBindResponse
     *
     * @param BatchDeleteSvcMapBindRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return BatchDeleteSvcMapBindResponse
     */
    public function batchDeleteSvcMapBindWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchDeleteSvcMapBindShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $body = [];
        if (null !== $request->idsShrink) {
            @$body['Ids'] = $request->idsShrink;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteSvcMapBind',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteSvcMapBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消关联.
     *
     * @param request - BatchDeleteSvcMapBindRequest
     *
     * @returns BatchDeleteSvcMapBindResponse
     *
     * @param BatchDeleteSvcMapBindRequest $request
     *
     * @return BatchDeleteSvcMapBindResponse
     */
    public function batchDeleteSvcMapBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteSvcMapBindWithOptions($request, $runtime);
    }

    /**
     * 构建项目.
     *
     * @param request - BuildProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuildProjectResponse
     *
     * @param BuildProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BuildProjectResponse
     */
    public function buildProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->videoName) {
            @$query['VideoName'] = $request->videoName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BuildProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BuildProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 构建项目.
     *
     * @param request - BuildProjectRequest
     *
     * @returns BuildProjectResponse
     *
     * @param BuildProjectRequest $request
     *
     * @return BuildProjectResponse
     */
    public function buildProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buildProjectWithOptions($request, $runtime);
    }

    /**
     * 创建，同时创建空白的pai占位.
     *
     * @param request - CreateLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLocationServiceResponse
     *
     * @param CreateLocationServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLocationServiceResponse
     */
    public function createLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->note) {
            @$body['Note'] = $request->note;
        }

        if (null !== $request->qps) {
            @$body['Qps'] = $request->qps;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建，同时创建空白的pai占位.
     *
     * @param request - CreateLocationServiceRequest
     *
     * @returns CreateLocationServiceResponse
     *
     * @param CreateLocationServiceRequest $request
     *
     * @return CreateLocationServiceResponse
     */
    public function createLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLocationServiceWithOptions($request, $runtime);
    }

    /**
     * 创建项目.
     *
     * @param tmpReq - CreateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tryOnParams) {
            $request->tryOnParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tryOnParams, 'TryOnParams', 'json');
        }

        $body = [];
        if (null !== $request->autoBuild) {
            @$body['AutoBuild'] = $request->autoBuild;
        }

        if (null !== $request->dependencies) {
            @$body['Dependencies'] = $request->dependencies;
        }

        if (null !== $request->extInfo) {
            @$body['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->gender) {
            @$body['Gender'] = $request->gender;
        }

        if (null !== $request->height) {
            @$body['Height'] = $request->height;
        }

        if (null !== $request->intro) {
            @$body['Intro'] = $request->intro;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapUuid) {
            @$body['MapUuid'] = $request->mapUuid;
        }

        if (null !== $request->method) {
            @$body['Method'] = $request->method;
        }

        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->tryOnParamsShrink) {
            @$body['TryOnParams'] = $request->tryOnParamsShrink;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->weight) {
            @$body['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * 创建素材上传policy.
     *
     * @param request - CreateSourcePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSourcePolicyResponse
     *
     * @param CreateSourcePolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSourcePolicyResponse
     */
    public function createSourcePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSourcePolicy',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSourcePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建素材上传policy.
     *
     * @param request - CreateSourcePolicyRequest
     *
     * @returns CreateSourcePolicyResponse
     *
     * @param CreateSourcePolicyRequest $request
     *
     * @return CreateSourcePolicyResponse
     */
    public function createSourcePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSourcePolicyWithOptions($request, $runtime);
    }

    /**
     * 删除项目信息.
     *
     * @param request - DeleteProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除项目信息.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * 删除文件.
     *
     * @param request - DeleteSourceFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceFileResponse
     *
     * @param DeleteSourceFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSourceFileResponse
     */
    public function deleteSourceFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSourceFile',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSourceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除文件.
     *
     * @param request - DeleteSourceFileRequest
     *
     * @returns DeleteSourceFileResponse
     *
     * @param DeleteSourceFileRequest $request
     *
     * @return DeleteSourceFileResponse
     */
    public function deleteSourceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceFileWithOptions($request, $runtime);
    }

    /**
     * 1校验部署状态，一期不支持二次部署。相关关联记录里状态智能变更.
     *
     * @param request - DeployLocationTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployLocationTreeResponse
     *
     * @param DeployLocationTreeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeployLocationTreeResponse
     */
    public function deployLocationTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->forceUpdate) {
            @$body['ForceUpdate'] = $request->forceUpdate;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->svcId) {
            @$body['SvcId'] = $request->svcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployLocationTree',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployLocationTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1校验部署状态，一期不支持二次部署。相关关联记录里状态智能变更.
     *
     * @param request - DeployLocationTreeRequest
     *
     * @returns DeployLocationTreeResponse
     *
     * @param DeployLocationTreeRequest $request
     *
     * @return DeployLocationTreeResponse
     */
    public function deployLocationTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployLocationTreeWithOptions($request, $runtime);
    }

    /**
     * 查出绑定记录.
     *
     * @param request - FindSvcMapBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindSvcMapBindResponse
     *
     * @param FindSvcMapBindRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FindSvcMapBindResponse
     */
    public function findSvcMapBindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->sort) {
            @$body['Sort'] = $request->sort;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->svcId) {
            @$body['SvcId'] = $request->svcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FindSvcMapBind',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindSvcMapBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查出绑定记录.
     *
     * @param request - FindSvcMapBindRequest
     *
     * @returns FindSvcMapBindResponse
     *
     * @param FindSvcMapBindRequest $request
     *
     * @return FindSvcMapBindResponse
     */
    public function findSvcMapBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findSvcMapBindWithOptions($request, $runtime);
    }

    /**
     * 获取用户申请状态
     *
     * @param request - GetApplyStatusForTryOnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplyStatusForTryOnResponse
     *
     * @param GetApplyStatusForTryOnRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetApplyStatusForTryOnResponse
     */
    public function getApplyStatusForTryOnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplyStatusForTryOn',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplyStatusForTryOnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户申请状态
     *
     * @param request - GetApplyStatusForTryOnRequest
     *
     * @returns GetApplyStatusForTryOnResponse
     *
     * @param GetApplyStatusForTryOnRequest $request
     *
     * @return GetApplyStatusForTryOnResponse
     */
    public function getApplyStatusForTryOn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplyStatusForTryOnWithOptions($request, $runtime);
    }

    /**
     * @param request - GetArEditCommonMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArEditCommonMaterialResponse
     *
     * @param GetArEditCommonMaterialRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetArEditCommonMaterialResponse
     */
    public function getArEditCommonMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetArEditCommonMaterial',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetArEditCommonMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetArEditCommonMaterialRequest
     *
     * @returns GetArEditCommonMaterialResponse
     *
     * @param GetArEditCommonMaterialRequest $request
     *
     * @return GetArEditCommonMaterialResponse
     */
    public function getArEditCommonMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArEditCommonMaterialWithOptions($request, $runtime);
    }

    /**
     * @param request - GetArEditStsAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArEditStsAuthResponse
     *
     * @param GetArEditStsAuthRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetArEditStsAuthResponse
     */
    public function getArEditStsAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapId) {
            @$body['MapId'] = $request->mapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetArEditStsAuth',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetArEditStsAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetArEditStsAuthRequest
     *
     * @returns GetArEditStsAuthResponse
     *
     * @param GetArEditStsAuthRequest $request
     *
     * @return GetArEditStsAuthResponse
     */
    public function getArEditStsAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArEditStsAuthWithOptions($request, $runtime);
    }

    /**
     * @param request - GetArEditUgcMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArEditUgcMaterialResponse
     *
     * @param GetArEditUgcMaterialRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetArEditUgcMaterialResponse
     */
    public function getArEditUgcMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapId) {
            @$body['MapId'] = $request->mapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetArEditUgcMaterial',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetArEditUgcMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetArEditUgcMaterialRequest
     *
     * @returns GetArEditUgcMaterialResponse
     *
     * @param GetArEditUgcMaterialRequest $request
     *
     * @return GetArEditUgcMaterialResponse
     */
    public function getArEditUgcMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArEditUgcMaterialWithOptions($request, $runtime);
    }

    /**
     * 获取项目模型详情.
     *
     * @param request - GetProjectDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectDatasetResponse
     *
     * @param GetProjectDatasetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProjectDatasetResponse
     */
    public function getProjectDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProjectDataset',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProjectDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目模型详情.
     *
     * @param request - GetProjectDatasetRequest
     *
     * @returns GetProjectDatasetResponse
     *
     * @param GetProjectDatasetRequest $request
     *
     * @return GetProjectDatasetResponse
     */
    public function getProjectDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectDatasetWithOptions($request, $runtime);
    }

    /**
     * 调用同步算法.
     *
     * @param tmpReq - InvokeSyncAlgorithmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeSyncAlgorithmResponse
     *
     * @param InvokeSyncAlgorithmRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return InvokeSyncAlgorithmResponse
     */
    public function invokeSyncAlgorithmWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InvokeSyncAlgorithmShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeSyncAlgorithm',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvokeSyncAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用同步算法.
     *
     * @param request - InvokeSyncAlgorithmRequest
     *
     * @returns InvokeSyncAlgorithmResponse
     *
     * @param InvokeSyncAlgorithmRequest $request
     *
     * @return InvokeSyncAlgorithmResponse
     */
    public function invokeSyncAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeSyncAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAreaMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAreaMapResponse
     *
     * @param ListAreaMapRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAreaMapResponse
     */
    public function listAreaMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->sort) {
            @$body['Sort'] = $request->sort;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAreaMap',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAreaMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAreaMapRequest
     *
     * @returns ListAreaMapResponse
     *
     * @param ListAreaMapRequest $request
     *
     * @return ListAreaMapResponse
     */
    public function listAreaMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAreaMapWithOptions($request, $runtime);
    }

    /**
     * 列举服饰类型.
     *
     * @param request - ListClothTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClothTypesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListClothTypesResponse
     */
    public function listClothTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListClothTypes',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClothTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举服饰类型.
     *
     * @returns ListClothTypesResponse
     *
     * @return ListClothTypesResponse
     */
    public function listClothTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClothTypesWithOptions($runtime);
    }

    /**
     * 列举服饰.
     *
     * @param tmpReq - ListClothesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClothesResponse
     *
     * @param ListClothesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListClothesResponse
     */
    public function listClothesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListClothesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }

        $query = [];
        if (null !== $request->categoriesShrink) {
            @$query['Categories'] = $request->categoriesShrink;
        }

        if (null !== $request->clothSize) {
            @$query['ClothSize'] = $request->clothSize;
        }

        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClothes',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClothesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举服饰.
     *
     * @param request - ListClothesRequest
     *
     * @returns ListClothesResponse
     *
     * @param ListClothesRequest $request
     *
     * @return ListClothesResponse
     */
    public function listClothes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClothesWithOptions($request, $runtime);
    }

    /**
     * hdr文件目录列表.
     *
     * @param request - ListHdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHdrResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListHdrResponse
     */
    public function listHdrWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListHdr',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * hdr文件目录列表.
     *
     * @returns ListHdrResponse
     *
     * @return ListHdrResponse
     */
    public function listHdr()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHdrWithOptions($runtime);
    }

    /**
     * @param request - ListLocationPaiImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLocationPaiImageResponse
     *
     * @param ListLocationPaiImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListLocationPaiImageResponse
     */
    public function listLocationPaiImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->sort) {
            @$body['Sort'] = $request->sort;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLocationPaiImage',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLocationPaiImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListLocationPaiImageRequest
     *
     * @returns ListLocationPaiImageResponse
     *
     * @param ListLocationPaiImageRequest $request
     *
     * @return ListLocationPaiImageResponse
     */
    public function listLocationPaiImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLocationPaiImageWithOptions($request, $runtime);
    }

    /**
     * @param request - ListLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLocationServiceResponse
     *
     * @param ListLocationServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLocationServiceResponse
     */
    public function listLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->sort) {
            @$body['Sort'] = $request->sort;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListLocationServiceRequest
     *
     * @returns ListLocationServiceResponse
     *
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
     * 列出当前用户项目列表.
     *
     * @param request - ListProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizUsage) {
            @$body['BizUsage'] = $request->bizUsage;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->excludedBizUsage) {
            @$body['ExcludedBizUsage'] = $request->excludedBizUsage;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->withSource) {
            @$body['WithSource'] = $request->withSource;
        }

        if (null !== $request->withUser) {
            @$body['WithUser'] = $request->withUser;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出当前用户项目列表.
     *
     * @param request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectWithOptions($request, $runtime);
    }

    /**
     * 根据项目Id查出依赖当前项目的项目.
     *
     * @param request - ListProjectsByDependencyIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsByDependencyIdResponse
     *
     * @param ListProjectsByDependencyIdRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProjectsByDependencyIdResponse
     */
    public function listProjectsByDependencyIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dependencyProjectId) {
            @$body['DependencyProjectId'] = $request->dependencyProjectId;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapUuid) {
            @$body['MapUuid'] = $request->mapUuid;
        }

        if (null !== $request->withDataset) {
            @$body['WithDataset'] = $request->withDataset;
        }

        if (null !== $request->withSource) {
            @$body['WithSource'] = $request->withSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProjectsByDependencyId',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectsByDependencyIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据项目Id查出依赖当前项目的项目.
     *
     * @param request - ListProjectsByDependencyIdRequest
     *
     * @returns ListProjectsByDependencyIdResponse
     *
     * @param ListProjectsByDependencyIdRequest $request
     *
     * @return ListProjectsByDependencyIdResponse
     */
    public function listProjectsByDependencyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsByDependencyIdWithOptions($request, $runtime);
    }

    /**
     * 列举项目中上传的文件列表.
     *
     * @param request - ListSourceFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSourceFileResponse
     *
     * @param ListSourceFileRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSourceFileResponse
     */
    public function listSourceFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSourceFile',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSourceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举项目中上传的文件列表.
     *
     * @param request - ListSourceFileRequest
     *
     * @returns ListSourceFileResponse
     *
     * @param ListSourceFileRequest $request
     *
     * @return ListSourceFileResponse
     */
    public function listSourceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSourceFileWithOptions($request, $runtime);
    }

    /**
     * 列举流水线
     *
     * @param request - ListWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListWorkflowResponse
     */
    public function listWorkflowWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListWorkflow',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举流水线
     *
     * @returns ListWorkflowResponse
     *
     * @return ListWorkflowResponse
     */
    public function listWorkflow()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowWithOptions($runtime);
    }

    /**
     * @param request - LoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoginResponse
     *
     * @param LoginRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return LoginResponse
     */
    public function loginWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->empId) {
            @$body['EmpId'] = $request->empId;
        }

        if (null !== $request->empName) {
            @$body['EmpName'] = $request->empName;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Login',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - LoginRequest
     *
     * @returns LoginResponse
     *
     * @param LoginRequest $request
     *
     * @return LoginResponse
     */
    public function login($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginWithOptions($request, $runtime);
    }

    /**
     * 无线端APP登陆.
     *
     * @param request - LoginAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoginAppResponse
     *
     * @param LoginAppRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return LoginAppResponse
     */
    public function loginAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->empId) {
            @$body['EmpId'] = $request->empId;
        }

        if (null !== $request->empName) {
            @$body['EmpName'] = $request->empName;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoginApp',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoginAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 无线端APP登陆.
     *
     * @param request - LoginAppRequest
     *
     * @returns LoginAppResponse
     *
     * @param LoginAppRequest $request
     *
     * @return LoginAppResponse
     */
    public function loginApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginAppWithOptions($request, $runtime);
    }

    /**
     * @param request - PublishArEditProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishArEditProjectResponse
     *
     * @param PublishArEditProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PublishArEditProjectResponse
     */
    public function publishArEditProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapId) {
            @$body['MapId'] = $request->mapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishArEditProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishArEditProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PublishArEditProjectRequest
     *
     * @returns PublishArEditProjectResponse
     *
     * @param PublishArEditProjectRequest $request
     *
     * @return PublishArEditProjectResponse
     */
    public function publishArEditProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishArEditProjectWithOptions($request, $runtime);
    }

    /**
     * 项目发布.
     *
     * @param request - PublishProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishProjectResponse
     *
     * @param PublishProjectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishProjectResponse
     */
    public function publishProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 项目发布.
     *
     * @param request - PublishProjectRequest
     *
     * @returns PublishProjectResponse
     *
     * @param PublishProjectRequest $request
     *
     * @return PublishProjectResponse
     */
    public function publishProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAreaMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAreaMapResponse
     *
     * @param QueryAreaMapRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAreaMapResponse
     */
    public function queryAreaMapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAreaMap',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAreaMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAreaMapRequest
     *
     * @returns QueryAreaMapResponse
     *
     * @param QueryAreaMapRequest $request
     *
     * @return QueryAreaMapResponse
     */
    public function queryAreaMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAreaMapWithOptions($request, $runtime);
    }

    /**
     * 查找项目构建失败时的信息.
     *
     * @param request - QueryBuildBreakpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBuildBreakpointResponse
     *
     * @param QueryBuildBreakpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryBuildBreakpointResponse
     */
    public function queryBuildBreakpointWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryBuildBreakpoint',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBuildBreakpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查找项目构建失败时的信息.
     *
     * @param request - QueryBuildBreakpointRequest
     *
     * @returns QueryBuildBreakpointResponse
     *
     * @param QueryBuildBreakpointRequest $request
     *
     * @return QueryBuildBreakpointResponse
     */
    public function queryBuildBreakpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuildBreakpointWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLocationServiceResponse
     *
     * @param QueryLocationServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryLocationServiceResponse
     */
    public function queryLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryLocationServiceRequest
     *
     * @returns QueryLocationServiceResponse
     *
     * @param QueryLocationServiceRequest $request
     *
     * @return QueryLocationServiceResponse
     */
    public function queryLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocationServiceWithOptions($request, $runtime);
    }

    /**
     * 查询项目构建详情.
     *
     * @param request - QueryProjectBuildDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectBuildDetailResponse
     *
     * @param QueryProjectBuildDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryProjectBuildDetailResponse
     */
    public function queryProjectBuildDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProjectBuildDetail',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProjectBuildDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询项目构建详情.
     *
     * @param request - QueryProjectBuildDetailRequest
     *
     * @returns QueryProjectBuildDetailResponse
     *
     * @param QueryProjectBuildDetailRequest $request
     *
     * @return QueryProjectBuildDetailResponse
     */
    public function queryProjectBuildDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectBuildDetailWithOptions($request, $runtime);
    }

    /**
     * 查询项目详情.
     *
     * @param request - QueryProjectDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectDetailResponse
     *
     * @param QueryProjectDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryProjectDetailResponse
     */
    public function queryProjectDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProjectDetail',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询项目详情.
     *
     * @param request - QueryProjectDetailRequest
     *
     * @returns QueryProjectDetailResponse
     *
     * @param QueryProjectDetailRequest $request
     *
     * @return QueryProjectDetailResponse
     */
    public function queryProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectDetailWithOptions($request, $runtime);
    }

    /**
     * 该注册接口只用于oneconsole页面的注册.
     *
     * @param request - RegisterUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterUserResponse
     *
     * @param RegisterUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterUserResponse
     */
    public function registerUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RegisterUser',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 该注册接口只用于oneconsole页面的注册.
     *
     * @param request - RegisterUserRequest
     *
     * @returns RegisterUserResponse
     *
     * @param RegisterUserRequest $request
     *
     * @return RegisterUserResponse
     */
    public function registerUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerUserWithOptions($request, $runtime);
    }

    /**
     * @param request - ResumeLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeLocationServiceResponse
     *
     * @param ResumeLocationServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResumeLocationServiceResponse
     */
    public function resumeLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResumeLocationServiceRequest
     *
     * @returns ResumeLocationServiceResponse
     *
     * @param ResumeLocationServiceRequest $request
     *
     * @return ResumeLocationServiceResponse
     */
    public function resumeLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeLocationServiceWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveArEditProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveArEditProjectResponse
     *
     * @param SaveArEditProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveArEditProjectResponse
     */
    public function saveArEditProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->mapId) {
            @$body['MapId'] = $request->mapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveArEditProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveArEditProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveArEditProjectRequest
     *
     * @returns SaveArEditProjectResponse
     *
     * @param SaveArEditProjectRequest $request
     *
     * @return SaveArEditProjectResponse
     */
    public function saveArEditProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveArEditProjectWithOptions($request, $runtime);
    }

    /**
     * 保存素材.
     *
     * @param request - SaveSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSourceResponse
     *
     * @param SaveSourceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SaveSourceResponse
     */
    public function saveSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeStatus) {
            @$query['ChangeStatus'] = $request->changeStatus;
        }

        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->needCheck) {
            @$query['NeedCheck'] = $request->needCheck;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSource',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存素材.
     *
     * @param request - SaveSourceRequest
     *
     * @returns SaveSourceResponse
     *
     * @param SaveSourceRequest $request
     *
     * @return SaveSourceResponse
     */
    public function saveSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSourceWithOptions($request, $runtime);
    }

    /**
     * @param request - SuspendLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendLocationServiceResponse
     *
     * @param SuspendLocationServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SuspendLocationServiceResponse
     */
    public function suspendLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SuspendLocationServiceRequest
     *
     * @returns SuspendLocationServiceResponse
     *
     * @param SuspendLocationServiceRequest $request
     *
     * @return SuspendLocationServiceResponse
     */
    public function suspendLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendLocationServiceWithOptions($request, $runtime);
    }

    /**
     * 项目(发布状态改回隐私状态).
     *
     * @param request - UnPublishProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnPublishProjectResponse
     *
     * @param UnPublishProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnPublishProjectResponse
     */
    public function unPublishProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnPublishProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnPublishProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 项目(发布状态改回隐私状态).
     *
     * @param request - UnPublishProjectRequest
     *
     * @returns UnPublishProjectResponse
     *
     * @param UnPublishProjectRequest $request
     *
     * @return UnPublishProjectResponse
     */
    public function unPublishProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unPublishProjectWithOptions($request, $runtime);
    }

    /**
     * 如果不包含treeConfig则只是简单更新.
     *
     * @param request - UpdateLocationServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLocationServiceResponse
     *
     * @param UpdateLocationServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateLocationServiceResponse
     */
    public function updateLocationServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->note) {
            @$body['Note'] = $request->note;
        }

        if (null !== $request->qps) {
            @$body['Qps'] = $request->qps;
        }

        if (null !== $request->svcName) {
            @$body['SvcName'] = $request->svcName;
        }

        if (null !== $request->svcState) {
            @$body['SvcState'] = $request->svcState;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLocationService',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 如果不包含treeConfig则只是简单更新.
     *
     * @param request - UpdateLocationServiceRequest
     *
     * @returns UpdateLocationServiceResponse
     *
     * @param UpdateLocationServiceRequest $request
     *
     * @return UpdateLocationServiceResponse
     */
    public function updateLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLocationServiceWithOptions($request, $runtime);
    }

    /**
     * 暂存接口比较复杂，单独拎出来.
     *
     * @param request - UpdateLocationTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLocationTreeResponse
     *
     * @param UpdateLocationTreeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLocationTreeResponse
     */
    public function updateLocationTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jwtToken) {
            @$body['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->treeConfig) {
            @$body['TreeConfig'] = $request->treeConfig;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLocationTree',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLocationTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂存接口比较复杂，单独拎出来.
     *
     * @param request - UpdateLocationTreeRequest
     *
     * @returns UpdateLocationTreeResponse
     *
     * @param UpdateLocationTreeRequest $request
     *
     * @return UpdateLocationTreeResponse
     */
    public function updateLocationTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLocationTreeWithOptions($request, $runtime);
    }

    /**
     * 更新项目信息.
     *
     * @param tmpReq - UpdateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }

        $query = [];
        if (null !== $request->autoBuild) {
            @$query['AutoBuild'] = $request->autoBuild;
        }

        if (null !== $request->extShrink) {
            @$query['Ext'] = $request->extShrink;
        }

        if (null !== $request->intro) {
            @$query['Intro'] = $request->intro;
        }

        if (null !== $request->jwtToken) {
            @$query['JwtToken'] = $request->jwtToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2022-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新项目信息.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }
}

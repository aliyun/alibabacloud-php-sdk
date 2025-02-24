<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAccessPageSessionRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAccessPageSessionResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 更新访问管理.
     *
     * @param request - AccessPageSetAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AccessPageSetAclResponse
     *
     * @param AccessPageSetAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AccessPageSetAclResponse
     */
    public function accessPageSetAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->accessPageId) {
            @$query['AccessPageId'] = $request->accessPageId;
        }

        if (null !== $request->accessPageName) {
            @$query['AccessPageName'] = $request->accessPageName;
        }

        if (null !== $request->effectTime) {
            @$query['EffectTime'] = $request->effectTime;
        }

        if (null !== $request->unit) {
            @$query['Unit'] = $request->unit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccessPageSetAcl',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AccessPageSetAclResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AccessPageSetAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新访问管理.
     *
     * @param request - AccessPageSetAclRequest
     * @returns AccessPageSetAclResponse
     *
     * @param AccessPageSetAclRequest $request
     *
     * @return AccessPageSetAclResponse
     */
    public function accessPageSetAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessPageSetAclWithOptions($request, $runtime);
    }

    /**
     * Sets the execution time of an over-the-air (OTA) update task.
     *
     * @param request - ApproveOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ApproveOtaTaskResponse
     *
     * @param ApproveOtaTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->otaType) {
            @$body['OtaType'] = $request->otaType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApproveOtaTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the execution time of an over-the-air (OTA) update task.
     *
     * @param request - ApproveOtaTaskRequest
     * @returns ApproveOtaTaskResponse
     *
     * @param ApproveOtaTaskRequest $request
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOtaTaskWithOptions($request, $runtime);
    }

    /**
     * 会话包收费查询.
     *
     * @param request - AskSessionPackagePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AskSessionPackagePriceResponse
     *
     * @param AskSessionPackagePriceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AskSessionPackagePriceResponse
     */
    public function askSessionPackagePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->maxSessions) {
            @$query['MaxSessions'] = $request->maxSessions;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sessionPackageType) {
            @$query['SessionPackageType'] = $request->sessionPackageType;
        }

        if (null !== $request->sessionSpec) {
            @$query['SessionSpec'] = $request->sessionSpec;
        }

        if (null !== $request->sessionType) {
            @$query['SessionType'] = $request->sessionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AskSessionPackagePrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AskSessionPackagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AskSessionPackagePriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 会话包收费查询.
     *
     * @param request - AskSessionPackagePriceRequest
     * @returns AskSessionPackagePriceResponse
     *
     * @param AskSessionPackagePriceRequest $request
     *
     * @return AskSessionPackagePriceResponse
     */
    public function askSessionPackagePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->askSessionPackagePriceWithOptions($request, $runtime);
    }

    /**
     * 授权用户.
     *
     * @param tmpReq - AuthorizeInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuthorizeInstanceGroupResponse
     *
     * @param AuthorizeInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userMeta) {
            $request->userMetaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userMeta, 'UserMeta', 'json');
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->authorizeUserIds) {
            @$bodyFlat['AuthorizeUserIds'] = $request->authorizeUserIds;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->unAuthorizeUserIds) {
            @$bodyFlat['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }

        if (null !== $request->userMetaShrink) {
            @$body['UserMeta'] = $request->userMetaShrink;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 授权用户.
     *
     * @param request - AuthorizeInstanceGroupRequest
     * @returns AuthorizeInstanceGroupResponse
     *
     * @param AuthorizeInstanceGroupRequest $request
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * 配置会话包.
     *
     * @param request - BuySessionPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BuySessionPackageResponse
     *
     * @param BuySessionPackageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BuySessionPackageResponse
     */
    public function buySessionPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->maxSessions) {
            @$query['MaxSessions'] = $request->maxSessions;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sessionPackageName) {
            @$query['SessionPackageName'] = $request->sessionPackageName;
        }

        if (null !== $request->sessionPackageType) {
            @$query['SessionPackageType'] = $request->sessionPackageType;
        }

        if (null !== $request->sessionSpec) {
            @$query['SessionSpec'] = $request->sessionSpec;
        }

        if (null !== $request->sessionType) {
            @$query['SessionType'] = $request->sessionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BuySessionPackage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BuySessionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BuySessionPackageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 配置会话包.
     *
     * @param request - BuySessionPackageRequest
     * @returns BuySessionPackageResponse
     *
     * @param BuySessionPackageRequest $request
     *
     * @return BuySessionPackageResponse
     */
    public function buySessionPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buySessionPackageWithOptions($request, $runtime);
    }

    /**
     * 创建访问页面.
     *
     * @param request - CreateAccessPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAccessPageResponse
     *
     * @param CreateAccessPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAccessPageResponse
     */
    public function createAccessPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPageName) {
            @$query['AccessPageName'] = $request->accessPageName;
        }

        if (null !== $request->cloudEnvId) {
            @$query['CloudEnvId'] = $request->cloudEnvId;
        }

        if (null !== $request->effectTime) {
            @$query['EffectTime'] = $request->effectTime;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->unit) {
            @$query['Unit'] = $request->unit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessPage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccessPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建访问页面.
     *
     * @param request - CreateAccessPageRequest
     * @returns CreateAccessPageResponse
     *
     * @param CreateAccessPageRequest $request
     *
     * @return CreateAccessPageResponse
     */
    public function createAccessPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessPageWithOptions($request, $runtime);
    }

    /**
     * 创建云应用交付组.
     *
     * @param tmpReq - CreateAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAppInstanceGroupResponse
     *
     * @param CreateAppInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->runtimePolicy) {
            $request->runtimePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runtimePolicy, 'RuntimePolicy', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        if (null !== $tmpReq->userDefinePolicy) {
            $request->userDefinePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userDefinePolicy, 'UserDefinePolicy', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        if (null !== $tmpReq->videoPolicy) {
            $request->videoPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }

        $query = [];
        if (null !== $request->userDefinePolicyShrink) {
            @$query['UserDefinePolicy'] = $request->userDefinePolicyShrink;
        }

        $body = [];
        if (null !== $request->appCenterImageId) {
            @$body['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appPackageType) {
            @$body['AppPackageType'] = $request->appPackageType;
        }

        if (null !== $request->appPolicyId) {
            @$body['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeResourceMode) {
            @$body['ChargeResourceMode'] = $request->chargeResourceMode;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->preOpenAppId) {
            @$body['PreOpenAppId'] = $request->preOpenAppId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->runtimePolicyShrink) {
            @$body['RuntimePolicy'] = $request->runtimePolicyShrink;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->sessionTimeout) {
            @$body['SessionTimeout'] = $request->sessionTimeout;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        if (null !== $request->videoPolicyShrink) {
            @$body['VideoPolicy'] = $request->videoPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建云应用交付组.
     *
     * @param request - CreateAppInstanceGroupRequest
     * @returns CreateAppInstanceGroupResponse
     *
     * @param CreateAppInstanceGroupRequest $request
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a new image by debugging the delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateImageFromAppInstanceGroupResponse
     *
     * @param CreateImageFromAppInstanceGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appCenterImageName) {
            @$body['AppCenterImageName'] = $request->appCenterImageName;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateImageFromAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateImageFromAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateImageFromAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a new image by debugging the delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     * @returns CreateImageFromAppInstanceGroupResponse
     *
     * @param CreateImageFromAppInstanceGroupRequest $request
     *
     * @return CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageFromAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * 删除访问页面.
     *
     * @param request - DeleteAccessPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAccessPageResponse
     *
     * @param DeleteAccessPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAccessPageResponse
     */
    public function deleteAccessPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPageId) {
            @$query['AccessPageId'] = $request->accessPageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessPage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccessPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除访问页面.
     *
     * @param request - DeleteAccessPageRequest
     * @returns DeleteAccessPageResponse
     *
     * @param DeleteAccessPageRequest $request
     *
     * @return DeleteAccessPageResponse
     */
    public function deleteAccessPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessPageWithOptions($request, $runtime);
    }

    /**
     * Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *
     * @remarks
     * >  You cannot call this operation to delete a subscription delivery group.
     *
     * @param request - DeleteAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAppInstanceGroupResponse
     *
     * @param DeleteAppInstanceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *
     * @remarks
     * >  You cannot call this operation to delete a subscription delivery group.
     *
     * @param request - DeleteAppInstanceGroupRequest
     * @returns DeleteAppInstanceGroupResponse
     *
     * @param DeleteAppInstanceGroupRequest $request
     *
     * @return DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an application instance.
     *
     * @remarks
     * Only application instances that are in the Initializing or Idle state can be deleted. The operation can be called only by specific customers.
     *
     * @param request - DeleteAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAppInstancesResponse
     *
     * @param DeleteAppInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAppInstancesResponse
     */
    public function deleteAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceIds) {
            @$body['AppInstanceIds'] = $request->appInstanceIds;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppInstances',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an application instance.
     *
     * @remarks
     * Only application instances that are in the Initializing or Idle state can be deleted. The operation can be called only by specific customers.
     *
     * @param request - DeleteAppInstancesRequest
     * @returns DeleteAppInstancesResponse
     *
     * @param DeleteAppInstancesRequest $request
     *
     * @return DeleteAppInstancesResponse
     */
    public function deleteAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstancesWithOptions($request, $runtime);
    }

    /**
     * 访客进入访问页面的匿名api.
     *
     * @param request - GetAccessPageSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAccessPageSessionResponse
     *
     * @param GetAccessPageSessionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAccessPageSessionResponse
     */
    public function getAccessPageSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPageId) {
            @$query['AccessPageId'] = $request->accessPageId;
        }

        if (null !== $request->accessPageToken) {
            @$query['AccessPageToken'] = $request->accessPageToken;
        }

        if (null !== $request->externalUserId) {
            @$query['ExternalUserId'] = $request->externalUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessPageSession',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAccessPageSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAccessPageSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 访客进入访问页面的匿名api.
     *
     * @param request - GetAccessPageSessionRequest
     * @returns GetAccessPageSessionResponse
     *
     * @param GetAccessPageSessionRequest $request
     *
     * @return GetAccessPageSessionResponse
     */
    public function getAccessPageSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessPageSessionWithOptions($request, $runtime);
    }

    /**
     * 获取交付组详情.
     *
     * @param request - GetAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAppInstanceGroupResponse
     *
     * @param GetAppInstanceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取交付组详情.
     *
     * @param request - GetAppInstanceGroupRequest
     * @returns GetAppInstanceGroupResponse
     *
     * @param GetAppInstanceGroupRequest $request
     *
     * @return GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the credential that is used to connect to App Streaming.
     *
     * @remarks
     * You must call this operation at least twice to obtain a connection credential.
     * The first time you call this operation, the system assigns an application instance to the specified convenience account and then starts the application. In this case, the ID of the started task, which is indicated by `TaskID`, is returned.
     * In subsequent calls, you must configure `TaskID` to query whether the task is completed. If the value of `TaskStatus` in the response is `Finished`, the connection credential, which is indicated by `Ticket`, is returned.
     *
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupIdList) {
            @$body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        if (null !== $request->appStartParam) {
            @$body['AppStartParam'] = $request->appStartParam;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionTicket',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetConnectionTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the credential that is used to connect to App Streaming.
     *
     * @remarks
     * You must call this operation at least twice to obtain a connection credential.
     * The first time you call this operation, the system assigns an application instance to the specified convenience account and then starts the application. In this case, the ID of the started task, which is indicated by `TaskID`, is returned.
     * In subsequent calls, you must configure `TaskID` to query whether the task is completed. If the value of `TaskStatus` in the response is `Finished`, the connection credential, which is indicated by `Ticket`, is returned.
     *
     * @param request - GetConnectionTicketRequest
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * Queries information that is used to debug an application instance.
     *
     * @param request - GetDebugAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDebugAppInstanceResponse
     *
     * @param GetDebugAppInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDebugAppInstanceResponse
     */
    public function getDebugAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDebugAppInstance',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDebugAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDebugAppInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information that is used to debug an application instance.
     *
     * @param request - GetDebugAppInstanceRequest
     * @returns GetDebugAppInstanceResponse
     *
     * @param GetDebugAppInstanceRequest $request
     *
     * @return GetDebugAppInstanceResponse
     */
    public function getDebugAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDebugAppInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an over-the-air (OTA) update task, including the available versions and version description.
     *
     * @param request - GetOtaTaskByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOtaTaskByTaskIdResponse
     *
     * @param GetOtaTaskByTaskIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOtaTaskByTaskId',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOtaTaskByTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an over-the-air (OTA) update task, including the available versions and version description.
     *
     * @param request - GetOtaTaskByTaskIdRequest
     * @returns GetOtaTaskByTaskIdResponse
     *
     * @param GetOtaTaskByTaskIdRequest $request
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOtaTaskByTaskIdWithOptions($request, $runtime);
    }

    /**
     * Queries resource prices.
     *
     * @param request - GetResourcePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourcePriceResponse
     *
     * @param GetResourcePriceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->appInstanceType) {
            @$query['AppInstanceType'] = $request->appInstanceType;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourcePriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries resource prices.
     *
     * @param request - GetResourcePriceRequest
     * @returns GetResourcePriceResponse
     *
     * @param GetResourcePriceRequest $request
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePriceWithOptions($request, $runtime);
    }

    /**
     * Queries the renewal prices of App Streaming resources.
     *
     * @param request - GetResourceRenewPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceRenewPriceResponse
     *
     * @param GetResourceRenewPriceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceRenewPriceResponse
     */
    public function getResourceRenewPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceRenewPrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceRenewPriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the renewal prices of App Streaming resources.
     *
     * @param request - GetResourceRenewPriceRequest
     * @returns GetResourceRenewPriceResponse
     *
     * @param GetResourceRenewPriceRequest $request
     *
     * @return GetResourceRenewPriceResponse
     */
    public function getResourceRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceRenewPriceWithOptions($request, $runtime);
    }

    /**
     * 访问页面分页查询.
     *
     * @param request - ListAccessPagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAccessPagesResponse
     *
     * @param ListAccessPagesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAccessPagesResponse
     */
    public function listAccessPagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPageId) {
            @$query['AccessPageId'] = $request->accessPageId;
        }

        if (null !== $request->accessPageName) {
            @$query['AccessPageName'] = $request->accessPageName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessPages',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAccessPagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAccessPagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 访问页面分页查询.
     *
     * @param request - ListAccessPagesRequest
     * @returns ListAccessPagesResponse
     *
     * @param ListAccessPagesRequest $request
     *
     * @return ListAccessPagesResponse
     */
    public function listAccessPages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessPagesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of multiple delivery groups that meet the query conditions.
     *
     * @param request - ListAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAppInstanceGroupResponse
     *
     * @param ListAppInstanceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCenterImageId) {
            @$query['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of multiple delivery groups that meet the query conditions.
     *
     * @param request - ListAppInstanceGroupRequest
     * @returns ListAppInstanceGroupResponse
     *
     * @param ListAppInstanceGroupRequest $request
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of application instances in a delivery group, including the IDs, status, creation time, update time, session status, and public IP addresses associated with the primary NICs of the instances.
     *
     * @param request - ListAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$query['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->includeDeleted) {
            @$query['IncludeDeleted'] = $request->includeDeleted;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $body = [];
        if (null !== $request->appInstanceIdList) {
            @$body['AppInstanceIdList'] = $request->appInstanceIdList;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstances',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of application instances in a delivery group, including the IDs, status, creation time, update time, session status, and public IP addresses associated with the primary NICs of the instances.
     *
     * @param request - ListAppInstancesRequest
     * @returns ListAppInstancesResponse
     *
     * @param ListAppInstancesRequest $request
     *
     * @return ListAppInstancesResponse
     */
    public function listAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstancesWithOptions($request, $runtime);
    }

    /**
     * 查询绑定信息，支持分页.
     *
     * @param request - ListBindInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListBindInfoResponse
     *
     * @param ListBindInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindInfoResponse
     */
    public function listBindInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appIdList) {
            @$body['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->appInstanceGroupIdList) {
            @$body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }

        if (null !== $request->appInstanceIdList) {
            @$body['AppInstanceIdList'] = $request->appInstanceIdList;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userIdList) {
            @$body['UserIdList'] = $request->userIdList;
        }

        if (null !== $request->wyIdList) {
            @$body['WyIdList'] = $request->wyIdList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBindInfo',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListBindInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBindInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询绑定信息，支持分页.
     *
     * @param request - ListBindInfoRequest
     * @returns ListBindInfoResponse
     *
     * @param ListBindInfoRequest $request
     *
     * @return ListBindInfoResponse
     */
    public function listBindInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the resource types that are available for purchase when you create a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNodeInstanceTypeResponse
     *
     * @param ListNodeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->gpu) {
            @$query['Gpu'] = $request->gpu;
        }

        if (null !== $request->gpuMemory) {
            @$query['GpuMemory'] = $request->gpuMemory;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->nodeInstanceType) {
            @$query['NodeInstanceType'] = $request->nodeInstanceType;
        }

        if (null !== $request->nodeInstanceTypeFamily) {
            @$query['NodeInstanceTypeFamily'] = $request->nodeInstanceTypeFamily;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeInstanceType',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodeInstanceTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the resource types that are available for purchase when you create a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     * @returns ListNodeInstanceTypeResponse
     *
     * @param ListNodeInstanceTypeRequest $request
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about over-the-air (OTA) update tasks.
     *
     * @param request - ListOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOtaTaskResponse
     *
     * @param ListOtaTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->otaType) {
            @$body['OtaType'] = $request->otaType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOtaTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about over-the-air (OTA) update tasks.
     *
     * @param request - ListOtaTaskRequest
     * @returns ListOtaTaskResponse
     *
     * @param ListOtaTaskRequest $request
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOtaTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that are supported by App Streaming.
     *
     * @remarks
     * >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizSource) {
            @$query['BizSource'] = $request->bizSource;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the regions that are supported by App Streaming.
     *
     * @remarks
     * >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * 项目的会话包列表.
     *
     * @param request - ListSessionPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSessionPackagesResponse
     *
     * @param ListSessionPackagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSessionPackagesResponse
     */
    public function listSessionPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sessionPackageId) {
            @$query['SessionPackageId'] = $request->sessionPackageId;
        }

        if (null !== $request->sessionPackageName) {
            @$query['SessionPackageName'] = $request->sessionPackageName;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->stateList) {
            @$query['StateList'] = $request->stateList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSessionPackages',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSessionPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSessionPackagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 项目的会话包列表.
     *
     * @param request - ListSessionPackagesRequest
     * @returns ListSessionPackagesResponse
     *
     * @param ListSessionPackagesRequest $request
     *
     * @return ListSessionPackagesResponse
     */
    public function listSessionPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSessionPackagesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of the administrator account, such as whether the resource expiration reminder feature is enabled.
     *
     * @param request - ListTenantConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTenantConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListTenantConfigResponse
     */
    public function listTenantConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListTenantConfig',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTenantConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the administrator account, such as whether the resource expiration reminder feature is enabled.
     *
     * @returns ListTenantConfigResponse
     *
     * @return ListTenantConfigResponse
     */
    public function listTenantConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantConfigWithOptions($runtime);
    }

    /**
     * Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *
     * @remarks
     * >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns LogOffAllSessionsInAppInstanceGroupResponse
     *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LogOffAllSessionsInAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *
     * @remarks
     * >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     * @returns LogOffAllSessionsInAppInstanceGroupResponse
     *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the general policies of a delivery group, including the number of concurrent sessions and the retention period of disconnected sessions.
     *
     * @param tmpReq - ModifyAppInstanceGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyAppInstanceGroupAttributeResponse
     *
     * @param ModifyAppInstanceGroupAttributeRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppInstanceGroupAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->nodePoolShrink) {
            @$query['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sessionTimeout) {
            @$query['SessionTimeout'] = $request->sessionTimeout;
        }

        $body = [];
        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->perSessionPerApp) {
            @$body['PerSessionPerApp'] = $request->perSessionPerApp;
        }

        if (null !== $request->preOpenAppId) {
            @$body['PreOpenAppId'] = $request->preOpenAppId;
        }

        if (null !== $request->preOpenMode) {
            @$body['PreOpenMode'] = $request->preOpenMode;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppInstanceGroupAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the general policies of a delivery group, including the number of concurrent sessions and the retention period of disconnected sessions.
     *
     * @param request - ModifyAppInstanceGroupAttributeRequest
     * @returns ModifyAppInstanceGroupAttributeResponse
     *
     * @param ModifyAppInstanceGroupAttributeRequest $request
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改策略信息.
     *
     * @param tmpReq - ModifyAppPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyAppPolicyResponse
     *
     * @param ModifyAppPolicyRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAppPolicyResponse
     */
    public function modifyAppPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->videoPolicy) {
            $request->videoPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }

        $query = [];
        if (null !== $request->appPolicyId) {
            @$query['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->videoPolicyShrink) {
            @$query['VideoPolicy'] = $request->videoPolicyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppPolicy',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAppPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改策略信息.
     *
     * @param request - ModifyAppPolicyRequest
     * @returns ModifyAppPolicyResponse
     *
     * @param ModifyAppPolicyRequest $request
     *
     * @return ModifyAppPolicyResponse
     */
    public function modifyAppPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppPolicyWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - ModifyNodePoolAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyNodePoolAttributeResponse
     *
     * @param ModifyNodePoolAttributeRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyNodePoolAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodePoolStrategy) {
            $request->nodePoolStrategyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePoolStrategy, 'NodePoolStrategy', 'json');
        }

        $body = [];
        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->nodeCapacity) {
            @$body['NodeCapacity'] = $request->nodeCapacity;
        }

        if (null !== $request->nodePoolStrategyShrink) {
            @$body['NodePoolStrategy'] = $request->nodePoolStrategyShrink;
        }

        if (null !== $request->poolId) {
            @$body['PoolId'] = $request->poolId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNodePoolAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyNodePoolAttributeRequest
     * @returns ModifyNodePoolAttributeResponse
     *
     * @param ModifyNodePoolAttributeRequest $request
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of the administrator account, such as whether to enable the resource expiration reminder feature.
     *
     * @param request - ModifyTenantConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyTenantConfigResponse
     *
     * @param ModifyTenantConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyTenantConfigResponse
     */
    public function modifyTenantConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupExpireRemind) {
            @$body['AppInstanceGroupExpireRemind'] = $request->appInstanceGroupExpireRemind;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantConfig',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of the administrator account, such as whether to enable the resource expiration reminder feature.
     *
     * @param request - ModifyTenantConfigRequest
     * @returns ModifyTenantConfigResponse
     *
     * @param ModifyTenantConfigRequest $request
     *
     * @return ModifyTenantConfigResponse
     */
    public function modifyTenantConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the assigned users that are added to a delivery group by page.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PageListAppInstanceGroupUserResponse
     *
     * @param PageListAppInstanceGroupUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageListAppInstanceGroupUser',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PageListAppInstanceGroupUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the assigned users that are added to a delivery group by page.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     * @returns PageListAppInstanceGroupUserResponse
     *
     * @param PageListAppInstanceGroupUserRequest $request
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListAppInstanceGroupUserWithOptions($request, $runtime);
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
     *
     * @param request - RenewAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenewAppInstanceGroupResponse
     *
     * @param RenewAppInstanceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenewAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenewAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
     *
     * @param request - RenewAppInstanceGroupRequest
     * @returns RenewAppInstanceGroupResponse
     *
     * @param RenewAppInstanceGroupRequest $request
     *
     * @return RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Unbinds a user and a session.
     *
     * @param request - UnbindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UnbindResponse
     *
     * @param UnbindRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Unbind',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnbindResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unbinds a user and a session.
     *
     * @param request - UnbindRequest
     * @returns UnbindResponse
     *
     * @param UnbindRequest $request
     *
     * @return UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }

    /**
     * Updates the image of a delivery group.
     *
     * @remarks
     * *
     * **Warning** After the image is updated, the end user session accessing the cloud application will be disconnected. Exercise caution to avoid end user data loss.
     * >  After the image of the delivery group is updated, the change takes effect on the terminal in approximately 2 minutes.
     *
     * @param request - UpdateAppInstanceGroupImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAppInstanceGroupImageResponse
     *
     * @param UpdateAppInstanceGroupImageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCenterImageId) {
            @$query['AppCenterImageId'] = $request->appCenterImageId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppInstanceGroupImage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAppInstanceGroupImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the image of a delivery group.
     *
     * @remarks
     * *
     * **Warning** After the image is updated, the end user session accessing the cloud application will be disconnected. Exercise caution to avoid end user data loss.
     * >  After the image of the delivery group is updated, the change takes effect on the terminal in approximately 2 minutes.
     *
     * @param request - UpdateAppInstanceGroupImageRequest
     * @returns UpdateAppInstanceGroupImageResponse
     *
     * @param UpdateAppInstanceGroupImageRequest $request
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInstanceGroupImageWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoResponse;
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
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyWuyingServerAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyWuyingServerAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RestartWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RestartWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartTaskForDistributeImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartTaskForDistributeImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StopWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StopWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponse;
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
        $this->_endpointRule = '';
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
     * Sets the execution time of an over-the-air (OTA) update task.
     *
     * @param request - ApproveOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ApproveOtaTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the execution time of an over-the-air (OTA) update task.
     *
     * @param request - ApproveOtaTaskRequest
     *
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
     * 授权用户.
     *
     * @param tmpReq - AuthorizeInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }

        $bodyFlat = [];
        if (null !== $request->authorizeUserGroupIds) {
            @$bodyFlat['AuthorizeUserGroupIds'] = $request->authorizeUserGroupIds;
        }

        if (null !== $request->authorizeUserIds) {
            @$bodyFlat['AuthorizeUserIds'] = $request->authorizeUserIds;
        }

        if (null !== $request->avatarId) {
            @$body['AvatarId'] = $request->avatarId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->unAuthorizeUserGroupIds) {
            @$bodyFlat['UnAuthorizeUserGroupIds'] = $request->unAuthorizeUserGroupIds;
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
            'action' => 'AuthorizeInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权用户.
     *
     * @param request - AuthorizeInstanceGroupRequest
     *
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
     * 创建云应用交付组.
     *
     * @param tmpReq - CreateAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->authMode) {
            @$body['AuthMode'] = $request->authMode;
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云应用交付组.
     *
     * @param request - CreateAppInstanceGroupRequest
     *
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
     * Create a custom image from a deployed instance. This allows you to quickly create more instances with the same configurations and avoid repeatedly configuring the instance environment each time you create the instance.
     *
     * @param request - CreateImageByInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageByInstanceResponse
     *
     * @param CreateImageByInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImageByInstanceResponse
     */
    public function createImageByInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCleanUserdata) {
            @$body['AutoCleanUserdata'] = $request->autoCleanUserdata;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->diskType) {
            @$body['DiskType'] = $request->diskType;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->subInstanceId) {
            @$body['SubInstanceId'] = $request->subInstanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageByInstance',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a custom image from a deployed instance. This allows you to quickly create more instances with the same configurations and avoid repeatedly configuring the instance environment each time you create the instance.
     *
     * @param request - CreateImageByInstanceRequest
     *
     * @returns CreateImageByInstanceResponse
     *
     * @param CreateImageByInstanceRequest $request
     *
     * @return CreateImageByInstanceResponse
     */
    public function createImageByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageByInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a new image by debugging the delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateImageFromAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageFromAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new image by debugging the delivery group.
     *
     * @param request - CreateImageFromAppInstanceGroupRequest
     *
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
     * Create one or more workstations.
     *
     * @remarks
     * 1.  Project is equivalent to the Resource Configuration module of the Cloud Flow console
     * 2.  If there are multiple versions behind the input parameter ContentId:
     *     **
     *     **Note** The default version is used.
     *     Bind simultaneously
     * 3.  You can call the current interface only if the default version of Content is available.
     *
     * @param request - CreateWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWuyingServerResponse
     *
     * @param CreateWuyingServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWuyingServerResponse
     */
    public function createWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->savingPlanId) {
            @$query['SavingPlanId'] = $request->savingPlanId;
        }

        $body = [];
        if (null !== $request->amount) {
            @$body['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        $bodyFlat = [];
        if (null !== $request->dataDisk) {
            @$bodyFlat['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->idempotenceToken) {
            @$body['IdempotenceToken'] = $request->idempotenceToken;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->networkStrategyType) {
            @$body['NetworkStrategyType'] = $request->networkStrategyType;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->serverPortRange) {
            @$body['ServerPortRange'] = $request->serverPortRange;
        }

        if (null !== $request->systemDiskCategory) {
            @$body['SystemDiskCategory'] = $request->systemDiskCategory;
        }

        if (null !== $request->systemDiskPerformanceLevel) {
            @$body['SystemDiskPerformanceLevel'] = $request->systemDiskPerformanceLevel;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->vSwitchIds) {
            @$body['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->virtualNodePoolId) {
            @$body['VirtualNodePoolId'] = $request->virtualNodePoolId;
        }

        if (null !== $request->wuyingServerName) {
            @$body['WuyingServerName'] = $request->wuyingServerName;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create one or more workstations.
     *
     * @remarks
     * 1.  Project is equivalent to the Resource Configuration module of the Cloud Flow console
     * 2.  If there are multiple versions behind the input parameter ContentId:
     *     **
     *     **Note** The default version is used.
     *     Bind simultaneously
     * 3.  You can call the current interface only if the default version of Content is available.
     *
     * @param request - CreateWuyingServerRequest
     *
     * @returns CreateWuyingServerResponse
     *
     * @param CreateWuyingServerRequest $request
     *
     * @return CreateWuyingServerResponse
     */
    public function createWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *
     * @remarks
     * >  You cannot call this operation to delete a subscription delivery group.
     *
     * @param request - DeleteAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *
     * @remarks
     * >  You cannot call this operation to delete a subscription delivery group.
     *
     * @param request - DeleteAppInstanceGroupRequest
     *
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
     *
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
            'action' => 'DeleteAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application instance.
     *
     * @remarks
     * Only application instances that are in the Initializing or Idle state can be deleted. The operation can be called only by specific customers.
     *
     * @param request - DeleteAppInstancesRequest
     *
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
     * Delete a custom RDS image.
     *
     * @remarks
     *   You can only delete custom images to which a user belongs.
     * *   If the product line is an image of the RDS cloud computer pool, RDS cloud application, and RDS workstation, make sure that no RDS instances use the image before you delete it.
     * *   The RDS CloudDesktop template references an image. When you delete an image, the template is also deleted.
     * *   If the image contains multiple regions, the images in all regions are deleted when the image is deleted.
     *
     * @param request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a custom RDS image.
     *
     * @remarks
     *   You can only delete custom images to which a user belongs.
     * *   If the product line is an image of the RDS cloud computer pool, RDS cloud application, and RDS workstation, make sure that no RDS instances use the image before you delete it.
     * *   The RDS CloudDesktop template references an image. When you delete an image, the template is also deleted.
     * *   If the image contains multiple regions, the images in all regions are deleted when the image is deleted.
     *
     * @param request - DeleteImageRequest
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * 删除工作站.
     *
     * @remarks
     * Deletes a workstation.
     *
     * @param request - DeleteWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWuyingServerResponse
     *
     * @param DeleteWuyingServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteWuyingServerResponse
     */
    public function deleteWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作站.
     *
     * @remarks
     * Deletes a workstation.
     *
     * @param request - DeleteWuyingServerRequest
     *
     * @returns DeleteWuyingServerResponse
     *
     * @param DeleteWuyingServerRequest $request
     *
     * @return DeleteWuyingServerResponse
     */
    public function deleteWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Queries the Elastic IP Addresses (EIPs) of workstations.
     *
     * @param request - DescribeWuyingServerEipInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWuyingServerEipInfoResponse
     *
     * @param DescribeWuyingServerEipInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeWuyingServerEipInfoResponse
     */
    public function describeWuyingServerEipInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isp) {
            @$body['Isp'] = $request->isp;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWuyingServerEipInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWuyingServerEipInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Elastic IP Addresses (EIPs) of workstations.
     *
     * @param request - DescribeWuyingServerEipInfoRequest
     *
     * @returns DescribeWuyingServerEipInfoResponse
     *
     * @param DescribeWuyingServerEipInfoRequest $request
     *
     * @return DescribeWuyingServerEipInfoResponse
     */
    public function describeWuyingServerEipInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWuyingServerEipInfoWithOptions($request, $runtime);
    }

    /**
     * 获取交付组详情.
     *
     * @param request - GetAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取交付组详情.
     *
     * @param request - GetAppInstanceGroupRequest
     *
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
     *
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
        if (null !== $request->accessType) {
            @$body['AccessType'] = $request->accessType;
        }

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

        if (null !== $request->appPolicyId) {
            @$body['AppPolicyId'] = $request->appPolicyId;
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
            'action' => 'GetConnectionTicket',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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
     *
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
            'action' => 'GetDebugAppInstance',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDebugAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information that is used to debug an application instance.
     *
     * @param request - GetDebugAppInstanceRequest
     *
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
     *
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
            'action' => 'GetOtaTaskByTaskId',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an over-the-air (OTA) update task, including the available versions and version description.
     *
     * @param request - GetOtaTaskByTaskIdRequest
     *
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
     *
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
            'action' => 'GetResourcePrice',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource prices.
     *
     * @param request - GetResourcePriceRequest
     *
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
     *
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
            'action' => 'GetResourceRenewPrice',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the renewal prices of App Streaming resources.
     *
     * @param request - GetResourceRenewPriceRequest
     *
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
     * Queries the details of multiple delivery groups that meet the query conditions.
     *
     * @param request - ListAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of multiple delivery groups that meet the query conditions.
     *
     * @param request - ListAppInstanceGroupRequest
     *
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
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of application instances in a delivery group, including the IDs, status, creation time, update time, session status, and public IP addresses associated with the primary NICs of the instances.
     *
     * @param request - ListAppInstancesRequest
     *
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
     * Queries the user groups authorized by a delivery group.
     *
     * @param request - ListAuthorizedUserGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedUserGroupsResponse
     *
     * @param ListAuthorizedUserGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAuthorizedUserGroupsResponse
     */
    public function listAuthorizedUserGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
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
            'action' => 'ListAuthorizedUserGroups',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the user groups authorized by a delivery group.
     *
     * @param request - ListAuthorizedUserGroupsRequest
     *
     * @returns ListAuthorizedUserGroupsResponse
     *
     * @param ListAuthorizedUserGroupsRequest $request
     *
     * @return ListAuthorizedUserGroupsResponse
     */
    public function listAuthorizedUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedUserGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询绑定信息，支持分页.
     *
     * @param request - ListBindInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListBindInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询绑定信息，支持分页.
     *
     * @param request - ListBindInfoRequest
     *
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
     * 列表显示镜像.
     *
     * @param request - ListImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageResponse
     *
     * @param ListImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListImageResponse
     */
    public function listImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        $body = [];
        if (null !== $request->bizRegionIdList) {
            @$body['BizRegionIdList'] = $request->bizRegionIdList;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->bizTypeList) {
            @$body['BizTypeList'] = $request->bizTypeList;
        }

        if (null !== $request->featureList) {
            @$body['FeatureList'] = $request->featureList;
        }

        if (null !== $request->fotaVersion) {
            @$body['FotaVersion'] = $request->fotaVersion;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->imageType) {
            @$body['ImageType'] = $request->imageType;
        }

        if (null !== $request->languageType) {
            @$body['LanguageType'] = $request->languageType;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platformName) {
            @$body['PlatformName'] = $request->platformName;
        }

        if (null !== $request->platformNameList) {
            @$body['PlatformNameList'] = $request->platformNameList;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->productTypeList) {
            @$body['ProductTypeList'] = $request->productTypeList;
        }

        if (null !== $request->protocolType) {
            @$body['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->resourceInstanceType) {
            @$body['ResourceInstanceType'] = $request->resourceInstanceType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列表显示镜像.
     *
     * @param request - ListImageRequest
     *
     * @returns ListImageResponse
     *
     * @param ListImageRequest $request
     *
     * @return ListImageResponse
     */
    public function listImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageWithOptions($request, $runtime);
    }

    /**
     * Queries the resource types that are available for purchase when you create a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListNodeInstanceType',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource types that are available for purchase when you create a delivery group.
     *
     * @param request - ListNodeInstanceTypeRequest
     *
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
     * Queries resource nodes.
     *
     * @param request - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
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
            'action' => 'ListNodes',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource nodes.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about over-the-air (OTA) update tasks.
     *
     * @param request - ListOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListOtaTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about over-the-air (OTA) update tasks.
     *
     * @param request - ListOtaTaskRequest
     *
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
     * 查询交付组内持久会话列表.
     *
     * @param request - ListPersistentAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPersistentAppInstancesResponse
     *
     * @param ListPersistentAppInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPersistentAppInstancesResponse
     */
    public function listPersistentAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstancePersistentIds) {
            @$query['AppInstancePersistentIds'] = $request->appInstancePersistentIds;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPersistentAppInstances',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPersistentAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询交付组内持久会话列表.
     *
     * @param request - ListPersistentAppInstancesRequest
     *
     * @returns ListPersistentAppInstancesResponse
     *
     * @param ListPersistentAppInstancesRequest $request
     *
     * @return ListPersistentAppInstancesResponse
     */
    public function listPersistentAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersistentAppInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that are supported by App Streaming.
     *
     * @remarks
     * >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListRegions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions that are supported by App Streaming.
     *
     * @remarks
     * >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
     *
     * @param request - ListRegionsRequest
     *
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
     * Queries the tags added to one or more cloud resources.
     *
     * @param request - ListTagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagCloudResourcesResponse
     *
     * @param ListTagCloudResourcesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTagCloudResourcesResponse
     */
    public function listTagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags added to one or more cloud resources.
     *
     * @param request - ListTagCloudResourcesRequest
     *
     * @returns ListTagCloudResourcesResponse
     *
     * @param ListTagCloudResourcesRequest $request
     *
     * @return ListTagCloudResourcesResponse
     */
    public function listTagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of the administrator account, such as whether the resource expiration reminder feature is enabled.
     *
     * @param request - ListTenantConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListTenantConfigResponse
     */
    public function listTenantConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListTenantConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Queries the list of workstations.
     *
     * @param request - ListWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWuyingServerResponse
     *
     * @param ListWuyingServerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListWuyingServerResponse
     */
    public function listWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->addVirtualNodePoolStatusList) {
            @$bodyFlat['AddVirtualNodePoolStatusList'] = $request->addVirtualNodePoolStatusList;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->virtualNodePoolId) {
            @$body['VirtualNodePoolId'] = $request->virtualNodePoolId;
        }

        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        if (null !== $request->wuyingServerNameOrId) {
            @$body['WuyingServerNameOrId'] = $request->wuyingServerNameOrId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of workstations.
     *
     * @param request - ListWuyingServerRequest
     *
     * @returns ListWuyingServerResponse
     *
     * @param ListWuyingServerRequest $request
     *
     * @return ListWuyingServerResponse
     */
    public function listWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *
     * @remarks
     * >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'LogOffAllSessionsInAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *
     * @remarks
     * >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
     *
     * @param request - LogOffAllSessionsInAppInstanceGroupRequest
     *
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
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppInstanceGroupAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the general policies of a delivery group, including the number of concurrent sessions and the retention period of disconnected sessions.
     *
     * @param request - ModifyAppInstanceGroupAttributeRequest
     *
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
     * Modify the delivery group display policy, including settings such as frame rate, resolution, and protocol type.
     *
     * @param tmpReq - ModifyAppPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ModifyAppPolicy',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the delivery group display policy, including settings such as frame rate, resolution, and protocol type.
     *
     * @param request - ModifyAppPolicyRequest
     *
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
     * 修改浏览器交付组.
     *
     * @param tmpReq - ModifyBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBrowserInstanceGroupResponse
     *
     * @param ModifyBrowserInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBrowserInstanceGroupResponse
     */
    public function modifyBrowserInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBrowserInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->browserConfig) {
            $request->browserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->browserConfig, 'BrowserConfig', 'json');
        }

        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        if (null !== $tmpReq->timers) {
            $request->timersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timers, 'Timers', 'json');
        }

        $query = [];
        if (null !== $request->browserConfigShrink) {
            @$query['BrowserConfig'] = $request->browserConfigShrink;
        }

        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->policyShrink) {
            @$query['Policy'] = $request->policyShrink;
        }

        if (null !== $request->timersShrink) {
            @$query['Timers'] = $request->timersShrink;
        }

        $body = [];
        if (null !== $request->cloudBrowserName) {
            @$body['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改浏览器交付组.
     *
     * @param request - ModifyBrowserInstanceGroupRequest
     *
     * @returns ModifyBrowserInstanceGroupResponse
     *
     * @param ModifyBrowserInstanceGroupRequest $request
     *
     * @return ModifyBrowserInstanceGroupResponse
     */
    public function modifyBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Changes the number of nodes in a subscription delivery group.
     *
     * @param tmpReq - ModifyNodePoolAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodePoolAmountResponse
     *
     * @param ModifyNodePoolAmountRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyNodePoolAmountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNodePoolAmount',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodePoolAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the number of nodes in a subscription delivery group.
     *
     * @param request - ModifyNodePoolAmountRequest
     *
     * @returns ModifyNodePoolAmountResponse
     *
     * @param ModifyNodePoolAmountRequest $request
     *
     * @return ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAmountWithOptions($request, $runtime);
    }

    /**
     * Changes the scaling policy of a delivery group. The following scaling policies are supported: fixed resource number, scheduled scaling, and auto scaling.
     *
     * @remarks
     * You can select one of the following scaling policies for cloud app resources:
     * *   No scaling: Resources are not scaled.
     * *   Auto scaling: Resources are automatically scaled based on the number of connected sessions and the duration during which no session is connected.
     * *   Scheduled scaling: Resources are scaled during specific periods of time on specific dates.
     * Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
     *
     * @param tmpReq - ModifyNodePoolAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ModifyNodePoolAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the scaling policy of a delivery group. The following scaling policies are supported: fixed resource number, scheduled scaling, and auto scaling.
     *
     * @remarks
     * You can select one of the following scaling policies for cloud app resources:
     * *   No scaling: Resources are not scaled.
     * *   Auto scaling: Resources are automatically scaled based on the number of connected sessions and the duration during which no session is connected.
     * *   Scheduled scaling: Resources are scaled during specific periods of time on specific dates.
     * Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
     *
     * @param request - ModifyNodePoolAttributeRequest
     *
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
     *
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
            'action' => 'ModifyTenantConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of the administrator account, such as whether to enable the resource expiration reminder feature.
     *
     * @param request - ModifyTenantConfigRequest
     *
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
     * Modify workstation properties.
     *
     * @param request - ModifyWuyingServerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWuyingServerAttributeResponse
     *
     * @param ModifyWuyingServerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyWuyingServerAttributeResponse
     */
    public function modifyWuyingServerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        if (null !== $request->wuyingServerName) {
            @$body['WuyingServerName'] = $request->wuyingServerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyWuyingServerAttribute',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyWuyingServerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify workstation properties.
     *
     * @param request - ModifyWuyingServerAttributeRequest
     *
     * @returns ModifyWuyingServerAttributeResponse
     *
     * @param ModifyWuyingServerAttributeRequest $request
     *
     * @return ModifyWuyingServerAttributeResponse
     */
    public function modifyWuyingServerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWuyingServerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the assigned users that are added to a delivery group by page.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'PageListAppInstanceGroupUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the assigned users that are added to a delivery group by page.
     *
     * @param request - PageListAppInstanceGroupUserRequest
     *
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
     * @param tmpReq - RenewAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAppInstanceGroupResponse
     *
     * @param RenewAppInstanceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RenewAppInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->renewNodes) {
            $request->renewNodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->renewNodes, 'RenewNodes', 'json');
        }

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

        if (null !== $request->renewAmount) {
            @$query['RenewAmount'] = $request->renewAmount;
        }

        if (null !== $request->renewMode) {
            @$query['RenewMode'] = $request->renewMode;
        }

        if (null !== $request->renewNodesShrink) {
            @$query['RenewNodes'] = $request->renewNodesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
     *
     * @param request - RenewAppInstanceGroupRequest
     *
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
     * Renew one workstation.
     *
     * @param request - RenewWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewWuyingServerResponse
     *
     * @param RenewWuyingServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RenewWuyingServerResponse
     */
    public function renewWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renew one workstation.
     *
     * @param request - RenewWuyingServerRequest
     *
     * @returns RenewWuyingServerResponse
     *
     * @param RenewWuyingServerRequest $request
     *
     * @return RenewWuyingServerResponse
     */
    public function renewWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Restarts the workstation.
     *
     * @param request - RestartWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartWuyingServerResponse
     *
     * @param RestartWuyingServerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartWuyingServerResponse
     */
    public function restartWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts the workstation.
     *
     * @param request - RestartWuyingServerRequest
     *
     * @returns RestartWuyingServerResponse
     *
     * @param RestartWuyingServerRequest $request
     *
     * @return RestartWuyingServerResponse
     */
    public function restartWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Initiates a task to replicate an image to another region.
     *
     * @param request - StartTaskForDistributeImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTaskForDistributeImageResponse
     *
     * @param StartTaskForDistributeImageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartTaskForDistributeImageResponse
     */
    public function startTaskForDistributeImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationRegionList) {
            @$body['DestinationRegionList'] = $request->destinationRegionList;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->retryType) {
            @$body['RetryType'] = $request->retryType;
        }

        if (null !== $request->sourceRegion) {
            @$body['SourceRegion'] = $request->sourceRegion;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartTaskForDistributeImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTaskForDistributeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a task to replicate an image to another region.
     *
     * @param request - StartTaskForDistributeImageRequest
     *
     * @returns StartTaskForDistributeImageResponse
     *
     * @param StartTaskForDistributeImageRequest $request
     *
     * @return StartTaskForDistributeImageResponse
     */
    public function startTaskForDistributeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskForDistributeImageWithOptions($request, $runtime);
    }

    /**
     * Start the workstation.
     *
     * @param request - StartWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartWuyingServerResponse
     *
     * @param StartWuyingServerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartWuyingServerResponse
     */
    public function startWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start the workstation.
     *
     * @param request - StartWuyingServerRequest
     *
     * @returns StartWuyingServerResponse
     *
     * @param StartWuyingServerRequest $request
     *
     * @return StartWuyingServerResponse
     */
    public function startWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Stops the workstation.
     *
     * @param request - StopWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopWuyingServerResponse
     *
     * @param StopWuyingServerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopWuyingServerResponse
     */
    public function stopWuyingServerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        $bodyFlat = [];
        if (null !== $request->wuyingServerIdList) {
            @$bodyFlat['WuyingServerIdList'] = $request->wuyingServerIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the workstation.
     *
     * @param request - StopWuyingServerRequest
     *
     * @returns StopWuyingServerResponse
     *
     * @param StopWuyingServerRequest $request
     *
     * @return StopWuyingServerResponse
     */
    public function stopWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopWuyingServerWithOptions($request, $runtime);
    }

    /**
     * 为云资源创建并绑定标签.
     *
     * @param request - TagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagCloudResourcesResponse
     *
     * @param TagCloudResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TagCloudResourcesResponse
     */
    public function tagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为云资源创建并绑定标签.
     *
     * @param request - TagCloudResourcesRequest
     *
     * @returns TagCloudResourcesResponse
     *
     * @param TagCloudResourcesRequest $request
     *
     * @return TagCloudResourcesResponse
     */
    public function tagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds a user and a session.
     *
     * @param request - UnbindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'Unbind',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a user and a session.
     *
     * @param request - UnbindRequest
     *
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
     * Removes tags from cloud resources.
     *
     * @param request - UntagCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagCloudResourcesResponse
     *
     * @param UntagCloudResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UntagCloudResourcesResponse
     */
    public function untagCloudResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$body['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagCloudResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from cloud resources.
     *
     * @param request - UntagCloudResourcesRequest
     *
     * @returns UntagCloudResourcesResponse
     *
     * @param UntagCloudResourcesRequest $request
     *
     * @return UntagCloudResourcesResponse
     */
    public function untagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagCloudResourcesWithOptions($request, $runtime);
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
     *
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
            'action' => 'UpdateAppInstanceGroupImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     *
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

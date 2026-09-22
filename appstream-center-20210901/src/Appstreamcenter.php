<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AssignWuyingServerPrivateAddressesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AssignWuyingServerPrivateAddressesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeUsersForAppShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigResourceGroupModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigResourceGroupModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ConfigRuntimeModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageByInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteLlmTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteLlmTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeliverToUserSlsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeliverToUserSlsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetFileUploadInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetFileUploadInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppsByAppInstanceGroupIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppsByAppInstanceGroupIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppsByUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppsByUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUserGroupsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUsersRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUsersResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderEndpointsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderEndpointsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplateResourceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplateResourceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPublishedAppsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListZonesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListZonesResponse;
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
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveResourceGroupModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveResourceGroupModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeChannelRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeChannelResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RemoveRuntimeModelTemplateResponse;
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
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnassignWuyingServerPrivateAddressesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnassignWuyingServerPrivateAddressesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelTemplateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelTemplateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateWuyingServerImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateWuyingServerImageResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
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
     * Sets the execution time for an OTA upgrade.
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
     * Sets the execution time for an OTA upgrade.
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
     * Assigns secondary private IP addresses to a development host.
     *
     * @param request - AssignWuyingServerPrivateAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignWuyingServerPrivateAddressesResponse
     *
     * @param AssignWuyingServerPrivateAddressesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AssignWuyingServerPrivateAddressesResponse
     */
    public function assignWuyingServerPrivateAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secondaryPrivateIpAddressCount) {
            @$body['SecondaryPrivateIpAddressCount'] = $request->secondaryPrivateIpAddressCount;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignWuyingServerPrivateAddresses',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignWuyingServerPrivateAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns secondary private IP addresses to a development host.
     *
     * @param request - AssignWuyingServerPrivateAddressesRequest
     *
     * @returns AssignWuyingServerPrivateAddressesResponse
     *
     * @param AssignWuyingServerPrivateAddressesRequest $request
     *
     * @return AssignWuyingServerPrivateAddressesResponse
     */
    public function assignWuyingServerPrivateAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignWuyingServerPrivateAddressesWithOptions($request, $runtime);
    }

    /**
     * Adds or removes assigned users for a delivery group. Only users added as assigned users can access cloud applications.
     *
     * @remarks
     * > After you change assigned users, the selected users receive notification emails. Changes typically take about 2 minutes to take effect on the client.
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

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
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
     * Adds or removes assigned users for a delivery group. Only users added as assigned users can access cloud applications.
     *
     * @remarks
     * > After you change assigned users, the selected users receive notification emails. Changes typically take about 2 minutes to take effect on the client.
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
     * Adds or removes authorized users for a specified application deployed in a delivery group. Only authorized users can access the application.
     *
     * @remarks
     * ## Operation description
     * This operation manages user authorization for a delivery group at the application level. The authorization result applies only to the application specified by AppId and does not affect the authorization of other applications in the delivery group. To authorize users for an entire delivery group, call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation.
     * ## Before you begin
     * - The delivery group is created, and **the application specified by AppId is deployed in the image used by the delivery group**. Otherwise, the error code `InvalidAppId.NotFound` is returned.
     * - The delivery group **has not been added to a delivery group set that is in effect**. A delivery group that has been added to a set cannot be authorized individually. You must authorize it through the set. Otherwise, the error code `InvalidAppInstanceGroup.AuthorizeBlockedBySet` is returned.
     * - If the workspace to which the delivery group belongs is an Active Directory (AD) workspace, **you must specify UserMeta**, with `UserMeta.Type` set to `ad` and `UserMeta.AdDomain` matching the AD domain bound to the workspace.
     * - If the delivery group has been authorized through user groups and mixed authorization of users and user groups is not supported, you cannot authorize by user. Otherwise, the error code `AuthAppInstanceGroup.MixNotSupported` is returned.
     * ## Parameter description
     * - **At least one of AuthorizeUserIds and UnAuthorizeUserIds must be specified.** You can also specify both. If both are empty, this invocation does not change any authorization.
     * - When adding authorizations, the sum of the currently authorized users for the application and the users to be added cannot exceed the authorized user quota for the application. If the quota is exceeded, the error code `ExceedAppAuthUserQuota` is returned. Removing authorizations is not subject to quota limits.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications in the delivery group (AppId in the Apps list).
     * 2. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the usernames of the users to be authorized or unauthorized.
     * 3. Call this operation to complete the authorization change.
     * > After the authorization is changed, the selected users receive a notification email. It typically takes about 2 minutes for the change to take effect on the client.
     *
     * @param tmpReq - AuthorizeUsersForAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeUsersForAppResponse
     *
     * @param AuthorizeUsersForAppRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeUsersForAppResponse
     */
    public function authorizeUsersForAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeUsersForAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userMeta) {
            $request->userMetaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userMeta, 'UserMeta', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->authorizeUserIds) {
            @$body['AuthorizeUserIds'] = $request->authorizeUserIds;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->unAuthorizeUserIds) {
            @$body['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }

        if (null !== $request->userMetaShrink) {
            @$body['UserMeta'] = $request->userMetaShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuthorizeUsersForApp',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeUsersForAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or removes authorized users for a specified application deployed in a delivery group. Only authorized users can access the application.
     *
     * @remarks
     * ## Operation description
     * This operation manages user authorization for a delivery group at the application level. The authorization result applies only to the application specified by AppId and does not affect the authorization of other applications in the delivery group. To authorize users for an entire delivery group, call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation.
     * ## Before you begin
     * - The delivery group is created, and **the application specified by AppId is deployed in the image used by the delivery group**. Otherwise, the error code `InvalidAppId.NotFound` is returned.
     * - The delivery group **has not been added to a delivery group set that is in effect**. A delivery group that has been added to a set cannot be authorized individually. You must authorize it through the set. Otherwise, the error code `InvalidAppInstanceGroup.AuthorizeBlockedBySet` is returned.
     * - If the workspace to which the delivery group belongs is an Active Directory (AD) workspace, **you must specify UserMeta**, with `UserMeta.Type` set to `ad` and `UserMeta.AdDomain` matching the AD domain bound to the workspace.
     * - If the delivery group has been authorized through user groups and mixed authorization of users and user groups is not supported, you cannot authorize by user. Otherwise, the error code `AuthAppInstanceGroup.MixNotSupported` is returned.
     * ## Parameter description
     * - **At least one of AuthorizeUserIds and UnAuthorizeUserIds must be specified.** You can also specify both. If both are empty, this invocation does not change any authorization.
     * - When adding authorizations, the sum of the currently authorized users for the application and the users to be added cannot exceed the authorized user quota for the application. If the quota is exceeded, the error code `ExceedAppAuthUserQuota` is returned. Removing authorizations is not subject to quota limits.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications in the delivery group (AppId in the Apps list).
     * 2. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the usernames of the users to be authorized or unauthorized.
     * 3. Call this operation to complete the authorization change.
     * > After the authorization is changed, the selected users receive a notification email. It typically takes about 2 minutes for the change to take effect on the client.
     *
     * @param request - AuthorizeUsersForAppRequest
     *
     * @returns AuthorizeUsersForAppResponse
     *
     * @param AuthorizeUsersForAppRequest $request
     *
     * @return AuthorizeUsersForAppResponse
     */
    public function authorizeUsersForApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeUsersForAppWithOptions($request, $runtime);
    }

    /**
     * Creates LLM templates in batches.
     *
     * @remarks
     * You can batch create model templates under a model provider template in the Wuying Agent Management Center. Multiple models can be added at a time, and one of them can be specified as the default model. Existing models are automatically skipped and not created again.
     * Before using this operation, make sure you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - BatchCreateLlmTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateLlmTemplatesResponse
     *
     * @param BatchCreateLlmTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchCreateLlmTemplatesResponse
     */
    public function batchCreateLlmTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmTemplateItems) {
            @$body['LlmTemplateItems'] = $request->llmTemplateItems;
        }

        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->providerTemplateId) {
            @$body['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateLlmTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateLlmTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates LLM templates in batches.
     *
     * @remarks
     * You can batch create model templates under a model provider template in the Wuying Agent Management Center. Multiple models can be added at a time, and one of them can be specified as the default model. Existing models are automatically skipped and not created again.
     * Before using this operation, make sure you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - BatchCreateLlmTemplatesRequest
     *
     * @returns BatchCreateLlmTemplatesResponse
     *
     * @param BatchCreateLlmTemplatesRequest $request
     *
     * @return BatchCreateLlmTemplatesResponse
     */
    public function batchCreateLlmTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateLlmTemplatesWithOptions($request, $runtime);
    }

    /**
     * Configures the model group for a resource group.
     *
     * @remarks
     * You can assign a model group to the resources that belong to agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. The model group serves as the inference engine for agents within the resource group to execute tasks.
     * When an agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the agent runtime setting.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - ConfigResourceGroupModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigResourceGroupModelTemplateResponse
     *
     * @param ConfigResourceGroupModelTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ConfigResourceGroupModelTemplateResponse
     */
    public function configResourceGroupModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigResourceGroupModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigResourceGroupModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the model group for a resource group.
     *
     * @remarks
     * You can assign a model group to the resources that belong to agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. The model group serves as the inference engine for agents within the resource group to execute tasks.
     * When an agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the agent runtime setting.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - ConfigResourceGroupModelTemplateRequest
     *
     * @returns ConfigResourceGroupModelTemplateResponse
     *
     * @param ConfigResourceGroupModelTemplateRequest $request
     *
     * @return ConfigResourceGroupModelTemplateResponse
     */
    public function configResourceGroupModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configResourceGroupModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Configures a third-party channel for Agent runtime.
     *
     * @remarks
     * You can configure third-party channels for Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. These channels serve as extended Agent communication methods beyond the AgentIM channel.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ConfigRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigRuntimeChannelResponse
     *
     * @param ConfigRuntimeChannelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfigRuntimeChannelResponse
     */
    public function configRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentPlatform) {
            @$body['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$body['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->configMode) {
            @$body['ConfigMode'] = $request->configMode;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a third-party channel for Agent runtime.
     *
     * @remarks
     * You can configure third-party channels for Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. These channels serve as extended Agent communication methods beyond the AgentIM channel.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ConfigRuntimeChannelRequest
     *
     * @returns ConfigRuntimeChannelResponse
     *
     * @param ConfigRuntimeChannelRequest $request
     *
     * @return ConfigRuntimeChannelResponse
     */
    public function configRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Configures model groups for Agent runtime resources.
     *
     * @remarks
     * You can authorize model groups for Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. The model groups serve as inference engines for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before calling this operation.
     *
     * @param request - ConfigRuntimeModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigRuntimeModelTemplateResponse
     *
     * @param ConfigRuntimeModelTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigRuntimeModelTemplateResponse
     */
    public function configRuntimeModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigRuntimeModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigRuntimeModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures model groups for Agent runtime resources.
     *
     * @remarks
     * You can authorize model groups for Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. The model groups serve as inference engines for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before calling this operation.
     *
     * @param request - ConfigRuntimeModelTemplateRequest
     *
     * @returns ConfigRuntimeModelTemplateResponse
     *
     * @param ConfigRuntimeModelTemplateRequest $request
     *
     * @return ConfigRuntimeModelTemplateResponse
     */
    public function configRuntimeModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configRuntimeModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING CloudApp.
     * A delivery group is a logical grouping for delivering cloud applications to end users. It includes the underlying cloud application resources, images that contain cloud applications, resource management policies, and user allocation settings. For details, see [Publish a delivery group](https://help.aliyun.com/document_detail/426046.html).
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

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
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
     * Creates a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING CloudApp.
     * A delivery group is a logical grouping for delivering cloud applications to end users. It includes the underlying cloud application resources, images that contain cloud applications, resource management policies, and user allocation settings. For details, see [Publish a delivery group](https://help.aliyun.com/document_detail/426046.html).
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
     * Creates a cloud browser group that is billed by monthly active users (MAU).
     *
     * @remarks
     * ## Before you begin
     * - Prepare an available office network, image, and instance type in the target business region. Make sure that the account has the required browser configurations and resource quotas.
     * - Specify `CloudBrowserName` and `BizRegionId`. Set `OsType` to `Windows`.
     * - Authorized users must be created in advance and must match the account type. Authorized user groups must belong to the current account and match the account type of the office network.
     * - **`Users` and `UserGroupIds` cannot both be non-empty.**
     * ## MAU billing parameters
     * - Set `ChargeType` to `PostPaid`.
     * - **Set `SubPayType` to `mau` explicitly. Omitting this field does not enable MAU billing.**
     * - Set `ChargeResourceMode` to `AppInstance`.
     * - Do not specify `Period`, `PeriodUnit`, `AppPackageType`, `AutoPay`, `AutoRenew`, or `NodePool`.
     * ## Post-call processing
     * **A successful response does not indicate that the browser resources are ready.** After creation, query the browser group status and confirm that the group is connectable before use.
     * This operation creates a new cloud browser group. You do not need to create a delivery group in advance.
     * ## Example description
     * The example values of fields are provided to demonstrate how to specify the fields. Replace resource identifiers with actual values under your account. Capacity examples do not represent default values or upper limits.
     * An example value of `-` indicates that the field does not need to be specified. Omit the corresponding parameter when you call the operation. Do not pass the character `-`.
     *
     * @param tmpReq - CreateBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBrowserInstanceGroupResponse
     *
     * @param CreateBrowserInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateBrowserInstanceGroupResponse
     */
    public function createBrowserInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBrowserInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->browserConfig) {
            $request->browserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->browserConfig, 'BrowserConfig', 'json');
        }

        if (null !== $tmpReq->network) {
            $request->networkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }

        if (null !== $tmpReq->nodePool) {
            $request->nodePoolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        if (null !== $tmpReq->securityPolicy) {
            $request->securityPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        if (null !== $tmpReq->timers) {
            $request->timersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timers, 'Timers', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        if (null !== $tmpReq->users) {
            $request->usersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->users, 'Users', 'json');
        }

        $body = [];
        if (null !== $request->appPackageType) {
            @$body['AppPackageType'] = $request->appPackageType;
        }

        if (null !== $request->authNotificationEnabled) {
            @$body['AuthNotificationEnabled'] = $request->authNotificationEnabled;
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

        if (null !== $request->browserConfigShrink) {
            @$body['BrowserConfig'] = $request->browserConfigShrink;
        }

        if (null !== $request->chargeResourceMode) {
            @$body['ChargeResourceMode'] = $request->chargeResourceMode;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->cloudBrowserName) {
            @$body['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->maxAmount) {
            @$body['MaxAmount'] = $request->maxAmount;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->nodePoolShrink) {
            @$body['NodePool'] = $request->nodePoolShrink;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->promotionId) {
            @$body['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->securityPolicyShrink) {
            @$body['SecurityPolicy'] = $request->securityPolicyShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->tagShrink) {
            @$body['Tag'] = $request->tagShrink;
        }

        if (null !== $request->timersShrink) {
            @$body['Timers'] = $request->timersShrink;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        if (null !== $request->usersShrink) {
            @$body['Users'] = $request->usersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud browser group that is billed by monthly active users (MAU).
     *
     * @remarks
     * ## Before you begin
     * - Prepare an available office network, image, and instance type in the target business region. Make sure that the account has the required browser configurations and resource quotas.
     * - Specify `CloudBrowserName` and `BizRegionId`. Set `OsType` to `Windows`.
     * - Authorized users must be created in advance and must match the account type. Authorized user groups must belong to the current account and match the account type of the office network.
     * - **`Users` and `UserGroupIds` cannot both be non-empty.**
     * ## MAU billing parameters
     * - Set `ChargeType` to `PostPaid`.
     * - **Set `SubPayType` to `mau` explicitly. Omitting this field does not enable MAU billing.**
     * - Set `ChargeResourceMode` to `AppInstance`.
     * - Do not specify `Period`, `PeriodUnit`, `AppPackageType`, `AutoPay`, `AutoRenew`, or `NodePool`.
     * ## Post-call processing
     * **A successful response does not indicate that the browser resources are ready.** After creation, query the browser group status and confirm that the group is connectable before use.
     * This operation creates a new cloud browser group. You do not need to create a delivery group in advance.
     * ## Example description
     * The example values of fields are provided to demonstrate how to specify the fields. Replace resource identifiers with actual values under your account. Capacity examples do not represent default values or upper limits.
     * An example value of `-` indicates that the field does not need to be specified. Omit the corresponding parameter when you call the operation. Do not pass the character `-`.
     *
     * @param request - CreateBrowserInstanceGroupRequest
     *
     * @returns CreateBrowserInstanceGroupResponse
     *
     * @param CreateBrowserInstanceGroupRequest $request
     *
     * @return CreateBrowserInstanceGroupResponse
     */
    public function createBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a custom image from a deployed WUYING instance. You can use the custom image to quickly create more WUYING instances with the same configurations, without having to repeatedly configure the instance environment each time.
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
        $query = [];
        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        $body = [];
        if (null !== $request->autoCleanUserdata) {
            @$body['AutoCleanUserdata'] = $request->autoCleanUserdata;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->copyProfile) {
            @$body['CopyProfile'] = $request->copyProfile;
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
            'query' => Utils::query($query),
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
     * Creates a custom image from a deployed WUYING instance. You can use the custom image to quickly create more WUYING instances with the same configurations, without having to repeatedly configure the instance environment each time.
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
     * Creates a new image from a debug delivery group.
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
     * Creates a new image from a debug delivery group.
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
     * Creates a model provider template for model creation.
     *
     * @remarks
     * You can create a model provider template under Model Templates in the WUYING Agent Management Center. This template is used to configure connection information and keys for model services (such as Alibaba Cloud Bailian, Token Plan, and Moonshot) that an Agent can invoke. After model creation, the model provider template is automatically associated with the specified model template.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before you invoke this operation.
     *
     * @param request - CreateModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelProviderTemplateResponse
     *
     * @param CreateModelProviderTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateModelProviderTemplateResponse
     */
    public function createModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableWuyingProxy) {
            @$query['EnableWuyingProxy'] = $request->enableWuyingProxy;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        if (null !== $request->providerType) {
            @$query['ProviderType'] = $request->providerType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model provider template for model creation.
     *
     * @remarks
     * You can create a model provider template under Model Templates in the WUYING Agent Management Center. This template is used to configure connection information and keys for model services (such as Alibaba Cloud Bailian, Token Plan, and Moonshot) that an Agent can invoke. After model creation, the model provider template is automatically associated with the specified model template.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before you invoke this operation.
     *
     * @param request - CreateModelProviderTemplateRequest
     *
     * @returns CreateModelProviderTemplateResponse
     *
     * @param CreateModelProviderTemplateRequest $request
     *
     * @return CreateModelProviderTemplateResponse
     */
    public function createModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a model template.
     *
     * @remarks
     * You can create a model group in the Wuying Agent Management Center to manage the model providers and model scope that an Agent can invoke. After model creation, you can attach the model group to a cloud computer as the inference engine configuration for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before invoking this operation.
     *
     * @param request - CreateModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelTemplateResponse
     *
     * @param CreateModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModelTemplateResponse
     */
    public function createModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model template.
     *
     * @remarks
     * You can create a model group in the Wuying Agent Management Center to manage the model providers and model scope that an Agent can invoke. After model creation, you can attach the model group to a cloud computer as the inference engine configuration for Agent task execution.
     * Make sure that you are familiar with the operations and usage of the Wuying Agent Management Center before invoking this operation.
     *
     * @param request - CreateModelTemplateRequest
     *
     * @returns CreateModelTemplateResponse
     *
     * @param CreateModelTemplateRequest $request
     *
     * @return CreateModelTemplateResponse
     */
    public function createModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates one or more workstations.
     *
     * @remarks
     * 1. A project corresponds to the resource configuration module in the CloudFlow console.
     * 2. When the ContentId input parameter has multiple versions, this API <notice>uses the default version</notice> and bindss it at the same time.
     * 3. This operation succeeds only when the default version of the Content is in an available state.
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

        if (null !== $request->erdmaEnabled) {
            @$body['ErdmaEnabled'] = $request->erdmaEnabled;
        }

        if (null !== $request->gpuDriverVersion) {
            @$body['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->hostName) {
            @$body['HostName'] = $request->hostName;
        }

        if (null !== $request->idempotenceToken) {
            @$body['IdempotenceToken'] = $request->idempotenceToken;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->maxPrice) {
            @$body['MaxPrice'] = $request->maxPrice;
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

        if (null !== $request->savingPlanId) {
            @$body['SavingPlanId'] = $request->savingPlanId;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->serverPortRange) {
            @$body['ServerPortRange'] = $request->serverPortRange;
        }

        if (null !== $request->subPayType) {
            @$body['SubPayType'] = $request->subPayType;
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
     * Creates one or more workstations.
     *
     * @remarks
     * 1. A project corresponds to the resource configuration module in the CloudFlow console.
     * 2. When the ContentId input parameter has multiple versions, this API <notice>uses the default version</notice> and bindss it at the same time.
     * 3. This operation succeeds only when the default version of the Content is in an available state.
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
     * Deletes a pay-as-you-go delivery group of the resource-based type.
     *
     * @remarks
     * > This operation does not support deleting delivery groups that use subscription resources.
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
     * Deletes a pay-as-you-go delivery group of the resource-based type.
     *
     * @remarks
     * > This operation does not support deleting delivery groups that use subscription resources.
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
     * Deletes a specified application instance.
     *
     * @remarks
     * Only instances in the initializing or idle state can be deleted. This operation is available only to specific customers.
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
     * Deletes a specified application instance.
     *
     * @remarks
     * Only instances in the initializing or idle state can be deleted. This operation is available only to specific customers.
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
     * Deletes a custom WUYING image.
     *
     * @remarks
     * - You can delete only custom images that belong to your account.
     * - For images associated with WUYING Cloud Computer Pool, WUYING Cloud Application, or WUYING Workspace product lines, ensure that no WUYING instances are using the image before you delete it.
     * - If a WUYING Cloud Desktop template references an image, the template is also deleted when the image is deleted.
     * - For images that span multiple regions, deleting the image removes the image from all regions.
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
     * Deletes a custom WUYING image.
     *
     * @remarks
     * - You can delete only custom images that belong to your account.
     * - For images associated with WUYING Cloud Computer Pool, WUYING Cloud Application, or WUYING Workspace product lines, ensure that no WUYING instances are using the image before you delete it.
     * - If a WUYING Cloud Desktop template references an image, the template is also deleted when the image is deleted.
     * - For images that span multiple regions, deleting the image removes the image from all regions.
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
     * Deletes an LLM template.
     *
     * @remarks
     * You can delete a model template that has been created under a model service provider template in the WUYING Agent Management Center. Before deletion, ensure that the model is not the default model of an associated model group. Otherwise, the deletion fails. After deletion, the model configurations of associated cloud computers are automatically refreshed.
     * Before using this operation, make sure you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteLlmTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLlmTemplateResponse
     *
     * @param DeleteLlmTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLlmTemplateResponse
     */
    public function deleteLlmTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->llmTemplateId) {
            @$query['LlmTemplateId'] = $request->llmTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLlmTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLlmTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an LLM template.
     *
     * @remarks
     * You can delete a model template that has been created under a model service provider template in the WUYING Agent Management Center. Before deletion, ensure that the model is not the default model of an associated model group. Otherwise, the deletion fails. After deletion, the model configurations of associated cloud computers are automatically refreshed.
     * Before using this operation, make sure you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteLlmTemplateRequest
     *
     * @returns DeleteLlmTemplateResponse
     *
     * @param DeleteLlmTemplateRequest $request
     *
     * @return DeleteLlmTemplateResponse
     */
    public function deleteLlmTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLlmTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a model provider template.
     *
     * @remarks
     * You can delete a model provider template that has been created under model templates in the WUYING Agent Management Center. Before deletion, ensure that the model provider is not the provider of the default model and is not a system preset type provider (such as WUYING credit package). After deletion, the associated models and key configurations are also removed.
     * Before using this operation, make sure you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelProviderTemplateResponse
     *
     * @param DeleteModelProviderTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteModelProviderTemplateResponse
     */
    public function deleteModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model provider template.
     *
     * @remarks
     * You can delete a model provider template that has been created under model templates in the WUYING Agent Management Center. Before deletion, ensure that the model provider is not the provider of the default model and is not a system preset type provider (such as WUYING credit package). After deletion, the associated models and key configurations are also removed.
     * Before using this operation, make sure you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteModelProviderTemplateRequest
     *
     * @returns DeleteModelProviderTemplateResponse
     *
     * @param DeleteModelProviderTemplateRequest $request
     *
     * @return DeleteModelProviderTemplateResponse
     */
    public function deleteModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a model template.
     *
     * @remarks
     * You can delete a model group that has been created in the WUYING Agent Management Center. Before deletion, ensure that the template has not been authorized to any resource. Otherwise, the deletion fails. After deletion, the model providers and models under the model group are also removed.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelTemplateResponse
     *
     * @param DeleteModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteModelTemplateResponse
     */
    public function deleteModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model template.
     *
     * @remarks
     * You can delete a model group that has been created in the WUYING Agent Management Center. Before deletion, ensure that the template has not been authorized to any resource. Otherwise, the deletion fails. After deletion, the model providers and models under the model group are also removed.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - DeleteModelTemplateRequest
     *
     * @returns DeleteModelTemplateResponse
     *
     * @param DeleteModelTemplateRequest $request
     *
     * @return DeleteModelTemplateResponse
     */
    public function deleteModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a cloud graphics workstation.
     *
     * @remarks
     * Deletes a cloud graphics workstation.
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
     * Deletes a cloud graphics workstation.
     *
     * @remarks
     * Deletes a cloud graphics workstation.
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
     * Configures SLS log delivery.
     *
     * @param request - DeliverToUserSlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeliverToUserSlsResponse
     *
     * @param DeliverToUserSlsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeliverToUserSlsResponse
     */
    public function deliverToUserSlsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deliveryScopes) {
            @$bodyFlat['DeliveryScopes'] = $request->deliveryScopes;
        }

        if (null !== $request->existedProjectName) {
            @$body['ExistedProjectName'] = $request->existedProjectName;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->slsRegionId) {
            @$body['SlsRegionId'] = $request->slsRegionId;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeliverToUserSls',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeliverToUserSlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures SLS log delivery.
     *
     * @param request - DeliverToUserSlsRequest
     *
     * @returns DeliverToUserSlsResponse
     *
     * @param DeliverToUserSlsRequest $request
     *
     * @return DeliverToUserSlsResponse
     */
    public function deliverToUserSls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deliverToUserSlsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a development host.
     *
     * @param request - DescribeWuyingServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWuyingServerResponse
     *
     * @param DescribeWuyingServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeWuyingServerResponse
     */
    public function describeWuyingServerWithOptions($request, $runtime)
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
            'action' => 'DescribeWuyingServer',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWuyingServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a development host.
     *
     * @param request - DescribeWuyingServerRequest
     *
     * @returns DescribeWuyingServerResponse
     *
     * @param DescribeWuyingServerRequest $request
     *
     * @return DescribeWuyingServerResponse
     */
    public function describeWuyingServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWuyingServerWithOptions($request, $runtime);
    }

    /**
     * Queries the Elastic IP Address (EIP) information of a Wuying workspace.
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
     * Queries the Elastic IP Address (EIP) information of a Wuying workspace.
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
     * Queries the details of a specified delivery group.
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
     * Queries the details of a specified delivery group.
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
     * Queries the configuration, status, and authorization statistics of a specified cloud browser group.
     *
     * @remarks
     * This topic describes the query usage for the monthly active user (MAU) billing scenario.
     * ## Before you begin
     * Obtain the cloud browser group ID under the current account. Call `ListBrowserInstanceGroup` to retrieve the ID.
     * ## Response
     * The response includes the current configuration, status, and authorization statistics of the browser group. The details return up to 20 bookmarks and 20 website access entries. To retrieve the complete lists, call `ListBrowserBookmarks` and `ListBrowserRestrictedURLs`.
     * ## What to do next
     * This operation only queries configurations and does not modify resources. After you read the returned status, perform the connection or management operation that corresponds to the status.
     * ## Example description
     * The `-` value in the examples indicates that the field is not applicable or not returned in the current scenario. It is not an actual string returned by the operation. Sample resource IDs are masked. Use the actual query results when you call this operation.
     *
     * @param request - GetBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBrowserInstanceGroupResponse
     *
     * @param GetBrowserInstanceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBrowserInstanceGroupResponse
     */
    public function getBrowserInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration, status, and authorization statistics of a specified cloud browser group.
     *
     * @remarks
     * This topic describes the query usage for the monthly active user (MAU) billing scenario.
     * ## Before you begin
     * Obtain the cloud browser group ID under the current account. Call `ListBrowserInstanceGroup` to retrieve the ID.
     * ## Response
     * The response includes the current configuration, status, and authorization statistics of the browser group. The details return up to 20 bookmarks and 20 website access entries. To retrieve the complete lists, call `ListBrowserBookmarks` and `ListBrowserRestrictedURLs`.
     * ## What to do next
     * This operation only queries configurations and does not modify resources. After you read the returned status, perform the connection or management operation that corresponds to the status.
     * ## Example description
     * The `-` value in the examples indicates that the field is not applicable or not returned in the current scenario. It is not an actual string returned by the operation. Sample resource IDs are masked. Use the actual query results when you call this operation.
     *
     * @param request - GetBrowserInstanceGroupRequest
     *
     * @returns GetBrowserInstanceGroupResponse
     *
     * @param GetBrowserInstanceGroupRequest $request
     *
     * @return GetBrowserInstanceGroupResponse
     */
    public function getBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Retrieves the connection credential for a cloud application.
     *
     * @remarks
     * Call protocol description: operation_type: polling, required_steps: 1.
     * This operation may require multiple calls (at least one) to obtain the connection credential.
     * On the first call, an application instance is allocated to the specified convenience account and the application is started. If a Ticket is returned, the result is obtained synchronously. If a startup task ID (`TaskId`) is returned, subsequent calls are required.
     * On subsequent calls, include the `TaskId` request parameter to invoke the operation and query whether the node is complete. When the returned node status (`TaskStatus`) is completed (`Finished`), the connection credential (`Ticket`) is also returned.
     * > Prerequisites
     * > - Before calling this operation, make sure that you have created a delivery group and authorized users for the delivery group:
     * > - 1. The API for creating a delivery group is CreateAppInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     * > - 2. You can call the ListAppInstanceGroup operation to query the list of delivery groups. If the corresponding delivery group is not found, verify that the delivery group has been created and that the authentication credentials belong to the correct tenant.
     * > - 3. The API for authorizing users for a delivery group is AuthorizeInstanceGroup. For more information about the parameters, see the corresponding API documentation.
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

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
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

        if (null !== $request->environmentConfig) {
            @$body['EnvironmentConfig'] = $request->environmentConfig;
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
     * Retrieves the connection credential for a cloud application.
     *
     * @remarks
     * Call protocol description: operation_type: polling, required_steps: 1.
     * This operation may require multiple calls (at least one) to obtain the connection credential.
     * On the first call, an application instance is allocated to the specified convenience account and the application is started. If a Ticket is returned, the result is obtained synchronously. If a startup task ID (`TaskId`) is returned, subsequent calls are required.
     * On subsequent calls, include the `TaskId` request parameter to invoke the operation and query whether the node is complete. When the returned node status (`TaskStatus`) is completed (`Finished`), the connection credential (`Ticket`) is also returned.
     * > Prerequisites
     * > - Before calling this operation, make sure that you have created a delivery group and authorized users for the delivery group:
     * > - 1. The API for creating a delivery group is CreateAppInstanceGroup. For more information about the parameters, see the corresponding API documentation.
     * > - 2. You can call the ListAppInstanceGroup operation to query the list of delivery groups. If the corresponding delivery group is not found, verify that the delivery group has been created and that the authentication credentials belong to the correct tenant.
     * > - 3. The API for authorizing users for a delivery group is AuthorizeInstanceGroup. For more information about the parameters, see the corresponding API documentation.
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
     * Retrieves the information about a debug application instance.
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
     * Retrieves the information about a debug application instance.
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
     * Retrieves file upload information.
     *
     * @remarks
     * Visitor information is filled in on the lead capture page when visitors execute a cloud flow. Therefore, the usage mode of cloud applications does not generate visitor information.
     *
     * @param request - GetFileUploadInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileUploadInfo',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves file upload information.
     *
     * @remarks
     * Visitor information is filled in on the lead capture page when visitors execute a cloud flow. Therefore, the usage mode of cloud applications does not generate visitor information.
     *
     * @param request - GetFileUploadInfoRequest
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $request
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileUploadInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a model provider template.
     *
     * @remarks
     * You can query the details of a specified model provider template in the WUYING Agent Management Center, including the provider name, description, and connection configuration list.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - GetModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelProviderTemplateResponse
     *
     * @param GetModelProviderTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetModelProviderTemplateResponse
     */
    public function getModelProviderTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a model provider template.
     *
     * @remarks
     * You can query the details of a specified model provider template in the WUYING Agent Management Center, including the provider name, description, and connection configuration list.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - GetModelProviderTemplateRequest
     *
     * @returns GetModelProviderTemplateResponse
     *
     * @param GetModelProviderTemplateRequest $request
     *
     * @return GetModelProviderTemplateResponse
     */
    public function getModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an over-the-air update task, including the available version and release notes.
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
     * Queries the details of an over-the-air update task, including the available version and release notes.
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
     * Queries the price information of a resource.
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
     * Queries the price information of a resource.
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
     * Queries the renewal price of WUYING Cloud Application resources.
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
     * Queries the renewal price of WUYING Cloud Application resources.
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
     * Queries the third-party channel configurations of an Agent runtime.
     *
     * @remarks
     * You can query the third-party channel configuration status of Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - GetRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuntimeChannelResponse
     *
     * @param GetRuntimeChannelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRuntimeChannelResponse
     */
    public function getRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->runtimeId) {
            @$query['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->runtimeType) {
            @$query['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the third-party channel configurations of an Agent runtime.
     *
     * @remarks
     * You can query the third-party channel configuration status of Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - GetRuntimeChannelRequest
     *
     * @returns GetRuntimeChannelResponse
     *
     * @param GetRuntimeChannelRequest $request
     *
     * @return GetRuntimeChannelResponse
     */
    public function getRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the model configuration details of a cloud computer.
     *
     * @remarks
     * You can query the model configuration details currently bound to a specified cloud computer in the Wuying Agent Management Center, including model groups, model provider lists, and associated model information. After you enable the risk information mode, you can also identify differences between the end user\\"s actual configuration and the configuration delivered by the administrator.
     *
     * @param request - GetRuntimeModelConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRuntimeModelConfigResponse
     *
     * @param GetRuntimeModelConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRuntimeModelConfigResponse
     */
    public function getRuntimeModelConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->runtimeId) {
            @$query['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->runtimeType) {
            @$query['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRuntimeModelConfig',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRuntimeModelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the model configuration details of a cloud computer.
     *
     * @remarks
     * You can query the model configuration details currently bound to a specified cloud computer in the Wuying Agent Management Center, including model groups, model provider lists, and associated model information. After you enable the risk information mode, you can also identify differences between the end user\\"s actual configuration and the configuration delivered by the administrator.
     *
     * @param request - GetRuntimeModelConfigRequest
     *
     * @returns GetRuntimeModelConfigResponse
     *
     * @param GetRuntimeModelConfigRequest $request
     *
     * @return GetRuntimeModelConfigResponse
     */
    public function getRuntimeModelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuntimeModelConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of multiple delivery groups. This operation queries all delivery groups that meet the specified conditions instead of a specific delivery group.
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
        if (null !== $request->excludedUserGroupIds) {
            @$body['ExcludedUserGroupIds'] = $request->excludedUserGroupIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
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
     * Queries the details of multiple delivery groups. This operation queries all delivery groups that meet the specified conditions instead of a specific delivery group.
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
     * Queries the details of session instances in a delivery group, including instance IDs, instance statuses, creation time, update time, session statuses, and public IP addresses of primary network interface controllers (NICs).
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
     * Queries the details of session instances in a delivery group, including instance IDs, instance statuses, creation time, update time, session statuses, and public IP addresses of primary network interface controllers (NICs).
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
     * Queries the deployed applications in the image used by a specified delivery group with paging and returns the number of users with per-application authorization for each application.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of deployed applications in the application image used by a specified delivery group, including the application ID, name, version, icon, and the number of users currently **authorized by application** for each application (AuthorizedUserCount).
     * The returned AppId is the input for per-application authorization: when you call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to add or remove authorized users for a specified application in a delivery group, pass in the AppId returned by this operation.
     * ## Before you begin
     * - The delivery group is created, and **ProductType matches the product type of the delivery group**. If the delivery group does not exist or the product type does not match, the error code `InvalidAppInstanceGroup.NotFound` is returned.
     * ## Parameter description
     * - **AppInstanceGroupId is required**. This parameter is marked as optional in the parameter table, but the error code `InvalidParameter.AppInstanceGroupId` is returned if it is not specified.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100. If the values are invalid, the error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize` are returned respectively.
     * - If no applications are deployed in the delivery group image, the operation returns normally: Apps is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID (AppInstanceGroupId).
     * 2. Call this operation to obtain the list of deployed applications in the delivery group and the AppId of each application.
     * 3. To authorize by application, call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation with the returned AppId.
     *
     * @param request - ListAppsByAppInstanceGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsByAppInstanceGroupIdResponse
     *
     * @param ListAppsByAppInstanceGroupIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAppsByAppInstanceGroupIdResponse
     */
    public function listAppsByAppInstanceGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
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
            'action' => 'ListAppsByAppInstanceGroupId',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppsByAppInstanceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deployed applications in the image used by a specified delivery group with paging and returns the number of users with per-application authorization for each application.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of deployed applications in the application image used by a specified delivery group, including the application ID, name, version, icon, and the number of users currently **authorized by application** for each application (AuthorizedUserCount).
     * The returned AppId is the input for per-application authorization: when you call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to add or remove authorized users for a specified application in a delivery group, pass in the AppId returned by this operation.
     * ## Before you begin
     * - The delivery group is created, and **ProductType matches the product type of the delivery group**. If the delivery group does not exist or the product type does not match, the error code `InvalidAppInstanceGroup.NotFound` is returned.
     * ## Parameter description
     * - **AppInstanceGroupId is required**. This parameter is marked as optional in the parameter table, but the error code `InvalidParameter.AppInstanceGroupId` is returned if it is not specified.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100. If the values are invalid, the error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize` are returned respectively.
     * - If no applications are deployed in the delivery group image, the operation returns normally: Apps is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID (AppInstanceGroupId).
     * 2. Call this operation to obtain the list of deployed applications in the delivery group and the AppId of each application.
     * 3. To authorize by application, call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation with the returned AppId.
     *
     * @param request - ListAppsByAppInstanceGroupIdRequest
     *
     * @returns ListAppsByAppInstanceGroupIdResponse
     *
     * @param ListAppsByAppInstanceGroupIdRequest $request
     *
     * @return ListAppsByAppInstanceGroupIdResponse
     */
    public function listAppsByAppInstanceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsByAppInstanceGroupIdWithOptions($request, $runtime);
    }

    /**
     * Queries the delivery groups for which a specified user has obtained access permissions through delivery group-level authorization by paging, with support for fuzzy filtering by delivery group ID, delivery group name, application ID, or application name.
     *
     * @remarks
     * ## Operation description
     * This operation queries the list of delivery groups for which a specified user (EndUserId) has been granted **delivery group-level authorization**. The response includes basic information about each delivery group (ID, name, status, region, creation time, expiration time, and more) and the list of applications deployed in the delivery group.
     * Scope of returned results:
     * - Only delivery groups that are authorized to the user as a whole through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are returned. Records authorized on a per-application basis through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation are not included.
     * - Only delivery groups whose product type matches the ProductType parameter and that have not been deleted are returned. A delivery group is not returned if its image contains no deployed applications.
     * - Results are sorted in reverse chronological order by the update time of the authorization record. The most recently authorized or modified delivery groups appear first.
     * ## Before you begin
     * - Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * ## Parameter description
     * - **ProductType and EndUserId are required**. If ProductType is not specified, the error code `InvalidParameter.ProductType` is returned. If EndUserId is not specified, the error code `InvalidParameter.UserId` is returned.
     * - EndUserId performs an **exact match** on the username. AppInstanceGroupId, AppInstanceGroupName, AppId, and AppName all perform **fuzzy matching** (a hit occurs if the value is contained). When multiple filter conditions are specified, all conditions must be met simultaneously.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - If the user has no authorized delivery groups that match the conditions, the operation returns normally: AppInstanceGroupModels is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID, and then call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * 2. Call this operation to query the delivery groups authorized to the user and the applications deployed in each delivery group.
     * 3. To obtain an application connection ticket for the user, call the [GetConnectionTicket](~~GetConnectionTicket~~) operation with the AppInstanceGroupId and the AppId from the Apps list in the response.
     *
     * @param request - ListAuthorizedAppInstanceGroupByUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedAppInstanceGroupByUserResponse
     *
     * @param ListAuthorizedAppInstanceGroupByUserRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAuthorizedAppInstanceGroupByUserResponse
     */
    public function listAuthorizedAppInstanceGroupByUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
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
            'action' => 'ListAuthorizedAppInstanceGroupByUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedAppInstanceGroupByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the delivery groups for which a specified user has obtained access permissions through delivery group-level authorization by paging, with support for fuzzy filtering by delivery group ID, delivery group name, application ID, or application name.
     *
     * @remarks
     * ## Operation description
     * This operation queries the list of delivery groups for which a specified user (EndUserId) has been granted **delivery group-level authorization**. The response includes basic information about each delivery group (ID, name, status, region, creation time, expiration time, and more) and the list of applications deployed in the delivery group.
     * Scope of returned results:
     * - Only delivery groups that are authorized to the user as a whole through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are returned. Records authorized on a per-application basis through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation are not included.
     * - Only delivery groups whose product type matches the ProductType parameter and that have not been deleted are returned. A delivery group is not returned if its image contains no deployed applications.
     * - Results are sorted in reverse chronological order by the update time of the authorization record. The most recently authorized or modified delivery groups appear first.
     * ## Before you begin
     * - Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * ## Parameter description
     * - **ProductType and EndUserId are required**. If ProductType is not specified, the error code `InvalidParameter.ProductType` is returned. If EndUserId is not specified, the error code `InvalidParameter.UserId` is returned.
     * - EndUserId performs an **exact match** on the username. AppInstanceGroupId, AppInstanceGroupName, AppId, and AppName all perform **fuzzy matching** (a hit occurs if the value is contained). When multiple filter conditions are specified, all conditions must be met simultaneously.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - If the user has no authorized delivery groups that match the conditions, the operation returns normally: AppInstanceGroupModels is an empty list and TotalCount is 0.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID, and then call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize the delivery group to the user.
     * 2. Call this operation to query the delivery groups authorized to the user and the applications deployed in each delivery group.
     * 3. To obtain an application connection ticket for the user, call the [GetConnectionTicket](~~GetConnectionTicket~~) operation with the AppInstanceGroupId and the AppId from the Apps list in the response.
     *
     * @param request - ListAuthorizedAppInstanceGroupByUserRequest
     *
     * @returns ListAuthorizedAppInstanceGroupByUserResponse
     *
     * @param ListAuthorizedAppInstanceGroupByUserRequest $request
     *
     * @return ListAuthorizedAppInstanceGroupByUserResponse
     */
    public function listAuthorizedAppInstanceGroupByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedAppInstanceGroupByUserWithOptions($request, $runtime);
    }

    /**
     * Queries the applications for which a specified user has obtained access permissions through per-application authorization by paging. You can filter results by delivery group ID, delivery group name, application ID, or application name using fuzzy match.
     *
     * @remarks
     * ## Operation description
     * This operation queries the applications that a specified user is authorized to access at the application granularity. **Only records authorized at the application level are returned** (for example, authorizations completed through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation). Authorizations granted to an entire delivery group through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are not included in the response.
     * The results are deduplicated by the combination of delivery group and application. Each record corresponds to one application within one delivery group.
     * ## Before you begin
     * - The user must already exist under the current account. If the user does not exist, the error code `User.NotFound` is returned. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the username.
     * - The delivery group that contains the application must already be created, and the application must have been authorized to the user at the application level. If no per-application authorization has been performed, an empty application list is returned.
     * ## Parameter description
     * - **`EndUserId` and `ProductType` are required.** Set `ProductType` to `CloudApp`, which indicates WUYING Cloud Application.
     * - `AppInstanceGroupId`, `AppId`, `AppInstanceGroupName`, and `AppName` are optional filter conditions. All of them use fuzzy match and can be combined in any way. If all are omitted, all per-application authorization records for the user are returned.
     * - Use `PageNumber` and `PageSize` for paging. `PageNumber` starts from 1, and `PageSize` ranges from 1 to 100. Use the returned `TotalCount` to determine whether to continue querying.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications within the delivery group (AppId in the Apps list).
     * 2. Call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize the application to the target user.
     * 3. Call this operation to query the applications that the user is authorized to access.
     *
     * @param request - ListAuthorizedAppsByUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedAppsByUserResponse
     *
     * @param ListAuthorizedAppsByUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAuthorizedAppsByUserResponse
     */
    public function listAuthorizedAppsByUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
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
            'action' => 'ListAuthorizedAppsByUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedAppsByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications for which a specified user has obtained access permissions through per-application authorization by paging. You can filter results by delivery group ID, delivery group name, application ID, or application name using fuzzy match.
     *
     * @remarks
     * ## Operation description
     * This operation queries the applications that a specified user is authorized to access at the application granularity. **Only records authorized at the application level are returned** (for example, authorizations completed through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation). Authorizations granted to an entire delivery group through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation are not included in the response.
     * The results are deduplicated by the combination of delivery group and application. Each record corresponds to one application within one delivery group.
     * ## Before you begin
     * - The user must already exist under the current account. If the user does not exist, the error code `User.NotFound` is returned. Call the [DescribeUsers](https://help.aliyun.com/document_detail/436936.html) operation to obtain the username.
     * - The delivery group that contains the application must already be created, and the application must have been authorized to the user at the application level. If no per-application authorization has been performed, an empty application list is returned.
     * ## Parameter description
     * - **`EndUserId` and `ProductType` are required.** Set `ProductType` to `CloudApp`, which indicates WUYING Cloud Application.
     * - `AppInstanceGroupId`, `AppId`, `AppInstanceGroupName`, and `AppName` are optional filter conditions. All of them use fuzzy match and can be combined in any way. If all are omitted, all per-application authorization records for the user are returned.
     * - Use `PageNumber` and `PageSize` for paging. `PageNumber` starts from 1, and `PageSize` ranges from 1 to 100. Use the returned `TotalCount` to determine whether to continue querying.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) or [GetAppInstanceGroup](https://help.aliyun.com/document_detail/600836.html) operation to obtain the delivery group ID (AppInstanceGroupId) and the application IDs of deployed applications within the delivery group (AppId in the Apps list).
     * 2. Call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize the application to the target user.
     * 3. Call this operation to query the applications that the user is authorized to access.
     *
     * @param request - ListAuthorizedAppsByUserRequest
     *
     * @returns ListAuthorizedAppsByUserResponse
     *
     * @param ListAuthorizedAppsByUserRequest $request
     *
     * @return ListAuthorizedAppsByUserResponse
     */
    public function listAuthorizedAppsByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedAppsByUserWithOptions($request, $runtime);
    }

    /**
     * Queries the list of user groups authorized by a specified delivery group.
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

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
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
     * Queries the list of user groups authorized by a specified delivery group.
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
     * Queries the list of authorized users for a specified delivery group or delivery group set by using paging. Supports exact or fuzzy filtering by username.
     *
     * @remarks
     * ## Operation description
     * This operation queries the currently authorized users of a specified delivery group (AppInstanceGroupId) or delivery group set (AppInstanceGroupSetId). It returns each user\\"s username, account type, email address, phone number, and the authorization mode of the associated delivery group.
     * - This operation returns **authorization relationships** and does not indicate whether users are currently online or have established connections.
     * - In the Cloud Browser product, a delivery group corresponds to a cloud browser group, and a delivery group ID corresponds to a browser group ID.
     * The scope of results depends on the authorization mode of the delivery group (response parameter AuthMode):
     * - When the authorization mode is `App` (application-level authorization) or `AppInstanceGroup` (delivery group-level authorization): Returns users authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation at the delivery group level, as well as users authorized through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation at the application level. If AppId is specified, only users **authorized for that specific application** are returned.
     * - When the authorization mode is `Session` (session-level authorization): Returns users who have been granted persistent sessions. The AppInstancePersistentIds field lists all persistent session IDs granted to each user. If AppInstancePersistentId is specified, only users granted that session are returned.
     * - When querying by delivery group set: Returns users authorized for the set. The response parameter AppInstanceGroupId is the primary delivery group ID of the set, and AppInstanceGroupSetId is the queried set ID.
     * When querying by delivery group, results are sorted in descending order by authorization time, with the most recently authorized users listed first.
     * ## Before you begin
     * - The target delivery group or delivery group set must be created, belong to the current account, and match the specified ProductType. Otherwise, a resource-not-found error code is returned.
     * - Users must have been authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) or [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation. If no users have been authorized, the operation returns normally with an empty Users list and TotalCount of 0.
     * ## Parameter description
     * - **ProductType, PageNumber, and PageSize are required**. If ProductType has an invalid value, the error code `ProductTypeInvalid` is returned.
     * - **Exactly one of AppInstanceGroupId and AppInstanceGroupSetId must be specified**. If both or neither are specified, the error code `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId` is returned.
     * - **AppId and AppInstancePersistentId are not supported when querying by delivery group set**. If specified, the error codes `InvalidParameter.AppId` and `InvalidParameter.AppInstancePersistentId` are returned respectively.
     * - EndUserId performs **exact matching** by username. UserIdFuzzy performs **fuzzy matching** by username (a hit occurs if the username contains the keyword). Both can be specified simultaneously, in which case both conditions must be met.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - When the authorization mode is `App` or `AppInstanceGroup`, TotalCount is the number of **authorization records** that match the conditions. If the same user has multiple authorization records (for example, authorized for multiple applications), the records are merged into a single user entry in Users. Therefore, the number of users returned on the current page may be less than PageSize. Use TotalCount to determine whether to continue paging. When the authorization mode is `Session`, TotalCount is the deduplicated user count.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID. For cloud browser groups, call the [ListBrowserInstanceGroup](~~ListBrowserInstanceGroup~~) operation.
     * 2. Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize at the delivery group level, or call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize at the application level.
     * 3. Call this operation to query authorized users. To remove authorization, pass the returned EndUserId values to the UnAuthorizeUserIds parameter of the authorization operations mentioned above.
     * ## Error codes
     * - `ProductTypeInvalid`: The value of ProductType is invalid.
     * - `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId`: Both AppInstanceGroupId and AppInstanceGroupSetId are specified, or neither is specified.
     * - `InvalidParameter.AppId`: AppId is specified when querying by delivery group set.
     * - `InvalidParameter.AppInstancePersistentId`: AppInstancePersistentId is specified when querying by delivery group set.
     * - `InvalidAppInstanceGroupSpecItem.NotFound`: The delivery group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidBrowserInstanceGroup.NotFound`: When ProductType is `CloudBrowser`, the cloud browser group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidAppInstanceGroupSet.NotFound`: The delivery group set does not exist, does not belong to the current account, the product type does not match, or the set does not have an available primary delivery group.
     * - `InvalidAppInstanceGroupSet.ActivationFailed`: The delivery group set is not in an available state.
     *
     * @param request - ListAuthorizedUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->userIdFuzzy) {
            @$query['UserIdFuzzy'] = $request->userIdFuzzy;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupSetId) {
            @$body['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
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
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizedUsers',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuthorizedUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of authorized users for a specified delivery group or delivery group set by using paging. Supports exact or fuzzy filtering by username.
     *
     * @remarks
     * ## Operation description
     * This operation queries the currently authorized users of a specified delivery group (AppInstanceGroupId) or delivery group set (AppInstanceGroupSetId). It returns each user\\"s username, account type, email address, phone number, and the authorization mode of the associated delivery group.
     * - This operation returns **authorization relationships** and does not indicate whether users are currently online or have established connections.
     * - In the Cloud Browser product, a delivery group corresponds to a cloud browser group, and a delivery group ID corresponds to a browser group ID.
     * The scope of results depends on the authorization mode of the delivery group (response parameter AuthMode):
     * - When the authorization mode is `App` (application-level authorization) or `AppInstanceGroup` (delivery group-level authorization): Returns users authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation at the delivery group level, as well as users authorized through the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation at the application level. If AppId is specified, only users **authorized for that specific application** are returned.
     * - When the authorization mode is `Session` (session-level authorization): Returns users who have been granted persistent sessions. The AppInstancePersistentIds field lists all persistent session IDs granted to each user. If AppInstancePersistentId is specified, only users granted that session are returned.
     * - When querying by delivery group set: Returns users authorized for the set. The response parameter AppInstanceGroupId is the primary delivery group ID of the set, and AppInstanceGroupSetId is the queried set ID.
     * When querying by delivery group, results are sorted in descending order by authorization time, with the most recently authorized users listed first.
     * ## Before you begin
     * - The target delivery group or delivery group set must be created, belong to the current account, and match the specified ProductType. Otherwise, a resource-not-found error code is returned.
     * - Users must have been authorized through the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) or [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation. If no users have been authorized, the operation returns normally with an empty Users list and TotalCount of 0.
     * ## Parameter description
     * - **ProductType, PageNumber, and PageSize are required**. If ProductType has an invalid value, the error code `ProductTypeInvalid` is returned.
     * - **Exactly one of AppInstanceGroupId and AppInstanceGroupSetId must be specified**. If both or neither are specified, the error code `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId` is returned.
     * - **AppId and AppInstancePersistentId are not supported when querying by delivery group set**. If specified, the error codes `InvalidParameter.AppId` and `InvalidParameter.AppInstancePersistentId` are returned respectively.
     * - EndUserId performs **exact matching** by username. UserIdFuzzy performs **fuzzy matching** by username (a hit occurs if the username contains the keyword). Both can be specified simultaneously, in which case both conditions must be met.
     * - PageNumber starts from 1. Valid values of PageSize: 1 to 100.
     * - When the authorization mode is `App` or `AppInstanceGroup`, TotalCount is the number of **authorization records** that match the conditions. If the same user has multiple authorization records (for example, authorized for multiple applications), the records are merged into a single user entry in Users. Therefore, the number of users returned on the current page may be less than PageSize. Use TotalCount to determine whether to continue paging. When the authorization mode is `Session`, TotalCount is the deduplicated user count.
     * ## Call sequence
     * 1. Call the [ListAppInstanceGroup](~~ListAppInstanceGroup~~) operation to obtain the delivery group ID. For cloud browser groups, call the [ListBrowserInstanceGroup](~~ListBrowserInstanceGroup~~) operation.
     * 2. Call the [AuthorizeInstanceGroup](~~AuthorizeInstanceGroup~~) operation to authorize at the delivery group level, or call the [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~) operation to authorize at the application level.
     * 3. Call this operation to query authorized users. To remove authorization, pass the returned EndUserId values to the UnAuthorizeUserIds parameter of the authorization operations mentioned above.
     * ## Error codes
     * - `ProductTypeInvalid`: The value of ProductType is invalid.
     * - `InvalidParameter.AppInstanceGroupId/AppInstanceGroupSetId`: Both AppInstanceGroupId and AppInstanceGroupSetId are specified, or neither is specified.
     * - `InvalidParameter.AppId`: AppId is specified when querying by delivery group set.
     * - `InvalidParameter.AppInstancePersistentId`: AppInstancePersistentId is specified when querying by delivery group set.
     * - `InvalidAppInstanceGroupSpecItem.NotFound`: The delivery group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidBrowserInstanceGroup.NotFound`: When ProductType is `CloudBrowser`, the cloud browser group does not exist, does not belong to the current account, or the product type does not match.
     * - `InvalidAppInstanceGroupSet.NotFound`: The delivery group set does not exist, does not belong to the current account, the product type does not match, or the set does not have an available primary delivery group.
     * - `InvalidAppInstanceGroupSet.ActivationFailed`: The delivery group set is not in an available state.
     *
     * @param request - ListAuthorizedUsersRequest
     *
     * @returns ListAuthorizedUsersResponse
     *
     * @param ListAuthorizedUsersRequest $request
     *
     * @return ListAuthorizedUsersResponse
     */
    public function listAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the bindng information between users and resources.
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
     * Queries the bindng information between users and resources.
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
     * Queries cloud browser groups and their current status by paging.
     *
     * @remarks
     * This topic describes how to use this operation in the monthly active user (MAU) billing scenario.
     * ## Query conditions
     * You can filter by browser group identity, name, business region, office network, set, authorized user group, and status. Only one status value can be specified at a time.
     * ## Paging
     * Use `PageNumber` and `PageSize` for paging. Use the returned `TotalCount` to determine whether to continue querying the next page.
     * ## What to do next
     * To view the detailed configuration of a single browser group, invoke `GetBrowserInstanceGroup` with the returned identity.
     * ## Example notes
     * The `-` in the examples indicates that the field is not applicable or not returned in the current scenario. It is not an actual character string returned by the operation. Resource identities in the examples are masked. Use the actual query results in your environment.
     *
     * @param request - ListBrowserInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBrowserInstanceGroupResponse
     *
     * @param ListBrowserInstanceGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListBrowserInstanceGroupResponse
     */
    public function listBrowserInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appInstanceGroupSetId) {
            @$query['AppInstanceGroupSetId'] = $request->appInstanceGroupSetId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->browserInstanceGroupId) {
            @$query['BrowserInstanceGroupId'] = $request->browserInstanceGroupId;
        }

        if (null !== $request->browserInstanceGroupName) {
            @$query['BrowserInstanceGroupName'] = $request->browserInstanceGroupName;
        }

        if (null !== $request->cloudBrowserName) {
            @$query['CloudBrowserName'] = $request->cloudBrowserName;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tier) {
            @$query['Tier'] = $request->tier;
        }

        $body = [];
        if (null !== $request->excludedUserGroupIds) {
            @$body['ExcludedUserGroupIds'] = $request->excludedUserGroupIds;
        }

        $bodyFlat = [];
        if (null !== $request->status) {
            @$bodyFlat['Status'] = $request->status;
        }

        if (null !== $request->userGroupIds) {
            @$body['UserGroupIds'] = $request->userGroupIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBrowserInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBrowserInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries cloud browser groups and their current status by paging.
     *
     * @remarks
     * This topic describes how to use this operation in the monthly active user (MAU) billing scenario.
     * ## Query conditions
     * You can filter by browser group identity, name, business region, office network, set, authorized user group, and status. Only one status value can be specified at a time.
     * ## Paging
     * Use `PageNumber` and `PageSize` for paging. Use the returned `TotalCount` to determine whether to continue querying the next page.
     * ## What to do next
     * To view the detailed configuration of a single browser group, invoke `GetBrowserInstanceGroup` with the returned identity.
     * ## Example notes
     * The `-` in the examples indicates that the field is not applicable or not returned in the current scenario. It is not an actual character string returned by the operation. Resource identities in the examples are masked. Use the actual query results in your environment.
     *
     * @param request - ListBrowserInstanceGroupRequest
     *
     * @returns ListBrowserInstanceGroupResponse
     *
     * @param ListBrowserInstanceGroupRequest $request
     *
     * @return ListBrowserInstanceGroupResponse
     */
    public function listBrowserInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBrowserInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the list of desktop agent runtimes.
     *
     * @param request - ListDesktopAgentRuntimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDesktopAgentRuntimeResponse
     *
     * @param ListDesktopAgentRuntimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDesktopAgentRuntimeResponse
     */
    public function listDesktopAgentRuntimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentImOnlineStatus) {
            @$query['AgentImOnlineStatus'] = $request->agentImOnlineStatus;
        }

        if (null !== $request->agentInstanceStatuses) {
            @$query['AgentInstanceStatuses'] = $request->agentInstanceStatuses;
        }

        if (null !== $request->agentInstanceVersions) {
            @$query['AgentInstanceVersions'] = $request->agentInstanceVersions;
        }

        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentPlatformList) {
            @$query['AgentPlatformList'] = $request->agentPlatformList;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->agentProviderList) {
            @$query['AgentProviderList'] = $request->agentProviderList;
        }

        if (null !== $request->agentTemplateIds) {
            @$query['AgentTemplateIds'] = $request->agentTemplateIds;
        }

        if (null !== $request->authUsers) {
            @$query['AuthUsers'] = $request->authUsers;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->channelConfigure) {
            @$query['ChannelConfigure'] = $request->channelConfigure;
        }

        if (null !== $request->deploymentSource) {
            @$query['DeploymentSource'] = $request->deploymentSource;
        }

        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->desktopNames) {
            @$query['DesktopNames'] = $request->desktopNames;
        }

        if (null !== $request->desktopStatuses) {
            @$query['DesktopStatuses'] = $request->desktopStatuses;
        }

        if (null !== $request->hasAuthUser) {
            @$query['HasAuthUser'] = $request->hasAuthUser;
        }

        if (null !== $request->hasRisk) {
            @$query['HasRisk'] = $request->hasRisk;
        }

        if (null !== $request->includeRiskInfo) {
            @$query['IncludeRiskInfo'] = $request->includeRiskInfo;
        }

        if (null !== $request->managementStatus) {
            @$query['ManagementStatus'] = $request->managementStatus;
        }

        if (null !== $request->modelConfigure) {
            @$query['ModelConfigure'] = $request->modelConfigure;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDesktopAgentRuntime',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDesktopAgentRuntimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of desktop agent runtimes.
     *
     * @param request - ListDesktopAgentRuntimeRequest
     *
     * @returns ListDesktopAgentRuntimeResponse
     *
     * @param ListDesktopAgentRuntimeRequest $request
     *
     * @return ListDesktopAgentRuntimeResponse
     */
    public function listDesktopAgentRuntime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDesktopAgentRuntimeWithOptions($request, $runtime);
    }

    /**
     * Queries image information.
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
        if (null !== $request->distro) {
            @$query['Distro'] = $request->distro;
        }

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
     * Queries image information.
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
     * Queries the list of LLM templates.
     *
     * @remarks
     * You can query the list of model templates under a model provider template in the WUYING Agent Management Center with paging. Filtering by model group ID, model provider template ID, model template ID, and model encoding is supported. When querying by model group dimension, the default model is automatically pinned to the top.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param tmpReq - ListLlmTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLlmTemplatesResponse
     *
     * @param ListLlmTemplatesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListLlmTemplatesResponse
     */
    public function listLlmTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListLlmTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->llmTemplateIds) {
            $request->llmTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->llmTemplateIds, 'LlmTemplateIds', 'json');
        }

        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->llmCode) {
            @$query['LlmCode'] = $request->llmCode;
        }

        if (null !== $request->llmTemplateIdsShrink) {
            @$query['LlmTemplateIds'] = $request->llmTemplateIdsShrink;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerTemplateId) {
            @$query['ProviderTemplateId'] = $request->providerTemplateId;
        }

        if (null !== $request->smartModel) {
            @$query['SmartModel'] = $request->smartModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLlmTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLlmTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of LLM templates.
     *
     * @remarks
     * You can query the list of model templates under a model provider template in the WUYING Agent Management Center with paging. Filtering by model group ID, model provider template ID, model template ID, and model encoding is supported. When querying by model group dimension, the default model is automatically pinned to the top.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListLlmTemplatesRequest
     *
     * @returns ListLlmTemplatesResponse
     *
     * @param ListLlmTemplatesRequest $request
     *
     * @return ListLlmTemplatesResponse
     */
    public function listLlmTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLlmTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of model provider endpoints.
     *
     * @param request - ListModelProviderEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProviderEndpointsResponse
     *
     * @param ListModelProviderEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListModelProviderEndpointsResponse
     */
    public function listModelProviderEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviderEndpoints',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProviderEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of model provider endpoints.
     *
     * @param request - ListModelProviderEndpointsRequest
     *
     * @returns ListModelProviderEndpointsResponse
     *
     * @param ListModelProviderEndpointsRequest $request
     *
     * @return ListModelProviderEndpointsResponse
     */
    public function listModelProviderEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProviderEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of model provider templates.
     *
     * @remarks
     * You can perform a paged query to retrieve the list of model provider templates under a specified model group in the WUYING Agent Management Center. You can filter results by provider name, model group ID, and provider template ID. Paging is supported.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param tmpReq - ListModelProviderTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelProviderTemplatesResponse
     *
     * @param ListModelProviderTemplatesRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListModelProviderTemplatesResponse
     */
    public function listModelProviderTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelProviderTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->providerTemplateIds) {
            $request->providerTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->providerTemplateIds, 'ProviderTemplateIds', 'json');
        }

        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        if (null !== $request->providerTemplateIdsShrink) {
            @$query['ProviderTemplateIds'] = $request->providerTemplateIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelProviderTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelProviderTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of model provider templates.
     *
     * @remarks
     * You can perform a paged query to retrieve the list of model provider templates under a specified model group in the WUYING Agent Management Center. You can filter results by provider name, model group ID, and provider template ID. Paging is supported.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelProviderTemplatesRequest
     *
     * @returns ListModelProviderTemplatesResponse
     *
     * @param ListModelProviderTemplatesRequest $request
     *
     * @return ListModelProviderTemplatesResponse
     */
    public function listModelProviderTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelProviderTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of resource groups associated with a model group.
     *
     * @remarks
     * You can call this operation to query the list of resource groups authorized by a model group in the WUYING Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelTemplateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelTemplateResourceGroupResponse
     *
     * @param ListModelTemplateResourceGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListModelTemplateResourceGroupResponse
     */
    public function listModelTemplateResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelTemplateResourceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelTemplateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource groups associated with a model group.
     *
     * @remarks
     * You can call this operation to query the list of resource groups authorized by a model group in the WUYING Agent Management Center.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - ListModelTemplateResourceGroupRequest
     *
     * @returns ListModelTemplateResourceGroupResponse
     *
     * @param ListModelTemplateResourceGroupRequest $request
     *
     * @return ListModelTemplateResourceGroupResponse
     */
    public function listModelTemplateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelTemplateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries a list of model templates.
     *
     * @remarks
     * You can use paged query to retrieve the list of model groups created in the Wuying Agent Management Center. You can filter results by Agent provider, Agent platform, template group ID, and whether models have been configured. Paging is supported.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param tmpReq - ListModelTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelTemplatesResponse
     *
     * @param ListModelTemplatesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListModelTemplatesResponse
     */
    public function listModelTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->modelTemplateIdList) {
            $request->modelTemplateIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelTemplateIdList, 'ModelTemplateIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentPlatform) {
            @$query['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentPlatformList) {
            @$query['AgentPlatformList'] = $request->agentPlatformList;
        }

        if (null !== $request->agentProvider) {
            @$query['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->agentProviderList) {
            @$query['AgentProviderList'] = $request->agentProviderList;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->hasModel) {
            @$query['HasModel'] = $request->hasModel;
        }

        if (null !== $request->modelTemplateIdListShrink) {
            @$query['ModelTemplateIdList'] = $request->modelTemplateIdListShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelTemplates',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of model templates.
     *
     * @remarks
     * You can use paged query to retrieve the list of model groups created in the Wuying Agent Management Center. You can filter results by Agent provider, Agent platform, template group ID, and whether models have been configured. Paging is supported.
     * Before using this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - ListModelTemplatesRequest
     *
     * @returns ListModelTemplatesResponse
     *
     * @param ListModelTemplatesRequest $request
     *
     * @return ListModelTemplatesResponse
     */
    public function listModelTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the resource specifications available for selection when creating a delivery group.
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

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
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

        if (null !== $request->instanceTypeForModify) {
            @$query['InstanceTypeForModify'] = $request->instanceTypeForModify;
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

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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
     * Queries the resource specifications available for selection when creating a delivery group.
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
     * Queries the list of resource nodes.
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
     * Queries the list of resource nodes.
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
     * Queries the history of over-the-air updates.
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
     * Queries the history of over-the-air updates.
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
     * Queries the list of persistent session application instances in a delivery group.
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
     * Queries the list of persistent session application instances in a delivery group.
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
     * Queries published delivery groups and their application information for a specified product type under the current Alibaba Cloud account by using paging. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When calling this operation with a RAM user or STS credential, the `appstreaming:ListPublishedAppInstanceGroup` permission is required.
     * A delivery group must be in the published state and have deployed applications in its image to appear in the query results. This operation only queries information. It does not create delivery groups, assign users, or grant application access permissions.
     * ## Query and pagination
     * - **You must explicitly pass in `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can pass them individually or in combination. When multiple conditions are specified, all conditions must be met simultaneously. When both `AppId` and `AppName` are specified, the same application must satisfy both conditions.
     * - If an optional filter parameter is not specified or is set to an empty string, that condition is not applied. Query results are sorted by delivery group creation time from newest to oldest. A delivery group is not returned multiple times even if it contains multiple matching applications.
     * - `ExcludeUserId` excludes delivery groups in which all applications have been directly authorized to the specified user. It cannot be used to determine whether the user has no access permissions at all.
     * - `AppId` and `AppName` only filter delivery groups. **They do not restrict the returned `Apps` list to only the matched applications.**
     * ## Invoke sequence
     * 1. Invoke a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `AppInstanceGroupModels`. To retrieve the next page, keep the product type and filter conditions unchanged and increment `PageNumber`. If no delivery groups match, the total count is `0` and the list is empty. If the page number exceeds the result range, the list may also be empty, but the total count still represents the total number of matching delivery groups.
     * 3. To retrieve details of a single delivery group, pass the full `AppInstanceGroupId` from the response and the same `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identifiers in the examples are for format demonstration purposes. Replace them with your actual identifiers when invoking the operation.
     *
     * @param request - ListPublishedAppInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAppInstanceGroupResponse
     *
     * @param ListPublishedAppInstanceGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPublishedAppInstanceGroupResponse
     */
    public function listPublishedAppInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->excludeUserId) {
            @$query['ExcludeUserId'] = $request->excludeUserId;
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
            'action' => 'ListPublishedAppInstanceGroup',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries published delivery groups and their application information for a specified product type under the current Alibaba Cloud account by using paging. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When calling this operation with a RAM user or STS credential, the `appstreaming:ListPublishedAppInstanceGroup` permission is required.
     * A delivery group must be in the published state and have deployed applications in its image to appear in the query results. This operation only queries information. It does not create delivery groups, assign users, or grant application access permissions.
     * ## Query and pagination
     * - **You must explicitly pass in `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can pass them individually or in combination. When multiple conditions are specified, all conditions must be met simultaneously. When both `AppId` and `AppName` are specified, the same application must satisfy both conditions.
     * - If an optional filter parameter is not specified or is set to an empty string, that condition is not applied. Query results are sorted by delivery group creation time from newest to oldest. A delivery group is not returned multiple times even if it contains multiple matching applications.
     * - `ExcludeUserId` excludes delivery groups in which all applications have been directly authorized to the specified user. It cannot be used to determine whether the user has no access permissions at all.
     * - `AppId` and `AppName` only filter delivery groups. **They do not restrict the returned `Apps` list to only the matched applications.**
     * ## Invoke sequence
     * 1. Invoke a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `AppInstanceGroupModels`. To retrieve the next page, keep the product type and filter conditions unchanged and increment `PageNumber`. If no delivery groups match, the total count is `0` and the list is empty. If the page number exceeds the result range, the list may also be empty, but the total count still represents the total number of matching delivery groups.
     * 3. To retrieve details of a single delivery group, pass the full `AppInstanceGroupId` from the response and the same `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identifiers in the examples are for format demonstration purposes. Replace them with your actual identifiers when invoking the operation.
     *
     * @param request - ListPublishedAppInstanceGroupRequest
     *
     * @returns ListPublishedAppInstanceGroupResponse
     *
     * @param ListPublishedAppInstanceGroupRequest $request
     *
     * @return ListPublishedAppInstanceGroupResponse
     */
    public function listPublishedAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries deployed applications in published delivery groups under the current Alibaba Cloud account for a specified product type by paging, and returns each application along with its delivery group and the number of authorized users by application. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When you call this operation by using a RAM user or Security Token Service (STS) credential, you must have the `appstreaming:ListPublishedApps` permission.
     * Only delivery groups in the published state whose images contain deployed applications are included in the query results. This operation only queries information. It does not create delivery groups or grant or revoke application access permissions.
     * ## Response granularity
     * Results are returned on a per-delivery-group-plus-application basis. If the same application is deployed in multiple published delivery groups, a separate record is returned for each combination. `TotalCount` also reflects the number of such combinations. The list is sorted by the creation time of the delivery group in descending order.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`. Invalid values return error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize`, respectively.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can specify them individually or in combination. When multiple conditions are specified, all conditions must be met.
     * - If an optional filter parameter is not specified or is set to an empty string, filtering is not applied for that condition.
     * - `ExcludeUserId` excludes applications that have been authorized to the specified user by application, which helps you find applications that can still be authorized to that user. **Access permissions granted through delivery-group-level authorization or user groups are not evaluated by this condition.**
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `Apps`. To retrieve the next page, increment `PageNumber` while keeping the product type and filter conditions unchanged. If no results match, `TotalCount` is `0` and `Apps` is an empty list. If the page number exceeds the result range, `Apps` may also be empty, but `TotalCount` still indicates the total number of matching records.
     * 3. To authorize users for a specific application by application, pass the returned `AppInstanceGroupId`, `AppId`, and the same `ProductType` to [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~). To view delivery group details, pass `AppInstanceGroupId` and `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identities in the examples are for format demonstration purposes. Replace them with your actual identities when you invoke the operation.
     *
     * @param request - ListPublishedAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAppsResponse
     *
     * @param ListPublishedAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPublishedAppsResponse
     */
    public function listPublishedAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceGroupName) {
            @$query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->excludeUserId) {
            @$query['ExcludeUserId'] = $request->excludeUserId;
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
            'action' => 'ListPublishedApps',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries deployed applications in published delivery groups under the current Alibaba Cloud account for a specified product type by paging, and returns each application along with its delivery group and the number of authorized users by application. Supports filtering by delivery group, application, and user authorization status.
     *
     * @remarks
     * ## Before you begin
     * When you call this operation by using a RAM user or Security Token Service (STS) credential, you must have the `appstreaming:ListPublishedApps` permission.
     * Only delivery groups in the published state whose images contain deployed applications are included in the query results. This operation only queries information. It does not create delivery groups or grant or revoke application access permissions.
     * ## Response granularity
     * Results are returned on a per-delivery-group-plus-application basis. If the same application is deployed in multiple published delivery groups, a separate record is returned for each combination. `TotalCount` also reflects the number of such combinations. The list is sorted by the creation time of the delivery group in descending order.
     * ## Query and pagination
     * - **You must explicitly specify `ProductType`, `PageNumber`, and `PageSize`.** Page numbers start from `1`, and the page size ranges from `1` to `100`. Invalid values return error codes `InvalidParameter.PageNumber` and `InvalidParameter.PageSize`, respectively.
     * - `AppInstanceGroupId`, `AppInstanceGroupName`, `AppId`, and `AppName` all support substring matching. You can specify them individually or in combination. When multiple conditions are specified, all conditions must be met.
     * - If an optional filter parameter is not specified or is set to an empty string, filtering is not applied for that condition.
     * - `ExcludeUserId` excludes applications that have been authorized to the specified user by application, which helps you find applications that can still be authorized to that user. **Access permissions granted through delivery-group-level authorization or user groups are not evaluated by this condition.**
     * ## Invocation sequence
     * 1. Initiate a query with `PageNumber=1` and the desired `PageSize`. For WUYING Cloud Application common scenarios, use `ProductType=CloudApp`.
     * 2. Read `Apps`. To retrieve the next page, increment `PageNumber` while keeping the product type and filter conditions unchanged. If no results match, `TotalCount` is `0` and `Apps` is an empty list. If the page number exceeds the result range, `Apps` may also be empty, but `TotalCount` still indicates the total number of matching records.
     * 3. To authorize users for a specific application by application, pass the returned `AppInstanceGroupId`, `AppId`, and the same `ProductType` to [AuthorizeUsersForApp](~~AuthorizeUsersForApp~~). To view delivery group details, pass `AppInstanceGroupId` and `ProductType` to [GetAppInstanceGroup](~~GetAppInstanceGroup~~).
     * The masked identities in the examples are for format demonstration purposes. Replace them with your actual identities when you invoke the operation.
     *
     * @param request - ListPublishedAppsRequest
     *
     * @returns ListPublishedAppsResponse
     *
     * @param ListPublishedAppsRequest $request
     *
     * @return ListPublishedAppsResponse
     */
    public function listPublishedApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppsWithOptions($request, $runtime);
    }

    /**
     * Queries the regions supported by WUYING Cloud Application.
     *
     * @remarks
     * > The regions returned by this operation are not all available regions. For information about available regions, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
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
     * Queries the regions supported by WUYING Cloud Application.
     *
     * @remarks
     * > The regions returned by this operation are not all available regions. For information about available regions, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
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
     * Queries the tags of one or more specified cloud resources.
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
     * Queries the tags of one or more specified cloud resources.
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
     * Queries tags bound to one or more delivery groups, or filters delivery groups that have specific tags bound by tag key-value pairs.
     *
     * @remarks
     * This operation complies with the Alibaba Cloud tagging standard and is used to query tags bound to Elastic Cloud Application (China) delivery groups. You can query tags bound to resources by resource ID, or filter resources that have specific tags bound by tag key-value pairs.
     * ## Before you begin
     * - A delivery group is created. You can call the ListAppInstanceGroup operation to obtain the delivery group ID.
     * - Tags are bound to the delivery group. You can bind tags by calling the TagResources operation, or by using the console or the Tag service.
     * ## Parameter description
     * - **ResourceType is required**. Only `APPINSTANCEGROUP` (delivery group) is supported. If you specify other values, the error code `InvalidResourceType.Invalid` is returned.
     * - **Specify at least one of ResourceId.N and Tag.N**. If neither is specified, the error code `MissingParameter.ResourceIdsOrTags` is returned.
     *   - If only ResourceId.N is specified: all tags attached to the specified resources are returned.
     *   - If only Tag.N is specified: all resources that have the specified tags attached and their matching tags are returned.
     *   - If both are specified: only records of the specified resources that have the specified tags attached are returned.
     * - Tag.N.Key is required. If it is empty, the error code `InvalidTagPolicy.KeyInvalid` is returned. Tag.N.Value is optional. If it is not specified, the value of the tag key is not restricted, which means any tag value under the key is matched.
     * - Multiple Tag.N conditions have an AND relationship. A resource is returned only if it has all specified tags attached.
     * ## Response description
     * - Each record in the response corresponds to a resource-tag key-value pair. If a resource has multiple tags bound, multiple records are returned.
     * - TotalCount indicates the number of records returned.
     * - This operation returns all matching results at a time. An empty NextToken value indicates that no more data is available.
     * ## Invocation sequence
     * 1. Invoke the ListAppInstanceGroup operation to obtain the delivery group ID.
     * 2. Invoke the TagResources operation to attach tags to the delivery group.
     * 3. Invoke this operation to query tag bindings by resource ID or tag conditions.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $bodyFlat = [];
        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tags bound to one or more delivery groups, or filters delivery groups that have specific tags bound by tag key-value pairs.
     *
     * @remarks
     * This operation complies with the Alibaba Cloud tagging standard and is used to query tags bound to Elastic Cloud Application (China) delivery groups. You can query tags bound to resources by resource ID, or filter resources that have specific tags bound by tag key-value pairs.
     * ## Before you begin
     * - A delivery group is created. You can call the ListAppInstanceGroup operation to obtain the delivery group ID.
     * - Tags are bound to the delivery group. You can bind tags by calling the TagResources operation, or by using the console or the Tag service.
     * ## Parameter description
     * - **ResourceType is required**. Only `APPINSTANCEGROUP` (delivery group) is supported. If you specify other values, the error code `InvalidResourceType.Invalid` is returned.
     * - **Specify at least one of ResourceId.N and Tag.N**. If neither is specified, the error code `MissingParameter.ResourceIdsOrTags` is returned.
     *   - If only ResourceId.N is specified: all tags attached to the specified resources are returned.
     *   - If only Tag.N is specified: all resources that have the specified tags attached and their matching tags are returned.
     *   - If both are specified: only records of the specified resources that have the specified tags attached are returned.
     * - Tag.N.Key is required. If it is empty, the error code `InvalidTagPolicy.KeyInvalid` is returned. Tag.N.Value is optional. If it is not specified, the value of the tag key is not restricted, which means any tag value under the key is matched.
     * - Multiple Tag.N conditions have an AND relationship. A resource is returned only if it has all specified tags attached.
     * ## Response description
     * - Each record in the response corresponds to a resource-tag key-value pair. If a resource has multiple tags bound, multiple records are returned.
     * - TotalCount indicates the number of records returned.
     * - This operation returns all matching results at a time. An empty NextToken value indicates that no more data is available.
     * ## Invocation sequence
     * 1. Invoke the ListAppInstanceGroup operation to obtain the delivery group ID.
     * 2. Invoke the TagResources operation to attach tags to the delivery group.
     * 3. Invoke this operation to query tag bindings by resource ID or tag conditions.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information of an administrator account, such as whether resource expiration reminders are enabled.
     *
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
     * Queries the configuration information of an administrator account, such as whether resource expiration reminders are enabled.
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
     * Queries a list of workstations.
     *
     * @remarks
     * Retrieves a list of WUYING workstations.
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

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->expiredTimeEnd) {
            @$body['ExpiredTimeEnd'] = $request->expiredTimeEnd;
        }

        if (null !== $request->expiredTimeStart) {
            @$body['ExpiredTimeStart'] = $request->expiredTimeStart;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->networkInterfaceIp) {
            @$body['NetworkInterfaceIp'] = $request->networkInterfaceIp;
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

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->serverInstanceType) {
            @$body['ServerInstanceType'] = $request->serverInstanceType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->users) {
            @$bodyFlat['Users'] = $request->users;
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

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
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
     * Queries a list of workstations.
     *
     * @remarks
     * Retrieves a list of WUYING workstations.
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
     * Queries the list of available zone IDs for a specified region, product type, and operating system type.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of available zone IDs for the current Alibaba Cloud account based on the specified region, product type, and operating system type. A typical use case is to check which zones are available before creating a resource that requires a vSwitch, and then select a vSwitch in one of those zones.
     * This operation only queries information. It does not create resources or incur fees.
     * ## Before you begin
     * - When calling this operation with a RAM user or STS credential, the `appstreaming:ListAppInstanceType` permission is required. If the permission is insufficient, the error code `Forbidden.NoPermission` is returned.
     * - **`ProductType`, `BizRegionId`, and `OsType` are all required.** If any of these parameters is missing, empty, or set to an unrecognized value, the error code `InvalidParameter.ValueInvalid` is returned.
     * - `BizRegionId` must be a region ID supported by WUYING Cloud Application. Call [ListRegions](~~ListRegions~~) first to obtain the supported region IDs.
     * ## Call sequence
     * 1. Call [ListRegions](~~ListRegions~~) to obtain the supported region IDs.
     * 2. Call this operation with the region ID, target product type, and operating system type, and read the returned `ListZonesModel.Zones`.
     * 3. When creating a resource that requires a vSwitch, select a vSwitch in one of the returned zones. For example, pass the corresponding vSwitch ID when calling [CreateAppInstanceGroup](~~CreateAppInstanceGroup~~) or [CreateWuyingServer](~~CreateWuyingServer~~).
     * The returned zone list is determined by the available resources in the current region and may change over time. Query the list in real time before creating resources instead of caching it for extended periods.
     *
     * @param request - ListZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZones',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of available zone IDs for a specified region, product type, and operating system type.
     *
     * @remarks
     * ## Operation description
     * This operation returns the list of available zone IDs for the current Alibaba Cloud account based on the specified region, product type, and operating system type. A typical use case is to check which zones are available before creating a resource that requires a vSwitch, and then select a vSwitch in one of those zones.
     * This operation only queries information. It does not create resources or incur fees.
     * ## Before you begin
     * - When calling this operation with a RAM user or STS credential, the `appstreaming:ListAppInstanceType` permission is required. If the permission is insufficient, the error code `Forbidden.NoPermission` is returned.
     * - **`ProductType`, `BizRegionId`, and `OsType` are all required.** If any of these parameters is missing, empty, or set to an unrecognized value, the error code `InvalidParameter.ValueInvalid` is returned.
     * - `BizRegionId` must be a region ID supported by WUYING Cloud Application. Call [ListRegions](~~ListRegions~~) first to obtain the supported region IDs.
     * ## Call sequence
     * 1. Call [ListRegions](~~ListRegions~~) to obtain the supported region IDs.
     * 2. Call this operation with the region ID, target product type, and operating system type, and read the returned `ListZonesModel.Zones`.
     * 3. When creating a resource that requires a vSwitch, select a vSwitch in one of the returned zones. For example, pass the corresponding vSwitch ID when calling [CreateAppInstanceGroup](~~CreateAppInstanceGroup~~) or [CreateWuyingServer](~~CreateWuyingServer~~).
     * The returned zone list is determined by the available resources in the current region and may change over time. Query the list in real time before creating resources instead of caching it for extended periods.
     *
     * @param request - ListZonesRequest
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZonesWithOptions($request, $runtime);
    }

    /**
     * Logs off all sessions in a pay-as-you-go delivery group that has scheduled auto scaling enabled.
     *
     * @remarks
     * > This operation applies only to pay-as-you-go resource delivery groups that have scheduled auto scaling enabled. The operation can be called only outside the scaling time periods specified in the scheduled auto scaling policy.
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
     * Logs off all sessions in a pay-as-you-go delivery group that has scheduled auto scaling enabled.
     *
     * @remarks
     * > This operation applies only to pay-as-you-go resource delivery groups that have scheduled auto scaling enabled. The operation can be called only outside the scaling time periods specified in the scheduled auto scaling policy.
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
     * Modifies the General Policy of a delivery group, including the number of concurrent sessions and the session retention duration after disconnection.
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
     * Modifies the General Policy of a delivery group, including the number of concurrent sessions and the session retention duration after disconnection.
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
     * Modifies the display policy of a delivery group, including settings such as frame rate, resolution, and protocol type.
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
     * Modifies the display policy of a delivery group, including settings such as frame rate, resolution, and protocol type.
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
     * Modifies the attributes of a Wuying Cloud Browser.
     *
     * @remarks
     * Modifies the attributes of a Wuying Cloud Browser.
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

        if (null !== $tmpReq->storagePolicy) {
            $request->storagePolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
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
        if (null !== $request->authNotificationEnabled) {
            @$body['AuthNotificationEnabled'] = $request->authNotificationEnabled;
        }

        if (null !== $request->cloudBrowserName) {
            @$body['CloudBrowserName'] = $request->cloudBrowserName;
        }

        if (null !== $request->maxAmount) {
            @$body['MaxAmount'] = $request->maxAmount;
        }

        if (null !== $request->networkShrink) {
            @$body['Network'] = $request->networkShrink;
        }

        if (null !== $request->storagePolicyShrink) {
            @$body['StoragePolicy'] = $request->storagePolicyShrink;
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
     * Modifies the attributes of a Wuying Cloud Browser.
     *
     * @remarks
     * Modifies the attributes of a Wuying Cloud Browser.
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
     * Upgrades the number of nodes in a subscription delivery group.
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
     * Upgrades the number of nodes in a subscription delivery group.
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
     * Modifies the elastic mode of a delivery group, including fixed quantity (no elastic scaling), scheduled scaling, and automatic scaling.
     *
     * @remarks
     * You can configure the elastic pattern for WUYING Cloud Application resources in Settings:
     * - Fixed quantity: Elastic scaling is not used.
     * - Automatic scaling: Automatically scales resources based on the number of connected sessions and the duration without session connections.
     * - Scheduled scaling: Executes resource scaling during specified time periods on specified dates.
     * Before using this operation, make sure that you fully understand the [billing method and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Cloud Application.
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
     * Modifies the elastic mode of a delivery group, including fixed quantity (no elastic scaling), scheduled scaling, and automatic scaling.
     *
     * @remarks
     * You can configure the elastic pattern for WUYING Cloud Application resources in Settings:
     * - Fixed quantity: Elastic scaling is not used.
     * - Automatic scaling: Automatically scales resources based on the number of connected sessions and the duration without session connections.
     * - Scheduled scaling: Executes resource scaling during specified time periods on specified dates.
     * Before using this operation, make sure that you fully understand the [billing method and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Cloud Application.
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
     * Modifies the administrator account configuration, such as whether to enable resource expiration reminders.
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
     * Modifies the administrator account configuration, such as whether to enable resource expiration reminders.
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
     * Modifies the properties of a workstation.
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
        if (null !== $request->erdmaEnabled) {
            @$body['ErdmaEnabled'] = $request->erdmaEnabled;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
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
     * Modifies the properties of a workstation.
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
     * Queries the allocated users added to a delivery group by paging.
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
     * Queries the allocated users added to a delivery group by paging.
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
     * Removes model groups from a resource group.
     *
     * @remarks
     * You can authorize model groups for resources that belong to Agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. These model groups serve as inference engines for Agents to execute tasks within the resource group.
     * When an Agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the Agent runtime setting.
     * When you remove the model group from the resource group to which an Agent runtime belongs, the model group configured on the Agent runtime itself automatically takes effect.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - RemoveResourceGroupModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveResourceGroupModelTemplateResponse
     *
     * @param RemoveResourceGroupModelTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveResourceGroupModelTemplateResponse
     */
    public function removeResourceGroupModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->resourceGroupIds) {
            @$body['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveResourceGroupModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveResourceGroupModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes model groups from a resource group.
     *
     * @remarks
     * You can authorize model groups for resources that belong to Agent runtimes such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. These model groups serve as inference engines for Agents to execute tasks within the resource group.
     * When an Agent runtime has its own model group configured and the resource group it belongs to also has a model group configured, the model group bound to the resource group takes effect. The resource group setting has a higher priority than the Agent runtime setting.
     * When you remove the model group from the resource group to which an Agent runtime belongs, the model group configured on the Agent runtime itself automatically takes effect.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - RemoveResourceGroupModelTemplateRequest
     *
     * @returns RemoveResourceGroupModelTemplateResponse
     *
     * @param RemoveResourceGroupModelTemplateRequest $request
     *
     * @return RemoveResourceGroupModelTemplateResponse
     */
    public function removeResourceGroupModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeResourceGroupModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Removes a third-party channel configuration from the Agent runtime.
     *
     * @remarks
     * You can call this operation to remove a specific third-party channel configuration from Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. After the removal, the Agent cannot use the third-party channel for conversations.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - RemoveRuntimeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRuntimeChannelResponse
     *
     * @param RemoveRuntimeChannelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveRuntimeChannelResponse
     */
    public function removeRuntimeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentPlatform) {
            @$body['AgentPlatform'] = $request->agentPlatform;
        }

        if (null !== $request->agentProvider) {
            @$body['AgentProvider'] = $request->agentProvider;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveRuntimeChannel',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRuntimeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a third-party channel configuration from the Agent runtime.
     *
     * @remarks
     * You can call this operation to remove a specific third-party channel configuration from Agents such as JVS Computer, OpenClaw, and Hermes Agent in the Wuying Agent Management Center. After the removal, the Agent cannot use the third-party channel for conversations.
     * Before calling this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - RemoveRuntimeChannelRequest
     *
     * @returns RemoveRuntimeChannelResponse
     *
     * @param RemoveRuntimeChannelRequest $request
     *
     * @return RemoveRuntimeChannelResponse
     */
    public function removeRuntimeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRuntimeChannelWithOptions($request, $runtime);
    }

    /**
     * Removes a model group from an Agent runtime resource.
     *
     * @remarks
     * You can remove model groups from Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. When an Agent runtime resource needs to switch to a different model group, call this operation first to remove the authorization relationship between the Agent runtime resource and the existing model group.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - RemoveRuntimeModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRuntimeModelTemplateResponse
     *
     * @param RemoveRuntimeModelTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveRuntimeModelTemplateResponse
     */
    public function removeRuntimeModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelTemplateId) {
            @$body['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->runtimeIds) {
            @$body['RuntimeIds'] = $request->runtimeIds;
        }

        if (null !== $request->runtimeType) {
            @$body['RuntimeType'] = $request->runtimeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveRuntimeModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRuntimeModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a model group from an Agent runtime resource.
     *
     * @remarks
     * You can remove model groups from Agent runtime resources such as JVS Computer, OpenClaw, and Hermes Agent in the WUYING Agent Management Center. When an Agent runtime resource needs to switch to a different model group, call this operation first to remove the authorization relationship between the Agent runtime resource and the existing model group.
     * Make sure that you are familiar with the operations and usage of the WUYING Agent Management Center before calling this operation.
     *
     * @param request - RemoveRuntimeModelTemplateRequest
     *
     * @returns RemoveRuntimeModelTemplateResponse
     *
     * @param RemoveRuntimeModelTemplateRequest $request
     *
     * @return RemoveRuntimeModelTemplateResponse
     */
    public function removeRuntimeModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRuntimeModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Renews a delivery group.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Workspace.
     * > Prerequisites:
     * > - The delivery group must be in the PUBLISHED state, and ChargeType must be set to PrePaid.
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
     * Before you call this operation, make sure that you fully understand the [billing and pricing](https://help.aliyun.com/document_detail/426039.html) of WUYING Workspace.
     * > Prerequisites:
     * > - The delivery group must be in the PUBLISHED state, and ChargeType must be set to PrePaid.
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
     * Renews a workstation.
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
     * Renews a workstation.
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
     * Restarts a workstation.
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
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
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
     * Restarts a workstation.
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
     * Initiates a task to copy an image to other regions.
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
     * Initiates a task to copy an image to other regions.
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
     * Starts a workstation.
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
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
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
     * Starts a workstation.
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
     * Stops a workstation.
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

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
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
     * Stops a workstation.
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
     * Creates and attaches tags to cloud resources. For resources that already have the specified tags, updates the tag values.
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
     * Creates and attaches tags to cloud resources. For resources that already have the specified tags, updates the tag values.
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
     * Creates and binds tags to specified China Office (Chinese: Wuying) delivery groups in compliance with Alibaba Cloud tag specifications. If a tag key already exists on a resource, the tag value is updated to the value specified in the current request. Currently, only delivery group (`APPINSTANCEGROUP`) resource types are supported.
     *
     * @remarks
     * ## Before you begin
     * When you use a RAM user or Security Token Service (STS) credential to call this operation, you must have the `appstreaming:TagResources` permission.
     * The resources to which you want to bind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs.
     * ## Tag rules
     * - In a single request, you can bind up to **20 tags** to up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - A tag key must be 1 to 128 characters in length. A tag value must be 0 to 256 characters in length. Both are case-sensitive.
     * - A tag key cannot start with `aliyun` or `acs:` (case-insensitive). Neither tag keys nor tag values can contain `http://` or `https://`.
     * - Tag keys in the same request must be unique. Otherwise, the error code `InvalidTag.Duplicated` is returned.
     * - Each tag key on a resource can correspond to only one tag value. If the tag key already exists on the resource, the tag value is updated to the new value.
     * - A maximum of 20 custom tags can be bound to a single resource. If this limit is exceeded, the error code `ResourceTag.CustomTagCountExceed` is returned.
     * ## Results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails.** The error code `InvalidAppInstanceGroup.NotFound` is returned, and no tags are bound to any resource.
     * - If the binding succeeds, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and only some of them fail to be bound, the operation still returns a success response without failure details. Call `ListTagResources` to verify the binding results. If only one resource is specified and the binding fails, the operation returns the corresponding error code.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the IDs of the delivery groups to which you want to add tags.
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP`, `ResourceId.N`, and `Tag.N.Key`/`Tag.N.Value`.
     * 3. To view the tags bound to resources, call `ListTagResources`. To unbind tags, call `UntagResources`.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and binds tags to specified China Office (Chinese: Wuying) delivery groups in compliance with Alibaba Cloud tag specifications. If a tag key already exists on a resource, the tag value is updated to the value specified in the current request. Currently, only delivery group (`APPINSTANCEGROUP`) resource types are supported.
     *
     * @remarks
     * ## Before you begin
     * When you use a RAM user or Security Token Service (STS) credential to call this operation, you must have the `appstreaming:TagResources` permission.
     * The resources to which you want to bind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs.
     * ## Tag rules
     * - In a single request, you can bind up to **20 tags** to up to **50 resources**. Duplicate resource IDs are automatically deduplicated.
     * - A tag key must be 1 to 128 characters in length. A tag value must be 0 to 256 characters in length. Both are case-sensitive.
     * - A tag key cannot start with `aliyun` or `acs:` (case-insensitive). Neither tag keys nor tag values can contain `http://` or `https://`.
     * - Tag keys in the same request must be unique. Otherwise, the error code `InvalidTag.Duplicated` is returned.
     * - Each tag key on a resource can correspond to only one tag value. If the tag key already exists on the resource, the tag value is updated to the new value.
     * - A maximum of 20 custom tags can be bound to a single resource. If this limit is exceeded, the error code `ResourceTag.CustomTagCountExceed` is returned.
     * ## Results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails.** The error code `InvalidAppInstanceGroup.NotFound` is returned, and no tags are bound to any resource.
     * - If the binding succeeds, the response contains only `RequestId` and does not return tag details.
     * - If multiple resources are specified and only some of them fail to be bound, the operation still returns a success response without failure details. Call `ListTagResources` to verify the binding results. If only one resource is specified and the binding fails, the operation returns the corresponding error code.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain the IDs of the delivery groups to which you want to add tags.
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP`, `ResourceId.N`, and `Tag.N.Key`/`Tag.N.Value`.
     * 3. To view the tags bound to resources, call `ListTagResources`. To unbind tags, call `UntagResources`.
     * The masked identifiers in the examples are used to demonstrate the format. Replace them with your actual identifiers when you call the operation.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds secondary private IP addresses from a development host.
     *
     * @param request - UnassignWuyingServerPrivateAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassignWuyingServerPrivateAddressesResponse
     *
     * @param UnassignWuyingServerPrivateAddressesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UnassignWuyingServerPrivateAddressesResponse
     */
    public function unassignWuyingServerPrivateAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->privateIpAddresses) {
            @$body['PrivateIpAddresses'] = $request->privateIpAddresses;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnassignWuyingServerPrivateAddresses',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassignWuyingServerPrivateAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds secondary private IP addresses from a development host.
     *
     * @param request - UnassignWuyingServerPrivateAddressesRequest
     *
     * @returns UnassignWuyingServerPrivateAddressesResponse
     *
     * @param UnassignWuyingServerPrivateAddressesRequest $request
     *
     * @return UnassignWuyingServerPrivateAddressesResponse
     */
    public function unassignWuyingServerPrivateAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignWuyingServerPrivateAddressesWithOptions($request, $runtime);
    }

    /**
     * Unbinds a user from a session.
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
     * Unbinds a user from a session.
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
     * Unbinds tags from cloud resources in a unified manner.
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
     * Unbinds tags from cloud resources in a unified manner.
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
     * Unbinds tags from specified Wuying delivery groups in compliance with Alibaba Cloud tagging standards. You can unbind specific tags by tag key or unbind all custom tags from a resource at once by setting `All=true` without specifying tag keys. Currently, only the delivery group (`APPINSTANCEGROUP`) resource type is supported.
     *
     * @remarks
     * ## Before you begin
     * When calling this operation with a RAM user or STS credential, the `appstreaming:UntagResources` permission is required.
     * The resources from which you want to unbind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can obtain delivery group IDs by calling [ListAppInstanceGroup](~~ListAppInstanceGroup~~), and query tags that are bound to a resource by calling [ListTagResources](~~ListTagResources~~).
     * ## Parameter description
     * - You can unbind tags from up to **50 resources** in a single request. Duplicate resource IDs are automatically deduplicated.
     * - **Specify at least one of `TagKey.N` and `All`.** If neither is specified, or if `TagKey.N` is not specified and `All` is set to `false`, the error code `InvalidParameter.TagKeyListOrAll` is returned.
     *   - If `TagKey.N` is specified: only the tags that correspond to the specified tag keys are unbound. You can specify up to 20 tag keys at a time. The `All` parameter is ignored.
     *   - If `TagKey.N` is not specified and `All=true`: all custom tags on the resource are unbound, including Wuying system tags that start with `System/` and were attached by calling [TagResources](~~TagResources~~).
     * - If a specified tag key does not exist on the resource, the tag key is skipped and no error is returned.
     * - Tag keys that start with `System/` are Wuying system tags. Only `System/Scheduler/GRAYSCALE` and `System/Scheduler/STOP_NEW_USER_CONNECTION` are supported. If you specify other tag keys that start with `System/`, the error code `InvalidTagPolicy.KeyInvalid` or `InvalidTag.SystemKeyNotAllow` is returned.
     * ## Execution results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails** with the error code `InvalidAppInstanceGroup.NotFound`, and no tags are unbound from any resource.
     * - On success, the response contains only `RequestId` and does not return tag details.
     * - When multiple resources are specified and only some fail to have tags unbound, the operation still returns success and the response does not contain failure details. Call [ListTagResources](~~ListTagResources~~) to verify the unbinding results. When only one resource is specified and the unbinding fails, the operation returns the corresponding error code directly.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs. To check which tag keys are bound to a resource, call [ListTagResources](~~ListTagResources~~).
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP` and `ResourceId.N`, and specify `TagKey.N` or `All=true` to indicate the tags to unbind.
     * 3. To rebind tags, call [TagResources](~~TagResources~~).
     * The masked identifiers in the examples are for format demonstration purposes only. Replace them with your actual identifiers when making calls.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$body['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds tags from specified Wuying delivery groups in compliance with Alibaba Cloud tagging standards. You can unbind specific tags by tag key or unbind all custom tags from a resource at once by setting `All=true` without specifying tag keys. Currently, only the delivery group (`APPINSTANCEGROUP`) resource type is supported.
     *
     * @remarks
     * ## Before you begin
     * When calling this operation with a RAM user or STS credential, the `appstreaming:UntagResources` permission is required.
     * The resources from which you want to unbind tags must belong to the current Alibaba Cloud account. **This operation currently supports only delivery group resources.** You can set `ResourceType` only to `APPINSTANCEGROUP`. You can obtain delivery group IDs by calling [ListAppInstanceGroup](~~ListAppInstanceGroup~~), and query tags that are bound to a resource by calling [ListTagResources](~~ListTagResources~~).
     * ## Parameter description
     * - You can unbind tags from up to **50 resources** in a single request. Duplicate resource IDs are automatically deduplicated.
     * - **Specify at least one of `TagKey.N` and `All`.** If neither is specified, or if `TagKey.N` is not specified and `All` is set to `false`, the error code `InvalidParameter.TagKeyListOrAll` is returned.
     *   - If `TagKey.N` is specified: only the tags that correspond to the specified tag keys are unbound. You can specify up to 20 tag keys at a time. The `All` parameter is ignored.
     *   - If `TagKey.N` is not specified and `All=true`: all custom tags on the resource are unbound, including Wuying system tags that start with `System/` and were attached by calling [TagResources](~~TagResources~~).
     * - If a specified tag key does not exist on the resource, the tag key is skipped and no error is returned.
     * - Tag keys that start with `System/` are Wuying system tags. Only `System/Scheduler/GRAYSCALE` and `System/Scheduler/STOP_NEW_USER_CONNECTION` are supported. If you specify other tag keys that start with `System/`, the error code `InvalidTagPolicy.KeyInvalid` or `InvalidTag.SystemKeyNotAllow` is returned.
     * ## Execution results
     * - **If any specified delivery group does not exist or does not belong to the current account, the entire request fails** with the error code `InvalidAppInstanceGroup.NotFound`, and no tags are unbound from any resource.
     * - On success, the response contains only `RequestId` and does not return tag details.
     * - When multiple resources are specified and only some fail to have tags unbound, the operation still returns success and the response does not contain failure details. Call [ListTagResources](~~ListTagResources~~) to verify the unbinding results. When only one resource is specified and the unbinding fails, the operation returns the corresponding error code directly.
     * ## Call sequence
     * 1. Call [ListAppInstanceGroup](~~ListAppInstanceGroup~~) to obtain delivery group IDs. To check which tag keys are bound to a resource, call [ListTagResources](~~ListTagResources~~).
     * 2. Call this operation with `ResourceType=APPINSTANCEGROUP` and `ResourceId.N`, and specify `TagKey.N` or `All=true` to indicate the tags to unbind.
     * 3. To rebind tags, call [TagResources](~~TagResources~~).
     * The masked identifiers in the examples are for format demonstration purposes only. Replace them with your actual identifiers when making calls.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the image of a delivery group.
     *
     * @remarks
     * >Warning: After the image update starts, sessions of end users who are accessing cloud applications will be disconnected. Proceed with caution to avoid data loss for end users.
     * > Before calling this API, the delivery group must be in the PUBLISHED, DEPLOYED, or MAINTAIN_FAILED state. You can call GetAppInstanceGroup to query the current state of the delivery group.
     * > After the update is published, you typically need to wait about 2 minutes for the changes to take effect on the client.
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
     * >Warning: After the image update starts, sessions of end users who are accessing cloud applications will be disconnected. Proceed with caution to avoid data loss for end users.
     * > Before calling this API, the delivery group must be in the PUBLISHED, DEPLOYED, or MAINTAIN_FAILED state. You can call GetAppInstanceGroup to query the current state of the delivery group.
     * > After the update is published, you typically need to wait about 2 minutes for the changes to take effect on the client.
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

    /**
     * Updates a model provider template.
     *
     * @remarks
     * You can update a model provider template that has been created in the WUYING Agent Management Center, including the template name, description, model service connection configuration, and WUYING security proxy switch. Partial field updates are supported. You only need to pass in the fields that you want to modify.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param tmpReq - UpdateModelProviderTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelProviderTemplateResponse
     *
     * @param UpdateModelProviderTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateModelProviderTemplateResponse
     */
    public function updateModelProviderTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelProviderTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->configShrink) {
            @$query['Config'] = $request->configShrink;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableWuyingProxy) {
            @$body['EnableWuyingProxy'] = $request->enableWuyingProxy;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->providerTemplateId) {
            @$body['ProviderTemplateId'] = $request->providerTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelProviderTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelProviderTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a model provider template.
     *
     * @remarks
     * You can update a model provider template that has been created in the WUYING Agent Management Center, including the template name, description, model service connection configuration, and WUYING security proxy switch. Partial field updates are supported. You only need to pass in the fields that you want to modify.
     * Before using this operation, make sure that you are familiar with the operations and usage of the WUYING Agent Management Center.
     *
     * @param request - UpdateModelProviderTemplateRequest
     *
     * @returns UpdateModelProviderTemplateResponse
     *
     * @param UpdateModelProviderTemplateRequest $request
     *
     * @return UpdateModelProviderTemplateResponse
     */
    public function updateModelProviderTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelProviderTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates a model template.
     *
     * @remarks
     * You can update a model group that has been created in the Wuying Agent Management Center, including the group name, description, and model configuration information. You can modify the default model of a model group by updating the Config field. The updated configuration automatically takes effect on associated cloud desktops.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - UpdateModelTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelTemplateResponse
     *
     * @param UpdateModelTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateModelTemplateResponse
     */
    public function updateModelTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->modelTemplateId) {
            @$query['ModelTemplateId'] = $request->modelTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->refScope) {
            @$query['RefScope'] = $request->refScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateModelTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a model template.
     *
     * @remarks
     * You can update a model group that has been created in the Wuying Agent Management Center, including the group name, description, and model configuration information. You can modify the default model of a model group by updating the Config field. The updated configuration automatically takes effect on associated cloud desktops.
     * Before you call this operation, make sure that you are familiar with the operations and usage of the Wuying Agent Management Center.
     *
     * @param request - UpdateModelTemplateRequest
     *
     * @returns UpdateModelTemplateResponse
     *
     * @param UpdateModelTemplateRequest $request
     *
     * @return UpdateModelTemplateResponse
     */
    public function updateModelTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates a workstation image.
     *
     * @param request - UpdateWuyingServerImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWuyingServerImageResponse
     *
     * @param UpdateWuyingServerImageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWuyingServerImageResponse
     */
    public function updateWuyingServerImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->wuyingServerId) {
            @$body['WuyingServerId'] = $request->wuyingServerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWuyingServerImage',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWuyingServerImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a workstation image.
     *
     * @param request - UpdateWuyingServerImageRequest
     *
     * @returns UpdateWuyingServerImageResponse
     *
     * @param UpdateWuyingServerImageRequest $request
     *
     * @return UpdateWuyingServerImageResponse
     */
    public function updateWuyingServerImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWuyingServerImageWithOptions($request, $runtime);
    }
}

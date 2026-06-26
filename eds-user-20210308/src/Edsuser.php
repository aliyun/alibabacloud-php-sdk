<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\BatchSetDesktopManagerRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\BatchSetDesktopManagerResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ChangeUserPasswordRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ChangeUserPasswordResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteResourceGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgByLayerRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgByLayerResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveUserOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveUserOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SyncAllEduInfoResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\TransferResourcesIntoGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\TransferResourcesIntoGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\TransferResourcesOutofGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\TransferResourcesOutofGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchJoinGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchJoinGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchQuitGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchQuitGroupResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Edsuser extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'eds-user.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'eds-user.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eds-user', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Add or remove local administrator permissions on a cloud computer for a convenience account.
     *
     * @remarks
     * A convenience account with local administrator permissions can install software or modify certain system settings on the cloud computer.
     *
     * @param request - BatchSetDesktopManagerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetDesktopManagerResponse
     *
     * @param BatchSetDesktopManagerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchSetDesktopManagerResponse
     */
    public function batchSetDesktopManagerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->isDesktopManager) {
            @$body['IsDesktopManager'] = $request->isDesktopManager;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSetDesktopManager',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetDesktopManagerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add or remove local administrator permissions on a cloud computer for a convenience account.
     *
     * @remarks
     * A convenience account with local administrator permissions can install software or modify certain system settings on the cloud computer.
     *
     * @param request - BatchSetDesktopManagerRequest
     *
     * @returns BatchSetDesktopManagerResponse
     *
     * @param BatchSetDesktopManagerRequest $request
     *
     * @return BatchSetDesktopManagerResponse
     */
    public function batchSetDesktopManager($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDesktopManagerWithOptions($request, $runtime);
    }

    /**
     * When the administrator activates the mode, you can use this API to modify the user logon password.
     *
     * @param request - ChangeUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeUserPasswordResponse
     *
     * @param ChangeUserPasswordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeUserPasswordResponse
     */
    public function changeUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->newPassword) {
            @$body['NewPassword'] = $request->newPassword;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeUserPassword',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When the administrator activates the mode, you can use this API to modify the user logon password.
     *
     * @param request - ChangeUserPasswordRequest
     *
     * @returns ChangeUserPasswordResponse
     *
     * @param ChangeUserPasswordRequest $request
     *
     * @return ChangeUserPasswordResponse
     */
    public function changeUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Query the number of convenience accounts associated with a specified custom property.
     *
     * @param request - CheckUsedPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUsedPropertyResponse
     *
     * @param CheckUsedPropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckUsedPropertyResponse
     */
    public function checkUsedPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyId) {
            @$query['PropertyId'] = $request->propertyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUsedProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUsedPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the number of convenience accounts associated with a specified custom property.
     *
     * @param request - CheckUsedPropertyRequest
     *
     * @returns CheckUsedPropertyResponse
     *
     * @param CheckUsedPropertyRequest $request
     *
     * @return CheckUsedPropertyResponse
     */
    public function checkUsedProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyWithOptions($request, $runtime);
    }

    /**
     * Query the number of convenience accounts associated with a specified custom attribute value.
     *
     * @param request - CheckUsedPropertyValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUsedPropertyValueResponse
     *
     * @param CheckUsedPropertyValueRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyId) {
            @$query['PropertyId'] = $request->propertyId;
        }

        if (null !== $request->propertyValueId) {
            @$query['PropertyValueId'] = $request->propertyValueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUsedPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUsedPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the number of convenience accounts associated with a specified custom attribute value.
     *
     * @param request - CheckUsedPropertyValueRequest
     *
     * @returns CheckUsedPropertyValueResponse
     *
     * @param CheckUsedPropertyValueRequest $request
     *
     * @return CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyValueWithOptions($request, $runtime);
    }

    /**
     * Create a group.
     *
     * @param request - CreateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->parentGroupId) {
            @$query['ParentGroupId'] = $request->parentGroupId;
        }

        if (null !== $request->solutionId) {
            @$query['SolutionId'] = $request->solutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a group.
     *
     * @param request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * Create an organization.
     *
     * @param request - CreateOrgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrgResponse
     *
     * @param CreateOrgRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateOrgResponse
     */
    public function createOrgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->orgName) {
            @$query['OrgName'] = $request->orgName;
        }

        if (null !== $request->parentOrgId) {
            @$query['ParentOrgId'] = $request->parentOrgId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an organization.
     *
     * @param request - CreateOrgRequest
     *
     * @returns CreateOrgResponse
     *
     * @param CreateOrgRequest $request
     *
     * @return CreateOrgResponse
     */
    public function createOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrgWithOptions($request, $runtime);
    }

    /**
     * Create a user attribute.
     *
     * @remarks
     * - You can create up to 10 different properties under one Alibaba Cloud account. Each property includes a property name (PropertyKey) and multiple attribute values (PropertyValue).
     * - You can add up to 50 different attribute values to a single property.
     *
     * @param request - CreatePropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePropertyResponse
     *
     * @param CreatePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePropertyResponse
     */
    public function createPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyKey) {
            @$body['PropertyKey'] = $request->propertyKey;
        }

        if (null !== $request->propertyValues) {
            @$body['PropertyValues'] = $request->propertyValues;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a user attribute.
     *
     * @remarks
     * - You can create up to 10 different properties under one Alibaba Cloud account. Each property includes a property name (PropertyKey) and multiple attribute values (PropertyValue).
     * - You can add up to 50 different attribute values to a single property.
     *
     * @param request - CreatePropertyRequest
     *
     * @returns CreatePropertyResponse
     *
     * @param CreatePropertyRequest $request
     *
     * @return CreatePropertyResponse
     */
    public function createProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPropertyWithOptions($request, $runtime);
    }

    /**
     * Creates a resource group.
     *
     * @param request - CreateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->enableAliyunResourceGroup) {
            @$query['EnableAliyunResourceGroup'] = $request->enableAliyunResourceGroup;
        }

        if (null !== $request->isResourceGroupWithOfficeSite) {
            @$query['IsResourceGroupWithOfficeSite'] = $request->isResourceGroupWithOfficeSite;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceClassification) {
            @$query['ResourceClassification'] = $request->resourceClassification;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource group.
     *
     * @param request - CreateResourceGroupRequest
     *
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Easily create accounts for your end users.
     *
     * @remarks
     * <props="china">
     * A convenience account is a dedicated account system in Wuying Workspace for simple use cases that do not require enterprise AD integration. Accounts require a username, and either an email or a phone number.
     * <props="intl">
     * A convenience account is a dedicated account system in Wuying Workspace for simple use cases that do not require enterprise AD integration. Accounts require both a username and an email.
     *
     * @param request - CreateUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateUsersResponse
     */
    public function createUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoLockTime) {
            @$query['AutoLockTime'] = $request->autoLockTime;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->isLocalAdmin) {
            @$query['IsLocalAdmin'] = $request->isLocalAdmin;
        }

        if (null !== $request->passwordExpireDays) {
            @$query['PasswordExpireDays'] = $request->passwordExpireDays;
        }

        $body = [];
        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Easily create accounts for your end users.
     *
     * @remarks
     * <props="china">
     * A convenience account is a dedicated account system in Wuying Workspace for simple use cases that do not require enterprise AD integration. Accounts require a username, and either an email or a phone number.
     * <props="intl">
     * A convenience account is a dedicated account system in Wuying Workspace for simple use cases that do not require enterprise AD integration. Accounts require both a username and an email.
     *
     * @param request - CreateUsersRequest
     *
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $request
     *
     * @return CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * Delete a resource group.
     *
     * @param request - DeleteResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceGroupResponse
     *
     * @param DeleteResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a resource group.
     *
     * @param request - DeleteResourceGroupRequest
     *
     * @returns DeleteResourceGroupResponse
     *
     * @param DeleteResourceGroupRequest $request
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Detach a user from a user attribute.
     *
     * @param request - DeleteUserPropertyValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserPropertyValueResponse
     *
     * @param DeleteUserPropertyValueRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValueWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyId) {
            @$body['PropertyId'] = $request->propertyId;
        }

        if (null !== $request->propertyValueId) {
            @$body['PropertyValueId'] = $request->propertyValueId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detach a user from a user attribute.
     *
     * @param request - DeleteUserPropertyValueRequest
     *
     * @returns DeleteUserPropertyValueResponse
     *
     * @param DeleteUserPropertyValueRequest $request
     *
     * @return DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * Query group members.
     *
     * @param request - DescribeGroupUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupUserResponse
     *
     * @param DescribeGroupUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeGroupUserResponse
     */
    public function describeGroupUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->solutionId) {
            @$query['SolutionId'] = $request->solutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupUser',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query group members.
     *
     * @param request - DescribeGroupUserRequest
     *
     * @returns DescribeGroupUserResponse
     *
     * @param DescribeGroupUserRequest $request
     *
     * @return DescribeGroupUserResponse
     */
    public function describeGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupUserWithOptions($request, $runtime);
    }

    /**
     * Query user groups.
     *
     * @param request - DescribeGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupsResponse
     *
     * @param DescribeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->excludeAttachedLoginPolicyGroups) {
            @$query['ExcludeAttachedLoginPolicyGroups'] = $request->excludeAttachedLoginPolicyGroups;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->idpId) {
            @$query['IdpId'] = $request->idpId;
        }

        if (null !== $request->loginPolicyId) {
            @$query['LoginPolicyId'] = $request->loginPolicyId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->solutionId) {
            @$query['SolutionId'] = $request->solutionId;
        }

        if (null !== $request->transferFileNeedApproval) {
            @$query['TransferFileNeedApproval'] = $request->transferFileNeedApproval;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroups',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query user groups.
     *
     * @param request - DescribeGroupsRequest
     *
     * @returns DescribeGroupsResponse
     *
     * @param DescribeGroupsRequest $request
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupsWithOptions($request, $runtime);
    }

    /**
     * Lists virtual MFA devices bound to directory accounts.
     *
     * @param request - DescribeMfaDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMfaDevicesResponse
     *
     * @param DescribeMfaDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMfaDevicesResponse
     */
    public function describeMfaDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->serialNumbers) {
            @$query['SerialNumbers'] = $request->serialNumbers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMfaDevices',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMfaDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists virtual MFA devices bound to directory accounts.
     *
     * @param request - DescribeMfaDevicesRequest
     *
     * @returns DescribeMfaDevicesResponse
     *
     * @param DescribeMfaDevicesRequest $request
     *
     * @return DescribeMfaDevicesResponse
     */
    public function describeMfaDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMfaDevicesWithOptions($request, $runtime);
    }

    /**
     * Find subordinate organizations.
     *
     * @param request - DescribeOrgByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOrgByLayerResponse
     *
     * @param DescribeOrgByLayerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOrgByLayerResponse
     */
    public function describeOrgByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->parentOrgId) {
            @$body['ParentOrgId'] = $request->parentOrgId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOrgByLayer',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrgByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Find subordinate organizations.
     *
     * @param request - DescribeOrgByLayerRequest
     *
     * @returns DescribeOrgByLayerResponse
     *
     * @param DescribeOrgByLayerRequest $request
     *
     * @return DescribeOrgByLayerResponse
     */
    public function describeOrgByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgByLayerWithOptions($request, $runtime);
    }

    /**
     * Queries a list of organizations.
     *
     * @remarks
     * Organizations are arranged in a tree-like structure. The root organization ID is org-aliyun-wy-org-id.
     *
     * @param tmpReq - DescribeOrgsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOrgsResponse
     *
     * @param DescribeOrgsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeOrgsResponse
     */
    public function describeOrgsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeOrgsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->showExtras) {
            $request->showExtrasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->showExtras, 'ShowExtras', 'json');
        }

        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->includeOrgIds) {
            @$query['IncludeOrgIds'] = $request->includeOrgIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orgName) {
            @$query['OrgName'] = $request->orgName;
        }

        if (null !== $request->parentOrgId) {
            @$query['ParentOrgId'] = $request->parentOrgId;
        }

        if (null !== $request->showExtrasShrink) {
            @$query['ShowExtras'] = $request->showExtrasShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOrgs',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrgsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of organizations.
     *
     * @remarks
     * Organizations are arranged in a tree-like structure. The root organization ID is org-aliyun-wy-org-id.
     *
     * @param request - DescribeOrgsRequest
     *
     * @returns DescribeOrgsResponse
     *
     * @param DescribeOrgsRequest $request
     *
     * @return DescribeOrgsResponse
     */
    public function describeOrgs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgsWithOptions($request, $runtime);
    }

    /**
     * Queries resource groups.
     *
     * @param request - DescribeResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceGroupsResponse
     *
     * @param DescribeResourceGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeResourceGroupsResponse
     */
    public function describeResourceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->aliyunResourceGroupIds) {
            @$query['AliyunResourceGroupIds'] = $request->aliyunResourceGroupIds;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->needContainResourceGroupWithOfficeSite) {
            @$query['NeedContainResourceGroupWithOfficeSite'] = $request->needContainResourceGroupWithOfficeSite;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceClassification) {
            @$query['ResourceClassification'] = $request->resourceClassification;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceGroups',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource groups.
     *
     * @param request - DescribeResourceGroupsRequest
     *
     * @returns DescribeResourceGroupsResponse
     *
     * @param DescribeResourceGroupsRequest $request
     *
     * @return DescribeResourceGroupsResponse
     */
    public function describeResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * Query user basic information.
     *
     * @param request - DescribeUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserResponse
     *
     * @param DescribeUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeUserResponse
     */
    public function describeUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->requireExtraAttributes) {
            @$query['RequireExtraAttributes'] = $request->requireExtraAttributes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUser',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query user basic information.
     *
     * @param request - DescribeUserRequest
     *
     * @returns DescribeUserResponse
     *
     * @param DescribeUserRequest $request
     *
     * @return DescribeUserResponse
     */
    public function describeUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserWithOptions($request, $runtime);
    }

    /**
     * Retrieves directory account information, including the username, email address, and display name.
     *
     * @param tmpReq - DescribeUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsersResponse
     *
     * @param DescribeUsersRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeUsersResponse
     */
    public function describeUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterMap) {
            $request->filterMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterMap, 'FilterMap', 'json');
        }

        if (null !== $tmpReq->filterWithAssignedResource) {
            $request->filterWithAssignedResourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterWithAssignedResource, 'FilterWithAssignedResource', 'json');
        }

        if (null !== $tmpReq->filterWithAssignedResources) {
            $request->filterWithAssignedResourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterWithAssignedResources, 'FilterWithAssignedResources', 'json');
        }

        if (null !== $tmpReq->showExtras) {
            $request->showExtrasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->showExtras, 'ShowExtras', 'json');
        }

        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->filterMapShrink) {
            @$query['FilterMap'] = $request->filterMapShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->excludeEndUserIds) {
            @$body['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }

        if (null !== $request->excludeGroupId) {
            @$body['ExcludeGroupId'] = $request->excludeGroupId;
        }

        if (null !== $request->filterWithAssignedResourceShrink) {
            @$body['FilterWithAssignedResource'] = $request->filterWithAssignedResourceShrink;
        }

        if (null !== $request->filterWithAssignedResourcesShrink) {
            @$body['FilterWithAssignedResources'] = $request->filterWithAssignedResourcesShrink;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->isQueryAllSubOrgs) {
            @$body['IsQueryAllSubOrgs'] = $request->isQueryAllSubOrgs;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->showExtrasShrink) {
            @$body['ShowExtras'] = $request->showExtrasShrink;
        }

        if (null !== $request->solutionId) {
            @$body['SolutionId'] = $request->solutionId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves directory account information, including the username, email address, and display name.
     *
     * @param request - DescribeUsersRequest
     *
     * @returns DescribeUsersResponse
     *
     * @param DescribeUsersRequest $request
     *
     * @return DescribeUsersResponse
     */
    public function describeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithOptions($request, $runtime);
    }

    /**
     * Filter account information by user attribute.
     *
     * @param tmpReq - FilterUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FilterUsersResponse
     *
     * @param FilterUsersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return FilterUsersResponse
     */
    public function filterUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FilterUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterMap) {
            $request->filterMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterMap, 'FilterMap', 'json');
        }

        if (null !== $tmpReq->orderParam) {
            $request->orderParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderParam, 'OrderParam', 'json');
        }

        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->excludeEndUserIds) {
            @$query['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->filterMapShrink) {
            @$query['FilterMap'] = $request->filterMapShrink;
        }

        if (null !== $request->includeDesktopCount) {
            @$query['IncludeDesktopCount'] = $request->includeDesktopCount;
        }

        if (null !== $request->includeDesktopGroupCount) {
            @$query['IncludeDesktopGroupCount'] = $request->includeDesktopGroupCount;
        }

        if (null !== $request->includeEndUserIds) {
            @$query['IncludeEndUserIds'] = $request->includeEndUserIds;
        }

        if (null !== $request->includeOrgInfo) {
            @$query['IncludeOrgInfo'] = $request->includeOrgInfo;
        }

        if (null !== $request->includeSupportIdps) {
            @$query['IncludeSupportIdps'] = $request->includeSupportIdps;
        }

        if (null !== $request->isQueryAllSubOrgs) {
            @$query['IsQueryAllSubOrgs'] = $request->isQueryAllSubOrgs;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderParamShrink) {
            @$query['OrderParam'] = $request->orderParamShrink;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->ownerType) {
            @$query['OwnerType'] = $request->ownerType;
        }

        if (null !== $request->propertyFilterParam) {
            @$query['PropertyFilterParam'] = $request->propertyFilterParam;
        }

        if (null !== $request->propertyKeyValueFilterParam) {
            @$query['PropertyKeyValueFilterParam'] = $request->propertyKeyValueFilterParam;
        }

        if (null !== $request->showExtras) {
            @$query['ShowExtras'] = $request->showExtras;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FilterUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FilterUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Filter account information by user attribute.
     *
     * @param request - FilterUsersRequest
     *
     * @returns FilterUsersResponse
     *
     * @param FilterUsersRequest $request
     *
     * @return FilterUsersResponse
     */
    public function filterUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->filterUsersWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about the current logon administrator based on the authorization code.
     *
     * @param request - GetManagerInfoByAuthCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetManagerInfoByAuthCodeResponse
     *
     * @param GetManagerInfoByAuthCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetManagerInfoByAuthCodeResponse
     */
    public function getManagerInfoByAuthCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetManagerInfoByAuthCode',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetManagerInfoByAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about the current logon administrator based on the authorization code.
     *
     * @param request - GetManagerInfoByAuthCodeRequest
     *
     * @returns GetManagerInfoByAuthCodeResponse
     *
     * @param GetManagerInfoByAuthCodeRequest $request
     *
     * @return GetManagerInfoByAuthCodeResponse
     */
    public function getManagerInfoByAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagerInfoByAuthCodeWithOptions($request, $runtime);
    }

    /**
     * Initialize the organization ID.
     *
     * @param request - InitTenantAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitTenantAliasResponse
     *
     * @param InitTenantAliasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitTenantAliasResponse
     */
    public function initTenantAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitTenantAlias',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitTenantAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initialize the organization ID.
     *
     * @param request - InitTenantAliasRequest
     *
     * @returns InitTenantAliasResponse
     *
     * @param InitTenantAliasRequest $request
     *
     * @return InitTenantAliasResponse
     */
    public function initTenantAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initTenantAliasWithOptions($request, $runtime);
    }

    /**
     * Query the list of existing user attributes under the current account.
     *
     * @param request - ListPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPropertyResponse
     *
     * @param ListPropertyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPropertyResponse
     */
    public function listPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of existing user attributes under the current account.
     *
     * @param request - ListPropertyRequest
     *
     * @returns ListPropertyResponse
     *
     * @param ListPropertyRequest $request
     *
     * @return ListPropertyResponse
     */
    public function listProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyWithOptions($request, $runtime);
    }

    /**
     * Query the list of attribute values for a specific user attribute.
     *
     * @param request - ListPropertyValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPropertyValueResponse
     *
     * @param ListPropertyValueRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPropertyValueResponse
     */
    public function listPropertyValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyId) {
            @$query['PropertyId'] = $request->propertyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of attribute values for a specific user attribute.
     *
     * @param request - ListPropertyValueRequest
     *
     * @returns ListPropertyValueResponse
     *
     * @param ListPropertyValueRequest $request
     *
     * @return ListPropertyValueResponse
     */
    public function listPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyValueWithOptions($request, $runtime);
    }

    /**
     * Lock the virtual MFA device attached to a convenience account.
     *
     * @remarks
     * After locking, the status of the virtual MFA device changes to LOCKED. When the associated convenience account attempts to log on to a WUYING Terminal through an office network with MFA enabled, authentication will fail due to the locked MFA device, preventing successful logon. You can invoke [UnlockMfaDevice](~~UnlockMfaDevice~~) to unlock it.
     *
     * @param request - LockMfaDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockMfaDeviceResponse
     *
     * @param LockMfaDeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LockMfaDeviceResponse
     */
    public function lockMfaDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LockMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lock the virtual MFA device attached to a convenience account.
     *
     * @remarks
     * After locking, the status of the virtual MFA device changes to LOCKED. When the associated convenience account attempts to log on to a WUYING Terminal through an office network with MFA enabled, authentication will fail due to the locked MFA device, preventing successful logon. You can invoke [UnlockMfaDevice](~~UnlockMfaDevice~~) to unlock it.
     *
     * @param request - LockMfaDeviceRequest
     *
     * @returns LockMfaDeviceResponse
     *
     * @param LockMfaDeviceRequest $request
     *
     * @return LockMfaDeviceResponse
     */
    public function lockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * Locks one or more convenience accounts. Locked convenience accounts cannot be used to sign in to Wuying clients.
     *
     * @remarks
     * For security purposes, you can lock convenience accounts. Locked convenience users cannot sign in to Wuying clients, and therefore cannot access any Wuying cloud resources.
     * > Call the [DescribeUsers](https://help.aliyun.com/document_detail/283609.html) operation to check the lock status of convenience accounts. The `Status` value in the response is 0 for unlocked accounts and 9 for locked accounts.
     *
     * @param request - LockUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockUsersResponse
     *
     * @param LockUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LockUsersResponse
     */
    public function lockUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->logoutSession) {
            @$query['LogoutSession'] = $request->logoutSession;
        }

        $body = [];
        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LockUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Locks one or more convenience accounts. Locked convenience accounts cannot be used to sign in to Wuying clients.
     *
     * @remarks
     * For security purposes, you can lock convenience accounts. Locked convenience users cannot sign in to Wuying clients, and therefore cannot access any Wuying cloud resources.
     * > Call the [DescribeUsers](https://help.aliyun.com/document_detail/283609.html) operation to check the lock status of convenience accounts. The `Status` value in the response is 0 for unlocked accounts and 9 for locked accounts.
     *
     * @param request - LockUsersRequest
     *
     * @returns LockUsersResponse
     *
     * @param LockUsersRequest $request
     *
     * @return LockUsersResponse
     */
    public function lockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockUsersWithOptions($request, $runtime);
    }

    /**
     * Modify the name and description of a group.
     *
     * @param request - ModifyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGroupResponse
     *
     * @param ModifyGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->newGroupName) {
            @$query['NewGroupName'] = $request->newGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the name and description of a group.
     *
     * @param request - ModifyGroupRequest
     *
     * @returns ModifyGroupResponse
     *
     * @param ModifyGroupRequest $request
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupWithOptions($request, $runtime);
    }

    /**
     * Modify an organization.
     *
     * @param request - ModifyOrgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOrgResponse
     *
     * @param ModifyOrgRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyOrgResponse
     */
    public function modifyOrgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$query['OrgName'] = $request->orgName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify an organization.
     *
     * @param request - ModifyOrgRequest
     *
     * @returns ModifyOrgResponse
     *
     * @param ModifyOrgRequest $request
     *
     * @return ModifyOrgResponse
     */
    public function modifyOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOrgWithOptions($request, $runtime);
    }

    /**
     * Modify the contact information of a convenience account.
     *
     * @param request - ModifyUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserResponse
     *
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUser',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the contact information of a convenience account.
     *
     * @param request - ModifyUserRequest
     *
     * @returns ModifyUserResponse
     *
     * @param ModifyUserRequest $request
     *
     * @return ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * Shift organization.
     *
     * @param request - MoveOrgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveOrgResponse
     *
     * @param MoveOrgRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return MoveOrgResponse
     */
    public function moveOrgWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->newParentOrgId) {
            @$body['NewParentOrgId'] = $request->newParentOrgId;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shift organization.
     *
     * @param request - MoveOrgRequest
     *
     * @returns MoveOrgResponse
     *
     * @param MoveOrgRequest $request
     *
     * @return MoveOrgResponse
     */
    public function moveOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveOrgWithOptions($request, $runtime);
    }

    /**
     * Shift users to the target organization architecture.
     *
     * @param request - MoveUserOrgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveUserOrgResponse
     *
     * @param MoveUserOrgRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MoveUserOrgResponse
     */
    public function moveUserOrgWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveUserOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveUserOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shift users to the target organization architecture.
     *
     * @param request - MoveUserOrgRequest
     *
     * @returns MoveUserOrgResponse
     *
     * @param MoveUserOrgRequest $request
     *
     * @return MoveUserOrgResponse
     */
    public function moveUserOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveUserOrgWithOptions($request, $runtime);
    }

    /**
     * Query the user synchronization status.
     *
     * @param request - QuerySyncStatusByAliUidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySyncStatusByAliUidResponse
     *
     * @param QuerySyncStatusByAliUidRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySyncStatusByAliUid',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySyncStatusByAliUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the user synchronization status.
     *
     * @param request - QuerySyncStatusByAliUidRequest
     *
     * @returns QuerySyncStatusByAliUidResponse
     *
     * @param QuerySyncStatusByAliUidRequest $request
     *
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySyncStatusByAliUidWithOptions($request, $runtime);
    }

    /**
     * Delete a group. Supports batch operations.
     *
     * @param request - RemoveGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveGroupResponse
     *
     * @param RemoveGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveGroupResponse
     */
    public function removeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a group. Supports batch operations.
     *
     * @param request - RemoveGroupRequest
     *
     * @returns RemoveGroupResponse
     *
     * @param RemoveGroupRequest $request
     *
     * @return RemoveGroupResponse
     */
    public function removeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupWithOptions($request, $runtime);
    }

    /**
     * Delete the virtual MFA device attached to a convenience account.
     *
     * @remarks
     * Deleting the virtual MFA device attached to a convenience account unbinds the MFA device, which is equivalent to resetting or disabling it. The corresponding convenience account must reattach a new virtual MFA device when logging on to a WUYING Terminal.
     *
     * @param request - RemoveMfaDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveMfaDeviceResponse
     *
     * @param RemoveMfaDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveMfaDeviceResponse
     */
    public function removeMfaDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the virtual MFA device attached to a convenience account.
     *
     * @remarks
     * Deleting the virtual MFA device attached to a convenience account unbinds the MFA device, which is equivalent to resetting or disabling it. The corresponding convenience account must reattach a new virtual MFA device when logging on to a WUYING Terminal.
     *
     * @param request - RemoveMfaDeviceRequest
     *
     * @returns RemoveMfaDeviceResponse
     *
     * @param RemoveMfaDeviceRequest $request
     *
     * @return RemoveMfaDeviceResponse
     */
    public function removeMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * Remove an organization.
     *
     * @param request - RemoveOrgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveOrgResponse
     *
     * @param RemoveOrgRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveOrgResponse
     */
    public function removeOrgWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove an organization.
     *
     * @param request - RemoveOrgRequest
     *
     * @returns RemoveOrgResponse
     *
     * @param RemoveOrgRequest $request
     *
     * @return RemoveOrgResponse
     */
    public function removeOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeOrgWithOptions($request, $runtime);
    }

    /**
     * Delete a set of user attributes.
     *
     * @param request - RemovePropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePropertyResponse
     *
     * @param RemovePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RemovePropertyResponse
     */
    public function removePropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $body = [];
        if (null !== $request->propertyId) {
            @$body['PropertyId'] = $request->propertyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a set of user attributes.
     *
     * @param request - RemovePropertyRequest
     *
     * @returns RemovePropertyResponse
     *
     * @param RemovePropertyRequest $request
     *
     * @return RemovePropertyResponse
     */
    public function removeProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePropertyWithOptions($request, $runtime);
    }

    /**
     * Delete one or more convenience accounts.
     *
     * @param request - RemoveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUsersResponse
     *
     * @param RemoveUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete one or more convenience accounts.
     *
     * @param request - RemoveUsersRequest
     *
     * @returns RemoveUsersResponse
     *
     * @param RemoveUsersRequest $request
     *
     * @return RemoveUsersResponse
     */
    public function removeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersWithOptions($request, $runtime);
    }

    /**
     * Reset the password of a convenience account, including generating a password reset token and sending a password reset email to the mailbox of the convenience account.
     *
     * @param request - ResetUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetUserPasswordResponse
     *
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reset the password of a convenience account, including generating a password reset token and sending a password reset email to the mailbox of the convenience account.
     *
     * @param request - ResetUserPasswordRequest
     *
     * @returns ResetUserPasswordResponse
     *
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Associate a user attribute with a specific user.
     *
     * @param request - SetUserPropertyValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetUserPropertyValueResponse
     *
     * @param SetUserPropertyValueRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetUserPropertyValueResponse
     */
    public function setUserPropertyValueWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->propertyId) {
            @$body['PropertyId'] = $request->propertyId;
        }

        if (null !== $request->propertyValueId) {
            @$body['PropertyValueId'] = $request->propertyValueId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetUserPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associate a user attribute with a specific user.
     *
     * @param request - SetUserPropertyValueRequest
     *
     * @returns SetUserPropertyValueResponse
     *
     * @param SetUserPropertyValueRequest $request
     *
     * @return SetUserPropertyValueResponse
     */
    public function setUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * Synchronize all education information.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncAllEduInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return SyncAllEduInfoResponse
     */
    public function syncAllEduInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'SyncAllEduInfo',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncAllEduInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronize all education information.
     *
     * @returns SyncAllEduInfoResponse
     *
     * @return SyncAllEduInfoResponse
     */
    public function syncAllEduInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAllEduInfoWithOptions($runtime);
    }

    /**
     * 将资源转移到资源组中.
     *
     * @param request - TransferResourcesIntoGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferResourcesIntoGroupResponse
     *
     * @param TransferResourcesIntoGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return TransferResourcesIntoGroupResponse
     */
    public function transferResourcesIntoGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferResourcesIntoGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferResourcesIntoGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将资源转移到资源组中.
     *
     * @param request - TransferResourcesIntoGroupRequest
     *
     * @returns TransferResourcesIntoGroupResponse
     *
     * @param TransferResourcesIntoGroupRequest $request
     *
     * @return TransferResourcesIntoGroupResponse
     */
    public function transferResourcesIntoGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferResourcesIntoGroupWithOptions($request, $runtime);
    }

    /**
     * 将资源从资源组中转出.
     *
     * @param request - TransferResourcesOutofGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferResourcesOutofGroupResponse
     *
     * @param TransferResourcesOutofGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TransferResourcesOutofGroupResponse
     */
    public function transferResourcesOutofGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->targetResourceGroupId) {
            @$query['TargetResourceGroupId'] = $request->targetResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferResourcesOutofGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferResourcesOutofGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将资源从资源组中转出.
     *
     * @param request - TransferResourcesOutofGroupRequest
     *
     * @returns TransferResourcesOutofGroupResponse
     *
     * @param TransferResourcesOutofGroupRequest $request
     *
     * @return TransferResourcesOutofGroupResponse
     */
    public function transferResourcesOutofGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferResourcesOutofGroupWithOptions($request, $runtime);
    }

    /**
     * Unlock the virtual MFA device attached to a convenience account.
     *
     * @param request - UnlockMfaDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockMfaDeviceResponse
     *
     * @param UnlockMfaDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnlockMfaDeviceResponse
     */
    public function unlockMfaDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlock the virtual MFA device attached to a convenience account.
     *
     * @param request - UnlockMfaDeviceRequest
     *
     * @returns UnlockMfaDeviceResponse
     *
     * @param UnlockMfaDeviceRequest $request
     *
     * @return UnlockMfaDeviceResponse
     */
    public function unlockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * Unlock one or more convenience accounts. After being unlocked, the convenience accounts can log on to WUYING Terminal.
     *
     * @remarks
     * Locked convenience accounts cannot log on to WUYING Terminal and therefore cannot access any WUYING cloud resources. To allow a convenience account to log on to WUYING Terminal, you must first unlock it.
     * > You can invoke [DescribeUsers](https://help.aliyun.com/document_detail/283609.html) to query convenience account information. If the value of `Status` in the returned data is 0, the convenience account is not locked. If the value of `Status` is 9, the convenience account is locked.
     *
     * @param request - UnlockUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockUsersResponse
     *
     * @param UnlockUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnlockUsersResponse
     */
    public function unlockUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoLockTime) {
            @$query['AutoLockTime'] = $request->autoLockTime;
        }

        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $body = [];
        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnlockUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlock one or more convenience accounts. After being unlocked, the convenience accounts can log on to WUYING Terminal.
     *
     * @remarks
     * Locked convenience accounts cannot log on to WUYING Terminal and therefore cannot access any WUYING cloud resources. To allow a convenience account to log on to WUYING Terminal, you must first unlock it.
     * > You can invoke [DescribeUsers](https://help.aliyun.com/document_detail/283609.html) to query convenience account information. If the value of `Status` in the returned data is 0, the convenience account is not locked. If the value of `Status` is 9, the convenience account is locked.
     *
     * @param request - UnlockUsersRequest
     *
     * @returns UnlockUsersResponse
     *
     * @param UnlockUsersRequest $request
     *
     * @return UnlockUsersResponse
     */
    public function unlockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUsersWithOptions($request, $runtime);
    }

    /**
     * Modify User Attributes.
     *
     * @param request - UpdatePropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePropertyResponse
     *
     * @param UpdatePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePropertyResponse
     */
    public function updatePropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessChannel) {
            @$query['BusinessChannel'] = $request->businessChannel;
        }

        $body = [];
        if (null !== $request->propertyId) {
            @$body['PropertyId'] = $request->propertyId;
        }

        if (null !== $request->propertyKey) {
            @$body['PropertyKey'] = $request->propertyKey;
        }

        if (null !== $request->propertyValues) {
            @$body['PropertyValues'] = $request->propertyValues;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify User Attributes.
     *
     * @param request - UpdatePropertyRequest
     *
     * @returns UpdatePropertyResponse
     *
     * @param UpdatePropertyRequest $request
     *
     * @return UpdatePropertyResponse
     */
    public function updateProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePropertyWithOptions($request, $runtime);
    }

    /**
     * Add users to a group in batch.
     *
     * @param request - UserBatchJoinGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UserBatchJoinGroupResponse
     *
     * @param UserBatchJoinGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UserBatchJoinGroupResponse
     */
    public function userBatchJoinGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UserBatchJoinGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UserBatchJoinGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add users to a group in batch.
     *
     * @param request - UserBatchJoinGroupRequest
     *
     * @returns UserBatchJoinGroupResponse
     *
     * @param UserBatchJoinGroupRequest $request
     *
     * @return UserBatchJoinGroupResponse
     */
    public function userBatchJoinGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userBatchJoinGroupWithOptions($request, $runtime);
    }

    /**
     * Remove users from a group in batch.
     *
     * @param request - UserBatchQuitGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UserBatchQuitGroupResponse
     *
     * @param UserBatchQuitGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UserBatchQuitGroupResponse
     */
    public function userBatchQuitGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UserBatchQuitGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UserBatchQuitGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove users from a group in batch.
     *
     * @param request - UserBatchQuitGroupRequest
     *
     * @returns UserBatchQuitGroupResponse
     *
     * @param UserBatchQuitGroupRequest $request
     *
     * @return UserBatchQuitGroupResponse
     */
    public function userBatchQuitGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userBatchQuitGroupWithOptions($request, $runtime);
    }
}

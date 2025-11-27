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
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasResponse;
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
     * Grants or revokes the local administrator permissions on cloud computers for convenience accounts.
     *
     * @remarks
     * Convenience accounts with the local administrator permissions on cloud computers can install software and modify system settings on cloud computers.
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
     * Grants or revokes the local administrator permissions on cloud computers for convenience accounts.
     *
     * @remarks
     * Convenience accounts with the local administrator permissions on cloud computers can install software and modify system settings on cloud computers.
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
     * 管理员修改用户密码
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
     * 管理员修改用户密码
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
     * Queries whether a property is associated with one or more convenience users.
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
     * Queries whether a property is associated with one or more convenience users.
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
     * Queries the number of convenience accounts that are associated with the specified custom property value.
     *
     * @remarks
     * Before you call the operation, you can call the [ListProperty](https://help.aliyun.com/document_detail/410890.html) operation to query the existing user properties and their IDs (PropertyId) and values (PropertyValueId).
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
     * Queries the number of convenience accounts that are associated with the specified custom property value.
     *
     * @remarks
     * Before you call the operation, you can call the [ListProperty](https://help.aliyun.com/document_detail/410890.html) operation to query the existing user properties and their IDs (PropertyId) and values (PropertyValueId).
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
     * Creates a user group.
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
     * Creates a user group.
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
     * Creates an organization.
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
     * Creates an organization.
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
     * Creates a user property.
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
     * Creates a user property.
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
        if (null !== $request->isResourceGroupWithOfficeSite) {
            @$query['IsResourceGroupWithOfficeSite'] = $request->isResourceGroupWithOfficeSite;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
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
     * Creates a convenience user.
     *
     * @remarks
     * Convenience users are dedicated Elastic Desktop Service (EDS) user accounts and are suitable for scenarios in which you do not need to connect to enterprise Active Directory (AD) systems. The information about a convenience user includes the username, email address, and mobile number. You must specify the username or email address.
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
     * Creates a convenience user.
     *
     * @remarks
     * Convenience users are dedicated Elastic Desktop Service (EDS) user accounts and are suitable for scenarios in which you do not need to connect to enterprise Active Directory (AD) systems. The information about a convenience user includes the username, email address, and mobile number. You must specify the username or email address.
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
     * Deletes a resource group.
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
     * Deletes a resource group.
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
     * Dissociates a user property from a user.
     *
     * @remarks
     * Before you call this operation, you can call the FilterUsers operation to query the users that are associated with user properties.
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
     * Dissociates a user property from a user.
     *
     * @remarks
     * Before you call this operation, you can call the FilterUsers operation to query the users that are associated with user properties.
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
     * Queries the members of a user group.
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
     * Queries the members of a user group.
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
     * Queries user groups.
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
     * Queries user groups.
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
     * Queries the information about virtual multi-factor authentication (MFA) devices that are bound to convenience accounts.
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
     * Queries the information about virtual multi-factor authentication (MFA) devices that are bound to convenience accounts.
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
     * Queries subordinate organizations.
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
     * Queries subordinate organizations.
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
     * Queries organizations.
     *
     * @remarks
     * An organization is in a tree structure. The root organization ID is in the following format: org-aliyun-wy-org-id.
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
     * Queries organizations.
     *
     * @remarks
     * An organization is in a tree structure. The root organization ID is in the following format: org-aliyun-wy-org-id.
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
     * Queries the information about convenience users. The information of a convenience user includes a username, an email address, and a description.
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
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
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
     * Queries the information about convenience users. The information of a convenience user includes a username, an email address, and a description.
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
     * Filters convenience accounts by property.
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
        if (null !== $tmpReq->orderParam) {
            $request->orderParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderParam, 'OrderParam', 'json');
        }

        $query = [];
        if (null !== $request->excludeEndUserIds) {
            @$query['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->includeDesktopCount) {
            @$query['IncludeDesktopCount'] = $request->includeDesktopCount;
        }

        if (null !== $request->includeDesktopGroupCount) {
            @$query['IncludeDesktopGroupCount'] = $request->includeDesktopGroupCount;
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
     * Filters convenience accounts by property.
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
     * Initializes an organization ID.
     *
     * @param request - InitTenantAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitTenantAliasResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return InitTenantAliasResponse
     */
    public function initTenantAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
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
     * Initializes an organization ID.
     *
     * @returns InitTenantAliasResponse
     *
     * @return InitTenantAliasResponse
     */
    public function initTenantAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initTenantAliasWithOptions($runtime);
    }

    /**
     * Queries all user properties within an Alibaba Cloud account.
     *
     * @param request - ListPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPropertyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListPropertyResponse
     */
    public function listPropertyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
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
     * Queries all user properties within an Alibaba Cloud account.
     *
     * @returns ListPropertyResponse
     *
     * @return ListPropertyResponse
     */
    public function listProperty()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyWithOptions($runtime);
    }

    /**
     * Queries property values of a user property.
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
     * Queries property values of a user property.
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
     * Locks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *
     * @remarks
     * After a virtual MFA device is locked, the status of the virtual MFA device changes to LOCKED. The convenience user to which the MFA device is bound cannot log on to the cloud desktop that resides in the workspace with the MFA feature enabled because the identity of the convenience user cannot be verified based on the virtual MFA device. You can call the [UnlockMfaDevice](https://help.aliyun.com/document_detail/286534.html) operation to unlock the virtual MFA device.
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
     * Locks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *
     * @remarks
     * After a virtual MFA device is locked, the status of the virtual MFA device changes to LOCKED. The convenience user to which the MFA device is bound cannot log on to the cloud desktop that resides in the workspace with the MFA feature enabled because the identity of the convenience user cannot be verified based on the virtual MFA device. You can call the [UnlockMfaDevice](https://help.aliyun.com/document_detail/286534.html) operation to unlock the virtual MFA device.
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
     * Locks one or more convenience users.
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
     * Locks one or more convenience users.
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
     * Modifies the name and description of a user group.
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
     * Modifies the name and description of a user group.
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
     * Modifies an organization.
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
     * Modifies an organization.
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
     * Modifies user information.
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
     * Modifies user information.
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
     * Moves an organization.
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
     * Moves an organization.
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
     * Moves users to a specific organization.
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
     * Moves users to a specific organization.
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
     * 查询edu同步信息.
     *
     * @param request - QuerySyncStatusByAliUidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySyncStatusByAliUidResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUidWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
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
     * 查询edu同步信息.
     *
     * @returns QuerySyncStatusByAliUidResponse
     *
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySyncStatusByAliUidWithOptions($runtime);
    }

    /**
     * Deletes a single user group or multiple user groups at a time.
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
     * Deletes a single user group or multiple user groups at a time.
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
     * Removes a virtual multi-factor authentication (MFA) device that is bound to a convenience account.
     *
     * @remarks
     * If you remove a virtual MFA device that is bound to a convenience account, the convenience account can no longer use the virtual MFA device to log on to cloud computers. Before the convenience account can log on to Alibaba Cloud Workspace terminals again, a new virtual MFA device must be bound to the convenience account.
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
     * Removes a virtual multi-factor authentication (MFA) device that is bound to a convenience account.
     *
     * @remarks
     * If you remove a virtual MFA device that is bound to a convenience account, the convenience account can no longer use the virtual MFA device to log on to cloud computers. Before the convenience account can log on to Alibaba Cloud Workspace terminals again, a new virtual MFA device must be bound to the convenience account.
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
     * Removes an organization.
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
     * Removes an organization.
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
     * Deletes a user property.
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
        $body = [];
        if (null !== $request->propertyId) {
            @$body['PropertyId'] = $request->propertyId;
        }

        $req = new OpenApiRequest([
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
     * Deletes a user property.
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
     * Removes one or more convenience users.
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
     * Removes one or more convenience users.
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
     * Resets the password for a convenience user. If you call this operation, a token that is used to reset the password is generated, and the system sends a password reset email that includes the token to the email address of the convenience user.
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
     * Resets the password for a convenience user. If you call this operation, a token that is used to reset the password is generated, and the system sends a password reset email that includes the token to the email address of the convenience user.
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
     * Associates a user property with a convenience user.
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
     * Associates a user property with a convenience user.
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
     * 从钉钉手动同步老师学生信息.
     *
     * @param request - SyncAllEduInfoRequest
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
     * 从钉钉手动同步老师学生信息.
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
     * Unlocks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
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
     * Unlocks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
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
     * Unlocks one or more convenience users.
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
     * Unlocks one or more convenience users.
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
     * Modifies a user property.
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
     * Modifies a user property.
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
     * Add multiple users to a user group at a time.
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
     * Add multiple users to a user group at a time.
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
     * Removes multiple users from a user group at a time.
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
     * Removes multiple users from a user group at a time.
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

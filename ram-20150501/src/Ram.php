<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ram\V20150501\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\AttachPolicyToUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\BindMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\BindMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ChangePasswordRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ChangePasswordResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ClearAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeletePolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\DetachPolicyFromUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetAccountAliasRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetAccountAliasResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetDefaultPolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetDefaultPolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\TagResourcesShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdatePolicyDescriptionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdatePolicyDescriptionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ram extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ram', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a Resource Access Management (RAM) user to a RAM user group.
     *
     * @param request - AddUserToGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToGroupResponse
     *
     * @param AddUserToGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Resource Access Management (RAM) user to a RAM user group.
     *
     * @param request - AddUserToGroupRequest
     *
     * @returns AddUserToGroupResponse
     *
     * @param AddUserToGroupRequest $request
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToGroupWithOptions($request, $runtime);
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) user group.
     *
     * @param request - AttachPolicyToGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicyToGroupResponse
     *
     * @param AttachPolicyToGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPolicyToGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicyToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) user group.
     *
     * @param request - AttachPolicyToGroupRequest
     *
     * @returns AttachPolicyToGroupResponse
     *
     * @param AttachPolicyToGroupRequest $request
     *
     * @return AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToGroupWithOptions($request, $runtime);
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) role.
     *
     * @param request - AttachPolicyToRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicyToRoleResponse
     *
     * @param AttachPolicyToRoleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachPolicyToRoleResponse
     */
    public function attachPolicyToRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPolicyToRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicyToRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) role.
     *
     * @param request - AttachPolicyToRoleRequest
     *
     * @returns AttachPolicyToRoleResponse
     *
     * @param AttachPolicyToRoleRequest $request
     *
     * @return AttachPolicyToRoleResponse
     */
    public function attachPolicyToRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToRoleWithOptions($request, $runtime);
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) user.
     *
     * @param request - AttachPolicyToUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicyToUserResponse
     *
     * @param AttachPolicyToUserRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachPolicyToUserResponse
     */
    public function attachPolicyToUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPolicyToUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicyToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a policy to a Resource Access Management (RAM) user.
     *
     * @param request - AttachPolicyToUserRequest
     *
     * @returns AttachPolicyToUserResponse
     *
     * @param AttachPolicyToUserRequest $request
     *
     * @return AttachPolicyToUserResponse
     */
    public function attachPolicyToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToUserWithOptions($request, $runtime);
    }

    /**
     * Binds a multi-factor authentication (MFA) device to a Resource Access Management (RAM) user.
     *
     * @param request - BindMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindMFADeviceResponse
     *
     * @param BindMFADeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationCode1) {
            @$query['AuthenticationCode1'] = $request->authenticationCode1;
        }

        if (null !== $request->authenticationCode2) {
            @$query['AuthenticationCode2'] = $request->authenticationCode2;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindMFADevice',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a multi-factor authentication (MFA) device to a Resource Access Management (RAM) user.
     *
     * @param request - BindMFADeviceRequest
     *
     * @returns BindMFADeviceResponse
     *
     * @param BindMFADeviceRequest $request
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * Changes the password that is used to log on to the console for a Resource Access Management (RAM) user.
     *
     * @remarks
     * >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can manage their passwords.
     *
     * @param request - ChangePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangePasswordResponse
     *
     * @param ChangePasswordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
        }

        if (null !== $request->oldPassword) {
            @$query['OldPassword'] = $request->oldPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangePassword',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the password that is used to log on to the console for a Resource Access Management (RAM) user.
     *
     * @remarks
     * >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can manage their passwords.
     *
     * @param request - ChangePasswordRequest
     *
     * @returns ChangePasswordResponse
     *
     * @param ChangePasswordRequest $request
     *
     * @return ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * Deletes the alias of an Alibaba Cloud account.
     *
     * @param request - ClearAccountAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearAccountAliasResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ClearAccountAlias',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClearAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the alias of an Alibaba Cloud account.
     *
     * @returns ClearAccountAliasResponse
     *
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearAccountAliasWithOptions($runtime);
    }

    /**
     * Creates an AccessKey pair for a Resource Access Management (RAM) user.
     *
     * @param request - CreateAccessKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessKeyResponse
     *
     * @param CreateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessKey',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AccessKey pair for a Resource Access Management (RAM) user.
     *
     * @param request - CreateAccessKeyRequest
     *
     * @returns CreateAccessKeyResponse
     *
     * @param CreateAccessKeyRequest $request
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessKeyWithOptions($request, $runtime);
    }

    /**
     * Creates a RAM user group.
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
        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2015-05-01',
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
     * Creates a RAM user group.
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
     * Enables console logon for a Resource Access Management (RAM) user.
     *
     * @param request - CreateLoginProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoginProfileResponse
     *
     * @param CreateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->MFABindRequired) {
            @$query['MFABindRequired'] = $request->MFABindRequired;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordResetRequired) {
            @$query['PasswordResetRequired'] = $request->passwordResetRequired;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoginProfile',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables console logon for a Resource Access Management (RAM) user.
     *
     * @param request - CreateLoginProfileRequest
     *
     * @returns CreateLoginProfileResponse
     *
     * @param CreateLoginProfileRequest $request
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoginProfileWithOptions($request, $runtime);
    }

    /**
     * Creates a custom policy.
     *
     * @remarks
     * For more information about policies, see [Policy overview](https://help.aliyun.com/document_detail/93732.html).
     * This topic provides an example on how to create a custom policy to query Elastic Compute Service (ECS) instances in a specific region.
     *
     * @param tmpReq - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom policy.
     *
     * @remarks
     * For more information about policies, see [Policy overview](https://help.aliyun.com/document_detail/93732.html).
     * This topic provides an example on how to create a custom policy to query Elastic Compute Service (ECS) instances in a specific region.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a version for a policy.
     *
     * @param request - CreatePolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyVersionResponse
     *
     * @param CreatePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->rotateStrategy) {
            @$query['RotateStrategy'] = $request->rotateStrategy;
        }

        if (null !== $request->setAsDefault) {
            @$query['SetAsDefault'] = $request->setAsDefault;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyVersion',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a version for a policy.
     *
     * @param request - CreatePolicyVersionRequest
     *
     * @returns CreatePolicyVersionResponse
     *
     * @param CreatePolicyVersionRequest $request
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * Creates a Resource Access Management (RAM) role.
     *
     * @remarks
     * ### [](#)Operation description
     * For more information about RAM roles, see [Overview of RAM roles](https://help.aliyun.com/document_detail/93689.html).
     *
     * @param tmpReq - CreateRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->assumeRolePolicyDocument) {
            @$query['AssumeRolePolicyDocument'] = $request->assumeRolePolicyDocument;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->maxSessionDuration) {
            @$query['MaxSessionDuration'] = $request->maxSessionDuration;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Resource Access Management (RAM) role.
     *
     * @remarks
     * ### [](#)Operation description
     * For more information about RAM roles, see [Overview of RAM roles](https://help.aliyun.com/document_detail/93689.html).
     *
     * @param request - CreateRoleRequest
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }

    /**
     * Creates a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to create a RAM user named `alice`.
     *
     * @param request - CreateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->mobilePhone) {
            @$query['MobilePhone'] = $request->mobilePhone;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to create a RAM user named `alice`.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
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
     * Creates a multi-factor authentication (MFA) device.
     *
     * @param request - CreateVirtualMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualMFADeviceResponse
     *
     * @param CreateVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->virtualMFADeviceName) {
            @$query['VirtualMFADeviceName'] = $request->virtualMFADeviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualMFADevice',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a multi-factor authentication (MFA) device.
     *
     * @param request - CreateVirtualMFADeviceRequest
     *
     * @returns CreateVirtualMFADeviceResponse
     *
     * @param CreateVirtualMFADeviceRequest $request
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * Decodes the diagnostic information in the response that contains an access denied error. The error is caused by no RAM permissions.
     *
     * @param request - DecodeDiagnosticMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DecodeDiagnosticMessageResponse
     *
     * @param DecodeDiagnosticMessageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DecodeDiagnosticMessageResponse
     */
    public function decodeDiagnosticMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encodedDiagnosticMessage) {
            @$query['EncodedDiagnosticMessage'] = $request->encodedDiagnosticMessage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DecodeDiagnosticMessage',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DecodeDiagnosticMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decodes the diagnostic information in the response that contains an access denied error. The error is caused by no RAM permissions.
     *
     * @param request - DecodeDiagnosticMessageRequest
     *
     * @returns DecodeDiagnosticMessageResponse
     *
     * @param DecodeDiagnosticMessageRequest $request
     *
     * @return DecodeDiagnosticMessageResponse
     */
    public function decodeDiagnosticMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decodeDiagnosticMessageWithOptions($request, $runtime);
    }

    /**
     * Deletes an AccessKey pair of a Resource Access Management (RAM) user.
     *
     * @param request - DeleteAccessKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessKeyResponse
     *
     * @param DeleteAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessKey',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AccessKey pair of a Resource Access Management (RAM) user.
     *
     * @param request - DeleteAccessKeyRequest
     *
     * @returns DeleteAccessKeyResponse
     *
     * @param DeleteAccessKeyRequest $request
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyWithOptions($request, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) user group.
     *
     * @remarks
     * Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *
     * @param request - DeleteGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) user group.
     *
     * @remarks
     * Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *
     * @param request - DeleteGroupRequest
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * Disables console logon for a Resource Access Management (RAM) user.
     *
     * @param request - DeleteLoginProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoginProfileResponse
     *
     * @param DeleteLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoginProfile',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables console logon for a Resource Access Management (RAM) user.
     *
     * @param request - DeleteLoginProfileRequest
     *
     * @returns DeleteLoginProfileResponse
     *
     * @param DeleteLoginProfileRequest $request
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginProfileWithOptions($request, $runtime);
    }

    /**
     * Deletes a policy.
     *
     * @param request - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cascadingDelete) {
            @$query['CascadingDelete'] = $request->cascadingDelete;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy.
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a policy version.
     *
     * @param request - DeletePolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyVersionResponse
     *
     * @param DeletePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyVersion',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy version.
     *
     * @param request - DeletePolicyVersionRequest
     *
     * @returns DeletePolicyVersionResponse
     *
     * @param DeletePolicyVersionRequest $request
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyVersionWithOptions($request, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) role.
     *
     * @param request - DeleteRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) role.
     *
     * @param request - DeleteRoleRequest
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoleWithOptions($request, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) user.
     *
     * @remarks
     * Before you delete a RAM user, make sure that no policies are attached to the RAM user and that the RAM user does not belong to any groups.
     *
     * @param request - DeleteUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) user.
     *
     * @remarks
     * Before you delete a RAM user, make sure that no policies are attached to the RAM user and that the RAM user does not belong to any groups.
     *
     * @param request - DeleteUserRequest
     *
     * @returns DeleteUserResponse
     *
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
     * Deletes a multi-factor authentication (MFA) device.
     *
     * @param request - DeleteVirtualMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualMFADeviceResponse
     *
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualMFADevice',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a multi-factor authentication (MFA) device.
     *
     * @param request - DeleteVirtualMFADeviceRequest
     *
     * @returns DeleteVirtualMFADeviceResponse
     *
     * @param DeleteVirtualMFADeviceRequest $request
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) user group.
     *
     * @param request - DetachPolicyFromGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicyFromGroupResponse
     *
     * @param DetachPolicyFromGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPolicyFromGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicyFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) user group.
     *
     * @param request - DetachPolicyFromGroupRequest
     *
     * @returns DetachPolicyFromGroupResponse
     *
     * @param DetachPolicyFromGroupRequest $request
     *
     * @return DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromGroupWithOptions($request, $runtime);
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) role.
     *
     * @param request - DetachPolicyFromRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicyFromRoleResponse
     *
     * @param DetachPolicyFromRoleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPolicyFromRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicyFromRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) role.
     *
     * @param request - DetachPolicyFromRoleRequest
     *
     * @returns DetachPolicyFromRoleResponse
     *
     * @param DetachPolicyFromRoleRequest $request
     *
     * @return DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromRoleWithOptions($request, $runtime);
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) user.
     *
     * @param request - DetachPolicyFromUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicyFromUserResponse
     *
     * @param DetachPolicyFromUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPolicyFromUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicyFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a policy from a Resource Access Management (RAM) user.
     *
     * @param request - DetachPolicyFromUserRequest
     *
     * @returns DetachPolicyFromUserResponse
     *
     * @param DetachPolicyFromUserRequest $request
     *
     * @return DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromUserWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAccessKeyLastUsedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessKeyLastUsedResponse
     *
     * @param GetAccessKeyLastUsedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessKeyLastUsed',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessKeyLastUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAccessKeyLastUsedRequest
     *
     * @returns GetAccessKeyLastUsedResponse
     *
     * @param GetAccessKeyLastUsedRequest $request
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedWithOptions($request, $runtime);
    }

    /**
     * Queries the alias of an Alibaba Cloud account.
     *
     * @param request - GetAccountAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountAliasResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountAliasResponse
     */
    public function getAccountAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAccountAlias',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alias of an Alibaba Cloud account.
     *
     * @returns GetAccountAliasResponse
     *
     * @return GetAccountAliasResponse
     */
    public function getAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountAliasWithOptions($runtime);
    }

    /**
     * Queries information about a Resource Access Management (RAM) user group.
     *
     * @param request - GetGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a Resource Access Management (RAM) user group.
     *
     * @param request - GetGroupRequest
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     *
     * @return GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the logon configurations of a Resource Access Management (RAM) user.
     *
     * @param request - GetLoginProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginProfileResponse
     *
     * @param GetLoginProfileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginProfile',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logon configurations of a Resource Access Management (RAM) user.
     *
     * @param request - GetLoginProfileRequest
     *
     * @returns GetLoginProfileResponse
     *
     * @param GetLoginProfileRequest $request
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginProfileWithOptions($request, $runtime);
    }

    /**
     * Queries the password policy of Resource Access Management (RAM) users, including the password strength.
     *
     * @param request - GetPasswordPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPasswordPolicyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetPasswordPolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the password policy of Resource Access Management (RAM) users, including the password strength.
     *
     * @returns GetPasswordPolicyResponse
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($runtime);
    }

    /**
     * Queries information about a policy.
     *
     * @param request - GetPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a policy.
     *
     * @param request - GetPolicyRequest
     *
     * @returns GetPolicyResponse
     *
     * @param GetPolicyRequest $request
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a policy version.
     *
     * @param request - GetPolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyVersionResponse
     *
     * @param GetPolicyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicyVersion',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a policy version.
     *
     * @param request - GetPolicyVersionRequest
     *
     * @returns GetPolicyVersionResponse
     *
     * @param GetPolicyVersionRequest $request
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * Queries information about a Resource Access Management (RAM) role.
     *
     * @param request - GetRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleResponse
     *
     * @param GetRoleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a Resource Access Management (RAM) role.
     *
     * @param request - GetRoleRequest
     *
     * @returns GetRoleResponse
     *
     * @param GetRoleRequest $request
     *
     * @return GetRoleResponse
     */
    public function getRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoleWithOptions($request, $runtime);
    }

    /**
     * Queries the security preferences.
     *
     * @param request - GetSecurityPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecurityPreferenceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSecurityPreference',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the security preferences.
     *
     * @returns GetSecurityPreferenceResponse
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreference()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($runtime);
    }

    /**
     * Queries information about a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to query information about the RAM user `alice`.
     *
     * @param request - GetUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to query information about the RAM user `alice`.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * Queries the multi-factor authentication (MFA) device that is bound to a Resource Access Management (RAM) user.
     *
     * @param request - GetUserMFAInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserMFAInfoResponse
     *
     * @param GetUserMFAInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserMFAInfo',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserMFAInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the multi-factor authentication (MFA) device that is bound to a Resource Access Management (RAM) user.
     *
     * @param request - GetUserMFAInfoRequest
     *
     * @returns GetUserMFAInfoResponse
     *
     * @param GetUserMFAInfoRequest $request
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAInfoWithOptions($request, $runtime);
    }

    /**
     * Queries all AccessKey pairs that belong to a Resource Access Management (RAM) user.
     *
     * @param request - ListAccessKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessKeysResponse
     *
     * @param ListAccessKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessKeys',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all AccessKey pairs that belong to a Resource Access Management (RAM) user.
     *
     * @param request - ListAccessKeysRequest
     *
     * @returns ListAccessKeysResponse
     *
     * @param ListAccessKeysRequest $request
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the entities to which a policy is attached.
     *
     * @param request - ListEntitiesForPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEntitiesForPolicyResponse
     *
     * @param ListEntitiesForPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEntitiesForPolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEntitiesForPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the entities to which a policy is attached.
     *
     * @param request - ListEntitiesForPolicyRequest
     *
     * @returns ListEntitiesForPolicyResponse
     *
     * @param ListEntitiesForPolicyRequest $request
     *
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesForPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries Resource Access Management (RAM) user groups.
     *
     * @param request - ListGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Resource Access Management (RAM) user groups.
     *
     * @param request - ListGroupsRequest
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the Resource Access Management (RAM) user groups to which a RAM user belongs.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to query the RAM user groups to which the RAM user `Alice` belongs. The response shows that `Alice` belongs to the RAM user group named `Dev-Team`.
     *
     * @param request - ListGroupsForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsForUserResponse
     *
     * @param ListGroupsForUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupsForUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Resource Access Management (RAM) user groups to which a RAM user belongs.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to query the RAM user groups to which the RAM user `Alice` belongs. The response shows that `Alice` belongs to the RAM user group named `Dev-Team`.
     *
     * @param request - ListGroupsForUserRequest
     *
     * @returns ListGroupsForUserResponse
     *
     * @param ListGroupsForUserRequest $request
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * Queries a list of policies.
     *
     * @param tmpReq - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPoliciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the policies that are attached to a Resource Access Management (RAM) user group.
     *
     * @param request - ListPoliciesForGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesForGroupResponse
     *
     * @param ListPoliciesForGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPoliciesForGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the policies that are attached to a Resource Access Management (RAM) user group.
     *
     * @param request - ListPoliciesForGroupRequest
     *
     * @returns ListPoliciesForGroupResponse
     *
     * @param ListPoliciesForGroupRequest $request
     *
     * @return ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the policies that are attached to a Resource Access Management (RAM) role.
     *
     * @param request - ListPoliciesForRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesForRoleResponse
     *
     * @param ListPoliciesForRoleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPoliciesForRoleResponse
     */
    public function listPoliciesForRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPoliciesForRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesForRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the policies that are attached to a Resource Access Management (RAM) role.
     *
     * @param request - ListPoliciesForRoleRequest
     *
     * @returns ListPoliciesForRoleResponse
     *
     * @param ListPoliciesForRoleRequest $request
     *
     * @return ListPoliciesForRoleResponse
     */
    public function listPoliciesForRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForRoleWithOptions($request, $runtime);
    }

    /**
     * Queries the policies that are attached to a RAM user.
     *
     * @remarks
     * > You can call this operation to query only the policies that are attached to Alibaba Cloud accounts. You cannot query the policies that are attached to resource groups.
     *
     * @param request - ListPoliciesForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesForUserResponse
     *
     * @param ListPoliciesForUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPoliciesForUserResponse
     */
    public function listPoliciesForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPoliciesForUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the policies that are attached to a RAM user.
     *
     * @remarks
     * > You can call this operation to query only the policies that are attached to Alibaba Cloud accounts. You cannot query the policies that are attached to resource groups.
     *
     * @param request - ListPoliciesForUserRequest
     *
     * @returns ListPoliciesForUserResponse
     *
     * @param ListPoliciesForUserRequest $request
     *
     * @return ListPoliciesForUserResponse
     */
    public function listPoliciesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForUserWithOptions($request, $runtime);
    }

    /**
     * Queries the versions of a policy.
     *
     * @param request - ListPolicyVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyVersionsResponse
     *
     * @param ListPolicyVersionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyVersions',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of a policy.
     *
     * @param request - ListPolicyVersionsRequest
     *
     * @returns ListPolicyVersionsResponse
     *
     * @param ListPolicyVersionsRequest $request
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries all Resource Access Management (RAM) roles.
     *
     * @param tmpReq - ListRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListRolesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all Resource Access Management (RAM) roles.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
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
     * Queries the tags that are added to resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceNames) {
            $request->resourceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceNames, 'ResourceNames', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceNamesShrink) {
            @$query['ResourceNames'] = $request->resourceNamesShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2015-05-01',
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
     * Queries the tags that are added to resources.
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
     * Queries the information about all RAM users.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all RAM users.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
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
     * Queries Resource Access Management (RAM) users in a RAM user group.
     *
     * @param request - ListUsersForGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersForGroupResponse
     *
     * @param ListUsersForGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxItems) {
            @$query['MaxItems'] = $request->maxItems;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersForGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Resource Access Management (RAM) users in a RAM user group.
     *
     * @param request - ListUsersForGroupRequest
     *
     * @returns ListUsersForGroupResponse
     *
     * @param ListUsersForGroupRequest $request
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForGroupWithOptions($request, $runtime);
    }

    /**
     * Queries multi-factor authentication (MFA) devices.
     *
     * @param request - ListVirtualMFADevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirtualMFADevicesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListVirtualMFADevices',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirtualMFADevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries multi-factor authentication (MFA) devices.
     *
     * @returns ListVirtualMFADevicesResponse
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($runtime);
    }

    /**
     * Removes a Resource Access Management (RAM) user from a RAM user group.
     *
     * @param request - RemoveUserFromGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromGroupResponse
     *
     * @param RemoveUserFromGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a Resource Access Management (RAM) user from a RAM user group.
     *
     * @param request - RemoveUserFromGroupRequest
     *
     * @returns RemoveUserFromGroupResponse
     *
     * @param RemoveUserFromGroupRequest $request
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromGroupWithOptions($request, $runtime);
    }

    /**
     * Configures an alias for an Alibaba Cloud account.
     *
     * @param request - SetAccountAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAccountAliasResponse
     *
     * @param SetAccountAliasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetAccountAliasResponse
     */
    public function setAccountAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountAlias) {
            @$query['AccountAlias'] = $request->accountAlias;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAccountAlias',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures an alias for an Alibaba Cloud account.
     *
     * @param request - SetAccountAliasRequest
     *
     * @returns SetAccountAliasResponse
     *
     * @param SetAccountAliasRequest $request
     *
     * @return SetAccountAliasResponse
     */
    public function setAccountAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccountAliasWithOptions($request, $runtime);
    }

    /**
     * Specifies a version for a policy as the default version.
     *
     * @param request - SetDefaultPolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultPolicyVersionResponse
     *
     * @param SetDefaultPolicyVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultPolicyVersion',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies a version for a policy as the default version.
     *
     * @param request - SetDefaultPolicyVersionRequest
     *
     * @returns SetDefaultPolicyVersionResponse
     *
     * @param SetDefaultPolicyVersionRequest $request
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * Configures the password policy for Resource Access Management (RAM) users, including the password strength.
     *
     * @param request - SetPasswordPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetPasswordPolicyResponse
     *
     * @param SetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hardExpiry) {
            @$query['HardExpiry'] = $request->hardExpiry;
        }

        if (null !== $request->maxLoginAttemps) {
            @$query['MaxLoginAttemps'] = $request->maxLoginAttemps;
        }

        if (null !== $request->maxPasswordAge) {
            @$query['MaxPasswordAge'] = $request->maxPasswordAge;
        }

        if (null !== $request->minimumPasswordLength) {
            @$query['MinimumPasswordLength'] = $request->minimumPasswordLength;
        }

        if (null !== $request->passwordReusePrevention) {
            @$query['PasswordReusePrevention'] = $request->passwordReusePrevention;
        }

        if (null !== $request->requireLowercaseCharacters) {
            @$query['RequireLowercaseCharacters'] = $request->requireLowercaseCharacters;
        }

        if (null !== $request->requireNumbers) {
            @$query['RequireNumbers'] = $request->requireNumbers;
        }

        if (null !== $request->requireSymbols) {
            @$query['RequireSymbols'] = $request->requireSymbols;
        }

        if (null !== $request->requireUppercaseCharacters) {
            @$query['RequireUppercaseCharacters'] = $request->requireUppercaseCharacters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetPasswordPolicy',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the password policy for Resource Access Management (RAM) users, including the password strength.
     *
     * @param request - SetPasswordPolicyRequest
     *
     * @returns SetPasswordPolicyResponse
     *
     * @param SetPasswordPolicyRequest $request
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * Configures the security preferences.
     *
     * @param request - SetSecurityPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSecurityPreferenceResponse
     *
     * @param SetSecurityPreferenceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowUserToChangePassword) {
            @$query['AllowUserToChangePassword'] = $request->allowUserToChangePassword;
        }

        if (null !== $request->allowUserToManageAccessKeys) {
            @$query['AllowUserToManageAccessKeys'] = $request->allowUserToManageAccessKeys;
        }

        if (null !== $request->allowUserToManageMFADevices) {
            @$query['AllowUserToManageMFADevices'] = $request->allowUserToManageMFADevices;
        }

        if (null !== $request->allowUserToManagePublicKeys) {
            @$query['AllowUserToManagePublicKeys'] = $request->allowUserToManagePublicKeys;
        }

        if (null !== $request->enableSaveMFATicket) {
            @$query['EnableSaveMFATicket'] = $request->enableSaveMFATicket;
        }

        if (null !== $request->loginNetworkMasks) {
            @$query['LoginNetworkMasks'] = $request->loginNetworkMasks;
        }

        if (null !== $request->loginSessionDuration) {
            @$query['LoginSessionDuration'] = $request->loginSessionDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSecurityPreference',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the security preferences.
     *
     * @param request - SetSecurityPreferenceRequest
     *
     * @returns SetSecurityPreferenceResponse
     *
     * @param SetSecurityPreferenceRequest $request
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecurityPreferenceWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources.
     *
     * @param tmpReq - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceNames) {
            $request->resourceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceNames, 'ResourceNames', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->resourceNamesShrink) {
            @$query['ResourceNames'] = $request->resourceNamesShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2015-05-01',
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
     * Adds tags to resources.
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
     * Unbinds a multi-factor authentication (MFA) device from a Resource Access Management (RAM) user.
     *
     * @param request - UnbindMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindMFADeviceResponse
     *
     * @param UnbindMFADeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindMFADevice',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a multi-factor authentication (MFA) device from a Resource Access Management (RAM) user.
     *
     * @param request - UnbindMFADeviceRequest
     *
     * @returns UnbindMFADeviceResponse
     *
     * @param UnbindMFADeviceRequest $request
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceNames) {
            $request->resourceNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceNames, 'ResourceNames', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceNamesShrink) {
            @$query['ResourceNames'] = $request->resourceNamesShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['TagKeys'] = $request->tagKeysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2015-05-01',
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
     * Removes tags from resources.
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
     * Changes the status of an AccessKey pair that belongs to a Resource Access Management (RAM) user.
     *
     * @param request - UpdateAccessKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccessKeyResponse
     *
     * @param UpdateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccessKey',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of an AccessKey pair that belongs to a Resource Access Management (RAM) user.
     *
     * @param request - UpdateAccessKeyRequest
     *
     * @returns UpdateAccessKeyResponse
     *
     * @param UpdateAccessKeyRequest $request
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessKeyWithOptions($request, $runtime);
    }

    /**
     * Modifies a Resource Access Management (RAM) user group.
     *
     * @param request - UpdateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->newComments) {
            @$query['NewComments'] = $request->newComments;
        }

        if (null !== $request->newGroupName) {
            @$query['NewGroupName'] = $request->newGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Resource Access Management (RAM) user group.
     *
     * @param request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the logon configurations of a Resource Access Management (RAM) user.
     *
     * @param request - UpdateLoginProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoginProfileResponse
     *
     * @param UpdateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->MFABindRequired) {
            @$query['MFABindRequired'] = $request->MFABindRequired;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordResetRequired) {
            @$query['PasswordResetRequired'] = $request->passwordResetRequired;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoginProfile',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the logon configurations of a Resource Access Management (RAM) user.
     *
     * @param request - UpdateLoginProfileRequest
     *
     * @returns UpdateLoginProfileResponse
     *
     * @param UpdateLoginProfileRequest $request
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginProfileWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a custom policy.
     *
     * @remarks
     * ### [](#)
     * You can call this operation to modify only the description of a custom policy. You cannot modify the description of a system policy.
     *
     * @param request - UpdatePolicyDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyDescriptionResponse
     *
     * @param UpdatePolicyDescriptionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdatePolicyDescriptionResponse
     */
    public function updatePolicyDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicyDescription',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a custom policy.
     *
     * @remarks
     * ### [](#)
     * You can call this operation to modify only the description of a custom policy. You cannot modify the description of a system policy.
     *
     * @param request - UpdatePolicyDescriptionRequest
     *
     * @returns UpdatePolicyDescriptionResponse
     *
     * @param UpdatePolicyDescriptionRequest $request
     *
     * @return UpdatePolicyDescriptionResponse
     */
    public function updatePolicyDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyDescriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a Resource Access Management (RAM) role.
     *
     * @remarks
     * This topic provides an example on how to change the description of `ECSAdmin` to `ECS administrator`.
     *
     * @param request - UpdateRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newAssumeRolePolicyDocument) {
            @$query['NewAssumeRolePolicyDocument'] = $request->newAssumeRolePolicyDocument;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newMaxSessionDuration) {
            @$query['NewMaxSessionDuration'] = $request->newMaxSessionDuration;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about a Resource Access Management (RAM) role.
     *
     * @remarks
     * This topic provides an example on how to change the description of `ECSAdmin` to `ECS administrator`.
     *
     * @param request - UpdateRoleRequest
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to change the name of a RAM user from `zhangq****` to `xiaoq****`.
     *
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newComments) {
            @$query['NewComments'] = $request->newComments;
        }

        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        if (null !== $request->newEmail) {
            @$query['NewEmail'] = $request->newEmail;
        }

        if (null !== $request->newMobilePhone) {
            @$query['NewMobilePhone'] = $request->newMobilePhone;
        }

        if (null !== $request->newUserName) {
            @$query['NewUserName'] = $request->newUserName;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2015-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about a Resource Access Management (RAM) user.
     *
     * @remarks
     * This topic provides an example on how to change the name of a RAM user from `zhangq****` to `xiaoq****`.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}

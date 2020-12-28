<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceResponse;
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
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse;
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
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateAccessKeyResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateLoginProfileResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddUserToGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUserToGroupResponse::fromMap($this->doRPCRequest('AddUserToGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachPolicyToGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachPolicyToGroupResponse::fromMap($this->doRPCRequest('AttachPolicyToGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachPolicyToRoleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachPolicyToRoleResponse
     */
    public function attachPolicyToRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachPolicyToRoleResponse::fromMap($this->doRPCRequest('AttachPolicyToRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachPolicyToUserRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachPolicyToUserResponse
     */
    public function attachPolicyToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachPolicyToUserResponse::fromMap($this->doRPCRequest('AttachPolicyToUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param BindMFADeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindMFADeviceResponse
     */
    public function bindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindMFADeviceResponse::fromMap($this->doRPCRequest('BindMFADevice', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ChangePasswordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangePasswordResponse::fromMap($this->doRPCRequest('ChangePassword', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ClearAccountAliasResponse::fromMap($this->doRPCRequest('ClearAccountAlias', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ClearAccountAliasResponse
     */
    public function clearAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearAccountAliasWithOptions($runtime);
    }

    /**
     * @param CreateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccessKeyResponse::fromMap($this->doRPCRequest('CreateAccessKey', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupResponse::fromMap($this->doRPCRequest('CreateGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoginProfileResponse::fromMap($this->doRPCRequest('CreateLoginProfile', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePolicyResponse::fromMap($this->doRPCRequest('CreatePolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreatePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePolicyVersionResponse::fromMap($this->doRPCRequest('CreatePolicyVersion', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoleResponse::fromMap($this->doRPCRequest('CreateRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVirtualMFADeviceResponse::fromMap($this->doRPCRequest('CreateVirtualMFADevice', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccessKeyResponse::fromMap($this->doRPCRequest('DeleteAccessKey', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGroupResponse::fromMap($this->doRPCRequest('DeleteGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLoginProfileResponse::fromMap($this->doRPCRequest('DeleteLoginProfile', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePolicyResponse::fromMap($this->doRPCRequest('DeletePolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeletePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePolicyVersionResponse::fromMap($this->doRPCRequest('DeletePolicyVersion', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRoleResponse::fromMap($this->doRPCRequest('DeleteRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->doRPCRequest('DeleteVirtualMFADevice', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DetachPolicyFromGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachPolicyFromGroupResponse::fromMap($this->doRPCRequest('DetachPolicyFromGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DetachPolicyFromRoleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachPolicyFromRoleResponse::fromMap($this->doRPCRequest('DetachPolicyFromRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DetachPolicyFromUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachPolicyFromUserResponse::fromMap($this->doRPCRequest('DetachPolicyFromUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetAccessKeyLastUsedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAccessKeyLastUsedResponse::fromMap($this->doRPCRequest('GetAccessKeyLastUsed', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetAccountAliasResponse
     */
    public function getAccountAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetAccountAliasResponse::fromMap($this->doRPCRequest('GetAccountAlias', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetAccountAliasResponse
     */
    public function getAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountAliasWithOptions($runtime);
    }

    /**
     * @param GetGroupRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGroupResponse::fromMap($this->doRPCRequest('GetGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetLoginProfileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginProfileResponse
     */
    public function getLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoginProfileResponse::fromMap($this->doRPCRequest('GetLoginProfile', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetPasswordPolicyResponse::fromMap($this->doRPCRequest('GetPasswordPolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($runtime);
    }

    /**
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPolicyResponse::fromMap($this->doRPCRequest('GetPolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetPolicyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPolicyVersionResponse::fromMap($this->doRPCRequest('GetPolicyVersion', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetRoleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRoleResponse::fromMap($this->doRPCRequest('GetRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetSecurityPreferenceResponse::fromMap($this->doRPCRequest('GetSecurityPreference', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetSecurityPreferenceResponse
     */
    public function getSecurityPreference()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetUserMFAInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserMFAInfoResponse::fromMap($this->doRPCRequest('GetUserMFAInfo', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAccessKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAccessKeysResponse::fromMap($this->doRPCRequest('ListAccessKeys', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListEntitiesForPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEntitiesForPolicyResponse::fromMap($this->doRPCRequest('ListEntitiesForPolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGroupsResponse::fromMap($this->doRPCRequest('ListGroups', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListGroupsForUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGroupsForUserResponse::fromMap($this->doRPCRequest('ListGroupsForUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesResponse::fromMap($this->doRPCRequest('ListPolicies', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPoliciesForGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesForGroupResponse::fromMap($this->doRPCRequest('ListPoliciesForGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPoliciesForRoleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPoliciesForRoleResponse
     */
    public function listPoliciesForRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesForRoleResponse::fromMap($this->doRPCRequest('ListPoliciesForRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPoliciesForUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPoliciesForUserResponse
     */
    public function listPoliciesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesForUserResponse::fromMap($this->doRPCRequest('ListPoliciesForUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPolicyVersionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPolicyVersionsResponse::fromMap($this->doRPCRequest('ListPolicyVersions', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListUsersForGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersForGroupResponse::fromMap($this->doRPCRequest('ListUsersForGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListVirtualMFADevicesResponse::fromMap($this->doRPCRequest('ListVirtualMFADevices', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($runtime);
    }

    /**
     * @param RemoveUserFromGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUserFromGroupResponse::fromMap($this->doRPCRequest('RemoveUserFromGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetAccountAliasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetAccountAliasResponse
     */
    public function setAccountAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAccountAliasResponse::fromMap($this->doRPCRequest('SetAccountAlias', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetDefaultPolicyVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDefaultPolicyVersionResponse::fromMap($this->doRPCRequest('SetDefaultPolicyVersion', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetPasswordPolicyResponse
     */
    public function setPasswordPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetPasswordPolicyResponse::fromMap($this->doRPCRequest('SetPasswordPolicy', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetSecurityPreferenceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetSecurityPreferenceResponse::fromMap($this->doRPCRequest('SetSecurityPreference', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UnbindMFADeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindMFADeviceResponse::fromMap($this->doRPCRequest('UnbindMFADevice', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateAccessKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAccessKeyResponse::fromMap($this->doRPCRequest('UpdateAccessKey', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupResponse::fromMap($this->doRPCRequest('UpdateGroup', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateLoginProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLoginProfileResponse
     */
    public function updateLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLoginProfileResponse::fromMap($this->doRPCRequest('UpdateLoginProfile', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRoleResponse::fromMap($this->doRPCRequest('UpdateRole', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2015-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}

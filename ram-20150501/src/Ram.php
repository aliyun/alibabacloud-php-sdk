<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdatePolicyDescriptionRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdatePolicyDescriptionResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @summary Adds a RAM user to a RAM user group.
     *  *
     * @param AddUserToGroupRequest $request AddUserToGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToGroupResponse AddUserToGroupResponse
     */
    public function addUserToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a RAM user to a RAM user group.
     *  *
     * @param AddUserToGroupRequest $request AddUserToGroupRequest
     *
     * @return AddUserToGroupResponse AddUserToGroupResponse
     */
    public function addUserToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches a policy to a RAM user group.
     *  *
     * @param AttachPolicyToGroupRequest $request AttachPolicyToGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachPolicyToGroupResponse AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachPolicyToGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachPolicyToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches a policy to a RAM user group.
     *  *
     * @param AttachPolicyToGroupRequest $request AttachPolicyToGroupRequest
     *
     * @return AttachPolicyToGroupResponse AttachPolicyToGroupResponse
     */
    public function attachPolicyToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches a policy to a RAM role.
     *  *
     * @param AttachPolicyToRoleRequest $request AttachPolicyToRoleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachPolicyToRoleResponse AttachPolicyToRoleResponse
     */
    public function attachPolicyToRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachPolicyToRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachPolicyToRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches a policy to a RAM role.
     *  *
     * @param AttachPolicyToRoleRequest $request AttachPolicyToRoleRequest
     *
     * @return AttachPolicyToRoleResponse AttachPolicyToRoleResponse
     */
    public function attachPolicyToRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches a policy to a RAM user.
     *  *
     * @param AttachPolicyToUserRequest $request AttachPolicyToUserRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachPolicyToUserResponse AttachPolicyToUserResponse
     */
    public function attachPolicyToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachPolicyToUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachPolicyToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches a policy to a RAM user.
     *  *
     * @param AttachPolicyToUserRequest $request AttachPolicyToUserRequest
     *
     * @return AttachPolicyToUserResponse AttachPolicyToUserResponse
     */
    public function attachPolicyToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyToUserWithOptions($request, $runtime);
    }

    /**
     * @param BindMFADeviceRequest $request BindMFADeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BindMFADeviceResponse BindMFADeviceResponse
     */
    public function bindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationCode1)) {
            $query['AuthenticationCode1'] = $request->authenticationCode1;
        }
        if (!Utils::isUnset($request->authenticationCode2)) {
            $query['AuthenticationCode2'] = $request->authenticationCode2;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindMFADevice',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindMFADeviceRequest $request BindMFADeviceRequest
     *
     * @return BindMFADeviceResponse BindMFADeviceResponse
     */
    public function bindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @description >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can change their passwords.
     *  *
     * @param ChangePasswordRequest $request ChangePasswordRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
        }
        if (!Utils::isUnset($request->oldPassword)) {
            $query['OldPassword'] = $request->oldPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangePassword',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description >  This operation is available only for RAM users. Before you call this operation, make sure that `AllowUserToChangePassword` in [SetSecurityPreference](https://help.aliyun.com/document_detail/43765.html) is set to `True`. The value True indicates that RAM users can change their passwords.
     *  *
     * @param ChangePasswordRequest $request ChangePasswordRequest
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearAccountAliasResponse ClearAccountAliasResponse
     */
    public function clearAccountAliasWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ClearAccountAlias',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ClearAccountAliasResponse ClearAccountAliasResponse
     */
    public function clearAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearAccountAliasWithOptions($runtime);
    }

    /**
     * @param CreateAccessKeyRequest $request CreateAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessKeyResponse CreateAccessKeyResponse
     */
    public function createAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessKey',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccessKeyRequest $request CreateAccessKeyRequest
     *
     * @return CreateAccessKeyResponse CreateAccessKeyResponse
     */
    public function createAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a RAM user group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a RAM user group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Enables console logon for a RAM user.
     *  *
     * @param CreateLoginProfileRequest $request CreateLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoginProfileResponse CreateLoginProfileResponse
     */
    public function createLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->MFABindRequired)) {
            $query['MFABindRequired'] = $request->MFABindRequired;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordResetRequired)) {
            $query['PasswordResetRequired'] = $request->passwordResetRequired;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoginProfile',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables console logon for a RAM user.
     *  *
     * @param CreateLoginProfileRequest $request CreateLoginProfileRequest
     *
     * @return CreateLoginProfileResponse CreateLoginProfileResponse
     */
    public function createLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom policy.
     *  *
     * @description For more information about policies, see [Policy overview](https://help.aliyun.com/document_detail/93732.html).
     * This topic provides an example on how to create a custom policy to query Elastic Compute Service (ECS) instances in a specific region.
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom policy.
     *  *
     * @description For more information about policies, see [Policy overview](https://help.aliyun.com/document_detail/93732.html).
     * This topic provides an example on how to create a custom policy to query Elastic Compute Service (ECS) instances in a specific region.
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreatePolicyVersionRequest $request CreatePolicyVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyVersionResponse CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->rotateStrategy)) {
            $query['RotateStrategy'] = $request->rotateStrategy;
        }
        if (!Utils::isUnset($request->setAsDefault)) {
            $query['SetAsDefault'] = $request->setAsDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyVersion',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePolicyVersionRequest $request CreatePolicyVersionRequest
     *
     * @return CreatePolicyVersionResponse CreatePolicyVersionResponse
     */
    public function createPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a RAM role.
     *  *
     * @description ## Description
     * For more information about RAM roles, see [Overview of RAM roles](https://help.aliyun.com/document_detail/93689.html).
     *  *
     * @param CreateRoleRequest $request CreateRoleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assumeRolePolicyDocument)) {
            $query['AssumeRolePolicyDocument'] = $request->assumeRolePolicyDocument;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->maxSessionDuration)) {
            $query['MaxSessionDuration'] = $request->maxSessionDuration;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a RAM role.
     *  *
     * @description ## Description
     * For more information about RAM roles, see [Overview of RAM roles](https://help.aliyun.com/document_detail/93689.html).
     *  *
     * @param CreateRoleRequest $request CreateRoleRequest
     *
     * @return CreateRoleResponse CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Resource Access Management (RAM) user.
     *  *
     * @description This topic provides an example on how to create a RAM user named `alice`.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->mobilePhone)) {
            $query['MobilePhone'] = $request->mobilePhone;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Resource Access Management (RAM) user.
     *  *
     * @description This topic provides an example on how to create a RAM user named `alice`.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateVirtualMFADeviceRequest $request CreateVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVirtualMFADeviceResponse CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->virtualMFADeviceName)) {
            $query['VirtualMFADeviceName'] = $request->virtualMFADeviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualMFADevice',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVirtualMFADeviceRequest $request CreateVirtualMFADeviceRequest
     *
     * @return CreateVirtualMFADeviceResponse CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Decodes the diagnostic information in the response that contains an access denied error. The error is caused by no RAM permissions.
     *  *
     * @param DecodeDiagnosticMessageRequest $request DecodeDiagnosticMessageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DecodeDiagnosticMessageResponse DecodeDiagnosticMessageResponse
     */
    public function decodeDiagnosticMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodedDiagnosticMessage)) {
            $query['EncodedDiagnosticMessage'] = $request->encodedDiagnosticMessage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecodeDiagnosticMessage',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DecodeDiagnosticMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Decodes the diagnostic information in the response that contains an access denied error. The error is caused by no RAM permissions.
     *  *
     * @param DecodeDiagnosticMessageRequest $request DecodeDiagnosticMessageRequest
     *
     * @return DecodeDiagnosticMessageResponse DecodeDiagnosticMessageResponse
     */
    public function decodeDiagnosticMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decodeDiagnosticMessageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessKeyRequest $request DeleteAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessKeyResponse DeleteAccessKeyResponse
     */
    public function deleteAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessKey',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAccessKeyRequest $request DeleteAccessKeyRequest
     *
     * @return DeleteAccessKeyResponse DeleteAccessKeyResponse
     */
    public function deleteAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @description Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description Before you delete a RAM user group, make sure that no policies are attached to the group and no RAM users are included in the group.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLoginProfileRequest $request DeleteLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoginProfileResponse DeleteLoginProfileResponse
     */
    public function deleteLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoginProfile',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLoginProfileRequest $request DeleteLoginProfileRequest
     *
     * @return DeleteLoginProfileResponse DeleteLoginProfileResponse
     */
    public function deleteLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyRequest $request DeletePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePolicyRequest $request DeletePolicyRequest
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyVersionRequest $request DeletePolicyVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyVersionResponse DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyVersion',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePolicyVersionRequest $request DeletePolicyVersionRequest
     *
     * @return DeletePolicyVersionResponse DeletePolicyVersionResponse
     */
    public function deletePolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoleRequest $request DeleteRoleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoleResponse DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRoleRequest $request DeleteRoleRequest
     *
     * @return DeleteRoleResponse DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoleWithOptions($request, $runtime);
    }

    /**
     * @description Before you delete a RAM user, make sure that no policies are attached to the RAM user and that the RAM user does not belong to any groups.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description Before you delete a RAM user, make sure that no policies are attached to the RAM user and that the RAM user does not belong to any groups.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualMFADevice',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches a policy from a RAM user group.
     *  *
     * @param DetachPolicyFromGroupRequest $request DetachPolicyFromGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachPolicyFromGroupResponse DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachPolicyFromGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachPolicyFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detaches a policy from a RAM user group.
     *  *
     * @param DetachPolicyFromGroupRequest $request DetachPolicyFromGroupRequest
     *
     * @return DetachPolicyFromGroupResponse DetachPolicyFromGroupResponse
     */
    public function detachPolicyFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches a policy from a RAM role.
     *  *
     * @param DetachPolicyFromRoleRequest $request DetachPolicyFromRoleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachPolicyFromRoleResponse DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachPolicyFromRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachPolicyFromRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detaches a policy from a RAM role.
     *  *
     * @param DetachPolicyFromRoleRequest $request DetachPolicyFromRoleRequest
     *
     * @return DetachPolicyFromRoleResponse DetachPolicyFromRoleResponse
     */
    public function detachPolicyFromRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches a policy from a RAM user.
     *  *
     * @param DetachPolicyFromUserRequest $request DetachPolicyFromUserRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachPolicyFromUserResponse DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachPolicyFromUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachPolicyFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detaches a policy from a RAM user.
     *  *
     * @param DetachPolicyFromUserRequest $request DetachPolicyFromUserRequest
     *
     * @return DetachPolicyFromUserResponse DetachPolicyFromUserResponse
     */
    public function detachPolicyFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyFromUserWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessKeyLastUsedRequest $request GetAccessKeyLastUsedRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessKeyLastUsedResponse GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessKeyLastUsed',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessKeyLastUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAccessKeyLastUsedRequest $request GetAccessKeyLastUsedRequest
     *
     * @return GetAccessKeyLastUsedResponse GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessKeyLastUsedWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountAliasResponse GetAccountAliasResponse
     */
    public function getAccountAliasWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAccountAlias',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAccountAliasResponse GetAccountAliasResponse
     */
    public function getAccountAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountAliasWithOptions($runtime);
    }

    /**
     * @summary Queries the information of a RAM user group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a RAM user group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginProfileRequest $request GetLoginProfileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoginProfileResponse GetLoginProfileResponse
     */
    public function getLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginProfile',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLoginProfileRequest $request GetLoginProfileRequest
     *
     * @return GetLoginProfileResponse GetLoginProfileResponse
     */
    public function getLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPasswordPolicyResponse GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetPasswordPolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetPasswordPolicyResponse GetPasswordPolicyResponse
     */
    public function getPasswordPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($runtime);
    }

    /**
     * @summary Queries the information of a policy.
     *  *
     * @param GetPolicyRequest $request GetPolicyRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPolicyResponse GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a policy.
     *  *
     * @param GetPolicyRequest $request GetPolicyRequest
     *
     * @return GetPolicyResponse GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a policy version.
     *  *
     * @param GetPolicyVersionRequest $request GetPolicyVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPolicyVersionResponse GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicyVersion',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a policy version.
     *  *
     * @param GetPolicyVersionRequest $request GetPolicyVersionRequest
     *
     * @return GetPolicyVersionResponse GetPolicyVersionResponse
     */
    public function getPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information of a RAM role.
     *  *
     * @param GetRoleRequest $request GetRoleRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoleResponse GetRoleResponse
     */
    public function getRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information of a RAM role.
     *  *
     * @param GetRoleRequest $request GetRoleRequest
     *
     * @return GetRoleResponse GetRoleResponse
     */
    public function getRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoleWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecurityPreferenceResponse GetSecurityPreferenceResponse
     */
    public function getSecurityPreferenceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSecurityPreference',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetSecurityPreferenceResponse GetSecurityPreferenceResponse
     */
    public function getSecurityPreference()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityPreferenceWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a RAM user.
     *  *
     * @description This topic provides an example on how to query the information about the RAM user `alice`.
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a RAM user.
     *  *
     * @description This topic provides an example on how to query the information about the RAM user `alice`.
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param GetUserMFAInfoRequest $request GetUserMFAInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserMFAInfoResponse GetUserMFAInfoResponse
     */
    public function getUserMFAInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserMFAInfo',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserMFAInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserMFAInfoRequest $request GetUserMFAInfoRequest
     *
     * @return GetUserMFAInfoResponse GetUserMFAInfoResponse
     */
    public function getUserMFAInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of all AccessKey pairs that belong to a RAM user.
     *  *
     * @param ListAccessKeysRequest $request ListAccessKeysRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessKeysResponse ListAccessKeysResponse
     */
    public function listAccessKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessKeys',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of all AccessKey pairs that belong to a RAM user.
     *  *
     * @param ListAccessKeysRequest $request ListAccessKeysRequest
     *
     * @return ListAccessKeysResponse ListAccessKeysResponse
     */
    public function listAccessKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the entities to which a policy is attached.
     *  *
     * @param ListEntitiesForPolicyRequest $request ListEntitiesForPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEntitiesForPolicyResponse ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEntitiesForPolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEntitiesForPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the entities to which a policy is attached.
     *  *
     * @param ListEntitiesForPolicyRequest $request ListEntitiesForPolicyRequest
     *
     * @return ListEntitiesForPolicyResponse ListEntitiesForPolicyResponse
     */
    public function listEntitiesForPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesForPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries RAM user groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries RAM user groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Resource Access Management (RAM) user groups to which a RAM user belongs.
     *  *
     * @description This topic provides an example on how to query the RAM user groups to which the RAM user `Alice` belongs. The response shows that `Alice` belongs to the RAM user group named `Dev-Team`.
     *  *
     * @param ListGroupsForUserRequest $request ListGroupsForUserRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupsForUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Resource Access Management (RAM) user groups to which a RAM user belongs.
     *  *
     * @description This topic provides an example on how to query the RAM user groups to which the RAM user `Alice` belongs. The response shows that `Alice` belongs to the RAM user group named `Dev-Team`.
     *  *
     * @param ListGroupsForUserRequest $request ListGroupsForUserRequest
     *
     * @return ListGroupsForUserResponse ListGroupsForUserResponse
     */
    public function listGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of policies.
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicies',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of policies.
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the policies that are attached to a RAM user group.
     *  *
     * @param ListPoliciesForGroupRequest $request ListPoliciesForGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesForGroupResponse ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPoliciesForGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the policies that are attached to a RAM user group.
     *  *
     * @param ListPoliciesForGroupRequest $request ListPoliciesForGroupRequest
     *
     * @return ListPoliciesForGroupResponse ListPoliciesForGroupResponse
     */
    public function listPoliciesForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the policies that are attached to a RAM role.
     *  *
     * @param ListPoliciesForRoleRequest $request ListPoliciesForRoleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesForRoleResponse ListPoliciesForRoleResponse
     */
    public function listPoliciesForRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPoliciesForRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesForRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the policies that are attached to a RAM role.
     *  *
     * @param ListPoliciesForRoleRequest $request ListPoliciesForRoleRequest
     *
     * @return ListPoliciesForRoleResponse ListPoliciesForRoleResponse
     */
    public function listPoliciesForRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the policies that are attached to a RAM user.
     *  *
     * @description > You can call this operation to query only the policies that are attached to Alibaba Cloud accounts. You cannot query the policies that are attached to resource groups.
     *  *
     * @param ListPoliciesForUserRequest $request ListPoliciesForUserRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesForUserResponse ListPoliciesForUserResponse
     */
    public function listPoliciesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPoliciesForUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the policies that are attached to a RAM user.
     *  *
     * @description > You can call this operation to query only the policies that are attached to Alibaba Cloud accounts. You cannot query the policies that are attached to resource groups.
     *  *
     * @param ListPoliciesForUserRequest $request ListPoliciesForUserRequest
     *
     * @return ListPoliciesForUserResponse ListPoliciesForUserResponse
     */
    public function listPoliciesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the versions of a policy.
     *  *
     * @param ListPolicyVersionsRequest $request ListPolicyVersionsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyVersionsResponse ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicyVersions',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of a policy.
     *  *
     * @param ListPolicyVersionsRequest $request ListPolicyVersionsRequest
     *
     * @return ListPolicyVersionsResponse ListPolicyVersionsResponse
     */
    public function listPolicyVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of all RAM roles.
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of all RAM roles.
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all RAM users.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all RAM users.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersForGroupRequest $request ListUsersForGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsersForGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersForGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersForGroupRequest $request ListUsersForGroupRequest
     *
     * @return ListUsersForGroupResponse ListUsersForGroupResponse
     */
    public function listUsersForGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersForGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of all multi-factor authentication (MFA) devices.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVirtualMFADevicesResponse ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevicesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListVirtualMFADevices',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualMFADevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of all multi-factor authentication (MFA) devices.
     *  *
     * @return ListVirtualMFADevicesResponse ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualMFADevicesWithOptions($runtime);
    }

    /**
     * @param RemoveUserFromGroupRequest $request RemoveUserFromGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromGroupResponse RemoveUserFromGroupResponse
     */
    public function removeUserFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveUserFromGroupRequest $request RemoveUserFromGroupRequest
     *
     * @return RemoveUserFromGroupResponse RemoveUserFromGroupResponse
     */
    public function removeUserFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to specify an alias for an Alibaba Cloud account.
     *  *
     * @param SetAccountAliasRequest $request SetAccountAliasRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAccountAliasResponse SetAccountAliasResponse
     */
    public function setAccountAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountAlias)) {
            $query['AccountAlias'] = $request->accountAlias;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccountAlias',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccountAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to specify an alias for an Alibaba Cloud account.
     *  *
     * @param SetAccountAliasRequest $request SetAccountAliasRequest
     *
     * @return SetAccountAliasResponse SetAccountAliasResponse
     */
    public function setAccountAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccountAliasWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the default version of a policy.
     *  *
     * @param SetDefaultPolicyVersionRequest $request SetDefaultPolicyVersionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultPolicyVersionResponse SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultPolicyVersion',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the default version of a policy.
     *  *
     * @param SetDefaultPolicyVersionRequest $request SetDefaultPolicyVersionRequest
     *
     * @return SetDefaultPolicyVersionResponse SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetPasswordPolicyRequest $request SetPasswordPolicyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPasswordPolicyResponse SetPasswordPolicyResponse
     */
    public function setPasswordPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hardExpiry)) {
            $query['HardExpiry'] = $request->hardExpiry;
        }
        if (!Utils::isUnset($request->maxLoginAttemps)) {
            $query['MaxLoginAttemps'] = $request->maxLoginAttemps;
        }
        if (!Utils::isUnset($request->maxPasswordAge)) {
            $query['MaxPasswordAge'] = $request->maxPasswordAge;
        }
        if (!Utils::isUnset($request->minimumPasswordLength)) {
            $query['MinimumPasswordLength'] = $request->minimumPasswordLength;
        }
        if (!Utils::isUnset($request->passwordReusePrevention)) {
            $query['PasswordReusePrevention'] = $request->passwordReusePrevention;
        }
        if (!Utils::isUnset($request->requireLowercaseCharacters)) {
            $query['RequireLowercaseCharacters'] = $request->requireLowercaseCharacters;
        }
        if (!Utils::isUnset($request->requireNumbers)) {
            $query['RequireNumbers'] = $request->requireNumbers;
        }
        if (!Utils::isUnset($request->requireSymbols)) {
            $query['RequireSymbols'] = $request->requireSymbols;
        }
        if (!Utils::isUnset($request->requireUppercaseCharacters)) {
            $query['RequireUppercaseCharacters'] = $request->requireUppercaseCharacters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPasswordPolicy',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPasswordPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetPasswordPolicyRequest $request SetPasswordPolicyRequest
     *
     * @return SetPasswordPolicyResponse SetPasswordPolicyResponse
     */
    public function setPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetSecurityPreferenceRequest $request SetSecurityPreferenceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSecurityPreferenceResponse SetSecurityPreferenceResponse
     */
    public function setSecurityPreferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowUserToChangePassword)) {
            $query['AllowUserToChangePassword'] = $request->allowUserToChangePassword;
        }
        if (!Utils::isUnset($request->allowUserToManageAccessKeys)) {
            $query['AllowUserToManageAccessKeys'] = $request->allowUserToManageAccessKeys;
        }
        if (!Utils::isUnset($request->allowUserToManageMFADevices)) {
            $query['AllowUserToManageMFADevices'] = $request->allowUserToManageMFADevices;
        }
        if (!Utils::isUnset($request->allowUserToManagePublicKeys)) {
            $query['AllowUserToManagePublicKeys'] = $request->allowUserToManagePublicKeys;
        }
        if (!Utils::isUnset($request->enableSaveMFATicket)) {
            $query['EnableSaveMFATicket'] = $request->enableSaveMFATicket;
        }
        if (!Utils::isUnset($request->loginNetworkMasks)) {
            $query['LoginNetworkMasks'] = $request->loginNetworkMasks;
        }
        if (!Utils::isUnset($request->loginSessionDuration)) {
            $query['LoginSessionDuration'] = $request->loginSessionDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSecurityPreference',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSecurityPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSecurityPreferenceRequest $request SetSecurityPreferenceRequest
     *
     * @return SetSecurityPreferenceResponse SetSecurityPreferenceResponse
     */
    public function setSecurityPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecurityPreferenceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindMFADeviceRequest $request UnbindMFADeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindMFADeviceResponse UnbindMFADeviceResponse
     */
    public function unbindMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindMFADevice',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindMFADeviceRequest $request UnbindMFADeviceRequest
     *
     * @return UnbindMFADeviceResponse UnbindMFADeviceResponse
     */
    public function unbindMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAccessKeyRequest $request UpdateAccessKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccessKeyResponse UpdateAccessKeyResponse
     */
    public function updateAccessKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessKey',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAccessKeyRequest $request UpdateAccessKeyRequest
     *
     * @return UpdateAccessKeyResponse UpdateAccessKeyResponse
     */
    public function updateAccessKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a RAM user group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->newComments)) {
            $query['NewComments'] = $request->newComments;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a RAM user group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLoginProfileRequest $request UpdateLoginProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoginProfileResponse UpdateLoginProfileResponse
     */
    public function updateLoginProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->MFABindRequired)) {
            $query['MFABindRequired'] = $request->MFABindRequired;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordResetRequired)) {
            $query['PasswordResetRequired'] = $request->passwordResetRequired;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoginProfile',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoginProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLoginProfileRequest $request UpdateLoginProfileRequest
     *
     * @return UpdateLoginProfileResponse UpdateLoginProfileResponse
     */
    public function updateLoginProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoginProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a custom policy.
     *  *
     * @description You can call this operation to modify only the description of a custom policy. You cannot modify the description of a system policy.
     *  *
     * @param UpdatePolicyDescriptionRequest $request UpdatePolicyDescriptionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePolicyDescriptionResponse UpdatePolicyDescriptionResponse
     */
    public function updatePolicyDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolicyDescription',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePolicyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a custom policy.
     *  *
     * @description You can call this operation to modify only the description of a custom policy. You cannot modify the description of a system policy.
     *  *
     * @param UpdatePolicyDescriptionRequest $request UpdatePolicyDescriptionRequest
     *
     * @return UpdatePolicyDescriptionResponse UpdatePolicyDescriptionResponse
     */
    public function updatePolicyDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the description of a RAM role.
     *  *
     * @description This topic provides an example to show how to change the description of ECSAdmin to ECS administrator.
     *  *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newAssumeRolePolicyDocument)) {
            $query['NewAssumeRolePolicyDocument'] = $request->newAssumeRolePolicyDocument;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newMaxSessionDuration)) {
            $query['NewMaxSessionDuration'] = $request->newMaxSessionDuration;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRole',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the description of a RAM role.
     *  *
     * @description This topic provides an example to show how to change the description of ECSAdmin to ECS administrator.
     *  *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }

    /**
     * @description This topic provides an example on how to change the name of a RAM user from `zhangq****` to `xiaoq****`.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newComments)) {
            $query['NewComments'] = $request->newComments;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->newEmail)) {
            $query['NewEmail'] = $request->newEmail;
        }
        if (!Utils::isUnset($request->newMobilePhone)) {
            $query['NewMobilePhone'] = $request->newMobilePhone;
        }
        if (!Utils::isUnset($request->newUserName)) {
            $query['NewUserName'] = $request->newUserName;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2015-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description This topic provides an example on how to change the name of a RAM user from `zhangq****` to `xiaoq****`.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddExternalSAMLIdPCertificateRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddExternalSAMLIdPCertificateResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddPermissionPolicyToAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddPermissionPolicyToAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddUserToGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\AddUserToGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ClearExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ClearExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessAssignmentRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessAssignmentResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserProvisioningRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserProvisioningResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessAssignmentRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessAssignmentResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteMFADeviceForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteMFADeviceForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteSCIMServerCredentialRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteSCIMServerCredentialResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserProvisioningEventRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserProvisioningEventResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserProvisioningRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserProvisioningResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DisableDelegateAccountRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DisableDelegateAccountResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DisableServiceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\EnableDelegateAccountRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\EnableDelegateAccountResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\EnableServiceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetPasswordPolicyRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetPasswordPolicyResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetSCIMSynchronizationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetSCIMSynchronizationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserIdRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserIdResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserIdShrinkRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningEventRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningEventResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningRdAccountStatisticsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningRdAccountStatisticsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningStatisticsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningStatisticsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListDirectoriesResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListTasksRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListTasksResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningEventsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningEventsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUsersRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUsersResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ProvisionAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ProvisionAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveExternalSAMLIdPCertificateRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveExternalSAMLIdPCertificateResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemovePermissionPolicyFromAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemovePermissionPolicyFromAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveUserFromGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RemoveUserFromGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RetryUserProvisioningEventRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\RetryUserProvisioningEventResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetLoginPreferenceRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetLoginPreferenceResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetMFAAuthenticationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetMFAAuthenticationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetPasswordPolicyRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetPasswordPolicyResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSCIMSynchronizationStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSCIMSynchronizationStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateInlinePolicyForAccessConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateInlinePolicyForAccessConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateSCIMServerCredentialStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateSCIMServerCredentialStatusResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserMFAAuthenticationSettingsRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserMFAAuthenticationSettingsResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningConfigurationRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningConfigurationResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserStatusRequest;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudsso extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudsso', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a Security Assertion Markup Language (SAML) signing certificate.
     *
     * @remarks
     * You can add up to two SAML signing certificates.
     * This topic provides an example on how to add a SAML signing certificate to the directory `d-00fc2p61****`.
     *
     * @param request - AddExternalSAMLIdPCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddExternalSAMLIdPCertificateResponse
     *
     * @param AddExternalSAMLIdPCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->x509Certificate) {
            @$query['X509Certificate'] = $request->x509Certificate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddExternalSAMLIdPCertificate',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Security Assertion Markup Language (SAML) signing certificate.
     *
     * @remarks
     * You can add up to two SAML signing certificates.
     * This topic provides an example on how to add a SAML signing certificate to the directory `d-00fc2p61****`.
     *
     * @param request - AddExternalSAMLIdPCertificateRequest
     *
     * @returns AddExternalSAMLIdPCertificateResponse
     *
     * @param AddExternalSAMLIdPCertificateRequest $request
     *
     * @return AddExternalSAMLIdPCertificateResponse
     */
    public function addExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * Adds a policy to an access configuration.
     *
     * @remarks
     * This topic provides an example on how to add the system policy `AliyunECSFullAccess` to the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - AddPermissionPolicyToAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPermissionPolicyToAccessConfigurationResponse
     *
     * @param AddPermissionPolicyToAccessConfigurationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->inlinePolicyDocument) {
            @$query['InlinePolicyDocument'] = $request->inlinePolicyDocument;
        }

        if (null !== $request->permissionPolicyName) {
            @$query['PermissionPolicyName'] = $request->permissionPolicyName;
        }

        if (null !== $request->permissionPolicyType) {
            @$query['PermissionPolicyType'] = $request->permissionPolicyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPermissionPolicyToAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPermissionPolicyToAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a policy to an access configuration.
     *
     * @remarks
     * This topic provides an example on how to add the system policy `AliyunECSFullAccess` to the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - AddPermissionPolicyToAccessConfigurationRequest
     *
     * @returns AddPermissionPolicyToAccessConfigurationResponse
     *
     * @param AddPermissionPolicyToAccessConfigurationRequest $request
     *
     * @return AddPermissionPolicyToAccessConfigurationResponse
     */
    public function addPermissionPolicyToAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPermissionPolicyToAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Adds a user to a group.
     *
     * @remarks
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot add a user to a group that is synchronized by using SCIM.
     * This topic provides an example on how to add the user `u-00q8wbq42wiltcrk****` to the group `g-00jqzghi2n3o5hkh****`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToGroup',
            'version' => '2021-05-15',
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
     * Adds a user to a group.
     *
     * @remarks
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot add a user to a group that is synchronized by using SCIM.
     * This topic provides an example on how to add the user `u-00q8wbq42wiltcrk****` to the group `g-00jqzghi2n3o5hkh****`.
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
     * Clears the configurations of a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * If single sign-on (SSO) logon is disabled, you can clear the configurations of a SAML IdP. If SSO logon is enabled, you cannot clear the configurations.
     * This topic provides an example on how to clear the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *
     * @param request - ClearExternalSAMLIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearExternalSAMLIdentityProviderResponse
     *
     * @param ClearExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClearExternalSAMLIdentityProvider',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClearExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the configurations of a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * If single sign-on (SSO) logon is disabled, you can clear the configurations of a SAML IdP. If SSO logon is enabled, you cannot clear the configurations.
     * This topic provides an example on how to clear the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *
     * @param request - ClearExternalSAMLIdentityProviderRequest
     *
     * @returns ClearExternalSAMLIdentityProviderResponse
     *
     * @param ClearExternalSAMLIdentityProviderRequest $request
     *
     * @return ClearExternalSAMLIdentityProviderResponse
     */
    public function clearExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Assigns access permissions on an account in your resource directory to a user or a group by using an access configuration.
     *
     * @remarks
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * For more information about how to assign permissions on an account in your resource directory, see [Overview of multi-account authorization](https://help.aliyun.com/document_detail/266726.html).
     * This topic provides an example on how to assign access permissions on the account `114240524784****` in your resource directory to the CloudSSO user `u-00q8wbq42wiltcrk****` by using the access configuration `ac-00jhtfl8thteu6uj****`. After the call is successful, the CloudSSO user can access resources within the account in the resource directory.
     *
     * @param request - CreateAccessAssignmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessAssignmentResponse
     *
     * @param CreateAccessAssignmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAccessAssignmentResponse
     */
    public function createAccessAssignmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessAssignment',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns access permissions on an account in your resource directory to a user or a group by using an access configuration.
     *
     * @remarks
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * For more information about how to assign permissions on an account in your resource directory, see [Overview of multi-account authorization](https://help.aliyun.com/document_detail/266726.html).
     * This topic provides an example on how to assign access permissions on the account `114240524784****` in your resource directory to the CloudSSO user `u-00q8wbq42wiltcrk****` by using the access configuration `ac-00jhtfl8thteu6uj****`. After the call is successful, the CloudSSO user can access resources within the account in the resource directory.
     *
     * @param request - CreateAccessAssignmentRequest
     *
     * @returns CreateAccessAssignmentResponse
     *
     * @param CreateAccessAssignmentRequest $request
     *
     * @return CreateAccessAssignmentResponse
     */
    public function createAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * Creates an access configuration.
     *
     * @remarks
     * For more information about access configurations, see [Overview of access configurations](https://help.aliyun.com/document_detail/266737.html).
     * This topic provides an example on how to create an access configuration named `ECS-Admin`.
     *
     * @param request - CreateAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessConfigurationResponse
     *
     * @param CreateAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAccessConfigurationResponse
     */
    public function createAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationName) {
            @$query['AccessConfigurationName'] = $request->accessConfigurationName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->relayState) {
            @$query['RelayState'] = $request->relayState;
        }

        if (null !== $request->sessionDuration) {
            @$query['SessionDuration'] = $request->sessionDuration;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access configuration.
     *
     * @remarks
     * For more information about access configurations, see [Overview of access configurations](https://help.aliyun.com/document_detail/266737.html).
     * This topic provides an example on how to create an access configuration named `ECS-Admin`.
     *
     * @param request - CreateAccessConfigurationRequest
     *
     * @returns CreateAccessConfigurationResponse
     *
     * @param CreateAccessConfigurationRequest $request
     *
     * @return CreateAccessConfigurationResponse
     */
    public function createAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates a directory.
     *
     * @remarks
     * ### [](#)Operation description
     * A directory is a CloudSSO instance. Before you can use CloudSSO, you must create a directory. The directory is used to manage all CloudSSO resources.
     * To create a directory, you must select a region. Alibaba Cloud stores data in the directory only in the region that you select. However, you can deploy Alibaba Cloud resources including Elastic Compute Service (ECS) instances and ApsaraDB RDS instances in other regions. You can also use your cloud account for logons and access the Alibaba Cloud resources in other regions. You can select a region to create a directory based on your security compliance requirements and the geographic location of specific users. If you do not have strict security compliance requirements, we recommend that you select a region that is the closest to the geographical location of the specific users. This way, access to cloud resources is accelerated. You can create the CloudSSO directory in the China (Shanghai), China (Hong Kong), US (Silicon Valley), or Germany (Frankfurt) region.
     * This topic provides an example on how to create a directory named `example` in the China (Shanghai) region.
     * ### [](#)Limits
     * *   You can create only one directory for a management account.
     * *   If you want to change the region of a directory, you must delete the directory and then create a directory in a different region.
     *
     * @param request - CreateDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDirectoryResponse
     *
     * @param CreateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryName) {
            @$query['DirectoryName'] = $request->directoryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDirectory',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a directory.
     *
     * @remarks
     * ### [](#)Operation description
     * A directory is a CloudSSO instance. Before you can use CloudSSO, you must create a directory. The directory is used to manage all CloudSSO resources.
     * To create a directory, you must select a region. Alibaba Cloud stores data in the directory only in the region that you select. However, you can deploy Alibaba Cloud resources including Elastic Compute Service (ECS) instances and ApsaraDB RDS instances in other regions. You can also use your cloud account for logons and access the Alibaba Cloud resources in other regions. You can select a region to create a directory based on your security compliance requirements and the geographic location of specific users. If you do not have strict security compliance requirements, we recommend that you select a region that is the closest to the geographical location of the specific users. This way, access to cloud resources is accelerated. You can create the CloudSSO directory in the China (Shanghai), China (Hong Kong), US (Silicon Valley), or Germany (Frankfurt) region.
     * This topic provides an example on how to create a directory named `example` in the China (Shanghai) region.
     * ### [](#)Limits
     * *   You can create only one directory for a management account.
     * *   If you want to change the region of a directory, you must delete the directory and then create a directory in a different region.
     *
     * @param request - CreateDirectoryRequest
     *
     * @returns CreateDirectoryResponse
     *
     * @param CreateDirectoryRequest $request
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * Creates a group.
     *
     * @remarks
     * This topic provides an example on how to create a group named `TestGroup`.
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
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2021-05-15',
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
     * Creates a group.
     *
     * @remarks
     * This topic provides an example on how to create a group named `TestGroup`.
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
     * Creates a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * SCIM credentials are required for SCIM synchronization. You can create up to two SCIM credentials.
     * This topic provides an example on how to create a SCIM credential within the directory `d-00fc2p61****`.
     *
     * @param request - CreateSCIMServerCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSCIMServerCredentialResponse
     *
     * @param CreateSCIMServerCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSCIMServerCredential',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * SCIM credentials are required for SCIM synchronization. You can create up to two SCIM credentials.
     * This topic provides an example on how to create a SCIM credential within the directory `d-00fc2p61****`.
     *
     * @param request - CreateSCIMServerCredentialRequest
     *
     * @returns CreateSCIMServerCredentialResponse
     *
     * @param CreateSCIMServerCredentialRequest $request
     *
     * @return CreateSCIMServerCredentialResponse
     */
    public function createSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * Creates a user.
     *
     * @remarks
     * This topic provides an example on how to create a user named `Alice`.
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
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->firstName) {
            @$query['FirstName'] = $request->firstName;
        }

        if (null !== $request->lastName) {
            @$query['LastName'] = $request->lastName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2021-05-15',
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
     * Creates a user.
     *
     * @remarks
     * This topic provides an example on how to create a user named `Alice`.
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
     * Creates a Resource Access Management (RAM) user provisioning.
     *
     * @remarks
     * You can create a RAM user provisioning for a member in your resource directory to create a RAM user that has the same username as a CloudSSO user. This way, the CloudSSO user can access the resources of the member as the RAM user.
     *
     * @param request - CreateUserProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserProvisioningResponse
     *
     * @param CreateUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateUserProvisioningResponse
     */
    public function createUserProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionStrategy) {
            @$query['DeletionStrategy'] = $request->deletionStrategy;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->duplicationStrategy) {
            @$query['DuplicationStrategy'] = $request->duplicationStrategy;
        }

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserProvisioning',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Resource Access Management (RAM) user provisioning.
     *
     * @remarks
     * You can create a RAM user provisioning for a member in your resource directory to create a RAM user that has the same username as a CloudSSO user. This way, the CloudSSO user can access the resources of the member as the RAM user.
     *
     * @param request - CreateUserProvisioningRequest
     *
     * @returns CreateUserProvisioningResponse
     *
     * @param CreateUserProvisioningRequest $request
     *
     * @return CreateUserProvisioningResponse
     */
    public function createUserProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserProvisioningWithOptions($request, $runtime);
    }

    /**
     * Removes the access permissions on an account in a resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to remove the access permissions on the account `114240524784****` in the resource directory from the CloudSSO user `u-00q8wbq42wiltcrk****`. The access permissions are assigned by using the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - DeleteAccessAssignmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessAssignmentResponse
     *
     * @param DeleteAccessAssignmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->deprovisionStrategy) {
            @$query['DeprovisionStrategy'] = $request->deprovisionStrategy;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessAssignment',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessAssignmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the access permissions on an account in a resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to remove the access permissions on the account `114240524784****` in the resource directory from the CloudSSO user `u-00q8wbq42wiltcrk****`. The access permissions are assigned by using the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - DeleteAccessAssignmentRequest
     *
     * @returns DeleteAccessAssignmentResponse
     *
     * @param DeleteAccessAssignmentRequest $request
     *
     * @return DeleteAccessAssignmentResponse
     */
    public function deleteAccessAssignment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessAssignmentWithOptions($request, $runtime);
    }

    /**
     * Deletes an access configuration.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The access configuration that you want to delete is de-provisioned from the accounts in your resource directory. For more information, see [DeprovisionAccessConfiguration](https://help.aliyun.com/document_detail/338352.html).
     * ### [](#)Operation description
     * This topic provides an example on how to delete the access configuration whose ID is `ac-001j9mcm3k7335bc****`.
     *
     * @param request - DeleteAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessConfigurationResponse
     *
     * @param DeleteAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->forceRemovePermissionPolicies) {
            @$query['ForceRemovePermissionPolicies'] = $request->forceRemovePermissionPolicies;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access configuration.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The access configuration that you want to delete is de-provisioned from the accounts in your resource directory. For more information, see [DeprovisionAccessConfiguration](https://help.aliyun.com/document_detail/338352.html).
     * ### [](#)Operation description
     * This topic provides an example on how to delete the access configuration whose ID is `ac-001j9mcm3k7335bc****`.
     *
     * @param request - DeleteAccessConfigurationRequest
     *
     * @returns DeleteAccessConfigurationResponse
     *
     * @param DeleteAccessConfigurationRequest $request
     *
     * @return DeleteAccessConfigurationResponse
     */
    public function deleteAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Deletes a directory.
     *
     * @remarks
     * ### [](#)Prerequisites
     * No resources are contained in the directory that you want to delete.
     * *   Access permissions on the accounts in your resource directory are removed from all users and groups. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * *   Users are deleted. For more information, see [DeleteUser](https://help.aliyun.com/document_detail/341671.html).
     * *   Groups are deleted. For more information, see [DeleteGroup](https://help.aliyun.com/document_detail/341821.html).
     * *   Access configurations are deleted. For more information, see [DeleteAccessConfiguration](https://help.aliyun.com/document_detail/336907.html).
     * *   System for Cross-domain Identity Management (SCIM) credentials are deleted. For more information, see [DeleteSCIMServerCredential](https://help.aliyun.com/document_detail/341842.html).
     * *   Single sign-on (SSO) logon configurations are deleted. For more information, see [ClearExternalSAMLIdentityProvider](https://help.aliyun.com/document_detail/341573.html).
     * ### [](#)Operation description
     * This topic provides an example on how to delete a directory whose ID is `d-00fc2p61****`.
     *
     * @param request - DeleteDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDirectoryResponse
     *
     * @param DeleteDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDirectory',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a directory.
     *
     * @remarks
     * ### [](#)Prerequisites
     * No resources are contained in the directory that you want to delete.
     * *   Access permissions on the accounts in your resource directory are removed from all users and groups. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * *   Users are deleted. For more information, see [DeleteUser](https://help.aliyun.com/document_detail/341671.html).
     * *   Groups are deleted. For more information, see [DeleteGroup](https://help.aliyun.com/document_detail/341821.html).
     * *   Access configurations are deleted. For more information, see [DeleteAccessConfiguration](https://help.aliyun.com/document_detail/336907.html).
     * *   System for Cross-domain Identity Management (SCIM) credentials are deleted. For more information, see [DeleteSCIMServerCredential](https://help.aliyun.com/document_detail/341842.html).
     * *   Single sign-on (SSO) logon configurations are deleted. For more information, see [ClearExternalSAMLIdentityProvider](https://help.aliyun.com/document_detail/341573.html).
     * ### [](#)Operation description
     * This topic provides an example on how to delete a directory whose ID is `d-00fc2p61****`.
     *
     * @param request - DeleteDirectoryRequest
     *
     * @returns DeleteDirectoryResponse
     *
     * @param DeleteDirectoryRequest $request
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * Deletes a group.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The group that you want to delete is not associated with the following resources. If the group is associated with the resources, the deletion fails.
     * *   Users: You must remove users from the group. For more information, see [RemoveUserFromGroup](https://help.aliyun.com/document_detail/335116.html).
     * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the group. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * ### [](#)Operation description
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a group that is synchronized by using SCIM.
     * This topic provides an example on how to delete the group `g-00jqzghi2n3o5hkh****`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2021-05-15',
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
     * Deletes a group.
     *
     * @remarks
     * ### [](#)Prerequisites
     * The group that you want to delete is not associated with the following resources. If the group is associated with the resources, the deletion fails.
     * *   Users: You must remove users from the group. For more information, see [RemoveUserFromGroup](https://help.aliyun.com/document_detail/335116.html).
     * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the group. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * ### [](#)Operation description
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a group that is synchronized by using SCIM.
     * This topic provides an example on how to delete the group `g-00jqzghi2n3o5hkh****`.
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
     * Unbinds a multi-factor authentication (MFA) device from a user.
     *
     * @remarks
     * This topic provides an example on how to unbind the MFA device whose ID is `mfa-00ujhet8pycljj7j****` from the user whose ID is `u-00q8wbq42wiltcrk****`.
     *
     * @param request - DeleteMFADeviceForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMFADeviceForUserResponse
     *
     * @param DeleteMFADeviceForUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->MFADeviceId) {
            @$query['MFADeviceId'] = $request->MFADeviceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMFADeviceForUser',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMFADeviceForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a multi-factor authentication (MFA) device from a user.
     *
     * @remarks
     * This topic provides an example on how to unbind the MFA device whose ID is `mfa-00ujhet8pycljj7j****` from the user whose ID is `u-00q8wbq42wiltcrk****`.
     *
     * @param request - DeleteMFADeviceForUserRequest
     *
     * @returns DeleteMFADeviceForUserResponse
     *
     * @param DeleteMFADeviceForUserRequest $request
     *
     * @return DeleteMFADeviceForUserResponse
     */
    public function deleteMFADeviceForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMFADeviceForUserWithOptions($request, $runtime);
    }

    /**
     * Deletes a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * After a SCIM credential is deleted, the synchronization task that uses the SCIM credential fails.
     * This topic provides an example on how to delete the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`.
     *
     * @param request - DeleteSCIMServerCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSCIMServerCredentialResponse
     *
     * @param DeleteSCIMServerCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credentialId) {
            @$query['CredentialId'] = $request->credentialId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSCIMServerCredential',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSCIMServerCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * After a SCIM credential is deleted, the synchronization task that uses the SCIM credential fails.
     * This topic provides an example on how to delete the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`.
     *
     * @param request - DeleteSCIMServerCredentialRequest
     *
     * @returns DeleteSCIMServerCredentialResponse
     *
     * @param DeleteSCIMServerCredentialRequest $request
     *
     * @return DeleteSCIMServerCredentialResponse
     */
    public function deleteSCIMServerCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSCIMServerCredentialWithOptions($request, $runtime);
    }

    /**
     * Deletes a user.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Before you delete a user, make sure that the user is not associated with the following resources. Otherwise, the deletion fails.
     * *   Multi-factor authentication (MFA) devices: You must delete the MFA devices bound to the user. For more information, see [DeleteMFADeviceForUser](https://help.aliyun.com/document_detail/341675.html).
     * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the user. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * *   Groups: You must remove the user from groups. For more information, see [RemoveUserFromGroup](https://help.aliyun.com/document_detail/335116.html).
     * ### [](#)Precautions
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a user that is synchronized by using SCIM.
     * This topic provides an example on how to delete the user whose ID is `u-00q8wbq42wiltcrk****`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2021-05-15',
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
     * Deletes a user.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Before you delete a user, make sure that the user is not associated with the following resources. Otherwise, the deletion fails.
     * *   Multi-factor authentication (MFA) devices: You must delete the MFA devices bound to the user. For more information, see [DeleteMFADeviceForUser](https://help.aliyun.com/document_detail/341675.html).
     * *   Access permissions: You must remove the access permissions on the accounts in your resource directory from the user. For more information, see [DeleteAccessAssignment](https://help.aliyun.com/document_detail/338350.html).
     * *   Groups: You must remove the user from groups. For more information, see [RemoveUserFromGroup](https://help.aliyun.com/document_detail/335116.html).
     * ### [](#)Precautions
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot delete a user that is synchronized by using SCIM.
     * This topic provides an example on how to delete the user whose ID is `u-00q8wbq42wiltcrk****`.
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
     * Deletes a Resource Access Management (RAM) user provisioning.
     *
     * @param request - DeleteUserProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserProvisioningResponse
     *
     * @param DeleteUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserProvisioningResponse
     */
    public function deleteUserProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionStrategy) {
            @$query['DeletionStrategy'] = $request->deletionStrategy;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserProvisioning',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) user provisioning.
     *
     * @param request - DeleteUserProvisioningRequest
     *
     * @returns DeleteUserProvisioningResponse
     *
     * @param DeleteUserProvisioningRequest $request
     *
     * @return DeleteUserProvisioningResponse
     */
    public function deleteUserProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserProvisioningWithOptions($request, $runtime);
    }

    /**
     * Deletes a Resource Access Management (RAM) user provisioning event.
     *
     * @param request - DeleteUserProvisioningEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserProvisioningEventResponse
     *
     * @param DeleteUserProvisioningEventRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteUserProvisioningEventResponse
     */
    public function deleteUserProvisioningEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserProvisioningEvent',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Resource Access Management (RAM) user provisioning event.
     *
     * @param request - DeleteUserProvisioningEventRequest
     *
     * @returns DeleteUserProvisioningEventResponse
     *
     * @param DeleteUserProvisioningEventRequest $request
     *
     * @return DeleteUserProvisioningEventResponse
     */
    public function deleteUserProvisioningEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserProvisioningEventWithOptions($request, $runtime);
    }

    /**
     * De-provisions an access configuration from an account in your resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to de-provision the access configuration `ac-00jhtfl8thteu6uj****` from the account `114240524784****` in your resource directory.
     *
     * @param request - DeprovisionAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeprovisionAccessConfigurationResponse
     *
     * @param DeprovisionAccessConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeprovisionAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeprovisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * De-provisions an access configuration from an account in your resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to de-provision the access configuration `ac-00jhtfl8thteu6uj****` from the account `114240524784****` in your resource directory.
     *
     * @param request - DeprovisionAccessConfigurationRequest
     *
     * @returns DeprovisionAccessConfigurationResponse
     *
     * @param DeprovisionAccessConfigurationRequest $request
     *
     * @return DeprovisionAccessConfigurationResponse
     */
    public function deprovisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprovisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Disables the delegated administrator account of CloudSSO.
     *
     * @param request - DisableDelegateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDelegateAccountResponse
     *
     * @param DisableDelegateAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableDelegateAccountResponse
     */
    public function disableDelegateAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDelegateAccount',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDelegateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the delegated administrator account of CloudSSO.
     *
     * @param request - DisableDelegateAccountRequest
     *
     * @returns DisableDelegateAccountResponse
     *
     * @param DisableDelegateAccountRequest $request
     *
     * @return DisableDelegateAccountResponse
     */
    public function disableDelegateAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDelegateAccountWithOptions($request, $runtime);
    }

    /**
     * Disables CloudSSO.
     *
     * @remarks
     * If your CloudSSO has no directory, you can disable CloudSSO based on your business requirements. After you disable CloudSSO, you can enable it at any time.
     *
     * @param request - DisableServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableServiceResponse
     */
    public function disableServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableService',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables CloudSSO.
     *
     * @remarks
     * If your CloudSSO has no directory, you can disable CloudSSO based on your business requirements. After you disable CloudSSO, you can enable it at any time.
     *
     * @returns DisableServiceResponse
     *
     * @return DisableServiceResponse
     */
    public function disableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableServiceWithOptions($runtime);
    }

    /**
     * Enables the delegated administrator account of CloudSSO.
     *
     * @remarks
     * You can use the management account of a resource directory to specify a member of the resource directory as the delegated administrator account of CloudSSO. For more information, see [Add a delegated administrator account](https://help.aliyun.com/document_detail/208117.html).
     * After the delegated administrator account of CloudSSO is specified, you can call this operation to enable the delegated administrator account of CloudSSO to manage CloudSSO resources.
     *
     * @param request - EnableDelegateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDelegateAccountResponse
     *
     * @param EnableDelegateAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnableDelegateAccountResponse
     */
    public function enableDelegateAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDelegateAccount',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDelegateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the delegated administrator account of CloudSSO.
     *
     * @remarks
     * You can use the management account of a resource directory to specify a member of the resource directory as the delegated administrator account of CloudSSO. For more information, see [Add a delegated administrator account](https://help.aliyun.com/document_detail/208117.html).
     * After the delegated administrator account of CloudSSO is specified, you can call this operation to enable the delegated administrator account of CloudSSO to manage CloudSSO resources.
     *
     * @param request - EnableDelegateAccountRequest
     *
     * @returns EnableDelegateAccountResponse
     *
     * @param EnableDelegateAccountRequest $request
     *
     * @return EnableDelegateAccountResponse
     */
    public function enableDelegateAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDelegateAccountWithOptions($request, $runtime);
    }

    /**
     * Enables CloudSSO.
     *
     * @remarks
     * You can call this operation only if your account belongs to the management account that is used to enable a resource directory and has the permissions to enable CloudSSO. For more information, see [Enable CloudSSO](https://help.aliyun.com/document_detail/262819.html).
     * If you call this operation, you agree to the [Alibaba Cloud International Website Product Terms of Service](https://www.alibabacloud.com/help/doc-detail/42416.htm).
     *
     * @param request - EnableServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableServiceResponse
     */
    public function enableServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableService',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables CloudSSO.
     *
     * @remarks
     * You can call this operation only if your account belongs to the management account that is used to enable a resource directory and has the permissions to enable CloudSSO. For more information, see [Enable CloudSSO](https://help.aliyun.com/document_detail/262819.html).
     * If you call this operation, you agree to the [Alibaba Cloud International Website Product Terms of Service](https://www.alibabacloud.com/help/doc-detail/42416.htm).
     *
     * @returns EnableServiceResponse
     *
     * @return EnableServiceResponse
     */
    public function enableService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceWithOptions($runtime);
    }

    /**
     * Queries information about an access configuration.
     *
     * @remarks
     * This topic provides an example on how to query information about the access configuration whose ID is `ac-00ccule7tadaijxc****`.
     *
     * @param request - GetAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessConfigurationResponse
     *
     * @param GetAccessConfigurationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAccessConfigurationResponse
     */
    public function getAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an access configuration.
     *
     * @remarks
     * This topic provides an example on how to query information about the access configuration whose ID is `ac-00ccule7tadaijxc****`.
     *
     * @param request - GetAccessConfigurationRequest
     *
     * @returns GetAccessConfigurationResponse
     *
     * @param GetAccessConfigurationRequest $request
     *
     * @return GetAccessConfigurationResponse
     */
    public function getAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries information about a directory.
     *
     * @remarks
     * This topic provides an example on how to query information about the directory whose ID is `d-00fc2p61****`.
     *
     * @param request - GetDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDirectoryResponse
     *
     * @param GetDirectoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDirectoryResponse
     */
    public function getDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDirectory',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a directory.
     *
     * @remarks
     * This topic provides an example on how to query information about the directory whose ID is `d-00fc2p61****`.
     *
     * @param request - GetDirectoryRequest
     *
     * @returns GetDirectoryResponse
     *
     * @param GetDirectoryRequest $request
     *
     * @return GetDirectoryResponse
     */
    public function getDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryWithOptions($request, $runtime);
    }

    /**
     * Queries information about a Security Assertion Markup Language (SAML) service provider (SP).
     *
     * @remarks
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an identity provider (IdP).
     * This topic provides an example on how to query information about the SP within the directory `d-00fc2p61****`.
     *
     * @param request - GetDirectorySAMLServiceProviderInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDirectorySAMLServiceProviderInfoResponse
     *
     * @param GetDirectorySAMLServiceProviderInfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDirectorySAMLServiceProviderInfo',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDirectorySAMLServiceProviderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a Security Assertion Markup Language (SAML) service provider (SP).
     *
     * @remarks
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is an SP, and the identity management system of an enterprise is an identity provider (IdP).
     * This topic provides an example on how to query information about the SP within the directory `d-00fc2p61****`.
     *
     * @param request - GetDirectorySAMLServiceProviderInfoRequest
     *
     * @returns GetDirectorySAMLServiceProviderInfoResponse
     *
     * @param GetDirectorySAMLServiceProviderInfoRequest $request
     *
     * @return GetDirectorySAMLServiceProviderInfoResponse
     */
    public function getDirectorySAMLServiceProviderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectorySAMLServiceProviderInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of a directory.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of a directory whose ID is `d-00fc2p61****`. The statistics include the number of users, quota for users, number of groups, quota for groups, number of access configurations, quota for access configurations, number of access permissions that are assigned, number of system policies that can be configured for an access configuration, number of System for Cross-domain Identity Management (SCIM) credentials, number of asynchronous tasks, status of single sign-on (SSO) logon, and status of SCIM synchronization.
     *
     * @param request - GetDirectoryStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDirectoryStatisticsResponse
     *
     * @param GetDirectoryStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDirectoryStatistics',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDirectoryStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of a directory.
     *
     * @remarks
     * This topic provides an example on how to query the statistics of a directory whose ID is `d-00fc2p61****`. The statistics include the number of users, quota for users, number of groups, quota for groups, number of access configurations, quota for access configurations, number of access permissions that are assigned, number of system policies that can be configured for an access configuration, number of System for Cross-domain Identity Management (SCIM) credentials, number of asynchronous tasks, status of single sign-on (SSO) logon, and status of SCIM synchronization.
     *
     * @param request - GetDirectoryStatisticsRequest
     *
     * @returns GetDirectoryStatisticsResponse
     *
     * @param GetDirectoryStatisticsRequest $request
     *
     * @return GetDirectoryStatisticsResponse
     */
    public function getDirectoryStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * This topic provides an example on how to query the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *
     * @param request - GetExternalSAMLIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExternalSAMLIdentityProviderResponse
     *
     * @param GetExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExternalSAMLIdentityProvider',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * This topic provides an example on how to query the configurations of the SAML IdP within the directory `d-00fc2p61****`.
     *
     * @param request - GetExternalSAMLIdentityProviderRequest
     *
     * @returns GetExternalSAMLIdentityProviderResponse
     *
     * @param GetExternalSAMLIdentityProviderRequest $request
     *
     * @return GetExternalSAMLIdentityProviderResponse
     */
    public function getExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Queries information about a group.
     *
     * @remarks
     * This topic provides an example on how to query information about the group `g-00jqzghi2n3o5hkh****` in the directory `d-00fc2p61****`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2021-05-15',
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
     * Queries information about a group.
     *
     * @remarks
     * This topic provides an example on how to query information about the group `g-00jqzghi2n3o5hkh****` in the directory `d-00fc2p61****`.
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
     * Queries the logon preference of CloudSSO users.
     *
     * @param request - GetLoginPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginPreferenceResponse
     *
     * @param GetLoginPreferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLoginPreferenceResponse
     */
    public function getLoginPreferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginPreference',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logon preference of CloudSSO users.
     *
     * @param request - GetLoginPreferenceRequest
     *
     * @returns GetLoginPreferenceResponse
     *
     * @param GetLoginPreferenceRequest $request
     *
     * @return GetLoginPreferenceResponse
     */
    public function getLoginPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginPreferenceWithOptions($request, $runtime);
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * If you enable username-password logon for CloudSSO users, you can query the MFA setting for the users.
     * This topic provides an example on how to query the MFA setting of all CloudSSO users that belong to the directory named `u-00q8wbq42wiltcrk****`.
     *
     * @param request - GetMFAAuthenticationSettingInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMFAAuthenticationSettingInfoResponse
     *
     * @param GetMFAAuthenticationSettingInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetMFAAuthenticationSettingInfoResponse
     */
    public function getMFAAuthenticationSettingInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMFAAuthenticationSettingInfo',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMFAAuthenticationSettingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * If you enable username-password logon for CloudSSO users, you can query the MFA setting for the users.
     * This topic provides an example on how to query the MFA setting of all CloudSSO users that belong to the directory named `u-00q8wbq42wiltcrk****`.
     *
     * @param request - GetMFAAuthenticationSettingInfoRequest
     *
     * @returns GetMFAAuthenticationSettingInfoResponse
     *
     * @param GetMFAAuthenticationSettingInfoRequest $request
     *
     * @return GetMFAAuthenticationSettingInfoResponse
     */
    public function getMFAAuthenticationSettingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationSettingInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * >  This operation is no longer maintained and updated. You can call the [GetMFAAuthenticationSettingInfo](https://help.aliyun.com/document_detail/611286.html) operation to query more detailed information.
     * This topic provides an example on how to query the MFA setting of the users that belong to the directory named `d-00fc2p61****`. The returned result shows that MFA is enabled for all the users.
     *
     * @param request - GetMFAAuthenticationSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMFAAuthenticationSettingsResponse
     *
     * @param GetMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMFAAuthenticationSettings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * >  This operation is no longer maintained and updated. You can call the [GetMFAAuthenticationSettingInfo](https://help.aliyun.com/document_detail/611286.html) operation to query more detailed information.
     * This topic provides an example on how to query the MFA setting of the users that belong to the directory named `d-00fc2p61****`. The returned result shows that MFA is enabled for all the users.
     *
     * @param request - GetMFAAuthenticationSettingsRequest
     *
     * @returns GetMFAAuthenticationSettingsResponse
     *
     * @param GetMFAAuthenticationSettingsRequest $request
     *
     * @return GetMFAAuthenticationSettingsResponse
     */
    public function getMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * Checks whether multi-factor authentication (MFA) is enabled for users.
     *
     * @remarks
     * This topic provides an example on how to check whether MFA is enabled for users in the directory whose ID is `d-00fc2p61****`. The returned result shows that MFA is in the Enabled state.
     *
     * @param request - GetMFAAuthenticationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMFAAuthenticationStatusResponse
     *
     * @param GetMFAAuthenticationStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMFAAuthenticationStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether multi-factor authentication (MFA) is enabled for users.
     *
     * @remarks
     * This topic provides an example on how to check whether MFA is enabled for users in the directory whose ID is `d-00fc2p61****`. The returned result shows that MFA is in the Enabled state.
     *
     * @param request - GetMFAAuthenticationStatusRequest
     *
     * @returns GetMFAAuthenticationStatusResponse
     *
     * @param GetMFAAuthenticationStatusRequest $request
     *
     * @return GetMFAAuthenticationStatusResponse
     */
    public function getMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMFAAuthenticationStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the password policy of CloudSSO users.
     *
     * @param request - GetPasswordPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPasswordPolicyResponse
     *
     * @param GetPasswordPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPasswordPolicy',
            'version' => '2021-05-15',
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
     * Queries the password policy of CloudSSO users.
     *
     * @param request - GetPasswordPolicyRequest
     *
     * @returns GetPasswordPolicyResponse
     *
     * @param GetPasswordPolicyRequest $request
     *
     * @return GetPasswordPolicyResponse
     */
    public function getPasswordPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPasswordPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the status of System for Cross-domain Identity Management (SCIM) synchronization.
     *
     * @remarks
     * This topic provides an example on how to query the status of SCIM synchronization within the directory `d-00fc2p61****`. The returned result shows that SCIM synchronization is in the Enabled state.
     *
     * @param request - GetSCIMSynchronizationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSCIMSynchronizationStatusResponse
     *
     * @param GetSCIMSynchronizationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSCIMSynchronizationStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of System for Cross-domain Identity Management (SCIM) synchronization.
     *
     * @remarks
     * This topic provides an example on how to query the status of SCIM synchronization within the directory `d-00fc2p61****`. The returned result shows that SCIM synchronization is in the Enabled state.
     *
     * @param request - GetSCIMSynchronizationStatusRequest
     *
     * @returns GetSCIMSynchronizationStatusResponse
     *
     * @param GetSCIMSynchronizationStatusRequest $request
     *
     * @return GetSCIMSynchronizationStatusResponse
     */
    public function getSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status of CloudSSO.
     *
     * @param request - GetServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceStatusResponse
     */
    public function getServiceStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetServiceStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of CloudSSO.
     *
     * @returns GetServiceStatusResponse
     *
     * @return GetServiceStatusResponse
     */
    public function getServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceStatusWithOptions($runtime);
    }

    /**
     * Queries information about an asynchronous task.
     *
     * @remarks
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *
     * @param request - GetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an asynchronous task.
     *
     * @remarks
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *
     * @param request - GetTaskRequest
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the status of an asynchronous task.
     *
     * @remarks
     * You can call the GetTaskStatus operation to query the status of an asynchronous task. If you want to query more information about an asynchronous task, call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation.
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *
     * @param request - GetTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an asynchronous task.
     *
     * @remarks
     * You can call the GetTaskStatus operation to query the status of an asynchronous task. If you want to query more information about an asynchronous task, call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation.
     * This topic provides an example on how to query the information about the task whose ID is `t-shfqw1u1edszvxw5****`.
     *
     * @param request - GetTaskStatusRequest
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Queries information about a user.
     *
     * @remarks
     * This topic provides an example on how to query information about the user whose ID is `u-00q8wbq42wiltcrk****` in the `d-00fc2p61****` directory.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2021-05-15',
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
     * Queries information about a user.
     *
     * @remarks
     * This topic provides an example on how to query information about the user whose ID is `u-00q8wbq42wiltcrk****` in the `d-00fc2p61****` directory.
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
     * Queries the ID of a user in a resource directory by using the ExternalId parameter.
     *
     * @param tmpReq - GetUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdResponse
     *
     * @param GetUserIdRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return GetUserIdResponse
     */
    public function getUserIdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetUserIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->externalId) {
            $request->externalIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalId, 'ExternalId', 'json');
        }

        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->externalIdShrink) {
            @$query['ExternalId'] = $request->externalIdShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserId',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ID of a user in a resource directory by using the ExternalId parameter.
     *
     * @param request - GetUserIdRequest
     *
     * @returns GetUserIdResponse
     *
     * @param GetUserIdRequest $request
     *
     * @return GetUserIdResponse
     */
    public function getUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserIdWithOptions($request, $runtime);
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of a single user.
     *
     * @remarks
     * This topic provides an example on how to query the MFA setting of the user named `u-00q8wbq42wiltcrk****`. The returned result shows that MFA is enabled for the user.
     *
     * @param request - GetUserMFAAuthenticationSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserMFAAuthenticationSettingsResponse
     *
     * @param GetUserMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserMFAAuthenticationSettings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the multi-factor authentication (MFA) setting of a single user.
     *
     * @remarks
     * This topic provides an example on how to query the MFA setting of the user named `u-00q8wbq42wiltcrk****`. The returned result shows that MFA is enabled for the user.
     *
     * @param request - GetUserMFAAuthenticationSettingsRequest
     *
     * @returns GetUserMFAAuthenticationSettingsResponse
     *
     * @param GetUserMFAAuthenticationSettingsRequest $request
     *
     * @return GetUserMFAAuthenticationSettingsResponse
     */
    public function getUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * Queries a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserProvisioningResponse
     *
     * @param GetUserProvisioningRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserProvisioningResponse
     */
    public function getUserProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserProvisioning',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningRequest
     *
     * @returns GetUserProvisioningResponse
     *
     * @param GetUserProvisioningRequest $request
     *
     * @return GetUserProvisioningResponse
     */
    public function getUserProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProvisioningWithOptions($request, $runtime);
    }

    /**
     * Queries the global configurations of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserProvisioningConfigurationResponse
     *
     * @param GetUserProvisioningConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetUserProvisioningConfigurationResponse
     */
    public function getUserProvisioningConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserProvisioningConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserProvisioningConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global configurations of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningConfigurationRequest
     *
     * @returns GetUserProvisioningConfigurationResponse
     *
     * @param GetUserProvisioningConfigurationRequest $request
     *
     * @return GetUserProvisioningConfigurationResponse
     */
    public function getUserProvisioningConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProvisioningConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserProvisioningEventResponse
     *
     * @param GetUserProvisioningEventRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserProvisioningEventResponse
     */
    public function getUserProvisioningEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserProvisioningEvent',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningEventRequest
     *
     * @returns GetUserProvisioningEventResponse
     *
     * @param GetUserProvisioningEventRequest $request
     *
     * @return GetUserProvisioningEventResponse
     */
    public function getUserProvisioningEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProvisioningEventWithOptions($request, $runtime);
    }

    /**
     * Queries statistics of Resource Access Management (RAM) user provisioning events that are created for the member in a resource directory.
     *
     * @param request - GetUserProvisioningRdAccountStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserProvisioningRdAccountStatisticsResponse
     *
     * @param GetUserProvisioningRdAccountStatisticsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetUserProvisioningRdAccountStatisticsResponse
     */
    public function getUserProvisioningRdAccountStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->rdMemberId) {
            @$query['RdMemberId'] = $request->rdMemberId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserProvisioningRdAccountStatistics',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserProvisioningRdAccountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries statistics of Resource Access Management (RAM) user provisioning events that are created for the member in a resource directory.
     *
     * @param request - GetUserProvisioningRdAccountStatisticsRequest
     *
     * @returns GetUserProvisioningRdAccountStatisticsResponse
     *
     * @param GetUserProvisioningRdAccountStatisticsRequest $request
     *
     * @return GetUserProvisioningRdAccountStatisticsResponse
     */
    public function getUserProvisioningRdAccountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProvisioningRdAccountStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserProvisioningStatisticsResponse
     *
     * @param GetUserProvisioningStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetUserProvisioningStatisticsResponse
     */
    public function getUserProvisioningStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserProvisioningStatistics',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserProvisioningStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - GetUserProvisioningStatisticsRequest
     *
     * @returns GetUserProvisioningStatisticsResponse
     *
     * @param GetUserProvisioningStatisticsRequest $request
     *
     * @return GetUserProvisioningStatisticsResponse
     */
    public function getUserProvisioningStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProvisioningStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the access permissions that are assigned.
     *
     * @remarks
     * This topic provides an example on how to query the assigned access permissions on the account `114240524784****` in your resource directory. The returned result shows that access permissions on the account in your resource directory is assigned to one user.
     *
     * @param request - ListAccessAssignmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessAssignmentsResponse
     *
     * @param ListAccessAssignmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAccessAssignmentsResponse
     */
    public function listAccessAssignmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessAssignments',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessAssignmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access permissions that are assigned.
     *
     * @remarks
     * This topic provides an example on how to query the assigned access permissions on the account `114240524784****` in your resource directory. The returned result shows that access permissions on the account in your resource directory is assigned to one user.
     *
     * @param request - ListAccessAssignmentsRequest
     *
     * @returns ListAccessAssignmentsResponse
     *
     * @param ListAccessAssignmentsRequest $request
     *
     * @return ListAccessAssignmentsResponse
     */
    public function listAccessAssignments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessAssignmentsWithOptions($request, $runtime);
    }

    /**
     * Queries the access configurations that are provisioned.
     *
     * @remarks
     * This topic provides an example on how to query the accounts for which the access permission `ac-00ccule7tadaijxc****` is provisioned. The returned result shows that the access configuration is provisioned for two accounts in your resource directory.
     *
     * @param request - ListAccessConfigurationProvisioningsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessConfigurationProvisioningsResponse
     *
     * @param ListAccessConfigurationProvisioningsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisioningsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->provisioningStatus) {
            @$query['ProvisioningStatus'] = $request->provisioningStatus;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessConfigurationProvisionings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessConfigurationProvisioningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access configurations that are provisioned.
     *
     * @remarks
     * This topic provides an example on how to query the accounts for which the access permission `ac-00ccule7tadaijxc****` is provisioned. The returned result shows that the access configuration is provisioned for two accounts in your resource directory.
     *
     * @param request - ListAccessConfigurationProvisioningsRequest
     *
     * @returns ListAccessConfigurationProvisioningsResponse
     *
     * @param ListAccessConfigurationProvisioningsRequest $request
     *
     * @return ListAccessConfigurationProvisioningsResponse
     */
    public function listAccessConfigurationProvisionings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationProvisioningsWithOptions($request, $runtime);
    }

    /**
     * Queries access configurations.
     *
     * @remarks
     * This topic provides an example on how to query the access configurations within the directory `d-00fc2p61****`. The returned result shows that the directory contains the `VPC-Admin` and `ECS-Admin` access configurations.
     *
     * @param request - ListAccessConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessConfigurationsResponse
     *
     * @param ListAccessConfigurationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAccessConfigurationsResponse
     */
    public function listAccessConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
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

        if (null !== $request->statusNotifications) {
            @$query['StatusNotifications'] = $request->statusNotifications;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessConfigurations',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access configurations.
     *
     * @remarks
     * This topic provides an example on how to query the access configurations within the directory `d-00fc2p61****`. The returned result shows that the directory contains the `VPC-Admin` and `ECS-Admin` access configurations.
     *
     * @param request - ListAccessConfigurationsRequest
     *
     * @returns ListAccessConfigurationsResponse
     *
     * @param ListAccessConfigurationsRequest $request
     *
     * @return ListAccessConfigurationsResponse
     */
    public function listAccessConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Queries directories.
     *
     * @remarks
     * This topic provides an example on how to query the directories within your Alibaba Cloud account. The returned result shows that only one directory with the ID `d-00fc2p61****` is created within your Alibaba Cloud account.
     *
     * @param request - ListDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDirectoriesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListDirectoriesResponse
     */
    public function listDirectoriesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListDirectories',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries directories.
     *
     * @remarks
     * This topic provides an example on how to query the directories within your Alibaba Cloud account. The returned result shows that only one directory with the ID `d-00fc2p61****` is created within your Alibaba Cloud account.
     *
     * @returns ListDirectoriesResponse
     *
     * @return ListDirectoriesResponse
     */
    public function listDirectories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoriesWithOptions($runtime);
    }

    /**
     * Queries Security Assertion Markup Language (SAML) signing certificates.
     *
     * @remarks
     * This topic provides an example on how to query the SAML signing certificates within the directory `d-00fc2p61****`. The returned result shows that the directory contains one SAML signing certificate.
     *
     * @param request - ListExternalSAMLIdPCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalSAMLIdPCertificatesResponse
     *
     * @param ListExternalSAMLIdPCertificatesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExternalSAMLIdPCertificates',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExternalSAMLIdPCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Security Assertion Markup Language (SAML) signing certificates.
     *
     * @remarks
     * This topic provides an example on how to query the SAML signing certificates within the directory `d-00fc2p61****`. The returned result shows that the directory contains one SAML signing certificate.
     *
     * @param request - ListExternalSAMLIdPCertificatesRequest
     *
     * @returns ListExternalSAMLIdPCertificatesResponse
     *
     * @param ListExternalSAMLIdPCertificatesRequest $request
     *
     * @return ListExternalSAMLIdPCertificatesResponse
     */
    public function listExternalSAMLIdPCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalSAMLIdPCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries the users in a group.
     *
     * @remarks
     * This topic provides an example on how to query the users in the group `g-00jqzghi2n3o5hkh****`. The returned result shows that the group contains the user `Alice` and the user `user1`.
     *
     * @param request - ListGroupMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupMembersResponse
     *
     * @param ListGroupMembersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListGroupMembersResponse
     */
    public function listGroupMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupMembers',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the users in a group.
     *
     * @remarks
     * This topic provides an example on how to query the users in the group `g-00jqzghi2n3o5hkh****`. The returned result shows that the group contains the user `Alice` and the user `user1`.
     *
     * @param request - ListGroupMembersRequest
     *
     * @returns ListGroupMembersResponse
     *
     * @param ListGroupMembersRequest $request
     *
     * @return ListGroupMembersResponse
     */
    public function listGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupMembersWithOptions($request, $runtime);
    }

    /**
     * Queries groups.
     *
     * @remarks
     * This topic provides an example on how to query the groups in the directory `d-00fc2p61****`. The returned result shows that the directory contains three groups. The groups `group1` and `group2` are synchronized from an external identity provider (IdP). The group `TestGroup` is manually created in CloudSSO.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
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

        if (null !== $request->provisionType) {
            @$query['ProvisionType'] = $request->provisionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2021-05-15',
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
     * Queries groups.
     *
     * @remarks
     * This topic provides an example on how to query the groups in the directory `d-00fc2p61****`. The returned result shows that the directory contains three groups. The groups `group1` and `group2` are synchronized from an external identity provider (IdP). The group `TestGroup` is manually created in CloudSSO.
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
     * Queries the groups to which a user is added.
     *
     * @remarks
     * This topic provides an example on how to query the groups to which the user `u-00q8wbq42wiltcrk****` is added. The returned result shows that the user is added to both the `TestGroup` and the `group1` groups.
     *
     * @param request - ListJoinedGroupsForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJoinedGroupsForUserResponse
     *
     * @param ListJoinedGroupsForUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJoinedGroupsForUser',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJoinedGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the groups to which a user is added.
     *
     * @remarks
     * This topic provides an example on how to query the groups to which the user `u-00q8wbq42wiltcrk****` is added. The returned result shows that the user is added to both the `TestGroup` and the `group1` groups.
     *
     * @param request - ListJoinedGroupsForUserRequest
     *
     * @returns ListJoinedGroupsForUserResponse
     *
     * @param ListJoinedGroupsForUserRequest $request
     *
     * @return ListJoinedGroupsForUserResponse
     */
    public function listJoinedGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJoinedGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * Queries the multi-factor authentication (MFA) devices that are bound to a user. Up to two MFA devices can be bound to a user.
     *
     * @remarks
     * This topic provides an example on how to query the MFA devices that are bound to the user `u-00q8wbq42wiltcrk****`. The returned result shows that the MFA device named `Alice-MFA1` is bound to the user.
     *
     * @param request - ListMFADevicesForUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMFADevicesForUserResponse
     *
     * @param ListMFADevicesForUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMFADevicesForUser',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMFADevicesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the multi-factor authentication (MFA) devices that are bound to a user. Up to two MFA devices can be bound to a user.
     *
     * @remarks
     * This topic provides an example on how to query the MFA devices that are bound to the user `u-00q8wbq42wiltcrk****`. The returned result shows that the MFA device named `Alice-MFA1` is bound to the user.
     *
     * @param request - ListMFADevicesForUserRequest
     *
     * @returns ListMFADevicesForUserResponse
     *
     * @param ListMFADevicesForUserRequest $request
     *
     * @return ListMFADevicesForUserResponse
     */
    public function listMFADevicesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMFADevicesForUserWithOptions($request, $runtime);
    }

    /**
     * Queries the policies that are created for an access configuration.
     *
     * @remarks
     * This topic provides an example on how to query the policies that are created for the access configuration `ac-00jhtfl8thteu6uj****`. The returned result shows that the access configuration contains one system policy and one inline policy.
     *
     * @param request - ListPermissionPoliciesInAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionPoliciesInAccessConfigurationResponse
     *
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->permissionPolicyType) {
            @$query['PermissionPolicyType'] = $request->permissionPolicyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionPoliciesInAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPermissionPoliciesInAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the policies that are created for an access configuration.
     *
     * @remarks
     * This topic provides an example on how to query the policies that are created for the access configuration `ac-00jhtfl8thteu6uj****`. The returned result shows that the access configuration contains one system policy and one inline policy.
     *
     * @param request - ListPermissionPoliciesInAccessConfigurationRequest
     *
     * @returns ListPermissionPoliciesInAccessConfigurationResponse
     *
     * @param ListPermissionPoliciesInAccessConfigurationRequest $request
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponse
     */
    public function listPermissionPoliciesInAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionPoliciesInAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries Cross-domain Identity Management (SCIM) credentials.
     *
     * @remarks
     * This topic provides an example on how to query the SCIM credentials within the `d-00fc2p61****` directory.
     *
     * @param request - ListSCIMServerCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSCIMServerCredentialsResponse
     *
     * @param ListSCIMServerCredentialsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSCIMServerCredentials',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSCIMServerCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Cross-domain Identity Management (SCIM) credentials.
     *
     * @remarks
     * This topic provides an example on how to query the SCIM credentials within the `d-00fc2p61****` directory.
     *
     * @param request - ListSCIMServerCredentialsRequest
     *
     * @returns ListSCIMServerCredentialsResponse
     *
     * @param ListSCIMServerCredentialsRequest $request
     *
     * @return ListSCIMServerCredentialsResponse
     */
    public function listSCIMServerCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSCIMServerCredentialsWithOptions($request, $runtime);
    }

    /**
     * Queries asynchronous tasks.
     *
     * @remarks
     * By default, this operation queries the tasks within the previous 24 hours. This operation allows you to query the tasks within a maximum of 7 days. You can specify the start time of the query by using `Filter`.
     * This topic provides an example on how to query the tasks within the previous 24 hours.
     *
     * @param request - ListTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
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

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries asynchronous tasks.
     *
     * @remarks
     * By default, this operation queries the tasks within the previous 24 hours. This operation allows you to query the tasks within a maximum of 7 days. You can specify the start time of the query by using `Filter`.
     * This topic provides an example on how to query the tasks within the previous 24 hours.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * Queries Resource Access Management (RAM) user provisioning events.
     *
     * @param request - ListUserProvisioningEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserProvisioningEventsResponse
     *
     * @param ListUserProvisioningEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserProvisioningEventsResponse
     */
    public function listUserProvisioningEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserProvisioningEvents',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserProvisioningEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Resource Access Management (RAM) user provisioning events.
     *
     * @param request - ListUserProvisioningEventsRequest
     *
     * @returns ListUserProvisioningEventsResponse
     *
     * @param ListUserProvisioningEventsRequest $request
     *
     * @return ListUserProvisioningEventsResponse
     */
    public function listUserProvisioningEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProvisioningEventsWithOptions($request, $runtime);
    }

    /**
     * Queries Resource Access Management (RAM) user provisionings.
     *
     * @param request - ListUserProvisioningsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserProvisioningsResponse
     *
     * @param ListUserProvisioningsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserProvisioningsResponse
     */
    public function listUserProvisioningsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->principalId) {
            @$query['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserProvisionings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserProvisioningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Resource Access Management (RAM) user provisionings.
     *
     * @param request - ListUserProvisioningsRequest
     *
     * @returns ListUserProvisioningsResponse
     *
     * @param ListUserProvisioningsRequest $request
     *
     * @return ListUserProvisioningsResponse
     */
    public function listUserProvisionings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProvisioningsWithOptions($request, $runtime);
    }

    /**
     * Queries users.
     *
     * @remarks
     * This topic provides an example on how to query users in the `d-00fc2p61****` directory. The returned result shows that the directory contains two users. The user `AliceLee` is synchronized from an external identity provider (IdP). The user `user1` is manually created within CloudSSO.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
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

        if (null !== $request->provisionType) {
            @$query['ProvisionType'] = $request->provisionType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2021-05-15',
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
     * Queries users.
     *
     * @remarks
     * This topic provides an example on how to query users in the `d-00fc2p61****` directory. The returned result shows that the directory contains two users. The user `AliceLee` is synchronized from an external identity provider (IdP). The user `user1` is manually created within CloudSSO.
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
     * Provisions an access configuration for an account in your resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to provision the access configuration `ac-00jhtfl8thteu6uj****` for the account `114240524784****` in your resource directory.
     *
     * @param request - ProvisionAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProvisionAccessConfigurationResponse
     *
     * @param ProvisionAccessConfigurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProvisionAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProvisionAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provisions an access configuration for an account in your resource directory.
     *
     * @remarks
     * When you call this operation, an asynchronous task is automatically created. You can call the [GetTask](https://help.aliyun.com/document_detail/340670.html) operation to query the progress of the task based on the value of the `TaskId` response parameter.
     * This topic provides an example on how to provision the access configuration `ac-00jhtfl8thteu6uj****` for the account `114240524784****` in your resource directory.
     *
     * @param request - ProvisionAccessConfigurationRequest
     *
     * @returns ProvisionAccessConfigurationResponse
     *
     * @param ProvisionAccessConfigurationRequest $request
     *
     * @return ProvisionAccessConfigurationResponse
     */
    public function provisionAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->provisionAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Removes a Security Assertion Markup Language (SAML) signing certificate.
     *
     * @remarks
     * This topic provides an example on how to remove the SAML signing certificate whose ID is `idp-c-00dt9gnl7fmjaw9c****`.
     *
     * @param request - RemoveExternalSAMLIdPCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveExternalSAMLIdPCertificateResponse
     *
     * @param RemoveExternalSAMLIdPCertificateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveExternalSAMLIdPCertificate',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveExternalSAMLIdPCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a Security Assertion Markup Language (SAML) signing certificate.
     *
     * @remarks
     * This topic provides an example on how to remove the SAML signing certificate whose ID is `idp-c-00dt9gnl7fmjaw9c****`.
     *
     * @param request - RemoveExternalSAMLIdPCertificateRequest
     *
     * @returns RemoveExternalSAMLIdPCertificateResponse
     *
     * @param RemoveExternalSAMLIdPCertificateRequest $request
     *
     * @return RemoveExternalSAMLIdPCertificateResponse
     */
    public function removeExternalSAMLIdPCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeExternalSAMLIdPCertificateWithOptions($request, $runtime);
    }

    /**
     * Removes a policy from an access configuration.
     *
     * @remarks
     * After you remove an inline policy from an access configuration, the policy cannot be restored.
     * This topic provides an example on how to remove the system policy `AliyunECSFullAccess` from the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - RemovePermissionPolicyFromAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePermissionPolicyFromAccessConfigurationResponse
     *
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->permissionPolicyName) {
            @$query['PermissionPolicyName'] = $request->permissionPolicyName;
        }

        if (null !== $request->permissionPolicyType) {
            @$query['PermissionPolicyType'] = $request->permissionPolicyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePermissionPolicyFromAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePermissionPolicyFromAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a policy from an access configuration.
     *
     * @remarks
     * After you remove an inline policy from an access configuration, the policy cannot be restored.
     * This topic provides an example on how to remove the system policy `AliyunECSFullAccess` from the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - RemovePermissionPolicyFromAccessConfigurationRequest
     *
     * @returns RemovePermissionPolicyFromAccessConfigurationResponse
     *
     * @param RemovePermissionPolicyFromAccessConfigurationRequest $request
     *
     * @return RemovePermissionPolicyFromAccessConfigurationResponse
     */
    public function removePermissionPolicyFromAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePermissionPolicyFromAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Removes a user from a group.
     *
     * @remarks
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot remove a user from a group that is synchronized by using SCIM.
     * This topic provides an example on how to remove the user `u-00q8wbq42wiltcrk****` from the group `g-00jqzghi2n3o5hkh****`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromGroup',
            'version' => '2021-05-15',
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
     * Removes a user from a group.
     *
     * @remarks
     * If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot remove a user from a group that is synchronized by using SCIM.
     * This topic provides an example on how to remove the user `u-00q8wbq42wiltcrk****` from the group `g-00jqzghi2n3o5hkh****`.
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
     * Resets the password of a user.
     *
     * @remarks
     * If a user forgets the password, the password expires, or the password poses security risks, a CloudSSO administrator can reset the password for the user.
     * >  After you enable single sign-on (SSO) logon, the password of a user cannot be reset.
     * This topic provides an example on how to reset the password of the user `u-00q8wbq42wiltcrk****`. The new password is automatically generated by the system.
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
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->generateRandomPassword) {
            @$query['GenerateRandomPassword'] = $request->generateRandomPassword;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->requirePasswordResetForNextLogin) {
            @$query['RequirePasswordResetForNextLogin'] = $request->requirePasswordResetForNextLogin;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2021-05-15',
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
     * Resets the password of a user.
     *
     * @remarks
     * If a user forgets the password, the password expires, or the password poses security risks, a CloudSSO administrator can reset the password for the user.
     * >  After you enable single sign-on (SSO) logon, the password of a user cannot be reset.
     * This topic provides an example on how to reset the password of the user `u-00q8wbq42wiltcrk****`. The new password is automatically generated by the system.
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
     * Retries a Resource Access Management (RAM) user provisioning event.
     *
     * @param request - RetryUserProvisioningEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryUserProvisioningEventResponse
     *
     * @param RetryUserProvisioningEventRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RetryUserProvisioningEventResponse
     */
    public function retryUserProvisioningEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->duplicationStrategy) {
            @$query['DuplicationStrategy'] = $request->duplicationStrategy;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryUserProvisioningEvent',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryUserProvisioningEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retries a Resource Access Management (RAM) user provisioning event.
     *
     * @param request - RetryUserProvisioningEventRequest
     *
     * @returns RetryUserProvisioningEventResponse
     *
     * @param RetryUserProvisioningEventRequest $request
     *
     * @return RetryUserProvisioningEventResponse
     */
    public function retryUserProvisioningEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryUserProvisioningEventWithOptions($request, $runtime);
    }

    /**
     * Configures a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is a service provider (SP), and the identity management system of an enterprise is an IdP.
     * You can use one of the following methods to configure a SAML IdP. You can obtain the required metadata file or parameter values from your IdP.
     * *   Use the metadata file: You can specify the `EncodedMetadataDocument` parameter to upload the metadata file.
     * *   Manually configure the IdP: You can manually specify the following parameters for your IdP: `EntityId`, `LoginUrl`, `WantRequestSigned`, and `X509Certificate`.
     * If you have configured a SAML IdP, the existing configurations are replaced after you call this operation.
     * *   If the IdP is configured by using the metadata file, all existing configurations are replaced with new configurations.
     * *   If the IdP is manually configured, the original parameter values that are different from the new parameter values are replaced.
     * >  If SSO logon is enabled, new configurations immediately take effect. Take note of the impacts on the production environment.
     * This topic provides an example on how to configure an IdP by using the metadata file within the directory `d-00fc2p61****`.
     *
     * @param request - SetExternalSAMLIdentityProviderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetExternalSAMLIdentityProviderResponse
     *
     * @param SetExternalSAMLIdentityProviderRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProviderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindingType) {
            @$query['BindingType'] = $request->bindingType;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->encodedMetadataDocument) {
            @$query['EncodedMetadataDocument'] = $request->encodedMetadataDocument;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->loginUrl) {
            @$query['LoginUrl'] = $request->loginUrl;
        }

        if (null !== $request->SSOStatus) {
            @$query['SSOStatus'] = $request->SSOStatus;
        }

        if (null !== $request->wantRequestSigned) {
            @$query['WantRequestSigned'] = $request->wantRequestSigned;
        }

        if (null !== $request->x509Certificate) {
            @$query['X509Certificate'] = $request->x509Certificate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetExternalSAMLIdentityProvider',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetExternalSAMLIdentityProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a Security Assertion Markup Language (SAML) identity provider (IdP).
     *
     * @remarks
     * During SAML 2.0-based single sign-on (SSO) logon, CloudSSO is a service provider (SP), and the identity management system of an enterprise is an IdP.
     * You can use one of the following methods to configure a SAML IdP. You can obtain the required metadata file or parameter values from your IdP.
     * *   Use the metadata file: You can specify the `EncodedMetadataDocument` parameter to upload the metadata file.
     * *   Manually configure the IdP: You can manually specify the following parameters for your IdP: `EntityId`, `LoginUrl`, `WantRequestSigned`, and `X509Certificate`.
     * If you have configured a SAML IdP, the existing configurations are replaced after you call this operation.
     * *   If the IdP is configured by using the metadata file, all existing configurations are replaced with new configurations.
     * *   If the IdP is manually configured, the original parameter values that are different from the new parameter values are replaced.
     * >  If SSO logon is enabled, new configurations immediately take effect. Take note of the impacts on the production environment.
     * This topic provides an example on how to configure an IdP by using the metadata file within the directory `d-00fc2p61****`.
     *
     * @param request - SetExternalSAMLIdentityProviderRequest
     *
     * @returns SetExternalSAMLIdentityProviderResponse
     *
     * @param SetExternalSAMLIdentityProviderRequest $request
     *
     * @return SetExternalSAMLIdentityProviderResponse
     */
    public function setExternalSAMLIdentityProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setExternalSAMLIdentityProviderWithOptions($request, $runtime);
    }

    /**
     * Configures the logon preference of CloudSSO users.
     *
     * @param request - SetLoginPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoginPreferenceResponse
     *
     * @param SetLoginPreferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetLoginPreferenceResponse
     */
    public function setLoginPreferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowUserToGetCredentials) {
            @$query['AllowUserToGetCredentials'] = $request->allowUserToGetCredentials;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->loginNetworkMasks) {
            @$query['LoginNetworkMasks'] = $request->loginNetworkMasks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoginPreference',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoginPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the logon preference of CloudSSO users.
     *
     * @param request - SetLoginPreferenceRequest
     *
     * @returns SetLoginPreferenceResponse
     *
     * @param SetLoginPreferenceRequest $request
     *
     * @return SetLoginPreferenceResponse
     */
    public function setLoginPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoginPreferenceWithOptions($request, $runtime);
    }

    /**
     * Enables or disables multi-factor authentication (MFA) for users in a directory.
     *
     * @remarks
     * If a CloudSSO administrator enables username-password logon for users, CloudSSO automatically enables MFA to improve security. The administrator can call this operation to enable or disable MFA based on the business requirements.
     * This topic provides an example on how to enable MFA for users.
     *
     * @param request - SetMFAAuthenticationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetMFAAuthenticationStatusResponse
     *
     * @param SetMFAAuthenticationStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->MFAAuthenticationStatus) {
            @$query['MFAAuthenticationStatus'] = $request->MFAAuthenticationStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetMFAAuthenticationStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetMFAAuthenticationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables multi-factor authentication (MFA) for users in a directory.
     *
     * @remarks
     * If a CloudSSO administrator enables username-password logon for users, CloudSSO automatically enables MFA to improve security. The administrator can call this operation to enable or disable MFA based on the business requirements.
     * This topic provides an example on how to enable MFA for users.
     *
     * @param request - SetMFAAuthenticationStatusRequest
     *
     * @returns SetMFAAuthenticationStatusResponse
     *
     * @param SetMFAAuthenticationStatusRequest $request
     *
     * @return SetMFAAuthenticationStatusResponse
     */
    public function setMFAAuthenticationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMFAAuthenticationStatusWithOptions($request, $runtime);
    }

    /**
     * Configures a password policy for CloudSSO users.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->maxLoginAttempts) {
            @$query['MaxLoginAttempts'] = $request->maxLoginAttempts;
        }

        if (null !== $request->maxPasswordAge) {
            @$query['MaxPasswordAge'] = $request->maxPasswordAge;
        }

        if (null !== $request->minPasswordDifferentChars) {
            @$query['MinPasswordDifferentChars'] = $request->minPasswordDifferentChars;
        }

        if (null !== $request->minPasswordLength) {
            @$query['MinPasswordLength'] = $request->minPasswordLength;
        }

        if (null !== $request->passwordNotContainUsername) {
            @$query['PasswordNotContainUsername'] = $request->passwordNotContainUsername;
        }

        if (null !== $request->passwordReusePrevention) {
            @$query['PasswordReusePrevention'] = $request->passwordReusePrevention;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetPasswordPolicy',
            'version' => '2021-05-15',
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
     * Configures a password policy for CloudSSO users.
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
     * Enables or disables System for Cross-domain Identity Management (SCIM) synchronization.
     *
     * @remarks
     * You can synchronize users or groups from an external identity provider (IdP) that supports SCIM 2.0 to CloudSSO only after SCIM synchronization is enabled. If you disable SCIM synchronization, you can no longer synchronize users or groups to CloudSSO. The following list describes the impacts after SCIM synchronization is enabled or disabled:
     * *   After you enable SCIM synchronization, you cannot modify or delete the users or groups that are synchronized to CloudSSO by using SCIM. In addition, you cannot add users to or remove users from the groups. However, you can change the passwords of the users and enable or disable the logon of the users.
     * *   After you disable SCIM synchronization, you can modify and delete the users and groups that are synchronized to CloudSSO by using SCIM. You can also add users to or remove users from the groups.
     * This topic provides an example on how to enable SCIM synchronization within the directory `d-00fc2p61****`.
     *
     * @param request - SetSCIMSynchronizationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSCIMSynchronizationStatusResponse
     *
     * @param SetSCIMSynchronizationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->SCIMSynchronizationStatus) {
            @$query['SCIMSynchronizationStatus'] = $request->SCIMSynchronizationStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSCIMSynchronizationStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSCIMSynchronizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables System for Cross-domain Identity Management (SCIM) synchronization.
     *
     * @remarks
     * You can synchronize users or groups from an external identity provider (IdP) that supports SCIM 2.0 to CloudSSO only after SCIM synchronization is enabled. If you disable SCIM synchronization, you can no longer synchronize users or groups to CloudSSO. The following list describes the impacts after SCIM synchronization is enabled or disabled:
     * *   After you enable SCIM synchronization, you cannot modify or delete the users or groups that are synchronized to CloudSSO by using SCIM. In addition, you cannot add users to or remove users from the groups. However, you can change the passwords of the users and enable or disable the logon of the users.
     * *   After you disable SCIM synchronization, you can modify and delete the users and groups that are synchronized to CloudSSO by using SCIM. You can also add users to or remove users from the groups.
     * This topic provides an example on how to enable SCIM synchronization within the directory `d-00fc2p61****`.
     *
     * @param request - SetSCIMSynchronizationStatusRequest
     *
     * @returns SetSCIMSynchronizationStatusResponse
     *
     * @param SetSCIMSynchronizationStatusRequest $request
     *
     * @return SetSCIMSynchronizationStatusResponse
     */
    public function setSCIMSynchronizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSCIMSynchronizationStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies information about an access configuration.
     *
     * @remarks
     * You can modify the `Description`, `SessionDuration`, and `RelayState` parameters for an access configuration.
     * This topic provides an example on how to change the initial web page in the access configuration `ac-00jhtfl8thteu6uj****` to `https://cloudsso.console.aliyun.com`.
     *
     * @param request - UpdateAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccessConfigurationResponse
     *
     * @param UpdateAccessConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAccessConfigurationResponse
     */
    public function updateAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newRelayState) {
            @$query['NewRelayState'] = $request->newRelayState;
        }

        if (null !== $request->newSessionDuration) {
            @$query['NewSessionDuration'] = $request->newSessionDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about an access configuration.
     *
     * @remarks
     * You can modify the `Description`, `SessionDuration`, and `RelayState` parameters for an access configuration.
     * This topic provides an example on how to change the initial web page in the access configuration `ac-00jhtfl8thteu6uj****` to `https://cloudsso.console.aliyun.com`.
     *
     * @param request - UpdateAccessConfigurationRequest
     *
     * @returns UpdateAccessConfigurationResponse
     *
     * @param UpdateAccessConfigurationRequest $request
     *
     * @return UpdateAccessConfigurationResponse
     */
    public function updateAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Changes the name of a directory.
     *
     * @remarks
     * After you change the name of a directory, the URL that is used to log on to the CloudSSO user portal is changed. You must notify the CloudSSO users of the correct URL.
     * This topic provides an example on how to change the name of a directory to `new-example`.
     *
     * @param request - UpdateDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDirectoryResponse
     *
     * @param UpdateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newDirectoryName) {
            @$query['NewDirectoryName'] = $request->newDirectoryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDirectory',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a directory.
     *
     * @remarks
     * After you change the name of a directory, the URL that is used to log on to the CloudSSO user portal is changed. You must notify the CloudSSO users of the correct URL.
     * This topic provides an example on how to change the name of a directory to `new-example`.
     *
     * @param request - UpdateDirectoryRequest
     *
     * @returns UpdateDirectoryResponse
     *
     * @param UpdateDirectoryRequest $request
     *
     * @return UpdateDirectoryResponse
     */
    public function updateDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDirectoryWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a group.
     *
     * @remarks
     * You can modify `GroupName` and `Description` for a group.
     * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify information about a group that is synchronized by using SCIM.
     * This topic provides an example on how to modify the name of the group `g-00jqzghi2n3o5hkh****` to `NewTestGroup`.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newGroupName) {
            @$query['NewGroupName'] = $request->newGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2021-05-15',
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
     * Modifies the information about a group.
     *
     * @remarks
     * You can modify `GroupName` and `Description` for a group.
     * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify information about a group that is synchronized by using SCIM.
     * This topic provides an example on how to modify the name of the group `g-00jqzghi2n3o5hkh****` to `NewTestGroup`.
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
     * Modifies an inline policy that is created for an access configuration.
     *
     * @remarks
     * This topic provides an example on how to modify an inline policy that is created for the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - UpdateInlinePolicyForAccessConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInlinePolicyForAccessConfigurationResponse
     *
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessConfigurationId) {
            @$query['AccessConfigurationId'] = $request->accessConfigurationId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->inlinePolicyName) {
            @$query['InlinePolicyName'] = $request->inlinePolicyName;
        }

        if (null !== $request->newInlinePolicyDocument) {
            @$query['NewInlinePolicyDocument'] = $request->newInlinePolicyDocument;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInlinePolicyForAccessConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInlinePolicyForAccessConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an inline policy that is created for an access configuration.
     *
     * @remarks
     * This topic provides an example on how to modify an inline policy that is created for the access configuration `ac-00jhtfl8thteu6uj****`.
     *
     * @param request - UpdateInlinePolicyForAccessConfigurationRequest
     *
     * @returns UpdateInlinePolicyForAccessConfigurationResponse
     *
     * @param UpdateInlinePolicyForAccessConfigurationRequest $request
     *
     * @return UpdateInlinePolicyForAccessConfigurationResponse
     */
    public function updateInlinePolicyForAccessConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInlinePolicyForAccessConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     * This topic provides an example on how to enable MFA for all CloudSSO users that belong to the directory named `d-00fc2p61****`.
     *
     * @param request - UpdateMFAAuthenticationSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMFAAuthenticationSettingsResponse
     *
     * @param UpdateMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->MFAAuthenticationSettings) {
            @$query['MFAAuthenticationSettings'] = $request->MFAAuthenticationSettings;
        }

        if (null !== $request->operationForRiskLogin) {
            @$query['OperationForRiskLogin'] = $request->operationForRiskLogin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMFAAuthenticationSettings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the multi-factor authentication (MFA) setting of all users.
     *
     * @remarks
     * If you enable username-password logon for CloudSSO users, you can also configure MFA for the users.
     * This topic provides an example on how to enable MFA for all CloudSSO users that belong to the directory named `d-00fc2p61****`.
     *
     * @param request - UpdateMFAAuthenticationSettingsRequest
     *
     * @returns UpdateMFAAuthenticationSettingsResponse
     *
     * @param UpdateMFAAuthenticationSettingsRequest $request
     *
     * @return UpdateMFAAuthenticationSettingsResponse
     */
    public function updateMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * This topic provides an example on how to disable the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`. After the SCIM credential is disabled, the synchronization task that uses the SCIM credential fails. You can call this operation again to enable the SCIM credential.
     *
     * @param request - UpdateSCIMServerCredentialStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSCIMServerCredentialStatusResponse
     *
     * @param UpdateSCIMServerCredentialStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credentialId) {
            @$query['CredentialId'] = $request->credentialId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newStatus) {
            @$query['NewStatus'] = $request->newStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSCIMServerCredentialStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSCIMServerCredentialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a System for Cross-domain Identity Management (SCIM) credential.
     *
     * @remarks
     * This topic provides an example on how to disable the SCIM credential whose ID is `scimcred-004whl0kvfwcypbi****`. After the SCIM credential is disabled, the synchronization task that uses the SCIM credential fails. You can call this operation again to enable the SCIM credential.
     *
     * @param request - UpdateSCIMServerCredentialStatusRequest
     *
     * @returns UpdateSCIMServerCredentialStatusResponse
     *
     * @param UpdateSCIMServerCredentialStatusRequest $request
     *
     * @return UpdateSCIMServerCredentialStatusResponse
     */
    public function updateSCIMServerCredentialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSCIMServerCredentialStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a user.
     *
     * @remarks
     * You can modify `FirstName`, `LastName`, `DisplayName`, `Email`, and `Description` for a user. You cannot modify `UserName` for a user.
     * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify information about a user that is synchronized by using SCIM.
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        if (null !== $request->newEmail) {
            @$query['NewEmail'] = $request->newEmail;
        }

        if (null !== $request->newFirstName) {
            @$query['NewFirstName'] = $request->newFirstName;
        }

        if (null !== $request->newLastName) {
            @$query['NewLastName'] = $request->newLastName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2021-05-15',
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
     * Modifies information about a user.
     *
     * @remarks
     * You can modify `FirstName`, `LastName`, `DisplayName`, `Email`, and `Description` for a user. You cannot modify `UserName` for a user.
     * >  If System for Cross-domain Identity Management (SCIM) synchronization is enabled, you cannot modify information about a user that is synchronized by using SCIM.
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

    /**
     * Modifies the multi-factor authentication (MFA) setting of a single user.
     *
     * @remarks
     * If you call the [UpdateMFAAuthenticationSettings](https://help.aliyun.com/document_detail/450134.html) operation to set the MFAAuthenticationSettings parameter to `Byuser`, user-specific settings are applied. Then, you must call the UpdateUserMFAAuthenticationSettings operation to configure MFA for each user.
     * By default, the MFAAuthenticationSettings parameter is set to `Enabled` for a new user.
     * This topic provides an example on how to enable MFA for the user named `u-00q8wbq42wiltcrk****`.
     *
     * @param request - UpdateUserMFAAuthenticationSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserMFAAuthenticationSettingsResponse
     *
     * @param UpdateUserMFAAuthenticationSettingsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userMFAAuthenticationSettings) {
            @$query['UserMFAAuthenticationSettings'] = $request->userMFAAuthenticationSettings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserMFAAuthenticationSettings',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserMFAAuthenticationSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the multi-factor authentication (MFA) setting of a single user.
     *
     * @remarks
     * If you call the [UpdateMFAAuthenticationSettings](https://help.aliyun.com/document_detail/450134.html) operation to set the MFAAuthenticationSettings parameter to `Byuser`, user-specific settings are applied. Then, you must call the UpdateUserMFAAuthenticationSettings operation to configure MFA for each user.
     * By default, the MFAAuthenticationSettings parameter is set to `Enabled` for a new user.
     * This topic provides an example on how to enable MFA for the user named `u-00q8wbq42wiltcrk****`.
     *
     * @param request - UpdateUserMFAAuthenticationSettingsRequest
     *
     * @returns UpdateUserMFAAuthenticationSettingsResponse
     *
     * @param UpdateUserMFAAuthenticationSettingsRequest $request
     *
     * @return UpdateUserMFAAuthenticationSettingsResponse
     */
    public function updateUserMFAAuthenticationSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserMFAAuthenticationSettingsWithOptions($request, $runtime);
    }

    /**
     * Modifies a Resource Access Management (RAM) user provisioning.
     *
     * @param request - UpdateUserProvisioningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserProvisioningResponse
     *
     * @param UpdateUserProvisioningRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserProvisioningResponse
     */
    public function updateUserProvisioningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newDeletionStrategy) {
            @$query['NewDeletionStrategy'] = $request->newDeletionStrategy;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newDuplicationStrategy) {
            @$query['NewDuplicationStrategy'] = $request->newDuplicationStrategy;
        }

        if (null !== $request->userProvisioningId) {
            @$query['UserProvisioningId'] = $request->userProvisioningId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserProvisioning',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserProvisioningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Resource Access Management (RAM) user provisioning.
     *
     * @param request - UpdateUserProvisioningRequest
     *
     * @returns UpdateUserProvisioningResponse
     *
     * @param UpdateUserProvisioningRequest $request
     *
     * @return UpdateUserProvisioningResponse
     */
    public function updateUserProvisioning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserProvisioningWithOptions($request, $runtime);
    }

    /**
     * Modifies the global configurations of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - UpdateUserProvisioningConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserProvisioningConfigurationResponse
     *
     * @param UpdateUserProvisioningConfigurationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateUserProvisioningConfigurationResponse
     */
    public function updateUserProvisioningConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newDefaultLandingPage) {
            @$query['NewDefaultLandingPage'] = $request->newDefaultLandingPage;
        }

        if (null !== $request->newSessionDuration) {
            @$query['NewSessionDuration'] = $request->newSessionDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserProvisioningConfiguration',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserProvisioningConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the global configurations of a Resource Access Management (RAM) user provisioning.
     *
     * @param request - UpdateUserProvisioningConfigurationRequest
     *
     * @returns UpdateUserProvisioningConfigurationResponse
     *
     * @param UpdateUserProvisioningConfigurationRequest $request
     *
     * @return UpdateUserProvisioningConfigurationResponse
     */
    public function updateUserProvisioningConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserProvisioningConfigurationWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a user.
     *
     * @remarks
     * This topic provides an example on how to change the status of the user whose ID is `u-00q8wbq42wiltcrk****` to Disabled. Users in the Disabled state cannot log on to the CloudSSO user portal.
     *
     * @param request - UpdateUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserStatusResponse
     *
     * @param UpdateUserStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateUserStatusResponse
     */
    public function updateUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->newStatus) {
            @$query['NewStatus'] = $request->newStatus;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserStatus',
            'version' => '2021-05-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a user.
     *
     * @remarks
     * This topic provides an example on how to change the status of the user whose ID is `u-00q8wbq42wiltcrk****` to Disabled. Users in the Disabled state cannot log on to the CloudSSO user portal.
     *
     * @param request - UpdateUserStatusRequest
     *
     * @returns UpdateUserStatusResponse
     *
     * @param UpdateUserStatusRequest $request
     *
     * @return UpdateUserStatusResponse
     */
    public function updateUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserStatusWithOptions($request, $runtime);
    }
}
